-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 16, 2015 at 07:41 AM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `qtq`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE IF NOT EXISTS `company` (
  `id` int(100) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `web` varchar(255) DEFAULT NULL,
  `fb` varchar(255) DEFAULT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `invoice` varchar(255) DEFAULT NULL,
  `area` varchar(100) DEFAULT NULL,
  `trade` varchar(100) DEFAULT NULL,
  `rpro` int(11) DEFAULT NULL,
  `rser` int(11) DEFAULT NULL,
  `rpun` int(11) DEFAULT NULL,
  `rwork` int(11) DEFAULT NULL,
  `rprice` int(11) DEFAULT NULL,
  `recom` int(11) DEFAULT NULL,
  `totalstar` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=26 ;

--
-- Dumping data for table `company`
--

INSERT INTO `company` (`id`, `name`, `web`, `fb`, `contact`, `invoice`, `area`, `trade`, `rpro`, `rser`, `rpun`, `rwork`, `rprice`, `recom`, `totalstar`) VALUES
(2, 'test', 'test.com', 'facebook.com/test', '123456', '123456', 'test area', 'ball', 3, 2, 5, 2, 4, 1, 16),
(4, 'test2', 'test2.com', 'hhhhhh', '11111', '1111', '1111', '1111', 5, 5, 5, 5, 5, 0, 25),
(5, 'xx', 'xx', 'xx', '', '', 'xx', 'xxx', 4, 3, 4, 1, 4, 1, 16),
(6, 'final test', 'finaltest.com', 'facebook.com/finaltest', '420420', '000000', 'nai', 'gold', 4, 4, 4, 3, 5, 1, 20),
(7, 'hdsbjs', 'fnafvha', 'asfjadfbj', 'dhbjk', 'dadfsdgs', 'dasfaffafaffsdd', 'sdasdas', 4, 5, 4, 4, 5, 0, 22),
(9, 'jdjdjb', 'afafaf', 'sdasd', 'dddd', 'dddd', 'dddd', 'dddd', 0, 0, 0, 0, 0, 1, 0),
(10, 'jdjdjb', 'afafaf', 'sdasd', 'dddd', 'dddd', 'dddd', 'dddd', 0, 0, 0, 0, 0, 1, 0),
(11, 'f', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0),
(12, 'd', '', '', '', '', '', '', 0, 0, 0, 0, 0, 0, 0),
(13, 'd', '', '', '', '', '', 'd', 0, 0, 0, 0, 0, 1, 0),
(14, 'd', '', '', '', '', '', 'd', 0, 0, 0, 0, 0, 1, 0),
(15, 'hdsbjs', 'fnafvha', 'asfjadfbj', 'dhbjk', '0578][[', '3224', '35472', 4, 3, 3, 3, 4, 1, 17),
(16, 'test5', 'test5add', 'test5@facebook.com', 'test5555', '5252', 'dhaka', '1000', 4, 3, 3, 4, 5, 1, 19),
(17, 'test', 'test.com', 'facebook.com/test', '123456', '', '', '', 0, 0, 0, 0, 4, 1, 4),
(18, 'test', 'test.com', 'facebook.com/test', '123456', '', '', '', 0, 0, 0, 0, 4, 1, 4),
(19, 'test', 'test.com', 'facebook.com/test', '123456', '', '', '', 0, 0, 0, 0, 3, 1, 3),
(20, 'test', 'test.com', 'facebook.com/test', '123456', '', '', '', 0, 0, 0, 0, 5, 1, 5),
(21, 'test', 'test.com', 'facebook.com/test', '123456', '', '', '', 3, 0, 0, 0, 0, 1, 3),
(22, 'test', 'test.com', 'facebook.com/test', '123456', '', '', '', 0, 0, 4, 0, 0, 1, 4),
(23, 'Joyent', '45', '', '', '', '', 'ff', 5, 0, 4, 0, 5, 1, 14),
(24, 'Joyent', '45', '', '', '', '', '', 0, 0, 0, 0, 0, 1, 0),
(25, 'Joyent', '45', '', '', '', '', '', 0, 0, 0, 0, 0, 1, 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
