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

Route::group(['middleware' =>'auth'], function() {
	Route::resource('/home','HomeController');
	Route::resource('/destiny','DestinyController');
	Route::resource('/planning', 'PlanningController');
	Route::resource('/endtravel', 'FinishController');
	Route::resource('/profile', 'ProfileController');
	Route::resource('/travel', 'TravelController');
});



