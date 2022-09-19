-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 10, 2020 at 05:25 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 5.6.35

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `d13cnpm`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbnhanvien`
--

CREATE TABLE `tbnhanvien` (
  `id` int(11) NOT NULL,
  `hoten` varchar(30) NOT NULL,
  `dienthoai` varchar(15) DEFAULT NULL,
  `gioitinh` tinyint(1) NOT NULL,
  `hinhanh` varchar(255) DEFAULT NULL,
  `maphong` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbnhanvien`
--

INSERT INTO `tbnhanvien` (`id`, `hoten`, `dienthoai`, `gioitinh`, `hinhanh`, `maphong`) VALUES
(3, 'Bùi Thị Vân Anh', '0987654321', 1, 'vananh.jpg', 1),
(4, 'Nguyễn Minh Nghĩa', '987654321', 0, 'nghia.jpg', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbphongban`
--

CREATE TABLE `tbphongban` (
  `maphong` int(11) NOT NULL,
  `tenphong` varchar(30) NOT NULL,
  `mota` varchar(255) NOT NULL,
  `trangthai` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `tbphongban`
--

INSERT INTO `tbphongban` (`maphong`, `tenphong`, `mota`, `trangthai`) VALUES
(1, 'Đào tạo', 'phòng đào tạo', 1),
(2, 'Công tác sinh viên', 'Phòng công tác sinh viên', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbnhanvien`
--
ALTER TABLE `tbnhanvien`
  ADD PRIMARY KEY (`id`),
  ADD KEY `id_maphong_nhanvien` (`maphong`);

--
-- Indexes for table `tbphongban`
--
ALTER TABLE `tbphongban`
  ADD PRIMARY KEY (`maphong`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbnhanvien`
--
ALTER TABLE `tbnhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbphongban`
--
ALTER TABLE `tbphongban`
  MODIFY `maphong` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbnhanvien`
--
ALTER TABLE `tbnhanvien`
  ADD CONSTRAINT `tbnhanvien_ibfk_1` FOREIGN KEY (`maphong`) REFERENCES `tbphongban` (`maphong`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
