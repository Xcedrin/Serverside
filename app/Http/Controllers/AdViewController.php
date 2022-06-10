<?php

namespace App\Http\Controllers;

use App\Models\AdView;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class AdViewController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        $adview = AdView::updateOrInsert([
            'ad_id' => $request->ad_id,
            'user_id' => $request->user_id,
            'count' => 1
        ], [
            'count' => DB::raw('count + 1')
        ]);

        if($adview) {
            return response(['status' => true, 'message' => 'Record added successfully.']);
        }

        return response(['status' => false, 'message' => 'Record could not be added.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\AdView  $adView
     * @return \Illuminate\Http\Response
     */
    public function show(AdView $adView)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AdView  $adView
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, AdView $adView)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AdView  $adView
     * @return \Illuminate\Http\Response
     */
    public function destroy(AdView $adView)
    {
        //
    }
}
