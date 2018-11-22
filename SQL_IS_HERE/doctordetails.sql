-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2018 at 11:57 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `499_project`
--

-- --------------------------------------------------------

--
-- Table structure for table `doctordetails`
--

CREATE TABLE `doctordetails` (
  `name` varchar(200) NOT NULL,
  `birthdate` date NOT NULL,
  `bmdc` int(4) NOT NULL,
  `nid` int(4) NOT NULL,
  `email` varchar(200) NOT NULL,
  `password` text NOT NULL,
  `speciality` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `doctordetails`
--

INSERT INTO `doctordetails` (`name`, `birthdate`, `bmdc`, `nid`, `email`, `password`, `speciality`) VALUES
('najmul', '2017-06-01', 1, 2, 'najmul@gmail.com', '12345', 'done'),
('ksafhasldhfasdf', '2018-11-22', 2147483647, 2147483647, 'sdgsdg@gmail.com', 'ywyyt', 'ksalsdhgasg'),
('tintin', '2018-11-07', 2420394, 2147483647, 'md.talatcse@gmail.com', '63465', '63465354'),
('ttt', '2018-11-15', 242342, 42344, 'md.talatcse@gmail.com', '2344', '55t');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
