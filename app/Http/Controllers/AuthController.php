<?php namespace App\Http\Controllers;

use App\Models\User;
use Auth;
use Illuminate\Http\Request;
use Input;
use Lang;


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
        return view('auth.login', [
            'title' => 'Login'
        ]);
    }

    public function postLogin(Request $request)
    {
        list($msg, $data) = $this->validator($request, [
            'login' => 'required',
            'password' => 'required',
        ], [
            'login' => trans('app/auth.attr.login'),
            'password' => trans('app/auth.attr.password'),
        ]);

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

    public function getLogout()
    {
        Auth::logout();

        return redirect()->route('page.getIndex')->with('success', Lang::get('auth/messages.logout.success'));
    }

    public function getRegister()
    {
        return view('auth.register');
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