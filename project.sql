-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Dec 18, 2022 at 02:08 PM
-- Server version: 5.7.36
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `advance_payment`
--

DROP TABLE IF EXISTS `advance_payment`;
CREATE TABLE IF NOT EXISTS `advance_payment` (
  `advancePay_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `advance_amount` int(11) NOT NULL,
  `booking_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`advancePay_id`),
  KEY `booking_id` (`booking_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

DROP TABLE IF EXISTS `booking_details`;
CREATE TABLE IF NOT EXISTS `booking_details` (
  `booking_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_company` varchar(255) NOT NULL,
  `name_applicant` varchar(255) NOT NULL,
  `nic_applicant` varchar(255) NOT NULL,
  `address_applicant` varchar(255) NOT NULL,
  `mobile_applicant` int(10) NOT NULL,
  `landline_applicant` int(10) NOT NULL,
  `email_applicant` varchar(255) NOT NULL,
  `matter` varchar(255) NOT NULL,
  `musical_show` varchar(255) NOT NULL,
  `band` varchar(255) NOT NULL,
  `singers` varchar(255) NOT NULL,
  `guests` varchar(255) NOT NULL,
  `audience` varchar(255) NOT NULL,
  `date_application` date NOT NULL,
  `time_application` time NOT NULL,
  `lightning` varchar(255) NOT NULL,
  `sound` varchar(255) NOT NULL,
  `generators` varchar(255) NOT NULL,
  `decorations` varchar(255) NOT NULL,
  `tickets` varchar(255) NOT NULL,
  `controlling_sec` varchar(255) NOT NULL,
  `date_submit` date NOT NULL,
  `customer_id` int(10) UNSIGNED NOT NULL,
  `letterNo` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`booking_id`),
  KEY `customer_id` (`customer_id`),
  KEY `letterNo` (`letterNo`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last _name` varchar(100) NOT NULL,
  `telephone_num` int(10) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`customer_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `full_payment`
--

DROP TABLE IF EXISTS `full_payment`;
CREATE TABLE IF NOT EXISTS `full_payment` (
  `fullpayment_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `rehearsal_amount` int(11) NOT NULL,
  `decoration_amount` int(11) NOT NULL,
  `security_ammount` int(11) NOT NULL,
  `total_amount` int(11) NOT NULL,
  `advancePay_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`fullpayment_id`),
  KEY `advancePay_id` (`advancePay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `refundablecharge_process`
--

DROP TABLE IF EXISTS `refundablecharge_process`;
CREATE TABLE IF NOT EXISTS `refundablecharge_process` (
  `refundRecharge_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `deputyRegister` varchar(255) NOT NULL,
  `SD-A` text NOT NULL,
  `SD_B` text NOT NULL,
  `cheif_securty_officer` text NOT NULL,
  `VT_A` text NOT NULL,
  `VT_B` text NOT NULL,
  `audioVisual_technicalOfficer` varchar(255) NOT NULL,
  `WE_A` text NOT NULL,
  `price` decimal(10,0) NOT NULL,
  `WE_B` text NOT NULL,
  `date_a` date NOT NULL,
  `working_engineer` text NOT NULL,
  `VC_A` text NOT NULL,
  `vice_chancellar` varchar(255) NOT NULL,
  `refundCallBack_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`refundRecharge_id`),
  KEY `refundCallBack_id` (`refundCallBack_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `refundable_payment`
--

DROP TABLE IF EXISTS `refundable_payment`;
CREATE TABLE IF NOT EXISTS `refundable_payment` (
  `refundablePay_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `refundable_amount` int(11) NOT NULL,
  `refundable_payment_status` varchar(100) NOT NULL DEFAULT 'no',
  `refundable_paymentDay` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `fullpayment_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`refundablePay_id`),
  KEY `fullpayment_id` (`fullpayment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestletter_info`
--

DROP TABLE IF EXISTS `requestletter_info`;
CREATE TABLE IF NOT EXISTS `requestletter_info` (
  `letterNo` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `senderAddress` varchar(255) NOT NULL,
  `letterContent` text NOT NULL,
  `eventName` varchar(255) NOT NULL,
  `eventDate` date NOT NULL,
  `eventTime` time NOT NULL,
  `sendDate` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `signOff` varchar(255) NOT NULL,
  `is_approved` int(11) NOT NULL DEFAULT '0',
  `customer_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`letterNo`),
  KEY `customer_id` (`customer_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `requestrefund_info`
--

DROP TABLE IF EXISTS `requestrefund_info`;
CREATE TABLE IF NOT EXISTS `requestrefund_info` (
  `refundCallBack_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `senderAddress` varchar(255) NOT NULL,
  `letterContent` text NOT NULL,
  `signOff_refund` varchar(255) NOT NULL,
  `sendDate_refundReq` datetime NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `refundablePay_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`refundCallBack_id`),
  KEY `refundablePay_id` (`refundablePay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
CREATE TABLE IF NOT EXISTS `role` (
  `role_id` int(11) UNSIGNED NOT NULL,
  `role_name` varchar(100) NOT NULL,
  PRIMARY KEY (`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

DROP TABLE IF EXISTS `staff`;
CREATE TABLE IF NOT EXISTS `staff` (
  `staff_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(100) NOT NULL,
  `last _name` varchar(100) NOT NULL,
  `telephone_num` int(10) NOT NULL,
  `role_id` int(11) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`staff_id`),
  KEY `user_id` (`user_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `timeallocation`
--

DROP TABLE IF EXISTS `timeallocation`;
CREATE TABLE IF NOT EXISTS `timeallocation` (
  `timeallocation_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `is_rehearsal` varchar(100) NOT NULL DEFAULT 'no',
  `rehearsal_date` date NOT NULL,
  `rehearsal_time` time NOT NULL,
  `rehearsal_hours` int(11) NOT NULL,
  `is_decoration` varchar(100) NOT NULL DEFAULT 'no',
  `decoration_date` date NOT NULL,
  `decoration_time` time NOT NULL,
  `decoration_hours` int(11) NOT NULL,
  `booking_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`timeallocation_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `user_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `role_id` int(11) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verification_id` varchar(255) NOT NULL,
  `verification_status` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `advance_payment`
--
ALTER TABLE `advance_payment`
  ADD CONSTRAINT `advance_payment_ibfk_1` FOREIGN KEY (`booking_id`) REFERENCES `booking_details` (`booking_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `booking_details`
--
ALTER TABLE `booking_details`
  ADD CONSTRAINT `booking_details_ibfk_2` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `booking_details_ibfk_3` FOREIGN KEY (`letterNo`) REFERENCES `requestletter_info` (`letterNo`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `customer`
--
ALTER TABLE `customer`
  ADD CONSTRAINT `customer_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `full_payment`
--
ALTER TABLE `full_payment`
  ADD CONSTRAINT `full_payment_ibfk_1` FOREIGN KEY (`advancePay_id`) REFERENCES `advance_payment` (`advancePay_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `refundablecharge_process`
--
ALTER TABLE `refundablecharge_process`
  ADD CONSTRAINT `refundablecharge_process_ibfk_1` FOREIGN KEY (`refundCallBack_id`) REFERENCES `requestrefund_info` (`refundCallBack_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `refundable_payment`
--
ALTER TABLE `refundable_payment`
  ADD CONSTRAINT `refundable_payment_ibfk_1` FOREIGN KEY (`fullpayment_id`) REFERENCES `full_payment` (`fullpayment_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requestletter_info`
--
ALTER TABLE `requestletter_info`
  ADD CONSTRAINT `requestletter_info_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `customer` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `requestrefund_info`
--
ALTER TABLE `requestrefund_info`
  ADD CONSTRAINT `requestrefund_info_ibfk_1` FOREIGN KEY (`refundablePay_id`) REFERENCES `refundable_payment` (`refundablePay_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `staff_ibfk_1` FOREIGN KEY (`user_id`) REFERENCES `user` (`user_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
