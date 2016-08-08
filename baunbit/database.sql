-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 08, 2016 at 10:34 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `lyk2016`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` text NOT NULL,
  `password` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=122 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `image`) VALUES
(1, 'omer', '4297f44b13955235245b2497399d7a93', 'omer.jpg'),
(2, 'murat', '4297f44b13955235245b2497399d7a93', 'mustafa.jpg'),
(3, 'bestHack', '247d80401932b641daab424084981ac8', ''),
(4, '0Day', '8cf57ba30abc9656bc98a8b33b253ca1', ''),
(5, 'NULL', '9f80963cc95cf13a0e2d824c3c8baf24', ''),
(6, 'nullByte', '798ffd360d66ceca60d8af970406f6c4', ''),
(7, 'nightwatch', '3b1c8fa1f6b37676ee4a4be6b255d21a', ''),
(8, 'keep_calm', '142971049a4395be271855f8f946851e', ''),
(9, 'null', '9f80963cc95cf13a0e2d824c3c8baf24', ''),
(10, 'keep_calm', 'b4f7cd6fc09ad2ced115684861dc4847', ''),
(11, 'adnagu', 'ddcd5141cf41c9a200ba42da00421dd5', ''),
(121, 'asdasd', 'efe6398127928f1b2e9ef3207fb82663', 'xss.php');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
