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

Route::get('/','DefaultController@welcome')->name('home');

Route::get('/property', 'PropertyController@index')->name('property.index');
Route::get('/property/{slug}${id}', 'PropertyController@show')->name('property.show');
