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

Route::get('home', 'HomeController@index');
//Route::get('/book_queue','BookqueuesController@index');
//Route::post('/book_queue','BookqueuesController@index');
Route::post('insertdata', 'BookqueueController@insert');

Route::controllers([
	'auth' => 'Auth\AuthController',
	'password' => 'Auth\PasswordController',
]);

// Authentication routes...
Route::get('auth/login', 'Auth\AuthController@getLogin');
Route::post('auth/login', 'Auth\AuthController@postLogin');
Route::get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes...
Route::get('auth/register', 'Auth\AuthController@getRegister');
Route::post('auth/register', 'Auth\AuthController@postRegister');

Route::get('dashboard', function(){
    return view('templates/dashboard');
});

Route::get('test', function(){
    return view('templates/test');
});

Route::get('service', function(){
    return view('templates/service');
});

Route::get('queue', function(){
    return view('templates/queue');
});

Route::get('book_queue', function(){
    return view('templates/book_queue');
});

Route::get('list_service', function(){
    return view('templates/list_service');
});

Route::get('profile', function(){
    return view('templates/profile');
});


Route::get('editprofile', function(){
    return view('templates/editprofile');
});

Route::get('editpassword', function(){
    return view('templates/editpassword');
});

