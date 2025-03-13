-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 13, 2023 at 10:39 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `alaqsa`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_data`
--

CREATE TABLE `admin_data` (
  `id` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `admin_data`
--

INSERT INTO `admin_data` (`id`, `username`, `password`) VALUES
(1, 'A_SADMIN', '11223344');

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `cart_name` varchar(100) NOT NULL,
  `cart_price` int(11) NOT NULL,
  `cart_image` varchar(100) NOT NULL,
  `cart_quantity` int(11) NOT NULL,
  `sub_total` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `cart_name`, `cart_price`, `cart_image`, `cart_quantity`, `sub_total`) VALUES
(1, 'light bulb', 200, 'bulb.jpeg', 2, 400),
(2, 'bulbz', 150, 'uploads/3.jpeg', 3, 450),
(341, 'news', 213, 'qwe', 6, 0);

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(100) NOT NULL,
  `cat_img` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`, `cat_img`) VALUES
(1, 'Bulbs category', 'uploads/7.jpeg'),
(2, 'Chandeliers category', './img/bulb.jpeg'),
(3, 'Sockets category', './img/bulb.jpeg'),
(4, 'Electronic Dev category', './img/bulb.jpeg'),
(10, 'equip', 'uploads/319572317_661969178715181_8666939177163987987_n.jpg'),
(11, 'NEWS PAPER', 'uploads/3.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `modproducttb`
--

CREATE TABLE `modproducttb` (
  `id` int(11) NOT NULL,
  `modproduct_name` varchar(25) NOT NULL,
  `modproduct_price` float DEFAULT NULL,
  `modproduct_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `modproducttb`
--

INSERT INTO `modproducttb` (`id`, `modproduct_name`, `modproduct_price`, `modproduct_image`) VALUES
(1, 'REDMI Bulb Pro', 165, './img/bulb.jpeg'),
(2, 'SAMSUNG Bulb Pro', 235, './img/bulb.jpeg'),
(3, 'POP3 Bulb Pro', 130, './img/bulb.jpeg'),
(4, 'ASUS Bulb Pro', 210, './img/bulb.jpeg'),
(5, 'ROG3 Bulb Pro', 189, './img/bulb.jpeg'),
(6, 'LENOVO Bulb Pro', 399, './img/bulb.jpeg'),
(7, 'HAWAUE Bulb Pro', 99, './img/bulb.jpeg'),
(8, 'SONY Bulb Pro', 44, './img/bulb.jpeg'),
(9, 'SAM Bulb Pro', 499, './img/bulb.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `newproducttb`
--

CREATE TABLE `newproducttb` (
  `id` int(11) NOT NULL,
  `newproduct_name` varchar(25) NOT NULL,
  `newproduct_price` float DEFAULT NULL,
  `newproduct_image` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `newproducttb`
--

INSERT INTO `newproducttb` (`id`, `newproduct_name`, `newproduct_price`, `newproduct_image`) VALUES
(1, 'newREDMI Bulb Pro', 265, './img/bulb.jpeg'),
(2, 'newSAMSUNG Bulb Pro', 335, './img/bulb.jpeg'),
(3, 'newPOP3 Bulb Pro', 230, './img/bulb.jpeg'),
(4, 'newASUS Bulb Pro', 310, './img/bulb.jpeg'),
(5, 'newROG3 Bulb Pro', 289, './img/bulb.jpeg'),
(6, 'newLENOVO Bulb Pro', 499, './img/bulb.jpeg'),
(7, 'newHAWAUE Bulb Pro', 199, './img/bulb.jpeg'),
(8, 'newSONY Bulb Pro', 144, './img/bulb.jpeg');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `pro_id` int(11) NOT NULL,
  `pro_name` varchar(100) DEFAULT NULL,
  `cat_id` int(1) DEFAULT NULL,
  `pro_price` int(11) DEFAULT NULL,
  `pro_thumb` varchar(100) DEFAULT NULL,
  `pro_desc` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`pro_id`, `pro_name`, `cat_id`, `pro_price`, `pro_thumb`, `pro_desc`) VALUES
(1, 'd1 Bulb Pro', 1, 23, 'uploads/6.jpeg', '      '),
(2, 'd2 Bulb Pro', 1, 11, './img/bulb.jpeg', ''),
(3, 'd3 Bulb Pro', 1, 60, './img/bulb.jpeg', ''),
(5, 'd5 Bulb Pro', 1, 50, './img/bulb.jpeg', ''),
(6, 'd6 Bulb Pro', 1, 99, './img/bulb.jpeg', ''),
(7, 'd7 Bulb Pro', 1, 43, './img/bulb.jpeg', ''),
(8, 'd8 Bulb Pro', 1, 69, './img/bulb.jpeg', ''),
(9, 'f1 Bulb Pro', 2, 23, './img/bulb.jpeg', ''),
(10, 'f2 Bulb Pro', 2, 11, './img/bulb.jpeg', ''),
(11, 'f3 Bulb Pro', 2, 60, './img/bulb.jpeg', ''),
(12, 'f4 Bulb Pro', 2, 40, './img/bulb.jpeg', ''),
(13, 'f5 Bulb Pro', 2, 50, './img/bulb.jpeg', ''),
(14, 'f6 Bulb Pro', 2, 99, './img/bulb.jpeg', ''),
(15, 'f7 Bulb Pro', 2, 43, './img/bulb.jpeg', ''),
(16, 'f8 Bulb Pro', 2, 69, './img/bulb.jpeg', ''),
(17, 'a1 Bulb Pro', 3, 23, './img/bulb.jpeg', ''),
(18, 'a2 Bulb Pro', 3, 11, './img/bulb.jpeg', ''),
(19, 'a3 Bulb Pro', 3, 60, './img/bulb.jpeg', ''),
(20, 'a4 Bulb Pro', 3, 40, './img/bulb.jpeg', ''),
(21, 'a5 Bulb Pro', 3, 50, './img/bulb.jpeg', ''),
(22, 'a6 Bulb Pro', 3, 99, './img/bulb.jpeg', ''),
(23, 'a7 Bulb Pro', 3, 43, './img/bulb.jpeg', ''),
(24, 'a8 Bulb Pro', 3, 69, './img/bulb.jpeg', ''),
(25, 'b1 Bulb Pro', 4, 23, './img/bulb.jpeg', ''),
(26, 'b2 Bulb Pro', 4, 11, './img/bulb.jpeg', ''),
(27, 'b3 Bulb Pro', 4, 60, './img/bulb.jpeg', ''),
(28, 'b4 Bulb Pro', 4, 40, './img/bulb.jpeg', ''),
(29, 'b5 Bulb Pro', 4, 50, './img/bulb.jpeg', ''),
(30, 'b6 Bulb Pro', 4, 99, './img/bulb.jpeg', ''),
(31, 'b7 Bulb Pro', 4, 43, './img/bulb.jpeg', ''),
(32, 'b8 Bulb Pro', 4, 69, './img/bulb.jpeg', ''),
(41, 'v1 Bulb Pro', 6, 23, './img/bulb.jpeg', ''),
(42, 'v2 Bulb Pro', 6, 11, './img/bulb.jpeg', ''),
(43, 'v3 Bulb Pro', 6, 60, './img/bulb.jpeg', ''),
(44, 'v4 Bulb Pro', 6, 40, './img/bulb.jpeg', ''),
(45, 'v5 Bulb Pro', 6, 50, './img/bulb.jpeg', ''),
(46, 'v6 Bulb Pro', 6, 99, './img/bulb.jpeg', ''),
(47, 'v7 Bulb Pro', 6, 43, './img/bulb.jpeg', ''),
(48, 'v8 Bulb Pro', 6, 69, './img/bulb.jpeg', ''),
(49, 'x1 Bulb Pro', 7, 23, './img/bulb.jpeg', ''),
(50, 'x2 Bulb Pro', 7, 11, './img/bulb.jpeg', ''),
(51, 'x3 Bulb Pro', 7, 60, './img/bulb.jpeg', ''),
(52, 'x4 Bulb Pro', 7, 40, './img/bulb.jpeg', ''),
(53, 'x5 Bulb Pro', 7, 50, './img/bulb.jpeg', ''),
(54, 'x6 Bulb Pro', 7, 99, './img/bulb.jpeg', ''),
(55, 'x7 Bulb Pro', 7, 43, './img/bulb.jpeg', ''),
(56, 'x8 Bulb Pro', 7, 69, './img/bulb.jpeg', ''),
(57, 'NewP', 3, 699, 'uploads/7.jpeg', 'nice perfection'),
(58, 'adv', 10, 123, 'uploads/Zugpsitze_mountain.jpg', 'asvjadbvu'),
(59, 'bnew', 10, 812, 'uploads/7.jpeg', 'sajcb'),
(60, 'paper1', 11, 300, 'uploads/6.jpeg', 'asdlkvnasdlvjn'),
(61, 'svn ', 11, 123, 'uploads/319572317_661969178715181_8666939177163987987_n.jpg', 'askcvnlasjvn');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_ID` int(11) NOT NULL,
  `Username` varchar(100) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_ID`, `Username`, `Email`, `password`) VALUES
(1, 'Salah', 'salah@gmail.com', '12345'),
(2, 'Abdallah', 'Abdallah@gmail.com', '12345');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_data`
--
ALTER TABLE `admin_data`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `modproducttb`
--
ALTER TABLE `modproducttb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newproducttb`
--
ALTER TABLE `newproducttb`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`pro_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_data`
--
ALTER TABLE `admin_data`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=342;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `modproducttb`
--
ALTER TABLE `modproducttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `newproducttb`
--
ALTER TABLE `newproducttb`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=62;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
