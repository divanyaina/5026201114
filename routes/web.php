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

Route::get('praktikum1', function () {
    return view('prak1web');
});

Route::get('tugasempat', function () {
    return view('tugas4');
});

Route::get('praktikum2','ViewController@showPraktikum2');

Route::get('ets','ViewController@showETS');

Route::get('form','ViewController@showForm');
Route::post('process','ViewController@funcProcess');

//route CRUD Pegawai
Route::get('/pegawai','PegawaiController@index');
Route::get('/pegawai/tambah','PegawaiController@tambah');
Route::post('/pegawai/store','PegawaiController@store');
Route::get('/pegawai/edit/{id}','PegawaiController@edit');
Route::post('/pegawai/update','PegawaiController@update');
Route::get('/pegawai/hapus/{id}','PegawaiController@hapus');
Route::get('/pegawai/cari','PegawaiController@cari');
Route::get('/pegawai/detail/{id}','PegawaiController@view');

//route CRUD Mutasi
Route::get('/mutasi','MutasiController@index');
Route::get('/mutasi/tambah','MutasiController@tambah');
Route::post('/mutasi/store','MutasiController@store');
Route::get('/mutasi/edit/{id}','MutasiController@edit');
Route::post('/mutasi/update','MutasiController@update');
Route::get('/mutasi/hapus/{id}','MutasiController@hapus');
Route::get('/mutasi/cari','MutasiController@cari');

//route CRUD Absen
Route::get('/absen','AbsenController@index');
Route::get('/absen/tambah','AbsenController@tambah');
Route::post('/absen/store','AbsenController@store');
Route::get('/absen/edit/{id}','AbsenController@edit');
Route::post('/absen/update','AbsenController@update');
Route::get('/absen/hapus/{id}','AbsenController@hapus');
Route::get('/absen/cari','AbsenController@cari');

//route CRUD Buku
Route::get('/buku','BukuController@index');
Route::get('/buku/tambah','BukuController@tambah');
Route::post('/buku/store','BukuController@store');
Route::get('/buku/edit/{id}','BukuController@edit');
Route::post('/buku/update','BukuController@update');
Route::get('/buku/hapus/{id}','BukuController@hapus');
Route::get('/buku/cari','BukuController@cari');
Route::get('/buku/detail/{id}','BukuController@view');
