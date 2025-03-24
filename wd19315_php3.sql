-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Mar 18, 2025 at 02:39 PM
-- Server version: 8.0.30
-- PHP Version: 8.2.20

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `wd19315_php3`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint UNSIGNED NOT NULL,
  `ten_danh_muc` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ten_danh_muc`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 'repellendus', 1, '2025-03-18 05:20:56', '2025-03-18 05:20:56'),
(2, 'explicabo', 0, '2025-03-18 05:20:56', '2025-03-18 05:20:56'),
(3, 'hic', 0, '2025-03-18 05:20:56', '2025-03-18 05:20:56'),
(4, 'culpa', 0, '2025-03-18 05:20:56', '2025-03-18 05:20:56'),
(5, 'dolorem', 1, '2025-03-18 05:20:56', '2025-03-18 05:20:56'),
(16, 'fugiat', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(17, 'laboriosam', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(18, 'quam', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(19, 'explicabo', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(20, 'voluptatem', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(21, 'ratione', 1, '2025-03-18 05:43:17', '2025-03-18 05:43:17'),
(22, 'et', 1, '2025-03-18 05:43:17', '2025-03-18 05:43:17'),
(23, 'at', 1, '2025-03-18 05:43:17', '2025-03-18 05:43:17'),
(24, 'itaque', 1, '2025-03-18 05:43:17', '2025-03-18 05:43:17'),
(25, 'reiciendis', 1, '2025-03-18 05:43:17', '2025-03-18 05:43:17'),
(26, 'autem', 1, '2025-03-18 05:45:41', '2025-03-18 05:45:41'),
(27, 'et', 1, '2025-03-18 05:45:41', '2025-03-18 05:45:41'),
(28, 'expedita', 1, '2025-03-18 05:45:41', '2025-03-18 05:45:41'),
(29, 'et', 1, '2025-03-18 05:45:41', '2025-03-18 05:45:41'),
(30, 'qui', 0, '2025-03-18 05:45:41', '2025-03-18 05:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`) VALUES
(1, 'Nguyễn Văn A', 'a@gmail.com', '0123456789', 'Ha Noi'),
(2, 'Nguyễn Văn B', 'b@gmail.com', '0123456789', 'Ha Noi');

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
(4, '2025_03_13_125040_create_products_table', 1),
(5, '2025_03_13_131528_create_categories_table', 1),
(6, '2025_03_15_115032_add_category_id_to_products_table', 1),
(7, '2025_03_15_120159_add_hinh_anh_to_products_table', 1),
(8, '2025_03_15_124520_create_customers_table', 1),
(9, '2025_03_15_124530_create_banners_table', 1),
(10, '2025_03_15_124540_create_posts_table', 1),
(11, '2025_03_15_124548_create_contacts_table', 1),
(12, '2025_03_15_124557_create_reviews_table', 1),
(13, '2025_03_15_125703_add_customer_id_to_reviews_table', 1),
(14, '2025_03_15_130127_add_product_id_to_reviews_table', 1);

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
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint UNSIGNED NOT NULL,
  `ma_san_pham` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `ten_san_pham` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_id` bigint UNSIGNED DEFAULT NULL,
  `hinh_anh` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gia` decimal(10,2) NOT NULL,
  `gia_khuyen_mai` decimal(10,2) DEFAULT NULL,
  `so_luong` int UNSIGNED NOT NULL,
  `ngay_nhap` date NOT NULL,
  `mo_ta` text COLLATE utf8mb4_unicode_ci,
  `trang_thai` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `ma_san_pham`, `ten_san_pham`, `category_id`, `hinh_anh`, `gia`, `gia_khuyen_mai`, `so_luong`, `ngay_nhap`, `mo_ta`, `trang_thai`, `created_at`, `updated_at`) VALUES
