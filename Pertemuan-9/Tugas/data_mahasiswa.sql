-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 07 Nov 2019 pada 02.02
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
-- Database: `data_mahasiswa`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `jurusan`
--

CREATE TABLE `jurusan` (
  `nama_jurusan` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `jurusan`
--

INSERT INTO `jurusan` (`nama_jurusan`) VALUES
('Perencanaan Wilayah dan Kota'),
('T.Elektro'),
('T.informatika'),
('T.Mesin'),
('T.Sipil');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `id_mhs` int(30) NOT NULL,
  `NRP` char(10) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nama_jurusan` varchar(50) DEFAULT NULL,
  `foto` varchar(30) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`id_mhs`, `NRP`, `nama`, `nama_jurusan`, `foto`) VALUES
(11, '14115032', 'Muhammad Rizki Oktarlis Setia Budi', 'T.informatika', 'jajal.jpg');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `jurusan`
--
ALTER TABLE `jurusan`
  ADD PRIMARY KEY (`nama_jurusan`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`id_mhs`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  MODIFY `id_mhs` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
