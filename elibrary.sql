-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 18, 2022 at 01:49 PM
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
-- Database: `elibrary`
--

-- --------------------------------------------------------

--
-- Table structure for table `books`
--

CREATE TABLE `books` (
  `book_id` int(10) NOT NULL,
  `book_name` varchar(300) NOT NULL,
  `book_author` varchar(250) NOT NULL,
  `book_link` varchar(300) NOT NULL,
  `book_sem_id` int(10) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `books`
--

INSERT INTO `books` (`book_id`, `book_name`, `book_author`, `book_link`, `book_sem_id`) VALUES
(1, 'first year semester 1 book', 'by shubham maurya', '#', 1),
(2, 'computer sem 1', 'shhbuh ', '#', 4),
(3, 'second', 'bt ', '#', 1);

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `category_id` int(11) NOT NULL,
  `category_name` varchar(250) NOT NULL,
  `category_description` varchar(250) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`category_id`, `category_name`, `category_description`) VALUES
(1, 'IT Engineering', 'The Complete syllabus of Information Technology engineering  is here...'),
(2, 'Computer Engineering', 'The Complete syllabus of computer engineering  is here...  '),
(3, 'Mechanical Engineering', 'The Complete syllabus of Mechanical engineering  is here...');

-- --------------------------------------------------------

--
-- Table structure for table `semesters`
--

CREATE TABLE `semesters` (
  `semester_id` int(20) NOT NULL,
  `semester_title` varchar(255) NOT NULL,
  `semester_cat_id` int(20) NOT NULL,
  `time_stam` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `semesters`
--

INSERT INTO `semesters` (`semester_id`, `semester_title`, `semester_cat_id`, `time_stam`) VALUES
(1, 'Semester 1', 1, '2022-01-28 06:30:48'),
(2, 'Semester 2', 1, '2022-01-28 06:32:21'),
(3, 'Semester 3', 1, '2022-01-29 18:44:48'),
(4, 'Semester 1', 2, '2022-01-29 18:45:25'),
(6, 'Semester 4', 1, '2022-01-31 08:25:12'),
(7, 'Semester 5', 1, '2022-01-31 08:25:38'),
(8, 'Semester 2', 2, '2022-01-31 08:26:00'),
(9, 'Semester 3', 2, '2022-01-31 08:27:05'),
(10, 'Semester 4', 2, '2022-01-31 08:27:32');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `books`
--
ALTER TABLE `books`
  ADD PRIMARY KEY (`book_id`);
ALTER TABLE `books` ADD FULLTEXT KEY `book_name` (`book_name`,`book_author`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`category_id`);

--
-- Indexes for table `semesters`
--
ALTER TABLE `semesters`
  ADD PRIMARY KEY (`semester_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `books`
--
ALTER TABLE `books`
  MODIFY `book_id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `category_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `semesters`
--
ALTER TABLE `semesters`
  MODIFY `semester_id` int(20) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
