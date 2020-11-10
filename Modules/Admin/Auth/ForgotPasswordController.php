<?php

namespace Modules\Admin\Auth;

use Illuminate\Foundation\Auth\SendsPasswordResetEmails;
use Modules\Admin\Base\AdminController;

class ForgotPasswordController extends AdminController
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset emails and
    | includes a trait which assists in sending these notifications from
    | your application to your users. Feel free to explore this trait.
    |
    */

    use SendsPasswordResetEmails;

    public function showLinkRequestForm()
    {
        return view('admin.auth.passwords.email');
    }


}
