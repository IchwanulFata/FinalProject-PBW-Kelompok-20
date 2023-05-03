<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginControllers extends Controller
{
    public function login(){
        return view('loginUser');
    }

    public function authLogin(Request $request)
    {
        // return $request;
        $credentials = $request->validate([
            'email' => ['required'],
            'password' => ['required'],
        ]);
        return 'gagal';

        if(Auth::attempt($credentials)){
            $request->session()->regenerate();
            return redirect()->intended('homeAdmin');
        }
        // return redirect('register');
        // return back()->with('loginError', 'Login Failed!');
    }

    public function authLogout(Request $request):RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/');
    }
}
