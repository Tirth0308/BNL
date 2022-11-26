-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 07, 2022 at 05:37 AM
-- Server version: 10.4.20-MariaDB
-- PHP Version: 8.0.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bnl`
--

-- --------------------------------------------------------

--
-- Table structure for table `all_member`
--

CREATE TABLE `all_member` (
  `member_id` int(10) NOT NULL,
  `name` text NOT NULL,
  `mem_type` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `phone` int(10) NOT NULL,
  `gender` text NOT NULL,
  `pwd` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `all_member`
--

INSERT INTO `all_member` (`member_id`, `name`, `mem_type`, `email`, `phone`, `gender`, `pwd`) VALUES
(0, 'VATSAL SINHA', 'Director', 'Vatsalsinha75@gmail.com', 0, '8292306556', 'abcd123'),
(1, 'Shivansh', 'Collector', 'shivansh@gmail.com', 0, '9070504012', 'Hellthriver_12'),
(2, 'Tirthoraj', 'Customer', 'tirth0308@gmail.com', 0, '8863817342', 'Hellthriver_12');

-- --------------------------------------------------------

--
-- Table structure for table `bnl_customer`
--

CREATE TABLE `bnl_customer` (
  `branch` varchar(50) NOT NULL,
  `acno` varchar(12) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `mname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `dob` date NOT NULL,
  `occupation` varchar(20) NOT NULL,
  `f_name` text NOT NULL,
  `m_name` text NOT NULL,
  `m_status` varchar(10) NOT NULL,
  `spname` varchar(20) NOT NULL,
  `email` varchar(30) NOT NULL,
  `mob` int(12) NOT NULL,
  `cid` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `bnl_customer`
--

INSERT INTO `bnl_customer` (`branch`, `acno`, `fname`, `mname`, `lname`, `dob`, `occupation`, `f_name`, `m_name`, `m_status`, `spname`, `email`, `mob`, `cid`) VALUES
('Lalpur', '0001-08-09', 'VATSAL', '', 'SINHA', '0001-08-09', 'd jfb kjfb', ' jb kb  ', 'dsvshvdsbvksbvskjdb  ', 'Unmarried', '', 'bcsdhbvsh@gmail.com', 2147483647, 19),
('Lalpur', '0001-09-04', 'nnn', '', 'hhh', '9000-01-03', 'd jfb kjfb', ' jb kb  ', 'dsvshvdsbvksbvskjdb  ', 'Unmarried', '', 'bcsdhbvsh@gmail.com', 2147483647, 20);

-- --------------------------------------------------------

--
-- Table structure for table `branch`
--

