-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 17 Apr 2019 pada 16.00
-- Versi Server: 10.1.28-MariaDB
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
-- Database: `getin`
--

-- --------------------------------------------------------

--
-- Struktur dari tabel `data_cust`
--

CREATE TABLE `data_cust` (
  `id_cust` int(11) NOT NULL,
  `nama_cust` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `no_idcard` varchar(50) NOT NULL,
  `status_pendaftaran` int(11) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Struktur dari tabel `event`
--

CREATE TABLE `event` (
  `id_event` int(255) NOT NULL,
  `nama_penyelenggara` varchar(255) NOT NULL,
  `user` varchar(255) NOT NULL,
  `nama_acara` varchar(255) NOT NULL,
  `tanggal_acara` date NOT NULL,
  `tanggal_acara_selesai` date NOT NULL,
  `waktu_mulai` time NOT NULL,
  `waktu_selesai` time NOT NULL,
  `tempat` varchar(255) NOT NULL,
  `deskripsi` varchar(50000) NOT NULL,
  `kuota_tiket` int(11) NOT NULL,
  `tanggal_jual_mulai` date NOT NULL,
  `tanggal_jual_selesai` date NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `waktu_input` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(4) NOT NULL DEFAULT '0',
  `slug` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `event`
--

INSERT INTO `event` (`id_event`, `nama_penyelenggara`, `user`, `nama_acara`, `tanggal_acara`, `tanggal_acara_selesai`, `waktu_mulai`, `waktu_selesai`, `tempat`, `deskripsi`, `kuota_tiket`, `tanggal_jual_mulai`, `tanggal_jual_selesai`, `harga_tiket`, `waktu_input`, `status`, `slug`) VALUES
(1, 'andre', '', '', '2018-12-05', '0000-00-00', '00:00:00', '00:00:00', '', '', 0, '0000-00-00', '0000-00-00', 0, '2018-12-23 08:17:12', 0, ''),
(2, 'Andre Aditya Pelealu', '', '', '2018-12-13', '0000-00-00', '13:00:00', '02:00:00', 'semarang', '', 0, '0000-00-00', '0000-00-00', 0, '2018-12-23 08:17:12', 0, ''),
(3, 'Andre Aditya Pelealu', '', '', '2018-12-06', '0000-00-00', '12:00:00', '13:59:00', 'semarang', '', 0, '0000-00-00', '0000-00-00', 0, '2018-12-23 08:17:12', 0, ''),
(4, 'Andre Aditya Pelealu', '', 'b', '2018-12-05', '0000-00-00', '16:04:00', '16:45:00', 'semarang', '', 0, '0000-00-00', '0000-00-00', 0, '2018-12-24 07:12:28', 0, ''),
(5, 'Budi Gunawan', '', 'Dinus Creative Forum 2019', '2019-01-10', '0000-00-00', '02:05:00', '00:00:00', 'semarang', '', 0, '0000-00-00', '0000-00-00', 0, '2019-01-27 04:08:41', 0, ''),
(6, 'Andre  Aditya Pelealu', '', 'Dinus Creative Forum', '2019-01-03', '0000-00-00', '00:20:19', '12:00:00', '11:00', 'Ini adalah deskripsi', 300, '2019-01-10', '2019-01-16', 10000, '2019-01-27 12:57:20', 0, ''),
(7, 'Andre  Aditya Pelealu', '', 'Dinus Creative Forum', '2019-01-10', '0000-00-00', '00:20:19', '13:00:00', '14:00', 'Ini bla', 300, '2019-01-02', '2019-01-17', 10000, '2019-01-27 13:01:27', 0, ''),
(8, 'Andre  Aditya Pelealu', '', 'Dinus Creative Forum', '2019-01-05', '0000-00-00', '00:20:19', '02:22:00', '02:22', 'Bui', 300, '2019-01-03', '2019-01-30', 300000, '2019-01-27 13:03:36', 0, ''),
(9, 'Andre  Aditya Pelealu', '', 'Dinus Creative Forum', '0002-01-02', '0000-00-00', '00:00:02', '14:03:00', '14:03', 'ff', 3, '2019-12-31', '2019-12-31', 2, '2019-01-27 13:04:25', 0, ''),
(10, 'Andre  Aditya Pelealu', '', 'Dinus Creative Forum', '2019-01-01', '0000-00-00', '00:20:19', '01:00:00', '01:00', 's', 2, '2019-01-01', '2019-01-01', 3, '2019-01-27 13:10:40', 0, ''),
(11, 'Andre  Aditya Pelealu', '', 'Dinus Creative Forum', '2019-02-08', '0000-00-00', '00:20:19', '13:00:00', '02:00', 'balabalala', 200, '2019-02-06', '2019-02-07', 10000, '2019-02-06 07:33:47', 0, ''),
(12, 'Andre  Aditya Pelealu', '', 'Dinus Creative Forum 3', '0343-03-31', '0000-00-00', '00:20:19', '15:04:00', '14:03', 'sdfsd', 100, '0199-12-04', '0103-12-13', 10000, '2019-02-06 09:02:10', 0, ''),
(13, 'Andre  Aditya Pelealu', 'budi', 'Dinus Creative Forum', '2019-02-08', '0000-00-00', '00:20:19', '13:59:00', '13:59', 'sdf', 3, '2019-02-08', '2019-02-13', 13, '2019-02-06 11:12:44', 0, ''),
(14, 'Andre  Aditya Pelealu', 'budi', 'Dinus Creative Forum 3', '2019-02-09', '0000-00-00', '00:20:19', '13:00:00', '02:59', 'ulalala', 100, '2019-01-31', '2019-01-01', 100000, '2019-02-09 04:07:41', 0, ''),
(15, 'Andre  Aditya Pelealu', 'budi', 'Dinus Creative Forum 3', '2019-02-09', '0000-00-00', '00:20:19', '13:00:00', '02:59', 'trilili', 500, '2019-02-16', '2019-02-23', 500, '2019-02-09 04:08:48', 0, ''),
(16, 'Andre  Aditya Pelealu', 'budi', 'Dinus Creative Forum 3', '2019-02-09', '0000-00-00', '00:20:19', '13:00:00', '02:59', 'fefe', 33, '2019-02-08', '2019-02-16', 5, '2019-02-09 04:09:58', 0, ''),
(17, 'Andre  Aditya Pelealu', 'budi', 'Dinus Creative Forum 3', '2019-02-09', '0000-00-00', '00:20:19', '13:00:00', '02:59', 'rr', 22, '2019-02-09', '2019-02-16', 22, '2019-02-09 04:10:35', 0, ''),
(18, 'Andre  Aditya Pelealu', 'budi', 'Dinus Creative Forum 3', '2019-02-09', '0000-00-00', '00:20:19', '13:03:00', '14:00', 'sdg', 3, '2019-02-09', '2019-02-16', 444, '2019-02-09 05:30:24', 0, ''),
(19, 'Andre  Aditya Pelealu', 'budi', 'Dinus Creative Forum 3', '2019-02-16', '0000-00-00', '00:20:19', '13:00:00', '13:59', '1sda', 13, '2019-12-31', '2019-12-31', 1, '2019-02-09 05:41:15', 0, 'Dinus-Creative-Forum-3'),
(20, 'Andre  Aditya Pelealu', 'budi', 'Dinus Creative Forum 3', '2019-02-09', '0000-00-00', '00:20:19', '12:59:00', '12:59', '1', 1, '2019-12-31', '2019-12-31', 1, '2019-02-09 05:48:52', 0, 'Dinus-Creative-Forum-3'),
(21, 'Andre  Aditya Pelealu', 'budi', 'Dinus Creative Forum 3', '2019-02-09', '0000-00-00', '00:20:19', '12:59:00', '12:59', 's\r\n', 1, '2019-12-31', '2019-12-31', 1, '2019-02-09 05:50:19', 0, 'Dinus-Creative-Forum-3'),
(22, 'Andre  Aditya Pelealu', 'budi', 'Dinus Creative Forum', '2019-02-09', '2019-02-16', '12:59:00', '12:59:00', '       udinus       csd                     s     s         sdf            asd         ssddf       sd           as                                             ', 'badalaasd', 100, '2019-02-02', '2019-02-09', 100000, '2019-02-10 02:52:34', 0, 'Dinus-Creative-Forum'),
(23, 'Andre  Aditya Pelealu', 'budi', 'Dinus Creative Forum', '2019-02-09', '2019-02-16', '12:59:00', '12:59:00', '       udinus sss       jh', 'badala', 100, '2019-02-02', '2019-02-09', 100000, '2019-02-10 03:35:08', 0, 'Dinus-Creative-Forum');

-- --------------------------------------------------------

--
-- Struktur dari tabel `penjualan`
--

CREATE TABLE `penjualan` (
  `invoice` int(11) NOT NULL,
  `nama_cust` varchar(255) NOT NULL,
  `email` varchar(100) NOT NULL,
  `no_hp` varchar(20) NOT NULL,
  `id_event` int(11) NOT NULL,
  `no_idcard` varchar(50) NOT NULL,
  `jml_tiket` int(11) NOT NULL,
  `harga_tiket` int(11) NOT NULL,
  `status_pembayaran` int(11) NOT NULL DEFAULT '0',
  `status_cekin` int(11) NOT NULL DEFAULT '0',
  `tanggal_beli` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `penjualan`
--

INSERT INTO `penjualan` (`invoice`, `nama_cust`, `email`, `no_hp`, `id_event`, `no_idcard`, `jml_tiket`, `harga_tiket`, `status_pembayaran`, `status_cekin`, `tanggal_beli`) VALUES
(1, 'budi', 'asd@g.com', '0234', 23, '', 3, 0, 0, 0, '2019-02-14 11:09:52'),
(2, 'budi', 'asd@g.com', '0234', 23, '', 3, 0, 0, 0, '2019-02-14 11:12:49'),
(3, 'budi', 'as@g.com', '0234', 23, '', 100000, 0, 0, 0, '2019-02-14 11:15:20'),
(4, 'budi', 'g@d.cv', '324', 23, '', 3, 5000, 0, 0, '2019-02-14 11:17:48');

-- --------------------------------------------------------

--
-- Struktur dari tabel `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` tinyint(4) NOT NULL DEFAULT '0',
  `token` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `users`
--

INSERT INTO `users` (`id`, `nama`, `email`, `password`, `role`, `token`, `created_at`, `updated_at`) VALUES
(1, 'budi', 'budi@g.com', '$2y$10$Y71/HkTBl1PHCOVVUJSNiOTruy62XHdL60lK968bP4PFljL8/TF2W', 0, '5N2yRT7EHx0oXpsq', '2018-12-23 08:27:57', NULL),
(2, 'budi', 'budi@g.comi', '$2y$10$0jz9jl8MialyALxQT/WXj.JFDGtDSSJATJN2d1hnL0HykthnyXgqG', 0, 'ObXzIMfjR3GegWYK', '2018-12-23 08:28:05', NULL),
(3, 'budi', 'budi@g.comw', '$2y$10$xZ7xC87x8jT6yTWA9c9Lv.5AN0/fUYss3Gw4/ZLMdNhm84QviYZ96', 1, 'WuJ2N1FvhApn6z4P', '2018-12-23 08:28:08', NULL),
(4, 'budi', 'budi1@g.com', '$2y$10$56WIYkQdhLgMqOEj7rlWgOcZHZisyGSfP8inpAGjAiwJajHZ9oT8O', 1, 'SQj70ZA1EYz2ku6O', '2018-12-23 08:28:10', NULL),
(5, 'budi', 'budi3@g.com', '$2y$10$Y6p7ZKEcrT2qnhNZIItwCuxtcfa8Uenxk1sVxMQOAQo9v7kuLMncK', 1, 'Koq8xj3OavnX70ZR', '2018-12-23 08:28:12', NULL),
(6, 'budi', 'budi4@tes.com', '$2y$10$gm50UxfkHBPFZnqS/oXtPOaO/19oDK88pOVP/FD/wqad80/JHjQY.', 1, 'EB6gqXOe0V9xAYUp', '2018-12-23 08:28:15', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data_cust`
--
ALTER TABLE `data_cust`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `event`
--
ALTER TABLE `event`
  ADD PRIMARY KEY (`id_event`);

--
-- Indexes for table `penjualan`
--
ALTER TABLE `penjualan`
  ADD PRIMARY KEY (`invoice`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data_cust`
--
ALTER TABLE `data_cust`
  MODIFY `id_cust` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `event`
--
ALTER TABLE `event`
  MODIFY `id_event` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `penjualan`
--
ALTER TABLE `penjualan`
  MODIFY `invoice` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
