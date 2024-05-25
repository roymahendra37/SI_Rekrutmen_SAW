-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: May 25, 2024 at 02:49 PM
-- Server version: 8.0.30
-- PHP Version: 8.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_rekrutmen`
--

-- --------------------------------------------------------

--
-- Table structure for table `alternatifs`
--

CREATE TABLE `alternatifs` (
  `id_alternatif` bigint UNSIGNED NOT NULL,
  `id_pelamar` bigint UNSIGNED NOT NULL,
  `alternatif_kriteria1` int NOT NULL,
  `alternatif_kriteria2` int NOT NULL,
  `alternatif_kriteria3` int NOT NULL,
  `alternatif_kriteria4` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `alternatifs`
--

INSERT INTO `alternatifs` (`id_alternatif`, `id_pelamar`, `alternatif_kriteria1`, `alternatif_kriteria2`, `alternatif_kriteria3`, `alternatif_kriteria4`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 5, 7, 3, '2024-05-25 01:50:44', '2024-05-25 02:06:38'),
(2, 2, 7, 5, 7, 5, '2024-05-25 01:51:20', '2024-05-25 02:07:28'),
(3, 3, 5, 7, 7, 5, '2024-05-25 01:52:13', '2024-05-25 02:07:39'),
(4, 4, 3, 9, 9, 5, '2024-05-25 01:53:48', '2024-05-25 02:07:48'),
(5, 5, 9, 7, 7, 7, '2024-05-25 01:54:10', '2024-05-25 02:08:11'),
(6, 6, 7, 3, 9, 5, '2024-05-25 01:54:29', '2024-05-25 02:08:22'),
(7, 7, 5, 5, 7, 5, '2024-05-25 01:54:54', '2024-05-25 02:08:34'),
(8, 8, 9, 9, 9, 7, '2024-05-25 01:55:15', '2024-05-25 02:08:43'),
(9, 9, 7, 7, 7, 7, '2024-05-25 01:55:30', '2024-05-25 02:08:50'),
(10, 10, 5, 9, 5, 7, '2024-05-25 01:55:59', '2024-05-25 02:03:43');

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `hasils`
--

CREATE TABLE `hasils` (
  `id_hasil` bigint UNSIGNED NOT NULL,
  `id_normalisasi` bigint UNSIGNED NOT NULL,
  `id_pelamar` bigint UNSIGNED NOT NULL,
  `hasil_kriteria1` double NOT NULL,
  `hasil_kriteria2` double NOT NULL,
  `hasil_kriteria3` double NOT NULL,
  `hasil_kriteria4` double NOT NULL,
  `total` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `hasils`
--

INSERT INTO `hasils` (`id_hasil`, `id_normalisasi`, `id_pelamar`, `hasil_kriteria1`, `hasil_kriteria2`, `hasil_kriteria3`, `hasil_kriteria4`, `total`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0.16666666666667, 0.13888888888889, 0.19444444444445, 0.2, 0.7, '2024-05-25 01:50:44', '2024-05-25 02:06:38'),
(2, 2, 2, 0.23333333333333, 0.13888888888889, 0.19444444444445, 0.12, 0.68666666666667, '2024-05-25 01:51:20', '2024-05-25 02:07:29'),
(3, 3, 3, 0.16666666666667, 0.19444444444445, 0.19444444444445, 0.12, 0.67555555555556, '2024-05-25 01:52:13', '2024-05-25 02:07:39'),
(4, 4, 4, 0.099999999999999, 0.25, 0.25, 0.12, 0.72, '2024-05-25 01:53:48', '2024-05-25 02:07:48'),
(5, 5, 5, 0.3, 0.19444444444445, 0.19444444444445, 0.085714285714286, 0.77460317460318, '2024-05-25 01:54:10', '2024-05-25 02:08:11'),
(6, 6, 6, 0.23333333333333, 0.083333333333332, 0.25, 0.12, 0.68666666666667, '2024-05-25 01:54:29', '2024-05-25 02:08:22'),
(7, 7, 7, 0.16666666666667, 0.13888888888889, 0.19444444444445, 0.12, 0.62, '2024-05-25 01:54:54', '2024-05-25 02:08:34'),
(8, 8, 8, 0.3, 0.25, 0.25, 0.085714285714286, 0.88571428571429, '2024-05-25 01:55:15', '2024-05-25 02:08:43'),
(9, 9, 9, 0.23333333333333, 0.19444444444445, 0.19444444444445, 0.085714285714286, 0.70793650793651, '2024-05-25 01:55:30', '2024-05-25 02:08:50'),
(10, 10, 10, 0.16666666666667, 0.25, 0.13888888888889, 0.085714285714286, 0.64126984126984, '2024-05-25 01:55:59', '2024-05-25 02:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint UNSIGNED NOT NULL,
  `reserved_at` int UNSIGNED DEFAULT NULL,
  `available_at` int UNSIGNED NOT NULL,
  `created_at` int UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `kriterias`
--

CREATE TABLE `kriterias` (
  `id_kriteria` bigint UNSIGNED NOT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `bobot` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `kriterias`
--

INSERT INTO `kriterias` (`id_kriteria`, `keterangan`, `bobot`, `created_at`, `updated_at`) VALUES
(1, 'pengalaman kerja', 0.3, NULL, '2024-05-24 07:06:08'),
(2, 'pendidikan', 0.25, NULL, NULL),
(3, 'nilai tes', 0.25, NULL, NULL),
(4, 'usia', 0.2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '0001_01_01_000000_create_users_table', 1),
(2, '0001_01_01_000001_create_cache_table', 1),
(3, '0001_01_01_000002_create_jobs_table', 1),
(4, '2024_05_23_083521_create_pelamars_table', 1),
(8, '2024_05_23_154104_create_alternatifs_table', 2),
(9, '2024_05_23_133605_create_kriterias_table', 3),
(11, '2024_05_24_044055_create_normalisasis_table', 4),
(15, '2024_05_24_055529_reset_auto_increment_db_rekrutmen', 5),
(16, '2024_05_24_044056_create_normalisasis_table', 6),
(17, '2024_05_24_044057_create_normalisasis_table', 7),
(18, '2024_05_24_055530_reset_auto_increment_db_rekrutmen', 8),
(19, '2024_05_24_114352_create_hasils_table', 9),
(20, '2024_05_24_055531_reset_auto_increment_db_rekrutmen', 10);

-- --------------------------------------------------------

--
-- Table structure for table `normalisasis`
--

CREATE TABLE `normalisasis` (
  `id_normalisasi` bigint UNSIGNED NOT NULL,
  `id_alternatif` bigint UNSIGNED NOT NULL,
  `id_pelamar` bigint UNSIGNED NOT NULL,
  `normalisasi_kriteria1` double NOT NULL,
  `normalisasi_kriteria2` double NOT NULL,
  `normalisasi_kriteria3` double NOT NULL,
  `normalisasi_kriteria4` double NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `normalisasis`
--

INSERT INTO `normalisasis` (`id_normalisasi`, `id_alternatif`, `id_pelamar`, `normalisasi_kriteria1`, `normalisasi_kriteria2`, `normalisasi_kriteria3`, `normalisasi_kriteria4`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 0.55555555555556, 0.55555555555556, 0.77777777777778, 1, '2024-05-25 01:50:44', '2024-05-25 02:06:38'),
(2, 2, 2, 0.77777777777778, 0.55555555555556, 0.77777777777778, 0.6, '2024-05-25 01:51:20', '2024-05-25 02:07:29'),
(3, 3, 3, 0.55555555555556, 0.77777777777778, 0.77777777777778, 0.6, '2024-05-25 01:52:13', '2024-05-25 02:07:39'),
(4, 4, 4, 0.33333333333333, 1, 1, 0.6, '2024-05-25 01:53:48', '2024-05-25 02:07:48'),
(5, 5, 5, 1, 0.77777777777778, 0.77777777777778, 0.42857142857143, '2024-05-25 01:54:10', '2024-05-25 02:08:11'),
(6, 6, 6, 0.77777777777778, 0.33333333333333, 1, 0.6, '2024-05-25 01:54:29', '2024-05-25 02:08:22'),
(7, 7, 7, 0.55555555555556, 0.55555555555556, 0.77777777777778, 0.6, '2024-05-25 01:54:54', '2024-05-25 02:08:34'),
(8, 8, 8, 1, 1, 1, 0.42857142857143, '2024-05-25 01:55:15', '2024-05-25 02:08:43'),
(9, 9, 9, 0.77777777777778, 0.77777777777778, 0.77777777777778, 0.42857142857143, '2024-05-25 01:55:30', '2024-05-25 02:08:50'),
(10, 10, 10, 0.55555555555556, 1, 0.55555555555556, 0.42857142857143, '2024-05-25 01:55:59', '2024-05-25 02:09:41');

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pelamars`
--

