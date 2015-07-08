<?php

namespace App\Traits\Auth;

use Illuminate\Http\Request;
use Cache;

trait Throttle
{
    /**
     * Determine if the user has too many failed login attempts.
     *
     * @param  Request  $request
     * @return bool
     */
    protected function hasTooManyLoginAttempts(Request $request)
    {
        $attempts = $this->getLoginAttempts($request);

        $lockedOut = Cache::has($this->getLoginLockExpirationKey($request));

        if ($attempts > 5 || $lockedOut) {
            if (! $lockedOut) {
                Cache::put($this->getLoginLockExpirationKey($request), time() + 60, 1);
            }

            return true;
        }

        return false;
    }

    /**
     * Get the login attempts for the user.
     *
     * @param  Request  $request
     * @return int
     */
    protected function getLoginAttempts(Request $request)
    {
        return Cache::get($this->getLoginAttemptsKey($request)) ?: 0;
    }

    /**
     * Increment the login attempts for the user.
     *
     * @param  Request  $request
     * @return int
     */
    protected function incrementLoginAttempts(Request $request)
    {
        Cache::add($key = $this->getLoginAttemptsKey($request), 1, 1);

        return (int) Cache::increment($key);
    }

    /**
     * Redirect the user after determining they are locked out.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    protected function sendLockoutResponse(Request $request)
    {
        $seconds = (int) Cache::get($this->getLoginLockExpirationKey($request)) - time();

        return redirect($this->loginPath())
            ->withInput($request->only('login', 'remember'))
            ->with('fail', trans('auth/messages.throttle.fail', ['seconds' => $seconds]));
    }

    /**
     * Clear the login locks for the given user credentials.
     *
     * @param  Request  $request
     * @return void
     */
    protected function clearLoginAttempts(Request $request)
    {
        Cache::forget($this->getLoginAttemptsKey($request));

        Cache::forget($this->getLoginLockExpirationKey($request));
    }

    /**
     * Get the login attempts cache key.
     *
     * @param  Request  $request
     * @return string
     */
    protected function getLoginAttemptsKey(Request $request)
    {
        $login = $request->input('login');

        return 'login:attempts:'.md5($login.$request->ip());
    }

    /**
     * Get the login lock cache key.
     *
     * @param  Request  $request
     * @return string
     */
    protected function getLoginLockExpirationKey(Request $request)
    {
        $login = $request->input('login');

        return 'login:expiration:'.md5($login.$request->ip());
    }
}
