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
-- Database: `baklava_cms`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE IF NOT EXISTS `groups` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(127) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=9 ;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`) VALUES
(1, 'Nullbyte'),
(2, '0Day'),
(3, 'KeepCalm'),
(4, 'Nightwatsh'),
(5, 'BestHack'),
(6, 'DevNull'),
(7, 'Ilknur OZEN'),
(8, 'HocalarTEAM');

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE IF NOT EXISTS `payments` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date` varchar(127) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `group_id` int(11) NOT NULL,
  `name` varchar(127) COLLATE utf8_unicode_ci NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci AUTO_INCREMENT=32 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `group_id`, `name`) VALUES
(1, 4, 'KADİR KURT'),
(2, 3, 'ERDEM OFLAZ'),
(3, 4, 'ZEYNEP YURT'),
(4, 5, 'Ahmet Erşin'),
(5, 4, 'SERTUNÇ SELEN'),
(6, 5, 'İsmail Kunduracıoğlu'),
(7, 5, 'Büşra Uman'),
(8, 5, 'Mevlüt Aydemir'),
(9, 3, 'Taha Baş'),
(10, 1, 'Emre AKPINAR'),
(11, 4, 'UFUK TAŞ'),
(12, 3, 'Mert Gücü'),
(13, 3, 'Merve AKAY'),
(15, 1, 'Oğuzhan Karaaslan'),
(16, 3, 'Ege Tekiner'),
(17, 1, 'Emre AKPINAR'),
(18, 1, 'Bahadır YARDIM'),
(19, 2, 'Nikita TURKMEN'),
(20, 2, 'Ramazan VAPURCU'),
(21, 2, 'Musa ŞANA'),
(22, 1, 'ILKNUR OZEN'),
(24, 6, 'Alper Sarper'),
(26, 6, 'Eda Solak'),
(27, 6, 'Burak Çakmak'),
(28, 6, 'Ahmet Kun'),
(29, 6, 'Mücahit Demirhan'),
(30, 8, 'Omer CITAK'),
(31, 8, 'Murat YILMAZLAR');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
