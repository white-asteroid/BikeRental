-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 09, 2022 at 07:09 PM
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
-- Database: `bikerental`
--

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` int(11) NOT NULL,
  `uid` int(11) DEFAULT NULL,
  `hno` varchar(10) NOT NULL,
  `landmark` varchar(100) NOT NULL,
  `city` varchar(50) NOT NULL,
  `state` int(50) NOT NULL,
  `VehicleId` int(11) DEFAULT NULL,
  `fromdate` date NOT NULL,
  `ToDate` date NOT NULL,
  `message` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `Status` int(11) DEFAULT NULL,
  `PostingDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `LastUpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `uid`, `hno`, `landmark`, `city`, `state`, `VehicleId`, `fromdate`, `ToDate`, `message`, `Status`, `PostingDate`, `LastUpdationDate`) VALUES
(4, 0, '125', '233-street', 'delhi', 0, 1, '0000-00-00', '0000-00-00', 'msg', 0, '2022-02-20 09:13:54', NULL),
(5, 0, '125', 'landmark', ':cit', 0, 2, '0000-00-00', '2022-02-21', ':msg', 0, '2022-02-21 14:13:53', NULL),
(6, 0, 'B125 GURU ', 'Laxmi nagar', 'East Delhi', 0, 1, '2022-02-21', '2022-02-27', 'dvc \r\n', 0, '2022-02-21 14:22:57', NULL),
(7, 0, 'B125 GURU ', 'Laxmi nagar', 'East Delhi', 0, 1, '2022-02-21', '2022-02-22', '', 0, '2022-02-21 15:50:43', NULL),
(8, 0, 'B125 GURU ', 'Laxmi nagar', 'East Delhi', 0, 1, '2022-02-21', '2022-02-22', '', 0, '2022-02-21 15:54:03', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `otp`
--

CREATE TABLE `otp` (
  `id` int(11) NOT NULL,
  `otp` int(10) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `expired` int(2) NOT NULL,
  `u_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL DEFAULT 0,
  `FullName` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `EmailId` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Password` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `ContactNo` char(11) CHARACTER SET latin1 DEFAULT NULL,
  `dob` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `Address` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `RegDate` timestamp NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp(),
  `token` varchar(100) DEFAULT NULL,
  `exptime` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `FullName`, `EmailId`, `Password`, `ContactNo`, `dob`, `Address`, `RegDate`, `UpdationDate`, `token`, `exptime`) VALUES
(0, 'shivam garg', 'shivigarg010@gmail.com', '123458', '09910903140', '2022-02-02', 'B125 GURU NANAK PURA', '2022-02-10 18:36:42', '2022-02-12 17:26:25', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `vehicles`
--

CREATE TABLE `vehicles` (
  `id` int(11) NOT NULL,
  `VehiclesTitle` varchar(150) CHARACTER SET latin1 DEFAULT NULL,
  `VehiclesBrand` varchar(50) DEFAULT NULL,
  `VehiclesOverview` longtext CHARACTER SET latin1 DEFAULT NULL,
  `PricePerDay` int(11) DEFAULT NULL,
  `FuelType` varchar(100) CHARACTER SET latin1 DEFAULT NULL,
  `ModelYear` int(6) DEFAULT NULL,
  `Vimage1` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Vimage2` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Vimage3` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Vimage4` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `Vimage5` varchar(120) CHARACTER SET latin1 DEFAULT NULL,
  `AntiLockBrakingSystem` int(11) DEFAULT NULL,
  `BrakeAssist` int(11) DEFAULT NULL,
  `LeatherSeats` int(11) DEFAULT NULL,
  `RegDate` timestamp NOT NULL DEFAULT current_timestamp(),
  `UpdationDate` timestamp NULL DEFAULT NULL ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `vehicles`
--

