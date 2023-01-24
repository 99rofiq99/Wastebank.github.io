<?php
session_start();
include 'koneksi.php';
?>

<!DOCTYPE html>
<html>

<head>
	<title>Nota Transaksi</title>
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
				<li><a href="sampah.php">Menu</a></li>
				<li><a href="keranjang.php">Keranjang</a></li>
				<?php if (isset($_SESSION["nasabah"])) : ?>
					<li><a href="riwayat.php">Riwayat</a></li>
				<?php endif ?>
				<li><a href="about.php">About Us</a></li>
				<li><a href="info.php">Info</a></li>
				<li><a href="out.php">Logout</a></li>
			</ul>

			<section class="konten">
				<div class="container">

					<h2>Detail Transaksi</h2>
					<br><br><br><br><br>
					<?php
					$ambil = $koneksi->query("SELECT * FROM transaksi JOIN nasabah ON transaksi.id_nasabah=nasabah.id_nasabah WHERE transaksi.id_transaksi='$_GET[id]'");
					$detail = $ambil->fetch_assoc();
					?>


					<?php
					$idnasabahyangbeli = $detail["id_nasabah"];
					$idnasabahyanglogin = $_SESSION["nasabah"]["id_nasabah"];
					if ($idnasabahyangbeli !== $idnasabahyanglogin) {
						echo "<script>alert('Good Day');</script>";
						echo "<script>location='riwayat.php';</script>";
						exit();
					}

					?>
					<div class="row">
						<div class="col-md-4">
							<h3>Transaksi</h3>
							<strong>No. Transaksi: <?php echo $detail['id_transaksi'] ?></strong><br>
							Tanggal: <?php echo $detail['tanggal_transaksi']; ?><br>
							Total: Rp. <?php echo number_format($detail['total_transaksi']) ?>
						</div>
						<div class="col-md-4">
							<h3>Nasabah</h3>
							<strong><?php echo $detail['nama_nasabah']; ?></strong><br>
							<p>
								<?php echo $detail['tlp']; ?> <br>
								<?php echo $detail['email']; ?>
							</p>
						</div>
						<div class="col-md-4">
							<h3>Pengiriman</h3>
							<Strong>
								Alamat: <?php echo $detail['alamat_pengiriman'] ?></Strong>
						</div>
					</div>
				</div>

				<table class="table table-bordered">
					<thead>
						<tr>
							<th>No</th>
							<th>Nama Sampah</th>
							<th>Harga</th>
							<th>Jumlah</th>
							<th>Subtotal</th>
						</tr>
					</thead>
					<tbody>
						<?php $nomor = 1; ?>
						<?php $ambil = $koneksi->query("SELECT * FROM transaksi_sampah WHERE id_transaksi='$_GET[id]'"); ?>
						<?php while ($pecah = $ambil->fetch_assoc()) { ?>
							<tr>
								<td><?php echo $nomor; ?></td>
								<td><?php echo $pecah['nama']; ?></td>
								<td>Rp. <?php echo number_format($pecah['harga']); ?></td>
								<td><?php echo $pecah['jumlah']; ?></td>
								<td>Rp. <?php echo number_format($pecah['subharga']); ?></td>
							</tr>
							<?php $nomor++; ?>
						<?php } ?>
					</tbody>
				</table>

				<div class="row">
					<div class="col-md-7">
						<div class="alert alert-info">
							<p>
								Total Tabungan Anda Saat ini Rp. <?php echo number_format($detail['total_transaksi']); ?> <br>
								<strong>BANK WBI</strong>
							</p>
						</div>
					</div>
				</div>

		</div>
		</section>
</body>

</html>