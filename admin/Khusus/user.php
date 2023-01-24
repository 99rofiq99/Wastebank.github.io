<h2>Data user </h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>alamat_user</th>
            <th>kode_user </th>
            <th>nama_user </th>
            <th>password</th>
            <th>tlpn_user </th>
            <th>username</th>

        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM produk"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['alamat_user']; ?></td>
                <td><?php echo $pecah['kode_user']; ?></td>
                <td><?php echo $pecah['nama_user']; ?></td>
                <td><?php echo $pecah['password']; ?></td>
                <td><?php echo $pecah['tlpn_user']; ?></td>
                <td><?php echo $pecah['username']; ?></td>
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