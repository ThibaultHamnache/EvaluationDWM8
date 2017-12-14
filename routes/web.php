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


/**************************************/
/*************** SERIE ****************/
/**************************************/
Route::get('/serie', 'SerieController@index');
Route::get('/create_serie', 'CreateSerieController@index');

Route::post('/serie/insert', 'SerieController@insertOne');
Route::post('/serie/update_serie', 'SerieController@updateOneAction');

Route::get('/serie/delete/{id}', 'SerieController@deleteOne');
Route::get('/serie/update_serie/{id}', 'SerieController@updateOne');

/**************************************/
/*************** MOVIE ****************/
/**************************************/
Route::get('/movie', 'MovieController@index');
Route::get('/create_movie', 'CreateMovieController@index');

Route::post('/movie/insert', 'MovieController@insertOne');
Route::post('/movie/update_movie', 'MovieController@updateOneAction');

Route::get('/movie/delete/{id}', 'MovieController@deleteOne');
Route::get('/movie/update_movie/{id}', 'MovieController@updateOne');
