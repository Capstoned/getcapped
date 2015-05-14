<?php
class HomeController extends BaseController {
	/*
	|--------------------------------------------------------------------------
	| Default Home Controller
	|--------------------------------------------------------------------------
	|
	| You may wish to use controllers instead of, or in addition to, Closure
	| based routes. That's great! Here is an example controller method to
	| get you started. To route to this controller, just add the route:
	|
	|	Route::get('/', 'HomeController@showWelcome');
	|
	*/

	public function showHome()
	{
		return View::make('theme');
	}



	// Vendor sign in and dashboard views

	public function showVendorSign()
	{
		return View::make('vendor-sign');
	}

	public function showVendorSign()
	{
		return View::make('vendor-dash');
	}


	// User sign in and dashboard views

	public function showUserSign()
	{
		return View::make('user-sign');
	}

	public function showUserDash()
	{
		return View::make('user-dash');
	}






	public function doVendorSetup()
	{
		return View::make('vendor-signup');
	}
	public function doUserSetup()
	{
		return View::make('user-signup');
	}

	//** Login functions
 
	public function tryLogin()
 
	{
		$emailOrUsername = Input::get('email_or_username');
		$password = Input::get('password');
 
 
		if (Auth::attempt(array('email' => $emailOrUsername, 'password' => $password))
			|| (Auth::attempt(array('username' => $emailOrUsername, 'password' => $password))))
 
		{
			Session::flash('successMessage', 'Logged in successfully.');
			return View::make('dashboard');
 
		}
 
 
	}
}
