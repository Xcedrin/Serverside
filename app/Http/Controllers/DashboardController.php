<?php

namespace App\Http\Controllers;

use App\Models\UserStats;
use Illuminate\Http\Request;

class DashboardController extends Controller
{

    public function index() {

        $user_stats = UserStats::select('name', 'email', 'location', 'datetime')->orderBy('datetime', 'desc')->get();

        return view('admin.pages.dashboard', compact('user_stats'));
    }
}
