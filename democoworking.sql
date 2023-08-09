-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 09, 2023 at 04:03 PM
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
-- Database: `democoworking`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `image_main` varchar(255) NOT NULL,
  `image_thumbnail` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `meta_title` varchar(255) DEFAULT NULL,
  `meta_description` varchar(255) DEFAULT NULL,
  `meta_keywords` varchar(255) DEFAULT NULL,
  `tag1` varchar(255) DEFAULT NULL,
  `tag2` varchar(255) DEFAULT NULL,
  `tag3` varchar(255) DEFAULT NULL,
  `tag4` varchar(255) DEFAULT NULL,
  `tag5` varchar(255) DEFAULT NULL,
  `tag6` varchar(255) DEFAULT NULL,
  `tag7` varchar(255) DEFAULT NULL,
  `tag8` varchar(255) DEFAULT NULL,
  `tag9` varchar(255) DEFAULT NULL,
  `tag10` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `slug`, `image_main`, `image_thumbnail`, `content`, `category_id`, `meta_title`, `meta_description`, `meta_keywords`, `tag1`, `tag2`, `tag3`, `tag4`, `tag5`, `tag6`, `tag7`, `tag8`, `tag9`, `tag10`, `created_at`, `updated_at`) VALUES
(2, 'sbz', 'nxsf', '1691589738.png', 'thumb_1691589738.png', '<p>sfhbxsf</p>', 1, 'dhnsxf', '<p>hsfbxs</p>', 'shbfsxb', 'dnxsf', 'sxfnfxs', 'shfbxsb', 'sfhxbsxb', NULL, NULL, NULL, NULL, NULL, NULL, '2023-08-09 08:32:18', '2023-08-09 08:32:18');

-- --------------------------------------------------------

--
-- Table structure for table `blog_category`
--

CREATE TABLE `blog_category` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blog_category`
--

INSERT INTO `blog_category` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Aditya Paliwal Demo', '2023-08-09 04:42:56', '2023-08-09 05:05:22'),
(3, 'Demo Demo', '2023-08-09 05:15:21', '2023-08-09 05:15:27');

-- --------------------------------------------------------

--
-- Table structure for table `blog_comments`
--

CREATE TABLE `blog_comments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `blog_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `comment` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `general_queries`
--

CREATE TABLE `general_queries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `message` longtext NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issues`
--

CREATE TABLE `issues` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issue_portals`
--

CREATE TABLE `issue_portals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_08_04_064717_add_column_to_users_table', 2),
(6, '2023_08_04_110306_create_issue_portals_table', 3),
(7, '2023_08_04_114934_create_issues_table', 3),
(8, '2023_08_04_133211_create_properties_table', 3),
(9, '2023_08_07_130711_create_property_unapproveds_table', 4),
(10, '2023_08_08_050957_create_general_queries_table', 5),
(11, '2023_08_08_095407_create_property_approveds_table', 6),
(12, '2023_08_09_072215_create_reviews_table', 7),
(13, '2023_08_09_093547_create_blogs_table', 8),
(14, '2023_08_09_093959_create_blog_category_table', 8),
(15, '2023_08_09_094151_create_blog_comments_table', 8),
(16, '2023_08_09_094550_update_blogs_table', 9);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `properties`
--

CREATE TABLE `properties` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `property name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `property_approveds`
--

CREATE TABLE `property_approveds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `admin` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `no_of_seats` int(10) UNSIGNED NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `image6` varchar(255) DEFAULT NULL,
  `image7` varchar(255) DEFAULT NULL,
  `address` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `coworking` tinyint(1) DEFAULT NULL,
  `cabin` tinyint(1) DEFAULT NULL,
  `meetingrooms` tinyint(1) DEFAULT NULL,
  `trainingrooms` tinyint(1) DEFAULT NULL,
  `wifi` tinyint(1) DEFAULT NULL,
  `parking` tinyint(1) DEFAULT NULL,
  `lounge` tinyint(1) DEFAULT NULL,
  `cafeteria` tinyint(1) DEFAULT NULL,
  `air_conditioning` tinyint(1) DEFAULT NULL,
  `it_support` tinyint(1) DEFAULT NULL,
  `locker` tinyint(1) DEFAULT NULL,
  `_24x7` tinyint(1) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_approveds`
--

