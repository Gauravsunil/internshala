-- phpMyAdmin SQL Dump
-- version 4.9.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2020 at 06:18 AM
-- Server version: 10.4.10-MariaDB
-- PHP Version: 7.3.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intern`
--

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `pid` int(11) NOT NULL,
  `name` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `price` int(11) DEFAULT NULL,
  `type` varchar(20) COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`pid`, `name`, `price`, `type`) VALUES
(1, 'Dosa', 60, 'veg'),
(2, 'Rajma Rice', 50, 'veg'),
(3, 'Aloo Sabzi', 70, 'veg'),
(4, 'Kaadi Rice', 40, 'veg'),
(5, 'Saahi Paneer', 110, 'veg'),
(6, 'Daal Makhni', 90, 'veg'),
(7, 'Chhole', 75, 'veg'),
(8, 'Kadhayi Chicken', 250, 'non veg'),
(9, 'Lemon Chicken', 280, 'non veg'),
(10, 'Fried Chicken', 200, 'non veg'),
(11, 'Chicken Briyani', 180, 'non veg'),
(12, 'Mutton', 320, 'non veg'),
(13, 'Gulab Jamun', 10, 'veg'),
(14, 'Tandoori Chicken', 350, 'non veg'),
(15, 'Chicken pakode', 145, 'non veg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `email` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `password` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `contact` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `city` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `role` varchar(255) COLLATE latin1_bin DEFAULT NULL,
  `type` varchar(20) COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `contact`, `city`, `role`, `type`) VALUES
(11, 'vishal', 'vishal1489@gmail.com', '654321', '8569854785', 'Sonipat', 'restaurent', 'veg'),
(12, 'gaurav', 'gaurav123@gmail.com', '123456', '8523645123', 'Delhi', 'customer', 'veg');

-- --------------------------------------------------------

--
-- Table structure for table `users_items`
--

CREATE TABLE `users_items` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `item_id` int(11) NOT NULL,
  `status` enum('added to cart','confirmed') COLLATE latin1_bin DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_bin;

--
-- Dumping data for table `users_items`
--

INSERT INTO `users_items` (`id`, `user_id`, `item_id`, `status`) VALUES
(19, 7, 2, 'confirmed'),
(20, 7, 3, 'confirmed'),
(21, 7, 0, 'confirmed'),
(22, 7, 0, 'confirmed'),
(23, 7, 1, 'confirmed'),
(24, 7, 8, 'confirmed'),
(26, 7, 7, 'confirmed'),
(27, 13, 5, 'added to cart'),
(28, 12, 6, 'confirmed'),
(29, 12, 3, 'confirmed'),
(30, 12, 2, 'confirmed'),
(31, 12, 4, 'confirmed'),
(32, 12, 11, 'confirmed'),
(34, 12, 1, 'confirmed');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`pid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users_items`
--
ALTER TABLE `users_items`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `pid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users_items`
--
ALTER TABLE `users_items`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
