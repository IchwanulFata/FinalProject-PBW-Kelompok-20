<?php

namespace App\Http\Controllers;

use App\Models\CalonKetua;
use Illuminate\Http\Request;

class votingController extends Controller
{
    //
    public function index(){
        $calon = CalonKetua::all();
        return view('user.voting')->with('calon', $calon);
    }

    public function vote(Request $request){
        $calon = CalonKetua::find($request->calon);
        $calon->update([
            'total_suara'=> $calon->total_suara+1
        ]);
 
        return redirect('/data-calon-ketua-user');
    }
}