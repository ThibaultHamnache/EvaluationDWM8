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

Route::get('/', 'BaseController@index');
Route::get('/serie', 'SerieController@index');
Route::get('/movie', 'MovieController@index');

Route::get('/create_movie', 'CreateMovieController@index');
Route::get('/create_serie', 'CreateSerieController@index');


Route::post('/serie/insert', 'SerieController@insertOne');
Route::post('/serie/update', 'SerieController@updateOneAction');

Route::post('/movie/insert', 'MovieController@insertOne');
Route::post('/movie/update', 'MovieController@updateOneAction');


Route::get('/serie/delete/{id}', 'SerieController@deleteOne');
Route::get('/serie/update/{id}', 'MovieController@updateOne');
