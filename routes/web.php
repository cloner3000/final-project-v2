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

	Route::post('/reports/ktp/date', 'KtpController@displayReportsByDate');
	Route::post('/reports/ktp/kelurahan', 'KtpController@displayReportsByKelurahan');

	Route::post('/reports/kk/date', 'KartuKeluargaController@displayReportsByDate');
	Route::post('/reports/kk/kelurahan', 'KartuKeluargaController@displayReportsByKelurahan');

	Route::post('/reports/legalisir/date', 'LegalisirController@displayReportsByDate');
	Route::post('/reports/legalisir/kelurahan', 'LegalisirController@displayReportsByKelurahan');

	Route::post('/reports/pindahdatang/date', 'PindahDatangController@displayReportsByDate');
	Route::post('/reports/pindahdatang/kelurahan', 'PindahDatangController@displayReportsByKelurahan');

	Route::post('/reports/pindahkeluar/date', 'PindahKeluarController@displayReportsByDate');
	Route::post('/reports/pindahkeluar/kelurahan', 'PindahKeluarController@displayReportsByKelurahan');

	Route::post('/resi/ktp', 'KtpController@cetakResiKtp');
	Route::post('/resi/kk', 'KartuKeluargaController@cetakResiKartuKeluarga');
});
