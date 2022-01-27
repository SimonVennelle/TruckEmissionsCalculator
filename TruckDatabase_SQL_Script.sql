-- phpMyAdmin SQL Dump
-- version 4.8.4
-- https://www.phpmyadmin.net/
--

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `bpqd5gszvudvfzgwfo3a`
--

 DROP DATABASE IF EXISTS `truckDB`;
 CREATE DATABASE `coursedb` ;
 USE `coursedb`;

-- --------------------------------------------------------

--
-- Table structure for table `FUEL`
--

CREATE TABLE `FUEL` (
  `fuelType` varchar(20) NOT NULL,
  `fuelPrice` double DEFAULT NULL,
  `baseEmission` double DEFAULT NULL,
  `state` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `FUEL`
--

INSERT INTO `FUEL` (`fuelType`, `fuelPrice`, `baseEmission`, `state`) VALUES
('Biodiesel', NULL, NULL, NULL),
('Diesel', 1.53, 99, 'Victoria'),
('Electricity', NULL, NULL, NULL),
('Hydrogen', 3.8, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `STATE`
--

CREATE TABLE `STATE` (
  `state` varchar(30) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL,
  `electricityPrice` int NOT NULL,
  `electricityEmissions` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `STATE`
--

INSERT INTO `STATE` (`state`, `electricityPrice`, `electricityEmissions`) VALUES
('Australian Capital Territory', 22, 0.81),
('New South Wales', 33, 0.81),
('Northern Territory', 26, 0.53),
('Queensland', 29, 0.81),
('South Australia', 44, 0.43),
('Tasmania', 26, 0.17),
('Victoria', 28, 0.98),
('Western Australia', 28, 0.68);

-- --------------------------------------------------------

--
-- Table structure for table `TRUCK`
--

CREATE TABLE `TRUCK` (
  `name` text NOT NULL,
  `payload` double DEFAULT NULL,
  `fuelConsumption` double DEFAULT NULL,
  `fuelType` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci DEFAULT NULL,
  `make` varchar(20) CHARACTER SET utf8 COLLATE utf8_general_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `TRUCK`
--

INSERT INTO `TRUCK` (`name`, `payload`, `fuelConsumption`, `fuelType`, `make`) VALUES
('Fuso Canter 515', 12000, 26.3, 'Diesel', 'Mitsubishi'),
('NNR 45-150 AMT VANPACK', 13000, 30.4, 'Diesel', 'Isuzu'),
('NPR 65/45-190', 10000, 32, 'Diesel', 'Isuzu'),
('SEMI', 18000, 31, 'Electricity', 'Tesla'),
('Stralis AD450', 16500, 25.6, 'Diesel', 'Iveco'),
('TRE', 20000, 3.5, 'Hydrogen', 'Nikola');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `FUEL`
--
ALTER TABLE `FUEL`
  ADD PRIMARY KEY (`fuelType`),
  ADD KEY `FK_State` (`state`);

--
-- Indexes for table `STATE`
--
ALTER TABLE `STATE`
  ADD PRIMARY KEY (`state`);

--
-- Indexes for table `TRUCK`
--
ALTER TABLE `TRUCK`
  ADD PRIMARY KEY (`name`(255)),
  ADD KEY `FK_fuelType` (`fuelType`);

--
-- Constraints for dumped tables
--

--
-- Constraints for table `FUEL`
--
ALTER TABLE `FUEL`
  ADD CONSTRAINT `FK_State` FOREIGN KEY (`state`) REFERENCES `STATE` (`state`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `TRUCK`
--
ALTER TABLE `TRUCK`
  ADD CONSTRAINT `FK_fuelType` FOREIGN KEY (`fuelType`) REFERENCES `FUEL` (`fuelType`) ON DELETE RESTRICT ON UPDATE RESTRICT;
COMMIT;

