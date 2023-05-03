<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title>Registrasi</title>
    <link rel="stylesheet" href="{{('css/registerUser.css')}}" />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ"
      crossorigin="anonymous"
    />
    <script src="https://unpkg.com/feather-icons"></script>
  </head>

  <body>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-4 sidebar d-flex justify-content-center align-items-center">
          <h1>Selamat Datang</h1>
        </div>
        <div class="col-md-8 mt-5">
          <h1 class="d-flex justify-content-center mt-5">Buat Akun</h1>
          <p class="fw-bold"></p>
          <div class="row mt-5">
            <div class="col-md-8">
              <form method="post" action="{{url('/register')}}">
                @csrf
                <input
                  type="text"
                  id="nama"
                  name="nama"
                  placeholder="Nama"
                  class="mx-5 my-2"
                /><br /><br />
                <input
                  type="text"
                  id="username"
                  name="username"
                  placeholder="Username"
                  class="mx-5 my-2"
                /><br /><br />
                <input
                  type="email"
                  id="email"
                  name="email"
                  placeholder="Email"
                  class="mx-5 my-2"
                /><br /><br />
                <input
                  type="password"
                  id="password"
                  name="password"
                  placeholder="Password"
                  class="mx-5 my-2"
                /><br /><br />
                <input
                  type="password"
                  id="konfirmasi_password"
                  name="konfirmasi_password"
                  placeholder="konfirmasi Password"
                  class="mx-5 my-2"
                /><br /><br />
              </div>
              <div class="pict col-md-2 mt-5">
                <img
                src="{{url('/images/download.jpg')}}"
                class="d-flex justify-content-center"
                />
                <button type="submit" class="btn btn-primary d-flex align-items-center my-4 mx-0"
                >Daftar</button
                >
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
      crossorigin="anonymous"
    >
  feather.replace();
  </script>
  </body>
</html>
