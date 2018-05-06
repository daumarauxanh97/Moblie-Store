-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 24, 2018 at 12:23 PM
-- Server version: 10.1.28-MariaDB
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
-- Database: `phone`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `fullname` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(2) NOT NULL,
  `role` int(2) NOT NULL,
  `avartar` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `create_time` date NOT NULL,
  `update_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `address`, `status`, `role`, `avartar`, `create_time`, `update_time`) VALUES
(1, 'admin', 'admin', 'le duc thang', 'asdas@gmail.com', '091231231', 'ádasdasd', 1, -1, NULL, '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `hang_sx`
--

CREATE TABLE `hang_sx` (
  `id` int(10) NOT NULL,
  `name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `loai_sp` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `SDT` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `address` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` date NOT NULL,
  `update_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `hang_sx`
--

INSERT INTO `hang_sx` (`id`, `name`, `loai_sp`, `SDT`, `address`, `create_time`, `update_time`) VALUES
(1, 'apple', 'phone,IPAD,deskop', '123456789', 'ẤDASDASD', '2018-03-13', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone_id` int(10) NOT NULL,
  `nameCustomer` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phoneCustomer` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `addressCustomer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL,
  `money` int(20) NOT NULL,
  `qtyProduct` int(10) NOT NULL,
  `create_time` date NOT NULL,
  `update_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `phone`
--

CREATE TABLE `phone` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_sx` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(30) NOT NULL,
  `giam_gia` int(30) DEFAULT NULL,
  `man_hinh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `do_phan_giai` varchar(30) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `cpu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gpu` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `ram` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `camera_sau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `camera_truoc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bo_nho_trong` varchar(30) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `the_nho` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `sim` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `3g` int(4) NOT NULL,
  `4g` int(4) NOT NULL,
  `wifi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pin` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `quay_phim` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `view` int(10) NOT NULL,
  `mieu_ta` text COLLATE utf8_unicode_ci NOT NULL,
  `create_time` date NOT NULL,
  `update_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `phone`
--

INSERT INTO `phone` (`id`, `phone_name`, `images`, `id_sx`, `gia`, `giam_gia`, `man_hinh`, `do_phan_giai`, `cpu`, `gpu`, `ram`, `camera_sau`, `camera_truoc`, `bo_nho_trong`, `the_nho`, `sim`, `3g`, `4g`, `wifi`, `pin`, `quay_phim`, `view`, `mieu_ta`, `create_time`, `update_time`) VALUES
(1, 'iphone X', '1.jpg', '1', 30000000, NULL, 'QWE', 'qweqweqweqwe12312', 'asdas', 'asdad', '3gb', 'asdas', 'asd', 'zxczxc', 'zxczxc', 'ghjg', 1, 1, 'sadasd', 'asdasd', 'asdas', 63, 'asdasasasdas', '0000-00-00', NULL),
(2, '1', '1.jpg', '1', 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', '1', '1', 1, 1, '1', '1', '1', 58, '1', '0000-00-00', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Indexes for table `hang_sx`
--
ALTER TABLE `hang_sx`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_name` (`phone_name`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `hang_sx`
--
ALTER TABLE `hang_sx`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
