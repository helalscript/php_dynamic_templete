-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 02, 2023 at 03:39 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `palovit`
--

-- --------------------------------------------------------

--
-- Table structure for table `category_featured`
--

CREATE TABLE `category_featured` (
  `id` int(11) NOT NULL,
  `name` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `category_featured`
--

INSERT INTO `category_featured` (`id`, `name`) VALUES
(1, 'Buildings'),
(2, 'Decoration'),
(3, 'Architecture'),
(4, 'Renovation');

-- --------------------------------------------------------

--
-- Table structure for table `featured_project`
--

CREATE TABLE `featured_project` (
  `id` int(11) NOT NULL,
  `cat_id` int(11) NOT NULL,
  `photo` varchar(255) NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `featured_project`
--

INSERT INTO `featured_project` (`id`, `cat_id`, `photo`, `details`) VALUES
(11, 1, 'lightbox-1.jpg', 'MORE DETAILS@@'),
(16, 1, 'lightbox-2.jpg', 'MORE DETAILS@@'),
(20, 2, 'lightbox-3.jpg', 'The area have more special for all. school, library, masjid, hospital, food shop -etc.  '),
(21, 2, 'lightbox-5.jpg', 'The area have more special for all. school, library, masjid, hospital, food shop -etc.  '),
(22, 3, 'lightbox-6.jpg', 'The area have more special for all. school, library, masjid, hospital, food shop -etc.  '),
(23, 3, 'lightbox-8.jpg', 'The area have more special for all. school, library, masjid, hospital, food shop -etc.  '),
(24, 4, 'lightbox-10.jpg', 'The area have more special for all. school, library, masjid, hospital, food shop -etc.  '),
(25, 4, 'lightbox-11.jpg', 'The area have more special for all. school, library, masjid, hospital, food shop -etc.  '),
(26, 4, 'lightbox-12.jpg', 'The area have more special for all. school, library, masjid, hospital, food shop -etc.  ');

-- --------------------------------------------------------

--
-- Table structure for table `general_info`
--

CREATE TABLE `general_info` (
  `id` int(11) NOT NULL,
  `title` text NOT NULL,
  `logo` text NOT NULL,
  `phone` text NOT NULL,
  `address` text NOT NULL,
  `email` text NOT NULL,
  `about` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `general_info`
--

INSERT INTO `general_info` (`id`, `title`, `logo`, `phone`, `address`, `email`, `about`) VALUES
(2, 'PalovitA', 'logo1.png', '0251 542 52 54@@', '107727 Santa Monica Boulevard Los Angeles, California 90025-4718 United States of America@@', 'contact@palovit.com@@', 'Mind what no by kept. Celebrated no he decisively thoroughly. Our asked sex point her she seems. New plenty she horses parish design you. Stuff sight equal of my woody. Him children bringing goodness suitable she entirely put far daughter.@@');

-- --------------------------------------------------------

--
-- Table structure for table `intro`
--

CREATE TABLE `intro` (
  `id` int(11) NOT NULL,
  `details` text NOT NULL,
  `owner` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `intro`
--

INSERT INTO `intro` (`id`, `details`, `owner`) VALUES
(1, '“No projection as up preference reasonably delightful celebrated. Preserved and abilities assurance tolerably breakfast use saw. And painted letters forming far village elderly compact.”', 'Stacey R. Garcia');

-- --------------------------------------------------------

--
-- Table structure for table `personal_info`
--

CREATE TABLE `personal_info` (
  `id` int(11) NOT NULL,
  `name` varchar(50) NOT NULL,
  `details` varchar(100) NOT NULL,
  `photo` text NOT NULL,
  `company` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `personal_info`
--

INSERT INTO `personal_info` (`id`, `name`, `details`, `photo`, `company`) VALUES
(1, 'Helal', 'The Next generation of 2030 will go technology.', 'testimonial-3.jpg', 'Google'),
(2, 'Akram', 'All in one packet.', 'testimonial-2.jpg', 'Microsoft'),
(4, 'Red', 'okfopsdpofposd', 'lightbox-3.jpg', ';flglf'),
(5, 'Helal', 'The Next generation of 2030 will go technology.', 'lightbox-3.jpg', 'Google');

-- --------------------------------------------------------

--
-- Table structure for table `project_plan`
--

CREATE TABLE `project_plan` (
  `id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `details` text NOT NULL,
  `photo` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `project_plan`
--

INSERT INTO `project_plan` (`id`, `title`, `details`, `photo`) VALUES
(1, 'Project Planning', 'Style too own civil out along. Perfectly offending attempted add arranging age gentleman concluded. Get who uncommonly our expression ten increasing considered occasional travelling.', 'content-1.jpg'),
(2, 'Architectural Design', 'Style too own civil out along. Perfectly offending attempted add arranging age gentleman concluded. Get who uncommonly our expression ten increasing considered occasional travelling.', 'content-3.jpg'),
(3, 'Reconstruction Services', 'Style too own civil out along. Perfectly offending attempted add arranging age gentleman concluded. Get who uncommonly our expression ten increasing considered occasional travelling.', 'content-2.jpg'),
(4, 'Special Service 24 hours', 'The area have more special for all. school, library, masjid, hospital, food shop -etc.  ', 'blog-4.jpg'),
(5, 'egheraherher', 'erhtherah ', 'blog-4.jpg');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(11) NOT NULL,
  `photo` text NOT NULL,
  `title1` text NOT NULL,
  `title2` text NOT NULL,
  `title3` text NOT NULL,
  `details` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `photo`, `title1`, `title2`, `title3`, `details`) VALUES
(2, 'construction_tr.jpg', 'WE ARE CREATIVE & INNOVATIVE', 'Creative Builder@@@', 'CONSTRUCTION COMPANY@@@', 'MORE DETAILS'),
(4, 'paper-mill-worker.jpg', 'WE ARE CREATIVE & INNOVATIVE@@@', 'Creative Builder@@@', 'CONSTRUCTION COMPANY@@@', 'DETAILS'),
(5, 'smilingbuilder.jpg', 'WE ARE CREATIVE & INNOVATIVE@@@', 'Creative Builder@@@', 'CONSTRUCTION COMPANY@@@', 'MORE DETAILS@@'),
(7, 'working-hard-building-man-construction-worker.jpg', '@@@WE ARE CREATIVE & INNOVATIVE@@@', '@@Creative Builder@@@', 'CONSTRUCTION ', 'erhtherah ');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) NOT NULL,
  `email` varchar(40) NOT NULL,
  `password` varchar(40) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `email`, `password`) VALUES
(1, 'admin@email.com', '827ccb0eea8a706c4c34a16891f84e7b');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `category_featured`
--
ALTER TABLE `category_featured`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `featured_project`
--
ALTER TABLE `featured_project`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `general_info`
--
ALTER TABLE `general_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `intro`
--
ALTER TABLE `intro`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `personal_info`
--
ALTER TABLE `personal_info`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `project_plan`
--
ALTER TABLE `project_plan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `category_featured`
--
ALTER TABLE `category_featured`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `featured_project`
--
ALTER TABLE `featured_project`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `general_info`
--
ALTER TABLE `general_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `intro`
--
ALTER TABLE `intro`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `personal_info`
--
ALTER TABLE `personal_info`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `project_plan`
--
ALTER TABLE `project_plan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
