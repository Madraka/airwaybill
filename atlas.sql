-- phpMyAdmin SQL Dump
-- version 5.0.4
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Apr 24, 2021 at 09:03 AM
-- Server version: 10.4.17-MariaDB
-- PHP Version: 7.2.34

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `atlas`
--

-- --------------------------------------------------------

--
-- Table structure for table `awbs`
--

CREATE TABLE `awbs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `awb_number` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT 0,
  `service_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

CREATE TABLE `countries` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `countries`
--

INSERT INTO `countries` (`id`, `name`, `slug`, `code`, `created_at`, `updated_at`) VALUES
(1, 'Nepal', 'nepal', 'NP', '2021-04-23 03:57:24', '2021-04-23 03:57:24');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` bigint(20) NOT NULL,
  `reference_no` bigint(20) NOT NULL,
  `user_id` bigint(20) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `address`, `phone`, `reference_no`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'new road', 1251442, 10, 2, '2021-04-23 03:34:54', '2021-04-23 03:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `c_m_s_services`
--

CREATE TABLE `c_m_s_services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `c_m_s_services`
--

INSERT INTO `c_m_s_services` (`id`, `order`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(3, 61, 'Courier Service', '1619202604dhl.png', 'Courier job description. Couriers are responsible for distributing packages and documents for institutions, businesses, government agencies, and individuals. They pick up documents and packages from customer´s offices or houses and then deliver them to final destinations within the same area.', '2021-04-23 12:36:37', '2021-04-23 12:45:04');

-- --------------------------------------------------------

--
-- Table structure for table `dimensions`
--

CREATE TABLE `dimensions` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `shipment_id` bigint(20) UNSIGNED NOT NULL,
  `length` smallint(6) NOT NULL,
  `breadth` smallint(6) NOT NULL,
  `height` smallint(6) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `manifests`
--

CREATE TABLE `manifests` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `flight_no` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2021_01_31_093111_create_user_roles_table', 1),
(5, '2021_02_17_173749_create_profiles_table', 1),
(6, '2021_02_17_173900_create_settings_table', 1),
(7, '2021_02_17_212558_create_services_table', 1),
(8, '2021_02_18_155423_create_countries_table', 1),
(9, '2021_02_19_163445_create_shipments_table', 1),
(10, '2021_02_19_164324_create_dimensions_table', 1),
(11, '2021_02_19_215404_create_manifests_table', 1),
(12, '2021_02_25_092951_alter_table_dimensions_with_column_change', 1),
(13, '2021_03_10_102732_create_awbs_table', 1),
(14, '2021_03_13_174452_create_customers_table', 1),
(15, '2021_03_24_165542_create_sliders_table', 1),
(16, '2021_03_24_173958_create_welcome_sections_table', 1),
(17, '2021_03_24_181058_create_c_m_s_services_table', 1),
(18, '2021_03_24_183029_create_pages_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `pages`
--

INSERT INTO `pages` (`id`, `title`, `slug`, `image`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Vel nostrud enim nis', 'vel-nostrud-enim-nis', '1619202179bak.jpeg', 'Perspiciatis sit d', '2021-04-23 12:37:59', '2021-04-23 12:37:59');

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
-- Table structure for table `profiles`
--

CREATE TABLE `profiles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `avatar` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `about` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `facebook` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `youtube` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `profiles`
--

INSERT INTO `profiles` (`id`, `avatar`, `user_id`, `about`, `facebook`, `youtube`, `created_at`, `updated_at`) VALUES
(1, '1619202300bak.jpeg', 1, 'Hey Bro', 'https://facebook.com', 'https://youtube.com', '2021-04-23 03:32:20', '2021-04-23 12:40:00'),
(2, 'uploads/avatars/male.jpg', 2, NULL, NULL, NULL, '2021-04-23 03:34:54', '2021-04-23 03:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `slug` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `name`, `slug`, `created_at`, `updated_at`) VALUES
(1, 'Express Document', 'express-document', '2021-04-23 03:32:21', '2021-04-23 03:32:21'),
(2, 'Express Parcel', 'express-parcel', '2021-04-23 03:32:21', '2021-04-23 03:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `favicon` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_logo` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `company_phone` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `company_mobile` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `copyright` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `favicon`, `company_name`, `company_logo`, `company_description`, `company_email`, `company_address`, `company_phone`, `company_mobile`, `copyright`, `created_at`, `updated_at`) VALUES
(1, '1619202509cosmio.png', 'Cosmio Infotech', '1619202509cosmio.png', 'cosmio info tech des', 'info@cosmiotech.com', 'Cosmio Infotech', '01-5100619', '+977-9843744484', 'Copyright © 2020 Cosmio Infotech. All Rights Reserved.', '2021-04-23 03:32:21', '2021-04-23 12:43:29');

-- --------------------------------------------------------

--
-- Table structure for table `shipments`
--

CREATE TABLE `shipments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `account_number` bigint(20) NOT NULL,
  `awb_no` bigint(20) NOT NULL DEFAULT 1,
  `customer_reference` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'pradhan',
  `service_id` bigint(20) UNSIGNED NOT NULL,
  `shipper_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'From',
  `shipper_contact_person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'State/Provience',
  `shipper_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shipper_postcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post/Zipcode',
  `receiver_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'To',
  `receiver_contact_person` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_state` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL COMMENT 'State/Provience',
  `receiver_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `receiver_postcode` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL COMMENT 'Post/Zipcode',
  `goods_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `declared_value_for_custom` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `pieces` smallint(6) NOT NULL,
  `kilograms` smallint(6) NOT NULL,
  `grams` smallint(6) NOT NULL,
  `manifest` tinyint(4) NOT NULL DEFAULT 0 COMMENT '1=created manifest',
  `manifest_id` tinyint(4) NOT NULL DEFAULT 0,
  `customer_id` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shipments`
--

INSERT INTO `shipments` (`id`, `account_number`, `awb_no`, `customer_reference`, `service_id`, `shipper_name`, `shipper_contact_person`, `shipper_address`, `shipper_city`, `shipper_state`, `shipper_country`, `shipper_phone`, `shipper_postcode`, `receiver_name`, `receiver_contact_person`, `receiver_address`, `receiver_city`, `receiver_state`, `receiver_country`, `receiver_phone`, `receiver_postcode`, `goods_description`, `declared_value_for_custom`, `pieces`, `kilograms`, `grams`, `manifest`, `manifest_id`, `customer_id`, `created_at`, `updated_at`) VALUES
(12, 12345, 36, 'Deserunt quaerat Nam', 2, 'Lester Avery', 'Josiah Serrano', 'Iure consectetur inv', 'Dolores aspernatur l', 'Error ullamco maxime', '1', '+1 (386) 677-5595', '36253', 'Abraham Vasquez', 'Xandra Hancock', 'Modi minim sit exce', 'Cum deserunt ratione', 'Suscipit cupidatat p', '1', '+1 (924) 441-2227', '42250', 'Velit non officiis a', '64', 79, 27, 97, 0, 0, 1, '2021-04-23 11:44:33', '2021-04-23 11:44:33'),
(13, 12345, 96, 'Et aliquip eu obcaec', 1, 'Urielle Clements', 'Portia Smith', 'Dicta fugit ut dolo', 'Qui provident lauda', 'Impedit consequat', '1', '+1 (604) 633-9128', '34067', 'Tatiana Price', 'Xander Logan', 'Accusantium a ullamc', 'Iusto irure similiqu', 'Ipsum deserunt opti', '1', '+1 (575) 458-9212', '41665', 'Nemo autem nisi quae', '66', 66, 35, 63, 0, 0, 1, '2021-04-23 11:44:44', '2021-04-23 11:44:44');

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

CREATE TABLE `sliders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order` int(11) NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `order`, `title`, `image`, `description`, `created_at`, `updated_at`) VALUES
(1, 23, 'Welcome', '1619201970123.jpg', 'You are welcome here', '2021-04-23 12:12:30', '2021-04-23 12:34:30');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role_id` tinyint(4) NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role_id`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ramey', 'info@cosmioinfotech.com', NULL, '$2y$10$ueZIGzIVEDSjx4plel1YkeiKyaSU.ugczORozdivskDAKw2cCIb4K', 1, NULL, '2021-04-23 03:32:20', '2021-04-23 12:40:00'),
(2, 'sam', 'sam@ac.com', NULL, '$2y$10$s1IgD.rgF0al9d3hzphKru.VP.4Ih4G2w7CrHRa/.JWuXAB/5eSlS', 3, NULL, '2021-04-23 03:34:54', '2021-04-23 03:34:54');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2021-04-23 03:32:21', '2021-04-23 03:32:21'),
(2, 'staff', '2021-04-23 03:32:21', '2021-04-23 03:32:21'),
(3, 'customer', '2021-04-23 03:32:21', '2021-04-23 03:32:21');

-- --------------------------------------------------------

--
-- Table structure for table `welcome_sections`
--

CREATE TABLE `welcome_sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `welcome_sections`
--

INSERT INTO `welcome_sections` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
(2, 'Airway Bill- Buddha Air Cargo Pvt Ltd', 'We make you happy !!!', '2021-04-23 12:12:02', '2021-04-23 12:35:30');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `awbs`
--
ALTER TABLE `awbs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `countries`
--
ALTER TABLE `countries`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `countries_name_unique` (`name`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `c_m_s_services`
--
ALTER TABLE `c_m_s_services`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `dimensions`
--
ALTER TABLE `dimensions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `dimensions_shipment_id_foreign` (`shipment_id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `manifests`
--
ALTER TABLE `manifests`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `profiles`
--
ALTER TABLE `profiles`
  ADD PRIMARY KEY (`id`),
  ADD KEY `profiles_user_id_foreign` (`user_id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `services_name_unique` (`name`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shipments`
--
ALTER TABLE `shipments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `shipments_service_id_foreign` (`service_id`);

--
-- Indexes for table `sliders`
--
ALTER TABLE `sliders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `welcome_sections`
--
ALTER TABLE `welcome_sections`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `awbs`
--
ALTER TABLE `awbs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `countries`
--
ALTER TABLE `countries`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `c_m_s_services`
--
ALTER TABLE `c_m_s_services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `dimensions`
--
ALTER TABLE `dimensions`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `manifests`
--
ALTER TABLE `manifests`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `profiles`
--
ALTER TABLE `profiles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `shipments`
--
ALTER TABLE `shipments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `sliders`
--
ALTER TABLE `sliders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `welcome_sections`
--
ALTER TABLE `welcome_sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `dimensions`
--
ALTER TABLE `dimensions`
  ADD CONSTRAINT `dimensions_shipment_id_foreign` FOREIGN KEY (`shipment_id`) REFERENCES `shipments` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `profiles`
--
ALTER TABLE `profiles`
  ADD CONSTRAINT `profiles_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `shipments`
--
ALTER TABLE `shipments`
  ADD CONSTRAINT `shipments_service_id_foreign` FOREIGN KEY (`service_id`) REFERENCES `services` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
