-- phpMyAdmin SQL Dump
-- version 4.7.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 07, 2017 at 03:34 AM
-- Server version: 10.1.22-MariaDB
-- PHP Version: 7.1.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lojaVirtual`
--

-- --------------------------------------------------------

--
-- Table structure for table `tbCategory`
--

CREATE TABLE `tbCategory` (
  `cdCtg` int(11) NOT NULL,
  `nmCtg` varchar(50) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbClient`
--

CREATE TABLE `tbClient` (
  `cdClient` int(11) NOT NULL,
  `nmClient` varchar(100) NOT NULL,
  `cpfClient` varchar(14) NOT NULL,
  `cpClient` varchar(12) NOT NULL,
  `emailClient` varchar(250) NOT NULL,
  `pwdClient` varchar(32) NOT NULL,
  `adsClient` text
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbPhotoProduction`
--

CREATE TABLE `tbPhotoProduction` (
  `ptProduct` int(11) NOT NULL,
  `ptImage` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbProduct`
--

CREATE TABLE `tbProduct` (
  `cdProduct` int(11) NOT NULL,
  `nmProduct` varchar(50) NOT NULL,
  `dcpProduct` text,
  `vlProduct` decimal(10,2) NOT NULL,
  `ctgProduct` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbRequest`
--

CREATE TABLE `tbRequest` (
  `cdRequest` int(11) NOT NULL,
  `clientRequest` int(11) NOT NULL,
  `dateRequest` date NOT NULL,
  `paidRequest` char(1) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbRequestItem`
--

CREATE TABLE `tbRequestItem` (
  `requestItem` int(11) NOT NULL,
  `productItem` int(11) NOT NULL,
  `amountItem` int(11) NOT NULL,
  `unitValueItem` decimal(10,2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `tbCategory`
--
ALTER TABLE `tbCategory`
  ADD PRIMARY KEY (`cdCtg`);

--
-- Indexes for table `tbClient`
--
ALTER TABLE `tbClient`
  ADD PRIMARY KEY (`cdClient`);

--
-- Indexes for table `tbPhotoProduction`
--
ALTER TABLE `tbPhotoProduction`
  ADD PRIMARY KEY (`ptProduct`,`ptImage`);

--
-- Indexes for table `tbProduct`
--
ALTER TABLE `tbProduct`
  ADD PRIMARY KEY (`cdProduct`);

--
-- Indexes for table `tbRequest`
--
ALTER TABLE `tbRequest`
  ADD PRIMARY KEY (`cdRequest`);

--
-- Indexes for table `tbRequestItem`
--
ALTER TABLE `tbRequestItem`
  ADD PRIMARY KEY (`requestItem`,`productItem`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `tbCategory`
--
ALTER TABLE `tbCategory`
  MODIFY `cdCtg` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbClient`
--
ALTER TABLE `tbClient`
  MODIFY `cdClient` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbProduct`
--
ALTER TABLE `tbProduct`
  MODIFY `cdProduct` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `tbRequest`
--
ALTER TABLE `tbRequest`
  MODIFY `cdRequest` int(11) NOT NULL AUTO_INCREMENT;COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
