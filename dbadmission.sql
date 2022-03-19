-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Mar 18, 2022 at 02:27 PM
-- Server version: 5.7.31
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dbadmission`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidatebasicdetails`
--

DROP TABLE IF EXISTS `tbl_candidatebasicdetails`;
CREATE TABLE IF NOT EXISTS `tbl_candidatebasicdetails` (
  `basicid` int(15) NOT NULL AUTO_INCREMENT,
  `first_name` varchar(50) NOT NULL,
  `last_name` varchar(50) NOT NULL,
  `contact_number` bigint(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `dob` date NOT NULL,
  `applicationnumber` int(11) NOT NULL,
  `admission_status` varchar(50) NOT NULL,
  `courseid` int(5) NOT NULL,
  `username` varchar(20) NOT NULL,
  `password` varchar(20) NOT NULL,
  `isedit` int(11) NOT NULL,
  PRIMARY KEY (`basicid`)
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_candidatebasicdetails`
--

INSERT INTO `tbl_candidatebasicdetails` (`basicid`, `first_name`, `last_name`, `contact_number`, `email`, `dob`, `applicationnumber`, `admission_status`, `courseid`, `username`, `password`, `isedit`) VALUES
(1, 'Ajay ', 'Mohanan', 8667572555, 'ajaymohanan@gmail.com', '2001-06-07', 2024, 'Approved', 13, 'Ajaym023', 'Ajaym023', 0),
(2, 'Adam', 'Noushad', 7473894293, 'adamnoushad@gmail.com', '2001-12-04', 2023, 'Interviewed', 11, 'Adam023', 'Adam023', 0),
(3, 'Abin ', 'Shaji', 7558989893, 'abinputhan233@gmail.com', '2001-08-23', 2022, 'Approved', 10, 'AbinShaji023', 'Abinshaji023', 0),
(5, 'Jyothis', 'Jose', 9447872838, 'jyothisjose@gmail.com', '2000-11-14', 2025, 'interviewed', 12, 'jyothis123', 'jyothis123', 1),
(6, 'Jismon', 'Augustine', 9656358346, 'jismon94@gmail.com', '2021-08-31', 2026, 'Application Received', 10, 'jismon', 'jismon', 0),
(7, 'Abin ', 'Augustine', 9656358346, 'abin1990@gmail.com', '1997-01-28', 2027, 'Interviewed', 10, 'Abin', 'abin120', 0),
(8, 'Ancy ', 'Augustine', 9878452545, 'ancy@gmail.com', '1998-02-03', 2028, 'Selected', 12, 'ancythayil', 'anycthayil', 1),
(9, 'Abin ', 'Jose', 9656358346, 'jismon94@gmail.com', '2021-08-31', 2029, 'Application Received', 10, 'jismon', '965635', 0),
(10, 'Achu', 'Achu', 1234567890, 'achu@gmail.com', '2021-11-30', 2030, 'Application Received', 10, 'achu', 'achu', 0),
(11, 'steve', 'job', 8921287343, 'steve@gmail.com', '2021-12-20', 2031, 'Rejected', 12, 'steve', 'steve', 0),
(12, 'akil', 'das', 1234567890, 'akil@gmail.com', '2001-05-18', 2032, 'Interviewed', 10, 'akil', 'akil', 1),
(19, 'Mahima', 'john', 7465367489, 'mahimajohnmj7@gmail.com', '2021-12-27', 2035, 'Application Received', 12, 'mj', 'std23#@0', 0),
(18, 'sujith', 'PB', 7465367489, 'sujith.nosce096@gmail.com', '2021-12-28', 2034, 'Application Received', 10, 'Sujith', 'std22#@0', 1),
(21, 'Test', 'Test', 1234567890, 'test@gmail.com', '1997-02-06', 2037, 'Application Received', 10, 'test', 'std25#@0', 0);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidateparentdetails`
--

DROP TABLE IF EXISTS `tbl_candidateparentdetails`;
CREATE TABLE IF NOT EXISTS `tbl_candidateparentdetails` (
  `parentid` int(11) NOT NULL AUTO_INCREMENT,
  `applicationnumber` int(5) NOT NULL,
  `nameoffather` varchar(50) NOT NULL,
  `fathercontact` bigint(20) NOT NULL,
  `nameofmother` varchar(50) NOT NULL,
  `fatheroccupation` varchar(50) NOT NULL,
  `motheroccupation` varchar(50) NOT NULL,
  `annualincome` double NOT NULL,
  PRIMARY KEY (`parentid`)
) ENGINE=MyISAM AUTO_INCREMENT=10 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_candidateparentdetails`
--

INSERT INTO `tbl_candidateparentdetails` (`parentid`, `applicationnumber`, `nameoffather`, `fathercontact`, `nameofmother`, `fatheroccupation`, `motheroccupation`, `annualincome`) VALUES
(3, 2022, 'Shaji joseph', 9447462777, 'Ruby Shaji', 'Farmer', 'House wife', 40000),
(4, 2023, 'Noushad', 7493793939, 'fathima', 'Bussiness', 'House wife', 50000),
(5, 2024, 'Mohanan', 7493793939, 'usha', 'Farmer', 'House wife', 70000),
(6, 2031, 'job', 1234556789, 'mrs job', 'farmer', 'housewife', 1000000000),
(7, 2032, 'das', 7994841790, 'sini', 'farmer', 'housewife', 300000),
(8, 2034, 'kuttappan', 7836437647, 'kunjamma', 'Koolippani', 'House wife', 1500),
(9, 2027, 'Augustin joseph', 9876543210, 'Mary Joy', 'Farmer', 'House Wife', 70000);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_candidatepersonaldetails`
--

DROP TABLE IF EXISTS `tbl_candidatepersonaldetails`;
CREATE TABLE IF NOT EXISTS `tbl_candidatepersonaldetails` (
  `personalid` int(11) NOT NULL AUTO_INCREMENT,
  `applicationnumber` int(11) NOT NULL,
  `stateid` int(11) NOT NULL,
  `distid` double NOT NULL,
  `gender` varchar(10) NOT NULL,
  `housename` varchar(50) NOT NULL,
  `religion` varchar(20) NOT NULL,
  `caste` varchar(50) NOT NULL,
  `city` varchar(50) NOT NULL,
  `pincode` int(11) NOT NULL,
  PRIMARY KEY (`personalid`)
) ENGINE=MyISAM AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_candidatepersonaldetails`
--

INSERT INTO `tbl_candidatepersonaldetails` (`personalid`, `applicationnumber`, `stateid`, `distid`, `gender`, `housename`, `religion`, `caste`, `city`, `pincode`) VALUES
(15, 2023, 1, 1, 'male', 'kizhakedath', 'islam', 'muslim', 'thodupuzha', 653822),
(14, 2022, 1, 1, 'male', 'Vellarikund', 'christian', 'rcsc', 'Vellarikund', 671534),
(16, 2031, 1, 1, 'male', 'jobless', 'christian', 'rc', 'california', 685608),
(17, 2032, 1, 1, 'male', 'kanjirathinal', 'HINDU', 'nair', 'Thodupuzha', 685608),
(18, 2034, 1, 1, 'male', 'puthenpurackel', 'hindu', 'shdjsh', 'pala', 686576),
(19, 2024, 1, 1, 'male', 'Muttom', 'Test1', 'Test1', 'Muttom', 685590),
(20, 2032, 1, 1, 'male', 'kanjirathinal h', 'HINDU', 'nair', 'Thodupuzha', 685602),
(24, 2025, 1, 3, 'male', 'Jose joseph', 'Christian', 'Rcsc', 'vellarikundu', 671534),
(22, 2027, 1, 3, 'male', 'kasaragod,thalangara', 'Christian', 'Rcsc', 'kasaragod', 671534);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class10details`
--

DROP TABLE IF EXISTS `tbl_class10details`;
CREATE TABLE IF NOT EXISTS `tbl_class10details` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `applicationnumber` int(20) NOT NULL,
  `boardname` varchar(50) NOT NULL,
  `institutionname` varchar(50) NOT NULL,
  `placeofinstitution` varchar(50) NOT NULL,
  `stateofinstitution` varchar(50) NOT NULL,
  `yearofpassout` int(11) NOT NULL,
  `class10ofmark` varchar(10) NOT NULL,
  `noofattempts` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_class10details`
--

INSERT INTO `tbl_class10details` (`id`, `applicationnumber`, `boardname`, `institutionname`, `placeofinstitution`, `stateofinstitution`, `yearofpassout`, `class10ofmark`, `noofattempts`) VALUES
(5, 2022, '', 'St. judes Hss Vellerikundu', 'Vellarikundu', 'Kerala', 2017, '97', 1),
(6, 2023, '', 'st. sebastian hss undaplavu', 'undaplavu', 'kerala', 2015, '99', 1),
(8, 2024, 'kerala Board of examination', 'ghss Kolani', 'Kolani', 'kerala', 2017, '95', 1),
(9, 2031, 'state', 'little flower hs', 'lakeroad', 'kerala', 1999, '79', 1),
(10, 2031, 'state', 'little flower hs', 'lakeroad', 'kerala', 1999, '79', 1),
(11, 2031, 'state', 'little flower hs', 'lakeroad', 'kerala', 1999, '79', 1),
(12, 2032, 'state', 'little flower hs', 'tdpa', 'kerala', 2017, '75', 1),
(13, 2034, 'Technical', 'St thomas pala', 'pala', 'kerala', 2015, '80', 1),
(14, 2027, 'kerala state board of examination', 'St. George hss Muthalakodam', 'Muthalakodam', 'kerala', 2017, '98', 1),
(15, 2025, 'kerala state board of examination', 'St. George hss Muthalakodam', 'Muthalakodam', 'kerala', 2019, '99', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_class12details`
--

DROP TABLE IF EXISTS `tbl_class12details`;
CREATE TABLE IF NOT EXISTS `tbl_class12details` (
  `identity` int(11) NOT NULL AUTO_INCREMENT,
  `applicationnumber` int(20) NOT NULL,
  `board_name` varchar(50) NOT NULL,
  `institution_name` varchar(50) NOT NULL,
  `place_of_institution` varchar(50) NOT NULL,
  `state_of_institution` varchar(50) NOT NULL,
  `year_of_passout` int(11) NOT NULL,
  `class11ofmark` varchar(50) NOT NULL,
  `class12ofmark` varchar(50) NOT NULL,
  PRIMARY KEY (`identity`)
) ENGINE=MyISAM AUTO_INCREMENT=15 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_class12details`
--

INSERT INTO `tbl_class12details` (`identity`, `applicationnumber`, `board_name`, `institution_name`, `place_of_institution`, `state_of_institution`, `year_of_passout`, `class11ofmark`, `class12ofmark`) VALUES
(4, 2022, '', 'st. judes hss vellarikundu', 'vellarikundu', 'kerala', 2019, '90', '95'),
(5, 2023, '', 'st.sebastian hss undaplavu', 'undaplav', 'kerala', 2019, '89', '76'),
(7, 2024, 'kerala Board of examination', 'ghss Kolani', 'Kolani', 'kerala', 2019, '88', '86'),
(8, 2031, 'state', 'oxford', 'new state', 'new york', 2001, '80', '75'),
(9, 2031, 'state', 'oxford', 'new state', 'new york', 2001, '80', '75'),
(10, 2031, 'state', 'oxford', 'new state', 'new york', 2001, '80', '75'),
(11, 2032, 'state', 'oxford', 'tdpa', 'new york', 2019, '80', '80'),
(12, 2034, 'technical', 'st thomas', 'pala', 'kerala', 2018, '70', '70'),
(13, 2027, 'kerala board of examination ', 'St. George hss Muthalakodam', 'Muthalakodam', 'kerala', 2019, '90', '85'),
(14, 2025, 'kerala board of examination ', 'St. George hss Muthalakodam', 'Muthalakodam', 'kerala', 2019, '90', '85');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_course`
--

DROP TABLE IF EXISTS `tbl_course`;
CREATE TABLE IF NOT EXISTS `tbl_course` (
  `courseid` int(5) NOT NULL AUTO_INCREMENT,
  `coursename` varchar(50) NOT NULL,
  `courseshortname` varchar(10) NOT NULL,
  `coursetype` varchar(20) NOT NULL,
  `course_criteria` varchar(300) NOT NULL,
  `seat_cappacity` varchar(100) NOT NULL,
  `admittedcount` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`courseid`)
) ENGINE=MyISAM AUTO_INCREMENT=24 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_course`
--

INSERT INTO `tbl_course` (`courseid`, `coursename`, `courseshortname`, `coursetype`, `course_criteria`, `seat_cappacity`, `admittedcount`) VALUES
(12, 'MASTER OF COMPUTER APPLICATION', 'MCA', 'PG', '  Graduation in computer applications, computer science, or related field with a minimum of 50% marks obtained at the UG level.\r\nMathematics as one of the subjects in Class 12 is compulsory.  ', '60', 16),
(10, 'BACHELOR OF COMPUTER APPLICATION', 'BCA', 'UG', '  10+2 preferably in Commerce stream\r\nBCA Entrance Exams in India: IPU CET BCA, KIITEE BCA, LUCSAT BCA, etc.\r\nBCA Entrance Exams abroad: SAT/ACT; TOEFL/IELTS  ', '54', 5),
(11, 'BACHELOR OF COMMERCE', 'B.COM', 'UG', 'You need to have passed 12th standard in the commerce stream\r\n12th standard graduates from other streams may also apply based on the discretion university and college. ', '50', 0),
(13, 'BACHELOR OF BUSSINESS ADMINSTRATION', 'BBA', 'UG', 'Minimum Marks: Candidates must have at least scored a minimum aggregate of 50% marks in 12th. Some premier colleges ask for 60% marks.\r\nAge Limit: Candidates must be aged between 17 to 22 years for general category, and 17 to 24 years for reserved categories.  ', '60', 2);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_degree`
--

DROP TABLE IF EXISTS `tbl_degree`;
CREATE TABLE IF NOT EXISTS `tbl_degree` (
  `degreeid` int(11) NOT NULL AUTO_INCREMENT,
  `applicationnumber` int(20) NOT NULL,
  `stream` varchar(50) NOT NULL,
  `universityname` varchar(50) NOT NULL,
  `institutionname` varchar(50) NOT NULL,
  `institutionplace` varchar(50) NOT NULL,
  `institutionstate` varchar(50) NOT NULL,
  `passoutyear` varchar(50) NOT NULL,
  `aggregatescore` double NOT NULL,
  PRIMARY KEY (`degreeid`)
) ENGINE=MyISAM AUTO_INCREMENT=4 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_degree`
--

INSERT INTO `tbl_degree` (`degreeid`, `applicationnumber`, `stream`, `universityname`, `institutionname`, `institutionplace`, `institutionstate`, `passoutyear`, `aggregatescore`) VALUES
(3, 2025, 'Computer Sciences', 'MG university kottyam', 'santhigiri college of computer sciences', 'thodupuzha', 'kerala', '2019-03-31', 98);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_district`
--

DROP TABLE IF EXISTS `tbl_district`;
CREATE TABLE IF NOT EXISTS `tbl_district` (
  `distid` int(5) NOT NULL,
  `distname` varchar(50) NOT NULL,
  `stateid` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_district`
--

INSERT INTO `tbl_district` (`distid`, `distname`, `stateid`) VALUES
(1, 'idukki', 1),
(2, 'karnataka', 2),
(3, 'Kasaragod', 1);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_interview`
--

DROP TABLE IF EXISTS `tbl_interview`;
CREATE TABLE IF NOT EXISTS `tbl_interview` (
  `college_id` int(11) NOT NULL AUTO_INCREMENT,
  `applicationnumber` int(20) NOT NULL,
  `language` varchar(50) NOT NULL,
  `subjectknowledge` varchar(50) NOT NULL,
  `attitude` varchar(50) NOT NULL,
  `comments` varchar(50) NOT NULL,
  `interviewdate` date NOT NULL,
  `interviewername` varchar(20) NOT NULL,
  PRIMARY KEY (`college_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_interview`
--

INSERT INTO `tbl_interview` (`college_id`, `applicationnumber`, `language`, `subjectknowledge`, `attitude`, `comments`, `interviewdate`, `interviewername`) VALUES
(1, 2025, '33', '33', '33', '33', '2021-09-06', 'Mathew Ibrahim'),
(2, 2029, '2', '33', '2', 'Good Candidate', '2021-11-29', 'ja'),
(3, 2022, '90', 'good', '99', 'very good', '2021-12-20', 'ajay'),
(4, 2032, '90', 'good', '99', 'very good', '2021-12-20', 'ajay'),
(5, 2027, '70', '70', '80', 'very good', '2022-01-06', 'ajay'),
(6, 2023, '90', '89', '80', 'Good', '2022-03-11', '90');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_interviewerlogin`
--

DROP TABLE IF EXISTS `tbl_interviewerlogin`;
CREATE TABLE IF NOT EXISTS `tbl_interviewerlogin` (
  `Username` varchar(20) NOT NULL,
  `Password` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_interviewerlogin`
--

INSERT INTO `tbl_interviewerlogin` (`Username`, `Password`) VALUES
('interviewer', 'interviewer123');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_officeupdation`
--

DROP TABLE IF EXISTS `tbl_officeupdation`;
CREATE TABLE IF NOT EXISTS `tbl_officeupdation` (
  `applicationnumber` int(20) NOT NULL,
  `verificationdate` date NOT NULL,
  `status` varchar(20) NOT NULL,
  `nameofincharge` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL,
  `isfeespaid` varchar(50) NOT NULL,
  `isverified` varchar(50) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_officeupdation`
--

INSERT INTO `tbl_officeupdation` (`applicationnumber`, `verificationdate`, `status`, `nameofincharge`, `remarks`, `isfeespaid`, `isverified`) VALUES
(2023, '2021-11-05', 'Approved', 'Thomas', '', '', ''),
(2023, '2021-11-05', 'Pending', 'Charles', '', '', ''),
(2022, '2021-12-16', 'Approved', 'pranav', '', '', ''),
(2022, '2021-12-16', 'Approved', 'pranav', '', '', ''),
(2022, '2021-12-16', 'Approved', 'pranav c', '', '', ''),
(2022, '2021-12-16', 'Approved', 'pranav c', 'everything completed', '', ''),
(2022, '2021-12-16', 'Approved', 'mathew', 'cc', '', ''),
(2025, '2022-01-03', 'Approved', 'jISMON', 'TEST', '', ''),
(2026, '2022-01-06', 'Approved', 'jISMON', 'Nill', '', ''),
(2026, '2022-01-23', 'Approved', 'jISMON', 'Nill', '', ''),
(2025, '2022-01-05', 'Approved', 'jISMON', 'good', '', ''),
(2025, '2022-01-03', 'Approved', 'jISMON', 'yy', '', ''),
(2025, '2021-12-27', 'Approved', 'jISMON', 'jj', '', ''),
(2025, '2022-01-04', 'Approved', 'jISMON', 'kk', '', ''),
(2025, '2022-01-04', 'Approved', 'jISMON', 'kk', '', ''),
(2025, '2022-01-03', 'Approved', 'jISMON', 'kk', '', ''),
(2024, '2022-01-04', 'Approved', 'jISMON', 'test', '', ''),
(2024, '2022-01-03', 'Approved', 'jISMON', 'test', '', ''),
(2028, '2022-01-04', 'Approved', 'jISMON', 'test', '', ''),
(2028, '2021-12-28', 'Approved', 'jISMON', 'test', '', ''),
(2028, '2021-12-28', 'Approved', 'jISMON', 'test', '', ''),
(2028, '2022-01-04', 'Approved', 'jISMON', 'test', '', ''),
(2028, '2022-01-05', 'Approved', 'jISMON', 'gfchtd', '', ''),
(2028, '2022-01-05', 'Approved', 'jISMON', 'jkhkugj', '', ''),
(2028, '2022-01-05', 'Approved', 'jISMON', 'jhjgb', '', ''),
(0, '2022-01-05', 'Approved', 'jISMON', '', '', ''),
(0, '2022-01-05', 'Approved', 'jISMON', 'Test', '', ''),
(0, '2022-01-05', 'Approved', 'jISMON', 'vbghcfh', '', ''),
(2028, '2022-01-05', 'Approved', 'jISMON', 'mjnkhb', '', ''),
(2028, '2022-01-05', 'Pending', 'jISMON', 'jugk', '', ''),
(2028, '2022-01-05', 'Approved', 'jISMON', 'jhgg', '', ''),
(2028, '2022-01-05', 'Approved', 'jISMON', 'jhgg', '', ''),
(2028, '2022-01-05', 'Approved', 'jISMON', '', '', ''),
(2028, '2022-01-05', 'Approved', 'jISMON', 'bgft', '', ''),
(2028, '2022-01-05', 'Approved', 'jISMON', 'mjhbhj', '', ''),
(2022, '2022-01-05', 'Approved', 'Test', '', '', ''),
(2022, '2022-01-05', 'Approved', 'Test', 'gythik', 'Paid', 'Not Verified'),
(2022, '2022-01-06', 'Approved', 'sugunan', 'every thing completed', 'Paid', 'Verified'),
(2036, '2022-01-05', 'Approved', 'sugunan', 'adafsft', 'Paid', 'Verified');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_principalverify`
--

DROP TABLE IF EXISTS `tbl_principalverify`;
CREATE TABLE IF NOT EXISTS `tbl_principalverify` (
  `applicationnumber` int(11) NOT NULL,
  `verificationdate` date NOT NULL,
  `principalstatus` varchar(50) NOT NULL,
  `remarks` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_principalverify`
--

INSERT INTO `tbl_principalverify` (`applicationnumber`, `verificationdate`, `principalstatus`, `remarks`) VALUES
(2022, '2021-12-16', 'Rejected', 'very bad'),
(2022, '2021-12-16', 'Selected', 'sss');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_religion`
--

DROP TABLE IF EXISTS `tbl_religion`;
CREATE TABLE IF NOT EXISTS `tbl_religion` (
  `religionid` int(5) NOT NULL,
  `religionname` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_state`
--

DROP TABLE IF EXISTS `tbl_state`;
CREATE TABLE IF NOT EXISTS `tbl_state` (
  `stateid` int(5) NOT NULL,
  `statename` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_state`
--

INSERT INTO `tbl_state` (`stateid`, `statename`) VALUES
(1, 'kerala'),
(2, 'karnataka');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_userlogin`
--

DROP TABLE IF EXISTS `tbl_userlogin`;
CREATE TABLE IF NOT EXISTS `tbl_userlogin` (
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `user_status` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_userlogin`
--

INSERT INTO `tbl_userlogin` (`username`, `password`, `user_status`) VALUES
('Admin', 'Admin', '4'),
('interviewer', 'interviewer', '1'),
('office', 'office', '3'),
('principle', 'principle', '2');
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
