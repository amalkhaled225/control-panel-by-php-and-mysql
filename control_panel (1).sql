-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 13, 2020 at 12:46 AM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.1.33

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `robot_control2`
--

-- --------------------------------------------------------

--
-- Table structure for table `control_panel`
--

CREATE TABLE `control_panel` (
  `ID` int(250) NOT NULL,
  `right` varchar(10) NOT NULL,
  `left` varchar(10) NOT NULL,
  `forward` varchar(10) NOT NULL,
  `back` varchar(10) NOT NULL,
  `stop` varchar(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `control_panel`
--

INSERT INTO `control_panel` (`ID`, `right`, `left`, `forward`, `back`, `stop`) VALUES
(1, 'R', '', '', '', ''),
(2, '', 'L', '', '', ''),
(3, '', '', 'F', '', ''),
(4, '', '', 'F', '', ''),
(5, '', '', '', 'B', ''),
(6, 'R', '', '', '', ''),
(7, '', 'L', '', '', ''),
(8, '', '', '', '', 'S');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `control_panel`
--
ALTER TABLE `control_panel`
  ADD PRIMARY KEY (`ID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `control_panel`
--
ALTER TABLE `control_panel`
  MODIFY `ID` int(250) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
