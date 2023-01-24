<?php
session_start();

include 'koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
    <title>Sampah</title>
    <link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap7.css">
</head>

<body>

    <header>
        <div class="row">
            <div class="logo">
                <img src="WBI.jpg">
            </div>
            <ul class="main-nav">
                <li><a href="Home.php">Home</a></li>
                <li class="active"><a href="sampah.php">Sampah</a></li>
                <li><a href="keranjang.php">Keranjang</a></li>
                <?php if (isset($_SESSION["pelanggan"])) : ?>
                    <li><a href="riwayat.php">Riwayat</a></li>
                <?php endif ?>
                <li><a href="info.php">About Us</a></li>
                <?php if (isset($_SESSION["pelanggan"])) : ?>
                    <li><a href="out.php">Logout</a></li>
                <?php else : ?>
                    <li><a href="in.php">Login</a></li>
                <?php endif ?>
            </ul>


            <section class="konten">
            
                <div class="container">
                    <h1>Data Sampah</h1>
                    <br>
                    <br>
                    <br>
                    <br>
                    
                    <div class="woy">

                        <?php $ambil = $koneksi->query("SELECT * FROM sampah"); ?>
                        <?php while ($persampah = $ambil->fetch_assoc()) { ?>
                            <div class="col-md-3">
                                <div class="thumbnail">
                                    <img src="foto_sampah/<?php echo $persampah['foto_sampah'] ?>" alt="">
                                    <div class="caption">
                                        <h3><?php echo $persampah['jenis_sampah']; ?></h3>
                                        <h5>Rp. <?php echo number_format($persampah['harga_sampah']); ?></h5>
                                        <a href="nabung.php?id=<?php echo $persampah['id_sampah']; ?>" class="btn btn-primary">Nabung</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>


                    </div>
                </div>
            </section>


</body>

</html>