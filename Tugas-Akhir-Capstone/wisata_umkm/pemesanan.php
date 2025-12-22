<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pemesanan</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<header>
    <h1>Paket Wisata UMKM Indonesia</h1>

    <nav class="menu">
        <a href="index.php">Beranda</a>
        <a href="pemesanan.php">Pemesanan</a>
        <a href="modifikasi_pesanan.php">Daftar Pesanan</a>
    </nav>

    <p>Form Pemesanan Paket Wisata</p>
</header>

<!-- CONTAINER FORM -->
<div class="page-center">

    <div class="form-card">

        <h2>Form Pemesanan</h2>

        <form action="proses_simpan.php" method="POST">

            <div class="form-group">
                <label>Nama Pemesan</label>
                <input type="text" name="nama_pemesan" required>
            </div>

            <div class="form-group">
                <label>No HP / Telepon</label>
                <input type="text" name="no_hp" required>
            </div>

            <div class="form-group">
                <label>Paket Wisata</label>
                <input type="text" name="paket_wisata"
                       value="<?php echo $_GET['paket'] ?? ''; ?>" readonly>
            </div>

            <div class="form-group">
                <label>Tanggal Pesan</label>
                <input type="date" name="tanggal_pesan" required>
            </div>

            <div class="form-group">
                <label>Waktu Perjalanan (Hari)</label>
                <input type="number" name="waktu_perjalanan" min="1" required>
            </div>

            <div class="form-group">
                <label>Jumlah Peserta</label>
                <input type="number" name="jumlah_peserta" min="1" required>
            </div>

            <div class="form-group">
                <label>Pelayanan</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="penginapan" value="1000000"> Penginapan</label>
                    <label><input type="checkbox" name="transportasi" value="1200000"> Transportasi</label>
                    <label><input type="checkbox" name="makan" value="500000"> Service / Makan</label>
                </div>
            </div>

            <button type="submit" class="btn-submit">
                Simpan Pesanan
            </button>

        </form>

    </div>

</div>

<footer>
    © 2025 Aplikasi Pemesanan Wisata UMKM
</footer>

</body>
</html>
