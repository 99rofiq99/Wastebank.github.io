<?php

$ambil = $koneksi->query("SELECT * FROM pelanggan WHERE id_pelanggan='$_GET[id]'");
$pecah = $ambil->fetch_assoc();

$koneksi->query("DELETE FROM pelanggan WHERE id_pelanggan='$_GET[id]'");

echo "<script>alert('Data pelanggan terhapus');</script>";
echo "<script>location='admin.php?halaman=pelanggan';</script>";

?>