<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Models\Penulis;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Auth;
use Illuminate\Support\Facades\Hash;
use function Symfony\Component\HttpFoundation\get;

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

    public function authAdmin(Request $request){
        if (Auth::guard('admin')->attempt(['email' => $request->email, 'password' => $request->password])) {
            return redirect()->intended('/admin');
        }
        return redirect('/login')->with('error','Invalid login credentials');
    }

    public function signup(){
        return view('signup');
    }

    public function registerPenulis(Request $request){
        $validatedData = $request->validate([
            'email' => 'required|email|unique:penulis|max:255',
            'password' => 'required|min:6',
            'nama' => 'required',
        ]);

        $penulis = new Penulis();
        $penulis->nama = $request->nama;
        $penulis->email = $request->email;
        $penulis->password = Hash::make($request->password);
        $penulis->save();

        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login.');
    }

    public function editAkun(Request $request){
        $nama = $request->$nama;
        $email = $request->$email;
        $password = $request->$password;

        $validatedData = $request->validate([
            'email' => 'required|email|unique:penulis|max:255',
            'password' => 'required|min:6',
            'nama' => 'required',
        ]);

        $penulis = get(Penulis::all());
        $penulis->nama = $request->nama;
        $penulis->email = $request->email;
        $penulis->password = Hash::make($request->password);
        $penulis->save();

        return redirect('/login')->with('success', 'Registrasi berhasil, silakan login.');
    }

    public function logout(){
        if (Auth::guard('web')->check()) {
            Auth::guard('web')->logout();

            Auth::logout();
        }
        return redirect('/login');
    }

    public function logoutAdmin(){
        if(Auth::guard('admin')->check()) {
            Auth::guard('admin')->logout();

            Auth::logout();
        }
        return redirect('/login');
    }
}
