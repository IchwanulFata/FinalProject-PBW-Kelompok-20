@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ url('css/user/voting.css')}}">
@endsection

@section('container')
<div class="template">
    <div class="sidebar">
        <div class="title">
            <h2>E-Voting</h2>
        </div>
        <div class="time">
            <span id="date-time"></span>
        </div>
        <div class="menu">
            <div class="menuRekap">
                <a href="/data-calon-ketua-user" id="iconRekap"><i data-feather="home"></i>Daftar Calon</a>
            </div>
            <div class="menuCalon">
                <a class="fw-bold" id="iconCalon"><i data-feather="user"></i>Pemilihan Ketua</a>
            </div>
            <div class="menuLogout">
                <a href="/logout" id="iconLogout"><i data-feather="log-out"></i>Logout</a>
            </div>
        </div>
    </div>

    <div class="d-flex justify-content-end mt-3 me-3">
        <a href="/informasi-akun" class="userAccount d-flex justify-content-evenly align-items-center">
            <img src="{{ asset('/storage/images/user/' .auth()->user()->image) }}" />
            <h5 style="text-decoration: none;">{{ auth()->user()->name }}</h5>
        </a>
    </div>
</div>

<div class="daftarCalon " style="margin-left: 540px; margin-top:150px">
    <div>
        <h2 class="c1">Pemilihan Ketua</h2>
        <p class="c2">Silahkan vote dengan mengklik salah satu kolom dibawah nomor urut</p>
    </div>
    <form method="POST" action="{{url('/voting-user')}}">
        @csrf
        <div class="candidate d-flex justify-content-center mx-auto">
            @foreach($calon as $cln)
            <div class="img">
                <img src="{{ asset('/storage/images/calonKetua/' .$cln->image) }}" style="width: 200px; height: 200px;">
                <label class=" container">
                    <input type="radio" style="width: 20px; height: 20px; margin-top: 10px; margin-bottom:10px"
                        name="calon" value="{{$cln->id}}">
                    <div class="checkmark"></div>
                </label>
            </div>
            @endforeach
        </div>
        <button type="submit" class="mx-auto "
            style="display:flex; justify-content:center; width:8rem; height: 2.5rem; background-color:#2b3467; border-radius:10px; display:flex; align-items:center; color:white;"
            onclick=" showPopup()">Kirim</button>
    </form>
</div>

</div>
<script>
// Update date and time
function updateDateTime() {
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

setInterval(updateDateTime, 1000); // Update every second

function showPopup() {
    alert("Terima Kasih Sudah Memilih !!!");
}
</script>
@endsection