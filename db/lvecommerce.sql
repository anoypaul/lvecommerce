-- phpMyAdmin SQL Dump
-- version 5.1.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Jul 27, 2022 at 06:43 PM
-- Server version: 8.0.27
-- PHP Version: 7.4.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `lvecommerce`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

DROP TABLE IF EXISTS `admins`;
CREATE TABLE IF NOT EXISTS `admins` (
  `admins_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `admins_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admins_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admins_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `admins_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`admins_id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`admins_id`, `admins_email`, `admins_password`, `admins_name`, `admins_phone`, `created_at`, `updated_at`) VALUES
(1, 'admin@gmail.com', '827ccb0eea8a706c4c34a16891f84e7b', 'admin', '01510101010', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

DROP TABLE IF EXISTS `brands`;
CREATE TABLE IF NOT EXISTS `brands` (
  `brands_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `brands_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brands_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brands_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`brands_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`brands_id`, `brands_name`, `brands_description`, `brands_status`, `created_at`, `updated_at`) VALUES
(3, 'samsung', 'samsung brand', 1, '2022-07-23 21:03:00', '2022-07-23 21:03:00'),
(4, 'sony', 'sony brand', 1, '2022-07-23 21:03:20', '2022-07-23 21:03:20'),
(5, 'lenovo', 'lenovo brand', 1, '2022-07-23 21:03:39', '2022-07-23 21:03:39');

-- --------------------------------------------------------

--
-- Table structure for table `category_ms`
--

DROP TABLE IF EXISTS `category_ms`;
CREATE TABLE IF NOT EXISTS `category_ms` (
  `category_ms_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_ms_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_ms_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_ms_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_ms_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`category_ms_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `category_ms`
--

INSERT INTO `category_ms` (`category_ms_id`, `category_ms_name`, `category_ms_description`, `category_ms_image`, `category_ms_status`, `created_at`, `updated_at`) VALUES
(6, 'laptop', 'macbook laptop', '1658630434.jpg', 1, '2022-07-23 20:40:34', '2022-07-23 20:50:54'),
(5, 'mobile', 'mobile phone', '1658630407.jpg', 1, '2022-07-23 20:40:07', '2022-07-23 20:50:29'),
(7, 'camera', 'smart camera', '1658630456.jpg', 1, '2022-07-23 20:40:56', '2022-07-23 20:51:15');

-- --------------------------------------------------------

--
-- Table structure for table `colors`
--

DROP TABLE IF EXISTS `colors`;
CREATE TABLE IF NOT EXISTS `colors` (
  `colors_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `colors_color` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `colors_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`colors_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `colors`
--

INSERT INTO `colors` (`colors_id`, `colors_color`, `colors_status`, `created_at`, `updated_at`) VALUES
(2, '[\"red\",\" green\",\" blue\"]', 1, '2022-07-22 01:43:11', '2022-07-22 01:43:11');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

DROP TABLE IF EXISTS `customers`;
CREATE TABLE IF NOT EXISTS `customers` (
  `customers_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customers_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `customers_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`customers_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`customers_id`, `customers_name`, `customers_email`, `customers_password`, `customers_phone`, `created_at`, `updated_at`) VALUES
(1, 'shipon', 'shipon@gmail.com', '12345', '01710101010', NULL, NULL),
(2, 'ripon', 'ripon@gmail.com', '12345', '01720202020', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=18 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_07_19_065142_create_admins_table', 2),
(6, '2022_07_19_114836_create_category_ms_table', 3),
(7, '2022_07_21_031143_create_sub_categories_table', 4),
(8, '2022_07_21_112714_create_brands_table', 5),
(9, '2022_07_21_191216_create_units_table', 6),
(10, '2022_07_22_044703_create_sizes_table', 7),
(11, '2022_07_22_070627_create_colors_table', 8),
(12, '2022_07_22_164457_create_products_table', 9),
(13, '2022_07_25_165322_create_customers_table', 10),
(14, '2022_07_26_060253_create_shippings_table', 11),
(15, '2022_07_26_133125_create_payments_table', 12),
(16, '2022_07_26_140646_create_orders_table', 13),
(17, '2022_07_26_140714_create_order_details_table', 13);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
CREATE TABLE IF NOT EXISTS `orders` (
  `orders_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `customers_id` int NOT NULL,
  `shippings_id` int NOT NULL,
  `payments_id` int NOT NULL,
  `orders_total` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `orders_status` varchar(191) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`orders_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`orders_id`, `customers_id`, `shippings_id`, `payments_id`, `orders_total`, `orders_status`, `created_at`, `updated_at`) VALUES
(1, 1, 4, 3, '20000', 'pending', '2022-07-26 02:47:55', NULL),
(2, 1, 5, 5, '90000', 'pending', NULL, NULL),
(3, 1, 5, 6, '0', 'pending', NULL, NULL),
(4, 1, 6, 7, '50000', 'pending', NULL, NULL),
(5, 1, 7, 8, '50000', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

DROP TABLE IF EXISTS `order_details`;
CREATE TABLE IF NOT EXISTS `order_details` (
  `order_details_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `orders_id` int NOT NULL,
  `products_id` int NOT NULL,
  `products_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_price` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_sales_qty` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`order_details_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`order_details_id`, `orders_id`, `products_id`, `products_name`, `products_price`, `products_sales_qty`, `created_at`, `updated_at`) VALUES
(1, 1, 5, 'sony camera', '20000', '2', NULL, NULL),
(2, 2, 3, 'samsung phone', '90000', '1', NULL, NULL),
(3, 4, 4, 'lenovo ideapad', '50000', '3', NULL, NULL),
(4, 5, 4, 'lenovo ideapad', '50000', '1', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

DROP TABLE IF EXISTS `payments`;
CREATE TABLE IF NOT EXISTS `payments` (
  `payments_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `payments_method` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payments_status` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`payments_id`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`payments_id`, `payments_method`, `payments_status`, `created_at`, `updated_at`) VALUES
(1, 'bkash', 'pending', NULL, NULL),
(2, 'bkash', 'pending', NULL, NULL),
(3, 'bkash', 'pending', NULL, NULL),
(4, 'roket', 'pending', NULL, NULL),
(5, 'roket', 'pending', NULL, NULL),
(6, 'roket', 'pending', NULL, NULL),
(7, 'nogod', 'pending', NULL, NULL),
(8, 'bkash', 'pending', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
CREATE TABLE IF NOT EXISTS `products` (
  `products_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_ms_id` int NOT NULL,
  `sub_categories_id` int NOT NULL,
  `brands_id` int NOT NULL,
  `units_id` int NOT NULL,
  `sizes_id` int NOT NULL,
  `colors_id` int NOT NULL,
  `products_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_price` double(8,2) NOT NULL,
  `products_image` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `products_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`products_id`)
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`products_id`, `category_ms_id`, `sub_categories_id`, `brands_id`, `units_id`, `sizes_id`, `colors_id`, `products_code`, `products_name`, `products_description`, `products_price`, `products_image`, `products_status`, `created_at`, `updated_at`) VALUES
(3, 5, 4, 3, 2, 2, 2, 's22', 'samsung phone', 'samsung phone description', 90000.00, 'IMG_764016586397910.jpg|samsung-galaxy-s22-ultra-5g-216586397911.jpg', 1, '2022-07-23 21:11:56', '2022-07-23 23:16:31'),
(4, 6, 4, 5, 2, 3, 2, 'ideapad 310', 'lenovo ideapad', 'lenovo product description&nbsp;', 50000.00, 'photo-1618424181497-157f25b6ddd516587385190.jfif|UEEkgUpRTeWcwpGaYpPJES16587385191.jpg', 1, '2022-07-23 21:13:39', '2022-07-25 02:41:59'),
(5, 7, 4, 4, 2, 4, 2, 'c100', 'sony camera', 'camera product description', 20000.00, 'download16587187530.jfif|pexels-fox-22515716587187531.jpg', 1, '2022-07-23 21:15:20', '2022-07-24 21:12:33');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

DROP TABLE IF EXISTS `shippings`;
CREATE TABLE IF NOT EXISTS `shippings` (
  `shippings_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `shippings_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippings_email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippings_address` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippings_city` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippings_country` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippings_zip_code` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shippings_phone` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`shippings_id`)
) ENGINE=MyISAM AUTO_INCREMENT=8 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`shippings_id`, `shippings_name`, `shippings_email`, `shippings_address`, `shippings_city`, `shippings_country`, `shippings_zip_code`, `shippings_phone`, `created_at`, `updated_at`) VALUES
(1, 'anoy', 'anoy@gmail.com', 'North-Dhanmondi, Dhaka.', 'Dhaka', 'Bangladesh', '1209', '015101010101', NULL, NULL),
(3, 'shipon', 'shipon@gmail.com', 'dhaka', 'dhaka', 'bangladesh', '1234', '019898989', NULL, NULL),
(4, 'shipon', 'shipon@gmail.com', 'dhaka', 'Dhaka', 'bangladesh', '1234', '019898989', NULL, NULL),
(5, 'shipon', 'shipon@gmail.com', 'dhaka', 'dhaka', 'bangladesh', '1234', '01990909090', NULL, NULL),
(6, 'robi', 'robi@gmail.com', 'cumilla', 'cumilla', 'bangladesh', '1234', '01978787878', NULL, NULL),
(7, 'chobi', 'chobi@gmail.com', 'comilla', 'comilla', 'bangladesh', '1234', '018787878', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `sizes`
--

DROP TABLE IF EXISTS `sizes`;
CREATE TABLE IF NOT EXISTS `sizes` (
  `sizes_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `sizes_size` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sizes_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`sizes_id`)
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sizes`
--

INSERT INTO `sizes` (`sizes_id`, `sizes_size`, `sizes_status`, `created_at`, `updated_at`) VALUES
(2, '[\"6\\\"\",\" 6.5\\\"\"]', 0, '2022-07-22 00:59:02', '2022-07-23 21:06:53'),
(3, '[\"14\\\"\",\" 15\\\"\"]', 1, '2022-07-23 21:07:18', '2022-07-23 21:07:18'),
(4, '[\"3.5\\\"\",\" 4\\\"\"]', 1, '2022-07-23 21:07:39', '2022-07-23 21:07:39');

-- --------------------------------------------------------

--
-- Table structure for table `sub_categories`
--

DROP TABLE IF EXISTS `sub_categories`;
CREATE TABLE IF NOT EXISTS `sub_categories` (
  `sub_categories_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `category_ms_id` bigint UNSIGNED NOT NULL,
  `sub_categories_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_categories_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_categories_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`sub_categories_id`),
  KEY `sub_categories_category_ms_id_foreign` (`category_ms_id`)
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sub_categories`
--

INSERT INTO `sub_categories` (`sub_categories_id`, `category_ms_id`, `sub_categories_name`, `sub_categories_description`, `sub_categories_status`, `created_at`, `updated_at`) VALUES
(5, 6, 'lenovo', 'ideapad laptop', 1, '2022-07-23 21:00:27', '2022-07-23 21:00:27'),
(4, 5, 'electronices', 'samsung phone', 1, '2022-07-23 20:52:57', '2022-07-24 21:09:34'),
(6, 7, 'camera', 'sony camera', 1, '2022-07-23 21:01:54', '2022-07-23 21:01:54');

-- --------------------------------------------------------

--
-- Table structure for table `units`
--

DROP TABLE IF EXISTS `units`;
CREATE TABLE IF NOT EXISTS `units` (
  `units_id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `units_name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `units_description` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `units_status` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`units_id`)
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `units`
--

INSERT INTO `units` (`units_id`, `units_name`, `units_description`, `units_status`, `created_at`, `updated_at`) VALUES
(2, 'pieces', 'per pieces', 1, '2022-07-21 14:10:44', '2022-07-23 21:05:05');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
