@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{url('css/admin/calonKetua.css')}}" />
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
            <a href="/rekapan-pemilihan" id="iconRekap"
              ><i data-feather="home"></i>Rekapan Pemilihan</a
            >
          </div>
          <div class="menuCalon">
            <a id="iconCalon" class="fw-bold"
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
        <div
          class="userAccount d-flex justify-content-evenly align-items-center"
        >
          <img src="{{ asset('/storage/images/user/fajri.png') }}" />
          <h5>Ardiansyah</h5>
        </div>
      </div>
      <a href="{{ url('/create-calon-ketua') }}" class="btnTambahCalonKetua d-flex align-items-center"
        >Tambah Calon Ketua</a
      >

      <div class="daftarCalon d-flex justify-content-center">
        <div>
          <h2>Daftar Calon</h2>
        </div>
        <div style="width: 65%; margin-left: 450px; margin-top: 380px">
          <table class="table table-primary">
            <thead>
              <tr>
                <th>No. Urut</th>
                <th>Nama Calon</th>
                <th>NIS</th>
                <th>Visi</th>
                <th>Misi</th>
                <th>Aksi</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              @foreach($calon_ketua as $item)
              <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $item->nama_calon }}</td>
                <td>{{ $item->nis }}</td>
                <td>{{ $item->visi }}</td>
                <td>{{ $item->misi }}</td>
                <td>
                  <a href="{{ url('/edit-calon-ketua',$item->id) }}"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                    <form method="POST" action="{{ url('/delete-calon-ketua' . '/' . $item->id) }}" accept-charset="UTF-8" style="display:inline">
                      {{ method_field('POST') }}
                      {{ csrf_field() }}
                      <button type="submit" id="deleteButton" class="btn btn-danger btn-sm" title="Delete Student" onclick= return confirm(&quot;Confirm delete?&quot;)><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                    </form>
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div id="modal" class="modal" style="display: none; position: fixed; z-index: 1; left: 0; top: 0; width: 100%; height: 100%; overflow: auto; background-color: rgba(0, 0, 0, 0.5); border-radius: 20px">
      <div class="modal-content d-flex justify-content-center align-items-center w-25 h-25" style="background-color: #0784B5; margin: 0 auto; margin-top: 15%; padding: 20px; border: 1px solid #888; width: 80%; max-width: 400px; border-radius:10px">
        <span class="close" style="color: #aaa; float: right; font-size: 28px; font-weight: bold;"></span>
        <p>Data Terhapus</p>
      </div>
    </div>

    <script>
    document.getElementById("deleteButton").addEventListener("click", function() {
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
    </script>
@endsection