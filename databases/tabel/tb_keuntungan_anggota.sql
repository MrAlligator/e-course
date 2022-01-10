-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 03:56 AM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 7.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `percobaan`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_keuntungan_anggota`
--

CREATE TABLE `tb_keuntungan_anggota` (
  `id_keuntungan` int(11) NOT NULL,
  `keuntungan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_keuntungan_anggota`
--

INSERT INTO `tb_keuntungan_anggota` (`id_keuntungan`, `keuntungan`) VALUES
(1, 'Dapat Melihat Data Importir (Buyers)'),
(2, 'Dapat Melihat Data Permintaan (Inquiry)'),
(3, 'Dapat Mengakses Kalkulator Perhitungan Harga Ekspor'),
(4, 'Mendapatkan Update Artikel Seputar Ekspor'),
(5, 'Tergabung Dalam Group Telegram'),
(6, 'Sharing Sesama Member');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_keuntungan_anggota`
--
ALTER TABLE `tb_keuntungan_anggota`
  ADD PRIMARY KEY (`id_keuntungan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_keuntungan_anggota`
--
ALTER TABLE `tb_keuntungan_anggota`
  MODIFY `id_keuntungan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
