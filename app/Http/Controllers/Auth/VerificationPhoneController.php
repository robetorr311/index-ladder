<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VerificationPhoneController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function show(Request $request)
    {
        if ($request->user()->hasVerifiedPhone()) {
            return redirect()->route('home');
        }
 
        return view('auth/verify_phone');
    }
 
    /**
     * Mark the authenticated user's phone as verified.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function verify(Request $request)
    {
        if ($request->user()->hasVerifiedPhone()) {
            return redirect()->route('home');
        }
 
        $request->validate(['code' => ['required', 'string', 'min:6', 'max:6', 'regex:/([0-9]{6,6})/'],]);
         
        if ($request->user()->verification_code !== $request->code)
        {
            return back()->withErrors(['code' => __('The code your provided is wrong. Please try again or request another code.')]);
        }
         
        $request->user()->markPhoneAsVerified();
         
        return redirect()->route('home')->with('status', __('Your phone was successfully verified.'));
    }
     
    /**
     * Resend the phone code.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function resend(Request $request)
    {
        if ($request->user()->hasVerifiedPhone()) {
            return redirect()->route('home');
        }
 
        $request->user()->sendPhoneVerificationNotification();
 
        return back()->with('resent', true);
    }    
}
