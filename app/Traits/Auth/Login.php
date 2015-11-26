<?php

namespace App\Traits\Auth;

use App\Support\DateTime;
use Auth;
use Illuminate\Http\Request;

trait Login
{
    /**
     * Show the application login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        return view('auth.login', [
            'title' => trans('auth/views.login.title'),
        ]);
    }

    /**
     * Handle a login request to the application.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Http\Exception\HttpResponseException
     */
    public function postLogin(Request $request)
    {
        $this->validate($request, [
            'login' => 'required',
            'password' => 'required',
        ], [], [
            'login' => trans('auth/attributes.login'),
            'password' => trans('auth/attributes.password'),
        ]);

        if ($this->hasTooManyLoginAttempts($request)) {
            return $this->sendLockoutResponse($request);
        }

        $credentials = $this->getCredentials($request);

        if (Auth::attempt($credentials, $request->has('remember'))) {
            $this->clearLoginAttempts($request);

            $this->updateLastLoginTimestamp();

            return redirect()->intended($this->redirectPath())
                ->with('success', trans('auth/messages.login.success'));
        }

        $this->incrementLoginAttempts($request);

        return redirect($this->loginPath())
            ->withInput($request->only('login', 'remember'))
            ->with('fail', trans('auth/messages.login.fail'));
    }

    /**
     * Get the needed authorization credentials from the request.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return array
     */
    protected function getCredentials(Request $request)
    {
        $credentials = $request->only('login', 'password');

        if (filter_var($credentials['login'], FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $credentials['login'];
            unset($credentials['login']);
        }

        return $credentials;
    }

    /**
     * Update last login timestamp.
     */
    protected function updateLastLoginTimestamp()
    {
        if (Auth::check()) {
            Auth::user()->last_login = lh_date(time(), DateTime::DB_TIMESTAMP);
            Auth::user()->save();
        }
    }

    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogout()
    {
        Auth::logout();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/')
            ->with('success', trans('auth/messages.logout.success'));
    }

    /**
     * Get the path to the login route.
     *
     * @return string
     */
    public function loginPath()
    {
        return property_exists($this, 'loginPath') ? $this->loginPath : '/auth/login';
    }
}
