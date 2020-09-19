<?php

use Illuminate\Support\Facades\Route;

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

    Route::get('/','AuthController@login')->name('login');
    Route::post('/postlogin','AuthController@postlogin');
    Route::get('/logout','AuthController@logout');

    Route::get('/statususer','StatusUserController@index');

    Route::get('/main','MainController@index');
    Route::group(['middleware' => 'auth'],function(){
    Route::get('/dashboard','DashboardController@index');

    Route::get('/berkasregistrasi','RegistrasiController@index');
    Route::post('/berkasregistrasi/create','RegistrasiController@create');
    Route::get('/berkasregistrasi/{no_dokumen}/editregistrasi','RegistrasiController@edit');
    Route::post('/berkasregistrasi/{no_dokumen}/update','RegistrasiController@update');

    Route::get('/berkasakuntansi','AkuntansiController@index');
    Route::post('/berkasakuntansi/create','AkuntansiController@create');
    Route::get('/berkasakuntansi/{no_dokumen}/editakuntansi','AkuntansiController@edit');
    Route::post('/berkasakuntansi/{no_dokumen}/update','AkuntansiController@update');

    Route::get('/berkasanggaran','AnggaranController@index');
    Route::post('/berkasanggaran/create','AnggaranController@create');
    Route::get('/berkasanggaran/{no_dokumen}/editanggaran','AnggaranController@edit');
    Route::post('/berkasanggaran/{no_dokumen}/update','AnggaranController@update');

    Route::get('/berkaskas','KasController@index');
    Route::post('/berkaskas/create','KasController@create');
    Route::get('/berkaskas/{no_dokumen}/editkas','KasController@edit');
    Route::post('/berkaskas/{no_dokumen}/update','KasController@update');

    Route::get('/berkasmanajer','ManajerController@index');
    Route::post('/berkasmanajer/create','ManajerController@create');
    Route::get('/berkasmanajer/{no_dokumen}/editmanajer','ManajerController@edit');
    Route::post('/berkasmanajer/{no_dokumen}/update','ManajerController@update');

    Route::get('/berkaspembayaran','PembayaranController@index');
    Route::post('/berkaspembayaran/create','PembayaranController@create');
    Route::get('/berkaspembayaran/{no_dokumen}/editpembayaran','PembayaranController@edit');
    Route::post('/berkaspembayaran/{no_dokumen}/update','PembayaranController@update');
});

    Route::group(['middleware' => 'auth'],function(){
    Route::get('/statusberkas','StatusController@index');
});