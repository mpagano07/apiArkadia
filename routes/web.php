<?php
 
Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('dashboard','DashboardController@index')->name('dashboard');

Route::post('login','Auth\LoginController@login')->name('login');