<?php

class AuthController extends BaseController
{
	/**
	 * @var User
	 */
	private $user;

	public function __construct(User $user)
	{
		$this->user = $user;
	}

	/**
	 * @return \Illuminate\View\View
	 */
	public function getLogin()
	{
		return View::make('auth.login', [
			'title' => 'Login'
		]);
	}

	public function postLogin()
	{
		list($msg, $data) = $this->validate(Input::all(), $this->user->getRules());

		if ($msg) {
			return Redirect::route('auth.getLogin')->withErrors($msg);
		}

		$credentials = [
			'password' => $data['password'],
			'active' => 1,
		];

		if (filter_var($data['login'], FILTER_VALIDATE_EMAIL)) {
			$credentials['email'] = $data['login'];
		} else {
			$credentials['username'] = $data['login'];
		}

		$remember_me = (isset($data['remember_me']) && $data['remember_me'] == 'true') ? true : false;

		if (Auth::attempt($credentials, $remember_me)) {
			return Redirect::route('cms.Dashboard.getIndex')->with('success', Lang::get('auth/messages.login.success'));
		}

		return Redirect::route('auth.getLogin')->with('danger', Lang::get('auth/messages.login.danger'));
	}

	public function getLogout()
	{
		Auth::logout();

		return Redirect::route('page.getIndex')->with('success', Lang::get('auth/messages.logout.success'));
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