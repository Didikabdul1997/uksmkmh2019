-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 03:18 AM
-- Server version: 10.1.19-MariaDB
-- PHP Version: 5.6.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uksmkmh`
--
CREATE DATABASE IF NOT EXISTS `uksmkmh_12` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uksmkmh_12`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(9) NOT NULL,
  `nama_barang` varchar(22) NOT NULL,
  `stok_barang` varchar(45) NOT NULL,
  `harga` varchar(32) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `stok_barang`, `harga`) VALUES
(1, 'sepatu', '64', '50000'),
(2, 'baju', '74', '50000'),
(3, 'sandal', '41', '3000'),
(4, 'buku', '20', '30000');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(45) NOT NULL,
  `nama_karyawan` varchar(55) NOT NULL,
  `alamat` varchar(45) NOT NULL,
  `ttl` varchar(25) NOT NULL,
  `telepon` varchar(23) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `alamat`, `ttl`, `telepon`) VALUES
(23454558, 'ssss', 'karang - Parengan - Tuban', 'Tuban, 30 Juli 2001', '3445456656'),
(23454559, 'hyhhhlkqjjks', 'fddfsd', 'sfdfsf', '676557878'),
(23454560, 'kusnul', 'karang - Parengan - Tuban', 'Tuban, 30 Juli 2001', 'telepon');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE `siswa` (
  `nisn` varchar(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `ttl` varchar(99) NOT NULL,
  `alamat` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama`, `ttl`, `alamat`) VALUES
('001', 'lilo', 'Tuban, 30 Juli 2001', 'karang - Parengan - Tuban'),
('002', 'Abdul Mukmin', 'Bojonegoro, 22 April 1998', 'Sukorejo - Bojonegoro'),
('003', 'Mukmin Abdul', 'Tuban, 12 Agustus 1998', 'Sugihwaras - Parengan - Tuban');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(45) NOT NULL,
  `tanggal_transaksi` varchar(55) NOT NULL,
  `kasir` varchar(23) NOT NULL,
  `pembeli` varchar(54) NOT NULL,
  `barang` varchar(45) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `tanggal_transaksi`, `kasir`, `pembeli`, `barang`) VALUES
(29, '24 maret 2018', 'via', 'andin', '2'),
(30, '24 maret 2018', 'via', 'andin', '3'),
(32, '24 maret 2018', 'via', 'andin', '1'),
(33, '8 april 2019', 'via', 'andin', '2');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `username` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  `nama` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'smkmh12', 'smkmh12', 'lila kusniyatin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `transaksi`
--
ALTER TABLE `transaksi`
  ADD PRIMARY KEY (`id_transaksi`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id_karyawan` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=23454561;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(45) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
