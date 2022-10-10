-- phpMyAdmin SQL Dump
-- version 4.8.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Aug 08, 2018 at 09:01 AM
-- Server version: 10.1.31-MariaDB
-- PHP Version: 7.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `1410inventory`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(3) NOT NULL,
  `first_name` varchar(25) NOT NULL,
  `last_name` varchar(25) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile1` varchar(15) NOT NULL,
  `mobile2` varchar(15) NOT NULL,
  `password` char(60) NOT NULL,
  `role` char(5) NOT NULL,
  `created_on` datetime NOT NULL,
  `last_login` datetime NOT NULL,
  `last_seen` datetime NOT NULL,
  `last_edited` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `account_status` char(1) NOT NULL DEFAULT '1',
  `deleted` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `first_name`, `last_name`, `email`, `mobile1`, `mobile2`, `password`, `role`, `created_on`, `last_login`, `last_seen`, `last_edited`, `account_status`, `deleted`) VALUES
(1, 'Admin', 'Demo', 'demo@admin.com', '08021111111', '07032222222', '$2y$10$xv9I14OlR36kPCjlTv.wEOX/6Dl7VMuWCl4vCxAVWP1JwYIaw4J2C', 'Super', '2017-01-04 22:19:16', '2018-08-07 23:03:28', '2018-08-08 00:01:30', '2018-08-08 07:01:30', '1', '0'),
(3, 'Rizqy', 'Rionaldy', 'oldyshamir@gmail.com', '081299205209', '', '$2y$10$vXHUpLtCNoJkueEQDw/nHeb8rH0GP3zMLQGgOy7p51FiE8NjmEwSO', 'Super', '2018-08-05 05:28:53', '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2018-08-05 12:28:53', '1', '0');

-- --------------------------------------------------------

--
-- Table structure for table `eventlog`
--

CREATE TABLE `eventlog` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `event` varchar(200) NOT NULL,
  `eventRowIdOrRef` varchar(20) DEFAULT NULL,
  `eventDesc` text,
  `eventTable` varchar(20) DEFAULT NULL,
  `staffInCharge` bigint(20) UNSIGNED NOT NULL,
  `eventTime` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `eventlog`
--

INSERT INTO `eventlog` (`id`, `event`, `eventRowIdOrRef`, `eventDesc`, `eventTable`, `staffInCharge`, `eventTime`) VALUES
(1, 'Creation of new item', '1', 'Addition of 2 quantities of a new item \'barang\' with a unit price of &#8358;100.00 to stock', 'items', 1, '2018-07-29 14:32:20'),
(2, 'Creation of new item', '2', 'Addition of 1 quantities of a new item \'aveafaeg\' with a unit price of &#8358;12,000.00 to stock', 'items', 1, '2018-08-03 05:34:58'),
(3, 'Creation of new item', '3', 'Addition of 50 quantities of a new item \'Barang Baru\' with a unit price of &#8358;120,000.00 to stock', 'items', 1, '2018-08-03 05:47:22'),
(4, 'Creation of new item', '4', 'Addition of 20 quantities of a new item \'coba lagi kategori\' with a unit price of &#8358;12,000.00 to stock', 'items', 1, '2018-08-03 05:49:42'),
(5, 'Creation of new item', '5', 'Addition of 20 quantities of a new item \'kategori ajah\' with a unit price of &#8358;2,000.00 to stock', 'items', 1, '2018-08-03 18:43:25'),
(6, 'Creation of new item', '6', 'Addition of 20 quantities of a new item \'cobayes\' with a unit price of &#8358;2,000.00 to stock', 'items', 1, '2018-08-03 21:50:54'),
(7, 'Creation of new item', '7', 'Addition of 20 quantities of a new item \'brang\' with a unit price of &#8358;2,000.00 to stock', 'items', 1, '2018-08-03 21:51:42'),
(8, 'Creation of new item', '8', 'Addition of 20 quantities of a new item \'nama\' with a unit price of &#8358;2,000.00 to stock', 'items', 1, '2018-08-03 21:55:47'),
(9, 'Creation of new item', '9', 'Addition of 20 quantities of a new item \'kategori\' with a unit price of &#8358;2,000.00 to stock', 'items', 1, '2018-08-03 21:58:15'),
(10, 'Creation of new item', '10', 'Addition of 20 quantities of a new item \'namabaru\' with a unit price of &#8358;2,000.00 to stock', 'items', 1, '2018-08-03 21:59:37'),
(11, 'Creation of new item', '11', 'Addition of 10 quantities of a new item \'nama\' with a unit price of &#8358;1,000.00 to stock', 'items', 1, '2018-08-03 22:02:10'),
(12, 'Creation of new item', '12', 'Addition of 3 quantities of a new item \'namabaru\' with a unit price of &#8358;2,000.00 to stock', 'items', 1, '2018-08-03 22:04:09'),
(13, 'Creation of new item', '13', 'Addition of 20 quantities of a new item \'itemname\' with a unit price of &#8358;2,000.00 to stock', 'items', 1, '2018-08-03 22:05:07'),
(14, 'Creation of new item', '14', 'Addition of 3 quantities of a new item \'kategorix\' with a unit price of &#8358;2,000.00 to stock', 'items', 1, '2018-08-03 22:06:42'),
(15, 'Creation of new item', '15', 'Addition of 20 quantities of a new item \'itemname\' with a unit price of &#8358;2,000.00 to stock', 'items', 1, '2018-08-03 22:07:43'),
(16, 'Creation of new item', '16', 'Addition of 200 quantities of a new item \'itemnamex\' with a unit price of &#8358;2,000.00 to stock', 'items', 1, '2018-08-03 22:08:28'),
(17, 'Creation of new item', '17', 'Addition of 20 quantities of a new item \'ininamabaru\' with a unit price of &#8358;2,000.00 to stock', 'items', 1, '2018-08-03 22:09:14'),
(18, 'Creation of new item', '18', 'Addition of 20 quantities of a new item \'namanmanfmn\' with a unit price of &#8358;200.00 to stock', 'items', 1, '2018-08-03 22:12:53'),
(19, 'Creation of new item', '1', 'Addition of 20 quantities of a new item \'Pensil\' with a unit price of &#8358;200,000.00 to stock', 'items', 1, '2018-08-04 00:03:46'),
(20, 'Creation of new item', '1', 'Addition of 50 quantities of a new item \'Pensil\' with a unit price of &#8358;200,000.00 to stock', 'items', 1, '2018-08-04 00:05:51'),
(21, 'Creation of new item', '1', 'Addition of 40 quantities of a new item \'Pensil\' with a unit price of &#8358;200,000.00 to stock', 'items', 1, '2018-08-04 00:08:29'),
(22, 'Stock Update (New Stock)', '1', '<p>20 quantities of Pensil was added to stock</p>\n                Reason: <p>New items were purchased</p>', 'items', 1, '2018-08-04 00:36:32'),
(23, 'Stock Update (New Stock)', '1', '<p>20 quantities of Pensil was added to stock</p>\n                Reason: <p>New items were purchased</p>', 'items', 1, '2018-08-04 00:37:11'),
(24, 'Stock Update (New Stock)', '1', '<p>90 quantities of Pensil was added to stock</p>\n                Reason: <p>New items were purchased</p>', 'items', 1, '2018-08-04 00:37:28'),
(25, 'Stock Update (Deficit)', '1', '<p>50 quantities of Pensil was removed from stock</p>\n                Reason: <p>penurunan</p>', 'items', 1, '2018-08-04 00:38:16'),
(26, 'Stock Update (New Stock)', '1', '<p>20 quantities of Pensil was added to stock</p>\n                Reason: <p>New items were purchased</p>', 'items', 1, '2018-08-04 00:42:39'),
(27, 'Stock Update (Deficit)', '1', '<p>20 quantities of Pensil was removed from stock</p>\n                Reason: <p>Terjadi Pengurangan Barang</p>', 'items', 1, '2018-08-04 00:44:54'),
(28, 'Stock Update (Deficit)', '1', '<p>20 quantities of Pensil was removed from stock</p>\n                Reason: <p>Terjadi Pengurangan Barang</p>', 'items', 1, '2018-08-04 00:45:06'),
(29, 'Creation of new item', '2', 'Addition of 30 quantities of a new item \'Paracetamol\' with a unit price of &#8358;200,000.00 to stock', 'items', 1, '2018-08-04 20:47:13'),
(30, 'Creation of new item', '3', 'Addition of 30 quantities of a new item \'Paracetamolx\' with a unit price of &#8358;200,000.00 to stock', 'items', 1, '2018-08-04 20:58:52'),
(31, 'Creation of new item', '4', 'Addition of 130 quantities of a new item \'namabaru\' with a unit price of &#8358;200,000.00 to stock', 'items', 1, '2018-08-04 21:00:54'),
(32, 'Creation of new item', '5', 'Addition of 12 quantities of a new item \'Paracetamole\' with a unit price of &#8358;2,000.00 to stock', 'items', 1, '2018-08-04 21:04:38'),
(33, 'Creation of new item', '1', 'Addition of 20 quantities of a new item \'Paracetamolq\' with a unit price of &#8358;5,000.00 to stock', 'items', 1, '2018-08-04 21:17:10'),
(34, 'Stock Update (Deficit)', '2', '<p>20 quantities of Paracetamol was removed from stock</p>\n                Reason: <p>Terjadi Pengurangan Barang</p>', 'items', 1, '2018-08-04 21:25:00'),
(35, 'Creation of new item', '6', 'Addition of 30 quantities of a new item \'barang\' with a unit price of &#8358;200.00 to stock', 'items', 1, '2018-08-05 00:30:00'),
(36, 'Creation of new item', '7', 'Addition of 20 quantities of a new item \'tea\' with a unit price of &#8358;5,000.00 to stock', 'items', 1, '2018-08-05 04:59:43'),
(37, 'Creation of new item', '8', 'Addition of 20 quantities of a new item \'kopi\' with a unit price of &#8358;1,000.00 to stock', 'items', 1, '2018-08-05 05:00:11'),
(38, 'Creation of new item', '9', 'Addition of 20 quantities of a new item \'kopix\' with a unit price of &#8358;1,000.00 to stock', 'items', 1, '2018-08-05 05:00:52'),
(39, 'Creation of new item', '2', 'Addition of 20 quantities of a new item \'Paracetamol\' with a unit price of &#8358;1,000.00 to stock', 'items', 1, '2018-08-05 05:01:48'),
(40, 'Creation of new item', '3', 'Addition of 10 quantities of a new item \'decolgent\' with a unit price of &#8358;2,000.00 to stock', 'items', 1, '2018-08-05 05:02:19'),
(41, 'Creation of new item', '10', 'Addition of 20 quantities of a new item \'barangbaru\' with a unit price of &#8358;4,000.00 to stock', 'items', 1, '2018-08-05 05:11:06'),
(42, 'Stock Update (New Stock)', '2', '<p>10 quantities of Paracetamol was added to stock</p>\n                Reason: <p>Penambahan Barang Baru</p>', 'items', 1, '2018-08-05 05:22:50'),
(43, 'Stock Update (New Stock)', '2', '<p>10 quantities of Paracetamol was added to stock</p>\n                Reason: <p>Penambahan Barang Baru</p>', 'items', 1, '2018-08-05 05:23:07'),
(44, 'Stock Update (New Stock)', '10', '<p>10 quantities of barangbaru was added to stock</p>\n                Reason: <p>Penambahan Barang Baru</p>', 'items', 1, '2018-08-05 05:28:09'),
(45, 'Stock Update (New Stock)', '2', '<p>10 quantities of Paracetamol was added to stock</p>\n                Reason: <p>Penambahan Barang Baru</p>', 'items', 1, '2018-08-05 05:28:20'),
(46, 'Stock Update (New Stock)', '2', '<p>20 quantities of Paracetamol was added to stock</p>\n                Reason: <p>Penambahan Barang Baru</p>', 'items', 1, '2018-08-05 05:28:29'),
(47, 'Stock Update (New Stock)', '2', '<p>50 quantities of Paracetamol was added to stock</p>\n                Reason: <p>Penambahan Barang Baru</p>', 'items', 1, '2018-08-05 05:29:57'),
(48, 'Stock Update (New Stock)', '2', '<p>30 quantities of Paracetamol was added to stock</p>\n                Reason: <p>Penambahan Barang Baru</p>', 'items', 1, '2018-08-05 05:31:07'),
(49, 'Creation of new item', '4', 'Addition of 12 quantities of a new item \'Paracetamol\' with a unit price of &#8358;10,000.00 to stock', 'items', 1, '2018-08-05 05:43:38'),
(50, 'Creation of new item', '5', 'Addition of 18 quantities of a new item \'Decolgent\' with a unit price of &#8358;20,000.00 to stock', 'items', 1, '2018-08-05 05:44:04'),
(51, 'Stock Update (New Stock)', '5', '<p>20 quantities of Paracetamole was added to stock</p>\n                Reason: <p>Penambahan Barang Baru</p>', 'items', 1, '2018-08-05 06:00:20'),
(52, 'Stock Update (New Stock)', '5', '<p>50 quantities of Paracetamole was added to stock</p>\n                Reason: <p>Penambahan Barang Baru</p>', 'items', 1, '2018-08-05 06:00:29'),
(53, 'Stock Update (Deficit)', '4', '<p>5 quantities of Paracetamol was removed from stock</p>\n                Reason: <p>Terjadi Pengurangan Barang</p>', 'items', 1, '2018-08-05 06:17:00'),
(54, 'Stock Update (New Stock)', '4', '<p>20 quantities of Paracetamol was added to stock</p>\n                Reason: <p>Penambahan Barang Baru</p>', 'items', 1, '2018-08-05 06:36:28'),
(55, 'Stock Update (Deficit)', '10', '<p>20 quantities of barangbaru was removed from stock</p>\n                Reason: <p>Terjadi Pengurangan Barang</p>', 'items', 1, '2018-08-05 12:17:52'),
(56, 'Stock Update (Deficit)', '2', '<p>50 quantities of Paracetamol was removed from stock</p>\n                Reason: <p>Terjadi Pengurangan Barang</p>', 'items', 1, '2018-08-05 12:18:06'),
(57, 'Stock Update (Deficit)', '2', '<p>50 quantities of Paracetamol was removed from stock</p>\n                Reason: <p>Terjadi Pengurangan Barang</p>', 'items', 1, '2018-08-05 12:18:16'),
(58, 'Stock Update (Deficit)', '5', '<p>10 quantities of Decolgent was removed from stock</p>\n                Reason: <p>Terjadi Pengurangan Barang</p>', 'items', 1, '2018-08-05 12:21:42'),
(59, 'New Transaction', '3710453', '1 items totalling &#8358;0.00 with reference number 3710453 was purchased', 'transactions', 1, '2018-08-08 05:15:39'),
(60, 'New Transaction', '979254', '1 items totalling &#8358;0.00 with reference number 979254 was purchased', 'transactions', 1, '2018-08-08 05:16:14'),
(61, 'New Transaction', '581542', '1 items totalling &#8358;0.00 with reference number 581542 was purchased', 'transactions', 1, '2018-08-08 05:20:13'),
(62, 'New Transaction', '28743482', '1 items totalling &#8358;0.00 with reference number 28743482 was purchased', 'transactions', 1, '2018-08-08 05:20:44'),
(63, 'New Transaction', '324854872', '1 items totalling &#8358;0.00 with reference number 324854872 was purchased', 'transactions', 1, '2018-08-08 05:25:48'),
(64, 'New Transaction', '50232476', '1 items totalling &#8358;0.00 with reference number 50232476 was purchased', 'transactions', 1, '2018-08-08 05:28:05'),
(65, 'New Transaction', '2706148', '1 items totalling &#8358;0.00 with reference number 2706148 was purchased', 'transactions', 1, '2018-08-08 05:28:49'),
(66, 'New Transaction', '0785517', '1 items totalling &#8358;0.00 with reference number 0785517 was purchased', 'transactions', 1, '2018-08-08 05:31:00'),
(67, 'New Transaction', '30637910', '1 items totalling &#8358;0.00 with reference number 30637910 was purchased', 'transactions', 1, '2018-08-08 05:34:06'),
(68, 'New Transaction', '425247', '1 items totalling &#8358;0.00 with reference number 425247 was purchased', 'transactions', 1, '2018-08-08 05:35:53'),
(69, 'New Transaction', '73912490', '1 items totalling &#8358;0.00 with reference number 73912490 was purchased', 'transactions', 1, '2018-08-08 05:37:15'),
(70, 'New Transaction', '3761450', '1 items totalling &#8358;0.00 with reference number 3761450 was purchased', 'transactions', 1, '2018-08-08 05:37:34'),
(71, 'New Transaction', '857531', '1 items totalling &#8358;0.00 with reference number 857531 was purchased', 'transactions', 1, '2018-08-08 05:39:07'),
(72, 'Stock Update (New Stock)', '10', '<p>200 quantities of barangbaru was added to stock</p>\n                Reason: <p>Penambahan Barang Baru</p>', 'items', 1, '2018-08-08 05:41:01'),
(73, 'New Transaction', '798346', '1 items totalling &#8358;0.00 with reference number 798346 was purchased', 'transactions', 1, '2018-08-08 05:44:23'),
(74, 'New Transaction', '51657493', '1 items totalling &#8358;0.00 with reference number 51657493 was purchased', 'transactions', 1, '2018-08-08 05:44:40'),
(75, 'New Transaction', '970196', '1 items totalling &#8358;0.00 with reference number 970196 was purchased', 'transactions', 1, '2018-08-08 05:45:00'),
(76, 'New Transaction', '934758', '1 items totalling &#8358;0.00 with reference number 934758 was purchased', 'transactions', 1, '2018-08-08 05:49:49');

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `kategori` varchar(90) NOT NULL,
  `code` varchar(10) NOT NULL,
  `description` text,
  `unitPrice` decimal(10,2) NOT NULL,
  `quantity` int(6) NOT NULL,
  `minimal` int(10) NOT NULL,
  `dateAdded` datetime NOT NULL,
  `lastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `name`, `kategori`, `code`, `description`, `unitPrice`, `quantity`, `minimal`, `dateAdded`, `lastUpdated`) VALUES
