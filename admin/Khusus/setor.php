<h2>Data Setor </h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>berat setor</th>
            <th>harga setor</th>
            <th>kode sampah</th>
            <th>kode setor</th>

        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['berat_setor']; ?></td>
                <td><?php echo $pecah['harga_setor']; ?></td>
                <td><?php echo $pecah['kode_sampah']; ?></td>
                <td><?php echo $pecah['kode_setor']; ?></td>
                <td>
                    <img src="../foto_produk/<?php echo $pecah['foto_produk']; ?>" width="100">
                </td>
                <td>
                    <a href="admin.php?halaman=hapusproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn-danger btn">Hapus</a>
                    <a href="admin.php?halaman=ubahproduk&id=<?php echo $pecah['id_produk']; ?>" class="btn btn-warning">Ubah</a>
                </td>
            </tr>
            <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>
<a href="admin.php?halaman=tambahproduk" class="btn btn-primary">Tambah Data</a>