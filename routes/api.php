<?php

use Illuminate\Http\Request;

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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('/access/token', 'App\Http\Controllers\MpesaController@generateAccessToken');
Route::post('/stk/push', 'App\Http\Controllers\MpesaController@customerMpesaSTKPush');
Route::post('/validation', 'App\Http\Controllers\MpesaController@mpesaValidation');
Route::post('/transaction/confirmation', 'App\Http\Controllers\MpesaController@mpesaConfirmation');