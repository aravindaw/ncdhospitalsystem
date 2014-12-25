-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Dec 25, 2014 at 06:51 PM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `patientdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `channel_his`
--

CREATE TABLE IF NOT EXISTS `channel_his` (
`cln_no` int(4) NOT NULL,
  `patientID` int(11) NOT NULL,
  `user_id` int(4) NOT NULL,
  `chan_date` date NOT NULL,
  `weight` int(11) NOT NULL,
  `blood_su` int(11) NOT NULL,
  `blood_pre` int(11) NOT NULL,
  `doctor_note` varchar(1000) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=7 ;

--
-- Dumping data for table `channel_his`
--

INSERT INTO `channel_his` (`cln_no`, `patientID`, `user_id`, `chan_date`, `weight`, `blood_su`, `blood_pre`, `doctor_note`) VALUES
(5, 10001, 1001, '2014-06-21', 65, 79, 101, 'kejhwkjfh wejkwherwjehr werwer \r\nerwerwekrhwjer w\r\nwerwerwkjehr \r\nerwer ewrwerwer\r\nwerwerwer'),
(3, 10019, 1003, '2014-06-03', 90, 110, 150, 'eeewewewewew'),
(4, 10020, 1003, '2014-06-03', 90, 110, 150, 'qqqqqqqqqq'),
(6, 10020, 1001, '2014-06-20', 77, 30, 90, 'test add\r\ntest add2\r\ntest add3\r\ntest add4');

-- --------------------------------------------------------

--
-- Table structure for table `patient_attendance12`
--

CREATE TABLE IF NOT EXISTS `patient_attendance12` (
`id` int(11) NOT NULL,
  `yymmdd` varchar(30) NOT NULL,
  `patient_count` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `patient_attendance12`
--

INSERT INTO `patient_attendance12` (`id`, `yymmdd`, `patient_count`) VALUES
(1, '01,01', '1'),
(2, '01,02', '3'),
(3, '01,03', '3.5'),
(4, '01,04', '3.1'),
(5, '01,05', '2'),
(6, '01,06', '2.5'),
(7, '01,07', '1.2'),
(8, '01,08', '1'),
(9, '01,09', '0.9'),
(10, '01,10', '0.3'),
(11, '01,11', '0.9'),
(12, '01,12', '2');

-- --------------------------------------------------------

--
-- Table structure for table `patient_attendance13`
--

CREATE TABLE IF NOT EXISTS `patient_attendance13` (
`id` int(11) NOT NULL,
  `yymmdd` varchar(30) NOT NULL,
  `patient_count` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=13 ;

--
-- Dumping data for table `patient_attendance13`
--

INSERT INTO `patient_attendance13` (`id`, `yymmdd`, `patient_count`) VALUES
(1, '01,01', '1'),
(2, '01,02', '3.3'),
(3, '01,03', '3.4'),
(4, '01,04', '3.5'),
(5, '01,05', '2.9'),
(6, '01,06', '2.1'),
(7, '01,07', '1'),
(8, '01,08', '1.5'),
(9, '01,09', '1'),
(10, '01,10', '1.3'),
(11, '01,11', '1.7'),
(12, '01,12', '2.7');

-- --------------------------------------------------------

--
-- Table structure for table `patient_attendance14`
--

CREATE TABLE IF NOT EXISTS `patient_attendance14` (
`id` int(11) NOT NULL,
  `yymmdd` varchar(30) NOT NULL,
  `patient_count` varchar(30) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `patient_attendance14`
--

INSERT INTO `patient_attendance14` (`id`, `yymmdd`, `patient_count`) VALUES
(1, '01,01', '1');

-- --------------------------------------------------------

--
-- Table structure for table `patient_data`
--

CREATE TABLE IF NOT EXISTS `patient_data` (
`patientID` int(100) NOT NULL,
  `nic` varchar(11) NOT NULL,
  `fname` char(20) NOT NULL,
  `lname` char(20) NOT NULL,
  `dob` date NOT NULL,
  `address` varchar(100) NOT NULL,
  `blood_g` varchar(3) NOT NULL,
  `user_id` varchar(11) NOT NULL
) ENGINE=MyISAM  DEFAULT CHARSET=latin1 AUTO_INCREMENT=10026 ;

--
-- Dumping data for table `patient_data`
--

INSERT INTO `patient_data` (`patientID`, `nic`, `fname`, `lname`, `dob`, `address`, `blood_g`, `user_id`) VALUES
(10022, '756545676v', 'abc', '123', '2001-11-14', 'test test', 'AB+', '1008'),
(10012, '769887876v', 'Amila', 'Weerasekara', '1993-10-24', 'dwefwefwefwef', 'AB+', '1003'),
(10013, '986787870v', 'aaaaaaaaaaaaa', 'aaaaaaaaaaa', '2007-01-01', 'sdssdssdsdsdsds', 'AB+', '1003'),
(10017, '976787816v', 'qqqqqqqq', 'qqqqqqq', '2014-06-05', 'sdsdvsssdsdsdfsdfsdfsdfsdf', 'A+', '1003'),
(10018, '906787878v', 'wwwwwwwwww', 'wwwwwwwwww', '2014-06-04', 'sdsdsdsdfsdfsdfsdfsdfsdfs', 'O+', '1003'),
(10024, '11111', 'aaaaa', 'vvvvvv', '2003-11-03', 'test 3333', 'AB+', '0'),
(10023, '73', 'test2', 'test3zzzzzzzz', '2014-11-01', 'test ', 'B+', '0'),
(10021, '232342', '234234', '23423', '2014-11-04', 'testtttt t tausdjhd ', 'AB+', '1007');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `channel_his`
--
ALTER TABLE `channel_his`
 ADD PRIMARY KEY (`cln_no`);

--
-- Indexes for table `patient_attendance12`
--
ALTER TABLE `patient_attendance12`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_attendance13`
--
ALTER TABLE `patient_attendance13`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_attendance14`
--
ALTER TABLE `patient_attendance14`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `patient_data`
--
ALTER TABLE `patient_data`
 ADD PRIMARY KEY (`patientID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `channel_his`
--
ALTER TABLE `channel_his`
MODIFY `cln_no` int(4) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `patient_attendance12`
--
ALTER TABLE `patient_attendance12`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `patient_attendance13`
--
ALTER TABLE `patient_attendance13`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `patient_attendance14`
--
ALTER TABLE `patient_attendance14`
MODIFY `id` int(11) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT for table `patient_data`
--
ALTER TABLE `patient_data`
MODIFY `patientID` int(100) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=10026;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
