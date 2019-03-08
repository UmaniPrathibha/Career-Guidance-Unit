-- phpMyAdmin SQL Dump
-- version 4.1.14
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 31, 2018 at 11:09 AM
-- Server version: 5.6.17
-- PHP Version: 5.5.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `cgu`
--

-- --------------------------------------------------------

--
-- Table structure for table `businessproposal`
--

CREATE TABLE IF NOT EXISTS `businessproposal` (
  `proposal_id` int(100) NOT NULL AUTO_INCREMENT,
  `proposal_title` varchar(100) NOT NULL,
  `reg_no` varchar(30) NOT NULL,
  `proposal_file` varchar(50) NOT NULL,
  `status` varchar(100) NOT NULL,
  `description` varchar(100) NOT NULL,
  PRIMARY KEY (`proposal_id`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=20 ;

--
-- Dumping data for table `businessproposal`
--

INSERT INTO `businessproposal` (`proposal_id`, `proposal_title`, `reg_no`, `proposal_file`, `status`, `description`) VALUES
(2, 'kjhkh', 'uwuiit15058', 'uploads/ER..pdf', 'Accept', ''),
(3, 'food', 'uwuiit15052', 'uploads/20170205201763074587500002128.pdf', 'Reject', ''),
(4, 'kh', 'uwuiit150581', 'uploads/PROJECT PROPOSAL.docx', 'Reject', ''),
(5, 'kjhkh', 'uwuiit15058/', 'uploads/javakey.PNG', 'Accept', ''),
(6, 'toys', 'uwu/iit/15/058', 'uploads/AnnabelleCreation-2017-BR.zip', 'Reject', ''),
(8, 'kitchen', 'uwuiit15059', 'uploads/20170205201763074587500002128.pdf', 'Accept', ''),
(9, 'bakery', 'jhkh', 'uploads/UseCaseDiagram1.jpg', 'Reject', ''),
(10, 'ytj', 'hhhtty', 'uploads/UseCaseDiagram1.jpg', 'Reject', ''),
(11, 'edu', 'iit12345', 'uploads/FieldVisitReport.pdf', 'Accept', ''),
(12, 'bookshop', 'uwu/plt/15/034', 'uploads/FieldVisitReport.pdf', 'Accept', ''),
(13, 'Hostal', 'uwuiit15012', 'uploads/Core_Vocabularies_1.0.png', 'pending', ''),
(14, 'Hostal', 'uwuiit15012', 'uploads/Core_Vocabularies_1.0.png', 'Accept', ''),
(15, 'thilini', 'uwuiit15058', 'uploads/86e4ade1efce96e5c9d06bc117749234.jpg', 'pending', 'uniform'),
(16, 'svdf', 'uwuiit15052', 'uploads/86e4ade1efce96e5c9d06bc117749234.jpg', 'pending', 'dsfsgbv'),
(17, 'sdv', 'uwuiit15058', 'uploads/86e4ade1efce96e5c9d06bc117749234.jpg', 'pending', ''),
(18, 'v', 'hhh', 'uploads/86e4ade1efce96e5c9d06bc117749234.jpg', 'pending', 'scvsc'),
(19, 'sdv', 'hhh', 'uploads/86e4ade1efce96e5c9d06bc117749234.jpg', 'pending', 'sdvs');

-- --------------------------------------------------------

--
-- Table structure for table `cv`
--

CREATE TABLE IF NOT EXISTS `cv` (
  `cv_no` int(100) NOT NULL AUTO_INCREMENT,
  `reg_no` varchar(20) NOT NULL,
  `interested` varchar(30) NOT NULL,
  `cv_file` varchar(100) NOT NULL,
  `home_town` varchar(30) NOT NULL,
  `degree` varchar(30) NOT NULL,
  PRIMARY KEY (`cv_no`),
  UNIQUE KEY `cv_no` (`cv_no`),
  KEY `reg_no` (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `employee`
--

CREATE TABLE IF NOT EXISTS `employee` (
  `employee_id` varchar(30) NOT NULL,
  `nic` varchar(15) NOT NULL,
  `role` varchar(50) NOT NULL,
  PRIMARY KEY (`employee_id`),
  KEY `nic` (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `gpa`
--

CREATE TABLE IF NOT EXISTS `gpa` (
  `course_code` varchar(20) NOT NULL,
  `course_name` varchar(50) NOT NULL,
  `grade` varchar(5) NOT NULL,
  `level` int(5) NOT NULL,
  `credit` int(5) NOT NULL,
  `reg_no` varchar(30) NOT NULL,
  PRIMARY KEY (`course_code`),
  KEY `reg_no` (`reg_no`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `student`
--

CREATE TABLE IF NOT EXISTS `student` (
  `reg_no` varchar(20) NOT NULL,
  `faculty` varchar(50) NOT NULL,
  `degree` varchar(50) NOT NULL,
  `department` varchar(50) NOT NULL,
  `nic` varchar(15) NOT NULL,
  PRIMARY KEY (`reg_no`),
  KEY `nic` (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `survey`
--

CREATE TABLE IF NOT EXISTS `survey` (
  `survey_id` int(100) NOT NULL AUTO_INCREMENT,
  `survey_name` varchar(30) NOT NULL,
  PRIMARY KEY (`survey_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
  `nic` varchar(11) NOT NULL,
  `name_with_initial` varchar(50) NOT NULL,
  `email` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `telephone` int(12) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(100) NOT NULL,
  `batchyear` varchar(10) NOT NULL,
  PRIMARY KEY (`nic`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `workshop`
--

CREATE TABLE IF NOT EXISTS `workshop` (
  `workshop_id` int(100) NOT NULL AUTO_INCREMENT,
  `workshop_title` varchar(100) NOT NULL,
  `place` varchar(40) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `conducted_by` varchar(30) NOT NULL,
  PRIMARY KEY (`workshop_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1 AUTO_INCREMENT=1 ;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `cv`
--
ALTER TABLE `cv`
  ADD CONSTRAINT `cv_ibfk_1` FOREIGN KEY (`reg_no`) REFERENCES `student` (`reg_no`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `cv_ibfk_2` FOREIGN KEY (`reg_no`) REFERENCES `student` (`reg_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `employee`
--
ALTER TABLE `employee`
  ADD CONSTRAINT `employee_ibfk_1` FOREIGN KEY (`nic`) REFERENCES `user` (`nic`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `gpa`
--
ALTER TABLE `gpa`
  ADD CONSTRAINT `gpa_ibfk_1` FOREIGN KEY (`reg_no`) REFERENCES `student` (`reg_no`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `student`
--
ALTER TABLE `student`
  ADD CONSTRAINT `student_ibfk_1` FOREIGN KEY (`nic`) REFERENCES `user` (`nic`) ON DELETE CASCADE ON UPDATE CASCADE;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
