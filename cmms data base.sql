-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jun 29, 2024 at 03:30 AM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cmms`
--

-- --------------------------------------------------------

--
-- Table structure for table `account`
--

CREATE TABLE `account` (
  `acc_id` int(11) NOT NULL,
  `acc_user` varchar(50) NOT NULL,
  `acc_pass` varchar(50) NOT NULL,
  `acc_role` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `account`
--

INSERT INTO `account` (`acc_id`, `acc_user`, `acc_pass`, `acc_role`) VALUES
(1, 'admin', 'admin', 'admin'),
(3, 'user', 'user', 'user'),
(4, 'Ivan Bayon', 'user', 'user'),
(5, 'Amiel Jhon Canton', 'user', 'user'),
(7, 'Charles Mangaron', 'user', 'user'),
(8, 'Michael Roy Mangila', 'user', 'user'),
(11, 'Ivankov Puter', 'user', 'user'),
(12, 'Kayle Lumapay', 'genesis123', 'user'),
(13, 'Radikyo Optima', 'owner', 'admin'),
(21, 'Julian Villamor', '1231', 'admin'),
(22, 'Ivan Bayon', 'user', 'admin'),
(23, 'Amiel Jhon Canton', 'user', 'admin'),
(24, 'Jun Vincent Medilo', 'awea', 'admin'),
(25, 'Michael bustamanta', '12345', 'admin');

-- --------------------------------------------------------

--
-- Table structure for table `asset`
--

CREATE TABLE `asset` (
  `a_id` int(10) NOT NULL,
  `a_type` varchar(50) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_num` varchar(50) NOT NULL,
  `as_num` varchar(50) NOT NULL,
  `a_date` varchar(50) NOT NULL,
  `a_provider` varchar(50) NOT NULL,
  `a_exdate` varchar(50) NOT NULL,
  `a_details` varchar(50) NOT NULL,
  `a_status` varchar(50) NOT NULL,
  `a_sched` varchar(50) NOT NULL,
  `a_remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asset`
--

