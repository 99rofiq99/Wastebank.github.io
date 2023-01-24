<?php 
session_start();

include 'koneksi.php';

if (!isset($_SESSION["nasabah"])) 
{
	echo "<script>alert('Silahkan Login');</script>";
	echo "<script>location='in.php';</script>";
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>Checkout</title>
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
        <li><a href="sampah.php">Sampah</a>
        </li>
        <li><a href="keranjang.php">Keranjang</a></li>
        <li><a href="info.php">About Us</a></li>
        <li class="active"><a href="checkout.php">Checkout</a></li>
        <?php if (isset($_SESSION["nasabah"])): ?>
        	<li><a href="out.php">Logout</a></li>
        	<?php else: ?>
        	<li><a href="in.php">Login</a></li>
        	<?php endif ?>
      </ul>
      <div><br><br><br><br><br></div>

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
					</tr>
				</thead>
				<tbody>
					<?php $nomor=1; ?>
					<?php $totalbelanja = 0; ?>
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
					</tr>
					<?php $nomor++; ?>
					<?php $totalbelanja+=$subharga; ?>
				<?php endforeach ?>
				</tbody>
				<tfoot>
					<tr>
						<th colspan="4">Total Belanja</th>
						<th>Rp. <?php echo number_format($totalbelanja) ?></th>
					</tr>
				</tfoot>
			</table>

			<form method="post">
				<div class="row">
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" readonly value="<?php echo $_SESSION['nasabah']['nama_nasabah'] ?>" class="form-control">					
						</div>					
					</div>
					<div class="col-md-4">
						<div class="form-group">
							<input type="text" readonly value="<?php echo $_SESSION['nasabah']['tlp'] ?>" class="form-control">					
						</div>	
				</div>
				<button class="btn btn-primary" name="checkout">Checkout</button>
			</form>
			<div><br></div>
			<div class="form-group">
				<label>Alamat Lengkap Penabung Sampah</label>
				<textarea class="form-control" name="alamat_pengiriman" placeholder="masukkan alamat lengkap pengiriman (termasuk kode pos)"></textarea>				
			</div>

			<?php
			if (isset($_POST["checkout"])) {
				$id_nasabah = $_SESSION["nasabah"]["id_nasabah"];
				$tanggal_transaksi = date("y-m-d");
				$total_transaksi = $totalbelanja;
				$alamat_pengiriman = $_POST['alamat_pengiriman'];

				$koneksi->query("INSERT INTO transaksi (id_nasabah,tanggal_transaksi,total_transaksi,alamat_pengiriman) VALUES ('$id_nasabah','$tanggal_transaksi','$total_transaksi','$alamat_pengiriman') "); 

				$id_transaksi_barusan = $koneksi->insert_id;
				{
					foreach ($_SESSION["keranjang"] as $id_sampah => $jumlah) 
					{

						$ambil = $koneksi->query("SELECT * FROM sampah WHERE id_sampah='$id_sampah'");
						$persampah = $ambil -> fetch_assoc();

						$nama = $persampah['jenis_sampah'];
						$harga = $persampah['harga_sampah'];

						$subharga = $persampah['harga_sampah']*$jumlah;

						$koneksi->query("INSERT INTO transaksi_sampah(id_transaksi,id_sampah,nama,harga,subharga,jumlah) VALUES ('$id_transaksi_barusan','$id_sampah','$nama','$harga','$subharga','$jumlah') ");
					}

					
				}

				unset($_SESSION["keranjang"]);

				echo "<script>alert('transaksi sukses');</script>";
				echo "<script>location='nota.php?id=$id_transaksi_barusan';</script>";
			}
						?>


</body>
</html>