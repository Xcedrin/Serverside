<?php

namespace App\Http\Controllers;

use App\Models\SurveyFilled;
use Illuminate\Http\Request;

class SurveyFilledController extends Controller
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
        $survey_filled = SurveyFilled::create([
            'user_id' => $request->user_id,
            'question_id' => $request->question_id,
            'option' => $request->option
        ]);

        if($survey_filled) {
            return response(['status' => true, 'message' => 'Record inserted successfully.']);
        }

        return response(['status' => false, 'message' => 'Record could not be inserted.']);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\SurveyFilled  $surveyFilled
     * @return \Illuminate\Http\Response
     */
    public function show(SurveyFilled $surveyFilled)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\SurveyFilled  $surveyFilled
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, SurveyFilled $surveyFilled)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\SurveyFilled  $surveyFilled
     * @return \Illuminate\Http\Response
     */
    public function destroy(SurveyFilled $surveyFilled)
    {
        //
    }
}
