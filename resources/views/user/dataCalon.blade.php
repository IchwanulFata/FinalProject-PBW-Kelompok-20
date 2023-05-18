@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{url('css/user/daftarCalon.css')}}" />
@endsection

@section('container')
<div class="template">
    <div class="sidebar">
        <div class="title">
          <h2>E-Voting</h2>
        </div>
        <div class="time">
          <span id="realTime">Kamis, 30-03-2023, 09:38:45</span>
        </div>
        <div class="menu">
          <div class="menuRekap">
            <a id="iconRekap" class="fw-bold"
              ><i data-feather="home"></i>Daftar Calon</a
            >
          </div>
          <div class="menuCalon">
            <a href="/calon-ketua-admin" id="iconCalon"
              ><i data-feather="user"></i>Pemilihan Ketua</a
            >
          </div>
          <div class="menuPemilih">
            <a href="/data-pemilih" id="iconPemilih"
              ><i data-feather="users"></i>Perhitungan Langsung</a
            >
          </div>
          <div class="menuLogout">
            <a href="/logout-admin" id="iconLogout"><i data-feather="log-out"></i>Logout</a>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-end mt-3 me-3">
        <a
        href="/informasi-akun"
          class="userAccount d-flex justify-content-evenly align-items-center"
        >
          <img src="{{ asset('/storage/images/user/' .auth()->user()->image) }}" />
          <h5>{{ auth()->user()->name }}</h5>
        </a>
      </div>
    </div>
    <div class="rekapanPemilihan d-flex justify-content-center">
        <h2>Calon Ketua</h2>
    </div>
    <div style="margin-top: 200px;">

        @foreach($calon_ketua as $calon)
        <div class="candidate">
            <h1>{{ $calon->id }}</h1>
            <div class="img">
                <img src="{{ asset('/storage/images/' .$calon->image) }}" alt="Calon 1">
            </div>
            <div class="visi">
                    <h3 style="display: flex; justify-content:start; font-weight:bold">{{ $calon->nama_calon }}</h3>
                    <h5 style="display: flex; justify-content:start; ">Visi</h5>
                    <p style="text-align: justify;">{{ $calon->visi }}</p>
                    <h5 style="display: flex; justify-content:start; ">Misi</h5>
                    <p style="text-align: justify;">{{ $calon->misi }}</p>
            </div>
        </div>
        @endforeach
    </div>
            
    
    
</div>
@endsection