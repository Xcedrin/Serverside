<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\QuestionController;
use App\Http\Controllers\SurveyFilledController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\AdViewController;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

/*Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});*/

Route::post('/login', [UserController::class, 'login']);

Route::get('/ad/{id}', function($id) {
    return response(['status' => true, 'data' => url('/' . $id . '.mp4')]);
});

Route::post('/ad/{id}', [AdViewController::class, 'store']);

Route::get('/survey-questions/{id}', [QuestionController::class, 'show']);
Route::post('/survey-filled', [SurveyFilledController::class, 'store']);
