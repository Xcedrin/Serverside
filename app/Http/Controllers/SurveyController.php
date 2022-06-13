<?php

namespace App\Http\Controllers;

use App\Models\Survey;
use Illuminate\Http\Request;
use App\Models\Question;

class SurveyController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Survey  $survey
     * @return \Illuminate\Http\Response
     */
    public function show($survey)
    {
        $questions = Question::where('survey_id', $survey)->get();

        if($questions->count() > 0) {
            return response(['status' => true, 'data' => $questions]);
        }

        return response(['status' => false, 'message' => 'No result found']);

    }

}
