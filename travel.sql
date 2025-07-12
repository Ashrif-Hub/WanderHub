-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 09, 2025 at 09:07 PM
-- Server version: 10.4.32-MariaDB
-- PHP Version: 8.2.12

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel`
--

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` int(11) NOT NULL,
  `destination` varchar(255) DEFAULT NULL,
  `people_count` int(11) DEFAULT NULL,
  `email` varchar(100) NOT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `user_details` text DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `status` varchar(100) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `bookings`
--

INSERT INTO `bookings` (`id`, `destination`, `people_count`, `email`, `start_date`, `end_date`, `user_details`, `created_at`, `status`) VALUES
(11, 'United Kingdom', 5, 'ilaa300@gmail.com', '2025-06-15', '2025-06-18', 'ashrif\r\n0775245852', '2025-06-13 23:26:34', 'Confirmed'),
(12, 'United States', 4, 'asrifilaa@gmail.com', '2025-06-15', '2025-06-19', 'ashrif\r\n0783536808', '2025-06-14 00:32:51', 'Confirmed');

-- --------------------------------------------------------

--
-- Table structure for table `enquiries`
--

CREATE TABLE `enquiries` (
  `id` int(11) NOT NULL,
  `name` varchar(100) NOT NULL,
  `contact` varchar(20) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `message` text DEFAULT NULL,
  `submitted_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `enquiries`
--

INSERT INTO `enquiries` (`id`, `name`, `contact`, `email`, `message`, `submitted_at`) VALUES
(1, 'ashrif', '774548952', 'asrif@gmail.com', 'nooo', '2025-05-13 19:54:47'),
(3, 'Ashrif', '0770353680', 'asrifilaa@gmail.com', 'Thank You', '2025-06-14 04:04:44');

-- --------------------------------------------------------

--
-- Table structure for table `guestlogin`
--

CREATE TABLE `guestlogin` (
  `id` int(11) NOT NULL,
  `firstName` varchar(100) DEFAULT NULL,
  `lastName` varchar(100) DEFAULT NULL,
  `email` varchar(100) DEFAULT NULL,
  `password` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `guestlogin`
--

INSERT INTO `guestlogin` (`id`, `firstName`, `lastName`, `email`, `password`) VALUES
(6, 'john', 'ifam', 'john@gmail.com', '202cb962ac59075b964b07152d234b70'),
(7, 'asrif', 'ahamed', 'asrifahamed@gmail.com', '202cb962ac59075b964b07152d234b70'),
(8, 'asrif', 'ahamed', 'asrifilaa@gmail.com', '202cb962ac59075b964b07152d234b70'),
(13, 'Ashrif', 'aham', 'asrifahamed400@gmail.com', '202cb962ac59075b964b07152d234b70'),
(14, 'asrif', 'ilaa', 'asrif123@gmail.com', '202cb962ac59075b964b07152d234b70');

-- --------------------------------------------------------

--
-- Table structure for table `packages`
--

CREATE TABLE `packages` (
  `id` int(11) NOT NULL,
  `name` varchar(100) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `rating` int(11) DEFAULT NULL,
  `price` decimal(10,2) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `packages`
--

INSERT INTO `packages` (`id`, `name`, `image`, `description`, `rating`, `price`) VALUES
(3, 'France', 'uploads/france.png', 'Experience France\'s rich culture, iconic landmarks, exquisite cuisine, and romantic charm in every corner.', 5, 749.00),
(4, 'Sri Lanka', 'uploads/Srilanka.jpeg', 'Discover stunning beaches, ancient temples, lush landscapes, and rich wildlife in beautiful Sri Lanka.\r\n\r\n', 5, 499.00),
(5, 'United Kingdom', 'uploads/uk.png', 'Explore royal castles, historic cities, scenic countryside, and vibrant culture across the United Kingdom.\r\n\r\n', 5, 599.00),
(6, 'United States', 'uploads/us.png', 'Experience diverse landscapes, iconic cities, national parks, and endless adventures in the United States.\r\n\r\n', 5, 1499.00),
(7, 'Pakistan', 'uploads/pakistan.png', 'Uncover majestic mountains, historical landmarks, colorful bazaars, and rich heritage throughout Pakistan.\r\n\r\n', 4, 788.00),
(8, 'Italy', 'uploads/italy.png', 'Savor Italy’s timeless beauty, ancient ruins, world-famous cuisine, and artistic masterpieces.\r\n\r\n', 5, 488.00),
(9, 'India', 'uploads/India.jpeg', 'Witness India’s vibrant traditions, spiritual sites, diverse culture, and breathtaking natural beauty.\r\n\r\n', 5, 755.00),
(10, 'Bangladesh', 'uploads/Bangaledesh.jpeg', 'Explore green countryside, riverine beauty, ancient architecture, and warm hospitality in Bangladesh.\r\n\r\n', 4, 420.00),
(11, 'Maldives', 'uploads/Maldives.jpeg', 'Relax in tropical paradise with crystal-clear waters, luxury resorts, and stunning coral reefs in Maldives.\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n', 5, 1300.00),
(13, 'Australia', 'uploads/Australia.jpeg', 'Natural and manmade attractions in Australia, popular beaches and national parks in Australia, adventurous and must visit places tourist spots in Australia', 5, 895.00);

-- --------------------------------------------------------

--
-- Table structure for table `tbltourpackages`
--

CREATE TABLE `tbltourpackages` (
  `PackageId` int(11) NOT NULL,
  `PackageName` varchar(200) DEFAULT NULL,
  `PackageType` varchar(100) DEFAULT NULL,
  `PackageLocation` varchar(200) DEFAULT NULL,
  `PackagePrice` decimal(10,2) DEFAULT NULL,
  `PackageFetures` text DEFAULT NULL,
  `PackageDetails` text DEFAULT NULL,
  `PackageImage` varchar(255) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `enquiries`
--
ALTER TABLE `enquiries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `guestlogin`
--
ALTER TABLE `guestlogin`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `email` (`email`);

--
-- Indexes for table `packages`
--
ALTER TABLE `packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  ADD PRIMARY KEY (`PackageId`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `enquiries`
--
ALTER TABLE `enquiries`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `guestlogin`
--
ALTER TABLE `guestlogin`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `packages`
--
ALTER TABLE `packages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `tbltourpackages`
--
ALTER TABLE `tbltourpackages`
  MODIFY `PackageId` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
