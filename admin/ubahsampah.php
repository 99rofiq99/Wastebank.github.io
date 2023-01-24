<h2>Ubah Sampah</h2>
<?php
$ambil = $koneksi->query("SELECT * FROM sampah WHERE id_sampah='$_GET[id]'");
$pecah = $ambil->fetch_assoc();


?>

<form method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label>Nama sampah</label>
        <input type="text" name="nama" class="form-control" value="<?php echo $pecah['jenis_sampah']; ?>">
    </div>
    <div class="form-group">
        <label>Harga Rp</label>
        <input type="number" name="harga" class="form-control" value="<?php echo $pecah['harga_sampah']; ?>">
    </div>
    <div class="form-group">
        <img src="../foto_sampah/<?php echo $pecah['foto_sampah'] ?>" width="200">
    </div>
    <div class="form-group">
        <label>Ganti Foto</label>
        <input type="file" name="foto" class="form-control">
    </div>
    <button class="btn btn-primary" name="ubah">Ubah</button>
</form>

<?php
if (isset($_POST['ubah'])) {
    $namafoto = $_FILES['foto']['name'];
    $lokasifoto = $_FILES['foto']['tmp_name'];
    // Jika foto dirubah
    if (!empty($lokasifoto)) {
        move_uploaded_file($lokasifoto, "../foto_sampah/$namafoto");

        $koneksi->query("UPDATE sampah SET jenis_sampah='$_POST[nama]',harga_sampah='$_POST[harga]',foto_sampah='$namafoto' WHERE id_sampah='$_GET[id]'");
    } else {
        $koneksi->query("UPDATE sampah SET jenis_sampah='$_POST[nama]',harga_sampah='$_POST[harga]' WHERE id_sampah='$_GET[id]'");
    }
    echo "<script>alert('data sampah telah diubah');</script>";
    echo "<script>location='admin.php?halaman=datasampah';</script>";
}
?>