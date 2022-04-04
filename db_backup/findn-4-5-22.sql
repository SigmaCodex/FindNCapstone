-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 04, 2022 at 11:46 PM
-- Server version: 10.4.13-MariaDB
-- PHP Version: 7.3.20

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
  `user_id` int(13) NOT NULL,
  `shop_id_fk` int(13) NOT NULL,
  `firstname` varchar(66) NOT NULL,
  `lastname` varchar(66) NOT NULL,
  `gender` varchar(66) NOT NULL,
  `birthdate` varchar(66) NOT NULL,
  `profilepic` varchar(99) NOT NULL,
  `email` varchar(66) NOT NULL,
  `contactaddress` varchar(66) NOT NULL,
  `valid_id_image` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compmanager`
--

INSERT INTO `compmanager` (`user_id`, `shop_id_fk`, `firstname`, `lastname`, `gender`, `birthdate`, `profilepic`, `email`, `contactaddress`, `valid_id_image`) VALUES
(2522405, 7, 'Ivan', 'Selsado', 'Female', '26/3/2022', '', 'ivan@gmail.com', '09233457564', ''),
(2722410, 12, 'Ivan', 'Selsado', 'Male', '9/3/2022', '', 'ivan@gmail.com', '09233445567', '');

-- --------------------------------------------------------

--
-- Table structure for table `compshop_notification`
--

CREATE TABLE `compshop_notification` (
  `cp_noti_id` int(11) NOT NULL,
  `to_shop_id` int(11) NOT NULL,
  `noti_title` varchar(70) NOT NULL,
  `noti_body` longtext NOT NULL,
  `noti_created` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
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
  `description` varchar(400) NOT NULL,
  `contact_number` varchar(66) NOT NULL,
  `email_address` varchar(66) NOT NULL,
  `Shop_Status` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computershop`
--

INSERT INTO `computershop` (`shop_id`, `shop_name`, `address`, `coordinates`, `operating_hours`, `net_speed`, `description`, `contact_number`, `email_address`, `Shop_Status`) VALUES
(7, 'TNC', 'Palaez street, Cebu City', '10.298068533932295,123.89853783241296', '24/7', '100mbs', 'We are open to serve you Address: P.Del Rosario St., Cebu City Ope', '09632394707', 'tnccebuhq@gmail.com', 'Active'),
(8, 'GameCity', 'Colon street', '10.295601483082422,123.89735336183276', '', '', '', '09223344555', 'hackmetry01@gmail.com', 'Active'),
(12, 'G7 Updated', 'hipodromo,cebu city', '10.298055681070537,123.8977148917499', '24/7', '200', '', '0922377223', 'hackmetry01@gmail.com', 'Active');

-- --------------------------------------------------------

--
-- Table structure for table `computer_ratings`
--

