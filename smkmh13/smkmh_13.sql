-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 03:40 AM
-- Server version: 5.6.11
-- PHP Version: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `aplomba`
--
CREATE DATABASE IF NOT EXISTS `uksmkmh_13` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uksmkmh_13`;

-- --------------------------------------------------------

--
-- Table structure for table `burung`
--

CREATE TABLE IF NOT EXISTS `burung` (
  `id` varchar(99) NOT NULL,
  `nama_pmlk` varchar(99) NOT NULL,
  `jns` varchar(99) NOT NULL,
  `nama_brg` varchar(99) NOT NULL,
  `harga` varchar(99) NOT NULL,
  `telp` varchar(14) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `burung`
--

INSERT INTO `burung` (`id`, `nama_pmlk`, `jns`, `nama_brg`, `harga`, `telp`) VALUES
('00-P-01', 'Lintang Dharu Atmojo', 'Murai', 'Johny', '2.000.000', '088805419221'),
('00-P-02', 'Yusuf Alangka', 'Love Bird', 'Kuchy', '3.500.000', '085231606219');

-- --------------------------------------------------------

--
-- Table structure for table `panitia`
--

CREATE TABLE IF NOT EXISTS `panitia` (
  `id` varchar(99) DEFAULT NULL,
  `nama` varchar(99) NOT NULL,
  `ttl` varchar(99) NOT NULL,
  `alamat` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `panitia`
--

INSERT INTO `panitia` (`id`, `nama`, `ttl`, `alamat`) VALUES
('00-J-01', 'Eldea Stewart', '16 februari 1996', 'Sidoarjo');

-- --------------------------------------------------------

--
-- Table structure for table `peserta`
--

CREATE TABLE IF NOT EXISTS `peserta` (
  `id` varchar(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `ttl` varchar(99) NOT NULL,
  `alamat` varchar(99) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `peserta`
--

INSERT INTO `peserta` (`id`, `nama`, `ttl`, `alamat`) VALUES
('00-P-01', 'Lintang Dharu Atmojo', '7 november 2000, Tuban', 'Saringembat'),
('00-P-02', 'Yusuf Alangka', '3 Januari 2001', 'Tingkis'),
('00-P-03', 'Supriadi', '19 Agustus 1999, Tuban', 'Parengan');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`) VALUES
(2, 'smkmh13', 'smkmh13', 'Lintang Dharu Atmojo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
