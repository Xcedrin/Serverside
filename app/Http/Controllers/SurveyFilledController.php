<?php

namespace App\Http\Controllers;

use App\Http\Requests\SurveyFilledRequest;
use App\Models\SurveyFilled;

class SurveyFilledController extends Controller
{
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(SurveyFilledRequest $request)
    {
        $survey_filled = SurveyFilled::create([
            'user_id' => $request->user_id,
            'question_id' => $request->question_id,
            'survey_id' => $request->survey_id,
            'option' => $request->option
        ]);

        if($survey_filled) {
            return response(['status' => true, 'message' => 'Record inserted successfully.']);
        }

        return response(['status' => false, 'message' => 'Record could not be inserted.']);
    }

}