CREATE TABLE `pelamars` (
  `id_pelamar` bigint UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `usia` int NOT NULL,
  `pendidikan` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nilai_tes` int NOT NULL,
  `pengalaman` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pelamars`
--

INSERT INTO `pelamars` (`id_pelamar`, `nama`, `usia`, `pendidikan`, `nilai_tes`, `pengalaman`, `created_at`, `updated_at`) VALUES
(1, 'Rendra M', 19, 'SMK', 80, '1 Tahun', '2024-05-25 01:50:44', '2024-05-25 06:57:38'),
(2, 'Erwanto', 22, 'SMK', 85, '1-2 Tahun', '2024-05-25 01:51:20', '2024-05-25 02:07:28'),
(3, 'Arhan', 23, 'D3/D4', 83, '1 Tahun', '2024-05-25 01:52:13', '2024-05-25 02:07:39'),
(4, 'Zenna', 22, 'S1', 90, 'Fresh Graduate', '2024-05-25 01:53:48', '2024-05-25 02:07:48'),
(5, 'Azka', 26, 'D3/D4', 75, 'Lebih Dari 2 Tahun', '2024-05-25 01:54:10', '2024-05-25 02:08:11'),
(6, 'Rara', 23, 'SMA', 90, '1-2 Tahun', '2024-05-25 01:54:29', '2024-05-25 02:08:22'),
(7, 'Renald', 25, 'SMK', 81, '1 Tahun', '2024-05-25 01:54:54', '2024-05-25 02:08:34'),
(8, 'Romiez', 30, 'S1', 90, 'Lebih Dari 2 Tahun', '2024-05-25 01:55:15', '2024-05-25 02:08:43'),
(9, 'Dina', 29, 'D3/D4', 85, '1-2 Tahun', '2024-05-25 01:55:30', '2024-05-25 02:08:50'),
(10, 'Edozel', 28, 'S1', 60, '1 Tahun', '2024-05-25 01:55:59', '2024-05-25 02:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('a8QCBVbFC2slWJL9FnTonrmokZBbZmacelLCtL8w', 4, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoibnRMdGlWSHBKM1djYUdMTlJZMmRKanJKOFVHV28yMjBWNUo3VEEzTyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzE6Imh0dHA6Ly9yZWtydXRtZW4udGVzdC9kYXNoYm9hcmQiO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aTo0O30=', 1716647969);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Roy', 'roy@gmail.com', NULL, '$2y$12$Ne9.ZHBToL.PyKi8e4JMOOeeoHirV/xaBA3t46a25bg2yGcb5Heyi', NULL, NULL, NULL),
(3, 'Royhan', 'hendrarr37@gmail.com', NULL, '$2y$12$P55cw.JP3BsmzKc9Ty9l9efNeFze1jSo2VI7FLBCCkK28mkXJM.7m', NULL, '2024-05-25 02:17:11', '2024-05-25 02:17:11'),
(4, 'roymahendra', 'roymahendra37@gmail.com', NULL, '$2y$12$S7CFcxPFjqFVhjCDkXw.u.FXypyI1qpCA0reHm5txUrWWI.wmO4Em', NULL, '2024-05-25 06:27:22', '2024-05-25 06:27:22');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD PRIMARY KEY (`id_alternatif`),
  ADD KEY `alternatifs_id_pelamar_foreign` (`id_pelamar`);

--
-- Indexes for table `cache`
--
ALTER TABLE `cache`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `cache_locks`
--
ALTER TABLE `cache_locks`
  ADD PRIMARY KEY (`key`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `hasils`
--
ALTER TABLE `hasils`
  ADD PRIMARY KEY (`id_hasil`),
  ADD KEY `hasils_id_normalisasi_foreign` (`id_normalisasi`),
  ADD KEY `hasils_id_pelamar_foreign` (`id_pelamar`);

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
-- Indexes for table `kriterias`
--
ALTER TABLE `kriterias`
  ADD PRIMARY KEY (`id_kriteria`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `normalisasis`
--
ALTER TABLE `normalisasis`
  ADD PRIMARY KEY (`id_normalisasi`),
  ADD KEY `normalisasis_id_alternatif_foreign` (`id_alternatif`),
  ADD KEY `normalisasis_id_pelamar_foreign` (`id_pelamar`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `pelamars`
--
ALTER TABLE `pelamars`
  ADD PRIMARY KEY (`id_pelamar`);

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
-- AUTO_INCREMENT for table `alternatifs`
--
ALTER TABLE `alternatifs`
  MODIFY `id_alternatif` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `hasils`
--
ALTER TABLE `hasils`
  MODIFY `id_hasil` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `kriterias`
--
ALTER TABLE `kriterias`
  MODIFY `id_kriteria` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `normalisasis`
--
ALTER TABLE `normalisasis`
  MODIFY `id_normalisasi` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `pelamars`
--
ALTER TABLE `pelamars`
  MODIFY `id_pelamar` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `alternatifs`
--
ALTER TABLE `alternatifs`
  ADD CONSTRAINT `alternatifs_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `pelamars` (`id_pelamar`) ON DELETE CASCADE;

--
-- Constraints for table `hasils`
--
ALTER TABLE `hasils`
  ADD CONSTRAINT `hasils_id_normalisasi_foreign` FOREIGN KEY (`id_normalisasi`) REFERENCES `normalisasis` (`id_normalisasi`) ON DELETE CASCADE,
  ADD CONSTRAINT `hasils_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `pelamars` (`id_pelamar`) ON DELETE CASCADE;

--
-- Constraints for table `normalisasis`
--
ALTER TABLE `normalisasis`
  ADD CONSTRAINT `normalisasis_id_alternatif_foreign` FOREIGN KEY (`id_alternatif`) REFERENCES `alternatifs` (`id_alternatif`) ON DELETE CASCADE,
  ADD CONSTRAINT `normalisasis_id_pelamar_foreign` FOREIGN KEY (`id_pelamar`) REFERENCES `pelamars` (`id_pelamar`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
