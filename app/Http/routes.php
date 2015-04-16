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
Route::get('/',['as'=>'home','uses'=>'HomeController@index']);

//user header
Route::get('pariwisata','HomeController@pemesanan');
Route::get('akap','HomeController@akap');
Route::get('login','HomeController@login');
Route::get('about','HomeController@about');

Route::get('login/val','LoginController@login');

Route::controller('/','Auth\AuthController');
//Route::controller('pemesanan','PemesananController');