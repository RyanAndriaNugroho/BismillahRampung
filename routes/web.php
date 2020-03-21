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
    return view('admin.dashboard');
}); 

Route::get('/dashboard', 'AdminController@dashboard');
Route::get('/alternatif_kost', 'AdminController@alternatif_kost');
Route::get('/profil', 'AdminController@profil');