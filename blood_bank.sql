-- phpMyAdmin SQL Dump
-- version 4.4.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2021 at 06:37 PM
-- Server version: 5.6.26
-- PHP Version: 5.6.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blood_bank`
--
CREATE DATABASE IF NOT EXISTS `blood_bank` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `blood_bank`;

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE IF NOT EXISTS `login` (
  `user_name` varchar(50) NOT NULL,
  `role` varchar(20) NOT NULL,
  `password` text NOT NULL,
  `is_first_login` tinyint(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`user_name`, `role`, `password`, `is_first_login`) VALUES
('abc@gmail.com', 'BLOOD_BANK', '202cb962ac59075b964b07152d234b70', 1),
('nandan@gmail.com', 'CUSTOMER', '202cb962ac59075b964b07152d234b70', 1),
('s.upadhya@yahoo.com', 'CUSTOMER', '202cb962ac59075b964b07152d234b70', 1),
('sanju@gmail.com', 'CUSTOMER', 'b24331b1a138cde62aa1f679164fc62f', 1),
('shankra@gmail.com', 'CUSTOMER', '202cb962ac59075b964b07152d234b70', 1),
('sidarth997255490@gmail.com', 'CUSTOMER', 'e155be76d263cc7b9e5301afe8c90e45', 1),
('suryanarayanasupadhya2000@gmail.com', 'CUSTOMER', 'b24331b1a138cde62aa1f679164fc62f', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `email` varchar(50) NOT NULL,
  `mobile_number` bigint(20) NOT NULL,
  `first_name` text NOT NULL,
  `last_name` text NOT NULL,
  `dob` text NOT NULL,
  `adderss` text NOT NULL,
  `blood_group` varchar(3) NOT NULL,
  `gender` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`email`, `mobile_number`, `first_name`, `last_name`, `dob`, `adderss`, `blood_group`, `gender`) VALUES
('nandan@gmail.com', 987654310, 'Nandan ', 'N', '2000-03-15', 'goutor | rippanpete | Karnataka | India | 577426', 'AB+', 'male'),
('s.upadhya@yahoo.com', 9342236601, 'Surya', 'S', '2000-06-14', 'Hosudi | Shivamogga | karnataka | india | 577222', 'A+', 'male'),
('sanju@gmail.com', 987654321, 'sanju', 's', '2000-06-22', 'kote road | shimoga | Karnataka | India | 577202', 'B-', 'male'),
('shankra@gmail.com', 9876542345, 'Shankar', 'S', '1998-01-01', 'Hosudi | Shimoga | Karnataka | India | 577222', 'O+', 'male'),
('sidarth997255490@gmail.com', 8618759590, 'siddarth', 'y k', '2000-06-22', 'koteroad | shimoga | Karnataka | India | 577202', 'O+', 'male'),
('suryanarayanasupadhya2000@gmail.com', 987654310, 'Suryanarayana B-', 'Upadhya', '2021-09-22', 'Hosudi | Shimoga | KARNATAKA | India | 577222', 'A+', 'male');

-- --------------------------------------------------------

--
-- Table structure for table `user_details`
--

CREATE TABLE IF NOT EXISTS `user_details` (
  `id` int(11) NOT NULL,
  `email` varchar(50) NOT NULL,
  `height` text NOT NULL,
  `weight` int(11) NOT NULL,
  `blood_pressure` text NOT NULL,
  `alcohol_consumed` tinyint(1) NOT NULL,
  `had_sufficient_food` tinyint(1) NOT NULL,
  `had_enough_sleep` tinyint(1) NOT NULL,
  `suffer_from_any_diseases` tinyint(1) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user_details`
--

INSERT INTO `user_details` (`id`, `email`, `height`, `weight`, `blood_pressure`, `alcohol_consumed`, `had_sufficient_food`, `had_enough_sleep`, `suffer_from_any_diseases`, `created_at`) VALUES
(1, 'shankra@gmail.com', '180', 80, '110/80', 0, 0, 0, 0, '2021-08-23 16:00:52'),
(2, 'shankra@gmail.com', '182', 50, '130/80', 0, 0, 0, 0, '2021-08-23 16:00:52'),
(3, 'shankra@gmail.com', '182', 50, '115/90', 0, 0, 0, 0, '2021-08-23 16:00:52'),
(4, 'shankra@gmail.com', '182', 50, '125/80', 0, 1, 1, 0, '2021-08-23 16:00:52'),
(5, 'shankra@gmail.com', '123', 123, '130/80', 0, 1, 1, 0, '2021-08-23 16:00:52'),
(6, 's.upadhya@yahoo.com', '153', 85, '', 0, 1, 1, 0, '2021-08-23 16:00:52'),
(8, 'nandan@gmail.com', '179', 81, '130/80', 1, 1, 1, 0, '2021-08-27 15:04:21'),
(9, 'nandan@gmail.com', '179', 81, '130/80', 1, 1, 1, 0, '2021-08-27 15:04:21'),
(10, 'nandan@gmail.com', '179', 81, '130/80', 1, 1, 1, 0, '2021-08-27 15:04:21'),
(11, 's.upadhya@yahoo.com', '180', 80, '130/80', 0, 1, 1, 0, '2021-08-26 15:27:40'),
(12, 's.upadhya@yahoo.com', '180', 80, '130/80', 0, 1, 1, 0, '2021-08-26 15:27:40'),
(13, 'suryanarayanasupadhya2000@gmail.com', '180', 80, '130/80', 0, 1, 1, 0, '2021-09-21 16:24:17'),
(14, 'sanju@gmail.com', '67', 55, '120/80', 0, 1, 1, 0, '2021-09-22 05:26:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`user_name`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD UNIQUE KEY `email_2` (`email`),
  ADD KEY `email` (`email`);

--
-- Indexes for table `user_details`
--
ALTER TABLE `user_details`
  ADD PRIMARY KEY (`id`),
  ADD KEY `email` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `user_details`
--
ALTER TABLE `user_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=15;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `user_details`
--
ALTER TABLE `user_details`
  ADD CONSTRAINT `user_details_ibfk_1` FOREIGN KEY (`email`) REFERENCES `login` (`user_name`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
