<?php
 
Route::get('/', 'Auth\LoginController@showLoginForm');

Route::get('dashboard','DashboardController@index')->name('dashboard');

Route::post('login','Auth\LoginController@login')->name('login');

Route::post('logout','Auth\LoginController@logout')->name('logout');

Route::post('users/login', 'UsersController@getToken')->name('users');

// $router->get('/', function () use ($router) {
//     return $router->app->version();
// });

Route::group(['middleware' => ['auth']], function ()
{
    Route::get('users', 'UsersController@index');
    Route::post('users', 'UsersController@createUser');

});