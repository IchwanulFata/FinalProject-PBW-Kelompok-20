@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{url('css/admin/rekapanPemilihan.css')}}" />
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
            <a id="iconRekap" class="fw-bold"
              ><i data-feather="home"></i>Rekapan Pemilihan</a
            >
          </div>
          <div class="menuCalon">
            <a href="/calon-ketua-admin" id="iconCalon"
              ><i data-feather="user"></i>Daftar Calon</a
            >
          </div>
          <div class="menuPemilih">
            <a href="/data-pemilih" id="iconPemilih"
              ><i data-feather="users"></i>Daftar Pemilih</a
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

      <div class="rekapanPemilihan d-flex justify-content-center">
        <div>
          <h2>Rekapan Pemilihan</h2>
          <div class="d-flex justify-content-center">
            <div class="sudahVote">
              <h3 class="text-center fw-bold mt-5">Total Sudah Vote</h3>
              <p class="text-center fw-bold">{{ $usersSudah }}</p>
            </div>
            <div class="belumVote">
              <h3 class="text-center fw-bold mt-5">Total Belum Vote</h3>
              <p class="text-center fw-bold">{{ $usersBelum }}</p>
            </div>
            <div class="totalPemilih">
              <h3 class="text-center fw-bold mt-5">Total Pemilih</h3>
              <p class="text-center fw-bold">{{ $usersTotal }}</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <a id="AturWaktuBtn" class="btnAturWaktu d-flex align-items-center">Atur Waktu</a>
    <div id="modal" class="modal" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.5); border-radius: 20px">
      <div class="modal-content d-flex justify-content-center align-items-center w-25 h-25" style="background-color: #0784B5; margin: 0 auto; margin-top: 15%; padding: 20px; border: 1px solid #888; width: 80%; max-width: 400px; border-radius:10px">
        <span class="close" style="color: #aaa; float: right; font-size: 28px; font-weight: bold;"></span>
        <div
      style="
        width: 400px;
        height: 300px;
        padding: 10px;
        border-radius: 20px;
        background-color: #62cdff;
      "
    >
      <h3 style="display: flex; justify-content: center; padding-top: 20px">
        Atur Waktu
      </h3>
      <form style="padding-left: 30px; padding-right: 30px" method="POST" action="{{ url('/post-time') }}">
      @csrf
        <label for="" style="margin-left: 43px; font-weight: bold"
          >Start Date</label
        >
        <div style="padding-bottom: 10px">
          <input
            type="datetime-local"
            id="start_date"
            name="start_date"
            style="
              margin-left: 43px;
              height: 40px;
              padding: 5px;
              border-radius: 15px;
              background-color: white;
            "
          />
        </div>
        <label for="" style="margin-left: 43px; font-weight: bold"
          >End Date</label
        >
        <div>
          <input
            type="datetime-local"
            id="end_date"
            name="end_date"
            style="
              margin-left: 43px;
              height: 40px;
              padding: 5px;
              border-radius: 15px;
              background-color: white;
            "
          />
        </div>
        <div style="display: flex; justify-content: center; padding-top: 20px">
          <button
            type="submit"
            style="
              background-color: #2b3467;
              width: 120px;
              height: 40px;
              color: white;
              font-size: medium;
              border-radius: 20px;
            "
          >
            Simpan
          </button>
        </div>
      </form>
    </div>
      </div>
    </div>
    <script>
    document.getElementById("AturWaktuBtn").addEventListener("click", function() {
        // Lakukan operasi penghapusan di sini
        // Jika penghapusan berhasil, tampilkan modal
        document.getElementById("modal").style.display = "block";
    });

    document.getElementsByClassName("close")[0].addEventListener("click", function() {
        // Tutup modal ketika tombol close diklik
        document.getElementById("modal").style.display = "none";
    });

    window.addEventListener("click", function(event) {
        // Tutup modal ketika mengklik di luar modal
        if (event.target == document.getElementById("modal")) {
            document.getElementById("modal").style.display = "none";
        }
    });

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
  </script>
@endsection