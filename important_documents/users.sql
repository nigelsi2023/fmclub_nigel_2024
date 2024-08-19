-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Aug 19, 2024 at 07:33 AM
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
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) NOT NULL,
  `surname` varchar(191) DEFAULT NULL,
  `username` varchar(191) DEFAULT NULL,
  `telephone` varchar(255) DEFAULT NULL,
  `email` varchar(191) DEFAULT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `image` varchar(191) NOT NULL DEFAULT 'default.png',
  `address` text DEFAULT NULL,
  `dob` varchar(11) DEFAULT NULL,
  `age` int(11) NOT NULL DEFAULT 0,
  `password` varchar(191) DEFAULT NULL,
  `role` varchar(191) DEFAULT NULL,
  `status` tinyint(2) NOT NULL DEFAULT 0,
  `occupation` varchar(191) DEFAULT NULL,
  `buy_shares` enum('Yes','No','') NOT NULL DEFAULT 'No',
  `investing` varchar(255) DEFAULT NULL,
  `trading_course` enum('Yes','No','') NOT NULL DEFAULT 'No',
  `trading_with` varchar(255) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `security_question` varchar(255) DEFAULT NULL,
  `security_answer` varchar(255) DEFAULT NULL,
  `how_find` varchar(255) DEFAULT NULL,
  `why_join` varchar(255) DEFAULT NULL,
  `find_information` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `surname`, `username`, `telephone`, `email`, `email_verified_at`, `image`, `address`, `dob`, `age`, `password`, `role`, `status`, `occupation`, `buy_shares`, `investing`, `trading_course`, `trading_with`, `remember_token`, `security_question`, `security_answer`, `how_find`, `why_join`, `find_information`, `created_at`, `updated_at`) VALUES
