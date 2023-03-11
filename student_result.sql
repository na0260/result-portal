-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 22, 2022 at 07:11 AM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `student_result`
--

-- --------------------------------------------------------

--
-- Table structure for table `course_list`
--

CREATE TABLE `course_list` (
  `SL` int(100) NOT NULL,
  `Course_Code` varchar(255) NOT NULL,
  `Course_Title` varchar(255) NOT NULL,
  `Course_Credit` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `course_list`
--

INSERT INTO `course_list` (`SL`, `Course_Code`, `Course_Title`, `Course_Credit`) VALUES
(1, 'CSE 205', 'Algorithm', 3),
(2, 'CSE 206', 'Algorithms Lab', 1.5),
(3, 'CSE 301', 'Web Programming', 3),
(4, 'CSE 302', 'Web Programming Lab', 1.5);

-- --------------------------------------------------------

--
-- Table structure for table `fct_login`
--

CREATE TABLE `fct_login` (
  `SL` int(100) NOT NULL,
  `username` varchar(255) NOT NULL,
  `Password` text NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `fct_login`
--

INSERT INTO `fct_login` (`SL`, `username`, `Password`, `Name`) VALUES
(1, 'TANPIA.CSE', '12345', 'Tanpia Tasnim');

-- --------------------------------------------------------

--
-- Table structure for table `ind_res`
--

CREATE TABLE `ind_res` (
  `SL` int(100) NOT NULL,
  `Course_Code` varchar(255) NOT NULL,
  `SID` int(100) NOT NULL,
  `Marks` double NOT NULL,
  `Comments` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `ind_res`
--

INSERT INTO `ind_res` (`SL`, `Course_Code`, `SID`, `Marks`, `Comments`) VALUES
(22, 'CSE 302', 201002398, 95, ''),
(23, 'CSE 206', 201002398, 85, ''),
(24, 'CSE 302', 201002001, 70, ''),
(25, 'CSE 206', 201002001, 0, 'Incomplete'),
(26, 'CSE 302', 201002398, 50, '');

-- --------------------------------------------------------

--
-- Table structure for table `sem_cgpa`
--

CREATE TABLE `sem_cgpa` (
  `SL` int(30) NOT NULL,
  `semester` int(10) NOT NULL,
  `SID` int(30) NOT NULL,
  `Total_Credit` float NOT NULL,
  `GPA` double NOT NULL,
  `CGPA` double NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `sem_cgpa`
--

INSERT INTO `sem_cgpa` (`SL`, `semester`, `SID`, `Total_Credit`, `GPA`, `CGPA`) VALUES
(1, 221, 201002398, 12, 3.69, 3.56),
(2, 222, 201002398, 13, 3.5, 3.51),
(3, 221, 201002001, 12, 3.4, 3.31),
(4, 222, 201002001, 12, 3.5, 3.34);

-- --------------------------------------------------------

--
-- Table structure for table `std_login`
--

CREATE TABLE `std_login` (
  `SL` int(100) NOT NULL,
  `ID` int(100) NOT NULL,
  `Password` text NOT NULL,
  `Name` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `std_login`
--

INSERT INTO `std_login` (`SL`, `ID`, `Password`, `Name`) VALUES
(1, 201002398, '12345', 'Nur Ahmed'),
(2, 201002001, '12345', 'UNKNOWN');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `course_list`
--
ALTER TABLE `course_list`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `fct_login`
--
ALTER TABLE `fct_login`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `ind_res`
--
ALTER TABLE `ind_res`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `sem_cgpa`
--
ALTER TABLE `sem_cgpa`
  ADD PRIMARY KEY (`SL`);

--
-- Indexes for table `std_login`
--
ALTER TABLE `std_login`
  ADD PRIMARY KEY (`SL`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `course_list`
--
ALTER TABLE `course_list`
  MODIFY `SL` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `fct_login`
--
ALTER TABLE `fct_login`
  MODIFY `SL` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `ind_res`
--
ALTER TABLE `ind_res`
  MODIFY `SL` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `sem_cgpa`
--
ALTER TABLE `sem_cgpa`
  MODIFY `SL` int(30) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `std_login`
--
ALTER TABLE `std_login`
  MODIFY `SL` int(100) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
