<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

//Bind route Parameters
Route::model('game', 'Game');

//Show pages
Route::get('/', 'GamesController@index');
Route::get('/create', 'GamesController@create');
Route::get('/edit/{game}', 'GamesController@edit');
Route::get('/delete/{game}', 'GamesController@delete');
Route::get('/register', 'HomeController@register');
Route::get('/login', 'HomeController@login');
Route::get('/logout', 'HomeController@logout');
Route::get('/secret', 'HomeController@secret');

//Handle form submissions
Route::post('/create', 'GamesController@handleCreate');
Route::post('/edit', 'GamesController@handleEdit');
Route::post('/delete', 'GamesController@handleDelete');
Route::post('/register', 'HomeController@handleRegister');
Route::post('/login', 'HomeController@handleLogin');