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
Route::get('/Petugas', 'PetugasController@Homepage')->name('Index.petugas');
Route::get('/Petugas/TambahPetugas/','PetugasController@Create')->name('Tambah.petugas');
Route::get('/Petugas/EditPetugas/','PetugasController@EditPetugas')->name('Edit.petugas');
Route::get('/Petugas/DetailPetugas/','PetugasController@DetailPetugas')->name('Detail.petugas');


//RUTE
Route::get('/Rute', 'RuteController@Homepage')->name('Index.rute');
Route::get('/Rute/TambahRute', 'RuteController@TambahRute')->name('Tambah.rute');
Route::get('/Rute/EditRute', 'RuteController@EditRute')->name('Edit.rute');
Route::get('/Rute/DetailRute', 'RuteController@DetailRute')->name('Detail.rute');

//TRANSPORTASI
Route::get('/Transportasi', 'TransportasiController@Homepage')->name('Index.transportasi');
Route::get('/Transportasi/TambahTransportasi', 'TransportasiController@TambahTransportasi')->name('Tambah.transportasi');
Route::get('/Transportasi/EditTransportasi', 'TransportasiController@EditTransportasi')->name('Edit.transportasi');
Route::get('/Transportasi/DetailTransportasi/','TransportasiController@DetailTransportasi')->name('Detail.transportasi');

//PENUMPANG
Route::get('/Penumpang', 'PenumpangController@Homepage')->name('Index.penumpang');
Route::get('/Penumpang/TambahPenumpang', 'PenumpangController@TambahPenumpang')->name('Tambah.penumpang');
Route::get('/Penumpang/EditPenumpang', 'PenumpangController@EditPenumpang')->name('Edit.penumpang');
Route::get('/Penumpang/DetailPenumpang', 'PenumpangController@DetailPenumpang')->name('Detail.penumpang');

//LEVEL
Route::get('/Level', 'LevelController@Homepage')->name('Index.level');
Route::get('/Level/TambahLevel', 'LevelController@TambahLevel')->name('Tambah.level');
Route::get('/Level/EditLevel', 'LevelController@EditLevel')->name('Edit.level');
Route::get('/Level/DetailLevel', 'LevelController@DetailLevel')->name('Detail.level');


//type TRANSPORTASI
Route::get('/TypeTransportasi', 'TypeTransportasiController@Homepage')->name('Index.type');
Route::get('/TypeTransportasi/TambahTypeTransportasi', 'TypeTransportasiController@TambahTypeTransportasi')->name('Tambah.type');

Route::get('/TypeTransportasi/EditTypeTransportasi', 'TypeTransportasiController@EditTypeTransportasi')->name('Edit.type');

Route::get('/TypeTransportasi/DetailTypeTransportasi', 'TypeTransportasiController@DetailTypeTransportasi')->name('Detail.type');






