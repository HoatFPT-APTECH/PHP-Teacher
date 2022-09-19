-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 25, 2020 at 06:29 PM
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
-- Database: `d13cnpm2`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbnhanvien`
--

CREATE TABLE `tbnhanvien` (
  `id` int(11) NOT NULL,
  `hoten` varchar(30) CHARACTER SET utf8 NOT NULL,
  `dienthoai` varchar(15) DEFAULT NULL,
  `gioitinh` tinyint(1) DEFAULT NULL,
  `hinhanh` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbnhanvien`
--

INSERT INTO `tbnhanvien` (`id`, `hoten`, `dienthoai`, `gioitinh`, `hinhanh`) VALUES
(1, 'Ngô Vĩnh Đạt', '123456789', 0, 'dat.jpg'),
(2, 'Nguyễn Thị Dung', '987654321', 1, 'dung.png'),
(3, 'Nguyễn Văn Tiền', '1234567889', 0, 'nvtien.jpg'),
(4, 'a pháo', '12344', 0, 'hung.jgp');

-- --------------------------------------------------------

--
-- Table structure for table `tbuser`
--

CREATE TABLE `tbuser` (
  `id` int(11) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(32) NOT NULL,
  `trangthai` tinyint(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbuser`
--

INSERT INTO `tbuser` (`id`, `username`, `password`, `trangthai`) VALUES
(1, 'admin', '202cb962ac59075b964b07152d234b70', 1),
(2, 'admin2', '900150983cd24fb0d6963f7d28e17f72', 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbnhanvien`
--
ALTER TABLE `tbnhanvien`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbuser`
--
ALTER TABLE `tbuser`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbnhanvien`
--
ALTER TABLE `tbnhanvien`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbuser`
--
ALTER TABLE `tbuser`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
