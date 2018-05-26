-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 05, 2018 at 10:54 AM
-- Server version: 5.7.14
-- PHP Version: 5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `transport`
--

-- --------------------------------------------------------

--
-- Table structure for table `book`
--

CREATE TABLE `book` (
  `bid` int(11) NOT NULL,
  `cid` int(11) NOT NULL,
  `source` varchar(20) NOT NULL,
  `destination` varchar(20) NOT NULL,
  `weight` int(10) NOT NULL,
  `date` varchar(10) NOT NULL,
  `type` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `book`
--

INSERT INTO `book` (`bid`, `cid`, `source`, `destination`, `weight`, `date`, `type`) VALUES
(2, 0, 'ddn', 'kjn', 0, '20/12/2018', 'truck'),
(3, 0, 'ddn', 'dkfs', 0, '2018-11-06', 'truck'),
(4, 0, 'ddn', 'asbh', 0, '2018-05-09', 'truck'),
(5, 0, 'ddn', 'ddsc', 0, '2018-05-03', 'truck'),
(6, 0, 'ddn', 'ddsc', 0, '2018-05-03', 'truck'),
(7, 0, 'fcd', 'fvdwr', 0, '2018-05-12', 'truck'),
(8, 0, 'ddn', 'dscsd', 0, '2018-05-19', 'truck'),
(9, 0, 'ds', 'd ksmd', 0, '2018-05-25', 'truck'),
(10, 0, 'snck', 'snc', 0, '2018-05-11', 'truck'),
(11, 0, 'ekecf', ',mds ', 0, '2018-05-18', 'truck'),
(15, 1, 'Dehrdaun', 'Delhi', 25, '2018-05-16', 'truck'),
(19, 32, 'dehradun', 'chamba', 2, '2019-05-08', 'minitruck'),
(18, 31, 'bihar', 'chappra', 100, '2018-05-06', 'truck');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `cid` int(11) NOT NULL,
  `name` varchar(20) NOT NULL,
  `email` varchar(40) NOT NULL,
  `pass` varchar(20) NOT NULL,
  `address` varchar(100) NOT NULL,
  `phoneno` varchar(20) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`cid`, `name`, `email`, `pass`, `address`, `phoneno`) VALUES
(1, 'ahkb', 'abc@gmail.com', 'abc', 'igivl;gvlbjh', '61512313'),
(14, 'Him', 'him@gmail.com', '123', 'yfjhgjh', '987'),
(13, 'Raturi', 'raturi@gmail.com', 'akku', 'jhbcj', '36'),
(12, 'Rauri', 'rasjk@gmail.com', 'akku', 'bshdch', '36'),
(10, 'Nsf,msc', 'cscbsc@gmail.com', 's c,', 'mn c', '3525'),
(9, 'Ygwd', 'khwbd@gmail.com', 'kjbwd', 'ijd', '256'),
(17, 'Kal', 'kal@gmail.com', 'qwerty', 'sdfghjjk', '9876543210'),
(31, 'Himanshu', 'himanshuraturi9@gmail.com', 'qwerty', 'Dehradun', '8520741963'),
(19, 'Qwe', 'qwe@gmail.com', 'qwer', 'dfkfdk', '9874563210'),
(22, 'Anshul', 'anshul@gmail.com', 'anshul', 'hjkl', '9874563210'),
(34, 'Sjshksh', 'jhajkH@GMAAIL.COM', '123', '963827410', '9685274100'),
(33, 'Akshay Ghildiyal', 'akshayg@gmail.com', 'akshay', 'dehradun', '8126379345'),
(32, 'Kanika', 'kanika@kannu.com', 'anshul', 'dffghsd', '7418509632'),
(30, 'Ansu', 'akshay@gmail.com', 'yoo', 'jhbak', '9876543210');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `book`
--
ALTER TABLE `book`
  ADD PRIMARY KEY (`bid`),
  ADD UNIQUE KEY `bid` (`bid`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`cid`),
  ADD UNIQUE KEY `cid` (`cid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `book`
--
ALTER TABLE `book`
  MODIFY `bid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `cid` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=35;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
