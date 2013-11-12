-- phpMyAdmin SQL Dump
-- version 3.3.9.2
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2012 at 08:10 AM
-- Server version: 5.5.10
-- PHP Version: 5.3.6

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `railway`
--

-- --------------------------------------------------------

--
-- Table structure for table `cdata`
--

CREATE TABLE IF NOT EXISTS `cdata` (
  `id` int(5) NOT NULL AUTO_INCREMENT,
  `train` int(5) NOT NULL,
  `email` varchar(30) NOT NULL,
  `per1` varchar(30) NOT NULL,
  `per2` varchar(30) NOT NULL,
  `per3` varchar(30) NOT NULL,
  `per4` varchar(30) NOT NULL,
  `per5` varchar(30) NOT NULL,
  `per6` varchar(30) NOT NULL,
  `a1` varchar(6) NOT NULL,
  `a2` varchar(6) NOT NULL,
  `a3` varchar(6) NOT NULL,
  `a4` varchar(6) NOT NULL,
  `a5` varchar(6) NOT NULL,
  `a6` varchar(6) NOT NULL,
  `g1` varchar(9) NOT NULL,
  `g2` varchar(9) NOT NULL,
  `g3` varchar(9) NOT NULL,
  `g4` varchar(9) NOT NULL,
  `g5` varchar(9) NOT NULL,
  `g6` varchar(9) NOT NULL,
  `date` varchar(20) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=53 ;

--
-- Dumping data for table `cdata`
--

INSERT INTO `cdata` (`id`, `train`, `email`, `per1`, `per2`, `per3`, `per4`, `per5`, `per6`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `date`, `time`) VALUES
(43, 1, 'ankitbanka17@gmail.com', 'ANKIT BANKA', '', '', '', '', '', '20', '', '', '', '', '', 'male', '', '', '', '', '', '04/30/2012', '2012-04-29 14:54:52'),
(44, 1, 'ankitbanka17@gmail.com', 'ANKIT BANKA', '', '', '', '', '', '20', '', '', '', '', '', 'male', '', '', '', '', '', '04/30/2012', '2012-04-29 14:56:16'),
(45, 2, 'krishnayogi@gmail.com', 'krishna', '', '', '', '', '', '21', '', '', '', '', '', 'male', '', '', '', '', '', '04/30/2012', '2012-04-29 14:58:20'),
(46, 2, 'krishnayogi@gmail.com', 'krishna', '', '', '', '', '', '21', '', '', '', '', '', 'male', '', '', '', '', '', '05/01/2012', '2012-04-29 14:59:21'),
(47, 2, 'ankitbanka17@gmail.com', 'akk', '', '', '', '', '', '3', '', '', '', '', '', 'male', '', '', '', '', '', '04/29/2012', '2012-04-29 21:14:28'),
(48, 2, 'ankitbanka17@gmail.com', 'dlld', '', '', '', '', '', '2', '', '', '', '', '', 'male', '', '', '', '', '', '04/30/2012', '2012-04-29 21:21:48'),
(49, 1, 'ankitbanka17@gmail.com', 'ANKIT BANKA', '', '', '', '', '', '20', '', '', '', '', '', 'male', '', '', '', '', '', '04/01/2012', '2012-04-29 21:24:09'),
(50, 1, 'ankitbanka17@gmail.com', 'ANKIT BANKA', '', '', '', '', '', '20', '', '', '', '', '', 'male', '', '', '', '', '', '05/02/2012', '2012-04-29 21:27:22'),
(51, 1, 'ankitbanka17@gmail.com', 'ANKIT BANKA', '', '', '', '', '', '20', '', '', '', '', '', 'male', '', '', '', '', '', '05/05/2012', '2012-04-29 21:28:11'),
(52, 1, 'ankitbanka17@gmail.com', 'ANKIT BANKA', '', '', '', '', '', '20', '', '', '', '', '', 'male', '', '', '', '', '', '05/03/2012', '2012-04-29 21:29:52');

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE IF NOT EXISTS `data` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `train` int(5) NOT NULL,
  `email` varchar(40) NOT NULL,
  `per1` varchar(40) NOT NULL,
  `per2` varchar(40) NOT NULL,
  `per3` varchar(40) NOT NULL,
  `per4` varchar(40) NOT NULL,
  `per5` varchar(40) NOT NULL,
  `per6` varchar(40) NOT NULL,
  `a1` varchar(40) NOT NULL,
  `a2` varchar(40) NOT NULL,
  `a3` varchar(40) NOT NULL,
  `a4` varchar(40) NOT NULL,
  `a5` varchar(40) NOT NULL,
  `a6` varchar(40) NOT NULL,
  `g1` varchar(10) NOT NULL,
  `g2` varchar(10) NOT NULL,
  `g3` varchar(10) NOT NULL,
  `g4` varchar(10) NOT NULL,
  `g5` varchar(10) NOT NULL,
  `g6` varchar(10) NOT NULL,
  `count` int(6) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`id`, `train`, `email`, `per1`, `per2`, `per3`, `per4`, `per5`, `per6`, `a1`, `a2`, `a3`, `a4`, `a5`, `a6`, `g1`, `g2`, `g3`, `g4`, `g5`, `g6`, `count`) VALUES
