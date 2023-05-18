<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\models\User;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class dataPemilihController extends Controller
{
    //
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $user = User::all();
        return view('admin.dataPemilih')->with('user', $user);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        User::destroy($id);
        return Redirect('data-pemilih')->with('flash_message', 'Data Pemilih Telah di Hapus');
    }

}
