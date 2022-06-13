<?php

namespace App\Http\Controllers;

use App\Models\AdView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdViewController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($id, Request $request)
    {
        $ad = AdView::select('id')->where(['ad_id' => $id, 'user_id' => $request->user_id])->first();

        if(!$ad) {
            $adview = AdView::create([
                'ad_id' => $id,
                'user_id' => $request->user_id,
                'count' => 1
            ]);

            return response(['status' => true, 'message' => 'Record added successfully.']);
        }

        $adview = $ad->update([
            'count' => DB::raw('count + 1')
        ]);

        if($adview) {
            return response(['status' => true, 'message' => 'Record added successfully.']);
        }

        return response(['status' => false, 'message' => 'Record could not be added.']);
    }

}
