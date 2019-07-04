-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 04, 2019 at 09:16 AM
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

CREATE TABLE `admins` (
  `id` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `nama` varchar(80) NOT NULL,
  `email` varchar(50) NOT NULL,
  `telp` varchar(20) NOT NULL,
  `foto` varchar(100) NOT NULL,
  `level` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `fasilitas`
--

CREATE TABLE `fasilitas` (
  `id` int(11) NOT NULL,
  `nama_fasilitas` varchar(80) NOT NULL,
  `deskripsi` varchar(100) NOT NULL,
  `gambar_fasilitas` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `memesan`
--

CREATE TABLE `memesan` (
  `id` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `paket_riwayat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `memesan`
--

INSERT INTO `memesan` (`id`, `pelanggan_id`, `paket_riwayat_id`) VALUES
(1, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket_jenis`
--

CREATE TABLE `paket_jenis` (
  `id` int(11) NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `deskripsi` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_jenis`
--

INSERT INTO `paket_jenis` (`id`, `nama_paket`, `deskripsi`) VALUES
(1, 'Paket Program Sekolah', 'Paket untuk kepentingan sekolah'),
(2, 'Paket Meeting', 'Paket untuk kepentingan instansi'),
(3, 'Paket Program Umum', 'Program Umum');

-- --------------------------------------------------------

--
-- Table structure for table `paket_program`
--

CREATE TABLE `paket_program` (
  `id` int(11) NOT NULL,
  `nama_program` varchar(30) NOT NULL,
  `fasilitas` varchar(100) NOT NULL,
  `konsumsi` varchar(80) NOT NULL,
  `lama_kegiatan` varchar(20) NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `paket_jenis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_program`
--

INSERT INTO `paket_program` (`id`, `nama_program`, `fasilitas`, `konsumsi`, `lama_kegiatan`, `jumlah_hari`, `harga`, `paket_jenis_id`) VALUES
(1, 'agro & outbound I', 'list fasilitas agro & outbound', 'list konsumsi agro & outbound', '1 hari', 1, 0, 1),
(2, 'Agro & Outbound II', 'list fasilitas Agro & Outbound', 'list konsumsi Agro & Outbound', '2 hari 1 malam', 2, 0, 1),
(3, 'Agro & Outbound III', 'list fasilitas Agro & Outbound III', 'list konsumsi Agro & Outbound III', '3 hari 2 malam', 2, 0, 1),
(4, 'Latihan Dasar Kepemimpinan I', 'list fasilitas Latihan Dasar Kepemimpinan', 'list konsumsi Latihan Dasar Kepemimpinan', '2 hari 1 malam', 2, 0, 1),
(5, 'Latihan Dasar Kepemimpinan II', 'list fasilitas Latihan Dasar Kepemimpinan', 'list konsumsi Latihan Dasar Kepemimpinan', '3 hari 2 malam', 3, 0, 1),
(6, 'Ramadhan Camp', 'list Fasilitas Ramadhan Camp', 'list konsumsi Ramadhan Camp', '2 hari 1 malam', 2, 0, 1),
(7, 'Ramadhan Camp II', 'list fasilitas Ramadhan Camp', 'list konsumsi Ramadhan Camp', '3 hari 2 malam', 3, 0, 1),
(8, 'Laboratorium Biologi', 'laboratorium', 'laboratorium', '1 hari', 1, 0, 1),
(9, 'MEETING I', 'fasilitas', 'konsumsi', '2 hari 1 malam', 2, 0, 2),
(10, 'MEETING II', 'fasilitas meeting', 'fasilitas meeting', '2 hari 1 malam', 2, 0, 2),
(11, 'MEETING III', 'fasilitas meeting', 'fasilitas meeting', '1 hari', 1, 0, 2),
(12, 'fun & recreation', 'list fasilitas fun & recreation', 'list konsumsi fun & recreation', '1 hari', 1, 0, 3);

-- --------------------------------------------------------

--
-- Table structure for table `paket_riwayat`
--

CREATE TABLE `paket_riwayat` (
  `id` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `reservasi_id` int(11) NOT NULL,
  `paket_program_id` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `isactive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_riwayat`
--

INSERT INTO `paket_riwayat` (`id`, `check_in`, `check_out`, `reservasi_id`, `paket_program_id`, `pelanggan_id`, `isactive`) VALUES
(1, '2019-07-06', '2019-07-08', 1, 3, 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `pelanggan`
--

CREATE TABLE `pelanggan` (
  `id` int(11) NOT NULL,
  `nama_depan` varchar(80) NOT NULL,
  `nama_belakang` varchar(80) NOT NULL,
  `email` varchar(80) NOT NULL,
  `username` varchar(80) NOT NULL,
  `password` char(60) NOT NULL,
  `tgl_reg` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pelanggan`
--

INSERT INTO `pelanggan` (`id`, `nama_depan`, `nama_belakang`, `email`, `username`, `password`, `tgl_reg`) VALUES
(1, 'andreas', 'chandra', 'adnreaschan@gmail.com', 'chandra', '123', '2019-06-28'),
(2, 'mimi', 'nekochan', 'nekomimi@hotmail.com', 'nekomimi', '098765432112345678900987654321234567890987654321', '2019-07-01');

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `judul_post` varchar(80) NOT NULL,
  `isi_post` varchar(100) NOT NULL,
  `gambar_post` varchar(100) NOT NULL,
  `slug` varchar(80) NOT NULL,
  `post_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL,
  `kode_reservasi` char(10) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `paket_program_id` int(11) NOT NULL,
  `metode` varchar(15) NOT NULL,
  `pembayaran` varchar(8) NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `bukti` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reservasi`
--

INSERT INTO `reservasi` (`id`, `kode_reservasi`, `tgl_masuk`, `tgl_keluar`, `paket_program_id`, `metode`, `pembayaran`, `id_pelanggan`, `bukti`) VALUES
(1, 'RS06190001', '2019-07-06', '2019-07-08', 1, 'online', 'LUNAS', 1, 'dark.png'),
(2, 'RS07190002', '2019-07-09', '2019-07-10', 3, 'online', '', 2, 'light.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

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
-- Indexes for table `fasilitas`
--
ALTER TABLE `fasilitas`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `memesan`
--
ALTER TABLE `memesan`
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
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `fasilitas`
--
ALTER TABLE `fasilitas`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `memesan`
--
ALTER TABLE `memesan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `paket_jenis`
--
ALTER TABLE `paket_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paket_program`
--
ALTER TABLE `paket_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `paket_riwayat`
--
ALTER TABLE `paket_riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
