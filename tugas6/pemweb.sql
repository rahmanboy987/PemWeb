-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 29 Sep 2019 pada 15.19
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
('18a2446c-e1a1-11e9-a3ad-c83dd47819ee', 'Fathur Rohman', 'rahmanboy987', '883739ddfbe4b2a823d81f4b9dca7fc376a72468'),
('3a03f846-e1a1-11e9-a3ad-c83dd47819ee', 'AREK PMH', 'pmh_only', '15a493fa8125d72b639e554a91d785ab01bc7025');

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
('1', '1', '1', '1'),
('2', '2', '2', '2'),
('3', '3', '3', '3'),
('4', '4', '4', '4'),
('5', '5', '5', '5'),
('6', '6', '6', '6');

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
