-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 30, 2021 at 06:09 AM
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
-- Database: `db_komunitas`
--

-- --------------------------------------------------------

--
-- Table structure for table `tb_user_detail`
--

CREATE TABLE `tb_user_detail` (
  `id_user_detail` int(11) NOT NULL,
  `email` varchar(128) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `tanggal_lahir` varchar(100) NOT NULL,
  `jenis_kelamin` varchar(100) NOT NULL,
  `kota_tempat_tinggal` varchar(200) NOT NULL,
  `nama_usaha` varchar(200) NOT NULL,
  `alamat_usaha` text NOT NULL,
  `kota_lokasi_usaha` text NOT NULL,
  `tahun_berdiri_usaha` varchar(4) NOT NULL,
  `no_telepon` varchar(50) NOT NULL,
  `email_usaha` varchar(128) NOT NULL,
  `produk_ekspor` text NOT NULL,
  `jumlah_karyawan` int(11) NOT NULL,
  `omset_pertahun` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tb_user_detail`
--

INSERT INTO `tb_user_detail` (`id_user_detail`, `email`, `nama`, `tanggal_lahir`, `jenis_kelamin`, `kota_tempat_tinggal`, `nama_usaha`, `alamat_usaha`, `kota_lokasi_usaha`, `tahun_berdiri_usaha`, `no_telepon`, `email_usaha`, `produk_ekspor`, `jumlah_karyawan`, `omset_pertahun`) VALUES
(6, 'ryzaldm@gmail.com', 'FABRYZAL ADAM PRAMUDYA', '2021-12-27', 'Laki-laki', 'Kabupaten Bondowoso (Bondowoso)', 'ZL Ent.', 'R.E. Martadinata', 'Kabupaten Bondowoso (Bondowoso)', '1234', '0123014249', 'kasurusak@gmail.com', 'Laptop', 123, 124354123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tb_user_detail`
--
ALTER TABLE `tb_user_detail`
  ADD PRIMARY KEY (`id_user_detail`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tb_user_detail`
--
ALTER TABLE `tb_user_detail`
  MODIFY `id_user_detail` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
