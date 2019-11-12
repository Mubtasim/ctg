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


Route::get('/', 'HomeController@index')->name('home');
Route::get('category/{name?}', 'CategoriesController@index')->name('category');
Route::get('category/{name}/{details}', 'DetailsController@index')->name('details');
Route::get('add', 'DetailsController@show')->name('add.show');
Route::post('add', 'DetailsController@post')->name('add.post');
