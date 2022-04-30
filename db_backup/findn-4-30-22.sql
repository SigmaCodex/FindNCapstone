-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 30, 2022 at 06:33 AM
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
  `profilepic` text NOT NULL,
  `email` varchar(66) NOT NULL,
  `contactaddress` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compmanager`
--

INSERT INTO `compmanager` (`user_id`, `shop_id_fk`, `firstname`, `lastname`, `gender`, `birthdate`, `profilepic`, `email`, `contactaddress`) VALUES
(1622766, 8, 'Aganan', 'Shawn', 'Male', '23/4/2000', '', 'Shawn@gmail.com', '09223332233'),
(16223310, 7, 'John', 'Delgado', 'male', '2000-04-12', '16223310,admin11.jpg', 'hackmetry01@gmail.com', '9233344566');

-- --------------------------------------------------------

--
-- Table structure for table `compshop_notification`
--

CREATE TABLE `compshop_notification` (
  `cp_noti_id` int(11) NOT NULL,
  `transaction_id` int(12) NOT NULL,
  `noti_body` longtext NOT NULL,
  `noti_created` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `compshop_notification`
--

INSERT INTO `compshop_notification` (`cp_noti_id`, `transaction_id`, `noti_body`, `noti_created`, `status`) VALUES
(6, 300473, 'Request', '04/30/22', 'unseen'),
(7, 3004788, 'Request', '04/30/22', 'unseen');

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
  `operating_days` varchar(40) NOT NULL,
  `net_speed` varchar(66) NOT NULL,
  `description` longtext NOT NULL,
  `contact_number` varchar(66) NOT NULL,
  `tel_number` varchar(25) NOT NULL,
  `email_address` varchar(66) NOT NULL,
  `Shop_Status` varchar(66) NOT NULL,
  `shop_img_icon` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computershop`
--

INSERT INTO `computershop` (`shop_id`, `shop_name`, `address`, `coordinates`, `operating_hours`, `operating_days`, `net_speed`, `description`, `contact_number`, `tel_number`, `email_address`, `Shop_Status`, `shop_img_icon`) VALUES
(7, 'TNC', 'Palaez street, Cebu City', '10.300776461635635,123.8993325328612', '08:30AM-08:32PM', 'Monday-Saturday', '100', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '09632394707', '437-8576', 'tnccebuhq@gmail.com', 'Open', 'Image1.png'),
(8, 'GameCity', 'Colon street', '10.295601483082422,123.89735336183276', '8am-9pm', '', '300', '20 Years Of serving Gamer and Students', '09223344555', '0', 'hackmetry01@gmail.com', 'Close', 'gamecity_logo.png'),
(12, 'G7 Updated', 'hipodromo,cebu city', '10.298055681070537,123.8977148917499', '24/7', 'Monday-Friday', '200', 'Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum', '0922377223', '437-8576', 'hackmetry01@gmail.com', 'Inactive', '');

-- --------------------------------------------------------

--
-- Table structure for table `computer_ratings`
--

