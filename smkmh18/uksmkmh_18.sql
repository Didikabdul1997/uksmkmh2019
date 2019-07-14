-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 03:34 AM
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
CREATE DATABASE IF NOT EXISTS `uksmkmh_18` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uksmkmh_18`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `ID_Barang` int(11) NOT NULL AUTO_INCREMENT,
  `Nama_Barang` varchar(55) NOT NULL,
  `Stok` varchar(55) NOT NULL,
  `Harga` varchar(55) NOT NULL,
  PRIMARY KEY (`ID_Barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=14 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`ID_Barang`, `Nama_Barang`, `Stok`, `Harga`) VALUES
(4, 'Pisang goreng', '55', '1.000'),
(5, 'Brownis', '30', '3,000'),
(6, 'Pastel ', '40', '2.000'),
(7, 'Dadar Gulung', '30', '1.000'),
(8, 'Bakpau', '56', '2.000'),
(9, 'Bakpau', '56', '2.000'),
(10, 'Bakpau', '56', '2.000'),
(11, 'Juise jeruk', '45', '2.000'),
(12, 'Es pelangi', '67', '5.000'),
(13, 'Es Teh', '30', '1.500');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `ID_Karyawan` int(11) NOT NULL AUTO_INCREMENT,
  `Nama_Karyawan` varchar(55) NOT NULL,
  `TTL` varchar(55) NOT NULL,
  `Jns_Kel` varchar(55) NOT NULL,
  `Alamat` varchar(55) NOT NULL,
  PRIMARY KEY (`ID_Karyawan`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=58 ;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`ID_Karyawan`, `Nama_Karyawan`, `TTL`, `Jns_Kel`, `Alamat`) VALUES
(6, 'Alfi Oktaviana', 'Tuban, 21-Mei-2001', 'Perempuan', 'Tuban'),
(7, 'Candra Saputra', 'Tuban, 11-Januari-1998', 'Laki-Laki', 'Bojonegoro'),
(56, 'Nila Alinnaya', 'Tuban, 21-Agustus-2000', 'Perempuan', 'Tuban'),
(57, 'Ilbana Nafa', 'tuban,21-agustus-2002', 'Perempuan', 'Bojonegoro');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `ID_Pembeli` int(55) NOT NULL AUTO_INCREMENT,
  `Nama_Barang` varchar(55) NOT NULL,
  `Harga` varchar(55) NOT NULL,
  `Jumlah` varchar(55) NOT NULL,
  PRIMARY KEY (`ID_Pembeli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`ID_Pembeli`, `Nama_Barang`, `Harga`, `Jumlah`) VALUES
(1, 'Pastel', '2.000', '2');

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
('001', 'Didik Abdul Mukmin', 'Tuban, 30 Juli 1997', 'Kumpulrejo - Parengan - Tuban'),
('002', 'Abdul Mukmin', 'Bojonegoro, 22 April 1998', 'Sukorejo - Bojonegoro'),
('003', 'Mukmin Abdul', 'Tuban, 12 Agustus 1998', 'Sugihwaras - Parengan - Tuban');

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
(1, 'smkmh18', 'smkmh18', 'Nila Alinnaya');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
