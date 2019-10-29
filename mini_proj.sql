-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 07:42 PM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `mini_proj`
--

-- --------------------------------------------------------

--
-- Table structure for table `booking_detail`
--

CREATE TABLE `booking_detail` (
  `booking_id` int(11) NOT NULL,
  `firstname` varchar(20) NOT NULL,
  `lastname` varchar(20) NOT NULL,
  `email_id` varchar(50) NOT NULL,
  `phone_no` bigint(11) NOT NULL,
  `address` text NOT NULL,
  `hall_name` varchar(150) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `booking_detail`
--

INSERT INTO `booking_detail` (`booking_id`, `firstname`, `lastname`, `email_id`, `phone_no`, `address`, `hall_name`, `date`) VALUES
(1, 'Akshay', 'Deekonda', 'akshay.deekonda@gmail.com', 8433675225, '47/115,B.D.D Chawls,worli', 'Public Hall', '2019-09-30'),
(2, 'Akshay', 'Deekonda', 'akshay.deekonda@gmail.com', 8433675225, '47/115,B.D.D Chawls,worli', 'Public Hall', '2019-09-27');

-- --------------------------------------------------------

--
-- Table structure for table `halls`
--

CREATE TABLE `halls` (
  `hall_id` int(11) NOT NULL,
  `hall_name` varchar(250) NOT NULL,
  `address` text NOT NULL,
  `city` varchar(250) NOT NULL,
  `phone_no1` varchar(15) NOT NULL,
  `phone_no2` varchar(15) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `halls`
--

INSERT INTO `halls` (`hall_id`, `hall_name`, `address`, `city`, `phone_no1`, `phone_no2`) VALUES
(1, 'public hall', 'MIG Colony, Adarsh Nagar, Worli, Mumbai, Maharashtra 400030. 2R8C+F9 Mumbai, Maharashtra.', 'Mumbai', '901549998', '8468499112'),
(2, 'happy hall', 'MIG Colony, Adarsh Nagar, Worli, Mumbai, Maharashtra 400030. 2R8C+F9 Mumbai, Maharashtra.', 'Mumbai', '901541424', '8433675225'),
(3, 'satyam bhavan', 'MIG Colony, Adarsh Nagar, Worli, Mumbai, Maharashtra 400030. 2R8C+F9 Mumbai, Maharashtra.', 'Mumbai', '9029251494', '9860527027'),
(4, 'Jannat Hall', '36, Shivram Seth Amritwar Marg, Arvind Nagar, BDD Chawls Worli, Lower Parel, Mumbai, Maharashtra 400013', 'Delhi', '9865321475', '6598321478'),
(5, 'Shanmukananda Hall', '36, Shivram Seth Amritwar Marg, Arvind Nagar, BDD Chawls Worli, Lower Parel, Mumbai, Maharashtra 400013', 'Delhi', '9865321145', '74598321478'),
(6, 'Janata Hall', '36, Shivram Seth Amritwar Marg, Arvind Nagar, BDD Chawls Worli, Lower Parel, Mumbai, Maharashtra 400013', 'Delhi', '9765321475', '8598321478');

-- --------------------------------------------------------

--
-- Table structure for table `hall_detail`
--

CREATE TABLE `hall_detail` (
  `hall_id` int(11) NOT NULL,
  `capacity` int(11) NOT NULL,
  `speciality` varchar(250) NOT NULL,
  `detail` text NOT NULL,
  `Ac` varchar(50) NOT NULL,
  `price` int(12) NOT NULL,
  `images` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `hall_detail`
--

INSERT INTO `hall_detail` (`hall_id`, `capacity`, `speciality`, `detail`, `Ac`, `price`, `images`) VALUES
(1, 1000, 'Marriages/Family Events', 'Public Hall is ', 'Non Ac', 12000, 'slide3.jpg'),
(2, 3000, 'School Events,Office event', 'Happy Hall is ', 'Ac', 20000, 'slide2.jpg'),
(3, 2500, 'Marriages/Family Events', 'Satyam Hall is ', 'Ac', 16000, 'slide1.jpg'),
(4, 1500, 'Marriages', 'Janat Hall is ', 'Ac', 14000, 'delhi1.jpg'),
(5, 2000, 'Marriages/Events', 'Janat Hall is ', 'Ac', 20000, 'delhi2.jpg'),
(6, 2500, 'Marriages/Anual Functions', 'Janat Hall is ', 'Non Ac', 15000, 'delhi3.jpg');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `booking_detail`
--
ALTER TABLE `booking_detail`
  ADD PRIMARY KEY (`booking_id`);

--
-- Indexes for table `halls`
--
ALTER TABLE `halls`
  ADD PRIMARY KEY (`hall_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `booking_detail`
--
ALTER TABLE `booking_detail`
  MODIFY `booking_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `halls`
--
ALTER TABLE `halls`
  MODIFY `hall_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
