-- phpMyAdmin SQL Dump
-- version 5.3.0-dev+20220715.346923e20a
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 16, 2022 at 05:52 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cabinet`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointment`
--

CREATE TABLE `appointment` (
  `NP` int(11) NOT NULL,
  `NAME` varchar(50) NOT NULL,
  `APPOINTMENT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `appointment`
--

INSERT INTO `appointment` (`NP`, `NAME`, `APPOINTMENT`) VALUES
(1, 'SALMA KHARFI', '2022-07-18'),
(2, 'SALMA KHARFI', '2022-07-18'),
(3, 'SALMA KHARFI', '2022-07-18'),
(4, 'SALMA KHARFI', '2022-07-18');

-- --------------------------------------------------------

--
-- Table structure for table `passions`
--

CREATE TABLE `passions` (
  `NAME` varchar(50) NOT NULL,
  `BD` date NOT NULL,
  `PHONE` varchar(60) NOT NULL,
  `ADRESS` varchar(60) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `APPOINTMENT` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `passions`
--

INSERT INTO `passions` (`NAME`, `BD`, `PHONE`, `ADRESS`, `EMAIL`, `APPOINTMENT`) VALUES
('SALMA KHARFI', '2003-07-03', '6', 'salmakharfi49@gmail.com', ' Boulevard Al Qods Sidi Maârouf 20190 Casablanca', '2022-07-12'),
('SALMA KHARFI', '2003-06-12', '6', 'salmakharfi@gmail.com', ' Boulevard Al Qods Sidi Maârouf 20190 Casablanca', '2022-07-21'),
('SALMA KHARFI', '1997-06-13', '6', 'salmakharfi@gmail.com', ' Boulevard Al Qods Sidi Maârouf 20190 Casablanca', '2022-07-27'),
('SALMA KHARFI', '1998-06-13', '06 90 52 60 54', 'salmakharfi@gmail.com', ' Boulevard Al Qods Sidi Maârouf 20190 Casablanca', '2022-07-21'),
('SANEM DIVIT', '2005-02-13', '09 90 52 60 54', 'sanemdivit@gmail.com', ' Boulevard Al Qods Sidi Maârouf 20190 Casablanca', '2022-07-20');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointment`
--
ALTER TABLE `appointment`
  ADD PRIMARY KEY (`NP`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `appointment`
--
ALTER TABLE `appointment`
  MODIFY `NP` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