(15, 1, 'ankitbanka17@gmail.com', 'ANKIT BANKA', '', '', '', '', '', '20', '', '', '', '', '', 'male', '', '', '', '', '', 2),
(16, 2, 'krishnayogi@gmail.com', 'krishna', '', '', '', '', '', '21', '', '', '', '', '', 'male', '', '', '', '', '', 1),
(17, 2, 'ankitbanka17@gmail.com', 'akk', '', '', '', '', '', '3', '', '', '', '', '', 'male', '', '', '', '', '', 0),
(18, 2, 'ankitbanka17@gmail.com', 'dlld', '', '', '', '', '', '2', '', '', '', '', '', 'male', '', '', '', '', '', 0),
(19, 1, 'ankitbanka17@gmail.com', 'vfv', '', '', '', '', '', '3', '', '', '', '', '', 'male', '', '', '', '', '', 0);

-- --------------------------------------------------------

--
-- Table structure for table `members`
--

CREATE TABLE IF NOT EXISTS `members` (
  `id` int(4) NOT NULL AUTO_INCREMENT,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `emailid1` varchar(40) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=12 ;

--
-- Dumping data for table `members`
--

INSERT INTO `members` (`id`, `username`, `password`, `emailid1`) VALUES
(2, 'Ankit Banka', 'hellovit', 'ankitbanka17@gmail.com'),
(3, 'akash motwani', 'hellovit', 'akashmotwani52@gmail.com'),
(4, 'pankaj', 'hellovit', 'pankaj@gmail.com'),
(5, 'ankit', 'abc', 'abc@gmail.com'),
(6, 'dileep', 'hello', 'dileepmishra93@gmail.com'),
(7, 'snehashis', '1234', 'snehashis@gmail.com'),
(8, 'as', 'as', 'as@gmail.com'),
(9, 'test1', 'test', 'test1@gmail.com'),
(10, 'akashm', '1122', 'akashmotwani32@gmail.com'),
(11, 'krishna', 'hello', 'krishnayogi@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE IF NOT EXISTS `seats` (
  `id` int(20) NOT NULL,
  `cat` varchar(20) NOT NULL,
  `dates` varchar(20) NOT NULL,
  `sea` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`id`, `cat`, `dates`, `sea`) VALUES
(1, 'general', '04/30/2012', 97),
(1, 'general', '05/01/2012', 97),
(1, 'general', '05/02/2012', 96),
(1, 'general', '05/03/2012', 96),
(2, 'general', '04/30/2012', 96),
(2, 'general', '05/01/2012', 97),
(2, 'general', '05/02/2012', 97),
(2, 'general', '05/03/2012', 97),
(3, 'general', '04/30/2012', 100),
(3, 'general', '05/01/2012', 100),
(3, 'general', '05/02/2012', 100),
(3, 'general', '05/03/2012', 100),
(4, 'general', '04/30/2012', 100),
(4, 'general', '05/01/2012', 100),
(4, 'general', '05/02/2012', 100),
(4, 'general', '05/03/2012', 100);

-- --------------------------------------------------------

--
-- Table structure for table `trains`
--

CREATE TABLE IF NOT EXISTS `trains` (
  `id` int(5) NOT NULL,
  `name` varchar(20) NOT NULL,
  `number` varchar(20) NOT NULL,
  `from1` varchar(20) NOT NULL,
  `to1` varchar(20) NOT NULL,
  `arrivaltime` varchar(20) NOT NULL,
  `duration` varchar(20) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `trains`
--

INSERT INTO `trains` (`id`, `name`, `number`, `from1`, `to1`, `arrivaltime`, `duration`) VALUES
(1, 'tamilnadu', '2621', 'chennai', 'newdelhi', '10pm', '33hrs'),
(2, 'gtexpress', '2216', 'chennai', 'newdelhi', '7pm', '37hrs'),
(3, 'Rajdhani', '2012', 'chennai', 'newdelhi', '6am', '29hrs'),
(4, 'duronto', '2121', 'chennai', 'newdelhi', '6:40am', '29hrs');
