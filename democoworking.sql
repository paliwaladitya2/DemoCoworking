-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 17, 2023 at 10:56 AM
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

--
-- Dumping data for table `blog_comments`
--

INSERT INTO `blog_comments` (`id`, `blog_id`, `name`, `email`, `comment`, `created_at`, `updated_at`) VALUES
(3, 2, 'dfg', 'aayushpatidar04@gmail.com', 'sdfgbd', '2023-08-10 23:14:43', '2023-08-10 23:14:43');

-- --------------------------------------------------------

--
-- Table structure for table `facility_teams`
--

CREATE TABLE `facility_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `team` varchar(255) NOT NULL DEFAULT 'facilityTeam'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `facility_teams`
--

INSERT INTO `facility_teams` (`id`, `user_id`, `property_id`, `name`, `email`, `password`, `created_at`, `updated_at`, `team`) VALUES
(1, 2, 4, 'facility 1', 'facility1@gmail.com', '$2y$10$03iwgAql4MDN1q5w3Dd51.bFRJJoEunzYM9BftfXiJulVd1wzNkhG', '2023-08-16 04:48:10', '2023-08-16 04:48:10', 'facilityTeam'),
(2, 6, 6, 'facilitytest', 'facilitytest@gmail.com', '$2y$10$lkp/HsQ5dh9GzdU30s8GKeXTf1L.tq.fPUauxfEZU1Oar08p29v7i', '2023-08-17 02:53:07', '2023-08-17 02:53:07', 'facilityTeam');

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
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `company` varchar(255) NOT NULL,
  `floor` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `seat` varchar(255) NOT NULL,
  `department` varchar(255) NOT NULL,
  `title` varchar(255) NOT NULL,
  `description` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `number` varchar(255) NOT NULL,
  `date` varchar(255) NOT NULL,
  `priority` varchar(255) NOT NULL,
  `status` enum('active','resolved') NOT NULL DEFAULT 'active',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issues`
--

INSERT INTO `issues` (`id`, `property_id`, `company`, `floor`, `name`, `seat`, `department`, `title`, `description`, `email`, `image`, `number`, `date`, `priority`, `status`, `created_at`, `updated_at`) VALUES
(1, 4, 'zero gravito', '8', 'Aayush Patidar', '5', 'itTeam', 'Test', 'Testinggggggggggggggggg', 'aayushpatidar04@gmail.com', '1692248522.jpg', '9992221114', '2023-08-17', 'yes', 'resolved', '2023-08-16 23:32:02', '2023-08-17 02:25:07'),
(2, 6, 'cv', '8', 'Aayush Patidar', '6', 'itTeam', 'Internet', 'Nahi chl rha', 'aayush@gmail.com', NULL, '7418529635', '2023-08-17', 'no', 'resolved', '2023-08-17 02:55:48', '2023-08-17 03:00:30'),
(3, 6, 'cv', '8', 'Aman', '7', 'facilityTeam', 'seat', 'tut gyi', 'aman@gmail.com', NULL, '7418529635', '2023-08-17', 'yes', 'resolved', '2023-08-17 02:56:16', '2023-08-17 03:11:39');

-- --------------------------------------------------------

--
-- Table structure for table `issue_portals`
--

CREATE TABLE `issue_portals` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `issue_portals`
--

INSERT INTO `issue_portals` (`id`, `user_id`, `property_id`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'help@zerogravito.com', '$2y$10$mAdEIQlr7otIatkJL7lVxOwXjSXUVIB.rdun5BNXebv2Bn9Vc5V1y', '2023-08-16 07:01:17', '2023-08-16 07:01:17'),
(2, 2, 4, 'help2@gmail.com', '$2y$10$praS/otRpDb1mMANvOeMBuaMOFsf7cDlo.a4Ul0oikE0Ab8VxGXE2', '2023-08-16 07:14:46', '2023-08-16 07:14:46'),
(3, 6, 6, 'issue@test.com', '$2y$10$RPmSbz6.kqJYYIpk.lLHTur5J.5YDILw0CzIWIoAZ9DP9H39VWv0e', '2023-08-17 02:53:40', '2023-08-17 02:53:40');

-- --------------------------------------------------------

--
-- Table structure for table `it_teams`
--

