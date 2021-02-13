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

Route::get('/', function () {
    return view('welcome');

    
});
Route::get('/User/', 'UserController@Homepage')->name('Homepage');
//INI MERUPAKAN ROUTE UNTUK USER, UNTUK MENGARAHKAN KE LOGIN
Route::get('/User/Login', 'UserController@Login')->name('Login');
// ROUTE USER YANG MENGARAHKAN UNTUK KE REGISTER
Route::get('/User/Register', 'UserController@Register')->name('Register');
Route::get('/User/Dashboard', 'UserController@CekLoginPetugas')->name('Dashboard');

//Petugas
Route::get('/Petugas', 'PetugasController@Homepage')->name('Index.Petugas');
Route::get('/Petugas/TambahPetugas/','PetugasController@Create')->name('Tambah.Petugas');
Route::get('/Petugas/EditPetugas/','PetugasController@EditPetugas')->name('Edit.Petugas');
Route::get('/Petugas/DetailPetugas/','PetugasController@DetailPetugas')->name('Detail.Petugas');


//RUTE
Route::get('/Rute', 'RuteController@Homepage')->name('Index.Rute');
Route::get('/Rute/TambahRute', 'RuteController@TambahRute')->name('Tambah.Rute');
Route::get('/Rute/EditRute', 'RuteController@EditRute')->name('Tambah.Rute');
Route::get('/Rute/DetailRute', 'RuteController@DetailRute')->name('Detail.Rute');

//TRANSPORTASI
Route::get('/Transportasi', 'TransportasiController@Homepage')->name('');
Route::get('/Transportasi/TambahTransportasi', 'TransportasiController@TambahTransportasi')->name('');
Route::get('/Transportasi/EditTransportasi', 'TransportasiController@EditTransportasi')->name('');
Route::get('/Transportasi/DetailTransportasi/','TransportasiController@DetailTransportasi')->name('Detail.Petugas');

//PENUMPANG
Route::get('/Penumpang', 'PenumpangController@Homepage')->name('');
Route::get('/Penumpang/TambahPenumpang', 'PenumpangController@TambahPenumpang')->name('');
Route::get('/Penumpang/EditPenumpang', 'PenumpangController@EditPenumpang')->name('');
Route::get('/Penumpang/DetailPenumpang', 'PenumpangController@DetailPenumpang')->name('');

//LEVEL
Route::get('/Level', 'LevelController@Homepage')->name('');
Route::get('/Level/TambahLevel', 'LevelController@TambahLevel')->name('');
Route::get('/Level/EditLevel', 'LevelController@EditLevel')->name('');
Route::get('/Level/DetailLevel', 'LevelController@DetailLevel')->name('');


//type TRANSPORTASI
Route::get('/TypeTransportasi', 'TypeTransportasiController@Homepage')->name('');
Route::get('/TypeTransportasi/TambahTypeTransportasi', 'TypeTransportasiController@TambahTypeTransportasi')->name('');

Route::get('/TypeTransportasi/EditTypeTransportasi', 'TypeTransportasiController@EditTypeTransportasi')->name('');

Route::get('/TypeTransportasi/DetailTypeTransportasi', 'TypeTransportasiController@DetailTypeTransportasi')->name('');






