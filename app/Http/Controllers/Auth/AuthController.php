<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Contracts\Auth\Guard;
use Illuminate\Contracts\Auth\Registrar;
use Symfony\Component\HttpKernel\Exception\NotFoundHttpException;

class AuthController extends Controller
{
    /**
     * The Guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\Guard
     */
    protected $auth;

    /**
     * The registrar implementation.
     *
     * @var \Illuminate\Contracts\Auth\Registrar
     */
    protected $registrar;

    /**
     * Create a new authentication controller instance.
     *
     * @param  \Illuminate\Contracts\Auth\Guard $auth
     * @param  \Illuminate\Contracts\Auth\Registrar $registrar
     * @return void
     */
    public function __construct(Guard $auth, Registrar $registrar)
    {
        $this->auth = $auth;
        $this->registrar = $registrar;

        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        return view('auth.register');
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postRegister(Request $request)
    {
        $validator = $this->registrar->validator($request->all());

        if ($validator->fails())
        {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $this->auth->login($this->registrar->create($request->all()));

        return redirect(url('/'));
    }

    /**
     * Show the application login form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogin()
    {
        return view('auth.login', [
            'title' => trans('app/auth.login.title'),
        ]);
    }

    /**
     * Handle a login request to the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function postLogin(Request $request)
    {
        list($msg, $data) = $this->validator($request, [
            'login' => 'required',
            'password' => 'required',
        ], [
            'login' => trans('app/auth.attr.login'),
            'password' => trans('app/auth.attr.password'),
        ]);

        if ($msg)
        {
            return redirect()
                ->intended(url('auth/login'))
                ->withInput($request->only('login', 'rememeber_me'))
                ->withErrors($msg);
        }

        $credentials = [
            'password' => $data['password'],
            'is_active' => true,
        ];

        if (filter_var($data['login'], FILTER_VALIDATE_EMAIL))
        {
            $credentials['email'] = $data['login'];
        }
        else
        {
            $credentials['login'] = $data['login'];
        }

        if ($this->auth->attempt($credentials, $request->has('remember')))
        {
            return redirect()->intended(url('/'))
                ->with('success', trans('app/auth.login.success'));
        }

        return redirect(url('auth/login'))
            ->withInput($request->only('email', 'remember'))
            ->with('fail', trans('app/auth.login.fail'));
    }


    /**
     * Log the user out of the application.
     *
     * @return \Illuminate\Http\Response
     */
    public function getLogout()
    {
        $this->auth->logout();

        return redirect(property_exists($this, 'redirectAfterLogout') ? $this->redirectAfterLogout : '/');
    }

    public function getActivate($token = null)
    {
        if (is_null($token))
        {
            throw new NotFoundHttpException;
        }

        // TODO
    }
}
