<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Document</title>

  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,600;0,700;1,700&display=swap" rel="stylesheet" />

  <script src="https://unpkg.com/feather-icons"></script>

  <link rel="stylesheet" href="{{url('css/user/editDataCalonKetua.css')}}" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
</head>

<body>
  <div class="container-fluid">
    <div class="row">
      <div class="col-md-4 sidebar d-flex justify-content-center align-items-center">
        <h1>Edit Data Calon Ketua</h1>
      </div>
      <div class="col-md-8 mt-5">
        <div class="row mt-5">
          <div class="col-md-8 mt-5">
            <form method="post" action="{{url('/register')}}" class="mt-5">
              @csrf
              <input type="text" id="nama" name="nama" placeholder="Nama" class="mx-5 my-3" />
              <input type="text" id="nomorUrut" name="nomorUrut" placeholder="Nomor Urut" class="mx-5 my-3" />
              <input type="email" id="email" name="email" placeholder="Email" class="mx-5 my-3"/>
              <textarea type="text" id="visi" name="visi" placeholder="Visi" class="mx-5 my-3 text-start "></textarea>
              <textarea type="text" id="misi" name="misi" placeholder="Misi" class="mx-5 my-3 text-start "></textarea>
          </div>
          <div class="pict col-md-2 mt-5">
            <img src="{{url('/images/download.jpg')}}" class="d-flex justify-content-center mt-5" />
            <div class="input-group mb-3 iconUp">
              <label class="input-group-text rounded-circle d-flex justify-content-center" style="width:70px; height: 70px; background-color:aqua" for="inputGroupFile01">
              <i data-feather="upload"></i>
              </label>
              <input type="file" class="form-control" hidden id="inputGroupFile01">
            </div>

            <button type="submit" class="btnTambah d-flex align-items-center my-1 mx-0">Ubah</button>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    feather.replace();
  </script>
</body>

</html>