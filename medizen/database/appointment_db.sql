-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 06, 2026 at 04:35 AM
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
-- Database: `appointment_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `appointments`
--

CREATE TABLE `appointments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `doctor_id` bigint(20) UNSIGNED DEFAULT NULL,
  `name` varchar(255) NOT NULL,
  `number` varchar(20) NOT NULL,
  `day` varchar(255) NOT NULL,
  `date` date NOT NULL,
  `time` time NOT NULL,
  `message` text DEFAULT NULL,
  `status` enum('pending','approved','rejected','completed') NOT NULL DEFAULT 'pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `appointments`
--

INSERT INTO `appointments` (`id`, `user_id`, `doctor_id`, `name`, `number`, `day`, `date`, `time`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 2, 3, 'Piyush', '1234567890', 'Wednesday', '2026-04-08', '14:00:00', 'first', 'pending', '2026-04-05 14:23:53', '2026-04-05 14:23:53');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `doctors`
--

CREATE TABLE `doctors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `expertise` varchar(255) NOT NULL,
  `experience` int(11) NOT NULL,
  `education` varchar(255) NOT NULL,
  `profession` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctors`
--

INSERT INTO `doctors` (`id`, `image`, `user_id`, `expertise`, `experience`, `education`, `profession`, `created_at`, `updated_at`) VALUES
(3, '1774723250.jpg', 22, 'Dermatologist', 7, 'MBBS, MD Dermatology', 'Skin Specialist', '2026-03-28 13:10:50', '2026-03-28 13:10:50'),
(4, '1774769386.jpg', 8, 'Cardiologist', 9, 'MBBS, MD Cardiology', 'Senior Doctor', '2026-03-29 01:59:46', '2026-03-29 01:59:46'),
(5, '1774769999.jpg', 9, 'Dentist', 5, 'BDS', 'Dentist', '2026-03-29 02:09:59', '2026-03-29 02:09:59'),
(6, '1774771061.png', 10, 'Neurologist', 8, 'MBBS, MD Neurology', 'Consultant', '2026-03-29 02:27:41', '2026-03-29 02:27:41'),
(7, '1774771198.png', 11, 'Orthopedic', 12, 'MBBS, MS Orthopedics', 'Senior Specialist', '2026-03-29 02:29:58', '2026-03-29 02:29:58'),
(8, '1774771310.png', 12, 'Pediatrician', 6, 'MBBS, MD Pediatrics', 'Child Specialist', '2026-03-29 02:31:50', '2026-03-29 02:31:50'),
(10, '1775382556.png', 27, 'Dermatology', 6, 'MBBS, MD Dermatology', 'Skin Specialist', '2026-04-05 04:19:16', '2026-04-05 04:19:16'),
(11, '1775382770.jpg', 28, 'Dermatology', 8, 'MBBS, MD Dermatology', 'Consultant', '2026-04-05 04:22:50', '2026-04-05 04:22:50'),
(12, '1775383285.jpg', 29, 'Cardiac Sciences', 12, 'MBBS, MD Cardiology', 'Senior Doctor', '2026-04-05 04:31:25', '2026-04-05 04:31:25'),
(13, '1775383431.png', 30, 'Cardiac Sciences', 6, 'MBBS, MD Cardiology', 'Consultant', '2026-04-05 04:33:51', '2026-04-05 04:33:51'),
(14, '1775383694.jpg', 31, 'Dentist', 2, 'BDS', 'Dentist', '2026-04-05 04:38:14', '2026-04-05 04:38:14'),
(15, '1775383802.jpg', 32, 'Dentist', 7, 'BDS', 'Dentist', '2026-04-05 04:40:02', '2026-04-05 04:40:02'),
(16, '1775383942.jpg', 33, 'Neurologist', 10, 'MBBS, MD Neurology', 'Neurologist', '2026-04-05 04:42:22', '2026-04-05 04:42:22'),
(17, '1775384163.jpg', 34, 'Neurologist', 15, 'MBBS, MD Neurology', 'Neurologist', '2026-04-05 04:46:03', '2026-04-05 04:46:03'),
(18, '1775384295.jpg', 35, 'Orthopedic', 5, 'MBBS, MS Orthopedics', 'Consultant', '2026-04-05 04:48:15', '2026-04-05 04:48:15'),
(19, '1775384425.jpg', 36, 'Orthopedic', 20, '\'MBBS, MS Orthopedics', 'Senior Specialist', '2026-04-05 04:50:25', '2026-04-05 04:50:25');

