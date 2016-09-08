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

use Illuminate\Support\Facades\Input;

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('hotels', 'HotelController');

Route::get('users/validate', 'UserController@validateList');
Route::patch('users/{users}/validate', 'UserController@validateUser');
Route::resource('users', 'UserController');

Route::resource('/hotels/{hotels}/rooms', 'RoomController');

Route::get('/test', function() {
   dd(Input::file('da'));
});