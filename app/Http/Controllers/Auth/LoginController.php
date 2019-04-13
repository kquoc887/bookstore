<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use App\Http\Requests\LoginRequest;
use Illuminate\Support\Facades\Auth;

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
   
   /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/home';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('getLogout');
    }

    use AuthenticatesUsers;

    public function getLogin() {
        return view('admin.login');
    }

    public function postLogin(LoginRequest $request) {
        $data = array(
            'username' => $request->txtUsername,
            'password' => $request->txtPassword,
            'level'    => 1
        );

        if (Auth::attempt($data)) {
            return redirect()->route('admin.cate.list');
        } else {
            return redirect()->back();
        }
    }

    public function getLogout() {
        Auth::logout();
        return redirect()->route('admin.getLogin');
    }
}
