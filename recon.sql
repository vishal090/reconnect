-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 03, 2015 at 07:40 PM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `recon`
--

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE IF NOT EXISTS `users` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `username` varchar(32) NOT NULL,
  `fname` varchar(50) NOT NULL,
  `lname` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `pass` varchar(100) NOT NULL,
  `pass2` varchar(100) NOT NULL,
  `batch` int(10) NOT NULL,
  `branch` varchar(10) NOT NULL,
  `location` varchar(20) NOT NULL,
  `picture` varchar(100) NOT NULL,
  `mobile` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `usn` varchar(15) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`,`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `fname`, `lname`, `email`, `pass`, `batch`, `branch`, `location`, `picture`, `mobile`, `dob`, `usn`) VALUES
(4, 'mickeydudester', 'Mayank', 'Arora', 'mayank@gmail.com', 'e3b90a76887198de1e2d3fd5d9c3940e', 2011, 'cse', 'blr', '', '7795838378', '0000-00-00', '1by11cs036');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
