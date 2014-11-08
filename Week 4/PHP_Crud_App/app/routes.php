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
Route::model('client', 'Client');

//Show pages
Route::get('/', 'ClientController@index');
Route::get('/create', 'ClientController@create');
Route::get('/edit/{client}', 'ClientController@edit');
Route::get('/delete/{client}', 'ClientController@delete');
Route::get('/register', 'HomeController@register');
Route::get('/login', 'HomeController@login');
Route::get('/logout', 'HomeController@logout');
Route::get('/secret', 'HomeController@secret');

//Handle form submissions
Route::post('/create', 'ClientController@handleCreate');
Route::post('/edit', 'ClientController@handleEdit');
Route::post('/delete', 'ClientController@handleDelete');
Route::post('/register', 'HomeController@handleRegister');
Route::post('/login', 'HomeController@handleLogin');