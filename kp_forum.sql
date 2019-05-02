-- phpMyAdmin SQL Dump
-- version 4.8.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Feb 04, 2019 at 05:14 AM
-- Server version: 10.1.35-MariaDB
-- PHP Version: 7.2.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `kp_forum`
--

-- --------------------------------------------------------

--
-- Table structure for table `beritas`
--

CREATE TABLE `beritas` (
  `berid` int(10) UNSIGNED NOT NULL,
  `berjud` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `beris` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `bergam` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `berauth` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `beritas`
--

INSERT INTO `beritas` (`berid`, `berjud`, `beris`, `bergam`, `berauth`, `created_at`, `updated_at`) VALUES
(2, 'ini', '<p>sindi putus dengan alwi</p>', 'BRM.png', 1, '2019-02-01 20:56:17', '2019-02-01 22:45:17'),
(3, 'kedua', '<p>sindi putus dengan sipit</p>', NULL, 1, '2019-02-01 21:21:32', '2019-02-01 21:21:32'),
(6, 'a', '<p>aa</p>', 'bukti.PNG', 1, '2019-02-01 22:37:35', '2019-02-01 22:37:35');

-- --------------------------------------------------------

--
-- Table structure for table `forums`
--

CREATE TABLE `forums` (
  `forid` int(10) UNSIGNED NOT NULL,
  `forjud` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `foris` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `forgam` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `forauth` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `forums`
--

INSERT INTO `forums` (`forid`, `forjud`, `foris`, `forgam`, `forauth`, `created_at`, `updated_at`) VALUES
(4, 'indi', '<p>sipit tercyduk selingkuh</p>', NULL, 1, '2019-02-02 20:29:22', '2019-02-02 20:29:22'),
(5, 'aku', '<p>gambar</p><p>&quot;</p>', 'Screenshot (3).png', 2, '2019-02-02 20:52:31', '2019-02-02 21:07:27'),
(8, 'a', '<p>a</p><p>&quot;</p><p>&quot;</p><p>&quot;</p>', 'Screenshot (4).png', 2, '2019-02-02 20:58:01', '2019-02-02 21:07:09');

-- --------------------------------------------------------

--
-- Table structure for table `komens`
--

CREATE TABLE `komens` (
  `komid` int(10) UNSIGNED NOT NULL,
  `komforid` int(10) UNSIGNED NOT NULL,
  `komis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `komauth` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `komens`
--

INSERT INTO `komens` (`komid`, `komforid`, `komis`, `komauth`, `created_at`, `updated_at`) VALUES
(5, 4, '<p>benaraaaaa??</p>', 1, '2019-02-02 20:36:26', '2019-02-02 20:47:52'),
(7, 4, '<p>alhamdulillah</p>', 2, '2019-02-02 20:50:43', '2019-02-02 20:50:43'),
(8, 8, '<p>test</p>', 2, '2019-02-02 21:03:29', '2019-02-02 21:03:29'),
(9, 5, '<p>wah<sup>sdgdfgdfgd</sup></p>', 1, '2019-02-03 21:10:16', '2019-02-03 21:10:16');

-- --------------------------------------------------------

--
-- Table structure for table `lokers`
--

CREATE TABLE `lokers` (
  `lokid` int(10) UNSIGNED NOT NULL,
  `lokjud` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokis` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `lokgam` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `lokauth` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `lokers`
--

INSERT INTO `lokers` (`lokid`, `lokjud`, `lokis`, `lokgam`, `lokauth`, `created_at`, `updated_at`) VALUES
(1, 'full stack developer', 'bisa semua bahasa', '', 1, '2019-02-01 17:00:00', NULL),
(5, 'gigoloo', '<ol><li>sipit</li><li>sipit</li><li>gendut</li></ol>', NULL, 2, '2019-02-01 22:26:32', '2019-02-01 22:26:32'),
(6, 'test', '<p>foto</p>', 'Pagu Add.png', 1, '2019-02-01 22:52:58', '2019-02-01 22:52:58');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_01_29_013408_create_beritas_table', 1),
(4, '2019_01_29_013839_create_lokers_table', 1),
(5, '2019_01_29_013921_create_profils_table', 1),
(6, '2019_02_02_132141_create_forums_table', 2),
(7, '2019_02_02_132300_create_komens_table', 2);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `profils`
--

CREATE TABLE `profils` (
  `id` int(10) UNSIGNED NOT NULL,
  `pronam` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pronv` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pronm` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `prolok` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profils`
--

INSERT INTO `profils` (`id`, `pronam`, `pronv`, `pronm`, `prolok`, `created_at`, `updated_at`) VALUES
(1, 'SMA PGRI Pekanbaru', '<ol><li style=\"text-align: center;\">Menjadi power ranger.<span class=\"fr-emoticon fr-deletable fr-emoticon-img\" style=\"background: url(https://cdnjs.cloudflare.com/ajax/libs/emojione/2.0.1/assets/svg/1f602.svg);\">&nbsp;</span>&nbsp;</li><li style=\"text-align: center;\">Menjadi pembela kebenaran.</li></ol>', '<ol><li style=\"text-align: center;\">pembela kebenaran</li></ol>', 'Jl. Brigjen Katamso No.46, Tengkerang Utara, Bukit Raya, Kota Pekanbaru, Riau 28126', NULL, '2019-02-01 20:25:43');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `nisn` bigint(20) DEFAULT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `alamat` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nohp` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `temker` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `level` enum('admin','alumni') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'admin',
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `nisn`, `name`, `alamat`, `nohp`, `status`, `temker`, `level`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, NULL, 'admin', NULL, NULL, NULL, NULL, 'admin', 'admin@gmail.com', NULL, '$2y$10$R3Sdz0HNNm29AhipqnemY..fN2lnbl7/HRsWxjtD4hPObNUXI4YEC', 'Xe1S4daoSds7qUyj7n3h5TH32q0ojFJKgDrxy8584S74ynanhQttfTVHe5Z8', '2019-01-28 19:05:07', '2019-01-28 19:05:07'),
(2, 1111, 'alumni212', 'disini', '022', 'single', 'Telkom', 'alumni', 'alumni1@gmail.com', NULL, '$2y$10$R3Sdz0HNNm29AhipqnemY..fN2lnbl7/HRsWxjtD4hPObNUXI4YEC', 'pz5NAbywURv8xaFCeK00gXuQL8FHcy6VggUwJ2kOY1l27e7kE8R4ZA2oVxrT', NULL, '2019-02-02 06:10:01');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `beritas`
--
ALTER TABLE `beritas`
  ADD PRIMARY KEY (`berid`);

--
-- Indexes for table `forums`
--
ALTER TABLE `forums`
  ADD PRIMARY KEY (`forid`);

--
-- Indexes for table `komens`
--
ALTER TABLE `komens`
  ADD PRIMARY KEY (`komid`),
  ADD KEY `komforid` (`komforid`);

--
-- Indexes for table `lokers`
--
ALTER TABLE `lokers`
  ADD PRIMARY KEY (`lokid`);

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
-- Indexes for table `profils`
--
ALTER TABLE `profils`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD UNIQUE KEY `users_nisn_unique` (`nisn`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `beritas`
--
ALTER TABLE `beritas`
  MODIFY `berid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `forums`
--
ALTER TABLE `forums`
  MODIFY `forid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `komens`
--
ALTER TABLE `komens`
  MODIFY `komid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `lokers`
--
ALTER TABLE `lokers`
  MODIFY `lokid` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `profils`
--
ALTER TABLE `profils`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `komens`
--
ALTER TABLE `komens`
  ADD CONSTRAINT `komens_ibfk_1` FOREIGN KEY (`komforid`) REFERENCES `forums` (`forid`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
