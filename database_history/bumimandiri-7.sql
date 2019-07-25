-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 23, 2019 at 11:18 AM
-- Server version: 10.1.28-MariaDB
-- PHP Version: 7.1.10

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
CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `alamat` varchar(100) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `nama`, `email`, `telp`, `alamat`, `foto`, `level`) VALUES
(1, 'admin', 'admin', 'Super Admin', 'admin@system.com', '888', '', '', 1),
(2, 'doyok', 'doyok', 'Doyok Bewok', 'example@mail.com', '0990', '', '', 2),
(3, 'vinzhaherman', 'cucuandung', 'Vinzha herman', 'example1@mail.com', '0123', '', '', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket_jenis`
--

DROP TABLE IF EXISTS `paket_jenis`;
CREATE TABLE `paket_jenis` (
  `id` int(11) NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
CREATE TABLE `paket_program` (
  `id` int(11) NOT NULL,
  `nama_program` varchar(30) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `konsumsi` varchar(80) NOT NULL,
  `lama_kegiatan` varchar(20) NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `minkapasitas` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `paket_jenis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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
CREATE TABLE `paket_riwayat` (
  `id` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `reservasi_id` int(11) NOT NULL,
  `paket_program_id` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_riwayat`
--

INSERT INTO `paket_riwayat` (`id`, `check_in`, `check_out`, `reservasi_id`, `paket_program_id`, `pelanggan_id`) VALUES
(6, '2019-07-01', '2019-07-02', 1, 2, 2),
(7, '2019-07-19', '2019-07-20', 8, 2, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

DROP TABLE IF EXISTS `pelanggan`;
CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(80) NOT NULL,
  `nama_belakang` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` char(60) NOT NULL,
  `alamat` text NOT NULL,
  `telp` varchar(16) NOT NULL,
  `foto_profil` varchar(100) NOT NULL,
  `tgl_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_depan`, `nama_belakang`, `email`, `username`, `password`, `alamat`, `telp`, `foto_profil`, `tgl_reg`) VALUES
(1, 'andreas', 'chandra', 'adnreaschan@gmail.com', 'chandra', '123', '', '021', '', '2019-06-28'),
(2, 'mimi', 'nekochan', 'nekomimi@hotmail.com', 'nekomimi', '1234', '', '022', '', '2019-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `judul_post` varchar(80) NOT NULL,
  `isi_post` varchar(100) NOT NULL,
  `gambar_post` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `post_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `judul_post`, `isi_post`, `gambar_post`, `date_created`, `post_type`) VALUES
(1, 'judul promosi 1', 'isi promosi 1', '90c83ce29a931801ba737eb14af5d76d.jpg', '2019-07-22', 1),
(2, 'judul artikel 1', 'isi artikel 1', 'b36e5ec962aaba5427690391afd6371e.jpg', '2019-07-22', 2),
(3, 'judul event 1', 'isi event 1', '', '2019-07-22', 3),
(4, 'judul promosi 2', '<p>isi promosi 2</p>', '4db737bc2f1a3986dd5f3ee63d3fc3fa.jpg', '2019-07-22', 1),
(5, 'judul artikel 2', '<p>isi artikel 2</p>', '5f87f6d5a6736ae7d4f113b67cf251e3.jpg', '2019-07-22', 2),
(6, 'judul artikel 3', '<p>isi artikel 3</p>', '1f517f2185ca8fad362cb23fe00ce46c.jpg', '2019-07-22', 2),
(7, 'judul promosi 3', '<p>isi promosi 3</p>', '00fef98f15c301c03803ade565640e7a.jpg', '2019-07-22', 1);

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

DROP TABLE IF EXISTS `reservasi`;
CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL,
  `kode_reservasi` char(20) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `paket_program_id` int(11) NOT NULL,
  `jumlah_org` int(11) NOT NULL,
  `tagihan` int(11) NOT NULL,
  `pembayaran` varchar(20) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `kode_reservasi`, `tgl_masuk`, `tgl_keluar`, `paket_program_id`, `jumlah_org`, `tagihan`, `pembayaran`, `id_pelanggan`, `bukti`) VALUES
(1, 'RS21070000001', '2019-07-01', '2019-07-02', 2, 55, 7535000, 'LUNAS', 2, '6a76442b2844f36ad3e4103c790e450a.png'),
(7, 'RS21070000002', '2019-07-11', '2019-07-12', 2, 84, 11508000, 'MENUNGGU PEMBAYARAN', 2, ''),
(8, 'RS21070000003', '2019-07-19', '2019-07-20', 2, 91, 12467000, 'LUNAS', 1, '3f70cf9d79c801e5081890cd0715c20e.png'),
(9, 'RS21070000004', '2019-07-16', '2019-07-17', 2, 57, 7809000, 'MENUNGGU PEMBAYARAN', 1, '');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

DROP TABLE IF EXISTS `testimoni`;
CREATE TABLE `testimoni` (
  `id` int(11) NOT NULL,
  `summary` varchar(100) NOT NULL,
  `paragraph` int(100) NOT NULL,
  `tgl_testimoni` datetime NOT NULL,
  `id_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_jenis`
--
ALTER TABLE `paket_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_program`
--
ALTER TABLE `paket_program`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_riwayat`
--
ALTER TABLE `paket_riwayat`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post`
--
ALTER TABLE `post`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kode_reservasi` (`kode_reservasi`);

--
-- Indexes for table `testimoni`
--
ALTER TABLE `testimoni`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paket_jenis`
--
ALTER TABLE `paket_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `paket_program`
--
ALTER TABLE `paket_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paket_riwayat`
--
ALTER TABLE `paket_riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
