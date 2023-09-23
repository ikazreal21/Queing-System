-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 23, 2023 at 04:41 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 7.4.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_queue`
--

-- --------------------------------------------------------

--
-- Table structure for table `db_num`
--

CREATE TABLE `db_num` (
  `ID` int(11) NOT NULL,
  `DBNUM` int(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `db_num`
--

INSERT INTO `db_num` (`ID`, `DBNUM`) VALUES
(1, 1),
(2, 2),
(3, 3),
(4, 4),
(5, 5),
(6, 6),
(7, 7),
(8, 8),
(9, 9),
(10, 10),
(11, 11),
(12, 12),
(13, 13),
(14, 14),
(15, 15),
(16, 16),
(17, 17),
(18, 18),
(19, 19),
(20, 20),
(21, 21),
(22, 22),
(23, 23),
(24, 24),
(25, 25),
(26, 26),
(27, 27),
(28, 28),
(29, 29),
(30, 30);

-- --------------------------------------------------------

--
-- Table structure for table `docu_table`
--

CREATE TABLE `docu_table` (
  `docu_table_id` int(255) NOT NULL,
  `user_id` varchar(255) NOT NULL,
  `cedula` varchar(255) NOT NULL,
  `brgy_id` varchar(255) NOT NULL,
  `brgy_clearance` varchar(255) NOT NULL,
  `indigency` varchar(255) NOT NULL,
  `recidency` varchar(255) NOT NULL,
  `police_clearance` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docu_table`
--

