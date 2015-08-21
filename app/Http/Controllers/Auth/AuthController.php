<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Traits\Auth\Login;
use App\Traits\Auth\Register;
use App\Traits\Auth\Throttle;
use Validator;

class AuthController extends Controller
{
    use Login, Register, Throttle;

    /**
     * Path to the login route.
     *
     * @var string
     */
    protected $loginPath = '/auth/login';

    /**
     * Post register/login redirect path.
     *
     * @var string
     */
    protected $redirectPath = '/';

    /**
     * Post logout redirect path.
     *
     * @var string
     */
    protected $redirectAfterLogout = '/';


    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        $validator = Validator::make($data, [
            'login' => 'required|login|max:32|unique:users',
            'email' => 'required|email|max:254|unique:users',
            'password' => 'required|confirmed|min:6',
        ]);

        $validator->setAttributeNames($this->embed([
            'login' => trans('auth/attributes.login'),
            'email' => trans('auth/attributes.email'),
            'password' => trans('auth/attributes.password'),
        ]));

        return $validator;
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'login' => $data['login'],
            'email' => $data['email'],
            'role_id' => 1,
            'password' => bcrypt($data['password']),
        ]);
    }
}
