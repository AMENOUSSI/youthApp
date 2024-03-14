<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\V1\GuestController;
use App\Http\Controllers\Api\V1\MemberController;
use App\Http\Controllers\Api\V1\ActivityController;
use App\Http\Controllers\Api\V1\CommissionController;
use App\Http\Controllers\Api\V1\ParticipantController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix'=> 'v1', 'namespace' => 'App\Http\Controllers\Api\V1'], function (){
    Route::apiResource('activities', ActivityController::class);
    Route::apiResource('members', MemberController::class);
    Route::apiResource('guests', GuestController::class);
    Route::apiResource('commissions', CommissionController::class);
    Route::apiResource('participants', ParticipantController::class);
});

