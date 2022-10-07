-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 07, 2022 lúc 02:39 PM
-- Phiên bản máy phục vụ: 10.4.24-MariaDB
-- Phiên bản PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `d13cnpm`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tbsinhvien`
--

CREATE TABLE `tbsinhvien` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 NOT NULL,
  `age` tinyint(4) NOT NULL,
  `address` varchar(200) CHARACTER SET utf8 NOT NULL,
  `telephone` varchar(20) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Đang đổ dữ liệu cho bảng `tbsinhvien`
--

INSERT INTO `tbsinhvien` (`id`, `name`, `age`, `address`, `telephone`) VALUES
(1, 'Mai Huy Hoạt', 21, 'Nam Định', '0589429869'),
(2, 'Phạm Thị Diễm Quỳnh', 21, 'Nam Định', '3838388392'),
(3, 'Nguyễn Thoa', 34, 'Nam Định', '0986131753'),
(4, 'Lê vĩnh hưng', 32, 'ha noi', 'đ');

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `tbsinhvien`
--
ALTER TABLE `tbsinhvien`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `tbsinhvien`
--
ALTER TABLE `tbsinhvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
