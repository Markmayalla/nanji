-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 29, 2019 at 01:57 PM
-- Server version: 10.4.6-MariaDB
-- PHP Version: 7.3.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `nanji`
--
CREATE DATABASE IF NOT EXISTS `nanji` DEFAULT CHARACTER SET latin1 COLLATE latin1_swedish_ci;
USE `nanji`;

-- --------------------------------------------------------

--
-- Table structure for table `buses`
--

CREATE TABLE `buses` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `model_id` bigint(20) UNSIGNED NOT NULL,
  `type_id` bigint(20) UNSIGNED NOT NULL,
  `floor_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` mediumtext COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `passanger_from` int(11) NOT NULL DEFAULT 0,
  `passanger_to` int(11) NOT NULL DEFAULT 0,
  `seat_from` int(11) NOT NULL DEFAULT 0,
  `seat_to` int(11) NOT NULL DEFAULT 0,
  `no_of_door` int(11) NOT NULL DEFAULT 1,
  `big_descriptioin` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `body_type` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wheel_formular` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `drive_wheel` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `dimensions` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `curb` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `weight` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_axle` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `main_bridge` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `front_suspension` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rear_suspension` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `steering` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `brake_system` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `climate` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `engine` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `transmission` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tires` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `buses`
--

INSERT INTO `buses` (`id`, `brand_id`, `model_id`, `type_id`, `floor_id`, `title`, `description`, `passanger_from`, `passanger_to`, `seat_from`, `seat_to`, `no_of_door`, `big_descriptioin`, `body_type`, `wheel_formular`, `drive_wheel`, `dimensions`, `curb`, `weight`, `front_axle`, `main_bridge`, `front_suspension`, `rear_suspension`, `steering`, `brake_system`, `climate`, `engine`, `transmission`, `tires`, `created_at`, `updated_at`) VALUES
(1, 1, 1, 1, 1, 'Bus 1', 'Desc 1', 53, 63, 25, 30, 2, 'Big desc 1', 'Body', '200', '200', '200', '3000', '3000', '3000', '3000', '3000', '3000', '3000', '3000', '3000', '3000', '3000', '4000', '2019-09-27 21:20:11', NULL),
(2, 1, 1, 1, 1, 'Bus 2', 'buses info', 40, 40, 40, 40, 2, 'big info', 'body type', '2000', '2000', '2000', '2000', '3000', '2000', '20000', '2000', '20000', '20000', '2000', '2000', '2000', '200', '2000', '2019-09-28 06:04:03', '2019-09-28 06:04:03'),
(3, 1, 1, 1, 1, 'Bus 3', 'buses info', 40, 40, 40, 50, 50, 'This is the place to say everything you want to say to the world the choice is yours describe your property to the extent that you think they understood you!!', 'body type', '2000', '2000', '2000', '2000', '3000', '2000', '20000', '2000', '20000', '20000', '2000', '2000', '2000', '200', '2000', '2019-09-28 06:10:03', '2019-09-28 12:30:28'),
(4, 1, 1, 1, 1, 'Bus Edited', 'This is many many info aout this car', 40, 40, 40, 50, 50, 'This is the place to say everything you want to say to the world the choice is yours describe your property to the extent that you think they understood you!!', 'body type', '2000', '2000', '2000', '2000', '3000', '2000', '20000', '2000', '20000', '20000', '2000', '2000', '2000', '200', '2000', '2019-09-28 06:17:02', '2019-09-28 12:25:02'),
(5, 2, 2, 2, 2, 'Bus 9', 'buses info 6', 40, 45, 25, 28, 3, 'No, one will refuse the offer', 'body type', '2000', '2000', '2000', '2000', '3000', '2000', '20000', '2000', '20000', '20000', '2000', '2000', '2000', '200', '2000', '2019-09-28 13:18:03', '2019-09-28 13:18:03'),
(6, 2, 2, 2, 1, 'Bus 2', 'Japanies Car', 40, 40, 40, 40, 50, 'sd;fl,sdf,sdfl,sd;fmsd sd;flsdlf sdp;f sdlf sd; fdls fpsd f;lsd', 'body type', '2000', '2000', '2000', '2000', '55', '2000', '20000', '2000', '20000', '20000', '2000', '2000', '2000', '200', '2000', '2019-09-28 13:21:08', '2019-09-28 13:21:08'),
(7, 2, 2, 2, 1, 'Bus 2', 'Japanies Car', 40, 40, 40, 40, 50, 'sd;fl,sdf,sdfl,sd;fmsd sd;flsdlf sdp;f sdlf sd; fdls fpsd f;lsd', 'body type', '2000', '2000', '2000', '2000', '55', '2000', '20000', '2000', '20000', '20000', '2000', '2000', '2000', '200', '2000', '2019-09-28 13:27:33', '2019-09-28 13:27:33'),
(8, 1, 1, 1, 1, 'Bus 2', 'buses info', 40, 40, 40, 40, 2, 'm l,lklmlkm', 'body type', '2000', '2000', '2000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-28 13:31:29', '2019-09-28 13:31:29'),
(9, 1, 1, 1, 1, 'Bus 2', 'buses info', 40, 40, 40, 40, 2, 'm l,lklmlkm', 'body type', '2000', '2000', '2000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-28 13:31:57', '2019-09-28 13:31:57'),
(10, 1, 1, 1, 1, 'Bus 2', 'buses info', 40, 40, 40, 40, 2, 'm l,lklmlkm', 'body type', '2000', '2000', '2000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-28 13:34:58', '2019-09-28 13:34:58'),
(11, 1, 1, 1, 1, 'Lodged Today', 'Japanies Car', 40, 40, 40, 40, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-28 13:44:38', '2019-09-28 13:44:38'),
(12, 1, 1, 1, 1, 'Bus 2', 'Good Product', 40, 40, 25, 28, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-28 13:55:02', '2019-09-28 13:55:02'),
(13, 1, 1, 1, 1, 'Bus 2', 'Good Product', 40, 40, 25, 28, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-28 14:00:55', '2019-09-28 14:00:55'),
(14, 1, 1, 1, 1, 'Bus 2', 'Good Product', 40, 40, 25, 28, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-28 14:02:15', '2019-09-28 14:02:15'),
(15, 1, 1, 1, 1, 'Bus 2', 'Good Product', 40, 40, 25, 28, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-28 14:02:56', '2019-09-28 14:02:56'),
(16, 1, 1, 1, 1, 'Bus 2', 'Good Product', 40, 40, 25, 28, 2, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-28 14:03:21', '2019-09-28 14:03:21'),
(17, 1, 1, 1, 1, 'Bus 2', 'buses info', 40, 45, 40, 28, 2, 'kjnbkjbj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-29 04:46:49', '2019-09-29 04:46:49'),
(18, 1, 1, 1, 1, 'Bus 2', 'buses info', 40, 45, 40, 28, 2, 'kjnbkjbj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-29 05:17:06', '2019-09-29 05:17:06'),
(19, 1, 1, 1, 1, 'Bus 2', 'buses info', 40, 45, 40, 28, 2, 'kjnbkjbj', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-29 05:21:57', '2019-09-29 05:21:57'),
(20, 1, 1, 1, 1, 'Volgabus', 'Mini description', 40, 45, 40, 40, 2, 'aiasbudu siadbuiasdiasubd sidbasif asifbasi fashif asio fas yufasifasjh fiasuofasjh fiasfjas yuf asfhasyu fas fuoasdflasd ofusdi feirvweui r7weywehr 7weouweg reo reyow gr7wyeb r8e gr8ie8 gsd8 iuds fusdufsdus ufuoes', 'body type', '2000', NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '2019-09-29 06:24:59', '2019-09-29 06:24:59');

-- --------------------------------------------------------

--
-- Table structure for table `bus_pictures`
--

CREATE TABLE `bus_pictures` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `bus_id` bigint(20) UNSIGNED NOT NULL,
  `picture` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `bus_pictures`
--

INSERT INTO `bus_pictures` (`id`, `bus_id`, `picture`, `created_at`, `updated_at`) VALUES
(1, 16, 'buses/20190928170321PIC0.jpg', '2019-09-28 14:03:21', '2019-09-28 14:03:21'),
(2, 19, 'buses/19/20190929082157PIC0.jpg', '2019-09-29 05:21:57', '2019-09-29 05:21:57'),
(3, 19, 'buses/19/20190929082157PIC1.jpeg', '2019-09-29 05:21:57', '2019-09-29 05:21:57'),
(4, 19, 'buses/19/20190929082157PIC2.jpg', '2019-09-29 05:21:57', '2019-09-29 05:21:57'),
(5, 19, 'buses/19/20190929082157PIC3.jpeg', '2019-09-29 05:21:58', '2019-09-29 05:21:58'),
(6, 19, 'buses/19/20190929082157PIC4.jpeg', '2019-09-29 05:21:58', '2019-09-29 05:21:58'),
(7, 20, 'buses/20/20190929092459PIC0.jpg', '2019-09-29 06:25:00', '2019-09-29 06:25:00'),
(8, 20, 'buses/20/20190929092459PIC1.jpg', '2019-09-29 06:25:00', '2019-09-29 06:25:00'),
(9, 20, 'buses/20/20190929092459PIC2.jpg', '2019-09-29 06:25:00', '2019-09-29 06:25:00'),
(10, 20, 'buses/20/20190929092459PIC3.jpg', '2019-09-29 06:25:02', '2019-09-29 06:25:02');

-- --------------------------------------------------------

--
-- Table structure for table `floors`
--

CREATE TABLE `floors` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `floors`
--

INSERT INTO `floors` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Low level 24', '2019-09-27 21:17:03', '2019-09-28 11:47:11'),
(2, 'High level', '2019-09-28 11:45:56', '2019-09-28 11:45:56');

-- --------------------------------------------------------

--
-- Table structure for table `makes`
--

CREATE TABLE `makes` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `makes`
--

INSERT INTO `makes` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'subaru', 'Japanies Car Thank to your all', '2019-09-27 21:16:11', '2019-09-28 11:58:56'),
(2, 'Toyota', 'World leading industries', '2019-09-28 12:00:22', '2019-09-28 12:00:22');

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
(3, '2019_07_18_124301_create_makes', 1),
(4, '2019_07_18_124630_create_models', 1),
(5, '2019_09_27_081720_create_types', 1),
(6, '2019_09_27_081736_create_floors', 1),
(7, '2019_09_27_081750_create_buses', 1),
(8, '2019_09_27_081801_create_bus_pictures', 1),
(9, '2019_09_27_083543_create_roles_table', 2),
(10, '2019_09_27_083737_system_function', 3),
(11, '2019_09_27_083753_user_roles', 3);

-- --------------------------------------------------------

--
-- Table structure for table `models`
--

CREATE TABLE `models` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `models`
--

INSERT INTO `models` (`id`, `brand_id`, `name`, `created_at`, `updated_at`) VALUES
(1, 1, 'Levorg', '2019-09-27 21:16:31', NULL),
(2, 2, 'IST', '2019-09-28 12:10:42', '2019-09-28 12:10:42');

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
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `role_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role_name`, `created_at`, `updated_at`) VALUES
(1, 'admin', '2019-09-26 21:00:00', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `system_function`
--

CREATE TABLE `system_function` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `function_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `system_function`
--

INSERT INTO `system_function` (`id`, `function_name`, `created_at`, `updated_at`) VALUES
(1, 'roles_settings', '2019-09-26 21:00:00', NULL),
(2, 'bus.index', '2019-09-27 21:13:08', NULL),
(3, 'bus.edit', '2019-09-27 21:13:08', NULL),
(4, 'bus.create', '2019-09-27 21:13:08', NULL),
(5, 'bus.list', '2019-09-28 10:24:23', NULL),
(6, 'floor.index', '2019-09-27 21:13:08', NULL),
(7, 'floor.edit', '2019-09-27 21:13:08', NULL),
(8, 'floor.create', '2019-09-27 21:13:08', NULL),
(9, 'brand.index', '2019-09-27 21:13:08', NULL),
(10, 'brand.edit', '2019-09-27 21:13:08', NULL),
(11, 'brand.create', '2019-09-27 21:13:08', NULL),
(12, 'model.index', '2019-09-27 21:13:08', NULL),
(13, 'model.edit', '2019-09-27 21:13:08', NULL),
(14, 'model.create', '2019-09-27 21:13:08', NULL),
(15, 'type.index', '2019-09-27 21:13:08', NULL),
(16, 'type.edit', '2019-09-27 21:13:08', NULL),
(17, 'type.create', '2019-09-27 21:13:08', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `types`
--

CREATE TABLE `types` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `types`
--

INSERT INTO `types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'level 3', '2019-09-27 21:17:58', '2019-09-28 12:19:49'),
(2, 'Edited', '2019-09-28 12:20:07', '2019-09-28 12:20:22');

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
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `roles` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT 'user',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `roles`, `created_at`, `updated_at`) VALUES
(1, 'Hemedi', 'hmanyinja@gmail.com', NULL, '$2y$10$O4Y7dI8lglHiUcm4CLgBM.1d9/k1tNilEhb7ayNxCElH3LhCwP4Sy', 'gc3tv6fA6wO0ON9zdyglggSjFMJCYJgnuKVpq8b6iQ5RwdYcE6DDIE4BXIN2', 'admin', '2019-09-27 07:18:58', '2019-09-27 07:18:58');

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `rid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `role` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `function_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `rid`, `role`, `function_name`, `status`, `created_at`, `updated_at`) VALUES
(1, 'roles_settings-admin', 'admin', 'roles_settings', '1', '2019-09-26 21:00:00', '2019-09-27 08:37:52'),
(5, 'bus.index-admin', 'admin', 'bus.index', '1', '2019-09-28 03:51:31', '2019-09-28 03:51:31'),
(6, 'bus.edit-admin', 'admin', 'bus.edit', '1', '2019-09-28 03:51:32', '2019-09-28 03:51:32'),
(7, 'bus.create-admin', 'admin', 'bus.create', '1', '2019-09-28 03:51:34', '2019-09-28 03:51:34'),
(8, 'bus.list-admin', 'admin', 'bus.list', '1', '2019-09-28 07:24:34', '2019-09-28 07:24:34'),
(9, 'floor.index-admin', 'admin', 'floor.index', '1', '2019-09-28 11:43:31', '2019-09-28 11:43:31'),
(10, 'floor.edit-admin', 'admin', 'floor.edit', '1', '2019-09-28 11:43:32', '2019-09-28 11:43:32'),
(11, 'floor.create-admin', 'admin', 'floor.create', '1', '2019-09-28 11:45:45', '2019-09-28 11:45:45'),
(12, 'brand.index-admin', 'admin', 'brand.index', '1', '2019-09-28 11:55:20', '2019-09-28 11:55:20'),
(13, 'brand.edit-admin', 'admin', 'brand.edit', '1', '2019-09-28 11:55:21', '2019-09-28 11:55:21'),
(14, 'brand.create-admin', 'admin', 'brand.create', '1', '2019-09-28 11:55:23', '2019-09-28 11:55:23'),
(15, 'model.edit-admin', 'admin', 'model.edit', '1', '2019-09-28 12:08:50', '2019-09-28 12:08:50'),
(16, 'model.create-admin', 'admin', 'model.create', '1', '2019-09-28 12:08:51', '2019-09-28 12:08:51'),
(17, 'model.index-admin', 'admin', 'model.index', '1', '2019-09-28 12:08:53', '2019-09-28 12:08:53'),
(18, 'type.create-admin', 'admin', 'type.create', '1', '2019-09-28 12:19:12', '2019-09-28 12:19:12'),
(19, 'type.index-admin', 'admin', 'type.index', '1', '2019-09-28 12:19:14', '2019-09-28 12:19:14'),
(20, 'type.edit-admin', 'admin', 'type.edit', '1', '2019-09-28 12:19:15', '2019-09-28 12:19:15');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `buses`
--
ALTER TABLE `buses`
  ADD PRIMARY KEY (`id`),
  ADD KEY `buses_brand_id_foreign` (`brand_id`),
  ADD KEY `buses_model_id_foreign` (`model_id`),
  ADD KEY `buses_type_id_foreign` (`type_id`),
  ADD KEY `buses_floor_id_foreign` (`floor_id`);

--
-- Indexes for table `bus_pictures`
--
ALTER TABLE `bus_pictures`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bus_pictures_bus_id_foreign` (`bus_id`);

--
-- Indexes for table `floors`
--
ALTER TABLE `floors`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `makes`
--
ALTER TABLE `makes`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `models`
--
ALTER TABLE `models`
  ADD PRIMARY KEY (`id`),
  ADD KEY `models_brand_id_foreign` (`brand_id`);

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
-- Indexes for table `system_function`
--
ALTER TABLE `system_function`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `types`
--
ALTER TABLE `types`
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
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `buses`
--
ALTER TABLE `buses`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `bus_pictures`
--
ALTER TABLE `bus_pictures`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `floors`
--
ALTER TABLE `floors`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `makes`
--
ALTER TABLE `makes`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `models`
--
ALTER TABLE `models`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `system_function`
--
ALTER TABLE `system_function`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `types`
--
ALTER TABLE `types`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `buses`
--
ALTER TABLE `buses`
  ADD CONSTRAINT `buses_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `makes` (`id`),
  ADD CONSTRAINT `buses_floor_id_foreign` FOREIGN KEY (`floor_id`) REFERENCES `floors` (`id`),
  ADD CONSTRAINT `buses_model_id_foreign` FOREIGN KEY (`model_id`) REFERENCES `models` (`id`),
  ADD CONSTRAINT `buses_type_id_foreign` FOREIGN KEY (`type_id`) REFERENCES `types` (`id`);

--
-- Constraints for table `bus_pictures`
--
ALTER TABLE `bus_pictures`
  ADD CONSTRAINT `bus_pictures_bus_id_foreign` FOREIGN KEY (`bus_id`) REFERENCES `buses` (`id`);

--
-- Constraints for table `models`
--
ALTER TABLE `models`
  ADD CONSTRAINT `models_brand_id_foreign` FOREIGN KEY (`brand_id`) REFERENCES `makes` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
