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

Route::get('/', 'WelcomeController@index');
Route::get('home', 'WelcomeController@index');

//user header
Route::get('pariwisata','WelcomeController@pemesanan');
Route::get('akap','WelcomeController@akap');
Route::get('login','WelcomeController@login');
Route::get('about','WelcomeController@about');

Route::get('login/val','LoginController@login');
