-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 10, 2022 at 11:58 PM
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
  `post_id_fk` int(33) NOT NULL,
  `comment` varchar(500) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`comment_id`, `user_id`, `post_id_fk`, `comment`, `date`, `time`) VALUES
(3, 16223310, 4, 'Hello Guys! this is our First Announcement.  <3 !', '2005-01-22', '00:00:00'),
(5, 16223310, 4, 'hellow', '2005-01-22', '00:00:00'),
(15, 1622108, 3, 'try', '2005-10-22', '00:00:00'),
(16, 1622108, 3, 'asdasdasd', '2005-10-22', '00:00:00');

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
(1022372, 7, 'delgado', 'manalo', 'Male', '17/5/2000', '', 'hackmetry01@gmail.com', '09223772233'),
(1622766, 8, 'Aganan', 'Shawn', 'Male', '23/4/2000', '', 'Shawn@gmail.com', '09223332233'),
(16223310, 7, 'Admin', 'Tnc', 'male', '2000-04-12', '16223310,admin11.jpg', 'hackmetry01@gmail.com', '9233344566');

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
(33, 805726, 'Request', '05/08/22', 'unseen');

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
(7, 'TNC', 'Palaez street, Cebu City', '10.300776461635635,123.8993325328612', '08:30AM-08:32PM', 'Monday-Saturday', '100', 'The TNC Cebu cybercafe is located at the corner of Pelaez Street and Sanciangko Street (across the main campus of the University of San Carlos)', '09632394707', '437-8576', 'tnccebuhq@gmail.com', 'Open', 'Image1.png'),
(8, 'GameCity', 'Colon street', '10.295582570404932,123.89717141144558', '08:30AM-08:32PM', 'Monday-Wednesday', '300', '20 Years Of serving Gamer and Students', '09223344555', '337-8234', 'hackmetry01@gmail.com', 'Close', 'gamecity_logo.png'),
(12, 'G7 Updated', 'hipodromo,cebu city', '10.298055681070537,123.8977148917499', '24/7', 'Monday-Friday', '200', 'LoremIpsum', '0922377223', '437-8576', 'hackmetry01@gmail.com', 'Inactive', '');

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
(28227513, 7, 1622108, 4, '', '04/30/2022'),
(28227515, 7, 1622163, 3, '', '04/30/2022'),
(28227517, 7, 1622487, 4, '', '05/01/2022'),
(28227519, 7, 16228210, 4, '', '04/30/2022'),
(28227527, 7, 1622108, 5, 'I LOVE TNC<3', '05/01/2022'),
(28227529, 7, 1622108, 4, 'I Love Tnc<322', '05/01/2022'),
(28227530, 7, 1622108, 5, 'I lOVE THE Computer and Management<3', '05/03/2022'),
(28227531, 7, 1622108, 5, 'sample rate', '05/03/2022'),
(28227532, 8, 1622108, 5, 'Love Game City', '05/03/2022'),
(28227533, 7, 1622108, 5, 'I LOVE TNC', '05/03/2022'),
(28227534, 7, 1622108, 5, 'RATE FROM TRANCATION DETAILS', '05/03/2022'),
(28227535, 7, 1622108, 1, 'shawn nag rate ani', '05/05/2022'),
(28227536, 8, 1622108, 4, 'goo', '05/08/2022');

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
(4, 7, 'VIP', 10, 25, 'CPU: Intel Core i5 - 8400 @ 2.80GHz (6 CPU\'s), ~2.8 GHz', 'default_computertype.png', 'Available', 15),
(5, 7, 'Regular', 204, 16, 'Cpu Intel Core i3 @3.60GHz(4 CPUs), ~ 3.6GHz GPU: N', 'default_computertype.png', 'Available', 10),
(11, 12, 'VIP', 200, 10, 'Cpu Intel Core i3 @3.60GHz(4 CPUs), ~ 3.6GHz\nGPU: NVIDIA GeForce GTX 1050 TI @4GB\nTotal RAM: 1x16 GB @2667 MHz\nOS: Windows 10 Pro 64-bit', 'default_computertype.png', 'Available', 10),
(12, 12, 'Regular', 200, 20, 'VIP Specs:\nCPU: Intel Core i5 - 8400 @ 2.80GHz (6 CPU\'s), ~2.8 GHz\nGPU: NVIDIA GeForce GTX 1070 @ 8 GB\nTotal RAM: 1x16 GB @ 2667 MHz\nOS: Windows 10 Pro 64-bit\n\"Key Features\"\nVIP Area uses Predator PC ', 'default_computertype.png', 'Available', 10),
(13, 12, 'SuperVIP', 5, 50, 'CPU: Intel Core i5 - 8400 @ 2.80GHz (6 CPU\'s), ~2.8 GHz\nGPU: NVIDIA GeForce GTX 1070 @ 8 GB\nTotal RAM: 1x16 GB @ 2667 MHz\nOS: Windows 10 Pro 64-bit\n\"Key Features\"\nVIP Area uses Predator PC and Predato', 'default_computertype.png', 'Available', 10),
(14, 8, 'Regular', 10, 15, 'Ryzen5', 'default_computertype.png', 'Available', 10);

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
(405712, 5, '1'),
(505785, 4, '2'),
(505787, 4, '1'),
(805726, 5, '1');

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
(522592, 'Delgado', 'John', '2000-01-04', 'male', '', 'hackmetry01@gmail.com', '9262247240', '522592,dnko13.png', '2ndvac'),
(1022471, 'Dela Cruz', 'Juan ', '5/5/2000', 'Male', '', 'hackmetry01@gmail.com', '9233221123', '', 'Vaccinated 2nd Dose'),
(1022998, 'Delgado', 'John Dave', '11/5/2000', 'Female', '', 'hackmetry01@gmail.com', '9233228823', '', 'Vaccinated 1st Dose'),
(1622108, 'Delgado', 'John Dave', '2000-06-07', 'male', '', 'hackmetry@gmail.com', '9262247240', '1622108,dnko12.jpg', '2ndvac'),
(1622163, 'Dublin', 'John Ken', '2000-05-01', 'male', '', 'johnken@gmail.com', '9233344567', '1622163,junky.jpg', '1stvac'),
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
(505785, 10002123, '05/05/22', '273196427_1353761728430473_6304824051604986128_n2.jpg');

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
  `instructions` varchar(99) DEFAULT NULL,
  `printing_type` varchar(99) NOT NULL,
  `printing_rate` int(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `printing`
--

INSERT INTO `printing` (`transaction_id`, `file`, `orientation`, `size`, `number_of_copies`, `instructions`, `printing_type`, `printing_rate`) VALUES
(1005718, 'JournalDelgado.docx', 'portrait', 'A1', 3, NULL, 'black&white', 0);

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
(405712, 1622108, 8, 'ComputerBooking', '18:54', '05/04/2022', 'sdsad', '05/04/22', 'success', 'Overdue', 10, 'paid', 'gcash', 'not_issued'),
(505785, 1622108, 7, 'ComputerBooking', '03:51', '05/06/2022', 'Tapad sa gwapa na cashier', '05/05/22', 'success', 'arrived', 20, 'paid', 'gcash', 'qrCode-05-05-22-03-12-14.png'),
(505787, 1622108, 7, 'ComputerBooking', '02:57', '05/05/2022', 'LOREM IPSUM DOL ISUR SKKS GWAPO KAAU SI DAVE NGANU MAN ? BORN TO BE WILD NANA SIYA ? NGANUNG WAY KOY UYAB ? ANIMAL', '05/05/22', 'success', 'arrived', 10, 'paid', 'overthecounter', 'qrCode-05-05-22-02-57-41.png'),
(805726, 1622108, 7, 'ComputerBooking', '19:36', '05/08/2022', 'sample', '05/08/22', 'pending', 'waiting', 10, 'unpaid', 'not_selected', 'not_issued'),
(1005718, 1022998, 7, 'PrintingBooking', '22:56', '05/11/2022', 'palihog og print dayun kya', '05/10/22', 'pending', 'waiting', 0, 'unpaid', 'not_selected', 'not_issued');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `user_id` int(40) NOT NULL,
  `username` varchar(66) NOT NULL,
  `password` longtext NOT NULL,
  `user_type` varchar(66) NOT NULL,
  `status` varchar(66) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `username`, `password`, `user_type`, `status`) VALUES
