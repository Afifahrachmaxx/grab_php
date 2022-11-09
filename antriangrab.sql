-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 26 Okt 2022 pada 14.26
-- Versi server: 10.4.20-MariaDB
-- Versi PHP: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `antriangrab`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `antriandriver`
--

CREATE TABLE `antriandriver` (
  `id_antrian` int(11) NOT NULL,
  `nama_driver` varchar(100) NOT NULL,
  `keperluan_driver` varchar(200) NOT NULL,
  `nomor_antrian` varchar(50) NOT NULL,
  `timestamp` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `antriandriver`
--

INSERT INTO `antriandriver` (`id_antrian`, `nama_driver`, `keperluan_driver`, `nomor_antrian`, `timestamp`) VALUES
(27, 'febri', 'Pergantian Email', 'GRB001', '2022-10-22 14:22:31'),
(28, 'afifah', 'Aktifkan Akun', 'GRB002', '2022-10-22 16:15:21'),
(29, 'sisil', 'Pergantian Email', 'GRB003', '2022-10-25 04:57:02');

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE `karyawan` (
  `id_cs` int(10) NOT NULL,
  `nik_cs` int(10) NOT NULL,
  `nama_cs` varchar(100) NOT NULL,
  `tgllahir_cs` date NOT NULL,
  `jeniskelamin_cs` varchar(20) NOT NULL,
  `alamat_cs` varchar(100) NOT NULL,
  `jabatan_cs` varchar(100) NOT NULL,
  `counter` varchar(10) NOT NULL,
  `tlp_cs` text NOT NULL,
  `email` varchar(100) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_cs`, `nik_cs`, `nama_cs`, `tgllahir_cs`, `jeniskelamin_cs`, `alamat_cs`, `jabatan_cs`, `counter`, `tlp_cs`, `email`, `username`, `password`, `foto`) VALUES
(1, 30601, 'afifah', '2022-10-22', 'Perempuan', 'jakarta', 'Leader', '1', '089636179782', 'afifah', 'admin', 'admin', 'coming soon.jpg'),
(2, 2147483647, 'sisil', '2000-06-13', 'Perempuan', 'Jakarta Timur', 'Leader', '2', '081117411996', 'ftt.prisilia.semestanti@grabtaxi.com', 'sisil', 'sisil123', 'face2.jpg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `keperluandriver`
--

CREATE TABLE `keperluandriver` (
  `id_keperluan` int(10) NOT NULL,
  `keperluan_driver` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `keperluandriver`
--

INSERT INTO `keperluandriver` (`id_keperluan`, `keperluan_driver`) VALUES
(2, 'Aktifkan Akun'),
(3, 'Grab Express'),
(4, 'Pergantian Email'),
(5, 'Pergantian Plat Kendaraan'),
(1, 'Verifikasi Wajah');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `antriandriver`
--
ALTER TABLE `antriandriver`
  ADD PRIMARY KEY (`id_antrian`);

--
-- Indeks untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_cs`),
  ADD KEY `nip_cs` (`nik_cs`);

--
-- Indeks untuk tabel `keperluandriver`
--
ALTER TABLE `keperluandriver`
  ADD PRIMARY KEY (`id_keperluan`),
  ADD KEY `keperluan_driver` (`keperluan_driver`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `antriandriver`
--
ALTER TABLE `antriandriver`
  MODIFY `id_antrian` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT untuk tabel `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_cs` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT untuk tabel `keperluandriver`
--
ALTER TABLE `keperluandriver`
  MODIFY `id_keperluan` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
