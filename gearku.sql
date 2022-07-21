-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 21, 2022 at 07:45 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gearku`
--

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id` int(11) NOT NULL,
  `namaBarang` varchar(225) NOT NULL,
  `merk` varchar(125) NOT NULL,
  `deskripsi` varchar(500) NOT NULL,
  `kategori_id` int(20) NOT NULL,
  `harga` int(225) NOT NULL,
  `status` varchar(20) NOT NULL,
  `garansi` varchar(10) NOT NULL,
  `link_youtube` varchar(225) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id`, `namaBarang`, `merk`, `deskripsi`, `kategori_id`, `harga`, `status`, `garansi`, `link_youtube`, `foto`) VALUES
(1, 'Artic 5', 'StellSeries', '-', 1, 0, 'akan datang', 'ada', '0', '62a0aaf3d2b93.jpg'),
(2, 'Fury ', 'HyperX', '-', 1, 0, 'akan datang', 'ada', '-', '62a0aafc9f2ba.jpg'),
(3, 'Maxfit 63', 'Fantech', '-', 1, 0, 'akan datang', 'ada', '0', '62a0ab037fcd9.jpg'),
(4, 'Artic 3', 'StellSeries', 'Features :\r\n\r\n- Arctis perfectly contours to your head while evenly distributing the weight of the headset across the entire Ski Goggle band.\r\n\r\n- Enjoy a premium 3D audio experience with DTS Headphone:X 7.1 Surround on PC, stereo audio on Mac, PS4, XBox ONE, VR, and mobile.\r\n', 1, 1009000, 'tidak ada', 'ada', 'https://www.youtube.com/watch?v=CXUA5ZTmJYM&amp;t=6s', '62a0ab0f05664.jpg'),
(6, 'GM350 ', 'DBE', 'dbE GM350 adalah varian 3.5mm jack dari dbE GM300 dan menggunakan headband, body dan driver yang sama.\r\nTipe ini dibuat untuk konsumen yang banyak menggunakan smartphonenya (iPhone / Android) atau PS4/Xbox One untuk bermain game.', 1, 310000, 'ada', 'ada', 'https://www.youtube.com/watch?v=31yWDis4kAM&amp;t=4s', '62a0ab17417c0.jpg'),
(7, 'KRAKEN X ', 'Razer', 'ULTRA-LIGHT COMFORT\r\nWhat if we told you its possible to experience complete gaming immersion without feeling like youve got a headset on? Enter the Razer Kraken X. Ultra-light at just 250g and ultra-immersive with 7.1 surround sound. Sit tight and play for hoursyour gaming marathons are about to be a breeze.', 1, 999999, 'ada', 'tidak ada', 'https://www.youtube.com/watch?v=vdjGiToT-1w&amp;t=3s', '62a0ab1f304f2.jpg'),
(8, 'Apex  7 TKL', 'StellSeries', 'APEX 7 TKL\r\nOLED Smart Display delivers information straight from games and apps\r\nInstant notifications from Discord, Tidal, and games\r\nDurable mechanical gaming switches\r\nSeries 5000 Aircraft grade aluminum frame\r\nDetachable soft touch magnetic wrist rest', 1, 2000100, 'ada', 'ada', 'https://www.youtube.com/watch?v=bOGwIDfBj6Q', '62a0ab29bdb4e.jpg'),
(9, 'G Pro X TKL', 'Logitech', 'DIBUAT UNTUK PEMAIN PRO\r\nDesain PRO X yang sudah terbukti di berbagai turnamen, sekarang dilengkapi pro-grade GX switch yang dapat ditukar. Sambutlah mechanical gaming keyboard yang dapat dikustomisasi yang dibuat untuk atlet esport top dunia.', 1, 1555000, 'terlaris', 'ada', 'https://www.youtube.com/watch?v=byoIMQpWwSw', '62a0ab3105016.jpg'),
(11, 'MaxFit 67 ', 'FANTECH', 'MAXFIT67! Karya hasil kolaborasi dengan Komunitas keyboard yang siap menjawab segala kebutuhan lo, karena keyboard ini lahir dari komunitas - untuk komunitas!', 1, 1500000, 'ada', 'ada', 'https://www.youtube.com/watch?v=YdNeHq7Xruo', '62a0ab379d53f.jpg'),
(15, 'G102', 'Logitech', 'G304 adalah LIGHTSPEED wireless gaming mouse yang dirancang untuk kinerja serius dengan inovasi teknologi terbaru dengan harga yang terjangkau.', 1, 179000, 'ada', 'ada', 'https://www.youtube.com/watch?v=UTV9AzYvQXM&amp;t=47s', '62a0ab46b5fcd.jpg'),
(16, ' Xlite Founder Edition', 'Pulsar', 'EXTREMELY LIGHT\r\nERGONOMIC RIGHT HAND\r\nLATEST FLAGSHIP SENSOR\r\nLAG-FREE WIRELESS\r\nUP TO 70 HOURS BATTERY LIFE\r\nUSB-C CONNECTION', 1, 2000000, 'terlaris', 'ada', 'https://www.youtube.com/watch?v=vOdwl8tRkkE', '62a0ab64ab388.jpg'),
(17, 'G Pro Wireless', 'Logitech', 'Kompatibel dengan POWERPLAY\r\nTeknologi wireless LIGHTSPEED\r\nOnboard memory 1 Fitur yang canggih memerlukan Software Logitech G HUB Gaming, tersedia untuk didownload di logitechg.com/ghub\r\nSistem pengencangan klik\r\nAlas PFE tanpa aditif', 1, 1549000, 'terlaris', 'ada', 'https://www.youtube.com/watch?v=qMDBJbp4nRk', '62a0ab5ac6678.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `kategori`
--

CREATE TABLE `kategori` (
  `id` int(11) NOT NULL,
  `nama` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `kategori`
--

INSERT INTO `kategori` (`id`, `nama`) VALUES
(1, 'mouse'),
(2, 'keyboard'),
(21, 'headphone');

-- --------------------------------------------------------

--
-- Table structure for table `sosialmedia`
--

CREATE TABLE `sosialmedia` (
  `id` int(11) NOT NULL,
  `instagram` varchar(100) NOT NULL,
  `facebook` varchar(100) NOT NULL,
  `whatsapp` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sosialmedia`
