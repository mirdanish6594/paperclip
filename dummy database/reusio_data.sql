-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 01:55 PM
-- Server version: 10.4.25-MariaDB
-- PHP Version: 8.1.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `reusio_data`
--

-- --------------------------------------------------------

--
-- Table structure for table `listings`
--

CREATE TABLE `listings` (
  `id` bigint(11) NOT NULL,
  `user_name` text NOT NULL,
  `user_id` int(11) NOT NULL,
  `icon` text NOT NULL,
  `title` text NOT NULL,
  `category` int(11) NOT NULL,
  `image_src` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL,
  `description` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `listings`
--

INSERT INTO `listings` (`id`, `user_name`, `user_id`, `icon`, `title`, `category`, `image_src`, `description`) VALUES
(20230515140722, 'aym_nnnn', 2203101, 'MacBook Air - 5 (1).png', 'heloo', 0, 'MacBook Air - 4.png', 'hello'),
(20230515140730, 'aym_nnnn', 2203101, 'MacBook Air - 5 (1).png', 'heloo', 0, 'MacBook Air - 4.png', 'hello'),
(20230515141002, 'Ayman', 201, '1024px-Gear_7.svg.png', 'NAYA WLA', 0, 'Wrapper.png', 'hello'),
(20230515163724, 'Danish', 20220131, 'noun-light-bulb-1003289.png', 'BOOK', 65, 'pexels-safvan-sadiq-11862540.jpg', 'This is the latest listing\r\n'),
(20230515192625, 'Owais', 2012, 'MacBook Air - 5.png', 'Geometry Box', 1, 'MacBook Air - 3 (2).png', 'Toiasdifhlisjhdi');

-- --------------------------------------------------------

--
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `listing_id` int(11) NOT NULL,
  `rating` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `listings`
--
ALTER TABLE `listings`
  ADD PRIMARY KEY (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
