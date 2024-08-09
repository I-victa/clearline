-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 09, 2024 at 10:56 AM
-- Server version: 10.6.18-MariaDB-cll-lve
-- PHP Version: 8.1.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `vinkblgn_clearline`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `id` int(11) NOT NULL,
  `firstname` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `lastname` varchar(150) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `email` varchar(150) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL,
  `enrolleeid` varchar(50) CHARACTER SET utf8mb3 COLLATE utf8mb3_general_ci NOT NULL,
  `passportlink` varchar(250) CHARACTER SET utf32 COLLATE utf32_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`id`, `firstname`, `lastname`, `email`, `enrolleeid`, `passportlink`) VALUES
(1, '0', '0', 'victahow@gmail.com', 'sddddd', ''),
(3, '0', '0', 'victahow@gmail.com', 'eeeeee', ''),
(4, '0', '0', 'victahow@gmail.com', 'ddd', ''),
(6, 'VICTOR', 'IBEKAEME', 'victahow@gmail.com', 'jkbjohk', ''),
(7, 'VICTOR', 'IBEKAEME', 'victahow@gmail.com', 'jefbujbfuj', ''),
(8, 'VICTOR', 'IBEKAEME', 'victahow@gmail.com', 'sddddd', 'https://visuretech.com/clearline/uploads/download.png'),
(9, 'VICTOR', 'IBEKAEME', 'victahow@gmail.com', 'ghg', 'https://visuretech.com/clearline/uploads/download.png'),
(10, 'test name', 'test name', 'testing@gmail.com', 'cl/fan/267257/2023', 'https://visuretech.com/clearline/uploads/Screenshot (50).png');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
