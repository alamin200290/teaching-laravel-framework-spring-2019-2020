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

Route::get('/mywebsite', 'WebsiteController@index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function(){
	return view('home.index');
});

Route::get('/login', 'LoginController@index');
Route::post('/login', 'LoginController@verify');
Route::get('/logout', 'logoutController@index');


Route::group(['middleware'=>['sess']], function(){
	Route::get('/home', 'HomeController@index')->name('home.index');
	Route::get('/home/view_users', 'HomeController@list')->name('home.list');
	Route::get('/home/details/{id}', 'HomeController@show')->name('home.show')->middleware('sess');
	
		Route::get('/home/add', 'HomeController@add')->name('home.add');
		Route::post('/home/add', 'HomeController@insert');
		Route::get('/home/edit/{id}', ['as'=>'home.edit','uses'=>'HomeController@edit']);
		Route::post('/home/edit/{id}', 'HomeController@update');
		Route::get('/home/delete/{id}', 'HomeController@delete')->name('home.delete');
		Route::post('/home/delete/{id}', 'HomeController@destroy')->name('home.destroy');
		Route::resource('account', 'AccountController');
});

Route::resource('accounttype', 'AccounttypeController')->middleware('sess');