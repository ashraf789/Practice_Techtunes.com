-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 07, 2015 at 07:39 AM
-- Server version: 5.1.36
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `techtune`
--

-- --------------------------------------------------------

--
-- Table structure for table `registation`
--

CREATE TABLE IF NOT EXISTS `registation` (
  `si_no` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(60) NOT NULL,
  `u_name` varchar(60) NOT NULL,
  `phone` int(11) NOT NULL,
  `email` varchar(60) NOT NULL,
  `pwd` varchar(60) NOT NULL,
  `date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`si_no`)
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `registation`
--

INSERT INTO `registation` (`si_no`, `name`, `u_name`, `phone`, `email`, `pwd`, `date`) VALUES
(1, 'dfvgsdfg', 'dsfgsdfg', 0, 'dfgsdfgsdg@fghdghdfgdfgmdfg.dsfgdfg', '', '2015-04-06 00:06:19'),
(2, 'dfvgsdfg', 'dsfgsdfg', 0, 'dfgsdfgsdg@fghdghdfgdfgmdfg.dsfgdfg', '', '2015-04-06 00:07:39'),
(3, 'dfvgsdfg', 'dsfgsdfg', 0, 'dfgsdfgsdg@fghdghdfgdfgmdfg.dsfgdfg', 'dsfgdfgsdfg', '2015-04-06 00:08:14'),
(4, 'dfvgsdfg', 'dsfgsdfg', 0, 'dfgsdfgsdg@fghdghdfgdfgmdfg.dsfgdfg', 'dsfgdfgsdfg', '2015-04-06 00:08:23'),
(8, 'ashraf', 'ullah', 1772465164, 'ashraf@gmail.com', '123456', '2015-04-06 00:35:30'),
(9, 'ashraf', 'ashraf_ullah', 1772465164, 'syedashrafullah15@gmail.com', '123456', '2015-04-07 11:54:16'),
(11, '', '', 0, '', '', '2015-04-07 12:09:50');
