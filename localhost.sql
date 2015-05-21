-- phpMyAdmin SQL Dump
-- version 3.2.0.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Mar 25, 2014 at 10:47 PM
-- Server version: 5.1.37
-- PHP Version: 5.3.0

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ripal`
--
CREATE DATABASE `ripal` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `ripal`;

-- --------------------------------------------------------

--
-- Table structure for table `myform`
--

CREATE TABLE IF NOT EXISTS `myform` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `ssn` varchar(100) NOT NULL,
  `date` varchar(100) NOT NULL,
  `income` varchar(50) NOT NULL,
  PRIMARY KEY (`id`)
);



INSERT INTO `myform` (`id`, `name`, `ssn`, `date`, `income`) VALUES
(1, 'Ripal', '113-45-7891', '01/12/2012', '$11'),
(2, 'Naik', '113-45-7891', '01/12/2012', '$12'),
(3, 'Hemant', '113-45-7891', '01/12/2012', '$13'),
(4, 'Naik', '113-45-7891', '01/12/2012', '$14'),
(5, 'Krupa', '113-45-7891', '01/12/2012', '$15'),
(6, 'Naik', '113-45-7891', '01/12/2012', '$16'),
(7, 'Swini', '113-45-7891', '01/12/2012', '$17'),
(8, 'Naik', '113-45-7891', '01/12/2012', '$18'),
(9, 'Vibha', '113-45-7891', '01/12/2012', '$19');
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
