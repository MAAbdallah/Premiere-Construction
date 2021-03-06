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

Route::get('/sl/create', 'SliderController@create');
Route::post('/sl','SliderController@store');

Route::get('/ab/create', 'AboutController@create');
Route::post('/ab','AboutController@store');

Route::get('/sr/create', 'ServiceController@create')->middleware('auth');
Route::post('/sr','ServiceController@store')->middleware('auth');
Route::get('/sr/{id}','ServiceController@show')->name('service.show');

Route::get('/test/create', 'TestimoialController@create');
Route::post('/test','TestimoialController@store');

Route::get('/blog/create', 'BlogController@create')->middleware('auth');
Route::post('/blog','BlogController@store')->middleware('auth');
Route::get('/blog/{id}','BlogController@show')->name('service.show');




