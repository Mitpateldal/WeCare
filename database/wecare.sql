-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 31, 2019 at 09:27 AM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.1.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wecare`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `a_id` int(11) NOT NULL,
  `a_name` varchar(30) NOT NULL,
  `a_email` varchar(30) NOT NULL,
  `a_mobile` varchar(12) NOT NULL,
  `a_pass` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`a_id`, `a_name`, `a_email`, `a_mobile`, `a_pass`) VALUES
(1, 'Mit', 'mit0302@gmail.com', '7698252587', '112233');

-- --------------------------------------------------------

--
-- Table structure for table `booking`
--

CREATE TABLE `booking` (
  `b_id` int(11) NOT NULL,
  `b_type` varchar(30) NOT NULL,
  `b_date` datetime NOT NULL,
  `u_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking`
--

INSERT INTO `booking` (`b_id`, `b_type`, `b_date`, `u_id`, `sp_id`) VALUES
(1, 'homecare_cleaning', '2019-08-13 00:00:00', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `f_id` int(11) NOT NULL,
  `f_date` date NOT NULL,
  `u_id` int(11) NOT NULL,
  `sp_id` int(11) NOT NULL,
  `f_comment` varchar(200) NOT NULL,
  `f_rating` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`f_id`, `f_date`, `u_id`, `sp_id`, `f_comment`, `f_rating`) VALUES
(1, '2019-08-06', 1, 1, 'no comment', 8);

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `p_id` int(11) NOT NULL,
  `p_date` datetime NOT NULL,
  `u_id` int(11) NOT NULL,
  `sp_type` varchar(30) NOT NULL,
  `p_status` varchar(30) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`p_id`, `p_date`, `u_id`, `sp_type`, `p_status`) VALUES
(1, '2019-08-06 00:00:00', 1, 'homecare_cleaning', 'completed');

-- --------------------------------------------------------

--
-- Table structure for table `servicepersonal`
--

CREATE TABLE `servicepersonal` (
  `sp_id` int(11) NOT NULL,
  `sp_name` varchar(30) NOT NULL,
  `sp_mobile` varchar(12) NOT NULL,
  `sp_email` varchar(30) NOT NULL,
  `sp_type` varchar(30) NOT NULL,
  `sp_password` varchar(20) NOT NULL,
  `sp_profile` varchar(350) NOT NULL,
  `sp_city` varchar(35) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `servicepersonal`
--

INSERT INTO `servicepersonal` (`sp_id`, `sp_name`, `sp_mobile`, `sp_email`, `sp_type`, `sp_password`, `sp_profile`, `sp_city`) VALUES
(1, 'Meet', '2233445566', 'meet@gmail.com', 'homecare_cleaniung', '112233', 'abc', 'vadodara');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE `user` (
  `u_id` int(11) NOT NULL,
  `u_name` varchar(100) NOT NULL,
  `u_address` varchar(200) NOT NULL,
  `u_pass` varchar(20) NOT NULL,
  `u_email` varchar(35) NOT NULL,
  `u_mobile` varchar(12) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`u_id`, `u_name`, `u_address`, `u_pass`, `u_email`, `u_mobile`) VALUES
(1, 'Pratik', 'vadodara', '123456', 'pratik@gmail.com', '1122334455');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`a_id`);

--
-- Indexes for table `booking`
--
ALTER TABLE `booking`
  ADD PRIMARY KEY (`b_id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`f_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `servicepersonal`
--
ALTER TABLE `servicepersonal`
  ADD PRIMARY KEY (`sp_id`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
  ADD PRIMARY KEY (`u_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `a_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `booking`
--
ALTER TABLE `booking`
  MODIFY `b_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `f_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `p_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `servicepersonal`
--
ALTER TABLE `servicepersonal`
  MODIFY `sp_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
  MODIFY `u_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
