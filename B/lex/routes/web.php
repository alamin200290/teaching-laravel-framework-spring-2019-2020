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

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'LogoutController@index');

Route::get('/home', 'HomeController@index');
Route::get('/home/add', 'HomeController@add');
Route::post('/home/add', 'HomeController@create');
Route::get('/home/view_users', 'HomeController@list');
Route::get('/home/details/{id}', 'HomeController@show');
Route::get('/edit/{id}', 'HomeController@edit');
Route::post('/edit/{id}', 'HomeController@update');
Route::get('/delete/{id}', 'HomeController@delete');
Route::post('/delete/{id}', 'HomeController@destroy');






