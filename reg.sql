-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2019 at 07:39 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.3

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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `lastname` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `lastname`, `email`, `password`) VALUES
(1, '', 'Khachatryan', 'serojkhachatryan.777@mail.ru', 'd2cfa84254076beb5e8e26a155b4a88d'),
(2, 'seroj', 'Khachatryan', 'serojkhachatryan.777@mail.ru', '177dbcdebec49de36ba944c9d87e0319'),
(3, 'Vardges', 'Khachatryan', 'serojkhachatryan.777@mail.ru', '1dd43197e504bbe4bc3397278ed357b6'),
(4, 'Vardancho', 'Khachatryan', 'serojkhachatryan.777@mail.ru', 'd2cfa84254076beb5e8e26a155b4a88d'),
(5, 'Vardges', 'Khachatryan', 'serojkhachatryan.2001@mail.ru', 'd2cfa84254076beb5e8e26a155b4a88d'),
(6, 'Vardges', 'Khachatryan', 'isahakyan@mail.ru', 'bb617610662403a71cbe41526023cb0f'),
(7, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(8, '', '', '', 'd41d8cd98f00b204e9800998ecf8427e'),
(9, 'Vardges', 'Khachatryan', 'loging@mail.ru', '177dbcdebec49de36ba944c9d87e0319'),
(10, 'Vardges', 'Khachatryan', 'serojkhachatryan.777@mail.ru', '202cb962ac59075b964b07152d234b70'),
(11, 'Vardges', 'Khachatryan', 'serojkhachatryan.777@mail.ru', '202cb962ac59075b964b07152d234b70'),
(12, 'seroj', 'Khachatryan', 'serojkhachatryan.777@mail.ru', '68053af2923e00204c3ca7c6a3150cf7');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
