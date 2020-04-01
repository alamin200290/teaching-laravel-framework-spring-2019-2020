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


Route::group(['middleware'=>['sess']], function(){

	Route::get('/home', 'HomeController@index')->name('home.index');
	Route::get('/home/view_users', 'HomeController@list')->name('home.list')->middleware('sess');
	Route::get('/home/details/{id}', ['as'=>'home.show','uses'=>'HomeController@show']);

	Route::group(['middleware'=>['type']], function(){
		Route::get('/home/add', 'HomeController@add')->name('home.add')->middleware('sess');
		Route::post('/home/add', 'HomeController@create');
		Route::get('/home/edit/{id}', 'HomeController@edit')->name('home.edit');
		Route::post('/home/edit/{id}', 'HomeController@update');
		Route::get('/home/delete/{id}', 'HomeController@delete')->name('home.delete');
		Route::post('/home/delete/{id}', 'HomeController@destroy');
	});
});

Route::resource('accounts', 'AccountController');
Route::resource('accounttype', 'AccountTypeController');