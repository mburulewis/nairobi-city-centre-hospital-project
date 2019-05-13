-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 22, 2018 at 01:09 AM
-- Server version: 10.1.30-MariaDB
-- PHP Version: 7.2.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nairobicitycenter`
--

-- --------------------------------------------------------

--
-- Table structure for table `nextkin`
--

CREATE TABLE `nextkin` (
  `nid` int(255) NOT NULL,
  `parentid` text NOT NULL,
  `firstname` text NOT NULL,
  `surname` text NOT NULL,
  `relationship` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `nextkin`
--

INSERT INTO `nextkin` (`nid`, `parentid`, `firstname`, `surname`, `relationship`) VALUES
(1, '1', 'DANIEL', 'SIKOBE', 'Father'),
(2, '22', 'RON', 'DOIN', 'Brother'),
(3, '22', 'RON', 'DOIN', 'Brother'),
(4, '26792', 'JOE', 'WEST', 'Father'),
(5, '24564', 'JOE', 'MULIKA', 'Son'),
(6, '1', 'GRACE', 'SIKOBE', 'Mother');

-- --------------------------------------------------------

--
-- Table structure for table `patients`
--

CREATE TABLE `patients` (
  `parentid` int(255) NOT NULL,
  `pid` text NOT NULL,
  `firstname` text NOT NULL,
  `middlename` text NOT NULL,
  `surname` text NOT NULL,
  `dateofbirth` text NOT NULL,
  `gender` text NOT NULL,
  `county` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `patients`
--

INSERT INTO `patients` (`parentid`, `pid`, `firstname`, `middlename`, `surname`, `dateofbirth`, `gender`, `county`) VALUES
(1, '1', 'IAN', 'WALTER', 'SIKOBE', '12/12/1998', 'Male', 'Mombasa'),
(2, '254364', 'LEON', 'OLUBAYO', 'ANEMBA', '11/6/1999', 'Male', 'Embu'),
(3, '235647', 'FAITH', 'MBAI', 'MUZEMBI', '5/12/1997', 'Female', 'Nairobi'),
(4, '24564', 'MIKE', 'MUITE', 'MULIKA', '5/12/1991', 'Male', 'Kisumu'),
(5, '314537', 'LEWI', 'MBURU', 'TANUI', '5/12/1995', 'Male', 'Mombasa'),
(6, '26792', 'IRIS', 'ALLEN', 'WEST', '5/12/1999', 'Female', 'Mombasa'),
(7, '22', 'ANTONIO', 'RUDIGER', 'DOIN', '5/12/1991', 'Male', 'Mombasa');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `nextkin`
--
ALTER TABLE `nextkin`
  ADD PRIMARY KEY (`nid`);

--
-- Indexes for table `patients`
--
ALTER TABLE `patients`
  ADD PRIMARY KEY (`parentid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `nextkin`
--
ALTER TABLE `nextkin`
  MODIFY `nid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `patients`
--
ALTER TABLE `patients`
  MODIFY `parentid` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
