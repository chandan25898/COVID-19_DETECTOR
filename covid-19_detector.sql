-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 19, 2020 at 05:18 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `covid-19_detector`
--

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `username` varchar(50) NOT NULL,
  `useremail` varchar(50) NOT NULL,
  `usermob` bigint(13) NOT NULL,
  `password` varchar(50) NOT NULL,
  `traveled` varchar(10) NOT NULL,
  `cough` varchar(10) NOT NULL,
  `d_time` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`username`, `useremail`, `usermob`, `password`, `traveled`, `cough`, `d_time`) VALUES
('CHANDAN_KESHRI', 'Chandan@gmail', 7008431811, '258982', 'yes', 'no', '2020-07-19 14:02:00'),
('hardik keshri', 'chandan@hotmail', 9905451489, '456789', 'no', 'yes', '2020-07-19 14:06:58'),
('ram', 'ram@g', 55666666666, '55566666', 'no', 'no', '2020-07-19 14:22:17'),
('jitu', 'aaaaaaaaaas@re', 7788778877, '8568', 'yes', 'yes', '2020-07-19 14:48:48'),
('chandu', 'chandankeshri11@gmai.com', 55555, '8855', 'no', 'no', '2020-07-19 14:50:39'),
('prem', 'g@w', 4455666555, '8888', 'yes', 'yes', '2020-07-19 14:56:26');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
