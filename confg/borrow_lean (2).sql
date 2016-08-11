-- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Aug 11, 2016 at 12:00 PM
-- Server version: 10.1.10-MariaDB
-- PHP Version: 5.6.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `borrow_lean`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(100) NOT NULL,
  `email` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `email`, `password`) VALUES
(1, 'harsh@gmail.com', 'aeromaster');

-- --------------------------------------------------------

--
-- Table structure for table `bid_demand`
--

CREATE TABLE `bid_demand` (
  `id` int(10) NOT NULL,
  `borrow_id` int(10) NOT NULL,
  `lend_id` int(10) NOT NULL,
  `bid_price` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bid_demand`
--

INSERT INTO `bid_demand` (`id`, `borrow_id`, `lend_id`, `bid_price`) VALUES
(1, 14, 1, '10.00');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_detail`
--

CREATE TABLE `borrow_detail` (
  `b_w_id` int(10) NOT NULL,
  `borrower_name` varchar(100) NOT NULL,
  `borrower_id` int(100) NOT NULL,
  `pan_no` varchar(10) NOT NULL,
  `account_no` int(100) NOT NULL,
  `bor_demand` int(100) NOT NULL,
  `salary` int(100) NOT NULL,
  `other_income` int(100) NOT NULL,
  `rent_house` int(100) NOT NULL,
  `transport` varchar(5) NOT NULL,
  `food_e` varchar(10) NOT NULL,
  `bank_account` varchar(20) NOT NULL,
  `bank_statement_pdf` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow_detail`
--

INSERT INTO `borrow_detail` (`b_w_id`, `borrower_name`, `borrower_id`, `pan_no`, `account_no`, `bor_demand`, `salary`, `other_income`, `rent_house`, `transport`, `food_e`, `bank_account`, `bank_statement_pdf`) VALUES
(1, 'harsh', 14, 'ABCDE1234A', 2147483647, 1000000, 100000, 100000, 10000, 'four', 'food', '201213223224242', ''),
(2, 'harsh', 15, 'ABCDE1234B', 2147483647, 100000, 100000, 100000, 10000, 'four', '10000', '123455667', ''),
(3, 'aero jain', 34, 'ABDF1234Q ', 128423954, 100000, 10000, 10000, 10000, 'two', '100000', '100000033455', '');

-- --------------------------------------------------------

--
-- Table structure for table `borrow_user`
--

CREATE TABLE `borrow_user` (
  `id` int(10) NOT NULL,
  `user_name` varchar(50) NOT NULL,
  `user_father_name` varchar(50) NOT NULL,
  `user_email` varchar(50) NOT NULL,
  `user_pass` varchar(50) NOT NULL,
  `user_gender` varchar(10) NOT NULL,
  `user_address` text NOT NULL,
  `user_dob` varchar(50) NOT NULL,
  `phn` varchar(50) NOT NULL,
  `user_type` varchar(10) NOT NULL,
  `image` varchar(100) NOT NULL,
  `avt_date` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `borrow_user`
--

INSERT INTO `borrow_user` (`id`, `user_name`, `user_father_name`, `user_email`, `user_pass`, `user_gender`, `user_address`, `user_dob`, `phn`, `user_type`, `image`, `avt_date`) VALUES
(15, 'harsh123', 'Sanjay Kumar Jain', 'aeromaster@gmail.com', 'aeromaster', 'male', 'addresswwwwwwwww', '1994-02-02', '8505907284', '2', '', '0'),
(33, 'harsh jain', 'sanjay', 'ariharsh19194@gmail.com', 'aeromaster', 'male', 'aewwefefe', '1994-02-22', '8505907284', '1\r\n      ', '', ''),
(34, 'aero jain', 'sanjay', 'ariharsh19944@gmail.com', 'aeromaster', 'male', 'qwecklehlew', '2016-08-11', '8505907284', '1\r\n      ', '', ''),
(36, 'udit jain', 'sanjay', 'ariharsh1994@gmail.com', 'aeromaster', 'male', 'qwceqweere', '22016-02-22', '8505907284', '1\r\n      ', '', ''),
(37, 'haer jain', 'harsh jain', 'aeromaster1@gmail.com', 'aeromaster', 'male', 'wdjklnwefgl', '2016-08-04', '8505907284', '1', '', ''),
(38, 'dwd kumar', 's kaum', 'aeromaste1r@gmail.com', 'aero', 'male', 'wdjfw;emf', '1994-01-22', '8505907284', '1', '', '2016-08-11 11:39:02');

-- --------------------------------------------------------

--
-- Table structure for table `educatation_detail`
--

CREATE TABLE `educatation_detail` (
  `id` int(100) NOT NULL,
  `borr_id` int(100) NOT NULL,
  `school_name` varchar(50) NOT NULL,
  `start_year` varchar(50) NOT NULL,
  `end_year` varchar(50) NOT NULL,
  `college_name` varchar(100) NOT NULL,
  `start_year_c` varchar(50) NOT NULL,
  `end_year_c` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educatation_detail`
--

INSERT INTO `educatation_detail` (`id`, `borr_id`, `school_name`, `start_year`, `end_year`, `college_name`, `start_year_c`, `end_year_c`, `degree`) VALUES
(6, 14, 'agra public school ', '2011', '2012', 'ajay kumar garg engineering college ', '2012', '2016', 'B-tech'),
(7, 15, 'agraero', '2011', '2012', 'ajay', '2012', '2016', 'btech'),
(8, 34, 'wdrrct', '2011', '2012', 'ldjew;re', '2012', '2016', 'b-tech');

-- --------------------------------------------------------

--
-- Table structure for table `educatation_detail_lean`
--

CREATE TABLE `educatation_detail_lean` (
  `id` int(100) NOT NULL,
  `lean_id` int(100) NOT NULL,
  `school_name` varchar(20) NOT NULL,
  `year_start` varchar(20) NOT NULL,
  `year_end` varchar(20) NOT NULL,
  `college_name` varchar(20) NOT NULL,
  `start_date_c` varchar(20) NOT NULL,
  `end_date_c` varchar(20) NOT NULL,
  `degree` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educatation_detail_lean`
--

INSERT INTO `educatation_detail_lean` (`id`, `lean_id`, `school_name`, `year_start`, `year_end`, `college_name`, `start_date_c`, `end_date_c`, `degree`) VALUES
(2, 15, 'ajax', '2011', '2012', 'ajaxaaew', '2012', '2016', 'B-tech');

-- --------------------------------------------------------

--
-- Table structure for table `employ_detail`
--

CREATE TABLE `employ_detail` (
  `id` int(100) NOT NULL,
  `borr_id` int(50) NOT NULL,
  `c_name` varchar(100) NOT NULL,
  `pos` varchar(100) NOT NULL,
  `joined_d` varchar(100) NOT NULL,
  `left_d` varchar(100) NOT NULL,
  `c_salary` int(100) NOT NULL,
  `self_e` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employ_detail`
--

INSERT INTO `employ_detail` (`id`, `borr_id`, `c_name`, `pos`, `joined_d`, `left_d`, `c_salary`, `self_e`) VALUES
(5, 14, 'indian opporunity ', 'web developer', '2016', '2016', 100000, '10000'),
(6, 15, 'indian ooprn', 'web developer', '2016', '', 100000, '10000'),
(7, 34, 'ercetr', 'web developer', '2011', '2012', 10000, '1009');

-- --------------------------------------------------------

--
-- Table structure for table `employ_detail_lean`
--

CREATE TABLE `employ_detail_lean` (
  `id` int(100) NOT NULL,
  `leans_id` int(100) NOT NULL,
  `cname` varchar(50) NOT NULL,
  `position` varchar(50) NOT NULL,
  `joined_date` varchar(50) NOT NULL,
  `left_date` varchar(50) NOT NULL,
  `current_salary` int(50) NOT NULL,
  `self_employ` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `employ_detail_lean`
--

INSERT INTO `employ_detail_lean` (`id`, `leans_id`, `cname`, `position`, `joined_date`, `left_date`, `current_salary`, `self_employ`) VALUES
(1, 15, 'india', 'web', '2012', '2013', 10000, 'no');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(100) NOT NULL,
  `user_id` varchar(100) NOT NULL,
  `image` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `lean_user`
--

CREATE TABLE `lean_user` (
  `lean_id` int(10) NOT NULL,
  `lean_name` varchar(50) NOT NULL,
  `lean_email` varchar(50) NOT NULL,
  `lean_address` text NOT NULL,
  `lean_phn` varchar(50) NOT NULL,
  `profile` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lean_user`
--

INSERT INTO `lean_user` (`lean_id`, `lean_name`, `lean_email`, `lean_address`, `lean_phn`, `profile`) VALUES
(1, 'harsh jain', 'ariharsh1994@gmail.com', 'laxmi nagar j-extn ', '8505907284', '');

-- --------------------------------------------------------

--
-- Table structure for table `lend_detail`
--

CREATE TABLE `lend_detail` (
  `lend_d_id` int(10) NOT NULL,
  `lend_user` varchar(100) NOT NULL,
  `lend_id` int(10) NOT NULL,
  `lend_pan` varchar(100) NOT NULL,
  `lend_account` int(100) NOT NULL,
  `lend_wallet` int(100) NOT NULL,
  `home_ownership` varchar(50) NOT NULL,
  `salary` int(100) NOT NULL,
  `other_income` int(50) NOT NULL,
  `rent_on_house` int(50) NOT NULL,
  `vehl` varchar(50) NOT NULL,
  `food` varchar(50) NOT NULL,
  `primary_account` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `lend_detail`
--

INSERT INTO `lend_detail` (`lend_d_id`, `lend_user`, `lend_id`, `lend_pan`, `lend_account`, `lend_wallet`, `home_ownership`, `salary`, `other_income`, `rent_on_house`, `vehl`, `food`, `primary_account`) VALUES
(2, 'harsh', 14, '12890455', 234455678, 100000, '', 0, 0, 0, '', '', ''),
(15, 'harsh123', 15, '', 2147483647, 100000, 'Rented', 10000, 10000, 10000, 'two', '10000', '1000000000');

-- --------------------------------------------------------

--
-- Table structure for table `request`
--

CREATE TABLE `request` (
  `id` int(10) NOT NULL,
  `user_id` int(10) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `user_img` varchar(100) NOT NULL,
  `active_request` int(10) NOT NULL DEFAULT '0',
  `borrow_amount` int(100) NOT NULL,
  `detail_user` varchar(100) NOT NULL,
  `rating` int(10) NOT NULL,
  `type` varchar(10) NOT NULL,
  `acvt_date` varchar(50) NOT NULL,
  `add_time` int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `request`
--

INSERT INTO `request` (`id`, `user_id`, `user_name`, `user_img`, `active_request`, `borrow_amount`, `detail_user`, `rating`, `type`, `acvt_date`, `add_time`) VALUES
(94, 15, 'harsh123', '', 1, 100000, 'addresswwwwwwwww', 6, 'lend', '2016-08-02 17:24:27', 0),
(95, 34, 'aero jain', '', 1, 100000, 'qwecklehlew', 7, 'borr', '2016-08-02 17:28:35', 0),
(97, 33, 'harsh jain', '', 1, 0, 'aewwefefe', 5, 'borr', '2016-08-03 16:00:32', 1470317701),
(98, 14, 'harsh', '', 1, 1000000, 'dcWRAWERW', 0, 'borr', '2016-08-04 14:43:26', 1470317701);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bid_demand`
--
ALTER TABLE `bid_demand`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `borrow_detail`
--
ALTER TABLE `borrow_detail`
  ADD PRIMARY KEY (`b_w_id`);

--
-- Indexes for table `borrow_user`
--
ALTER TABLE `borrow_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educatation_detail`
--
ALTER TABLE `educatation_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `educatation_detail_lean`
--
ALTER TABLE `educatation_detail_lean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employ_detail`
--
ALTER TABLE `employ_detail`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employ_detail_lean`
--
ALTER TABLE `employ_detail_lean`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `lean_user`
--
ALTER TABLE `lean_user`
  ADD PRIMARY KEY (`lean_id`);

--
-- Indexes for table `lend_detail`
--
ALTER TABLE `lend_detail`
  ADD PRIMARY KEY (`lend_d_id`);

--
-- Indexes for table `request`
--
ALTER TABLE `request`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `bid_demand`
--
ALTER TABLE `bid_demand`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `borrow_detail`
--
ALTER TABLE `borrow_detail`
  MODIFY `b_w_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `borrow_user`
--
ALTER TABLE `borrow_user`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;
--
-- AUTO_INCREMENT for table `educatation_detail`
--
ALTER TABLE `educatation_detail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `educatation_detail_lean`
--
ALTER TABLE `educatation_detail_lean`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `employ_detail`
--
ALTER TABLE `employ_detail`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT for table `employ_detail_lean`
--
ALTER TABLE `employ_detail_lean`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(100) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `lean_user`
--
ALTER TABLE `lean_user`
  MODIFY `lean_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `lend_detail`
--
ALTER TABLE `lend_detail`
  MODIFY `lend_d_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `request`
--
ALTER TABLE `request`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=99;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
