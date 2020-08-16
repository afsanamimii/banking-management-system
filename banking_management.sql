-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 16, 2020 at 04:36 PM
-- Server version: 10.1.37-MariaDB
-- PHP Version: 7.3.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `banking_management`
--

-- --------------------------------------------------------

--
-- Stand-in structure for view `borrower`
-- (See below for the actual view)
--
CREATE TABLE `borrower` (
`customer_ID` int(11)
,`first_name` char(22)
,`Last_name` char(22)
,`phone_number` varchar(11)
,`email` varchar(60)
,`branch` varchar(40)
,`loan_ammount` int(11)
,`taking_date` date
,`interest_rate` int(11)
,`duration` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `branch_address`
--

CREATE TABLE `branch_address` (
  `branch_name` varchar(50) DEFAULT NULL,
  `branch_add` varchar(50) DEFAULT NULL,
  `branch_manager` varchar(30) DEFAULT NULL,
  `contact_number` varchar(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `customer_info`
--

CREATE TABLE `customer_info` (
  `customer_ID` int(11) NOT NULL,
  `first_name` char(22) DEFAULT NULL,
  `last_name` char(22) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone_number` varchar(11) DEFAULT NULL,
  `gender` varchar(20) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `branch` varchar(50) DEFAULT NULL,
  `date_of_birth` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `customer_info`
--

INSERT INTO `customer_info` (`customer_ID`, `first_name`, `last_name`, `address`, `phone_number`, `gender`, `email`, `branch`, `date_of_birth`) VALUES
(1, 'afsana', 'mimi', 'sanirakhra', '01991074972', 'female', 'mimi@gmail.com', 'rampura', '1998-04-03'),
(2, 'sayeda', 'anika', 'khilgoan 56,2', '01568727656', 'female', 'fatema@gmail.com', 'rampura', '1997-03-09'),
(3, 'sadia', 'barsha', '15/2 a,hatirpul', '01521348256', 'female', 'barsha@gmail.com', 'progoti sarani', '1997-11-03'),
(4, 'hamid', 'rahman', 'sanirakhra56/2', '016743278', 'male', 'pipu@gmail.com', 'Jatrabari', '2000-06-05'),
(6, 'arif', 'rahman', '56/3a ,bonosree', '0162890182', 'male', 'arif@gmail.com', 'Motijheel', '1998-10-03'),
(7, 'jitu', 'ahmed', 'sorail', '0189797233', 'male', 'jitu@gmail.com', 'Badda', '1994-06-03'),
(8, 'medha', 'paul', 'malibag', '01670613252', 'female', 'medha@gmail.com', 'Malibagh', '1998-08-09'),
(9, 'rahik', 'ahmed', 'banglamotor', '01706303191', 'male', 'aaaaa@gmail.com', 'Malibagh', '2000-01-05'),
(10, 'sayeda', 'ananna', 'khilgoan', '0187386863', 'female', 'ananna@gmail.com', 'Khilgoan', '2000-07-11');

-- --------------------------------------------------------

--
-- Table structure for table `deposite`
--

CREATE TABLE `deposite` (
  `customer_ID` int(11) DEFAULT NULL,
  `branch` varchar(40) DEFAULT NULL,
  `deposite_ammount` int(11) DEFAULT NULL,
  `saving_date` date DEFAULT NULL,
  `interest_rate` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `deposite`
--

INSERT INTO `deposite` (`customer_ID`, `branch`, `deposite_ammount`, `saving_date`, `interest_rate`, `duration`) VALUES
(1, 'Rampura', 60775, '2019-04-01', 5, 2),
(8, 'Malibagh', 45148, '2018-08-03', 5, 4),
(3, 'Progoti Sarani', 66150, '2018-09-08', 5, 6);

-- --------------------------------------------------------

--
-- Stand-in structure for view `depositor`
-- (See below for the actual view)
--
CREATE TABLE `depositor` (
`customer_ID` int(11)
,`first_name` char(22)
,`last_name` char(22)
,`phone_number` varchar(11)
,`email` varchar(60)
,`branch` varchar(50)
,`deposite_ammount` int(11)
,`saving_date` date
,`interest_rate` int(11)
,`duration` int(11)
);

-- --------------------------------------------------------

--
-- Table structure for table `loan`
--

CREATE TABLE `loan` (
  `customer_ID` int(11) DEFAULT NULL,
  `branch` varchar(40) DEFAULT NULL,
  `loan_ammount` int(11) DEFAULT NULL,
  `taking_date` date DEFAULT NULL,
  `interest_rate` int(11) DEFAULT NULL,
  `duration` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loan`
--

INSERT INTO `loan` (`customer_ID`, `branch`, `loan_ammount`, `taking_date`, `interest_rate`, `duration`) VALUES
(4, 'Jatrabari', 6576, '2018-04-01', 5, 2),
(2, 'Rampura', 11025, '2016-06-07', 5, 4),
(6, 'Motijheel', 15000, '2018-03-03', 5, 2),
(4, 'Khilgoan', 10000, '2014-06-01', 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `loginform`
--

CREATE TABLE `loginform` (
  `ID` int(11) NOT NULL,
  `user` varchar(50) NOT NULL,
  `Pass` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `loginform`
--

INSERT INTO `loginform` (`ID`, `user`, `Pass`) VALUES
(1, 'admin', 'admin');

-- --------------------------------------------------------

--
-- Structure for view `borrower`
--
DROP TABLE IF EXISTS `borrower`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `borrower`  AS  select `customer_info`.`customer_ID` AS `customer_ID`,`customer_info`.`first_name` AS `first_name`,`customer_info`.`last_name` AS `Last_name`,`customer_info`.`phone_number` AS `phone_number`,`customer_info`.`email` AS `email`,`loan`.`branch` AS `branch`,`loan`.`loan_ammount` AS `loan_ammount`,`loan`.`taking_date` AS `taking_date`,`loan`.`interest_rate` AS `interest_rate`,`loan`.`duration` AS `duration` from (`loan` join `customer_info`) where (`customer_info`.`customer_ID` = `loan`.`customer_ID`) ;

-- --------------------------------------------------------

--
-- Structure for view `depositor`
--
DROP TABLE IF EXISTS `depositor`;

CREATE ALGORITHM=UNDEFINED DEFINER=`root`@`localhost` SQL SECURITY DEFINER VIEW `depositor`  AS  select `customer_info`.`customer_ID` AS `customer_ID`,`customer_info`.`first_name` AS `first_name`,`customer_info`.`last_name` AS `last_name`,`customer_info`.`phone_number` AS `phone_number`,`customer_info`.`email` AS `email`,`customer_info`.`branch` AS `branch`,`deposite`.`deposite_ammount` AS `deposite_ammount`,`deposite`.`saving_date` AS `saving_date`,`deposite`.`interest_rate` AS `interest_rate`,`deposite`.`duration` AS `duration` from (`customer_info` join `deposite`) where (`customer_info`.`customer_ID` = `deposite`.`customer_ID`) ;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `customer_info`
--
ALTER TABLE `customer_info`
  ADD PRIMARY KEY (`customer_ID`);

--
-- Indexes for table `loginform`
--
ALTER TABLE `loginform`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `customer_info`
--
ALTER TABLE `customer_info`
  MODIFY `customer_ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `loginform`
--
ALTER TABLE `loginform`
  MODIFY `ID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
