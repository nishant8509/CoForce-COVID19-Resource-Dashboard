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
-- Table structure for table `icu`
--

CREATE TABLE `icu` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `phone` int(11) NOT NULL,
  `location` varchar(250) NOT NULL,
  `service` varchar(250) NOT NULL,
  `keywords` varchar(250) NOT NULL,
  `test1` varchar(250) NOT NULL,
  `test2` varchar(250) NOT NULL,
  `test3` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `icu`
--

INSERT INTO `icu` (`id`, `name`, `phone`, `location`, `service`, `keywords`, `test1`, `test2`, `test3`) VALUES
(1, 'Hospital 1', 1234567890, 'North Delhi, Delhi', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all delhi', '', '', ''),
(2, 'Hospital 6', 534564645, 'South Delhi, Delhi', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all delhi', '', '', ''),
(3, 'Hospital 11', 154657571, 'North Delhi, Delhi', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all delhi', '', '', ''),
(4, 'Hospital 16', 554656757, 'North Delhi, Delhi', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all delhi', '', '', ''),
(5, 'Hospital 21', 676747378, 'East Delhi, Delhi', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all delhi', '', '', ''),
(6, 'Hospital 2', 564236522, 'Thane, Maharashtra', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all maharashtra', '', '', ''),
(7, 'Hospital 7', 763575676, 'Pune, Maharashtra', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all Maharashtra', '', '', ''),
(8, 'Hospital 12', 536553775, 'Nashik, Maharashtra', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all maharashtra', '', '', ''),
(9, 'Hospital 17', 1435345436, 'Nagpur, Maharashtra', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all maharashtra', '', '', ''),
(10, 'Hospital 22', 765756744, 'Ahmadnagar, Maharashtra', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all maharashtra', '', '', ''),
(11, 'Hospital 3', 667553654, 'Agra, Uttar Pradesh', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all UTTARPRADESH', '', '', ''),
(12, 'Hospital 8', 356426465, 'Kanpur Nagar, Uttar Pradesh', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all UTTARPRADESH', '', '', ''),
(13, 'Hospital 18', 624346456, 'Lucknow, Uttar Pradesh', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all UTTARPRADESH', '', '', ''),
(14, 'Hospital 23', 654642643, 'Rampur, Uttar Pradesh', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all UTTARPRADESH', '', '', ''),
(15, 'Hospital 4', 654624624, 'Varanasi, Uttar Pradesh', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all UTTARPRADESH', '', '', ''),
(16, 'Hospital 8', 525345562, 'Amritsar, Punjab', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all Punjab', '', '', ''),
(17, 'Hospital 19', 656246222, 'Faridkot, Punjab', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all Punjab', '', '', ''),
(18, 'Hospital 24', 675735656, 'Fatehgarh Sahib, Punjab', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all Punjab', '', '', ''),
(19, 'Hospital 5', 245646546, 'Fazilka, Punjab', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all Punjab', '', '', ''),
(20, 'Hospital 20', 357635756, 'Gurdaspu, Punjab', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all Punjab', '', '', ''),
(21, 'Hospital 25', 478878876, 'Nainital, Uttarakhand', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all uttarakhand', '', '', ''),
(22, 'Hospital 14', 467868674, 'Pauri Garhwal, Uttarakhand', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all uttarakhand', '', '', ''),
(23, 'Hospital 33', 54645646, 'Pithoragarh, Uttarakhand', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all uttarakhand', '', '', ''),
(24, 'Hospital 27', 987456321, 'Haridwar, Uttrakhand', 'ICU Beds, Oxygen Beds, Oxygen Supplies, Medicines, Covid Testing, Blood', 'all uttarakhand', '', '', ''),
(37, 'Hospital (Test)', 987456321, 'New Delhi, Delhi', 'Blood Bank', 'New Delhi, Delhi all', '60aa9247182d2', '', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `icu`
--
ALTER TABLE `icu`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `icu`
--
ALTER TABLE `icu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
