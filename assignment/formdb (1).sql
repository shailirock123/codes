-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 17, 2021 at 05:07 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 8.0.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `formdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `qualification`
--

CREATE TABLE `qualification` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `qualification` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `qualification`
--

INSERT INTO `qualification` (`id`, `user_id`, `qualification`) VALUES
(1, 1, 'MCA'),
(2, 1, 'BCA'),
(3, 2, 'MCA'),
(4, 2, 'BCA'),
(5, 2, 'BA'),
(6, 3, 'MCA'),
(7, 3, 'BCA'),
(8, 3, 'BA'),
(9, 4, 'MCA'),
(10, 4, 'BCA'),
(11, 4, 'BA'),
(12, 5, 'MCA'),
(13, 5, 'BA'),
(14, 6, 'MCA'),
(15, 6, 'BCA'),
(16, 6, 'BA'),
(17, 7, 'MCA'),
(18, 7, 'BCA'),
(19, 7, 'BA'),
(20, 8, 'MCA'),
(21, 8, 'BCA'),
(22, 8, 'BA'),
(23, 9, 'MCA'),
(24, 9, 'BCA'),
(25, 10, 'MCA'),
(26, 10, 'BCA'),
(27, 11, 'MCA'),
(28, 11, 'BCA'),
(29, 11, 'BA'),
(30, 13, 'MCA'),
(31, 13, 'BCA'),
(32, 13, 'BA'),
(33, 14, 'MCA'),
(34, 14, 'BCA'),
(35, 14, 'BA'),
(36, 15, 'MCA'),
(37, 15, 'BCA'),
(38, 15, 'BA'),
(39, 16, 'MCA'),
(40, 16, 'BA');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `id` int(11) NOT NULL,
  `name` varchar(200) NOT NULL,
  `email` varchar(200) NOT NULL,
  `gender` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`id`, `name`, `email`, `gender`) VALUES
(15, 'Shailendra Pratap Singh', 'pratap.shailendra9@gmail.com', 'male'),
(16, 'SHAILENDRA PRATAP SINGH 123', 'pratap.shailendra10@gmail.com', 'male');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `qualification`
--
ALTER TABLE `qualification`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `qualification`
--
ALTER TABLE `qualification`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
