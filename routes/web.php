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

Route::resource('job', 'JobsController')->middleware('auth');
Route::get('/', 'JobsController@index');
Route::get('form', 'JobsController@create');
Route::post('/add', 'JobsController@store');
Route::get('/json', 'JobsController@json');
Route::get('/list', 'JobsController@show');
Route::get('/admin', 'JobsController@admin');