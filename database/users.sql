-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 19, 2023 at 06:06 PM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `useremail` varchar(255) NOT NULL,
  `userpass` varchar(255) NOT NULL,
  `phone` int(11) NOT NULL,
  `gender` varchar(11) NOT NULL,
  `dob` date DEFAULT NULL,
  `reservedate` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fname`, `lname`, `useremail`, `userpass`, `phone`, `gender`, `dob`, `reservedate`) VALUES
(19, 'trix', 'Johnny Matrix', 'Marianos', 'johnmatrixmariano@gmail.com', '123', 0, 'Male', '1999-09-17', '2023-06-22'),
(35, 'Trixie', 'John Matrix', 'Mariano', 'johnmatrixmariano1@gmail.com', '12345678', 2147483647, 'male', '1999-09-17', NULL),
(36, '19002384200', 'John Matrix', 'Mariano', 'johnmatrixmariahfghnohjfghfh@gmail.com', '12345678', 2147483647, 'female', '2023-06-28', NULL),
(37, 'Trixiess', 'John Matrix', 'Mariano', 'johnmatrixmariano12@gmail.com', '12345678', 2147483647, 'male', '2023-06-29', NULL);

--
-- Indexes for dumped tables
--

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
