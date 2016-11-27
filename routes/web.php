<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', 'HomeController@index');
Route::post('/hitung','DateController@hitung');

Auth::routes();

Route::get('/home', 'HomeController@home');
Route::get('/profile','HomeController@profile');
Route::post('/profile','HomeController@postProfile');
Route::get('/laporan','HomeController@laporan');
Route::post('/laporan','HomeController@postLaporan');
