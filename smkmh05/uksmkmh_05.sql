-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 03:19 AM
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
CREATE DATABASE IF NOT EXISTS `uksmkmh_05` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uksmkmh_05`;

-- --------------------------------------------------------

--
-- Table structure for table `kader`
--

CREATE TABLE IF NOT EXISTS `kader` (
  `id_kader` varchar(5) NOT NULL,
  `nama` varchar(35) NOT NULL,
  `ttl` varchar(35) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `alamat` varchar(35) NOT NULL,
  PRIMARY KEY (`id_kader`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `kader`
--

INSERT INTO `kader` (`id_kader`, `nama`, `ttl`, `jenis_kelamin`, `kelas`, `alamat`) VALUES
('001', 'BAGUS MUALLIF HUSNA', 'Tuban, 12 Juni 2001', 'Laki-laki', 'XII RPL', 'Kumpulrejo'),
('002', 'IZKA NURAINI', 'Tuban, 22 Agustus 2001', ' Perempuan', 'XII RPL ', 'Sukorejo'),
('003', 'AFIFAH MAHFUNDHOTIN', 'Tuban, 26 Maret 2001', 'Perempuan ', 'XII RPL ', 'Sukorejo'),
('004', 'NUR MUAHAMMAD RIYANDI ', 'Tuban, 09 November 2002', 'Laki-laki', 'XI TKR', 'Dagangan'),
('005', 'SURYANI INDAH JULIANTI', 'Tuban, 12 Januari 2002', 'Perempuan ', 'XI RPL ', 'Parangbatu ');

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE IF NOT EXISTS `obat` (
  `id_obat` varchar(5) NOT NULL,
  `nama_obat` varchar(100) NOT NULL,
  `indikasi` varchar(100) NOT NULL,
  `resep` varchar(100) NOT NULL,
  `stok` varchar(20) NOT NULL,
  PRIMARY KEY (`id_obat`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id_obat`, `nama_obat`, `indikasi`, `resep`, `stok`) VALUES
('001', 'Ferrous Furmarate Folic Acid / Tablet Tambah Darah', 'Untuk memenuhi kebutuhan zat besi ', '1 Kali 1 Hari', '3 Kotak'),
('002', 'ORALIT 200', 'Mencegah dan mengobati Kurang Cairan (Dehidrasi)', '3 Kali 1 Hari', '20 Bungkus / Shaset'),
('003', 'PROMAG', 'Untuk meringankan gejala-gejala yang berhubungan dengan kelebihan asam lambung ', '2kali sehari', '3 Kotak'),
('004', 'Bedal Salicyl', 'Membantu mengurangi gatal-gatal karena biang keringat', 'Taburkan bedak secukupnya pada kulit yang gatal-gatal', '1 Kotak'),
('005', 'Rivanol', 'Sebagai Obat cuci luka, obat kompres luka, dan obat kulit ', 'Basahi kapas dengan Rivanol dan tempelkan pada kulit ', '1 Botol'),
('006', 'Natrium Klorida 0,9%', 'Larutan infus untuk pemakaian intravena dan untuk mencuci luka', 'Basahi pada luka yang ada ditubuh', '2 Botol');

-- --------------------------------------------------------

--
-- Table structure for table `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nisn` varchar(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `ttl` varchar(99) NOT NULL,
  `jenis_kelamin` varchar(15) NOT NULL,
  `kelas` varchar(10) NOT NULL,
  `alamat` varchar(99) NOT NULL,
  `tanggal` varchar(20) NOT NULL,
  `keluhan` varchar(35) NOT NULL,
  `obat` varchar(35) NOT NULL,
  `resep` varchar(20) NOT NULL,
  PRIMARY KEY (`nisn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama`, `ttl`, `jenis_kelamin`, `kelas`, `alamat`, `tanggal`, `keluhan`, `obat`, `resep`) VALUES
('02345', 'M.RIZAL', 'Tuban, 14 Agustus 2003', 'Laki-laki', 'X TKR', 'Soko', '25 Maret 2019', 'Sakit gatal', 'Bedak Salicyl', 'Taburkan bedak secuk'),
('04567', 'PUTRI NUR UTAMI', 'Tuban, 12 Desember 2002', 'Perempuan', 'XI RPL ', 'Sukorejo', '30 Maret 2019', 'Terkena pimes  ', 'Rivanol', 'Basahi kapas dengan'),
('05678', 'SITI JAYANTI', 'Tuban, 25 juni 2003', 'Perempuan', 'X RPL', 'Kumpulrejo', '12 Maret 2019', 'SAKIT DEMAM', 'PARACETAMOL', '2 Kali 1 Hari');

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
(1, 'smkmh05', 'smkmh05', 'BAGUS MUALLIF HUSNA');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
