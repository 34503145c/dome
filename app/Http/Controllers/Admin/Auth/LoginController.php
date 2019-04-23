<?php

namespace App\Http\Controllers\Admin\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;

class LoginController extends Controller
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

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
    protected $redirectTo = '/admin';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest:admin', ['except' => 'logout']);
    }


    public function showLoginForm()
    {
        return view('admin/auth/login');
    }

    protected function guard()
    {
        return \Auth::guard('admin');
    }


    public function logout(Request $request)
    {//Auth::guard($this->getGuard())->logout();
        \Auth::guard('admin')->logout();

     //   $request->session()->flush();

       // $request->session()->regenerate();

        return redirect('/admin/login');
    }
}