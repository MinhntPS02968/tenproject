-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Máy chủ: 127.0.0.1
-- Thời gian đã tạo: Th10 30, 2017 lúc 03:54 CH
-- Phiên bản máy phục vụ: 10.1.21-MariaDB
-- Phiên bản PHP: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
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

CREATE TABLE `categogy` (
  `categogy_id` int(100) NOT NULL,
  `categogy_name` varchar(500) NOT NULL,
  `categogy_status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `categogy`
--

INSERT INTO `categogy` (`categogy_id`, `categogy_name`, `categogy_status`) VALUES
(1, 'FPS', 1),
(2, 'MMO', 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `product`
--

CREATE TABLE `product` (
  `product_id` int(100) NOT NULL,
  `product_name` varchar(255) NOT NULL,
  `product_images` varchar(1000) NOT NULL,
  `description` varchar(1000) NOT NULL,
  `price` int(50) NOT NULL,
  `discount_price` int(50) NOT NULL,
  `quantity` int(100) NOT NULL,
  `category_id` int(100) NOT NULL,
  `status` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `product`
--

INSERT INTO `product` (`product_id`, `product_name`, `product_images`, `description`, `price`, `discount_price`, `quantity`, `category_id`, `status`) VALUES
(1, 'Fifa 18', '../view/images/product3.jpg', 'game bóng đá hay', 500000, 0, 15, 1, 1);

-- --------------------------------------------------------

--
-- Cấu trúc bảng cho bảng `user`
--

CREATE TABLE `user` (
  `user_id` int(100) NOT NULL,
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
  `role` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Đang đổ dữ liệu cho bảng `user`
--

INSERT INTO `user` (`user_id`, `full_name`, `username`, `password`, `phone`, `gender`, `birthday`, `email`, `address`, `avatar`, `pincode`, `role`) VALUES
(3, 'Nguyên Văn A', 'test1', 123456, 2147483647, 1, '2017-10-16', 'Agnuyen@gasdaw', '21312sdae2dw', '', 2341, 0);

--
-- Chỉ mục cho các bảng đã đổ
--

--
-- Chỉ mục cho bảng `categogy`
--
ALTER TABLE `categogy`
  ADD PRIMARY KEY (`categogy_id`);

--
-- Chỉ mục cho bảng `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`product_id`);

--
-- Chỉ mục cho bảng `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT cho các bảng đã đổ
--

--
-- AUTO_INCREMENT cho bảng `categogy`
--
ALTER TABLE `categogy`
  MODIFY `categogy_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT cho bảng `product`
--
ALTER TABLE `product`
  MODIFY `product_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT cho bảng `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
