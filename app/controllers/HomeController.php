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
	
	/**
	 * Display login form
	 */
	public function showLogin() {
		return View::make('pages.login');
	}
	
	/**
	 * Get user details from login form and attempt login
	 */
	public function login() {
		$user = array(
			'email' => Input::get('email'),
			'password' => Input::get('password')
		);
		
		if (Auth::attempt($user)) {
			return Redirect::to('passwords')
				->with('flash_notice', 'You have successfully logged in.');
		}
		
		// redirect to login form if unsuccessful
		return Redirect::to('/')
			->with('flash_notice', 'Your username and/or password are incorrect, please try again.')
			->withInput($user);
	}
	
	/**
	 * Log user out and redirect to login form
	 */
	public function logout() {
		Auth::logout();

		return Redirect::to('/')
			->with('flash_notice', 'You have successfully logged out.');
	}
	
	public function listPasswords() {
		return View::make('pages.passwords');
	}
}
