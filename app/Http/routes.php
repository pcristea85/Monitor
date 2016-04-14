<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/


Route::get('/', 'HomeController@index');

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/value/details/{id}', 'ValueController@show');
Route::post('/value/details/{id}', 'ValueController@modify');
Route::any('/value/create', 'ValueController@create');
Route::any('/value/edit/{id}', 'ValueController@modify');
Route::get('/value/delete/{id}', 'ValueController@delete');

// Test routes
Route::get('/test/numeric', 'TestController@testNumeric');
Route::get('/test/text', 'TestController@testText');