-- phpMyAdmin SQL Dump
-- version 5.0.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2021 at 11:39 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bank`
--

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `s-no` int(255) NOT NULL,
  `Sender` varchar(255) NOT NULL,
  `Receiver` varchar(255) NOT NULL,
  `Amount` int(255) NOT NULL,
  `Date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`s-no`, `Sender`, `Receiver`, `Amount`, `Date`) VALUES
(80, 'Puskhar', 'Sumit Kumar', 100, '2021-06-19 12:21:46'),
(81, 'Vicky kumar jha', 'Puskhar', 10, '2021-06-19 12:23:11'),
(82, 'Sumit Kumar', 'Puskhar', 400, '2021-06-19 12:23:36'),
(83, 'Puskhar', 'Puskhar', 100, '2021-06-19 14:40:10'),
(84, 'Puskhar', 'Divyansh Sinha', 54, '2021-06-19 14:41:01'),
(92, 'Ashwini kumar', 'Sachin ojha', 100, '2021-06-19 15:42:57');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `Account Number` int(50) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `E-Mail` varchar(50) NOT NULL,
  `Phone` int(50) NOT NULL,
  `Balance` int(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`Account Number`, `Name`, `E-Mail`, `Phone`, `Balance`) VALUES
(2453689, 'Puskhar', 'puskar98@gmail.com', 935988596, 435900),
(32316556, 'Divyansh Sinha', 'divsin89@gmail.com', 936524125, 100224),
(36524897, 'Vicky kumar jha', 'vickykr@20gmail.com', 63258997, 64646),
(36582942, 'Prashant Mishra', 'prashantkr99@gmail.com', 965234852, 20958),
(63257899, 'Sumit Kumar', 'sumitkumar99@gmail.com', 996325874, 229500),
(75720777, 'Vikash kumar', 'vikashkr98@gmail.com', 852752825, 54998),
(86516511, 'Anshu kumar', 'anshujemco@gmail.com', 865565465, 150000),
(132133500, 'Rahul kumar', 'iamrahulabhi@gmail.com', 620054879, 99000),
(259336388, 'Sachin ojha', 'sachin98@gmail.com', 822132132, 125100),
(556651616, 'Ashwini kumar', 'ashkr2000@gmail.com', 965165165, 64900),
(742727527, 'Dharmendra thakur', 'dharmendrathakur99@gmail.com', 722527442, 200000);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`s-no`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`Account Number`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `s-no` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
