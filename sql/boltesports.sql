-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2023 at 11:42 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `boltesports`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `email`, `message`) VALUES
(1, 'Mohsin Ansari', 'ansarimohsin2005@gmail.com', ''),
(5, 'jertech', 'gtav5127863@gmail.com', 'hgdjhldgdsg'),
(6, 'Codeex', 'jghka@gmail.com', 'jhgsgagfds');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `Email` varchar(50) NOT NULL,
  `Password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `players`
--

CREATE TABLE `players` (
  `id` int(11) NOT NULL,
  `player1` varchar(50) NOT NULL,
  `player2` varchar(50) NOT NULL,
  `player3` varchar(50) NOT NULL,
  `player4` varchar(50) NOT NULL,
  `player5` varchar(50) NOT NULL,
  `email1` varchar(50) NOT NULL,
  `email2` varchar(50) NOT NULL,
  `email3` varchar(50) NOT NULL,
  `email4` varchar(50) NOT NULL,
  `email5` varchar(50) NOT NULL,
  `phone1` int(11) NOT NULL,
  `phone2` int(11) NOT NULL,
  `phone3` int(11) NOT NULL,
  `phone4` int(11) NOT NULL,
  `phone5` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `players`
--

INSERT INTO `players` (`id`, `player1`, `player2`, `player3`, `player4`, `player5`, `email1`, `email2`, `email3`, `email4`, `email5`, `phone1`, `phone2`, `phone3`, `phone4`, `phone5`) VALUES
(1, 'mohsin', 'arham', 'affnan', 'wahaj', 'taha', 'mohsin@gmail.com', 'arham@gmail.com', 'affnan@gmail.com', 'wahaj@gmail.com', 'taha@gmail.com', 216478165, 216478165, 216478165, 216478165, 216478165);

-- --------------------------------------------------------

--
-- Table structure for table `signin`
--

CREATE TABLE `signin` (
  `id` int(11) NOT NULL,
  `email` varchar(225) NOT NULL,
  `password` varchar(225) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `signin`
--

INSERT INTO `signin` (`id`, `email`, `password`) VALUES
(1, '', ''),
(6, 'ansarimohsin2005@gmail.com', ''),
(7, 'gtav5127863@gmail.com', 'mohsin');

-- --------------------------------------------------------

--
-- Table structure for table `teams`
--

CREATE TABLE `teams` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `teams`
--

INSERT INTO `teams` (`id`, `name`) VALUES
(1, 'OP');

-- --------------------------------------------------------

--
-- Table structure for table `visitor`
--

CREATE TABLE `visitor` (
  `id` int(11) NOT NULL,
  `browser_name` varchar(255) NOT NULL,
  `browser_version` varchar(255) NOT NULL,
  `type` varchar(255) NOT NULL,
  `os` varchar(255) NOT NULL,
  `url` varchar(255) NOT NULL,
  `ref` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `visitor`
--

INSERT INTO `visitor` (`id`, `browser_name`, `browser_version`, `type`, `os`, `url`, `ref`) VALUES
(1, 'Chrome', '116.0.0.0', 'PC', 'Window', 'http//localhost/boltesports/broswer/index.php', ''),
(2, 'Chrome', '116.0.0.0', 'PC', 'Window', 'http//localhost/boltesports/broswer/about.php', 'http://localhost/boltesports/broswer/index.php'),
(3, 'Chrome', '116.0.0.0', 'PC', 'Window', 'http//localhost/boltesports/broswer/index.php', 'http://localhost/boltesports/broswer/about.php'),
(4, 'Chrome', '116.0.0.0', 'PC', 'Window', 'http//localhost/boltesports/broswer/about.php', 'http://localhost/boltesports/broswer/index.php'),
(5, 'Chrome', '116.0.0.0', 'PC', 'Window', 'http//localhost/boltesports/broswer/index.php', 'http://localhost/boltesports/broswer/about.php'),
(6, 'Chrome', '116.0.0.0', 'PC', 'Window', 'http//localhost/boltesports/admin.php', ''),
(7, 'Chrome', '116.0.0.0', 'PC', 'Window', 'http//localhost/boltesports/admin.php', ''),
(8, 'Chrome', '116.0.0.0', 'PC', 'Window', 'http//localhost/boltesports/admin.php', ''),
(9, 'Chrome', '116.0.0.0', 'PC', 'Window', 'http//localhost/boltesports/admin.php', ''),
(10, 'Chrome', '116.0.0.0', 'PC', 'Window', 'http//localhost/boltesports/admin.php', ''),
(11, 'Chrome', '116.0.0.0', 'PC', 'Window', 'http//localhost/boltesports/admin.php', ''),
(12, 'Chrome', '116.0.0.0', 'PC', 'Window', 'http//localhost/boltesports/admin.php', ''),
(13, 'Chrome', '116.0.0.0', 'PC', 'Window', 'http//localhost/boltesports/admin.php', ''),
(14, 'Chrome', '116.0.0.0', 'PC', 'Window', 'http//localhost/boltesports/admin.php', ''),
(15, 'Chrome', '116.0.0.0', 'PC', 'Window', 'http//localhost/boltesports/admin.php', '');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`Email`);

--
-- Indexes for table `players`
--
ALTER TABLE `players`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `phone1` (`phone1`,`phone2`),
  ADD UNIQUE KEY `email1` (`email1`),
  ADD UNIQUE KEY `email2` (`email2`),
  ADD UNIQUE KEY `email3` (`email3`),
  ADD UNIQUE KEY `email4` (`email4`),
  ADD UNIQUE KEY `email5` (`email5`),
  ADD KEY `id` (`id`);

--
-- Indexes for table `signin`
--
ALTER TABLE `signin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `teams`
--
ALTER TABLE `teams`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`);

--
-- Indexes for table `visitor`
--
ALTER TABLE `visitor`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `players`
--
ALTER TABLE `players`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `signin`
--
ALTER TABLE `signin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `teams`
--
ALTER TABLE `teams`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `visitor`
--
ALTER TABLE `visitor`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
