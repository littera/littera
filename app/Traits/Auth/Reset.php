<?php

namespace App\Traits\Auth;

use Auth;
use Illuminate\Http\Request;
use Illuminate\Mail\Message;
use Password;

trait Reset
{
    /**
     * Display the form to request a password reset link.
     *
     * @return \Illuminate\Http\Response
     */
    public function getEmail()
    {
        return view('auth.email', [
            'title' => trans('auth/views.password.title'),
        ]);
    }

    /**
     * Send a reset link to the given user.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     */
    public function postEmail(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|max:254',
        ], [], [
            'email' => trans('auth/attributes.email'),
        ]);

        $response = Password::sendResetLink($request->only('email'), function (Message $message) {
            $message->subject($this->getEmailSubject());
        });

        switch ($response) {
            case Password::RESET_LINK_SENT:
                return redirect(property_exists($this, 'redirectAfterEmailedRecovery')
                    ? $this->redirectAfterEmailedRecovery
                    : '/auth/login')
                    ->with('success', trans('auth/messages.password.emailed'));

            case Password::INVALID_USER:
                return redirect()
                    ->intended($this->recoveryPath())
                    ->withErrors(['email' => trans('auth/messages.password.invalid_user')]);
        }
    }

    /**
     * Get the e-mail subject line to be used for the password recovery email.
     *
     * @return string
     */
    protected function getEmailSubject()
    {
        return property_exists($this, 'emailSubject') ? $this->emailSubject : 'Password recovery instructions';
    }

    /**
     * Display the password reset view for the given token.
     *
     * @param string $token
     *
     * @return \Illuminate\Http\Response
     */
    public function getReset($token = null)
    {
        if ($token === null) {
            abort(404);
        }

        return view('auth.reset', [
            'title' => trans('auth/views.reset.title'),
            'token' => $token,
        ]);
    }

    /**
     * Reset the given user's password.
     *
     * @param \Illuminate\Http\Request $request
     * @param string                   $token
     *
     * @return \Illuminate\Http\Response
     */
    public function postReset(Request $request, $token = null)
    {
        if ($token === null) {
            abort(404);
        }

        $this->validate($request, [
            'token' => 'required',
            'email' => 'required|email|max:254',
            'password' => 'required|confirmed|min:6',
        ], [], [
            'token' => trans('auth/attributes.token'),
            'email' => trans('auth/attributes.email'),
            'password' => trans('auth/attributes.password'),
        ]);

        $credentials = $request->only(
            'email', 'password', 'password_confirmation', 'token'
        );

        $response = Password::reset($credentials, function ($user, $password) {
            $this->resetPassword($user, $password);
        });

        switch ($response) {
            case Password::PASSWORD_RESET:
                return redirect($this->redirectPath())
                    ->with('success', trans('auth/messages.password.invalid_reset'));
                break;

            case Password::INVALID_USER:
                $trans = 'auth/messages.password.invalid_user';
                break;

            default:
                $trans = 'auth/messages.password.invalid_reset';
        }

        return redirect()
            ->intended($this->resetPath($token))
            ->withInput($request->only('email'))
            ->withErrors(['email' => trans($trans)]);
    }

    /**
     * Reset the given user's password.
     *
     * @param \Illuminate\Contracts\Auth\CanResetPassword $user
     * @param string                                      $password
     */
    protected function resetPassword($user, $password)
    {
        $user->password = bcrypt($password);

        $user->save();

        Auth::login($user);
    }

    /**
     * Get the path to the recovery route.
     *
     * @return string
     */
    public function recoveryPath()
    {
        return property_exists($this, 'recoveryPath') ? $this->recoveryPath : '/password/email';
    }

    /**
     * Get the path to the reset route.
     *
     * @return string
     */
    public function resetPath($token = null)
    {
        if ($token === null) {
            return '/';
        }

        if (property_exists($this, 'resetPath')) {
            return rtrim($this->resetPath, '/').'/'.$token;
        }

        return  '/password/reset/'.$token;
    }
}
