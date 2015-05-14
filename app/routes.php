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
Route::get('/vendor-sign', 'HomeController@showVendorSign');

Route::get('/vendor-dash', 'HomeController@showVendorDash');

// User pages
Route::get('/user-sign', 'HomeController@showUserSign');

Route::get('/user-dash', 'HomeController@showUserDash');




// Benny's Routes


// Route::get('/dashboard', function()
// {
//     return View::make('dashboard');
// });
// Route::get('/user-signup', function()
// {
//     return View::make('users.create');
// });



// Route::post('/user-signup', 'HomeController@signup');

// TEST ROUTES

// Route::get('/user_setup', function()
// {
//     return View::make('/partials/user_setup');
// });
// Route::get('/vendor_setup', function()
// {
//     return View::make('/partials/vendor_setup');
// });
// Route::get('/password_form', function()
// {
//     return View::make('/partials/password_form');
// });
// Route::get('/vendor_setup', function()
// {
//     return View::make('/partials/vendor_setup');
// });
// Route::get('/map', function()
// {
//     return View::make('/partials/map');
// });

