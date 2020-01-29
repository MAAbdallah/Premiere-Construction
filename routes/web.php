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


Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

Route::get('/s/create', 'SliderController@create');
Route::post('/s','SliderController@store');

Route::get('/a/create', 'AboutController@create');
Route::post('/a','AboutController@store');




