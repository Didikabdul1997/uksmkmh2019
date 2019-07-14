-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 03:00 AM
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
CREATE DATABASE IF NOT EXISTS `uksmkmh_11` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uksmkmh_11`;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` varchar(11) NOT NULL,
  `nama_karyawan` varchar(20) NOT NULL,
  `no_hp` varchar(18) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama_karyawan`, `no_hp`, `ttl`) VALUES
('18', 'rizky', '085748281025', 'tuban, 20 mei 2007'),
('5', 'kurnia', '0822516543', 'tuban,23 maret 2000'),
('7', 'kurnia rizki', '082236253215', 'tuban,18 april 2004');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE IF NOT EXISTS `makanan` (
  `id_makanan` int(12) NOT NULL,
  `nama` varchar(12) NOT NULL,
  `harga_makanan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_makanan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_makanan`, `nama`, `harga_makanan`) VALUES
(5, 'bakso', '5000'),
(12, 'pecel', '10000'),
(18, 'frid chiken', '20000');

-- --------------------------------------------------------

--
-- Table structure for table `pelangan`
--

CREATE TABLE IF NOT EXISTS `pelangan` (
  `id_pelanggan` varchar(20) NOT NULL,
  `nama_pelanggan` varchar(18) NOT NULL,
  `alamat_pelanggan` varchar(25) NOT NULL,
  `no_telpon` int(11) NOT NULL,
  PRIMARY KEY (`id_pelanggan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelangan`
--

INSERT INTO `pelangan` (`id_pelanggan`, `nama_pelanggan`, `alamat_pelanggan`, `no_telpon`) VALUES
('12345', 'rizky1', 'tanggulangin1', 2147483647),
('23', 'saya', 'karang', 2147483647),
('57', 'kurnia', 'montong', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `pesan`
--

CREATE TABLE IF NOT EXISTS `pesan` (
  `id_pesan` varchar(35) NOT NULL,
  `pelanggan` varchar(12) NOT NULL,
  `makanan` varchar(30) NOT NULL,
  PRIMARY KEY (`id_pesan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pesan`
--

INSERT INTO `pesan` (`id_pesan`, `pelanggan`, `makanan`) VALUES
('56', 'rizki', 'bakso'),
('6', 'kurnia', 'pecel'),
('8', 'kurnia rizki', 'fried chiken');

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
('', 'Kurnia Rizki', 'Tuban, 18 Desember 2001', ''),
('001', 'Kurnia Rizki', 'Tuban, 18 Desember 2001', 'Tanggulangin  - Montong - Tuban'),
('0012', 'Rizki', 'Tuban, 23 Juli 2005', 'palang  - Montong - Tuban'),
('003', 'Kurnia', 'Tuban,17  April 1999', 'Talun  - Montong - Tuban');

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
(1, 'smkmh11', 'smkmh11', 'Kurni@rizki');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
