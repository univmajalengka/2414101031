<?php
include "koneksi.php";

if (isset($_POST['daftar'])) {
    $nama   = $_POST['nama'];
    $alamat = $_POST['alamat'];

    // Prepared Statement untuk keamanan SQL Injection
    $query = "INSERT INTO calon_siswa (nama, alamat) VALUES (?, ?)";
    $stmt = mysqli_prepare($conn, $query);

    mysqli_stmt_bind_param($stmt, "ss", $nama, $alamat);
    $execute = mysqli_stmt_execute($stmt);

    if ($execute) {
        header("Location: index.php?status=sukses");
        exit;
    } else {
        echo "Gagal menyimpan data: " . mysqli_error($conn);
    }
}
?>