INSERT INTO `asset` (`a_id`, `a_type`, `a_name`, `a_num`, `as_num`, `a_date`, `a_provider`, `a_exdate`, `a_details`, `a_status`, `a_sched`, `a_remarks`) VALUES
(24, 'Aircon', 'Carrier', '123141 ', '123115', '2023-06-21', 'CLS company', '2023-06-21', 'Nothing', 'Not Repairable', '2023-06-15', ''),
(25, 'Ref', 'kolin', '321321 ', '321123', '2023-06-08', 'CLS company', '2025-09-05', 'Nothing', 'Not Repairable', '2023-06-09', ''),
(26, 'Cellphone', 'INFINIX', '324124 ', '4524', '2023-06-04', 'infinix services', '2023-07-08', '3 month warranty', 'Not Repairable', '2023-06-07', ''),
(27, 'Cellphone', 'INFINIX', '655322 ', '3422', '2023-06-04', 'infinix services', '2023-06-30', '1 month warranty', 'Not Repairable', '2023-06-09', ''),
(30, 'Refrigerator ', 'Panasonic', '754532 ', '4535', '2023-02-22', 'panasonic services', '2023-06-08', '1 year warranty ', 'Not Repairable', '2023-06-29', 'Broken Door'),
(41, 'Mouse', 'kolin', '123141 ', '4524', '2024-01-16', 'CLS company', '2024-12-12', '2 months warranty', 'Damaged', '2024-01-24', 'nabasa '),
(43, 'Steeltoe Shoes', 'Caterpillar', '888 ', '1522', '2024-01-17', 'CLS company', '2024-01-17', '1 month warranty', 'Undamaged', '', ''),
(44, 'Washing machine', 'Panasonic', '1234 ', '4123', '2024-01-16', 'Logitech', '2024-01-16', 'WAE', 'Undamaged', '', ''),
(45, 'Pressure Washer', 'Carrier', '213112 ', '1231152', '2024-01-17', 'sharp services', '2024-01-25', '3 month warranty', 'Damaged', '2024-01-22', 'natagak\r\n'),
(51, 'Aircon', 'Carrier', '123141 ', '4524', '2024-01-12', 'CLS company', '2024-01-25', '3 month warranty', 'Undamaged', '', ''),
(52, 'Cellphone', 'kolin', '123141 ', '123124', '2024-02-02', 'CLS company', '2024-02-01', 'AWE', 'Undamaged', '', ''),
(53, 'Washing machine', 'Carrier', '015432 ', '1231154', '2024-01-03', 'Logitech', '2024-02-02', '2 months warranty', 'Undamaged', '', ''),
(55, 'Screw Driver', 'Carrier', '123141 ', '1522', '2024-01-16', 'CLS company', '2024-01-17', '1 month warranty', 'Undamaged', '', ''),
(56, 'Ftat Nose Screw Drover', 'Panasonic', '123141 ', '1231154', '2024-01-10', 'CLS company', '2024-01-11', '3 month warranty', 'Undamaged', '', ''),
(57, 'Hammer', 'Philip', '0001 ', '0002', '2024-01-18', 'CLS company', '2024-05-19', '3 month warranty', 'Undamaged', '', ''),
(58, 'Pliers', 'Philip', '0003 ', '0004', '2024-01-19', 'CLS company', '2024-05-01', '3 month warranty', 'Undamaged', '', ''),
(59, 'Cutter', 'Philip', '0005 ', '0006', '2024-01-19', 'CLS company', '2024-01-19', '3 month warranty', 'Undamaged', '', ''),
(60, 'Ladder', 'Philip', '0007 ', '0008', '2024-01-19', 'CLS company', '2024-03-01', '3 month warranty', 'Undamaged', '', ''),
(61, 'Scissors', 'Philip', '0008 ', '0009', '2024-01-19', 'CLS company', '2024-05-01', '3 month warranty', 'Undamaged', '', ''),
(62, 'Bucket', 'Tupperware', '0010 ', '0011', '2024-01-19', 'CLS company', '2024-03-01', '3 month warranty', 'Undamaged', '', ''),
(63, 'Water Hose', 'Philip', '0012 ', '0013', '2024-01-19', 'CLS company', '2024-03-19', '3 month warranty', 'Undamaged', '', ''),
(64, 'Machine Blower', 'OLG', '7123 ', '512345', '2024-01-19', 'oLG', '2025-01-20', '1 year warranty ', 'Not Repairable', '', '');

-- --------------------------------------------------------

--
-- Table structure for table `asset_history`
--