CREATE TABLE `computer_ratings` (
  `rating_id` int(33) NOT NULL,
  `shop_id` int(33) NOT NULL,
  `user_id` int(33) NOT NULL,
  `computer_rate` int(6) NOT NULL,
  `date` varchar(66) NOT NULL
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
  `specs` varchar(200) NOT NULL,
  `comp_type_img` varchar(99) NOT NULL,
  `status` varchar(99) NOT NULL,
  `service_fee` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computer_type`
--

INSERT INTO `computer_type` (`Ctype_id`, `shop_id_fk`, `name`, `total_units`, `rate`, `specs`, `comp_type_img`, `status`, `service_fee`) VALUES
(4, 7, 'VIP', 10, 25, 'CPU: Intel Core i5 - 8400 @ 2.80GHz (6 CPU\'s), ~2.8 GHz', 'TNC-2.jpg', 'Available', 20),
(5, 7, 'Regular', 204, 16, 'Cpu Intel Core i3 @3.60GHz(4 CPUs), ~ 3.6GHz GPU: N', '', 'Available', 15),
(11, 12, 'VIP', 200, 10, 'Cpu Intel Core i3 @3.60GHz(4 CPUs), ~ 3.6GHz\nGPU: NVIDIA GeForce GTX 1050 TI @4GB\nTotal RAM: 1x16 GB @2667 MHz\nOS: Windows 10 Pro 64-bit', '', 'Available', 10),
(12, 12, 'Regular', 200, 20, 'VIP Specs:\nCPU: Intel Core i5 - 8400 @ 2.80GHz (6 CPU\'s), ~2.8 GHz\nGPU: NVIDIA GeForce GTX 1070 @ 8 GB\nTotal RAM: 1x16 GB @ 2667 MHz\nOS: Windows 10 Pro 64-bit\n\"Key Features\"\nVIP Area uses Predator PC ', '', 'Available', 10),
(13, 12, 'SuperVIP', 5, 50, 'CPU: Intel Core i5 - 8400 @ 2.80GHz (6 CPU\'s), ~2.8 GHz\nGPU: NVIDIA GeForce GTX 1070 @ 8 GB\nTotal RAM: 1x16 GB @ 2667 MHz\nOS: Windows 10 Pro 64-bit\n\"Key Features\"\nVIP Area uses Predator PC and Predato', '', 'Available', 10),
(14, 8, 'Regular', 10, 15, 'Ryzen5', '', 'Available', 10);

-- --------------------------------------------------------

--
-- Table structure for table `comp_booking`
--

CREATE TABLE `comp_booking` (
  `transaction_id` int(33) NOT NULL,
  `comp_type_id` int(12) NOT NULL,
  `num_ticket` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comp_booking`
--

INSERT INTO `comp_booking` (`transaction_id`, `comp_type_id`, `num_ticket`) VALUES
(104724, 4, '2'),
(104776, 4, '2'),
(104795, 4, '4'),
(104822, 14, '1'),
(104839, 14, '2'),
(304776, 5, '2');

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
  `address` varchar(66) NOT NULL,
  `email` varchar(66) NOT NULL,
  `phone_num` int(12) NOT NULL,
  `profile_pic` varchar(66) NOT NULL,
  `vac_status` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finders`
--

INSERT INTO `finders` (`user_id`, `lastname`, `firstname`, `birthdate`, `gender`, `address`, `email`, `phone_num`, `profile_pic`, `vac_status`) VALUES
(2522356, 'selsaldo', 'ivanatics', '1970-01-01', 'male', '', 'ivanatices@gmail.com', 2147483647, 'Prof.png', 'select'),
(2522878, 'Delgado', 'John Dave', '2000-12-06', 'male', '', 'hackmetry01@gmail.com', 2147483647, '1557310702_1267_UgysAp_n.jpg', 'select'),
(2722686, 'Delgado123', 'John Dave Carcueva', '2000-12-06', 'male', '', 'hackmetry01@gmail.com', 2147483647, '1557310702_1267_UgysAp_n.jpg', '1stvac');

-- --------------------------------------------------------

--
-- Table structure for table `finder_notification`
--

CREATE TABLE `finder_notification` (
  `finder_notif_id` int(12) NOT NULL,
  `to_user_id` int(12) NOT NULL,
  `noti_title` varchar(70) NOT NULL,
  `noti_body` longtext NOT NULL,
  `noti_created` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `gcash_payment_details`
--

CREATE TABLE `gcash_payment_details` (
  `transaction_id` int(11) NOT NULL,
  `reference_num` int(12) NOT NULL,
  `payment_date` varchar(20) NOT NULL,
  `receipt_image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `gcash_payment_details`
--

INSERT INTO `gcash_payment_details` (`transaction_id`, `reference_num`, `payment_date`, `receipt_image`) VALUES
(104724, 362972601, '04/04/22', 'Untitled1.png');

-- --------------------------------------------------------

--
-- Table structure for table `post_events`
--

CREATE TABLE `post_events` (
  `post_id` int(33) NOT NULL,
  `shop_id` int(33) NOT NULL,
  `post_description` longtext DEFAULT NULL,
  `post_title` varchar(99) DEFAULT NULL,
  `post_img` varchar(99) DEFAULT NULL,
  `post_created` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `post_events`
--

INSERT INTO `post_events` (`post_id`, `shop_id`, `post_description`, `post_title`, `post_img`, `post_created`) VALUES
(3, 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mattis rhoncus urna neque viverra. Ut placerat orci nulla pellentesque dignissim enim sit. Lobortis scelerisque fermentum dui faucibus in ornare. Urna nec tincidunt praesent semper feugiat nibh. Lacus laoreet non curabitur gravida arcu ac tortor dignissim convallis. Nisl condimentum id venenatis a condimentum vitae sapien. Sed libero enim sed faucibus turpis in. Euismod in pellentesque massa placerat duis ultricies lacus. Eu mi bibendum neque egestas congue quisque egestas diam. Et netus et malesuada fames ac turpis egestas sed tempus. Eros donec ac odio tempor orci dapibus ultrices. Tellus integer feugiat scelerisque varius morbi enim nunc. Morbi tincidunt augue interdum velit euismod in pellentesque massa placerat. Ullamcorper sit amet risus nullam eget felis eget nunc. Amet consectetur adipiscing elit ut.', 'SHOP MAINTENANCE 1001', '', '03/27/22'),
(4, 7, 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Mattis rhoncus urna neque viverra. Ut placerat orci nulla pellentesque dignissim enim sit. Lobortis scelerisque fermentum dui faucibus in ornare. Urna nec tincidunt praesent semper feugiat nibh. Lacus laoreet non curabitur gravida arcu ac tortor dignissim convallis. Nisl condimentum id venenatis a condimentum vitae sapien. Sed libero enim sed faucibus turpis in. Euismod in pellentesque massa placerat duis ultricies lacus. Eu mi bibendum neque egestas congue quisque egestas diam. Et netus et malesuada fames ac turpis egestas sed tempus. Eros donec ac odio tempor orci dapibus ultrices. Tellus integer feugiat scelerisque varius morbi enim nunc. Morbi tincidunt augue interdum velit euismod in pellentesque massa placerat. Ullamcorper sit amet risus nullam eget felis eget nunc. Amet consectetur adipiscing elit ut.', 'SHOP MAINTENANCE ', '', '03/27/22'),
(5, 12, 'Lorem Ipsum HELLO', 'VALORANT TOURNAMENT 2022', '', '03/27/22');

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
-- Table structure for table `shop_image`
--

CREATE TABLE `shop_image` (
  `image_id` int(11) NOT NULL,
  `shop_id` int(11) NOT NULL,
  `img_file` varchar(99) NOT NULL,
  `date` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `shop_image`
--

INSERT INTO `shop_image` (`image_id`, `shop_id`, `img_file`, `date`) VALUES
(18, 7, '274921027_373864341406314_8158130089926874278_n.jpg', '31-03-22'),
(19, 7, 'TNC-1.jpg', '31-03-22'),
(20, 7, 'TNC-5.jpg', '31-03-22'),
(21, 7, 'TNC-4.jpeg', '31-03-22');

-- --------------------------------------------------------

--
-- Table structure for table `transaction`
--

CREATE TABLE `transaction` (
  `transaction_id` int(12) NOT NULL,
  `user_id_fk` int(12) NOT NULL,
  `shop_id_fk` int(12) NOT NULL,
  `servicetype` varchar(66) NOT NULL,
  `arrival_time` varchar(66) NOT NULL,
  `arrival_date` varchar(66) NOT NULL,
  `instruction` varchar(99) NOT NULL,
  `date_issued` varchar(66) NOT NULL,
  `transaction_status` varchar(66) NOT NULL,
  `service_fee` int(12) NOT NULL,
  `payment_status` varchar(66) NOT NULL,
  `payment_type` varchar(66) NOT NULL,
  `qr_code` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `user_id_fk`, `shop_id_fk`, `servicetype`, `arrival_time`, `arrival_date`, `instruction`, `date_issued`, `transaction_status`, `service_fee`, `payment_status`, `payment_type`, `qr_code`) VALUES
(104724, 2522878, 7, 'ComputerBooking', '16:15', '04/10/2022', 'Tapas sa Cashier', '04/01/22', 'accepted', 15, 'paid', 'gcash', 'not_issued'),
(104776, 2522878, 7, 'ComputerBooking', '02:16', '04/02/2022', '', '04/01/22', 'pending', 15, 'unpaid', 'not_selected', 'not_issued'),
(104795, 2522878, 7, 'ComputerBooking', '20:15', '04/07/2022', 'Kilid sa Cute na Cashier<3', '04/01/22', 'accepted', 15, 'paid', 'not_selected', 'not_issued'),
(104822, 2522878, 7, 'ComputerBooking', '02:50', '04/10/2022', 'tapad sa gwapa na cashier<3', '04/01/22', 'accepted', 15, 'paid', 'gcash', 'not_issued'),
(104839, 2522878, 8, 'ComputerBooking', '02:53', '04/04/2022', 'Tapda ni crush', '04/01/22', 'accepted', 15, 'paid', 'gcash', 'not_issued'),
(304776, 2522878, 7, 'ComputerBooking', '05:57', '04/05/2022', 'Tapas sa cute na cashier', '04/03/22', 'accepted', 15, 'unpaid', 'overthecounter', 'not_issued');

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
(101010, 'superadmin', 'superadmin', 'superadmin', 'verified'),
(2222855, 'tncadmin123', '12345678', 'Admin', 'verified'),
(2522356, 'student12345', '12345678', 'finder', 'not_verified'),
(2522405, 'ivan123', '12345678', 'Admin', 'verified'),
(2522878, 'dnko12345', '12345678', 'finder', 'verified'),
(2722410, 'shopadmin1', '12345678', 'Admin', 'verified'),
(2722686, 'johndave123', '12345678', 'finder', 'not_verified');

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
  ADD PRIMARY KEY (`user_id`),
  ADD KEY `shop_id_fk` (`shop_id_fk`);

--
-- Indexes for table `compshop_notification`
--
ALTER TABLE `compshop_notification`
  ADD PRIMARY KEY (`cp_noti_id`);

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
  ADD PRIMARY KEY (`transaction_id`),
  ADD KEY `transaction_id` (`transaction_id`),
  ADD KEY `comp_booking_ibfk_2` (`comp_type_id`);

--
-- Indexes for table `finders`
--
ALTER TABLE `finders`
  ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `finder_notification`
--
ALTER TABLE `finder_notification`
  ADD PRIMARY KEY (`finder_notif_id`);

--
-- Indexes for table `gcash_payment_details`
--
ALTER TABLE `gcash_payment_details`
  ADD PRIMARY KEY (`transaction_id`);

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
-- Indexes for table `shop_image`
--
ALTER TABLE `shop_image`
  ADD PRIMARY KEY (`image_id`),
  ADD KEY `shop_image_ibfk_1` (`shop_id`);

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
-- AUTO_INCREMENT for table `compshop_notification`
--
ALTER TABLE `compshop_notification`
  MODIFY `cp_noti_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `computershop`
--
ALTER TABLE `computershop`
  MODIFY `shop_id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `computer_ratings`
--
ALTER TABLE `computer_ratings`
  MODIFY `rating_id` int(33) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `computer_type`
--
ALTER TABLE `computer_type`
  MODIFY `Ctype_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `comp_booking`
--
ALTER TABLE `comp_booking`
  MODIFY `transaction_id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27031231;

--
-- AUTO_INCREMENT for table `finder_notification`
--
ALTER TABLE `finder_notification`
  MODIFY `finder_notif_id` int(12) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `post_events`
--
ALTER TABLE `post_events`
  MODIFY `post_id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(33) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop_image`
--
ALTER TABLE `shop_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27031231;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15228311;

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
  ADD CONSTRAINT `compmanager_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `compmanager_ibfk_2` FOREIGN KEY (`shop_id_fk`) REFERENCES `computershop` (`shop_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `computer_ratings`
--
ALTER TABLE `computer_ratings`
  ADD CONSTRAINT `computer_ratings_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `computershop` (`shop_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `computer_ratings_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `computer_type`
--
ALTER TABLE `computer_type`
  ADD CONSTRAINT `computer_type_ibfk_1` FOREIGN KEY (`shop_id_fk`) REFERENCES `computershop` (`shop_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `comp_booking`
--
ALTER TABLE `comp_booking`
  ADD CONSTRAINT `comp_booking_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`transaction_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comp_booking_ibfk_2` FOREIGN KEY (`comp_type_id`) REFERENCES `computer_type` (`Ctype_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;

--
-- Constraints for table `finders`
--
ALTER TABLE `finders`
  ADD CONSTRAINT `finders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

--
-- Constraints for table `gcash_payment_details`
--
ALTER TABLE `gcash_payment_details`
  ADD CONSTRAINT `gcash_payment_details_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`transaction_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `shop_image`
--
ALTER TABLE `shop_image`
  ADD CONSTRAINT `shop_image_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `computershop` (`shop_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `transaction`
--
ALTER TABLE `transaction`
  ADD CONSTRAINT `transaction_ibfk_1` FOREIGN KEY (`user_id_fk`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `transaction_ibfk_2` FOREIGN KEY (`shop_id_fk`) REFERENCES `computershop` (`shop_id`) ON DELETE NO ACTION ON UPDATE NO ACTION;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
