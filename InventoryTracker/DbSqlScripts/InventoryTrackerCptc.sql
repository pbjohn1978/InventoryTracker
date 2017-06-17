-- phpMyAdmin SQL Dump
-- version 4.6.6
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jun 17, 2017 at 02:24 AM
-- Server version: 5.7.18-0ubuntu0.16.04.1
-- PHP Version: 7.0.15-0ubuntu0.16.04.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `InventoryTrackerCptc`
--

-- --------------------------------------------------------

--
-- Table structure for table `Item`
--

CREATE TABLE `Item` (
  `ItemID` int(11) NOT NULL,
  `ItemName` text NOT NULL,
  `StoreID` int(11) NOT NULL,
  `ItemUnitPrice` float NOT NULL,
  `ItemQuantityPerBox` int(11) NOT NULL,
  `ItemTotalCount` int(11) NOT NULL,
  `ItemLocationID` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Item`
--

INSERT INTO `Item` (`ItemID`, `ItemName`, `StoreID`, `ItemUnitPrice`, `ItemQuantityPerBox`, `ItemTotalCount`, `ItemLocationID`) VALUES
(1, '500ml Water', 1, 0, 24, 1, 1),
(2, 'Candy - Western Family mix', 2, 11.29, 100, 1, 2),
(3, 'Baking Sheets', 3, 0, 1, 5, 3);

-- --------------------------------------------------------

--
-- Table structure for table `ItemLocation`
--

CREATE TABLE `ItemLocation` (
  `ItemLocationID` int(11) NOT NULL,
  `ItemLocationName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `ItemLocation`
--

INSERT INTO `ItemLocation` (`ItemLocationID`, `ItemLocationName`) VALUES
(1, '214'),
(2, 'BACK CLOSET'),
(3, 'SLSC');

-- --------------------------------------------------------

--
-- Table structure for table `Store`
--

CREATE TABLE `Store` (
  `StoreID` int(11) NOT NULL,
  `StoreName` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Store`
--

INSERT INTO `Store` (`StoreID`, `StoreName`) VALUES
(1, 'Cosco'),
(2, 'Cash & Carry'),
(3, 'Target');

-- --------------------------------------------------------

--
-- Table structure for table `Users`
--

CREATE TABLE `Users` (
  `UserID` int(11) NOT NULL,
  `UserFirstName` text NOT NULL,
  `UserMiddleName` text NOT NULL,
  `UserLastName` text NOT NULL,
  `UserLoginName` text NOT NULL,
  `UserLoginPass` text NOT NULL,
  `UserAccessLevel` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `Users`
--

INSERT INTO `Users` (`UserID`, `UserFirstName`, `UserMiddleName`, `UserLastName`, `UserLoginName`, `UserLoginPass`, `UserAccessLevel`) VALUES
(1, 'beeker3', 'meme3', 'mememe3', 'beekermeme3', '1151', 3),
(2, 'beeker2', 'meme2', 'mememe2', 'beekermeme2', '1151', 2),
(3, 'beeker1', 'meme1', 'mememe1', 'beekermeme1', '1151', 1),
(4, 'R1', 'blank1', 'G1', 'garcia1273(1)', '1234', 1),
(5, 'R2', 'blank2', 'G2', 'garcia1273(2)', '1234', 2),
(6, 'R3', 'blank3', 'G3', 'garcia1273(3)', '1234', 3);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `Item`
--
ALTER TABLE `Item`
  ADD PRIMARY KEY (`ItemID`),
  ADD KEY `StoreID` (`StoreID`),
  ADD KEY `ItemLocationID` (`ItemLocationID`);

--
-- Indexes for table `ItemLocation`
--
ALTER TABLE `ItemLocation`
  ADD PRIMARY KEY (`ItemLocationID`);

--
-- Indexes for table `Store`
--
ALTER TABLE `Store`
  ADD PRIMARY KEY (`StoreID`);

--
-- Indexes for table `Users`
--
ALTER TABLE `Users`
  ADD PRIMARY KEY (`UserID`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `Item`
--
ALTER TABLE `Item`
  MODIFY `ItemID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `ItemLocation`
--
ALTER TABLE `ItemLocation`
  MODIFY `ItemLocationID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Store`
--
ALTER TABLE `Store`
  MODIFY `StoreID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT for table `Users`
--
ALTER TABLE `Users`
  MODIFY `UserID` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
--
-- Constraints for dumped tables
--

--
-- Constraints for table `Item`
--
ALTER TABLE `Item`
  ADD CONSTRAINT `Item_ibfk_1` FOREIGN KEY (`StoreID`) REFERENCES `Store` (`StoreID`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  ADD CONSTRAINT `Item_ibfk_2` FOREIGN KEY (`ItemLocationID`) REFERENCES `ItemLocation` (`ItemLocationID`) ON DELETE NO ACTION ON UPDATE NO ACTION;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
