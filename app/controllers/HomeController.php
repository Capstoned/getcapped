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

	public function showVendorSignup()
	{
		return View::make('vendor-signup');
	}

	public function showVendorDash()
	{
		return View::make('vendor-dash');
	}


	// User sign in and dashboard views

	public function showUserSignup()
	{
		return View::make('user-signup');
	}

	public function showUserDash()
	{
		return View::make('user-dash');
	}


	public function showDashboard()
	{
	    $party = Party::all()->random();
		return View::make('dashboard')->with('party', $party);
	}




}
