<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SurveyFilled;

class SurveyResponsesController extends Controller
{
    public function index($question, $start_date = '', $end_date = '') {
        $survey_object = SurveyFilled::select('question_id', 'user_id', 'survey_id', 'option', 'created_at')
            /*->with('question', function ($q) {
                $q->select('id', 'question');
            })*/
            ->with('user', function ($q) {
                $q->select('id', 'name', 'email');
            })
            /*->with('survey', function ($q) {
                $q->select('id', 'title');
            })*/
            ->where('question_id', $question)
            ->latest();

        if($start_date && $end_date) {
            $survey_object->whereBetween('created_at', [$start_date, $end_date]);
        } else {
//            $survey_object->where('created_at', '>', now()->subDays(30)->endOfDay());
        }

        $survey_responses = $survey_object->get();
//dd($survey_responses);
        return view('admin.pages.survey-stats', compact('survey_responses'));
    }

}
