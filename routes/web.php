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


Route::get('/', ['uses' => 'App\StaticsController@home']);

Route::get('/gif', ['uses' => 'Admin\StaticsController@returnGif'])->middleware('guest');

Route::auth();