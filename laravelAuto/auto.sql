-- phpMyAdmin SQL Dump
-- version 4.8.5
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: 2019 m. Bir 25 d. 22:03
-- Server version: 10.1.38-MariaDB
-- PHP Version: 7.3.2

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `auto`
--

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `autos`
--

CREATE TABLE `autos` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `reg_number` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `model` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `autos`
--

INSERT INTO `autos` (`id`, `reg_number`, `brand`, `model`, `created_at`, `updated_at`) VALUES
(5, 'ABC456', 'Audi', 'Q7', '2019-04-18 17:06:52', '2019-04-19 09:51:11'),
(6, 'ADF436', 'Volkswagen', 'Arteon', '2019-04-18 17:07:15', '2019-04-18 17:07:15'),
(7, 'UYT345', 'Toyota', 'RAV4', '2019-04-18 17:07:33', '2019-04-18 17:07:33'),
(8, 'KOI090', 'Suzuki', 'Swift', '2019-04-18 17:10:41', '2019-04-18 17:10:41'),
(9, 'SED622', 'Honda', 'Civik', '2019-04-18 17:13:07', '2019-04-18 17:13:07'),
(10, 'PUT666', 'Ferrari', 'F12', '2019-04-18 17:16:21', '2019-04-18 17:16:21'),
(11, 'DEV777', 'Aston Martin', 'Vantage', '2019-04-18 17:17:57', '2019-04-18 17:17:57');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `auto_owner`
--

CREATE TABLE `auto_owner` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `auto_id` bigint(20) UNSIGNED NOT NULL,
  `owner_id` bigint(20) UNSIGNED NOT NULL,
  `from_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `to_date` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `auto_owner`
--

INSERT INTO `auto_owner` (`id`, `auto_id`, `owner_id`, `from_date`, `to_date`, `created_at`, `updated_at`) VALUES
(5, 5, 6, '2019-04-18 20:06:52', '2019-04-18 20:06:52', '2019-04-18 17:06:52', '2019-04-18 17:06:52'),
(6, 6, 2, '2019-04-18 20:07:15', '2019-04-18 20:07:15', '2019-04-18 17:07:15', '2019-04-18 17:07:15'),
(7, 7, 1, '2019-04-18 20:07:33', '2019-04-18 20:07:33', '2019-04-18 17:07:33', '2019-04-18 17:07:33'),
(8, 8, 2, '2019-04-18 20:10:41', '2019-04-18 20:10:41', '2019-04-18 17:10:41', '2019-04-18 17:10:41'),
(10, 10, 4, '2019-04-18 20:16:21', '2019-04-18 20:16:21', '2019-04-18 17:16:21', '2019-04-18 17:16:21'),
(11, 11, 1, '2019-04-18 20:17:57', '2019-04-18 20:17:57', '2019-04-18 17:17:57', '2019-04-18 17:17:57'),
(15, 5, 2, '2019-04-23 08:21:46', '2019-04-23 08:21:46', '2019-04-23 05:21:46', '2019-04-23 05:21:46'),
(20, 5, 1, '2019-04-23 08:32:31', '2019-04-23 08:32:31', '2019-04-23 05:32:31', '2019-04-23 05:32:31'),
(25, 5, 6, '2019-06-15 20:33:44', '2019-06-15 20:33:44', '2019-06-15 17:33:44', '2019-06-15 17:33:44');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(104, '2014_10_12_000000_create_users_table', 1),
(105, '2014_10_12_100000_create_password_resets_table', 1),
(109, '2019_04_12_124745_create_autos_table', 2),
(110, '2019_04_14_170659_create_owners_table', 2),
(111, '2019_04_16_061015_create_auto_owner_table', 2);

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `owners`
--

CREATE TABLE `owners` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `owners`
--

INSERT INTO `owners` (`id`, `name`, `surname`, `created_at`, `updated_at`) VALUES
(1, 'Jonas', 'Jonaitis', NULL, NULL),
(2, 'Antanas', 'Antanaitis', NULL, NULL),
(4, 'Tadas', 'Tadaitis', NULL, NULL),
(5, 'Petras', 'Petraitis', NULL, NULL),
(6, 'Lina', 'Linaitė', NULL, NULL),
(8, 'Antanas', 'Petraitis', '2019-06-15 17:37:15', '2019-06-15 17:37:15');

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Sukurta duomenų struktūra lentelei `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Sukurta duomenų kopija lentelei `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'Testas@testas.lt', NULL, '$2y$10$5mpRp90PIXRKgON8Fi8BdetQpsJ08.NbBuJLtngMBZkHh5pkM7i7m', NULL, '2019-04-18 04:48:43', '2019-04-18 04:48:43'),
(2, 'bb', 'bb@bb.lt', NULL, '$2y$10$eaukvmhihOwCmA45jrWDMePZsn1OFj6wbWGBW9zJBURe6AIAClHq2', NULL, '2019-06-15 17:20:58', '2019-06-15 17:20:58');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `autos`
--
ALTER TABLE `autos`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `auto_owner`
--
ALTER TABLE `auto_owner`
  ADD PRIMARY KEY (`id`),
  ADD KEY `auto_owner_auto_id_foreign` (`auto_id`),
  ADD KEY `auto_owner_owner_id_foreign` (`owner_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `owners`
--
ALTER TABLE `owners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

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
-- AUTO_INCREMENT for table `autos`
--
ALTER TABLE `autos`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `auto_owner`
--
ALTER TABLE `auto_owner`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=112;

--
-- AUTO_INCREMENT for table `owners`
--
ALTER TABLE `owners`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Apribojimai eksportuotom lentelėm
--

--
-- Apribojimai lentelei `auto_owner`
--
ALTER TABLE `auto_owner`
  ADD CONSTRAINT `auto_owner_auto_id_foreign` FOREIGN KEY (`auto_id`) REFERENCES `autos` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `auto_owner_owner_id_foreign` FOREIGN KEY (`owner_id`) REFERENCES `owners` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
