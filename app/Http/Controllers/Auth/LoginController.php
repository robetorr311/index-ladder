<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\User;
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
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
// app/Http/Controllers/Auth/LoginController.php
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    public function authenticate(Request $request)
    {
        $usr= User::where('email', $request->email)->first();
        if (Hash::check($request->password, $usr->password)) {
            if(empty($usr->email_verified_at)){
               return ['redirect' => route('login-user')];
            }
            else{
              Auth::login($usr);
            }
        }
        if (Auth::check()) {
            return ['redirect' => route('home')];
        }
        else {
            return ['redirect' => route('login-user')];
        }
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('welcome');
    }
}
