<?php
session_start();

include 'koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
  <title>Home</title>
  <link rel="stylesheet" type="text/css" href="sutairu.css">
</head>

<body>
  <header>
    <div class="row">
      <div class="logo">
        <img src="WBI.jpg">
      </div>
      <ul class="main-nav">
        <li class="active"><a href="Home.php">Home</a></li>
          <li ><a href="Sampah.php">Sampah</a></li>
          <li><a href="keranjang.php">Keranjang</a></li>
          <?php if (isset($_SESSION["nasabah"])) : ?>
            <li><a href="riwayat.php">Riwayat</a></li>
          <?php endif ?>
          <li><a href="info.php">Info</a></li>
          <?php if (isset($_SESSION["nasabah"])) : ?>
            <li><a href="out.php">Logout</a></li>
          <?php else : ?>
            <li><a href="in.php">Login</a></li>
          <?php endif ?>
      </ul>

    </div class="hero">
    <br><br><br><br><br>

    <!-- Slideshow container -->
    <div class="slideshow-container">

      <!-- Full-width images with number and caption text -->
      <div class="mySlides fade">
        <img class="image" src="wbi.png">
        <div class="numbertext">1 / 3</div>
        <div class="overlay">
          <div class="text">WBI</div>
        </div>
        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot1a" onclick="currentSlide(1)"></span>
          <span class="dot2a" onclick="currentSlide(2)"></span>
          <span class="dot3a" onclick="currentSlide(3)"></span>
        </div>
      </div>


      <div class="mySlides fade">
        <img class="image" src="organik.jpg">
        <div class="numbertext">2 / 3</div>
        <div class="overlay">
          <div class="text">Sampah Organik</div>
        </div>
        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot1b" onclick="currentSlide(1)"></span>
          <span class="dot2b" onclick="currentSlide(2)"></span>
          <span class="dot3b" onclick="currentSlide(3)"></span>
        </div>
      </div>

      <div class="mySlides fade">
        <img class="image" src="anorganik.jpg">
        <div class="numbertext">3 / 3</div>
        <div class="overlay">
          <div class="text">Sampah Anorganik</div>
        </div>
        <!-- The dots/circles -->
        <div style="text-align:center">
          <span class="dot1c" onclick="currentSlide(1)"></span>
          <span class="dot2c" onclick="currentSlide(2)"></span>
          <span class="dot3c" onclick="currentSlide(3)"></span>
        </div>
      </div>

      <!-- Next and previous buttons -->
      <!-- <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a> -->
    </div>
    <br>

    <script type="text/javascript">
      var slideIndex = 0;
      showSlides();

      // // Next/previous controls
      // function plusSlides(n) {
      //   showSlides(slideIndex += n);
      // }

      // // Thumbnail image controls
      // function currentSlide(n) {
      //   showSlides(slideIndex = n);
      // }

      function showSlides() {
        var i;
        var slides = document.getElementsByClassName("mySlides");
        for (i = 0; i < slides.length; i++) {
          slides[i].style.display = "none";
        }
        slideIndex++;
        if (slideIndex > slides.length) {
          slideIndex = 1
        }
        slides[slideIndex - 1].style.display = "block";
        setTimeout(showSlides, 13000); // Change image every 13 seconds
      }
    </script>


    <div class="button">
      <a href="#SCHEDULE" class="btn btn-one">Our Schedule</a>
      <a href="in.php" class="btn btn-two">Member</a>
    </div>
    </div>
    <br><br><br><br><br><br>
    <br><br><br><br><br>
    <hr>
    <h3><a name="SCHEDULE">OUR SCHEDULE</a></h3>
    <br>
    <br>
    <p>Monday - Friday : Open from 07.00 WIB - 21.00 WIB</p>
    <p>Saturday - Sunday : Open from 09.00 WIB - 03.00 WIB</p>
    <br><br><br><br><br><br>
    <center>
      <div class="button">
        <a href="#" class="btn to_top">/\</a>
      </div>
    </center>
  </header>
</body>

</html>