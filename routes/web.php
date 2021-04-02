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
    return view('User/Login');

    
});
// Route::get('/User/', 'UserController@Homepage')->name('Homepage');

Route::get('/Login', 'UserController@Login')->name('Login');
Route::get('/logout', 'UserController@logout')->name('logout');

Route::get('/User/Register', 'UserController@Register')->name('Register');


Route::post('/User/ProsesLogin', 'UserController@ProsesLogin')->name('Proses.Login');

Route::get('/User/Register', 'UserController@Register')->name('Register');

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
Route::DELETE('/Level/{id}', 'LevelController@Destroy')->name('hapus');




//type TRANSPORTASI
Route::get('/TypeTransportasi', 'TypeTransportasiController@Homepage')->name('Index.type');
Route::get('/TypeTransportasi/TambahTypeTransportasi/', 'TypeTransportasiController@TambahTypeTransportasi')->name('Tambah.type');

Route::post('/TypeTransportasi/ProsesTambahTypeTransportasi/', 'TypeTransportasiController@store')->name('Proses.type');


Route::get('/TypeTransportasi/EditTypeTransportasi/{id}', 'TypeTransportasiController@EditTypeTransportasi')->name('Edit.type');

Route::get('/TypeTransportasi/ProsesEditTypeTransportasi/{id}', 'TypeTransportasiController@update')->name('ProsesEdit.type');

Route::get('/TypeTransportasi/DetailTypeTransportasi/{id}', 'TypeTransportasiController@DetailTypeTransportasi')->name('Detail.type');
Route::DELETE('/TypeTransportasi/{id}','TypeTransportasiController@Hapus');




Route::get('/Transaksi','TransaksiController@index')->name("transaksi.index");
Route::post('/Transaksi/update/','TransaksiController@store')->name("transaksi.store");
Route::DELETE('/Transaksi/{id}','TransaksiController@destroy')->name('transaksi.destroy');
Route::get('/Transaksi/update','TransaksiController@update')->name("transaksi.update");
Route::get('/Transaksi/laporan','TransaksiController@laporan')->name("transaksi.laporan");
Route::get('/Transaksi/cetak','TransaksiController@Cetaklaporan')->name("laporan.cetak");




//dashboard

Route::get('/user','PagesController@index')->name("pages.index");
Route::get('/Admin', 'UserController@CekLoginPetugas')->name('Dashboard');
Route::post('/user/tambah','PagesController@store')->name("pages.store");



