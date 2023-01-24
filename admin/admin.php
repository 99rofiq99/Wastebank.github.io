﻿<?php
session_start();
$koneksi = new mysqli("localhost", "root", "", "wbi2");


if (!isset($_SESSION['admin'])) {
    echo "<script>alert('Anda harus Login');</script>";
    echo "<script>location='masuk.php';</script>";
    header('location:masuk.php');
    exit();
}

?>
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Halaman Admin</title>
    <!-- BOOTSTRAP STYLES-->
    <link href="assets/css/bootstrap.css" rel="stylesheet" />
    <!-- FONTAWESOME STYLES-->
    <link href="assets/css/font-awesome.css" rel="stylesheet" />
    <!-- MORRIS CHART STYLES-->
    <link href="assets/js/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <!-- CUSTOM STYLES-->
    <link href="assets/css/custom.css" rel="stylesheet" />
    <!-- GOOGLE FONTS-->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css' />
</head>

<body>
    <div id="wrapper">
        <nav class="navbar navbar-default navbar-cls-top " role="navigation" style="margin-bottom: 0">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" href="admin.php">Admin</a>
            </div>
            <div style="color: white;
padding: 15px 50px 5px 50px;
float: right;
font-size: 25px;"> Waste Bank Information </div>
        </nav>
        <!-- /. NAV TOP  -->
        <nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                    <li class="text-center">
                        <img src="assets/img/find_user.png" class="user-image img-responsive" />
                    </li>


                    <li><a href="admin.php"><i class="fa fa-dashboard fa-3x"></i> Home</a></li>
                    <li><a href="admin.php?halaman=transaksi"><i class="fa fa-dashboard fa-3x"></i> Transaksi</a></li>
                    <li><a href="admin.php?halaman=datasampah"><i class="fa fa-dashboard fa-3x"></i> Data Sampah </a></li>
                    <li><a href="admin.php?halaman=datanasabah"><i class="fa fa-dashboard fa-3x"></i> Data Nasabah</a></li>
                    <li><a href="admin.php?halaman=logout"><i class="fa fa-dashboard fa-3x"></i> Logout</a></li>

                </ul>

            </div>

        </nav>
        <!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <?php
                if (isset($_GET['halaman'])) {
                    if ($_GET['halaman'] == "transaksi") {
                        include 'transaksi.php';
                    } elseif ($_GET['halaman'] == "datasampah") {
                        include 'datasampah.php';
                    } elseif ($_GET['halaman'] == "datanasabah") {
                        include 'datanasabah.php';
                    } elseif ($_GET['halaman'] == "logout") {
                        include 'keluar.php';
                    } elseif ($_GET['halaman'] == "hapussampah") {
                        include 'hapussampah.php';
                    } elseif ($_GET['halaman'] == "ubahsampah") {
                        include 'ubahsampah.php';
                    } elseif ($_GET['halaman'] == "tambahsampah") {
                        include 'tambahsampah.php';
                    } elseif ($_GET['halaman'] == "hapusnasabah") {
                        include 'hapusnasabah.php';
                    } elseif ($_GET['halaman'] == "detail") {
                        include 'detail.php';
                    }
                } else {
                    include 'rumah.php';
                }
                ?>
            </div>
            <!-- /. PAGE INNER  -->
        </div>
        <!-- /. PAGE WRAPPER  -->
    </div>
    <!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="assets/js/jquery-1.10.2.js"></script>
    <!-- BOOTSTRAP SCRIPTS -->
    <script src="assets/js/bootstrap.min.js"></script>
    <!-- METISMENU SCRIPTS -->
    <script src="assets/js/jquery.metisMenu.js"></script>
    <!-- MORRIS CHART SCRIPTS -->
    <script src="assets/js/morris/raphael-2.1.0.min.js"></script>
    <script src="assets/js/morris/morris.js"></script>
    <!-- CUSTOM SCRIPTS -->
    <script src="assets/js/custom.js"></script>


</body>

</html>