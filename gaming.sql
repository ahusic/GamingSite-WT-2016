-- phpMyAdmin SQL Dump
-- version 4.5.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Jun 06, 2016 at 08:34 PM
-- Server version: 5.7.9
-- PHP Version: 5.6.16

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `gaming`
--

-- --------------------------------------------------------

--
-- Table structure for table `comment`
--

DROP TABLE IF EXISTS `comment`;
CREATE TABLE IF NOT EXISTS `comment` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `comment` varchar(100) DEFAULT NULL,
  `date` datetime NOT NULL,
  `user` varchar(50) NOT NULL,
  `statusID` int(11) DEFAULT NULL,
  `comentOfComent` varchar(100) DEFAULT NULL,
  `comentId` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comment`
--

INSERT INTO `comment` (`id`, `comment`, `date`, `user`, `statusID`, `comentOfComent`, `comentId`) VALUES
(45, 'evo komentara moga', '2016-06-05 23:19:46', 'admin', 26, '', 0),
(46, '', '2016-06-05 23:19:54', 'admin', 0, 'evo i odgovora na komentar', 45),
(47, '', '2016-06-05 23:22:06', 'admin', 0, 'a evo joÅ¡ jednog', 45),
(48, 'radi li komentar?', '2016-06-06 20:25:35', 'admin', 44, NULL, NULL),
(49, NULL, '2016-06-06 20:26:30', 'admin', NULL, 'sad radi ne baca exception', 48),
(50, NULL, '2016-06-06 20:26:40', 'admin', NULL, 'ok opet je bacio ', 48),
(51, NULL, '2016-06-06 20:26:55', 'admin', NULL, 'sad nije :D', 48),
(52, NULL, '2016-06-06 20:27:02', 'admin', NULL, 'jos jednom ', 48),
(53, NULL, '2016-06-06 20:27:08', 'admin', NULL, 'sve uredu', 48),
(54, 'ovo je neki test komentar', '2016-06-06 20:27:21', 'admin', 44, NULL, NULL),
(55, NULL, '2016-06-06 20:27:30', 'admin', NULL, 'komentart na test komentar', 54);

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
CREATE TABLE IF NOT EXISTS `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `header` varchar(50) NOT NULL,
  `status` varchar(1000) NOT NULL,
  `date` datetime NOT NULL,
  `user` varchar(20) NOT NULL,
  `notification` int(11) NOT NULL DEFAULT '0',
  `aaaa` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=46 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`id`, `header`, `status`, `date`, `user`, `notification`, `aaaa`) VALUES
(24, 'Naslov vijesti', 'sadrzaj vijesti', '2016-06-05 20:33:06', 'amke', 0, 0),
(44, 'amketova prva vijest', 'sadrzaj amketove prve vijesti', '2016-06-05 23:32:02', 'amke', 5, 0),
(45, 'Nek je hairli spirala ova iz WT-a', 'Nema viÅ¡e...Divno je bilo druÅ¾iti se sa vama..Ova stranica ninaÅ¡ta ne liÄi, ali jednog dana hoÄ‡e bit Ä‡e to super dok se sve zavrÅ¡i..', '2016-06-06 20:32:09', 'admin', 0, 0);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) NOT NULL,
  `surname` varchar(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `admin` int(1) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `username`, `password`, `admin`) VALUES
(1, 'Administrator', 'ado', 'admin', 'password', 1),
(2, 'Almir', 'Husic', 'amke', 'password', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
