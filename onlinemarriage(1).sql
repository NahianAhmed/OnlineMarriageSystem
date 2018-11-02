-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 02, 2018 at 01:25 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `onlinemarriage`
--

-- --------------------------------------------------------

--
-- Table structure for table `marriagelist`
--

CREATE TABLE `marriagelist` (
  `id` int(11) NOT NULL,
  `date` varchar(15) DEFAULT NULL,
  `RegNo` varchar(15) DEFAULT NULL,
  `d1` text NOT NULL,
  `d2` text NOT NULL,
  `d3` text NOT NULL,
  `d4` text NOT NULL,
  `d5` text NOT NULL,
  `d6` text NOT NULL,
  `d7` text NOT NULL,
  `d8` text NOT NULL,
  `d9` text NOT NULL,
  `d10` text NOT NULL,
  `d11` text NOT NULL,
  `d12` text NOT NULL,
  `d13` text NOT NULL,
  `d14` text NOT NULL,
  `d15` text NOT NULL,
  `d16` text NOT NULL,
  `d17` text NOT NULL,
  `d18` text NOT NULL,
  `d19` text NOT NULL,
  `d20` text NOT NULL,
  `d21` text NOT NULL,
  `d22` text NOT NULL,
  `d23` text NOT NULL,
  `d24` text NOT NULL,
  `d25` text NOT NULL,
  `d26` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `marriagelist`
--

INSERT INTO `marriagelist` (`id`, `date`, `RegNo`, `d1`, `d2`, `d3`, `d4`, `d5`, `d6`, `d7`, `d8`, `d9`, `d10`, `d11`, `d12`, `d13`, `d14`, `d15`, `d16`, `d17`, `d18`, `d19`, `d20`, `d21`, `d22`, `d23`, `d24`, `d25`, `d26`) VALUES
(3, '2018/11/02', '22074074', 'ZASaS', 'asAS', 'asAS', 'asAS', 'asASA', 'sAS', 'ASas', 'ASasaSa', 'sASas', 'ASas', 'ASas', 'ASas', 'ASas', 'aSAs', 'aSas', 'aSas', 'aSas', 'ASas', 'asas', 'asaS', 'ASas', 'aSas', 'aSAs', 'asAS', 'asas', '5137');

-- --------------------------------------------------------

--
-- Table structure for table `qazi`
--

CREATE TABLE `qazi` (
  `id` int(11) NOT NULL,
  `RegID` text NOT NULL,
  `email` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qazi`
--

INSERT INTO `qazi` (`id`, `RegID`, `email`) VALUES
(1, '5137', 'nahian15-5137@diu.edu.bd');

-- --------------------------------------------------------

--
-- Table structure for table `qazilist`
--

CREATE TABLE `qazilist` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `RegID` text NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `qazilist`
--

INSERT INTO `qazilist` (`id`, `name`, `email`, `RegID`, `password`) VALUES
(2, 'Nahian', 'nahian15-5137@diu.edu.bd', '5137', 'a665a45920422f9d417e4867efdc4fb8a04a1f3fff1fa07e998e86f7f7a27ae3');

-- --------------------------------------------------------

--
-- Table structure for table `question`
--

CREATE TABLE `question` (
  `id` int(11) NOT NULL,
  `name` text NOT NULL,
  `email` text NOT NULL,
  `subject` text NOT NULL,
  `message` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `question`
--

INSERT INTO `question` (`id`, `name`, `email`, `subject`, `message`) VALUES
(13, 'Nahian', 'nahian@gamil.com', 'Testing A', 'testing');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `marriagelist`
--
ALTER TABLE `marriagelist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qazi`
--
ALTER TABLE `qazi`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `qazilist`
--
ALTER TABLE `qazilist`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `question`
--
ALTER TABLE `question`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `marriagelist`
--
ALTER TABLE `marriagelist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `qazi`
--
ALTER TABLE `qazi`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `qazilist`
--
ALTER TABLE `qazilist`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `question`
--
ALTER TABLE `question`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
