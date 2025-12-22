-- ================================
-- DATABASE WISATA UMKM
-- ================================

CREATE DATABASE IF NOT EXISTS wisata_umkm;
USE wisata_umkm;

-- ================================
-- TABEL PEMESANAN
-- ================================

CREATE TABLE IF NOT EXISTS pemesanan (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama_pemesan VARCHAR(100) NOT NULL,
    no_hp VARCHAR(20) NOT NULL,
    paket_wisata VARCHAR(100) NOT NULL,
    tanggal_pesan DATE NOT NULL,
    waktu_perjalanan INT NOT NULL,
    pelayanan_penginapan INT DEFAULT 0,
    pelayanan_transportasi INT DEFAULT 0,
    pelayanan_makan INT DEFAULT 0,
    jumlah_peserta INT NOT NULL,
    harga_paket INT NOT NULL,
    total_tagihan INT NOT NULL,
    created_at TIMESTAMP DEFAULT CURRENT_TIMESTAMP
);
