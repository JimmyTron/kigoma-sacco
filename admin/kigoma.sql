-- phpMyAdmin SQL Dump
-- version 4.5.4.1deb2ubuntu2
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 15, 2018 at 09:46 PM
-- Server version: 5.7.22-0ubuntu0.16.04.1
-- PHP Version: 7.0.30-0ubuntu0.16.04.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `loginsystem`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `username`, `password`) VALUES
(1, 'admin', 'f925916e2754e5e03f75dd58a5733251');

-- --------------------------------------------------------

--
-- Table structure for table `rules`
--

CREATE TABLE `rules` (
  `ID` int(2) DEFAULT NULL,
  `VEHICLE` varchar(11) DEFAULT NULL,
  `DAILY-CHARGE` int(5) DEFAULT NULL,
  `WEAR-TEAR` int(4) DEFAULT NULL,
  `LATE-RETURN` int(5) DEFAULT NULL,
  `DAMAGES` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `rules`
--

INSERT INTO `rules` (`ID`, `VEHICLE`, `DAILY-CHARGE`, `WEAR-TEAR`, `LATE-RETURN`, `DAMAGES`) VALUES
(1, 'MOTOR-CYCLE', 3000, 300, 3000, 1000),
(2, 'SALOON-CAR', 4000, 400, 4000, 2000),
(3, 'PICK-UP', 5000, 500, 5000, 3000),
(4, 'MATATU', 6000, 600, 6000, 6000),
(5, 'MINI-BUS', 7000, 700, 7000, 7000),
(6, 'BENZ', 8000, 800, 8000, 8000),
(7, 'LIMO', 9000, 900, 9000, 9000),
(8, 'RANGE-ROVER', 10000, 1000, 10000, 10000),
(9, 'TUK-TUK', 3000, 300, 3000, 3000),
(10, 'BUS', 11000, 1100, 11000, 11000);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(300) NOT NULL,
  `contactno` varchar(11) NOT NULL,
  `posting_date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `email`, `password`, `contactno`, `posting_date`) VALUES
(9, 'Anuj', 'Kumar', 'demouser@gmail.com', 'f925916e2754e5e03f75dd58a5733251', '2015-11-12', '2015-11-12'),
(10, 'Amit', 'tomar', 'dfhfd@gm.com', 'f925916e2754e5e03f75dd58a5733251', '82888888888', '2017-12-16'),
(11, 'ben', 'john', 'benjohn@hotmail.com', '0cf31b2c283ce3431794586df7b0996d', '0719910191', '2018-05-15'),
(12, 'hh', 'oo', 'o@h.com', '47ec2dd791e31e2ef2076caf64ed9b3d', '0998877887', '2018-05-15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
