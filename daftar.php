<?php
session_start();

include 'koneksi.php';
?>
<!DOCTYPE html>
<html>

<head>
    <title>Daftar untuk Login</title>
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
</head>

<body>
    <header>
        <div class="row text-center ">
            <div class="col-md-12">
                <br /><br />
                <h2> Waste Bank Information Register</h2>
                <br />
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">Daftar Pelanggan</h3>
                        </div>
                        <div class="panel-body">
                            <form method="post" class="form-horizontal">
                                <div class="form-group">

                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Username</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="username" required>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label class="control-label col-md-3">Password</label>
                                    <div class="col-md-7">
                                        <input type="password" class="form-control" name="password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Nama</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="nama" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Alamat</label>
                                    <div class="col-md-7">
                                        <input type="textarea" class="form-control" name="alamat" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Telp/HP</label>
                                    <div class="col-md-7">
                                        <input type="text" class="form-control" name="tlp" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label class="control-label col-md-3">Email</label>
                                    <div class="col-md-7">
                                        <input type="email" class="form-control" name="email">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="col-md-7 col-md-offset-3">
                                        <button class="btn btn-primary" name="daftar">Daftar</button>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if (isset($_POST["daftar"])) {
                                $username = $_POST["username"];
                                $password = $_POST["password"];
                                $nama = $_POST["nama"];
                                $alamat = $_POST["alamat"];
                                $tlp = $_POST["tlp"];
                                $email = $_POST["email"];


                                $ambil = $koneksi->query("SELECT * FROM nasabah WHERE email='$email'");
                                $yangcocok = $ambil->num_rows;
                                if ($yangcocok == 1) {
                                    echo "<script>alert('pendaftaran gagal, email sudah digunakan');</script>";
                                    echo "<script>location='daftar.php';</script>";
                                } else {
                                    $koneksi->query("INSERT INTO nasabah (username,password,nama_nasabah,alamat,tlp,email) VALUES ('$username','$password','$nama','$alamat','$tlp','$email') ");

                                    echo "<script>alert('pendaftaran sukses, silahkan login');</script>";
                                    echo "<script>location='in.php';</script>";
                                }
                            }
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </div>