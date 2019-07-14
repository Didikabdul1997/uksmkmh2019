-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 09, 2019 at 08:12 PM
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
CREATE DATABASE IF NOT EXISTS `uksmkmh_07` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uksmkmh_07`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(9) NOT NULL,
  `nama_barang` varchar(15) NOT NULL,
  `harga` varchar(20) NOT NULL,
  `jumlah_stok` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga`, `jumlah_stok`) VALUES
(1, 'vivo f15 pro5', '4000000', 213),
(2, 'Oppo f11pro', '4399000', 76),
(3, 'samsung S10+', '13899000', 76),
(4, 'samsung j2pro', '1799000', 25),
(5, 'vivo f11 pro', '3799000', 40),
(6, 'samsung S5', '3289000', 50),
(9, 'vivo f15 pro', '13899000', 25),
(10, 'samsung J5', '2599000', 29);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(20) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `ttl` varchar(55) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `No_tlp` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `ttl`, `alamat`, `No_tlp`) VALUES
(1, 'novi novita', 'Lamongan, 01 maret 1998', 'tuban', '082234456123'),
(2, 'aditiya', 'Tuban, 08 januari 1993', 'bojonegoro', '088834427865'),
(3, 'ajeng', 'bojonegoro, 12 oktober 1995', 'bojonegoro', '085231478098'),
(4, 'umi', 'tuban, 29 mei 1996', 'tuban', '085234512890'),
(5, 'tono', 'Tuban, 29 agustus 1992', 'Tuban', '085324098008');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id_pembeli` int(10) NOT NULL,
  `nama_pembeli` varchar(25) NOT NULL,
  `id_barang` varchar(200) NOT NULL,
  `alamat` varchar(55) NOT NULL,
  `jumlah_barang` int(15) NOT NULL,
  `total` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `id_barang`, `alamat`, `jumlah_barang`, `total`) VALUES
(5, 'rika', '1', 'bojonegoro', 2, 10000000),
(6, 'tika', '1', 'tuban', 2, 8000000),
(8, 'farith', '3', 'bojonegoro', 2, 27798000),
(9, 'Didik am', '3', 'kumpulrejo - parenga', 6, 83394000),
(10, 'rizki', '10', 'tuban', 1, 2599000),
(11, 'juli', '1', 'bojonegoro', 1, 4000000),
(12, 'ani', '2', 'Tuban', 1, 4399000);

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
('001', 'Didik Abdul Mukmin', 'Tuban, 30 Juli 1997', 'Kumpulrejo - Parengan - Tuban'),
('002', 'Abdul Mukmin', 'Bojonegoro, 22 April 1998', 'Sukorejo - Bojonegoro'),
('003', 'Mukmin Abdul', 'Tuban, 12 Agustus 1998', 'Sugihwaras - Parengan - Tuban');

-- --------------------------------------------------------

--
-- Table structure for table `transaksi`
--

CREATE TABLE `transaksi` (
  `id_transaksi` int(10) NOT NULL,
  `Tanggal` varchar(15) NOT NULL,
  `nama_barang` varchar(20) NOT NULL,
  `nama_pembeli` varchar(25) NOT NULL,
  `jumlah_barang` varchar(10) NOT NULL,
  `Total` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `Tanggal`, `nama_barang`, `nama_pembeli`, `jumlah_barang`, `Total`) VALUES
(1, '05-12-2018', 'oppo f11pro', 'iska', '1', '4.300.000'),
(100, '11-01-2018', 'oppo f11pro', 'iska', '1', '4.300.000');

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
(1, 'smkmh07', 'smkmh07', 'Gianita Widiati');

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
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`id_pembeli`);

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
  MODIFY `id_barang` int(9) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id_pembeli` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `transaksi`
--
ALTER TABLE `transaksi`
  MODIFY `id_transaksi` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=101;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
