-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 04, 2023 at 02:46 PM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `clickpromo`
--

-- --------------------------------------------------------

--
-- Table structure for table `administrator`
--

CREATE TABLE `administrator` (
  `id_admin` int(12) NOT NULL,
  `username` varchar(70) NOT NULL,
  `password` varchar(70) NOT NULL,
  `email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `administrator`
--

INSERT INTO `administrator` (`id_admin`, `username`, `password`, `email`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com'),
(2, 'alangartha', 'alangartha', ''),
(3, 'kiaputri', 'kiaputri', ''),
(4, 'amdilarahmadi', 'amdilarahmadi', '');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE `customer` (
  `id_cust` int(12) NOT NULL,
  `username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL,
  `Email` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`id_cust`, `username`, `Password`, `Email`) VALUES
(1, 'amdila', 'amdila', 'amdilarahmadi@gmail.com'),
(2, 'Briyan', 'brygantzz', 'briyannakmamakcllu@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `e_comerce`
--

CREATE TABLE `e_comerce` (
  `id_ecom` int(12) NOT NULL,
  `Nama_Ecom` varchar(70) NOT NULL,
  `link_ecom` varchar(200) NOT NULL,
  `gambar_ecom` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `e_comerce`
--

INSERT INTO `e_comerce` (`id_ecom`, `Nama_Ecom`, `link_ecom`, `gambar_ecom`) VALUES
(1, 'Shopee', 'https://shopee.co.id', 'shopee.jpg'),
(2, 'Tokopedia', 'https://www.tokopedia.com', 'tokopedia.jpg'),
(3, 'Zalora', 'https://www.zalora.co.id', 'zalora.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id_feed` int(12) NOT NULL,
  `id_cust` int(12) NOT NULL,
  `konten` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `promo`
--

CREATE TABLE `promo` (
  `id_promo` int(12) NOT NULL,
  `id_ecom` int(12) NOT NULL,
  `nama_promo` varchar(70) NOT NULL,
  `tgl_batas` date NOT NULL,
  `link_promo` varchar(200) NOT NULL,
  `kategori` enum('Baju','Celana','Jam','Sepatu') NOT NULL,
  `gambar_promo` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promo`
--

INSERT INTO `promo` (`id_promo`, `id_ecom`, `nama_promo`, `tgl_batas`, `link_promo`, `kategori`, `gambar_promo`) VALUES
(1, 2, 'AOKEYO 216 Jam Tangan Pria Luxury Anti Air  ', '2023-12-31', 'https://tokopedia.link/3uGMiuL6Yzb', 'Jam', 'WhatsApp Image 2023-05-21 at 11.15.40 PM.jpeg'),
(2, 2, 'Sport Shoes Simple ', '2023-06-29', 'https://tokopedia.link/EhUp2yW6Yzb', 'Sepatu', 'WhatsApp Image 2023-05-21 at 11.18.10 PM.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `wishlist`
--

CREATE TABLE `wishlist` (
  `id_wishlist` int(12) NOT NULL,
  `id_promo` int(12) NOT NULL,
  `id_cust` int(12) NOT NULL,
  `link_promo` varchar(200) NOT NULL,
  `tgl_batas` date NOT NULL,
  `Nama_promo` varchar(70) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `wishlist`
--

INSERT INTO `wishlist` (`id_wishlist`, `id_promo`, `id_cust`, `link_promo`, `tgl_batas`, `Nama_promo`) VALUES
(1, 1, 1, 'https://tokopedia.link/3uGMiuL6Yzb', '2023-12-31', 'AOKEYO 216 Jam Tangan Pria Luxury Anti Air');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `administrator`
--
ALTER TABLE `administrator`
  ADD PRIMARY KEY (`id_admin`);

--
-- Indexes for table `customer`
--
ALTER TABLE `customer`
  ADD PRIMARY KEY (`id_cust`);

--
-- Indexes for table `e_comerce`
--
ALTER TABLE `e_comerce`
  ADD PRIMARY KEY (`id_ecom`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id_feed`),
  ADD KEY `id_cust` (`id_cust`);

--
-- Indexes for table `promo`
--
ALTER TABLE `promo`
  ADD PRIMARY KEY (`id_promo`),
  ADD KEY `id_ecom` (`id_ecom`);

--
-- Indexes for table `wishlist`
--
ALTER TABLE `wishlist`
  ADD PRIMARY KEY (`id_wishlist`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `administrator`
--
ALTER TABLE `administrator`
  MODIFY `id_admin` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `customer`
--
ALTER TABLE `customer`
  MODIFY `id_cust` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `e_comerce`
--
ALTER TABLE `e_comerce`
  MODIFY `id_ecom` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id_feed` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `promo`
--
ALTER TABLE `promo`
  MODIFY `id_promo` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `wishlist`
--
ALTER TABLE `wishlist`
  MODIFY `id_wishlist` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`id_cust`) REFERENCES `customer` (`id_cust`);

--
-- Constraints for table `promo`
--
ALTER TABLE `promo`
  ADD CONSTRAINT `promo_ibfk_1` FOREIGN KEY (`id_ecom`) REFERENCES `e_comerce` (`id_ecom`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
