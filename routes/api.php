<?php

use App\Http\Controllers\Api\AuthApiController;
use App\Http\Controllers\Api\UserApiController;
use Illuminate\Support\Facades\Route;

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

Route::prefix('v1')->group(function () {

    Route::controller(AuthApiController::class)->prefix('auth')->group(function () {
        Route::post('','authenticate');
        Route::post('me','getAuthenticatedUser')->middleware('jwt.verify');
        Route::post('resset', 'resetPassword');
        Route::post('validate-code', 'validateCodeResset');
        Route::post('resset-update', 'updatePasswordResset');
    });
    
    Route::controller(UserApiController::class)->prefix('user')->group(function () {
        Route::post('create','register');
    });

});

