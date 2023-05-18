<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CalonKetua;

class dataCalonKetuaUserController extends Controller
{
    //
    public function index(){
        $calon_ketua = CalonKetua::all();
        return view('user.dataCalon')->with('calon_ketua', $calon_ketua);;
    }
}
