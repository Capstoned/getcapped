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

	// ?!?

	public function showHome()
	{
		return View::make('theme');
	}


	// Show dashboard for logged in user and pass variables for use with API's

	public function showDashboard()
	{

	   	$user_id = Auth::id();
	   	$party = Party::where('user_id', '=', $user_id)->first();


		return View::make('dashboard')->with('party', $party);
	}

	// Display the 'About' page

	public function showAbout()
	{
		return View::make('about');
	}
}


