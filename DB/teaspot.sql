-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Feb 22, 2023 at 11:37 PM
-- Server version: 8.0.30
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `teaspot`
--

-- --------------------------------------------------------

--
-- Table structure for table `commentdb`
--

CREATE TABLE `commentdb` (
  `body` varchar(500) COLLATE utf8mb4_general_ci NOT NULL,
  `date` date NOT NULL,
  `userName` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `userID` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `logindb`
--

CREATE TABLE `logindb` (
  `username` varchar(12) COLLATE utf8mb4_general_ci NOT NULL,
  `userID` int NOT NULL,
  `password` varchar(25) COLLATE utf8mb4_general_ci NOT NULL,
  `doB` varchar(8) COLLATE utf8mb4_general_ci NOT NULL,
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `logindb`
--

INSERT INTO `logindb` (`username`, `userID`, `password`, `doB`, `email`) VALUES
('admin', 1, 'admin', '1/1/1900', 'admin@teaspot.net');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `email` varchar(50) COLLATE utf8mb4_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `commentdb`
--
ALTER TABLE `commentdb`
  ADD KEY `userID` (`userID`);

--
-- Indexes for table `logindb`
--
ALTER TABLE `logindb`
  ADD PRIMARY KEY (`userID`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `logindb`
--
ALTER TABLE `logindb`
  MODIFY `userID` int NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `commentdb`
--
ALTER TABLE `commentdb`
  ADD CONSTRAINT `commentdb_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `logindb` (`userID`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
