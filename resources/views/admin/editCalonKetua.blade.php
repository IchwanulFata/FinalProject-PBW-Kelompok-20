@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{url('css/admin/editDataCalonKetua.css')}}" />
@endsection

@section('container')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 sidebar d-flex justify-content-center align-items-center">
        <h1>Edit Data Calon Ketua</h1>
      </div>
      <div class="col-md-8 mt-5">
        <div class="row mt-5">
          <div class="col-md-8 mt-5">
            <form method="POST" action="{{ url('/update-calon-ketua/'.$calon->id) }}" enctype="multipart/form-data" class="mt-5">
              @csrf
              <input type="text" id="nama_calon" name="nama_calon" placeholder="Nama" class="mx-5 my-3" value="{{ $calon->nama_calon??'' }}" />
              <input type="text" id="nis" name="nis" placeholder="Nis" class="mx-5 my-3 text-start " value="{{ $calon->nis??'' }}"></input>
              @if($calon)
              <textarea type="text" id="visi" name="visi" placeholder="Visi" class="mx-5 my-3 text-start ">{{$calon->visi}}</textarea>
              @endif
              @if($calon)
              <textarea type="text" id="misi" name="misi" placeholder="Misi" class="mx-5 my-3 text-start ">{{$calon->misi}}</textarea>
              @endif
          </div>
          <div class="pict col-md-2 mt-5">
            <img src="{{ asset('/storage/images/' .$calon->image) }}" class="d-flex justify-content-center mt-5" />
            <div class="input-group mb-3 iconUp">
              <label class="input-group-text rounded-circle d-flex justify-content-center" style="width:70px; height: 70px; background-color:aqua" for="inputGroupFile01">
              <i data-feather="upload"></i>
              </label>
              <input type="file" name="image" class="form-control" hidden id="inputGroupFile01">
            </div>

            <button type="submit" class="btnTambah d-flex align-items-center my-1 mx-0">Ubah</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection