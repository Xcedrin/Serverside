<?php

use App\Http\Controllers\Admin\ChangePasswordController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\LoginController;
use App\Http\Controllers\Admin\SurveyResponsesController;
use App\Http\Controllers\Admin\VideoPlayingStatsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\ForgotPasswordController;
use App\Http\Controllers\Admin\ResetPasswordController;
use App\Http\Controllers\Admin\UserStatsController;
use App\Http\Controllers\SurveyController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [DashboardController::class, 'index'])->middleware('auth');

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::view('/login','admin.pages.auth.auth')->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
        Route::view('/forgot-password', 'admin.pages.auth.forgot')->name('admin.password.request');
        Route::post('/forgot-password', [ForgotPasswordController::class, 'send'])->name('admin.password.email');
        Route::get('/reset-password/{token}', function ($token) {
            return view('admin.pages.auth.reset-password', ['token' => $token]);
        })->middleware('guest')->name('password.reset');
        Route::post('/reset-password', [ResetPasswordController::class, 'reset'])->name('admin.password.update');
    });

    Route::group(['middleware' => 'auth'], function () {
        // dashboard routes
        Route::get('dashboard', [DashboardController::class, 'index']);
        Route::get('/', [DashboardController::class, 'index']);

        // survey stats routes
        Route::get('survey', [SurveyController::class, 'index']);
        Route::get('/survey-stats/{question}/{start_date?}/{end_date?}', [SurveyResponsesController::class, 'index']);

        // video playing stats
        Route::get('videos', [VideoPlayingStatsController::class, 'getAll']);
        Route::get('/video-stats/{video}/{start_date?}/{end_date?}', [VideoPlayingStatsController::class, 'index']);

        // user stats
        Route::get('/user-stats', [UserStatsController::class, 'index']);

        // user profile
        Route::view('/profile', 'admin.pages.profile');
        // change password
        Route::post('/change-password', [ChangePasswordController::class, 'update']);

        // logout route
        Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    });

});
