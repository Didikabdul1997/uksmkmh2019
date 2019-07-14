-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2019 pada 03.29
-- Versi Server: 5.6.11
-- Versi PHP: 5.5.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `uksmkmh`
--
CREATE DATABASE IF NOT EXISTS `uksmkmh_10` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uksmkmh_10`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `karyawan`
--

CREATE TABLE IF NOT EXISTS `karyawan` (
  `id_kar` int(15) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(20) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `Ttl` varchar(20) NOT NULL,
  `No_hp` varchar(15) NOT NULL,
  `No_ktp` varchar(16) NOT NULL,
  `No_kartu_keluarga` varchar(16) NOT NULL,
  PRIMARY KEY (`id_kar`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `karyawan`
--

INSERT INTO `karyawan` (`id_kar`, `Nama`, `Alamat`, `Ttl`, `No_hp`, `No_ktp`, `No_kartu_keluarga`) VALUES
(1, 'sutisna', 'kumpulrejo parengan', 'tuban,14 maret 1978', '085202587854', '352336457877000', '352336548752136'),
(2, 'rojak', 'kumpulrejo parengan', 'tuban,02 mei 1975', '088805479588', '3528845781365478', '3528845872156489'),
(3, 'purnomo', 'kumpulrejo parengan', 'tuban,14 maret 1974', '083154862574', '3524401254400009', '3524457891055554'),
(4, 'sutono', 'ora tak doi', 'tuban,01 apr 2001', '088054789123', '3521158746254781', '3521158794251364');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penumpang`
--

CREATE TABLE IF NOT EXISTS `penumpang` (
  `id_penumpang` int(15) NOT NULL AUTO_INCREMENT,
  `Nama` varchar(20) NOT NULL,
  `Alamat` varchar(20) NOT NULL,
  `Tujuan` varchar(20) NOT NULL,
  PRIMARY KEY (`id_penumpang`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `penumpang`
--

INSERT INTO `penumpang` (`id_penumpang`, `Nama`, `Alamat`, `Tujuan`) VALUES
(1, 'sri rahayu', 'tanggulangin montong', 'pasar parengan'),
(2, 'ning', 'sendangrejo parengan', 'kds bojonegoro'),
(3, 'sri mukti', 'tanggulangin montong', 'terminal bojonegoro'),
(4, 'yu ngatemi', 'sembung parengan ', 'pasar kemoro');

-- --------------------------------------------------------

--
-- Struktur dari tabel `siswa`
--

CREATE TABLE IF NOT EXISTS `siswa` (
  `nisn` varchar(99) NOT NULL,
  `nama` varchar(99) NOT NULL,
  `ttl` varchar(99) NOT NULL,
  `alamat` varchar(99) NOT NULL,
  PRIMARY KEY (`nisn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `siswa`
--

INSERT INTO `siswa` (`nisn`, `nama`, `ttl`, `alamat`) VALUES
('', '', '', ''),
('001', 'Didik Abdul Mukmin', 'Tuban, 30 Juli 1997', 'Kumpulrejo - Parengan - Tuban'),
('002', 'Abdul Mukmin', 'Bojonegoro, 22 April 1998', 'Sukorejo - Bojonegoro'),
('003', 'Mukmin Abdul', 'Tuban, 12 Agustus 1998', 'Sugihwaras - Parengan - Tuban');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(15) NOT NULL AUTO_INCREMENT,
  `Harga` varchar(20) NOT NULL,
  `tujuan` varchar(15) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `transaksi`
--

INSERT INTO `transaksi` (`id_transaksi`, `Harga`, `tujuan`) VALUES
(1, '20.000', 'pasar parengan'),
(2, '50.000', 'kds bojonegoro'),
(3, '50.000', 'terminal bojone'),
(4, '15.000', 'pasar kemoro');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(33) NOT NULL,
  `password` varchar(33) NOT NULL,
  `nama` varchar(99) NOT NULL,
  PRIMARY KEY (`id_user`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data untuk tabel `user`
--

INSERT INTO `user` (`id_user`, `username`, `password`, `nama`) VALUES
(1, 'smkmh10', 'smkmh10', 'maksum oziel');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
