-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 10, 2018 at 10:20 AM
-- Server version: 10.1.36-MariaDB
-- PHP Version: 7.2.11

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `riantengineersltd`
--

-- --------------------------------------------------------

--
-- Table structure for table `galleries`
--

CREATE TABLE `galleries` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `galleries`
--

INSERT INTO `galleries` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Project Work', 'gallery/tVgUsUo64wGDkonCNOj0E6h4gr8figRJlOJWTnly.png', 1, '2018-11-06 23:48:32', '2018-11-06 23:48:32'),
(2, 'Project Work', 'gallery/JHVwgCAXL3031Lj1X7ORagpfjGgWpVDnoK9fBx3K.jpeg', 1, '2018-11-06 23:49:11', '2018-11-06 23:49:11'),
(3, 'Project Work', 'gallery/sgpdoItef6X4Hoyl8B5gGceYRx4F7464m4gHzeIA.jpeg', 1, '2018-11-06 23:49:25', '2018-11-06 23:49:25'),
(4, 'Project Work', 'gallery/2iLFCZULdh05NRZurlbwZCzXD6eQl5eePCF1YuJE.jpeg', 1, '2018-11-06 23:49:40', '2018-11-06 23:49:40'),
(5, 'Project Work', 'gallery/4iz3fsVtXK51G62xWcg9WLQjrd4UGgXqUn0FpwxF.jpeg', 1, '2018-11-06 23:49:49', '2018-11-06 23:49:49'),
(6, 'Project Work', 'gallery/i8IZ6JdOV3b84wX0n9AjLWGMxiLUrnsbtP4NaSQe.jpeg', 1, '2018-11-06 23:50:17', '2018-11-06 23:50:17'),
(7, 'Project Work', 'gallery/18Q1NcQWdeAS0yj87gxuZ1TRPYVRCnIOu519shlo.jpeg', 1, '2018-11-06 23:51:05', '2018-11-06 23:51:05'),
(8, 'Project Work', 'gallery/IfFxyXnKc6PfjXUD8aYxfK8xSQA3InClKMm1AE00.jpeg', 0, '2018-11-06 23:51:32', '2018-11-08 04:01:05'),
(10, 'Project Work', 'gallery/cxqnvvamBI33dUlsGjzcfzO9eRncWJECQGIAQU9q.jpeg', 1, '2018-11-08 04:04:51', '2018-11-08 04:04:51');

-- --------------------------------------------------------

--
-- Table structure for table `logos`
--