INSERT INTO `vehicles` (`id`, `VehiclesTitle`, `VehiclesBrand`, `VehiclesOverview`, `PricePerDay`, `FuelType`, `ModelYear`, `Vimage1`, `Vimage2`, `Vimage3`, `Vimage4`, `Vimage5`, `AntiLockBrakingSystem`, `BrakeAssist`, `LeatherSeats`, `RegDate`, `UpdationDate`) VALUES
(1, 'Honda Activa', 'Honda', 'lipsum code is a sample code that is generated just to put a sample code somewhere to use it as a example', 400, 'petrol', 2019, 'scooty1.jpg', 'scooty5.jpg', 'slide3.jpg', NULL, NULL, 0, 1, 1, '2022-02-13 09:40:52', '2022-02-21 13:40:04'),
(2, 'Honda Activa 5G', 'Honda', 'lipsum code is a sample code that is generated just to put a sample code somewhere to use it as a example', 400, 'petrol', 2021, 'scooty2.jpg', 'scooty5.jpg', 'slide3.jpg', NULL, NULL, 0, 1, 1, '2022-02-13 09:42:44', '2022-02-21 13:40:04'),
(3, 'Honda Activa 6G', 'Honda', 'lipsum code is a sample code that is generated just to put a sample code somewhere to use it as a example', 400, 'petrol', 2022, 'scooty3.jpg', 'scooty5.jpg', 'slide3.jpg', NULL, NULL, 0, 1, 1, '2022-02-13 09:43:22', '2022-02-21 13:40:04'),
(4, 'Honda Activa lets goo', 'Honda', 'lipsum code is a sample code that is generated just to put a sample code somewhere to use it as a example', 400, 'petrol', 2019, 'scooty4.jpg', 'scooty5.jpg', 'slide3.jpg', NULL, NULL, 0, 1, 1, '2022-02-13 09:43:52', '2022-02-21 13:40:04'),
(5, 'TVS zest', 'TVS', 'one of the Best scooty ', 350, 'petrol', 2018, 'scooty5.jpg', 'scooty5.jpg', 'slide3.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-15 15:28:14', '2022-02-21 13:40:04'),
(6, 'TVS Wego', 'TVS', 'Best for local travel', 350, 'petrol', 2019, 'scooty6.jpg', 'scooty5.jpg', 'slide3.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-15 15:28:14', '2022-02-21 13:40:04'),
(7, 'TVS zest 2', 'TVS', 'one of the Best scooty ', 350, 'petrol', 2018, 'scooty5.jpg', 'scooty5.jpg', 'slide3.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-15 15:30:05', '2022-02-21 13:40:04'),
(8, 'TVS ZEST ONE', 'TVS', 'Best for long travel', 350, 'petrol', 2019, 'scooty7.jpg', 'scooty5.jpg', 'slide3.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-15 15:30:05', '2022-02-21 13:40:04'),
(9, 'TVS zest Electric', 'TVS', 'one of the Best scooty ', 350, 'electric', 2018, 'scooty9.jpg', 'scooty5.jpg', 'slide3.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-15 15:33:19', '2022-02-21 13:40:04'),
(10, 'Hero Electric', 'Hero', 'Best for long travel and economical', 500, 'electric', 2022, 'scooty10.jpg', 'scooty5.jpg', 'slide3.jpg', NULL, NULL, NULL, NULL, NULL, '2022-02-15 15:33:19', '2022-02-21 13:40:04');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`),
  ADD KEY `uid` (`uid`),
  ADD KEY `orders_ibfk_1` (`VehicleId`);

--
-- Indexes for table `otp`
--
ALTER TABLE `otp`
  ADD PRIMARY KEY (`id`),
  ADD KEY `u_id` (`u_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `vehicles`
--
ALTER TABLE `vehicles`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `otp`
--
ALTER TABLE `otp`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `vehicles`
--
ALTER TABLE `vehicles`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `orders`
--
ALTER TABLE `orders`
  ADD CONSTRAINT `orders_ibfk_1` FOREIGN KEY (`VehicleId`) REFERENCES `vehicles` (`id`);

--
-- Constraints for table `otp`
--
ALTER TABLE `otp`
  ADD CONSTRAINT `otp_ibfk_1` FOREIGN KEY (`u_id`) REFERENCES `users` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
