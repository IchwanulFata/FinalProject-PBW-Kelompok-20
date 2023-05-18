<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="{{('css/user/loginUser.css')}}">


</head>

<body>
    <div class="sidebar">
        <!-- Sidebar content -->
        <h1>E-Voting</h1>
        <div class="login">
            <h2>Login</h2>
            <form action="{{ url('/login') }}" method="post">
                @csrf
                <!-- Input untuk email -->
                <input type="email" name="email" class="formUsername" placeholder="Email" id="login-username" autofocus
                    required>

                <!-- Input untuk password -->
                <input type="password" name="password" class="formPassword" placeholder="Password" id="login-pass">

                <!-- Tombol Masuk -->
                <button type="submit" class="buttonLogin mb-2">Masuk</button>
            </form>
            <p align="center"> Belum memiliki akun? klik <a href="/register">Daftar</a></p>
        </div>
    </div>
    </div>
</body>

</html>