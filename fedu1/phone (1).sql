-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th5 06, 2018 lúc 10:15 PM
-- Phiên bản máy phục vụ: 10.1.28-MariaDB
-- Phiên bản PHP: 7.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `phone`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `admins`
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
-- Đang đổ dữ liệu cho bảng `admins`
--

INSERT INTO `admins` (`id`, `username`, `password`, `fullname`, `email`, `phone`, `address`, `status`, `role`, `avartar`, `create_time`, `update_time`) VALUES
(1, 'admin', 'admin', 'le duc thang', 'asdas@gmail.com', '091231231', 'ádasdasd', 1, -1, NULL, '0000-00-00', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `hang_sx`
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
-- Đang đổ dữ liệu cho bảng `hang_sx`
--

INSERT INTO `hang_sx` (`id`, `name`, `loai_sp`, `SDT`, `address`, `create_time`, `update_time`) VALUES
(1, 'Apple', 'phone,IPAD,deskop', '123456789', 'ẤDASDASD', '2018-03-13', NULL),
(2, 'Samsung', 'phone,IPAD,deskop', '123123456', 'asdasdasd', '2018-03-27', NULL),
(3, 'Oppo', 'phone', '1234567890', 'asdasdasd', '2018-03-27', NULL),
(4, 'Asus', 'laptop', '12312123', 'ưeqeqw', '2018-03-29', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `laptop`
--

CREATE TABLE `laptop` (
  `id` int(10) UNSIGNED NOT NULL,
  `id_sx` int(2) UNSIGNED NOT NULL,
  `id_loai_sp` int(10) NOT NULL,
  `laptop_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(30) UNSIGNED NOT NULL,
  `images` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `view` int(10) UNSIGNED NOT NULL,
  `ram` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `disk` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `hdh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `chip_do_hoa` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pin` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `man_hinh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `create_time` date NOT NULL,
  `update_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `laptop`
--

INSERT INTO `laptop` (`id`, `id_sx`, `id_loai_sp`, `laptop_name`, `gia`, `images`, `view`, `ram`, `disk`, `hdh`, `chip_do_hoa`, `pin`, `man_hinh`, `create_time`, `update_time`) VALUES
(1, 1, 2, '1', 20000000, '9.jpg', 90, '1', '1', '1', '1', '1', '1', '2018-03-26', NULL),
(2, 1, 2, '2', 10000000, '10.png', 10, '2', '2', '2', '2', '2', '2', '2018-03-26', NULL),
(3, 1, 2, '3', 30000000, '10.png', 23, '3', '3', '3', '3', '3', '3', '2018-03-26', NULL),
(4, 1, 2, '4', 4, '9.jpg', 31, '4', '4', '4', '4', '4', '4', '2018-03-26', NULL),
(5, 4, 2, '5', 5, '16.jpg', 8, '5', '5', '5', '5', '5', '5', '2018-03-29', NULL),
(6, 4, 2, '6', 6, '17.jpg', 2, '6', '6', '6', '6', '6', '6', '2018-03-29', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `loai_sp`
--

CREATE TABLE `loai_sp` (
  `id` int(10) UNSIGNED NOT NULL,
  `ten_loai` varchar(30) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `loai_sp`
--

INSERT INTO `loai_sp` (`id`, `ten_loai`) VALUES
(1, 'Điện thoại'),
(2, 'Laptop'),
(3, 'Tablet'),
(4, 'Phụ kiện');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `orders`
--

CREATE TABLE `orders` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `nameCustomer` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `phoneCustomer` varchar(11) COLLATE utf8_unicode_ci NOT NULL,
  `addressCustomer` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `money` int(20) NOT NULL,
  `qtyProduct` int(10) NOT NULL,
  `create_time` date NOT NULL,
  `update_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phone`
--

CREATE TABLE `phone` (
  `id` int(10) UNSIGNED NOT NULL,
  `phone_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `images` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `id_sx` int(30) NOT NULL,
  `id_loai_sp` int(30) NOT NULL,
  `gia` int(30) NOT NULL,
  `man_hinh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `do_phan_giai` varchar(30) CHARACTER SET utf32 COLLATE utf32_unicode_ci NOT NULL,
  `ram` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `camera_sau` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `camera_truoc` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `bo_nho_trong` varchar(30) CHARACTER SET ucs2 COLLATE ucs2_unicode_ci NOT NULL,
  `the_nho` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `pin` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `view` int(10) NOT NULL DEFAULT '0',
  `mieu_ta` text COLLATE utf8_unicode_ci,
  `create_time` date DEFAULT NULL,
  `update_time` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `phone`
--

INSERT INTO `phone` (`id`, `phone_name`, `images`, `id_sx`, `id_loai_sp`, `gia`, `man_hinh`, `do_phan_giai`, `ram`, `camera_sau`, `camera_truoc`, `bo_nho_trong`, `the_nho`, `pin`, `view`, `mieu_ta`, `create_time`, `update_time`) VALUES
(1, 'iphone X', '1.jpg', 1, 1, 30000000, 'QWE', 'qweqweqweqwe12312', '3gb', 'asdas', 'asd', 'zxczxc', 'zxczxc', 'asdasd', 161, 'asdasasasdas', '0000-00-00', NULL),
(2, '1', '1.jpg', 1, 1, 1, '1', '1', '1', '1', '1', '1', '1', '1', 77, '1', '0000-00-00', NULL),
(3, '3', '6.png', 3, 1, 10000000, '3', '3', '3', '3', '3', '3', '3', '3', 14, '', '2018-03-28', NULL),
(5, '4', '7.png', 3, 1, 10000000, '3', '3', '3', '3', '3', '3', '3', '3', 2, 'ưqeqw', '2018-03-28', NULL),
(6, '6', '1.jpg', 1, 1, 10000000, '1', '1', '1', '1', '1', '1', '1', '1', 1, '1111', '2018-03-29', NULL),
(7, '7', '8.png', 3, 1, 20000000, '1', '7', '7', '7', '7', '7', '7', '7', 0, '7', '2018-03-29', NULL),
(9, '10', '10.jpg', 3, 1, 10000000, '10', '10', '10', '10', '10', '10', '10', '10', 1, '', '2018-03-30', NULL),
(10, '11', '11.jpg', 3, 1, 11, '11', '11', '11', '11', '11', '11', '1', '1', 0, '', '2018-03-30', NULL),
(13, '12', '12.png', 3, 1, 12, '12', '12', '12', '12', '12', '12', '12', '12', 1, '123', '2018-03-30', NULL);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `phu_kien`
--

CREATE TABLE `phu_kien` (
  `id` int(10) NOT NULL,
  `pk_name` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `id_loai_sp` int(2) NOT NULL,
  `hinh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `gia` int(30) NOT NULL,
  `create_time` date NOT NULL,
  `update_time` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `username` (`username`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `phone` (`phone`);

--
-- Chỉ mục cho bảng `hang_sx`
--
ALTER TABLE `hang_sx`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `laptop`
--
ALTER TABLE `laptop`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id` (`id`);

--
-- Chỉ mục cho bảng `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Chỉ mục cho bảng `phone`
--
ALTER TABLE `phone`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone_name` (`phone_name`),
  ADD KEY `id_sx` (`id_sx`),
  ADD KEY `id_loai_sp` (`id_loai_sp`),
  ADD KEY `id_sx_2` (`id_sx`);

--
-- Chỉ mục cho bảng `phu_kien`
--
ALTER TABLE `phu_kien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT cho bảng `hang_sx`
--
ALTER TABLE `hang_sx`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `laptop`
--
ALTER TABLE `laptop`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT cho bảng `loai_sp`
--
ALTER TABLE `loai_sp`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT cho bảng `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT cho bảng `phone`
--
ALTER TABLE `phone`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT cho bảng `phu_kien`
--
ALTER TABLE `phu_kien`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT;

--
-- Các ràng buộc cho các bảng đã đổ
--

--
-- Các ràng buộc cho bảng `phone`
--
ALTER TABLE `phone`
  ADD CONSTRAINT `phone_ibfk_1` FOREIGN KEY (`id_sx`) REFERENCES `hang_sx` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
