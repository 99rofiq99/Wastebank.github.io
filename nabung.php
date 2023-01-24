<?php
session_start();
//mendapatkan id_sampah dari url
$id_sampah = $_GET['id'];


//jika sudah ada sampah itu di keranjang, maka sampah itu jumlahnya di +1
if(isset($_SESSION['keranjang'][$id_sampah])) 
{
	$_SESSION['keranjang'][$id_sampah]+=1;
}
//selain itu (belum ada di keranjang), maka sampah itu dianggap dibeli 1
else
{
	$_SESSION['keranjang'][$id_sampah] = 1;
}


//echo "<pre>";
//print_r($_SESSION);
//echo "</pre>";

//larikan ke halaman keranjang
echo "<script>alert('sampah telah masuk ke keranjang belanja');</script>";
echo "<script>location='keranjang.php';</script>";
