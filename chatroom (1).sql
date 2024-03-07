-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 07, 2024 at 09:42 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chatroom`
--

-- --------------------------------------------------------

--
-- Table structure for table `msgs`
--

CREATE TABLE `msgs` (
  `sno` int(11) NOT NULL,
  `msg` text NOT NULL,
  `room` text NOT NULL,
  `ip` text NOT NULL,
  `stime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `msgs`
--

INSERT INTO `msgs` (`sno`, `msg`, `room`, `ip`, `stime`) VALUES
(1, 'hi', 'abc', '::1', '2024-02-02 12:29:53'),
(2, 'abc', 'abc', '::1', '2024-02-02 12:31:20'),
(3, 'this', 'abc', '::1', '2024-02-02 12:34:10');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `sno` int(11) NOT NULL,
  `roomname` text NOT NULL,
  `stime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`sno`, `roomname`, `stime`) VALUES
(3, 'room11', '0000-00-00 00:00:00'),
(6, 'tarun', '0000-00-00 00:00:00'),
(16, 'tarun1', '0000-00-00 00:00:00'),
(17, 'chatting', '0000-00-00 00:00:00'),
(18, 'chatting1', '0000-00-00 00:00:00'),
(19, 'room', '0000-00-00 00:00:00'),
(20, 'tarun0', '0000-00-00 00:00:00'),
(21, 'tarun12', '0000-00-00 00:00:00'),
(22, 'tarun123', '0000-00-00 00:00:00'),
(23, 'room1112', '0000-00-00 00:00:00'),
(24, 'room11155', '0000-00-00 00:00:00'),
(25, 'room11589494', '0000-00-00 00:00:00'),
(26, 'qwert', '0000-00-00 00:00:00'),
(27, 'tarun45', '0000-00-00 00:00:00'),
(29, 'abc', '0000-00-00 00:00:00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `msgs`
--
ALTER TABLE `msgs`
  ADD PRIMARY KEY (`sno`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`sno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `msgs`
--
ALTER TABLE `msgs`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `sno` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