(17, 'Ashraf Shuvo', 'Shovo', 'ashrafshovo', '12346579810', 'ashrafshovo@gmail.com', NULL, 'ashraf-shovo-2020-04-08-5e8e003ea9751.jpg', 'Sylhet, Bangladesh', '1996-01-15', 35, '$2y$10$cBd8l/AcvB/4/HR3RYezeOoWygLzXGWvFOeYx/5LLK13cKX4DlhAK', 'admin', 1, 'Web Developer', 'No', '5000', 'No', 'Coca-Cola', 'xhB7PpgHET5gNYc7BDITviuUuhcEPScShB6WiV9ahO3Ixyciba2a3YlkuXD1', 'What is your Google username?', 'ashrafshovo', 'Facebook', 'I am interested', 'Confidentials', '2019-09-18 09:50:31', '2022-08-26 19:50:42'),
(22, 'Test Nigel', NULL, NULL, '879879879', 'nigel.pi@staff-india.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$JprGoo7ySr9lIHehKMZdu.iToQZq3iNJjrshiuncz02YQyqtgo9WW', 'user', 0, 'Web Developer', 'Yes', '3', 'Yes', NULL, NULL, NULL, NULL, 'Leaflet', 'For learning', NULL, '2020-05-15 18:02:34', '2020-05-15 18:02:34'),
(23, 'Wayne Stokeling', NULL, NULL, '7184520949', 'Sws@aol.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$Bl5lf6TBcQYFinSwDe57W.H5YmAAGUY4ZNAdzktrzv8FzWgpno24.', 'user', 0, 'Investor', 'Yes', '0', 'No', NULL, NULL, NULL, NULL, 'Broker House', 'Yes', NULL, '2020-06-12 16:13:25', '2020-06-12 16:13:25'),
(24, 'Rob', NULL, NULL, NULL, 'rob@staff-india.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$ZmIber5ySDZi9RLU97GjWupc9.ddU8fjKZ4KOrOdZHNizFJe.c59i', 'admin', 0, NULL, 'No', NULL, 'No', NULL, 'rLblaa14Peb4571aY3G4MlAkRnfo4tsjgga3yYXBL1IDFpAn0NTaXIIuZH4F', NULL, NULL, NULL, NULL, NULL, '2022-01-20 17:43:13', '2022-08-26 20:03:24'),
(25, 'Scott', NULL, NULL, NULL, 'scott@staff-india.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$mQ5iOaM2uQjqv4GY9pVsIe6J2BPp5GL7ssUfFgx6mmW1cJFsOFJ6O', 'admin', 0, 'Web Developer', 'No', NULL, 'No', NULL, '9UoMkR7k4TUATZRlsaPWZdQOkemcwFqSylnmho8rKO75YAAJR0MdSigvsTEk', NULL, NULL, NULL, NULL, NULL, '2022-01-20 17:44:29', '2022-08-26 19:18:59'),
(26, 'sumeet anand', NULL, NULL, '9811135880', 'skanand9673@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$2GGJSRbRc/ELmPQd6cge6uetqq9ZJcBPA1HuPJD4NUgt4EXrLBCJ2', 'user', 0, 'jeweller', 'No', '5000', 'No', NULL, NULL, NULL, NULL, 'Google Search', 'to get trading tips', NULL, '2022-04-26 13:48:52', '2022-04-26 13:48:52'),
(27, 'sammy', NULL, NULL, '+8801799254130', 'sunitsen50@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$c2LxCy41tCzTGQomirTeW.8sHeycZNBN7or..96pgA7bwSFqDs6/O', 'user', 0, 'job', 'No', '100', 'No', NULL, NULL, NULL, NULL, 'Google Search', 'making some significant impact', NULL, '2022-05-16 17:33:24', '2022-05-16 17:33:24'),
(28, 'sammy sub test', NULL, NULL, '+880179925413', 'sammy@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$KcKbH9/tIcPlOon0Uu71XOdSBM9Jl7pcHjEoRzPnQFwz.MoIfXzcu', 'user', 0, 'job', 'No', '100', 'No', NULL, NULL, NULL, NULL, 'Facebook', 'test', NULL, '2022-05-31 20:11:03', '2022-05-31 20:11:03'),
(29, 'Daniel', NULL, NULL, '+8801758456228', 'daniel.staffindia@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$nHiqDIsrjXuzpixqJF8By.MOo8JlQaWQ9L1i3jTtZAaRHqZD9VXFq', 'user', 0, 'service', 'No', '100', 'No', NULL, NULL, NULL, NULL, 'Google Search', 'learning', NULL, '2022-06-07 19:46:23', '2022-06-07 19:46:23'),
(60, 'mac3425', NULL, NULL, '34343434567', 'mac3425@slvlog.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$kRUC8lfgRoM2Jm2Ms9YPIu391lSgwroxrOKem0LP1eeDC1z5R95oi', 'user', 0, '34', 'Yes', '34', 'Yes', NULL, NULL, NULL, NULL, 'Google Search', '34', NULL, '2022-06-23 19:29:59', '2022-06-23 19:29:59'),
(61, 'mac5678', NULL, NULL, '34567890987', 'mac5678@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$en4r1vzqTc808L.czfg47.vimlLGDc07e//KnMQF6ud6.i0U//ctO', 'user', 0, '5', 'Yes', '5', 'Yes', NULL, NULL, NULL, NULL, 'From a Friend', '5', NULL, '2022-06-23 19:31:26', '2022-06-23 19:31:26'),
(63, 'macos@gmail.commacos@gmail.com', NULL, NULL, '45444433443', 'macos@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$u6yDa2FfBOEp//YmdTfJa.E/GhXTSramB9AF2y1NEKYGkZV4U53pK', 'user', 0, '3', 'Yes', '3', 'No', NULL, NULL, NULL, NULL, 'Broker House', '3', NULL, '2022-06-23 20:44:56', '2022-06-23 20:44:56'),
(64, 'maco333', NULL, NULL, '34434343333', 'maco333@slvlog.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$MvROA7G3BRBbPa8X.Kiq2Oj/pAsN2hVN6UMT/33qT0VEs9Ia09xBe', 'user', 0, '4', 'Yes', '4', 'No', NULL, NULL, NULL, NULL, 'Broker House', '4', NULL, '2022-06-23 20:45:55', '2022-06-23 20:45:55'),
(65, 'maco3334', NULL, NULL, '33334444343', 'maco3334@slvlog.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$GYMcEqT589Tr72XHNv.LoOmoPV6o.SdfiLxwqgYQ6HQEM2isF/WZi', 'user', 0, '3', 'Yes', '3', 'Yes', NULL, NULL, NULL, NULL, 'Google Search', '3', NULL, '2022-06-23 20:48:26', '2022-06-23 20:48:26'),
(66, 'maco3356734', NULL, NULL, '33445566776', 'maco3356734@slvlog.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$TPBkv6Wj.R6nxseBDLovKu3qQCeJnagpAvxhWduVvIOznuW1bdQLe', 'user', 0, '3', 'Yes', '3', 'No', NULL, NULL, NULL, NULL, 'Broker House', '3', NULL, '2022-06-23 20:49:51', '2022-06-23 20:49:51'),
(67, 'test_d16', NULL, NULL, '121', 'test_d16@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$OkR5VDMEBlIbpuj/gqfwYOA2WnaAQ/hF2vng9HhVme71cDZ9hgyia', 'user', 0, 'a', 'No', '1', 'Yes', NULL, NULL, NULL, NULL, 'Google Search', '1', NULL, '2022-07-05 17:11:14', '2022-07-05 17:11:14'),
(68, 'notification', NULL, NULL, '123', 'notification@staff-india.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$9lfqAaXuC8B95a/CKdtUCuiuGaxk5PPWlFwpihvGjoU5g4FCAt59q', 'user', 0, '1', 'Yes', '2', 'Yes', NULL, NULL, NULL, NULL, 'Google Search', '3', NULL, '2022-07-15 18:54:34', '2022-07-15 18:54:34'),
(69, 'Onesimo Nkomo', NULL, NULL, '+27678757018', 'onesimonkomo@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$zXla3LrezJnkFK52Aw8wi./zKOvoPlaf1P9v2FThvuj7qeF/LTiUe', 'user', 0, 'Teacher', 'Yes', '1000', 'Yes', NULL, NULL, NULL, NULL, 'Google Search', 'So as to get signals', NULL, '2022-07-27 20:37:03', '2022-07-27 20:37:03'),
(70, 'Lynus Chadee', NULL, NULL, '8683506296', 'lynus.chadee@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$ZwLsmLx6nknmf3RyQeoP3.t9w134UVjgDbKxYQwe6aFGGfOs1KdOq', 'user', 0, 'Retiree', 'No', '3000', 'Yes', NULL, NULL, NULL, NULL, 'Google Search', 'Appears professional, fair with sound responses', NULL, '2022-07-29 02:47:56', '2022-07-29 02:47:56'),
(71, 'musufy789', NULL, NULL, '111', 'musufy789@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$UPK.VmocV8SwGaCVDyVYnu/oUxUZBc8qXn6HN/g173IeZY/d266rS', 'user', 0, '1', 'Yes', '1', 'Yes', NULL, NULL, NULL, NULL, 'Broker House', '1', NULL, '2022-08-01 22:17:09', '2022-08-01 22:17:09'),
(74, 'Allen Robert Hess', NULL, NULL, '19174712800', 'allenhess29@yahoo.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$aBF/Cyu7nCVc46rvmnRoqOLwdI1x/bTeeDGGXWB0vr3aLZDLCuKJy', 'user', 0, 'Healthcare', 'No', '2500', 'No', NULL, NULL, NULL, NULL, 'Google Search', 'profit', NULL, '2022-08-04 22:38:45', '2022-08-04 22:38:45'),
(75, 'Robert Zielinski', NULL, NULL, '07385300706', 'robert758@hotmail.co.uk', NULL, 'default.png', NULL, NULL, 0, '$2y$10$WYMJ1I6kkittlUwnJRI0YekrWy3HCpOfVj5gn.GShymw90nrBnFrq', 'user', 0, 'driver', 'No', '1000', 'No', NULL, NULL, NULL, NULL, 'Google Search', 'To check', NULL, '2022-08-12 15:57:43', '2022-08-12 15:57:43'),
(76, 'Oneka A Henry', NULL, NULL, '7189259535', 'oneka.henry@yahoo.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$HloOWfIe9eBwU83GRZxEPOml0MZOO60SPTBHnsSHjJatI6/vwT4nm', 'user', 0, 'Marketing', 'No', '1000', 'No', NULL, NULL, NULL, NULL, 'Google Search', 'Learn', NULL, '2022-08-16 11:37:44', '2022-08-16 11:37:44'),
(77, 'Craig Allen', NULL, NULL, '2193442958', 'Craig.Allen@comcast.net', NULL, 'default.png', NULL, NULL, 0, '$2y$10$bbMXqD2OMX2Uf/7vCTdK2uu6UAifz/DBnMQzQNPmCvTCB5ebl2B12', 'user', 0, 'Retired', 'No', '100', 'Yes', NULL, NULL, NULL, NULL, 'Banner Advertisement', 'maybe, if you prove your worth it', NULL, '2022-08-28 14:04:20', '2022-08-28 14:04:20'),
(78, 'Abubakkar Ahamed', NULL, NULL, '9986478051', 'helpdeskit528@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$rGBY/HOL0a3WuzqOONQ2CuZeLgCTYHg3e1KkUutkZiUlioUW3sz0i', 'user', 0, 'BANGALURU', 'No', '100000', 'Yes', NULL, NULL, NULL, NULL, 'Google Search', 'YES', NULL, '2022-09-03 15:44:11', '2022-09-03 15:44:11'),
(79, 'Julbert  Edulan', NULL, NULL, '09560512629', 'julbert_26@yahoo.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$iLxoLWf7LKEpI8xPyx.0pO5EwRcN0zwQ.jdpkHxuHCbheMYnbU/H2', 'user', 0, 'SEAFARER', 'No', '1', 'Yes', NULL, NULL, NULL, NULL, 'Google Search', 'earn', NULL, '2022-09-07 20:56:11', '2022-09-07 20:56:11'),
(80, 'DAVENDRA SHARMA', NULL, NULL, '6138571180', 'drkk@ncf.ca', NULL, 'default.png', NULL, NULL, 0, '$2y$10$A7PExO8.LRptLLg4ga5AreG0B/1kgk38WLzmIq/UgjBB5Mcw67mSW', 'user', 0, 'EMployed', 'Yes', '1000', 'No', NULL, NULL, NULL, NULL, 'Banner Advertisement', 'To see', NULL, '2022-10-16 18:49:34', '2022-10-16 18:49:34'),
(81, 'Joe S. Mataele', NULL, NULL, '3852228428', 'trade@smartrightsignal.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$QuqF.4s1rzkJtJPW1AWQ/O/.YDXph6Q5Ig.FtS/ERT7llsJ/2skZK', 'user', 0, 'Retire', 'Yes', '-500.00', 'No', NULL, NULL, NULL, NULL, 'Google Search', 'I want to learn how to trade, and how to trade those signal manually and in auto trading...', NULL, '2022-10-30 14:50:47', '2022-10-30 14:50:47'),
(82, 'VA', NULL, NULL, NULL, 'daniel.hr@staff-india.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$e9BvvryPuk.B17ovB4nNSe3sVst6xyARqkksg8E1CuMi/4AXkMszW', 'admin', 0, NULL, 'No', NULL, 'No', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-11-01 20:43:36', '2022-11-01 20:43:36'),
(83, 'David Girouard', NULL, NULL, '7054928747', 'davidpgirouard@gmail.com', NULL, 'default.png', NULL, NULL, 53, '$2y$10$fiG2MQT0/I9kQiAGpWsbieayW0XhPeoCDpmYGwxoqnNWpQPQSwxQK', 'user', 0, 'disability', 'No', '1000', 'Yes', NULL, NULL, NULL, NULL, 'Google Search', 'Learning and affiliate', NULL, '2022-11-05 05:37:01', '2022-11-05 06:09:02'),
(84, 'Marlon Tabaday', NULL, NULL, '+639275266120', 'marlontabaday0722@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$1ritp5ZWIOuFp0cy3TSdyeDLJ7vvpktLoSZP44fxPg4DI3A07Xq6W', 'user', 0, 'Project Manager', 'No', '1000', 'No', NULL, NULL, NULL, NULL, 'Google Search', 'I Want to Learn & Earn', NULL, '2022-11-16 14:06:38', '2022-11-16 14:06:38'),
(85, 'elvis veliz', NULL, NULL, '9293044342', 'dbzgokku@yahoo.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$mAGADh33k7SvoBs9hxzjhOOmmZiF/cfspgEmw2R3vAGP5HqEMna9C', 'user', 0, 'trader', 'Yes', '2000', 'No', NULL, NULL, NULL, NULL, 'Google Search', 'make profitd', NULL, '2023-01-04 09:17:49', '2023-01-04 09:17:49'),
(92, 'Demo Affiliate', NULL, NULL, NULL, 'affiliator@mail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$whtfpGpsxz6b8cuQgU0UsO3d9hMT8AvWcrrndctJDKLi.7fb0cB4G', 'affiliator', 0, NULL, 'No', NULL, 'No', NULL, 'Ssjtc084FTwnPZg5Gn6drmrddLlM3OHHqzZSJ24s8zdFWxes87KvYXtXJvzg', NULL, NULL, NULL, NULL, NULL, '2023-03-13 18:07:04', '2023-03-13 18:07:04'),
(140, 'Anthony Vetro', NULL, NULL, '4169384150', 'manvet70@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$ny1b25YIo8R.Hq4M/3ZRouVpOFsS29nkl7D81VbYbiOv7bD6dVJSu', 'user', 0, 'Ritired', 'Yes', '1', 'Yes', NULL, NULL, NULL, NULL, 'Google Search', 'like minded traders looking for other opinions', NULL, '2023-05-16 02:17:59', '2023-05-16 02:17:59'),
(141, 'Sandeep Banerjee', NULL, NULL, '9330989905', 'banerjee.sandeep88@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$cEKNyWySIphSorQ1wEu6juFGHJYVHxsc60SIj1NUR6dKRJnnvkq4q', 'user', 0, 'job', 'No', '50000', 'No', NULL, NULL, NULL, NULL, 'Google Search', 'for making profitable trades', NULL, '2023-06-21 20:36:51', '2023-06-21 20:36:51'),
(142, 'Narendra Kharche', NULL, NULL, '+919323646815', 'naren42u@yahoo.co.in', NULL, 'default.png', NULL, NULL, 0, '$2y$10$FpwhU5cwXuKARfnrGR1P5OvKI48XwzPLrYXvatf8/WaH2.EHN8hn.', 'user', 0, 'IT Professional', 'No', '1', 'No', NULL, NULL, NULL, NULL, 'Banner Advertisement', 'Special Interest', NULL, '2023-07-10 12:50:10', '2023-07-10 12:50:10'),
(143, 'Pavel Svoboda', NULL, NULL, '+420777305140', '777305140@seznam.cz', NULL, 'default.png', NULL, NULL, 0, '$2y$10$dLtDZuoh8L85QRvSzefF7OW6lWyGNZbVZw4/ZyCtpT9NDPdfnwkAG', 'user', 0, 'nezaměstnaný', 'Yes', '10000', 'Yes', NULL, NULL, NULL, NULL, 'Google Search', 'chci se naučit obchodovat', NULL, '2023-11-13 15:39:32', '2023-11-13 15:39:32'),
(144, 'Paulo', NULL, NULL, '21984623442', 'zumpsites@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$rTZcQjMmE9W1FwFJhYdNr.kGTQKnnRPNb.2MmE.yxGbwQcMzPaqy6', 'user', 0, 'SEO', 'Yes', '1500', 'Yes', NULL, NULL, NULL, NULL, 'Banner Advertisement', 'I am Trader Forex', NULL, '2023-11-14 03:26:26', '2023-11-14 03:26:26'),
(145, 'bohlale ethan', NULL, NULL, '0715889934', 'bohlaletselana@outlook.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$TMq3bLIH05Pmn5D/qTmsoeB8rnC0jfjPWaWeQ6aZ3mAwkf2UImf2K', 'user', 0, 'none', 'No', '20', 'No', NULL, NULL, NULL, NULL, 'Google Search', 'to get free signals', NULL, '2023-11-27 11:01:19', '2023-11-27 11:01:19'),
(146, 'udhav', NULL, NULL, '0846487359', 'sniederwick@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$ahHbEyA7axYTu9.IwEdOhe3rIADgrvfcKqIPJyvJhNWK9z/XoDAsK', 'user', 0, 'unemployed', 'No', '10000', 'Yes', NULL, NULL, NULL, NULL, 'Google Search', 'yes', NULL, '2023-12-01 17:42:05', '2023-12-01 17:42:05'),
(147, 'bibhisan bag', NULL, NULL, '7077937932', 'bag.bibhisan66@gmail.com', NULL, 'default.png', NULL, NULL, 0, '$2y$10$dtw.pv4p5uFSB3cOT2EENuyVWmp2XVz.TNA8jViTpaF0/onoF6vy.', 'user', 0, 'service', 'Yes', '500', 'No', NULL, NULL, NULL, NULL, 'Your Answer', 'in order to learn', NULL, '2024-01-07 23:05:41', '2024-01-07 23:05:41');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=148;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
