<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <title>Registrasi</title>
    <link rel="stylesheet" href="{{('css/user/registerUser.css')}}" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous" />
    <script src="https://unpkg.com/feather-icons"></script>
</head>

<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-4 sidebar d-flex justify-content-center align-items-center">
                <!-- Judul slidebar -->
                <h1>Selamat Datang</h1>
            </div>
            <div class="col-md-8 mt-5">
                <h1 class="d-flex justify-content-center mt-5">Buat Akun</h1>
                <p class="fw-bold"></p>
                <div class="row mt-5">
                    <div class="col-md-8">
                        <form method="post" action="{{url('/post-register')}}" enctype="multipart/form-data">
                            @csrf
                            <!-- Input Nama -->
                            <input type="text" id="nama" name="nama" placeholder="Nama" class="mx-5 my-2" /><br /><br />
                            <!-- Input NIS -->
                            <input type="text" id="nis" name="nis" placeholder="NIS" class="mx-5 my-2" /><br /><br />
                            <!-- Input Email -->
                            <input type="email" id="email" name="email" placeholder="Email"
                                class="mx-5 my-2" /><br /><br />
                            <div>
                                <!--Input Password -->
                                <input id="password" placeholder="Password" type="password"
                                    class="mx-5 my-2 @error('password') is-invalid @enderror" name="password" required
                                    autocomplete="current-password">
                                <br /><br />
                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong style="margin-left: 50px;">{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <!--Konfirmasi Password  -->
                            <input id="password" placeholder="Konfirmasi Password" type="password"
                                class=" mx-5 my-2 @error('password') is-invalid @enderror" name="password_confirmation"
                                required autocomplete="current-password">

                    </div>
                    <div class="pict col-md-2 mt-5">
                        <!-- Tampilan gambar profil -->
                        <img src="asset('/storage/images/user' .$user->image)" class="d-flex justify-content-center" />

                        <div class="input-group mb-3 iconUp">
                            <!-- Tombol untuk memilih gambar -->
                            <label class="input-group-text rounded-circle d-flex justify-content-center"
                                style="width:70px; height: 70px; background-color:aqua" for="inputGroupFile01">
                                <i data-feather="upload"></i>
                            </label>
                            <input type="file" name="image" class="form-control" hidden id="inputGroupFile01">
                        </div>
                        <!-- Tombol Daftar -->
                        <button type="submit" class="btnDaftar d-flex align-items-center  mx-0">Daftar</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    feather.replace();
    </script>
</body>

</html>