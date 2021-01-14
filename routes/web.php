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

Route::get('/dash', 'PageController@index');
Route::get('/dash/modul', 'PageController@modul');

Route::post('/store/modul', 'ModulController@store')->name('store.modul');
Route::put('/modul/{id}/update', 'ModulController@update')->name('update.modul');
Route::delete('/modul/{id}/delete', 'ModulController@delete')->name('delete.modul');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
