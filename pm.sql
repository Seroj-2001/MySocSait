-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 27, 2019 at 08:45 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reg`
--

-- --------------------------------------------------------

--
-- Table structure for table `pm`
--

CREATE TABLE `pm` (
  `id` int(20) NOT NULL,
  `uxarkox` int(20) NOT NULL,
  `stacox` int(20) NOT NULL,
  `message` text NOT NULL,
  `timestamp` datetime NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `pm`
--

INSERT INTO `pm` (`id`, `uxarkox`, `stacox`, `message`, `timestamp`) VALUES
(0, 58, 59, 'hopars privet', '0000-00-00 00:00:00'),
(0, 58, 59, 'hopars privet', '0000-00-00 00:00:00'),
(0, 58, 59, 'hopars privet', '0000-00-00 00:00:00'),
(0, 58, 59, 'Jan brats', '2012-02-16 00:00:00'),
(0, 58, 59, 'Jan brats', '2012-02-13 00:00:00'),
(0, 58, 59, 'Jan brats', '2012-02-11 00:00:00'),
(0, 58, 59, 'Jan brats', '2012-02-08 00:00:00'),
(0, 58, 59, 'Jan brats', '0000-00-00 00:00:00'),
(0, 58, 59, 'Jan brats', '0000-00-00 00:00:00'),
(0, 59, 58, 'ա»»աս»զֆղսդգզվ', '0000-00-00 00:00:00');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
