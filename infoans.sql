-- phpMyAdmin SQL Dump
-- version 4.9.5
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 14, 2021 at 07:38 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `infoans`
--

-- --------------------------------------------------------

--
-- Table structure for table `click`
--

CREATE TABLE `click` (
  `id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `clicks` int(11) NOT NULL,
  `click_type` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `click`
--

INSERT INTO `click` (`id`, `user_id`, `clicks`, `click_type`, `date`) VALUES
(1, 1, 27, 1, '2021-04-12'),
(2, 1, 24, 2, '2021-04-12'),
(3, 1, 33, 3, '2021-04-12'),
(4, 2, 33, 1, '2021-04-12'),
(5, 2, 23, 2, '2021-04-12'),
(6, 2, 35, 3, '2021-04-12'),
(7, 3, 15, 2, '2021-04-13'),
(8, 3, 13, 1, '2021-04-13'),
(9, 3, 10, 3, '2021-04-13'),
(10, 1, 322, 1, '2021-04-14'),
(11, 1, 64, 2, '2021-04-14'),
(12, 1, 85, 3, '2021-04-14'),
(13, 4, 102, 1, '2021-04-14'),
(14, 4, 14, 2, '2021-04-14'),
(15, 4, 43, 3, '2021-04-14'),
(16, 2, 43, 3, '2021-04-14'),
(17, 2, 26, 2, '2021-04-14'),
(18, 2, 110, 1, '2021-04-14'),
(19, 5, 134, 1, '2021-04-14'),
(20, 5, 205, 2, '2021-04-14'),
(21, 5, 83, 3, '2021-04-14');

-- --------------------------------------------------------

--
-- Table structure for table `click_types`
--

CREATE TABLE `click_types` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `click_types`
--

INSERT INTO `click_types` (`id`, `name`) VALUES
(1, 'CLICK ME!'),
(2, 'CLICK HERE!'),
(3, 'CLICK THIS!');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `email`, `password`) VALUES
(1, 'marteein@gmail.com', 'c52efcaa48778a6de517f6c4696c7ccc27e0ebb1'),
(2, 'pcanton@gmail.com', '7e3a5aa81b84b12ba0cceba0e0e5ab214153d91b'),
(3, 'beproductiverina1@gmail.com', 'dac07e52d27551e3d4b259731ec3f49710457a04'),
(4, 'juanmiguelbilbao7@gmail.com', '40bd001563085fc35165329ea1ff5c5ecbdbbeef'),
(5, 'luckyme@gmail.com', 'be70dbaf7fbd52f2cacd7e25febb2691bef9e0ec');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `fname` varchar(255) NOT NULL,
  `lname` varchar(255) NOT NULL,
  `uname` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `fname`, `lname`, `uname`, `contact`) VALUES
(1, 'Marteein', 'Yambalia', 'marteein', '091234343344'),
(2, 'Pancit', 'Canton', 'pcanton', '09123456789'),
(3, 'Rina Anne Gizelle', 'Soriano', 'Rina', '09297017072'),
(4, 'Juan Miguel', 'Bilbao', 'ira', '09154398212'),
(5, 'Lucky ', 'Me', 'Noodles', '09123434343');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `click`
--
ALTER TABLE `click`
  ADD PRIMARY KEY (`id`),
  ADD KEY `click_info` (`user_id`),
  ADD KEY `click_typeof` (`click_type`);

--
-- Indexes for table `click_types`
--
ALTER TABLE `click_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
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
-- AUTO_INCREMENT for table `click`
--
ALTER TABLE `click`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `click_types`
--
ALTER TABLE `click_types`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `click`
--
ALTER TABLE `click`
  ADD CONSTRAINT `click_info` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `click_typeof` FOREIGN KEY (`click_type`) REFERENCES `click_types` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
