-- Tạo cơ sở dữ liệu với charset và collation cho tiếng Việt
CREATE DATABASE IF NOT EXISTS `students` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_vietnamese_ci;
USE `students`;

-- Các thiết lập khác
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

-- Không cần thiết nếu máy chủ đã thiết lập sẵn
-- /*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
-- /*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
-- /*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
-- /*!40101 SET NAMES utf8mb4 */;

-- --------------------------------------------------------

--
-- Cấu trúc bảng `account`
--

CREATE TABLE `account` (
  `ID` varchar(9) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dữ liệu cho bảng `account`
--

INSERT INTO `account` (`ID`, `Password`) VALUES
('24GIT202', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng `address_info`
--

CREATE TABLE `address_info` (
  `ID` varchar(9) NOT NULL,
  `Full Address` varchar(100) NOT NULL,
  `City` varchar(50) NOT NULL,
  `District` varchar(50) NOT NULL,
  `Ward` varchar(50) NOT NULL,
  `Residential` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dữ liệu cho bảng `address_info`
--

INSERT INTO `address_info` (`ID`, `Full Address`, `City`, `District`, `Ward`, `Residential`) VALUES
('24GIT202', '222 Đ. Nguyen Van Linh, Thac Gian, Thanh Khe, Da Nang, Viet Nam', 'DA NANG', 'THANH KHE', 'THAC GIAN', 'To 23'),
('aegssd', 'dfbdfb', 'dfbdfb', 'dfbdfbdfb', 'fdbdfb', '123'),
('dfnfdn', 'fgnfgn', 'fgnfgnfgnfgn', 'fgnfgnfgn', 'fgnfgnfg', '123');

-- --------------------------------------------------------

--
-- Cấu trúc bảng `contact_info`
--

CREATE TABLE `contact_info` (
  `ID` varchar(9) NOT NULL,
  `Private Email` varchar(50) NOT NULL,
  `Private Phone` varchar(50) NOT NULL,
  `Family Phone` varchar(50) NOT NULL,
  `Facebook` varchar(100) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dữ liệu cho bảng `contact_info`
--

INSERT INTO `contact_info` (`ID`, `Private Email`, `Private Phone`, `Family Phone`, `Facebook`) VALUES
('24GIT202', 'vuongnguyen3509@gmail.com', '0348265423', '0345687345', 'https://www.youtube.com/watch?v=dQw4w9WgXcQ'),
('fgnfgn', 'fgnfgn', 'fgnfng', 'fgnfgnfsng', 'fgnfgnfsg'),
('sdv', 'fgnfgn', 'fgnf', 'fgnfgn', 'sdfbdfbdfbdfb');

-- --------------------------------------------------------

--
-- Cấu trúc bảng `private_info`
--

CREATE TABLE `private_info` (
  `ID` varchar(9) NOT NULL,
  `Full Name` varchar(50) NOT NULL,
  `Day Of Birth` date NOT NULL,
  `Gender` varchar(14) NOT NULL,
  `CCCD` varchar(12) NOT NULL,
  `Region` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dữ liệu cho bảng `private_info`
--

INSERT INTO `private_info` (`ID`, `Full Name`, `Day Of Birth`, `Gender`, `CCCD`, `Region`) VALUES
('24GIT202', 'Nguyen Quang Vuong', '2004-11-10', 'male', '035647864', 'Phat Giao'),
('zx', 'cvbgfnf', '2003-11-07', 'female', 'zvsvsdvsdv', 'fgnfgn');

-- --------------------------------------------------------

--
-- Cấu trúc bảng `school_info`
--

CREATE TABLE `school_info` (
  `ID` varchar(9) NOT NULL,
  `Full Name` varchar(50) NOT NULL,
  `Class` varchar(5) NOT NULL,
  `Major` varchar(50) NOT NULL,
  `Email` varchar(50) NOT NULL,
  `Course` varchar(50) NOT NULL,
  `Faculty` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_vietnamese_ci;

--
-- Dữ liệu cho bảng `school_info`
--

INSERT INTO `school_info` (`ID`, `Full Name`, `Class`, `Major`, `Email`, `Course`, `Faculty`) VALUES
('24GIT202', 'Nguyen Quang Vuong', '24GIT', 'Vi Mach Ban Dan', '23git202@gmail.com', '2024 - 2028', 'Khoa Khoa Hoc May Tinh'),
('dfbv', 'dfbdf', 'dfbdf', 'dfbdfb', 'dfbdffbdfbdfbdfbfd', '2023 - 2027', 'Khoa Kĩ Thuật Máy Tính');

-- --------------------------------------------------------

-- Kết thúc giao dịch
COMMIT;

-- Không cần thiết nếu máy chủ đã thiết lập sẵn
-- /*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
-- /*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
-- /*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
