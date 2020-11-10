<?php

namespace Modules\Admin\Auth;

use Core\Providers\RouteAdminServiceProvider;
use Core\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Modules\Admin\Base\AdminController;

class LoginController extends AdminController
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    public function showLoginForm()
    {
        return view('admin.auth.login');
    }


    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteAdminServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
        $this->middleware('guest')->except('logout');
    }


}
