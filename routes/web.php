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

Route::get('/','MahasiswaController@index')->name('mahasiswa');
Route::get('/tambah','MahasiswaController@tambah')->name('mahasiswa.tambah');
Route::post('/tambah','MahasiswaController@do_tambah')->name('mahasiswa.tambah');
Route::get('/tambah/edit/{id}','MahasiswaController@edit')->name('mahasiswa.edit');
Route::put('/tambah/edit/{id}','MahasiswaController@doedit')->name('mahasiswa.edit');
Route::get('/tambah/hapus/{id}','MahasiswaController@hapus')->name('mahasiswa.hapus');
