-- phpMyAdmin SQL Dump
-- version 4.0.4.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Dec 16, 2016 at 11:22 AM
-- Server version: 5.5.32
-- PHP Version: 5.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `miss`
--
CREATE DATABASE IF NOT EXISTS `miss` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `miss`;

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE IF NOT EXISTS `account` (
  `A_Email` varchar(50) NOT NULL,
  `A_Password` varchar(10) NOT NULL,
  PRIMARY KEY (`A_Email`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`A_Email`, `A_Password`) VALUES
('1@1.1', '1');

-- --------------------------------------------------------

--
-- Table structure for table `buku`
--

CREATE TABLE IF NOT EXISTS `buku` (
  `isbn` varchar(22) NOT NULL,
  `title` varchar(22) NOT NULL,
  `author` varchar(22) NOT NULL,
  `year` varchar(22) NOT NULL,
  `category` varchar(22) NOT NULL,
  `supplier_id` varchar(22) NOT NULL,
  `supplier_name` varchar(22) NOT NULL,
  `email` varchar(22) NOT NULL,
  PRIMARY KEY (`isbn`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buku`
--

INSERT INTO `buku` (`isbn`, `title`, `author`, `year`, `category`, `supplier_id`, `supplier_name`, `email`) VALUES
('a', 'a', 'a', 'a', 'Management', 'a', 'a', 'a'),
('b', 'b', 'b', 'b', 'Science', 'b', 'b', 'b');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
