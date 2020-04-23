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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/taller','TallerController@taller');
Route::get('/usuario','TallerController@usuario');
Route::get('/tag','TallerController@tag');
Route::get('/post','TallerController@post');
Route::get('/ejemplo','TallerController@ejemplo');
