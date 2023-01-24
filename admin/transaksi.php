<h2>Data Transaksi</h2>

<table class="table table-bordered">
    <thead>
        <tr>
            <th>No</th>
            <th>Nama Nasabah</th>
            <th>Tanggal</th>
            <th>Total</th>
            <th>Aksi</th>
        </tr>
    </thead>
    <tbody>
        <?php $nomor = 1; ?>
        <?php $ambil = $koneksi->query("SELECT * FROM transaksi JOIN nasabah ON transaksi.id_nasabah=nasabah.id_nasabah"); ?>
        <?php while ($pecah = $ambil->fetch_assoc()) { ?>
            <tr>
                <td><?php echo $nomor; ?></td>
                <td><?php echo $pecah['nama_nasabah']; ?></td>
                <td><?php echo $pecah['tanggal_transaksi']; ?></td>
                <td><?php echo $pecah['total_transaksi']; ?></td>
                <td>
                    <a href="admin.php?halaman=detail&id=<?php echo $pecah['id_transaksi']; ?>" class="btn btn-info">Detail</a>
                </td>
            </tr>
            <?php $nomor++; ?>
        <?php } ?>
    </tbody>
</table>