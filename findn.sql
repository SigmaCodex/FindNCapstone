-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 27, 2022 at 07:57 AM
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
  `specs` varchar(66) NOT NULL
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
-- Indexes for dumped tables
--

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
-- Indexes for table `computer_type`
--
ALTER TABLE `computer_type`
  ADD PRIMARY KEY (`Ctype_id`);

--
-- Indexes for table `finders`
--
ALTER TABLE `finders`
  ADD PRIMARY KEY (`user_id`);

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
-- AUTO_INCREMENT for table `computershop`
--
ALTER TABLE `computershop`
  MODIFY `shop_id` int(33) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `computer_type`
--
ALTER TABLE `computer_type`
  MODIFY `Ctype_id` int(55) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `transaction`
--
ALTER TABLE `transaction`
  MODIFY `transaction_id` int(99) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `user_id` int(40) NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `compmanager`
--
ALTER TABLE `compmanager`
  ADD CONSTRAINT `compmanager_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`),
  ADD CONSTRAINT `compmanager_ibfk_2` FOREIGN KEY (`shop_id_fk`) REFERENCES `computershop` (`shop_id`);

--
-- Constraints for table `finders`
--
ALTER TABLE `finders`
  ADD CONSTRAINT `finders_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`);

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
