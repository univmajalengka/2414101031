<?php
include 'koneksi.php';

mysqli_query($conn, "UPDATE pesanan SET
    nama='$_POST[nama]',
    no_hp='$_POST[no_hp]',
    peserta='$_POST[peserta]',
    hari='$_POST[hari]',
    harga='$_POST[harga]',
    total='$_POST[total]'
    WHERE id='$_POST[id]'
");

header("Location: modifikasi_pesanan.php");
?>
