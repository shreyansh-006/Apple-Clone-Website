-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Apr 09, 2023 at 07:04 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `Apple`
--

-- --------------------------------------------------------

--
-- Table structure for table `C_IPAD_ORDER`
--

CREATE TABLE `C_IPAD_ORDER` (
  `Username` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Storage` int(11) NOT NULL,
  `Color` varchar(25) NOT NULL,
  `DATE_TIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `C_IPAD_ORDER`
--

INSERT INTO `C_IPAD_ORDER` (`Username`, `Name`, `Storage`, `Color`, `DATE_TIME`) VALUES
('shreyansh007', 'IPad Pro M2', 512, 'Black', '2023-04-02 18:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `C_IPAD_PRICES`
--

CREATE TABLE `C_IPAD_PRICES` (
  `Username` varchar(25) NOT NULL,
  `Price` int(11) NOT NULL,
  `Card_Number` int(11) NOT NULL,
  `Ex_Month` int(11) NOT NULL,
  `Ex_Year` int(11) NOT NULL,
  `DATE_TIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `C_IPAD_PRICES`
--

INSERT INTO `C_IPAD_PRICES` (`Username`, `Price`, `Card_Number`, `Ex_Month`, `Ex_Year`, `DATE_TIME`) VALUES
('shreyansh007', 109900, 3939339, 11, 2025, '2023-04-02 18:10:58');

-- --------------------------------------------------------

--
-- Table structure for table `C_IPHONE_ORDER`
--

CREATE TABLE `C_IPHONE_ORDER` (
  `USERNAME` varchar(40) NOT NULL,
  `NAME_OF_PHONE` varchar(30) NOT NULL,
  `STORAGE_GB` int(11) NOT NULL,
  `COLOR` varchar(20) NOT NULL,
  `DATE_TIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `C_IPHONE_ORDER`
--

INSERT INTO `C_IPHONE_ORDER` (`USERNAME`, `NAME_OF_PHONE`, `STORAGE_GB`, `COLOR`, `DATE_TIME`) VALUES
('shreyansh007', 'IPhone 14 Pro Max', 256, 'Deep Purple', '2023-04-02 18:09:50'),
('shreyansh007', 'IPhone 14 Pro Max', 128, 'White', '2023-04-06 02:34:48'),
('dhrumit565', 'IPhone 14', 128, 'Red', '2023-04-06 16:25:16'),
('dhrumit565', 'IPhone 14 Plus', 256, 'Blue', '2023-04-06 16:26:19'),
('dhrumit565', 'IPhone 14 Pro', 256, 'White', '2023-04-06 16:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `C_IPHONE_PRICES`
--

CREATE TABLE `C_IPHONE_PRICES` (
  `Username` varchar(25) NOT NULL,
  `Price` int(11) NOT NULL,
  `Card_Number` int(11) NOT NULL,
  `Ex_Month` int(11) NOT NULL,
  `Ex_Year` int(11) NOT NULL,
  `DATE_TIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `C_IPHONE_PRICES`
--

INSERT INTO `C_IPHONE_PRICES` (`Username`, `Price`, `Card_Number`, `Ex_Month`, `Ex_Year`, `DATE_TIME`) VALUES
('shreyansh007', 149990, 28282828, 12, 2034, '2023-04-02 18:09:50'),
('shreyansh007', 139990, 12, 12, 1201, '2023-04-06 02:34:48'),
('dhrumit565', 79990, 182822910, 11, 2023, '2023-04-06 16:25:16'),
('dhrumit565', 96990, 23333, 8, 9, '2023-04-06 16:26:19'),
('dhrumit565', 127990, 676, 78, 8, '2023-04-06 16:26:45');

-- --------------------------------------------------------

--
-- Table structure for table `C_MACS_ORDER`
--

CREATE TABLE `C_MACS_ORDER` (
  `Username` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Storage` int(11) NOT NULL,
  `Color` varchar(25) NOT NULL,
  `Date_Time` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `C_MACS_ORDER`
--

INSERT INTO `C_MACS_ORDER` (`Username`, `Name`, `Storage`, `Color`, `Date_Time`) VALUES
('shreyansh007', 'MacBook M2 Max', 1024, 'Silver', '2023-04-02 18:10:24'),
('shreyansh007', 'MacBook M1 Pro', 1024, 'Silver', '2023-04-06 13:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `C_MACS_PRICES`
--

CREATE TABLE `C_MACS_PRICES` (
  `Username` varchar(25) NOT NULL,
  `Price` int(11) NOT NULL,
  `Card_Number` int(11) NOT NULL,
  `Ex_Month` int(11) NOT NULL,
  `Ex_Year` int(11) NOT NULL,
  `DATE_TIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `C_MACS_PRICES`
--

INSERT INTO `C_MACS_PRICES` (`Username`, `Price`, `Card_Number`, `Ex_Month`, `Ex_Year`, `DATE_TIME`) VALUES
('shreyansh007', 269900, 2923800, 3, 2023, '2023-04-02 18:10:24'),
('shreyansh007', 169900, 88, 5, 9, '2023-04-06 13:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `C_WATCH_ORDER`
--

CREATE TABLE `C_WATCH_ORDER` (
  `Username` varchar(25) NOT NULL,
  `Name` varchar(25) NOT NULL,
  `Size` varchar(25) NOT NULL,
  `Color` varchar(25) NOT NULL,
  `DATE_TIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `C_WATCH_ORDER`
--

INSERT INTO `C_WATCH_ORDER` (`Username`, `Name`, `Size`, `Color`, `DATE_TIME`) VALUES
('shreyansh007', 'Apple Watch Series S8', '45', 'Red', '2023-04-02 18:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `C_WATCH_PRICES`
--

CREATE TABLE `C_WATCH_PRICES` (
  `Username` varchar(25) NOT NULL,
  `Price` int(11) NOT NULL,
  `Card_Number` int(11) NOT NULL,
  `Ex_Month` int(11) NOT NULL,
  `Ex_Year` int(11) NOT NULL,
  `DATE_TIME` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `C_WATCH_PRICES`
--

INSERT INTO `C_WATCH_PRICES` (`Username`, `Price`, `Card_Number`, `Ex_Month`, `Ex_Year`, `DATE_TIME`) VALUES
('shreyansh007', 45900, 5754939, 10, 2026, '2023-04-02 18:12:19');

-- --------------------------------------------------------

--
-- Table structure for table `SIGNUP`
--

CREATE TABLE `SIGNUP` (
  `NAME` varchar(50) NOT NULL,
  `EMAIL` varchar(60) NOT NULL,
  `ADDRESS` varchar(200) NOT NULL,
  `PINCODE` int(7) NOT NULL,
  `MOBILE` bigint(20) NOT NULL,
  `USERNAME` varchar(25) NOT NULL,
  `PASSWORD` varchar(25) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `SIGNUP`
--

INSERT INTO `SIGNUP` (`NAME`, `EMAIL`, `ADDRESS`, `PINCODE`, `MOBILE`, `USERNAME`, `PASSWORD`) VALUES
('Dhrumit', 'dhrumit@gmail.com', 'Navsari', 234342, 8978970976, 'dhrumit565', '123456789'),
('Shrey', 'shrey@gmail.com', 'surat', 564345, 9878978909, 'shrey', '7899877789'),
('Sneh', 'todarmalsneh@gmail.com', 'ksadj;flksadj fowiasu er[23ourw[oei aoiwe', 370201, 6354406761, 'sneh', 'slkdjfaos;djflks '),
('Shreyansh', 'shreyansh@gmail.com', 'Surat', 394101, 2971439946, 'shreyansh007', '123'),
('Admin', 'admin@admin.com', '-', 0, 0, 'admin@ad', 'admin@07');

-- --------------------------------------------------------

--
-- Table structure for table `STOCKS`
--

CREATE TABLE `STOCKS` (
  `NAME` varchar(25) NOT NULL,
  `Quantity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `STOCKS`
--

INSERT INTO `STOCKS` (`NAME`, `Quantity`) VALUES
('iPhone 14', 0),
('IPhone 14 Pro', 14),
('IPhone 14 Plus', 15),
('IPhone 14 Pro Max', 1),
('IPhone 13', 4),
('IPhone 13 Pro', 4),
('iPhone 13 Pro Max', 3),
('IPhone 13 Mini', 8),
('IPhone 12 Mini', 1),
('IPhone 12', 3),
('IPhone 12 Pro', 2),
('IPhone 12 Pro Max', 4),
('MacBook Air M1', 4),
('MacBook Pro M1', 3),
('MacBook M1 Pro', 1),
('MacBook M1 Max', 2),
('MacBook Air M2', 4),
('MacBook Pro M2', 2),
('MacBook M2 Pro', 3),
('MacBook M2 Max', 1),
('IPad Air M1', 1),
('IPad Pro M1', 3),
('IPad Pro M2', 4),
('Apple Watch SE', 8),
('Apple Watch Series 8', 10),
('Apple Watch Ultra', 9);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