(1, 'SP03', 'Iphone 12', 1, NULL, '20000000.00', '19000000.00', 100, '2022-01-01', 'Iphone 12', 1, '2025-03-18 05:20:56', NULL),
(2, 'SP04', 'Acer nitro 5', 2, NULL, '20000000.00', '19000000.00', 100, '2022-01-01', 'Iphone 13', 1, '2025-03-18 05:20:56', NULL),
(14, 'SP80', 'ab', 16, NULL, '4448959.45', '4389303.68', 10, '1985-02-26', 'Fuga laboriosam maxime soluta dolorem repellendus sequi placeat. Quae ut temporibus ut et dolorem. Minus ut reprehenderit vero voluptatem mollitia.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(15, 'SP25', 'est', 16, NULL, '9504911.04', '757178.39', 70, '1995-10-19', 'Minima nobis temporibus non. Possimus itaque quod harum labore officiis perferendis corrupti. Explicabo nisi beatae debitis rem dignissimos.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(16, 'SP50', 'doloribus', 16, NULL, '6240907.69', NULL, 44, '2015-01-13', 'Voluptatem enim vitae et ipsa animi molestiae recusandae vel. Et et asperiores provident consequatur aperiam ex dolores. Itaque assumenda vero debitis quo ad facilis vitae sit.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(17, 'SP33', 'et', 16, NULL, '1283139.44', NULL, 25, '1985-05-28', 'Repellat accusantium quos et cupiditate id. Est qui pariatur soluta vero perferendis. Facilis similique aut eaque iure est sit aut sunt.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(18, 'SP98', 'quia', 16, NULL, '8592319.49', NULL, 57, '1981-10-08', 'Enim esse voluptatem eveniet consequatur quisquam possimus laudantium quas. Sed cumque dolores qui alias. Quia quos at error. Officiis doloribus perspiciatis recusandae quod.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(19, 'SP47', 'quia', 16, NULL, '512157.33', NULL, 86, '1988-11-23', 'Aut quo sed minima voluptate repellendus in rerum. Inventore omnis quaerat dolores hic natus quia. Assumenda amet eos et eum autem alias. Aut ab eveniet voluptatibus eligendi officiis sint et.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(20, 'SP18', 'qui', 16, NULL, '7499621.98', '5880143.64', 55, '1987-05-16', 'Aspernatur fugit alias ut corrupti. Nam repellat sed repellendus placeat pariatur eveniet sed. Magnam vel beatae repellendus sint odit sit.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(21, 'SP88', 'tenetur', 16, NULL, '8585189.90', '6271735.04', 32, '2017-11-20', 'Deleniti minus est officia architecto nemo amet fugit. Illo beatae voluptatibus deleniti recusandae aut doloremque enim. Quod magni numquam accusantium.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(22, 'SP14', 'illo', 16, NULL, '977031.23', '4599506.94', 75, '2014-02-23', 'Fugit sequi minus qui eveniet est culpa. Et doloribus dolorem dolores nisi odit reprehenderit. Commodi et velit aut tenetur error provident.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(23, 'SP28', 'magni', 16, NULL, '9430109.28', NULL, 32, '2015-05-29', 'Facilis laborum qui ullam ad. Laboriosam eveniet est adipisci pariatur. Modi ut veniam natus voluptas harum facere ipsa architecto.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(24, 'SP99', 'eos', 17, NULL, '1070720.26', NULL, 13, '2000-04-02', 'Aut aliquam ab optio. Repudiandae iure quae corporis sint velit aut sit nobis. Facere officiis voluptatem aliquam odio iusto aperiam.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(25, 'SP58', 'saepe', 17, NULL, '214573.07', NULL, 15, '1971-01-31', 'Similique exercitationem aperiam quo eveniet. Unde voluptate sed incidunt omnis aut. Minima facere alias et reiciendis eius voluptas magnam. Explicabo occaecati sed odit omnis ipsam.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(26, 'SP49', 'est', 17, NULL, '6988969.83', '5949826.57', 11, '1987-05-30', 'Doloribus possimus numquam eum aut id illum voluptates quia. Laborum itaque assumenda voluptas nisi ut excepturi rerum. Unde beatae et qui rerum voluptatem voluptatem sunt.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(27, 'SP67', 'facilis', 17, NULL, '1481670.48', NULL, 60, '2019-10-17', 'Labore aut voluptatem et et quia. Eos placeat harum ut enim aliquam velit est. Accusantium blanditiis sed ratione doloribus possimus asperiores. Tempora earum voluptatem molestiae distinctio.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(28, 'SP30', 'nostrum', 17, NULL, '2515929.37', '5772580.61', 82, '2021-12-15', 'Et eligendi voluptatem perspiciatis debitis repudiandae aut. Vitae occaecati sed commodi ipsam consequuntur officia qui.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(29, 'SP97', 'culpa', 17, NULL, '3695614.53', '2024422.76', 17, '2021-02-18', 'Suscipit optio ut sapiente qui et inventore. Voluptatem quo minima qui consectetur.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(30, 'SP93', 'perferendis', 17, NULL, '5856046.66', NULL, 6, '2021-11-09', 'Velit nihil atque fuga qui iusto suscipit dolorem. Ut et quos numquam et omnis voluptatibus nihil tenetur. Fugiat temporibus facere ad consequatur laboriosam.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(31, 'SP37', 'quae', 17, NULL, '6195504.09', NULL, 11, '2020-10-27', 'Nihil numquam ab maxime consequuntur. Fugit dolor perspiciatis corporis aut quam. Et aut id animi ullam. Eaque saepe error quia sint totam explicabo quisquam.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(32, 'SP41', 'cupiditate', 17, NULL, '2640816.47', NULL, 57, '1988-04-09', 'Libero maxime rem accusantium temporibus eveniet. Vitae laboriosam cum reiciendis natus neque et. Recusandae iure incidunt illo quibusdam reiciendis sint. Occaecati velit et quis non aut rerum ut.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(33, 'SP83', 'consequuntur', 17, NULL, '9963479.00', NULL, 30, '1992-05-23', 'Et nulla veniam possimus est libero. Consequatur placeat ut voluptatem in natus expedita. Laudantium natus ut non ut.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(34, 'SP66', 'molestias', 18, NULL, '3481809.54', NULL, 48, '1984-03-12', 'Voluptatum quos voluptatem maxime in aliquam perspiciatis deserunt. Totam saepe quod aperiam et. Voluptates dolores accusamus nesciunt ut rerum velit. Voluptates nihil et et.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(35, 'SP19', 'ad', 18, NULL, '9933897.19', NULL, 70, '1998-12-11', 'Aut non ea quibusdam quo qui sit deserunt repudiandae. Et asperiores ut asperiores alias quia qui.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(36, 'SP34', 'aut', 18, NULL, '4744475.47', '1314385.38', 28, '1979-03-19', 'Ullam ipsum repellat consectetur odio. Quo debitis vel dolore eveniet quia quod velit. Sed amet sint maiores eligendi. Modi reprehenderit voluptas sint consequatur assumenda aut velit.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(37, 'SP10', 'aperiam', 18, NULL, '2448897.92', '5196011.37', 61, '2003-12-22', 'Quibusdam ullam eligendi voluptas reprehenderit voluptas dolor. Non culpa quis doloribus voluptas ut expedita dolorem. Et ea consequatur repellat. Asperiores labore et illo dolor dolorem harum qui.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(38, 'SP13', 'distinctio', 18, NULL, '6749624.36', NULL, 24, '2010-12-29', 'Impedit aut non corporis animi voluptatum repudiandae repellat. Quidem est est fuga quae. Architecto et impedit beatae adipisci.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(39, 'SP94', 'dolor', 18, NULL, '162284.35', NULL, 48, '1978-05-24', 'Facere est similique ullam optio. Debitis cum iste non aspernatur ipsam molestias. Culpa sit incidunt quis eos.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(40, 'SP44', 'aut', 18, NULL, '343026.57', '4027485.80', 33, '2012-05-14', 'Sapiente nihil enim tempora repudiandae quaerat expedita. Et eos possimus eos molestiae. Cum minima quis magnam sint eos numquam architecto.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(41, 'SP70', 'quis', 18, NULL, '677972.62', '6558919.18', 86, '2022-12-08', 'Odio omnis magni explicabo exercitationem quis enim sapiente et. Assumenda quibusdam sit non tenetur molestiae. Reiciendis qui voluptate sit aut porro quisquam atque.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(42, 'SP08', 'id', 18, NULL, '8584029.12', NULL, 33, '2006-05-08', 'Consequatur voluptatem qui aut non ipsum nihil itaque deserunt. Dolorem omnis blanditiis tenetur rerum. Assumenda illo aut iusto.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(43, 'SP40', 'cupiditate', 18, NULL, '5162879.02', NULL, 27, '1971-09-16', 'Maxime ut voluptas dolores maxime impedit voluptas maxime aut. Blanditiis fuga ea incidunt provident facere ipsa voluptas.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(44, 'SP52', 'natus', 19, NULL, '8891780.57', '1964700.80', 55, '1982-01-08', 'Recusandae perferendis deserunt placeat soluta aliquam non libero. Consectetur repudiandae ut vitae. Corrupti occaecati quisquam aut corrupti asperiores asperiores suscipit.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(45, 'SP72', 'rerum', 19, NULL, '807289.59', '6853115.53', 15, '2012-05-27', 'Officiis ut fugiat quod doloribus eaque dolores est. Laudantium vel pariatur dolorem est. Molestiae ipsum aut et. Voluptas reprehenderit hic vitae.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(46, 'SP17', 'suscipit', 19, NULL, '1438243.68', '3321730.32', 89, '2012-10-05', 'Et dolore omnis voluptas repudiandae aliquid aperiam voluptatem est. Labore cupiditate omnis aspernatur. Labore sed reprehenderit voluptates ullam sint.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(47, 'SP42', 'est', 19, NULL, '9532286.09', '5442327.48', 87, '2001-01-03', 'Harum sed reiciendis consequatur sed provident corporis ex hic. Ut minus sed labore autem suscipit beatae animi debitis. Itaque autem optio saepe aut. Sint fugiat deleniti saepe cum illum voluptatum.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(48, 'SP74', 'aut', 19, NULL, '5049195.92', '1866196.80', 28, '2006-06-23', 'Aut ipsum qui omnis laudantium. Deleniti soluta porro qui. Voluptas aut qui magni natus quia et. Et deleniti omnis eos.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(49, 'SP73', 'ducimus', 19, NULL, '6088759.65', NULL, 45, '2016-12-27', 'Amet aperiam maiores ut aliquid. Dolorem harum qui qui odio tempore. Vitae eum reprehenderit voluptates molestias temporibus deserunt voluptates. Aut quia omnis voluptas quo.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(50, 'SP78', 'id', 19, NULL, '1556989.79', '4994201.12', 13, '1998-07-29', 'Nisi quis aspernatur distinctio vitae sit fugit. Itaque qui perspiciatis iusto vel autem quo. Sunt itaque sit et incidunt omnis sapiente.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(51, 'SP87', 'commodi', 19, NULL, '1648984.41', '68267.72', 2, '2014-05-15', 'Quis reprehenderit eaque saepe voluptatem. Illum sed possimus vel quas facere magnam qui. Inventore quo ut reprehenderit maxime possimus cum odit pariatur.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(52, 'SP54', 'sit', 19, NULL, '3277558.62', '2914319.14', 5, '2010-11-18', 'Tenetur sit ut voluptatem nesciunt. Asperiores repellat totam porro sunt. Nam dolorum ullam eaque aliquam molestiae voluptate.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(53, 'SP76', 'et', 19, NULL, '835768.32', '472266.37', 38, '1983-10-14', 'Quis assumenda soluta exercitationem beatae. Tenetur et ab qui similique. Ullam quia libero et laborum. Culpa aliquid quis sit voluptatem error odit et nulla.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(54, 'SP71', 'qui', 20, NULL, '4596536.61', '238430.41', 27, '2000-11-05', 'Quasi quasi voluptatem eos at fuga asperiores. Ea beatae maiores et nisi autem. Sit est ut quidem aperiam quis rerum animi.', 1, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(55, 'SP32', 'accusantium', 20, NULL, '3930366.02', '4241093.05', 42, '1994-03-17', 'Quasi qui non veniam deleniti praesentium expedita et. Non veritatis rerum et debitis odio. Est vel ut cum quia in aut.', 0, '2025-03-18 05:41:18', '2025-03-18 05:41:18'),
(57, 'SP39', 'et', 21, NULL, '2338304.84', NULL, 87, '2002-10-26', 'Et explicabo beatae qui consequatur non voluptates expedita dolorum. Consequatur minima nisi fuga vel itaque error accusamus. Et eos alias cum minus.', 1, '2025-03-18 05:43:17', '2025-03-18 05:43:17'),
(59, 'SP57', 'sed', 26, NULL, '628911.47', '397720.07', 96, '2012-07-17', 'Asperiores deleniti et consequatur illo vero atque accusamus. Neque quaerat totam aut molestias ducimus. Maxime inventore et delectus qui incidunt magni voluptatem quas.', 0, '2025-03-18 05:45:41', '2025-03-18 05:45:41'),
(60, 'SP06', 'et', 26, NULL, '1328798.60', NULL, 71, '1973-03-23', 'Officia debitis voluptas dolorum in. Pariatur aut ab quos exercitationem vel rerum quis. Commodi labore molestias tenetur dolore.', 0, '2025-03-18 05:45:41', '2025-03-18 05:45:41'),
(61, 'SP68', 'nihil', 26, NULL, '7189766.87', NULL, 81, '1995-07-14', 'Laudantium consequuntur et cum qui ipsam. Velit vel quia dolorem. Molestiae perspiciatis hic quia iusto culpa aliquam. Est quis minus et quia assumenda.', 1, '2025-03-18 05:45:41', '2025-03-18 05:45:41'),
(62, 'SP48', 'reprehenderit', 26, NULL, '4853480.67', NULL, 51, '2000-10-31', 'Non temporibus iusto omnis eaque ad nemo dolorum. Aliquam iusto minima quis totam consectetur. Ipsum molestiae non quia.', 0, '2025-03-18 05:45:41', '2025-03-18 05:45:41'),
(63, 'SP23', 'beatae', 26, NULL, '4158341.51', NULL, 92, '2002-05-17', 'Cumque repudiandae vitae voluptate accusamus nam facilis. Iste et corporis accusamus autem numquam voluptatum. Dolorem nemo rem sit incidunt vel. Dicta aliquid quam omnis dolore labore.', 0, '2025-03-18 05:45:41', '2025-03-18 05:45:41'),
(64, 'SP29', 'nisi', 26, NULL, '4216204.31', NULL, 42, '1975-11-13', 'Maxime eos magnam doloribus rerum facere officia rerum qui. Dolore distinctio quisquam id qui. Error quidem autem reiciendis ut.', 0, '2025-03-18 05:45:41', '2025-03-18 05:45:41');

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `customer_id`, `product_id`, `content`, `rating`) VALUES
(1, 1, 1, 'Sản phẩm rất tốt', 1),
(2, 1, 2, 'Sản phẩm không tốt', 2);

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
('rmRXgfrnnsgATvkTHdD330nk1psL8gKvSpX3MusE', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiR3hkdlpISWEzMWI1a1EwOHlyYXRkaHFoSXZhTDR2aVA3c05qeHgwVyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzA6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9kdWN0cyI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fX0=', 1742303600);

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
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `contacts_email_unique` (`email`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `customers_email_unique` (`email`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_reset_tokens`
--
ALTER TABLE `password_reset_tokens`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `products_ma_san_pham_unique` (`ma_san_pham`),
  ADD KEY `products_category_id_foreign` (`category_id`);

--
-- Indexes for table `reviews`
--
ALTER TABLE `reviews`
  ADD PRIMARY KEY (`id`),
  ADD KEY `reviews_customer_id_foreign` (`customer_id`),
  ADD KEY `reviews_product_id_foreign` (`product_id`);

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
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=66;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `products`
--
ALTER TABLE `products`
  ADD CONSTRAINT `products_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`);

--
-- Constraints for table `reviews`
--
ALTER TABLE `reviews`
  ADD CONSTRAINT `reviews_customer_id_foreign` FOREIGN KEY (`customer_id`) REFERENCES `customers` (`id`),
  ADD CONSTRAINT `reviews_product_id_foreign` FOREIGN KEY (`product_id`) REFERENCES `products` (`id`);
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
