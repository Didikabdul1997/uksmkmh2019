-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 02:55 AM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `uksmkmh`
--
CREATE DATABASE IF NOT EXISTS `uksmkmh_08` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uksmkmh_08`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(5) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `harga` varchar(15) NOT NULL,
  `tgl_pembelian` varchar(15) NOT NULL,
  `jumlah_stok` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama`, `harga`, `tgl_pembelian`, `jumlah_stok`) VALUES
(1, 'baju', '40.000', '2015-08-13', 4),
(2, 'hijab', '30.000', '2018-06-20', 4),
(3, 'mukna', '150.000', '2018-04-02', 5),
(14, 'sarung', '100.000', '2019-12-09', 4),
(15, 'baju anak', '75.000', '2017-07-17', 5),
(18, 'baju koko', '90.000', '2019-12-15', 3),
(19, 'baju ', '60.000', '2018-03-16', 5),
(20, 'kopyah', '40.000', '2019-10-22', 5),
(25, 'mukna', '150.000', '2018-04-02', 5);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id` int(15) NOT NULL,
  `nama` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `kelamin` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id`, `nama`, `alamat`, `kelamin`) VALUES
(1, 'Iska Nura', 'Jakarta', 'Perempuan'),
(2, 'Hikari Aiza', 'Parengan Tuban', 'Perempuan'),
(3, 'Jovin Jenaro', 'Surabaya', 'Laki-laki'),
(4, 'Rafiz ramadhan', 'Bojonegoro', 'laki-laki'),
(5, 'Izha putri', 'bandung', 'perempuan');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE `pembeli` (
  `id` int(10) NOT NULL,
  `nama_pembeli` varchar(20) NOT NULL,
  `alamat` varchar(20) NOT NULL,
  `barang` varchar(10) NOT NULL,
  `jumlah_barang` int(15) NOT NULL,
  `harga` int(15) NOT NULL,
  `total` int(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id`, `nama_pembeli`, `alamat`, `barang`, `jumlah_barang`, `harga`, `total`) VALUES
(1, 'Sika Rahma', 'jakarta', 'baju koko', 1, 100000, 100000),
(2, 'Rafiz Muhammad', 'Bandung', 'sarung', 1, 110000, 110000),
(3, 'Elisa', 'Bojonegoro', 'hijab', 1, 35000, 35000),
(4, 'riko', 'bojonegoro', 'baju koko', 1, 100000, 100000),
(5, 'iska', 'karang', 'baju', 1, 45000, 45000);

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
(1, 'smkmh08', 'smkmh08', 'Izka Nuraeni');

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
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `karyawan`
--
ALTER TABLE `karyawan`
  MODIFY `id` int(15) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `pembeli`
--
ALTER TABLE `pembeli`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
