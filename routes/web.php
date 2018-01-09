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

Route::get('/', 'HomeController@index');
Route::get('/om', 'AboutController@index');
Route::get('/kontakt', 'ContactController@index');
Route::post('/kontakt', 'ContactController@saveMessage');
Route::get('/ansokan', 'ApplyController@index');
Route::post('/ansokan/post', 'ApplyController@saveApplication');