<?php

use Illuminate\Support\Facades\Route;

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

/*
  - Movie resource controller
*/
Route::resource('movies', 'MoviesController');

/*
  Landing/Movies page
  - return List of popular movies
*/
Route::get('/', ['as'=>'home', 'uses'=>'MoviesController@index']);
Route::get('movies/', ['as'=>'movies', 'uses'=>'MoviesController@index']);

/*
  Single detail page
  - return List of popular movies
*/
Route::get('movies/{$id}', 'MoviesController@show');
