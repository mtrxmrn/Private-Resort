-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 20, 2023 at 11:38 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `jimsresort`
--

-- --------------------------------------------------------

--
-- Table structure for table `adminlogin`
--

CREATE TABLE `adminlogin` (
  `id` int(11) NOT NULL,
  `user` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gcash`
--

CREATE TABLE `gcash` (
  `id` int(11) NOT NULL,
  `paymentScreenshot` blob NOT NULL,
  `amount` int(11) NOT NULL,
  `gcashName` varchar(255) NOT NULL,
  `gcashNumber` int(11) NOT NULL,
  `referenceNumber` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `note` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `gcash`
--

INSERT INTO `gcash` (`id`, `paymentScreenshot`, `amount`, `gcashName`, `gcashNumber`, `referenceNumber`, `email`, `note`) VALUES
(19, 0x4172726179, 0, '', 0, 0, '', ''),
(35, 0x4172726179, 0, '', 0, 0, '', ''),
(36, 0x4172726179, 0, '', 0, 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `reservation`
--

CREATE TABLE `reservation` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `reservedate` date NOT NULL,
  `reservetime` time NOT NULL,
  `personcount` int(11) NOT NULL,
  `notes` varchar(255) NOT NULL,
  `pending` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `reservation`
--

INSERT INTO `reservation` (`id`, `email`, `fullname`, `phone`, `reservedate`, `reservetime`, `personcount`, `notes`, `pending`) VALUES
(19, 'johnmatrixmariano@gmail.com', 'Johnny Matrix Marianos', '0', '0000-00-00', '09:00:00', 0, '', 0),
(35, 'johnmatrixmariano1@gmail.com', 'John Matrix Mariano', '2147483647', '2023-06-16', '09:00:00', 0, '', 1),
(36, 'johnmatrixmariahfghnohjfghfh@gmail.com', 'John Matrix Mariano', '2147483647', '2023-06-17', '09:00:00', 0, '', 2);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `userpass` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `reservedate` date DEFAULT NULL,
  `pending` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fname`, `lname`, `useremail`, `userpass`, `phone`, `gender`, `dob`, `reservedate`, `pending`) VALUES
(19, 'trix', 'Johnny Matrix', 'Marianos', 'johnmatrixmariano@gmail.com', '123', '0', 'Male', '1999-09-17', '0000-00-00', 0),
(35, 'Trixie', 'John Matrix', 'Mariano', 'johnmatrixmariano1@gmail.com', '12345678', '2147483647', 'male', '1999-09-17', '2023-06-16', 0),
(36, '19002384200', 'John Matrix', 'Mariano', 'johnmatrixmariahfghnohjfghfh@gmail.com', '12345678', '2147483647', 'female', '2023-06-28', '2023-06-17', 0),
(37, 'Trixiess', 'John Matrix', 'Mariano', 'johnmatrixmariano12@gmail.com', '12345678', '2147483647', 'male', '2023-06-29', NULL, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `reservation`
--
ALTER TABLE `reservation`
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
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=38;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
