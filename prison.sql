-- phpMyAdmin SQL Dump
-- version 4.2.7.1
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: May 15, 2019 at 07:37 AM
-- Server version: 5.6.20
-- PHP Version: 5.5.15

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `prison`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE IF NOT EXISTS `admin` (
`aid` int(10) unsigned NOT NULL,
  `username` text,
  `passwor` text,
  `name` varchar(30) DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`aid`, `username`, `passwor`, `name`) VALUES
(1, 'Raja@gmail.com', '123', 'Raja'),
(2, 'battikaran@yahoo.com', '1234', 'Kumar');

-- --------------------------------------------------------

--
-- Table structure for table `prisoner`
--

CREATE TABLE IF NOT EXISTS `prisoner` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(80) DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `nic` int(10) DEFAULT NULL,
  `address` text,
  `contact` int(10) DEFAULT NULL,
  `bookdate` date DEFAULT NULL,
  `section` varchar(50) DEFAULT NULL,
  `cellno` int(3) DEFAULT NULL,
  `remarks` text,
  `hight` int(3) DEFAULT NULL,
  `weight` int(3) DEFAULT NULL,
  `image` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `prisoner`
--

INSERT INTO `prisoner` (`id`, `name`, `age`, `gender`, `nic`, `address`, `contact`, `bookdate`, `section`, `cellno`, `remarks`, `hight`, `weight`, `image`) VALUES
(1, 'Raja Kumar', 555, 'Female', 464656644, '397, maim road,navatkuda, batticaloa', 652223037, '2019-05-23', 'SEC3', 3, 'dzdsgsgsg', 54, 45, 'uploads/9828671.png'),
(3, 'Raja Kumar', 58, 'Male', 566554, '397, maim road,navatkuda, batticaloa', 652223037, '0000-00-00', 'SEC2', 8, '.mn.n.n.', 45, 89, 'uploads/72668491637-untitled-design-50.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `staff`
--

CREATE TABLE IF NOT EXISTS `staff` (
`id` int(10) unsigned NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `gender` varchar(10) DEFAULT NULL,
  `age` int(2) DEFAULT NULL,
  `nic` varchar(10) DEFAULT NULL,
  `contact` int(10) DEFAULT NULL,
  `address` text,
  `designation` varchar(40) DEFAULT NULL,
  `dutysec` varchar(50) DEFAULT NULL,
  `duties` text,
  `image` text
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `staff`
--

INSERT INTO `staff` (`id`, `name`, `gender`, `age`, `nic`, `contact`, `address`, `designation`, `dutysec`, `duties`, `image`) VALUES
(2, 'Raja Karan', 'Male', 87, 'Nic', 0, 'OK OK ', 'Security', 'SEC5', 'ok ok ', 'uploads/77421311900076_489058224589464_4956251116721506319_n.jpg'),
(3, 'Raja Kio', 'Female', 25, '78458855', 0, 'jakjajja', 'Security', 'SEC2', 'Nic\r\n', 'uploads/87863118275119_828964537265496_7589346106724634137_n.png'),
(4, 'Raja Kumar', 'Male', 90, '123655', 4578545, '397, maim road,navatkuda, batticaloa', 'Warden', 'SEC3', 'okok', 'uploads/733421sri-lanka-safe-now-easter-attacks.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `visitors`
--

CREATE TABLE IF NOT EXISTS `visitors` (
`vid` int(10) unsigned NOT NULL,
  `name` varchar(30) DEFAULT NULL,
  `nic` varchar(30) DEFAULT NULL,
  `address` text,
  `contact` int(10) DEFAULT NULL,
  `prisonerid` int(11) DEFAULT NULL,
  `relation` text,
  `dt` date DEFAULT NULL,
  `ti` time DEFAULT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=5 ;

--
-- Dumping data for table `visitors`
--

INSERT INTO `visitors` (`vid`, `name`, `nic`, `address`, `contact`, `prisonerid`, `relation`, `dt`, `ti`) VALUES
(1, 'Raja Kumar', '943220883V', '397, maim road,navatkuda, batticaloa', 652223037, 0, 'Son', '0000-00-00', '00:00:00'),
(2, 'Raja Kumar', '', '397, maim road,navatkuda, batticaloa', 652223037, 0, 'Sister', '0000-00-00', '00:00:00'),
(3, 'Raja Kumar', '943220883V', '397, maim road,navatkuda, batticaloa', 652223037, 1234, 'Mother', '0000-00-00', '04:00:34'),
(4, 'Raja Kumar', '943220883V', '397, maim road,navatkuda, batticaloa', 652223037, 1234, 'Mother', '2019-05-12', '04:07:33');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
 ADD PRIMARY KEY (`aid`);

--
-- Indexes for table `prisoner`
--
ALTER TABLE `prisoner`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `staff`
--
ALTER TABLE `staff`
 ADD PRIMARY KEY (`id`);

--
-- Indexes for table `visitors`
--
ALTER TABLE `visitors`
 ADD PRIMARY KEY (`vid`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
MODIFY `aid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `prisoner`
--
ALTER TABLE `prisoner`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `staff`
--
ALTER TABLE `staff`
MODIFY `id` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `visitors`
--
ALTER TABLE `visitors`
MODIFY `vid` int(10) unsigned NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
