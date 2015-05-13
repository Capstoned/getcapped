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

// Route::get('/', function()
// {
// 	return View::make('hello');
// });

Route::get('/', 'HomeController@showHome');

Route::get('/theme', 'HomeController@showTheme');

Route::get('/dashboard', function()
{
    return View::make('user-dashboard');
});



// TEST ROUTES
Route::get('/user_setup', function()
{
    return View::make('/partials/user_setup');
});

Route::get('/password_form', function()
{
    return View::make('/partials/password_form');
});

Route::post('/password_form', 'HomeController@tryLogin');


// Login Authentication Troubleshooting

Route::get('login', 'HomeController@showLogin');

Route::post('login', 'HomeController@tryLogin');
