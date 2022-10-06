<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="https://hasbiannur.github.io/css/login.css">
</head>
<body>
    <div class="login-box">
        <h2>Login</h2>
        <form action="/actionlogin" method="POST">
            @csrf
          <div class="user-box">
            <input type="text" name="email" required="" autocomplete="off">
            <label>Email</label>
          </div>
          <div class="user-box">
            <input type="password" name="password" required="">
            <label>Password</label>
          </div>
              <input type="submit" name="login" value="Login">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
          </a>
    
          <a href="/">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Kembali
          </a>
    
          <a href="registrasi">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            Belum punya akun?
          </a>
        </form>
      </div>
</body>
</html>