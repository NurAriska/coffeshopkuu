-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 01:50 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.0.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `coffeshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `kontak`
--

CREATE TABLE `kontak` (
  `id_nama` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `kontak`
--

INSERT INTO `kontak` (`id_nama`, `nama`, `email`, `pesan`) VALUES
(1, 'nunu', 'nurariskanhunhu@gmail.com', 'semangat');

-- --------------------------------------------------------

--
-- Table structure for table `makanan`
--

CREATE TABLE `makanan` (
  `id_menu` int(5) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nama_makanan` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `makanan`
--

INSERT INTO `makanan` (`id_menu`, `gambar`, `nama_makanan`, `deskripsi`, `harga`) VALUES
(1, 'makanan1.jpeg', 'Croissant\r\n', 'Pastry yang populer sebagai hidangan khas di Prancis yang berbentuk bulan sabit.', 'Rp.30.000'),
(2, 'makanan2.jpeg', 'Pancake\r\n', 'Pancake adalah sajian klasik yang terbuat dari adonan tepung terigu, telur, susu, dan baking powder yang digoreng hingga matang.\r\n\r\n', 'Rp 35,000'),
(3, 'makanan3.jpeg', 'Sandwich', 'Sandwich adalah makanan yang terdiri dari dua atau lebih potongan roti yang diisi dengan berbagai macam bahan seperti daging, keju, sayuran, saus, atau lainnya.\r\n\r\n', 'Rp 25,000');

-- --------------------------------------------------------

--
-- Table structure for table `minuman`
--

CREATE TABLE `minuman` (
  `id_menu` int(5) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `nama_kopi` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `harga` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `minuman`
--

INSERT INTO `minuman` (`id_menu`, `gambar`, `nama_kopi`, `deskripsi`, `harga`) VALUES
(1, 'kopi1.jpeg', 'Espresso', 'Kopi dengan rasa kuat dan pekat, cocok untuk pencinta kopi sejati.', 'Rp.20.000'),
(2, 'kopi2.jpeg', 'Cappuccino', 'Kopi dengan kombinasi sempurna antara espresso, susu, dan busa susu.', 'Rp.25.000'),
(3, 'kopi3.jpeg', 'Latte', 'Kopi dengan susu yang lembut dan rasa kopi yang lezat.', 'Rp.23.000');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_nama` int(11) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `menu` varchar(255) NOT NULL,
  `jumlah` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_nama`, `nama`, `menu`, `jumlah`) VALUES
(1, 'nunu', 'espresso', '3');

-- --------------------------------------------------------

--
-- Table structure for table `tentangkami`
--

CREATE TABLE `tentangkami` (
  `no` int(255) NOT NULL,
  `gambar` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `nim` varchar(255) NOT NULL,
  `kelas` varchar(255) NOT NULL,
  `riwayat_pendidikan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tentangkami`
--

INSERT INTO `tentangkami` (`no`, `gambar`, `nama`, `nim`, `kelas`, `riwayat_pendidikan`) VALUES
(1, 'usercewek.jpeg', 'Nama : Nur Ariska', 'Nim : 220209502127', 'Kelas : PTIK F\r\n\r\n', 'RIWAYAT PENDIDIKAN\r\n\r\nSD : SD NEGERI 77 PINRANG\r\nSMP : SMPS PPM RAHMATUL ASRI\r\nSMA : SMK NEGERI 1 PINRANG\r\nINSTANSI : UNIVERSITAS NEGERI MAKASSAR'),
(2, 'usercewek.jpeg', 'Nama : Nayla Zhaffa', 'Nim : 220209502127\r\n\r\n', 'Kelas : PTIK F\r\n\r\n', 'RIWAYAT PENDIDIKAN\r\nSD : SD NEGERI 265 TIMAMPU\r\nSMP : SMP NEGERI 1 LUWU TIMUR\r\nSMA : SMA NEGERI 17 MAKASSAR\r\nINSTANSI : UNIVERSITAS NEGERI MAKASSAR'),
(3, 'usercewek.jpeg', 'Nama : Muthiah Nurul Hidayah', 'Nim : 220209502117\r\n', 'Kelas : PTIK F\r\n\r\n', 'RIWAYAT PENDIDIKAN\r\nSD : SDIT BINAUL UMMAH MALUK\r\nSMP : SMPIT AL BIRUNI MAKASSAR\r\nSMA : SMAIT AL BIRUNI MAKASSAR\r\nINSTANSI : UNIVERSITAS NEGERI MAKASSAR'),
(4, 'usercowok.jpeg', 'Nama : Muqinuddin Baso Mattappa', 'Nim : 220209502114\r\n', 'Kelas : PTIK F\r\n\r\n', 'RIWAYAT PENDIDIKAN\r\nSD : SDN KOMPLEK IKIP\r\nSMP : SMPN 3 MAKASSAR\r\nSMA : SMA BUDI UTOMO PERAK JOMBANG\r\nINSTANSI : UNIVERSITAS NEGERI MAKASSAR');

-- --------------------------------------------------------

--
-- Table structure for table `website`
--

CREATE TABLE `website` (
  `id_menu` int(5) NOT NULL,
  `gambar` varchar(50) NOT NULL,
  `menu_bestseller` varchar(255) NOT NULL,
  `deskripsi` varchar(255) NOT NULL,
  `pesan` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `website`
--

INSERT INTO `website` (`id_menu`, `gambar`, `menu_bestseller`, `deskripsi`, `pesan`) VALUES
(1, 'kopi1.jpeg', 'Menu Best Seller\r\n\r\n', 'Espresso.\r\nKopi dengan rasa kuat dan pekat, cocok untuk pencinta kopi sejati.\r\n', 'Pesan Sekarang'),
(2, 'makanan1.jpeg', 'Menu Best Seller\r\n\r\n', 'Croissant.\r\nPastry yang populer sebagai hidangan khas di Prancis yang berbentuk bulan sabit.\r\n', 'Pesan Sekarang'),
(3, 'kopi2.jpeg', 'Menu Best Seller\r\n', 'Cappucino.\r\nKopi dengan kombinasi sempurna antara espresso, susu, dan busa susu.', 'Pesan Sekarang');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `kontak`
--
ALTER TABLE `kontak`
  ADD PRIMARY KEY (`id_nama`);

--
-- Indexes for table `makanan`
--
ALTER TABLE `makanan`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `minuman`
--
ALTER TABLE `minuman`
  ADD PRIMARY KEY (`id_menu`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_nama`);

--
-- Indexes for table `tentangkami`
--
ALTER TABLE `tentangkami`
  ADD PRIMARY KEY (`no`);

--
-- Indexes for table `website`
--
ALTER TABLE `website`
  ADD PRIMARY KEY (`id_menu`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `kontak`
--
ALTER TABLE `kontak`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `makanan`
--
ALTER TABLE `makanan`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `minuman`
--
ALTER TABLE `minuman`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_nama` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tentangkami`
--
ALTER TABLE `tentangkami`
  MODIFY `no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `website`
--
ALTER TABLE `website`
  MODIFY `id_menu` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
