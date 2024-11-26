<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <link rel="stylesheet" href="{{asset('css/style.css')}}">
  <link rel="stylesheet" media="screen and (max-width: 768px)" href="css/mobile.css">
  <link rel="icon" type="image/png" href="{{ asset('logo.png') }}">
  <title>Genshin Impact</title>

  <!-- <link href="https://fonts.googleapis.com/css?family=Raleway" rel="stylesheet" /> -->
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
          <li><a href="{{ route('register.form') }}">Masuk/Daftar</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <div class="page-content">
    <div class="promo-label">Promo</div>
    <div class="harga-container">
      <div class="item">
        <label class="pilih-harga-option">
          <div class="harga-info">
            <input type="radio" name="pilih-harga" />
            <img src="gc.png" alt="Icon harga">
            <div class="harga-details">
              <div class="harga-text">1980+260 Genesis</div>
              <div class="harga-price">
                <span class="original-price">Rp 386.000</span>
                <span class="discounted-price">Rp 350.000,-</span>
              </div>
            </div>
          </div>
        </label>
        <label class="pilih-harga-option">
          <div class="harga-info">
            <input type="radio" name="pilih-harga" />
            <img src="gc.png" alt="Icon harga">
            <div class="harga-details">
              <div class="harga-text">1980+260 Genesis</div>
              <div class="price-2">
                <span class="price-2">Rp 386.000</span>
              </div>
            </div>
          </div>
        </label>
        <label class="pilih-harga-option">
          <div class="harga-info">
            <input type="radio" name="pilih-harga" />
            <img src="gc.png" alt="Icon harga">
            <div class="harga-details">
              <div class="harga-text">1980+260 Genesis</div>
              <div class="price-2">
                <span class="price-2">Rp 386.000</span>
              </div>
            </div>
          </div>
        </label>
        <label class="pilih-harga-option">
          <div class="harga-info">
            <input type="radio" name="pilih-harga" />
            <img src="gc.png" alt="Icon harga">
            <div class="harga-details">
              <div class="harga-text">1980+260 Genesis</div>
              <div class="price-2">
                <span class="price-2">Rp 386.000</span>
              </div>
            </div>
          </div>
        </label>
        <label class="pilih-harga-option">
          <div class="harga-info">
            <input type="radio" name="pilih-harga" />
            <img src="gc.png" alt="Icon harga">
            <div class="harga-details">
              <div class="harga-text">1980+260 Genesis</div>
              <div class="price-2">
                <span class="price-2">Rp 386.000</span>
              </div>
            </div>
          </div>
        </label>
        <label class="pilih-harga-option">
          <div class="harga-info">
            <input type="radio" name="pilih-harga" />
            <img src="gc.png" alt="Icon harga">
            <div class="harga-details">
              <div class="harga-text">1980+260 Genesis</div>
              <div class="price-2">
                <span class="price-2">Rp 386.000</span>
              </div>
            </div>
          </div>
        </label>
        <label class="pilih-harga-option">
          <div class="harga-info">
            <input type="radio" name="pilih-harga" />
            <img src="gc.png" alt="Icon harga">
            <div class="harga-details">
              <div class="harga-text">1980+260 Genesis</div>
              <div class="price-2">
                <span class="price-2">Rp 386.000</span>
              </div>
            </div>
          </div>
        </label>
        <label class="pilih-harga-option">
          <div class="harga-info">
            <input type="radio" name="pilih-harga" />
            <img src="gc.png" alt="Icon harga">
            <div class="harga-details">
              <div class="harga-text">1980+260 Genesis</div>
              <div class="price-2">
                <span class="price-2">Rp 386.000</span>
              </div>
            </div>
          </div>
        </label>
      </div>
    </div>
    <div class="info-container">
      <!-- Gambar tutorial -->
      <img src="gi-icon.jpeg" alt="Tutorial Cara Top-Up" class="info-image">

      <!-- Info text dengan langkah-langkah pembayaran -->
      <div class="info-text">
        <p>Cara melakukan pembayaran dan catatan:</p>
        <ul class="payment-steps">
          <li>- Selesaikan pembayaran sebelum batas waktu berakhir.</li>
          <li>- Bayar jumlah yang dibutuhkan.</li>
          <li>- Konfirmasi pembayaran diproses secara otomatis 1-5 menit setelah Anda membayar.</li>
        </ul>
      </div>

      <!-- Container untuk UID dan memilih server -->
      <div class="uid-server-container">
        <label for="uid">Masukkan UID</label>
        <input type="text" id="uid" placeholder="Masukkan UID Anda" />

        <label for="server">Pilih Server</label>
        <select id="server">
          <option value="SEA">SEA</option>
          <option value="ASIA">ASIA</option>
          <option value="EUROPE">EUROPE</option>
        </select>
      </div>
      <!-- Container untuk No HP -->
      <div class="nohp-container">
        <label for="nohp">Masukkan No-HP Anda</label>
        <input type="text" id="nohp" placeholder="Masukkan No-HP Anda" />
      </div>
      <!-- Container untuk memilih metode pembayaran -->
      <div class="payment-method-container">
        <label class="payment-method-option">
          <input type="radio" name="payment-method" value="qris" />
          <img src="qris.png" alt="QRIS" class="payment-icon" />
          <span>QRIS</span>
        </label>
        <label class="payment-method-option2">
          <input type="radio" name="payment-method" value="ewallet" />
          <img src="ewallet.png" alt="E-Wallet" class="payment-icon" />
          <span>E-Wallet</span>
        </label>
        <!-- Tombol Konfirmasi Pembayaran -->
        <button type="button" class="confirm-button">Konfirmasi Pembayaran</button>
      </div>
    </div>
  </div>
</body>

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
          <a href="#"><i class="fa fa-facebook"></i></a>
          <a href="#"><i class="fa fa-instagram"></i></a>
        </div>
      </div>
    </div>
  </div>
</footer>
</body>

</html>