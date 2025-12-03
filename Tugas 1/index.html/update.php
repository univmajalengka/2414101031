<?php include "db.php"; ?>

<?php
$id = $_GET['id'];
$result = mysqli_query($conn, "SELECT * FROM wisata WHERE id=$id");
$data = mysqli_fetch_assoc($result);

if (isset($_POST['submit'])) {
    $nama   = $_POST['nama'];
    $lokasi = $_POST['lokasi'];
    $gambar = $_POST['gambar'];

    mysqli_query($conn, "UPDATE wisata SET 
        nama='$nama',
        lokasi='$lokasi',
        gambar='$gambar'
        WHERE id=$id
    ");

    header("Location: index.php");
}
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Wisata</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Edit Data Wisata</h1>

<form method="POST">
    <label>Nama Wisata</label>
    <input type="text" name="nama" value="<?= $data['nama'] ?>" required>

    <label>Lokasi</label>
    <input type="text" name="lokasi" value="<?= $data['lokasi'] ?>" required>

    <label>URL Gambar</label>
    <input type="text" name="gambar" value="<?= $data['gambar'] ?>" required>

    <button class="btn" type="submit" name="submit">Update</button>
</form>

</body>
</html>
