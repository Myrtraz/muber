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

Route::resource('/','WelcomeController');
Route::resource('/register','RegisterController');
Route::resource('/login','LoginController');
Route::get('/loginintothedriver', 'LoginController@LoginDriver')->name('LoginDrivers');
Route::post('/loginintothedriver', 'LoginController@F')->name('LoginDrivers');
Route::get('/registerintothedriver', 'RegisterController@RegisterDriver')->name('Drivers');
Route::post('/registerintothedriver','RegisterController@F')->name('Drivers');
Route::post('/driver', 'LoginController@Logout')->name('logout');



Route::group(['middleware' =>'auth'], function() {

    Route::resource('/driver','DriverController');
    Route::get('/actives','DriverController@activeDrivers')->name('active');
    Route::get('/active/ping', 'DriverController@lastActivity')->name('ping');

	Route::resource('/home','HomeController');
	Route::resource('/destiny','DestinyController');
	Route::resource('/planning', 'PlanningController');

	Route::get('/planning/{lat}/{lng}/{place_id}', 'PlanningController@planning');

	Route::resource('/endtravel', 'FinishController');
	Route::resource('/profile', 'ProfileController');
	Route::resource('/travel', 'TravelController');
	Route::get('/travel/state/{id}', 'TravelController@state')
		->name('travel.state');
});



