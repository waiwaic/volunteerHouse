-- phpMyAdmin SQL Dump
-- version 5.0.0-dev
-- https://www.phpmyadmin.net/
--
-- Host: mysql
-- Generation Time: May 13, 2018 at 06:37 AM
-- Server version: 5.7.20
-- PHP Version: 7.1.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `thehomeofvolunteers`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment` text,
  `name` char(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment`, `name`) VALUES
('123', '456'),
('999', '888'),
('123', '456'),
('test', 'test'),
('hello', 'h'),
('456', '123'),
('88888888888888888888888888', '99999999'),
('2', '2'),
('9', '9'),
('7', '7'),
('999', '888'),
('8', '7'),
('888', '999'),
('2', '2'),
('10', '9'),
('8', '8'),
('7', '7'),
('73', '3'),
('1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `stars`
--

CREATE TABLE `stars` (
  `id` int(11) DEFAULT NULL,
  `star` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `stars`
--

INSERT INTO `stars` (`id`, `star`) VALUES
(0, 0),
(1, 179);

-- --------------------------------------------------------

--
-- Table structure for table `t_volunteer`
--

CREATE TABLE `t_volunteer` (
  `id` int(11) NOT NULL,
  `name` varchar(20) COLLATE utf8_bin NOT NULL,
  `phoneNum` varchar(11) COLLATE utf8_bin NOT NULL,
  `type` varchar(50) COLLATE utf8_bin NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_bin;

--
-- Dumping data for table `t_volunteer`
--

INSERT INTO `t_volunteer` (`id`, `name`, `phoneNum`, `type`) VALUES
(11, '11111111', '22222222222', '\"雷锋月“--禁烟行动'),
(12, '123', '456', '\"雷锋月“--禁烟行动'),
(13, 'test', '111', '\"雷锋月“--禁烟行动'),
(14, 'hh', '1111', '关爱老年人、践行雷锋精神'),
(15, '陈', '123456789', '\"雷锋月“--禁烟行动'),
(16, 'yy', '12345678911', '关爱老年人、践行雷锋精神'),
(17, '雷小锋', '189263541', '\"雷锋月“--禁烟行动'),
(18, '雷大锋', '123456789', '\"雷锋月“--禁烟行动');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `t_volunteer`
--
ALTER TABLE `t_volunteer`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `t_volunteer`
--
ALTER TABLE `t_volunteer`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
