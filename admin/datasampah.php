<h2>Data Sampah</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Jenis Sampah</th>
            <th>Harga</th>
            <th>Foto</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM sampah"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['jenis_sampah']; ?></td>
                <td><?php echo $pecah['harga_sampah']; ?></td>
                <td>
                    <img src="../foto_sampah/<?php echo $pecah['foto_sampah']; ?>" width="100">
                </td>
                <td>
                    <a href="admin.php?halaman=hapussampah&id=<?php echo $pecah['id_sampah']; ?>" class="btn-danger btn">Hapus</a>
                    <a href="admin.php?halaman=ubahsampah&id=<?php echo $pecah['id_sampah']; ?>" class="btn btn-warning">Ubah</a>
                </td>
            </tr>
            <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>
<a href="admin.php?halaman=tambahsampah" class="btn btn-primary">Tambah Data</a>