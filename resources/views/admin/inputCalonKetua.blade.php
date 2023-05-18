@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{url('css/admin/inputCalonKetua.css')}}" />
@endsection

@section('container')
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 sidebar d-flex justify-content-center align-items-center">
        <h1>Calon Ketua</h1>
      </div>
      <div class="col-md-8 mt-5">
        <h1 class="d-flex title justify-content-center mt-5">MASUKKAN DATA CALON KETUA</h1>
        <p class="fw-bold"></p>
        <div class="row mt-5">
          <div class="col-md-8 mt-5">
          <form method="post" action="{{url('/save-calon-ketua')}}" enctype="multipart/form-data">
            @csrf
              <input type="text" id="nama" name="nama_calon" placeholder="Nama" class="mx-5 my-2" /><br /><br />
              <input type="text" id="nis" name="nis" placeholder="NIS" class="mx-5 my-2" /><br /><br />
              <input type="email" id="email" name="email" placeholder="Email" class="mx-5 my-2" /><br /><br />
              <textarea type="text" id="visi" name="visi" placeholder="Visi" class="mx-5 my-3 text-start "></textarea>
              <textarea type="text" id="misi" name="misi" placeholder="Misi" class="mx-5 my-3 text-start "></textarea>
          </div>
          <div class="pict col-md-2 mt-5">
            <img src="{{url('/images/download.jpg')}}" class="d-flex justify-content-center mt-5" />
              <div class="input-group mb-3 iconUp">
                <label class="input-group-text rounded-circle d-flex justify-content-center" style="width:70px; height: 70px; background-color:aqua" for="inputGroupFile01">
                <i data-feather="upload"></i>
                </label>
                <input type="file" name="image" class="form-control" hidden id="inputGroupFile01">
              </div>
              <button type="submit" class="btnTambah d-flex align-items-center my-1 mx-0">Tambah</button>
            </div>

            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection