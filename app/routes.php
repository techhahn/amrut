<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::controller('users', 'UsersController');
Route::controller('dashboard', 'DashboardController');

Route::resource('areas', 'AreasController');
Route::resource('towns', 'TownsController');
Route::resource('products', 'ProductsController');

Route::get('login', 'UsersController@getLogin');

Route::get('/', 'UsersController@getLogin');