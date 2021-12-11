-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 09, 2021 at 03:39 PM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 7.4.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `email`, `phone`, `password`) VALUES
('katibur', 'katiburrahmansany@gmail.com', 1788735788, '7357887');

-- --------------------------------------------------------

--
-- Table structure for table `adminpp`
--

CREATE TABLE `adminpp` (
  `id` int(50) NOT NULL,
  `path` varchar(255) NOT NULL,
  `created` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `adminpp`
--

INSERT INTO `adminpp` (`id`, `path`, `created`) VALUES
(1, 'images/61add975e8f5e2021-12-06-10-35-49def.jpg', '0000-00-00 00:00:00'),
(2, 'images/61add99da288c2021-12-06-10-36-29def.jpg', '0000-00-00 00:00:00'),
(3, 'images/61add9ae609b92021-12-06-10-36-46admin.jpg', '0000-00-00 00:00:00'),
(4, 'images/61add9fd08b942021-12-06-10-38-05admin.jpg', '0000-00-00 00:00:00'),
(5, 'images/61adda2b0546e2021-12-06-10-38-51admin.jpg', '0000-00-00 00:00:00'),
(6, 'images/61adda2dc3a732021-12-06-10-38-53admin.jpg', '0000-00-00 00:00:00'),
(7, 'images/61adde49109b32021-12-06-10-56-25admin.jpg', '0000-00-00 00:00:00'),
(8, 'images/61addedc735dd2021-12-06-10-58-52admin.jpg', '0000-00-00 00:00:00'),
(9, 'images/61addf7c973022021-12-06-11-01-32admin.jpg', '0000-00-00 00:00:00'),
(10, 'images/61ade018b61632021-12-06-11-04-08admin.jpg', '0000-00-00 00:00:00'),
(11, 'images/61adf2ace19892021-12-06-12-23-24admin.jpg', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `charity_list`
--

CREATE TABLE `charity_list` (
  `id` int(50) NOT NULL,
  `Charity_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `charity_list`
--

INSERT INTO `charity_list` (`id`, `Charity_name`) VALUES
(1, 'Bangladesh Climate Change Resilience Fund'),
(2, 'Bangladesh Environment and Development Society '),
(3, 'Bangladesh Environmental Lawyers Association'),
(4, 'International Centre for Climate Change and Develo'),
(5, 'Noble Nonprofits'),
(6, 'Save the Children'),
(7, 'United Way Worldwide'),
(8, 'Donate for Children');

-- --------------------------------------------------------

--
-- Table structure for table `donors`
--

CREATE TABLE `donors` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `donors`
--

INSERT INTO `donors` (`id`, `name`, `email`, `phone`, `password`) VALUES
(3, 'Katibursany', 'katibursany@gmail.com', 1696969, '555'),
(12, 'shakibb', 'abcd@gmail.com', 2126526, '7357457');

-- --------------------------------------------------------

--
-- Table structure for table `eventmanager`
--

CREATE TABLE `eventmanager` (
  `id` int(100) NOT NULL,
  `name` varchar(100) NOT NULL,
  `email` text NOT NULL,
  `phone` int(11) NOT NULL,
  `password` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `eventmanager`
--

INSERT INTO `eventmanager` (`id`, `name`, `email`, `phone`, `password`) VALUES
(1, 'shefu', 'shefu@gmail.com', 17874, '798'),
(3, 'asifff', 'asif@gmail.com', 1788735788, '789');

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` int(50) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `phone` int(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `username`, `password`, `email`, `phone`) VALUES
(1, 'Tanvir', '1', 'tanvirreza56@gmail.com', 1616889999),
(4, 'utso', '1234', 'tanvirreza56@gmail.com', 1616889999),
(5, 'Utso', '12345', 'tanvirreza56@gmail.com', 3213123);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD UNIQUE KEY `id` (`username`);

--
-- Indexes for table `adminpp`
--
ALTER TABLE `adminpp`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `charity_list`
--
ALTER TABLE `charity_list`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `donors`
--
ALTER TABLE `donors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `eventmanager`
--
ALTER TABLE `eventmanager`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `adminpp`
--
ALTER TABLE `adminpp`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `charity_list`
--
ALTER TABLE `charity_list`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `donors`
--
ALTER TABLE `donors`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `eventmanager`
--
ALTER TABLE `eventmanager`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
