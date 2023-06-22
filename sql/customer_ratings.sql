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
-- Table structure for table `customer_ratings`
--

CREATE TABLE `customer_ratings` (
  `id` int(11) NOT NULL,
  `email` varchar(20) NOT NULL,
  `rating` int(11) NOT NULL,
  `feedback` longtext NOT NULL,
  `cust_name` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_ratings`
--

INSERT INTO `customer_ratings` (`id`, `email`, `rating`, `feedback`, `cust_name`) VALUES
(1, 'shiva@gmail.com', 5, 'amazing zing zing zindgvsu cjns cjn sjnc sjk jd jnsdc knd  b', 'jhbn'),
(2, 'rohithkumar.pailla@g', 4, 'i want to come around yedb u cn ujnfffff', 'hsbjd'),
(3, 'rohithkumar.rftghpai', 3, 'fghkbhmgvkkj uhgb iuhgiuhgb ygv uyfv yugh', 'sdjbh'),
(4, 'shivadhar432@gmail.c', 3, 'sbja nsd jndsad', 'SHISHS');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_ratings`
--
ALTER TABLE `customer_ratings`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_ratings`
--
ALTER TABLE `customer_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
