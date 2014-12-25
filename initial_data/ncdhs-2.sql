-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2014 at 06:50 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `ncdhs`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE IF NOT EXISTS `tbl_role` (
  `role_id` int(11) NOT NULL,
  `role_type` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`role_id`, `role_type`, `remarks`) VALUES
(1, 'admin', 'all access'),
(2, 'Doctor', 'viewing access'),
(3, 'user', '');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_user`
--

CREATE TABLE IF NOT EXISTS `tbl_user` (
`user_id` int(11) NOT NULL,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `nic` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=1009 ;

--
-- Dumping data for table `tbl_user`
--

INSERT INTO `tbl_user` (`user_id`, `user_name`, `password`, `role_id`, `fname`, `lname`, `dob`, `nic`, `email`, `phone`, `pic`) VALUES
(1001, 'admin', 'admin', 1, 'Admin', 'Admin', '2013-09-18', '88888888v', 'admin@ncd.com', '77888888778', '1403251344_destination.png'),
(1002, 'doctor', 'doctor', 2, 'doctor', 'doctor', '2013-08-15', '8564964864v', 'admin@booksales.com', 'ddeeff', '1403251359_luggage_tag.png'),
(1003, 'user', 'user', 3, 'user', 'user', '2013-08-15', '4564564565v', 'gfdfg@klsdjajm', 'sdfsdfsfsdf', '1403261897_christmas_pudding.png'),
(1004, 'iiiiiii', 'ooooo', 1, 'ttttttt', 'Weerasekara', '2013-10-12', '34534533v', 'amilag@mail.com', '34573453453', '1403261910_departures.png'),
(1005, 'iiiiiii', 'ooooo', 1, 'aaaaaaaaaa', 'Weerasekara', '2014-01-06', '34534533v', 'amilag@mail.com', '34573453453', '1403261931_spa_and_wellness.png'),
(1006, 'user2', 'user2', 3, 'user2', 'user2', '2013-08-15', '4564533565v', 'gfdfg@klsdjajm', 'sdfsdfsfsdf', '1403261897_christmas_pudding.png'),
(1007, 'user3', 'user3', 3, 'user3', 'user3', '2013-08-15', '4564588565v', 'gfdfg@klsdjajm', 'sdfsdfsfsdf', '1403261897_christmas_pudding.png'),
(1008, 'user5', 'user5', 3, 'user5', 'user5', '2013-08-15', '4564564585v', 'gfdfg@klsdjajm', 'sdfsdfsfsdf', '1403261897_christmas_pudding.png');

-- --------------------------------------------------------

--
-- Table structure for table `work_schedule`
--

CREATE TABLE IF NOT EXISTS `work_schedule` (
`clinic_id` int(11) NOT NULL,
  `user_id` int(40) NOT NULL,
  `schedule` varchar(120) NOT NULL,
  `date_time` date NOT NULL,
  `attendance` char(6) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=8 ;

--
-- Dumping data for table `work_schedule`
--

INSERT INTO `work_schedule` (`clinic_id`, `user_id`, `schedule`, `date_time`, `attendance`) VALUES
(1, 1001, 'Avissawella Hospital', '2014-06-02', 'Yes'),
(2, 1002, 'Hanwella Central college', '2014-06-05', 'No'),
(3, 1007, 'testtest2', '1111-00-00', ''),
(4, 1003, 'avissawella town hall ', '2014-06-22', 'No'),
(5, 1001, 'huhuhuhhu', '0000-00-00', 'yes'),
(6, 1001, '777777888887777788877778887', '2014-06-18', 'yes'),
(7, 1004, 'padukka primary school', '2014-06-04', 'Yes');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbl_user`
--
ALTER TABLE `tbl_user`
 ADD PRIMARY KEY (`user_id`);

--
-- Indexes for table `work_schedule`
--
ALTER TABLE `work_schedule`
 ADD PRIMARY KEY (`clinic_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbl_user`
--
ALTER TABLE `tbl_user`
MODIFY `user_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=1009;
--
-- AUTO_INCREMENT for table `work_schedule`
--
ALTER TABLE `work_schedule`
MODIFY `clinic_id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=8;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
