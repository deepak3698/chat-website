-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 05, 2018 at 08:15 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `chat`
--

-- --------------------------------------------------------

--
-- Table structure for table `msg`
--

CREATE TABLE `msg` (
  `msgs` varchar(50) NOT NULL,
  `room` varchar(50) NOT NULL,
  `ip` varchar(50) NOT NULL,
  `stime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `msg`
--

INSERT INTO `msg` (`msgs`, `room`, `ip`, `stime`) VALUES
('hello bhai', 'deepak', '::1', '2018-10-30 10:50:03'),
('hii', 'deepak', '::1', '2018-10-30 10:50:19'),
('hii', 'hello', '::1', '2018-10-30 10:56:23'),
('hhhh', 'hello', '::1', '2018-10-30 10:56:45'),
('hii', 'deepak123', '::1', '2018-10-30 11:56:01'),
('hello', 'dt', '::1', '2018-10-30 12:24:34'),
(' erer', 'dt', '::1', '2018-10-30 12:24:39'),
(' fdf', 'dt', '::1', '2018-10-30 12:24:40'),
(' fdfd', 'dt', '::1', '2018-10-30 12:24:40'),
(' fd', 'dt', '::1', '2018-10-30 12:24:41'),
(' fd', 'dt', '::1', '2018-10-30 12:24:41'),
(' fdf', 'dt', '::1', '2018-10-30 12:24:41'),
(' d', 'dt', '::1', '2018-10-30 12:24:42'),
(' fdf', 'dt', '::1', '2018-10-30 12:24:42'),
(' df', 'dt', '::1', '2018-10-30 12:24:43'),
(' df', 'dt', '::1', '2018-10-30 12:24:43'),
(' df', 'dt', '::1', '2018-10-30 12:24:43'),
(' dfdf', 'dt', '::1', '2018-10-30 12:24:45'),
('retrtr', 'st', '::1', '2018-10-30 12:25:10'),
(' ettgr', 'st', '::1', '2018-10-30 12:25:11'),
(' gtgf', 'st', '::1', '2018-10-30 12:25:12'),
(' gf', 'st', '::1', '2018-10-30 12:25:12'),
(' gfg', 'st', '::1', '2018-10-30 12:25:12'),
('tet', 'wre', '::1', '2018-12-05 12:44:02'),
(' ', 'wre', '::1', '2018-12-05 12:44:06'),
(' et', 'wre', '::1', '2018-12-05 12:44:10');

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `roomname` varchar(40) DEFAULT NULL,
  `stime` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`roomname`, `stime`) VALUES
('deepak', '2018-10-30 10:49:52'),
('Question', '2018-10-30 10:51:08'),
('hello', '2018-10-30 10:56:14'),
('sfdf', '2018-10-30 11:03:28'),
('deepak123', '2018-10-30 11:55:51'),
('dt', '2018-10-30 12:24:21'),
('st', '2018-10-30 12:25:06'),
('wre', '2018-12-05 12:43:59');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
