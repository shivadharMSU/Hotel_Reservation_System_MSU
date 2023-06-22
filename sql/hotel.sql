-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 23, 2023 at 12:47 AM
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
-- Table structure for table `customer_bookings`
--

CREATE TABLE `customer_bookings` (
  `id` int(20) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mobile` varchar(20) NOT NULL,
  `email` varchar(100) NOT NULL,
  `address` varchar(20) NOT NULL,
  `streetname` varchar(20) NOT NULL,
  `city` varchar(20) NOT NULL,
  `state` varchar(20) NOT NULL,
  `roomType` varchar(20) NOT NULL,
  `price` varchar(20) NOT NULL,
  `checkin` date NOT NULL,
  `checkout` date NOT NULL,
  `no_of_adults` int(20) NOT NULL,
  `no_of_children` int(20) NOT NULL,
  `no_of_rooms` int(20) NOT NULL,
  `no_of_persons` int(11) NOT NULL,
  `no_of_days` int(11) NOT NULL,
  `bookingRefId` varchar(20) NOT NULL,
  `original_price` varchar(50) NOT NULL,
  `offer_applied` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `customer_bookings`
--

INSERT INTO `customer_bookings` (`id`, `name`, `mobile`, `email`, `address`, `streetname`, `city`, `state`, `roomType`, `price`, `checkin`, `checkout`, `no_of_adults`, `no_of_children`, `no_of_rooms`, `no_of_persons`, `no_of_days`, `bookingRefId`, `original_price`, `offer_applied`) VALUES
(11, 'wedtwundey', '08798756734', 'rohithkumar.pailla@g', 'erd', 'ewd', ' wed', 'ewdewd', '1', 'WIFI,TV,AC,HEATER', '2023-06-09', '2023-06-09', 0, 0, 0, 0, 0, 'HTS11', '', ''),
(12, 'testone', '08798756734', 'rohithkumar.pailla@g', 'erd', 'ewd', ' wed', 'ewdewd', '1', 'WIFI,TV,AC,HEATER', '2023-06-09', '2023-06-16', 0, 0, 2, 2, 0, 'HTS12', '', ''),
(13, 'testlast', '08798756734', 'rohithkumar.pailla@g', 'erd', 'ewd', 'wed', 'ewdewd', '2', 'WIFI,TV,AC,cdff', '2023-06-08', '2023-06-16', 0, 0, 2, 3, 8, 'HTS13', '', ''),
(14, 'testlstfibal', '08798756734', 'rohithkumar.pailla@g', 'erd', 'ewd', 'wed', 'ewdewd', '3', '300', '2023-06-09', '2023-06-12', 0, 0, 2, 3, 3, 'HTS14', '', ''),
(15, 'shivatstmulroom', '08798756734', 'rohithkumar.pailla@g', 'erd', 'ewd', 'wed', 'ewdewd', '3', '300', '2023-06-09', '2023-06-12', 0, 0, 2, 3, 3, 'HTS15', '', ''),
(16, 'shivatrdfg', '08798756734', 'rohithkumar.pailla@g', 'erd', 'ewd', 'wed', 'ewdewd', '2', '455', '2023-06-02', '2023-06-09', 1, 1, 1, 2, 7, 'HTS16', '', ''),
(17, 'shivahshh', '08798756734', 'rohithkumar.pailla@g', 'erd', 'ewd', 'wed', 'ewdewd', '1', '700', '2023-06-09', '2023-06-16', 0, 0, 1, 2, 7, 'HTS17', '', ''),
(18, 'test', '0879875673', 'rohithkumar.pailla@g', 'erd', 'ewd', 'wed', 'ewdewd', '1', '600', '2023-06-16', '2023-06-18', 0, 0, 3, 2, 2, 'HTS18', '', ''),
(19, 'shivardes', '8787282728', 'rohithkumar.pailla@g', 'erd', 'ewd', 'wed', 'ewdewd', '1', '0', '2023-06-15', '2023-06-15', 0, 0, 1, 2, 0, 'HTS19', '', ''),
(20, 'testrefid', '8766578654', 'rohithkumar.pailla@g', 'erd', 'ewd', 'wed', 'ewdewd', '1', '100', '2023-06-14', '2023-06-15', 0, 0, 1, 2, 1, 'HTS20', '', ''),
(21, 'shivatestrefid', '8765477654', 'rohithkumar.pailla@g', 'erd', 'ewd', 'wed', 'ewdewd', '1', '100', '2023-06-15', '2023-06-16', 0, 0, 1, 2, 1, 'HTS21', '', ''),
(22, 'testrefid', '9846578635', 'rohithkumar.pailla@g', 'erd', 'ewd', 'wed', 'ewdewd', '1', '0', '2023-06-15', '2023-06-15', 0, 0, 1, 2, 0, 'HTS22', '', ''),
(23, 'testtworooms', '8765487543', 'shivadhar95@gmail.com', 'erd', 'ewd', 'wed', 'ewdewd', '1', '200', '2023-06-15', '2023-06-16', 0, 0, 2, 2, 1, 'HTS23', '', ''),
(25, 'testviewrooms', '7654387542', 'shivadhar95@gmail.com', 'erd', 'ewd', 'wed', 'ewdewd', '2', '130', '2023-06-24', '2023-06-25', 1, 1, 2, 2, 1, 'HTS25', '', ''),
(26, 'shivacinma', '9875487654', 'shivadhar95@gmail.com', 'erd', 'ewd', 'wed', 'ewdewd', '1', '350', '2023-06-20', '2023-06-22', 1, 1, 2, 2, 2, 'HTS26', '400', 'VALEUE OFFER');

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

-- --------------------------------------------------------

--
-- Table structure for table `rooms`
--

CREATE TABLE `rooms` (
  `room_id` int(11) NOT NULL,
  `room_number` int(11) NOT NULL,
  `room_type` varchar(30) NOT NULL,
  `room_featured` int(1) NOT NULL,
  `room_booked` int(1) DEFAULT 0,
  `check_in_date` date DEFAULT NULL,
  `check_out_date` date DEFAULT NULL,
  `room_capacity` int(11) NOT NULL,
  `booking_ref_id` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `rooms`
--

INSERT INTO `rooms` (`room_id`, `room_number`, `room_type`, `room_featured`, `room_booked`, `check_in_date`, `check_out_date`, `room_capacity`, `booking_ref_id`) VALUES
(51, 101, '1', 1, 1, '2023-06-01', '2023-06-30', 3, 'HTS26'),
(52, 102, '2', 1, 1, '2023-06-01', '2023-06-30', 4, 'HTS25'),
(53, 103, '3', 1, 0, '2023-06-01', '2023-06-30', 3, ''),
(54, 104, '4', 1, 0, '2023-06-01', '2023-06-30', 8, ''),
(55, 201, '1', 1, 0, '2023-06-01', '2023-06-30', 3, ''),
(56, 202, '2', 1, 0, '2023-06-01', '2023-06-30', 5, ''),
(58, 204, '4', 1, 0, '2023-06-01', '2023-06-30', 3, ''),
(59, 301, '1', 1, 0, '2023-06-01', '2023-06-30', 3, ''),
(60, 302, '2', 1, 0, '2023-06-01', '2023-06-30', 4, ''),
(61, 303, '3', 1, 0, '2023-06-01', '2023-06-30', 5, ''),
(62, 304, '4', 1, 0, '2023-06-01', '2023-06-30', 3, ''),
(63, 401, '1', 1, 0, '2023-06-01', '2023-06-30', 3, ''),
(64, 402, '2', 1, 0, '2023-06-01', '2023-06-30', 3, ''),
(65, 403, '3', 1, 0, '2023-06-01', '2023-06-30', 3, ''),
(66, 404, '4', 1, 0, '2023-06-01', '2023-06-30', 5, ''),
(67, 405, '3', 0, 0, '2023-06-19', '2023-06-30', 4, ''),
(68, 406, '3', 0, 0, '2023-06-21', '2023-06-23', 5, ''),
(69, 407, '3', 0, 0, '2023-06-21', '2023-06-30', 2, ''),
(70, 408, '3', 0, 0, '2023-06-21', '2023-06-30', 6, ''),
(71, 409, '2', 0, 0, '2023-06-21', '2023-06-30', 4, ''),
(73, 701, '2', 0, 1, '2023-06-24', '2023-06-30', 4, '');

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

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `user_name`, `password`) VALUES
(3, 'shivadhar', 'ravinder'),
(6, 'alandsilva@gmail.com', 'Alan');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_bookings`
--
ALTER TABLE `customer_bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customer_ratings`
--
ALTER TABLE `customer_ratings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- Indexes for table `room_category_details`
--
ALTER TABLE `room_category_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_bookings`
--
ALTER TABLE `customer_bookings`
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `customer_ratings`
--
ALTER TABLE `customer_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;

--
-- AUTO_INCREMENT for table `room_category_details`
--
ALTER TABLE `room_category_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
