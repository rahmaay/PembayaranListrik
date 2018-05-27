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
Auth::routes();

Route::get('/','HomeController@welcome');


Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'tarif'] , function(){

	Route::get('' , 'TarifController@index');
	Route::get('add','TarifController@add');
	Route::post('save','TarifController@save');
	Route::get('/edit/{id}','TarifController@edit')->name('edit_tarif');
	Route::post('update','TarifController@update');
	Route::get('delete/{id}','TarifController@delete');
});

Route::group(['prefix' => 'user'] , function(){

	Route::get('' , 'HomeController@user');
	Route::get('add','HomeController@add');
	Route::post('save','HomeController@save');
	Route::get('edit/{id}','HomeController@edit');
	Route::post('update','HomeController@update');
	Route::get('delete/{id}','HomeController@delete');
});

Route::group(['prefix' => 'pembayaran'] , function(){
	Route::get('' , 'PembayaranController@index');
	Route::get('add/{id}','PembayaranController@add');
	Route::post('save','PembayaranController@save');
});

Route::group(['prefix' => 'tagihan'] , function(){

	Route::get('' , 'TagihanPLOController@index');
	Route::get('add','TagihanPLOController@add');
	Route::post('save','TagihanPLOController@save');
	Route::get('edit/{id}','TagihanPLOController@edit');
	Route::post('update','TagihanPLOController@update');
	Route::get('delete/{id}','TagihanPLOController@delete');
});

Route::group(['prefix' => 'penggunaan'] , function(){

	Route::get('' , 'PenggunaanController@index');
	Route::get('add','PenggunaanController@add');
	Route::post('save','PenggunaanController@save');
	Route::get('edit/{id}','PenggunaanController@edit');
	Route::post('update','PenggunaanController@update');
	Route::get('delete/{id}','PenggunaanController@delete');
});

Route::group(['prefix' => 'pelanggan'] , function(){

	Route::get('' , 'PelangganController@index');
	Route::get('add','PelangganController@add');
	Route::post('save','PelangganController@save');
	Route::get('{id}/edit','PelangganController@edit');
	Route::post('update','PelangganController@update');
	Route::get('delete/{id}','PelangganController@delete');
});

Route::group(['prefix' => 'search'] , function(){

	Route::get('pelanggan' , 'UserInterfaceController@search');
});