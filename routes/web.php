<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Admin\SurveryResponsesController;

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

Route::group(['prefix' => 'admin'], function () {
    Route::group(['middleware' => 'guest'], function () {
        Route::view('/login','admin.pages.auth.auth')->name('login');
        Route::post('/login', [LoginController::class, 'login'])->name('admin.login');
        Route::view('/forgot', 'admin.pages.auth.forgot')->name('admin.forgot');
        Route::post('/reset-password/{token}', function () {})->name('admin.reset-password');
    });

    Route::group(['middleware' => 'auth'], function () {
        // dashboard routes
        Route::get('dashboard', [DashboardController::class, 'index']);
        Route::get('/', [DashboardController::class, 'index']);

        // survey stats routes
        Route::get('/survey-stats', [SurveryResponsesController::class, 'index']);

        // logout route
        Route::get('logout', [LoginController::class, 'logout'])->name('admin.logout');
    });

});