CREATE TABLE `asset_history` (
  `ah_id` int(11) NOT NULL,
  `a_id` int(11) NOT NULL,
  `a_name` varchar(50) NOT NULL,
  `a_num` varchar(50) NOT NULL,
  `as_num` varchar(50) NOT NULL,
  `a_date` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `asset_history`
--

INSERT INTO `asset_history` (`ah_id`, `a_id`, `a_name`, `a_num`, `as_num`, `a_date`) VALUES
(41, 31, 'Panasonic ', '453543  ', '5435 ', '2023-06-09 '),
(42, 29, 'oLG ', '345322  ', '7564 ', '2023-04-17 '),
(43, 28, 'Sharp ', '892379  ', '8653 ', '2023-05-10 '),
(44, 33, 'Kolin ', '21415323  ', '231231241 ', '2023-11-23 '),
(46, 38, 'Carrier ', '123141  ', '123115 ', '2024-01-11 '),
(47, 42, 'Carrier ', '123141  ', '123115 ', '2024-01-16 '),
(48, 39, 'Philips ', '123141  ', '1231152 ', '2024-01-16 '),
(49, 32, 'Logitech ', '234123  ', '9502342 ', '2023-11-23 '),
(50, 40, 'Panasonic ', '015432  ', '123115 ', '2024-01-16 '),
(51, 47, 'Carrier ', '123141  ', '123141 ', '2024-01-18 '),
(52, 46, 'Carrier ', '123141  ', '123141 ', '2024-01-15 '),
(53, 48, '123 ', '123141  ', '123 ', '2024-01-08 '),
(54, 49, 'Carrier ', '123141  ', '123141 ', '2024-01-20 '),
(55, 50, 'Carrier ', '123141  ', '123141 ', '2024-01-16 '),
(56, 54, '123 ', '123  ', '123 ', '2024-01-18 ');

-- --------------------------------------------------------

--
-- Table structure for table `astatus`
--

CREATE TABLE `astatus` (
  `astats_id` int(11) NOT NULL,
  `as_active` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `astatus`
--

INSERT INTO `astatus` (`astats_id`, `as_active`) VALUES
(1, 'Active'),
(2, 'Inactive');

-- --------------------------------------------------------

--
-- Table structure for table `inventory`
--

CREATE TABLE `inventory` (
  `inv_id` int(11) NOT NULL,
  `inv_quantity` varchar(10) NOT NULL,
  `inv_name` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `inventory`
--

INSERT INTO `inventory` (`inv_id`, `inv_quantity`, `inv_name`) VALUES
(38, '0', 'Pressure Washer'),
(39, '1', 'Screw Driver'),
(40, '1', 'Ftat Nose Screw Driver'),
(41, '1', 'Hammer'),
(42, '1', 'Pliers'),
(43, '1', 'Cutter'),
(44, '0', 'Ladder'),
(45, '1', 'Scissors'),
(46, '1', 'Bucket'),
(47, '1', 'Water Hose'),
(48, '0', 'Machine Blower');

-- --------------------------------------------------------

--
-- Table structure for table `invtools`
--

CREATE TABLE `invtools` (
  `it_id` int(11) NOT NULL,
  `inv_id` int(11) NOT NULL,
  `it_service` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `invtools`
--

INSERT INTO `invtools` (`it_id`, `inv_id`, `it_service`) VALUES
(1, 2, 'Aircon Repair');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE `job` (
  `j_id` int(11) NOT NULL,
  `j_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`j_id`, `j_desc`) VALUES
(2, 'Technician'),
(3, 'IT'),
(4, 'Cleaner'),
(5, 'Office');

-- --------------------------------------------------------

--
-- Table structure for table `priority`
--

CREATE TABLE `priority` (
  `p_id` int(11) NOT NULL,
  `p_desc` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `priority`
--

INSERT INTO `priority` (`p_id`, `p_desc`) VALUES
(1, 'High'),
(2, 'Medium'),
(3, 'Low');

-- --------------------------------------------------------

--
-- Table structure for table `servicereq`
--

CREATE TABLE `servicereq` (
  `sr_id` int(11) NOT NULL,
  `sr_orderid` varchar(50) NOT NULL,
  `sr_customer` varchar(50) NOT NULL,
  `ser_id` int(10) NOT NULL,
  `p_id` int(10) NOT NULL,
  `st_id` int(10) NOT NULL,
  `s_id` int(11) NOT NULL,
  `sr_address` varchar(50) NOT NULL,
  `sr_created` varchar(50) NOT NULL,
  `sr_due` varchar(50) NOT NULL,
  `sr_cost` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `servicereq`
--

INSERT INTO `servicereq` (`sr_id`, `sr_orderid`, `sr_customer`, `ser_id`, `p_id`, `st_id`, `s_id`, `sr_address`, `sr_created`, `sr_due`, `sr_cost`) VALUES
(40, '215429', 'Toshiba Opposs', 1, 1, 1, 11, 'Deca Homes', '2024-01-18', '2024-01-18', '200000');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `ser_id` int(11) NOT NULL,
  `ser_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`ser_id`, `ser_desc`) VALUES
(1, 'Repairing'),
(2, 'Cleaning'),
(3, 'Plumbing'),
(4, 'Maintenance');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE `staff` (
  `s_id` int(11) NOT NULL,
  `s_name` varchar(50) NOT NULL,
  `s_num` varchar(50) NOT NULL,
  `s_email` varchar(50) NOT NULL,
  `j_id` int(11) NOT NULL,
  `s_status` varchar(50) NOT NULL,
  `s_date` varchar(50) NOT NULL,
  `s_skills` varchar(50) NOT NULL,
  `s_work` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`s_id`, `s_name`, `s_num`, `s_email`, `j_id`, `s_status`, `s_date`, `s_skills`, `s_work`) VALUES
(1, 'Open', '', '', 5, '', '', 'All', ''),
(6, 'Ivan Bayon', '0923141251 ', 'ivan@gmail.com', 2, '', '2023-05-08', 'Programmer', 'fired'),
(7, 'Michael Roy Mangila', '56757567 ', 'mg@yahoo.com', 2, '', '2023-05-22', 'Programmer', ''),
(8, 'Jacob Ortega', '09456544565 ', 'jortega2@yahoo.com', 4, '', '2023-05-22', 'Programmer', ''),
(11, 'Amiel Jhon Canton', '09 1931627923 ', 'canton@gmail.com', 2, '', '2023-05-29', 'Programmer', 'fired'),
(14, 'Ivankov Puter ', '093124 ', 'ivankov@gmail.com', 2, '', '2023-06-08', 'General maintenance', 'fired'),
(15, 'Kayle Lumapay', '234421 ', 'kayle@gmail.com', 2, '', '2023-06-08', 'Troubleshooting', ''),
(16, 'Michael John Bustamante', '09456544565 ', 'bustamante@rocketmail.com', 2, '', '2023-11-14', 'Troubleshooting', ''),
(17, 'Charles Francis Mangaron', '09096790785 ', 'nikko5186carrier@gmail.com', 2, '', '2023-11-17', 'Programmer', 'fired'),
(18, 'Julian Villamor', '092352634523 ', 'Jullianv@gmail.com', 2, '', '2023-11-17', 'SalesTalk', 'fired'),
(19, 'Jun Vincent Medilo', '09783453194 ', 'JunVxMed@gmail.com', 4, '', '2023-11-17', 'Cleaner', ''),
(23, 'Genesis Baraclan', '09456544565 ', 'Baraclan@rocketmail.com', 2, '', '2023-11-30', 'SalesTalk', 'fired'),
(25, 'Genesis Banaclar', '09491236737 ', 'genesisbaraclan03@gmail.com', 2, '', '2024-01-16', 'Programmer', 'fired'),
(26, 'Rose Cabusas', '09456544565 ', 'bustamante@rocketmail.com', 3, '', '2024-01-25', 'Sharp shooter', ''),
(27, 'Hutao Yanzeng', '09123141251 ', 'Hutao@yahoo.com', 2, '', '2024-01-24', 'General maintenance', ''),
(28, 'Michael John bustamantawee', '09456544565', 'bustamante@rocketmail.com', 2, '', '2024-01-23', 'Troubleshooting', 'fired'),
(29, 'Jennifer Mangaron', '09096790785', 'ivan@gmail.com', 2, '', '2024-01-25', 'General maintenance', 'fired'),
(30, 'Michael John bustamantawee', '09456544565 ', 'bustamante@rocketmail.com', 2, '', '2024-01-18', 'General maintenance', 'fired'),
(31, 'Michael bustamanta', '09456544565 ', 'bustamante@rocketmail.com', 2, '', '2024-01-26', 'General maintenance', ''),
(32, 'awe', '09231412512 ', 'bustamante@rocketmail.com', 2, '', '2024-01-17', 'Sharp shooter', 'fired'),
(33, 'Jhon Adams', '09123123523 ', 'jhonadams@gmail.com', 2, '', '2024-01-25', 'SalesTalk', ''),
(34, 'Ryan Bolo', '09456544565 ', 'boloryan23@gmail.com', 4, '', '2024-01-16', 'Good in cooking', ''),
(35, 'Edrian Cabanero', '09234578234 ', 'cabaneds@gmail.com', 4, '', '2024-01-16', 'Sharp shooter', ''),
(36, 'dax axalan', '09867432479 ', 'mbcjcc@gmail.com', 2, '', '2024-06-14', 'All', '');

-- --------------------------------------------------------

--
-- Table structure for table `status`
--

CREATE TABLE `status` (
  `st_id` int(11) NOT NULL,
  `st_desc` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `status`
--

INSERT INTO `status` (`st_id`, `st_desc`) VALUES
(1, 'Planning'),
(2, 'Progress'),
(3, 'Done'),
(4, 'Dropped');

-- --------------------------------------------------------

--
-- Table structure for table `usedtools`
--

CREATE TABLE `usedtools` (
  `ut_id` int(11) NOT NULL,
  `ut_tool` varchar(50) NOT NULL,
  `ut_name` varchar(50) NOT NULL,
  `ut_orderid` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `usedtools`
--

INSERT INTO `usedtools` (`ut_id`, `ut_tool`, `ut_name`, `ut_orderid`) VALUES
(57, 'Flat ScrewDriver', 'Jacob Ortega', '818629'),
(58, 'Flat ScrewDriver', 'Michael Roy Mangila', '850839'),
(59, 'Pressure Washer', 'Ivan Bayon', '850839'),
(60, 'Pressure Washer', 'Ivan Bayon', '850839'),
(61, 'Pressure Washer', 'Michael Roy Mangila', '850839'),
(62, 'Pressure Washer', 'john', '850839'),
(63, 'Flat ScrewDriver', 'Ivan Bayon', '850839'),
(64, 'Mouse', 'Ivan Bayon', '850839'),
(65, 'Wrenches', 'Ivan Bayon', '850839'),
(66, 'Flat ScrewDriver', 'Ivan Bayon', '850839'),
(67, 'Wrenches', 'Ivan Bayon', '850839'),
(68, 'Pressure Washer', 'Ivan Bayon', '821187'),
(69, 'Wrenches', 'Ivan Bayon', '821187'),
(70, 'Pressure Washer', 'Ivan Bayon', '821187'),
(71, 'Wrenches', 'Ivan Bayon', '821187'),
(72, 'Wrenches', 'Ivan Bayon', '436595'),
(73, 'Wrenches', 'Ivan Bayon', '821187'),
(74, 'Flat Screw Driver', 'Michael Roy Mangila', '436595'),
(75, 'Pressure Washer', 'Ivan Bayon', '436595'),
(76, 'Screw Driver', 'Amiel Jhon Canton', '436595'),
(77, 'Hammer', 'Ivan Bayon', '436595'),
(78, 'Ladder', 'Ivan Bayon', '436595'),
(79, 'Laptop', 'Ivan Bayon', '793753'),
(80, 'Towel', 'Ivan Bayon', '436595'),
(81, 'Wrenches', 'Ivan Bayon', '436595'),
(82, 'Hammer', 'kayle Lumapay', '436595'),
(83, 'Flat Screw Drivers', 'Ivan Bayon', '793753'),
(84, 'Pressure Washer', 'Ivan Bayon', '436595'),
(91, 'Flat Screw Drivers', 'Amiel Jhon Canton', '996776'),
(92, 'Towel', 'Amiel Jhon Canton', '544230'),
(93, 'Ladder', 'Amiel Jhon Canton', '996776'),
(94, 'Laptop', 'Amiel Jhon Canton', '996776'),
(95, 'Hammer', 'Amiel Jhon Canton', '996776'),
(96, 'Flat Screw Drivers', 'Amiel Jhon Canton', '996776'),
(97, 'Screw Driver', 'Amiel Jhon Canton', '996776'),
(98, 'Wrenches', 'Amiel Jhon Canton', '996776'),
(99, 'Pressure Washer', 'Amiel Jhon Canton', '996776'),
(104, 'Towel', 'Amiel Jhon Canton', '996776'),
(105, 'Laptop', 'Amiel Jhon Canton', '777657'),
(106, 'Wrenches', 'Amiel Jhon Canton', '544230'),
(107, 'Flat Screw Driver', 'Amiel Jhon Canton', '996776'),
(108, 'ScrewDriver', 'Amiel Jhon Canton', '589897'),
(109, 'Pressure Washer', 'Ivankov Puter', '996776'),
(110, 'Flat Screw Driver', 'Ivankov Puter', '835286'),
(111, 'Pressure Washer', 'Amiel Jhon Canton', '544230'),
(112, 'Bucket', 'Amiel Jhon Canton', '708692'),
(113, 'Ftat Nose Screw Driver', 'Amiel Jhon Canton', '708692'),
(114, 'Ladder', 'Amiel Jhon Canton', '708692'),
(115, 'Machine Blower', 'Amiel Jhon Canton', '708692');

-- --------------------------------------------------------

--
-- Table structure for table `workorder`
--

CREATE TABLE `workorder` (
  `w_id` int(11) NOT NULL,
  `w_orderid` varchar(50) NOT NULL,
  `w_customer` varchar(50) NOT NULL,
  `ser_id` int(11) NOT NULL,
  `p_id` int(11) NOT NULL,
  `st_id` int(11) NOT NULL,
  `s_id` int(11) NOT NULL,
  `w_address` varchar(100) NOT NULL,
  `w_created` varchar(50) NOT NULL,
  `w_due` varchar(50) NOT NULL,
  `w_cost` varchar(50) NOT NULL,
  `w_comment` varchar(300) NOT NULL,
  `w_complete` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `workorder`
--

INSERT INTO `workorder` (`w_id`, `w_orderid`, `w_customer`, `ser_id`, `p_id`, `st_id`, `s_id`, `w_address`, `w_created`, `w_due`, `w_cost`, `w_comment`, `w_complete`) VALUES
(54, '996776', 'Rose Cabusas', 1, 1, 1, 7, 'Ward 2, Minglanilla, Cebu', '2023-07-26', '2023-07-28', '5000', 'awa', 'complete'),
(58, '589897', 'Mary Rose', 1, 1, 1, 7, 'ward 4, Minglanilla, Cebu', '2023-08-07', '2023-08-21', '20002', 'awa', 'complete'),
(79, '544230', 'Toshiba Oppo', 1, 1, 1, 11, 'Villa Feliza', '2023-11-14', '2023-11-22', '2000222', '', 'complete'),
(81, '388431', 'Leos', 1, 1, 1, 17, 'Villa Felizas', '2024-01-16', '2024-02-02', '50000', '', 'complete'),
(83, '110964', 'Belly Gucci', 1, 1, 1, 11, 'Deca Homes Phase 1', '2024-01-16', '2024-01-09', '200000', 'Kuwan kanang okay raew', 'complete'),
(85, '164111', 'rose', 1, 1, 2, 11, 'Villa Purita', '2024-01-16', '2024-01-20', '2000', 'what a wonderful world ', 'complete'),
(87, '653930', 'Genesis', 3, 3, 2, 14, 'Sterling', '2024-01-16', '2024-01-20', '5125', '', 'complete'),
(88, '835286', 'Toshiba Oppo', 1, 1, 1, 14, 'Deca Homes', '2023-11-14', '2023-11-30', '2000', '', 'complete'),
(90, '526057', 'Michael', 4, 2, 1, 16, 'Deca Homess', '2024-01-16', '2024-01-16', '1500', '', 'complete'),
(91, '673393', 'Christian', 3, 3, 2, 25, 'Ward 2, Minglanilla, Cebu', '2024-01-16', '2024-01-16', '1600', '', ''),
(93, '869485', 'Genesis Banaclar', 1, 1, 1, 11, 'Tulay, Minglanilla, Cebu', '2024-01-16', '2024-01-19', '2888', 'okay ra', 'complete'),
(94, '800243', 'Genesis', 1, 1, 2, 14, 'Bacay Tulay Minglanilla Cebu', '2024-01-16', '2024-01-20', '2000', 'Okay ra', 'complete'),
(95, '852508', 'Belly Gucci', 1, 1, 1, 25, 'Villa Felizas', '2024-01-16', '2024-01-19', '50000', '', 'complete'),
(96, '708692', 'Jake', 1, 1, 2, 11, 'Deca Homes', '2024-01-16', '2024-01-18', '1700', 'Kuwan kanang okay ra', ''),
(100, '971849', 'Channel Fendi', 1, 1, 1, 1, 'Ward 2, Minglanilla, Cebu', '2024-01-18', '2024-01-24', '50000', '', ''),
(101, '822318', 'Gerald Getauban', 1, 1, 1, 1, 'Ward 2, Minglanilla, Cebu', '2024-01-19', '2024-01-17', '2000', '', ''),
(103, '614802', 'Jake', 1, 1, 3, 11, 'Villa Purita', '2024-01-19', '2024-01-22', '3000', '', 'complete'),
(105, '691519', 'Leos', 1, 1, 3, 6, 'Deca Homess', '2024-06-14', '2024-06-16', '20000', 'hgcdshcbds', 'complete');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `account`
--
ALTER TABLE `account`
  ADD PRIMARY KEY (`acc_id`);

--
-- Indexes for table `asset`
--
ALTER TABLE `asset`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `asset_history`
--
ALTER TABLE `asset_history`
  ADD PRIMARY KEY (`ah_id`),
  ADD KEY `asset` (`a_id`);

--
-- Indexes for table `astatus`
--
ALTER TABLE `astatus`
  ADD PRIMARY KEY (`astats_id`);

--
-- Indexes for table `inventory`
--
ALTER TABLE `inventory`
  ADD PRIMARY KEY (`inv_id`);

--
-- Indexes for table `invtools`
--
ALTER TABLE `invtools`
  ADD PRIMARY KEY (`it_id`);

--
-- Indexes for table `job`
--
ALTER TABLE `job`
  ADD PRIMARY KEY (`j_id`);

--
-- Indexes for table `priority`
--
ALTER TABLE `priority`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `servicereq`
--
ALTER TABLE `servicereq`
  ADD PRIMARY KEY (`sr_id`),
  ADD KEY `services` (`ser_id`),
  ADD KEY `priority` (`p_id`),
  ADD KEY `statsu` (`st_id`),
  ADD KEY `staffs` (`s_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`ser_id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
  ADD PRIMARY KEY (`s_id`),
  ADD KEY `job` (`j_id`);

--
-- Indexes for table `status`
--
ALTER TABLE `status`
  ADD PRIMARY KEY (`st_id`);

--
-- Indexes for table `usedtools`
--
ALTER TABLE `usedtools`
  ADD PRIMARY KEY (`ut_id`);

--
-- Indexes for table `workorder`
--
ALTER TABLE `workorder`
  ADD PRIMARY KEY (`w_id`),
  ADD KEY `prio` (`p_id`),
  ADD KEY `staff` (`s_id`),
  ADD KEY `status` (`st_id`),
  ADD KEY `service` (`ser_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `account`
--
ALTER TABLE `account`
  MODIFY `acc_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `asset`
--
ALTER TABLE `asset`
  MODIFY `a_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=65;

--
-- AUTO_INCREMENT for table `asset_history`
--
ALTER TABLE `asset_history`
  MODIFY `ah_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `astatus`
--
ALTER TABLE `astatus`
  MODIFY `astats_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `inventory`
--
ALTER TABLE `inventory`
  MODIFY `inv_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=49;

--
-- AUTO_INCREMENT for table `invtools`
--
ALTER TABLE `invtools`
  MODIFY `it_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `job`
--
ALTER TABLE `job`
  MODIFY `j_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `priority`
--
ALTER TABLE `priority`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `servicereq`
--
ALTER TABLE `servicereq`
  MODIFY `sr_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `ser_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
  MODIFY `s_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `status`
--
ALTER TABLE `status`
  MODIFY `st_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `usedtools`
--
ALTER TABLE `usedtools`
  MODIFY `ut_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=116;

--
-- AUTO_INCREMENT for table `workorder`
--
ALTER TABLE `workorder`
  MODIFY `w_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=106;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `servicereq`
--
ALTER TABLE `servicereq`
  ADD CONSTRAINT `priority` FOREIGN KEY (`p_id`) REFERENCES `priority` (`p_id`),
  ADD CONSTRAINT `services` FOREIGN KEY (`ser_id`) REFERENCES `services` (`ser_id`),
  ADD CONSTRAINT `staffs` FOREIGN KEY (`s_id`) REFERENCES `staff` (`s_id`),
  ADD CONSTRAINT `statsu` FOREIGN KEY (`st_id`) REFERENCES `status` (`st_id`);

--
-- Constraints for table `staff`
--
ALTER TABLE `staff`
  ADD CONSTRAINT `job` FOREIGN KEY (`j_id`) REFERENCES `job` (`j_id`);

--
-- Constraints for table `workorder`
--
ALTER TABLE `workorder`
  ADD CONSTRAINT `prio` FOREIGN KEY (`p_id`) REFERENCES `priority` (`p_id`),
  ADD CONSTRAINT `service` FOREIGN KEY (`ser_id`) REFERENCES `services` (`ser_id`),
  ADD CONSTRAINT `staff` FOREIGN KEY (`s_id`) REFERENCES `staff` (`s_id`),
  ADD CONSTRAINT `status` FOREIGN KEY (`st_id`) REFERENCES `status` (`st_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
