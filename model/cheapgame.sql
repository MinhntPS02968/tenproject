-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1:3306
-- Thời gian đã tạo: Th10 30, 2017 lúc 09:35 AM
-- Phiên bản máy phục vụ: 5.7.19
-- Phiên bản PHP: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Cơ sở dữ liệu: `cheapgame`
--

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `categogy`
--

DROP TABLE IF EXISTS `categogy`;
CREATE TABLE IF NOT EXISTS `categogy` (
  `categogy_id` int(100) NOT NULL AUTO_INCREMENT,
  `categogy_name` varchar(500) NOT NULL,
  `categogy_status` int(10) NOT NULL,
  PRIMARY KEY (`categogy_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

DROP TABLE IF EXISTS `product`;
CREATE TABLE IF NOT EXISTS `product` (
  `product_id` int(100) NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) NOT NULL,
  `product_images` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(50) NOT NULL,
  `discount_price` int(50) NOT NULL,
  `quantity` int(100) NOT NULL,
  `category_id` int(100) NOT NULL,
  `status` int(10) NOT NULL,
  PRIMARY KEY (`product_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(100) NOT NULL AUTO_INCREMENT,
  `full_name` varchar(500) NOT NULL,
  `username` varchar(500) NOT NULL,
  `password` int(50) NOT NULL,
  `phone` int(20) NOT NULL,
  `gender` int(10) NOT NULL,
  `birthday` date NOT NULL,
  `email` varchar(500) NOT NULL,
  `address` varchar(1000) NOT NULL,
  `avatar` varchar(1000) NOT NULL,
  `pincode` int(4) NOT NULL,
  `role` int(10) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
