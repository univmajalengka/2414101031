<?php include "db.php"; ?>

<?php
if (isset($_POST['submit'])) {
    $nama   = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    $gambar = $_POST['gambar'];

    mysqli_query($conn, "INSERT INTO wisata(nama, lokasi, gambar)
                         VALUES('$nama', '$lokasi', '$gambar')");
    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Tambah Wisata</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Tambah Data Wisata</h1>

<form method="POST">
    <label>Nama Wisata</label>
    <input type="text" name="nama" required>

    <label>Lokasi</label>
    <input type="text" name="lokasi" required>

    <label>URL Gambar</label>
    <input type="text" name="gambar" required>

    <button class="btn" type="submit" name="submit">Simpan</button>
</form>
</body>
</html>
