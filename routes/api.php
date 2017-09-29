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

Route::get('/ktp', 'KtpController@getKtpData');
Route::get('/kk', 'KartuKeluargaController@getKartuKeluargaData');
Route::get('/legalisir', 'LegalisirController@getLegalisirData');
Route::get('/pindahdatang', 'PindahDatangController@getPindahDatangData');
Route::get('/pindahkeluar', 'PindahKeluarController@getPindahKeluarData');
Route::get('/users', 'UserController@getUserData');
Route::get('/log', 'LogController@getLogData');