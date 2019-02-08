-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 08, 2019 at 09:54 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `class_crud`
--
CREATE DATABASE IF NOT EXISTS `class_crud` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `class_crud`;

-- --------------------------------------------------------

--
-- Table structure for table `student_course`
--

CREATE TABLE `student_course` (
  `id` int(40) NOT NULL,
  `fname` varchar(20) NOT NULL,
  `lname` varchar(20) NOT NULL,
  `gender` varchar(10) NOT NULL,
  `ccode` varchar(20) NOT NULL,
  `cdesc` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `student_course`
--

INSERT INTO `student_course` (`id`, `fname`, `lname`, `gender`, `ccode`, `cdesc`) VALUES
(1, 'Ken', 'Ngati', 'male', 'CIT 305', 'Human Computer Interaction'),
(2, 'Lavender', 'Aluju', 'male', 'CIT 922', 'Music With IT');

-- --------------------------------------------------------

--
-- Table structure for table `zalego`
--

CREATE TABLE `zalego` (
  `id` int(11) NOT NULL,
  `fname` varchar(40) NOT NULL,
  `lname` varchar(40) NOT NULL,
  `uname` varchar(40) NOT NULL,
  `pass` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `zalego`
--

INSERT INTO `zalego` (`id`, `fname`, `lname`, `uname`, `pass`) VALUES
(1, 'Karim', 'Kanji', 'kanji-karanja', '123456789'),
(2, 'Jean', 'Jepleting', 'jean_jeple', 'jeanjeple'),
(3, 'Rose', 'Ralak', 'rose-ralak', '123456789'),
(4, 'Lavender', 'Aluju', 'lavender-aluju', '123456789');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `student_course`
--
ALTER TABLE `student_course`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `zalego`
--
ALTER TABLE `zalego`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `student_course`
--
ALTER TABLE `student_course`
  MODIFY `id` int(40) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `zalego`
--
ALTER TABLE `zalego`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
