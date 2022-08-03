<?php

use Illuminate\Support\Facades\Route;

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


Auth::routes([
    // 'register'=>false,
]
);
Route::post('/login', 'Auth\LoginController@login')->middleware('status');

    // Tulis routemu di sini.
    // Route::get('/pegawaidashboard', 'PegawaiController@index')->name('adminpage');
    // Route::get('/pegawaipermohonan', 'PegawaiController@permohonan');

Route::resource('/adminpermohonan', 'permohonanController');
Route::get('/home', 'HomeController@index')->name('home');
Route::get('/print/{id}', 'PegawaiController@cetakpermohonan')->name('print');
// Route::get('/adminpermohonan', 'HomeController@permohonan');
Route::get('/adminlaporan', 'PermohonanController@laporan');
Route::get('/pegawaidashboard', 'PegawaiController@index')->name('adminpage');
Route::get('/pegawaiprofil', 'PegawaiController@profil');
Route::put('pegawaiprofil/{id}','PegawaiController@update')->name('profil.update');
Route::get('/pegawaipermohonan', 'PegawaiController@permohonan')->name('pegawai.permohonan');
Route::post('/pegawaipermohonan', 'PegawaiController@tambahpermohonan')->name('pegawai.tambahpermohonan');
Route::get('/pegawaidashboard', 'PegawaiController@dashboard');
Route::get('/pegawairiwayat', 'PegawaiController@riwayat');
route::resource('/adminpegawai','MenuPegawaiController');
route::get('/cetak','MenuPegawaiController@cetak');
route::GET('/adminriwayat/{id}','MenuPegawaiController@riwayat')->name('admin.riwayat');
Route::get('admin/login', 'Auth\AdminAuthController@getLogin')->name('admin.login');
Route::post('admin/login', 'Auth\AdminAuthController@postLogin');

