-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 20, 2022 at 05:46 AM
-- Server version: 10.4.21-MariaDB
-- PHP Version: 8.0.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `portfolio`
--

-- --------------------------------------------------------

--
-- Table structure for table `candidates`
--

CREATE TABLE `candidates` (
  `candidate_id` int(10) NOT NULL,
  `candidate_username` varchar(10) NOT NULL,
  `candidate_email` varchar(15) NOT NULL,
  `candidate_password` varchar(15) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_profile`
--

CREATE TABLE `candidate_profile` (
  `candidate_profile_id` int(10) NOT NULL,
  `candidate_id` int(10) NOT NULL,
  `candidate_firstname` varchar(15) NOT NULL,
  `candidate_lastname` varchar(15) NOT NULL,
  `candidate_birthdate` date NOT NULL,
  `candidate_gender` varchar(6) NOT NULL,
  `candidate_graduation` varchar(20) NOT NULL,
  `candidate_postgraduation` varchar(20) NOT NULL,
  `candidate_experience` varchar(50) NOT NULL,
  `candidate_resume` varchar(200) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- --------------------------------------------------------

--
-- Table structure for table `candidate_project`
--

CREATE TABLE `candidate_project` (
  `candidate_project_id` int(10) NOT NULL,
  `candidate_id` int(10) NOT NULL,
  `candidate_project_name` varchar(25) NOT NULL,
  `candidate_project_description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `candidates`
--
ALTER TABLE `candidates`
  ADD PRIMARY KEY (`candidate_id`);

--
-- Indexes for table `candidate_profile`
--
ALTER TABLE `candidate_profile`
  ADD PRIMARY KEY (`candidate_profile_id`),
  ADD UNIQUE KEY `candidate_id` (`candidate_id`);

--
-- Indexes for table `candidate_project`
--
ALTER TABLE `candidate_project`
  ADD PRIMARY KEY (`candidate_project_id`),
  ADD KEY `candidate_id_key` (`candidate_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `candidates`
--
ALTER TABLE `candidates`
  MODIFY `candidate_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=54;

--
-- AUTO_INCREMENT for table `candidate_profile`
--
ALTER TABLE `candidate_profile`
  MODIFY `candidate_profile_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=57;

--
-- AUTO_INCREMENT for table `candidate_project`
--
ALTER TABLE `candidate_project`
  MODIFY `candidate_project_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=41;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `candidate_profile`
--
ALTER TABLE `candidate_profile`
  ADD CONSTRAINT `candidate_id_key1` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`candidate_id`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `candidate_project`
--
ALTER TABLE `candidate_project`
  ADD CONSTRAINT `candidate_id_key` FOREIGN KEY (`candidate_id`) REFERENCES `candidates` (`candidate_id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
