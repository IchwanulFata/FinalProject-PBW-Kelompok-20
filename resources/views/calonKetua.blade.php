<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>

    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;1,700&display=swap"
      rel="stylesheet"
    />

    <script src="https://unpkg.com/feather-icons"></script>

    <link rel="stylesheet" href="{{url('css/calonKetua.css')}}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
  </head>
  <body>
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
            <a href="/homeAdmin" id="iconRekap"
              ><i data-feather="home"></i>Rekapan Pemilihan</a
            >
          </div>
          <div class="menuCalon">
            <a id="iconCalon" class="fw-bold"
              ><i data-feather="user"></i>Daftar Calon</a
            >
          </div>
          <div class="menuPemilih">
            <a href="/pemilihAdmin" id="iconPemilih"
              ><i data-feather="users"></i>Daftar Pemilih</a
            >
          </div>
          <div class="menuLogout">
            <a href="/admin" id="iconLogout"><i data-feather="log-out"></i>Logout</a>
          </div>
        </div>
      </div>

      <div class="d-flex justify-content-end mt-3 me-3">
        <div
          class="userAccount d-flex justify-content-evenly align-items-center"
        >
          <img src="./gambar/download.png" />
          <h5>Ardiansyah</h5>
        </div>
      </div>
      <a href="#" class="btnTambahCalonKetua d-flex align-items-center"
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
                <th scope="col">No. Urut</th>
                <th scope="col">Nama Calon</th>
                <th scope="col">NIS</th>
                <th scope="col">Visi</th>
                <th scope="col">Misi</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody class="table-group-divider">
              <tr>
                <th scope="row">1</th>
                <td>Ardiansyah</td>
                <td>123456</td>
                <td>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Sapiente, commodi.
                </td>
                <td>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Sapiente, commodi.
                </td>
                <td>
                  <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr>
              <tr>
                <th scope="row">2</th>
                <td>Ichwanul Fata</td>
                <td>123457</td>
                <td>
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Blanditiis, deleniti.
                </td>
                <td>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Sapiente, commodi.
                </td>
                <td>
                  <button type="button" class="btn btn-danger">Hapus</button>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <script
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    >
      feather.replace();
    </script>
  </body>
</html>
