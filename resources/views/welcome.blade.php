<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="ambastore/resources/css/homepage.css">
    <title>Halaman Utama</title>
</head>
<body>
<header class="header-footer-container">
    <div class="header-container">
      <div class="logo-text-container">
        <a href="homepage.html">
          <img src="logo.png" alt="Logo" class="logo-header">
        </a>
        <span class="brand-name">Ambastore</span>
      </div>
      <nav>
        <ul>
          <li><a href="register.html">Masuk/Daftar</a></li>
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
  <div class="promo-container">
    <div class="promo-label">Promo</div>
    <a href="item-gi.html" class="promo-link">
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
      <label for="all-games" class="all-games-label">All Games</label>
    </div>
    <div class="menu-right">
      <input type="text" id="search-box" placeholder="Search games..." />
    </div>
  </div>
  <div class="card_container">
    <div class="card__container">
      <article class="card__article">
        <a href="item-gi.html">
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
        <a href="item-lol.html">
          <img src="lol.jpeg" alt="image" class="card__img">
        </a>
        <div class="card__data">
          <span class="card__description">Riot Games</span>
          <h2 class="card__title">League Of Legends</h2>
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
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>
</html>