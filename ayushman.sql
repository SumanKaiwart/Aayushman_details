-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Sep 09, 2023 at 05:56 AM
-- Server version: 5.7.36
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ayushman`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `sn` int(20) NOT NULL AUTO_INCREMENT,
  `cname` text,
  `mobile` varchar(255) DEFAULT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`sn`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`sn`, `cname`, `mobile`, `date`) VALUES
(1, 'Roshan kumar', '7485963214', '0000-00-00 00:00:00'),
(2, 'Suman Kaiwart', '8574963214', '0000-00-00 00:00:00'),
(3, 'priya', '7489257579', '0000-00-00 00:00:00'),
(4, 'rohan', '8574963214', '2023-09-03 06:44:30'),
(7, 'Kiran saw', '7485123604', '2023-09-09 05:53:24'),
(8, 'Meha', '8596321478', '2023-09-09 05:53:34'),
(9, 'Ratan kaushik', '7485963214', '2023-09-09 05:53:54'),
(10, 'Himesh rajput', '7418529630', '2023-09-09 05:54:07'),
(11, 'narayan das', '85749632145', '2023-09-09 05:54:26'),
(12, 'Mohan', '8596321477', '2023-09-09 05:54:38'),
(13, 'Narayan soni', '7485147852', '2023-09-09 05:54:48'),
(14, 'Mahesh', '784521369', '2023-09-09 05:54:58'),
(15, 'Madhav', '7314526987', '2023-09-09 05:55:10');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
