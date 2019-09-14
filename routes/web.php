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

use Illuminate\Support\Facades\Route;

Route::get('/', 'HomeController@index')->name('index');

Route::get('/eloquent', 'EloquentController@index')->name('eloquent_index');
Route::get('/eloquent/model', 'EloquentController@model')->name('eloquent_model');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
