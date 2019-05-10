-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 29, 2019 at 06:24 AM
-- Server version: 5.7.23
-- PHP Version: 7.1.24

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ieee`
--

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_03_29_112111_create_sessions_table', 2);

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
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` int(10) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `id_lomba` tinyint(1) NOT NULL,
  `afiliasi` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anggota1` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama_anggota2` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `is_verified` tinyint(1) NOT NULL DEFAULT '0',
  `is_admin` tinyint(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `id_lomba`, `afiliasi`, `nama_anggota1`, `nama_anggota2`, `is_verified`, `is_admin`, `created_at`, `updated_at`) VALUES
(1, 'Junho', 'cj@gmail.com', '2019-03-26 17:00:00', '1451960056', NULL, 1, 'itb', 'saga', 'saya', 0, 0, '2019-03-24 07:53:04', '2019-03-24 07:53:04'),
(2, 'Junhs', 'c2@gmail.com', NULL, '2641614505', NULL, 1, 'itb', 'saga', 'saya', 0, 0, '2019-03-24 07:57:08', '2019-03-24 07:57:08'),
(3, 'Junhs2', 'c23@gmail.com', NULL, '2554736982', NULL, 1, 'itb', 'saga', 'saya', 0, 0, '2019-03-24 07:58:48', '2019-03-24 07:58:48'),
(4, 'Junho', 'sagi@gmail.com', NULL, '$2y$10$rMZ7odz1ELD9nKtpTWpV4egcqgbAcn51wiVtOF/jmy85TegpR9y/W', NULL, 2, 'ITB', 'sando', 'sandu', 0, 0, '2019-03-25 02:23:08', '2019-03-25 02:23:08'),
(5, 'Jeno', 'garo@gmail.com', NULL, '$2y$10$JDsF/yE.WFcsvWTfBHkdpuIn.eh3qc2iDwo0EaXpssDn9QaRdz6ba', NULL, 1, 'ITB', 'saku', 'saku', 0, 0, '2019-03-29 04:17:39', '2019-03-29 04:17:39'),
(6, 'Joko', 'hey@g.com', NULL, '$2y$10$WgdNYBZaGsv6gJbA3ic87.G1D0M2gU9MFg5IKoUMBEd38H7s8r48q', NULL, 2, 'ITB', 'saku', 'saku', 0, 0, '2019-03-29 04:18:44', '2019-03-29 04:18:44'),
(7, 'Helo', 'gay@gm.com', NULL, '$2y$10$Z3oHylIUGaBAbYSYo94M4.Fmj3nvjfmCWYbbisg.OFFCd.Gtt7eL.', NULL, 4, 'sa', 'sa', 'sa', 0, 0, '2019-03-29 04:26:03', '2019-03-29 04:26:03'),
(8, 'Acong', 'acong@gmail.com', NULL, '$2y$10$GK5/AyhWvYl9moxgMLJpgeYoHLbNEMInGfb38Gi3h/7WIw9wUXuNC', NULL, 1, 'ITB', 'acong2', 'acong3', 0, 0, '2019-03-29 04:49:31', '2019-03-29 04:49:31'),
(9, 'Jun', 'cjunho@gmail.com', NULL, '$2y$10$Vohdpq28cYx4mA499luU7.obJBWDkWxUGK8MqljIxeFClfbaAGi0O', NULL, 2, 'ITB', 'Garry', 'Hardy', 0, 1, '2019-03-29 05:21:42', '2019-03-29 06:24:04');

--
-- Indexes for dumped tables
--

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD UNIQUE KEY `sessions_id_unique` (`id`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
