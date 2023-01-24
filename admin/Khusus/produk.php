<h2>Data Produk </h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>gambar produk</th>
            <th>harga produk</th>
            <th>kode jual</th>
            <th>kode produk</th>
            <th>kode supplier</th>
            <th>nama produk</th>
            <th>stock</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['gambar_produk']; ?></td>
                <td><?php echo $pecah['harga_produk']; ?></td>
                <td><?php echo $pecah['kode_jual']; ?></td>
                <td><?php echo $pecah['kode_produk']; ?></td>
                <td><?php echo $pecah['kode_supplier']; ?></td>
                <td><?php echo $pecah['nama_produk']; ?></td>
                <td><?php echo $pecah['stock']; ?></td>
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