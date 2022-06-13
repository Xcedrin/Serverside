<?php

namespace App\Http\Controllers;

use App\Models\Question;
use Illuminate\Http\Request;

class QuestionController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Question  $question
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
