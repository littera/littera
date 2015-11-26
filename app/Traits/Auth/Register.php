<?php

namespace App\Traits\Auth;

use App\Support\DateTime;
use Auth;
use DB;
use Illuminate\Http\Request;

trait Register
{
    /**
     * Show the application registration form.
     *
     * @return \Illuminate\Http\Response
     */
    public function getRegister()
    {
        return view('auth.register', [
            'title' => trans('auth/views.register.title'),
        ]);
    }

    /**
     * Handle a registration request for the application.
     *
     * @param \Illuminate\Http\Request $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Illuminate\Http\Exception\HttpResponseException
     */
    public function postRegister(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        Auth::login($this->create($request->all()));

        $this->updateLastLoginTimestamp();

        DB::table(config('auth.activation.table'))->insert([
            'user_id' => Auth::user()->id,
            'token' => $this->generateToken(),
            'created_at' => lh_date(time(), DateTime::DB_TIMESTAMP),
            'updated_at' => lh_date(time(), DateTime::DB_TIMESTAMP),
        ]);

        return redirect($this->redirectPath());
    }

    /**
     * Return a random string for a token.
     *
     * @return string
     */
    protected function generateToken()
    {
        return hash_hmac('sha256', str_random(40), config('app.key'));
    }
}