-- --------------------------------------------------------

--
-- Table structure for table `doctor_schedules`
--

CREATE TABLE `doctor_schedules` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `doctor_id` bigint(20) UNSIGNED NOT NULL,
  `day` enum('Monday','Tuesday','Wednesday','Thursday','Friday','Saturday','Sunday') NOT NULL,
  `start_time` time NOT NULL,
  `end_time` time NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `doctor_schedules`
--

INSERT INTO `doctor_schedules` (`id`, `doctor_id`, `day`, `start_time`, `end_time`, `created_at`, `updated_at`) VALUES
(9, 3, 'Monday', '11:00:00', '17:00:00', '2026-03-29 00:59:42', '2026-03-29 00:59:42'),
(10, 3, 'Tuesday', '11:00:00', '17:00:00', '2026-03-29 00:59:42', '2026-03-29 00:59:42'),
(11, 3, 'Wednesday', '11:00:00', '17:00:00', '2026-03-29 00:59:42', '2026-03-29 00:59:42'),
(12, 3, 'Thursday', '11:00:00', '17:00:00', '2026-03-29 00:59:42', '2026-03-29 00:59:42'),
(13, 3, 'Friday', '11:00:00', '17:00:00', '2026-03-29 00:59:42', '2026-03-29 00:59:42'),
(14, 4, 'Monday', '10:00:00', '14:00:00', '2026-03-29 01:59:46', '2026-03-29 01:59:46'),
(15, 4, 'Tuesday', '10:00:00', '14:00:00', '2026-03-29 01:59:46', '2026-03-29 01:59:46'),
(16, 4, 'Wednesday', '10:00:00', '14:00:00', '2026-03-29 01:59:46', '2026-03-29 01:59:46'),
(17, 4, 'Thursday', '10:00:00', '14:00:00', '2026-03-29 01:59:46', '2026-03-29 01:59:46'),
(18, 4, 'Friday', '10:00:00', '14:00:00', '2026-03-29 01:59:46', '2026-03-29 01:59:46'),
(19, 5, 'Monday', '09:00:00', '13:30:00', '2026-03-29 02:09:59', '2026-03-29 02:09:59'),
(20, 5, 'Tuesday', '09:00:00', '13:30:00', '2026-03-29 02:09:59', '2026-03-29 02:09:59'),
(21, 5, 'Wednesday', '09:00:00', '13:30:00', '2026-03-29 02:09:59', '2026-03-29 02:09:59'),
(22, 5, 'Thursday', '09:00:00', '13:30:00', '2026-03-29 02:09:59', '2026-03-29 02:09:59'),
(23, 5, 'Friday', '09:00:00', '13:30:00', '2026-03-29 02:09:59', '2026-03-29 02:09:59'),
(24, 5, 'Saturday', '09:00:00', '13:30:00', '2026-03-29 02:09:59', '2026-03-29 02:09:59'),
(25, 6, 'Thursday', '10:30:00', '16:30:00', '2026-03-29 02:27:41', '2026-03-29 02:27:41'),
(26, 6, 'Friday', '10:30:00', '16:30:00', '2026-03-29 02:27:41', '2026-03-29 02:27:41'),
(27, 6, 'Saturday', '10:30:00', '16:30:00', '2026-03-29 02:27:41', '2026-03-29 02:27:41'),
(28, 7, 'Monday', '14:00:00', '18:00:00', '2026-03-29 02:29:58', '2026-03-29 02:29:58'),
(29, 7, 'Tuesday', '14:00:00', '18:00:00', '2026-03-29 02:29:58', '2026-03-29 02:29:58'),
(30, 7, 'Wednesday', '14:00:00', '18:00:00', '2026-03-29 02:29:58', '2026-03-29 02:29:58'),
(31, 7, 'Thursday', '14:00:00', '18:00:00', '2026-03-29 02:29:58', '2026-03-29 02:29:58'),
(32, 8, 'Monday', '10:00:00', '15:30:00', '2026-03-29 02:31:50', '2026-03-29 02:31:50'),
(33, 8, 'Tuesday', '10:00:00', '15:30:00', '2026-03-29 02:31:50', '2026-03-29 02:31:50'),
(34, 8, 'Wednesday', '10:00:00', '15:30:00', '2026-03-29 02:31:50', '2026-03-29 02:31:50'),
(35, 8, 'Thursday', '10:00:00', '15:30:00', '2026-03-29 02:31:50', '2026-03-29 02:31:50'),
(36, 8, 'Friday', '10:00:00', '15:30:00', '2026-03-29 02:31:50', '2026-03-29 02:31:50'),
(37, 8, 'Saturday', '10:00:00', '15:30:00', '2026-03-29 02:31:50', '2026-03-29 02:31:50'),
(45, 10, 'Monday', '10:00:00', '16:00:00', '2026-04-05 04:19:16', '2026-04-05 04:19:16'),
(46, 10, 'Wednesday', '10:00:00', '16:00:00', '2026-04-05 04:19:16', '2026-04-05 04:19:16'),
(47, 10, 'Friday', '10:00:00', '16:00:00', '2026-04-05 04:19:16', '2026-04-05 04:19:16'),
(48, 11, 'Saturday', '09:00:00', '13:30:00', '2026-04-05 04:22:50', '2026-04-05 04:22:50'),
(49, 11, 'Sunday', '09:00:00', '13:30:00', '2026-04-05 04:22:50', '2026-04-05 04:22:50'),
(50, 12, 'Monday', '10:30:00', '16:30:00', '2026-04-05 04:31:25', '2026-04-05 04:31:25'),
(51, 12, 'Tuesday', '10:30:00', '16:30:00', '2026-04-05 04:31:25', '2026-04-05 04:31:25'),
(52, 12, 'Thursday', '10:30:00', '16:30:00', '2026-04-05 04:31:25', '2026-04-05 04:31:25'),
(53, 12, 'Friday', '10:30:00', '16:30:00', '2026-04-05 04:31:25', '2026-04-05 04:31:25'),
(54, 13, 'Wednesday', '12:30:00', '18:30:00', '2026-04-05 04:33:51', '2026-04-05 04:33:51'),
(55, 13, 'Thursday', '12:30:00', '18:30:00', '2026-04-05 04:33:51', '2026-04-05 04:33:51'),
(56, 13, 'Friday', '12:30:00', '18:30:00', '2026-04-05 04:33:51', '2026-04-05 04:33:51'),
(57, 14, 'Monday', '09:30:00', '16:30:00', '2026-04-05 04:38:14', '2026-04-05 04:38:14'),
(58, 14, 'Tuesday', '09:30:00', '16:30:00', '2026-04-05 04:38:14', '2026-04-05 04:38:14'),
(59, 14, 'Wednesday', '09:30:00', '16:30:00', '2026-04-05 04:38:14', '2026-04-05 04:38:14'),
(60, 15, 'Thursday', '09:00:00', '16:00:00', '2026-04-05 04:40:02', '2026-04-05 04:40:02'),
(61, 15, 'Friday', '09:00:00', '16:00:00', '2026-04-05 04:40:02', '2026-04-05 04:40:02'),
(62, 15, 'Saturday', '09:00:00', '16:00:00', '2026-04-05 04:40:02', '2026-04-05 04:40:02'),
(63, 16, 'Monday', '11:00:00', '18:00:00', '2026-04-05 04:42:22', '2026-04-05 04:42:22'),
(64, 16, 'Tuesday', '11:00:00', '18:00:00', '2026-04-05 04:42:22', '2026-04-05 04:42:22'),
(65, 16, 'Saturday', '11:00:00', '18:00:00', '2026-04-05 04:42:22', '2026-04-05 04:42:22'),
(66, 16, 'Sunday', '11:00:00', '18:00:00', '2026-04-05 04:42:22', '2026-04-05 04:42:22'),
(67, 17, 'Monday', '09:00:00', '13:00:00', '2026-04-05 04:46:04', '2026-04-05 04:46:04'),
(68, 17, 'Tuesday', '09:00:00', '13:00:00', '2026-04-05 04:46:04', '2026-04-05 04:46:04'),
(69, 17, 'Thursday', '09:00:00', '13:00:00', '2026-04-05 04:46:04', '2026-04-05 04:46:04'),
(70, 17, 'Friday', '09:00:00', '13:00:00', '2026-04-05 04:46:04', '2026-04-05 04:46:04'),
(71, 18, 'Friday', '16:00:00', '20:00:00', '2026-04-05 04:48:15', '2026-04-05 04:48:15'),
(72, 18, 'Saturday', '16:00:00', '20:00:00', '2026-04-05 04:48:15', '2026-04-05 04:48:15'),
(73, 18, 'Sunday', '16:00:00', '20:00:00', '2026-04-05 04:48:15', '2026-04-05 04:48:15'),
(74, 19, 'Monday', '09:00:00', '13:00:00', '2026-04-05 04:50:25', '2026-04-05 04:50:25'),
(75, 19, 'Tuesday', '09:00:00', '13:00:00', '2026-04-05 04:50:25', '2026-04-05 04:50:25'),
(76, 19, 'Wednesday', '09:00:00', '13:00:00', '2026-04-05 04:50:25', '2026-04-05 04:50:25');

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
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
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
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(6, '2026_03_25_175802_create_doctors_table', 2),
(9, '2026_03_28_155153_create_doctor_schedules_table', 3),
(10, '2026_04_05_184353_create_appointments_table', 4);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('4fsz8R2cs0czr5jObvN0Ez1hhnsSn2QrRTOOE32A', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiYVp1U1g1VklJeGJtS3J1ajQ5WWJZNERiS2RpUkN0d0RISGw3U0pjMCI7czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mjc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9pbmRleCI7czo1OiJyb3V0ZSI7Tjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo1MDoibG9naW5fd2ViXzU5YmEzNmFkZGMyYjJmOTQwMTU4MGYwMTRjN2Y1OGVhNGUzMDk4OWQiO2k6Mjt9', 1775418834);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `number` varchar(15) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `user_type` enum('Patient','Doctor','Admin') NOT NULL DEFAULT 'Patient',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`, `user_type`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Vishal', 'admin@gmail.com', '1234567890', '$2y$12$nk3KcexcQGsq5D1nXM09mOecAWCplqTqmlEW82fKijyiXe1e7I6Ta', 'Admin', NULL, '2026-02-24 12:04:59', '2026-02-24 12:04:59'),
(2, 'Piyush', 'piyush@gmail.com', '1234567890', '$2y$12$jNaeJPP2h7iEO10HBMNqvu0X.klqpg3yAsD7L5IJCq3ohTCqJrZ1C', 'Patient', NULL, '2026-02-24 12:20:24', '2026-03-25 11:04:49'),
(3, 'ajay', 'ajay@gmail.com', '1234567890', '$2y$12$krG.E8bUy7lwVT/a/aiV2.3/Bx3VTgV9Vz4ECeJbmlMm.cz1TMOq2', 'Patient', NULL, '2026-03-25 07:48:32', '2026-03-25 07:48:32'),
(4, 'raju', 'raju@gmail.com', '1234567890', '$2y$12$AujuHwwI8NjMIeBzyJvQpOrHi9oYYifyjy7V4dI74/v07xVAYuUq.', 'Patient', NULL, '2026-03-25 07:49:44', '2026-03-25 07:49:44'),
(8, 'Dr. Meet Patel', 'meet.patel@gmail.com', '9876543211', '$2y$12$PAQuJWepXO8lkZps5IPMweSqWxyWYe.LH9NTuPyZr/Dj7Zpuhy6XS', 'Doctor', NULL, '2026-03-25 13:46:55', '2026-03-25 13:46:55'),
(9, 'Dr. Krunal Shah', 'krunal.shah@gmail.com', '9876543212', '$2y$12$.Krqejz7juHflJ0lqDNsVO19PXiY2hNyoGwyO6mGqxVqJCkPdE9D2', 'Doctor', NULL, '2026-03-25 13:51:54', '2026-03-25 13:51:54'),
(10, 'Dr. Dhruv Mehta', 'dhruv.mehta@gmail.com', '9876543211', '$2y$12$YPzGhnaom0N8Zxtp2TePmuovD5Bqubf3cqb79.Gixiev3/9SrWvUS', 'Doctor', NULL, '2026-03-25 13:57:30', '2026-03-25 13:57:30'),
(11, 'Dr. Yash Joshi', 'yash.joshi@gmail.com', '9876543213', '$2y$12$bTglgzu2JpoKjcL8Ztd78OoPBwBcGorwc4Yd5CjAcUfofQdNT7h5e', 'Doctor', NULL, '2026-03-25 14:09:37', '2026-03-25 14:09:37'),
(12, 'Dr. Harsh Trivedi', 'harsh.trivedi@gmail.com', '9876543215', '$2y$12$I1Re9oz8kELYYndqjlnIWekJWBl26nI252zCnPVxyDFqG/h6Au3.m', 'Doctor', NULL, '2026-03-25 14:10:49', '2026-03-25 14:10:49'),
(22, 'Dr. Nirav Desai', 'nirav.desai@gmail.com', '9876543216', '$2y$12$CCk77L2pZcw8tC2Owid0jOAcuzWdgj8AOPi/Zd7HA7aFDxxWB4CzS', 'Doctor', NULL, '2026-03-26 04:29:15', '2026-03-26 04:29:15'),
(27, 'Dr. Amit Shah', 'amit1@mail.com', '9990000001', '$2y$12$l/MO7IRBVEBnFr2fwBnZXudSVrwROw3lG/.Dt1pno.aVSzjoTzzqy', 'Doctor', NULL, '2026-04-05 04:16:55', '2026-04-05 04:16:55'),
(28, 'Dr. Neha Patel', 'neha2@mail.com', '9990000002', '$2y$12$2LN11IbhTvP8buZlYvPs1O6HnnJgyWcLm1HDaqQlFXtXMZeOcrDIS', 'Doctor', NULL, '2026-04-05 04:21:32', '2026-04-05 04:21:32'),
(29, 'Dr. Raj Mehta', 'raj3@mail.com', '9990000003', '$2y$12$xLAOguuEodPcAN8Vb36Lxu6wmm05qI7Sh/n1JyhKCe7eK.zjz.lH2', 'Doctor', NULL, '2026-04-05 04:23:57', '2026-04-05 04:23:57'),
(30, 'Dr. Pooja Desai', 'pooja4@mail.com', '9990000004', '$2y$12$9Q8TKAtXRxLE0ZMRDieDIO4CtXm2n6VrTkb/MkxJ052uchbL7YxIy', 'Doctor', NULL, '2026-04-05 04:32:15', '2026-04-05 04:32:15'),
(31, 'Dr. Kiran Joshi', 'kiran5@mail.com', '9990000005', '$2y$12$G4zQGdYdrECvDpWZzI58f.0XIpNV3V9hzeGsz19Su8ySt24.T3g9i', 'Doctor', NULL, '2026-04-05 04:34:27', '2026-04-05 04:34:27'),
(32, 'Dr. Sneha Shah', 'sneha6@mail.com', '9990000006', '$2y$12$j5hSHIbNROnLG8j70C156.L2/Kf9O.P7mIIbq647b0YR/pKZRxuOe', 'Doctor', NULL, '2026-04-05 04:38:54', '2026-04-05 04:38:54'),
(33, 'Dr. Vivek Patel', 'vivek7@mail.com', '9990000007', '$2y$12$Su2iNknQ3cXxIWvSeF.XzeQwJDZ9lVhvVXbhqyHVImd5q3Ksjbh0q', 'Doctor', NULL, '2026-04-05 04:40:50', '2026-04-05 04:40:50'),
(34, 'Dr. Rina Mehta', 'rina8@mail.com', '9990000008', '$2y$12$fL..6XdEHzueG86HYZb2S.zoFTEEmU5vZbosFLFkb4798i6VI2o76', 'Doctor', NULL, '2026-04-05 04:44:26', '2026-04-05 04:44:26'),
(35, 'Dr. Hardik Shah', 'hardik9@mail.com', '9990000009', '$2y$12$23ZwMYbGgeUj/60EjNq0/.3q.7CTrWVZpfO91UNNHG6psfYNh7N3O', 'Doctor', NULL, '2026-04-05 04:46:37', '2026-04-05 04:46:37'),
(36, 'Dr. Aarti Patel', 'aarti10@mail.com', '9990000010', '$2y$12$g9FBLR4DdbkrnyToAbtdRuZeADq7nb8i2bgrG5JcScELl3ksG2FYq', 'Doctor', NULL, '2026-04-05 04:48:55', '2026-04-05 04:48:55');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `appointments`
--
ALTER TABLE `appointments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `appointments_user_id_foreign` (`user_id`),
  ADD KEY `appointments_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_expiration_index` (`expiration`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`),
  ADD KEY `cache_locks_expiration_index` (`expiration`);

