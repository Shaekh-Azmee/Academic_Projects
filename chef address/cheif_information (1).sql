-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jan 16, 2021 at 12:06 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.2.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cheif_information`
--

-- --------------------------------------------------------

--
-- Table structure for table `chefs`
--

CREATE TABLE `chefs` (
  `id` int(11) NOT NULL,
  `name` varchar(150) DEFAULT NULL,
  `experienceYear` int(11) DEFAULT NULL,
  `expectedSalary` double DEFAULT NULL,
  `specalist` varchar(150) DEFAULT NULL,
  `image` varchar(150) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `chefs`
--

INSERT INTO `chefs` (`id`, `name`, `experienceYear`, `expectedSalary`, `specalist`, `image`) VALUES
(1, 'jubayer ahmed', 10, 20000, 'some specialist', 'download.jpg'),
(2, 'fdg', 100, 2000, 'some specialist g', '6-restaurant-facebook-covers-vol-26-.jpg'),
(3, 'fdgfdg', 1045, 4234, 'fdgfdgh', 'images.jpg'),
(4, 'fdgfdvf h', 4325, 4356, 'fdgfdghfsd', 'zzz.PNG'),
(5, 'Sadman', 12, 40000, 'Bakery', 'vector.png'),
(6, 'jubayer', 3, 25000, 'station chef', 'team-3.jpg'),
(7, 'azmee', 12, 120000, 'head chef', 'team-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `idUsers` int(11) NOT NULL,
  `uidUsers` tinytext NOT NULL,
  `emailUsers` tinytext NOT NULL,
  `pwdUsers` longtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`idUsers`, `uidUsers`, `emailUsers`, `pwdUsers`) VALUES
(1, 'admin', 'majharulevan@gmail.com', '$2y$10$LXmH6yw7jdgX81aPQKP7FuC4s6fPNpn4/RmgsH3qOV9Zfmd1RlmTW'),
(2, 'daniel', 'majharulevan@gmail.com', '$2y$10$Uuj6R9VKYDZs/Oi0kbwTPuE.zCc10iW6BfYbiRmclXyGn5/WL3ER.'),
(3, 'mahir', 'mahir@gmail.com', '$2y$10$f1uzlS0sUH321gFmVprR..Dtl2syUYSB0kddA23/RQYe7QEXmyYE.'),
(4, 'torres', 'torres@gmail.com', '$2y$10$wMtaPgibVcHwmKAhpT8dN.Kf2jBiHr89KhhiDQUdwf7vinX/PVIuW');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `chefs`
--
ALTER TABLE `chefs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`idUsers`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `chefs`
--
ALTER TABLE `chefs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `idUsers` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
