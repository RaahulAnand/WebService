- phpMyAdmin SQL Dump
-- version 4.5.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 26, 2017 at 06:40 AM
-- Server version: 10.1.9-MariaDB
-- PHP Version: 5.5.30

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `getlocally`
--

-- --------------------------------------------------------

--
-- Table structure for table `buyer`
--

CREATE TABLE `buyer` (
  `bid` int(11) NOT NULL,
  `Email` varchar(40) NOT NULL,
  `Pass` varchar(40) NOT NULL,
  `Date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `buyer`
--

INSERT INTO `buyer` (`bid`, `Email`, `Pass`, `Date`) VALUES
(20, 'anand.raahul@gmail.com', 'kamal@123', '2017-03-11'),
(23, 'sapthagiri@gmail.com', '12345', '2017-03-11');

-- --------------------------------------------------------

--
-- Table structure for table `quetation`
--

CREATE TABLE `quetation` (
  `qid` int(11) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `brand` varchar(40) NOT NULL,
  `quantity` int(11) NOT NULL,
  `catogery` varchar(40) NOT NULL,
  `location` varchar(30) NOT NULL,
  `pincode` int(6) NOT NULL,
  `description` varchar(50) NOT NULL,
  `date` date NOT NULL,
  `email` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `quetation`
--

INSERT INTO `quetation` (`qid`, `pname`, `brand`, `quantity`, `catogery`, `location`, `pincode`, `description`, `date`, `email`) VALUES
(7, 'lenovo yoga tablet', 'lenovo', 1, 'Laptops', 'chennai', 600001, 'New and Model ?', '2017-03-11', 'sapthagiri@gmail.com'),
(8, 'galaxy note 5', 'samsung', 1, 'Mobiles', 'vellore', 600001, 'Price of Note 5?', '2017-03-11', 'anand.raahul@gmail.com'),
(9, 'g580', 'lenovo', 0, 'Laptops', 'chennai', 600001, 'fdgh', '2017-03-13', 'anand.raahul@gmail.com'),
(10, 'qwert', 'MICROMAX', 0, 'Laptops', 'vellore', 624301, 'tyfyuhjknk', '2017-03-15', 'anand.raahul@gmail.com'),
(11, 'ertrer', 'sony', 0, 'Computers', 'vellore', 600001, 'rrttdeffyjhnhjklhklj', '2017-03-21', 'anand.raahul@gmail.com'),
(12, 'ditha', 'ditha', 0, 'Computers', 'vellore', 600001, '', '2017-03-23', 'anand.raahul@gmail.com');

-- --------------------------------------------------------

--
-- Table structure for table `seller`
--

CREATE TABLE `seller` (
  `sid` int(11) NOT NULL,
  `name` varchar(30) NOT NULL,
  `email` varchar(50) NOT NULL,
  `contact` int(10) NOT NULL,
  `company` varchar(30) NOT NULL,
  `city` varchar(20) NOT NULL,
  `pincode` int(6) NOT NULL,
  `tin` varchar(30) NOT NULL,
  `password` varchar(20) NOT NULL,
  `date` date NOT NULL,
  `catogery` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `seller`
--

INSERT INTO `seller` (`sid`, `name`, `email`, `contact`, `company`, `city`, `pincode`, `tin`, `password`, `date`, `catogery`) VALUES
(7, 'Raahul', 'welcome@gmail.com', 2147483647, 'GetLocally', 'Dindigul', 624301, '1234567890', '12345', '2017-03-11', 'Mobiles'),
(26, 'saptha', 'sapthagr@gmail.com', 123412, 'SAPTHA MOBILES', 'thiruvanamalai', 600001, '1234567890', '12345', '2017-03-12', 'Computers'),
(27, 'saptha', 'sapthagr@gmail.com', 123412, 'SAPTHA MOBILES', 'thiruvanamalai', 600001, '1234567890', '12345', '2017-03-12', 'Laptops'),
(28, 'saptha', 'sapthagr@gmail.com', 123412, 'SAPTHA MOBILES', 'thiruvanamalai', 600001, '1234567890', '12345', '2017-03-12', 'Mobiles'),
(29, 'saptha', 'sapthagr@gmail.com', 123412, 'SAPTHA MOBILES', 'thiruvanamalai', 600001, '1234567890', '12345', '2017-03-12', 'Cameras'),
(30, 'saptha', 'sapthagr@gmail.com', 123412, 'SAPTHA MOBILES', 'thiruvanamalai', 600001, '1234567890', '12345', '2017-03-12', 'Printers'),
(31, 'Raahul', 'welcome@gmail.com', 2147483647, 'GetLocally', 'Dindigul', 624301, '1234567890', '12345', '2017-03-11', 'Laptops');

-- --------------------------------------------------------

--
-- Table structure for table `sellerques`
--

CREATE TABLE `sellerques` (
  `id` int(11) NOT NULL,
  `pname` varchar(40) NOT NULL,
  `shopname` varchar(40) NOT NULL,
  `availablity` varchar(10) NOT NULL,
  `delivery` varchar(10) NOT NULL,
  `cost` varchar(10) NOT NULL,
  `sellemail` varchar(30) NOT NULL,
  `description` varchar(50) NOT NULL,
  `buyemail` varchar(30) NOT NULL,
  `date` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `sellerques`
--

INSERT INTO `sellerques` (`id`, `pname`, `shopname`, `availablity`, `delivery`, `cost`, `sellemail`, `description`, `buyemail`, `date`) VALUES
(9, 'lenovo yoga tablet', 'SAPTHA MOBILES', '23', '3 days', '15000', 'sapthagr@gmail.com', 'ewrthj,vxc ', 'sapthagiri@gmail.com', '2017-03-12'),
(10, 'g580', 'SAPTHA MOBILES', '1', '2 days', '3000009', 'sapthagr@gmail.com', 'drtfyghk', 'anand.raahul@gmail.com', '2017-03-13'),
(12, 'ertrer', 'SAPTHA MOBILES', '2', 'e5', '233342342', 'sapthagr@gmail.com', '', 'anand.raahul@gmail.com', '2017-03-21'),
(13, 'qwert', 'GetLocally', '1', '2 days', '30000', 'welcome@gmail.com', 'dfdsgghhg', 'anand.raahul@gmail.com', '2017-03-22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buyer`
--
ALTER TABLE `buyer`
  ADD PRIMARY KEY (`bid`);

--
-- Indexes for table `quetation`
--
ALTER TABLE `quetation`
  ADD PRIMARY KEY (`qid`);

--
-- Indexes for table `seller`
--
ALTER TABLE `seller`
  ADD PRIMARY KEY (`sid`);

--
-- Indexes for table `sellerques`
--
ALTER TABLE `sellerques`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buyer`
--
ALTER TABLE `buyer`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=24;
--
-- AUTO_INCREMENT for table `quetation`
--
ALTER TABLE `quetation`
  MODIFY `qid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;
--
-- AUTO_INCREMENT for table `seller`
--
ALTER TABLE `seller`
  MODIFY `sid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;
--
-- AUTO_INCREMENT for table `sellerques`
--
ALTER TABLE `sellerques`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
