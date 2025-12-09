<?php
if (isset($_GET['status']) && $_GET['status'] == 'sukses') {
    echo "<h3>Pendaftaran berhasil disimpan!</h3>";
} else {
    echo "<h3>Selamat datang di aplikasi pendaftaran siswa</h3>";
}

echo "<a href='form-daftar.php'>Daftar Baru</a>";
?>
