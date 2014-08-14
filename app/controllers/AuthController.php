<?php

class AuthController extends Controller
{
	public function getLogin()
	{
		return View::make('auth.login', [
			'title' => 'Login'
		]);
	}

	public function postLogin()
	{
		$input = Input::all();
	}

	public function getLogout()
	{
		Auth::logout();

		return Redirect::route('page_index');
	}

	public function getRegister()
	{
		return View::make('auth.register');
	}

	public function postRegister()
	{
		//
	}

	public function getActivate($token)
	{
		//
	}

	public function getReminder()
	{
		//
	}

	public function postReminder()
	{
		//
	}

	public function getReset($token)
	{
		//
	}

	public function postReset($token)
	{
		//
	}

}