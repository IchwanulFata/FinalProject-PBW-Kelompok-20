@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{url('css/user/daftarCalon.css')}}" />
@endsection

@section('container')
<div class="template">
    <!-- Konten sidebar -->
    <div class="sidebar">
        <div class="title">
            <h2>E-Voting</h2>
        </div>
        <div class="time">
            <span id="date-time"></span>
        </div>
        <div class="menu">
            <!-- Menu rekap -->
            <div class="menuRekap">
                <a id="iconRekap" class="fw-bold"><i data-feather="home"></i>Daftar Calon</a>
            </div>
            <!-- Menu calon -->
            <div class="menuCalon">
                <a href="/voting-user" id="iconCalon"><i data-feather="user"></i>Pemilihan Ketua</a>
            </div>
            <!-- Menu Logout -->
            <div class="menuLogout">
                <a href="/logout" id="iconLogout"><i data-feather="log-out"></i>Logout</a>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-3 me-3">
        <!-- Informasi Akun Peengguna -->
        <a href="/informasi-akun" class="userAccount d-flex justify-content-evenly align-items-center">
            <img src="{{ asset('/storage/images/user/' .auth()->user()->image) }}" />
            <h5>{{ auth()->user()->name }}</h5>
        </a>
    </div>
</div>
<div class="rekapanPemilihan d-flex justify-content-center">
    <h2>Calon Ketua</h2>
</div>
<div style="margin-top: 200px;">
    <!--Looping untuk setiap calon  -->
    @foreach($calon_ketua as $calon)
    <div class="candidate">
        <h1>{{ $calon->id }}</h1>
        <div class="img">
            <!-- Gambar calon ketua -->
            <img src="{{ asset('/storage/images/calonKetua/' .$calon->image) }}">
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

<script>
function updateDateTime() {
    //Fungsi untuk memperbarui waktu dan tanggal
    var dateTime = new Date();
    var options = {
        weekday: 'long',
        year: 'numeric',
        month: 'long',
        day: 'numeric',
        hour: 'numeric',
        minute: 'numeric',
        second: 'numeric'
    };
    var dateTimeString = dateTime.toLocaleString('en-US', options);
    document.getElementById('date-time').textContent = dateTimeString;
}
setInterval(updateDateTime, 1000); // Update setiap detik
</script>
@endsection