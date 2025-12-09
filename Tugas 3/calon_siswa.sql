CREATE DATABASE IF NOT EXISTS pendaftaran_siswa;
USE pendaftaran_siswa;

CREATE TABLE calon_siswa (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nama VARCHAR(50),
    alamat TEXT
);
