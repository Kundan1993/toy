-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Jan 25, 2021 at 10:22 PM
-- Server version: 10.3.25-MariaDB-0ubuntu1
-- PHP Version: 7.4.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `goal_toy`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin`
--

CREATE TABLE `admin` (
  `id` int(11) NOT NULL,
  `name` varchar(60) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  `profile_image` text NOT NULL,
  `status` tinyint(4) NOT NULL DEFAULT 1,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `admin`
--

INSERT INTO `admin` (`id`, `name`, `username`, `password`, `profile_image`, `status`, `created_date`, `modified_date`) VALUES
(1, 'Admin ', 'admin@toy.com', 'e10adc3949ba59abbe56e057f20f883e', '', 1, '2021-01-24 00:00:31', '2021-01-25 21:16:44');

-- --------------------------------------------------------

--
-- Table structure for table `like_rating`
--

CREATE TABLE `like_rating` (
  `id` int(11) NOT NULL,
  `toy_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL,
  `likes` int(11) NOT NULL,
  `is_deleted` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `toy_details`
--

CREATE TABLE `toy_details` (
  `id` int(11) NOT NULL,
  `name` varchar(250) NOT NULL,
  `price` double NOT NULL,
  `size` varchar(50) NOT NULL,
  `description` text NOT NULL,
  `information` text NOT NULL,
  `images` text DEFAULT NULL,
  `is_deleted` tinyint(4) NOT NULL DEFAULT 0,
  `created_date` datetime NOT NULL DEFAULT current_timestamp(),
  `modified_date` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin`
--
ALTER TABLE `admin`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `like_rating`
--
ALTER TABLE `like_rating`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `toy_details`
--
ALTER TABLE `toy_details`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin`
--
ALTER TABLE `admin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `like_rating`
--
ALTER TABLE `like_rating`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `toy_details`
--
ALTER TABLE `toy_details`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
