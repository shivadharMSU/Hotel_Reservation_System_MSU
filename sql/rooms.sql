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

--
-- Indexes for dumped tables
--

--
-- Indexes for table `rooms`
--
ALTER TABLE `rooms`
  ADD PRIMARY KEY (`room_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=74;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
