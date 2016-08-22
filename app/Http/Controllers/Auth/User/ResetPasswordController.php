<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\ResetsPasswords;

class ResetPasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */

    use ResetsPasswords;

    /**
     * The guard to use.
     *
     * @var string
     */
    protected $guard = 'web';
    /**
     * @var string
     */
    protected $redirectTo = '/relations';

    /**
     * The reset view.
     *
     * @var string
     */
//    protected $resetView = 'auth.users.passwords.reset';

    /**
     * The email request.
     *
     * @var string
     */
//    protected $linkRequestView = 'auth.users.passwords.email';

    /**
     * The broker to use.
     *
     * @var string
     */
    protected $broker = 'users';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }


    /**
     * Get the guard to be used during authentication.
     *
     * @return \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected function guard()
    {
        return Auth::guard($this->guard);
    }


    /**
     * Get the broker to be used during password reset.
     *
     * @return \Illuminate\Contracts\Auth\PasswordBroker
     */
    public function broker()
    {
        return Password::broker($this->broker);
    }
}
