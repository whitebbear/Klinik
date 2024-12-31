-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2024 pada 12.22
-- Versi server: 10.4.32-MariaDB
-- Versi PHP: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `klinik_db`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ketersediaan_kamar`
--

CREATE TABLE `ketersediaan_kamar` (
  `id` int(11) NOT NULL,
  `nomor_kamar` int(11) NOT NULL,
  `pagi` enum('Tersedia','Penuh') NOT NULL,
  `siang` enum('Tersedia','Penuh') NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data untuk tabel `ketersediaan_kamar`
--

INSERT INTO `ketersediaan_kamar` (`id`, `nomor_kamar`, `pagi`, `siang`) VALUES
(1, 1, 'Penuh', 'Penuh'),
(2, 2, 'Tersedia', 'Penuh'),
(3, 3, 'Penuh', 'Penuh'),
(4, 4, 'Penuh', 'Tersedia'),
(5, 5, 'Tersedia', 'Tersedia'),
(6, 6, 'Penuh', 'Penuh'),
(7, 7, 'Tersedia', 'Penuh'),
(8, 8, 'Penuh', 'Tersedia'),
(9, 9, 'Tersedia', 'Penuh'),
(10, 10, 'Penuh', 'Penuh'),
(11, 11, 'Tersedia', 'Tersedia'),
(12, 12, 'Penuh', 'Tersedia'),
(13, 13, 'Tersedia', 'Tersedia');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ketersediaan_kamar`
--
ALTER TABLE `ketersediaan_kamar`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `ketersediaan_kamar`
--
ALTER TABLE `ketersediaan_kamar`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
