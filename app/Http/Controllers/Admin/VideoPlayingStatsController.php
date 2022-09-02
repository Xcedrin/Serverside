<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AdView;
use Illuminate\Http\Request;

class VideoPlayingStatsController extends Controller
{
    //
    public function index($video, $start_date = '', $end_date = '') {
        $ad_view_object = AdView::select('user_id', 'ad_id', 'count', 'created_at')->with('user')->latest();

        if($start_date && $end_date) {
            $ad_view_object->whereBetween('created_at', [$start_date, $end_date]);
        } else {
//            $ad_view_object->where('created_at', '>', now()->subDays(30)->endOfDay());
        }

        $video_playing_stats = $ad_view_object->where('ad_id', $video)->get();
//dd($video_playing_stats);
        return view('admin.pages.video-playing-stats', compact('video_playing_stats'));
    }

    public function getAll() {
        $videos = [
            [
                'title' => 'Coca Cola',
                'video' => 1
            ],
            [
                'title' => 'McDonalds',
                'video' => 2
            ],
            [
                'title' => 'Lowe\'s',
                'video' => 3
            ],
            [
                'title' => 'Dunkin Donuts',
                'video' => 4
            ],
            [
                'title' => 'Verizon',
                'video' => 5
            ],
            [
                'title' => 'Nike',
                'video' => 6
            ],

        ];

        return view('admin.pages.videos', compact('videos'));
    }
}
