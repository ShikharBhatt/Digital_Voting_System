-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 09, 2017 at 03:25 PM
-- Server version: 5.7.19-log
-- PHP Version: 5.6.31

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dvs`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidate_table`
--

CREATE TABLE `candidate_table` (
  `CAND_ID` int(6) UNSIGNED ZEROFILL NOT NULL,
  `VOTER_ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `PARTY_NAME` varchar(20) DEFAULT NULL,
  `FNAME` varchar(20) DEFAULT NULL,
  `MNAME` varchar(20) DEFAULT NULL,
  `LNAME` varchar(20) DEFAULT NULL,
  `EDU_LEVEL` varchar(20) NOT NULL,
  `WORK_EXP` int(11) DEFAULT '0',
  `POL_EXP` int(11) DEFAULT '0',
  `ACHIEVEMENTS` varchar(200) DEFAULT NULL,
  `PROP_AFF` mediumtext NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `candidate_table`
--

INSERT INTO `candidate_table` (`CAND_ID`, `VOTER_ID`, `PARTY_NAME`, `FNAME`, `MNAME`, `LNAME`, `EDU_LEVEL`, `WORK_EXP`, `POL_EXP`, `ACHIEVEMENTS`, `PROP_AFF`) VALUES
(000015, 0000000006, 'asd', 'Shikhasdfr', '', 'Bhatt', 'Matriculation', 12, 12, '', 'C:/xamppp/htdocs/miniproject/uploads/59aeec2987afc3.89568794.pdf'),
(000016, 0000000007, 'fff', 'baba', 'sumit', 'Bhatt', 'Matriculation', 34, 12, 'qwertttttttt', 'C:/xamppp/htdocs/miniproject/uploads/59b0258030a502.31148203.jpg'),
(000031, 0000000098, 'asd', 'rtyui', 'fghj', 'fghjkl', 'Matriculate', 12, 12, 'qqqqq', 'C:/xamppp/htdocs/miniproject/uploads/59b313ffdfb996.75177800.jpg'),
(000033, 0000000099, 'qweqewq', 'qwerty', 'sds', 'gbf', 'Below 10th', 12, 12, 'sdsdewewd', 'C:/xamppp/htdocs/miniproject/uploads/59b31027daf116.23965776.jpg'),
(000035, 0000000102, 'zzzzzzzzz', 'KAILASH ', 'RAJ', 'GAUR', 'Under-Graduate', 12, 12, 'fffffffffffffffff', 'C:/xamppp/htdocs/miniproject/uploads/59b3110f2ff4f3.86121057.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `cand_cons_table`
--

CREATE TABLE `cand_cons_table` (
  `CAND_ID` int(6) UNSIGNED ZEROFILL NOT NULL,
  `CT_CONS_ID` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cand_cons_table`
--

INSERT INTO `cand_cons_table` (`CAND_ID`, `CT_CONS_ID`) VALUES
(000015, 'MH_02'),
(000016, 'MH_02'),
(000031, 'MH_02'),
(000016, 'MH_02'),
(000033, 'MH_02'),
(000035, 'MH_02');

-- --------------------------------------------------------

--
-- Table structure for table `cand_ro_table`
--

CREATE TABLE `cand_ro_table` (
  `CAND_ID` int(6) UNSIGNED ZEROFILL NOT NULL,
  `RO_ID` int(4) UNSIGNED ZEROFILL NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `fake_table`
--

CREATE TABLE `fake_table` (
  `CAND_ID` int(6) UNSIGNED ZEROFILL NOT NULL,
  `VOTER_ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `PARTY_NAME` varchar(20) NOT NULL,
  `FNAME` varchar(20) NOT NULL,
  `MNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fake_table`
--

INSERT INTO `fake_table` (`CAND_ID`, `VOTER_ID`, `PARTY_NAME`, `FNAME`, `MNAME`, `LNAME`) VALUES
(000003, 0000000005, 'dfgdsgfd', 'sdfgdf', 'dgsdg', 'dsfgdsgf'),
(000008, 0000000006, 'dfgdsgfd', 'sdfgdf', 'dgsdg', 'dsfgdsgf');

-- --------------------------------------------------------

--
-- Table structure for table `fo_table`
--

CREATE TABLE `fo_table` (
  `FO_ID` int(6) UNSIGNED ZEROFILL NOT NULL,
  `CONS_ID` varchar(20) NOT NULL,
  `VOTER_ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `POLL_ID` varchar(20) NOT NULL,
  `PASSWORD` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `fo_table`
--

INSERT INTO `fo_table` (`FO_ID`, `CONS_ID`, `VOTER_ID`, `POLL_ID`, `PASSWORD`) VALUES
(000001, 'MH001', 0000000010, 'MH001_1', 12345),
(000002, 'MH02', 0000000011, 'MH002_1', 12345),
(000003, 'MH03', 0000000012, 'MH003_1', 123457);

-- --------------------------------------------------------

--
-- Table structure for table `polling_station_table`
--

CREATE TABLE `polling_station_table` (
  `POLL_ID` varchar(20) NOT NULL,
  `CONS_ID` varchar(20) NOT NULL,
  `LOCATION` varchar(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `polling_station_table`
--

INSERT INTO `polling_station_table` (`POLL_ID`, `CONS_ID`, `LOCATION`) VALUES
('MH001_1', 'MH001', 'KOTHRUD'),
('MH002_1', 'MH002', 'bibevadi'),
('MH003_1', 'MH003', 'katraj');

-- --------------------------------------------------------

--
-- Table structure for table `ro_table`
--

CREATE TABLE `ro_table` (
  `RO_ID` int(4) UNSIGNED ZEROFILL NOT NULL,
  `VOTER_ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `CONSM_ID` varchar(20) NOT NULL,
  `CONSM_NAME` varchar(20) NOT NULL,
  `PASSWORD` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `ro_table`
--

INSERT INTO `ro_table` (`RO_ID`, `VOTER_ID`, `CONSM_ID`, `CONSM_NAME`, `PASSWORD`) VALUES
(0001, 0000000001, 'MH_02', 'kothrud', '12345'),
(0002, 0000000002, 'MH_01', 'katraj', '12345'),
(0003, 0000000003, 'MH_03', 'bibevadi', '123457');

-- --------------------------------------------------------

--
-- Table structure for table `voter_table`
--

CREATE TABLE `voter_table` (
  `VOTER_ID` int(10) UNSIGNED ZEROFILL NOT NULL,
  `CONS_ID` varchar(10) NOT NULL,
  `TITLE` varchar(4) NOT NULL,
  `FNAME` varchar(20) NOT NULL,
  `MNAME` varchar(20) NOT NULL,
  `LNAME` varchar(20) NOT NULL,
  `SEX` char(6) NOT NULL DEFAULT 'M',
  `DOB` date NOT NULL,
  `AADHAAR` bigint(12) NOT NULL,
  `STREET_ADD` varchar(40) DEFAULT NULL,
  `DISTRICT` varchar(50) NOT NULL,
  `STATE` varchar(20) NOT NULL,
  `PINCODE` int(6) NOT NULL,
  `POB` varchar(20) NOT NULL,
  `EDU_LEVEL` varchar(20) NOT NULL,
  `CASTE` varchar(20) NOT NULL,
  `RELIGION` varchar(20) NOT NULL,
  `NATIVE_LANG` varchar(20) NOT NULL,
  `INCOME` varchar(20) NOT NULL,
  `PHY_CHAL` varchar(10) NOT NULL,
  `OCCP` varchar(20) NOT NULL,
  `MOB_NO` bigint(10) NOT NULL,
  `EMAIL` varchar(30) DEFAULT NULL,
  `AADHAAR_PROOF` longblob,
  `PHOTO` longblob,
  `RESIDENT_PROOF` longblob,
  `FO_ID` int(6) UNSIGNED ZEROFILL DEFAULT NULL,
  `POLL_ID` varchar(20) DEFAULT NULL,
  `STATUS` varchar(3) DEFAULT NULL,
  `OSE` varchar(3) DEFAULT NULL,
  `P_VID` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `CITY` varchar(10) NOT NULL,
  `PASS_NO` varchar(8) DEFAULT NULL,
  `VISA_NO` varchar(14) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `voter_table`
--

INSERT INTO `voter_table` (`VOTER_ID`, `CONS_ID`, `TITLE`, `FNAME`, `MNAME`, `LNAME`, `SEX`, `DOB`, `AADHAAR`, `STREET_ADD`, `DISTRICT`, `STATE`, `PINCODE`, `POB`, `EDU_LEVEL`, `CASTE`, `RELIGION`, `NATIVE_LANG`, `INCOME`, `PHY_CHAL`, `OCCP`, `MOB_NO`, `EMAIL`, `AADHAAR_PROOF`, `PHOTO`, `RESIDENT_PROOF`, `FO_ID`, `POLL_ID`, `STATUS`, `OSE`, `P_VID`, `CITY`, `PASS_NO`, `VISA_NO`) VALUES
(0000000001, 'MH_01', 'Mr', 'Kailash', 'hat', 'Gaur', 'F', '1996-10-16', 243523465, 'MIT,PUNE', 'Kothrud', 'MAHARASHTRA', 411038, 'Jodhpur,Rajasthan', 'Below 10th', 'Open', 'Hindu', 'Marwadi', 'NONE', 'NO', 'Unemployed', 9211420420, 'kailash96@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, '', NULL, 'Pune', NULL, NULL),
(0000000002, 'MH_01', 'Mr', 'Shikhar', '', 'Bhatt', 'M', '1997-10-16', 243523468, 'MIT,PUNE', 'Katraj', 'MAHARASHTRA', 411038, 'Kanpur,UP', 'Below 10th', 'Open', 'Hindu', 'Hindi', 'NONE', 'NO', 'Unemployed', 9211420220, 'shikar@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, '', NULL, 'Pune', NULL, NULL),
(0000000003, 'MH_03', 'Mr', 'Sumit', '', 'Hotchandani', 'M', '1997-10-17', 4352346812, 'MIT,PUNE', 'Katraj', 'MAHARASHTRA', 411038, 'Pune', 'Matriculation', 'OPEN', 'Hindu', 'Sindhi', '5000000', 'NO', 'SW Engineer', 9211420221, 'sumit@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pune', NULL, NULL),
(0000000004, 'MH_03', 'Mr', 'sul', '', 'Hotchandani', 'M', '1997-10-17', 4352346812, 'MIT,PUNE', 'Katraj', 'MAHARASHTRA', 411038, 'Pune', 'Matriculation', 'OPEN', 'Hindu', 'Sindhi', '5000000', 'NO', 'SW Engineer', 9211420221, 'sumit@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pune', NULL, NULL),
(0000000005, 'MH_03', 'Mr', 'Susmit', '', 'Hotchandani', 'M', '1997-10-17', 4352346812, 'MIT,PUNE', 'Katraj', 'MAHARASHTRA', 411038, 'Pune', 'Matriculation', 'OPEN', 'Hindu', 'Sindhi', '5000000', 'NO', 'SW Engineer', 9211420221, 'sumit@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pune', NULL, NULL),
(0000000006, 'MH_01', 'Mr', 'Shikhasdfr', '', 'Bhatt', 'M', '1997-10-16', 243523468, 'MIT,PUNE', 'Katraj', 'MAHARASHTRA', 411038, 'Kanpur,UP', 'Matriculation', 'Brahmin', 'Hindu', 'Hindi', '5000000', 'NO', 'Doctor', 9211420220, 'shikar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pune', NULL, NULL),
(0000000007, 'MH_01', 'Mr', 'baba', '', 'Bhatt', 'M', '1997-10-16', 243523468, 'MIT,PUNE', 'Katraj', 'MAHARASHTRA', 411038, 'Kanpur,UP', 'Below 10th', 'Open', 'Hindu', 'Hindi', 'NONE', 'NO', 'Unemployed', 9211420220, 'shikar@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, '', NULL, 'Pune', NULL, NULL),
(0000000009, 'MH_06', 'Mr', 'utdytdtrsdfsctd', '', 'Bhatt', 'M', '1997-10-16', 243523468, 'MIT,PUNE', 'Katraj', 'MAHARASHTRA', 411038, 'Kanpur,UP', 'Matriculation', 'Brahmin', 'Hindu', 'Hindi', '5000000', 'NO', 'Doctor', 9211420220, 'shikar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pune', NULL, NULL),
(0000000010, 'MH_06', 'Mr', 'F1', '', 'Bhatt', 'M', '1997-10-16', 243523468, 'MIT,PUNE', 'Katraj', 'MAHARASHTRA', 411038, 'Kanpur,UP', 'Matriculation', 'Brahmin', 'Hindu', 'Hindi', '5000000', 'NO', 'Doctor', 9211420220, 'shikar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pune', NULL, NULL),
(0000000011, 'MH_06', 'Mr', 'F2', '', 'Bhatt', 'M', '1997-10-16', 243523468, 'MIT,PUNE', 'Katraj', 'MAHARASHTRA', 411038, 'Kanpur,UP', 'Matriculation', 'Brahmin', 'Hindu', 'Hindi', '5000000', 'NO', 'Doctor', 9211420220, 'shikar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pune', NULL, NULL),
(0000000012, 'MH_06', 'Mr', 'F3', '', 'Bhatt', 'M', '1997-10-16', 243523468, 'MIT,PUNE', 'Katraj', 'MAHARASHTRA', 411038, 'Kanpur,UP', 'Matriculation', 'Brahmin', 'Hindu', 'Hindi', '5000000', 'NO', 'Doctor', 9211420220, 'shikar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pune', NULL, NULL),
(0000000098, 'MH_01', 'Mr', 'rtyui', 'fghj', 'fghjkl', 'M', '1997-10-10', 123459852, 'asdfg', 'asdas', 'asdsda', 123121, 'afsd', 'sdfsfs', 'sdfsds', 'sdfsfds', 'sdfsd', '5000000', 'NO', 'sdfrjutk', 9869908317, 'kailashgaur10@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asdada', NULL, NULL),
(0000000099, 'MH_01', 'Mr', 'qwerty', 'sds', 'gbf', 'M', '1997-10-10', 12345789654, 'zda', 'sfs', 'MAHARASHTRA', 400112, 'asdam', 'Below 10th', 'Open', 'Hindu', 'asda', 'NONE', 'NO', 'Unemployed', 2356897412, 'kailashgaur10@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, '', NULL, 'ads', NULL, NULL),
(0000000100, 'MH_01', 'Mr', 'zxcvfr', 'asddfs', 'asda', 'M', '1997-10-10', 12345789145, 'asda', 'dsd', 'as', 145698, 'asd', 'd', 'aaaaaaaa', 'ssds', 'aaaaaaa', '546987126', 'NO', 'dsds', 3698521478, 'kailashgaur10@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'asa', NULL, NULL),
(0000000101, 'MH_01', 'Mr', 'KAILASH ', 'RAJ', 'GAUR', 'M', '2017-09-08', 12345789123, 'G 1B NEW NAVY NAGAR,COLABA', 'MUMBAI', 'MAHARASHTRA', 400005, 'MUMABI', 'Under-Graduate', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Student', 9863453414, 'kailashgaur10@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'NO', NULL, 'MUMBAI', NULL, NULL),
(0000000102, 'MH_01', 'Mr', 'KAILASH ', 'RAJ', 'GAUR', 'M', '2017-09-07', 12345789021, 'G 1B NEW NAVY NAGAR,COLABA', 'MUMBAI', 'MAHARASHTRA', 400005, 'MUMABI', 'Under-Graduate', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Student', 9869908317, 'kailashgaur10@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'NO', NULL, 'MUMBAI', NULL, NULL),
(0000000103, 'MH_01', 'Mr', 'KAILASH ', 'RAJ', 'GAUR', 'M', '2017-09-07', 12345789021, 'G 1B NEW NAVY NAGAR,COLABA', 'MUMBAI', 'MAHARASHTRA', 400005, 'MUMABI', 'Under-Graduate', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Student', 9869908317, 'kailashgaur10@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, 'NO', NULL, 'MUMBAI', NULL, NULL),
(0000000104, 'MH_06', 'Mr', 'utdytdtrsdfsctd', '', 'Bhatt', 'M', '1997-10-16', 243523468, 'MIT,PUNE', 'Katraj', 'MAHARASHTRA', 411038, 'Kanpur,UP', 'Matriculation', 'Brahmin', 'Hindu', 'Hindi', '5000000', 'NO', 'Doctor', 9211420220, 'shikar@gmail.com', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'Pune', NULL, NULL),
(0000000105, 'MH_01', 'Mr', 'Kailash', 'Raj', 'Gaur', 'M', '1996-10-16', 243523465, 'MIT,PUNE', 'Kothrud', 'MAHARASHTRA', 411038, 'Jodhpur,Rajasthan', 'Below 10th', 'Open', 'Hindu', 'Marwadi', 'NONE', 'NO', 'Unemployed', 9211420420, 'kailash96@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, '', NULL, 'Pune', NULL, NULL),
(0000000111, 'MH001', 'Mr', 'KAILASH ', 'RAJ', 'GAUR', 'M', '2017-09-15', 12345789021, 'G 1B NEW NAVY NAGAR,COLABA', 'MUMBAI', 'MAHARASHTRA', 400005, 'MUMABI', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 1111111111, 'kailashgaur10@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'MUMBAI', NULL, NULL),
(0000000112, 'MH001', 'Mr', 'KAILASH', 'RAJ', 'GAUR', 'M', '2017-09-15', 12345789021, 'G 1B NEW NAVY NAGAR,COLABA', 'MUMBAI', 'MAHARASHTRA', 400005, 'MUMABI', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 1111111111, 'kailashgaur10@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'MUMBAI', NULL, NULL),
(0000000113, 'MH001', 'Mr', 'KAILASH', 'RAJ', 'GAUR', 'M', '2017-09-15', 12345789021, 'G 1B NEW NAVY NAGAR,COLABA', 'MUMBAI', 'MAHARASHTRA', 400005, 'MUMABI', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 1111111111, 'kailashgaur10@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'MUMBAI', NULL, NULL),
(0000000114, 'MH001', 'Mr', 'KAILASH', 'RAJ', 'GAUR', 'M', '2017-09-15', 12345789021, 'G 1B NEW NAVY NAGAR,COLABA', 'MUMBAI', 'MAHARASHTRA', 400005, 'MUMABI', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 1111111111, 'kailashgaur10@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'MUMBAI', NULL, NULL),
(0000000115, 'MH001', 'Mr', 'KAILASH', 'RAJ', 'GAUR', 'M', '2017-09-15', 12345789021, 'G 1B NEW NAVY NAGAR,COLABA', 'MUMBAI', 'MAHARASHTRA', 400005, 'MUMABI', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 1111111111, 'kailashgaur10@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'MUMBAI', NULL, NULL),
(0000000116, 'MH001', 'Mr', 'KAILASH', 'RAJ', 'GAUR', 'M', '2017-09-15', 12345789021, 'G 1B NEW NAVY NAGAR,COLABA', 'MUMBAI', 'MAHARASHTRA', 400005, 'MUMABI', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 1111111111, 'kailashgaur10@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'MUMBAI', NULL, NULL),
(0000000117, 'MH001', 'Mr', 'KAILASH', 'RAJ', 'GAUR', 'M', '2017-09-15', 12345789021, 'G 1B NEW NAVY NAGAR,COLABA', 'MUMBAI', 'MAHARASHTRA', 400005, 'MUMABI', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 1111111111, 'kailashgaur10@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'MUMBAI', NULL, NULL),
(0000000118, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', NULL, NULL),
(0000000119, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', NULL, NULL),
(0000000120, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', NULL, NULL),
(0000000121, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', ''),
(0000000122, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', ''),
(0000000123, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', ''),
(0000000124, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', ''),
(0000000125, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', ''),
(0000000126, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', ''),
(0000000127, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', ''),
(0000000128, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', ''),
(0000000129, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', ''),
(0000000130, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', ''),
(0000000131, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', ''),
(0000000132, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', ''),
(0000000133, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', ''),
(0000000134, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', ''),
(0000000135, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', '42sxsc24445442'),
(0000000136, 'MH001', 'Mr', 'Kriti', '-', 'bhatt', 'F', '2017-09-09', 124578965321, '123 swaroop nagar', 'KANPUR', 'MAHARASHTRA', 411046, 'KANPUR', 'Below 10th', 'Open', 'Hindu', 'HINDI', 'NONE', 'NO', 'Unemployed', 9211420420, 'kritibhatt92@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', 'd2156321', '42sxsc24445442'),
(0000000137, 'MH001', 'Mr', 'zxcvfr', 'asddfs', 'asda', 'M', '2017-09-09', 111111111111, 'asda', '111111', 'MAHARASHTRA', 145698, '111111111', 'Below 10th', 'Open', 'Hindu', '32312312', 'NONE', 'NO', 'Unemployed', 1111111111, 'kailashgaur10@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'YES', NULL, 'asa', '21321321', '21321321321321'),
(0000000138, 'MH001', 'Mr', 'dfgergrw', 'wefhtyjt', 'tyejuhuet', 'M', '2017-09-09', 122333333333, 'skldfgkr', '3213123', 'MAHARASHTRA', 400069, '3213123', 'Below 10th', 'Open', 'Hindu', '23232321', 'NONE', 'NO', 'Unemployed', 2111111111, 'DFRELPJ@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'dgbyf', '32132321', ''),
(0000000139, 'MH001', 'Mr', 'Piyush', '-', 'kumar', 'M', '2017-09-09', 111111111111, 'abvxcvdsf', 'kukh', 'MAHARASHTRA', 411038, 'hjgh', 'Below 10th', 'Open', 'Hindu', 'rtrt', 'NONE', 'NO', 'Unemployed', 7045262934, 'itspiyushtime@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'NO', NULL, 'Pune', '', ''),
(0000000140, 'MH001', 'Mr', 'Piyush', '-', 'kumar', 'M', '2017-09-09', 111111111111, 'abvxcvdsf', 'kukh', 'MAHARASHTRA', 411038, 'hjgh', 'Below 10th', 'Open', 'Hindu', 'rtrt', 'NONE', 'YES', 'Unemployed', 7045262934, 'itspiyushtime@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'YES', NULL, 'Pune', '35435435', '53453453453454'),
(0000000141, 'MH001', 'Mr', 'Piyush', '-', 'kumar', 'M', '2017-09-09', 111111111111, 'abvxcvdsf', 'kukh', 'MAHARASHTRA', 411038, 'hjgh', 'Below 10th', 'Open', 'Hindu', 'rtrt', 'NONE', 'YES', 'Unemployed', 7045262934, 'itspiyushtime@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'YES', NULL, 'Pune', '35435435', '53453453453454'),
(0000000142, 'MH001', 'Mr', 'Piyush', '-', 'kumar', 'M', '2017-09-09', 111111111111, 'abvxcvdsf', 'kukh', 'MAHARASHTRA', 411038, 'hjgh', 'Below 10th', 'Open', 'Hindu', 'rtrt', 'NONE', 'YES', 'Unemployed', 7045262934, 'itspiyushtime@gmail.com', NULL, NULL, NULL, 000001, NULL, NULL, 'YES', NULL, 'Pune', '35435435', '53453453453454');

-- --------------------------------------------------------

--
-- Table structure for table `vote_table`
--

CREATE TABLE `vote_table` (
  `VOTE_ID` bigint(20) NOT NULL,
  `ELE_YEAR` int(11) NOT NULL DEFAULT '2017',
  `VOTER_ID` int(10) UNSIGNED ZEROFILL DEFAULT NULL,
  `CAND_ID` int(6) UNSIGNED ZEROFILL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidate_table`
--
ALTER TABLE `candidate_table`
  ADD PRIMARY KEY (`CAND_ID`),
  ADD UNIQUE KEY `VOTER_ID` (`VOTER_ID`);

--
-- Indexes for table `cand_cons_table`
--
ALTER TABLE `cand_cons_table`
  ADD KEY `fk_cand_cons` (`CAND_ID`);

--
-- Indexes for table `cand_ro_table`
--
ALTER TABLE `cand_ro_table`
  ADD KEY `fk_cand_ro_1` (`RO_ID`),
  ADD KEY `fk_cand_ro` (`CAND_ID`);

--
-- Indexes for table `fake_table`
--
ALTER TABLE `fake_table`
  ADD PRIMARY KEY (`CAND_ID`),
  ADD UNIQUE KEY `VOTER_ID` (`VOTER_ID`);

--
-- Indexes for table `fo_table`
--
ALTER TABLE `fo_table`
  ADD PRIMARY KEY (`FO_ID`),
  ADD UNIQUE KEY `VOTER_ID` (`VOTER_ID`),
  ADD KEY `fk_fo_polling` (`POLL_ID`);

--
-- Indexes for table `polling_station_table`
--
ALTER TABLE `polling_station_table`
  ADD PRIMARY KEY (`POLL_ID`);

--
-- Indexes for table `ro_table`
--
ALTER TABLE `ro_table`
  ADD PRIMARY KEY (`RO_ID`),
  ADD KEY `fk_ro_voter` (`VOTER_ID`);

--
-- Indexes for table `voter_table`
--
ALTER TABLE `voter_table`
  ADD PRIMARY KEY (`VOTER_ID`),
  ADD KEY `POLL_ID` (`POLL_ID`),
  ADD KEY `fk_voter_proxy` (`P_VID`),
  ADD KEY `fo_voter` (`FO_ID`);

--
-- Indexes for table `vote_table`
--
ALTER TABLE `vote_table`
  ADD PRIMARY KEY (`VOTE_ID`),
  ADD UNIQUE KEY `VOTER_ID` (`VOTER_ID`),
  ADD KEY `fk_vote_cand` (`CAND_ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidate_table`
--
ALTER TABLE `candidate_table`
  MODIFY `CAND_ID` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;
--
-- AUTO_INCREMENT for table `fo_table`
--
ALTER TABLE `fo_table`
  MODIFY `FO_ID` int(6) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ro_table`
--
ALTER TABLE `ro_table`
  MODIFY `RO_ID` int(4) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `voter_table`
--
ALTER TABLE `voter_table`
  MODIFY `VOTER_ID` int(10) UNSIGNED ZEROFILL NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=143;
--
-- AUTO_INCREMENT for table `vote_table`
--
ALTER TABLE `vote_table`
  MODIFY `VOTE_ID` bigint(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate_table`
--
ALTER TABLE `candidate_table`
  ADD CONSTRAINT `fk_candidate_voter` FOREIGN KEY (`VOTER_ID`) REFERENCES `voter_table` (`VOTER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cand_cons_table`
--
ALTER TABLE `cand_cons_table`
  ADD CONSTRAINT `fk_cand_cons` FOREIGN KEY (`CAND_ID`) REFERENCES `candidate_table` (`CAND_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `cand_ro_table`
--
ALTER TABLE `cand_ro_table`
  ADD CONSTRAINT `fk_cand_ro` FOREIGN KEY (`CAND_ID`) REFERENCES `candidate_table` (`CAND_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_cand_ro_1` FOREIGN KEY (`RO_ID`) REFERENCES `ro_table` (`RO_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `fake_table`
--
ALTER TABLE `fake_table`
  ADD CONSTRAINT `fake_voter` FOREIGN KEY (`VOTER_ID`) REFERENCES `voter_table` (`VOTER_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_fake_voter` FOREIGN KEY (`VOTER_ID`) REFERENCES `voter_table` (`VOTER_ID`);

--
-- Constraints for table `fo_table`
--
ALTER TABLE `fo_table`
  ADD CONSTRAINT `fk_fo_polling` FOREIGN KEY (`POLL_ID`) REFERENCES `polling_station_table` (`POLL_ID`),
  ADD CONSTRAINT `fk_fo_voter` FOREIGN KEY (`VOTER_ID`) REFERENCES `voter_table` (`VOTER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `ro_table`
--
ALTER TABLE `ro_table`
  ADD CONSTRAINT `fk_ro_voter` FOREIGN KEY (`VOTER_ID`) REFERENCES `voter_table` (`VOTER_ID`);

--
-- Constraints for table `voter_table`
--
ALTER TABLE `voter_table`
  ADD CONSTRAINT `fk_voter_proxy` FOREIGN KEY (`P_VID`) REFERENCES `voter_table` (`VOTER_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fo_voter` FOREIGN KEY (`FO_ID`) REFERENCES `fo_table` (`FO_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `voter_table_ibfk_1` FOREIGN KEY (`POLL_ID`) REFERENCES `polling_station_table` (`POLL_ID`);

--
-- Constraints for table `vote_table`
--
ALTER TABLE `vote_table`
  ADD CONSTRAINT `fk_vote_cand` FOREIGN KEY (`CAND_ID`) REFERENCES `candidate_table` (`CAND_ID`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `fk_vote_voter` FOREIGN KEY (`VOTER_ID`) REFERENCES `voter_table` (`VOTER_ID`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
