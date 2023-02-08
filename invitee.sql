-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: db
-- Generation Time: Feb 08, 2023 at 02:09 PM
-- Server version: 10.5.19-MariaDB-1:10.5.19+maria~ubu2004
-- PHP Version: 8.0.27

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `invitee`
--

-- --------------------------------------------------------

--
-- Table structure for table `akses_menus`
--

CREATE TABLE `akses_menus` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paket_id` int(11) NOT NULL,
  `menu_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `akses_menus`
--

INSERT INTO `akses_menus` (`id`, `paket_id`, `menu_id`, `created_at`, `updated_at`) VALUES
(1, 3, 1, NULL, NULL),
(2, 3, 2, NULL, NULL),
(3, 3, 3, NULL, NULL),
(4, 3, 4, NULL, NULL),
(5, 3, 5, NULL, NULL),
(6, 3, 6, NULL, NULL),
(7, 3, 7, NULL, NULL),
(8, 1, 1, NULL, NULL),
(9, 1, 2, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `form`
--

CREATE TABLE `form` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_user` int(11) NOT NULL,
  `template_id` varchar(50) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `nama_panggilan_p` varchar(50) DEFAULT NULL,
  `nama_panggilan_w` varchar(50) DEFAULT NULL,
  `nama_lengkap_p` varchar(100) DEFAULT NULL,
  `nama_lengkap_w` varchar(100) DEFAULT NULL,
  `tentang_p` text DEFAULT NULL,
  `tentang_w` text DEFAULT NULL,
  `tgl_akad` varchar(255) DEFAULT NULL,
  `tgl_res` varchar(255) DEFAULT NULL,
  `mulai_akad` varchar(255) DEFAULT NULL,
  `selesai_akad` varchar(255) DEFAULT NULL,
  `mulai_res` varchar(255) DEFAULT NULL,
  `selesai_res` varchar(255) DEFAULT NULL,
  `tempat_akad` varchar(50) DEFAULT NULL,
  `tempat_res` varchar(50) DEFAULT NULL,
  `alamat_akad` varchar(50) DEFAULT NULL,
  `alamat_res` varchar(50) DEFAULT NULL,
  `nama_ortu_p_p` varchar(50) DEFAULT NULL,
  `nama_ortu_p_w` varchar(50) DEFAULT NULL,
  `nama_ortu_w_p` varchar(50) DEFAULT NULL,
  `nama_ortu_w_w` varchar(50) DEFAULT NULL,
  `link_loc` text DEFAULT NULL,
  `status_und` varchar(50) DEFAULT NULL,
  `foto_sampul` varchar(50) DEFAULT NULL,
  `foto_p` varchar(50) DEFAULT NULL,
  `foto_w` varchar(50) DEFAULT NULL,
  `is_create` int(11) NOT NULL,
  `is_active` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `form`
--

INSERT INTO `form` (`id`, `id_user`, `template_id`, `slug`, `nama_panggilan_p`, `nama_panggilan_w`, `nama_lengkap_p`, `nama_lengkap_w`, `tentang_p`, `tentang_w`, `tgl_akad`, `tgl_res`, `mulai_akad`, `selesai_akad`, `mulai_res`, `selesai_res`, `tempat_akad`, `tempat_res`, `alamat_akad`, `alamat_res`, `nama_ortu_p_p`, `nama_ortu_p_w`, `nama_ortu_w_p`, `nama_ortu_w_w`, `link_loc`, `status_und`, `foto_sampul`, `foto_p`, `foto_w`, `is_create`, `is_active`, `created_at`, `updated_at`) VALUES
(1, 2, '2', 'firman-ainun', 'firmans', 'ainun', 'Achmad Firman Maulana S.Kom', 'Ainun Nisa Solehah S.Pd', 'tentang firman', 'tentang inun', '07/29/2021', '07/29/2021', '08.00', '09.00', '10.00', '20.00', 'ciledug', 'ciledug', 'Karang Tengah', 'Karang Tengah', 'tes', 'test', 'test', 'test', '<iframe style=\'border:0; width: 100%; height: 350px;\' src=\'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.3500066671977!2d106.71086611531906!3d-6.217490362629765!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f9a67faeec89%3A0xd126cd6dc8778ea!2sTK%20Darul%20Sultan!5e0!3m2!1sid!2sid!4v1629488175603!5m2!1sid!2sid\' width=\'600\' height=\'450\' style=\'border:0;\' allowfullscreen=\'\' loading=\'lazy\'></iframe>', 'publik', '10.jpeg', 'pria.png', 'wanita.png', 1, 1, '2023-02-08 13:18:57', '2023-02-08 14:02:53');

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `form_id` int(11) NOT NULL,
  `foto_gallery` varchar(100) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `menu_template`
--

CREATE TABLE `menu_template` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `paket_id` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `nama_menu` varchar(50) NOT NULL,
  `nama_template` varchar(50) NOT NULL,
  `icon` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `menu_template`
--

INSERT INTO `menu_template` (`id`, `paket_id`, `slug`, `nama_menu`, `nama_template`, `icon`, `created_at`, `updated_at`) VALUES
(1, 3, 'hero', 'hero', 'hero', '', NULL, NULL),
(2, 3, 'menu', 'menu', 'menu', '', NULL, NULL),
(3, 3, 'gallery', 'gallery', 'gallery', '', NULL, NULL),
(4, 3, 'about', 'about', 'about', '', NULL, NULL),
(5, 3, 'count', 'count', 'count', '', NULL, NULL),
(6, 3, 'contact', 'contact', 'contact', '', NULL, NULL),
(7, 3, 'events', 'events', 'events', '', NULL, NULL);

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2021_07_25_161324_create_forms_table', 1),
(4, '2021_07_25_172956_create_undangans_table', 1),
(5, '2021_08_09_154923_create_ucapans_table', 1),
(6, '2021_08_10_173954_create_galleries_table', 1),
(7, '2021_08_16_091128_create_pakets_table', 1),
(8, '2021_08_16_104529_create_roles_table', 1),
(9, '2021_08_20_203755_create_menu_templates_table', 1),
(10, '2021_08_22_021524_create_templates_table', 1),
(11, '2021_08_23_083815_create_akses_menus_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `paket`
--

CREATE TABLE `paket` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_paket` varchar(30) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `paket`
--

INSERT INTO `paket` (`id`, `nama_paket`, `created_at`, `updated_at`) VALUES
(1, 'gratis', '2023-02-08 13:18:57', '2023-02-08 13:18:57'),
(2, 'entry', '2023-02-08 13:18:57', '2023-02-08 13:18:57'),
(3, 'pro', '2023-02-08 13:18:57', '2023-02-08 13:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2023-02-08 13:18:57', '2023-02-08 13:18:57'),
(2, 'user', '2023-02-08 13:18:57', '2023-02-08 13:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `template`
--

CREATE TABLE `template` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_template` varchar(50) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `ucapan`
--

CREATE TABLE `ucapan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `id_form` int(11) NOT NULL,
  `slug` varchar(50) NOT NULL,
  `nama` varchar(100) NOT NULL,
  `ucapan` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `undangan`
--

CREATE TABLE `undangan` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `nama_template` varchar(255) NOT NULL,
  `slug` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `undangan`
--

INSERT INTO `undangan` (`id`, `nama_template`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'traditional', 'undangan.dua', NULL, NULL),
(2, 'love', 'undangan.satu', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `slug` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `is_new` int(11) NOT NULL,
  `id_paket` int(11) NOT NULL,
  `roles` int(11) NOT NULL,
  `template_id` int(11) NOT NULL,
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

INSERT INTO `users` (`id`, `slug`, `name`, `is_new`, `id_paket`, `roles`, `template_id`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'Administrator', 1, 3, 1, 2, 'administrator@mail.com', NULL, '$2y$10$agSXDetDzLF28UJyqEi2j.KWDi/bXdj1qLhNjLlHL5YNN1Z402vtS', NULL, '2023-02-08 13:18:57', '2023-02-08 14:00:20'),
(2, 'master', 'firman', 1, 3, 2, 2, 'master@mail.com', NULL, '$2y$10$GGDseFAHfXe9xRPCne1r4.RVRYDh8XXk2EJfzSeWajNw9NlcR38ae', NULL, '2023-02-08 13:18:57', '2023-02-08 14:08:48');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `akses_menus`
--
ALTER TABLE `akses_menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `form`
--
ALTER TABLE `form`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `form_slug_unique` (`slug`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_template`
--
ALTER TABLE `menu_template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `paket`
--
ALTER TABLE `paket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `template`
--
ALTER TABLE `template`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ucapan`
--
ALTER TABLE `ucapan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `undangan`
--
ALTER TABLE `undangan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_slug_unique` (`slug`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `akses_menus`
--
ALTER TABLE `akses_menus`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `form`
--
ALTER TABLE `form`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `menu_template`
--
ALTER TABLE `menu_template`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `paket`
--
ALTER TABLE `paket`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `template`
--
ALTER TABLE `template`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ucapan`
--
ALTER TABLE `ucapan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `undangan`
--
ALTER TABLE `undangan`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
