-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 21, 2020 at 11:42 AM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

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
(1, 'admin', 'admin', 'Super Admin', 'admin@system.com', '888999', 'Alamat lengkap', 'default.jpg', 1),
(2, 'admin_tester_1', '123', 'Admin', 'admin2@example.com', '999', 'Alamat Lengkap', 'default.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `paket_jenis`
--

DROP TABLE IF EXISTS `paket_jenis`;
CREATE TABLE `paket_jenis` (
  `id` int(11) NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `deskripsi` text NOT NULL,
  `paket_img` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_jenis`
--

INSERT INTO `paket_jenis` (`id`, `nama_paket`, `deskripsi`, `paket_img`) VALUES
(1, 'Paket Program Sekolah', '<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod&nbsp;tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,&nbsp;quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo&nbsp;consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse&nbsp;cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non&nbsp;proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '5a574acc030da09c177ca42d51123444.jpg'),
(2, 'Paket Meeting', 'Paket untuk kepentingan instansi', '63586b095bc258150c02a1be1e8d8993.jpg'),
(3, 'Paket Program Umum', 'Paket untuk kepentingan umum', 'default.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `paket_program`
--

DROP TABLE IF EXISTS `paket_program`;
CREATE TABLE `paket_program` (
  `id` int(11) NOT NULL,
  `nama_program` varchar(30) NOT NULL,
  `fasilitas` text NOT NULL,
  `konsumsi` text NOT NULL,
  `lama_kegiatan` varchar(20) NOT NULL,
  `jumlah_hari` int(11) NOT NULL,
  `harga` int(11) NOT NULL,
  `minkapasitas` int(11) NOT NULL,
  `kapasitas` int(11) NOT NULL,
  `status` int(11) NOT NULL,
  `program_img` varchar(50) NOT NULL,
  `paket_jenis_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paket_program`
--

INSERT INTO `paket_program` (`id`, `nama_program`, `fasilitas`, `konsumsi`, `lama_kegiatan`, `jumlah_hari`, `harga`, `minkapasitas`, `kapasitas`, `status`, `program_img`, `paket_jenis_id`) VALUES
(1, 'Agro & Outbound I', '<p><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>\r\n<p><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '1 hari', 1, 160000, 30, 120, 1, 'default.jpg', 1),
(2, 'Agro & Outbound II', '<p><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '<p><span style=\"color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</span></p>', '2 hari 1 malam', 2, 137000, 30, 120, 1, '5a391f5be8e2c249cbd31a20dba5262b.jpg', 1),
(4, 'Latihan Dasar Kepemimpinan I', 'list fasilitas Latihan Dasar Kepemimpinan', 'list konsumsi Latihan Dasar Kepemimpinan', '2 hari 1 malam', 2, 198000, 30, 120, 1, 'default.jpg', 1),
(5, 'Latihan Dasar Kepemimpinan II', 'list fasilitas Latihan Dasar Kepemimpinan', 'list konsumsi Latihan Dasar Kepemimpinan', '3 hari 2 malam', 3, 228000, 30, 120, 1, 'c9dc7cbbfcb4df36310fddf1bd005b88.jpg', 1),
(6, 'Ramadhan Camp', '<p>list Fasilitas Ramadhan Camp</p>', '<p>list konsumsi Ramadhan Camp</p>', '2 hari 1 malam', 2, 163000, 30, 120, 1, 'default.jpg', 3),
(7, 'Ramadhan Camp II', '<p>list fasilitas Ramadhan Camp tes</p>', '<p>list konsumsi Ramadhan Camp tes</p>', '3 hari 2 malam', 3, 182000, 30, 120, 1, '9e2c205db821ce67e07bbbc79fe86ddd.jpg', 3),
(8, 'Laboratorium Biologi', '<p style=\"margin: 0.5em 0px; color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>', '<p style=\"margin: 0.5em 0px; color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.</p>', '1 hari', 1, 50000, 30, 60, 1, 'default.jpg', 1),
(9, 'MEETING I', 'fasilitas', 'konsumsi', '2 hari 1 malam', 2, 124000, 30, 45, 1, 'default.jpg', 2),
(10, 'MEETING II', '<p style=\"margin: 0.5em 0px; color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.</p>', '<p style=\"margin: 0.5em 0px; color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"margin: 0.5em 0px; color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.</p>', '2 hari 1 malam', 2, 152000, 30, 45, 0, 'default.jpg', 2),
(11, 'MEETING III', '<p>fasilitas meeting</p>', '<p>fasilitas meeting</p>', '1 hari', 1, 184000, 30, 45, 1, 'default.jpg', 2);

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
(1, '2020-02-28', '2020-02-28', 1, 1, 4);

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
(1, 'Andreas', 'Chandra Widyanta', 'adnreaschan@gmail.com', 'chandra', '123', 'Contoh alamat 1 no. 2', '', '042d757943fff7d6a4b036ff60e5928a.png', '2019-06-28'),
(2, 'Mimi', 'Nekochan', 'nekomimi@hotmail.com', 'nekomimi', '$2y$10$tRlsedhUoq33mxP/0P/OA.Y1GKK04fsThhr62vGRErIiTrXC7QyLy', 'Isekai', '', '4e3729291967ee2c3a147f05b82b0d41.jpg', '2019-07-01'),
(3, 'Vinzha', 'Herman', 'vinzhaherman@gmail.com', 'mkurus', 'cucuandung', 'Alamat_lengkap_user4', '081234567890', 'default.jpg', '2019-07-24'),
(4, 'Drei', 'Varian', 'drevar420@gmail.com', 'drevar', '$2y$10$fcED/58mYZR2clgxO2euI.VgAhixApqvEEtNBmYHCaXCE7yfcyCJa', 'the quick brown fox jumps over the lazy dog ', '08123456789', 'f40a351a1853b7aa1446d2bde721f8cd.jpg', '2020-02-20');

-- --------------------------------------------------------

--
-- Table structure for table `pembatalan`
--

DROP TABLE IF EXISTS `pembatalan`;
CREATE TABLE `pembatalan` (
  `id` int(11) NOT NULL,
  `alasan` varchar(80) NOT NULL,
  `norek` varchar(30) NOT NULL,
  `an` varchar(60) NOT NULL,
  `reservasi_id` int(11) NOT NULL,
  `pelanggan_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembatalan`
--

INSERT INTO `pembatalan` (`id`, `alasan`, `norek`, `an`, `reservasi_id`, `pelanggan_id`) VALUES
(1, 'Salah input jumlah peserta', '0123456789', 'drevar', 1, 4);

-- --------------------------------------------------------

--
-- Table structure for table `post`
--

DROP TABLE IF EXISTS `post`;
CREATE TABLE `post` (
  `id` int(11) NOT NULL,
  `judul_post` varchar(80) NOT NULL,
  `isi_post` text NOT NULL,
  `gambar_post` varchar(100) NOT NULL,
  `date_created` date NOT NULL,
  `post_type` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post`
--

INSERT INTO `post` (`id`, `judul_post`, `isi_post`, `gambar_post`, `date_created`, `post_type`) VALUES
(1, 'The quick brown fox jumps over the lazy dog', '<p style=\"margin: 0.5em 0px; color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>\r\n<p style=\"margin: 0.5em 0px; color: #222222; font-family: sans-serif; font-size: 14px; background-color: #ffffff;\">Curabitur pretium tincidunt lacus. Nulla gravida orci a odio. Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris. Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque. Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi. Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.</p>', 'ea0953c43bd9aefa065098b8328e3b91.jpg', '2019-07-22', 1),
(2, 'judul artikel 1', 'isi artikel 1', 'b36e5ec962aaba5427690391afd6371e.jpg', '2019-07-22', 2),
(3, 'judul event 1', 'isi event 1', '', '2019-07-22', 3),
(4, 'judul promosi 2', '<p>isi promosi 2</p>', '4db737bc2f1a3986dd5f3ee63d3fc3fa.jpg', '2019-07-22', 1),
(5, 'judul artikel 2', '<p>isi artikel 2</p>', '5f87f6d5a6736ae7d4f113b67cf251e3.jpg', '2019-07-22', 2),
(6, 'judul artikel 3', '<p>isi artikel 3</p>', '1f517f2185ca8fad362cb23fe00ce46c.jpg', '2019-07-22', 2),
(7, 'judul promosi 3', '<p>isi promosi 3</p>', '9413c562a0a8c2db77bf6256893f9d24.jpg', '2019-07-22', 1);

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
(1, 'RS20020000001', '2020-02-28', '2020-02-28', 1, 30, 4800000, 'DIBATALKAN', 4, '36c550ecf043eed7640bdde958f03d17.png');

-- --------------------------------------------------------

--
-- Table structure for table `testimoni`
--

DROP TABLE IF EXISTS `testimoni`;
CREATE TABLE `testimoni` (
  `id_testimoni` int(11) NOT NULL,
  `summary` varchar(100) NOT NULL,
  `paragraph` text NOT NULL,
  `tgl` date NOT NULL,
  `id_pelanggan` int(11) NOT NULL,
  `isActive` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tokens`
--

DROP TABLE IF EXISTS `tokens`;
CREATE TABLE `tokens` (
  `id` int(11) NOT NULL,
  `token` varchar(255) NOT NULL,
  `pelanggan_id` int(11) NOT NULL,
  `created` date NOT NULL
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
  ADD PRIMARY KEY (`id`),
  ADD KEY `program_jenis_id` (`paket_jenis_id`);

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
-- Indexes for table `pembatalan`
--
ALTER TABLE `pembatalan`
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
  ADD PRIMARY KEY (`id_testimoni`);

--
-- Indexes for table `tokens`
--
ALTER TABLE `tokens`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `paket_jenis`
--
ALTER TABLE `paket_jenis`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `paket_program`
--
ALTER TABLE `paket_program`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `paket_riwayat`
--
ALTER TABLE `paket_riwayat`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `pelanggan`
--
ALTER TABLE `pelanggan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `pembatalan`
--
ALTER TABLE `pembatalan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `post`
--
ALTER TABLE `post`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `reservasi`
--
ALTER TABLE `reservasi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `testimoni`
--
ALTER TABLE `testimoni`
  MODIFY `id_testimoni` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tokens`
--
ALTER TABLE `tokens`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `paket_program`
--
ALTER TABLE `paket_program`
  ADD CONSTRAINT `program_jenis_id` FOREIGN KEY (`paket_jenis_id`) REFERENCES `paket_jenis` (`id`) ON DELETE CASCADE ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
