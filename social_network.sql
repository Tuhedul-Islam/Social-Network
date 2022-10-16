-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 16, 2022 at 06:39 PM
-- Server version: 10.4.19-MariaDB
-- PHP Version: 8.0.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `social_network`
--

-- --------------------------------------------------------

--
-- Table structure for table `activity`
--

CREATE TABLE `activity` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL,
  `description` varchar(200) CHARACTER SET utf8 COLLATE utf8_bin NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `activity`
--

INSERT INTO `activity` (`id`, `name`, `description`) VALUES
(1, 'View', 'View'),
(2, 'Create', 'Create'),
(3, 'Update', 'Update'),
(4, 'Delete', 'Delete'),
(6, 'Download', 'Download'),
(7, 'Change password', 'Change password'),
(8, 'Password reset', 'Password reset'),
(9, 'Print', 'Print'),
(11, 'Activate', 'Activate'),
(12, 'Approve', 'Approve'),
(13, 'Decline', 'Decline'),
(15, 'Details', 'Details');

-- --------------------------------------------------------

--
-- Table structure for table `create_pages`
--

CREATE TABLE `create_pages` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(10) DEFAULT NULL,
  `page_name` varchar(255) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` int(11) DEFAULT NULL,
  `banner` varchar(255) NOT NULL,
  `domain` varchar(255) DEFAULT NULL,
  `states` varchar(255) DEFAULT NULL,
  `city` varchar(255) DEFAULT NULL,
  `additional_info` varchar(255) DEFAULT NULL,
  `facebook_link` varchar(255) DEFAULT NULL,
  `twitter` varchar(255) DEFAULT NULL,
  `instagram` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `create_pages`
--

INSERT INTO `create_pages` (`id`, `user_id`, `page_name`, `email`, `phone`, `banner`, `domain`, `states`, `city`, `additional_info`, `facebook_link`, `twitter`, `instagram`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(812, 1, 'one page', 'meheraz@gmail.com', 254836942, '68794.jpg', 'www.h.com', 'BGD', 'dhaka', 'mirpur 111', 'www.com', NULL, 'www.com', '2022-10-05 13:28:31', '2022-09-20 00:12:30', 812, 812),
(813, 811, 'E-Book', 'ebook@gmail.com', 152648365, '71996.jfif', 'www.ebook.com', 'BGD', 'dhaka', 'yout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages', 'facekbook.com', NULL, 'instagrm.com', '2022-10-05 13:28:41', '2022-10-03 00:38:17', 813, 813),
(814, 811, 'Friends and Family', 'frd@gmail.com', 1245896752, '19223.jpg', NULL, 'country', NULL, NULL, NULL, NULL, NULL, '2022-10-05 07:57:00', '2022-10-05 07:57:00', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `elibrarys`
--

CREATE TABLE `elibrarys` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `title` varchar(255) NOT NULL,
  `document` varchar(255) NOT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `elibrarys`
--

INSERT INTO `elibrarys` (`id`, `user_id`, `title`, `document`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 811, 'sdsdf', '86928.png', 811, 811, '2022-10-05 11:15:37', '2022-10-05 02:26:10'),
(2, 819, 'dust', '107617.docx', 819, 819, '2022-10-05 11:15:01', '2022-10-05 04:54:16'),
(3, 819, 'form', '110868.docx', 819, 819, '2022-10-05 11:15:06', '2022-10-05 04:57:02');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `friends`
--

CREATE TABLE `friends` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_request` int(11) NOT NULL,
  `friend_id` int(11) NOT NULL,
  `status` tinyint(1) NOT NULL DEFAULT 0,
  `request_sent` tinyint(1) DEFAULT 0,
  `cancel_request` tinyint(1) DEFAULT 0,
  `delete_friend` tinyint(1) DEFAULT 0,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `friends`
--

INSERT INTO `friends` (`id`, `user_request`, `friend_id`, `status`, `request_sent`, `cancel_request`, `delete_friend`, `created_at`, `updated_at`) VALUES
(22, 811, 812, 1, 1, 0, 0, '2022-10-05 12:55:53', '2022-10-03 00:25:41'),
(23, 811, 810, 0, 1, 0, 0, '2022-10-05 06:55:41', '2022-10-05 06:55:41'),
(24, 811, 810, 0, 1, 0, 0, '2022-10-05 07:41:37', '2022-10-05 07:41:37');

