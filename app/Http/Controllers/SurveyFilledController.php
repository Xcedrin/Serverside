<?php

namespace App\Http\Controllers;

use App\Models\SurveyFilled;
use Illuminate\Http\Request;

class SurveyFilledController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store($question, Request $request)
    {
        //
        $survey_filled = SurveyFilled::create([
            'user_id' => $request->user_id,
            'question_id' => $question,
            'option' => $request->option
        ]);

        if($survey_filled) {
            return response(['status' => true, 'message' => 'Record inserted successfully.']);
        }

        return response(['status' => false, 'message' => 'Record could not be inserted.']);
    }

}
