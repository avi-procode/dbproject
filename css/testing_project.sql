-- phpMyAdmin SQL Dump
-- version 4.0.4
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: May 10, 2015 at 08:24 PM
-- Server version: 5.0.41-community-nt
-- PHP Version: 5.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `testing_project`
--
CREATE DATABASE IF NOT EXISTS `testing_project` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `testing_project`;

-- --------------------------------------------------------

--
-- Table structure for table `login_details`
--

CREATE TABLE IF NOT EXISTS `login_details` (
  `id` int(50) NOT NULL auto_increment,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `firstname` varchar(255) NOT NULL,
  `lastname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone_no` varchar(255) NOT NULL,
  `login_type` varchar(255) NOT NULL,
  PRIMARY KEY  (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=17 ;

--
-- Dumping data for table `login_details`
--

INSERT INTO `login_details` (`id`, `username`, `password`, `firstname`, `lastname`, `email`, `phone_no`, `login_type`) VALUES
(1, 'admin', 'admin', 'admin25', 'admin25', 'admin@admin.com25', '12234525555', 'admin'),
(2, 'priya', 'priya', 'priya', 'priya', 'priya@gmail.com', '1234567', 'user'),
(3, '', '', 'This is focused...', 'This is focused...', '', '', 'user'),
(4, '', '', 'This is focused...', 'This is focused...', '', '', 'user'),
(6, '', '', '', '', '', '', 'user'),
(9, '', '', '', '', '', '', 'user'),
(12, 'admin1', 'admin1', 'admin1', 'admin1', 'admin@admin.com1', '1223451', 'user'),
(13, 'admin1', 'admin', 'admin1', 'admin1', 'admin@admin.com1', '1223451', 'user'),
(14, 'admin1', 'admin', 'admin1', 'admin1', 'admin@admin.com1', '1223451', 'user'),
(15, 'fg', 'fdg', 'fg', 'fg', 'fg', 'fdgd', 'user'),
(16, 'fg', 'fdg', 'fg', 'fg', 'fg', 'fdgd', 'user');

-- --------------------------------------------------------

--
-- Table structure for table `member_details`
--

CREATE TABLE IF NOT EXISTS `member_details` (
  `member_id` int(50) NOT NULL auto_increment,
  `member_name` varchar(255) NOT NULL,
  `member_finish_date` varchar(255) NOT NULL,
  `monthly_call_comp` varchar(255) NOT NULL,
  `engaged` tinyint(255) NOT NULL,
  `comments1` varchar(255) NOT NULL,
  `income_increasing` varchar(255) NOT NULL,
  `comments2` varchar(255) NOT NULL,
  `acceptable_progress` tinyint(4) NOT NULL,
  `comments3` varchar(255) NOT NULL,
  `renewal1` tinyint(4) NOT NULL,
  `renewal2` tinyint(4) NOT NULL,
  `action` varchar(255) NOT NULL,
  `responsible` varchar(255) NOT NULL,
  `comments4` varchar(255) NOT NULL,
  `user_id` int(50) NOT NULL,
  `month` int(50) default NULL,
  `year` int(50) default NULL,
  PRIMARY KEY  (`member_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `member_details`
--

INSERT INTO `member_details` (`member_id`, `member_name`, `member_finish_date`, `monthly_call_comp`, `engaged`, `comments1`, `income_increasing`, `comments2`, `acceptable_progress`, `comments3`, `renewal1`, `renewal2`, `action`, `responsible`, `comments4`, `user_id`, `month`, `year`) VALUES
(2, 'fds11111', '4/10/2014', 'fdsf1111', 1, 'grtre ', '1', 'hgjh ', 1, 'fdsfs', 0, 0, 'dfsf333', 'fssd33', ' ', 2, 2, 2015),
(3, 'ttt', 'dsf', 'sdf', 1, 'dfsf', '0', 'sdf', 1, 'dfsdf', 1, 1, 'sdfs', 'sdfs', 'sdf', 2, 3, 2015),
(4, 'pppuuuu', '05/11/2015', 'ppppuuuuu', 0, ' pppuuuu ', 'dfgd', 'ppp uuu ', 0, ' uuuu', 1, 0, 'ppuuuu', 'pppuuu', 'ppp uuuu ', 0, 0, NULL);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
