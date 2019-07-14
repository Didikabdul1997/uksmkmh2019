-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 03:23 AM
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
CREATE DATABASE IF NOT EXISTS `uksmkmh_06` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uksmkmh_06`;

-- --------------------------------------------------------

--
-- Table structure for table `dokter`
--

CREATE TABLE IF NOT EXISTS `dokter` (
  `id_dokter` varchar(10) NOT NULL,
  `Nama` varchar(10) NOT NULL,
  `Keahlian` varchar(10) NOT NULL,
  `Alamat` varchar(10) NOT NULL,
  `jam_kerja` varchar(30) NOT NULL,
  PRIMARY KEY (`id_dokter`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dokter`
--

INSERT INTO `dokter` (`id_dokter`, `Nama`, `Keahlian`, `Alamat`, `jam_kerja`) VALUES
('01', 'Bagus', 'kandungan', 'Kumpulrejo', '08.30-10.00'),
('02', 'Rebeka', 'Saraf', 'senori    ', '07.00-09.00'),
('03', 'Cimot', 'Jantung', 'Tuban     ', '13.00-15.00'),
('04', 'Chung', 'Bedah', 'Tubania   ', '11.00-13.00'),
('05', 'Ninot', 'Mata', 'Tuban     ', '09.00-10.00'),
('06', 'pompom', 'Kulit', 'Sukorejo  ', '15.00-17.00'),
('07', 'Oneng', 'Kecantikan', 'Tuban', '19.00-21.00');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id_obat` varchar(10) NOT NULL,
  `Nama_Obat` varchar(50) NOT NULL,
  `Kegunaan` varchar(50) NOT NULL,
  `jumlah_stok` varchar(10) NOT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `Nama_Obat`, `Kegunaan`, `jumlah_stok`) VALUES
('0001', 'Azitromisi', 'Infeksi Bakteri                                   ', '20000'),
('0002', 'Glimepirid', 'Diabetes', '50000'),
('0003', 'Paracetamol', 'Demam                                             ', '5000'),
('0004', 'oralit', 'diare', '2000'),
('0005', 'Promag', 'mag', '5000'),
('0006', 'Rivanol', 'CuciLuka', '10000'),
('0007', 'Polysilane', 'Mag', '12000'),
('0008', 'Microlax', 'DiareMampet                                       ', '500');

-- --------------------------------------------------------

--
-- Table structure for table `pasien`
--

CREATE TABLE IF NOT EXISTS `pasien` (
  `id_pasien` varchar(10) NOT NULL,
  `Nama` varchar(10) NOT NULL,
  `Jeniskelamin` varchar(10) NOT NULL,
  `Keluhan` varchar(50) NOT NULL,
  `Alamat` varchar(50) NOT NULL,
  `no_kamar` varchar(10) NOT NULL,
  `nama_kamar` varchar(50) NOT NULL,
  PRIMARY KEY (`id_pasien`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pasien`
--

INSERT INTO `pasien` (`id_pasien`, `Nama`, `Jeniskelamin`, `Keluhan`, `Alamat`, `no_kamar`, `nama_kamar`) VALUES
('01', 'Rebeka', 'perempuan', 'demam', 'Senori', '90        ', 'Tulip'),
('02', 'lisa', 'perempuan', 'Anemia', 'senori', '12        ', 'Anggrek');

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
('001', 'Didik Abdul Mukmin', 'Tuban, 30 Juli 1997', 'Kumpulrejo - Pdcfharengan - Tuban'),
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1235 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'smkmh06', 'smkmh06', 'Elisaind');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
