-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 10, 2019 at 03:23 AM
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
CREATE DATABASE IF NOT EXISTS `uksmkmh_16` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uksmkmh_16`;

-- --------------------------------------------------------

--
-- Table structure for table `karyawan`
--

CREATE TABLE `karyawan` (
  `id_karyawan` int(55) NOT NULL,
  `nama` varchar(55) NOT NULL,
  `alamat` varchar(55) NOT NULL,
  `telepon` varchar(55) NOT NULL,
  `jenis_kelamin` varchar(55) NOT NULL,
  `ttl` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `karyawan`
--

INSERT INTO `karyawan` (`id_karyawan`, `nama`, `alamat`, `telepon`, `jenis_kelamin`, `ttl`) VALUES
(14, 'angelina', 'karang', '085230131690', 'perempuan', '12 juli 2018'),
(15, 'Muhammad', 'dander bojonegoro', '085230131690', 'perempuan', '21 april 2001 bjn'),
(16, 'ahmad', 'karang', '082345676453', 'Laki laki', '30 Desember 2016'),
(17, 'retno', 'probolinggo', '085342376841', 'perempuan', '23 maret 2014'),
(18, 'joni wahyono', 'kedung jambe Tuban', '082345676453', 'Laki laki', '19 mei 2015');

-- --------------------------------------------------------

--
-- Table structure for table `notification`
--

CREATE TABLE `notification` (
  `id_Notification` int(55) NOT NULL,
  `perihal` varchar(55) NOT NULL,
  `tanggal` varchar(55) NOT NULL,
  `penerima` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `notification`
--

INSERT INTO `notification` (`id_Notification`, `perihal`, `tanggal`, `penerima`) VALUES
(4, 'Undangan Rapat', '01 Maret 2018', 'PT Duol Exstra'),
(5, 'permohonan', '23 Juli 2018', 'PT Sido Muncul'),
(6, 'Undangan', '01 Maret 2018', 'PT Dua Kelinci');

-- --------------------------------------------------------

--
-- Table structure for table `project`
--

CREATE TABLE `project` (
  `id_Project` int(11) NOT NULL,
  `name` varchar(55) NOT NULL,
  `information` varchar(55) NOT NULL,
  `from_date` varchar(55) NOT NULL,
  `to_date` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `project`
--

INSERT INTO `project` (`id_Project`, `name`, `information`, `from_date`, `to_date`) VALUES
(7, 'mitha', 'pembanguanan jalan', '23 maret 2012', '30 april 2014'),
(8, 'lestari', 'perbaikan jalan', '12 april 2013', '1 mei 2015'),
(9, '', '', '', '');

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
('003', 'Mukmin Abdul', 'Tuban, 12 Agustus 1998', 'Sugihwaras - Parengan - Tuban'),
('2349', 'Mitha', '12 juli 2019', 'bjn');

-- --------------------------------------------------------

--
-- Table structure for table `surat`
--

CREATE TABLE `surat` (
  `id_surat` int(11) NOT NULL,
  `perihal` varchar(55) NOT NULL,
  `tanggal` varchar(55) NOT NULL,
  `pengirim` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `surat`
--

INSERT INTO `surat` (`id_surat`, `perihal`, `tanggal`, `pengirim`) VALUES
(9, 'Undangan Rapat', '21 Aprill 2019', 'PT Dua Kelinci'),
(10, 'permohonan persetujuan', '23 Juli 2018', 'PT Gajah Mungkur'),
(11, 'Pemberitahuan', '01 Maret 2018', 'PT Makmur Jaya'),
(12, 'permohonan', '23 Juli 2018', 'PT Mekar Bunga'),
(13, 'Undangan', '21 Aprill 2019', 'PT Dua Kelinci');

-- --------------------------------------------------------

--
-- Table structure for table `surate`
--

CREATE TABLE `surate` (
  `id_surat` int(55) NOT NULL,
  `perihal` varchar(55) NOT NULL,
  `tanggal` varchar(55) NOT NULL,
  `Penerima` varchar(55) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
(1, 'smkmh16', 'smkmh16', 'Mifta Wahidah');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `karyawan`
--
ALTER TABLE `karyawan`
  ADD PRIMARY KEY (`id_karyawan`);

--
-- Indexes for table `notification`
--
ALTER TABLE `notification`
  ADD PRIMARY KEY (`id_Notification`);

--
-- Indexes for table `project`
--
ALTER TABLE `project`
  ADD PRIMARY KEY (`id_Project`);

--
-- Indexes for table `siswa`
--
ALTER TABLE `siswa`
  ADD PRIMARY KEY (`nisn`);

--
-- Indexes for table `surat`
--
ALTER TABLE `surat`
  ADD PRIMARY KEY (`id_surat`);

--
-- Indexes for table `surate`
--
ALTER TABLE `surate`
  ADD PRIMARY KEY (`id_surat`);

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
  MODIFY `id_karyawan` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
--
-- AUTO_INCREMENT for table `notification`
--
ALTER TABLE `notification`
  MODIFY `id_Notification` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `project`
--
ALTER TABLE `project`
  MODIFY `id_Project` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT for table `surat`
--
ALTER TABLE `surat`
  MODIFY `id_surat` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
--
-- AUTO_INCREMENT for table `surate`
--
ALTER TABLE `surate`
  MODIFY `id_surat` int(55) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
