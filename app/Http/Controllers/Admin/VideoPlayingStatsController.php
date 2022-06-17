<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdView;
use Illuminate\Http\Request;

class VideoPlayingStatsController extends Controller
{
    //
    public function index($start_date = '', $end_date = '') {
        $ad_view_object = AdView::select('user_id', 'ad_id', 'count')->with('user')->latest();

        if($start_date && $end_date) {
            $ad_view_object->whereBetween('created_at', [$start_date, $end_date]);
        } else {
            $ad_view_object->where('created_at', '>', now()->subDays(30)->endOfDay());
        }

        $video_playing_stats = $ad_view_object->get();
//dd($video_playing_stats);
        return view('admin.pages.video-playing-stats', compact('video_playing_stats'));
    }
}
