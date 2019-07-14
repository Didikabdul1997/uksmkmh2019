-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 06:32 PM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `uksmkmh`
--
CREATE DATABASE IF NOT EXISTS `uksmkmh_03` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uksmkmh_03`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(9) NOT NULL AUTO_INCREMENT,
  `nama_barang` varchar(50) NOT NULL,
  `tgl_pembelian` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  `harga` int(11) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `tgl_pembelian`, `jumlah`, `harga`) VALUES
(6, 'laptop accer', '3 mei 2013', '10', 1000000),
(7, 'laptop samsung', '26 agustus 2013', '10', 2000000),
(8, 'laptop assus', '17 AGUSTUS 2018', '15', 1000000);

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `jenis_kelamin` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `TTL` varchar(50) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=18 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `jenis_kelamin`, `alamat`, `TTL`) VALUES
(15, 'Rohman', 'laki-laki', 'soko', '4 maret 2004'),
(16, 'syah', 'laki-laki', 'bojonegoro', '7 juli 2001'),
(17, 'lia', 'perempuan', 'TUBAN', '4 maret 2004');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `id_pembeli` int(50) NOT NULL AUTO_INCREMENT,
  `nama` varchar(50) NOT NULL,
  `alamat` varchar(50) NOT NULL,
  `nama_barang` varchar(50) NOT NULL,
  `jumlah` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pembeli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=875875 ;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama`, `alamat`, `nama_barang`, `jumlah`) VALUES
(875871, 'lila', 'laptop accer', 'tuban', '1'),
(875872, 'Rokim', 'laptop samsung', 'lampung', '1'),
(875873, 'raul', 'laptop samsung', 'soko', '2'),
(875874, 'Rohman', 'bojonegoro', 'laptop asus', '1');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nisn` varchar(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `ttl` varchar(99) NOT NULL,
  `alamat` varchar(99) NOT NULL,
  PRIMARY KEY (`nisn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama`, `ttl`, `alamat`) VALUES
('001', 'raul', 'Tuban, 30 Juli 1997', 'Kumpulrejo - Parengan - Tuban'),
('002', 'Rokim', 'Bojonegoro, 22 April 1998', 'Sukorejo - Bojonegoro');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  `nama` varchar(99) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'smkmh03', 'smkmh03', 'A.syahrulmunir');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
