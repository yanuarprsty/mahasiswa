-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 24 Agu 2021 pada 08.57
-- Versi server: 10.4.17-MariaDB
-- Versi PHP: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uts_mhs`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `utsmhs`
--

CREATE TABLE `utsmhs` (
  `nim` varchar(10) NOT NULL,
  `nama` varchar(50) NOT NULL,
  `jurusan` varchar(30) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `semester` int(2) NOT NULL,
  `alamat` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data untuk tabel `utsmhs`
--

INSERT INTO `utsmhs` (`nim`, `nama`, `jurusan`, `jenis_kelamin`, `semester`, `alamat`) VALUES
('D200189', 'Finn', 'Sistem Informasi', 'Laki-laki', 4, 'Surakarta'),
('F310021', 'Stefano', 'Sistem Informasi', 'Laki-laki', 4, 'Karanganyar'),
('G099920', 'Septiani', 'Sistem Informasi', 'Perempuan', 4, 'Sukoharjo'),
('H210007', 'Ferdian', 'Sistem Informasi', 'Laki-laki', 4, 'Surakarta'),
('S290001', 'Berta', 'Sistem Informasi', 'Perempuan', 4, 'Jakarta');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `utsmhs`
--
ALTER TABLE `utsmhs`
  ADD PRIMARY KEY (`nim`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
