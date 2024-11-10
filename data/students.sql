CREATE Database students
-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 09, 2024 at 06:17 AM
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
-- Database: `students`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `ID` varchar(9) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `Password` varchar(50) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`ID`, `Password`) VALUES
('24GIT202', '123');

-- --------------------------------------------------------

--
-- Table structure for table `address_info`
--

CREATE TABLE `address_info` (
  `ID` varchar(9) NOT NULL,
  `Full Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Ward` varchar(50) NOT NULL,
  `Residential` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `address_info`
--

INSERT INTO `address_info` (`ID`, `Full Address`, `City`, `District`, `Ward`, `Residential`) VALUES
('24GIT202', '222 Đ. Nguyễn Văn Linh, Thạc Gián, Thanh Khê, Đà Nẵng, Việt Nam', 'ĐÀ NẴNG', 'THANH KHÊ', 'THẠCH GIÁN', 'Tổ 23'),
('aegssd', 'dfbdfb', 'dfbdfb', 'dfbdfbdfb', 'fdbdfb', '123'),
('dfnfdn', 'fgnfgn', 'fgnfgnfgnfgn', 'fgnfgnfgn', 'fgnfgnfg', '123');

-- --------------------------------------------------------

--
-- Table structure for table `contact_info`
--

CREATE TABLE `contact_info` (
  `ID` varchar(9) NOT NULL,
  `Private Email` varchar(50) NOT NULL,
  `Private Phone` varchar(50) NOT NULL,
  `Family Phone` varchar(50) NOT NULL,
  `FaceBook` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `contact_info`
--

INSERT INTO `contact_info` (`ID`, `Private Email`, `Private Phone`, `Family Phone`, `FaceBook`) VALUES
('24GIT202', 'vuongnguyen3509@gmail.com', '0348265423', '0345687345', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'),
('fgnfgn', 'fgnfgn', 'fgnfng', 'fgnfgnfsng', 'fgnfgnfsg'),
('sdv', 'fgnfgn', 'fgnf', 'fgnfgn', 'sdfbdfbdfbdfb');

-- --------------------------------------------------------

--
-- Table structure for table `private_info`
--

CREATE TABLE `private_info` (
  `ID` varchar(9) NOT NULL,
  `Full Name` varchar(50) NOT NULL,
  `Day Of Birth` date NOT NULL,
  `Gender` varchar(14) NOT NULL,
  `CCCD` varchar(12) NOT NULL,
  `Region` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `private_info`
--

INSERT INTO `private_info` (`ID`, `Full Name`, `Day Of Birth`, `Gender`, `CCCD`, `Region`) VALUES
('24GIT202', 'Nguyễn Quang Vương', '2024-11-10', 'male', '035647864', 'Phật Giáo'),
('zx', 'cvbgfnf', '2024-11-07', 'female', 'zvsvsdvsdv', 'fgnfgn');

-- --------------------------------------------------------

--
-- Table structure for table `school_info`
--

CREATE TABLE `school_info` (
  `ID` varchar(9) NOT NULL,
  `Full Name` varchar(50) NOT NULL,
  `Class` varchar(5) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL,
  `Major` varchar(50) NOT NULL,
  `Email` varchar(50) CHARACTER SET ascii COLLATE ascii_general_ci NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Faculty` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `school_info`
--

INSERT INTO `school_info` (`ID`, `Full Name`, `Class`, `Major`, `Email`, `Course`, `Faculty`) VALUES
('24GIT202', 'Nguyễn Quang Vương', '24GIT', 'Vi Mạch Bán Dẫn', '23git202@gmail.com', '2024 - 2028', 'Khoa Khoa Học Máy Tính'),
('dfbv', 'dfbdf', 'dfbdf', 'dfbdfb', 'dfbdffbdfbdfbdfbfd', '2023 - 2027', 'Khoa Kĩ Thuật Máy Tính');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `address_info`
--
ALTER TABLE `address_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `contact_info`
--
ALTER TABLE `contact_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `private_info`
--
ALTER TABLE `private_info`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `school_info`
--
ALTER TABLE `school_info`
  ADD PRIMARY KEY (`ID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
