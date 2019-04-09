-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 08, 2019 at 12:09 PM
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ospda_vt`
--

-- --------------------------------------------------------

--
-- Table structure for table `data`
--

CREATE TABLE `data` (
  `ID` int(50) NOT NULL,
  `name` varchar(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `pass` varchar(50) NOT NULL,
  `email` varchar(50) NOT NULL,
  `mobile` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `data`
--

INSERT INTO `data` (`ID`, `name`, `uname`, `pass`, `email`, `mobile`) VALUES
(9, 'Vishal Thakur', 'vishal', 'qwerty', 'vishalthakur301999@gmail.com', '9654474702'),
(10, 'Arpan Luhadiya', 'arpan', 'qwerty', 'arpan@gmail.com', '3423452323');

-- --------------------------------------------------------

--
-- Table structure for table `selling`
--

CREATE TABLE `selling` (
  `id` int(50) NOT NULL,
  `uname` varchar(50) NOT NULL,
  `umobile` varchar(10) NOT NULL,
  `iname` varchar(50) NOT NULL,
  `itype` varchar(50) NOT NULL,
  `ibrand` varchar(50) NOT NULL,
  `idop` date NOT NULL,
  `icond` varchar(50) NOT NULL,
  `uploaddate` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `price` float NOT NULL,
  `negotiable` tinyint(1) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `selling`
--

INSERT INTO `selling` (`id`, `uname`, `umobile`, `iname`, `itype`, `ibrand`, `idop`, `icond`, `uploaddate`, `price`, `negotiable`) VALUES
(1, 'vishal', '4654654669', '6T', 'Mobiles', 'Oneplus', '2019-03-04', 'Good', '2019-03-12 18:26:43', 30000, 1),
(2, 'vishal', '9988998899', '6T', 'Mobiles', 'Oneplus', '2019-03-02', 'Ok', '2019-03-12 18:29:00', 25000, 0),
(3, 'arpan', '3423452323', 'KAPDA', 'Clothing', 'MAKAAN', '2019-02-27', 'Good', '2019-03-13 14:14:09', 2323, 0);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `data`
--
ALTER TABLE `data`
  ADD PRIMARY KEY (`ID`);

--
-- Indexes for table `selling`
--
ALTER TABLE `selling`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `data`
--
ALTER TABLE `data`
  MODIFY `ID` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `selling`
--
ALTER TABLE `selling`
  MODIFY `id` int(50) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
