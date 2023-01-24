<?php
session_start();

include 'koneksi.php';

?>

<!DOCTYPE html>
<html>
<head>
	<title>Riwayat</title>
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
       	<li class="active"><a href="riwayat.php">Riwayat</a></li>
        <li><a href="info.php">About Us</a></li>
        <?php if (isset($_SESSION["nasabah"])): ?>
        	<li><a href="out.php">Logout</a></li>
        	<?php else: ?>
        	<li><a href="in.php">Login</a></li>
        	<?php endif ?>
      </ul>
      <div><br><br><br><br><br><br></div>
      <section class="riwayat">
      	<div class="container">
      		<h3>Riwayat Menabung <?php echo $_SESSION["nasabah"]["nama_nasabah"] ?></h3>      	
      		<table class="table table-bordered">
      			<thead>
      				<tr>
      				<td>No</td>
      				<td>Tanggal</td>
      				<td>Status</td>
      				<td>Total</td>
      				<td>Opsi</td>
      				</tr>
      			</thead>
      			<tbody>
      				<?php
      				$nomor=1;
      				$id_nasabah = $_SESSION["nasabah"]['id_nasabah'];

      				$ambil = $koneksi->query("SELECT * FROM transaksi WHERE id_nasabah='$id_nasabah'");
      				while($pecah = $ambil->fetch_assoc()){
      				?>
      				<tr>
      					<td><?php echo $nomor; ?></td>
      					<td><?php echo $pecah["tanggal_transaksi"] ?></td>
      					<td><?php echo $pecah["status_transaksi"] ?></td>
      					<td><?php echo number_format($pecah["total_transaksi"]) ?></td>
      					<td>
      						<a href="nota.php?id=<?php echo $pecah['id_transaksi'] ?>" class="btn btn-info">Nota</a>
      					</td>
      				</tr>
      				<?php $nomor++ ?>
      				<?php } ?>
      			</tbody>
      		</table>
      	</div>
      </section>
</body>
</html>