CREATE TABLE `branch` (
  `b_code` int(10) NOT NULL,
  `cid` int(10) NOT NULL,
  `b_size` int(5) NOT NULL,
  `b_address` varchar(50) NOT NULL,
  `b_state` text NOT NULL,
  `b_city` text NOT NULL,
  `b_pin` int(8) NOT NULL,
  `b_dist` text NOT NULL,
  `b_ifsc` varchar(10) NOT NULL,
  `radio_1` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `collector`
--

CREATE TABLE `collector` (
  `collec_id` int(5) NOT NULL,
  `bcode` int(10) NOT NULL,
  `title` varchar(5) NOT NULL,
  `fullname` text NOT NULL,
  `dob` date NOT NULL,
  `m_status` text NOT NULL,
  `nom_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `uid` int(12) NOT NULL,
  `pan` varchar(10) NOT NULL,
  `mobile` int(10) NOT NULL,
  `doc_type` text NOT NULL,
  `doc_upload` longblob NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `customer_basic`
--

CREATE TABLE `customer_basic` (
  `cid` int(10) NOT NULL,
  `member_id` int(10) NOT NULL,
  `collec_id` int(10) NOT NULL,
  `full_name` text NOT NULL,
  `dob` date NOT NULL,
  `occupation` text NOT NULL,
  `m_status` text NOT NULL,
  `mail` varchar(30) NOT NULL,
  `mob` int(11) NOT NULL,
  `enroll` date NOT NULL,
  `threshold` int(10) NOT NULL,
  `c_time` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `customer_basic`
--

INSERT INTO `customer_basic` (`cid`, `member_id`, `collec_id`, `full_name`, `dob`, `occupation`, `m_status`, `mail`, `mob`, `enroll`, `threshold`, `c_time`) VALUES
(0, 0, 0, '', '0000-00-00', '', '', '', 0, '0000-00-00', 0, '2022-07-06 20:04:59'),
(1, 2, 1234, 'Tirtho', '2012-07-03', 'programmer', 'single', 'tirth0308@gmal.com', 987654321, '2022-07-03', 100, '2022-07-06 20:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `promoter_basic`
--

CREATE TABLE `promoter_basic` (
  `p_id` int(10) NOT NULL,
  `branch` text NOT NULL,
  `date` date NOT NULL,
  `fullname` text NOT NULL,
  `dob` date NOT NULL,
  `occupation` text NOT NULL,
  `m_status` text NOT NULL,
  `sp_name` text NOT NULL,
  `email` varchar(30) NOT NULL,
  `mob` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promoter_basic`
--

INSERT INTO `promoter_basic` (`p_id`, `branch`, `date`, `fullname`, `dob`, `occupation`, `m_status`, `sp_name`, `email`, `mob`) VALUES
(0, '', '0000-00-00', '', '0000-00-00', '', '', '', '', 0),
(12344, 'Kantatoli', '0001-01-31', 'VATSAL SINHA', '0001-08-09', 'd jfb kjfb', 'Unmarried', '', 'bcsdhbvsh@gmail.com', 2147483647);

-- --------------------------------------------------------

--
-- Table structure for table `promoter_kyc`
--

CREATE TABLE `promoter_kyc` (
  `p_id` int(10) NOT NULL,
  `uid` int(12) NOT NULL,
  `pan` varchar(10) NOT NULL,
  `address` varchar(30) NOT NULL,
  `nom_name` text NOT NULL,
  `nom_rel` text NOT NULL,
  `nom_uid` int(12) NOT NULL,
  `nom_pan` varchar(10) NOT NULL,
  `nom_add` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `promoter_kyc`
--

INSERT INTO `promoter_kyc` (`p_id`, `uid`, `pan`, `address`, `nom_name`, `nom_rel`, `nom_uid`, `nom_pan`, `nom_add`) VALUES
(2147483647, 2147483647, '9876543212', 'cbdsjbckjdb k', 'byomesh', 'Father', 2147483647, '8769390330', 'kjbskjvlkv n');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `all_member`
--
ALTER TABLE `all_member`
  ADD PRIMARY KEY (`member_id`);

--
-- Indexes for table `bnl_customer`
--
ALTER TABLE `bnl_customer`
  ADD PRIMARY KEY (`cid`,`acno`),
  ADD UNIQUE KEY `enr_date` (`acno`);

--
-- Indexes for table `branch`
--
ALTER TABLE `branch`
  ADD PRIMARY KEY (`b_code`),
  ADD UNIQUE KEY `cid` (`cid`);

--
-- Indexes for table `collector`
--
ALTER TABLE `collector`
  ADD PRIMARY KEY (`collec_id`),
  ADD KEY `Foreign Key 1` (`bcode`);

--
-- Indexes for table `customer_basic`
--
ALTER TABLE `customer_basic`
  ADD PRIMARY KEY (`cid`),
  ADD KEY `Foreign Key 2` (`member_id`);

--
-- Indexes for table `promoter_basic`
--
ALTER TABLE `promoter_basic`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `promoter_kyc`
--
ALTER TABLE `promoter_kyc`
  ADD PRIMARY KEY (`p_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bnl_customer`
--
ALTER TABLE `bnl_customer`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `branch`
--
ALTER TABLE `branch`
  ADD CONSTRAINT `Foreign Key` FOREIGN KEY (`cid`) REFERENCES `customer_basic` (`cid`);

--
-- Constraints for table `collector`
--
ALTER TABLE `collector`
  ADD CONSTRAINT `Foreign Key 1` FOREIGN KEY (`bcode`) REFERENCES `branch` (`b_code`);

--
-- Constraints for table `customer_basic`
--
ALTER TABLE `customer_basic`
  ADD CONSTRAINT `Foreign Key 2` FOREIGN KEY (`member_id`) REFERENCES `all_member` (`member_id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
