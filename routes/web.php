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


Route::get('/', 'PageController@shape')->name('/');
Route::get('/profil', 'PageController@profil')->name('profil');
Route::get('/home', 'PageController@home')->name('home');
Route::get('/project', 'PageController@project')->name('project');
Route::get('/home', 'PageController@accueil')->name('accueil');