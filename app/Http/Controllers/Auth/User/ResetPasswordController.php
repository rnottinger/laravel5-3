<?php

namespace App\Http\Controllers\Auth\User;

use App\Http\Controllers\Controller;
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
     * @var string
     */
    protected $redirectTo = '/relations';

    /**
     * The reset view.
     *
     * @var string
     */
    protected $resetView = 'auth.users.passwords.reset';

    /**
     * The email request.
     *
     * @var string
     */
    protected $linkRequestView = 'auth.users.passwords.email';

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
}
