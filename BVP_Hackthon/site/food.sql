-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 05, 2020 at 06:53 PM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `food`
--

-- --------------------------------------------------------

--
-- Table structure for table `dons`
--

CREATE TABLE `dons` (
  `id` text,
  `qty` int(11) DEFAULT NULL,
  `descp` text,
  `added` datetime DEFAULT NULL,
  `type` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `dons`
--

INSERT INTO `dons` (`id`, `qty`, `descp`, `added`, `type`) VALUES
('sumeet', 5, 'Roti Dal', '2020-02-08 17:26:11', 1),
('user', 7, 'Food', '2020-02-09 04:36:14', 1);

-- --------------------------------------------------------

--
-- Table structure for table `guest`
--

CREATE TABLE `guest` (
  `fname` text NOT NULL,
  `addrs` text NOT NULL,
  `mobile` int(11) NOT NULL,
  `qty` int(11) NOT NULL,
  `descp` text NOT NULL,
  `added` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `guest`
--

INSERT INTO `guest` (`fname`, `addrs`, `mobile`, `qty`, `descp`, `added`) VALUES
('xyz', 'xyz', 1234567, 8, 'xyz', '2020-02-09 03:23:17'),
('xyz', 'sdfd', 123467, 6, 'rty', '2020-02-09 04:19:46'),
('Nishikanta ', 'Dhenkanal', 123456, 6, 'Roti', '2020-02-09 05:18:14'),
('hbb', 'ghcf', 4567, 7, 'vhgm', '2020-02-09 05:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `imgs`
--

CREATE TABLE `imgs` (
  `link` text NOT NULL,
  `descp` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `imgs`
--

INSERT INTO `imgs` (`link`, `descp`) VALUES
('https://d1dxs113ar9ebd.cloudfront.net/225batonrouge/2016/08/fooddonationsistock.jpg?q=70&crop=faces&fit=crop&w=1200&h=550', 'foodbox'),
('https://www.india.com/wp-content/uploads/2017/08/mumbai-rains-3.jpg', 'indian navy in mumbai rains');

-- --------------------------------------------------------

--
-- Table structure for table `reqs`
--

CREATE TABLE `reqs` (
  `id` text,
  `qty` int(11) DEFAULT NULL,
  `descp` text,
  `added` datetime NOT NULL,
  `type` int(1) NOT NULL DEFAULT '1'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `reqs`
--

INSERT INTO `reqs` (`id`, `qty`, `descp`, `added`, `type`) VALUES
('sumeet', 1, 'aaaa', '2020-02-08 22:08:07', 1),
('sumeet', 6, 'Food Avl', '2020-02-08 22:35:28', 1),
('sumeet', 6, 'Asdf', '2020-02-09 05:19:07', 1),
('user', 12, 'Dal Roti', '2020-02-09 09:47:03', 1);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` text NOT NULL,
  `type` char(100) DEFAULT NULL,
  `name` text NOT NULL,
  `mobile` text NOT NULL,
  `address` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `type`, `name`, `mobile`, `address`) VALUES
('sumeet', '1', 'sumeet', '123456', 'BBSR'),
('admin', '3', 'admin', '9090090900', 'address'),
('user', '1', 'USER', '12345', 'Address'),
('vtr', '2', 'Volunteer', '789456', 'Address'),
('Nishikanta ', '1', 'Nishikanta ', '123456', 'Dhenkanal');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
