<?php
session_start();
$id_sampah=$_GET["id"];
unset($_SESSION["keranjang"][$id_sampah]);

echo "<script>alert('sampah dihapus dari keranjang');</script>";
echo "<script>location='keranjang.php';</script>";
?>