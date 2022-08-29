<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdView;
use App\Models\SurveyFilled;
use App\Models\UserStats;

class DashboardController extends Controller
{

    public function index() {

        $user_stats = UserStats::select('name', 'email', 'location', 'datetime', 'created_at')
            ->orderBy('datetime', 'desc')
            ->limit(5)
            ->get();

        $ad_view_stats = AdView::select('user_id', 'ad_id', 'count', 'created_at')
            ->with('user')
            ->orderBy('updated_at', 'desc')
            ->limit(5)
            ->get();

        $survey_filled_stats = SurveyFilled::select('user_id', 'question_id', 'survey_id', 'option', 'created_at')
            ->with('user')
            ->with('question')
            ->with('survey', function ($q) {
                $q->select('id', 'title');
            })
            ->latest()
            ->limit(5)
            ->get();

        return view('admin.pages.dashboard', compact('user_stats', 'ad_view_stats', 'survey_filled_stats'));
    }
}
