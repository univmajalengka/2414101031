<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Wisata UMKM</title>

    <!-- Panggil CSS -->
    <link rel="stylesheet" href="index.css">
</head>
<body>

<header>
    <h1>Wisata UMKM</h1>

    <!-- MENU NAVIGASI -->
    <nav class="menu">
        <a href="index.php">Beranda</a>
        <a href="pemesanan.php">Pemesanan</a>
        <a href="modifikasi_pesanan.php">Daftar Pesanan</a>
    </nav>
</header>


<div class="container">

    <!-- CARD 1 -->
    <div class="card">
        <img src="danautoba.jpg.jpg" alt="Danau Toba">
        <div class="card-body">
            <h3>Danau Toba</h3>
            <p>Wisata danau vulkanik terbesar di Indonesia.</p>
            <a href="pemesanan.php?paket=Danau Toba" class="btn">
                Pesan Sekarang
            </a>
        </div>
    </div>

    <!-- CARD 2 -->
    <div class="card">
        <img src="pantailombok.jpg.jpg" alt="Pantai Lombok">
        <div class="card-body">
            <h3>Pantai Lombok</h3>
            <p>Pantai indah dengan pasir putih dan laut biru.</p>
            <a href="pemesanan.php?paket=Pantai Lombok" class="btn">
                Pesan Sekarang
            </a>
        </div>
    </div>

    <!-- CARD 3 -->
    <div class="card">
        <img src="rajaampat.jpg.jpg" alt="Raja Ampat">
        <div class="card-body">
            <h3>Raja Ampat</h3>
            <p>Surga wisata bahari dunia di Papua Barat.</p>
            <a href="pemesanan.php?paket=Raja Ampat" class="btn">
                Pesan Sekarang
            </a>
        </div>
    </div>

</div>

<footer>
    © 2025 Aplikasi Pemesanan Wisata UMKM
</footer>

</body>
</html>
