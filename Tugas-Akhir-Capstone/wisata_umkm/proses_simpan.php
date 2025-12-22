<?php
include 'koneksi.php';

/* AMBIL DATA DARI FORM */
$nama_pemesan      = $_POST['nama_pemesan'];
$no_hp             = $_POST['no_hp'];
$paket_wisata      = $_POST['paket_wisata'];
$tanggal_pesan     = $_POST['tanggal_pesan'];
$waktu_perjalanan  = $_POST['waktu_perjalanan'];
$jumlah_peserta    = $_POST['jumlah_peserta'];

/* LOGIKA HARGA (CONTOH FIX) */
$harga_paket = 1500000; // harga tetap
$total_tagihan = $waktu_perjalanan * $jumlah_peserta * $harga_paket;

/* SIMPAN KE DATABASE */
$query = "INSERT INTO pemesanan 
(nama_pemesan, no_hp, paket_wisata, tanggal_pesan, waktu_perjalanan, jumlah_peserta, harga_paket, total_tagihan)
VALUES
('$nama_pemesan', '$no_hp', '$paket_wisata', '$tanggal_pesan', '$waktu_perjalanan', '$jumlah_peserta', '$harga_paket', '$total_tagihan')";

mysqli_query($koneksi, $query);

/* REDIRECT */
header("Location: modifikasi_pesanan.php");
exit;
