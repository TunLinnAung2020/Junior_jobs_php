-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Feb 25, 2020 at 02:56 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.2.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `job_portal`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_mm` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `name_mm`, `created_at`) VALUES
(1, 'IT', 'IT', '2020-01-28 13:33:50'),
(2, 'Accounting', 'Accounting', '2020-01-28 13:33:50'),
(3, 'New', 'new', '2020-01-31 19:46:02'),
(4, 'new', 'new', '2020-01-31 19:46:06'),
(5, 'HR', 'HR', '2020-01-31 19:47:23'),
(6, 'ssd', 'sd', '2020-01-31 19:47:44'),
(7, 'ssd', 'sd', '2020-01-31 19:48:01'),
(8, 'ssd', 'sd', '2020-01-31 19:48:05'),
(9, 'ssd', 'sd', '2020-01-31 19:49:15'),
(10, 'One', 'one', '2020-01-31 19:49:25'),
(11, 'how', 'how', '2020-01-31 20:08:29'),
(12, '', '', '2020-01-31 20:25:17'),
(13, 'ff', 'ff', '2020-01-31 20:25:27'),
(14, 'test', 'test', '2020-01-31 20:26:18'),
(15, 'op', 'op', '2020-01-31 20:37:27'),
(16, 'ese', 'ese', '2020-01-31 20:52:05'),
(17, 'test', 'test', '2020-02-06 13:57:28'),
(18, 'test', 'test', '2020-02-06 13:59:06'),
(19, 'test', 'test', '2020-02-06 14:00:27'),
(20, 'Ok', 'OK', '2020-02-06 14:03:56'),
(21, 'hi', 'hi', '2020-02-06 14:04:49'),
(22, 'New', 'New', '2020-02-10 13:25:02'),
(23, '! or delete name where 1=1--', 'test', '2020-02-10 13:25:53'),
(24, '! or delete name where 1=1--', 'test', '2020-02-10 13:26:30'),
(25, '! or delete name where 1=1--', 'sdfdf', '2020-02-10 13:27:01'),
(26, 'alert', 'alert', '2020-02-10 13:59:48'),
(27, 'again', 'again', '2020-02-10 14:02:44'),
(28, 'next', 'nt', '2020-02-10 14:03:06'),
(29, 'adfdaf', 'asdfdsaf', '2020-02-10 14:03:20'),
(30, 'test', 'test', '2020-02-25 13:51:20'),
(31, 'ok', 'ok', '2020-02-25 13:51:52');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  `position_id` int(11) NOT NULL DEFAULT 1,
  `title` varchar(255) NOT NULL,
  `description` text NOT NULL,
  `requirement` longtext NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `jobs`
--

INSERT INTO `jobs` (`id`, `category_id`, `position_id`, `title`, `description`, `requirement`, `created_at`) VALUES
(1, 2, 1, 'dfdf', 'dfd', 'd', '2020-02-25 13:29:01'),
(2, 2, 1, 'dfdf', 'dfd', 'd', '2020-02-25 13:30:04'),
(3, 1, 1, 'Java Developer', 'dfdJava Developer', 'Java Developer', '2020-02-25 13:30:35'),
(4, 2, 1, 'dd', 'dd', 'd', '2020-02-25 13:48:09');

-- --------------------------------------------------------

--
-- Table structure for table `positions`
--

CREATE TABLE `positions` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `name_mm` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `positions`
--

INSERT INTO `positions` (`id`, `name`, `name_mm`, `created_at`) VALUES
(1, 'Junior', 'Junior', '2020-02-25 12:58:01'),
(2, 'Internship', 'Internship', '2020-02-25 12:58:12');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `positions`
--
ALTER TABLE `positions`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `positions`
--
ALTER TABLE `positions`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
