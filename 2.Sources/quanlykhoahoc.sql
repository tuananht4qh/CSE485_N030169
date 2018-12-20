-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th12 20, 2018 lúc 03:20 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 5.6.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `quanlykhoahoc`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `giaovien`
--

CREATE TABLE `giaovien` (
  `Ma_GV` int(10) NOT NULL,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `chuyennganh` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `Khoa` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `diachi` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `SĐT_gv` text COLLATE utf8_unicode_ci NOT NULL,
  `dc_lamviec` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `giaovien`
--

INSERT INTO `giaovien` (`Ma_GV`, `username`, `password`, `chuyennganh`, `Khoa`, `diachi`, `SĐT_gv`, `dc_lamviec`) VALUES
(2, 'Anh', 'Anh123', 'Kỹ Thuật Phần Mềm', 'khoa CNTT tại Đại Học Thủy Lợi', 'thanh hóa', '1697857576', 'Trung tâm tin học quốc tế'),
(3, 'Tùng', 'tung123', 'Hệ thống thông tin', ' khoa CNTT tại Đại Học Thủy Lợi', 'Hà Nội', '1697857578', 'Trung tâm tin học quốc tế');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `khoahoc`
--

CREATE TABLE `khoahoc` (
  `ma_kh` int(30) NOT NULL,
  `ten_kh` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_GV` int(10) NOT NULL,
  `noidungkh` varchar(1000) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `khoahoc`
--

INSERT INTO `khoahoc` (`ma_kh`, `ten_kh`, `Ma_GV`, `noidungkh`) VALUES
(133, 'CMPSC 431W Database Management', 2, '<ul>\r\n	<li>Instructor\r\n	<ul>\r\n		<li>CMPSC 431W Database Management Systems (Fall 2015, Spring 2016, Fall 2016)&nbsp;<a href=\"http://www.cse.psu.edu/~yul189/cmpsc431w/\" target=\"_blank\">[course website]</a>\r\n		<ul>\r\n			<li>Received 6.7/7 student evaluation</li>\r\n		</ul>\r\n		</li>\r\n		<li>Girlz Digital World: Fashion and Design in the Digital World (Summer 2013)</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>I recorded and uploaded one semester of my lectures on&nbsp;<a href=\"https://www.youtube.com/c/DatabasePsu\" target=\"_blank\">this YouTube channel</a>. Feel free to browse and subscribe!</p>\r\n'),
(131, 'lập trình', 2, '<p>lịch tr&igrave;nh gồma</p>\r\n'),
(132, 'Database Management ', 1, '<p>I have gained experience teaching the following courses:</p>\r\n\r\n<ul>\r\n	<li>Teaching Assitant\r\n	<ul>\r\n		<li>CMPSC 431W Database Management (Spring 2015)</li>\r\n		<li>CMPSC 465 Data Structures and Algorithms (Fall 2014)</li>\r\n		<li>CMPSC 122 Advanced Programming in C++ (Spring 2013)</li>\r\n		<li>CMPSC 101 Introduction to Programming in C++ (Fall 2012)</li>\r\n	</ul>\r\n	</li>\r\n	<li>Instructor\r\n	<ul>\r\n		<li>CMPSC 431W Database Management Systems (Fall 2015, Spring 2016, Fall 2016)&nbsp;<a href=\"http://www.cse.psu.edu/~yul189/cmpsc431w/\" target=\"_blank\">[course website]</a>\r\n		<ul>\r\n			<li>Received 6.7/7 student evaluation</li>\r\n		</ul>\r\n		</li>\r\n		<li>Girlz Digital World: Fashion and Design in the Digital World (Summer 2013)</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>I recorded and uploaded one semester of my lectures on&nbsp;<a href=\"https://www.youtube.com/c/DatabasePsu\" target=\"_blank\">this YouTube channel</a>. Feel free to browse and subscribe!</p>\r\n'),
(134, 'CMPSC 465 Data Structures and ', 3, '<ul>\r\n	<li>Instructor\r\n	<ul>\r\n		<li>CMPSC 431W Database Management Systems (Fall 2015, Spring 2016, Fall 2016)&nbsp;<a href=\"http://www.cse.psu.edu/~yul189/cmpsc431w/\" target=\"_blank\">[course website]</a>\r\n		<ul>\r\n			<li>Received 6.7/7 student evaluation</li>\r\n		</ul>\r\n		</li>\r\n		<li>Girlz Digital World: Fashion and Design in the Digital World (Summer 2013)</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>I recorded and uploaded one semester of my lectures on&nbsp;<a href=\"https://www.youtube.com/c/DatabasePsu\" target=\"_blank\">this YouTube channel</a>. Feel free to browse and subscribe!</p>\r\n'),
(135, 'CMPSC 122 Advanced Programming', 3, '<ul>\r\n	<li>Instructor\r\n	<ul>\r\n		<li>CMPSC 431W Database Management Systems (Fall 2015, Spring 2016, Fall 2016)&nbsp;<a href=\"http://www.cse.psu.edu/~yul189/cmpsc431w/\" target=\"_blank\">[course website]</a>\r\n		<ul>\r\n			<li>Received 6.7/7 student evaluation</li>\r\n		</ul>\r\n		</li>\r\n		<li>Girlz Digital World: Fashion and Design in the Digital World (Summer 2013)</li>\r\n	</ul>\r\n	</li>\r\n</ul>\r\n\r\n<p>I recorded and uploaded one semester of my lectures on&nbsp;<a href=\"https://www.youtube.com/c/DatabasePsu\" target=\"_blank\">this YouTube channel</a>. Feel free to browse and subscribe!</p>\r\n'),
(136, 'CMPSC 101 Introduction to Prog', 2, '<ul>\r\n	<li>CMPSC 101 Introduction to Programming in C++ (Fall 2012)</li>\r\n</ul>\r\n');

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `sinhvien`
--

CREATE TABLE `sinhvien` (
  `ma_sv` int(10) NOT NULL,
  `tensv` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `diachi` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `SĐT_sv` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `sinhvien`
--

INSERT INTO `sinhvien` (`ma_sv`, `tensv`, `diachi`, `SĐT_sv`) VALUES
(2, 'nguyen van b', 'Hà nội', 1212121212);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `tintuc`
--

CREATE TABLE `tintuc` (
  `ma_tt` int(10) NOT NULL,
  `tieudett` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `noidungtt` varchar(1000) COLLATE utf8_unicode_ci NOT NULL,
  `Ma_GV` int(10) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `tintuc`
--

INSERT INTO `tintuc` (`ma_tt`, `tieudett`, `noidungtt`, `Ma_GV`) VALUES
(1, 'Giới thiệu database maneger', 'Toán học là ngành nghiên cứu trừu tượng về những chủ đề như: lượng (các con số),[2] cấu trúc,[3] không gian, và sự thay đổi.[4][5][6] Các nhà toán học và triết học có nhiều quan điểm khác nhau về định nghĩa và phạm vi của toán học.[7][8]', 3),
(2, 'Giới Khóa Học Toán', 'giảng dạy chất lượng', 2);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  ADD PRIMARY KEY (`Ma_GV`);

--
-- Chỉ mục cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  ADD PRIMARY KEY (`ma_kh`);

--
-- Chỉ mục cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  ADD PRIMARY KEY (`ma_sv`);

--
-- Chỉ mục cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  ADD PRIMARY KEY (`ma_tt`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `giaovien`
--
ALTER TABLE `giaovien`
  MODIFY `Ma_GV` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;
--
-- AUTO_INCREMENT cho bảng `khoahoc`
--
ALTER TABLE `khoahoc`
  MODIFY `ma_kh` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=137;
--
-- AUTO_INCREMENT cho bảng `sinhvien`
--
ALTER TABLE `sinhvien`
  MODIFY `ma_sv` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=223;
--
-- AUTO_INCREMENT cho bảng `tintuc`
--
ALTER TABLE `tintuc`
  MODIFY `ma_tt` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=334;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
