<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\RedirectResponse;

class LoginAdminControllers extends Controller
{
    public function loginAdmin(){
        return view('admin\loginAdmin');
    }

    public function authLoginAdmin(Request $request)
    {
        if(Auth::attempt(['email' => $request->email, 'password' => $request->password])){
            $request->session()->regenerate();
            return redirect('/rekapan-pemilihan');
        }
    }

    public function authLogoutAdmin(Request $request):RedirectResponse
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/admin');
    }
}
