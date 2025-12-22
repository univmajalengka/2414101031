<?php
include 'koneksi.php';
mysqli_query($conn, "DELETE FROM pesanan WHERE id='$_GET[id]'");
header("Location: modifikasi_pesanan.php");
?>
