-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 19, 2024 at 07:30 AM
-- Server version: 10.6.18-MariaDB-log
-- PHP Version: 8.1.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `staffi7_financialmarkets_laravel`
--

-- --------------------------------------------------------

--
-- Table structure for table `trader_categories`
--

CREATE TABLE `trader_categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `slug` varchar(191) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `trader_categories`
--

INSERT INTO `trader_categories` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(4, 'Oil', 'oil', '2020-04-01 17:13:05', '2020-04-08 15:35:25'),
(5, 'Gold', 'gold', '2020-04-01 17:13:09', '2020-04-08 15:35:42'),
(6, 'U.S Markets', 'us-markets', '2020-04-01 17:13:12', '2020-04-08 15:35:52'),
(8, 'NASDAQ 100', 'nasdaq-100', '2020-06-03 12:32:03', '2020-06-03 12:32:03'),
(9, 'Equities', 'equities', '2020-06-03 12:34:00', '2020-06-03 12:34:00'),
(10, 'Currency', 'currency', '2020-06-03 15:41:25', '2020-06-03 15:41:25'),
(11, 'Copper', 'copper', '2021-06-21 20:05:54', '2021-06-21 20:05:54'),
(12, 'Bonds', 'bonds', '2021-06-23 16:10:07', '2021-06-23 16:10:07'),
(13, 'Cryptocurrency', 'cryptocurrency', '2022-05-26 19:07:18', '2022-05-26 19:07:18'),
(14, 'Market Summary', 'market-summary', '2023-11-15 18:19:24', '2023-11-15 18:19:24');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `trader_categories`
--
ALTER TABLE `trader_categories`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `trader_categories`
--
ALTER TABLE `trader_categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
