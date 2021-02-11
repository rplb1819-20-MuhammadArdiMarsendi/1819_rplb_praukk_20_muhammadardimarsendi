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