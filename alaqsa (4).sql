-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 03:38 PM
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
(1, 'Bulbs category', 'uploads/bulbsCat.jpg'),
(2, 'Chandeliers category', 'uploads/chain+.jpg'),
(3, 'Sockets category', 'uploads/socket1.jpg'),
(4, 'Electronic Dev category', 'uploads/dev+.jpg'),
(10, 'Equipments', 'uploads/eq+.jpg'),
(11, 'Test Category', 'uploads/107077574_2659387587633242_4135250679822616572_n.jpg'),
(12, 'Mini_chaindeliers', 'uploads/mini+.jpg'),
(13, 'wires', 'uploads/wi+.jpg');

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
(62, '5w مصباح', 1, 5, 'uploads/bulb5watt.jpg', '  '),
(65, '10w مصباح', 1, 7, 'uploads/bulb10watt.jpg', ''),
(66, '20w مصباح', 1, 10, 'uploads/bulb20watt.jpg', ''),
(67, '40w مصباح', 1, 15, 'uploads/bulb40wa.jpg', ''),
(68, '30w مصباح', 1, 12, 'uploads/bulb30watt.jpg', ''),
(69, '50w مصباح', 1, 18, 'uploads/bulb50watt.jpg', ''),
(70, '60w مصباح', 1, 20, 'uploads/bulb60watt.jpg', ''),
(71, '2', 2, 130, 'uploads/chain2.jpg', ''),
(72, '1', 2, 120, 'uploads/chain1.jpg', ''),
(73, '3', 2, 189, 'uploads/chain3.jpg', ''),
(74, '4', 2, 190, 'uploads/chain8.jpg', ''),
(75, '5', 2, 200, 'uploads/chain11.jpg', ''),
(76, '6', 2, 150, 'uploads/chain10.jpg', ''),
(77, '7', 2, 220, 'uploads/chain5.jpg', ''),
(78, 'soc1', 3, 7, 'uploads/socket1.jpg', ''),
(79, 'soc2', 3, 12, 'uploads/soc2.jpg', ''),
(80, 'soc3', 3, 8, 'uploads/soc4.jpg', ''),
(81, 'dev1', 4, 40, 'uploads/dev1.jpg', ''),
(82, 'dev2', 4, 50, 'uploads/dev2.jpg', ''),
(83, 'dev3', 4, 60, 'uploads/dev3.jpg', ''),
(84, 'dev4', 4, 70, 'uploads/dev5.jpg', ''),
(85, 'dev5', 4, 45, 'uploads/dev6.jpg', ''),
(86, 'dev6', 4, 70, 'uploads/dev8.jpg', ''),
(87, 'dev7', 4, 80, 'uploads/dev9.jpg', ''),
(88, 'dev8', 4, 90, 'uploads/dev7.jpg', ''),
(89, 'eq1', 10, 60, 'uploads/eq1.jpg', ''),
(90, 'eq2', 10, 40, 'uploads/eq2.jpg', ''),
(91, 'eq3', 10, 70, 'uploads/eq3.jpg', ''),
(92, 'eq4', 10, 35, 'uploads/eq4.jpg', ''),
(93, 'mini1', 12, 70, 'uploads/mini1.jpg', ''),
(94, 'mini2', 12, 40, 'uploads/mini2.jpg', ''),
(95, 'mini3', 12, 65, 'uploads/mini3.jpg', ''),
(96, 'mini4', 12, 70, 'uploads/mini5.jpg', ''),
(97, 'mini5', 12, 50, 'uploads/mini7.jpg', ''),
(98, 'mini6', 12, 45, 'uploads/mini6.jpg', ''),
(99, 'wi1', 13, 110, 'uploads/wi2.jpg', ''),
(100, 'wi2', 13, 82, 'uploads/wi1.jpg', ''),
(101, 'wi3', 13, 15, 'uploads/wires 3.jpg', '');

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
(2, 'Abdallah', 'Abdallah@gmail.com', '12345'),
(6, 'newt', 'jacob@bro.com', '123');

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
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=378;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

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
  MODIFY `pro_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=102;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
