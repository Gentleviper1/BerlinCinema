-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: May 11, 2025 at 05:01 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `OurWebsite`
--

-- --------------------------------------------------------

--
-- Table structure for table `Admin`
--

CREATE TABLE `Admin` (
  `AdminId` int(11) NOT NULL,
  `Afirstname` varchar(20) NOT NULL,
  `Alastname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `email` varchar(255) NOT NULL,
  `role` int(11) NOT NULL,
  `isActive` tinyint(1) NOT NULL DEFAULT 1,
  `phone` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `screening_id` int(11) NOT NULL,
  `booking_date` datetime NOT NULL DEFAULT current_timestamp(),
  `booking_status` enum('confirmed','cancelled','pending') NOT NULL DEFAULT 'pending',
  `total_amount` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`book_id`, `user_id`, `screening_id`, `booking_date`, `booking_status`, `total_amount`) VALUES
(1, 1, 1, '2025-05-07 22:01:08', 'confirmed', 25.00),
(2, 2, 2, '2025-05-07 22:01:08', 'pending', 28.00);

-- --------------------------------------------------------

--
-- Table structure for table `booking_seats`
--

CREATE TABLE `booking_seats` (
  `booking_id` int(11) NOT NULL,
  `seat_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `booking_seats`
--

INSERT INTO `booking_seats` (`booking_id`, `seat_id`) VALUES
(1, 1),
(1, 2),
(2, 3);

-- --------------------------------------------------------

--
-- Table structure for table `Customer`
--

CREATE TABLE `Customer` (
  `userid` int(11) NOT NULL,
  `roleId` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `userstatus` tinyint(1) NOT NULL DEFAULT 1,
  `email` varchar(255) NOT NULL,
  `phone` varchar(12) NOT NULL,
  `password` varchar(255) NOT NULL,
  `age` int(11) GENERATED ALWAYS AS (timestampdiff(YEAR,`dob`,curdate())) VIRTUAL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Customer`
--

INSERT INTO `Customer` (`userid`, `roleId`, `name`, `dob`, `userstatus`, `email`, `phone`, `password`) VALUES
(1, 2, 'John', '1990-05-20', 1, 'john@example.com', '555010203', '1234'),
(2, 1, 'Emma', '1988-11-15', 1, 'emma@example.com', '555030405', '$2y$10$hashedpassword2');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `id` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `usertype` enum('admin','customer') NOT NULL,
  `last_login` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`id`, `userid`, `username`, `password`, `usertype`, `last_login`) VALUES
(1, 1, 'john@example.com', '1234', 'customer', NULL),
(2, 2, 'emma@example.com', '$2y$10$hashedpassword2', 'customer', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `movie`
--

CREATE TABLE `movie` (
  `movieId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `cast_members` text NOT NULL,
  `poster_url` text NOT NULL,
  `price` decimal(10,2) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `trailer` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `rdate` date NOT NULL,
  `duration` int(11) NOT NULL,
  `is_active` tinyint(1) NOT NULL DEFAULT 1
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `movie`
--

INSERT INTO `movie` (`movieId`, `title`, `cast_members`, `poster_url`, `price`, `genre`, `trailer`, `category`, `description`, `rdate`, `duration`, `is_active`) VALUES
(1, 'The Matrix', 'Keanu Reeves, Laurence Fishburne', 'matrix.jpg', 12.50, 'Sci-Fi', 'matrix_trailer.mp4', 'Action', 'A computer hacker learns about reality', '1999-03-31', 136, 1),
(2, 'Inception', 'Leonardo DiCaprio, Joseph Gordon-Levitt', 'inception.jpg', 14.00, 'Sci-Fi', 'inception_trailer.mp4', 'Thriller', 'Dream-sharing technology heist', '2010-07-16', 148, 1);

-- --------------------------------------------------------

--
-- Table structure for table `movie_theatre`
--

CREATE TABLE `movie_theatre` (
  `movieId` int(11) NOT NULL,
  `theatreid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `paymentid` int(11) NOT NULL,
  `booking_id` int(11) NOT NULL,
  `amount` decimal(10,2) NOT NULL,
  `method` enum('credit_card','paypal','cash') NOT NULL,
  `status` enum('pending','completed','failed') NOT NULL DEFAULT 'pending',
  `payment_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`paymentid`, `booking_id`, `amount`, `method`, `status`, `payment_date`) VALUES
(1, 1, 25.00, 'credit_card', 'completed', '2025-05-07 22:01:08'),
(2, 2, 28.00, 'paypal', 'pending', '2025-05-07 22:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `reg_id` int(11) NOT NULL,
  `roleId` int(11) NOT NULL,
  `full_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(50) NOT NULL,
  `phone` varchar(15) NOT NULL,
  `dob` date NOT NULL,
  `gender` enum('male','female') NOT NULL,
  `registration_date` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`reg_id`, `roleId`, `full_name`, `email`, `password`, `phone`, `dob`, `gender`, `registration_date`) VALUES
(1, 1, 'John Smith', 'john@example.com', '', '555010203', '1990-05-20', 'male', '2025-05-07 21:59:16'),
(2, 1, 'Emma Johnson', 'emma@example.com', '', '555030405', '1988-11-15', 'female', '2025-05-07 21:59:16');

-- --------------------------------------------------------

--
-- Table structure for table `review`
--

CREATE TABLE `review` (
  `reviewid` int(11) NOT NULL,
  `userid` int(11) NOT NULL,
  `content` text NOT NULL,
  `movieid` int(11) NOT NULL,
  `rating` int(11) DEFAULT NULL CHECK (`rating` between 1 and 5),
  `created_at` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `review`
--

INSERT INTO `review` (`reviewid`, `userid`, `content`, `movieid`, `rating`, `created_at`) VALUES
(1, 1, 'Mind-blowing visuals!', 1, 5, '2025-05-07 22:01:08'),
(2, 2, 'Complex but rewarding', 2, 4, '2025-05-07 22:01:08');

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `roleId` int(11) NOT NULL,
  `rolename` varchar(25) NOT NULL,
  `description` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`roleId`, `rolename`, `description`) VALUES
(1, 'Customer', ''),
(2, 'admin', 'FullAccess');

-- --------------------------------------------------------

--
-- Table structure for table `screenings`
--

CREATE TABLE `screenings` (
  `screenid` int(11) NOT NULL,
  `theatreid` int(11) NOT NULL,
  `name` varchar(12) NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `hallid` int(11) NOT NULL,
  `movieid` int(11) NOT NULL,
  `available_seats` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `screenings`
--

INSERT INTO `screenings` (`screenid`, `theatreid`, `name`, `start_time`, `end_time`, `hallid`, `movieid`, `available_seats`) VALUES
(1, 1, 'Screen 1', '19:00:00', '21:16:00', 1, 1, 150),
(2, 1, 'Screen 2', '20:30:00', '23:00:00', 2, 2, 200),
(3, 2, 'Screen A', '18:00:00', '20:16:00', 1, 1, 100),
(4, 1, 'Screen 1', '19:00:00', '21:16:00', 1, 1, 150),
(5, 1, 'Screen 2', '20:30:00', '23:00:00', 2, 2, 200),
(6, 2, 'Screen A', '18:00:00', '20:16:00', 1, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `seats`
--

CREATE TABLE `seats` (
  `seatid` int(11) NOT NULL,
  `seat_number` int(11) NOT NULL,
  `seat_row` int(11) NOT NULL,
  `type` varchar(12) NOT NULL,
  `is_available` tinyint(1) NOT NULL DEFAULT 1,
  `hallid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `seats`
--

INSERT INTO `seats` (`seatid`, `seat_number`, `seat_row`, `type`, `is_available`, `hallid`) VALUES
(1, 1, 1, 'standard', 1, 1),
(2, 2, 1, 'standard', 1, 1),
(3, 1, 1, 'premium', 1, 2),
(4, 2, 1, 'premium', 1, 2);

-- --------------------------------------------------------

--
-- Table structure for table `theatre`
--

CREATE TABLE `theatre` (
  `theatreid` int(11) NOT NULL,
  `location` varchar(23) NOT NULL,
  `name` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theatre`
--

INSERT INTO `theatre` (`theatreid`, `location`, `name`) VALUES
(1, 'Berlin Mitte', 'CineStar'),
(2, 'Berlin Kreuzberg', 'Yorck');

-- --------------------------------------------------------

--
-- Table structure for table `theatrehall`
--

CREATE TABLE `theatrehall` (
  `hallId` int(11) NOT NULL,
  `theatreId` int(11) NOT NULL,
  `hall_no` int(11) NOT NULL,
  `seat_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `theatrehall`
--

INSERT INTO `theatrehall` (`hallId`, `theatreId`, `hall_no`, `seat_count`) VALUES
(1, 1, 1, 150),
(2, 1, 2, 200),
(3, 2, 1, 100);

-- --------------------------------------------------------

--
-- Table structure for table `Upcomingmovies`
--

CREATE TABLE `Upcomingmovies` (
  `upcomingId` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `genre` varchar(50) NOT NULL,
  `trailer` text NOT NULL,
  `category` varchar(50) NOT NULL,
  `comingdate` date NOT NULL,
  `adminId` int(11) NOT NULL,
  `attachment_url` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `Upcomingmovies`
--

INSERT INTO `Upcomingmovies` (`upcomingId`, `title`, `genre`, `trailer`, `category`, `comingdate`, `adminId`, `attachment_url`) VALUES
(1, 'Dune: Part Two', 'Sci-Fi', 'dune2_trailer.mp4', 'Adventure', '2023-11-03', 1, 'dune2_poster.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Admin`
--
ALTER TABLE `Admin`
  ADD PRIMARY KEY (`AdminId`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`book_id`),
  ADD KEY `screening_id` (`screening_id`),
  ADD KEY `idx_bookings_user` (`user_id`);

--
-- Indexes for table `booking_seats`
--
ALTER TABLE `booking_seats`
  ADD PRIMARY KEY (`booking_id`,`seat_id`),
  ADD KEY `seat_id` (`seat_id`);

--
-- Indexes for table `Customer`
--
ALTER TABLE `Customer`
  ADD PRIMARY KEY (`userid`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`id`),
  ADD KEY `userid` (`userid`);

--
-- Indexes for table `movie`
--
ALTER TABLE `movie`
  ADD PRIMARY KEY (`movieId`);

--
-- Indexes for table `movie_theatre`
--
ALTER TABLE `movie_theatre`
  ADD PRIMARY KEY (`movieId`,`theatreid`),
  ADD KEY `theatreid` (`theatreid`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`paymentid`),
  ADD KEY `idx_payment_booking` (`booking_id`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`reg_id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD KEY `roleId` (`roleId`);

--
-- Indexes for table `review`
--
ALTER TABLE `review`
  ADD PRIMARY KEY (`reviewid`),
  ADD KEY `userid` (`userid`),
  ADD KEY `idx_review_movie` (`movieid`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`roleId`);

--
-- Indexes for table `screenings`
--
ALTER TABLE `screenings`
  ADD PRIMARY KEY (`screenid`),
  ADD KEY `movieid` (`movieid`),
  ADD KEY `idx_screenings_hall` (`hallid`),
  ADD KEY `theatreid` (`theatreid`);

--
-- Indexes for table `seats`
--
ALTER TABLE `seats`
  ADD PRIMARY KEY (`seatid`),
  ADD UNIQUE KEY `hallid` (`hallid`,`seat_number`);

--
-- Indexes for table `theatre`
--
ALTER TABLE `theatre`
  ADD PRIMARY KEY (`theatreid`);

--
-- Indexes for table `theatrehall`
--
ALTER TABLE `theatrehall`
  ADD PRIMARY KEY (`hallId`),
  ADD KEY `theatreId` (`theatreId`);

--
-- Indexes for table `Upcomingmovies`
--
ALTER TABLE `Upcomingmovies`
  ADD PRIMARY KEY (`upcomingId`),
  ADD KEY `adminId` (`adminId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Admin`
--
ALTER TABLE `Admin`
  MODIFY `AdminId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `book_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `Customer`
--
ALTER TABLE `Customer`
  MODIFY `userid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `movie`
--
ALTER TABLE `movie`
  MODIFY `movieId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `paymentid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `reg_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `review`
--
ALTER TABLE `review`
  MODIFY `reviewid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `roleId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `screenings`
--
ALTER TABLE `screenings`
  MODIFY `screenid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `seats`
--
ALTER TABLE `seats`
  MODIFY `seatid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `theatre`
--
ALTER TABLE `theatre`
  MODIFY `theatreid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `theatrehall`
--
ALTER TABLE `theatrehall`
  MODIFY `hallId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `Upcomingmovies`
--
ALTER TABLE `Upcomingmovies`
  MODIFY `upcomingId` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `database`.`Customer` (`userid`),
  ADD CONSTRAINT `bookings_ibfk_2` FOREIGN KEY (`screening_id`) REFERENCES `screenings` (`screenid`);

--
-- Constraints for table `booking_seats`
--
ALTER TABLE `booking_seats`
  ADD CONSTRAINT `booking_seats_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`book_id`),
  ADD CONSTRAINT `booking_seats_ibfk_2` FOREIGN KEY (`seat_id`) REFERENCES `seats` (`seatid`);

--
-- Constraints for table `login`
--
ALTER TABLE `login`
  ADD CONSTRAINT `login_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `database`.`Customer` (`userid`);

--
-- Constraints for table `movie_theatre`
--
ALTER TABLE `movie_theatre`
  ADD CONSTRAINT `movie_theatre_ibfk_1` FOREIGN KEY (`movieId`) REFERENCES `movie` (`movieId`),
  ADD CONSTRAINT `movie_theatre_ibfk_2` FOREIGN KEY (`theatreid`) REFERENCES `theatre` (`theatreid`);

--
-- Constraints for table `payment`
--
ALTER TABLE `payment`
  ADD CONSTRAINT `payment_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `bookings` (`book_id`);

--
-- Constraints for table `registration`
--
ALTER TABLE `registration`
  ADD CONSTRAINT `registration_ibfk_1` FOREIGN KEY (`roleId`) REFERENCES `roles` (`roleId`);

--
-- Constraints for table `review`
--
ALTER TABLE `review`
  ADD CONSTRAINT `review_ibfk_1` FOREIGN KEY (`userid`) REFERENCES `database`.`Customer` (`userid`),
  ADD CONSTRAINT `review_ibfk_2` FOREIGN KEY (`movieid`) REFERENCES `movie` (`movieId`);

--
-- Constraints for table `screenings`
--
ALTER TABLE `screenings`
  ADD CONSTRAINT `screenings_ibfk_1` FOREIGN KEY (`hallid`) REFERENCES `theatrehall` (`hallId`),
  ADD CONSTRAINT `screenings_ibfk_2` FOREIGN KEY (`movieid`) REFERENCES `movie` (`movieId`),
  ADD CONSTRAINT `screenings_ibfk_3` FOREIGN KEY (`theatreid`) REFERENCES `theatre` (`theatreid`);

--
-- Constraints for table `seats`
--
ALTER TABLE `seats`
  ADD CONSTRAINT `seats_ibfk_1` FOREIGN KEY (`hallid`) REFERENCES `theatrehall` (`hallId`);

--
-- Constraints for table `theatrehall`
--
ALTER TABLE `theatrehall`
  ADD CONSTRAINT `theatrehall_ibfk_1` FOREIGN KEY (`theatreId`) REFERENCES `theatre` (`theatreid`);

--
-- Constraints for table `Upcomingmovies`
--
ALTER TABLE `Upcomingmovies`
  ADD CONSTRAINT `upcomingmovies_ibfk_1` FOREIGN KEY (`adminId`) REFERENCES `database`.`Admin` (`AdminId`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
