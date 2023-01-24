<?php

$ambil = $koneksi->query("SELECT * FROM sampah WHERE id_sampah='$_GET[id]'");
$pecah = $ambil->fetch_assoc();
$fotosampah = $pecah['foto_sampah'];
if (file_exists("../foto_sampah/$fotosampah")) {
    unlink("../foto_sampah/$fotosampah");
}

$koneksi->query("DELETE FROM sampah WHERE id_sampah='$_GET[id]'");

echo "<script>alert('sampah terhapus');</script>";
echo "<script>location='admin.php?halaman=datasampah';</script>";
