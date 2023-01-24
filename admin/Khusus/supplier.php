<h2>Data Supplier </h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>alamat supplier</th>
            <th>kode supplier </th>
            <th>nama supplier </th>
            <th>tlpn supplier</th>

        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['alamat_supplier']; ?></td>
                <td><?php echo $pecah['kode_supplier']; ?></td>
                <td><?php echo $pecah['nama_supplier']; ?></td>
                <td><?php echo $pecah['tlpn_supplier']; ?></td>
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