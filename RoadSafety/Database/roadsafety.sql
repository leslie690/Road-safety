-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2023 at 06:07 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `roadsafety`
--

-- --------------------------------------------------------

--
-- Table structure for table `roadstore`
--

CREATE TABLE `roadstore` (
  `id` int(255) NOT NULL,
  `mode` varchar(255) NOT NULL,
  `casualty` varchar(255) NOT NULL,
  `minor` varchar(255) NOT NULL,
  `major` varchar(255) NOT NULL,
  `dateof` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roadstore`
--

INSERT INTO `roadstore` (`id`, `mode`, `casualty`, `minor`, `major`, `dateof`) VALUES
(5, 'Fatal', '', '16', '15', '2023-12-17'),
(6, 'Injury', '20', '11', '9', '2023-12-16');

-- --------------------------------------------------------

--
-- Table structure for table `users_tbl`
--

CREATE TABLE `users_tbl` (
  `id` int(10) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `surname` varchar(20) NOT NULL,
  `email` text NOT NULL,
  `placeofaccident` varchar(255) NOT NULL,
  `injurytype` varchar(255) NOT NULL,
  `password` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users_tbl`
--

INSERT INTO `users_tbl` (`id`, `firstname`, `lastname`, `surname`, `email`, `placeofaccident`, `injurytype`, `password`) VALUES
(0, 'Brinton', 'pendo', 'kadenge', 'gladyspendo67@gmail.com', '', '', '123'),
(0, 'ayub', 'wertt', 'yohhh', 'ayuuu@gggg', '', '', '123'),
(0, 'gladys', 'pendo', 'kadenge', 'patel@gmail.com', '', '', 'Patel@20'),
(0, 'ayub', 'Otie', 'Ratiala', 'ratiala@gmail.com', '', '', '12345'),
(0, 'Leslie', 'wamboka', 'watende', 'leslie@gmail.com', 'kwanyasi', 'fatal', '1234');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `roadstore`
--
ALTER TABLE `roadstore`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `roadstore`
--
ALTER TABLE `roadstore`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
