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
        $this->validate($request, $this->user->getRules());

        $input = $request->all();

        $credentials = [
            'password' => $input['password'],
            'active' => 1,
        ];

        if (filter_var($input['login'], FILTER_VALIDATE_EMAIL)) {
            $credentials['email'] = $input['login'];
        } else {
            $credentials['username'] = $input['login'];
        }

        if (Auth::attempt($credentials, $request->has('remember_me')))
        {
            return redirect()->route('cms.Dashboard.getIndex')->with('success', Lang::get('auth/messages.login.success'));
        }

        return redirect()->route('auth.getLogin')->with('danger', Lang::get('auth/messages.login.danger'));
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