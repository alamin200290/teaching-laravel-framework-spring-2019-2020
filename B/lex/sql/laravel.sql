-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2020 at 09:06 AM
-- Server version: 10.1.26-MariaDB
-- PHP Version: 7.1.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `accounts`
--

CREATE TABLE `accounts` (
  `accId` int(11) NOT NULL,
  `accNo` varchar(100) NOT NULL,
  `accName` varchar(100) NOT NULL,
  `balance` double NOT NULL,
  `typeId` int(11) NOT NULL,
  `lastTransaction` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounts`
--

INSERT INTO `accounts` (`accId`, `accNo`, `accName`, `balance`, `typeId`, `lastTransaction`) VALUES
(5, '121.111.22233', 'ABX', 1000, 1, '2018-11-26 03:33:51'),
(6, '122.123.111444', 'AIUB', 0, 1, '2019-04-02 01:28:32'),
(8, '1212121.121212.121212', 'AIUB', -11, 2, '2019-04-02 01:50:00'),
(9, '121212.11111111111.111', 'AIUB', 1e16, 1, '2019-04-03 00:05:24'),
(10, '123.101.11111', 'AIUB', 10000000000, 1, '2019-04-03 06:27:43');

-- --------------------------------------------------------

--
-- Table structure for table `accounttype`
--

CREATE TABLE `accounttype` (
  `typeId` int(11) NOT NULL,
  `typeName` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `accounttype`
--

INSERT INTO `accounttype` (`typeId`, `typeName`) VALUES
(1, 'savings'),
(2, 'fixed');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `userId` int(11) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `type` varchar(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `dept` varchar(100) NOT NULL,
  `cgpa` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`userId`, `username`, `password`, `type`, `name`, `dept`, `cgpa`) VALUES
(14, 'admin', 'admin', 'admin', 'Admin', 'CSE', '4'),
(15, 'sddhfdbhj', 'SDFHJSHJ', 'admin', 'HSEFGHASDH', 'CSSE', 'dgwagd'),
(16, 'SDFBHS', 'DFHGHSE', 'admin', 'SDHFGSEFG', 'CSSE', '12'),
(17, 'sdfsb', 'shjf', 'admin', 'efg', 'CSSE', '2'),
(18, 'adhba', 'awge', 'admin', 'qwegqwe', 'CSSE', '1'),
(19, 'asdash', 'hfwdhqwgdgq', 'admin', 'test', 'CSSE', '5'),
(22, 'xyz', 'test', 'user', 'Alamin', 'CS', '4'),
(23, 'XYZ', 'XYZ', 'ADMIN', 'XYZ PQR', 'CSE', '5'),
(24, 'alamin', '12345', 'admin', 'alamin', 'CSE', '4');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `accounts`
--
ALTER TABLE `accounts`
  ADD PRIMARY KEY (`accId`),
  ADD UNIQUE KEY `accId` (`accId`);

--
-- Indexes for table `accounttype`
--
ALTER TABLE `accounttype`
  ADD PRIMARY KEY (`typeId`),
  ADD UNIQUE KEY `typeId` (`typeId`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`userId`),
  ADD UNIQUE KEY `userId` (`userId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `accounts`
--
ALTER TABLE `accounts`
  MODIFY `accId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `accounttype`
--
ALTER TABLE `accounttype`
  MODIFY `typeId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `userId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
