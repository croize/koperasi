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

Route::resource('katagori', 'KatagoriController');
Route::get('katagori/delete/{id}', 'KatagoriController@destroy');

Route::resource('detail', 'DetailController');
Route::get('detail/delete/{id}', 'DetailController@destroy');

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('404',function(){
  return view('404');
});
