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

	public function showWelcome()
	{
		return View::make('hello');
	}


	public function showHome()
	{
		return View::make('home');
	}

	public function showTheme()
	{
		return View::make('theme');
	}

// Login page for testing user authentication

	public function showLogin()
	{
		return View::make('login');
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
			return Redirect::action('HomeController@showHome');

		}

		else

		{
			Session::flash('errorMessage', 'Log in failed. Please try again.');
			dd($_POST);
			echo "Login failed";
			// return Redirect::action('HomeController@tryLogin')->withInput();
		}


	}


	public function logout()
	{

		Auth::logout();

		Session::flash('successMessage', 'Logged out successfully.');

		return Redirect::action('HomeController@showHome');
	}

	
}
