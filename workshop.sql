-- phpMyAdmin SQL Dump
-- version 4.3.11
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 10, 2015 at 11:14 AM
-- Server version: 5.6.24
-- PHP Version: 5.6.8

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `workshop`
--

-- --------------------------------------------------------

--
-- Table structure for table `admid`
--

CREATE TABLE IF NOT EXISTS `admid` (
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `admid`
--

INSERT INTO `admid` (`username`, `password`) VALUES
('sueb', '1234'),
('', '');

-- --------------------------------------------------------

--
-- Table structure for table `message`
--

CREATE TABLE IF NOT EXISTS `message` (
  `ID` int(11) NOT NULL,
  `recipients` varchar(15) NOT NULL,
  `message` text NOT NULL,
  `sender` varchar(15) NOT NULL,
  `status` varchar(2) NOT NULL
) ENGINE=InnoDB AUTO_INCREMENT=308 DEFAULT CHARSET=utf8;

--
-- Dumping data for table `message`
--

INSERT INTO `message` (`ID`, `recipients`, `message`, `sender`, `status`) VALUES
(178, 'Jame', 'ลอง F แบบมาหน้าแอดมิน', 'Jame', 'T'),
(180, 'Jame', 'ahha', 'Jame', 'T'),
(182, 'jame ', 'rrrr ', ' mint', 'T'),
(200, 'mint', 'ส่งมิ้น', 'Jame', 'T'),
(205, 'mint', 'ส่งมิ้นรอบ3', 'Jame', 'T'),
(206, 'mint', 'Fvg8', 'Jame', 'T'),
(207, 'mint', '55000', 'Jame', 'T'),
(213, 'mint', 'fufu', 'Jame', 'T'),
(214, 'mint', 'อะไรนะ', 'Jame', 'T'),
(215, 'mint', 'goodgame', 'Jame', 'T'),
(227, 'Jame', 'lloopp', 'Jame', 'T'),
(286, 'jame', 'lol', 'Jame', 'T'),
(288, 'champ', 'ตามนั้นเลย', 'Jame', 'T'),
(294, 'champ', 'k นาา', 'Jame', 'T'),
(295, 'champ', 'kkk', 'Jame', 'T'),
(296, 'champ', 'ตามนั้น', 'Jame', 'T'),
(297, 'jame  ', '4  ', ' mint', ''),
(298, 'jame ', '66 ', ' mint', ''),
(299, 'jame ', '4444 ', ' mint', ''),
(303, 'jame  ', 'eeg  ', ' mint', ''),
(304, 'Jame', 'ลอง F แบบมาหน้าแอดมิน', 'Jame', ''),
(305, 'jame', 'kkji', 'jame', 'T'),
(306, 'jame', 'kkji', 'jame', ''),
(307, 'jame ', '1 ', ' mint', '');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `username` varchar(10) NOT NULL,
  `IPaddress` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `IPaddress`) VALUES
('Champ', '10.70.77.161'),
('Jame', '10.70.19.36'),
('Mint', '10.70.60.201'),
('Toomtam', '10.73.18.236');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `message`
--
ALTER TABLE `message`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `message`
--
ALTER TABLE `message`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=308;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
