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

Route::get('/','homeController@index');
Route::post('doLogin','homeController@doLogin');
Route::get('logout','homeController@logout');
Route::get('/admin/home','adminController@index');
Route::get('/admin/list','adminController@list');
Route::get('/admin/edit/{id}','adminController@edit');
Route::post('/admin/douseredit','adminController@douseredit');
Route::get('/admin/useradd','adminController@useradd');
Route::post('/admin/douseradd','adminController@douseradd');
Route::get('/admin/delete/{id}','adminController@delete');
