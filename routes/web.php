<?php

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

Route::get('/', 'UserController@showLoginForm')->middleware('guest');
Route::post('/', 'UserController@login');

Route::group(['prefix' => 'dashboard', 'middleware' => 'is.logged.in'], function() {

    Route::get('/', 'DashboardController@index');
	Route::get('/logout', 'UserController@logout');

	Route::resource('ktp', 'KtpController');
	Route::resource('kk', 'KartuKeluargaController');
	Route::resource('legalisir', 'LegalisirController');
	Route::resource('pindahdatang', 'PindahDatangController');
	Route::resource('pindahkeluar', 'PindahKeluarController');

	Route::resource('users', 'UserController');
	Route::resource('log', 'LogController');

	Route::post('/truncatelog', 'LogController@destroyAll');

	Route::get('/reports/ktp/filter', 'KtpController@generateKtpReports');
	Route::get('/reports/kk/filter', 'KartuKeluargaController@generateKartuKeluargaReports');
	Route::get('/reports/legalisir/filter', 'LegalisirController@generateLegalisirReports');
	Route::get('/reports/pindahdatang/filter', 'PindahDatangController@generatePindahDatangReports');
	Route::get('/reports/pindahkeluar/filter', 'PindahKeluarController@generatePindahKeluarReports');

	Route::get('/archive/ktp/date', 'KtpController@generateKtpArchives');
	Route::get('/archive/kk/date', 'KartuKeluargaController@generateKartuKeluargaArchives');
	Route::get('/archive/legalisir/date', 'LegalisirController@generateLegalisirArchives');
	Route::get('/archive/pindahdatang/date', 'PindahDatangController@generatePindahDatangArchives');
	Route::get('/archive/pindahkeluar/date', 'PindahKeluarController@generatePindahKeluarArchives');

	Route::get('/resi/ktp', 'KtpController@cetakResiKtp');
	Route::get('/resi/kk', 'KartuKeluargaController@cetakResiKartuKeluarga');

	Route::get('/rekap', 'DashboardController@cetakRekap');
	
});
