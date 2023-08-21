-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 21, 2023 at 09:55 AM
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
-- Table structure for table `intend`
--

CREATE TABLE `intend` (
  `ID` int(30) NOT NULL,
  `branch` varchar(30) NOT NULL,
  `created_date` date NOT NULL,
  `created_by` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intend`
--

INSERT INTO `intend` (`ID`, `branch`, `created_date`, `created_by`) VALUES
(1, 'mohanur road', '2023-08-17', 'kumaran'),
(12, 'salem road', '2023-08-19', 'Kumaran'),
(13, 'salem road', '2023-08-19', 'Kumaran'),
(14, 'salem road', '2023-08-19', 'Kumaran'),
(15, 'salem road', '2023-08-19', 'Kumaran'),
(16, 'salem road', '2023-08-19', 'Kumaran'),
(17, 'salem road', '2023-08-19', 'Kumaran'),
(18, 'salem road', '2023-08-19', 'Kumaran'),
(19, 'salem road', '2023-08-19', 'Kumaran'),
(20, 'salem road', '2023-08-19', 'Kumaran'),
(21, 'salem road', '2023-08-19', 'Kumaran'),
(22, 'salem road', '2023-08-19', 'Kumaran'),
(23, 'salem road', '2023-08-19', 'Kumaran'),
(24, 'salem road', '2023-08-19', 'Kumaran'),
(25, 'salem road', '2023-08-19', 'Kumaran'),
(26, 'salem road', '2023-08-19', 'Kumaran'),
(27, 'salem road', '2023-08-21', 'Kumaran'),
(28, 'salem road', '2023-08-21', 'Kumaran');

-- --------------------------------------------------------

--
-- Table structure for table `intend_items`
--

CREATE TABLE `intend_items` (
  `ID` int(30) NOT NULL,
  `intend_id` int(30) NOT NULL,
  `product_id` int(30) NOT NULL,
  `product_quantity` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `intend_items`
--

INSERT INTO `intend_items` (`ID`, `intend_id`, `product_id`, `product_quantity`) VALUES
(1, 1, 1, 23),
(17, 3, 7, 52),
(18, 3, 9, 63),
(20, 25, 9, 84),
(21, 25, 7, 41),
(22, 26, 1, 85),
(23, 26, 7, 74),
(24, 27, 10, 84),
(25, 27, 9, 41),
(26, 27, 5, 51),
(27, 28, 5, 52);

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
(10, 'sakthi', 'de9941d863a2969104e2410b7c03a673', 'paramathi road', 'warehouse', 'Sakthii');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `intend`
--
ALTER TABLE `intend`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `intend_items`
--
ALTER TABLE `intend_items`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `ID` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
