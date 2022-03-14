-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 
-- Generation Time: Mar 14, 2022 at 05:32 PM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.3.22

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `findn`
--

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `comment_id` int(33) NOT NULL,
  `user_id` int(33) NOT NULL,
  `post_id` int(33) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `compmanager`
--

CREATE TABLE `compmanager` (
  `user_id` int(45) NOT NULL,
  `shop_id_fk` int(45) NOT NULL,
  `firstname` varchar(99) NOT NULL,
  `lastname` varchar(99) NOT NULL,
  `gender` varchar(99) NOT NULL,
  `birthdate` varchar(99) NOT NULL,
  `profilepic` varchar(99) NOT NULL,
  `email` varchar(99) NOT NULL,
  `contactaddress` varchar(99) NOT NULL,
  `valid_id_image` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `computershop`
--

CREATE TABLE `computershop` (
  `shop_id` int(33) NOT NULL,
  `shop_name` varchar(66) NOT NULL,
  `address` varchar(66) NOT NULL,
  `coordinates` varchar(66) NOT NULL,
  `operating_hours` varchar(66) NOT NULL,
  `net_speed` varchar(66) NOT NULL,
  `description` varchar(66) NOT NULL,
  `contact_number` varchar(66) NOT NULL,
  `email_address` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computershop`
--

INSERT INTO `computershop` (`shop_id`, `shop_name`, `address`, `coordinates`, `operating_hours`, `net_speed`, `description`, `contact_number`, `email_address`) VALUES
(1, 'tnc', '12312', '123', '1232', '454', '124124', '123123', 'asdsd'),
(2, 'TNC', 'Sanciangko', '1231232', '24/7', '400mbps', '1adadasdasda', '2312313', 'tnc@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `computer_ratings`
--

CREATE TABLE `computer_ratings` (
  `rating_id` int(33) NOT NULL,
  `shop_id` int(33) NOT NULL,
  `user_id` int(33) NOT NULL,
  `computer_rate` int(6) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `computer_type`
--

CREATE TABLE `computer_type` (
  `Ctype_id` int(55) NOT NULL,
  `shop_id_fk` int(55) NOT NULL,
  `name` varchar(66) NOT NULL,
  `total_units` int(66) NOT NULL,
  `rate` int(66) NOT NULL,
  `specs` varchar(66) NOT NULL,
  `comp_type_img` varchar(99) DEFAULT NULL,
  `status` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `comp_booking`
--

CREATE TABLE `comp_booking` (
  `transaction_id` int(33) NOT NULL,
  `computer_type` varchar(99) NOT NULL,
  `num_ticket` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `finders`
--

CREATE TABLE `finders` (
  `user_id` int(45) NOT NULL,
  `lastname` varchar(66) NOT NULL,
  `firstname` varchar(66) NOT NULL,
  `birthdate` varchar(66) NOT NULL,
  `gender` varchar(66) NOT NULL,
  `civil_status` varchar(66) NOT NULL,
  `address` varchar(66) NOT NULL,
  `email` varchar(66) NOT NULL,
  `phone_num` int(12) NOT NULL,
  `profile_pic` varchar(66) NOT NULL,
  `vac_card_img` varchar(66) NOT NULL,
  `vac_status` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finders`
--

INSERT INTO `finders` (`user_id`, `lastname`, `firstname`, `birthdate`, `gender`, `civil_status`, `address`, `email`, `phone_num`, `profile_pic`, `vac_card_img`, `vac_status`) VALUES
(142251, 'Tanggol', 'Chris', '13/3/2022', 'Male', '', '', 'cdtanggol@gmail.com', 2147483647, '', '', '2nd Dose');

-- --------------------------------------------------------

--
-- Table structure for table `notifications`
--

CREATE TABLE `notifications` (
  `notify_id` int(33) NOT NULL,
  `user_id` int(33) NOT NULL,
  `notification_type` varchar(99) NOT NULL,
  `notif_title` varchar(99) NOT NULL,
  `notif_body` varchar(99) NOT NULL,
  `notif_created` date NOT NULL,
  `status` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `post_events`
--

CREATE TABLE `post_events` (
  `post_id` int(33) NOT NULL,
  `shop_id` int(33) NOT NULL,
  `post_description` varchar(99) DEFAULT NULL,
  `post_title` varchar(99) DEFAULT NULL,
  `post_img` varchar(99) DEFAULT NULL,
  `post_created` date NOT NULL,
  `post_updated` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `printing`
--

CREATE TABLE `printing` (
  `transaction_id` int(33) NOT NULL,
  `file` varchar(99) NOT NULL,
  `orientation` varchar(99) NOT NULL,
  `size` varchar(99) NOT NULL,
  `number_of_copies` int(99) NOT NULL,
  `instructions` varchar(99) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `printing_rate`
--

CREATE TABLE `printing_rate` (
  `shop_id` int(33) NOT NULL,
  `printing_type` varchar(99) NOT NULL,
  `printing_rate` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `reports`
--

CREATE TABLE `reports` (
  `report_id` int(33) NOT NULL,
  `shop_id` int(33) NOT NULL,
  `num_of_customer` int(255) NOT NULL,
  `num_of_transactions` int(255) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `shop_images`
--

CREATE TABLE `shop_images` (
  `shop_id` int(33) NOT NULL,
  `img_file` varchar(99) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(99) NOT NULL,
  `user_id_fk` int(66) NOT NULL,
  `shop_id_fk` int(66) NOT NULL,
  `servicetype` varchar(66) NOT NULL,
  `arrival_time` varchar(66) NOT NULL,
  `arrival_date` varchar(66) NOT NULL,
  `date_issued` varchar(66) NOT NULL,
  `transaction_status` varchar(66) NOT NULL,
  `service_fee` int(66) NOT NULL,
  `payment_status` varchar(66) NOT NULL,
  `payment_type` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(40) NOT NULL,
  `username` varchar(66) NOT NULL,
  `password` varchar(66) NOT NULL,
  `user_type` varchar(66) NOT NULL,
  `status` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `user_type`, `status`) VALUES
(142251, 'grendel', 'Notsobadsk1*', 'finder', 'active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `compmanager`
--
ALTER TABLE `compmanager`
  ADD KEY `user_id` (`user_id`),
  ADD KEY `shop_id_fk` (`shop_id_fk`);

--
-- Indexes for table `computershop`
--
ALTER TABLE `computershop`
  ADD PRIMARY KEY (`shop_id`);

--
-- Indexes for table `computer_ratings`
--
ALTER TABLE `computer_ratings`
  ADD PRIMARY KEY (`rating_id`),
  ADD KEY `shop_id` (`shop_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `computer_type`
--
ALTER TABLE `computer_type`
  ADD PRIMARY KEY (`Ctype_id`),
  ADD KEY `shop_id_fk` (`shop_id_fk`);

--
-- Indexes for table `comp_booking`
--
ALTER TABLE `comp_booking`
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `finders`
--
ALTER TABLE `finders`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `notifications`
--
ALTER TABLE `notifications`
  ADD PRIMARY KEY (`notify_id`),
  ADD KEY `user_id` (`user_id`);

--
-- Indexes for table `post_events`
--
ALTER TABLE `post_events`
  ADD PRIMARY KEY (`post_id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `printing`
--
ALTER TABLE `printing`
  ADD KEY `transaction_id` (`transaction_id`);

--
-- Indexes for table `printing_rate`
--
ALTER TABLE `printing_rate`
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `reports`
--
ALTER TABLE `reports`
  ADD PRIMARY KEY (`report_id`),
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `shop_images`
--
ALTER TABLE `shop_images`
  ADD KEY `shop_id` (`shop_id`);

--
-- Indexes for table `transaction`
--
ALTER TABLE `transaction`
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `transaction_ibfk_1` (`user_id_fk`),
  ADD KEY `shop_id_fk` (`shop_id_fk`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `comment_id` int(33) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `computershop`
--
ALTER TABLE `computershop`
  MODIFY `shop_id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `computer_type`
--
ALTER TABLE `computer_type`
  MODIFY `Ctype_id` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `notifications`
--
ALTER TABLE `notifications`
  MODIFY `notify_id` int(33) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_events`
--
ALTER TABLE `post_events`
  MODIFY `post_id` int(33) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(33) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=142252;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post_events` (`post_id`),
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `compmanager`
--
ALTER TABLE `compmanager`
  ADD CONSTRAINT `compmanager_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `compmanager_ibfk_2` FOREIGN KEY (`shop_id_fk`) REFERENCES `computershop` (`shop_id`);

--
-- Constraints for table `computer_ratings`
--
ALTER TABLE `computer_ratings`
  ADD CONSTRAINT `computer_ratings_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `computershop` (`shop_id`),
  ADD CONSTRAINT `computer_ratings_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `computer_type`
--
ALTER TABLE `computer_type`
  ADD CONSTRAINT `computer_type_ibfk_1` FOREIGN KEY (`shop_id_fk`) REFERENCES `computershop` (`shop_id`);

--
-- Constraints for table `comp_booking`
--
ALTER TABLE `comp_booking`
  ADD CONSTRAINT `comp_booking_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`transaction_id`);

--
-- Constraints for table `finders`
--
ALTER TABLE `finders`
  ADD CONSTRAINT `finders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `notifications`
--
ALTER TABLE `notifications`
  ADD CONSTRAINT `notifications_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `post_events`
--
ALTER TABLE `post_events`
  ADD CONSTRAINT `post_events_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `computershop` (`shop_id`);

--
-- Constraints for table `printing`
--
ALTER TABLE `printing`
  ADD CONSTRAINT `printing_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`transaction_id`);

--
-- Constraints for table `printing_rate`
--
ALTER TABLE `printing_rate`
  ADD CONSTRAINT `printing_rate_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `computershop` (`shop_id`);

--
-- Constraints for table `reports`
--
ALTER TABLE `reports`
  ADD CONSTRAINT `reports_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `computershop` (`shop_id`);

--
-- Constraints for table `shop_images`
--
ALTER TABLE `shop_images`
  ADD CONSTRAINT `shop_images_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `computershop` (`shop_id`);

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`user_id_fk`) REFERENCES `finders` (`user_id`),
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`shop_id_fk`) REFERENCES `computershop` (`shop_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;