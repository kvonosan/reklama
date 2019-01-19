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

Route::get('/', 'ContentController@show');
Route::get('/reklama/add', ['as' => 'reklama.add', 'uses' => 'AddContentController@show']);
Route::post('/reklama/add', 'AddContentController@add');
Route::get('/count', ['as' => 'counter', 'uses' => 'CounterController@Count']);

Auth::routes();
