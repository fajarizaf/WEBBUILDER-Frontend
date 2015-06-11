-- phpMyAdmin SQL Dump
-- version 4.2.0
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Oct 07, 2014 at 03:31 PM
-- Server version: 5.6.17
-- PHP Version: 5.3.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `themesintersweb`
--

-- --------------------------------------------------------

--
-- Table structure for table `categorythemes`
--

CREATE TABLE IF NOT EXISTS `categorythemes` (
`no` int(40) NOT NULL,
  `idcategorythemes` varchar(120) NOT NULL,
  `namethemes` varchar(100) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=3 ;

--
-- Dumping data for table `categorythemes`
--

INSERT INTO `categorythemes` (`no`, `idcategorythemes`, `namethemes`) VALUES
(1, 'thm0001', 'sports recreations'),
(2, 'thm0002', 'bussines and services');

-- --------------------------------------------------------

--
-- Table structure for table `request_publish`
--

CREATE TABLE IF NOT EXISTS `request_publish` (
  `no_request` varchar(111) NOT NULL,
`no` int(111) NOT NULL,
  `id_pengguna` varchar(111) NOT NULL,
  `name_website` varchar(111) NOT NULL,
  `name_themes` varchar(111) NOT NULL,
  `status` varchar(111) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=9 ;

--
-- Dumping data for table `request_publish`
--

INSERT INTO `request_publish` (`no_request`, `no`, `id_pengguna`, `name_website`, `name_themes`, `status`) VALUES
('rqs000010', 1, 'fajarizaf', 'recehansotre', 'adventure', 'pendding'),
('rqs000000011', 2, 'fajar', 'fajarizaf', 'adventure', 'pendding'),
('rqs000000012', 8, 'fajar', 'fajarizafsd', 'adventure', 'pendding');

-- --------------------------------------------------------

--
-- Table structure for table `themes`
--

CREATE TABLE IF NOT EXISTS `themes` (
`no` int(50) NOT NULL,
  `kdthemes` varchar(150) NOT NULL,
  `name_themes` varchar(150) NOT NULL,
  `categorythemes` varchar(150) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=4 ;

--
-- Dumping data for table `themes`
--

INSERT INTO `themes` (`no`, `kdthemes`, `name_themes`, `categorythemes`) VALUES
(1, 'kdthm0001', 'default', 'thm0001'),
(2, 'kdthm0003', 'adventure', 'thm0001'),
(3, 'kdthm0004', 'motocross', 'thm0002');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

CREATE TABLE IF NOT EXISTS `user` (
`no` int(30) NOT NULL,
  `image` varchar(200) NOT NULL,
  `nama_lengkap` varchar(90) NOT NULL,
  `username` varchar(130) NOT NULL,
  `password` varchar(180) NOT NULL,
  `email` varchar(170) NOT NULL,
  `no_telp` int(90) NOT NULL,
  `themes_dipilih` varchar(200) NOT NULL
) ENGINE=InnoDB  DEFAULT CHARSET=latin1 AUTO_INCREMENT=36 ;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`no`, `image`, `nama_lengkap`, `username`, `password`, `email`, `no_telp`, `themes_dipilih`) VALUES
(26, '', 'fajarizaf', 'fajarizaf', '220727aa98fa59fdf4842eec86993c0a', 'fajarizaf@gmail.com', 2147483647, 'default'),
(27, '', 'raditya', 'raditya', '220727aa98fa59fdf4842eec86993c0a', 'raditya@gmail.com', 2147483647, 'motocross'),
(35, '', 'fajar', 'fajar', '220727aa98fa59fdf4842eec86993c0a', 'fajarizaf@gmail.com', 2147483647, 'adventure');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categorythemes`
--
ALTER TABLE `categorythemes`
 ADD PRIMARY KEY (`idcategorythemes`), ADD UNIQUE KEY `no` (`no`);

--
-- Indexes for table `request_publish`
--
ALTER TABLE `request_publish`
 ADD PRIMARY KEY (`no`), ADD UNIQUE KEY `no_request` (`no_request`);

--
-- Indexes for table `themes`
--
ALTER TABLE `themes`
 ADD PRIMARY KEY (`no`), ADD KEY `categorythemes` (`categorythemes`);

--
-- Indexes for table `user`
--
ALTER TABLE `user`
 ADD PRIMARY KEY (`no`), ADD UNIQUE KEY `username` (`username`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categorythemes`
--
ALTER TABLE `categorythemes`
MODIFY `no` int(40) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `request_publish`
--
ALTER TABLE `request_publish`
MODIFY `no` int(111) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT for table `themes`
--
ALTER TABLE `themes`
MODIFY `no` int(50) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `user`
--
ALTER TABLE `user`
MODIFY `no` int(30) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=36;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `themes`
--
ALTER TABLE `themes`
ADD CONSTRAINT `themes_ibfk_1` FOREIGN KEY (`categorythemes`) REFERENCES `categorythemes` (`idcategorythemes`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
