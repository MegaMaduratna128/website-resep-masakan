-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Inang: 127.0.0.1
-- Waktu pembuatan: 11 Mei 2019 pada 06.00
-- Versi Server: 5.6.14
-- Versi PHP: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Basis data: `proyek1`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `id_admin` int(11) NOT NULL,
  `username_admin` varchar(20) NOT NULL,
  `password_admin` varchar(50) NOT NULL,
  PRIMARY KEY (`id_admin`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `admin`
--

INSERT INTO `admin` (`id_admin`, `username_admin`, `password_admin`) VALUES
(111, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Struktur dari tabel `resep`
--

CREATE TABLE IF NOT EXISTS `resep` (
  `id_resep` int(11) NOT NULL AUTO_INCREMENT,
  `id_jenis` int(11) NOT NULL,
  `nama_resep` varchar(255) NOT NULL,
  `bahan_resep` varchar(255) NOT NULL,
  `cara_resep` text NOT NULL,
  `foto_resep` varchar(255) NOT NULL,
  PRIMARY KEY (`id_resep`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=15 ;

--
-- Dumping data untuk tabel `resep`
--

INSERT INTO `resep` (`id_resep`, `id_jenis`, `nama_resep`, `bahan_resep`, `cara_resep`, `foto_resep`) VALUES
(14, 1, 'bebek', 'aaaas', 'sss', 'background.jpeg');

-- --------------------------------------------------------

--
-- Struktur dari tabel `transaksi`
--

CREATE TABLE IF NOT EXISTS `transaksi` (
  `id_transaksi` int(11) NOT NULL AUTO_INCREMENT,
  `nama` varchar(255) NOT NULL,
  `tgl_transaksi` date NOT NULL,
  `jumlah_transaksi` int(11) NOT NULL,
  `bukti_transaksi` varchar(100) NOT NULL,
  PRIMARY KEY (`id_transaksi`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_biasa`
--

CREATE TABLE IF NOT EXISTS `user_biasa` (
  `id_userbiasa` int(11) NOT NULL AUTO_INCREMENT,
  `username_userbiasa` varchar(20) NOT NULL,
  `password_userbiasa` varchar(50) NOT NULL,
  PRIMARY KEY (`id_userbiasa`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data untuk tabel `user_biasa`
--

INSERT INTO `user_biasa` (`id_userbiasa`, `username_userbiasa`, `password_userbiasa`) VALUES
(1, 'dini', 'dini'),
(2, 'mega', 'mega');

-- --------------------------------------------------------

--
-- Struktur dari tabel `user_vip`
--

CREATE TABLE IF NOT EXISTS `user_vip` (
  `id_uservip` int(11) NOT NULL,
  `username_uservip` varchar(20) NOT NULL,
  `password_uservip` varchar(50) NOT NULL,
  `alamat_uservip` text NOT NULL,
  `email_uservip` varchar(50) NOT NULL,
  `nohp_uservip` varchar(20) NOT NULL,
  PRIMARY KEY (`id_uservip`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
