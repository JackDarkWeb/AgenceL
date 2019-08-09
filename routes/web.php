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

Route::group(['prefix' => 'admin/app'], function (){

    Route::get('/property', 'Admin\AdminPropertyController@index')->name('admin.property.index');
    Route::get('/property/{id}', 'Admin\AdminPropertyController@show')->name('admin.property.show')->where('id', '[0-9]+');
    Route::get('/property/create', 'Admin\AdminPropertyController@create')->name('admin.property.create');
    Route::post('/property/store', 'Admin\AdminPropertyController@store')->name('admin.property.store');
    Route::get('/property/{id}/edit', 'Admin\AdminPropertyController@edit')->name('admin.property.edit');
    Route::put('/property/{id}/update', 'Admin\AdminPropertyController@update')->name('admin.property.update');
    Route::delete('/property/{id}/delete', 'Admin\AdminPropertyController@delete')->name('admin.property.delete');
});
