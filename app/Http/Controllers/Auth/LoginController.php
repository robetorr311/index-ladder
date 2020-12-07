<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
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
              if (empty($usr->phone)){
                Auth::login($usr);
                return ['redirect' => route('setnumber')];
              }
              elseif (!$usr->twostep_enabled) {
                Auth::login($usr);
                return ['redirect' => route('dashboard')];                
              }
              else {
                return ['redirect' =>route('twosteplogin', ['email' => $request->email])];
              }     
            }
        }
        /*if (Auth::check()) {
          return ['redirect' => route('welcome')];
        }
        else {
          return ['redirect' => route('login-user')];
        }*/
    }
    public function twostep(Request $request){
      $usr= User::where('email', $request->email)->first();
      $generated_code=$usr->verification_code;
      $entered_code=$request->code;
      if($generated_code==$entered_code){
        Auth::login($usr);
        return ['redirect' => route('dashboard')];
      }
      else {
        return ['redirect' =>route('twosteplogin', ['email' => $request->email])];
      }
    }    
    public function logout(){
        Auth::logout();
        return redirect()->route('login-user');
    }

}
