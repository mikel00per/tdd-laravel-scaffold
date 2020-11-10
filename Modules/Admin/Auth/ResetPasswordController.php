<?php

namespace Modules\Admin\Auth;

use Core\Providers\RouteAdminServiceProvider;
use Core\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Modules\Admin\Base\AdminController;

class ResetPasswordController extends AdminController
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
     * Where to redirect users after resetting their password.
     *
     * @var string
     */
    protected $redirectTo = RouteAdminServiceProvider::HOME;

    public function showResetForm(Request $request)
    {
        return view('admin.auth.passwords.reset');
    }


}
