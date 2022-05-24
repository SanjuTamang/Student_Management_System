-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 12, 2022 at 09:03 PM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.1.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dums`
--

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `s_id` int(222) NOT NULL,
  `uid` varchar(30) NOT NULL,
  `branch` varchar(20) NOT NULL,
  `studentname` text NOT NULL,
  `nickname` text NOT NULL DEFAULT 'nickname',
  `fathername` text NOT NULL,
  `mothername` text NOT NULL,
  `studentmobile` varchar(15) NOT NULL,
  `parentsmobile` int(15) NOT NULL,
  `youremail` varchar(30) NOT NULL,
  `parentsemail` varchar(30) NOT NULL,
  `aadharno` varchar(40) NOT NULL,
  `parentsaadharno` varchar(40) NOT NULL,
  `tenthboardname` text NOT NULL,
  `twelvethboardname` text NOT NULL,
  `tenthmarks` int(4) NOT NULL,
  `twelvemarks` int(4) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`s_id`, `uid`, `branch`, `studentname`, `nickname`, `fathername`, `mothername`, `studentmobile`, `parentsmobile`, `youremail`, `parentsemail`, `aadharno`, `parentsaadharno`, `tenthboardname`, `twelvethboardname`, `tenthmarks`, `twelvemarks`) VALUES
(1, '', '', 'fgdgh', 'fdhdfhg', 'nbmvbmdf', 'dfghfhfg', '678568', 34654645, 'utyu@gmail.com', 'fghfhg@gjgj.com', '567575', '79879080', 'vbnvbn', 'fghfhf', 68, 98),
(19, '19BCA1165', 'UIC', 'D KARTIK', 'dk', 'kapildeo prasad', 'usha devi', '6158950650', 2147483647, 'devloperdkartik@gmail.com', 'devloperdkartik@gmail.com', '6567686868686', '645727343487', 'bsed', 'bseb', 68, 63),
(21, '19BCA1188', 'UIC', 'Sanju Tamang', 'samson', 'Asdsds', 'hghgjh', '7823467589', 2147483647, 'abcd@gmail.com', 'kljh@gmail.com', '235476983276', '561290679812', 'Nepal Board', 'Nepal board', 99, 89);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`s_id`),
  ADD UNIQUE KEY `yourmobile` (`studentmobile`),
  ADD UNIQUE KEY `parentsemail` (`parentsemail`),
  ADD UNIQUE KEY `youremail` (`youremail`),
  ADD UNIQUE KEY `youraadharno` (`aadharno`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `s_id` int(222) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
