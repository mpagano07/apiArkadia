<?php
 
Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('home','DashboardController@index')->name('home');

Route::post('login','Auth\LoginController@login')->name('login');

Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::post('users/login', 'UsersController@getToken')->name('users');

Auth::routes();