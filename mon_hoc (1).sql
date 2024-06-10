-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 09, 2024 at 05:53 PM
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
-- Database: `qldiem`
--

-- --------------------------------------------------------

--
-- Table structure for table `mon_hoc`
--

CREATE TABLE `mon_hoc` (
  `id` varchar(11) NOT NULL,
  `mamon` varchar(50) NOT NULL,
  `tenmon` varchar(50) NOT NULL,
  `sotinchi` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_general_ci;

--
-- Dumping data for table `mon_hoc`
--

INSERT INTO `mon_hoc` (`id`, `mamon`, `tenmon`, `sotinchi`) VALUES
('006', 'MSSV ', 'Cấu Trúc Dữ Liệu Và Giải Thuật ', '1'),
('007', 'MSSV', 'Java Cơ Bản', '3'),
('008', 'MSMH', 'Cầu Đường', '2'),
('009', 'DMCS', 'Toán 2', '2');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `mon_hoc`
--
ALTER TABLE `mon_hoc`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
