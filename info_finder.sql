-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2019 at 02:29 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `info_finder`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `reference_no` varchar(6) NOT NULL,
  `tin_no` varchar(9) NOT NULL,
  `company_name` varchar(50) NOT NULL,
  `company_address` varchar(100) NOT NULL,
  `email` varchar(30) NOT NULL,
  `director` varchar(30) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `office_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`reference_no`, `tin_no`, `company_name`, `company_address`, `email`, `director`, `nic`, `mobile_no`, `office_no`) VALUES
('1234', '12', 'DELETE', 'qwd', 'rashmishehana@gmail.com', 'dfd', '654', 543, 43),
('1234', '13', 'rash', 'qwd', 'rashmishehana@gmail.com', 'dfd', '654', 543, 43),
('r67', '14', 'rash', 'qwd', 'rashmishehana@gmail.com', 'dfd', '654', 543, 43),
('r67', '454', 'gfd', 'gfhg', 'uy', 'uyt', '6565', 876, 76),
('15', '775757401', 'dimuthu private limited', '852/3, susithapura, malabe', 'dimuthu@gmail.com', 'dimuthu', '975273083v', 778240756, 112562621);

-- --------------------------------------------------------

--
-- Table structure for table `personal`
--

CREATE TABLE `personal` (
  `reference_no` varchar(6) NOT NULL,
  `tin_no` int(9) NOT NULL,
  `person_name` varchar(50) NOT NULL,
  `address` varchar(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `mobile_no` int(10) NOT NULL,
  `office_no` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `personal`
--

INSERT INTO `personal` (`reference_no`, `tin_no`, `person_name`, `address`, `email`, `nic`, `mobile_no`, `office_no`) VALUES
('1234', 12, 'DELETE', 'qwd', 'rashmishehana@gmail.com', '654', 543, 43),
('12', 725243598, 'W A Rashmi Shehana', '56/89, kahanthota malabe', 'rashmi@gmail.com', '090876877v', 725243598, 112562621);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`tin_no`);

--
-- Indexes for table `personal`
--
ALTER TABLE `personal`
  ADD PRIMARY KEY (`tin_no`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
