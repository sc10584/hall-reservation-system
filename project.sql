-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jan 05, 2023 at 07:11 AM
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
  PRIMARY KEY (`advancePay_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `booking_details`
--

DROP TABLE IF EXISTS `booking_details`;
CREATE TABLE IF NOT EXISTS `booking_details` (
  `booking_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `name_company` varchar(255) DEFAULT NULL,
  `name_applicant` varchar(255) DEFAULT NULL,
  `nic_applicant` varchar(255) DEFAULT NULL,
  `address_applicant` varchar(255) DEFAULT NULL,
  `mobile_applicant` int(10) DEFAULT NULL,
  `landline_applicant` int(10) DEFAULT NULL,
  `email_applicant` varchar(255) DEFAULT NULL,
  `matter` varchar(255) DEFAULT NULL,
  `musical_show` varchar(255) DEFAULT NULL,
  `band` varchar(255) DEFAULT NULL,
  `singers` varchar(255) DEFAULT NULL,
  `guests` varchar(255) DEFAULT NULL,
  `audience` varchar(255) DEFAULT NULL,
  `date_application` date DEFAULT NULL,
  `time_application` time DEFAULT NULL,
  `lightning` varchar(255) DEFAULT NULL,
  `sound` varchar(255) DEFAULT NULL,
  `generators` varchar(255) DEFAULT NULL,
  `decorations` varchar(255) DEFAULT NULL,
  `tickets` varchar(255) DEFAULT NULL,
  `controlling_sec` varchar(255) DEFAULT NULL,
  `date_submit` timestamp NULL DEFAULT CURRENT_TIMESTAMP,
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  `letterNo` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`booking_id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_details`
--

INSERT INTO `booking_details` (`booking_id`, `name_company`, `name_applicant`, `nic_applicant`, `address_applicant`, `mobile_applicant`, `landline_applicant`, `email_applicant`, `matter`, `musical_show`, `band`, `singers`, `guests`, `audience`, `date_application`, `time_application`, `lightning`, `sound`, `generators`, `decorations`, `tickets`, `controlling_sec`, `date_submit`, `customer_id`, `letterNo`) VALUES
(10, 'EventDotLK', 'Kanishka Nuwan', '199712345678', '3A,Horana RD,Panadura.', 717169565, 113574554, 'kanishkanuwanperera@gmail.com', 'musicalshow,', 'fastrhy,', 'daddy', 'amal, B&S, randir, lahiru', 'no', 'open,', '2023-01-27', '16:00:00', 'music band', 'the music band', 'SM ELECTRICAL', 'NO', 'YES', 'securityex,', '2023-01-04 13:52:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

DROP TABLE IF EXISTS `customer`;
CREATE TABLE IF NOT EXISTS `customer` (
  `customer_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `telephone_num` int(10) NOT NULL,
  `user_id` int(10) UNSIGNED NOT NULL,
  PRIMARY KEY (`customer_id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`customer_id`, `first_name`, `last_name`, `telephone_num`, `user_id`) VALUES
(4, 'Tharushi', 'Nawodya', 717169565, 11),
(5, 'Kanishka', 'Nuwan', 717169565, 12);

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
  PRIMARY KEY (`fullpayment_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `refundablecharge_process`
--

DROP TABLE IF EXISTS `refundablecharge_process`;
CREATE TABLE IF NOT EXISTS `refundablecharge_process` (
  `refundRecharge_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT,
  `deputyRegister` varchar(255) DEFAULT NULL,
  `SD_A` text,
  `SD_B` text,
  `cheif_security_officer` text,
  `VT_A` text,
  `VT_B` text,
  `audioVisual_technicalOfficer` varchar(255) DEFAULT NULL,
  `WE_A` text,
  `price` decimal(10,0) DEFAULT NULL,
  `WE_B` text,
  `date_a` date DEFAULT NULL,
  `working_engineer` text,
  `VC_A` text,
  `vice_chancellar` varchar(255) DEFAULT NULL,
  `refundCallBack_id` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`refundRecharge_id`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `refundablecharge_process`
--

INSERT INTO `refundablecharge_process` (`refundRecharge_id`, `deputyRegister`, `SD_A`, `SD_B`, `cheif_security_officer`, `VT_A`, `VT_B`, `audioVisual_technicalOfficer`, `WE_A`, `price`, `WE_B`, `date_a`, `working_engineer`, `VC_A`, `vice_chancellar`, `refundCallBack_id`) VALUES
(7, 'approved', 'A company profile describes what makes your company unique. It automatically differentiates your brand because no other company has the exact same founding story and reason for existing that your business does. Your history and values are integral parts of your brand positioning strategy, and a company profile is where you can mention this informationfbgf without it feeling extraneous or out of place.', 'You can build your reputation through marketing, service, and sales campaigns, but it all begins with a well-curated first impression.', 'approved', 'vjfngorhngorhsngobuh', 'dfgjnfbogfbogh', 'something', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL);

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
  PRIMARY KEY (`refundablePay_id`)
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
  `customer_id` int(10) UNSIGNED DEFAULT NULL,
  PRIMARY KEY (`letterNo`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `requestletter_info`
--

INSERT INTO `requestletter_info` (`letterNo`, `senderAddress`, `letterContent`, `eventName`, `eventDate`, `eventTime`, `sendDate`, `signOff`, `is_approved`, `customer_id`) VALUES
(2, '3A,\r\nHorana RD,\r\nPanadura.', 'Respected madam/sir,\r\n\r\nThis letter is to inform (mention the name of the organization or agency) that I (mention your name) from (mention the place where you are staying) wanted to do a family function at our society auditorium. I and my husband live here alone for our office work.\r\n\r\nWe have some family rituals to do due to which both of our family members are coming and they wanted to do this function at our place and to conduct this function we want permission from society authority to use our society auditorium to conduct this ceremony.\r\n\r\nWe assure you that ceremony will be organized maintaining very rules and regulations made by the society.\r\n\r\nThere will be no damage to the used products and we will take care of every material properly. I also assure you that we will not create any unnecessary problems for the society members or the people. This will be a total family function with a few of our guests.\r\n\r\nThis letter is to request you for granting us permission to conduct our ceremony at the society auditorium. This will be a great help to me and to my family. We will be highly obliged to you.\r\n\r\n', 'Sunshine', '2023-01-20', '10:00:00', '2022-12-25 20:54:56', 'Sincerly,\r\nKanishka Perera.', 0, 5),
(3, 'no 322,\r\ntangalle road,\r\neliyakanda,\r\nmatara.', 'This letter is to inform you from [mention company name] that on the eve of New Year our department have decided to celebrate New Year eve at office premises. This celebration will be a new start for our department. As many of our members are not being able to go home for New Year, so considering them we have decided to celebrate it at our office premises.\r\n\r\nThe celebration will be organized by the members of [mention department]. I would like to request all of you to be present at the office that day, in this way no one will feel left out or away from home at the occasion days. \r\n\r\nIf any employee is interested to take part in any activity or has any queries you can contact to [mention person name] of [mention team or department]. She/he is the organizer of this celebration. The celebration will be held on [mention date and time] at [mention place, be specific-auditorium, cafeteria, etc.].', 'New Year', '2023-02-17', '11:00:00', '2023-01-04 23:10:55', 'Sincerly,\r\nCEO', 0, 5);

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
  PRIMARY KEY (`refundCallBack_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `review_table`
--

DROP TABLE IF EXISTS `review_table`;
CREATE TABLE IF NOT EXISTS `review_table` (
  `review_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(200) NOT NULL,
  `user_rating` int(1) NOT NULL,
  `user_review` text NOT NULL,
  `datetime` int(11) NOT NULL,
  PRIMARY KEY (`review_id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `review_table`
--

INSERT INTO `review_table` (`review_id`, `user_name`, `user_rating`, `user_review`, `datetime`) VALUES
(1, 'thilini', 5, 'good', 1672381007),
(2, 'kanishka', 3, 'good product!!', 1672381121);

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
  PRIMARY KEY (`staff_id`)
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
  `role_id` int(11) NOT NULL DEFAULT '0',
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `verification_id` varchar(255) NOT NULL,
  `verification_status` int(11) NOT NULL,
  PRIMARY KEY (`user_id`,`role_id`)
) ENGINE=InnoDB AUTO_INCREMENT=13 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`user_id`, `role_id`, `username`, `email`, `password`, `verification_id`, `verification_status`) VALUES
(11, 0, 'tharushi98', 'kanishkanuwanperera@gmail.com', '2222', 'f1d522c2fd5f880448c749af4af965d6', 1),
(12, 0, 'sc10516', 'kanishkanuwan10@gmail.com', '1111', 'ee3a8c7959b1efd202d482bae0430ed6', 1);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