CREATE TABLE `logos` (
  `id` int(10) UNSIGNED NOT NULL,
  `type` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `logos`
--

INSERT INTO `logos` (`id`, `type`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 'logo/r0eXvCLwaNo4iLXuVjljjl5jxdiIo8A0z6Mvjiln.png', '2018-11-06 23:21:10', '2018-11-06 23:21:10'),
(2, 3, 1, 'logo/1AhWGjWWFT3hrN1119B9JOFbeMjefFm1Cn4kq6DO.jpeg', '2018-11-06 23:31:26', '2018-11-06 23:31:26'),
(3, 3, 1, 'logo/CCihIma2qfo7wRXJLW681rlTtcfkyEy9JBvtS7jH.jpeg', '2018-11-06 23:31:40', '2018-11-06 23:31:40'),
(4, 3, 1, 'logo/6Fi8F82bN7o7CHoI2teFQYfeJSh8H6hiPK738YtE.png', '2018-11-06 23:31:51', '2018-11-06 23:31:51'),
(5, 2, 1, 'logo/5HRJwVgaDeqlsUDtaRM7jij11p8hYfONHAmIJj4L.png', '2018-11-06 23:33:54', '2018-11-06 23:33:54'),
(6, 2, 1, 'logo/5XUcfWXG4tnsFQCRFEyKpTuVbJTYNB5N1nCe2IWS.png', '2018-11-06 23:34:04', '2018-11-06 23:34:04'),
(7, 2, 1, 'logo/GmKWqj8IOURVCnCgydPVASVwU0mf8UbPTFxQy4NX.jpeg', '2018-11-06 23:36:12', '2018-11-06 23:36:12'),
(8, 2, 1, 'logo/el7wiMndD1uZjLXqeSaWHpZnZE0k2QKEMudeNXDC.png', '2018-11-06 23:36:22', '2018-11-06 23:36:22'),
(9, 2, 1, 'logo/415ZSW9gU6GQnKAi9saih0rcObNQCsnTU3YdztIw.png', '2018-11-06 23:37:08', '2018-11-06 23:46:09'),
(10, 2, 1, 'logo/4NLPB36hnh2GCVLx53MkzJOThQSC0KGw5EC5TfYb.jpeg', '2018-11-06 23:37:28', '2018-11-06 23:44:13'),
(11, 2, 1, 'logo/ddDLMMXaLzzNd0a1UyfaJytb6UVSTKM2RhDJfdFn.jpeg', '2018-11-06 23:37:40', '2018-11-06 23:37:40'),
(12, 2, 1, 'logo/sNKhU8yt7FIgOfOZkrV4ko8o6Hr8X6wBonV428gh.jpeg', '2018-11-06 23:38:56', '2018-11-06 23:38:56'),
(14, 2, 1, 'logo/b4CC36qlhbbe7SMvPA7eUbrISq5VRT2jPQXhxKwJ.jpeg', '2018-11-06 23:39:18', '2018-11-06 23:39:18'),
(15, 2, 1, 'logo/Er1eVNcFP0YdNjdu5cR9b6SQpUEfas4U2mmggSji.png', '2018-11-06 23:39:27', '2018-11-06 23:39:27'),
(17, 2, 1, 'logo/Zo6QxwbWYouNQP4SzKwd1occ3JyQmcWrt4oa3sKb.jpeg', '2018-11-06 23:39:48', '2018-11-06 23:39:48'),
(18, 2, 1, 'logo/pBYG6gRGqp4waq0Wr1nMOL0GazRO48XN9G83E27A.png', '2018-11-06 23:39:56', '2018-11-06 23:39:56'),
(19, 2, 1, 'logo/F2b5sDzvAwVaEkknYFygDeFCNFmpfu2xam1UHpg8.jpeg', '2018-11-06 23:40:05', '2018-11-06 23:40:05'),
(22, 2, 1, 'logo/k9hMzBc5BvXxSRzSZLZdPoSJoEyVIL3lVdKnEsjj.png', '2018-11-06 23:40:35', '2018-11-06 23:40:35'),
(23, 2, 1, 'logo/1MFRATVbz5J3aGwzc2h3z0fkEmsNpYOxD1w2lyn0.jpeg', '2018-11-06 23:40:42', '2018-11-06 23:40:42'),
(25, 2, 1, 'logo/jpA3mDo0wdjNFADyrOF6unLe20APFanPQzziJfFh.jpeg', '2018-11-06 23:40:56', '2018-11-06 23:40:56'),
(27, 2, 1, 'logo/9rFUhRVberDRJE7NWgS2vwJ860fXQCj8wRFP7B1y.jpeg', '2018-11-06 23:41:11', '2018-11-06 23:41:11'),
(28, 2, 1, 'logo/aJmjh8HAejMtUZ6Pu3dHTCZaWpLPA4eZc676pEIB.png', '2018-11-06 23:41:19', '2018-11-08 03:24:08');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2018_11_03_103159_create_sliders_table', 1),
(4, '2018_11_04_110501_create_logos_table', 1),
(5, '2018_11_05_103242_create_galleries_table', 1),
(6, '2018_11_08_104513_create_service_controllers_table', 2),
(8, '2018_11_08_105312_create_services_table', 3);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` int(10) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `title`, `status`, `image`, `description`, `created_at`, `updated_at`) VALUES
(3, 'Service One', 0, 'service/QvUdNiOAXuKUPAmO404Sk1fS6zaF4cCzhO4LsM3p.jpeg', 'There are many variations of passages of Lorem Ipsum text available, but the fact is lorem ipsum dummy text are many is dummy text ever i have seen!', '2018-11-08 06:44:24', '2018-11-09 23:32:30'),
(4, 'Service Two', 1, 'service/cV0ek75VE5nKW0YQlLIo6Eu0xVISS5Fj2LJHtxGZ.jpeg', 'There are many variations of passages of Lorem Ipsum text available, but the fact is lorem ipsum dummy text are many is dummy text ever i have seen!', '2018-11-08 06:45:25', '2018-11-08 06:45:25'),
(5, 'Service Three', 1, 'service/A9xBbdPnp76GkHGtk9NVyPwnV9rNUdT3l3plRrZx.jpeg', 'There are many variations of passages of Lorem Ipsum text available, but the fact is lorem ipsum dummy text are many is dummy text ever i have seen!', '2018-11-08 06:46:25', '2018-11-09 23:40:00'),
(6, 'Service Four', 1, 'service/YVgyqgjZRlIJIVYRxNl1qhlJeLxlMN0I8uuEqZC5.jpeg', 'There are many variations of passages of Lorem Ipsum text available, but the fact is lorem ipsum dummy text are many is dummy text ever i have seen!', '2018-11-08 06:47:03', '2018-11-09 23:39:41');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` int(10) UNSIGNED NOT NULL,
  `slider_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slider_subtitle` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `slider_name`, `slider_title`, `slider_subtitle`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'SERVICE', 'Lorem Ipsum is simply', 'Lorem Ipsum has been the industry\'s standard dummy', 1, 'slider/T4s4Hbm11tsI5tjSPMFDH4goa0ho0Bnbn0EZA5ar.jpeg', '2018-11-06 23:20:26', '2018-11-06 23:27:51'),
(2, 'About Us', 'Lorem Ipsum is simply', 'Lorem Ipsum has been the industry\'s standard', 1, 'slider/EWRGgypeJlCAzhoUPCf4wIwHSJdwGNd0ZmzHqaRZ.jpeg', '2018-11-06 23:22:45', '2018-11-07 01:41:15'),
(3, 'CONTACT', 'Lorem Ipsum is simply', 'Lorem Ipsum has been', 1, 'slider/7jV5h89Ut3nO4FOrUxNpZpRsPHmNNqgqSU8vexgM.jpeg', '2018-11-06 23:23:34', '2018-11-08 03:16:20');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Mr Root', 'root@live.com', NULL, '$2y$10$cJyKvxkx9yZbbcrft1l.GerQH4/SNnj/VCfsetyPRFcAZrnK0Xrs.', 'stxyi1PU0iUGu3NBm2wnDWBxmKwy5qAnQcPcAJf8GoJsKcWL5l0dN8IqvRot', '2018-11-06 23:18:41', '2018-11-08 04:32:35');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `galleries`
--
ALTER TABLE `galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `logos`
--
ALTER TABLE `logos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
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
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `galleries`
--
ALTER TABLE `galleries`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `logos`
--
ALTER TABLE `logos`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=29;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
