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
Route::resource('petugas', 'PetugasController');
Route::get('petugas/delete/{id}', 'PetugasController@destroy');

Route::resource('anggota', 'AnggotaController');
Route::get('anggota/delete/{id}', 'AnggotaController@destroy');

Route::resource('simpanan', 'SimpananController');
Route::get('simpanan/delete/{id}', 'SimpananController@destroy');

Route::resource('pinjaman', 'PinjamanController');
Route::get('pinjaman/delete/{id}', 'PinjamanController@destroy');

Route::resource('angsuran', 'AngsuranController');
Route::get('angsuran/delete/{id}', 'AngsuranController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
