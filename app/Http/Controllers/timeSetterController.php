<?php

namespace App\Http\Controllers;

use App\Models\time_setter;
use Illuminate\Http\Request;


class timeSetterController extends Controller
{
    //
    public function index(Request $request){

        $time = time_setter::create([
            'start_date' => $request->start_date,
            'end_date' => $request->end_date,
        ]);
        // return redirect('/rekapan-pemilihan');
        return redirect('/rekapan-pemilihan');

    }

}
