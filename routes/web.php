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

Route::get('/', 'HomeController@index')->name('home');

Route::resource('/jokes', 'JokeController');

Route::get('/trash', 'JokeController@getTrash')->name('trash');

Route::match(['get', 'post'], '/jokes-restore/{id}', 'JokeController@restore')->name('restore');

Route::match(['get', 'delete'], '/jokes-delete/{id}', 'JokeController@forceDelete')->name('forceDelete');