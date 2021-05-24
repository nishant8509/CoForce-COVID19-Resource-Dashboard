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
-- Table structure for table `usertablec`
--

CREATE TABLE `usertablec` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `password` varchar(250) NOT NULL,
  `code` int(11) NOT NULL,
  `status` varchar(250) NOT NULL,
  `useid` varchar(250) NOT NULL,
  `email` varchar(250) NOT NULL,
  `test1` varchar(250) NOT NULL,
  `test2` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `usertablec`
--

INSERT INTO `usertablec` (`id`, `name`, `password`, `code`, `status`, `useid`, `email`, `test1`, `test2`) VALUES
(1, 'Nishant Mishra', '$2y$10$0g8ILMPyrspAWiW3nZbN2e9eYdtE1mnCBAKuU7MtmrR7H97PwD.dq', 0, 'verified', '', 'nishantmishra9823@gmail.com', '60a40b934bbf8', ''),
(2, 'Vedant Mishra', '$2y$10$AuFjtxEsVe9d9e4lmM10AOMCyk9OwhMXheomx1Y3aiGkwdjDMoBfa', 0, 'verified', '', 'vedantmishra9823@gmail.com', '60a40edecf734', ''),
(4, 'Nishant Mishra', '$2y$10$QyZIPtQojKr7E.iCNr1rv.Pnhe3S0zGIwYVbwar9UZtvwjXMSJjaa', 0, 'verified', '', 'nishantmishra9910@gmail.com', '60a410f78cdf8', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `usertablec`
--
ALTER TABLE `usertablec`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `usertablec`
--
ALTER TABLE `usertablec`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
