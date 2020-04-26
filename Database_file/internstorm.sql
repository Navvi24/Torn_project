-- phpMyAdmin SQL Dump
-- version 5.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 23, 2020 at 03:39 PM
-- Server version: 10.4.11-MariaDB
-- PHP Version: 7.4.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `internstorm`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `username` varchar(30) NOT NULL,
  `password` varchar(10) NOT NULL DEFAULT 'root'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`username`, `password`) VALUES
('admin@internstorm.com', 'root');

-- --------------------------------------------------------

--
-- Table structure for table `logindetails`
--

CREATE TABLE `logindetails` (
  `fname` varchar(30) NOT NULL,
  `lname` varchar(30) NOT NULL,
  `phn` varchar(12) NOT NULL,
  `mail` varchar(50) NOT NULL,
  `password` varchar(30) NOT NULL,
  `resume_url` varchar(100) NOT NULL DEFAULT 'No Resume',
  `regdate` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `logindetails`
--

INSERT INTO `logindetails` (`fname`, `lname`, `phn`, `mail`, `password`, `resume_url`, `regdate`) VALUES
('piyush', 'gupta', '8740893628', 'piyushgupta2599@gmail.com', '123', 'No Resume', '2020-04-21 07:12:35');

-- --------------------------------------------------------

--
-- Table structure for table `posted_internship`
--

CREATE TABLE `posted_internship` (
  `SR` int(255) NOT NULL,
  `internship_post_time` timestamp NOT NULL DEFAULT current_timestamp(),
  `fname` varchar(30) NOT NULL,
  `lname` varchar(50) DEFAULT NULL,
  `phn` varchar(10) NOT NULL,
  `email` varchar(50) NOT NULL,
  `comp_name` varchar(50) NOT NULL,
  `comp_about` longtext NOT NULL,
  `comp_web` varchar(60) NOT NULL DEFAULT 'no website',
  `internship_pos` longtext NOT NULL,
  `internship_detail` longtext NOT NULL,
  `internship_city` varchar(60) NOT NULL,
  `total_opening` int(10) NOT NULL,
  `internship_start_date` varchar(30) NOT NULL,
  `duration_type` varchar(30) NOT NULL,
  `about_internship` longtext NOT NULL,
  `stipend_amount` int(10) NOT NULL,
  `stipend_method` longtext NOT NULL,
  `perks` varchar(100) NOT NULL DEFAULT 'No perks'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `logindetails`
--
ALTER TABLE `logindetails`
  ADD PRIMARY KEY (`mail`);

--
-- Indexes for table `posted_internship`
--
ALTER TABLE `posted_internship`
  ADD UNIQUE KEY `SR` (`SR`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `posted_internship`
--
ALTER TABLE `posted_internship`
  MODIFY `SR` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
