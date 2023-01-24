<?php

$ambil = $koneksi->query("SELECT * FROM nasabah WHERE id_nasabah='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM nasabah WHERE id_nasabah='$_GET[id]'");

echo "<script>alert('Data nasabah terhapus');</script>";
echo "<script>location='admin.php?halaman=datanasabah';</script>";
