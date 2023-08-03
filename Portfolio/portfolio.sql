-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 03, 2023 at 07:57 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

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
-- Table structure for table `new_projects`
--

CREATE TABLE `new_projects` (
  `id` int(255) NOT NULL,
  `service_name` varchar(255) NOT NULL,
  `no_of_items` int(255) NOT NULL,
  `customer_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `contact_number` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `new_projects`
--

INSERT INTO `new_projects` (`id`, `service_name`, `no_of_items`, `customer_name`, `email`, `contact_number`) VALUES
(7, 'logo designing', 1, 'Hiruni Nawodya', 'hiru@gmail.com', '076-6778899'),
(8, 'event flyer designing', 3, 'Lakshitha Madhushan', 'lak@gmail.com', '072-8989678'),
(9, 'cover page designing', 1, 'Yehali Pahandi', 'yeha@gmail.com', '076-4545678'),
(10, 'handbill designing', 2, 'Shenal Kavinga', 'shenal@gmail.com', '076-3456345'),
(11, 'business flyer designing', 2, 'Kasuni Sulakshana', 'kas@gmail.com', '071-6789678'),
(12, 'invitation card designing', 3, 'Mahesh Kodithuwakku', 'mahesh@gmail.com', '076-9090564'),
(13, 'logo designing', 1, 'Tharushi Navindya', 'tharu@gmail.com', '071-4342617'),
(14, 'resume making', 4, 'Dilantha Sandaruwan', 'dil@gmail.com', '072-5847243');

-- --------------------------------------------------------

--
-- Table structure for table `service`
--

CREATE TABLE `service` (
  `id` int(255) NOT NULL,
  `Service_name` varchar(50) NOT NULL,
  `Price` varchar(255) NOT NULL,
  `Duration` varchar(255) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `service`
--

INSERT INTO `service` (`id`, `Service_name`, `Price`, `Duration`) VALUES
(1, 'logo designing', '150.00', 'within 5 days'),
(2, 'resume making', '300.00', 'within 7 days'),
(3, 'event flyers designing', '400.00', 'within 4 days'),
(4, 'business flyers designing ', '500.00', 'within 5 days'),
(5, 'handbill designing', '400.00', 'within 7 days'),
(6, 'invitation cards designing', '150.00', 'within 3 days'),
(7, 'cover page designing', '400.00', 'within 5 days'),
(8, 'package designing', '500.00', 'within 6 days'),
(9, '3D designing', '600.00', 'within 6 days'),
(10, 'typography designing', '1000.00', 'within 6 days');

-- --------------------------------------------------------

--
-- Table structure for table `user_form`
--

CREATE TABLE `user_form` (
  `id` int(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` varchar(255) NOT NULL DEFAULT 'user'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `user_form`
--

INSERT INTO `user_form` (`id`, `name`, `email`, `password`, `user_type`) VALUES
(1, 'nalanee', 'nal@gmail.com', '956aa2560e8da8f467209f9184477c92', 'admin'),
(2, 'mahinda', 'mah@gmail.com', 'eafe15705dc69d6020c170e5b3bc2d6b', 'admin'),
(3, 'maneesh', 'man@gmail.com', 'd1446967f9408b6ee159863f068d192b', 'admin'),
(4, 'hiruni', 'hiru@gmail.com', '10600d77625e6bb1c71f307929b47cf7', 'user'),
(5, 'lakshitha', 'lak@gmail.com', '8bb91a3061a0e74c725eadb829a359e6', 'user'),
(6, 'yehali', 'yeha@gmail.com', 'e68a92559e45684ed4f1cbc4e358b6c3', 'user'),
(7, 'shenal', 'shenal@gmail.com', 'f896ceb46aa489fdbd3e560a04d06517', 'user'),
(8, 'kasuni', 'kas@gmail.com', 'f26fe4b9737c5f00f306c67195b2cc29', 'user'),
(9, 'mahesh', 'mahesh@gmail.com', '49bb197bec17b7d20b2df6b1f3c3434a', 'user'),
(10, 'tharushi', 'tharu@gmail.com', '1edc86f713a0b21b9a2762a27051dc05', 'user'),
(11, 'dilantha', 'dil@gmail.com', '0f7cf466ab8246fe4542a287327d602d', 'user');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `new_projects`
--
ALTER TABLE `new_projects`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `service`
--
ALTER TABLE `service`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_form`
--
ALTER TABLE `user_form`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `new_projects`
--
ALTER TABLE `new_projects`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `service`
--
ALTER TABLE `service`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `user_form`
--
ALTER TABLE `user_form`
  MODIFY `id` int(255) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
