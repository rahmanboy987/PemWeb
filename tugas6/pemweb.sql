-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 04 Okt 2019 pada 09.51
-- Versi server: 10.1.39-MariaDB
-- Versi PHP: 7.3.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pemweb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `ini_admin`
--

CREATE TABLE `ini_admin` (
  `user_id` varchar(50) NOT NULL,
  `name` varchar(30) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `ini_admin`
--

INSERT INTO `ini_admin` (`user_id`, `name`, `username`, `password`) VALUES
('8c6d169a-e67b-11e9-9aec-c83dd47819ee', 'hesoyam', 'hesoyam', '6dc669f1778f61b496d1787f0de1ec37ddbe4d6c');

-- --------------------------------------------------------

--
-- Struktur dari tabel `mahasiswa`
--

CREATE TABLE `mahasiswa` (
  `Npm` varchar(20) NOT NULL,
  `Nama` varchar(30) NOT NULL,
  `Fakultas` varchar(50) NOT NULL,
  `Jurusan` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `mahasiswa`
--

INSERT INTO `mahasiswa` (`Npm`, `Nama`, `Fakultas`, `Jurusan`) VALUES
('1', 'fathur rohman', '1', '1'),
('17081010048', 'fathur rohman', 'Fakultas Ilmu Komputer', 'Teknik Informatika'),
('2', '083853002616', '2', '2');

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `ini_admin`
--
ALTER TABLE `ini_admin`
  ADD PRIMARY KEY (`user_id`);

--
-- Indeks untuk tabel `mahasiswa`
--
ALTER TABLE `mahasiswa`
  ADD PRIMARY KEY (`Npm`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
