<?php

Route::get('admin/home','admin\AdminController@home');

Route::get('/','admin\LoginController@showLoginForm');
Route::get('auth/login','admin\LoginController@showLoginForm')->name('login');
Route::get('auth/register','admin\RegisterController@showRegistrationForm');
Route::post('auth/login','admin\LoginController@login');
Route::post('auth/register','admin\RegisterController@register');
Route::post('auth/logout', 'admin\LoginController@logout')->name('logout');