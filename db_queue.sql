-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 07, 2023 at 10:22 PM
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
  `police_clearance` varchar(255) NOT NULL,
  `user_queue_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `docu_table`
--

INSERT INTO `docu_table` (`docu_table_id`, `user_id`, `cedula`, `brgy_id`, `brgy_clearance`, `indigency`, `recidency`, `police_clearance`, `user_queue_number`) VALUES
(80, '3HQ9FR', '1', '1', '1', '', '1', '', '2'),
(135, 'CJKGD0', '0', '0', '0', '1', '1', '1', '3'),
(147, 'Z4WOHJ', '0', '1', '1', '1', '1', '1', '4'),
(149, 'M20DBK', '1', '1', '1', '1', '1', '1', '4'),
(157, '7D5KDJ', '1', '1', '1', '1', '1', '1', '5');

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
(5, '', '2023-10-22', '12:06', 0, 'M20DBK', 'Joaquin Zaki'),
(6, '', '2023-10-23', '11:40', 0, 'M20DBK', 'Joaquin Zaki'),
(7, '', '2023-10-23', '11:40', 0, 'Z4WOHJ', 'Mark');

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
(1, 'Cedula', '2023-10-14', '09:01', 0, 'M20DBK', 'Joaquin Zaki'),
(2, 'Cedula', '2023-10-14', '09:08', 0, 'M20DBK', 'Joaquin Zaki'),
(3, 'Cedula', '2023-10-14', '09:08', 0, '4V613Y', 'Juan'),
(4, 'Cedula', '2023-10-14', '09:08', 0, 'EV89FG', 'Jobelle'),
(5, 'Cedula', '2023-10-22', '12:06', 0, 'M20DBK', 'Joaquin Zaki'),
(6, 'Cedula', '2023-10-23', '11:40', 0, 'M20DBK', 'Joaquin Zaki'),
(7, 'Cedula', '2023-10-23', '11:40', 0, 'Z4WOHJ', 'Mark');

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
(9, '2023-10-24', '01:41', 'M20DBK', 'Joaquin Zaki'),
(12, '2023-11-08', '05:21', '7D5KDJ', 'Joaquin111111212121');

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
(1, 'Barangay Clearance', '2023-10-14', '09:01', 0, 'M20DBK', 'Joaquin Zaki'),
(2, 'Barangay Clearance', '2023-10-14', '09:23', 0, 'M20DBK', 'Joaquin Zaki'),
(3, 'Barangay Clearance', '2023-10-14', '09:23', 0, '4V613Y', 'Juan'),
(4, 'Barangay Clearance', '2023-10-14', '09:23', 0, 'EV89FG', 'Jobelle');

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
(1, 'Barangay ID', '2023-10-14', '09:01', 0, 'M20DBK', 'Joaquin Zaki'),
(2, 'Barangay ID', '2023-10-14', '09:09', 0, 'M20DBK', 'Joaquin Zaki'),
(3, 'Barangay ID', '2023-10-14', '09:23', 0, '4V613Y', 'Juan'),
(4, 'Barangay ID', '2023-10-14', '09:23', 0, 'EV89FG', 'Jobelle');

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
(1, 'Indigency', '2023-10-14', '09:02', 0, 'M20DBK', 'Joaquin Zaki'),
(2, 'Indigency', '2023-10-14', '09:26', 0, 'M20DBK', 'Joaquin Zaki'),
(3, 'Indigency', '2023-10-14', '09:26', 0, 'EV89FG', 'Jobelle');

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
(1, 'Business Clearance', '2023-10-14', '09:03', 0, 'M20DBK', 'Joaquin Zaki'),
(2, 'Business Clearance', '2023-10-14', '09:26', 0, '4V613Y', 'Juan'),
(3, 'Business Clearance', '2023-10-14', '09:26', 0, 'M20DBK', 'Joaquin Zaki'),
(4, 'Business Clearance', '2023-10-14', '09:26', 0, 'EV89FG', 'Jobelle');

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
(1, 'Building Clearance', '2023-09-24', '07:48', 0, 'Jobelle Gani Rubia', 'XAAQ5D'),
(2, 'Barangay ID', '2023-09-24', '07:59', 0, 'Jobelle Gani Rubia', 'XAAQ5D'),
(3, 'Building Clearance', '2023-09-24', '08:22', 0, 'Mark  Dela Cruz', '3HQ9FR'),
(4, 'Barangay ID', '2023-09-24', '08:24', 0, 'Mark  Dela Cruz', '3HQ9FR'),
(5, 'Barangay Clearance', '2023-09-24', '08:25', 0, '', 'XAAQ5D'),
(6, 'Barangay Clearance', '2023-09-24', '08:25', 0, 'Mark  Dela Cruz', '3HQ9FR'),
(7, 'Building Clearance', '2023-10-02', '04:10', 0, 'Jobelle  Rubia', 'NAECGJ'),
(11, 'Building Clearance', '2023-10-14', '04:59', 0, 'Joaquin Zaki Baguna Soriano', 'NMCY50'),
(12, 'Building Clearance', '2023-10-14', '06:28', 0, 'Jobelle  Rubia', 'NAECGJ'),
(13, 'Building Clearance', '2023-10-14', '06:28', 0, 'Joaquin Zaki Baguna Soriano', 'CJKGD0'),
(14, 'Barangay ID', '2023-10-14', '06:43', 0, 'Jobelle  Rubia', 'NAECGJ'),
(15, 'Barangay ID', '2023-10-14', '06:43', 0, 'Joaquin Zaki Baguna Soriano', 'CJKGD0'),
(16, 'Building Clearance', '2023-10-14', '08:31', 0, 'Juan   Dela Cruz', 'MZEPNL'),
(17, 'Building Clearance', '2023-10-14', '08:32', 0, 'Joaquin Zaki Baguna Soriano', 'CJKGD0'),
(18, 'Barangay ID', '2023-10-14', '08:40', 0, 'Juan   Dela Cruz', 'MZEPNL'),
(19, 'Barangay ID', '2023-10-14', '08:40', 0, 'Joaquin Zaki Baguna Soriano', 'CJKGD0'),
(20, 'Residency', '2023-10-14', '08:40', 0, 'Juan   Dela Cruz', 'MZEPNL'),
(21, 'Residency', '2023-10-14', '08:40', 0, '', ''),
(22, 'Barangay Clearance', '2023-10-14', '08:41', 0, 'Joaquin Zaki Baguna Soriano', 'CJKGD0'),
(23, 'Barangay Clearance', '2023-10-14', '08:41', 0, 'Joaquin Zaki Baguna Soriano', 'CJKGD0'),
(24, 'Barangay Clearance', '2023-10-14', '08:41', 0, 'Joaquin Zaki Baguna Soriano', 'CJKGD0'),
(25, 'Building Clearance', '2023-10-14', '09:01', 0, 'Joaquin Zaki Baguna Soriano', 'M20DBK'),
(26, 'Barangay ID', '2023-10-14', '09:01', 0, 'Joaquin Zaki Baguna Soriano', 'M20DBK'),
(27, 'Barangay Clearance', '2023-10-14', '09:01', 0, 'Joaquin Zaki Baguna Soriano', 'M20DBK'),
(28, 'Residency', '2023-10-14', '09:02', 0, 'Joaquin Zaki Baguna Soriano', 'M20DBK'),
(29, 'Indigency', '2023-10-14', '09:02', 0, 'Joaquin Zaki Baguna Soriano', 'M20DBK'),
(30, 'Business Clearance', '2023-10-14', '09:03', 0, 'Joaquin Zaki Baguna Soriano', 'M20DBK'),
(31, 'Building Clearance', '2023-10-14', '09:08', 0, 'Joaquin Zaki Baguna Soriano', 'M20DBK'),
(32, 'Building Clearance', '2023-10-14', '09:08', 0, 'Juan  Dela Cruz', '4V613Y'),
(33, 'Building Clearance', '2023-10-14', '09:08', 0, 'Jobelle  Rubia', 'EV89FG'),
(34, 'Barangay ID', '2023-10-14', '09:09', 0, 'Joaquin Zaki Baguna Soriano', 'M20DBK'),
(35, 'Barangay ID', '2023-10-14', '09:23', 0, 'Juan  Dela Cruz', '4V613Y'),
(36, 'Barangay ID', '2023-10-14', '09:23', 0, 'Jobelle  Rubia', 'EV89FG'),
(37, 'Barangay Clearance', '2023-10-14', '09:23', 0, 'Joaquin Zaki Baguna Soriano', 'M20DBK'),
(38, 'Barangay Clearance', '2023-10-14', '09:23', 0, 'Juan  Dela Cruz', '4V613Y'),
(39, 'Barangay Clearance', '2023-10-14', '09:23', 0, 'Jobelle  Rubia', 'EV89FG'),
(40, 'Residency', '2023-10-14', '09:23', 0, 'Joaquin Zaki Baguna Soriano', 'M20DBK'),
(41, 'Residency', '2023-10-14', '09:23', 0, 'Juan  Dela Cruz', '4V613Y'),
(42, 'Residency', '2023-10-14', '09:24', 0, 'Jobelle  Rubia', 'EV89FG'),
(43, 'Indigency', '2023-10-14', '09:26', 0, 'Joaquin Zaki Baguna Soriano', 'M20DBK'),
(44, 'Indigency', '2023-10-14', '09:26', 0, 'Jobelle  Rubia', 'EV89FG'),
(45, 'Business Clearance', '2023-10-14', '09:26', 0, 'Juan  Dela Cruz', '4V613Y'),
(46, 'Business Clearance', '2023-10-14', '09:26', 0, 'Joaquin Zaki Baguna Soriano', 'M20DBK'),
(47, 'Business Clearance', '2023-10-14', '09:26', 0, 'Jobelle  Rubia', 'EV89FG'),
(48, 'Building Clearance', '2023-10-22', '12:06', 0, 'Joaquin Zaki Baguna Soriano', 'M20DBK'),
(49, 'Building Clearance', '2023-10-23', '11:40', 0, 'Joaquin Zaki Baguna Soriano', 'M20DBK'),
(50, 'Building Clearance', '2023-10-23', '11:40', 0, 'Mark  Dela Cruz', 'Z4WOHJ');

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
(1, 'Residency', '2023-10-14', '09:02', 0, 'M20DBK', 'Joaquin Zaki'),
(2, 'Residency', '2023-10-14', '09:23', 0, 'M20DBK', 'Joaquin Zaki'),
(3, 'Residency', '2023-10-14', '09:23', 0, '4V613Y', 'Juan'),
(4, 'Residency', '2023-10-14', '09:24', 0, 'EV89FG', 'Jobelle');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userinformation`
--

