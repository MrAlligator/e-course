-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Waktu pembuatan: 31 Des 2021 pada 05.19
-- Versi server: 10.4.21-MariaDB
-- Versi PHP: 8.0.12

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
-- Struktur dari tabel `tb_visitor`
--

CREATE TABLE `tb_visitor` (
  `visitor_id` int(11) NOT NULL,
  `visitor_ip` varchar(10) NOT NULL,
  `visitor_date` int(11) NOT NULL,
  `visitor_month` int(11) NOT NULL,
  `visitor_year` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data untuk tabel `tb_visitor`
--

INSERT INTO `tb_visitor` (`visitor_id`, `visitor_ip`, `visitor_date`, `visitor_month`, `visitor_year`) VALUES
(1, '::2', 1, 12, 2021),
(2, '::1', 31, 12, 2021),
(3, '::3', 20, 12, 2021),
(4, '::4', 20, 12, 2021),
(5, '::4', 20, 12, 2021),
(6, '::5', 20, 12, 2021),
(7, '::6', 20, 12, 2021),
(8, '::7', 20, 12, 2021),
(9, '::3', 22, 12, 2021),
(10, '::3', 21, 12, 2021),
(11, '::3', 24, 12, 2021),
(12, '::3', 25, 12, 2021),
(13, '::5', 1, 12, 2021),
(14, '::11', 2, 12, 2021),
(15, '::10', 3, 12, 2021),
(16, '::9', 4, 12, 2021),
(17, '::6', 5, 12, 2021),
(18, '::3', 6, 12, 2021),
(19, '::2', 7, 12, 2021),
(20, '::5', 8, 12, 2021),
(21, '::11', 9, 12, 2021),
(22, '::10', 10, 12, 2021),
(23, '::9', 11, 12, 2021),
(24, '::6', 12, 12, 2021),
(25, '::3', 13, 12, 2021),
(26, '::2', 14, 12, 2021),
(27, '::5', 15, 12, 2021),
(28, '::11', 16, 12, 2021),
(29, '::10', 17, 12, 2021),
(30, '::9', 18, 12, 2021),
(31, '::6', 19, 12, 2021),
(32, '::3', 23, 12, 2021),
(33, '::2', 30, 12, 2021),
(34, '::5', 31, 12, 2021),
(35, '::11', 31, 12, 2021),
(36, '::10', 31, 12, 2021),
(37, '::9', 31, 12, 2021),
(38, '::6', 31, 12, 2021),
(39, '::3', 31, 12, 2021),
(40, '::2', 31, 12, 2021),
(41, ':444', 31, 12, 2021),
(42, '::666', 31, 12, 2021),
(43, '::888', 31, 12, 2021),
(44, '::99', 31, 12, 2021),
(45, '::0', 31, 12, 2021),
(46, '::35235', 31, 12, 2021),
(47, '::5325', 31, 12, 2021),
(48, '::524', 31, 12, 2021),
(49, '::42', 31, 12, 2021),
(50, '::6457', 31, 12, 2021),
(51, '::324', 31, 12, 2021),
(52, '::324', 31, 12, 2021),
(53, '::342', 31, 12, 2021),
(54, '::234', 31, 12, 2022),
(55, '::2', 1, 12, 2022);

--
-- Indexes for dumped tables
--

--
-- Indeks untuk tabel `tb_visitor`
--
ALTER TABLE `tb_visitor`
  ADD PRIMARY KEY (`visitor_id`);

--
-- AUTO_INCREMENT untuk tabel yang dibuang
--

--
-- AUTO_INCREMENT untuk tabel `tb_visitor`
--
ALTER TABLE `tb_visitor`
  MODIFY `visitor_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
