-- phpMyAdmin SQL Dump
-- version 4.8.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 29, 2018 at 05:06 PM
-- Server version: 10.1.32-MariaDB
-- PHP Version: 7.2.5

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project1`
--

-- --------------------------------------------------------

--
-- Table structure for table `club`
--

CREATE TABLE `club` (
  `club_id` int(20) NOT NULL,
  `name_of_club` varchar(100) DEFAULT NULL,
  `date_of_establishment` date DEFAULT NULL,
  `a_house_no` varchar(100) DEFAULT NULL,
  `a_location` varchar(100) DEFAULT NULL,
  `a_street` varchar(100) DEFAULT NULL,
  `a_thana` varchar(100) DEFAULT NULL,
  `a_district` varchar(100) DEFAULT NULL,
  `a_post_code` int(20) DEFAULT NULL,
  `name_of_president` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `club`
--

INSERT INTO `club` (`club_id`, `name_of_club`, `date_of_establishment`, `a_house_no`, `a_location`, `a_street`, `a_thana`, `a_district`, `a_post_code`, `name_of_president`) VALUES
(1, 'Rangpur Rider', '2012-04-20', 'block-2', 'mirpur', 'mirpur', 'vatara', 'Dhaka', 1217, 'Abul Kalam');

-- --------------------------------------------------------

--
-- Table structure for table `contract`
--

CREATE TABLE `contract` (
  `contract_id` int(20) NOT NULL,
  `club_id` int(20) NOT NULL,
  `club_name` varchar(200) DEFAULT NULL,
  `f_first_name` varchar(200) DEFAULT NULL,
  `f_last_name` varchar(100) DEFAULT NULL,
  `p_id` int(20) NOT NULL,
  `a_first_name` varchar(200) NOT NULL,
  `a_last_name` varchar(200) DEFAULT NULL,
  `a_designation` varchar(100) DEFAULT NULL,
  `c_start_date` date DEFAULT NULL,
  `c_end_date` date DEFAULT NULL,
  `c_amount` float DEFAULT NULL,
  `contract_w1` varchar(200) NOT NULL,
  `contract_w2` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `contract`
--

INSERT INTO `contract` (`contract_id`, `club_id`, `club_name`, `f_first_name`, `f_last_name`, `p_id`, `a_first_name`, `a_last_name`, `a_designation`, `c_start_date`, `c_end_date`, `c_amount`, `contract_w1`, `contract_w2`) VALUES
(1, 1, 'Rangpur Riders', 'Ishtiaq', 'Kadir', 1, 'imtiaz ', 'Kadir', 'Businessman', '2014-01-01', '2016-08-02', 500000, 'abir', 'sadman'),
(3, 3, 'Rangpur Riders', 'imtiaz ', 'kadir', 3, 'ishtiaq', 'Kadir', 'Businessman', '2017-04-03', '2019-09-02', 500000, 'akhi', 'emon');

-- --------------------------------------------------------

--
-- Table structure for table `educational_qua`
--

CREATE TABLE `educational_qua` (
  `name_of_degree` varchar(50) DEFAULT NULL,
  `department` varchar(100) NOT NULL,
  `board` varchar(50) DEFAULT NULL,
  `year` tinytext,
  `result` float DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `educational_qua`
--

INSERT INTO `educational_qua` (`name_of_degree`, `department`, `board`, `year`, `result`) VALUES
('Bsc', 'Cse', 'North South University', '2018', 3.5);

-- --------------------------------------------------------

--
-- Table structure for table `matchinfo`
--

CREATE TABLE `matchinfo` (
  `event_id` varchar(300) NOT NULL,
  `venue_id` varchar(300) NOT NULL,
  `date_of_match` date NOT NULL,
  `match_id` varchar(300) NOT NULL,
  `man_of_match` varchar(300) NOT NULL,
  `umpires` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `matchinfo`
--

INSERT INTO `matchinfo` (`event_id`, `venue_id`, `date_of_match`, `match_id`, `man_of_match`, `umpires`) VALUES
('1', '1', '2018-08-02', '2', 'Ishtiaq Kadir', 'kazi kamal');

-- --------------------------------------------------------

--
-- Table structure for table `payment`
--

CREATE TABLE `payment` (
  `payment_id` int(20) NOT NULL,
  `serial_num` int(25) NOT NULL,
  `due_date` date NOT NULL,
  `payment_date` date NOT NULL,
  `amount` float NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `payment`
--

INSERT INTO `payment` (`payment_id`, `serial_num`, `due_date`, `payment_date`, `amount`) VALUES
(1, 1, '2019-01-02', '2018-08-30', 450000),
(2, 2, '2017-05-04', '2018-09-08', 50000);

-- --------------------------------------------------------

--
-- Table structure for table `performance`
--

CREATE TABLE `performance` (
  `p_id` int(40) NOT NULL,
  `match_id` int(40) NOT NULL,
  `venue_id` int(40) NOT NULL,
  `date_of_match` date NOT NULL,
  `wickets` varchar(300) NOT NULL,
  `runs` varchar(300) NOT NULL,
  `per_formance` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `performance`
--

INSERT INTO `performance` (`p_id`, `match_id`, `venue_id`, `date_of_match`, `wickets`, `runs`, `per_formance`) VALUES
(1, 1, 1, '2018-04-20', '5', '50', 'good');

-- --------------------------------------------------------

--
-- Table structure for table `player_registration`
--

CREATE TABLE `player_registration` (
  `p_id` int(200) NOT NULL,
  `first_name` varchar(30) NOT NULL,
  `last_name` varchar(30) NOT NULL,
  `fathers_name` varchar(30) NOT NULL,
  `mothers_name` varchar(30) NOT NULL,
  `pre_houseno` varchar(10) NOT NULL,
  `pre_location` varchar(20) NOT NULL,
  `pre_village` varchar(20) NOT NULL,
  `pre_thana` varchar(20) NOT NULL,
  `pre_district` varchar(20) NOT NULL,
  `pre_postcode` int(20) NOT NULL,
  `per_houseno` varchar(10) NOT NULL,
  `per_location` varchar(30) NOT NULL,
  `per_village` varchar(30) NOT NULL,
  `per_thana` varchar(30) NOT NULL,
  `per_district` varchar(30) NOT NULL,
  `per_postcode` int(20) NOT NULL,
  `date_of_birth` date NOT NULL,
  `b_club_name` varchar(30) NOT NULL,
  `b_opponent_club` varchar(30) NOT NULL,
  `b_event_id` int(20) NOT NULL,
  `b_match_id` int(20) NOT NULL,
  `b_runs` int(20) NOT NULL,
  `b_wickets` int(20) NOT NULL,
  `membership` varchar(20) NOT NULL,
  `signature` text NOT NULL,
  `date_of_player` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `player_registration`
--

INSERT INTO `player_registration` (`p_id`, `first_name`, `last_name`, `fathers_name`, `mothers_name`, `pre_houseno`, `pre_location`, `pre_village`, `pre_thana`, `pre_district`, `pre_postcode`, `per_houseno`, `per_location`, `per_village`, `per_thana`, `per_district`, `per_postcode`, `date_of_birth`, `b_club_name`, `b_opponent_club`, `b_event_id`, `b_match_id`, `b_runs`, `b_wickets`, `membership`, `signature`, `date_of_player`) VALUES
(3, 'ishtiaq', 'kadir', 'Zaher Uddin Miah', 'Mahbuba Begum', '16/kha', 'Modhubag', 'Moghbazar', 'Ramna', 'Dhaka', 1217, '16/kha ', 'Modhubag', 'Moghbazar', 'Ramna', 'Dhaka', 1217, '1995-11-03', 'Khulna rider', 'Barishal Bulls', 1, 1, 50, 2, 'ICCB', 'ishtiaq', '2018-08-30');

-- --------------------------------------------------------

--
-- Table structure for table `previous_his`
--

CREATE TABLE `previous_his` (
  `prev_club_name` varchar(200) NOT NULL,
  `prev_from` date DEFAULT NULL,
  `prev_to` date DEFAULT NULL,
  `total_runs` int(20) DEFAULT NULL,
  `total_wickets` int(20) DEFAULT NULL,
  `team_leader` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `previous_his`
--

INSERT INTO `previous_his` (`prev_club_name`, `prev_from`, `prev_to`, `total_runs`, `total_wickets`, `team_leader`) VALUES
('borishal bulls', '2017-03-20', '2018-02-04', 200, 6, 'Yes');

-- --------------------------------------------------------

--
-- Table structure for table `teaminfo`
--

CREATE TABLE `teaminfo` (
  `club_id` varchar(300) NOT NULL,
  `p_id` varchar(300) NOT NULL,
  `team_formation` date NOT NULL,
  `event_id` varchar(300) NOT NULL,
  `leader_id` varchar(300) NOT NULL,
  `name` varchar(300) NOT NULL,
  `coach_id` varchar(300) NOT NULL,
  `coach_name` varchar(300) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `teaminfo`
--

INSERT INTO `teaminfo` (`club_id`, `p_id`, `team_formation`, `event_id`, `leader_id`, `name`, `coach_id`, `coach_name`) VALUES
('1', '1', '2018-04-20', '3', 'ishtiaq Kadir', 'ishtiaq kadir', '1', 'tom cruz');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `club`
--
ALTER TABLE `club`
  ADD PRIMARY KEY (`club_id`);

--
-- Indexes for table `contract`
--
ALTER TABLE `contract`
  ADD PRIMARY KEY (`contract_id`);

--
-- Indexes for table `matchinfo`
--
ALTER TABLE `matchinfo`
  ADD PRIMARY KEY (`event_id`);

--
-- Indexes for table `payment`
--
ALTER TABLE `payment`
  ADD PRIMARY KEY (`payment_id`);

--
-- Indexes for table `performance`
--
ALTER TABLE `performance`
  ADD PRIMARY KEY (`p_id`);

--
-- Indexes for table `player_registration`
--
ALTER TABLE `player_registration`
  ADD PRIMARY KEY (`p_id`),
  ADD UNIQUE KEY `b_event_id` (`b_event_id`),
  ADD UNIQUE KEY `p_id` (`p_id`);

--
-- Indexes for table `teaminfo`
--
ALTER TABLE `teaminfo`
  ADD PRIMARY KEY (`club_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `payment`
--
ALTER TABLE `payment`
  MODIFY `payment_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `performance`
--
ALTER TABLE `performance`
  MODIFY `p_id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `player_registration`
--
ALTER TABLE `player_registration`
  MODIFY `p_id` int(200) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
