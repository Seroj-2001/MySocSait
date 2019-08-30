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
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `user_id` int(11) NOT NULL,
  `title` varchar(9999) NOT NULL,
  `id` int(99) NOT NULL,
  `text` longtext NOT NULL,
  `img` text NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`user_id`, `title`, `id`, `text`, `img`, `date`) VALUES
(58, 'ՈՄԱ', 385, 'Անցկացվելով դաշտային պայմաններում, որոնք մաքսիմալ նմանեցված ենմարտական պայմաններին, ստեղծվում է կամավորների ֆիզիկական և բարոյական որակների մաքսիմալ կենտրոնացվածություն։ Հավաքների ընթացքում բացի մարտական և գոյատևման կարողություններից, մասնակիցները նաև ծանոթանում են տարածքի և այնտեղի բնակչությանը։ Ինչպես նաև ծանոթանում են տարբեր տեսակի զենքերի նյութական մասին և մասնակցում են կրակային դասընթացների տարբեր զորամասերում։\r\n', '2019-08-21-22-04-13-2019-08-02-14-14-19-IMG_3487.jpg', '0000-00-00'),
(59, 'ՔՈՍՖԴՍԴ', 386, 'ԳՍՍԳՍԳ', '2019-08-25-20-44-30-2019-08-16-09-21-54-IMG_3339.jpg', '0000-00-00'),
(59, 'ՈԵ»ՍՖՀԴԶԴՖՑՅՎՂԴՖՅԴՖ', 387, 'ՅԴՖՅՍԴՖՅՍԴՖՅ', '2019-08-25-20-44-51-2019-08-02-14-15-36-IMG_3487.jpg', '0000-00-00'),
(59, 'SDHASFH', 388, 'SDFZHSDHASDHGADHADH', '2019-08-25-20-45-07-2019-08-02-14-15-36-IMG_3487.jpg', '0000-00-00');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(99) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=389;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