INSERT INTO `property_approveds` (`id`, `title`, `admin`, `description`, `price`, `no_of_seats`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `address`, `city`, `state`, `country`, `coworking`, `cabin`, `meetingrooms`, `trainingrooms`, `wifi`, `parking`, `lounge`, `cafeteria`, `air_conditioning`, `it_support`, `locker`, `_24x7`, `name`, `username`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, 'Zero Gravito', 'Kanishk Purohit', 'seat available', 15000, 100, '1691485219_1_.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'NRK Business Park, Vijay Nagar', 'Indore', 'Madhya Pradesh', 'India', 1, 1, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 1, 'Aman', NULL, 'aman@gmail.com', '7418529635', '2023-08-08 05:27:51', '2023-08-08 05:27:51'),
(3, 'its', 'Kanishk Purohit', 'nothing to describe', 5000, 8, '1691558784_1_.jpg', '1691558784_2_.jpg', '1691558784_3_.jpg', '1691558784_4_.jpg', '1691558784_5_.jpg', '1691558784_6_.jpg', '1691558784_7_.jpg', 'indore', 'indore', 'madhya pradesh', 'india', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Kanishk Purohit', 'kanishk', 'kpurorit@gmail.com', '8962110823', '2023-08-08 23:56:54', '2023-08-08 23:56:54'),
(4, 'Zero Gravito', '2', 'seat available', 15000, 100, '1691485219_1_.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'NRK Business Park, Vijay Nagar', 'Indore', 'Madhya Pradesh', 'India', 1, 1, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 1, 'Aman', NULL, 'aman@gmail.com', '7418529635', '2023-08-09 06:53:36', '2023-08-09 06:53:36');

-- --------------------------------------------------------

--
-- Table structure for table `property_unapproveds`
--

CREATE TABLE `property_unapproveds` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `admin` varchar(255) DEFAULT NULL,
  `title` varchar(255) NOT NULL,
  `description` longtext NOT NULL,
  `price` int(10) UNSIGNED NOT NULL,
  `no_of_seats` int(10) UNSIGNED NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) DEFAULT NULL,
  `image3` varchar(255) DEFAULT NULL,
  `image4` varchar(255) DEFAULT NULL,
  `image5` varchar(255) DEFAULT NULL,
  `image6` varchar(255) DEFAULT NULL,
  `image7` varchar(255) DEFAULT NULL,
  `address` longtext NOT NULL,
  `city` varchar(255) NOT NULL,
  `state` varchar(255) NOT NULL,
  `country` varchar(255) NOT NULL,
  `coworking` tinyint(1) DEFAULT NULL,
  `cabin` tinyint(1) DEFAULT NULL,
  `meetingrooms` tinyint(1) DEFAULT NULL,
  `trainingrooms` tinyint(1) DEFAULT NULL,
  `wifi` tinyint(1) DEFAULT NULL,
  `parking` tinyint(1) DEFAULT NULL,
  `lounge` tinyint(1) DEFAULT NULL,
  `cafeteria` tinyint(1) DEFAULT NULL,
  `air_conditioning` tinyint(1) DEFAULT NULL,
  `it_support` tinyint(1) DEFAULT NULL,
  `locker` tinyint(1) DEFAULT NULL,
  `_24x7` tinyint(1) DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) DEFAULT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `property_unapproveds`
--

INSERT INTO `property_unapproveds` (`id`, `admin`, `title`, `description`, `price`, `no_of_seats`, `image1`, `image2`, `image3`, `image4`, `image5`, `image6`, `image7`, `address`, `city`, `state`, `country`, `coworking`, `cabin`, `meetingrooms`, `trainingrooms`, `wifi`, `parking`, `lounge`, `cafeteria`, `air_conditioning`, `it_support`, `locker`, `_24x7`, `name`, `username`, `email`, `phone`, `created_at`, `updated_at`) VALUES
(1, '6', 'Zero Gravito', 'seat available', 15000, 100, '1691485219_1_.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'NRK Business Park, Vijay Nagar', 'Indore', 'Madhya Pradesh', 'India', 1, 1, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 1, 'Aman', NULL, 'aman@gmail.com', '7418529635', '2023-08-08 03:30:19', '2023-08-09 06:58:02'),
(2, '2', 'its', 'nothing to describe', 5000, 8, '1691558784_1_.jpg', '1691558784_2_.jpg', '1691558784_3_.jpg', '1691558784_4_.jpg', '1691558784_5_.jpg', '1691558784_6_.jpg', '1691558784_7_.jpg', 'indore', 'indore', 'madhya pradesh', 'india', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Kanishk Purohit', 'kanishk', 'kpurorit@gmail.com', '8962110823', '2023-08-08 23:56:24', '2023-08-09 06:57:27');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `message` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(1, 'Kanishk Purohit', '1234567890', 'kpurorit@gmail.com', 'rtyukl;', '2023-08-09 02:00:32', '2023-08-09 02:00:32'),
(2, 'wertyu', '1234567890', 'kanishk2342@gmail.com', 'dfhm', '2023-08-09 02:04:59', '2023-08-09 02:04:59');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `role` enum('superadmin','propertyadmin','itTeam','facilityTeam','client','user') NOT NULL DEFAULT 'user',
  `phone` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `role`, `phone`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Aman', 'superadmin', 1, 'aman@gmail.com', NULL, '$2y$10$mVHxpidWzPoU8yZLurT2L.6Jh45J7O2/M4urk4wLB1w3OseNaFg/e', NULL, '2023-08-03 22:32:58', '2023-08-04 01:47:24'),
(2, 'Kanishk Purohit', 'propertyadmin', 1, 'kpurorit@gmail.com', NULL, '$2y$10$ZyeTRPFD5jPQIpU0IF2KxurzJsrB0qKekQH0fIFOnASNchL1sWmgm', NULL, '2023-08-03 23:48:48', '2023-08-07 00:12:53'),
(3, 'aayush', 'itTeam', 1, 'aayush@gmail.com', NULL, '$2y$10$C3qofc23FxUVhDc0UhWO3Oke7i0YGwK9f9J97D7JvjtGtDrbUI1vK', NULL, '2023-08-03 23:49:48', '2023-08-03 23:49:48'),
(4, 'aditya', 'facilityTeam', 1, 'aditya@gmail.com', NULL, '$2y$10$eRzz5qrOxcTV7CTJtCAip.IIouzxq2utEGahqvHiY0IPrr61GBOzK', NULL, '2023-08-03 23:49:58', '2023-08-03 23:49:58'),
(5, 'rochak', 'client', 1, 'rochak@gmail.com', NULL, '$2y$10$Kc.nvUhKUXYOeDfqnWwmwOGFdFw4QRrctWqtT56DxD145X8fumzIG', NULL, '2023-08-03 23:50:19', '2023-08-04 01:50:33'),
(6, 'tanmay', 'propertyadmin', 1, 'tanmay@gmail.com', NULL, '$2y$10$HttQ5/wA0xn9Vyc02/IksuhvtaIaOgVdAT1OqmY1kI8Tz/Nzx/nR.', NULL, '2023-08-03 23:50:29', '2023-08-09 06:57:54'),
(7, 'u1', 'user', 9638527415, 'u1@gmail.com', NULL, '$2y$10$WoTmO2S4Yqono96ch70EaOhI/AYegPkDaJGOKelkH5vXv/NQ1ccUu', NULL, '2023-08-04 03:15:18', '2023-08-04 03:15:18');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blogs_title_unique` (`title`),
  ADD UNIQUE KEY `blogs_slug_unique` (`slug`),
  ADD KEY `blogs_category_id_foreign` (`category_id`);

--
-- Indexes for table `blog_category`
--
ALTER TABLE `blog_category`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `blog_category_name_unique` (`name`);

--
-- Indexes for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blog_comments_blog_id_foreign` (`blog_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `general_queries`
--
ALTER TABLE `general_queries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issues`
--
ALTER TABLE `issues`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `issue_portals`
--
ALTER TABLE `issue_portals`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `properties`
--
ALTER TABLE `properties`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_approveds`
--
ALTER TABLE `property_approveds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `property_unapproveds`
--
ALTER TABLE `property_unapproveds`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
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
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `blog_category`
--
ALTER TABLE `blog_category`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `blog_comments`
--
ALTER TABLE `blog_comments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `general_queries`
--
ALTER TABLE `general_queries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issues`
--
ALTER TABLE `issues`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `issue_portals`
--
ALTER TABLE `issue_portals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=17;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `properties`
--
ALTER TABLE `properties`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_approveds`
--
ALTER TABLE `property_approveds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `property_unapproveds`
--
ALTER TABLE `property_unapproveds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `blog_category` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `blog_comments`
--
ALTER TABLE `blog_comments`
  ADD CONSTRAINT `blog_comments_blog_id_foreign` FOREIGN KEY (`blog_id`) REFERENCES `blogs` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
