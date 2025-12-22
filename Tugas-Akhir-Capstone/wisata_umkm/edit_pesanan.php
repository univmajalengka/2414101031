<?php
include 'koneksi.php';
$data = mysqli_query($conn, "SELECT * FROM pesanan WHERE id='$_GET[id]'");
$d = mysqli_fetch_array($data);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Edit Pesanan</title>
    <link rel="stylesheet" href="assets/style.css">
</head>
<body>

<h2>Edit Pesanan Paket Wisata</h2>

<form method="post" action="update_pesanan.php">
<input type="hidden" name="id" value="<?= $d['id'] ?>">

<label>Nama Pemesan</label>
<input type="text" name="nama" value="<?= $d['nama'] ?>" required>

<label>No HP</label>
<input type="text" name="no_hp" value="<?= $d['no_hp'] ?>" required>

<label>Paket Wisata</label>
<input type="text" name="paket" value="<?= $d['paket'] ?>" readonly>

<label>Jumlah Peserta</label>
<input type="number" name="peserta" value="<?= $d['peserta'] ?>" required>

<label>Waktu Perjalanan (Hari)</label>
<input type="number" name="hari" value="<?= $d['hari'] ?>" required>

<label>Harga Paket</label>
<input type="number" name="harga" value="<?= $d['harga'] ?>" required>

<label>Total Tagihan</label>
<input type="number" name="total" value="<?= $d['total'] ?>" required>

<button type="submit">Update Pesanan</button>
<a href="modifikasi_pesanan.php" class="btn back">Batal</a>

</form>

</body>
</html>