(101010, 'superadmin', '25d55ad283aa400af464c76d713c07ad', 'superadmin', 'verified'),
(522592, 'dnko13', '25d55ad283aa400af464c76d713c07ad', 'finder', 'disable'),
(1022372, 'jose', '5e8667a439c68f5145dd2fcbecf02209', 'Admin', 'Active'),
(1022471, 'dnko14', '25d55ad283aa400af464c76d713c07ad', 'finder', 'Active'),
(1022998, 'dnko11', '25d55ad283aa400af464c76d713c07ad', 'finder', 'Active'),
(1622108, 'dnko12', '4d5cbf175688f9f292cd334094181fdc', 'finder', 'verified'),
(1622163, 'junky', '25d55ad283aa400af464c76d713c07ad', 'finder', 'Active'),
(1622487, 'zendaz', '25d55ad283aa400af464c76d713c07ad', 'finder', 'Active'),
(1622766, 'admin2', '25d55ad283aa400af464c76d713c07ad', 'Admin', 'Active'),
(16223310, 'admin1', '202cb962ac59075b964b07152d234b70', 'Admin', 'Active'),
(16228210, 'grendelz', '25d55ad283aa400af464c76d713c07ad', 'finder', 'Active');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`comment_id`),
  ADD KEY `post_id` (`post_id_fk`),
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
  MODIFY `comment_id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `compshop_notification`
--
ALTER TABLE `compshop_notification`
  MODIFY `cp_noti_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=34;

--
-- AUTO_INCREMENT for table `computershop`
--
ALTER TABLE `computershop`
  MODIFY `shop_id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `computer_ratings`
--
ALTER TABLE `computer_ratings`
  MODIFY `rating_id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28227537;

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
  MODIFY `finder_notif_id` int(12) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;

--
-- AUTO_INCREMENT for table `post_events`
--
ALTER TABLE `post_events`
  MODIFY `post_id` int(33) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `reports`
--
ALTER TABLE `reports`
  MODIFY `report_id` int(33) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `shop_image`
--
ALTER TABLE `shop_image`
  MODIFY `image_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=58;

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
  ADD CONSTRAINT `comments_ibfk_2` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `comments_ibfk_3` FOREIGN KEY (`post_id_fk`) REFERENCES `post_events` (`post_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
-- Constraints for table `printing`
--
ALTER TABLE `printing`
  ADD CONSTRAINT `printing_ibfk_1` FOREIGN KEY (`transaction_id`) REFERENCES `transaction` (`transaction_id`) ON DELETE CASCADE ON UPDATE CASCADE;

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