INSERT INTO `docu_table` (`docu_table_id`, `user_id`, `cedula`, `brgy_id`, `brgy_clearance`, `indigency`, `recidency`, `police_clearance`) VALUES
(9, 'TcEU1R', '0', '0', '0', '0', '0', '0'),
(10, 'KFkZEw', '', '1', '', '', '', ''),
(11, 'pp6Ph2', '', '1', '', '', '', ''),
(12, 'DbfX3c', '1', '', '', '', '', ''),
(13, 'DbfX3c', '', '', '1', '', '', ''),
(14, 'DbfX3c', '', '', '1', '', '', ''),
(15, 'DbfX3c', '', '', '1', '', '', ''),
(16, 'DbfX3c', '', '', '', '', '1', ''),
(17, 'DbfX3c', '', '', '', '', '1', ''),
(18, 'TcEU1R', '', '', '', '1', '', ''),
(19, 'JoZoHD', '', '1', '', '', '', ''),
(20, 'JoZoHD', '', '1', '', '', '', ''),
(21, 'JoZoHD', '', '1', '', '', '', ''),
(22, 'JoZoHD', '', '', '', '', '', '1'),
(23, 'JoZoHD', '', '', '', '1', '', ''),
(24, '1jFmKV', '', '1', '', '', '', ''),
(25, 'n5gtST', '', '', '', '', '', '1'),
(26, 'P0SWtp', '', '', '', '', '', '1'),
(27, 'haES9b', '', '', '', '', '', '1'),
(28, 'wZArZT', '', '', '', '', '', '1'),
(29, 'YL7tjo', '', '', '', '', '', '1'),
(30, 'HfIdga', '', '', '', '', '', '1'),
(31, 'UZIdQi', '', '', '', '', '', '1'),
(32, 'io2Un5', '', '', '', '', '', '1'),
(33, 'Ab21Mi', '1', '', '', '', '', ''),
(34, 'vTMHzi', '1', '', '', '', '', ''),
(35, 'vTCCow', '1', '', '', '', '', ''),
(36, 'Kp5Uq3', '1', '', '', '', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_brgyid`
--

CREATE TABLE `tbl_brgyid` (
  `ID` int(11) NOT NULL,
  `DEP` varchar(30) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` varchar(30) NOT NULL,
  `NUMQ` int(30) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_brgyid`
--

INSERT INTO `tbl_brgyid` (`ID`, `DEP`, `DATE`, `TIME`, `NUMQ`, `User_id`, `user_first_name`) VALUES
(63, '', '2023-09-23', '09:56', 0, 'KFkZEw', 'Joaquin Zaki'),
(64, '', '2023-09-23', '09:57', 0, 'pp6Ph2', 'Joaquin Zaki'),
(65, '', '2023-09-23', '10:03', 0, 'JoZoHD', 'Joaquin'),
(66, '', '2023-09-23', '10:07', 0, 'JoZoHD', 'Joaquin'),
(67, '', '2023-09-23', '10:08', 0, 'JoZoHD', 'Joaquin'),
(68, '', '2023-09-23', '10:11', 0, '1jFmKV', 'Joaquin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cedrecords`
--

CREATE TABLE `tbl_cedrecords` (
  `ID` int(11) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` varchar(11) NOT NULL,
  `NUMBER` int(30) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cedrecords`
--

INSERT INTO `tbl_cedrecords` (`ID`, `Department`, `DATE`, `TIME`, `NUMBER`, `User_id`, `user_first_name`) VALUES
(1, 'Cedula', '2023-05-23', '06:46', 16, '', ''),
(2, 'Cedula', '2023-09-23', '09:25', 0, 'TcEU1R', 'Joaquin Zaki'),
(3, 'Cedula', '2023-09-23', '09:27', 0, '', ''),
(4, 'Cedula', '2023-09-23', '09:27', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_cedula`
--

CREATE TABLE `tbl_cedula` (
  `ID` int(11) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` varchar(30) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_cedula`
--

INSERT INTO `tbl_cedula` (`ID`, `DATE`, `TIME`, `User_id`, `user_first_name`) VALUES
(38, '2023-09-23', '09:57', 'DbfX3c', 'Joaquin'),
(39, '2023-09-23', '10:36', 'Ab21Mi', 'Joaquin55555555'),
(40, '2023-09-23', '10:37', 'vTMHzi', 'Joaquin666666666'),
(41, '2023-09-23', '10:37', 'vTCCow', 'Joaquin666666666'),
(42, '2023-09-23', '10:38', 'Kp5Uq3', 'Joaquin77777777');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clearance`
--

CREATE TABLE `tbl_clearance` (
  `ID` int(11) NOT NULL,
  `DEP` varchar(30) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` varchar(30) NOT NULL,
  `NUMQ` int(30) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_clearance`
--

INSERT INTO `tbl_clearance` (`ID`, `DEP`, `DATE`, `TIME`, `NUMQ`, `User_id`, `user_first_name`) VALUES
(28, '', '2023-09-23', '09:58', 0, 'DbfX3c', 'Joaquin'),
(29, '', '2023-09-23', '09:58', 0, 'DbfX3c', 'Joaquin'),
(30, '', '2023-09-23', '09:58', 0, 'DbfX3c', 'Joaquin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_clrrecords`
--

CREATE TABLE `tbl_clrrecords` (
  `ID` int(11) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` varchar(11) NOT NULL,
  `NUMBER` int(30) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_clrrecords`
--

INSERT INTO `tbl_clrrecords` (`ID`, `Department`, `DATE`, `TIME`, `NUMBER`, `User_id`, `user_first_name`) VALUES
(3, 'Barangay Clearance', '2023-09-23', '09:32', 0, 'TcEU1R', 'Joaquin Zaki'),
(4, 'Barangay Clearance', '2023-09-23', '09:32', 0, '', ''),
(5, 'Barangay Clearance', '2023-09-23', '09:33', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_idrecords`
--

CREATE TABLE `tbl_idrecords` (
  `ID` int(11) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` varchar(11) NOT NULL,
  `NUMBER` int(30) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_idrecords`
--

INSERT INTO `tbl_idrecords` (`ID`, `Department`, `DATE`, `TIME`, `NUMBER`, `User_id`, `user_first_name`) VALUES
(336, 'Barangay ID', '2023-09-23', '09:32', 0, 'TcEU1R', 'Joaquin Zaki'),
(337, 'Barangay ID', '2023-09-23', '09:32', 0, '', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_indigency`
--

CREATE TABLE `tbl_indigency` (
  `ID` int(11) NOT NULL,
  `DEP` varchar(30) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` varchar(30) NOT NULL,
  `NUMQ` int(30) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_indigency`
--

INSERT INTO `tbl_indigency` (`ID`, `DEP`, `DATE`, `TIME`, `NUMQ`, `User_id`, `user_first_name`) VALUES
(54, '', '2023-09-23', '10:02', 0, 'TcEU1R', 'Joaquin Zaki'),
(55, '', '2023-09-23', '10:09', 0, 'JoZoHD', 'Joaquin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_indrecords`
--

CREATE TABLE `tbl_indrecords` (
  `ID` int(11) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` varchar(11) NOT NULL,
  `NUMBER` int(30) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_indrecords`
--

INSERT INTO `tbl_indrecords` (`ID`, `Department`, `DATE`, `TIME`, `NUMBER`, `User_id`, `user_first_name`) VALUES
(4, 'Indigency', '2023-09-23', '09:38', 0, 'TcEU1R', 'Joaquin Zaki');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_login`
--

CREATE TABLE `tbl_login` (
  `ID` int(11) NOT NULL,
  `USER` varchar(18) NOT NULL,
  `PASS` varchar(18) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_login`
--

INSERT INTO `tbl_login` (`ID`, `USER`, `PASS`) VALUES
(1, 'admin', 'admin123'),
(2, 'brgyid', 'brgyid1234'),
(3, 'residency', 'residency1234'),
(4, 'clearance', 'clearance1234'),
(5, 'indigency', 'indigency1234'),
(6, 'pc', 'pc1234'),
(7, 'cedula', 'cedula1234');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_pcrecords`
--

CREATE TABLE `tbl_pcrecords` (
  `ID` int(11) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` varchar(11) NOT NULL,
  `NUMBER` int(30) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_pcrecords`
--

INSERT INTO `tbl_pcrecords` (`ID`, `Department`, `DATE`, `TIME`, `NUMBER`, `User_id`, `user_first_name`) VALUES
(3, 'Police Clearance', '2023-09-23', '09:39', 0, 'TcEU1R', 'Joaquin Zaki');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_policeclr`
--

CREATE TABLE `tbl_policeclr` (
  `ID` int(11) NOT NULL,
  `DEP` varchar(30) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` varchar(30) NOT NULL,
  `NUMQ` int(30) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_policeclr`
--

INSERT INTO `tbl_policeclr` (`ID`, `DEP`, `DATE`, `TIME`, `NUMQ`, `User_id`, `user_first_name`) VALUES
(28, '', '2023-09-23', '10:08', 0, 'JoZoHD', 'Joaquin'),
(29, '', '2023-09-23', '10:19', 0, 'n5gtST', 'Joaquin1111'),
(30, '', '2023-09-23', '10:21', 0, 'P0SWtp', 'Joaquin1111'),
(31, '', '2023-09-23', '10:21', 0, 'haES9b', 'Joaquin22222222'),
(32, '', '2023-09-23', '10:25', 0, 'wZArZT', 'Joaquin33333'),
(33, '', '2023-09-23', '10:25', 0, 'YL7tjo', 'Joaquin33333'),
(34, '', '2023-09-23', '10:25', 0, 'HfIdga', 'Joaquin33333'),
(35, '', '2023-09-23', '10:25', 0, 'UZIdQi', 'Joaquin4444444444'),
(36, '', '2023-09-23', '10:35', 0, 'io2Un5', 'Joaquin4444444444');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_records`
--

CREATE TABLE `tbl_records` (
  `ID` int(11) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` varchar(11) NOT NULL,
  `NUMBER` int(30) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `User_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_records`
--

INSERT INTO `tbl_records` (`ID`, `Department`, `DATE`, `TIME`, `NUMBER`, `fullname`, `User_id`) VALUES
(232, 'Barangay ID', '2023-05-14', '11:42', 1, '', ''),
(233, 'Brgy.Clearance', '2023-05-14', '11:42', 2, '', ''),
(234, 'Police Clearance', '2023-05-14', '11:45', 1, '', ''),
(235, 'Residency', '2023-05-14', '11:45', 2, '', ''),
(236, 'Indigency', '2023-05-14', '11:49', 1, '', ''),
(237, 'Brgy.Clearance', '2023-05-17', '08:06', 1, '', ''),
(238, 'Cedula', '2023-05-17', '08:51', 2, '', ''),
(239, 'Brgy.Clearance', '2023-05-19', '07:26', 1, '', ''),
(240, 'Brgy.Clearance', '2023-05-19', '07:51', 1, '', ''),
(241, 'Cedula', '2023-05-19', '07:51', 2, '', ''),
(242, 'Indigency', '2023-05-19', '07:55', 1, '', ''),
(243, 'Police Clearance', '2023-05-19', '07:55', 2, '', ''),
(244, 'Indigency', '2023-05-19', '07:56', 1, '', ''),
(245, 'Residency', '2023-05-19', '07:56', 1, '', ''),
(246, 'Brgy.Clearance', '2023-05-19', '10:44', 1, '', ''),
(247, 'Barangay ID', '2023-05-19', '11:04', 1, '', ''),
(248, 'Barangay ID', '2023-05-19', '11:04', 2, '', ''),
(249, 'Barangay ID', '2023-05-19', '11:04', 3, '', ''),
(250, 'Brgy.Clearance', '2023-05-19', '11:04', 4, '', ''),
(251, 'Brgy.Clearance', '2023-05-19', '11:04', 5, '', ''),
(252, 'Brgy.Clearance', '2023-05-19', '11:04', 6, '', ''),
(253, 'Indigency', '2023-05-19', '11:04', 7, '', ''),
(254, 'Indigency', '2023-05-19', '11:04', 8, '', ''),
(255, 'Indigency', '2023-05-19', '11:04', 9, '', ''),
(256, 'Indigency', '2023-05-19', '11:05', 10, '', ''),
(257, 'Residency', '2023-05-19', '11:05', 11, '', ''),
(258, 'Residency', '2023-05-19', '11:05', 12, '', ''),
(259, 'Residency', '2023-05-19', '11:05', 13, '', ''),
(260, 'Police Clearance', '2023-05-19', '11:05', 14, '', ''),
(261, 'Police Clearance', '2023-05-19', '11:05', 15, '', ''),
(262, 'Police Clearance', '2023-05-19', '11:05', 16, '', ''),
(263, 'Cedula', '2023-05-19', '11:05', 17, '', ''),
(264, 'Cedula', '2023-05-19', '11:05', 18, '', ''),
(265, 'Cedula', '2023-05-19', '11:05', 19, '', ''),
(266, 'Brgy.Clearance', '2023-05-23', '03:44', 12, '', ''),
(267, 'Police Clearance', '2023-05-23', '03:44', 13, '', ''),
(268, 'Brgy.Clearance', '2023-05-23', '03:44', 14, '', ''),
(269, 'Indigency', '2023-05-23', '03:45', 14, '', ''),
(270, 'Indigency', '2023-05-23', '03:45', 14, '', ''),
(271, 'Indigency', '2023-05-23', '03:48', 14, '', ''),
(272, 'Brgy.Clearance', '2023-05-23', '03:49', 2, '', ''),
(273, 'Barangay ID', '2023-05-23', '03:49', 1, '', ''),
(274, 'Indigency', '2023-05-23', '03:53', 14, '', ''),
(275, 'Police Clearance', '2023-05-23', '03:55', 14, '', ''),
(276, 'Residency', '2023-05-23', '04:03', 14, '', ''),
(277, 'Indigency', '2023-05-23', '04:05', 15, '', ''),
(278, 'Indigency', '2023-05-23', '04:05', 16, '', ''),
(279, 'Indigency', '2023-05-23', '04:05', 17, '', ''),
(280, 'Barangay ID', '2023-05-23', '04:05', 18, '', ''),
(281, 'Police Clearance', '2023-05-23', '04:05', 19, '', ''),
(282, 'Police Clearance', '2023-05-23', '04:05', 20, '', ''),
(283, 'Police Clearance', '2023-05-23', '04:05', 21, '', ''),
(284, 'Police Clearance', '2023-05-23', '04:07', 22, '', ''),
(285, '', '2023-05-23', '04:07', 22, '', ''),
(286, '', '2023-05-23', '04:07', 22, '', ''),
(287, 'Police Clearance', '2023-05-23', '04:07', 23, '', ''),
(288, '', '2023-05-23', '04:07', 23, '', ''),
(289, 'Indigency', '2023-05-23', '04:07', 24, '', ''),
(290, '', '2023-05-23', '04:09', 24, '', ''),
(291, 'Indigency', '2023-05-23', '05:01', 1, '', ''),
(292, 'Cedula', '2023-05-23', '05:06', 2, '', ''),
(293, 'Cedula', '2023-05-23', '05:06', 3, '', ''),
(294, 'Cedula', '2023-05-23', '05:06', 4, '', ''),
(295, 'Indigency', '2023-05-23', '05:21', 5, '', ''),
(296, 'Indigency', '2023-05-23', '05:23', 6, '', ''),
(297, 'Indigency', '2023-05-23', '05:23', 7, '', ''),
(298, 'Indigency', '2023-05-23', '05:23', 8, '', ''),
(299, 'Indigency', '2023-05-23', '05:23', 9, '', ''),
(300, 'Indigency', '2023-05-23', '05:25', 10, '', ''),
(301, 'Indigency', '2023-05-23', '05:25', 11, '', ''),
(302, 'Indigency', '2023-05-23', '05:25', 12, '', ''),
(303, 'Indigency', '2023-05-23', '05:25', 13, '', ''),
(304, 'Indigency', '2023-05-23', '05:25', 14, '', ''),
(305, 'Indigency', '2023-05-23', '05:25', 15, '', ''),
(306, 'Residency', '2023-05-23', '05:25', 16, '', ''),
(307, 'Indigency', '2023-05-23', '05:25', 17, '', ''),
(308, 'Indigency', '2023-05-23', '05:26', 18, '', ''),
(309, 'Indigency', '2023-05-23', '05:26', 19, '', ''),
(310, 'Indigency', '2023-05-23', '05:26', 20, '', ''),
(311, 'Indigency', '2023-05-23', '05:26', 21, '', ''),
(312, 'Cedula', '2023-05-23', '05:28', 22, '', ''),
(313, 'Cedula', '2023-05-23', '05:28', 23, '', ''),
(314, 'Cedula', '2023-05-23', '05:28', 24, '', ''),
(315, 'Indigency', '2023-05-23', '05:28', 25, '', ''),
(316, 'Indigency', '2023-05-23', '05:28', 26, '', ''),
(317, 'Indigency', '2023-05-23', '05:28', 27, '', ''),
(318, 'Barangay ID', '2023-05-23', '06:35', 30, '', ''),
(319, 'Barangay ID', '2023-05-23', '06:35', 31, '', ''),
(320, 'Barangay ID', '2023-05-23', '06:36', 2, '', ''),
(321, 'Barangay ID', '2023-05-23', '06:36', 3, '', ''),
(322, 'Barangay ID', '2023-05-23', '06:36', 4, '', ''),
(323, 'Barangay ID', '2023-05-23', '06:37', 5, '', ''),
(324, 'Barangay ID', '2023-05-23', '06:37', 6, '', ''),
(325, 'Barangay ID', '2023-05-23', '06:37', 7, '', ''),
(326, 'Brgy.Clearance', '2023-05-23', '06:39', 8, '', ''),
(327, 'Indigency', '2023-05-23', '06:42', 9, '', ''),
(328, 'Indigency', '2023-05-23', '06:42', 10, '', ''),
(329, 'Residency', '2023-05-23', '06:44', 11, '', ''),
(330, 'Residency', '2023-05-23', '06:44', 12, '', ''),
(331, 'Residency', '2023-05-23', '06:44', 13, '', ''),
(332, 'Police Clearance', '2023-05-23', '06:45', 14, '', ''),
(333, 'Police Clearance', '2023-05-23', '06:45', 15, '', ''),
(334, 'Cedula', '2023-05-23', '06:46', 16, '', ''),
(335, 'Indigency', '2023-05-30', '10:20', 1, '', ''),
(336, 'Barangay ID', '2023-09-19', '07:19', 1, '', ''),
(337, 'Brgy.Clearance', '2023-09-19', '07:20', 2, '', ''),
(338, 'Barangay ID', '2023-09-21', '03:04', 1, '', ''),
(339, 'Barangay ID', '2023-09-23', '08:53', 0, 'Joaquin1 Zaki1 Soriano1', 'eOaSB7'),
(340, 'Barangay ID', '2023-09-23', '08:54', 0, 'Joaquin1 Zaki1 Soriano1', '5tORwB'),
(341, 'Barangay ID', '2023-09-23', '08:55', 0, 'Joaquin1 Zaki1 Soriano1', 'k7tNMu'),
(342, 'Barangay ID', '2023-09-23', '08:55', 0, 'Joaquin1 Zaki1 Soriano1', '1ZJcRE'),
(343, 'Barangay ID', '2023-09-23', '08:56', 0, 'Joaquin Zaki Soriano', 'UPBsA5'),
(344, 'Barangay ID', '2023-09-23', '08:57', 0, 'Joaquin Zaki Soriano', 'UPBsA5'),
(345, 'Barangay ID', '2023-09-23', '08:57', 0, '', ''),
(346, 'Cedula', '2023-09-23', '09:25', 0, 'Joaquin Zaki Baguna Soriano', 'TcEU1R'),
(347, 'Cedula', '2023-09-23', '09:27', 0, '', ''),
(348, 'Cedula', '2023-09-23', '09:27', 0, '', ''),
(349, 'Barangay ID', '2023-09-23', '09:32', 0, 'Joaquin Zaki Baguna Soriano', 'TcEU1R'),
(350, 'Barangay ID', '2023-09-23', '09:32', 0, '', ''),
(351, 'Barangay Clearance', '2023-09-23', '09:32', 0, 'Joaquin Zaki Baguna Soriano', 'TcEU1R'),
(352, 'Barangay Clearance', '2023-09-23', '09:32', 0, '', ''),
(353, 'Barangay Clearance', '2023-09-23', '09:33', 0, '', ''),
(354, 'Residency', '2023-09-23', '09:34', 0, 'Joaquin Zaki Baguna Soriano', 'TcEU1R'),
(355, 'Indigency', '2023-09-23', '09:38', 0, 'Joaquin Zaki Baguna Soriano', 'TcEU1R'),
(356, 'Police Clearance', '2023-09-23', '09:39', 0, 'Joaquin Zaki Baguna Soriano', 'TcEU1R');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_residency`
--

CREATE TABLE `tbl_residency` (
  `ID` int(11) NOT NULL,
  `DEP` varchar(30) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` varchar(30) NOT NULL,
  `NUMQ` int(30) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_residency`
--

INSERT INTO `tbl_residency` (`ID`, `DEP`, `DATE`, `TIME`, `NUMQ`, `User_id`, `user_first_name`) VALUES
(22, '', '2023-09-23', '09:59', 0, 'DbfX3c', 'Joaquin'),
(23, '', '2023-09-23', '09:59', 0, 'DbfX3c', 'Joaquin');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_resrecords`
--

CREATE TABLE `tbl_resrecords` (
  `ID` int(11) NOT NULL,
  `Department` varchar(20) NOT NULL,
  `DATE` date NOT NULL,
  `TIME` varchar(11) NOT NULL,
  `NUMBER` int(30) NOT NULL,
  `User_id` varchar(255) NOT NULL,
  `user_first_name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_resrecords`
--

INSERT INTO `tbl_resrecords` (`ID`, `Department`, `DATE`, `TIME`, `NUMBER`, `User_id`, `user_first_name`) VALUES
(3, 'Residency', '2023-09-23', '09:34', 0, 'TcEU1R', 'Joaquin Zaki');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userinformation`
--

CREATE TABLE `tbl_userinformation` (
  `user_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `birthplace` varchar(255) NOT NULL,
  `birthday` varchar(255) NOT NULL,
  `queue_id` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_userinformation`
--

INSERT INTO `tbl_userinformation` (`user_id`, `first_name`, `middle_name`, `last_name`, `gender`, `birthplace`, `birthday`, `queue_id`) VALUES
(2, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'HaieeP'),
(3, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'UPBsA5'),
(4, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', '8NwvpW'),
(5, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'DbfX3c'),
(6, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'PVuEK7'),
(7, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'GvVqgW'),
(8, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', '4BdbqX'),
(9, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'VPQKnZ'),
(10, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'rXVTlA'),
(11, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'TUwOmm'),
(12, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'JoZoHD'),
(13, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'JYpnSB'),
(14, 'Joaquin', 'Zaki', 'Soriano', 'female', 'Qc', '2023-09-26', '5RvuWL'),
(15, 'Joaquin', 'Zaki', 'Soriano', 'male', '', '2023-09-23', 'HaieeP'),
(16, 'Joaquin', 'Zaki', 'Soriano', 'male', '', '2023-09-23', 'HaieeP'),
(17, 'Joaquin', 'Zaki', 'Soriano', 'male', '', '2023-09-23', 'HaieeP'),
(18, 'Joaquin', 'Zaki', 'Soriano', 'male', '', '2023-09-23', 'HaieeP'),
(19, 'Joaquin', 'Zaki', 'Soriano', 'male', '', '2023-09-23', 'HaieeP'),
(20, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', '8NwvpW'),
(21, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', '8NwvpW'),
(22, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', '8NwvpW'),
(23, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'UPBsA5'),
(24, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'PVuEK7'),
(25, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'PVuEK7'),
(26, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'PVuEK7'),
(27, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'PVuEK7'),
(28, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'PVuEK7'),
(29, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'PVuEK7'),
(30, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'PVuEK7'),
(31, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'PVuEK7'),
(32, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'PVuEK7'),
(33, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'PVuEK7'),
(34, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'PVuEK7'),
(35, 'Joaquin1', 'Zaki1', 'Soriano1', 'male', 'Qc', '2023-09-22', 'eOaSB7'),
(36, 'Joaquin1', 'Zaki1', 'Soriano1', 'male', 'Qc', '2023-09-22', '5tORwB'),
(37, 'Joaquin1', 'Zaki1', 'Soriano1', 'male', 'Qc', '2023-09-22', 'k7tNMu'),
(38, 'Joaquin1', 'Zaki1', 'Soriano1', 'male', 'Qc', '2023-09-22', '1ZJcRE'),
(39, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'UPBsA5'),
(40, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'UPBsA5'),
(41, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'VPQKnZ'),
(42, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'VPQKnZ'),
(43, 'Joaquin Zaki', 'Baguna', 'Soriano', 'male', 'Quezon City', '2001-05-21', 'TcEU1R'),
(44, 'Joaquin Zaki', 'Test', 'Soriano', 'male', 'Qc', '2023-09-23', 'KFkZEw'),
(45, 'Joaquin Zaki', 'Test', 'Soriano', 'male', 'Qc', '2023-09-23', 'pp6Ph2'),
(46, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'DbfX3c'),
(47, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'DbfX3c'),
(48, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'DbfX3c'),
(49, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'DbfX3c'),
(50, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'DbfX3c'),
(51, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'DbfX3c'),
(52, 'Joaquin Zaki', 'Baguna', 'Soriano', 'male', 'Quezon City', '2001-05-21', 'TcEU1R'),
(53, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'JoZoHD'),
(54, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'JoZoHD'),
(55, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'JoZoHD'),
(56, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'JoZoHD'),
(57, 'Joaquin', 'Zaki', 'Soriano', 'male', 'Qc', '2023-09-23', 'JoZoHD'),
(58, 'Joaquin', 'Baguna', 'Soriano', 'female', 'Qc', '2023-09-11', '1jFmKV'),
(59, 'Joaquin1111', 'Zaki', 'Soriano', 'male', '111111111', '2023-09-22', 'n5gtST'),
(60, 'Joaquin1111', 'Zaki', 'Soriano', 'male', '111111111', '2023-09-22', 'P0SWtp'),
(61, 'Joaquin22222222', 'Zaki', 'Soriano', 'female', 'Qc', '2023-09-18', 'haES9b'),
(62, 'Joaquin33333', 'Zaki', 'Soriano', 'female', 'Qc', '2023-09-22', 'wZArZT'),
(63, 'Joaquin33333', 'Zaki', 'Soriano', 'female', 'Qc', '2023-09-22', 'YL7tjo'),
(64, 'Joaquin33333', 'Zaki', 'Soriano', 'female', 'Qc', '2023-09-22', 'HfIdga'),
(65, 'Joaquin4444444444', 'Zaki', 'Soriano', 'female', 'Qc', '2023-09-19', 'UZIdQi'),
(66, 'Joaquin4444444444', 'Zaki', 'Soriano', 'female', 'Qc', '2023-09-19', 'io2Un5'),
(67, 'Joaquin55555555', 'Zaki', 'Soriano', 'female', 'Qc', '2023-09-28', 'Ab21Mi'),
(68, 'Joaquin666666666', 'Zaki', 'Soriano', 'female', 'Qc', '2023-09-21', 'vTMHzi'),
(69, 'Joaquin666666666', 'Zaki', 'Soriano', 'female', 'Qc', '2023-09-21', 'vTCCow'),
(70, 'Joaquin77777777', 'Zaki', 'Soriano', 'female', '1', '2023-09-26', 'Kp5Uq3');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `db_num`
--
ALTER TABLE `db_num`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `docu_table`
--
ALTER TABLE `docu_table`
  ADD PRIMARY KEY (`docu_table_id`);

--
-- Indexes for table `tbl_brgyid`
--
ALTER TABLE `tbl_brgyid`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_cedrecords`
--
ALTER TABLE `tbl_cedrecords`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_cedula`
--
ALTER TABLE `tbl_cedula`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_clearance`
--
ALTER TABLE `tbl_clearance`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_clrrecords`
--
ALTER TABLE `tbl_clrrecords`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_idrecords`
--
ALTER TABLE `tbl_idrecords`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_indigency`
--
ALTER TABLE `tbl_indigency`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_indrecords`
--
ALTER TABLE `tbl_indrecords`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_login`
--
ALTER TABLE `tbl_login`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_pcrecords`
--
ALTER TABLE `tbl_pcrecords`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_policeclr`
--
ALTER TABLE `tbl_policeclr`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_records`
--
ALTER TABLE `tbl_records`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_residency`
--
ALTER TABLE `tbl_residency`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_resrecords`
--
ALTER TABLE `tbl_resrecords`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `tbl_userinformation`
--
ALTER TABLE `tbl_userinformation`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `db_num`
--
ALTER TABLE `db_num`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `docu_table`
--
ALTER TABLE `docu_table`
  MODIFY `docu_table_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_brgyid`
--
ALTER TABLE `tbl_brgyid`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `tbl_cedrecords`
--
ALTER TABLE `tbl_cedrecords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_cedula`
--
ALTER TABLE `tbl_cedula`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=43;

--
-- AUTO_INCREMENT for table `tbl_clearance`
--
ALTER TABLE `tbl_clearance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `tbl_clrrecords`
--
ALTER TABLE `tbl_clrrecords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `tbl_idrecords`
--
ALTER TABLE `tbl_idrecords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=338;

--
-- AUTO_INCREMENT for table `tbl_indigency`
--
ALTER TABLE `tbl_indigency`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=56;

--
-- AUTO_INCREMENT for table `tbl_indrecords`
--
ALTER TABLE `tbl_indrecords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pcrecords`
--
ALTER TABLE `tbl_pcrecords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_policeclr`
--
ALTER TABLE `tbl_policeclr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `tbl_records`
--
ALTER TABLE `tbl_records`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=357;

--
-- AUTO_INCREMENT for table `tbl_residency`
--
ALTER TABLE `tbl_residency`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;

--
-- AUTO_INCREMENT for table `tbl_resrecords`
--
ALTER TABLE `tbl_resrecords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_userinformation`
--
ALTER TABLE `tbl_userinformation`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=71;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
