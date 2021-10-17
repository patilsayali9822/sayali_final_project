-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2021 at 08:55 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `sayali`
--

-- --------------------------------------------------------

--
-- Table structure for table `personal_details`
--

CREATE TABLE `personal_details` (
  `id` int(11) NOT NULL,
  `name` varchar(500) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `age` text NOT NULL,
  `gender` varchar(50) NOT NULL,
  `address` text NOT NULL,
  `photo` varchar(500) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `personal_details`
--

INSERT INTO `personal_details` (`id`, `name`, `email`, `phone`, `age`, `gender`, `address`, `photo`) VALUES
(3, 'Milind vavare', 'milindvavare123@gmail.com', '7066683038', '24', 'Male', 'Pune', '61415329.jpg'),
(4, 'Sarthak Vavare', 'sarthak vavare', '7066683038', '24', 'Male', 'palghar', 'IMG-20210822-WA0012.jpeg'),
(5, 'Milind Vavare', 'milindvavare123@gmail.com', '706668389', '25', 'Male', 'Pune', 'IMG-20210822-WA0012.jpeg'),
(6, 'Sarthak vavare', 'sarthakvavare123@gmail.com', '7066683038', '24', 'Male', 'pune', '1.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `personal_details`
--
ALTER TABLE `personal_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `personal_details`
--
ALTER TABLE `personal_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
