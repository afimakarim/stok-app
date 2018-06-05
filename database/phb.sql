-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 05 Jun 2018 pada 06.53
-- Versi Server: 10.1.21-MariaDB
-- PHP Version: 7.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `phb`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `stock_barang`
--

CREATE TABLE `stock_barang` (
  `kode` int(11) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `stok` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `stock_barang`
--

INSERT INTO `stock_barang` (`kode`, `nama_barang`, `stok`) VALUES
(1, 'gula jawa', 20),
(2, 'susu', 15),
(3, 'teh', 17),
(4, 'gula pasir', 20),
(5, 'sunlight', 13),
(6, 'molto', 13);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `stock_barang`
--
ALTER TABLE `stock_barang`
  ADD PRIMARY KEY (`kode`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
