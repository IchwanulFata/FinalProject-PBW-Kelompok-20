<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use App\models\CalonKetua;
use Illuminate\View\View;
use Illuminate\Support\Facades\DB;

class CalonKetuaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $calon_ketua = CalonKetua::all();
        return view('admin.calonKetua')->with('calon_ketua', $calon_ketua);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('admin.inputCalonKetua');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request):RedirectResponse
    {
        $input = $request->all();
        if($request->hasFile('image'))
        {
            $destination_path = 'public/images/calonKetua';
            $image =$request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $input['image'] = $image_name;
        }
        CalonKetua::create($input);
        return redirect ('calon-ketua-admin')->with('flash_message', 'Calon Ketua Telah Ditambah');
    }
    
    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
      //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $calon=CalonKetua::findorfail($id); //
        return view('admin.editCalonKetua', compact('calon'));
    }
    
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $calon=CalonKetua::findorfail($id); //
        if($request->hasFile('image'))
        {
            $destination_path = 'public/images/calonKetua';
            $image =$request->file('image');
            $image_name = $image->getClientOriginalName();
            $path = $request->file('image')->storeAs($destination_path, $image_name);
            $input['image'] = $image_name;
        }
        $calon->update($request->all());
        
        return redirect ('calon-ketua-admin')->with('toast_succes', 'Calon Ketua Telah Ditambah');
        // DB::table('calon_ketua')
        //     ->where('id', $calonKetua->id)
        //     ->update([
            //         'nama_calon'=>$request->input('nama_calon'),
            //         'nis'=>$request->input('nis'),
            //         'visi'=>$request->input('visi'),
        //         'misi'=>$request->input('misi')
        //     ]);
        // return redirect('/calon-ketua-admin')->with('flash_message', 'Data Calon Ketua Telah di Update');  
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        CalonKetua::destroy($id);
        return Redirect('calon-ketua-admin')->with('flash_message', 'Data Calon Ketua Telah di Hapus');
    }
}
