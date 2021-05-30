-- phpMyAdmin SQL Dump
-- version 3.3.9
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Aug 05, 2018 at 05:44 PM
-- Server version: 5.5.8
-- PHP Version: 5.3.5

SET SQL_MODE="NO_AUTO_VALUE_ON_ZERO";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `dbabrar`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`ID`, `Name`, `Email`, `Password`) VALUES
(1, 'saleem', 'saleem.duhs@gmail.com', 'mesaleem'),
(2, 'admin', 'admin@gmail.com', '123');

-- --------------------------------------------------------

--
-- Table structure for table `customer`
--

CREATE TABLE IF NOT EXISTS `customer` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `Name` varchar(50) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(50) NOT NULL,
  `Gender` varchar(100) NOT NULL,
  `City` varchar(100) NOT NULL,
  `Salary` int(11) NOT NULL,
  `Contact_number` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `customer`
--

INSERT INTO `customer` (`ID`, `Name`, `Email`, `Password`, `Gender`, `City`, `Salary`, `Contact_number`) VALUES
(2, 'Saleem baig', 'saleem.duhs@gmail.com', '1234', 'Male', 'Karachi', 20575, '03402117563'),
(4, 'Fatima', 'Fatima@gmail.com', '123', 'Female', 'Islamabad', 56000, '455667788'),
(5, 'Wasim', 'wasimkha@gmail.com', '123', 'Male', 'Karachi', 4000, '034277543'),
(6, 'Dr Bushra ', 'bushra@gmail.com', '1234', 'Female', 'Karachi ', 90000, '03458765433'),
(7, 'Karim', 'Karim12@gmail.com', '1234', 'Male', 'Karachi ', 20575, '3458765433'),
(8, 'Naila', 'Nailakhan@gmail.com', '123', 'Female', 'Lahore', 25000, '4598888833');

-- --------------------------------------------------------

--
-- Table structure for table `laptop_information`
--

CREATE TABLE IF NOT EXISTS `laptop_information` (
  `Laptop_name` varchar(50) NOT NULL,
  `Model_number` int(11) NOT NULL,
  `Total_amount` int(11) NOT NULL,
  `Down_payment` int(11) NOT NULL,
  `Image` varchar(50) NOT NULL,
  PRIMARY KEY (`Model_number`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop_information`
--

INSERT INTO `laptop_information` (`Laptop_name`, `Model_number`, `Total_amount`, `Down_payment`, `Image`) VALUES
('Lenovo', 420, 13999, 4000, 'images/laptop/img4.jpg'),
('Lenovo Legion Y', 520, 148000, 48000, 'images/laptop/img5.jpg'),
('HP Stream 11 ', 2233, 19000, 9000, 'images/laptop/img1.jpg'),
('DELL Inspiron', 3576, 66999, 20000, 'images/laptop/img3.jpg'),
('Dell Latitude ', 6430, 18000, 8000, 'images/laptop/img.jpg'),
('HP Probook 450 G5 ', 8765, 68000, 20000, 'images/laptop/img2.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `laptop_lease`
--

CREATE TABLE IF NOT EXISTS `laptop_lease` (
  `6_months` int(11) NOT NULL,
  `12_months` int(11) NOT NULL,
  `18_months` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `laptop_lease`
--

INSERT INTO `laptop_lease` (`6_months`, `12_months`, `18_months`) VALUES
(25, 45, 65);

-- --------------------------------------------------------

--
-- Table structure for table `users_applied`
--

CREATE TABLE IF NOT EXISTS `users_applied` (
  `ID` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `Name` varchar(50) NOT NULL,
  `Comp_name` varchar(50) NOT NULL,
  `Model_no` int(11) NOT NULL,
  `Address` varchar(100) NOT NULL,
  `Installment` int(11) NOT NULL,
  `Pay_option` varchar(20) NOT NULL,
  `Status` varchar(20) NOT NULL,
  PRIMARY KEY (`ID`)
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=16 ;

--
-- Dumping data for table `users_applied`
--

INSERT INTO `users_applied` (`ID`, `user_id`, `Name`, `Comp_name`, `Model_no`, `Address`, `Installment`, `Pay_option`, `Status`) VALUES
(1, 4, 'Fatima', 'HP Stream 11', 2233, 'Rahim View Supper Highway karachi ', 18, 'cash', 'Approved'),
(3, 2, 'saleem', 'Dell Latitude', 2233, 'Super Highway Karachi ', 6, 'cash', 'Approved'),
(4, 4, 'Fatima', 'HP Stream 11', 4444, 'ewerwerwer', 12, 'cash', 'Pending'),
(7, 3, 'Sumbal', 'Lenovo', 4522, 'Islamabad Pakistan', 18, 'cash', 'Pending'),
(12, 2, 'Saleem', 'HP Stream 11', 34566, 'Allied center Golimar No 1 karachi pakistan', 18, 'cash', 'Approved'),
(13, 6, 'Lenovo', '420', 13999, 'Bahadur Abad Karachi', 12, 'cash', 'Approved'),
(14, 6, 'Dr bushra', 'levono', 420, 'Islamabad', 12, 'cash', 'Pending'),
(15, 8, 'Naila', 'Dell Latitude ', 6430, 'Islamabad Pakistan', 12, 'cash', 'Approved');
