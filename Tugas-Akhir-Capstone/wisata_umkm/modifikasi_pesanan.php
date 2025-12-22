<?php
include 'koneksi.php';
$data = mysqli_query($koneksi, "SELECT * FROM pemesanan ORDER BY id DESC");
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Daftar Pesanan</title>
    <link rel="stylesheet" href="modif_pesanan.css">
</head>
<body>

<header>
    <h1>Paket Wisata UMKM Indonesia</h1>

    <nav class="menu">
        <a href="index.php">Beranda</a>
        <a href="pemesanan.php">Pemesanan</a>
        <a href="modifikasi_pesanan.php">Daftar Pesanan</a>
    </nav>

    <p>Daftar Pesanan Paket Wisata</p>
</header>

<div class="page-center">
    <div class="table-card">

        <h2>Daftar Pesanan</h2>

        <!-- WRAPPER RESPONSIVE -->
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>No</th>
                        <th>Nama Pemesan</th>
                        <th>No HP</th>
                        <th>Paket Wisata</th>
                        <th>Tanggal</th>
                        <th>Hari</th>
                        <th>Peserta</th>
                        <th>Total Tagihan</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php $no = 1; ?>
                    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                    <tr>
                        <td><?= $no++; ?></td>
                        <td><?= $row['nama_pemesan']; ?></td>
                        <td><?= $row['no_hp']; ?></td>
                        <td><?= $row['paket_wisata']; ?></td>
                        <td><?= $row['tanggal_pesan']; ?></td>
                        <td><?= $row['waktu_perjalanan']; ?></td>
                        <td><?= $row['jumlah_peserta']; ?></td>
                        <td>Rp <?= number_format($row['total_tagihan'], 0, ',', '.'); ?></td>
                        <td>
                            <a href="edit_pesanan.php?id=<?= $row['id']; ?>" class="btn-edit">Edit</a>
                            <a href="hapus_pesanan.php?id=<?= $row['id']; ?>"
                               onclick="return confirm('Yakin ingin menghapus pesanan ini?')"
                               class="btn-hapus">Hapus</a>
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>

    </div>
</div>

<footer>
    © 2025 Aplikasi Pemesanan Wisata UMKM
</footer>

</body>
</html>
