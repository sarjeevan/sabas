-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 09, 2023 at 04:10 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sabas`
--

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `ID` int(30) NOT NULL,
  `branch_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `branch`
--

INSERT INTO `branch` (`ID`, `branch_name`) VALUES
(1, 'mohanur road'),
(2, 'paramathi road'),
(4, 'salem road');

-- --------------------------------------------------------

--
-- Table structure for table `intend`
--

CREATE TABLE `intend` (
  `ID` int(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `created_date` date NOT NULL,
  `process_date` date DEFAULT NULL,
  `deliver_date` date DEFAULT NULL,
  `received_date` date DEFAULT NULL,
  `created_by` varchar(30) NOT NULL,
  `processed_by` varchar(30) DEFAULT NULL,
  `delivered_by` varchar(30) DEFAULT NULL,
  `received_by` varchar(30) DEFAULT NULL,
  `status` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intend`
--

INSERT INTO `intend` (`ID`, `branch`, `created_date`, `process_date`, `deliver_date`, `received_date`, `created_by`, `processed_by`, `delivered_by`, `received_by`, `status`) VALUES
(1, 'mohanur road', '2023-08-17', '2023-09-08', '2023-09-09', '2023-09-09', 'kumaran', '10', '10', '1', 'recieve'),
(25, 'salem road', '2023-08-19', '2023-09-09', '2023-09-09', '2023-09-09', 'Kumaran', '10', '10', '1', 'recieve'),
(26, 'salem road', '2023-08-19', '2023-09-08', '2023-09-09', NULL, 'Kumaran', '10', '10', NULL, 'deliver'),
(27, 'salem road', '2023-08-21', '2023-09-08', '2023-09-09', '2023-09-09', 'Kumaran', '10', '10', '1', 'recieve'),
(28, 'salem road', '2023-08-21', '2023-09-07', '2023-09-09', NULL, 'Kumaran', NULL, '10', NULL, 'deliver'),
(29, 'salem road', '2023-08-22', '2023-09-07', NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'process'),
(30, 'salem road', '2023-08-22', '2023-09-07', NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'process'),
(31, 'salem road', '2023-08-22', '2023-09-07', NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'process'),
(32, 'salem road', '2023-08-22', '2023-09-07', NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'process'),
(33, 'salem road', '2023-08-22', '2023-09-07', NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'process'),
(34, 'salem road', '2023-08-22', '2023-09-07', NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'process'),
(35, 'salem road', '2023-08-23', '2023-09-07', NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'process'),
(36, 'salem road', '2023-08-23', '2023-09-09', NULL, NULL, 'Kumaran', '10', NULL, NULL, 'process'),
(37, 'salem road', '2023-08-23', '2023-09-09', '2023-09-09', NULL, 'Kumaran', '10', '10', NULL, 'deliver'),
(38, 'salem road', '2023-08-23', '2023-09-09', '2023-09-09', NULL, 'Kumaran', '10', '10', NULL, 'deliver'),
(39, 'salem road', '2023-08-23', '2023-09-09', '2023-09-09', NULL, 'Kumaran', '10', '10', NULL, 'deliver'),
(40, 'salem road', '2023-08-23', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(41, 'salem road', '2023-08-23', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(43, 'salem road', '2023-08-24', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(45, 'salem road', '2023-08-24', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(46, 'salem road', '2023-08-24', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(47, 'salem road', '2023-08-24', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(48, 'salem road', '2023-08-24', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(49, 'salem road', '2023-08-24', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(50, 'salem road', '2023-08-24', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(51, 'salem road', '2023-08-24', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(52, 'salem road', '2023-08-24', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(53, 'salem road', '2023-08-24', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(54, 'salem road', '2023-08-24', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(55, 'salem road', '2023-08-24', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(56, 'salem road', '2023-08-24', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(57, 'salem road', '2023-08-24', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(61, 'salem road', '2023-08-25', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(62, 'salem road', '2023-08-25', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(63, 'salem road', '2023-08-25', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new'),
(65, 'salem road', '2023-08-29', NULL, NULL, NULL, 'Kumaran', NULL, NULL, NULL, 'new');

-- --------------------------------------------------------

--
-- Table structure for table `intend_items`
--

CREATE TABLE `intend_items` (
  `ID` int(30) NOT NULL,
  `intend_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `product_quantity` int(10) NOT NULL,
  `deliver_quantity` int(30) NOT NULL,
  `received_quantity` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intend_items`
--

INSERT INTO `intend_items` (`ID`, `intend_id`, `product_id`, `product_quantity`, `deliver_quantity`, `received_quantity`) VALUES
(1, 1, 1, 23, 20, 20),
(20, 25, 9, 84, 45, 45),
(21, 25, 7, 41, 44, 44),
(22, 26, 1, 85, 80, 0),
(23, 26, 7, 74, 52, 0),
(24, 27, 10, 84, 50, 50),
(25, 27, 9, 41, 30, 30),
(26, 27, 5, 51, 40, 40),
(27, 28, 5, 52, 20, 0),
(28, 29, 1, 23, 0, 0),
(29, 29, 2, 34, 0, 0),
(30, 29, 4, 33, 0, 0),
(31, 29, 8, 444, 0, 0),
(32, 29, 5, 55, 0, 0),
(33, 29, 7, 55, 0, 0),
(34, 30, 1, 23, 0, 0),
(35, 30, 2, 34, 0, 0),
(36, 30, 4, 33, 0, 0),
(37, 30, 8, 444, 0, 0),
(38, 30, 5, 55, 0, 0),
(39, 30, 7, 55, 0, 0),
(40, 31, 1, 23, 0, 0),
(41, 31, 2, 34, 0, 0),
(42, 31, 4, 33, 0, 0),
(43, 31, 8, 444, 0, 0),
(44, 31, 5, 55, 0, 0),
(45, 31, 7, 55, 0, 0),
(46, 32, 1, 23, 0, 0),
(47, 32, 2, 34, 0, 0),
(48, 32, 4, 33, 0, 0),
(49, 32, 8, 444, 0, 0),
(50, 32, 5, 55, 0, 0),
(51, 32, 7, 55, 0, 0),
(52, 33, 1, 32, 0, 0),
(53, 34, 7, 43, 0, 0),
(54, 34, 10, 54, 0, 0),
(55, 35, 1, 34, 0, 0),
(56, 36, 1, 34, 30, 0),
(57, 36, 4, 34, 30, 0),
(58, 37, 2, 23, 20, 0),
(59, 37, 7, 34, 20, 0),
(60, 38, 1, 55, 40, 0),
(61, 39, 4, 34, 25, 0),
(62, 40, 4, 34, 0, 0),
(63, 41, 1, 34, 0, 0),
(65, 43, 5, 66, 0, 0),
(67, 45, 4, 55, 0, 0),
(68, 46, 2, 44, 0, 0),
(69, 47, 7, 44, 0, 0),
(70, 48, 10, 50, 0, 0),
(71, 49, 1, 45, 0, 0),
(72, 50, 1, 66, 0, 0),
(73, 51, 8, 100, 0, 0),
(74, 52, 10, 90, 0, 0),
(75, 53, 7, 90, 0, 0),
(76, 54, 5, 100, 0, 0),
(77, 55, 5, 200, 0, 0),
(78, 56, 2, 10, 0, 0),
(79, 57, 2, 15, 0, 0),
(80, 61, 2, 34, 0, 0),
(81, 62, 1, 45, 0, 0),
(82, 63, 7, 56, 0, 0),
(83, 65, 1, 45, 0, 0),
(84, 65, 7, 34, 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `ID` int(30) NOT NULL,
  `code` varchar(100) NOT NULL,
  `product_name` varchar(30) NOT NULL,
  `quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`ID`, `code`, `product_name`, `quantity`) VALUES
(1, '1000', 'Samosa', 50),
(2, '1001', 'Cutlet', 51),
(3, '1002\r\n', 'Puffs', 520),
(4, '1003', 'Cake', 60),
(5, '1004', 'Bread', 74),
(6, '1005', 'Rusk', 63),
(7, '1006', 'Mixture', 65),
(8, '1007', 'Chips', 52),
(9, '1008', 'Laddu', 96),
(10, '1009', 'Mysorepak', 66);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `ID` int(30) NOT NULL,
  `username` varchar(30) NOT NULL,
  `password` varchar(100) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `usertype` varchar(30) NOT NULL,
  `display_name` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`ID`, `username`, `password`, `branch`, `usertype`, `display_name`) VALUES
(1, 'kumaran', '31b22b342867f11e3ae5009ceee51093', 'salem road', 'cashier', 'Kumaran'),
(2, 'sarjeevan', 'f9d70fbf55b95894b900cc9905d6744d', 'mohanur road', 'admin', 'Sarjeevan'),
(9, 'monish', 'a6bdefa6b9490fb7589cb58d7a174d0d', 'mohanur road', 'manufacturing', 'Monish'),
(10, 'sakthi', 'de9941d863a2969104e2410b7c03a673', 'paramathi road', 'warehouse', 'Sakthi');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `intend`
--
ALTER TABLE `intend`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `intend_items`
--
ALTER TABLE `intend_items`
  ADD PRIMARY KEY (`ID`),
  ADD KEY `intend` (`intend_id`),
  ADD KEY `product` (`product_id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `branch`
--
ALTER TABLE `branch`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `intend`
--
ALTER TABLE `intend`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `intend_items`
--
ALTER TABLE `intend_items`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=85;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