--
-- Indexes for table `doctors`
--
ALTER TABLE `doctors`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctors_user_id_foreign` (`user_id`);

--
-- Indexes for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  ADD PRIMARY KEY (`id`),
  ADD KEY `doctor_schedules_doctor_id_foreign` (`doctor_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `jobs`
--
ALTER TABLE `jobs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `jobs_queue_index` (`queue`);

--
-- Indexes for table `job_batches`
--
ALTER TABLE `job_batches`
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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

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
-- AUTO_INCREMENT for table `appointments`
--
ALTER TABLE `appointments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=20;

--
-- AUTO_INCREMENT for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=77;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=37;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `appointments`
--
ALTER TABLE `appointments`
  ADD CONSTRAINT `appointments_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE SET NULL,
  ADD CONSTRAINT `appointments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE SET NULL;

--
-- Constraints for table `doctors`
--
ALTER TABLE `doctors`
  ADD CONSTRAINT `doctors_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  ADD CONSTRAINT `doctor_schedules_doctor_id_foreign` FOREIGN KEY (`doctor_id`) REFERENCES `doctors` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;



INSERT INTO `users` (`id`, `name`, `email`, `number`, `password`, `user_type`, `created_at`, `updated_at`) VALUES
(101,'Dr. Amit Shah','amit1@mail.com','9990000001','123456','Doctor',NOW(),NOW()),
(102,'Dr. Neha Patel','neha2@mail.com','9990000002','123456','Doctor',NOW(),NOW()),
(103,'Dr. Raj Mehta','raj3@mail.com','9990000003','123456','Doctor',NOW(),NOW()),
(104,'Dr. Pooja Desai','pooja4@mail.com','9990000004','123456','Doctor',NOW(),NOW()),
(105,'Dr. Kiran Joshi','kiran5@mail.com','9990000005','123456','Doctor',NOW(),NOW()),
(106,'Dr. Sneha Shah','sneha6@mail.com','9990000006','123456','Doctor',NOW(),NOW()),
(107,'Dr. Vivek Patel','vivek7@mail.com','9990000007','123456','Doctor',NOW(),NOW()),
(108,'Dr. Rina Mehta','rina8@mail.com','9990000008','123456','Doctor',NOW(),NOW()),
(109,'Dr. Hardik Shah','hardik9@mail.com','9990000009','123456','Doctor',NOW(),NOW()),
(110,'Dr. Aarti Patel','aarti10@mail.com','9990000010','123456','Doctor',NOW(),NOW()),


(111,'Dr. Mehul Shah','mehul11@mail.com','9990000011','123456','Doctor',NOW(),NOW()),
(112,'Dr. Komal Joshi','komal12@mail.com','9990000012','123456','Doctor',NOW(),NOW()),
(113,'Dr. Ankit Mehta','ankit13@mail.com','9990000013','123456','Doctor',NOW(),NOW()),
(114,'Dr. Nidhi Shah','nidhi14@mail.com','9990000014','123456','Doctor',NOW(),NOW()),
(115,'Dr. Rahul Patel','rahul15@mail.com','9990000015','123456','Doctor',NOW(),NOW()),
(116,'Dr. Priya Desai','priya16@mail.com','9990000016','123456','Doctor',NOW(),NOW()),
(117,'Dr. Jay Shah','jay17@mail.com','9990000017','123456','Doctor',NOW(),NOW()),
(118,'Dr. Mansi Patel','mansi18@mail.com','9990000018','123456','Doctor',NOW(),NOW()),
(119,'Dr. Dhruv Mehta','dhruv19@mail.com','9990000019','123456','Doctor',NOW(),NOW()),
(120,'Dr. Krupa Shah','krupa20@mail.com','9990000020','123456','Doctor',NOW(),NOW());
(121,'Dr. Yash Patel','yash21@mail.com','9990000021','123456','Doctor',NOW(),NOW()),
(122,'Dr. Riddhi Shah','riddhi22@mail.com','9990000022','123456','Doctor',NOW(),NOW()),
(123,'Dr. Tushar Mehta','tushar23@mail.com','9990000023','123456','Doctor',NOW(),NOW()),
(125,'Dr. Parth Joshi','parth25@mail.com','9990000025','123456','Doctor',NOW(),NOW()),
(126,'Dr. Bhavya Shah','bhavya26@mail.com','9990000026','123456','Doctor',NOW(),NOW()),
(127,'Dr. Chirag Patel','chirag27@mail.com','9990000027','123456','Doctor',NOW(),NOW()),
(128,'Dr. Nisha Mehta','nisha28@mail.com','9990000028','123456','Doctor',NOW(),NOW()),
(129,'Dr. Kunal Shah','kunal29@mail.com','9990000029','123456','Doctor',NOW(),NOW()),
(130,'Dr. Rupal Patel','rupal30@mail.com','9990000030','123456','Doctor',NOW(),NOW());

INSERT INTO `doctors` (`id`, `image`, `user_id`, `expertise`, `experience`, `education`, `profession`, `created_at`, `updated_at`) VALUES

(201,'doc1.jpg',101,'Dermatology',3,'MBBS, MD Dermatology','Skin Specialist',NOW(),NOW()),
(202,'doc2.jpg',102,'Dermatology',8,'MBBS, MD Dermatology','Consultant',NOW(),NOW()),
(203,'doc3.jpg',103,'Cardiac Sciences',12,'MBBS, MD Cardiology','Senior Doctor',NOW(),NOW()),
(204,'doc4.jpg',104,'Cardiac Sciences',6,'MBBS, MD Cardiology','Consultant',NOW(),NOW()),
(205,'doc5.jpg',105,'Dentistry',2,'BDS','Dentist',NOW(),NOW()),
(206,'doc6.jpg',106,'Dentistry',7,'BDS','Senior Dentist',NOW(),NOW()),
(207,'doc7.jpg',107,'Neurology',10,'MBBS, MD Neurology','Neurologist',NOW(),NOW()),
(208,'doc8.jpg',108,'Neurology',15,'MBBS, MD Neurology','Senior Specialist',NOW(),NOW()),
(209,'doc9.jpg',109,'Orthopedics',5,'MBBS, MS Orthopedics','Consultant',NOW(),NOW()),
(210,'doc10.jpg',110,'Orthopedics',14,'MBBS, MS Orthopedics','Senior Specialist',NOW(),NOW()),


(211,'doc11.jpg',111,'Pediatrics',4,'MBBS, MD Pediatrics','Child Specialist',NOW(),NOW()),
(212,'doc12.jpg',112,'Pediatrics',9,'MBBS, MD Pediatrics','Consultant',NOW(),NOW()),
(213,'doc13.jpg',113,'Psychiatry',6,'MBBS, MD Psychiatry','Psychiatrist',NOW(),NOW()),
(214,'doc14.jpg',114,'Psychiatry',11,'MBBS, MD Psychiatry','Senior Psychiatrist',NOW(),NOW()),
(215,'doc15.jpg',115,'Gastroenterology',7,'MBBS, MD Gastro','Consultant',NOW(),NOW()),
(216,'doc16.jpg',116,'Gastroenterology',13,'MBBS, MD Gastro','Senior Doctor',NOW(),NOW()),
(217,'doc17.jpg',117,'ENT',3,'MBBS, MS ENT','ENT Specialist',NOW(),NOW()),
(218,'doc18.jpg',118,'ENT',8,'MBBS, MS ENT','Consultant',NOW(),NOW()),
(219,'doc19.jpg',119,'Oncology',9,'MBBS, MD Oncology','Cancer Specialist',NOW(),NOW()),
(220,'doc20.jpg',120,'Oncology',16,'MBBS, MD Oncology','Senior Specialist',NOW(),NOW());
(221,'doc21.jpg',121,'Bariatrics',4,'MBBS, MS Bariatrics','Weight Loss Specialist',NOW(),NOW()),
(222,'doc22.jpg',122,'Endocrinology',9,'MBBS, MD Endocrinology','Hormone Specialist',NOW(),NOW()),
(223,'doc23.jpg',123,'Urology',11,'MBBS, MS Urology','Urologist',NOW(),NOW()),
(225,'doc25.jpg',125,'Cardiac Sciences',15,'MBBS, MD Cardiology','Senior Cardiologist',NOW(),NOW()),
(226,'doc26.jpg',126,'Dermatology',2,'MBBS, MD Dermatology','Skin Specialist',NOW(),NOW()),
(227,'doc27.jpg',127,'Pediatrics',7,'MBBS, MD Pediatrics','Child Specialist',NOW(),NOW()),
(228,'doc28.jpg',128,'Orthopedic',13,'MBBS, MS Orthopedic','Orthopedic Surgeon',NOW(),NOW()),
(229,'doc29.jpg',129,'Neurology',5,'MBBS, MD Neurology','Consultant Neurologist',NOW(),NOW()),
(230,'doc30.jpg',130,'Psychiatry',16,'MBBS, MD Psychiatry','Senior Psychiatrist',NOW(),NOW());