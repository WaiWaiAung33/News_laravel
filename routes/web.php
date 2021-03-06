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

Route::get('/', function () {
    return view('welcome');
});
Route::get('news','NewsController@index')->name('news/index');
Route::get('news/create','NewsController@create')->name('news/create');
Route::post('news/store','NewsController@store')->name('news/store');
Route::get('news/show/{id}','NewsController@show')->name('news/show');