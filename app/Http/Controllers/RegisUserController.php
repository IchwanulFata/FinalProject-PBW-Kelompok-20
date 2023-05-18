<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class RegisUserController extends Controller
{
    
    public function register(){
        return view('user\registerUser');
    }
    
    public function inputRegister(Request $request){
        if($request->hasFile('image'))
        {
            $destination_path = 'public/images/user';
            $image =$request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $input['image'] = $image_name;
            $request->validate([
                'password' => 'required|confirmed|min:6'
            ]);
            // return $input['image'];
            $user = User::create([
                'image' => $input['image'], 
                'name' => $request->nama,
                'nis' => $request->nis,
                'email' => $request->email,
                'password' => Hash::make($request->password),
                
            ]);
        }
        
        return redirect('/');
    }


}

