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
// biodata
Route::get('/','biodata@index');
Route::post('/simpandata_biodata','biodata@store');
Route::get('/ubahdata_biodata/{id}','biodata@edit');
Route::post('/ubahdata_biodataaction/{id}','biodata@update');
Route::get('/hapusdata_biodata/{id}','biodata@destroy');
//managementfile
Route::get('/managementfile','managementfile@index');
Route::post('/simpan_managementfile','managementfile@store');
Route::get('/ubah_managementfile/{id}','managementfile@edit');
Route::get('/hapus_managementfile/{id}','managementfile@destroy');
Route::post('/ubahaction_managementfile/{id}','managementfile@update');

//managementuser