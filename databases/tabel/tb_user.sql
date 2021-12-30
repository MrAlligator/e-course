-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 06:11 AM
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
-- Table structure for table `tb_user`
--

CREATE TABLE `tb_user` (
  `id_user` int(11) NOT NULL,
  `nama` varchar(128) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nomor_hp` varchar(128) NOT NULL,
  `foto_user` varchar(128) NOT NULL,
  `password` varchar(256) NOT NULL,
  `view_password` varchar(256) NOT NULL,
  `role_id` int(11) NOT NULL,
  `is_member` int(1) NOT NULL,
  `is_active` int(1) NOT NULL,
  `date_created` int(11) NOT NULL,
  `month_created` int(11) NOT NULL,
  `year_created` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tb_user`
--

INSERT INTO `tb_user` (`id_user`, `nama`, `email`, `nomor_hp`, `foto_user`, `password`, `view_password`, `role_id`, `is_member`, `is_active`, `date_created`, `month_created`, `year_created`) VALUES
(1, 'Denny Trias Utomo', 'rizkiw8778@gmail.com', '', 'denny_trias.png', '$2y$10$oh78.L2MF51tTCIl3.OgLOvxX6v0qz/Sico.d8pMtx3OaX35YVMs6', 'AxenNet123', 2, 1, 1, 1635156187, 10, 2021),
(2, 'Admin', 'admin@gmail.com', '', 'WhatsApp_Image_2021-11-05_at_11_15_38_AM.jpeg', '$2y$10$7g1YRDy55vdnlW99nXXffOIKHH3A840Azz1MwcsUtWUSYgmLNe9ie', 'admin', 1, 1, 1, 1635501808, 10, 2021),
(4, 'Rizki Widya Pratama', 'owner@gmail.com', '087832165981', 'default.png', '$2y$10$HnXSS6hRkZ7Ez7G8gAU48udAyNGaaEEPHsW.vpbLvJZfmrqI9t2eu', '12345678', 2, 1, 1, 1636099670, 11, 2021),
(6, 'Fabryzal Adam Pramudya', 'ryzaldm@gmail.com', '087832165981', 'IMG_20201010_085551_230.jpg', '$2y$10$DFqA4VVg//LpFt/IQfqdDO6DINZnWSZgSExSRBDQae/NuC8rcHPQ.', 'Adam240899', 2, 1, 1, 1636292988, 11, 2021),
(8, 'Fabryzal Adam Pramudya', 'fabryzal@gmail.com', '087832165981', 'default.png', '$2y$10$UxueRuBBFA2iDkwsVrcBW.vM.fSRpBns./C.3e3FBq7joz4EhPpPi', 'fabryzal', 2, 1, 1, 1636778809, 12, 2021);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user`
--
ALTER TABLE `tb_user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user`
--
ALTER TABLE `tb_user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
