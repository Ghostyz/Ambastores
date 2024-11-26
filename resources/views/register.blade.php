<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
    <title>Masuk/Daftar</title>
    
    <link
      href="https://fonts.googleapis.com/css?family=Raleway"
      rel="stylesheet"
    />

    <style>
      * {
        margin:0;
        padding:5px;
        box-sizing:border-box;
      }

      body {
        font-family: 'Raleway',sans-serif;
        background-image: url(clove.jpeg) ;
        background-size: cover; /* Membuat gambar memenuhi layar */
        background-position: center top; /* Memusatkan gambar */
        background-repeat: no-repeat; /* Mencegah gambar berulang */
        color:#fff;
        line-height:1.8;
      }

      a {
        text-decoration: none;/*- underlined links looks ugly :) */
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
        margin-top:15px;
        /* 
          Each label, input is wrapped in .form-group
        */
      }

      .form-wrap button {
        background:#A92269;
        border-radius: 15px;
        width: 100%;
        padding:10px;
        margin-top: 150px;
        display:block;
        color:#fff;
        cursor: pointer;
        /* 
          Button should wrap accross 100% and display as block
          Background color for button is #49c1a2
        */
      }

      .form-wrap button:hover {
        background:#5e133b;
        /* 
          Hover background color for button is #37a08e
        */
      }

      .form-wrap .bottom-text {
        font-size: 12px;
        margin-top:20px;
        /* 
          Bottom text is smaller
        */
      }

      footer {
        text-align: center;
        margin-top: -15px;
        /* 
        Should be centered
       */
      }

      /* footer link */
      footer a {
        color: #ffffff;
        /*Footer link color is #49c1a*/
      }
      /* Styling untuk logo */
      .logo {
        display: block;
        margin: 0 auto 20px auto;
        width: 200px; /* Tentukan ukuran logo */
        height: 200px; /* Tentukan ukuran logo */
        border-radius: 50%; /* Ubah menjadi lingkaran */
        object-fit: cover; /* Pastikan logo memenuhi lingkaran */
      }
    </style>
  </head>

  <body>
    <div id="container">
        <div class="form-wrap">
            <h1><a href="{{ url('/') }}"><img src="logo.png" alt="Logo Amba Store.png" class="logo"></a></h1>

            <form action="{{ route('signup.submit') }}" method="GET">
                @csrf
                <button type="submit" class="btn">Daftar</button>
            </form>
        </div>

        <footer>
            <p>Udah punya akun? <a href="{{ route('login.form') }}">Login Disini</a></p>
        </footer>
    </div>
   </body>
</html>