-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 07, 2022 at 04:20 AM
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
-- Table structure for table `tb_peraturan_forum`
--

CREATE TABLE `tb_peraturan_forum` (
  `id_peraturan` int(11) NOT NULL,
  `peraturan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_peraturan_forum`
--

INSERT INTO `tb_peraturan_forum` (`id_peraturan`, `peraturan`) VALUES
(1, 'Dilarang menggunakan kata yang mengandung unsur SARA'),
(2, 'Dilarang menggunakan kata kasar dan seksual'),
(3, 'Dilarang menggunakan kalimat yang dapat menyebarkan kebencian'),
(4, 'Dilarang menyebarkan informasi palsu (hoax)'),
(5, 'Dilarang menyebarkan kalimat yang menyesatkan atau spam');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_peraturan_forum`
--
ALTER TABLE `tb_peraturan_forum`
  ADD PRIMARY KEY (`id_peraturan`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_peraturan_forum`
--
ALTER TABLE `tb_peraturan_forum`
  MODIFY `id_peraturan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
