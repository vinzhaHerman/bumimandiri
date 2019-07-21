-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2019 at 06:17 PM
-- Server version: 10.3.15-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bumimandiri`
--
CREATE DATABASE IF NOT EXISTS `bumimandiri` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `bumimandiri`;

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `level` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `nama`, `email`, `telp`, `foto`, `level`) VALUES
(1, 'admin', 'admin', 'Super Admin', 'admin@system.com', '888', '', 1),
(2, 'doyok', 'doyok', 'Doyok Bewok', 'example@mail.com', '0990', '', 2),
(3, 'vinzhaherman', 'cucuandung', 'Vinzha herman', 'example1@mail.com', '0123', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

DROP TABLE IF EXISTS `fasilitas`;
CREATE TABLE IF NOT EXISTS `fasilitas` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_fasilitas` varchar(80) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar_fasilitas` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memesan`
--

DROP TABLE IF EXISTS `memesan`;
CREATE TABLE IF NOT EXISTS `memesan` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `pelanggan_id` int(11) NOT NULL,
  `paket_riwayat_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memesan`
--

INSERT INTO `memesan` (`id`, `pelanggan_id`, `paket_riwayat_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket_jenis`
--

DROP TABLE IF EXISTS `paket_jenis`;
CREATE TABLE IF NOT EXISTS `paket_jenis` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_paket` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_jenis`
--

INSERT INTO `paket_jenis` (`id`, `nama_paket`, `deskripsi`) VALUES
(1, 'Paket Program Sekolah', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>'),
(2, 'Paket Meeting', 'Paket untuk kepentingan instansi'),
(3, 'Paket Program Umum', 'Program Umum');

-- --------------------------------------------------------

--
-- Table structure for table `paket_program`
--

DROP TABLE IF EXISTS `paket_program`;
CREATE TABLE IF NOT EXISTS `paket_program` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `nama_program` varchar(30) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `konsumsi` varchar(80) NOT NULL,
  `lama_kegiatan` varchar(20) NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `minkapasitas` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `paket_jenis_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_program`
--

INSERT INTO `paket_program` (`id`, `nama_program`, `fasilitas`, `konsumsi`, `lama_kegiatan`, `jumlah_hari`, `harga`, `minkapasitas`, `kapasitas`, `status`, `paket_jenis_id`) VALUES
(1, 'Agro & Outbound I', 'list fasilitas agro & outbound', 'list konsumsi agro & outbound', '1 hari', 1, 160000, 30, 120, 1, 1),
(2, 'Agro & Outbound II', 'list fasilitas Agro & Outbound', 'list konsumsi Agro & Outbound', '2 hari 1 malam', 2, 137000, 30, 120, 1, 1),
(4, 'Latihan Dasar Kepemimpinan I', 'list fasilitas Latihan Dasar Kepemimpinan', 'list konsumsi Latihan Dasar Kepemimpinan', '2 hari 1 malam', 2, 198000, 30, 120, 1, 1),
(5, 'Latihan Dasar Kepemimpinan II', 'list fasilitas Latihan Dasar Kepemimpinan', 'list konsumsi Latihan Dasar Kepemimpinan', '3 hari 2 malam', 3, 228000, 30, 120, 1, 1),
(6, 'Ramadhan Camp', 'list Fasilitas Ramadhan Camp', 'list konsumsi Ramadhan Camp', '2 hari 1 malam', 2, 163000, 30, 120, 1, 1),
(7, 'Ramadhan Camp II', 'list fasilitas Ramadhan Camp', 'list konsumsi Ramadhan Camp', '3 hari 2 malam', 3, 0, 30, 120, 1, 1),
(8, 'Laboratorium Biologi', 'laboratorium', 'laboratorium', '1 hari', 1, 0, 30, 60, 1, 1),
(9, 'MEETING I', 'fasilitas', 'konsumsi', '2 hari 1 malam', 2, 124000, 30, 45, 1, 2),
(10, 'MEETING II', 'fasilitas meeting', 'fasilitas meeting', '2 hari 1 malam', 2, 0, 30, 45, 1, 2),
(11, 'MEETING III', 'fasilitas meeting', 'fasilitas meeting', '1 hari', 1, 0, 30, 45, 1, 2),
(12, 'fun & recreation', 'list fasilitas fun & recreation', 'list konsumsi fun & recreation', '1 hari', 1, 0, 30, 60, 1, 3);

-- --------------------------------------------------------

--
-- Table structure for table `paket_riwayat`
--

DROP TABLE IF EXISTS `paket_riwayat`;
CREATE TABLE IF NOT EXISTS `paket_riwayat` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `reservasi_id` int(11) NOT NULL,
  `paket_program_id` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_riwayat`
--

INSERT INTO `paket_riwayat` (`id`, `check_in`, `check_out`, `reservasi_id`, `paket_program_id`, `pelanggan_id`) VALUES
(1, '2019-07-06', '2019-07-08', 1, 3, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE IF NOT EXISTS `pelanggan` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(80) NOT NULL,
  `nama_belakang` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` char(60) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(16) NOT NULL,
  `tgl_reg` date NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_depan`, `nama_belakang`, `email`, `username`, `password`, `alamat`, `telp`, `tgl_reg`) VALUES
(1, 'andreas', 'chandra', 'adnreaschan@gmail.com', 'chandra', '123', '', '021', '2019-06-28'),
(2, 'mimi', 'nekochan', 'nekomimi@hotmail.com', 'nekomimi', '1234', '', '022', '2019-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE IF NOT EXISTS `post` (
  `id` int(11) NOT NULL,
  `judul_post` varchar(80) NOT NULL,
  `isi_post` varchar(100) NOT NULL,
  `gambar_post` varchar(100) NOT NULL,
  `slug` varchar(80) NOT NULL,
  `post_type` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

DROP TABLE IF EXISTS `reservasi`;
CREATE TABLE IF NOT EXISTS `reservasi` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `kode_reservasi` char(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `paket_program_id` int(11) NOT NULL,
  `jumlah_org` int(11) NOT NULL,
  `tagihan` int(11) NOT NULL,
  `pembayaran` varchar(20) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `bukti` varchar(100) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `kode_reservasi` (`kode_reservasi`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `kode_reservasi`, `tgl_masuk`, `tgl_keluar`, `paket_program_id`, `jumlah_org`, `tagihan`, `pembayaran`, `id_pelanggan`, `bukti`) VALUES
(1, 'RS06190000001', '2019-07-06', '2019-07-06', 1, 60, 5880000, 'LUNAS', 1, 'dark.png'),
(2, 'RS07070000002', '2019-07-30', '2019-07-30', 1, 34, 5880000, 'DIBATALKAN', 1, 'light.png'),
(3, 'RS19070000003', '2019-07-29', '2019-07-30', 9, 45, 5580000, 'MENUNGGU PEMBAYARAN', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

DROP TABLE IF EXISTS `testimoni`;
CREATE TABLE IF NOT EXISTS `testimoni` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `summary` varchar(100) NOT NULL,
  `paragraph` int(100) NOT NULL,
  `tgl_testimoni` datetime NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
