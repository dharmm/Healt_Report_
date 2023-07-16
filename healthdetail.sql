-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 12, 2023 at 11:16 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `health`
--

-- --------------------------------------------------------

--
-- Table structure for table `healthdetail`
--

CREATE TABLE `healthdetail` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `age` int(255) NOT NULL,
  `weight` int(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `healthdetail`
--

INSERT INTO `healthdetail` (`id`, `name`, `age`, `weight`, `email`) VALUES
(1, 'Brijesh patel', 23, 45, 'brijeshpatelpatel44@gmail.com'),
(2, 'Brijesh patel', 23, 45, 'brijeshpatelpatel44@gmail.com'),
(3, 'Brijesh patel', 33, 44, 'brijeshpatelpatel44@gmail.com'),
(4, 'sanjeswar', 21, 56, 'sanj@123gmail.com'),
(5, 'Brijesh patel', 22, 222, 'brijeshpatelpatel44@gmail.com'),
(6, 'Brijesh patel', 22, 22, 'brijeshpatelpatel44@gmail.com'),
(7, 'Brijesh patel', 44, 33, 'brijeshpatelpatel44@gmail.com'),
(8, 'Brijesh patel', 55, 55, 'brijeshpatelpatel44@gmail.com'),
(9, 'Brijesh patel', 77, 33, 'brijeshpatelpatel44@gmail.com'),
(10, 'Brijesh patel', 77, 33, 'brijeshpatelpatel44@gmail.com'),
(11, 'Brijesh patel', 22, 22, 'brijeshpatelpatel44@gmail.com'),
(12, 'Brijesh patel', 22, 22, 'brijeshpatelpatel44@gmail.com');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `healthdetail`
--
ALTER TABLE `healthdetail`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `healthdetail`
--
ALTER TABLE `healthdetail`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
