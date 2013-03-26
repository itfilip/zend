-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 30, 2013 at 06:13 PM
-- Server version: 5.1.53
-- PHP Version: 5.3.4

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `zf-tutorial`
--

-- --------------------------------------------------------

--
-- Table structure for table `albums`
--

CREATE TABLE IF NOT EXISTS `albums` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `artist` varchar(100) NOT NULL,
  `title` varchar(100) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=151 ;

--
-- Dumping data for table `albums`
--

INSERT INTO `albums` (`id`, `artist`, `title`) VALUES
(1, 'Paolo Nutine1', 'Sunny Side Up'),
(2, 'Florence + The Machine', 'Lungs'),
(3, 'Massive Attack', 'Heligoland'),
(4, 'Andre Rieu', 'Forever Vienna'),
(5, 'Sade', 'Soldier of Love'),
(6, 'Paolo Nutine', 'Sunny Side Up'),
(7, 'Florence + The Machine', 'Lungs'),
(8, 'Massive Attack', 'Heligoland'),
(9, 'Andre Rieu', 'Forever Vienna'),
(10, 'Sade', 'Soldier of Love'),
(11, 'Paolo Nutine2', 'Sunny Side Up'),
(12, 'Florence + The Machine', 'Lungs'),
(13, 'Massive Attack', 'Heligoland'),
(14, 'Andre Rieu', 'Forever Vienna'),
(15, 'Sade', 'Soldier of Love'),
(16, 'Paolo Nutine', 'Sunny Side Up'),
(17, 'Florence + The Machine', 'Lungs'),
(18, 'Massive Attack', 'Heligoland'),
(19, 'Andre Rieu', 'Forever Vienna'),
(20, 'Sade', 'Soldier of Love'),
(21, 'Paolo Nutine', 'Sunny Side Up'),
(22, 'Florence + The Machine', 'Lungs'),
(23, 'Massive Attack3', 'Heligoland'),
(24, 'Andre Rieu', 'Forever Vienna'),
(25, 'Sade', 'Soldier of Love'),
(26, 'Paolo Nutine', 'Sunny Side Up'),
(27, 'Florence + The Machine', 'Lungs'),
(28, 'Massive Attack', 'Heligoland'),
(29, 'Andre Rieu3', 'Forever Vienna'),
(30, 'Sade', 'Soldier of Love'),
(31, 'Paolo Nutine4', 'Sunny Side Up'),
(32, 'Florence + The Machine', 'Lungs'),
(33, 'Massive Attack', 'Heligoland'),
(34, 'Andre Rieu', 'Forever Vienna'),
(35, 'Sade', 'Soldier of Love'),
(36, 'Paolo Nutine4', 'Sunny Side Up'),
(37, 'Florence + The Machine', 'Lungs4'),
(38, 'Massive Attack', 'Heligoland'),
(39, 'Andre Rieu', 'Forever Vienna'),
(40, 'Sade', 'Soldier of Love'),
(41, 'Paolo Nutine', 'Sunny Side Up'),
(42, 'Florence + The Machine', 'Lungs'),
(43, 'Massive Attack', 'Heligoland'),
(44, 'Andre Rieu', 'Forever Vienna'),
(45, 'Sade', 'Soldier of Love'),
(46, 'Paolo Nutine5', 'Sunny Side Up'),
(47, 'Florence + The Machine', 'Lungs'),
(48, 'Massive Attack', 'Heligoland'),
(49, 'Andre Rieu', 'Forever Vienna'),
(50, 'Sade', 'Soldier of Love'),
(51, 'Paolo Nutine', 'Sunny Side Up'),
(52, 'Florence + The Machine', 'Lungs'),
(53, 'Massive Attack', 'Heligoland'),
(54, 'Andre Rieu', 'Forever Vienna'),
(55, 'Sade', 'Soldier of Love'),
(56, 'Paolo Nutine6', 'Sunny Side Up'),
(57, 'Florence + The Machine', 'Lungs'),
(58, 'Massive Attack', 'Heligoland'),
(59, 'Andre Rieu', 'Forever Vienna'),
(60, 'Sade', 'Soldier of Love'),
(61, 'Paolo Nutine', 'Sunny Side Up'),
(62, 'Florence + The Machine', 'Lungs'),
(63, 'Massive Attack', 'Heligoland'),
(64, 'Andre Rieu', 'Forever Vienna'),
(65, 'Sade', 'Soldier of Love'),
(66, 'Paolo Nutine7', 'Sunny Side Up7'),
(67, 'Florence + The Machine', 'Lungs7'),
(68, 'Massive Attack', 'Heligoland'),
(69, 'Andre Rieu', 'Forever Vienna'),
(70, 'Sade', 'Soldier of Love'),
(71, 'Paolo Nutine', 'Sunny Side Up'),
(72, 'Florence + The Machine', 'Lungs'),
(73, 'Massive Attack', 'Heligoland'),
(74, 'Andre Rieu', 'Forever Vienna'),
(75, 'Sade', 'Soldier of Love'),
(76, 'Paolo Nutine', 'Sunny Side Up'),
(77, 'Florence + The Machine', 'Lungs'),
(78, 'Massive Attack', 'Heligoland'),
(79, 'Andre Rieu', 'Forever Vienna'),
(80, 'Sade', 'Soldier of Love'),
(81, 'Paolo Nutine', 'Sunny Side Up'),
(82, 'Florence + The Machine', 'Lungs'),
(83, 'Massive Attack', 'Heligoland'),
(84, 'Andre Rieu', 'Forever Vienna'),
(85, 'Sade', 'Soldier of Love'),
(86, 'Paolo Nutine', 'Sunny Side Up'),
(87, 'Florence + The Machine', 'Lungs'),
(88, 'Massive Attack', 'Heligoland'),
(89, 'Andre Rieu', 'Forever Vienna'),
(90, 'Sade', 'Soldier of Love'),
(91, 'Paolo Nutine', 'Sunny Side Up'),
(92, 'Florence + The Machine', 'Lungs'),
(93, 'Massive Attack', 'Heligoland'),
(94, 'Andre Rieu', 'Forever Vienna'),
(95, 'Sade', 'Soldier of Love'),
(96, 'Paolo Nutine', 'Sunny Side Up'),
(97, 'Florence + The Machine', 'Lungs'),
(98, 'Massive Attack', 'Heligoland'),
(99, 'Andre Rieu', 'Forever Vienna'),
(100, 'Sade', 'Soldier of Love'),
(101, 'Paolo Nutine', 'Sunny Side Up'),
(102, 'Florence + The Machine', 'Lungs'),
(103, 'Massive Attack', 'Heligoland'),
(104, 'Andre Rieu', 'Forever Vienna'),
(105, 'Sade', 'Soldier of Love'),
(106, 'Paolo Nutine', 'Sunny Side Up'),
(107, 'Florence + The Machine', 'Lungs'),
(108, 'Massive Attack', 'Heligoland'),
(109, 'Andre Rieu', 'Forever Vienna'),
(110, 'Sade', 'Soldier of Love'),
(111, 'Paolo Nutine', 'Sunny Side Up'),
(112, 'Florence + The Machine', 'Lungs'),
(113, 'Massive Attack', 'Heligoland'),
(114, 'Andre Rieu', 'Forever Vienna'),
(115, 'Sade', 'Soldier of Love'),
(116, 'Paolo Nutine', 'Sunny Side Up'),
(117, 'Florence + The Machine', 'Lungs'),
(118, 'Massive Attack', 'Heligoland'),
(119, 'Andre Rieu', 'Forever Vienna'),
(120, 'Sade', 'Soldier of Love'),
(121, 'Paolo Nutine', 'Sunny Side Up'),
(122, 'Florence + The Machine', 'Lungs'),
(123, 'Massive Attack', 'Heligoland'),
(124, 'Andre Rieu', 'Forever Vienna'),
(125, 'Sade', 'Soldier of Love'),
(126, 'Paolo Nutine', 'Sunny Side Up'),
(127, 'Florence + The Machine', 'Lungs'),
(128, 'Massive Attack', 'Heligoland'),
(129, 'Andre Rieu', 'Forever Vienna'),
(130, 'Sade', 'Soldier of Love'),
(131, 'Paolo Nutine', 'Sunny Side Up'),
(132, 'Florence + The Machine', 'Lungs'),
(133, 'Massive Attack', 'Heligoland'),
(134, 'Andre Rieu', 'Forever Vienna'),
(135, 'Sade', 'Soldier of Love'),
(136, 'Paolo Nutine', 'Sunny Side Up'),
(137, 'Florence + The Machine', 'Lungs'),
(138, 'Massive Attack', 'Heligoland'),
(139, 'Andre Rieu', 'Forever Vienna'),
(140, 'Sade', 'Soldier of Love'),
(141, 'Paolo Nutine', 'Sunny Side Up'),
(142, 'Florence + The Machine', 'Lungs15'),
(143, 'Massive Attack', 'Heligoland'),
(144, 'Andre Rieu15', 'Forever Vienna'),
(145, 'Sade15', 'Soldier of Love'),
(146, 'Paolo Nutine15', 'Sunny Side Up'),
(147, 'Florence + The Machine', 'Lungs'),
(148, 'Massive Attack15', 'Heligoland'),
(149, 'Andre Rieu15', 'Forever Vienna'),
(150, 'Sade', 'Soldier of Love');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `salt` varchar(50) NOT NULL,
  `role` varchar(50) NOT NULL,
  `date_created` datetime NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `username` (`username`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `salt`, `role`, `date_created`) VALUES
(1, 'admin', 'cb3aefbdffbc81588f3d43c394428b16d4346b44', 'Filip', 'itfilip2@gmail.com', 'ce8d96d579d389e783f95b3772785783ea1a9854', 'administrator', '2013-01-29 14:04:38'),
(2, 'admin1', 'bd416b2e666354926f2727f872b6ba23a1cf9d4f', 'Filip1', 'itfilip1@gmail.com', 'ce8d96d579d389e783f95b3772785783ea1a9854', 'administrator', '2013-01-29 14:04:38');
