<?php
session_start();

include 'koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
  <title>About Us</title>
  <link rel="stylesheet" type="text/css" href="iyo.css">
</head>

<body>
  <header>
    <div class="row">
      <div class="logo">
        <img src="WBI.jpg">
      </div>
      <ul class="main-nav">
        <li><a href="Home.php">Home</a></li>
        <li><a href="sampah.php">Sampah</a>
        </li>
        <li><a href="keranjang.php">Keranjang</a></li>
        <?php if (isset($_SESSION["nasabah"])) : ?>
          <li><a href="riwayat.php">Riwayat</a></li>
        <?php endif ?>
        <li class="active"><a href="info.php">About Us</a></li>
        <?php if (isset($_SESSION["nasabah"])) : ?>
          <li><a href="out.php">Logout</a></li>
        <?php else : ?>
          <li><a href="in.php">Login</a></li>
        <?php endif ?>
      </ul>

      <p>.</p>
      <div class="kotak_login">
        <h1></h1>
        Jika Anda ingin menabung sampah lewat online, Anda harus mendaftar dulu menjadi member. Caranya gampang anda hanya harus daftar di halaman web ini dan langsung klik Menu sampah .
        <br>
        <br>
        <h1>Waste Bank Information Itu apa sih ???</h1>
        Sistem Informasi Bank Sampah WBI merupakan sistem informasi yang akan diusulkan untuk membantu pengolahan data pada bank sampah, antara lain pendaftaran nasabah, transaksi penyetoran, produk yang masuk, penjualan sampah, dan penjualan produk kerajinan daur ulang.</li>
        <br>
        <br>
        <h1>Sampah yang Kami Tabung di Waste Bank Information</h1>
        Sampah yang kami Tabung pun tak kalah bermanfaat. Kami Bisa Menabung dan menjual 3 macam Sampah yang membuat kalian rajin menabung sampah dan uniknya di Web ini bisa ditukarkan menjadi uang.
        <li> Sampah Plastik Rp.20.000 /kg</li>
        <li> Sampah Kertas Rp.25.000 /kg</li>
        <li> Sampah Gelas Rp.30.000 /kg</li>
        <p>.</p>
        <h2>Contact Us:
          <hr>
          Telp. 081289799506 |
          Facebook: Waste Bank Information |
          Twitter: @WBI |
          Instagram: @WBI_Indonesia
        </h2>
      </div>

</body>

</html>