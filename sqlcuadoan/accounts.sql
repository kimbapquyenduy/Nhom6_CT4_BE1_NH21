-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3308
-- Thời gian đã tạo: Th1 06, 2022 lúc 08:17 AM
-- Phiên bản máy phục vụ: 5.7.28
-- Phiên bản PHP: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `nhom6`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `accounts`
--

DROP TABLE IF EXISTS `accounts`;
CREATE TABLE IF NOT EXISTS `accounts` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `role` int(11) NOT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=MyISAM AUTO_INCREMENT=19 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Đang đổ dữ liệu cho bảng `accounts`
--

INSERT INTO `accounts` (`userid`, `username`, `password`, `role`) VALUES
(1, 'admin', '827ccb0eea8a706c4c34a16891f84e7b', 1),
(2, 'user1', 'b0baee9d279d34fa1dfd71aadb908c3f', 2),
(3, 'User3', '934b535800b1cba8f96a5d72f72f1611', 2),
(4, 'asd', '22af645d1859cb5ca6da0c484f1f37ea', 2),
(5, 'Duy ', '2be9bd7a3434f7038ca27d1918de58bd', 2),
(13, 'sss', 'c20ad4d76fe97759aa27a0c99bff6710', 2),
(9, 'teo', '698d51a19d8a121ce581499d7b701668', 2),
(10, 'zzz', '8277e0910d750195b448797616e091ad', 2),
(11, 'thongthao', '182be0c5cdcd5072bb1864cdee4d3d6e', 2),
(16, 'test', 'c4ca4238a0b923820dcc509a6f75849b', 2),
(17, 'nhom6', 'c4ca4238a0b923820dcc509a6f75849b', 2);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
