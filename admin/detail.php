<h2>Detail Transaksi</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM transaksi JOIN nasabah ON transaksi.id_nasabah=nasabah.id_nasabah WHERE transaksi.id_transaksi='$_GET[id]'");
$detail = $ambil->fetch_assoc();
?>


<strong><?php echo $detail['nama_nasabah']; ?></strong> <br>
<p>
	<?php echo $detail['tlp']; ?> <br>
	<?php echo $detail['email']; ?>
</p>

<p>
	<?php echo $detail['tanggal_transaksi']; ?> <br>
	<?php echo $detail['total_transaksi']; ?>
</p>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama sampah</th>
			<th>Harga</th>
			<th>Jumlah</th>
			<th>Subtotal</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor = 1; ?>
		<?php $ambil = $koneksi->query("SELECT * FROM transaksi_sampah JOIN sampah ON transaksi_sampah.id_sampah=sampah.id_sampah WHERE transaksi_sampah.id_transaksi='$_GET[id]'"); ?>
		<?php while ($pecah = $ambil->fetch_assoc()) { ?>
			<tr>
				<td><?php echo $nomor; ?></td>
				<td><?php echo $pecah['jenis_sampah']; ?></td>
				<td><?php echo $pecah['harga_sampah']; ?></td>
				<td><?php echo $pecah['jumlah']; ?></td>
				<td>
					<?php echo $pecah['harga_sampah'] * $pecah['jumlah']; ?>
				</td>
			</tr>
			<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>