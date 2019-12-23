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

Route::get('/', 'KomponentController@index')->name('index');
Route::post('/komponentekle', 'KomponentController@ekle')->name('komponent.ekle');
Route::get('/komponentekleview', 'KomponentController@create')->name('komponent.ekleview');
Route::get('/komponentsil/{id}', 'KomponentController@destroy')->name('komponent.sil');
Route::get('/komponentedit/{id}', 'KomponentController@edit')->name('komponent.edit');
Route::post('/komponentupdate/{id}', 'KomponentController@update')->name('komponent.update');

Route::get('/panolar','PanoController@index')->name('p_index');
Route::get('/panoadd','PanoController@create')->name('pano.create');
Route::post('/panostore','PanokompController@store')->name('pano.store');
Route::get('/panoedit/{id}','PanoController@edit')->name('pano.edit');
Route::post('/panoupdate/{id}','PanoController@update')->name('pano.update');
Route::get('/panodelete/{id}','PanoController@destroy')->name('pano.delete');

Route::get('/cariler','CariController@index')->name('c_index');
Route::get('/cariadd','CariController@create')->name('cari.create');
Route::post('/caristore','CariController@store')->name('cari.store');
Route::get('/cariedit/{id}','CariController@edit')->name('cari.edit');
Route::post('/cariupdate/{id}','CariController@update')->name('cari.update');
Route::get('/caridelete/{id}','CariController@destroy')->name('cari.delete');

Route::get('/satisler','SatisController@index')->name('s_index');
Route::get('/satisadd','SatisController@create')->name('satis.create');
Route::post('/satisstore','SatisController@store')->name('satis.store');
Route::get('/satisedit/{id}','SatisController@edit')->name('satis.edit');
Route::post('/satisupdate/{id}','SatisController@update')->name('satis.update');
Route::get('/satisdelete/{id}','SatisController@destroy')->name('satis.delete');

