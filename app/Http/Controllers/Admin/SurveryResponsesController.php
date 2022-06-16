<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SurveyFilled;
use Illuminate\Http\Request;

class SurveryResponsesController extends Controller
{
    //
    public function index() {
        $survey_responses = SurveyFilled::select('question_id', 'user_id', 'survey_id', 'option')
            ->with('question', function ($q) {
                $q->select('id', 'question');
            })
            ->with('user', function ($q) {
                $q->select('id', 'name', 'email');
            })
            ->with('survey', function ($q) {
                $q->select('id', 'title');
            })
            ->latest()
//            ->where('created_at', '>', now()->subDays(30)->endOfDay())
            ->get();
//dd($survey_responses);
        return view('admin.pages.survey-stats', compact('survey_responses'));
    }

    public function getLastThirtyDaysRecord() {

    }

//    public function get
}
