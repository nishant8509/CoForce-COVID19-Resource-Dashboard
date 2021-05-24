-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2021 at 09:40 AM
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
-- Table structure for table `usertable`
--

CREATE TABLE `usertable` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `code` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `userid` int(11) NOT NULL,
  `role` varchar(250) NOT NULL,
  `test1` varchar(250) NOT NULL,
  `test2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertable`
--

INSERT INTO `usertable` (`id`, `name`, `email`, `password`, `code`, `status`, `userid`, `role`, `test1`, `test2`) VALUES
(1, 'Nishant Mishra', 'nishantmishra9910@gmail.com', '$2y$10$AZ2hxkI6NuvHW3onHxPFWuhbsBStoOPwqLRmKpA9hwOXIWdtPY6ty', 0, 'verified', 0, '', '60a40d4bd0aa8', ''),
(2, 'Vedant Mishra', 'vedantmishra9823@gmail.com', '$2y$10$cs/PO2i00/0187L2a2Cg9uVRajTtCqBCVBiS2/nOgyYzZE9t222sG', 0, 'verified', 0, '', '60a40dfd1aa55', ''),
(12, 'Naman Panday', 'vedantmishra753@gmail.com', '$2y$10$l/7qkmBLdE8N/FJO8CMfJuNqexv/kE9jVixrdl0F0R6rqDvVHfWCy', 0, 'verified', 0, '', '60aab9392d668', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertable`
--
ALTER TABLE `usertable`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertable`
--
ALTER TABLE `usertable`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
