<?php
session_start();


include 'koneksi.php';


if (empty($_SESSION["keranjang"]) OR !isset($_SESSION["keranjang"]))
{
	echo "<script>alert('keranjang kosong, silahkan pilih dulu');</script>";
	echo "<script>location='sampah.php';</script>";
}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Keranjang </title>
	<link rel="stylesheet" type="text/css" href="admin/assets/css/bootstrap4.css">
</head>
<body>

	<header>
    <div class="woy">
      <div class="logo">
        <img src="WBI.jpg">        
      </div>
      <ul class="main-nav">
        <li><a href="Home.php">Home</a></li>
        <li><a href="sampah.php">Sampah</a></li>
        <li class="active"><a href="keranjang.php">Keranjang</a></li>
        <?php if (isset($_SESSION["pelanggan"])): ?>
        <li><a href="riwayat.php">Riwayat</a></li>
        <?php endif ?>
        <li><a href="info.php">About Us</a></li>
        <?php if (isset($_SESSION["pelanggan"])): ?>
        	<li><a href="out.php">Logout</a></li>
        	<?php else: ?>
        	<li><a href="in.php">Login</a></li>
        	<?php endif ?>
      </ul>
	<div><br><br><br><br><br><br></div>
	<section class="konten">
		<div class="container">
			<h1>Keranjang Sampah</h1>
			<hr>
			<table class="table table-bordered">
				<thead>
					<tr>
						<th>No</th>
						<th>Sampah</th>
						<th>Harga</th>
						<th>Jumlah</th>
						<th>Sub harga</th>
						<th>Aksi</th>
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1; ?>
					<?php foreach ($_SESSION["keranjang"] as $id_sampah => $jumlah): ?>
					<?php
					$ambil = $koneksi->query("SELECT * FROM sampah WHERE id_sampah='$id_sampah'");
					$pecah = $ambil->fetch_assoc();
					$subharga = $pecah["harga_sampah"]*$jumlah;
			
					?>
					<tr>
						<td><?php echo $nomor; ?></td>
						<td><?php echo $pecah["jenis_sampah"]; ?></td>
						<td>Rp. <?php echo number_format($pecah["harga_sampah"]); ?></td>
						<td><?php echo $jumlah; ?></td>
						<td>Rp. <?php echo number_format($subharga); ?></td>
						<td>
							<a href="hapuskeranjang.php?id=<?php echo $id_sampah ?>" class="btn btn-danger btn-xs">Hapus</a>
						</td>
					</tr>
					<?php $nomor++; ?>
				<?php endforeach ?>
				</tbody>
			</table>

			<a href="sampah.php" class="btn btn-default">Lanjutkan Menabung</a>
			<a href="checkout.php" class="btn btn-primary">Checkout</a>
		</div>
	</section>



</body>
</html>