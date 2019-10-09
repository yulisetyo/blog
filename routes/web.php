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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::group(['prefix' => 'referensi'], function(){

	Route::group(['prefix' => 'opsi'], function(){
		
		Route::get('/list-user', 'UserController@listUser');
		Route::get('/list-role', 'ReferensiController@listRole');
		
	});
});

Route::group(['prefix' => 'beranda'], function(){
	
	Route::get('/', 'DashboardController@index');

});

Route::group(['prefix' => 'role'], function(){
	
	Route::get('/', 'UserController@index')->middleware('role:0');
	Route::post('/', 'UserController@saveRole');
	Route::post('/activate', 'UserController@activate');
	Route::post('/inactivate', 'UserController@inactivate');
	Route::get('/show', 'UserController@show');
	
});
