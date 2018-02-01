<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Auth;

class HandyLoginController extends Controller
{


    /**
     * AdminLoginController constructor.
     */
    public function __construct()
    {
        $this->middleware('guest:handy');
    }

    public function showLoginForm()
    {
        return view('auth.handy-login');
    }

    public function login(Request $request){

        // Validate the form
        $this->validate($request,[
            'email' => 'required|email',
            'password' => 'required|min:6'
        ]);



        // Attempt to log the use in
       if(Auth::guard('handy')->attempt(['email' => $request->email , 'password' => $request->password] , $request->remember )){
           // if successful, then redirect to their intended location
           return redirect()->intended(route('handy.dashboard'));
       };

        // if unsuccessful, then redirect back to the login with the form data
        return redirect()->back()->withInput($request->only('email','remember'));

    }
}
