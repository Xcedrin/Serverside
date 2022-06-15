<?php

namespace App\Http\Controllers;

use App\Models\AdView;
use App\Models\SurveyFilled;
use App\Models\UserStats;

class DashboardController extends Controller
{

    public function index() {

        $user_stats = UserStats::select('name', 'email', 'location', 'datetime')
            ->orderBy('datetime', 'desc')
            ->limit(5)
            ->get();

        $ad_view_stats = AdView::select('user_id', 'ad_id', 'count')
            ->with('user')
            ->orderBy('updated_at', 'desc')
            ->limit(5)
            ->get();

        $survey_filled_stats = SurveyFilled::select('user_id', 'question_id', 'option')
            ->with('user')
            ->with('question')
            ->orderBy('updated_at', 'desc')
            ->limit(5)
            ->get();

        return view('admin.pages.dashboard', compact('user_stats', 'ad_view_stats', 'survey_filled_stats'));
    }
}
