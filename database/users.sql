-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 17, 2022 at 05:03 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hotelproject`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `UsersID` int(11) NOT NULL,
  `Email` varchar(255) CHARACTER SET utf8 NOT NULL,
  `Passworde` varchar(255) CHARACTER SET utf8 NOT NULL,
  `FirstName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `LastName` varchar(255) CHARACTER SET utf8 NOT NULL,
  `GroupUsers` int(11) NOT NULL DEFAULT 0,
  `ValidationEmail` int(11) NOT NULL DEFAULT 0,
  `TrustStatust` int(11) NOT NULL DEFAULT 0,
  `UserName` varchar(255) CHARACTER SET utf8 NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`UsersID`, `Email`, `Passworde`, `FirstName`, `LastName`, `GroupUsers`, `ValidationEmail`, `TrustStatust`, `UserName`) VALUES
(12, 'ch@gmail.com', '$2y$10$57JJkduPY3PDAht80.2YpeETqD1fgS8rogGy5vkbgB5LXaUjSbyE2', '', '', 0, 0, 0, 'JT79197'),
(13, 'chbani@gmail.com', '$2y$10$/hBRvVFStFODPMF0Rt7/QOTJBzR64pOG.I0T0ZYYXhWoT/nJZfljO', '', '', 0, 0, 0, 'chbani'),
(14, 'chban@gmail.com', '$2y$10$1i2moWBo9TI9dsyBXbKehucmQFWaVZIcz6AYsge1HF.aAFkoxqcQK', '', '', 0, 0, 0, 'chban');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`UsersID`),
  ADD UNIQUE KEY `UserName` (`UserName`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `UsersID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
