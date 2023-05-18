<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function homeAdmin(){
        $usersTotal = User::count('id');
        $usersBelum = User::where('status','Belum Memilih')->count('id');
        $usersSudah = User::where('status','Sudah Memilih')->count('id');

        return view('admin\rekapanPemilihan', [
            'usersTotal' => $usersTotal,
            'usersBelum' => $usersBelum,
            'usersSudah' => $usersSudah,
        ]);
    }
}