CREATE TABLE `tbl_userinformation` (
  `user_id` int(255) NOT NULL,
  `first_name` varchar(255) NOT NULL,
  `middle_name` varchar(255) NOT NULL,
  `last_name` varchar(255) NOT NULL,
  `queue_id` varchar(255) NOT NULL,
  `queue_status` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `tbl_userinformation`
--

INSERT INTO `tbl_userinformation` (`user_id`, `first_name`, `middle_name`, `last_name`, `queue_id`, `queue_status`) VALUES
(1, 'Joaquin Zaki', 'Baguna', 'Soriano', 'M20DBK', ''),
(2, 'Juan', '', 'Dela Cruz', '4V613Y', ''),
(3, 'Jobelle', '', 'Rubia', 'EV89FG', ''),
(4, 'Mark', '', 'Dela Cruz', 'Z4WOHJ', ''),
(9, 'Joaquin111111212121', 'Zaki', 'Soriano', '7D5KDJ', '');

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
  ADD PRIMARY KEY (`docu_table_id`),
  ADD UNIQUE KEY `Users_ID` (`user_id`);

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
  MODIFY `docu_table_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=159;

--
-- AUTO_INCREMENT for table `tbl_brgyid`
--
ALTER TABLE `tbl_brgyid`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_cedrecords`
--
ALTER TABLE `tbl_cedrecords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_cedula`
--
ALTER TABLE `tbl_cedula`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `tbl_clearance`
--
ALTER TABLE `tbl_clearance`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_clrrecords`
--
ALTER TABLE `tbl_clrrecords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_idrecords`
--
ALTER TABLE `tbl_idrecords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_indigency`
--
ALTER TABLE `tbl_indigency`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_indrecords`
--
ALTER TABLE `tbl_indrecords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_login`
--
ALTER TABLE `tbl_login`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_pcrecords`
--
ALTER TABLE `tbl_pcrecords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_policeclr`
--
ALTER TABLE `tbl_policeclr`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_records`
--
ALTER TABLE `tbl_records`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=51;

--
-- AUTO_INCREMENT for table `tbl_residency`
--
ALTER TABLE `tbl_residency`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_resrecords`
--
ALTER TABLE `tbl_resrecords`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `tbl_userinformation`
--
ALTER TABLE `tbl_userinformation`
  MODIFY `user_id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