--

INSERT INTO `sosialmedia` (`id`, `instagram`, `facebook`, `whatsapp`) VALUES
(1, 'https://www.instagram.com/risky_goh/', 'https://www.facebook.com/RiskkG/', 'https://wa.me/6281276419489?text=Halo%20Gearku%20saya%20ingin%20tau%20lebih%20lanjut%20mengenai%20produk');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `nama` varchar(225) NOT NULL,
  `email` varchar(125) NOT NULL,
  `password` varchar(255) NOT NULL,
  `role` varchar(10) NOT NULL,
  `foto` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `nama`, `email`, `password`, `role`, `foto`) VALUES
(6, 'risky', 'risky001@student.ciputra.ac.id', '$2y$10$9Tam9YDG28/AkcBdm9.2GuVkjOO/QPkyXRP5y0o6zmDvJJoQFlwW2', 'pemilik', '62971f25873c8.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id`),
  ADD KEY `kategori_id_key` (`kategori_id`);

--
-- Indexes for table `kategori`
--
ALTER TABLE `kategori`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sosialmedia`
--
ALTER TABLE `sosialmedia`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `kategori`
--
ALTER TABLE `kategori`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `sosialmedia`
--
ALTER TABLE `sosialmedia`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `barang`
--
ALTER TABLE `barang`
  ADD CONSTRAINT `kategori_id_key` FOREIGN KEY (`kategori_id`) REFERENCES `kategori` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
