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





// Max's Routes

// Vendor pages
Route::get('/vendor-signup', 'HomeController@showVendorSignup');

Route::get('/vendor-dash', 'HomeController@showVendorDash');

// User pages
Route::get('/user-signup', 'HomeController@showUserSignup');

Route::get('/user-dash', 'HomeController@showUserDash');












Route::resource('users', 'UsersController');

Route::resource('vendors', 'VendorsController');

Route::resource('parties', 'PartiesController');












// TEST ROUTES FOR MAX / KB / BENNY

Route::get('/maxtest', function()
{
	return View::make('/parties/create');
	
});




