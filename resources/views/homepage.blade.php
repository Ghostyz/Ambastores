<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Ambastore</title>
  <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
  <style>
    .header-footer-container {
      display: flex;
      justify-content: space-between;
      width: 100%;
      padding: 10px 20px;
      box-sizing: border-box;
      background-color: #592161;
      border-radius: 15px;
    }

    .footer {
      padding: 40px 0;
    }

    .header-container,
    .container_footer {
      max-width: 1200px;
      margin: 0 auto;
    }

    :root {

      --first-color: hsl(0, 0%, 0%);
      --title-color: hsl(0, 0%, 15%);
      --text-color: hsl(0, 0%, 0%);
      --body-color: #d4c4ff(0, 0%, 95%);
      --container-color: #e8e1fc;

      --body-font: "Poppins", sans-serif;
      --h2-font-size: 1.25rem;
      --small-font-size: .813rem;
    }

    @media screen and (min-width: 1120px) {
      :root {
        --h2-font-size: 1.5rem;
        --small-font-size: .875rem;
      }
    }

    * {
      box-sizing: border-box;
      padding: 0;
      margin: 0;
    }

    body {
      font-family: var(--body-font);
      background-color: var(--body-color);
      color: var(--text-color);
    }

    img {
      display: block;
      max-width: 100%;
      height: auto;
    }
    .card_container {
      display: grid;
      margin-inline: 1.5rem;
      padding-block: 4rem;
    }
    .card__container {
      display: grid;
      gap: 2.5rem; /* Jarak antar kartu */
      padding: 1rem; /* Padding sekitar container */
    }

    .card__container {
      display: grid;
      flex-wrap: wrap;/* Membuat kartu membungkus jika terlalu banyak */
      gap: 2rem;/* Jarak antar kartu */
      justify-content: space-between;/* Menyebar kartu agar saling sejajar */
      margin-inline: 1.5rem;
      padding-block: 1rem;
      margin-bottom: 25%;
    }

    .card__article {
      flex: 1 1 calc(25% - 1.5rem);/* Membuat setiap kartu memiliki lebar 25% dengan gap di antaranya */
      box-sizing: border-box;
      position: relative;
      overflow: hidden;
      padding: 7rem;
      margin-top: -100px;
    }

    .card__img {
      width: 100%;
      height: 500px;/* Sesuaikan tinggi gambar sesuai kebutuhan */
      object-fit: cover;
      border-radius: 1.5rem;
      transition: transform 0.3s ease-in-out;
    }

    .card__article:hover .card__img {
      transform: scale(1.1);
      /* Zoom gambar saat card di-hover */
    }

    .card__data {
      width: 100%;
      padding: 1.5rem 2rem;
      background-color: var(--container-color);
      border-radius: 1rem;
      position: absolute;
      bottom: 5rem;
      left: 0;
      right: 0;
      margin-inline: auto;
      opacity: 0%;
      transition: opacity 1s 1s;
    }

    .card__description {
      display: block;
      font-size: var(--small-font-size);
      margin-bottom: .25rem;
    }

    .card__title {
      font-size: var(--h2-font-size);
      font-weight: 500;
      color: var(--title-color);
      margin-bottom: .75rem;
    }

    .card__button {
      text-decoration: none;
      font-size: var(--small-font-size);
      font-weight: 500;
      color: var(--first-color);
    }

    .card__button:hover {
      text-decoration: underline;
    }

    /* Naming animations in hover */
    .card__article:hover .card__data {
      animation: show-data 1s forwards;
      opacity: 1;
      transition: opacity .3s;
    }

    .card__article:hover {
      animation: remove-overflow 2s forwards;
    }

    .card__article:not(:hover) {
      animation: show-overflow 2s forwards;
    }

    .card__article:not(:hover) .card__data {
      animation: remove-data 1s forwards;
    }

    /* Card animation */
    @keyframes show-data {
      50% {
        transform: scale(1.2);
      }

      100% {
        transform: scale(1);
      }
    }

    @keyframes remove-overflow {
      to {
        overflow: initial;
      }
    }

    @keyframes remove-data {
      0% {
        transform: scale(1.2);
      }

      50% {
        transform: scale(1);
      }

      100% {
        transform: scale(1);
      }
    }

    @keyframes show-overflow {
      0% {
        overflow: initial;
        pointer-events: none;
      }

      50% {
        overflow: hidden;
      }
    }

    /* For small devices */
    @media screen and (max-width: 340px) {
      .container {
        margin-inline: 1rem;
      }

      .card__data {
        width: 250px;
        padding: 1rem;
      }
    }

    /* For medium devices */
    @media screen and (min-width: 768px) {
      .card__container {
        grid-template-columns: repeat(3, 1fr);
      }
    }

    /* For large devices */
    @media screen and (min-width: 1120px) {
      .container {
        height: 100vh;
      }

      .card__container {
        grid-template-columns: repeat(3, 1fr);
      }

      .card__img {
        width: 348px;
      }

      .card__data {
        width: 316px;
        padding-inline: 2.5rem;
      }
    }

    * {
      margin: 0;
      padding: 5px;
      box-sizing: border-box;
    }

    nav a:hover {
      color: rgb(255, 121, 121);
    }

    nav li {
      padding: 5px;
      text-align: center;
      display: inline-block;
      border-radius: 25px;
    }

    header {
      background-color: #000;
      width: 100%;
      padding: 10px;
      border-radius: 15px;
    }

    .header-container {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 0 1rem;
    }

    .logo-text-container {
      display: flex;
      align-items: center;
      justify-content: flex-start;
      /* Menyusun logo ke kiri */

    }

    .logo-header {
      width: 70px;
      height: auto;
      margin-right: 20px;
      /* Jarak antara logo dan nama brand */
      border-radius: 50%;
    }

    .brand-name {
      color: #fff;
      font-size: 1.5rem;
      font-weight: bold;
      margin-left: 0px;
      /* Jarak antara logo dan teks */
    }

    nav {
      display: flex;
      justify-content: flex-end;
      /* Menyusun menu navigasi ke kanan */
    }

    nav ul {
      display: flex;
      margin: 0;
      padding: 0;
      list-style: none;
    }

    nav li {
      margin-left: 20px;
    }

    nav a {
      color: #fff;
      /* Warna teks putih */
      text-decoration: none;
      font-weight: bold;
    }

    nav a:hover {
      color: #d4c4ff ;/* Warna hover */
      transform: scale(1.2);
    }

    body {
      margin: 0;
      font-family: 'Raleway', sans-serif;
      background: linear-gradient(135deg, #ffffff, #ffffff);
      background-size: cover;
      background-attachment: fixed;
      /* Untuk efek parallax jika diinginkan */
    }


    .container {
      padding: 1rem;
    }

    .slider-wrapper {
      position: relative;
      max-width: 80%;
      margin: 0 auto;
      overflow: hidden;
      border-radius: 18px;
      aspect-ratio: 16 / 9;
    }

    .slider {
      display: flex;
      width: 100%;
      gap: 10px;
      aspect-ratio: 16 / 9;
      overflow-x: hidden;
      scroll-snap-type: x mandatory;
      scroll-behavior: smooth;
      border-radius: 0.5rem;
      -ms-overflow-style: none;
      scrollbar-width: none;
      animation: slide 3s infinite;
      transition: transform 0.5s ease;
      scroll-behavior: smooth;
    }

    .slider img {
      flex: 0 0 auto;
      width: 100%;
      height: 100%;
      scroll-snap-align: start;
      object-fit: cover;
      scroll-snap-align: start;
      border: none;
      outline: none;
      border-radius: 50px;
      transition: transform 0.3s ease, opacity 0.3s ease;
    }

    .slider-nav {
      display: flex;
      gap: 3rem;
      position: absolute;
      bottom: 1.5rem;
      left: 50%;
      transform: translateX(-50%);
    }

    .slider-nav a {
      width: 0.5rem;
      height: 0.5rem;
      border-radius: 50%;
      background-color: #fff;
      opacity: 0.75;
      transition: opacity ease 250ms;
    }

    .slider-nav a:hover {
      opacity: 1;
    }

    a {
      text-decoration: none;
      /*
        - underlined links looks ugly :) 
         */
    }

    .promo-container {
      display: flex;
      justify-content: start;
      max-width: 100%;
      max-height: 50%;
      background-color: #e8e1fc;
      padding: 1rem;
      border-radius: 10px;
      font-family: Arial, sans-serif;
      position: relative;
      align-content: center;
      box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    .promo-label {
      margin-bottom: 10px;
      display: flex;
      justify-content: center;
      justify-items: center;
      width: 10%;
      text-align: center;
      background-color: #592161;
      color: #fff;
      padding: 8px 50px;
      border-radius: 8px;
      font-size: 1rem;
    }

    .promo-info {
      position: relative;
      display: flex;
      align-items: center;
      justify-content: center;
      background-color: #d4c4ff;
      color: #000000;
      padding: 10px;
      border-radius: 8px;
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .promo-info:hover {
      background-color: #592161;
      transform: scale(1.05);
    }

    .promo-info::active {
      transform: scale(1.1);
      box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.4);
      background-color: #ffffff;/* Ganti warna jika diinginkan */
    }

    .promo-info img {
      width: 50px;
      height: 50px;
      margin-right: 0px;
    }

    .promo-text {
      display: flex;
      font-size: 0.9rem;
    }

    /* Harga coret */
    .original-price {
      display: absolute;
      text-decoration: line-through;
      color: #000000;
      font-size: 0.8rem;
      margin-right: 5px;
    }

    /* Harga promo */
    .discounted-price {
      font-weight: bold;
      font-size: 1rem;
    }

    .menu-container {
      display: flex;
      justify-content: space-between;/* Menyusun elemen ke kiri dan kanan */
      align-items: center;/* Vertikal centering untuk elemen */
      padding: 10px 20px;
      background-color: #592161;/* Warna latar belakang untuk container */
      border-radius: 15px;
      margin-top: 30px;/* Jarak dari elemen sebelumnya */
    }

    .menu-left {
      display: flex;
      align-items: center;
    }

    .all-games {
      display: flex;
      font-size: 1rem;/* Ukuran teks lebih besar untuk label */
      color: #000000;
      cursor: pointer;
      background-color: #e8e1fc;
      padding: 8px 20px;
      border-radius: 15px;
    }

    .all-games:hover {
      background-color: #ffffff;
      transform: scale(1.05);
    }

    .all-games::active {
      transform: scale(1.1);
      box-shadow: 0px 4px 15px rgba(0, 0, 0, 0.4);
      background-color: #ffffff;/* Ganti warna jika diinginkan */
    }

    .search-container {
      display: flex;
      align-items: center;
      justify-content: center;
      margin: 0px;
    }

    .search-box {
      padding: 7px;
      width: 300px;
      font-size: 16px;
      border: 1px solid #ccc;
      border-radius: 15px 0 0 15px;
      outline: none;
    }

    .search-button {
      padding: 10px 20px;
      background-color: #e8e1fc;
      color: rgb(0, 0, 0);
      border: none;
      border-radius: 0 15px 15px 0;
      cursor: pointer;
    }

    .search-button:hover {
      background-color: #b8b1c9;
    }


    .container_footer {
      max-width: 1170px;
      margin: auto;
    }

    .row {
      display: flex;
      flex-wrap: wrap;
    }

    ul {
      list-style: none;
    }

    .footer {
      position: flex;
      width: 100%;
      padding: 20px 0;
      background-color: #592161;
      /* Warna latar belakang footer */
      color: #ffffff;
      /* Warna teks footer */
      text-align: center;
      /* Menyusun teks ke tengah */
      margin-top: 120px;
      /* Memindahkan footer ke bawah */
      border-radius: 25px;
    }

    .footer-col {
      width: 25%;
    }

    .footer-col h4 {
      font-size: 18px;
      color: #ffffff;
      text-transform: capitalize;
      margin-bottom: 35px;
      font-weight: 500;
      position: relative;
    }

    .footer-col ul li:not(:last-child) {
      margin-bottom: 10px;
    }

    .footer-col ul li a {
      font-size: 16px;
      text-transform: capitalize;
      color: #ffffff;
      text-decoration: none;
      font-weight: 300;
      color: #bbbbbb;
      display: block;
      transition: all 0.3s ease;
    }

    .footer-col ul li a:hover {
      color: #ffffff;
    }

    .footer-col .social-links a {
      display: inline-block;
      height: 40px;
      width: 40px;
      background-color: rgba(255, 255, 255, 0.2);
      margin: 0 10px 10px 0;
      text-align: center;
      line-height: 40px;
      border-radius: 50%;
      color: #ffffff;
      transition: all 0.5s ease;
    }

    .footer-col .social-links a:hover {
      color: #24262b;
      background-color: #ffffff;
    }

    /*responsive*/
    @media(max-width: 767px) {
      .footer-col {
        width: 50%;
        margin-bottom: 30px;
      }
    }

    @media(max-width: 574px) {
      .footer-col {
        width: 100%;
      }
    }

    footer {
      position: flex;
      width: 100%;
      padding: 20px 0;
      background-color: #000000;/* Warna latar belakang footer */
      color: #ffffff;/* Warna teks footer */
      text-align: center;/* Menyusun teks ke tengah */
      margin-bottom: -20px;/* Memindahkan footer ke bawah */
      border-radius: 25px;
    }

    footer p {
      margin: 0;
      font-size: 1rem;
      margin-top: 40px;
      bottom: -20px;
    }

    .footer-col {/* ... other styles ... */
      justify-content: center;
      flex: 1;/* Make each column equally flexible */
      text-align: center;/* Center content by default */
    }

    .footer-col:last-child {/* Style the last column (Follow Us) */
      text-align: center;/* Align content to the right */
    }

    .footer-container {
      width: 100%;
    }
  </style>
</head>

<body>
  <header class="header-footer-container">
    <div class="header-container">
      <div class="logo-text-container">
        <a href="{{ route('homepage') }}">
          <img src="logo.png" alt="Logo" class="logo-header">
        </a>
        <span class="brand-name">Ambastore</span>
      </div>
      <nav>
        <ul>
          @auth
            <li>Welcome, {{ Auth::user()->Username }}</li>
          @endauth
          @guest
            <li><a href="{{ route('register.form') }}">Masuk/Daftar</a>
            </li>
          @endguest
        </ul>
      </nav>
    </div>
  </header>
  <section class="container">
    <div class="slider-wrapper">
      <div class="slider">
        <img id="slide-1" src="register.png" alt="Slide 1" />
        <img id="slide-2" src="login.jpeg" alt="Slide 2" />
        <img id="slide-3" src="njir.jpg" alt="Slide 3" />
      </div>
      <div class="slider-nav">
        <a href="#slide-1"></a>
        <a href="#slide-2"></a>
        <a href="#slide-3"></a>
      </div>
    </div>
  </section>
  <div class="promo-label">Promo</div>
  <div class="promo-container">
    
    <a href="{{ route('IGI.form') }}" class="promo-link">
      <div class="promo-info">
        <img src="gc.png" alt="Icon Promo">
        <div class="promo-details">
          <div class="promo-text">1980+260 Genesis</div>
          <div class="promo-price">
            <span class="original-price">Rp 386.000</span>
            <span class="discounted-price">Rp 350.000,-</span>
          </div>
        </div>
      </div>
    </a>
  </div>
  <div class="menu-container">
    <div class="menu-left">
      <div class="all-games">All Games</div>
    </div>
    <div class="search-container">
      <form action="/search" method="GET">
        <input type="search" name="query" placeholder="Cari games..." class="search-box" />
        <button type="submit" class="search-button">Cari</button>
      </form>
    </div>
  </div>
  <div class="card_container">
    <div class="card__container">
      <article class="card__article">
        <a href="{{ route('IGI.form') }}">
          <img src="chasca.jpeg" alt="image" class="card__img">
        </a>
        <div class="card__data">
          <span class="card__description">Hoyoverse Games</span>
          <h2 class="card__title">Genshin Impact</h2>
        </div>
      </article>
      <article class="card__article">
        <a href="item-valo.html">
          <img src="clove.jpg" alt="image" class="card__img">
        </a>
        <div class="card__data">
          <span class="card__description">Riot Games</span>
          <h2 class="card__title">Valorant</h2>
        </div>
      </article>
      <article class="card__article">
        <a href="item-hsr.html">
          <img src="hsr.jpeg" alt="image" class="card__img">
        </a>
        <div class="card__data">
          <span class="card__description">Hoyoverse Games</span>
          <h2 class="card__title">Honkai: Star Rail</h2>
        </div>
      </article>

    </div>

</body>
<script>
  // Ambil elemen slider
  const slider = document.querySelector('.slider');
  let scrollAmount = 0;
  const scrollStep = slider.offsetWidth; // Panjang scroll setiap langkah
  const delay = 3000; // Waktu jeda antar slide dalam milidetik

  function autoScroll() {
    scrollAmount += scrollStep;

    if (scrollAmount >= slider.scrollWidth) {
      scrollAmount = 0; // Kembali ke awal jika mencapai akhir slider
    }

    slider.scrollTo({
      left: scrollAmount,
      behavior: 'smooth',
    });
  }

  // Set interval untuk menjalankan fungsi autoScroll
  setInterval(autoScroll, delay);
</script>

</html>


<!-- Footer -->
<footer class="footer">
  <div class="footer-container">
    <div class="row">
      <div class="footer-col">
        <h4>Payment Method</h4>
        <ul>
          <li><a href="#">QRIS</a></li>
          <li><a href="#">E-Wallet</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Contact Us</h4>
        <ul>
          <li><a href="#">Amba@gmail</a></li>
          <li><a href="#">08123</a></li>
        </ul>
      </div>
      <div class="footer-col">
        <h4>Follow Us</h4>
        <div class="social-links">
          <a href="https://facebook.com" target="_blank" class="social-icon">
            <img src="fb.png" alt="Facebook" class="social-icon-img">
          </a>
          <a href="https://instagram.com" target="_blank" class="social-icon">
            <img src="ig.png" alt="Instagram" class="social-icon-img">
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>

</html>