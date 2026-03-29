-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 29, 2026 at 12:23 PM
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
(5, '1774769999.jpg', 9, 'Dentist', 5, 'BDS', 'Junior Doctor', '2026-03-29 02:09:59', '2026-03-29 02:09:59'),
(6, '1774771061.png', 10, 'Neurologist', 8, 'MBBS, MD Neurology', 'Consultant', '2026-03-29 02:27:41', '2026-03-29 02:27:41'),
(7, '1774771198.png', 11, 'Orthopedic', 12, 'MBBS, MS Orthopedics', 'Senior Specialist', '2026-03-29 02:29:58', '2026-03-29 02:29:58'),
(8, '1774771310.png', 12, 'Pediatrician', 6, 'MBBS, MD Pediatrics', 'Child Specialist', '2026-03-29 02:31:50', '2026-03-29 02:31:50');

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
(37, 8, 'Saturday', '10:00:00', '15:30:00', '2026-03-29 02:31:50', '2026-03-29 02:31:50');

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
(9, '2026_03_28_155153_create_doctor_schedules_table', 3);

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
('cW1fYoW0NZQRlDPq7sELUwfXhZz7yRqgIWeZZO2H', 2, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoid3dRSjFwTjhnUTIyVFI3eU5CV1pKTGw0Z2hwWU9UTmtOYWN0Y1hsUCI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6Mjp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9kb2N0b3JEZXRhaWxzLzkiO3M6NToicm91dGUiO047fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjI7fQ==', 1774779645);

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
(22, 'Dr. Nirav Desai', 'nirav.desai@gmail.com', '9876543216', '$2y$12$CCk77L2pZcw8tC2Owid0jOAcuzWdgj8AOPi/Zd7HA7aFDxxWB4CzS', 'Doctor', NULL, '2026-03-26 04:29:15', '2026-03-26 04:29:15');

--
-- Indexes for dumped tables
--

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
-- AUTO_INCREMENT for table `doctors`
--
ALTER TABLE `doctors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `doctor_schedules`
--
ALTER TABLE `doctor_schedules`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=45;

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
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- Constraints for dumped tables
--

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