CREATE TABLE `computer_ratings` (
  `rating_id` int(33) NOT NULL,
  `shop_id` int(33) NOT NULL,
  `user_id` int(33) NOT NULL,
  `computer_rate` int(6) NOT NULL,
  `review` text NOT NULL,
  `date` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `computer_ratings`
--

INSERT INTO `computer_ratings` (`rating_id`, `shop_id`, `user_id`, `computer_rate`, `review`, `date`) VALUES
(28227513, 7, 1622108, 4, '', '4/30/2022'),
(28227515, 7, 1622163, 3, '', '4/30/2022'),
(28227517, 7, 1622487, 4, '', '5/01/2022'),
(28227519, 7, 16228210, 4, '', '4/30/2022');

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
(4, 7, 'VIP', 10, 25, 'CPU: Intel Core i5 - 8400 @ 2.80GHz (6 CPU\'s), ~2.8 GHz', '3701_308940199219173_437898959_n.jpg', 'Available', 10),
(5, 7, 'Regular', 204, 16, 'Cpu Intel Core i3 @3.60GHz(4 CPUs), ~ 3.6GHz GPU: N', '', 'Available', 10),
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
(280471, 4, '1'),
(300473, 4, '2'),
(1604846, 14, '1'),
(2004777, 4, '1'),
(3004788, 4, '2');

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
  `phone_num` varchar(15) NOT NULL,
  `profile_pic` text NOT NULL,
  `vac_status` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finders`
--

INSERT INTO `finders` (`user_id`, `lastname`, `firstname`, `birthdate`, `gender`, `address`, `email`, `phone_num`, `profile_pic`, `vac_status`) VALUES
(1622108, 'Delgado', 'John Dave ', '2000-12-06', 'male', '', 'hackmetry01@gmail.com', '9272247240', '', '2ndvac'),
(1622163, 'Dublin', 'John Ken', '5/1/2000', 'Male', '', 'johnken@gmail.com', '09233344567', '', 'Vaccinated 1st Dose'),
(1622487, 'Sesaldo', 'Ivan', '1970-01-01', 'male', '', 'ivan@gmail.com', '09233445532', 'ivan.jpg', '1stvac'),
(16228210, 'Tanggol', 'Chris Dann', '1970-01-01', 'male', '', 'tanggol@gmail.com', '00233232123', '261145836_261375842636145_7332530809678086323_n.jpg', '1stvac');

-- --------------------------------------------------------

--
-- Table structure for table `finder_notification`
--

CREATE TABLE `finder_notification` (
  `finder_notif_id` int(12) NOT NULL,
  `to_user_id` int(12) NOT NULL,
  `transaction_id` int(11) NOT NULL,
  `noti_title` varchar(70) NOT NULL,
  `noti_body` longtext NOT NULL,
  `noti_created` varchar(20) NOT NULL,
  `status` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `finder_notification`
--

INSERT INTO `finder_notification` (`finder_notif_id`, `to_user_id`, `transaction_id`, `noti_title`, `noti_body`, `noti_created`, `status`) VALUES
(66, 1622487, 1604846, 'Pending', 'Booking Request To be accepted by the admin', '04/16/22', 'unseen'),
(72, 1622487, 1604846, 'Success', 'accepted', '04/16/22', 'unseen'),
(88, 1622108, 300473, 'Pending', 'Booking Request To be accepted by the admin', '04/30/22', 'unseen'),
(89, 1622108, 3004788, 'Pending', 'Booking Request To be accepted by the admin', '04/30/22', 'unseen'),
(90, 1622108, 300473, 'Fail', 'Declined', '04/30/22', 'unseen'),
(91, 1622108, 300473, 'Message', 'sorry busy me sir', '04/30/22', 'unseen'),
(92, 1622108, 300473, 'Message', 'sorry busy me sir', '04/30/22', 'unseen'),
(93, 1622108, 3004788, 'Fail', 'Declined', '04/30/22', 'unseen'),
(94, 1622108, 3004788, 'Message', 'SOrry Sir busy kaau me', '04/30/22', 'unseen'),
(95, 1622108, 3004788, 'Message', 'SOrry Sir busy kaau me', '04/30/22', 'unseen');

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
(280471, 123322, '04/28/22', '273196427_1353761728430473_6304824051604986128_n2.jpg'),
(2004777, 20002332, '04/20/22', '273196427_1353761728430473_6304824051604986128_n1.jpg');

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
(49, 7, 'TNC-4.jpeg', '24-04-22'),
(53, 7, '274921027_373864341406314_8158130089926874278_n.jpg', '25-04-22');

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
  `instruction` longtext NOT NULL,
  `date_issued` varchar(66) NOT NULL,
  `transaction_status` varchar(66) NOT NULL,
  `arrival_status` varchar(40) NOT NULL,
  `service_fee` int(12) NOT NULL,
  `payment_status` varchar(66) NOT NULL,
  `payment_type` varchar(66) NOT NULL,
  `qr_code` varchar(99) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `transaction`
--

INSERT INTO `transaction` (`transaction_id`, `user_id_fk`, `shop_id_fk`, `servicetype`, `arrival_time`, `arrival_date`, `instruction`, `date_issued`, `transaction_status`, `arrival_status`, `service_fee`, `payment_status`, `payment_type`, `qr_code`) VALUES
(280471, 1622108, 7, 'ComputerBooking', '13:56', '04/28/2022', 'sdsd', '05/28/22', 'Overdue', 'Overdue', 10, 'paid', 'gcash', 'not_issued'),
(300473, 1622108, 7, 'ComputerBooking', '11:53', '05/01/2022', 'asda', '04/30/22', 'declined', 'waiting', 20, 'unpaid', 'not_selected', 'not_issued'),
(1604846, 1622487, 8, 'ComputerBooking', '03:08', '04/16/2022', 'Dapit Aircon Lang kya!', '04/16/22', 'accepted', 'waiting', 10, 'unpaid', 'overthecounter', 'qrCode-04-16-22-02-22-56.png'),
(2004777, 1622108, 7, 'ComputerBooking', '01:11', '04/21/2022', 'sada', '04/20/22', 'success', 'arrived', 10, 'paid', 'gcash', 'qrCode-04-20-22-01-06-55.png'),
(3004788, 1622108, 7, 'ComputerBooking', '01:51', '05/01/2022', 'sdsd', '04/30/22', 'declined', 'waiting', 20, 'unpaid', 'not_selected', 'not_issued');

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
(101010, 'superadmin', '12345678', 'superadmin', 'verified'),
(1622108, 'dnko12', '12345678', 'finder', 'Active'),
(1622163, 'junky', '12345678', 'finder', 'Active'),
(1622487, 'zendaz', '12345678', 'finder', 'Active'),
(1622766, 'admin2', '12345678', 'Admin', 'Active'),
(16223310, 'admin1', '12345678', 'Admin', 'Active'),
(16228210, 'grendelz', '12345678', 'finder', 'Active');

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
  ADD PRIMARY KEY (`cp_noti_id`),
  ADD KEY `compshop_notification_ibfk_2` (`transaction_id`);

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
  ADD PRIMARY KEY (`finder_notif_id`),
  ADD KEY `finder_notification_ibfk_2` (`to_user_id`),
  ADD KEY `finder_notification_ibfk_1` (`transaction_id`);

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
  MODIFY `comment_id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `compshop_notification`
--
ALTER TABLE `compshop_notification`
  MODIFY `cp_noti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `computershop`
--
ALTER TABLE `computershop`
  MODIFY `shop_id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `computer_ratings`
--
ALTER TABLE `computer_ratings`
  MODIFY `rating_id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28227520;

--
-- AUTO_INCREMENT for table `computer_type`
--
ALTER TABLE `computer_type`
  MODIFY `Ctype_id` int(55) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `comp_booking`
--
ALTER TABLE `comp_booking`
  MODIFY `transaction_id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27031231;

--
-- AUTO_INCREMENT for table `finder_notification`
--
ALTER TABLE `finder_notification`
  MODIFY `finder_notif_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

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
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27031231;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16228211;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_ibfk_1` FOREIGN KEY (`post_id`) REFERENCES `post_events` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `compmanager`
--
ALTER TABLE `compmanager`
  ADD CONSTRAINT `compmanager_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `compmanager_ibfk_2` FOREIGN KEY (`shop_id_fk`) REFERENCES `computershop` (`shop_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `compshop_notification`
--
ALTER TABLE `compshop_notification`
  ADD CONSTRAINT `compshop_notification_ibfk_2` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`transaction_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `computer_ratings`
--
ALTER TABLE `computer_ratings`
  ADD CONSTRAINT `computer_ratings_ibfk_1` FOREIGN KEY (`shop_id`) REFERENCES `computershop` (`shop_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `computer_ratings_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `finder_notification`
--
ALTER TABLE `finder_notification`
  ADD CONSTRAINT `finder_notification_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`transaction_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `finder_notification_ibfk_2` FOREIGN KEY (`to_user_id`) REFERENCES `user` (`user_id`) ON DELETE NO ACTION ON UPDATE CASCADE;

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
