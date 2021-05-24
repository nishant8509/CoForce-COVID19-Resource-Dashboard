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
-- Table structure for table `daily_assisment`
--

CREATE TABLE `daily_assisment` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `user_id` varchar(250) NOT NULL,
  `covid_status` varchar(50) NOT NULL,
  `Dizziness` varchar(50) NOT NULL,
  `weakness` varchar(50) NOT NULL,
  `smell` varchar(50) NOT NULL,
  `Tiredness` varchar(50) NOT NULL,
  `cough` varchar(50) NOT NULL,
  `Headache` varchar(50) NOT NULL,
  `test1` varchar(250) NOT NULL,
  `test2` varchar(250) NOT NULL,
  `test3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `daily_assisment`
--

INSERT INTO `daily_assisment` (`id`, `name`, `user_id`, `covid_status`, `Dizziness`, `weakness`, `smell`, `Tiredness`, `cough`, `Headache`, `test1`, `test2`, `test3`) VALUES
(1, 'Vedant Mishra', '60', 'No', 'No', 'No', 'No', 'Yes', 'Yes', 'Yes', '', '', ''),
(2, 'Vedant Mishra', '60a40dfd1aa55', 'No', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', 'Yes', '', '', ''),
(3, 'Vedant Mishra', '60a40dfd1aa55', 'Yes', 'No', 'No', 'No', 'No', 'No', 'No', '', '', ''),
(4, 'Vedant Mishra', '60a40dfd1aa55', 'No', 'No', 'No', 'No', 'No', 'No', 'No', '', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `daily_assisment`
--
ALTER TABLE `daily_assisment`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `daily_assisment`
--
ALTER TABLE `daily_assisment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
