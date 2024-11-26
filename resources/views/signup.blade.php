<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
  <title>Sign Up</title>

  <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" />

  <style>
    * {
      margin: 0;
      padding: 5px;
      box-sizing: border-box;
    }

    body {
      font-family: 'Raleway', sans-serif;
      background-image: url(register.png);
      color: #fff;
      line-height: 1.8;
    }

    a {
      text-decoration: none;
      /*
        - underlined links looks ugly :) 
         */
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
      color: #000000;
      border-radius: 25px;
      background: rgba(0, 0, 0, 0.8);
      /* Membuat latar belakang putih dengan transparansi */
      box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
      /* Efek bayangan lembut */
      /* 
          This is the white area around the form and heading, etc
        */
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
      border-radius: 10px;
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
      background: #A92269;
      border-radius: 15px;
      width: 100%;
      padding: 10px;
      margin-top: 40px;
      display: block;
      color: #fff;
      cursor: pointer;
      /* 
          Button should wrap accross 100% and display as block
          Background color for button is #49c1a2
        */
    }

    .form-wrap button:hover {
      background: #5e133b;
      /* 
          Hover background color for button is #37a08e
        */
    }

    .form-wrap .bottom-text {
      font-size: 12px;
      margin-top: 30px;
      /* 
          Bottom text is smaller
        */
    }

    .bottom-text a {
      color: #ffffff;
      font-weight: bold;
    }

    footer {
      text-align: center;
      margin-top: 25px;
      color: #ffffff;
      /* 
        Should be centered
       */
    }
    

    /* footer link */
    footer a {
      color: #ffffff;
      font-weight: bold;
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

      <form action="/signup" Method="POST">
        @csrf
        <div class="form-group">
          <label for="first-name">Username</label>
          <input type="text" name="username" id="first-name" placeholder="Masukkan username" />
        </div>

        <div class="form-group">
          <label for="nomor">No HP</label>
          <input type="text" name="nomor" id="nomor" placeholder="Masukkan No Handphone" />
        </div>

        <div class="form-group">
          <label for="password">Password</label>
          <input type="password" name="password" id="password" placeholder="Buat Password" />
        </div>

        <!-- <div class="form-group">
          <label for="password2">Konfirmasi Password</label>
          <input type="password" name="pasword2" id="password2" placeholder="Konfirmasi Password" />
        </div> -->

        <button type="submit" class="btn">Sign Up</button>

        <footer>
          <p>Udah punya akun? <a href="{{ route('login.form') }}">Login Disini</a></p>
        </footer>
      </form>
    </div>
  </div>
</body>

</html>