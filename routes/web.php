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

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::middleware('auth')->group (function () {
	 	Route::resources([
		'kk'=>'KepalaKeluargaController',
		'warga'=>'WargaController',
		'kas'=>'KasController',
		'supply'=>'SupplyController',
		'rtrw'=>'RtRwController',
		'sumbangan'=>'SumbanganController',
		'laporan'=>'LaporanController',
		'keperluan'=>'KeperluanDesaController',
		]);
});


