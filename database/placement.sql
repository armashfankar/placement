-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Jan 20, 2015 at 09:47 PM
-- Server version: 5.5.38-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `placement`
--
CREATE DATABASE IF NOT EXISTS `placement` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `placement`;

-- --------------------------------------------------------

--
-- Table structure for table `comp_info`
--

CREATE TABLE IF NOT EXISTS `comp_info` (
  `cid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `companyname` varchar(255) NOT NULL,
  `website` varchar(255) NOT NULL,
  `landline` varchar(255) NOT NULL,
  `fax` varchar(255) NOT NULL,
  `career` varchar(255) NOT NULL,
  `estb_year` varchar(2552) NOT NULL,
  `address` varchar(255) NOT NULL,
  `hrname` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `comp_info`
--

INSERT INTO `comp_info` (`cid`, `username`, `companyname`, `website`, `landline`, `fax`, `career`, `estb_year`, `address`, `hrname`, `email`, `mobile`) VALUES
(2, 'fitrangi', 'Fitrangi ', 'www.fitrangi.com', '28198981', '2130889', 'Web Development', '2014', 'goregaon', 'armash', 'talktoarmash@gmail.com', '9967031001'),
(4, 'mind', 'mind', 'mind.@aa.com', '222', '222', 'IT', '999', 'B/02,RAHAT APT.,BEHIND SHAHEEN HOSPITAL,KAUSA', 'armash', 'armash.fankar@yahoo.com', '9967031001');

-- --------------------------------------------------------

--
-- Table structure for table `comp_login`
--

CREATE TABLE IF NOT EXISTS `comp_login` (
  `cid` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `companyname` varchar(255) DEFAULT NULL,
  `approval` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`cid`),
  UNIQUE KEY `companyname` (`companyname`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `comp_login`
--

INSERT INTO `comp_login` (`cid`, `username`, `password`, `companyname`, `approval`, `website`) VALUES
(2, 'fitrangi', 'fitrangi', 'fitrangi', 'yes', 'www.fitrangi.com'),
(4, 'mind', '*D982DF5FF1FC3DAA682BCB5A66BF3FC205D50115', 'mindcraft', 'yes', 'www.info.com');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsid` int(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `description` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `contact` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student_info`
--

CREATE TABLE IF NOT EXISTS `student_info` (
  `sid` int(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `fullname` varchar(255) NOT NULL,
  `dob` varchar(255) NOT NULL,
  `gender` varchar(255) NOT NULL,
  `address` varchar(255) NOT NULL,
  `about_you` varchar(255) NOT NULL,
  `institute` varchar(255) NOT NULL,
  `university` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `batch` varchar(255) NOT NULL,
  `deg_sem7` int(255) NOT NULL,
  `deg_sem8` int(255) NOT NULL,
  `deg_agg` int(255) NOT NULL,
  `diploma_agg` int(255) NOT NULL,
  `hsc` int(255) NOT NULL,
  `ssc` int(255) NOT NULL,
  `key_skills` varchar(255) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `approval` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`sid`, `username`, `fullname`, `dob`, `gender`, `address`, `about_you`, `institute`, `university`, `department`, `batch`, `deg_sem7`, `deg_sem8`, `deg_agg`, `diploma_agg`, `hsc`, `ssc`, `key_skills`, `project_title`, `approval`) VALUES
(5, 'nabeel', 'hawa nabeel', '01/01/1993', 'male', 'B/02,RAHAT APT.BEHIND SHAHEEN HOSPITAL,KAUSA,MUMBRA', 'TRAVELLING', 'KALSEKAR TECHNICAL CAMPUS', 'MUMBAI UNIVERSITY', 'COMPUTER ENGINEERING', 'JOB SERACH ENGINE', 68, 77, 67, 68, 0, 77, 'PHP,MYSQL,HTML', 'JOB SERACH ENGINE', ''),
(8, 'armash', 'Armash Aslam Fankar', '14/09/1992', 'male', 'B/02,RAHAT APT.BEHIND SHAHEEN HOSPITAL,KAUSA,MUMBRA', 'TRAVELLING', 'KALSEKAR TECHNICAL CAMPUS', 'MUMBAI UNIVERSITY', 'COMPUTER ENGINEERING', '2014-2015', 60, 59, 63, 67, 0, 77, 'PHP,MYSQL,HTML', 'JOB SERACH ENGINE', ''),
(9, 'saima', 'saima', '14/09/1992', 'female', 'wadala', 'TRAVELLING', 'KALSEKAR TECHNICAL CAMPUS', 'MUMBAI UNIVERSITY', 'COMPUTER ENGINEERING', '2014-2015', 78, 87, 78, 77, 87, 78, 'PHP,MYSQL,HTML', 'JOB SERACH ENGINE', '');

-- --------------------------------------------------------

--
-- Table structure for table `stud_login`
--

CREATE TABLE IF NOT EXISTS `stud_login` (
  `sid` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `approval` varchar(255) NOT NULL,
  PRIMARY KEY (`sid`),
  UNIQUE KEY `email` (`email`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `stud_login`
--

INSERT INTO `stud_login` (`sid`, `username`, `email`, `password`, `approval`) VALUES
(15, 'armash', 'talktoarmash@gmail.com', '*E452F6CB9075767B74485A3D137295EE647F823C', '');

-- --------------------------------------------------------

--
-- Table structure for table `tpo`
--

CREATE TABLE IF NOT EXISTS `tpo` (
  `tid` int(233) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tpo`
--

INSERT INTO `tpo` (`tid`, `username`, `password`) VALUES
(1, 'tpo', 'tpo');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
