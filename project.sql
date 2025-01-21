-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 16, 2024 at 04:25 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 7.4.28

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
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `Aid` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`Aid`, `Name`, `Gender`, `DOB`, `Email`, `Password`) VALUES
(3, 'Subrata Nandi', 'Male', '2002-04-10', 'r.subratanandi@gmail.com', '$2y$10$tFYr//K5GL8CDiX0R2EMjOLlzR1b4/Gu2AGi/m49/wevGyfPg73wi');

-- --------------------------------------------------------

--
-- Table structure for table `contact`
--

CREATE TABLE `contact` (
  `Cid` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Message` varchar(1000) NOT NULL,
  `Datetime` datetime NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `contact`
--

INSERT INTO `contact` (`Cid`, `Name`, `Email`, `Message`, `Datetime`) VALUES
(28, 'Rohan', 'r@gmail.com', 'Project done man.', '2023-04-29 19:17:15'),
(29, 'Subrata', 'r.subratanandi@gmail.com', 'Hi Boss!', '2023-04-29 19:18:05'),
(31, 'Subrata Nandi', 'r.subratanandi@gmail.com', 'daqrff', '2023-07-30 23:35:10'),
(32, 'Sub', 'e@gmail.com', 'Please add some more questions.', '2023-08-03 08:42:14'),
(34, 'Subrata Nandi', 'r.subratanandi@gmail.com', 'New questions please', '2023-09-26 19:26:57'),
(35, 'Subrata Nandi', 'r.subratanandi@gmail.com', 'auyeguywvhrht  efh greh oirl', '2024-03-04 22:20:51');

-- --------------------------------------------------------

--
-- Table structure for table `registration`
--

CREATE TABLE `registration` (
  `Sid` int(10) NOT NULL,
  `Name` varchar(40) NOT NULL,
  `Gender` varchar(10) NOT NULL,
  `DOB` date NOT NULL,
  `Sem` varchar(30) NOT NULL,
  `College` varchar(200) NOT NULL,
  `Email` varchar(100) NOT NULL,
  `Password` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `registration`
--

INSERT INTO `registration` (`Sid`, `Name`, `Gender`, `DOB`, `Sem`, `College`, `Email`, `Password`) VALUES
(1, 'sub', 'Male', '2002-04-10', '6th', 'Vivekananda College', 's@gmail.com', '$2y$10$QRJBBOfrds2ea8MtL/ZiIuICkE//BrEoPBiYeZ4jCJCkPWpt5rnpK'),
(4, 'Subrata Nandi', 'Male', '2002-04-10', '6th', 'Vivekananda College', 'r.subratanandi@gmail.com', '$2y$10$g9MtxVla61aK6gobm8UOQeyhyINrMU0uE9BzeF8Iw/tkS6g7ePpNy'),
(5, 'Sub', 'Male', '0006-05-31', '3', 'dgsaasg', 'sub@gmail.com', '$2y$10$6Dz7ewNlKLlZrjQwAnIuT.6MYV3kqhxARQS2NesEt41euhavn1RIO'),
(6, 'Sougota Saha', 'Male', '2024-11-14', '3', 'Heritage', 'sougotasaha@gmail.com', '$2y$10$1Okj2ANGcecMg0WLB8FdSeX5fa1Y8wCQtcZXKK2W68N8keVinVCWq');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`Aid`),
  ADD UNIQUE KEY `Email` (`Email`);

--
-- Indexes for table `contact`
--
ALTER TABLE `contact`
  ADD PRIMARY KEY (`Cid`);

--
-- Indexes for table `registration`
--
ALTER TABLE `registration`
  ADD PRIMARY KEY (`Sid`),
  ADD UNIQUE KEY `Email` (`Email`),
  ADD UNIQUE KEY `Email_2` (`Email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `Aid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contact`
--
ALTER TABLE `contact`
  MODIFY `Cid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- AUTO_INCREMENT for table `registration`
--
ALTER TABLE `registration`
  MODIFY `Sid` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