-- --------------------------------------------------------

--
-- Table structure for table `language`
--

CREATE TABLE `language` (
  `id` int(11) NOT NULL,
  `language_name` varchar(150) DEFAULT NULL,
  `status` int(2) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `language`
--

INSERT INTO `language` (`id`, `language_name`, `status`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 'bn', 1, '2022-01-25 01:27:23', '2022-01-25 01:27:23', 1, 1),
(2, 'en', 1, '2022-01-25 02:21:33', '2022-01-25 03:23:17', 1, 1);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(10, '2014_10_12_000000_create_users_table', 1),
(11, '2014_10_12_100000_create_password_resets_table', 1),
(12, '2019_08_19_000000_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `module`
--

CREATE TABLE `module` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `module`
--

INSERT INTO `module` (`id`, `name`, `description`) VALUES
(1, 'Role Management', 'Role Management'),
(2, 'Role Access Control', 'Role Access Control'),
(3, 'User Management', 'User Management'),
(4, 'Module Management', 'Module Management'),
(5, 'Activity Management', 'Activity Management'),
(6, 'User Access Control', 'User Access Control');

-- --------------------------------------------------------

--
-- Table structure for table `module_to_activity`
--

CREATE TABLE `module_to_activity` (
  `id` int(10) UNSIGNED NOT NULL,
  `module_id` int(11) UNSIGNED NOT NULL,
  `activity_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `module_to_activity`
--

INSERT INTO `module_to_activity` (`id`, `module_id`, `activity_id`) VALUES
(1, 1, 1),
(2, 1, 2),
(3, 1, 3),
(4, 1, 4),
(5, 2, 1),
(9, 6, 1),
(10, 6, 2),
(11, 6, 3),
(12, 6, 4),
(234, 3, 1),
(235, 3, 2),
(236, 3, 3),
(237, 3, 4),
(238, 3, 7),
(239, 3, 8),
(240, 3, 11),
(241, 4, 1),
(242, 4, 2),
(243, 4, 3),
(244, 4, 4),
(245, 5, 1),
(246, 5, 2),
(247, 5, 3),
(248, 5, 4);

-- --------------------------------------------------------

--
-- Table structure for table `module_to_role`
--

CREATE TABLE `module_to_role` (
  `id` int(11) UNSIGNED NOT NULL,
  `module_id` int(11) UNSIGNED NOT NULL,
  `role_id` int(11) UNSIGNED NOT NULL,
  `activity_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `module_to_role`
--

INSERT INTO `module_to_role` (`id`, `module_id`, `role_id`, `activity_id`) VALUES
(4430, 1, 4, 1),
(4431, 1, 4, 2),
(4432, 1, 4, 3),
(4433, 2, 4, 1),
(4434, 3, 4, 1),
(4435, 3, 4, 2),
(4436, 3, 4, 3),
(4437, 3, 4, 7),
(4438, 3, 4, 8),
(4439, 4, 4, 1),
(4440, 5, 4, 1),
(4441, 6, 4, 1),
(4442, 6, 4, 2),
(4443, 6, 4, 3),
(6149, 1, 11, 1),
(6150, 2, 11, 1),
(6151, 3, 11, 1),
(6152, 4, 11, 1),
(6153, 5, 11, 1),
(6154, 6, 11, 1),
(6180, 1, 12, 1),
(6181, 1, 12, 2),
(6182, 1, 12, 3),
(6183, 1, 12, 4),
(6184, 2, 12, 1),
(6185, 3, 12, 1),
(6186, 3, 12, 2),
(6187, 3, 12, 3),
(6188, 3, 12, 4),
(6189, 3, 12, 7),
(6190, 3, 12, 8),
(6191, 3, 12, 11),
(6192, 4, 12, 1),
(6193, 4, 12, 2),
(6194, 4, 12, 3),
(6195, 4, 12, 4),
(6196, 5, 12, 1),
(6197, 5, 12, 2),
(6198, 5, 12, 3),
(6199, 5, 12, 4),
(6200, 6, 12, 1),
(6201, 6, 12, 2),
(6202, 6, 12, 3),
(6203, 6, 12, 4),
(6204, 7, 12, 3),
(6205, 70, 12, 1),
(6206, 70, 12, 2),
(6207, 70, 12, 3),
(6208, 70, 12, 4),
(6209, 70, 12, 5),
(6210, 70, 12, 6),
(6211, 70, 12, 7),
(6212, 70, 12, 8),
(6213, 70, 12, 9),
(6214, 70, 12, 10),
(6215, 70, 12, 11),
(6216, 70, 12, 12),
(6217, 70, 12, 13),
(6218, 70, 12, 14),
(6219, 70, 12, 15),
(6220, 1, 14, 1),
(6221, 1, 14, 3),
(6222, 2, 14, 1),
(6223, 3, 14, 1),
(6224, 3, 14, 3),
(6225, 3, 14, 7),
(6226, 4, 14, 1),
(6227, 4, 14, 3),
(6228, 5, 14, 1),
(6229, 5, 14, 3),
(6230, 6, 14, 1),
(6231, 6, 14, 3),
(6232, 7, 14, 3),
(6233, 70, 14, 1),
(6234, 70, 14, 2),
(6235, 70, 14, 3),
(6236, 70, 14, 4),
(6237, 70, 14, 5),
(6238, 70, 14, 6),
(6239, 70, 14, 7),
(6240, 70, 14, 8),
(6241, 70, 14, 9),
(6242, 70, 14, 10),
(6243, 70, 14, 11),
(6244, 70, 14, 12),
(6245, 70, 14, 13),
(6246, 70, 14, 14),
(6247, 70, 14, 15),
(6274, 1, 16, 1),
(6275, 2, 16, 1),
(6276, 3, 16, 1),
(6277, 4, 16, 1),
(6278, 5, 16, 1),
(6279, 6, 16, 1),
(6280, 70, 16, 1),
(6281, 70, 16, 2),
(6282, 70, 16, 3),
(6283, 70, 16, 4),
(6284, 70, 16, 5),
(6285, 70, 16, 6),
(6286, 70, 16, 7),
(6287, 70, 16, 8),
(6288, 70, 16, 9),
(6289, 70, 16, 10),
(6290, 70, 16, 11),
(6291, 70, 16, 12),
(6292, 70, 16, 13),
(6293, 70, 16, 14),
(6294, 70, 16, 15),
(6295, 1, 15, 1),
(6296, 1, 15, 4),
(6297, 2, 15, 1),
(6298, 3, 15, 1),
(6299, 3, 15, 4),
(6300, 3, 15, 7),
(6301, 3, 15, 8),
(6302, 3, 15, 11),
(6303, 4, 15, 1),
(6304, 4, 15, 4),
(6305, 5, 15, 1),
(6306, 5, 15, 4),
(6307, 6, 15, 1),
(6308, 6, 15, 4),
(6309, 70, 15, 1),
(6310, 70, 15, 2),
(6311, 70, 15, 4),
(6312, 70, 15, 7),
(6313, 70, 15, 8),
(6314, 70, 15, 9),
(6315, 70, 15, 10),
(6316, 70, 15, 11),
(6317, 70, 15, 12),
(6318, 70, 15, 13),
(6319, 70, 15, 14),
(6320, 70, 15, 15),
(6374, 73, 10, 1),
(6375, 73, 10, 2),
(6376, 73, 10, 3),
(6401, 1, 1, 1),
(6402, 1, 1, 2),
(6403, 1, 1, 3),
(6404, 1, 1, 4),
(6405, 2, 1, 1),
(6406, 3, 1, 1),
(6407, 3, 1, 2),
(6408, 3, 1, 3),
(6409, 3, 1, 4),
(6410, 3, 1, 7),
(6411, 3, 1, 8),
(6412, 3, 1, 11),
(6413, 4, 1, 1),
(6414, 4, 1, 2),
(6415, 4, 1, 3),
(6416, 4, 1, 4),
(6417, 5, 1, 1),
(6418, 5, 1, 2),
(6419, 5, 1, 3),
(6420, 5, 1, 4),
(6421, 6, 1, 1),
(6422, 6, 1, 2),
(6423, 6, 1, 3),
(6424, 6, 1, 4),
(6425, 7, 1, 3),
(6426, 71, 1, 1),
(6427, 71, 1, 2),
(6428, 71, 1, 3),
(6429, 71, 1, 4),
(6430, 72, 1, 1),
(6431, 72, 1, 2),
(6432, 72, 1, 3),
(6433, 73, 1, 1),
(6434, 73, 1, 2),
(6435, 73, 1, 3),
(6436, 73, 1, 4),
(6437, 74, 1, 1),
(6438, 74, 1, 2),
(6439, 74, 1, 3),
(6440, 74, 1, 4),
(6441, 75, 1, 1),
(6442, 75, 1, 2),
(6443, 75, 1, 3),
(6444, 75, 1, 4),
(6445, 76, 1, 1),
(6446, 76, 1, 2),
(6447, 76, 1, 3),
(6448, 76, 1, 4),
(6449, 76, 1, 5),
(6450, 76, 1, 9),
(6451, 76, 1, 10),
(6452, 76, 1, 11),
(6453, 76, 1, 12),
(6454, 76, 1, 15),
(6455, 3, 2, 1),
(6456, 3, 2, 2),
(6457, 3, 2, 3),
(6458, 3, 2, 7),
(6459, 3, 2, 8),
(6460, 71, 2, 1),
(6461, 71, 2, 2),
(6462, 71, 2, 3),
(6463, 71, 2, 4),
(6464, 72, 2, 1),
(6465, 72, 2, 2),
(6466, 72, 2, 3),
(6467, 72, 2, 4),
(6468, 73, 2, 1),
(6469, 73, 2, 2),
(6470, 73, 2, 3),
(6471, 73, 2, 4),
(6472, 74, 2, 1),
(6473, 74, 2, 2),
(6474, 74, 2, 3),
(6475, 74, 2, 4),
(6476, 75, 2, 1),
(6477, 75, 2, 2),
(6478, 75, 2, 3),
(6479, 76, 2, 1),
(6480, 76, 2, 2),
(6481, 76, 2, 3),
(6482, 76, 2, 4);

-- --------------------------------------------------------

--
-- Table structure for table `module_to_user`
--

CREATE TABLE `module_to_user` (
  `id` int(11) UNSIGNED NOT NULL,
  `module_id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `activity_id` int(11) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `module_to_user`
--

INSERT INTO `module_to_user` (`id`, `module_id`, `user_id`, `activity_id`) VALUES
(8880, 1, 1, 1),
(8881, 1, 1, 2),
(8882, 1, 1, 3),
(8883, 1, 1, 4),
(8884, 2, 1, 1),
(8885, 3, 1, 1),
(8886, 3, 1, 2),
(8887, 3, 1, 3),
(8888, 3, 1, 4),
(8889, 3, 1, 7),
(8890, 3, 1, 8),
(8891, 3, 1, 11),
(8892, 4, 1, 1),
(8893, 4, 1, 2),
(8894, 4, 1, 3),
(8895, 4, 1, 4),
(8896, 5, 1, 1),
(8897, 5, 1, 2),
(8898, 5, 1, 3),
(8899, 5, 1, 4),
(8900, 6, 1, 1),
(8901, 6, 1, 2),
(8902, 6, 1, 3),
(8903, 6, 1, 4),
(8904, 7, 1, 3),
(8905, 71, 1, 1),
(8906, 71, 1, 2),
(8907, 71, 1, 3),
(8908, 71, 1, 4),
(8909, 72, 1, 1),
(8910, 72, 1, 2),
(8911, 72, 1, 3),
(8912, 73, 1, 1),
(8913, 73, 1, 2),
(8914, 73, 1, 3),
(8915, 73, 1, 4),
(8916, 74, 1, 1),
(8917, 74, 1, 2),
(8918, 74, 1, 3),
(8919, 74, 1, 4),
(8920, 75, 1, 1),
(8921, 75, 1, 2),
(8922, 75, 1, 3),
(8923, 75, 1, 4),
(8924, 76, 1, 1),
(8925, 76, 1, 2),
(8926, 76, 1, 3),
(8927, 76, 1, 4),
(8928, 76, 1, 5),
(8929, 76, 1, 9),
(8930, 76, 1, 10),
(8931, 76, 1, 11),
(8932, 76, 1, 12),
(8933, 76, 1, 15);

-- --------------------------------------------------------

--
-- Table structure for table `page_posts`
--

CREATE TABLE `page_posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `page_id` int(11) DEFAULT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `page_post_content` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `page_posts`
--

INSERT INTO `page_posts` (`id`, `user_id`, `page_id`, `user_name`, `page_post_content`, `image`, `created_at`, `updated_at`, `created_by`, `updated_by`) VALUES
(1, 811, 814, 'rasel', 'fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Conten', '22592.jfif', '2022-10-05 08:13:25', '2022-10-05 08:13:25', 811, 811);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `panding_post` int(11) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `post_content` longtext DEFAULT NULL,
  `audio` varchar(255) DEFAULT NULL,
  `video` varchar(255) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  `capture` varchar(255) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `user_id`, `panding_post`, `username`, `post_content`, `audio`, `video`, `image`, `capture`, `created_at`, `updated_at`) VALUES
(13, 811, 0, 'rasel', 'It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites still in their infancy. \r\n#tiger', NULL, NULL, '63462.jfif', NULL, '2022-10-13 06:01:04', '2022-10-02 23:52:48'),
(14, 811, 1, 'rasel', 'Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin literature from 45 BC, making it over 2000 years old.', NULL, NULL, '57614.jfif', NULL, '2022-10-13 06:13:29', '2022-10-02 23:53:28'),
(15, 2, 0, 'Md opu', 'he point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using \'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem', NULL, NULL, '65266.jfif', NULL, '2022-10-13 06:00:54', '2022-10-03 00:11:10'),
(16, 812, 0, 'meheraz', 'There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour,', NULL, NULL, '64402.jfif', NULL, '2022-10-13 06:00:50', '2022-10-03 00:14:33'),
(17, 811, 0, 'rasel', 'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover many web sites', NULL, NULL, '17818.jpg', NULL, '2022-10-13 06:00:45', '2022-10-03 07:08:14'),
(20, 811, 1, 'rasel', 'Content here, content here\', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for \'lorem ipsum\' will uncover', NULL, NULL, '64255.jpg', NULL, '2022-10-13 06:04:14', '2022-10-13 00:01:31');

-- --------------------------------------------------------

--
-- Table structure for table `role`
--

CREATE TABLE `role` (
  `id` int(11) NOT NULL,
  `name` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `info` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `status_id` tinyint(2) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `role`
--

INSERT INTO `role` (`id`, `name`, `info`, `created_by`, `updated_by`, `created_at`, `updated_at`, `status_id`) VALUES
(1, 'User', 'Super User of this application who can manage all kind of operation, Basically used for Developer', 55, 55, '2017-04-12 17:30:56', '2017-11-07 12:48:00', 1),
(2, 'System Admin Manager', 'Limited access with almost all the features, Who have the super power in company', 55, 55, '2017-04-12 17:32:45', '2017-11-07 12:51:02', 1),
(4, 'Chief Executive Officer', 'Chief Executive  Officer, No delete power', 55, 55, '2017-05-04 15:21:00', '2017-11-08 11:39:33', 1),
(5, 'Teacher', 'Teacher', 1, 1, '2022-10-05 05:32:08', '2022-10-05 05:32:08', 1),
(6, 'Student', 'Student', 1, 1, '2022-10-05 05:32:54', '2022-10-05 05:32:54', 1);

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(11) NOT NULL,
  `site_title` varchar(255) CHARACTER SET utf16 NOT NULL,
  `tag_line` varchar(255) CHARACTER SET utf16 DEFAULT NULL,
  `site_description` varchar(255) CHARACTER SET utf16 NOT NULL,
  `email` varchar(255) NOT NULL,
  `phone` varchar(255) NOT NULL,
  `location` text DEFAULT NULL,
  `logo` varchar(255) NOT NULL,
  `favicon` varchar(255) NOT NULL,
  `copyRight` varchar(255) NOT NULL,
  `created_by` int(11) NOT NULL,
  `updated_by` int(11) NOT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `site_title`, `tag_line`, `site_description`, `email`, `phone`, `location`, `logo`, `favicon`, `copyRight`, `created_by`, `updated_by`, `created_at`, `updated_at`) VALUES
(1, 'Social Network', 'Social Network', 'Social Network', 'admin@admin.com', '013488547856', 'Social Network\r\nDhaka, Bangladesh', 'public/upload/systemSettings/526756.png', 'public/upload/systemSettings/715844.png', 'DNC. All Rights Reserved', 55, 55, '2018-02-08 00:00:00', '2022-09-30 13:48:16');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `role_id` varchar(200) DEFAULT NULL,
  `panding_id` int(11) NOT NULL,
  `org_id` int(11) DEFAULT NULL,
  `full_name` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `email` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gender` varchar(11) DEFAULT NULL,
  `contact_no` varchar(14) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `username` varchar(50) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `designation` varchar(200) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `photo` varchar(255) DEFAULT NULL,
  `status_id` tinyint(1) DEFAULT NULL,
  `friend_status` tinyint(1) NOT NULL DEFAULT 0 COMMENT '1=approved,2=pending,3=deleted',
  `employee_status` int(11) DEFAULT NULL,
  `employee_id` varchar(10) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `employee_designation` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `divisional_office` int(11) DEFAULT NULL,
  `district_office` int(11) DEFAULT NULL,
  `circle_office` int(11) DEFAULT NULL,
  `phn_personal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email_personal` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `process_sms_alert` int(2) DEFAULT NULL,
  `remember_token` varchar(100) DEFAULT NULL,
  `created_by` int(11) DEFAULT NULL,
  `updated_by` int(11) DEFAULT NULL,
  `created_at` datetime NOT NULL,
  `updated_at` datetime NOT NULL,
  `profile_image` varchar(255) DEFAULT NULL,
  `profile_banner` varchar(255) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `panding_id`, `org_id`, `full_name`, `first_name`, `last_name`, `email`, `gender`, `contact_no`, `username`, `password`, `designation`, `photo`, `status_id`, `friend_status`, `employee_status`, `employee_id`, `employee_designation`, `divisional_office`, `district_office`, `circle_office`, `phn_personal`, `email_personal`, `process_sms_alert`, `remember_token`, `created_by`, `updated_by`, `created_at`, `updated_at`, `profile_image`, `profile_banner`) VALUES
(1, '7', 1, NULL, 'System', 'System', 'administrator', 'admin@admin.com', NULL, NULL, 'admin', '$2y$10$DGXfPihHBrxoAzBVt/T8Ne9YZh8Aph/ey8I.DzOiE0QDahCit74si', NULL, '6336ef35057b8899048ab0cc455154006fdb9676964b3.jpg', 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 'gFRKwQTaMhNe3gKSvTn69TyNCTAyrodIO6NTa7SbZ9U6NNZddSYOFrFc0u7u', 44, 1, '2015-02-15 04:21:06', '2022-09-30 13:29:25', '72805.png', '72805.jpg'),
(811, '6', 1, NULL, 'MD. Rasel', '', '', 'a@gmail.com', 'male', NULL, 'rasel', '$2y$10$dMo4dCxaePXKf6TqDTMCFexi00dapapj/eF6d8oaH94oebDIY6Nu6', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-12 17:22:46', '2022-10-05 15:56:59', '21569.jfif', '21569.jpg'),
(810, '1', 0, NULL, 'ridoy', '', '', 'admind@gmail.com', 'male', NULL, 'ridoy', '$2y$10$SPHzQTwTi8vCBCzFB6zU1OMvD.xTv8/N57wf24.kdKBu1dxF/9p1m', NULL, NULL, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-12 17:20:16', '2022-09-12 17:20:16', NULL, NULL),
(2, '1', 0, NULL, 'Md opu', '', '', 'admin@gmail.com', 'male', NULL, 'Md opu', '$2y$10$FpN46FmcvQjW5bFzXmRWeOd03QPbhO4F4cg1E2y5TPsX7dK7H.Z0u', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-12 17:08:54', '2022-09-28 11:33:11', '119767.jpg', '119767.jpg'),
(812, '1', 0, NULL, 'Meheraz istiak', '', '', 'f@gmail.com', 'male', NULL, 'meheraz', '$2y$10$pS485Qb3MpFSk9QrfO0wJ.EDYLLnW/TlkQERtVCA97RSRsXLyGPg6', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-16 17:04:50', '2022-10-03 06:13:37', '62603.png', '62603.jfif'),
(813, 'teacher', 0, NULL, 'Tuhedul', NULL, NULL, 't@gmail.com', 'male', NULL, 'tuhedul', '$2y$10$3N0lZdtls5JjdYglsksCye402BtVeVkUFw5l0Xt8kw0OyioaCjRii', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-05 05:59:21', '2022-10-05 05:59:21', NULL, NULL),
(814, 'teacher', 0, NULL, 'Tuhedul Islam', NULL, NULL, 't_@gmail.com', 'male', NULL, 'tuhedul_', '$2y$10$fhkeH70eeHJL6kuXOxDATevjqEwkdDCtfeFWjIIZd5BKm6uQNsLKG', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-05 06:04:44', '2022-10-05 06:04:44', NULL, NULL),
(815, 'teacher', 0, NULL, 'asda', NULL, NULL, 't1@gmail.com', 'male', NULL, 'ttttt', '$2y$10$PF1fmup7fNBDm.JFdrdc5OE4ufCQsKwT9Bb83V/WtXm7PRIO9q1we', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-05 06:05:39', '2022-10-05 06:05:39', NULL, NULL),
(816, 'teacher', 0, NULL, 'sdfds', NULL, NULL, 'tt@gmail.com', 'male', NULL, 'tt', '$2y$10$pwC6C/9C15HtjBnqeraF2.cVQTI9O28xsTbXJ/aGbppSAMvMvQfue', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-05 06:07:27', '2022-10-05 06:07:27', NULL, NULL),
(817, '5', 0, NULL, 'renbo', ' ', ' ', 'r@gmail.com', 'male', NULL, 'rendo2', '$2y$10$nyXEK3XbDwo97LM5aUyFN.Aek7IDpeKxXxWxottil8EZ.2gUOwvG2', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-05 06:31:12', '2022-10-05 06:31:12', NULL, NULL),
(818, '6', 0, NULL, 'shahed', ' ', ' ', 'shahed@gmail.com', 'male', NULL, 'shahed', '$2y$10$/6p218PJklr2OdXFESwHBuGEfro3fYQlc6DVAcrHsM4lg2QAvNqX6', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-05 10:21:44', '2022-10-05 10:21:44', NULL, NULL),
(819, '6', 0, NULL, 'rifat', ' ', ' ', 'rifat@gmail.com', 'male', NULL, 'rifat', '$2y$10$YIe/iLhwgU/qiclACDyzOuIM3Ypz3AcfeSdGYGjtvSSz7KCe.SS5G', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-05 10:25:58', '2022-10-05 10:25:58', NULL, NULL),
(821, '6', 1, NULL, 'amitav', ' ', ' ', 'ami@gmail.com', 'male', NULL, 'amitav', '$2y$10$MGyXnxJ.74jo.WKIDXS6.eL817rQo3n92eV8XRuKjmQzSqHPVEo0.', NULL, NULL, 1, 0, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-10-13 03:16:55', '2022-10-13 03:16:55', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `activity`
--
ALTER TABLE `activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `create_pages`
--
ALTER TABLE `create_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `elibrarys`
--
ALTER TABLE `elibrarys`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `friends`
--
ALTER TABLE `friends`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `language`
--
ALTER TABLE `language`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module`
--
ALTER TABLE `module`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_to_activity`
--
ALTER TABLE `module_to_activity`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_to_role`
--
ALTER TABLE `module_to_role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `module_to_user`
--
ALTER TABLE `module_to_user`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_posts`
--
ALTER TABLE `page_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `role`
--
ALTER TABLE `role`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
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
-- AUTO_INCREMENT for table `activity`
--
ALTER TABLE `activity`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `create_pages`
--
ALTER TABLE `create_pages`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=819;

--
-- AUTO_INCREMENT for table `elibrarys`
--
ALTER TABLE `elibrarys`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `friends`
--
ALTER TABLE `friends`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `language`
--
ALTER TABLE `language`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `module`
--
ALTER TABLE `module`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `module_to_activity`
--
ALTER TABLE `module_to_activity`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=312;

--
-- AUTO_INCREMENT for table `module_to_role`
--
ALTER TABLE `module_to_role`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6483;

--
-- AUTO_INCREMENT for table `module_to_user`
--
ALTER TABLE `module_to_user`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8990;

--
-- AUTO_INCREMENT for table `page_posts`
--
ALTER TABLE `page_posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `role`
--
ALTER TABLE `role`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=822;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
