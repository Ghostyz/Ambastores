<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
  <title>Login</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />

  <style>
    * {
      margin: 0;
      padding: 5px;
      box-sizing: border-box;
    }

    body {
      font-family: 'Raleway', sans-serif;
      background-image: url(login.jpeg);
      background-size: cover;
      /* Membuat gambar memenuhi layar */
      background-position: center top;
      /* Memusatkan gambar */
      background-repeat: no-repeat;
      /* Mencegah gambar berulang */
      color: #fff;
      line-height: 1.8;
    }

    a {
      text-decoration: none;
    }

    #container {
      margin: 30px top;
      max-width: 500px;
      max-height: 1525px;
      padding: 20px;
      /* 
        -Remember, margin: auto on left and right will center a block element 
        -I would also set a "max-width" for responsiveness
        -May want to add some padding
        */
    }

    .form-wrap {
      padding: 15px 25px;
      color: #000;
      border-radius: 25px;
      background: rgba(0, 0, 0, 0.9);
      /* Background putih dengan sedikit transparansi */
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      /* Efek bayangan */
      max-height: 1700px;
    }

    .form-wrap h1,
    .form-wrap p {
      text-align: center;
      /* 
          May want to center these
      */
    }

    .form-wrap .form-group {
      margin-top: 15px;
      /* 
          Each label, input is wrapped in .form-group
        */
    }

    .form-wrap .form-group label {
      display: block;
      color: #ffffff;
      border-radius: 15px;
      /* 
          Label should be turned into a block element
        */
    }

    .form-wrap .form-group input {
      width: 100%;
      padding: 10px;
      border: #ddd 1px solid;
      border-radius: 10px;
      /* 
          Inputs should reach accross the .form-wrap 100% and have some padding
        */
    }

    .form-wrap button {
      background: #b84c8d;
      border-radius: 15px;
      width: 100%;
      padding: 10px;
      margin-top: 40px;
      margin-bottom: 30px;
      display: block;
      color: #fff;
      cursor: pointer;
    }

    .form-wrap button:hover {
      background: #883868;
      /* 
          Hover background color for button is #37a08e
        */
    }

    .form-wrap .bottom-text {
      font-size: 16px;
      margin-top: 10px;
      text-align: center;
      color: #ffffff;
    }
    .bottom-text a {
      color: #ffffff;
      font-weight: bold;
    }


    footer {
      text-align: center;
      margin-top: -15px;
      color: #fff;
      /* 
        Should be centered
       */
    }

    /* footer link */
    footer a {
      color: #ffffff;
      margin-top: -15px;
      /* 
          Footer link color is #49c1a2
        */
    }

    /* Styling untuk logo */
    .logo {
      display: block;
      margin: 0 auto 20px auto;
      width: 200px;
      /* Tentukan ukuran logo */
      height: 200px;
      /* Tentukan ukuran logo */
      border-radius: 50%;
      /* Ubah menjadi lingkaran */
      object-fit: cover;
      /* Pastikan logo memenuhi lingkaran */
    }
  </style>
</head>
  <body>
    <div id="container">
      <div class="form-wrap">
        <h1><a href="{{ route('homepage') }}"><img src="logo.png" alt="Logo Amba Store.png" class="logo"></a></h1>

        <!-- Menampilkan error jika login gagal -->
        @if ($errors->has('login'))
          <p style="color: red; text-align: center;">{{ $errors->first('login') }}</p>
        @endif

        <form action="{{ route('login.submit') }}" method="POST">
          @csrf
          <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="Username" id="username" placeholder="Masukkan username" required />
          </div>

          <div class="form-group">
            <label for="password">Password</label>
            <input type="password" name="Password" id="password" placeholder="Masukkan Password" required />
          </div>

          <button type="submit" class="btn">Log In</button>

          <div class="bottom-text">
            <p>Belum punya akun? <a href="{{ route('register.form') }}">Sign Up Disini</a></p>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>