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

/****** Auth Section ********/
Route::get('auth/steam', 'Auth\AuthController@redirectToSteam')->name('auth.steam');
Route::get('auth/steam/handle', 'Auth\AuthController@handle')->name('auth.steam.handle');
Route::get('auth/steam/logout', 'Auth\AuthController@logout')->name('auth.steam.logout');
/****** End Of Auth Section ********/


Route::get('/', 'MainController@page');
Route::get('/{url}/{p1?}', 'MainController@page')->name('page');
