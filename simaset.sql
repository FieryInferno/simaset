-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 05, 2022 at 08:07 PM
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
  `unit` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
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
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `aset`
--

INSERT INTO `aset` (`id`, `nama`, `unit`, `spesifikasi`, `kode`, `lokasi`, `jumlah`, `gambar`, `tanggal`, `keterangan`, `klasifikasi`, `tipe`, `perkiraan_biaya`, `kondisi`, `proses`, `status_kaur`, `status`, `created_at`, `updated_at`) VALUES
(2, 'Seagate 27 edit', 'Unit 1', 'kecepatan transfer data yang tinggi dengan antarmuka USB 3.0 dengan menyambungkan ke port USB 3.0 SuperSpeed. USB 3.0 juga kompatibel dengan USB 2.0 untuk kompatibilitas sistem tambahan edit', 'Harddisk edit', 'lantai1-338.5-146.43333435058594', '1', 'Capture.PNG', NULL, NULL, 'sekretariat', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-08 18:50:16', '2022-08-08 19:37:57'),
(3, 'Epson DS-410', 'Unit 2', 'Take your business productivity and effi ciency to the next level with Epson WorkForce DS-410 scanner. Featuring a built-in Automatic Document Feeder, this compact scanner can easily scan stacks of business cards and documents of up to A3 size.', 'Printer', 'lantai7-382.5-194.43333435058594', '1', 'printer.jpg', NULL, NULL, 'sekretariat', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-08 18:50:16', '2022-08-08 18:50:16'),
(4, 'Logitech', 'Unit 3', NULL, NULL, NULL, '1', 'printer.jpg', '2021-05-17', 'keterangan', 'sekretariat', 'pengadaan', NULL, NULL, NULL, NULL, 'diterima', '2022-08-08 18:50:16', '2022-08-28 21:24:00'),
(5, 'HP', 'Unit 4', NULL, 'PC', 'lantai9-221.5-111.43333435058594', '1', 'printer.jpg', '2021-01-31', NULL, 'sekretariat', 'maintenance', 90000, 'kondisi', 'Perbaikan', 'diterima', 'diterima', '2022-08-08 18:50:16', '2022-08-28 21:38:51'),
(6, 'test', 'Unit 1', 'test', 'test', 'lantai5-312.5-205.43333435058594', '1', 'Hasil Typing Test.PNG', '0000-00-00', NULL, 'sekretariat', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-08 18:50:16', '2022-08-08 18:50:16'),
(8, 'test', 'Unit 5', NULL, NULL, NULL, '1', '1.PNG', '2022-07-01', 'test', 'sekretariat', 'pengadaan', NULL, NULL, NULL, NULL, 'menunggu_diterima', '2022-08-08 21:35:36', '2022-08-08 21:50:42'),
(11, 'Aset laboratorium', 'Unit 3', 'spesifikasi', '001923', 'lantai7-382.5-194.43333435058594', '3', 'env.PNG', NULL, NULL, 'laboratorium', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-28 19:32:14', '2022-08-28 19:32:14'),
(12, 'Pengajuan maintenance aset', 'Unit 2', NULL, 'pma', 'lantai8-215.5-120.43333435058594', '1', '1.PNG', '2022-08-29', NULL, 'sekretariat', 'maintenance', 1000000, 'kondisi', 'Perawatan', NULL, 'menunggu_diterima', '2022-08-28 20:44:54', '2022-08-28 20:44:54'),
(13, 'Komputer', 'Unit 2', 'ram 4 Gb', 'HP', 'lantai6-294.5-68.43333435058594', '1', '1.PNG', NULL, NULL, 'sekretariat', NULL, NULL, NULL, NULL, NULL, NULL, '2022-08-31 06:39:29', '2022-08-31 06:41:41'),
(16, 'test', 'Unit 4', NULL, 'test', 'lantai1-547.5-489.43333435058594', '1', NULL, '2022-08-24', NULL, 'sekretariat', 'penghapusan', NULL, NULL, NULL, NULL, NULL, '2022-08-31 07:53:58', '2022-08-31 07:53:58'),
(17, 'Maintenance Aset', 'Unit 1', NULL, 'kode', 'lantai1-338.5-146.43333435058594', '1', 'env.PNG', '2022-10-05', NULL, 'sekretariat', 'maintenance', 1000000, 'kondisi', 'Perawatan', NULL, 'menunggu_diterima', '2022-09-05 10:47:10', '2022-09-05 10:47:10');

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

INSERT INTO `peminjaman` (`id`, `nama`, `nim`, `email`, `aset_id`, `tanggal`, `waktu`, `status`, `created_at`, `updated_at`) VALUES
(1, 'M. Bagas Setia Permana', '10104019', 'bagassetia271@gmail.com', 2, '2022-09-01', '5 hari', 'menunggu', '2022-09-01 03:24:31', '2022-09-01 03:24:31');

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

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
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

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
