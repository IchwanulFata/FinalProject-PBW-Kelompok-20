<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class userController extends Controller
{
    
    public function register(){
        return view('registerUser');
    }
    
    public function inputRegister(Request $request){
        
        $user = User::create([
            'name' => $request->nama,
            'username' => $request->username,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        
        return redirect('/');
    }


}

