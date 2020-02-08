-- phpMyAdmin SQL Dump
-- version 4.7.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2020 at 09:26 PM
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
-- Database: `registerdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `contacttbl`
--

CREATE TABLE `contacttbl` (
  `contactid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phone` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contacttbl`
--

INSERT INTO `contacttbl` (`contactid`, `userid`, `firstname`, `lastname`, `address`, `phone`, `email`) VALUES
(21, 6, 'Charles', 'Ogechukwu', 'Kosini,Airport road,Warri', '08034847135', 'c.awulor@yahoo.com'),
(22, 6, 'Charles', 'Awulor', 'Kosini,warri', '08034847135', 'c.awulor@yahoo.com'),
(23, 7, 'Ogechukwu', 'Charles', 'Kosini', '08034847135', 'c.awulor@yahoo.com'),
(24, 7, 'Tega', 'Okoro', 'Udu', '09045', 't1'),
(25, 8, 'Gladys', 'Awulor', 'Airport road, warri', '0703', 'gawulor@yahoo.com'),
(26, 6, 'Mr Chuks', 'Charles', 'Warri', '0907', 'hdfhewh'),
(27, 6, 'Emma', 'Onyekuma', 'Ute', '090', 'e@yahoo.com');

-- --------------------------------------------------------

--
-- Table structure for table `regtbl`
--

CREATE TABLE `regtbl` (
  `userid` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `regtbl`
--

INSERT INTO `regtbl` (`userid`, `firstname`, `lastname`, `email`, `username`, `password`) VALUES
(6, 'Chalres', 'Awulor', 'c.awulor@yahoo.com', 'cawulor', 'awulor23'),
(7, 'Ese', 'Ogbeche', 'eogbeche@yahoo.com', 'eseog', 'ese1'),
(8, 'Gladys', 'Awulor', 'gawulor@yahoo.com', 'gawulor', 'awulor23');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `contacttbl`
--
ALTER TABLE `contacttbl`
  ADD PRIMARY KEY (`contactid`);

--
-- Indexes for table `regtbl`
--
ALTER TABLE `regtbl`
  ADD PRIMARY KEY (`userid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `contacttbl`
--
ALTER TABLE `contacttbl`
  MODIFY `contactid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `regtbl`
--
ALTER TABLE `regtbl`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
