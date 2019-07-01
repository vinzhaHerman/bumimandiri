-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 28, 2019 at 07:25 AM
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
-- Table structure for table `memesan`
--

CREATE TABLE `memesan` (
  `id` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `paket_onproses_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket_dipesan`
--

CREATE TABLE `paket_dipesan` (
  `id` int(11) NOT NULL,
  `jumlah` int(11) NOT NULL,
  `reservasi_id` int(11) NOT NULL,
  `paket_jenis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket_durasi`
--

CREATE TABLE `paket_durasi` (
  `id` int(11) NOT NULL,
  `deskripsi` varchar(80) NOT NULL,
  `status` varchar(15) NOT NULL,
  `durasi` varchar(15) NOT NULL,
  `paket_jenis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket_jenis`
--

CREATE TABLE `paket_jenis` (
  `id` int(11) NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `deskripsi` varchar(80) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `paket_onproses`
--

CREATE TABLE `paket_onproses` (
  `id` int(11) NOT NULL,
  `check_in` date NOT NULL,
  `check_out` date NOT NULL,
  `reservasi_id` int(11) NOT NULL,
  `paket_durasi_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

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

-- --------------------------------------------------------

--
-- Table structure for table `reservasi`
--

CREATE TABLE `reservasi` (
  `id` int(11) NOT NULL,
  `tgl_masuk` date NOT NULL,
  `tgl_keluar` date NOT NULL,
  `metode` varchar(15) NOT NULL,
  `id_pelanggan` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `memesan`
--
ALTER TABLE `memesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_dipesan`
--
ALTER TABLE `paket_dipesan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_durasi`
--
ALTER TABLE `paket_durasi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_jenis`
--
ALTER TABLE `paket_jenis`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket_onproses`
--
ALTER TABLE `paket_onproses`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pelanggan`
--
ALTER TABLE `pelanggan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reservasi`
--
ALTER TABLE `reservasi`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
