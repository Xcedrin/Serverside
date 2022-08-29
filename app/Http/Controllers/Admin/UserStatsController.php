<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\UserStats;

class UserStatsController extends Controller
{
    //
    public function index() {
        $user_stats = UserStats::select('name', 'email', 'location', 'datetime', 'created_at')
            ->orderBy('datetime', 'desc')
//            ->limit(5)
            ->get();

        return view('admin.pages.user-stats', compact('user_stats'));
    }
}
