<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;

class LoginController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
        $this->middleware('guest:admin')->except('logout');
        $this->middleware('guest:web')->except('logout');
    }

    public function login(){
        return view('login');
    }

    public function auth(Request $request){
        if (Auth::guard('web')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/');
        }
        return redirect('login')->with('error','Invalid login credentials');
    }

    public function signup(){
        return view('signup');
    }

    public function logout(){
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();
        }
        return redirect('login');
    }

    public function logoutAdmin(){
        if(Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();
        }
        return redirect('admin/login');
    }
}
