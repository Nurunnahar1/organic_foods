<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function loginPage(){
        return view('backend.pages.auth.loginPage');
    }

    public function login(Request $request){
        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|string|min:4',
        ]);

        $credentials = [
            'email' => $request->email,
            'password' => $request->password
        ];

        if(Auth::attempt($credentials, $request->filled('remember'))){
            $request->session()->regenerate();
            return redirect()->intended('admin/dashboard');

        }

        return back()->withErrors([
            'email' => "Wrong Credentials found !",
        ])->onlyInput('email');
    }
}
