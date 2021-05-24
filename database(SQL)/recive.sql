-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 09:39 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 7.3.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db`
--

-- --------------------------------------------------------

--
-- Table structure for table `recive`
--

CREATE TABLE `recive` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `requirement` varchar(250) NOT NULL,
  `address` varchar(250) NOT NULL,
  `mobile` int(11) NOT NULL,
  `code` varchar(250) NOT NULL,
  `test1` varchar(250) NOT NULL,
  `test2` varchar(250) NOT NULL,
  `test3` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `recive`
--

INSERT INTO `recive` (`id`, `name`, `requirement`, `address`, `mobile`, `code`, `test1`, `test2`, `test3`) VALUES
(1, 'v1 vedant', 'wewed', 'asfaf', 231231, '60a41a5803f3b', '60a40dfd1aa55', '60a40edecf734', 1),
(10, 'n5', 'ffsfff', 'sdfgsdfsdf', 3243214, '60a41af7a8152', '60a40d4bd0aa8', '60a40d4bd0aa8', 0),
(14, 'Naman Panday', 'Plasma', 'Sonia Vihar, Delhi', 987456321, '60aab9912ca19', '60a40dfd1aa55', '60a40edecf734', 1);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `recive`
--
ALTER TABLE `recive`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `recive`
--
ALTER TABLE `recive`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
