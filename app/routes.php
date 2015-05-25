<?php
/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/




Route::get('/', 'HomeController@showHome');


// Route::resource('users', 'UsersController');

Route::resource('vendors', 'VendorsController');

Route::resource('parties', 'PartiesController');



// KB's Routes to the dashboard view

Route::get('/dashboard', 'HomeController@showDashboard');

Route::get('/about', 'HomeController@showAbout');




// Confide routes
Route::get('users/create', 'UsersController@create');
Route::post('users', 'UsersController@store');
Route::get('users/login', 'UsersController@login');
Route::post('users/login', 'UsersController@doLogin');
Route::get('users/confirm/{code}', 'UsersController@confirm');
Route::get('users/forgot_password', 'UsersController@forgotPassword');
Route::post('users/forgot_password', 'UsersController@doForgotPassword');
Route::get('users/reset_password/{token}', 'UsersController@resetPassword');
Route::post('users/reset_password', 'UsersController@doResetPassword');
Route::get('users/logout', 'UsersController@logout');
// Vendor dashboard and edit routes
Route::get('/vendor-dash', 'VendorsController@showDash');
Route::put('/vendor-dash/{id}', 'VendorsController@update');
// User dashboard and edit routes
