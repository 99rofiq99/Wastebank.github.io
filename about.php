<?php
session_start();

include 'koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>Waste Bank Information</title>
  <link rel="stylesheet" type="text/css" href="iya.css">
</head>

<body>
  <header>
    <div class="row">
      <ul class="main-nav">
        <ul class="main-nav">
          <li><a href="Home.php">Home</a></li>
          <li><a href="sampah.php">Sampah</a></li>
          <li><a href="keranjang.php">Keranjang</a></li>
          <?php if (isset($_SESSION["nasabah"])) : ?>
            <li><a href="riwayat.php">Riwayat</a></li>
          <?php endif ?>
          <li class="active"><a href="about.php">About Us</a></li>
          <li><a href="info.php">Info</a></li>
          <?php if (isset($_SESSION["nasabah"])) : ?>
            <li><a href="out.php">Logout</a></li>
          <?php else : ?>
            <li><a href="in.php">Login</a></li>
          <?php endif ?>
        </ul>

        <div class="history">
          <h1>HISTORY</h1>
          <p>Sistem Informasi Bank Sampah WBI merupakan sistem informasi yang akan diusulkan untuk membantu pengolahan data pada bank sampah, antara lain pendaftaran nasabah, transaksi penyetoran, produk yang masuk, penjualan sampah. </p>
          <li> Sampah Plastik Rp.20.000 /kg</li>
          <li> Sampah Kertas Rp.25.000 /kg</li>
          <li> Sampah Gelas Rp.30.000 /kg</li>
        </div>

        <p>.</p>
        <h2>Contact Us:
          <hr>
          Telp. 081289799506 |
          Facebook: Waste Bank Information |
          Twitter: @WBI |
          Instagram: @WBI_Indonesia
        </h2>

  </header>
</body>

</html>