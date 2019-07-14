-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 10 Apr 2019 pada 03.10
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
CREATE DATABASE IF NOT EXISTS `uksmkmh_01` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `uksmkmh_01`;

-- --------------------------------------------------------

--
-- Struktur dari tabel `film`
--

CREATE TABLE IF NOT EXISTS `film` (
  `Kode_film` varchar(15) NOT NULL,
  `Judul_film` varchar(30) NOT NULL,
  `Jenis_film` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `film`
--

INSERT INTO `film` (`Kode_film`, `Judul_film`, `Jenis_film`) VALUES
('F002', 'Magic Hour', 'Romantic Film'),
('F003', 'Ayat-ayat cinta 2', 'Islamic Film'),
('F004', 'Cek toko Sebelah', 'Humor Film'),
('F005', 'Yowis ben', 'Humor Film'),
('F006', 'Ada Cinta di SMA', 'Romantic Film'),
('F007', 'Ketika Cinta Bertasbih3', 'islamic Film'),
('F008', 'The Nekad Traveler', 'Advanture Film');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pegawai`
--

CREATE TABLE IF NOT EXISTS `pegawai` (
  `id_pegawai` int(15) NOT NULL AUTO_INCREMENT,
  `nama_pegawai` varchar(20) NOT NULL,
  `ttl` varchar(20) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  PRIMARY KEY (`id_pegawai`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data untuk tabel `pegawai`
--

INSERT INTO `pegawai` (`id_pegawai`, `nama_pegawai`, `ttl`, `alamat`) VALUES
(1, 'Afifah Mahfud', 'Tuban,25 Juli 2000', 'Sumberejo-Bojonegoro'),
(2, 'Haidar Alvaro ', 'Bojonegoro,26 Maret ', 'Kapas-Bojonegoro'),
(3, 'Yuki Maeda', 'Bojonegoro,12 Desemb', 'Kumpulrejo-Parengan'),
(4, 'Lila Kusniatin', 'Tuban,24 Maret 2000', 'Dagangan-Parengan-tuban');

-- --------------------------------------------------------

--
-- Struktur dari tabel `pembeli`
--

CREATE TABLE IF NOT EXISTS `pembeli` (
  `id_pembeli` int(15) NOT NULL AUTO_INCREMENT,
  `nama_pembeli` varchar(30) NOT NULL,
  `alamat` varchar(30) NOT NULL,
  `no_telepon` varchar(20) NOT NULL,
  PRIMARY KEY (`id_pembeli`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data untuk tabel `pembeli`
--

INSERT INTO `pembeli` (`id_pembeli`, `nama_pembeli`, `alamat`, `no_telepon`) VALUES
(3, 'Ivatul Azqiya', 'Mlaten-Bojonegoro', '085456765876'),
(4, 'Abizar jevin el-zaqwan', 'Kapas-Bojonegoro', '088765456345');

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
('001', 'Tya Alvaro', 'bjn', 'suk'),
('002', 'Abdul Mukmin', 'Bojonegoro, 22 April 1998', 'Sukorejo - Bojonegoro'),
('003', 'Mukmin Abdul', 'Tuban, 12 Agustus 1998', 'Sugihwaras - Parengan - Tuban');

-- --------------------------------------------------------

--
-- Struktur dari tabel `studio`
--

CREATE TABLE IF NOT EXISTS `studio` (
  `Kode_studio` varchar(15) NOT NULL,
  `tempat_duduk` varchar(20) NOT NULL,
  PRIMARY KEY (`Kode_studio`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `studio`
--

INSERT INTO `studio` (`Kode_studio`, `tempat_duduk`) VALUES
('S001', '1'),
('S003', '5'),
('S004', '4');

-- --------------------------------------------------------

--
-- Struktur dari tabel `tiket`
--

CREATE TABLE IF NOT EXISTS `tiket` (
  `Kode_film` varchar(15) NOT NULL,
  `Kode_studio` varchar(15) NOT NULL,
  `harga_tiket` varchar(20) NOT NULL,
  `tayang` varchar(20) NOT NULL,
  PRIMARY KEY (`Kode_film`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tiket`
--

INSERT INTO `tiket` (`Kode_film`, `Kode_studio`, `harga_tiket`, `tayang`) VALUES
('F001', 'S001', 'Rp.25.000', '12:00'),
('F003', 'S003', 'Rp.40.000', '20:00');

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
(1, 'smkmh01', 'smkmh01', 'Afifah Mahfundotin');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
