-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 24, 2021 at 10:17 AM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tlu`
--

-- --------------------------------------------------------

--
-- Table structure for table `acount_admin`
--

CREATE TABLE `acount_admin` (
  `account_id` int(11) NOT NULL,
  `full_name` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `pass_word` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `acount_admin`
--

INSERT INTO `acount_admin` (`account_id`, `full_name`, `username`, `email`, `pass_word`) VALUES
(1, 'Khounpasird Singlattana', 'pouk', 'khounpasird46@gmail.com', 'abc'),
(2, 'Nguyễn Văn A', 'NguyenA', 'nguyenA@gmail.com', 'abc'),
(3, 'Nguyễn Văn B', 'NguyenB', 'nguyenB@gmail.com', 'abc'),
(4, 'Phạm Thu Hà', 'pham_thu_ha', 'ha99@gmail.com', 'abc'),
(5, 'Khoun', 'admin', 'admin@gmail.com', 'abc'),
(6, 'Phạm Văn Minh', 'phamminh', 'phamminh72@gmail.com', 'abc'),
(10, 'Anna', 'Anna', 'Anna@gmail.com', 'abc');

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE `employee` (
  `employee_id` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `position` varchar(255) DEFAULT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile_phone` varchar(255) DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `employee`
--

INSERT INTO `employee` (`employee_id`, `full_name`, `position`, `phone`, `email`, `mobile_phone`, `img`, `unit_id`, `unit_name`) VALUES
(1, 'Nguyễn Thanh Tùng', 'Trường khoa:P204', '38521442', '', '', 'NguyenThanhTung-TK.jpg', 14, 'Khoa Học Công Nghệ'),
(2, 'Đặng Thị Thu Hiền', 'P.Trường khoa', '', '', '', 'dangthithuhien.jpg', 14, 'Khoa Học Công Nghệ'),
(3, 'Nguyễn Thị Thu Hương', 'Trợ Lý Khoa', '35632211', '', '', 'nguyenthithuhuong.jpg', 14, 'Khoa Học Công Nghệ'),
(4, 'Nguyễn Khánh Linh', 'Trợ Lý Khoa', '', '', '', NULL, 14, 'Khoa Học Công Nghệ'),
(5, 'Nguyễn Hữu Thọ', 'Trưởng Bộ Môn', '', '', '', 'nguyenhuutho.jpg', 14, 'Khoa Học Công Nghệ'),
(6, 'Đỗ Lân', 'Phó Bộ Môn', '', '', '', 'dolan.jpg', 14, 'Khoa Học Công Nghệ'),
(7, 'Phạm Xuân Trung', '', '', '', '', 'phamxuantrung.jpg', 14, 'Khoa Học Công Nghệ'),
(8, 'Phan Thị Thanh Huyền', '', '', '', '', 'phanthanhhuyen.jpg', 14, 'Khoa Học Công Nghệ'),
(9, 'Nguyễn Văn Đấc', '', '', '', '', 'nguyenvandac.jpg', 14, 'Khoa Học Công Nghệ'),
(10, 'Nguyễn Thị Vân', '', '', '', '', 'nguyenthivan.jpg', 14, 'Khoa Học Công Nghệ'),
(11, 'GS.TS Trịnh Minh Thụ', 'Hiệu trưởng Trường ĐH Thủy Lợi', '', 'tmthu@tlu.edu.vn', '', 'trinhminhthu.jpg', 1, 'Ban Giám Hiệu'),
(12, 'GS.TS Nguyễn Trung Việt', 'Phó Hiệu trưởng Trường ĐH Thủy Lợi', '', 'nguyentrungviet@tlu.edu.vn', '', 'nguyentrungviet.jpg', 1, 'Ban Giám Hiệu'),
(13, 'PGS.TS Nguyễn Cảnh Thái', 'Phó Hiệu trưởng Trường ĐH Thủy Lợi', '', 'ncanhthai@tlu.edu.vn', '', 'nguyencanhthai.jpg', 1, 'Ban Giám Hiệu'),
(14, 'PGS.TS Nguyễn Hữu Huế', 'Phó Hiệu trưởng Trường ĐH Thủy Lợi', '', ' nguyenhuuhue@tlu.edu.vn', '', 'nguyenhuuhue.jpg', 1, 'Ban Giám Hiệu');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

CREATE TABLE `units` (
  `unit_id` int(11) NOT NULL,
  `unit_name` varchar(255) NOT NULL,
  `phone` varchar(255) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`unit_id`, `unit_name`, `phone`, `location`, `email`, `website`) VALUES
(1, 'BAN GIÁM HIỆU', '', '', '', ''),
(2, 'HỘI ĐỒNG TRƯỜNG', '', '', '', ''),
(3, 'VĂN PHÒNG ĐẢNG ỦY', '', '', '', ''),
(4, 'VĂN PHÒNG CÔNG ĐOÀN', '', '', '', ''),
(5, 'VĂN PHÒNG ĐOÀN THÀNH NIÊN', '', '', '', ''),
(6, 'PHÒNG HÀNH CHÍNH - TỔNG HỢP', '', '', '', ''),
(7, 'PHÒNG QUẢN TRỊ', '', '', '', ''),
(8, 'PHÒNG TỔ CHỨC CÁN BỘ', '', '', '', ''),
(9, 'PHÒNG ĐÀO TẠO', '', '', '', ''),
(10, 'PHÒNG KHẢO THÍ VÀ ĐẢM BẢO CHẤT LƯỢNG', '', '', '', ''),
(11, 'PHÒNG TÀI CHÍNH KẾ TOÁN', '', '', '', ''),
(12, 'PHÒNG HỢP TÁC QUỐC TẾ', '', '', '', ''),
(13, 'PHÒNG CHÍNH TRỊ & CÔNG TÁC SINH VIÊN', '', '', '', ''),
(14, 'PHÒNG KHOA HỌC CÔNG NGHỆ', '02435632211', 'Tầng 2, Nhà C1', 'vpkcntt@tlu.edu.vn', 'http://cse.tlu.edu.vn'),
(15, 'THƯ VIỆN', '', '', '', ''),
(16, 'TRẠM Y TẾ', '', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `acount_admin`
--
ALTER TABLE `acount_admin`
  ADD PRIMARY KEY (`account_id`);

--
-- Indexes for table `employee`
--
ALTER TABLE `employee`
  ADD PRIMARY KEY (`employee_id`),
  ADD KEY `unit_id` (`unit_id`);

--
-- Indexes for table `units`
--
ALTER TABLE `units`
  ADD PRIMARY KEY (`unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `acount_admin`
--
ALTER TABLE `acount_admin`
  MODIFY `account_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `employee`
--
ALTER TABLE `employee`
  MODIFY `employee_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `units`
--
ALTER TABLE `units`
  MODIFY `unit_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`unit_id`) REFERENCES `units` (`unit_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
