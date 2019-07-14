-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 05:49 AM
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
CREATE DATABASE IF NOT EXISTS `uksmkmh_24` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uksmkmh_24`;

-- --------------------------------------------------------

--
-- Table structure for table `data_penjualan`
--

CREATE TABLE `data_penjualan` (
  `Kode_Transaksi` varchar(50) NOT NULL,
  `Tanggal` varchar(50) NOT NULL,
  `Id_Pembeli` varchar(50) NOT NULL,
  `Id_Karyawan` varchar(50) NOT NULL,
  `Id_Obat` varchar(50) NOT NULL,
  `Jumlah_Obat` varchar(50) NOT NULL,
  `Total` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data_penjualan`
--

INSERT INTO `data_penjualan` (`Kode_Transaksi`, `Tanggal`, `Id_Pembeli`, `Id_Karyawan`, `Id_Obat`, `Jumlah_Obat`, `Total`) VALUES
('121', '14', '2', '2', '2', '98', '5.000.000'),
('123', '15', '3', '3', '3', '78', '3.400.000'),
('125', '17', '5', '5', '5', '56', '3.124.000'),
('128', '18', '8', '8', '8', '20', '2.000.000');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `Id_Karyawan` int(16) NOT NULL,
  `Nama_Karyawan` varchar(50) NOT NULL,
  `TTL` varchar(50) NOT NULL,
  `Alamat` varchar(75) NOT NULL,
  `Jenis_Kelamin` varchar(15) NOT NULL,
  `No_Telp` varchar(16) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`Id_Karyawan`, `Nama_Karyawan`, `TTL`, `Alamat`, `Jenis_Kelamin`, `No_Telp`) VALUES
(5, 'silva', 'tuban , 15 mei 2001', 'Sukorejo Parengan Tuban', 'perempuan', '083123456789'),
(6, 'Eko', 'tuban , 15 september 1999', 'Sukorejo Parengan Tuban', 'Laki-Laki', '081238456718'),
(7, 'Inal', 'Tuban, 14 oktober 2000', 'Sukorejo Parengan Tuban', 'Laki-Laki', '085235768897'),
(8, 'wahyudi', '14 Maret 2001', 'Parengan Tubani', 'Laki-Laki', '0888217576403'),
(10, 'zainur', 'tuban , 15 september 2001', 'Sukorejo Parengan Tuban', 'perempuan', '085435432123');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `Id_Obat` int(20) NOT NULL,
  `Nama_Obat` varchar(20) NOT NULL,
  `Jenis_Obat` varchar(20) NOT NULL,
  `Stock` varchar(99) NOT NULL,
  `Harga` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`Id_Obat`, `Nama_Obat`, `Jenis_Obat`, `Stock`, `Harga`) VALUES
(1, 'Komek', 'batuk', '100', '1000'),
(2, 'promaag', 'maag', '67', '500'),
(3, 'ultraflu', 'flu dan batuk', '20', '2500'),
(4, 'oskadon sp', 'sakit kepala', '81', '1250'),
(13, 'obh', 'batuk berdahak', '23', '500'),
(14, 'progressin', 'panas', '32', '500');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `Id_Pembeli` int(50) NOT NULL,
  `Nama` varchar(50) NOT NULL,
  `Barang_Yang_DiBeli` varchar(50) NOT NULL,
  `Jenis_Kelamin` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`Id_Pembeli`, `Nama`, `Barang_Yang_DiBeli`, `Jenis_Kelamin`) VALUES
(1, 'wah', 'komek', 'Laki-Laki'),
(2, 'yudi', 'OBH', 'Laki-Laki'),
(3, 'mas wah', 'komek', 'Laki-Laki'),
(4, 'mas yud', 'oskadon sp', 'Laki-Laki'),
(5, 'sri', 'komek', 'perempuan');

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
('', '', '', ''),
('001', 'Didik Abdul Mukmin', 'Tuban, 30 Juli 1997', 'Kumpulrejo - Parengan - Tuban'),
('002', 'Abdul Mukmin', 'Bojonegoro, 22 April 1998', 'Sukorejo - Bojonegoro'),
('003', 'Mukmin Abdul', 'Tuban, 12 Agustus 1998', 'Sugihwaras - Parengan - Tuban');

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
(1, 'smkmh24', 'smkmh24', 'Kak Wah Yud I');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_penjualan`
--
ALTER TABLE `data_penjualan`
  ADD PRIMARY KEY (`Id_Pembeli`,`Id_Karyawan`,`Id_Obat`);

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`Id_Karyawan`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`Id_Obat`);

--
-- Indexes for table `pembeli`
--
ALTER TABLE `pembeli`
  ADD PRIMARY KEY (`Id_Pembeli`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `Id_Karyawan` int(16) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `Id_Obat` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `Id_Pembeli` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
