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
//ROUTE UNTUK MEMPROSES LOGIN
Route::post('/User/ProsesLogin', 'UserController@ProsesLogin')->name('Proses.Login');
// ROUTE USER YANG MENGARAHKAN UNTUK KE REGISTER
Route::get('/User/Register', 'UserController@Register')->name('Register');
//ROUTE UNTUK MEMPROSES REGISTER
Route::post('/User/ProsesRegister', 'UserController@ProsesRegister')->name('Proses.Register');

//Petugas
Route::get('/Petugas', 'PetugasController@Homepage')->name('Index.petugas');
Route::get('/Petugas/TambahPetugas/','PetugasController@Create')->name('Tambah.petugas');
Route::post('/Petugas/ProsesTambahPetugas/','PetugasController@store')->name('Proses.petugas');
Route::get('/Petugas/EditPetugas/{id}','PetugasController@EditPetugas')->name('Edit.petugas');
Route::patch('/Petugas/ProsesEditPetugas/{id}','PetugasController@Update')->name('ProsesEdit.petugas');
Route::get('/Petugas/DetailPetugas/{id}','PetugasController@DetailPetugas')->name('Detail.petugas');
Route::DELETE('/Petugas/{id}', 'PetugasController@Destroy');



//RUTE
Route::get('/Rute', 'RuteController@Homepage')->name('Index.rute');
Route::get('/Rute/TambahRute', 'RuteController@TambahRute')->name('Tambah.rute');
Route::post('/Rute/ProsesTambahRute', 'RuteController@store')->name('ProsesTambah.rute');
Route::get('/Rute/EditRute/{id}', 'RuteController@EditRute')->name('Edit.rute');
Route::patch('/Rute/EditRute/ProsesEditRute/{id}', 'RuteController@Update')->name('ProsesEdit.rute');
Route::get('/Rute/DetailRute/{id}', 'RuteController@DetailRute')->name('Detail.rute');
Route::DELETE('/Rute/{id}','RuteController@Destroy');


//TRANSPORTASI
Route::get('/Transportasi', 'TransportasiController@Homepage')->name('Index.transportasi');
Route::get('/Transportasi/TambahTransportasi/', 'TransportasiController@TambahTransportasi')->name('Tambah.transportasi');

Route::post('/Transportasi/ProsesTambahTransportasi', 'TransportasiController@ProsesTambahTransportasi')->name('Proses.Transportasi');

Route::get('/Transportasi/EditTransportasi/{id}', 'TransportasiController@EditTransportasi')->name('Edit.transportasi');

Route::patch('/Transportasi/ProsesEditTransportasi/{id}', 'TransportasiController@update')->name('ProsesEdit.transportasi');

Route::get('/Transportasi/DetailTransportasi/{id}','TransportasiController@DetailTransportasi')->name('Detail.transportasi');

Route::DELETE('/Transportasi/{id}','TransportasiController@Destroy');


//PENUMPANG
Route::get('/Penumpang', 'PenumpangController@Homepage')->name('Index.penumpang');
Route::get('/Penumpang/TambahPenumpang', 'PenumpangController@TambahPenumpang')->name('Tambah.penumpang');
Route::post('/Penumpang/ProsesTambahPenumpang', 'PenumpangController@store')->name('ProsesTambah.penumpang');
Route::get('/Penumpang/EditPenumpang/{id}', 'PenumpangController@EditPenumpang')->name('Edit.penumpang');
Route::patch('/Penumpang/ProsesTambahPenumpang/{id}', 'PenumpangController@update')->name('ProsesEdit.penumpang');
Route::get('/Penumpang/DetailPenumpang/{id}', 'PenumpangController@DetailPenumpang')->name('Detail.penumpang');
Route::DELETE('/Penumpang/{id}','PenumpangController@Destroy');


//LEVEL
Route::get('/Level', 'LevelController@Homepage')->name('Index.level');
Route::get('/Level/TambahLevel/', 'LevelController@TambahLevel')->name('Tambah.level');
Route::post('/Level/ProsestambahLevel/','LevelController@ProsesTambahLevel')->name('Proses.Level');
Route::get('/Level/EditLevel/{id}', 'LevelController@EditLevel')->name('Edit.level');
Route::get('/Level/ProsesEditLevel/{id}', 'LevelController@update')->name('ProsesEdit.level');
Route::get('/Level/DetailLevel/{id}', 'LevelController@DetailLevel')->name('Detail.level');
Route::DELETE('/Level/{id}', 'LevelController@Destroy');




//type TRANSPORTASI
Route::get('/TypeTransportasi', 'TypeTransportasiController@Homepage')->name('Index.type');
Route::get('/TypeTransportasi/TambahTypeTransportasi/', 'TypeTransportasiController@TambahTypeTransportasi')->name('Tambah.type');

Route::post('/TypeTransportasi/ProsesTambahTypeTransportasi/', 'TypeTransportasiController@store')->name('Proses.type');


Route::get('/TypeTransportasi/EditTypeTransportasi/{id}', 'TypeTransportasiController@EditTypeTransportasi')->name('Edit.type');

Route::get('/TypeTransportasi/ProsesEditTypeTransportasi/{id}', 'TypeTransportasiController@update')->name('ProsesEdit.type');

Route::get('/TypeTransportasi/DetailTypeTransportasi/{id}', 'TypeTransportasiController@DetailTypeTransportasi')->name('Detail.type');
Route::DELETE('/TypeTransportasi/{id}','TypeTransportasiController@Hapus');




