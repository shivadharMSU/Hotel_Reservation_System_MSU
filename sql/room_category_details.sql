-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 12:46 AM
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
-- Database: `hotel`
--

-- --------------------------------------------------------

--
-- Table structure for table `room_category_details`
--

CREATE TABLE `room_category_details` (
  `id` int(11) NOT NULL,
  `category_name` varchar(100) NOT NULL,
  `price` double(10,2) NOT NULL,
  `aminities` varchar(512) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `room_category_details`
--

INSERT INTO `room_category_details` (`id`, `category_name`, `price`, `aminities`) VALUES
(1, 'Premium', 100.00, 'WIFI,TV,AC,HEATER'),
(2, 'Diamond', 65.00, 'WIFI,TV,AC,cdfffghb'),
(3, 'gold', 50.00, 'WIFI,TV'),
(4, 'Silver', 25.00, 'WIFI'),
(13, 'hal', 500.00, 'fg,yjh,gf');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `room_category_details`
--
ALTER TABLE `room_category_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `room_category_details`
--
ALTER TABLE `room_category_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
