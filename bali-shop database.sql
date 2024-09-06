-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 06, 2024 at 05:56 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bali-shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `akun`
--

CREATE TABLE `akun` (
  `id_akun` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `akun`
--

INSERT INTO `akun` (`id_akun`, `username`, `password`) VALUES
(5, 'dewaa', '$2y$12$w60VHUOyUZl/0uIG02T.aOAdDshC3wTxq0mdFBa6iJHtJ5vTnbIRO'),
(8, 'lelut', '$2y$10$TLyEmfEsZi2nRmLKT/EfDOyVySOo1OGRNYlaQuZNBGy2plV9ecT96'),
(9, 'dewa', '$2y$10$a2TX/R8cWuaa3fnxCMuY9.vlqsDZs/zYx8CcbHWO0DN3ZpMd/MC5S');

-- --------------------------------------------------------

--
-- Table structure for table `barang`
--

CREATE TABLE `barang` (
  `id_barang` int(11) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `harga_barang` varchar(100) NOT NULL,
  `foto_barang` varchar(255) NOT NULL,
  `foto_barang2` varchar(255) NOT NULL,
  `foto_barang3` varchar(255) NOT NULL,
  `foto_barang4` varchar(255) NOT NULL,
  `foto_barang5` varchar(255) NOT NULL,
  `stock_barang` int(100) NOT NULL,
  `deskripsi_barang` varchar(255) NOT NULL,
  `kategori_barang` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `barang`
--

INSERT INTO `barang` (`id_barang`, `nama_barang`, `harga_barang`, `foto_barang`, `foto_barang2`, `foto_barang3`, `foto_barang4`, `foto_barang5`, `stock_barang`, `deskripsi_barang`, `kategori_barang`) VALUES
(46, 'Mouse Logitech Zyn10', '200000', '66ba44aac6fb5.png', '66ba44aac78d4.png', '66ba44aac7e5c.png', '66ba44aac8378.png', '66ba44aac88c7.png', 0, 'Mouse Logitech Dengan Kualitas Terbaik Yang Pernah Ada PAHAM!', 'Elektronik'),
(47, 'Lenovo Ideapad Slim Ryzen 67', '2000000', '66ba44e9f1a07.png', '66ba44e9f2122.png', '66ba44e9f27af.png', '66ba44e9f2d77.png', '66ba44e9f3389.jpg', 42, 'Laptop Gaming Terbaik Cocok untuk Game Berat Seperti Slither.io', 'Elektronik'),
(49, 'Monitor Samsung', '3500000', '66c2bec98fd3a.png', '66c2bec9906fa.png', '66c2bec9908a5.png', '66c2bec990a30.png', '66c2bec990bc6.jpg', 25, 'Monitor ini menawarkan kualitas tampilan tajam dan detail dengan desain modern yang elegan.', 'Elektronik'),
(50, 'logitech Mechanic Keyboard V.2', '850000', '66c2bf7091083.png', '66c2bf709129e.png', '66c2bf7091583.png', '66c2bf709174b.png', '66c2bf7091930.png', 41, 'Keyboard ini menawarkan kenyamanan mengetik dengan responsif dan daya tahan tinggi.', 'Elektronik'),
(51, 'Meja Gaming Adjustment', '4700000', '66c2c072db679.png', '66c2c072db8b9.png', '66c2c072dbaa2.png', '66c2c072dbc54.png', '66c2c072dbe2b.png', 0, 'Meja gaming yang kokoh dan stylish, dirancang khusus untuk kenyamanan dan performa optimal saat bermain game.', 'Elektronik'),
(52, 'Rexus Gaming Chair', '5000000', '66c2c163a4fe4.png', '66c2c163a5232.png', '66c2c163a541a.png', '66c2c163a5604.png', '66c2c163a5803.png', 10, 'Kursi gaming ergonomis dengan desain stylish yang mendukung kenyamanan optimal untuk sesi bermain panjang.', 'Elektronik'),
(53, 'Mousepad Tenjing TDR 3000', '490000', '66c2c203ba016.png', '66c2c203ba24e.png', '66c2c203ba44f.png', '66c2c203ba7f2.png', '66c2c203bab86.png', 23, 'Mousepad ini dirancang untuk memberikan kenyamanan maksimal dan presisi tinggi selama penggunaan.', 'Elektronik'),
(54, 'ASUS ROG TUF F15', '18000000', '66c2c291b72f3.png', '66c2c291b7673.png', '66c2c291b7880.png', '66c2c291b7a62.png', '66c2c291b7c33.png', 6, 'Laptop gaming ini menawarkan performa tinggi dengan grafis yang memukau untuk pengalaman bermain yang maksimal.', 'Elektronik'),
(55, 'VGA Asus ROG 4999', '2300000', '66c2c3007c497.png', '66c2c3007c8b3.png', '66c2c3007cae3.png', '66c2c3007cca1.png', '66c2c3007ce59.png', 17, 'VGA berkualitas tinggi dengan performa grafis unggul untuk pengalaman visual yang lebih hidup.', 'Elektronik'),
(56, 'PC Casing MSI Gen2', '17500000', '66c2c3f0530c5.png', '66c2c3f0533a8.png', '66c2c3f053582.png', '66c2c3f053746.png', '66c2c3f053901.png', 5, 'Casing PC ini dirancang untuk memberikan perlindungan optimal dan aliran udara yang baik, memastikan performa komponen tetap maksimal.', 'Elektronik');

-- --------------------------------------------------------

--
-- Table structure for table `pesanan`
--

CREATE TABLE `pesanan` (
  `id_pesanan` int(11) NOT NULL,
  `nama_pemesan` varchar(255) NOT NULL,
  `nomor_telpon` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `catatan_pesanan` varchar(255) NOT NULL,
  `nama_barang` varchar(255) NOT NULL,
  `quantity_barang` varchar(255) NOT NULL,
  `harga_barang` varchar(255) NOT NULL,
  `subtotal` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `pesanan`
--

INSERT INTO `pesanan` (`id_pesanan`, `nama_pemesan`, `nomor_telpon`, `email`, `catatan_pesanan`, `nama_barang`, `quantity_barang`, `harga_barang`, `subtotal`, `status`) VALUES
(6, 'Ngakan Nyoman Ari Surya Khrinsa', '08762184371', '', 'Yang Mantap ya bang', 'Lenovo Ideapad Slim Ryzen 67', '3', '2000000', '6000000', 'Diproses'),
(14, 'Dewa', '0871236234', 'arisurya228@gmail.com', 'Okee', '1. Meja Gaming Adjustment,2. Rexus Gaming Chair,3. Mousepad Tenjing TDR 3000,4. PC Casing MSI Gen2', '1,1,1,1', '4700000,5000000,490000,17500000', '4700000,5000000,490000,17500000', 'Diproses'),
(15, 'asda', '234234234', 'asdasdasd@ad', '123123', '1. Lenovo Ideapad Slim Ryzen 67,2. PC Casing MSI Gen2', '1,1', '2000000,17500000', '2000000,  17500000', 'Diproses'),
(16, 'pepen', '234234234', 'asdasdasd@ad', 'asd', 'Lenovo Ideapad Slim Ryzen 67', '1', '2000000', '2000000', 'Diproses'),
(17, 'asdasda', '34234234', 'asdasdasd@ad', 'asdasd', 'Mouse Logitech Zyn10', '1', '200000', '200000', 'Diproses'),
(18, 'pepen', '234234', 'asdasdasd@ad', 'asdasd', '1. Monitor Samsung,2. Meja Gaming Adjustment', '1,1', '3500000,4700000', '3500000,  4700000', 'Diproses'),
(19, 'dewa', '123123', 'asdasdasd@ad', 'asdasd', '1. Meja Gaming Adjustment,2. Monitor Samsung', '1,1', '4700000,3500000', '4700000,  3500000', 'Diproses'),
(20, 'dewa', '234234234', 'arisurya228@gmail.com', 'asdasd', '1. Meja Gaming Adjustment', '6', '4700000', '28200000', 'Diproses'),
(21, 'dewaas', '324234', 'asdasdasd@ad', 'asda', 'Lenovo Ideapad Slim Ryzen 67', '1', '2000000', '2000000', 'Diproses'),
(22, 'lelut', '324234', 'asdasdasd@ad', 'asdasd', 'Rexus Gaming Chair', '1', '5000000', '5000000', 'Diproses'),
(23, 'asd', '324234', 'asdasdasd@ad', 'asdasd', 'Lenovo Ideapad Slim Ryzen 67', '1', '2000000', '2000000', 'Diproses');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id_user` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `nama` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id_user`, `email`, `nama`, `password`) VALUES
(2, 'arisurya228@gmail.com', 'dewa', '$2y$10$OvtGasIFnbxo5IsXjE69kO80aJG3.TTQ0lZqX85zW8zf8rugtAAyC');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akun`
--
ALTER TABLE `akun`
  ADD PRIMARY KEY (`id_akun`);

--
-- Indexes for table `barang`
--
ALTER TABLE `barang`
  ADD PRIMARY KEY (`id_barang`);

--
-- Indexes for table `pesanan`
--
ALTER TABLE `pesanan`
  ADD PRIMARY KEY (`id_pesanan`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id_user`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akun`
--
ALTER TABLE `akun`
  MODIFY `id_akun` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `barang`
--
ALTER TABLE `barang`
  MODIFY `id_barang` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `pesanan`
--
ALTER TABLE `pesanan`
  MODIFY `id_pesanan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id_user` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
