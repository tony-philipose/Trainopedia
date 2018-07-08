-- phpMyAdmin SQL Dump
-- version 4.6.5.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 11, 2018 at 10:17 AM
-- Server version: 10.1.21-MariaDB
-- PHP Version: 7.1.1

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `article`
--

-- --------------------------------------------------------

--
-- Table structure for table `art`
--

CREATE TABLE `art` (
  `art_id` int(2) NOT NULL,
  `heading` varchar(50) NOT NULL,
  `content` varchar(300) NOT NULL,
  `image` varchar(350) NOT NULL,
  `aproval` varchar(15) NOT NULL,
  `date` varchar(15) NOT NULL,
  `regid` int(2) NOT NULL,
  `remove_status` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `art`
--

INSERT INTO `art` (`art_id`, `heading`, `content`, `image`, `aproval`, `date`, `regid`, `remove_status`) VALUES
(1, 'family art', 'Responsive Navbar Template. Free bootstrap menu template with drop-down lists and buttons. FREE DOWNLOAD LEARN MORE. SITE TEMPLATES. Responsive Real Estate Template â€“ Free Download. One Page Bootstrap Template Demo Â· Bootstrap Restaurant Template ', '2018-05-09-18-17-11-p-5af31f077a569.jpg', 'aprove', '09/05/18', 1, 'on'),
(2, 'mount war2018', 'Navigation Bar = List of Links. A navigation bar needs standard HTML as a base. In our examples Navigation Bar = List of Links. A navigation bar needs standard HTML as a base. In our examples', '2018-05-10-13-11-53-p-5af428f96009b.jpg', 'request', '09/05/18', 2, 'on'),
(3, 'wild life', 'wild life animals are', '2018-05-10-06-34-29-p-5af3cbd537956.jpg', 'aprove', '10/05/18', 1, 'removed'),
(4, 'art one', 'An article (with the linguistic glossing abbreviation ART) is a word that is used with a noun (as a standalone word or a prefix or suffix) to specify grammatical definiteness of the noun,', '2018-05-11-10-11-21-p-5af5502902395.jpg', 'aprove', '10/05/18', 2, 'on'),
(5, 'moon', 'An article (with the linguistic glossing abbreviation ART) is a word that is used with a noun  to specify grammatical definiteness of the noun,', '2018-05-10-07-08-32-p-5af3d3d0c5491.jpg', 'aprove', '10/05/18', 1, 'on'),
(6, 'khggkj', 'mxbjkgkhghghjgfhj', '2018-05-11-07-36-39-p-5af52be795dec.jpg', 'aprove', '11/05/18', 1, 'removed'),
(7, 'user view', 'kghgh', '2018-05-11-07-39-08-p-5af52c7c91e08.jpg', 'aprove', '11/05/18', 1, 'removed'),
(8, 'jjjj', 'jbkj', '2018-05-11-07-39-48-p-5af52ca4cf3c8.jpg', 'request', '11/05/18', 2, 'on'),
(9, 'no image', 'image no avilable', 'noimage.jpg', 'request', '11/05/18', 2, 'on'),
(10, 'no matter', 'no image testing', 'noimage.jpg', 'aprove', '11/05/18', 1, 'on');

-- --------------------------------------------------------

--
-- Table structure for table `login`
--

CREATE TABLE `login` (
  `login_id` int(2) NOT NULL,
  `username` varchar(15) NOT NULL,
  `pswd` varchar(20) NOT NULL,
  `regid` int(2) NOT NULL,
  `type` varchar(15) NOT NULL,
  `log_status` int(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `login`
--

INSERT INTO `login` (`login_id`, `username`, `pswd`, `regid`, `type`, `log_status`) VALUES
(1, 'admin', 'admin1', 1, 'admin', 1),
(2, 'reny', '123', 2, 'user', 1);

-- --------------------------------------------------------

--
-- Table structure for table `register`
--

CREATE TABLE `register` (
  `regid` int(2) NOT NULL,
  `name` varchar(20) NOT NULL,
  `mob_no` int(10) NOT NULL,
  `status` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `register`
--

INSERT INTO `register` (`regid`, `name`, `mob_no`, `status`) VALUES
(1, 'admin', 878787478, 'admin'),
(2, 'reny', 474787878, 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `art`
--
ALTER TABLE `art`
  ADD PRIMARY KEY (`art_id`);

--
-- Indexes for table `login`
--
ALTER TABLE `login`
  ADD PRIMARY KEY (`login_id`);

--
-- Indexes for table `register`
--
ALTER TABLE `register`
  ADD PRIMARY KEY (`regid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `art`
--
ALTER TABLE `art`
  MODIFY `art_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT for table `login`
--
ALTER TABLE `login`
  MODIFY `login_id` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `register`
--
ALTER TABLE `register`
  MODIFY `regid` int(2) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
