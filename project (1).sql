-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jun 08, 2022 at 06:19 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project`
--

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

DROP TABLE IF EXISTS `feedback`;
CREATE TABLE IF NOT EXISTS `feedback` (
  `feedbackID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `email` varchar(50) NOT NULL,
  `subject` varchar(30) NOT NULL,
  `message` text NOT NULL,
  `type` varchar(25) NOT NULL,
  `userID` int NOT NULL,
  PRIMARY KEY (`feedbackID`),
  UNIQUE KEY `email` (`email`),
  KEY `userid` (`userID`),
  KEY `userID_2` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`feedbackID`, `name`, `email`, `subject`, `message`, `type`, `userID`) VALUES
(26, 'ali', 'ALI@gmail.com', 'maa', 'hi', 'PROBLEM', 1316);

-- --------------------------------------------------------

--
-- Table structure for table `market`
--

DROP TABLE IF EXISTS `market`;
CREATE TABLE IF NOT EXISTS `market` (
  `marketID` int NOT NULL AUTO_INCREMENT,
  `name` varchar(25) NOT NULL,
  `address` text NOT NULL,
  `phone` int NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` text NOT NULL,
  `userID` int NOT NULL,
  PRIMARY KEY (`marketID`),
  UNIQUE KEY `phone` (`phone`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=54 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `market`
--

INSERT INTO `market` (`marketID`, `name`, `address`, `phone`, `username`, `pass`, `userID`) VALUES
(53, 'Issa&#39;s', 'beirut', 70123456, 'issa1', '$2y$10$BAGzXdXiYpSxrLSekZXARuW8VzM7nmfnSC8p0fKqnxp1RV4kY/6ai', 1316);

-- --------------------------------------------------------

--
-- Table structure for table `productmarket`
--

DROP TABLE IF EXISTS `productmarket`;
CREATE TABLE IF NOT EXISTS `productmarket` (
  `marketID` int NOT NULL,
  `name` varchar(25) NOT NULL,
  `price` int NOT NULL,
  `icon` text NOT NULL,
  PRIMARY KEY (`marketID`,`name`),
  KEY `marketID` (`marketID`),
  KEY `name` (`name`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `productmarket`
--

INSERT INTO `productmarket` (`marketID`, `name`, `price`, `icon`) VALUES
(53, 'O2', 12313, 'amleya.png'),
(53, 'oroe', 12000, 'logo.PNG'),
(53, 'rrr', 8000, 'amleya.png');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `description` varchar(20) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci DEFAULT NULL,
  `name` varchar(25) NOT NULL,
  PRIMARY KEY (`name`),
  UNIQUE KEY `name` (`description`),
  UNIQUE KEY `description` (`description`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`description`, `name`) VALUES
('123213', 'O2'),
('asdas', 'gfgfg'),
('choclate', 'oroe'),
('dsad', 'rrr'),
('mila', 'mila');

-- --------------------------------------------------------

--
-- Table structure for table `registered`
--

DROP TABLE IF EXISTS `registered`;
CREATE TABLE IF NOT EXISTS `registered` (
  `registeredID` int NOT NULL AUTO_INCREMENT,
  `location` text NOT NULL,
  `building` varchar(25) NOT NULL,
  `username` varchar(25) NOT NULL,
  `pass` text NOT NULL,
  `userID` int NOT NULL,
  PRIMARY KEY (`registeredID`),
  KEY `userID` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=108 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `registered`
--

INSERT INTO `registered` (`registeredID`, `location`, `building`, `username`, `pass`, `userID`) VALUES
(107, 'beirut', 'lkdla', 'ahmad1', '$2y$10$YDnPLQnkfokVf8hCnnjZaOGr8ulFhPs6GFMP3whOUYRjyEEY3jGhW', 1318);

-- --------------------------------------------------------

--
-- Table structure for table `report`
--

DROP TABLE IF EXISTS `report`;
CREATE TABLE IF NOT EXISTS `report` (
  `reportID` int NOT NULL AUTO_INCREMENT,
  `date` date NOT NULL,
  `userID` int NOT NULL,
  `mname` varchar(25) NOT NULL,
  `location` text NOT NULL,
  `uname` varchar(25) NOT NULL,
  `email` text NOT NULL,
  `subject` varchar(25) NOT NULL,
  `message` text NOT NULL,
  PRIMARY KEY (`reportID`),
  KEY `uderID` (`userID`)
) ENGINE=InnoDB AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `report`
--

INSERT INTO `report` (`reportID`, `date`, `userID`, `mname`, `location`, `uname`, `email`, `subject`, `message`) VALUES
(8, '2022-06-08', 1318, 'Issa&#39;s', 'beirut', 'ali', 'ALI@gmail.com', 'manipulating goods', 'hi');

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `userID` int NOT NULL AUTO_INCREMENT,
  `fname` varchar(15) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `lastname` varchar(15) NOT NULL,
  `phone` int NOT NULL,
  `Bdate` date NOT NULL,
  PRIMARY KEY (`userID`),
  UNIQUE KEY `phone` (`phone`)
) ENGINE=InnoDB AUTO_INCREMENT=1319 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;

--
-- Dumping data for table `user`
--

INSERT INTO `user` (`userID`, `fname`, `lastname`, `phone`, `Bdate`) VALUES
(1316, 'ali', 'issa', 70707070, '2021-07-13'),
(1318, 'ahmad', 'ahmad', 70676622, '2022-05-30');

--
-- Constraints for dumped tables
--

--
-- Constraints for table `feedback`
--
ALTER TABLE `feedback`
  ADD CONSTRAINT `feedback_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE;

--
-- Constraints for table `market`
--
ALTER TABLE `market`
  ADD CONSTRAINT `market_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`);

--
-- Constraints for table `productmarket`
--
ALTER TABLE `productmarket`
  ADD CONSTRAINT `product_name` FOREIGN KEY (`name`) REFERENCES `products` (`name`) ON DELETE RESTRICT ON UPDATE RESTRICT,
  ADD CONSTRAINT `productmarket_ibfk_2` FOREIGN KEY (`marketID`) REFERENCES `market` (`marketID`);

--
-- Constraints for table `registered`
--
ALTER TABLE `registered`
  ADD CONSTRAINT `registered_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `report`
--
ALTER TABLE `report`
  ADD CONSTRAINT `report_ibfk_1` FOREIGN KEY (`userID`) REFERENCES `user` (`userID`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
