-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jul 29, 2022 at 12:34 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `users`
--

-- --------------------------------------------------------

--
-- Table structure for table `8userdata`
--

CREATE TABLE `8userdata` (
  `sr_no` int(20) NOT NULL,
  `name` varchar(30) NOT NULL,
  `mobile` varchar(30) NOT NULL,
  `email` varchar(30) NOT NULL,
  `password` varchar(255) NOT NULL,
  `time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `8userdata`
--

INSERT INTO `8userdata` (`sr_no`, `name`, `mobile`, `email`, `password`, `time`) VALUES
(31, 'Rajinder Kumar', '8427040364', 'idrajinder9@gmail.com', '$2y$10$hl70i2TXRupVx58220Ckc.zWOQFcHDAAog9nhKrVeJS7i8aAbHngu', '2022-07-25 19:26:49'),
(32, 'Preeti', '7340843147', 'zoyaaa.khan22@gmail.com', '$2y$10$H1nhup.XMceIUmPgA.hkAe9lunMc0uv1uYSSm8EbCMBBI/KoaYd6m', '2022-07-25 19:27:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `8userdata`
--
ALTER TABLE `8userdata`
  ADD PRIMARY KEY (`sr_no`) USING BTREE,
  ADD UNIQUE KEY `mobile` (`mobile`),
  ADD KEY `sr_no` (`sr_no`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `8userdata`
--
ALTER TABLE `8userdata`
  MODIFY `sr_no` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=33;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
