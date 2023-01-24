<h2>Data Nasabah</h2>

<table class="table table-bordered">
	<thead>
		<tr>
			<th>No</th>
			<th>Nama</th>
			<th>Email</th>
			<th>Telepon</th>
			<th>Aksi</th>
		</tr>
	</thead>
	<tbody>
		<?php $nomor=1; ?>
		<?php $ambil=$koneksi->query("SELECT * FROM nasabah"); ?>
		<?php while($pecah=$ambil->fetch_assoc()){ ?>
		<tr>
			<td><?php echo $nomor; ?></td>
			<td><?php echo $pecah['nama_nasabah'];?></td>
			<td><?php echo $pecah['email'];?></td>
			<td><?php echo $pecah['tlp'];?></td>
			<td>
				<a href="admin.php?halaman=hapusnasabah&id=<?php echo $pecah['id_nasabah']; ?>" class="btn btn-danger">Hapus</a>
			</td> 
		</tr>
		<?php $nomor++; ?>
		<?php } ?>
	</tbody>
</table>