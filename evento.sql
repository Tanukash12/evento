-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2024 at 06:22 AM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `evento`
--

-- --------------------------------------------------------

--
-- Table structure for table `evento`
--

CREATE TABLE `evento` (
  `event_id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time(6) NOT NULL,
  `venu` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `evento`
--

INSERT INTO `evento` (`event_id`, `name`, `date`, `time`, `venu`, `description`) VALUES
(4, 'heloo', '0000-00-00', '06:00:00.000000', '7h', 'abcdefg'),
(7, 'tanushka', '0000-00-00', '12:00:00.000000', 'ghost house', 'aaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaaa'),
(8, 'jjj', '2011-01-01', '06:00:00.000000', 'n90', 'sgsgsg'),
(9, 'apple', '2011-01-11', '11:00:00.000000', 'Audi9', 'heeeeeeeeeeeeeeeeeeeeeee'),
(10, 'apple', '2011-01-11', '11:00:00.000000', 'Audi9', 'heeeeeeeeeeeeeeeeeeeeeee'),
(17, 'event', '2011-01-11', '11:00:00.000000', 'Audi6', 'event1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `evento`
--
ALTER TABLE `evento`
  ADD PRIMARY KEY (`event_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `evento`
--
ALTER TABLE `evento`
  MODIFY `event_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
