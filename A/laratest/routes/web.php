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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
	return view('home.index');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');

Route::get('/home', 'HomeController@index');
Route::get('/home/view_users', 'HomeController@list');
Route::get('/home/edit/{id}', 'HomeController@edit');
Route::get('/home/delete/{id}', 'HomeController@delete');
Route::get('/logout', 'logoutController@index');

