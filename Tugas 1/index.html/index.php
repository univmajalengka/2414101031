<?php include "db.php"; ?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>CRUD Wisata</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
<h1>Data Wisata</h1>

<a class="btn" href="create.php">+ Tambah Wisata</a>

<table>
    <tr>
        <th>ID</th>
        <th>Nama</th>
        <th>Lokasi</th>
        <th>Gambar</th>
        <th>Aksi</th>
    </tr>

    <?php
    $result = mysqli_query($conn, "SELECT * FROM wisata");
    while ($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
              <td>{$row['id']}</td>
              <td>{$row['nama']}</td>
              <td>{$row['lokasi']}</td>
              <td><img src='{$row['gambar']}' width='120'></td>
              <td>
                <a class='btn-edit' href='edit.php?id={$row['id']}'>Edit</a>
                <a class='btn-delete' href='delete.php?id={$row['id']}'>Hapus</a>
              </td>
          </tr>";
    }
    ?>
</table>
</body>
</html>
