-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 09, 2016 at 02:31 PM
-- Server version: 5.5.50-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `siesaref`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `isadmin` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `isadmin`) VALUES
(5, 'omer', '202cb962ac59075b964b07152d234b70', 1),
(6, 'nightwatch', '3b1c8fa1f6b37676ee4a4be6b255d21a', 0),
(7, '0day', '882ef3e690d7420aae1d02f6f534a417', 1),
(8, 'devnull', '276f463b0bab8aca5e0664a13a3238f3', 0),
(9, 'bestHack', '247d80401932b641daab424084981ac8', 0),
(10, 'el_grande_admin', '83814e5556ed7b7def5a7276491fa73e', 0),
(11, 'nullByte', 'd5dcf98b1095dd09af50137371cd5405', 0),
(12, 'keep_calm', '142971049a4395be271855f8f946851e', 0),
(19, '0', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(20, '123', '202cb962ac59075b964b07152d234b70', 0),
(21, 'devnull', '9f80963cc95cf13a0e2d824c3c8baf24', 0),
(22, 'ali', '352e2cfc492950e031287db66980e95a', 0),
(25, 'murr4t', 'b3f62c82419a7f28593d0c8771db1714', 1),
(26, '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(27, '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(28, '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(29, 'keep_calm', '142971049a4395be271855f8f946851e', 0),
(30, '', 'd41d8cd98f00b204e9800998ecf8427e', 0),
(31, 'musteh4ck', 'c8837b23ff8aaa8a2dde915473ce0991', 0),
(32, 'keep_calm2', '142971049a4395be271855f8f946851e', 0);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
