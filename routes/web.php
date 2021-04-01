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
Route::middleware('auth')->group(function (){
    Route::get('home', 'HomeController@home')->name('home');
    Route::post('logout', 'AuthController@logout')->name('logout');

    Route::middleware('can:isAdmin')->group(function(){
        Route::resource('siswa', 'SiswaController');
    });
    
});

Route::middleware('guest')->group(function (){

    //login
    Route::get('login', 'AuthController@getLogin')->name('getLogin');
    Route::post('login', 'AuthController@login')->name('login');

    Route::prefix('daftar')->name('daftar.')->group(function (){
        Route::get('/', 'HomeController@daftar')->name('index');
        Route::post('/', 'PendaftaraanController@store')->name('store');
        Route::get('/datadiri', 'PendaftaraanController@datadiri')->name('datadiri');
    });
});