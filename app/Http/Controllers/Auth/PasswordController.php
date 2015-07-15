<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Traits\Auth\Reset;

class PasswordController extends Controller
{
    use Reset;

    /**
     * Email subject
     *
     * @var string
     */
    protected $emailSubject = 'Password recovery instructions';

    /**
     * Path to the password recovery route.
     *
     * @var string
     */
    protected $recoveryPath = '/password/email';

    /**
     * Post reset password redirect path.
     *
     * @var string
     */
    protected $redirectPath = '/';

    /**
     * Post emailed how to recover password path.
     *
     * @var string
     */
    protected $redirectAfterEmailedRecovery = '/auth/login';

    /**
     * Path to the password reset route.
     *
     * @var string
     */
    protected $resetPath = '/password/reset';

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
}
