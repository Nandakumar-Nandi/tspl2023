-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 04, 2023 at 02:16 PM
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
-- Database: `sharp_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `company`
--

CREATE TABLE `company` (
  `id` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `DateofIncorporation` date NOT NULL,
  `DateofCommencement` date NOT NULL,
  `CIN` varchar(45) NOT NULL,
  `Address` varchar(250) NOT NULL,
  `PAN` varchar(45) NOT NULL,
  `IT_Password` varchar(45) NOT NULL,
  `TAN` varchar(45) NOT NULL,
  `TAN_Password` varchar(45) NOT NULL,
  `TRACES_LOGIN` varchar(45) NOT NULL,
  `TRACES_Password` varchar(45) NOT NULL,
  `MCA_IDV2` varchar(45) NOT NULL,
  `MCA_PasswordV2` varchar(45) NOT NULL,
  `MCA_IDV3` varchar(45) NOT NULL,
  `MCA_PasswordV3` varchar(45) NOT NULL,
  `FIRMS_ENTITYUSER` varchar(45) NOT NULL,
  `FIRMS_ENTITY_PASSWORD` varchar(45) NOT NULL,
  `FIRMS_BUSINESS_USER` varchar(45) NOT NULL,
  `FIRMS_BUSINESS_PASSWORD` varchar(45) NOT NULL,
  `DIRECTORS_DETAILS` varchar(45) NOT NULL,
  `NOTESandHINTS` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci COMMENT='		';

-- --------------------------------------------------------

--
-- Table structure for table `individual`
--

CREATE TABLE `individual` (
  `id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Pan_Number` varchar(10) NOT NULL,
  `Password` varchar(45) NOT NULL,
  `D_O_B` date NOT NULL,
  `Pancard_name` varchar(50) NOT NULL,
  `Aadhar_no` int(12) NOT NULL,
  `Mobile_no` int(10) NOT NULL,
  `Mobile_no_Alt` int(10) DEFAULT NULL,
  `Email_Prim` varchar(80) NOT NULL,
  `Email_Alt` varchar(80) DEFAULT NULL,
  `Father_name` varchar(45) NOT NULL,
  `Remarks` varchar(300) NOT NULL,
  `Address` varchar(300) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `individual`
--

INSERT INTO `individual` (`id`, `Name`, `Pan_Number`, `Password`, `D_O_B`, `Pancard_name`, `Aadhar_no`, `Mobile_no`, `Mobile_no_Alt`, `Email_Prim`, `Email_Alt`, `Father_name`, `Remarks`, `Address`) VALUES
(1, 'ARUNPANDIAN', 'BCEPA0890D', 'Arun@123', '0000-00-00', 'ARUNPANDIAN', 7477, 2147483647, 11111, 'auroarun007@gmail.com', '11111', 'BALASUBRAMANIAN', '111', ''),
(2, 'PRABHU', 'CXRPP8810P', 'Prabhu@123', '0000-00-00', 'PRABHU', 2184, 2147483647, 11111, 'prabhuarun0201@gmail.com', '11111', 'BALASUBRAMANIAN', '111', ''),
(3, 'BALASUBRAMANIAN', 'BKXPB2964G', 'Balu@123', '0000-00-00', 'BALASUBRAMANIAN', 8541, 2147483647, 11111, 'prabhuarun0201@gmail.com', '11111', 'GOVINDASAMY', '111', '');

-- --------------------------------------------------------

--
-- Table structure for table `trust`
--

CREATE TABLE `trust` (
  `id` int(11) NOT NULL,
  `Name` varchar(45) NOT NULL,
  `PAN_NO` varchar(45) NOT NULL,
  `Registration_No` varchar(45) NOT NULL,
  `Date_of_Registration` date NOT NULL,
  `TAN` varchar(45) NOT NULL,
  `TAN_Password` varchar(45) NOT NULL,
  `TRACES_LOGIN` varchar(45) NOT NULL,
  `TRACES_Password` varchar(45) NOT NULL,
  `FCRA_USERID` varchar(45) NOT NULL,
  `FCRA_PASSWORD` varchar(45) NOT NULL,
  `IT_Password` varchar(45) NOT NULL,
  `Address` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `trust`
--

INSERT INTO `trust` (`id`, `Name`, `PAN_NO`, `Registration_No`, `Date_of_Registration`, `TAN`, `TAN_Password`, `TRACES_LOGIN`, `TRACES_Password`, `FCRA_USERID`, `FCRA_PASSWORD`, `IT_Password`, `Address`) VALUES
(1, 'Barath', '12ww', 'wsdscs', '1111-11-11', '111', '111', '111', '1111', '111', '1111', '111', '111'),
(2, 'Barath', '12ww', 'wsdscs', '1111-11-11', '111', '111', '111', '1111', '111', '1111', '111', '111'),
(3, 'Barath', '12ww', 'wsdscs', '1111-11-11', '111', '111', '111', '1111', '111', '1111', '111', '111'),
(4, 'Barath', '12ww', 'wsdscs', '1111-11-11', '111', '111', '111', '1111', '111', '1111', '111', '111'),
(5, 'Barath', '12ww', 'wsdscs', '1111-11-11', '111', '111', '111', '1111', '111', '1111', '111', '111'),
(6, 'Barath', '12ww', 'wsdscs', '1111-11-11', '111', '111', '111', '1111', '111', '1111', '111', '111'),
(7, 'Barath', '12ww', 'wsdscs', '1111-11-11', '111', '111', '111', '1111', '111', '1111', '111', '111'),
(8, 'Nandi', 'q', 'wsws', '1111-11-11', 'wsdw', '`2ewd', 's', 'w`dsq`edsc`', 'kn', 'i', 'in', 'ii'),
(9, '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(10, '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(11, '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(12, '', '', '', '0000-00-00', '', '', '', '', '', '', '', ''),
(13, 'Nandi', 'q', 'wsws', '1111-11-11', 'wsdw', '`2ewd', 's', 'w`dsq`edsc`', 'kn', 'i', 'in', 'ii'),
(14, 'q', 'jijhh', 'inknk', '1111-11-11', 'ojojo', 'o', 'ojo', 'o', 'oooj', 'ooj', 'ojo', 'ojo'),
(15, 'q', 'jijhh', 'inknk', '1111-11-11', 'ojojo', 'o', 'ojo', 'o', 'oooj', 'ooj', 'ojo', 'ojo'),
(16, 'q1qws', 'niknin', 'iih', '1111-11-11', 'inihi', 'ii', 'i', 'iiiih', 'iiihih', 'hihih', 'ihihih', 'ooj');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `user_id` int(11) NOT NULL,
  `firstname` text NOT NULL,
  `lastname` text NOT NULL,
  `username` text NOT NULL,
  `password` text NOT NULL,
  `accounttype` text NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1 COLLATE=latin1_swedish_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`user_id`, `firstname`, `lastname`, `username`, `password`, `accounttype`) VALUES
(2, 'Arun', 'Pandian', 'Arunsabar', '16d576cc2c5eac89504b4a0b7a83934c', 'Employee'),
(1, 'Nandi', 'Nandi', 'MasterAdmin', '24bb225a6389a68ccb685374af0bf865', 'Admin');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `company`
--
ALTER TABLE `company`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `individual`
--
ALTER TABLE `individual`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `trust`
--
ALTER TABLE `trust`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`user_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `company`
--
ALTER TABLE `company`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `individual`
--
ALTER TABLE `individual`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `trust`
--
ALTER TABLE `trust`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
