-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Feb 07, 2015 at 04:45 PM
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
(32, 'mind', 'Mindcraft', 'www.midcraft.com', '12345', '1234', 'IT', '2010', 'mumbai', 'Vivek', 'vivek@xyz.com', '123456');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=33 ;

--
-- Dumping data for table `comp_login`
--

INSERT INTO `comp_login` (`cid`, `username`, `password`, `companyname`, `approval`, `website`) VALUES
(32, 'mind', '*1A256E4E2FE95B8BF7349C168991EA8035D1359B', 'Mindcraft', 'yes', 'www.midcraft.com');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `jid` int(255) NOT NULL AUTO_INCREMENT,
  `compname` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `domain` varchar(255) NOT NULL,
  `job_location` varchar(255) NOT NULL,
  `job_role` varchar(255) NOT NULL,
  `salary` varchar(255) NOT NULL,
  `ssc` varchar(255) NOT NULL,
  `hsc` varchar(255) NOT NULL,
  `diploma_agg` varchar(255) NOT NULL,
  `deg_agg` varchar(255) NOT NULL,
  `venue` varchar(255) NOT NULL,
  `approval` varchar(255) NOT NULL,
  PRIMARY KEY (`jid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jid`, `compname`, `department`, `domain`, `job_location`, `job_role`, `salary`, `ssc`, `hsc`, `diploma_agg`, `deg_agg`, `venue`, `approval`) VALUES
(1, 'wipro', 'co', 'PHP', 'Bangalore', 'Develeoper', '30000', '50', '50', '50', '50', 'KTC', 'yes');

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

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `title`, `date`, `description`, `venue`, `contact`, `email`) VALUES
(0, 'testing', '2015-02-05', '', '', '', 'hihaisdh'),
(0, 'asdhash', '2015-02-20', 'asdadasd', 'KTC', '7890', 'talktoarmash@gmail.com');

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
(45, 'saima', 'Haji Saima', '12/1/1996', 'female', 'wadala', 'Student', 'Kalsekar techincal Campus', 'Mumbai university', 'computer', '2014-2015', 74, 80, 72, 84, 0, 86, 'HTML,PHP', 'Placement Portal', ''),
(46, 'huma', '', '', '', '', '', '', '', 'computer', '', 0, 0, 0, 0, 0, 0, '.net', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=47 ;

--
-- Dumping data for table `stud_login`
--

INSERT INTO `stud_login` (`sid`, `username`, `email`, `password`, `approval`) VALUES
(45, 'saima', 'hajisaima9@gmail.com', '*1A256E4E2FE95B8BF7349C168991EA8035D1359B', 'yes'),
(46, 'huma', 'huma@gmail.com', '*0F03B89645CDFC99CC2E4FC5CBA3CDD5E15AA746', '');

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

-- --------------------------------------------------------

--
-- Table structure for table `tpo_info`
--

CREATE TABLE IF NOT EXISTS `tpo_info` (
  `name` varchar(255) DEFAULT NULL,
  `degree` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `mobile` varchar(255) DEFAULT NULL,
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=2 ;

--
-- Dumping data for table `tpo_info`
--

INSERT INTO `tpo_info` (`name`, `degree`, `email`, `mobile`, `tid`) VALUES
('P.S.Lokhande', 'PH.D ', 'pslokhande@gmail.com', '1234566', 1);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
