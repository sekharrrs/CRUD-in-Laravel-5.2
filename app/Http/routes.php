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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::get('index','UserController@index');

Route::get('page', function(){
	return view('pages.header');
});

Route::get('create','UserController@create');
Route::post('store','UserController@store');
Route::get('index','UserController@index');
Route::get('show/{id}','UserController@show');
Route::get('edit/{id}','UserController@edit');
Route::patch('update/{id}','UserController@update');
Route::get('delete/{id}','UserController@destroy');



