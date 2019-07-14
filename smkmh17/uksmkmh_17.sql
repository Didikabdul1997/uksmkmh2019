-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 10:19 AM
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
CREATE DATABASE IF NOT EXISTS `uksmkmh_17` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uksmkmh_17`;

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE IF NOT EXISTS `barang` (
  `id_barang` int(10) NOT NULL AUTO_INCREMENT,
  `jumlah_barang` varchar(15) NOT NULL,
  `judul_buku` varchar(30) NOT NULL,
  `harga` varchar(15) NOT NULL,
  PRIMARY KEY (`id_barang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `jumlah_barang`, `judul_buku`, `harga`) VALUES
(43, '2', 'rumah dari kardus mentari', '80.000'),
(44, '3', 'ayat-ayat cinta zahrana', '200.000'),
(45, '4', 'ketika mulut terkunci azizah', '90.000'),
(46, '5', 'cinta anak remaja aisyah', '250.000');

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_karyawan` int(6) NOT NULL DEFAULT '0',
  `no_hp` varchar(12) NOT NULL,
  `nama_karyawan` varchar(15) NOT NULL,
  `jenis_kelamin` varchar(10) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  PRIMARY KEY (`id_karyawan`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `no_hp`, `nama_karyawan`, `jenis_kelamin`, `alamat`, `ttl`) VALUES
(334, '6554433', 'fina', 'perempuan', 'wukuirharjo,parengan-tuban', 'tuban,27 april 1999'),
(345, '7896678', 'riski kurnia', 'perempuan', 'tanggulangin,montong-tuban', 'tuban,16 oktober 200'),
(435, '085987654345', 'arif', 'laki-laki', 'sukorejo,parengan-tuban5', '28 desember 1997'),
(589, '087644345', 'sika', 'perempuan', 'parengan-tuban', 'tuban,13 januari1999'),
(2345, '888854566', 'afifah 5', 'perempuan', 'sukorejo,parengan-tuban', 'tuban,26 juni 2001'),
(34212, '456782', 'umi aisyah2', 'perempuan2', 'kumpulrejo,parengan-tuban2', '27,oktober 20012');

-- --------------------------------------------------------

--
-- Table structure for table `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `id_pembeli` int(12) NOT NULL DEFAULT '0',
  `nama_pembeli` varchar(20) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  PRIMARY KEY (`id_pembeli`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `jenis_kelamin`, `alamat`) VALUES
(1, 'alin', 'perempuan', 'Sukorejo,Parengan-Tuban'),
(2, 'fiqi', 'laki-laki', 'wukuirharjo,parengan-tuban'),
(3, 'yudi', 'laki-laki', 'Sukorejo,Parengan-Tuban'),
(4, 'jnh', 'perempuan', 'wukuirharjo,parengan-tuban'),
(5, 'nila', 'perempuan', 'Sukorejo,Parengan-Tuban'),
(6, 'adi s', 'laki-laki', 'dagangan,parengan-tuban');

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
-- Table structure for table `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(9) NOT NULL AUTO_INCREMENT,
  `kasir` varchar(15) NOT NULL,
  `harga` varchar(10) NOT NULL,
  `tgl_pembeli` varchar(99) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `kasir`, `harga`, `tgl_pembeli`) VALUES
(1, 'bmhk', '80.000', '4 maret 2016'),
(2, 'asm ', '250.000', '3 februari 2019'),
(3, 'bgs ', '30.000', '12 maret 2019'),
(4, 'mnj ', '200.000', '4 mei 2018'),
(5, 'alin ', '98.000', '30 desember 2017'),
(6, 'yusi ', '57.000', '31 januari 2018');

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
(1, 'smkmh17', 'smkmh17', 'Mifta jnh');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
