-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2022 at 08:39 AM
-- Server version: 10.4.22-MariaDB
-- PHP Version: 8.0.13

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `simaset`
--

-- --------------------------------------------------------

--
-- Table structure for table `aset`
--

CREATE TABLE `aset` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `spesifikasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `kode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokasi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `jumlah` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `gambar` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tanggal` date DEFAULT NULL,
  `keterangan` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `klasifikasi` enum('sekretariat','akademik','kemahasiswaan','keuangan','laboratorium') COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipe` enum('pengadaan','maintenance','penghapusan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perkiraan_biaya` int(11) DEFAULT NULL,
  `kondisi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `proses` enum('Perawatan','Perbaikan') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status_kaur` enum('diterima','ditolak') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('menunggu_diterima','ditolak','diterima') COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`id`, `nama`, `unit`, `spesifikasi`, `kode`, `lokasi`, `jumlah`, `gambar`, `tanggal`, `keterangan`, `klasifikasi`, `tipe`, `perkiraan_biaya`, `kondisi`, `proses`, `status_kaur`, `status`, `message`, `created_at`, `updated_at`) VALUES
(18, 'Pengajuan pengadaan', 'Unit 1', NULL, NULL, NULL, '1', '1.PNG', '2022-09-01', 'Keterangan', 'sekretariat', 'pengadaan', NULL, NULL, NULL, 'diterima', 'diterima', NULL, '2022-09-05 23:40:46', '2022-09-05 23:54:07'),
(19, 'Pengajuan maintenance', 'Unit 2', NULL, '1', 'lantai1-338.5-146.43333435058594', '1', 'Capture.PNG', '2022-09-02', NULL, 'sekretariat', 'maintenance', 100000, 'kondisi', 'Perawatan', 'diterima', 'diterima', NULL, '2022-09-05 23:44:40', '2022-09-05 23:56:03'),
(20, 'Aset Sekretariat', NULL, 'Spesifikasi', 'Kode', 'lantai9-221.5-111.43333435058594', '1', 'env.PNG', NULL, NULL, 'sekretariat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-05 23:58:56', '2022-09-05 23:58:56'),
(21, 'Aset akademik', NULL, 'spesifikasi', 'kode', 'lantai1-338.5-146.43333435058594', '1', 'Capture.PNG', NULL, NULL, 'akademik', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-11 07:17:13', '2022-09-11 07:17:13'),
(22, 'Aset akademik 0', NULL, 'spesifikasi', 'kode', 'lantai1-440.5-138.43333435058594', '1', 'Hasil Typing Test.PNG', NULL, NULL, 'keuangan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-11 07:19:10', '2022-09-11 07:46:51'),
(23, 'Aset kemahasiswaan', NULL, 'spesifikasi', 'kode', 'lantai1-330.5-490.43333435058594', '2', 'Hasil Typing Test.PNG', NULL, NULL, 'kemahasiswaan', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-11 07:21:33', '2022-09-11 07:21:33'),
(24, 'Aset Sekretariat 0', NULL, 'spesifikasi', 'kode', 'lantai1-440.5-138.43333435058594', '3', '1.PNG', NULL, NULL, 'sekretariat', NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2022-09-21 02:26:01', '2022-09-21 02:26:01');

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2022_08_07_234616_create_asets_table', 2),
(11, '2022_09_01_084417_create_peminjamen_table', 3);

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
-- Table structure for table `peminjaman`
--

CREATE TABLE `peminjaman` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nim` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `aset_id` bigint(20) UNSIGNED NOT NULL,
  `tanggal` date NOT NULL,
  `waktu` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` enum('menunggu','diterima','ditolak') COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `peminjaman`
--

INSERT INTO `peminjaman` (`id`, `nama`, `unit`, `nim`, `email`, `aset_id`, `tanggal`, `waktu`, `status`, `created_at`, `updated_at`) VALUES
(2, 'M. Bagas Setia', 'Unit 3', '10104019', 'bagassetia271@gmail.com', 20, '2022-09-07', '1 hari', 'diterima', '2022-09-06 00:00:19', '2022-09-06 00:34:32'),
(3, 'M. Bagas Setia', 'Unit 3', '10104019', 'bagassetia271@gmail.com', 20, '2022-09-07', '1 hari', 'menunggu', '2022-09-06 00:00:19', '2022-09-06 00:34:32'),
(4, 'M. Bagas Setia', 'Unit 3', '10104019', 'bagassetia271@gmail.com', 20, '2022-09-08', '1 hari', 'menunggu', '2022-09-06 00:00:19', '2022-09-06 00:34:32'),
(5, 'M. Bagas Setia', 'Unit 3', '10104019', 'bagassetia271@gmail.com', 20, '2022-09-08', '1 hari', 'menunggu', '2022-09-06 00:00:19', '2022-09-06 00:34:32'),
(6, 'M. Bagas Setia', 'Unit 3', '10104019', 'bagassetia271@gmail.com', 20, '2022-09-09', '1 hari', 'menunggu', '2022-09-06 00:00:19', '2022-09-06 00:34:32');

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foto` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `role`, `foto`, `created_at`, `updated_at`) VALUES
(7, 'wadek edit', 'wadek@gmail.com', '$2y$10$/cl.19zQMwM9MU6h7qcT7em5E7yPqwhxJz7vYOXyrqB5uIWuwAObO', 'wadek', '1.PNG', NULL, '2022-08-08 17:39:50'),
(8, 'kaur_lab', 'kaur_lab@gmail.com', '$2y$10$QaBkp81NPQMMN4P0RmjTzeyQbFtXfawlSzSowV2C3ON9AvH5LXoMC', 'kaur_lab', 'printer.jpg', NULL, NULL),
(9, 'kaur', 'kaur@gmail.com', '$2y$10$vwP6myeT3M2mdpcW88TIDueoE8OooFf7Az5UFhHsViuWps02LCsHK', 'kaur', 'printer.jpg', NULL, NULL),
(10, 'staff', 'staff@gmail.com', '$2y$10$Lr6FN8oqdU1HuAhIrq4af.nVbkgch8gcS4DFsBtP1Ct.0mEL7evEe', 'staff', 'printer.jpg', NULL, NULL),
(11, 'laboran', 'laboran@gmail.com', '$2y$10$gNZ8DJr8LDd80uv/NQawYeFd8sMvuEDawnYzd4YAhwrjKgS973gz2', 'laboran', 'printer.jpg', NULL, NULL),
(13, 'M. Bagas Setia', 'bagassetia271@gmail.com', '$2y$10$AvWgHtUtZUtc/jjV6MyBw.3X4TXEIT/IWgjThK0kEGXiNWav7PEja', 'staff', '', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `aset`
--
ALTER TABLE `aset`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD PRIMARY KEY (`id`),
  ADD KEY `peminjaman_aset_id_foreign` (`aset_id`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

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
-- AUTO_INCREMENT for table `aset`
--
ALTER TABLE `aset`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `peminjaman`
--
ALTER TABLE `peminjaman`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `peminjaman`
--
ALTER TABLE `peminjaman`
  ADD CONSTRAINT `peminjaman_aset_id_foreign` FOREIGN KEY (`aset_id`) REFERENCES `aset` (`id`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
