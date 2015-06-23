-- phpMyAdmin SQL Dump
-- version 4.0.10deb1
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Apr 19, 2015 at 10:24 AM
-- Server version: 5.5.41-0ubuntu0.14.04.1
-- PHP Version: 5.5.9-1ubuntu4.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `placement`
--

-- --------------------------------------------------------

--
-- Table structure for table `applied_stud`
--

CREATE TABLE IF NOT EXISTS `applied_stud` (
  `aid` int(255) NOT NULL AUTO_INCREMENT,
  `jid` int(233) DEFAULT NULL,
  `sid` int(255) DEFAULT NULL,
  `companyname` varchar(255) DEFAULT NULL,
  `fullname` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`aid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `applied_stud`
--

INSERT INTO `applied_stud` (`aid`, `jid`, `sid`, `companyname`, `fullname`) VALUES
(11, 4, 45, NULL, NULL),
(12, 4, 54, NULL, NULL),
(13, 1, 45, NULL, NULL),
(14, 1, 55, NULL, NULL),
(15, 4, 55, NULL, NULL);

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
(32, 'mind', 'Mindcraft', 'www.midcraft.com', '12345', '1234', 'IT', '2010', 'mumbai', 'Vivek', 'vivek_mind@gmail.com', '123456');

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
-- Table structure for table `department`
--

CREATE TABLE IF NOT EXISTS `department` (
  `did` int(255) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL,
  `department` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`did`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `department`
--

INSERT INTO `department` (`did`, `username`, `password`, `department`) VALUES
(1, 'tabrez', 'tabrez', 'computer'),
(2, 'kaleem', 'kaleem', 'electronics&tele');

-- --------------------------------------------------------

--
-- Table structure for table `job`
--

CREATE TABLE IF NOT EXISTS `job` (
  `jid` int(255) NOT NULL AUTO_INCREMENT,
  `companyname` varchar(255) NOT NULL,
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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `job`
--

INSERT INTO `job` (`jid`, `companyname`, `department`, `domain`, `job_location`, `job_role`, `salary`, `ssc`, `hsc`, `diploma_agg`, `deg_agg`, `venue`, `approval`) VALUES
(2, 'Mindcraft', 'co', 'PHP', 'Mumbai', 'Develeoper', '50000', '60', '50', '70', '70', 'kalsekar', 'yes'),
(4, 'Mindcraft', 'computer', 'python', 'Mumbai', 'Develeoper', '30000', '22', '22', '22', '63', 'kalsekar', 'yes');

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE IF NOT EXISTS `news` (
  `newsid` int(255) NOT NULL AUTO_INCREMENT,
  `title` varchar(233) DEFAULT NULL,
  `date` date DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `venue` varchar(255) DEFAULT NULL,
  `last_date` date NOT NULL,
  `contact` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`newsid`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`newsid`, `title`, `date`, `description`, `venue`, `last_date`, `contact`, `email`) VALUES
(1, 'Microland', '2015-12-02', 'Microland Company is coming for pool campus placment in our college please start preparing', 'AIKTC', '2015-12-15', '9967031001', 'vivek_mind@gmail.com'),
(2, 'Project Presentation', '2015-04-19', 'Final Year Project Presentation', 'Seminar Hall,Kalsekar Technical Campus', '0005-04-17', '1234567791', 'placementcell00@gmail.com'),
(3, 'Campus Placement ', '0005-05-04', 'Campus Placement of Syntell Infotech Pvt. Ltd.\r\nNo Criteria. \r\nFirst Round: Apti\r\nSecond Round: GD\r\nThird Round : Technical Interview\r\nFinal Round : HR Interview (PI)', 'Kalsekar Technical Campus', '2015-04-29', '1234567791', 'placementcell00@gmail.com');

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
  `deg_sem1` int(255) NOT NULL,
  `deg_sem2` int(255) NOT NULL,
  `deg_sem3` int(255) NOT NULL,
  `deg_sem4` int(255) NOT NULL,
  `deg_sem5` int(255) NOT NULL,
  `deg_sem6` int(255) NOT NULL,
  `deg_sem7` int(255) NOT NULL,
  `deg_sem8` int(255) NOT NULL,
  `deg_agg` int(255) NOT NULL,
  `diploma_agg` int(255) NOT NULL,
  `kt` int(255) NOT NULL,
  `hsc` int(255) NOT NULL,
  `ssc` int(255) NOT NULL,
  `key_skills` varchar(255) NOT NULL,
  `project_title` varchar(255) NOT NULL,
  `company` varchar(255) NOT NULL,
  `job_role` varchar(255) NOT NULL,
  `salary` int(255) NOT NULL,
  `approval` varchar(255) NOT NULL,
  `placed` varchar(255) NOT NULL,
  `filename` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_info`
--

INSERT INTO `student_info` (`sid`, `username`, `fullname`, `dob`, `gender`, `address`, `about_you`, `institute`, `university`, `department`, `batch`, `deg_sem1`, `deg_sem2`, `deg_sem3`, `deg_sem4`, `deg_sem5`, `deg_sem6`, `deg_sem7`, `deg_sem8`, `deg_agg`, `diploma_agg`, `kt`, `hsc`, `ssc`, `key_skills`, `project_title`, `company`, `job_role`, `salary`, `approval`, `placed`, `filename`) VALUES
(45, 'saima', 'Haji Saima', '2015-02-10', '', 'wadala', 'Student', 'Kalsekar techincal Campus', 'Mumbai university', 'computer', '2014-2015', 60, 60, 60, 60, 60, 60, 74, 80, 72, 84, 0, 0, 86, 'php', 'Placement Portal', 'Persistent', 'Java Developer', 40000, '', 'yes', 'ccna commands.pdf'),
(55, 'nida', 'khan nida', '12/1/1996', 'female', 'mumbai', 'Student', 'Kalsekar techincal Campus', 'Mumbai university', 'computer', '2014-2015', 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 0, 0, 80, 'networking', 'Placement Portal', '', '', 0, '', '', ''),
(56, 'armash', 'Armash Aslam Fankar', '2015-03-10', 'male', 'B/02,RAHAT APT.BEHIND SHAHEEN HOSPITAL,KAUSA,MUMBRA', 'TRAVELLING', 'KALSEKAR TECHNICAL CAMPUS', 'MUMBAI UNIVERSITY', 'computer', '2014-2015', 70, 70, 70, 70, 70, 70, 70, 70, 70, 70, 0, 70, 70, 'python', 'JOB SERACH ENGINE', 'Aptitube.com', 'Founder & Developer ', 40000, '', 'yes', ''),
(66, 'patelarfat', 'Patel Arfat Zubair', '22-07-1993', 'male', 'A/01, Al-Aqsa Apt, Muslim naka, Old-panvel', 'reading', 'Kalsekar technical campus', 'mumbai university', 'computer', '2015', 0, 0, 60, 66, 63, 70, 75, 0, 67, 67, 0, 0, 74, 'php', 'path navigator using ar for smart devices', '', '', 0, '', '', ''),
(71, 'aquibkazi', 'Aquib Javed Kazi', '06/11/1993', 'male', 'B/303,Wafa Tower,Sharifa Road,Amrut Nagar,Mumbra,Thane-400612.', 'bodybuilding', 'KALSEKAR TECHNICAL CAMPUS', 'MUMBAI UNIVERSITY', 'computer', '2015', 0, 0, 52, 52, 58, 59, 71, 0, 58, 68, 0, 0, 54, 'networking', 'PATH NAVIGATOR USING AUGMENTED REALITY FOR SMART DEVICES', '', '', 0, '', '', ''),
(65, 'Khan Siddiqa', 'Khan Siddiqa', '1993-12-27', 'female', 'Mumbra', 'cooking', 'A.I.K.T.c', 'Mumbai', 'computer', '2014-15', 0, 0, 57, 63, 62, 65, 72, 0, 64, 80, 0, 0, 79, 'database', 'Image segmentation for MRI brain tumor', '', '', 0, '', '', ''),
(70, 'Firoz', 'Firoz Iqbal Memon', '20/9/1993', 'male', '240/D, Rabia Bldg., Adam Mistry Lane, Room No. 15, Parel, Mumbai - 400012', 'Listening Music', 'AIKTC', 'Mumbai University', 'computer', '2015', 55, 62, 62, 63, 62, 65, 73, 0, 63, 0, 0, 66, 79, 'java', 'Efficient Instant Messaging in Android', 'First Economy', 'Java Developer', 20000, '', 'yes', ''),
(69, 'nabeel', 'Rangari Nabeel Nasir', '05/11/1993', 'male', '39, Bunder Mohalla Bhiwandi Dist - Thane 421302', 'cricket', 'AIKTC', 'Mumbai University', 'computer', '2015', 0, 0, 49, 49, 53, 54, 60, 0, 53, 54, 0, 0, 65, 'java', 'Smart E-Billing', '', '', 0, '', '', ''),
(72, 'musab', 'Jummal Musab Mohd.Munir', '1994-01-01', 'male', 'Mumbra', 'Travelling', 'kalsekar technical campus', 'Mumbai University', 'computer', '2014-2015', 0, 0, 55, 55, 59, 60, 61, 70, 64, 64, 0, 0, 75, 'php', 'Adventure Sports Meetup In India', '', '', 0, '', '', ''),
(73, 'aaraf', 'Murade Aaraf', '1993-01-04', 'male', 'Rabodi,Thane', 'Internet Surfing', 'kalsekar technical campus', 'Mumbai University', 'computer', '2014-2015', 0, 0, 54, 55, 59, 60, 60, 72, 60, 69, 0, 0, 79, 'java', 'Adventure Sports Meetup In India', '', '', 0, '', '', ''),
(74, 'alam', 'Shaikh Alam', '1993-03-12', 'male', 'Kurla,Mumbai', 'Rapping', 'kalsekar technical campus', 'Mumbai University', 'computer', '2014-2015', 50, 60, 66, 54, 59, 57, 63, 60, 62, 0, 0, 69, 75, 'php', 'Location Based Reminder', '', '', 0, '', '', ''),
(75, 'huma', 'Momin Huma', '1992-03-12', 'female', 'Chembur,Mumbai', 'Reading Books', 'kalsekar technical campus', 'Mumbai University', 'computer', '2014-2015', 0, 0, 55, 55, 59, 58, 60, 64, 60, 68, 0, 0, 72, 'database', 'Laser Projector', '', '', 0, '', '', ''),
(76, 'nazneen', 'Shakarkar Nazneen', '1991-05-23', 'female', 'Kharghar,Navi Mumbai', 'Programming', 'kalsekar technical campus', 'Mumbai University', 'computer', '2014-2015', 0, 0, 60, 61, 68, 62, 65, 70, 68, 74, 0, 0, 80, 'php', 'Laser Projector', '', '', 0, '', '', ''),
(78, 'anas', 'Shaik anas', '1993-03-12', 'male', 'Seawoods,Navi Mumbai', 'Programming', 'kalsekar technical campus', 'Mumbai University', 'computer', '2014-2015', 58, 57, 59, 60, 64, 63, 68, 60, 63, 0, 0, 64, 79, 'java', 'Web Crawaler', '', '', 0, '', '', ''),
(79, 'muzammil', 'Muzammil', '1992-12-03', 'male', 'Mumbai', 'Games', 'kalsekar technical campus', 'Mumbai University', 'computer', '2014-2015', 54, 55, 56, 54, 54, 60, 60, 59, 60, 0, 0, 67, 65, 'java', 'Location Based Shopping', '', '', 0, '', '', ''),
(80, 'nakash', 'Jawahere Nakash', '1993-09-23', 'male', 'Andheri,Mumbai', 'Coding', 'kalsekar technical campus', 'Mumbai University', 'computer', '2014-2015', 60, 60, 63, 65, 66, 64, 67, 67, 69, 0, 0, 78, 80, 'java', 'Web Crawaler', '', '', 0, '', '', ''),
(80, 'nakash', 'Jawahere Nakash', '1993-09-23', 'male', 'Andheri,Mumbai', 'Coding', 'kalsekar technical campus', 'Mumbai University', 'computer', '2014-2015', 60, 60, 63, 65, 66, 64, 67, 67, 69, 0, 0, 78, 80, 'java', 'Web Crawaler', '', '', 0, '', '', '');

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
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=81 ;

--
-- Dumping data for table `stud_login`
--

INSERT INTO `stud_login` (`sid`, `username`, `email`, `password`, `approval`) VALUES
(45, 'saima', 'hajisaima9@gmail.com', '*1A256E4E2FE95B8BF7349C168991EA8035D1359B', 'yes'),
(55, 'nida', 'knida980@gmail.com', '*ECA6385A14308A6E693D39DC0DADF396A91841B8', 'yes'),
(56, 'armash', 'talktoarmash@gmail.com', '*1A256E4E2FE95B8BF7349C168991EA8035D1359B', 'yes'),
(65, 'Khan Siddiqa', 'siddiqak1993@gmail.com', '*C37C18667BB10473EDEDC211938EB795D34E17FA', 'yes'),
(66, 'patelarfat', 'patelarfat1@gmail.com', '*098016B94005881F5030E8A2129C7A97EE1EA561', 'yes'),
(69, 'nabeel', 'nabeelrangari8@gmail.com', '*BCBCB1051C23A47DC5448B1C3BDAFFFD7D101ACB', 'yes'),
(70, 'Firoz', 'firozmemon0@gmail.com', '*DCA5C6DB3ED46B05DECEF556B42D23C17063BC91', 'yes'),
(71, 'aquibkazi', 'aquibkazi06@gmail.com', '*C62631200C3C49B94749A99045F621DBE5ADC75C', 'yes'),
(72, 'musab', 'talktomusab@gmail.com', '*EF86249E431B36A3937BB0AC0AF13B31DDBDC668', 'yes'),
(73, 'aaraf', 'aarafmurade@gmail.com', '*E11C3807C0EA8597E19C00A01BE8CE36ACF3B02C', 'yes'),
(74, 'alam', 'abc@xzx.com', '*3E6A8D42EDC937BFFC376663E1D422F3439E783C', 'yes'),
(75, 'huma', 'ccc@ccc12.com', '*0F03B89645CDFC99CC2E4FC5CBA3CDD5E15AA746', ''),
(76, 'nazneen', 'bcbcb@xyz1.com', '*FFAD7E1640D42D0B6FD86B6EA51F5F25149EFAF3', ''),
(78, 'anas', 'xxca@abc.com', '*F6005B71DF0B121F0EC01806B925779452530ED6', ''),
(79, 'muzammil', 'vccv@cbx12.com', '*9525991CA73577E3FA968DE53D7240EEB0CE13B7', ''),
(80, 'nakash', 'ncnc@abc.ins', '*647DD73667177DE31135B8578A09575E9BEC217D', '');

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
