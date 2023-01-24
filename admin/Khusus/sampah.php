<h2>Data Sampah </h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>harga jual</th>
            <th>harga sampah</th>
            <th>keterangan sampah</th>
            <th>kode jenis</th>
            <th>kode sampah</th>
            <th>nama sampah</th>
            <th>stok </th>

        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['harga_jual']; ?></td>
                <td><?php echo $pecah['harga_sampah']; ?></td>
                <td><?php echo $pecah['keterangan_sampah']; ?></td>
                <td><?php echo $pecah['kode_jenis']; ?></td>
                <td><?php echo $pecah['kode_sampah']; ?></td>
                <td><?php echo $pecah['nama_sampah']; ?></td>
                <td><?php echo $pecah['stok']; ?></td>
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