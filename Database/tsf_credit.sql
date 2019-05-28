-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 28, 2019 at 03:14 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tsf_credit`
--

-- --------------------------------------------------------

--
-- Table structure for table `txn`
--

CREATE TABLE `txn` (
  `txn_id` varchar(20) NOT NULL,
  `from_id` int(11) NOT NULL,
  `from_name` varchar(100) NOT NULL,
  `to_id` int(11) NOT NULL,
  `to_name` varchar(100) NOT NULL,
  `txn_amount` decimal(10,2) NOT NULL,
  `txn_status` varchar(100) NOT NULL,
  `txn_date` varchar(20) DEFAULT NULL,
  `sno` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `credit` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `credit`) VALUES
(1, 'Rhythm Bhiwani', 'rhythmbhiwani@gmail.com', '1000.00'),
(2, 'Rekha Mathur', 'rekhamathur@gmail.com', '1000.00'),
(3, 'Priyanshee Ameta', 'priyansheeameta@gmail.com', '1000.00'),
(4, 'Rajveer Singh', 'rajveersingh@gmail.com', '1000.00'),
(5, 'Surbhi Khokhawat', 'surbhikhokhawat@gmail.com', '1000.00'),
(6, 'Riya Soni', 'riyasoni@gmail.com', '1000.00'),
(7, 'Ruchil Patel', 'ruchilpatel@gmail.com', '1000.00'),
(8, 'Saumya Choudhary', 'saumyachoudhary@gmail.com', '1000.00'),
(9, 'Vinay Pratap', 'vinaypratap@gmail.com', '1000.00'),
(10, 'Kapil Sharma', 'kapilsharma@gmail.com', '1000.00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `txn`
--
ALTER TABLE `txn`
  ADD PRIMARY KEY (`sno`),
  ADD UNIQUE KEY `txn_id` (`txn_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `txn`
--
ALTER TABLE `txn`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