(2, 'Paracetamol', 'Antibiotik', 'B2', '', '200000.00', 6, 18, '2018-08-04 13:47:13', '2018-08-08 05:37:34'),
(5, 'Paracetamole', 'kategorie', 'x1', 'Deskripsi', '2000.00', 82, 47, '2018-08-04 14:04:38', '2018-08-05 06:00:29'),
(8, 'kopi', 'minuman', '54321', 'keterangan', '1000.00', 8, 10, '2018-08-04 22:00:11', '2018-08-08 05:44:23'),
(9, 'kopix', 'minuman', '123456', 'none', '1000.00', 11, 10, '2018-08-04 22:00:52', '2018-08-08 05:39:06'),
(10, 'barangbaru', 'minuman', '112233', 'none', '4000.00', 196, 10, '2018-08-04 22:11:06', '2018-08-08 05:49:49');

-- --------------------------------------------------------

--
-- Table structure for table `lk_sess`
--

CREATE TABLE `lk_sess` (
  `id` varchar(40) NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `timestamp` int(10) UNSIGNED NOT NULL DEFAULT '0',
  `data` blob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `obat`
--

CREATE TABLE `obat` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(50) NOT NULL,
  `kategori` varchar(90) NOT NULL,
  `code` varchar(10) NOT NULL,
  `description` text,
  `unitPrice` decimal(10,2) NOT NULL,
  `quantity` int(6) NOT NULL,
  `minimal` int(10) NOT NULL,
  `dateAdded` datetime NOT NULL,
  `lastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `obat`
--

INSERT INTO `obat` (`id`, `name`, `kategori`, `code`, `description`, `unitPrice`, `quantity`, `minimal`, `dateAdded`, `lastUpdated`) VALUES
(4, 'Paracetamol', 'Antibiotik', '1', 'none', '10000.00', 27, 10, '2018-08-04 22:43:38', '2018-08-05 06:36:28'),
(5, 'Decolgent', 'Antibiotik', '2', 'none', '20000.00', 8, 15, '2018-08-04 22:44:04', '2018-08-05 12:21:42');

-- --------------------------------------------------------

--
-- Table structure for table `transactions`
--

CREATE TABLE `transactions` (
  `transId` bigint(20) UNSIGNED NOT NULL,
  `ref` varchar(10) NOT NULL,
  `itemName` varchar(50) NOT NULL,
  `itemCode` varchar(50) NOT NULL,
  `description` text,
  `quantity` int(6) NOT NULL,
  `unitPrice` decimal(10,2) NOT NULL,
  `totalPrice` decimal(10,2) NOT NULL,
  `totalMoneySpent` decimal(10,2) NOT NULL,
  `amountTendered` decimal(10,2) NOT NULL,
  `discount_amount` decimal(10,2) NOT NULL,
  `discount_percentage` decimal(10,2) NOT NULL,
  `vatPercentage` decimal(10,2) NOT NULL,
  `vatAmount` decimal(10,2) NOT NULL,
  `changeDue` decimal(10,2) NOT NULL,
  `modeOfPayment` varchar(20) NOT NULL,
  `cust_name` varchar(20) DEFAULT NULL,
  `cust_phone` varchar(15) DEFAULT NULL,
  `cust_email` varchar(50) DEFAULT NULL,
  `transType` char(1) NOT NULL,
  `staffId` bigint(20) UNSIGNED NOT NULL,
  `transDate` datetime NOT NULL,
  `lastUpdated` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cancelled` char(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `transactions`
--

INSERT INTO `transactions` (`transId`, `ref`, `itemName`, `itemCode`, `description`, `quantity`, `unitPrice`, `totalPrice`, `totalMoneySpent`, `amountTendered`, `discount_amount`, `discount_percentage`, `vatPercentage`, `vatAmount`, `changeDue`, `modeOfPayment`, `cust_name`, `cust_phone`, `cust_email`, `transType`, `staffId`, `transDate`, `lastUpdated`, `cancelled`) VALUES
(8, '798346', 'kopi', '54321', '', 1, '1000.00', '1000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 'Subbag Urusan Dalam', NULL, NULL, '', 0, '2018-08-07 22:44:23', '2018-08-08 05:44:23', '0'),
(9, '51657493', 'barangbaru', '112233', '', 5, '4000.00', '20000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 'Subbag Tata Usaha', NULL, NULL, '', 0, '2018-08-07 22:44:40', '2018-08-08 05:44:40', '0'),
(10, '970196', 'barangbaru', '112233', '', 1, '4000.00', '4000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', '', NULL, NULL, '', 0, '2018-08-07 22:44:59', '2018-08-08 05:44:59', '0'),
(11, '934758', 'barangbaru', '112233', '', 1, '4000.00', '4000.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '0.00', '', 'Subbag Urusan Dalam', NULL, NULL, '', 0, '2018-08-07 22:49:49', '2018-08-08 05:49:49', '0');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`),
  ADD UNIQUE KEY `mobile1` (`mobile1`);

--
-- Indexes for table `eventlog`
--
ALTER TABLE `eventlog`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `obat`
--
ALTER TABLE `obat`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `name` (`name`),
  ADD UNIQUE KEY `code` (`code`);

--
-- Indexes for table `transactions`
--
ALTER TABLE `transactions`
  ADD PRIMARY KEY (`transId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(3) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `eventlog`
--
ALTER TABLE `eventlog`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `obat`
--
ALTER TABLE `obat`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `transactions`
--
ALTER TABLE `transactions`
  MODIFY `transId` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