CREATE TABLE `it_teams` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `team` varchar(255) NOT NULL DEFAULT 'itTeam'
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `it_teams`
--

INSERT INTO `it_teams` (`id`, `user_id`, `property_id`, `name`, `email`, `password`, `created_at`, `updated_at`, `team`) VALUES
(1, 2, 4, 'itteam 1', 'itteam1@gmail.com', '$2y$10$q0JJHRwa7dPCf6VKaIZvNeYEANrrVk6D7lH.wsdn16zr.NlDxSoxa', '2023-08-16 04:36:08', '2023-08-16 04:36:08', 'itTeam'),
(2, 6, 6, 'iteamtest', 'iteamtest@gmail.com', '$2y$10$1Bzr3J3tJwtlfdmEFxK7VeO3q3XoOxAndsxWtG4dIwwDPlvwu2J7i', '2023-08-17 02:52:34', '2023-08-17 02:52:34', 'itTeam');

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
(16, '2023_08_09_094550_update_blogs_table', 9),
(17, '2023_08_09_093352_add_column_to_reviews_table', 10),
(18, '2023_08_10_050852_add_column_to_reviews_table', 11),
(19, '2023_08_11_061931_create_property_users_table', 12),
(20, '2023_08_11_113723_create_it_teams_table', 13),
(21, '2023_08_16_043828_add_column_to_it_teams_table', 14),
(22, '2023_08_16_050900_create_facility_teams_table', 15),
(23, '2023_08_16_121947_create_issue_portals_table', 16),
(24, '2023_08_16_122646_add_column_to_issue_portals_table', 17),
(25, '2023_08_17_041803_create_issues_table', 18);

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
(4, 'Zero Gravito', '2', 'seat available hai', 15000, 100, '1691662326_1_.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'NRK Business Park, Vijay Nagar', 'Indore', 'Madhya Pradesh', 'India', 1, 1, 1, 1, 1, 1, NULL, 1, 1, 1, NULL, 1, 'Aman', NULL, 'aman@gmail.com', '7418529635', '2023-08-09 06:53:36', '2023-08-10 04:42:06'),
(5, 'Test', '2', 'testing', 15000, 100, '1691642456_1_.jpg', '1691642456_2_.jpg', '1691642456_3_.jpg', '1691642456_4_.jpg', '1691642456_5_.jpg', '1691642456_6_.jpg', NULL, 'NRK Business Park, Vijay Nagar', 'Indore', 'Madhya Pradesh', 'India', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Aman', NULL, 'aman@gmail.com', '7418529635', '2023-08-09 23:16:12', '2023-08-09 23:16:12'),
(6, 'Property Test', '6', 'Seat le lo', 15000, 100, '1692260396_1_.jpg', '1692260396_2_.jpg', '1692260396_3_.jpg', '1692260396_4_.jpg', '1692260396_5_.jpg', NULL, NULL, 'NRK Business Park, Vijay Nagar', 'Indore', 'Madhya Pradesh', 'India', 1, 1, 1, NULL, 1, 1, 1, 1, 1, NULL, 1, 1, 'Aman', NULL, 'aman@gmail.com', '7418529635', '2023-08-17 02:50:58', '2023-08-17 02:50:58');

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
(2, '2', 'its', 'nothing to describe', 5000, 8, '1691558784_1_.jpg', '1691558784_2_.jpg', '1691558784_3_.jpg', '1691558784_4_.jpg', '1691558784_5_.jpg', '1691558784_6_.jpg', '1691558784_7_.jpg', 'indore', 'indore', 'madhya pradesh', 'india', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Kanishk Purohit', 'kanishk', 'kpurorit@gmail.com', '8962110823', '2023-08-08 23:56:24', '2023-08-16 04:43:38'),
(3, '2', 'Test', 'testing', 15000, 100, '1691642456_1_.jpg', '1691642456_2_.jpg', '1691642456_3_.jpg', '1691642456_4_.jpg', '1691642456_5_.jpg', '1691642456_6_.jpg', NULL, 'NRK Business Park, Vijay Nagar', 'Indore', 'Madhya Pradesh', 'India', 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 1, 'Aman', NULL, 'aman@gmail.com', '7418529635', '2023-08-09 23:10:56', '2023-08-09 23:16:05');

-- --------------------------------------------------------

--
-- Table structure for table `property_users`
--

CREATE TABLE `property_users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `role` enum('itTeam','facilityTeam','client','user') NOT NULL,
  `property_id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `fid` bigint(20) UNSIGNED NOT NULL,
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

INSERT INTO `reviews` (`id`, `fid`, `name`, `phone`, `email`, `message`, `created_at`, `updated_at`) VALUES
(2, 4, 'Aman', '0741852963', 'aman@gmail.com', 'test 2', '2023-08-10 04:47:04', '2023-08-10 04:47:04'),
(3, 1, 'dfg', '9992221114', 'aayushpatidar04@gmail.com', 'seyh', '2023-08-16 02:46:26', '2023-08-16 02:46:26');

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
(3, 'aayush', 'user', 1, 'aayush@gmail.com', NULL, '$2y$10$C3qofc23FxUVhDc0UhWO3Oke7i0YGwK9f9J97D7JvjtGtDrbUI1vK', NULL, '2023-08-03 23:49:48', '2023-08-11 04:22:05'),
(4, 'aditya', 'user', 1, 'aditya@gmail.com', NULL, '$2y$10$eRzz5qrOxcTV7CTJtCAip.IIouzxq2utEGahqvHiY0IPrr61GBOzK', NULL, '2023-08-03 23:49:58', '2023-08-11 04:22:12'),
(5, 'rochak', 'user', 1, 'rochak@gmail.com', NULL, '$2y$10$Kc.nvUhKUXYOeDfqnWwmwOGFdFw4QRrctWqtT56DxD145X8fumzIG', NULL, '2023-08-03 23:50:19', '2023-08-11 04:22:18'),
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
-- Indexes for table `facility_teams`
--
ALTER TABLE `facility_teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `facility_teams_user_id_foreign` (`user_id`),
  ADD KEY `facility_teams_property_id_foreign` (`property_id`);

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
  ADD PRIMARY KEY (`id`),
  ADD KEY `issues_property_id_foreign` (`property_id`);

--
-- Indexes for table `issue_portals`
--
ALTER TABLE `issue_portals`
  ADD PRIMARY KEY (`id`),
  ADD KEY `issue_portals_property_id_foreign` (`property_id`),
  ADD KEY `issue_portals_user_id_foreign` (`user_id`);

--
-- Indexes for table `it_teams`
--
ALTER TABLE `it_teams`
  ADD PRIMARY KEY (`id`),
  ADD KEY `it_teams_property_id_foreign` (`property_id`),
  ADD KEY `it_teams_user_id_foreign` (`user_id`);

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
-- Indexes for table `property_users`
--
ALTER TABLE `property_users`
  ADD PRIMARY KEY (`id`),
  ADD KEY `property_users_user_id_foreign` (`user_id`),
  ADD KEY `property_users_property_id_foreign` (`property_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_fid_foreign` (`fid`);

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `facility_teams`
--
ALTER TABLE `facility_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `issue_portals`
--
ALTER TABLE `issue_portals`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `it_teams`
--
ALTER TABLE `it_teams`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `property_approveds`
--
ALTER TABLE `property_approveds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `property_unapproveds`
--
ALTER TABLE `property_unapproveds`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `property_users`
--
ALTER TABLE `property_users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

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

--
-- Constraints for table `facility_teams`
--
ALTER TABLE `facility_teams`
  ADD CONSTRAINT `facility_teams_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `property_approveds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `facility_teams_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `issues`
--
ALTER TABLE `issues`
  ADD CONSTRAINT `issues_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `property_approveds` (`id`);

--
-- Constraints for table `issue_portals`
--
ALTER TABLE `issue_portals`
  ADD CONSTRAINT `issue_portals_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `property_approveds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `issue_portals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `it_teams`
--
ALTER TABLE `it_teams`
  ADD CONSTRAINT `it_teams_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `property_approveds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `it_teams_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `property_users`
--
ALTER TABLE `property_users`
  ADD CONSTRAINT `property_users_property_id_foreign` FOREIGN KEY (`property_id`) REFERENCES `property_approveds` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `property_users_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_fid_foreign` FOREIGN KEY (`fid`) REFERENCES `property_approveds` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
