-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 25, 2023 at 06:38 PM
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
-- Database: `shivadhardharanipallavidatabase`
--

-- --------------------------------------------------------

--
-- Table structure for table `customer_bookings`
--

CREATE DATABASE shivadharDharaniPallavidatabase;



CREATE USER 'shivadharDharaniPallavi'@'localhost' IDENTIFIED BY 'shivadharDharaniPallaviPass';
GRANT ALL PRIVILEGES ON shivadharDharaniPallavidatabase.* TO 'shivadharDharaniPallavi'@'localhost';
FLUSH PRIVILEGES;

USE shivadharDharaniPallavidatabase;


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
(1, 'Shivadhar Reddy', '8765423789', 'shivadhar@gmail.com', '167, colunbia Ave', 'Columbia Ave', 'JersyCity', 'Newjersy', '1', '600', '2023-06-25', '2023-06-26', 1, 1, 1, 2, 1, 'HTS1', '700', 'NEW CUSTOMER OFFER'),
(2, 'Dharani', '7678934678', 'dharani@gmail.com', 'dharani@gmail.com', '34 street', 'Jersy City', 'New Jersy', '1', '650', '2023-06-27', '2023-06-28', 1, 1, 1, 2, 1, 'HTS2', '700', 'NEW CUSTOMER OFFER'),
(3, 'Sri Pallavi', '7866578654', 'pallavi@gmail.com', 'mondtclair', '84 street', 'Austin', 'Texas', '2', '550', '2023-06-29', '2023-06-30', 1, 1, 1, 2, 1, 'HTS3', '600', 'NEW CUSTOMER OFFER');

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
(1, 'oliverevans82@gmail.', 4, 'The hotel exceeded my expectations in every way. The staff was incredibly friendly and helpful, and the room was spacious, clean, and beautifully decorated. The amenities were top-notch, especially the fitness center and spa. I highly recommend this hotel for a luxurious and relaxing stay', 'Oliver Evans'),
(2, 'sophiarodriguez04@gm', 5, 'I had a fantastic experience at this hotel. The location was perfect, right in the heart of the city with easy access to shopping and dining. The room was modern and comfortable, and the hotel staff went above and beyond to ensure my stay was enjoyable. The breakfast buffet had a wide variety of delicious options. I would definitely stay here again', 'Sophia Rodriguez'),
(3, 'liamthompson99@gmail', 4, 'This hotel provided excellent service from start to finish. The check-in process was smooth, and the staff was attentive and friendly throughout my stay. The room was clean and well-maintained, and the bed was incredibly comfortable. The hotels restaurant had an impressive menu, and the food was delicious. I would highly recommend this hotel to anyone visiting the area', 'Liam Thompson'),
(4, 'isabellawright77@gma', 1, 'I was disappointed with my stay at this hotel. The room was outdated and in need of renovation. The Wi-Fi was unreliable, and the air conditioning didnt work properly. The hotel staff seemed indifferent to my concerns and didnt provide any solutions. Overall, it was a subpar experience, and I would not stay here again', 'Isabella Wright'),
(5, 'noahturner13@gmail.c', 5, 'This hotel was a hidden gem. The location was perfect, tucked away in a quiet neighborhood but still within walking distance of attractions. The room was cozy and clean, and the bed was comfortable. The hotel staff was friendly and helpful, providing great recommendations for local restaurants. I thoroughly enjoyed my stay and would choose this hotel again in a heartbeat.', 'Noah Turner'),
(6, 'miafoster55@gmail.co', 3, 'I had a mixed experience at this hotel. The room was spacious and had a nice view, but the cleanliness left much to be desired. The bathroom had a lingering odor, and the towels were old and worn. On the positive side, the hotel had a great pool area and the breakfast was decent. It was an average stay overall', 'Mia Foster'),
(7, 'ethanharris20@gmail.', 2, 'I cannot speak highly enough of this hotel. The customer service was exceptional, with the staff going above and beyond to ensure my comfort. The room was stylishly decorated and had all the amenities I needed. The hotels rooftop bar offered breathtaking views of the city, and the cocktails were delicious. I would definitely stay here again.', 'Ethan Harris'),
(8, 'avapatterson91@gmail', 5, 'I had a wonderful stay at this hotel. The location was perfect, right next to the beach with stunning ocean views. The room was clean and comfortable, and the hotel had great facilities including a gym and a spa. The staff was friendly and attentive, making me feel welcome throughout my stay. I would highly recommend this hotel to anyone visiting the area.', 'Ava Patterson'),
(9, 'lucascooper62@gmail.', 1, 'My stay at this hotel was disappointing. The room was small and lacked basic amenities. The noise from the nearby construction made it difficult to sleep, and the hotel staff did not offer any assistance or alternative solutions. The only redeeming factor was the central location, but overall, it was not a pleasant experience', 'Lucas Cooper'),
(10, 'harperreed08@gmail.c', 5, 'This hotel exceeded my expectations in every way. The room was spacious and beautifully designed, with a comfortable bed and luxurious bathroom. The hotels restaurant served amazing food, and the breakfast buffet had a wide variety of options. The staff was friendly and attentive, providing exceptional service. I would definitely stay here again', 'Harper Reed');

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
(1, 101, '1', 1, 1, '2023-06-22', '2023-07-22', 5, 'HTS1'),
(2, 102, '1', 1, 1, '2023-06-22', '2023-07-22', 6, 'HTS2'),
(3, 103, '1', 1, 0, '2023-06-22', '2023-07-22', 8, ''),
(4, 104, '1', 1, 0, '2023-06-22', '2023-07-22', 2, ''),
(5, 105, '1', 1, 0, '2023-06-22', '2023-07-22', 3, ''),
(6, 106, '1', 1, 0, '2023-06-22', '2023-07-22', 4, ''),
(7, 107, '1', 1, 0, '2023-06-22', '2023-07-22', 5, ''),
(8, 201, '2', 1, 1, '2023-06-22', '2023-07-22', 5, 'HTS3'),
(9, 202, '2', 1, 0, '2023-06-22', '2023-07-22', 6, ''),
(10, 203, '2', 1, 0, '2023-06-22', '2023-07-22', 8, ''),
(11, 204, '2', 1, 0, '2023-06-22', '2023-07-22', 2, ''),
(12, 205, '2', 1, 0, '2023-06-22', '2023-07-22', 3, ''),
(13, 206, '2', 1, 0, '2023-06-22', '2023-07-22', 4, ''),
(14, 207, '2', 1, 0, '2023-06-22', '2023-07-22', 5, ''),
(15, 301, '3', 1, 0, '2023-06-22', '2023-07-22', 5, ''),
(16, 302, '3', 1, 0, '2023-06-22', '2023-07-22', 6, ''),
(17, 303, '3', 1, 0, '2023-06-22', '2023-07-22', 8, ''),
(18, 304, '3', 1, 0, '2023-06-22', '2023-07-22', 2, ''),
(19, 305, '3', 1, 0, '2023-06-22', '2023-07-22', 3, ''),
(20, 306, '3', 1, 0, '2023-06-22', '2023-07-22', 4, ''),
(21, 307, '3', 1, 0, '2023-06-22', '2023-07-22', 5, ''),
(22, 401, '4', 1, 0, '2023-06-22', '2023-07-22', 5, ''),
(23, 402, '4', 1, 0, '2023-06-22', '2023-07-22', 6, ''),
(24, 403, '4', 1, 0, '2023-06-22', '2023-07-22', 8, ''),
(25, 404, '4', 1, 0, '2023-06-22', '2023-07-22', 2, ''),
(26, 405, '4', 1, 0, '2023-06-22', '2023-07-22', 3, ''),
(27, 406, '4', 1, 0, '2023-06-22', '2023-07-22', 4, ''),
(28, 407, '4', 1, 0, '2023-06-22', '2023-07-22', 5, '');

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
(1, 'Premium', 700.00, 'Wi-Fi/Internet access, Room Service, In Room bar,Parking'),
(2, 'Diamond', 600.00, 'Wi-Fi/Internet access, Breakfast, Parking'),
(3, 'Gold', 500.00, 'Wi-Fi/Internet access, Breakfast, Pet-Friendly Facilities'),
(4, 'Silver', 700.00, 'Wi-Fi/Internet access,Breakfast, Laundry Services');

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
(1, 'shivadhar', 'shivadharpassword'),
(2, 'dharani', 'dharanipassword'),
(3, 'pallavi', 'pallavipassword'),
(4, 'admin', 'password');

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
  MODIFY `id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `customer_ratings`
--
ALTER TABLE `customer_ratings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `rooms`
--
ALTER TABLE `rooms`
  MODIFY `room_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=30;

--
-- AUTO_INCREMENT for table `room_category_details`
--
ALTER TABLE `room_category_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
