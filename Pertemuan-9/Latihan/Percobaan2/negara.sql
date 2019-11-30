-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Okt 2019 pada 04.04
-- Versi server: 10.4.8-MariaDB
-- Versi PHP: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `negara`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `titel`
--

CREATE TABLE `liga` (
  `kode` varchar(5) NOT NULL,
  `negara` varchar(15) NOT NULL,
  `champions` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `titel`
--

INSERT INTO `liga` (`kode`, `negara`, `champions`) VALUES
('eng', 'england', 3),
('jer', 'jerman', 4),
('spa', 'spanyol', 3);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `titel`
--
ALTER TABLE `liga`
  ADD PRIMARY KEY (`kode`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
