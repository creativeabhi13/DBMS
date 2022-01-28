-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 28, 2022 at 05:46 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `apt_mgmt`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('creativeabhi13', 'abhi2001');

-- --------------------------------------------------------

--
-- Table structure for table `apartment`
--

CREATE TABLE `apartment` (
  `APTNO` int(4) NOT NULL,
  `TNO` int(5) DEFAULT NULL,
  `TYPE` varchar(20) DEFAULT NULL,
  `BLOCK` int(2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `apartment`
--

INSERT INTO `apartment` (`APTNO`, `TNO`, `TYPE`, `BLOCK`) VALUES
(1001, 1, '9 bhk', 9),
(1002, 2, '2BHK', 1),
(1003, 3, '3BHK', 3),
(1051, 5, '2 BHK', 2),
(1078, 4, '4BHK', 1);

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `Name` text NOT NULL,
  `Email` varchar(30) NOT NULL,
  `Subject` varchar(30) NOT NULL,
  `Message` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`Name`, `Email`, `Subject`, `Message`) VALUES
('ADITYA KRISHNAN', 'ADITYA123@GMAIL.COM', 'REGARDING  2BHK HOUSE', 'HEY, THIS IS ADITYA I AM LOOKING FOR 2 BHK HOUSE NEAR J BLOCK ,AMAUSI ROAD LUCKNOW'),
('bhupinder singh', 'BHUPI@GMAIL.COM', 'I WANT 3 BHK LAND NEAR KONKUNT', 'PLEASE REACH OUT ME \r\nMY WHATSAPP IS WA.ME/918603944898');

-- --------------------------------------------------------

--
-- Table structure for table `dependent`
--

CREATE TABLE `dependent` (
  `TNO` int(5) DEFAULT NULL,
  `DNAME` varchar(40) DEFAULT NULL,
  `DPHONE` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `dependent`
--

INSERT INTO `dependent` (`TNO`, `DNAME`, `DPHONE`) VALUES
(1, 'harsh soni', 2147483647),
(2, 'M SUMESH', 2147483647),
(3, 'R NAMBIAR', 70787889),
(4, 'DHIRU M', 860394489),
(5, 'M SINGH', 60987867);

-- --------------------------------------------------------

--
-- Table structure for table `finance`
--

CREATE TABLE `finance` (
  `DATE` date NOT NULL,
  `REPAIR_CHARGES` int(11) DEFAULT NULL,
  `STAFF_SALARIES` int(11) DEFAULT NULL,
  `MISC_CHARGES` int(11) DEFAULT NULL,
  `APTNO` int(4) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finance`
--

INSERT INTO `finance` (`DATE`, `REPAIR_CHARGES`, `STAFF_SALARIES`, `MISC_CHARGES`, `APTNO`) VALUES
('0000-00-00', 340, 120, 250, 1002),
('2021-01-12', 1200, 500, 270, 1001),
('2022-01-27', 1208, 1201, 1110, 1003),
('2022-01-29', 1500, 1234, 1000, 1078),
('2022-01-31', 1000, 1110, 1200, 1051);

-- --------------------------------------------------------

--
-- Table structure for table `rent`
--

CREATE TABLE `rent` (
  `DATE` date DEFAULT NULL,
  `TNO` int(5) DEFAULT NULL,
  `AMOUNT` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `rent`
--

INSERT INTO `rent` (`DATE`, `TNO`, `AMOUNT`) VALUES
('2021-01-12', 1, 20000),
('0000-00-00', 2, 23000),
('2022-01-27', 3, 25000),
('2022-01-29', 4, 35000),
('2022-01-31', 5, 20000);

-- --------------------------------------------------------

--
-- Table structure for table `tenant`
--

CREATE TABLE `tenant` (
  `TNO` int(5) NOT NULL,
  `TNAME` varchar(40) DEFAULT NULL,
  `TPHONE` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tenant`
--

INSERT INTO `tenant` (`TNO`, `TNAME`, `TPHONE`) VALUES
(1, 'poorvi soni', 898765544),
(2, 'Ajin Sumesh', 2147483647),
(3, 'ADITYA KRISHNAN', 787971756),
(4, 'VINAY M', 89876574),
(5, 'BHUPINDER SINGH', 98887665);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`username`);

--
-- Indexes for table `apartment`
--
ALTER TABLE `apartment`
  ADD PRIMARY KEY (`APTNO`),
  ADD KEY `TNO` (`TNO`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `dependent`
--
ALTER TABLE `dependent`
  ADD KEY `TNO` (`TNO`);

--
-- Indexes for table `finance`
--
ALTER TABLE `finance`
  ADD PRIMARY KEY (`DATE`),
  ADD KEY `APTNO` (`APTNO`);

--
-- Indexes for table `rent`
--
ALTER TABLE `rent`
  ADD KEY `DATE` (`DATE`),
  ADD KEY `TNO` (`TNO`);

--
-- Indexes for table `tenant`
--
ALTER TABLE `tenant`
  ADD PRIMARY KEY (`TNO`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `apartment`
--
ALTER TABLE `apartment`
  ADD CONSTRAINT `apartment_ibfk_1` FOREIGN KEY (`TNO`) REFERENCES `tenant` (`TNO`) ON DELETE CASCADE;

--
-- Constraints for table `dependent`
--
ALTER TABLE `dependent`
  ADD CONSTRAINT `dependent_ibfk_1` FOREIGN KEY (`TNO`) REFERENCES `tenant` (`TNO`) ON DELETE CASCADE;

--
-- Constraints for table `finance`
--
ALTER TABLE `finance`
  ADD CONSTRAINT `finance_ibfk_1` FOREIGN KEY (`APTNO`) REFERENCES `apartment` (`APTNO`) ON DELETE CASCADE;

--
-- Constraints for table `rent`
--
ALTER TABLE `rent`
  ADD CONSTRAINT `rent_ibfk_1` FOREIGN KEY (`DATE`) REFERENCES `finance` (`DATE`) ON DELETE CASCADE,
  ADD CONSTRAINT `rent_ibfk_2` FOREIGN KEY (`TNO`) REFERENCES `tenant` (`TNO`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
