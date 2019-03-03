-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2019 at 09:30 AM
-- Server version: 10.1.25-MariaDB
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `inventory_m_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `cart`
--

CREATE TABLE `cart` (
  `cart_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `cart`
--

INSERT INTO `cart` (`cart_id`, `user_id`) VALUES
(6, 1),
(3, 2),
(5, 4),
(4, 5),
(2, 6);

-- --------------------------------------------------------

--
-- Table structure for table `cart_items`
--

CREATE TABLE `cart_items` (
  `p_id` int(50) NOT NULL,
  `cart_id` int(11) NOT NULL,
  `quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `cat_id` int(11) NOT NULL,
  `cat_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`cat_id`, `cat_name`) VALUES
(1, 'Women\'s_Collection '),
(2, 'Electronics'),
(3, 'Gent\'s_Collection '),
(4, 'Watch_Collection');

-- --------------------------------------------------------

--
-- Table structure for table `product`
--

CREATE TABLE `product` (
  `p_id` int(50) NOT NULL,
  `p_name` varchar(30) NOT NULL,
  `p_description` varchar(30) NOT NULL,
  `cat_id` int(100) NOT NULL,
  `p_price` int(255) NOT NULL,
  `img` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `product`
--

INSERT INTO `product` (`p_id`, `p_name`, `p_description`, `cat_id`, `p_price`, `img`) VALUES
(1, 'Black_Jeans ', '28,30,32,34', 3, 700, 0),
(3, 'Polo_Shirt', 'S,M,L,XL', 3, 300, 0),
(4, 'Mobile', 'IPhone_X', 2, 80000, 0),
(5, 'Rolex', 'Black,White,Blue', 4, 32000, 0),
(6, 'Shari', 'Jamdani', 1, 7000, 0),
(7, 'Shirt', 'S,M,L,XL', 3, 300, 0),
(8, 'Pant', 'Black_Geans_style', 3, 650, 0),
(9, 'Laptop', 'Red', 2, 55000, 0),
(10, 'Black_jeans', '28,30,32,34', 3, 700, 0),
(11, 'Polo_Shirt', 'S,M,L,XL', 3, 300, 0),
(12, 'Polo_Shirt', 'S,M,L,XL', 3, 300, 0),
(13, 'Shirt', 'S,M,L,XL', 3, 700, 0),
(14, 'Polo_Shirt', 'S,M,L,XL', 3, 300, 0),
(15, 'Polo_Shirt', 'S,M,L,XL', 3, 300, 0),
(16, 'Black_jeans', '28,30,32,34', 3, 700, 0),
(17, 'Polo_Shirt', 'S,M,L,XL', 3, 300, 0),
(18, 'Laptop', 'Hp Probook 450 G2', 2, 55000, 0),
(19, 'Mobile', 'IPhone_X', 2, 80000, 0),
(20, 'Mobile', 'Samsang_X', 2, 60000, 0),
(21, 'Mobile', 'IPhone_7', 2, 50000, 0),
(22, 'Laptop', 'Windows pro', 2, 100000, 0),
(23, 'Mobile', 'Oppo', 2, 50000, 0),
(24, 'Mobile', 'Nokia_7', 2, 30000, 0),
(25, 'Mobile', 'Nokia_8', 2, 80000, 0),
(26, 'Shari', 'Green Jamdani', 1, 6000, 0),
(27, 'Shari', 'Golden Silk', 1, 5000, 0),
(28, 'Shari', 'Blue Silk', 1, 9000, 0),
(29, 'Shari', 'Red Jamdani', 1, 10000, 0),
(30, 'Shari', 'Megenda Jamdani', 1, 6000, 0),
(31, 'Shari', 'Blue Jamdani', 1, 7000, 0),
(32, 'Shari', 'Green Jamdani', 1, 6000, 0),
(33, 'Shari', 'Black Jamdani', 1, 4000, 0),
(34, 'Watch', 'Rolex', 4, 1500, 0),
(35, 'Watch', 'Couple Watch', 4, 2500, 0),
(36, 'Watch', 'Rolex', 4, 5000, 0),
(37, 'Watch', 'Seneva', 4, 1000, 0),
(38, 'Watch', 'Casio', 4, 3000, 0),
(39, 'Watch', 'Rolex', 4, 7000, 0),
(40, 'Watch', 'Vibo', 4, 1500, 0),
(41, 'Watch', 'Rolex', 4, 10000, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(30) NOT NULL,
  `user_address` varchar(30) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_password` varchar(50) NOT NULL,
  `user_mobile_no` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `user_address`, `user_email`, `user_password`, `user_mobile_no`) VALUES
(1, 'sakim_ahamed', 'dhaka', 'sakimahamed7@gmail.com', '1234', 1674155541),
(2, 'Miftahul_Jannat', 'Puran_Dhaka', 'oeshi2271@gmail.com', '1234', 1797288097),
(4, 'sakib', 'Noakhali', 'sakib@gmail.com', '12345', 1674155541),
(5, 'oeshi', 'Puran Dhaka', 'oeshi7@gmail.com', '1234', 654545632),
(6, 'Asik', 'Cumilla', 'asik@gmail.com', '1234', 2147483647);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `cart`
--
ALTER TABLE `cart`
  ADD PRIMARY KEY (`cart_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD KEY `cart_id` (`cart_id`),
  ADD KEY `p_id` (`p_id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`cat_id`);

--
-- Indexes for table `product`
--
ALTER TABLE `product`
  ADD PRIMARY KEY (`p_id`),
  ADD KEY `cat_id` (`cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `cart`
--
ALTER TABLE `cart`
  MODIFY `cart_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `cat_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `product`
--
ALTER TABLE `product`
  MODIFY `p_id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=42;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `cart`
--
ALTER TABLE `cart`
  ADD CONSTRAINT `cart_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `users` (`user_id`);

--
-- Constraints for table `cart_items`
--
ALTER TABLE `cart_items`
  ADD CONSTRAINT `cart_items_ibfk_1` FOREIGN KEY (`cart_id`) REFERENCES `cart` (`cart_id`),
  ADD CONSTRAINT `cart_items_ibfk_2` FOREIGN KEY (`p_id`) REFERENCES `product` (`p_id`);

--
-- Constraints for table `product`
--
ALTER TABLE `product`
  ADD CONSTRAINT `product_ibfk_1` FOREIGN KEY (`cat_id`) REFERENCES `category` (`cat_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
