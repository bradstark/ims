-- phpMyAdmin SQL Dump
-- version 4.0.9
-- http://www.phpmyadmin.net
--
-- Host: 127.0.0.1
-- Generation Time: Mar 31, 2014 at 12:59 AM
-- Server version: 5.6.14
-- PHP Version: 5.5.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;

--
-- Database: `imsdb`
--

-- --------------------------------------------------------

--
-- Table structure for table `bobu14t`
--

CREATE TABLE IF NOT EXISTS `bobu14t` (
  `vesselid` int(255) NOT NULL,
  `fill` varchar(255) NOT NULL,
  `vent` varchar(255) NOT NULL,
  `air/n2` varchar(255) NOT NULL,
  `fusible` varchar(255) NOT NULL,
  `batchno` varchar(255) NOT NULL,
  `repairs` varchar(255) NOT NULL,
  `clean` varchar(255) NOT NULL,
  `date` varchar(23) NOT NULL,
  `hcells` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `bobu14t`
--

INSERT INTO `bobu14t` (`vesselid`, `fill`, `vent`, `air/n2`, `fusible`, `batchno`, `repairs`, `clean`, `date`, `hcells`) VALUES
(123, 'nu', 'ny', 'ynj', 'yn', 'ym', 'ymmu', 'mui', '0000-00-00', 'btkp68'),
(123, 'nu', 'ny', 'ynj', 'yn', 'ym', 'ymmu', 'mui', '0000-00-00', 'btkn60,btnr59'),
(124, 'no', 'yes', '45pg', 'no', '123.5', 'yes ,there are repairs', 'Dr box', '0000-00-00', 'btn45,btn46,btn61,btn172,btn165'),
(124, 'no', 'yes', '45pg', 'no', '123.5', 'yes ,there are repairs', 'Dr box', '03/05/2014', 'btn45');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
