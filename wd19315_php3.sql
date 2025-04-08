-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Apr 08, 2025 at 07:12 AM
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
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `name`, `image`, `trang_thai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(5, 'Manchester City', 'images/banners/JmaHRFFy8inu8pXCr84CpeFFrpmDHxkuPqxiDjFa.jpg', 1, '2025-03-27 05:49:56', '2025-03-27 05:49:59', '2025-03-27 05:49:59'),
(6, 'Phong cách', 'images/banners/F8mHzaniJnfHlror4uRbvYG9z3r9FIfx9DqdAN6J.png', 1, '2025-04-05 01:15:27', '2025-04-05 01:15:27', NULL),
(7, 'Elegance', 'images/banners/sXfovkKkEGhZlNJewV4G76VMYy2HFU9Ph8XISM7P.png', 1, '2025-04-05 01:15:46', '2025-04-05 01:15:46', NULL),
(8, 'Elevate Your', 'images/banners/DwLd2StqAE6hYTxphfMLHryj2j4Q8gxjSTu3azt5.png', 1, '2025-04-05 01:16:04', '2025-04-05 01:16:04', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `ten_danh_muc`, `trang_thai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(3, 'consectetur', 0, '2025-03-26 01:28:46', '2025-04-06 07:42:28', '2025-04-06 07:42:28'),
(4, 'unde', 0, '2025-03-26 01:28:46', '2025-04-06 07:42:25', '2025-04-06 07:42:25'),
(5, 'Sơ mi', 1, '2025-03-26 01:28:46', '2025-04-06 07:44:15', NULL),
(6, 'Quần', 1, '2025-03-27 04:46:33', '2025-04-06 07:46:46', NULL),
(7, 'Đồ Bộ', 1, '2025-03-27 04:49:13', '2025-04-06 07:42:36', NULL),
(8, 'T-Shirt', 1, '2025-04-05 01:34:39', '2025-04-05 01:34:39', NULL),
(9, 'Váy', 1, '2025-04-05 02:08:40', '2025-04-05 02:08:40', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `name`, `email`, `phone`, `message`, `trang_thai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Estrella Miller', 'ohara.reta@example.net', NULL, 'Earum debitis praesentium sint nihil expedita nihil nam. Fuga dolores consequuntur doloremque autem. In voluptate eos voluptas illo exercitationem atque. Voluptate amet quia porro nam. Ut est fugiat est ab dicta praesentium at quos. Nisi molestiae suscipit corrupti in sint tenetur dolor facilis.', 1, '2025-03-27 00:47:12', '2025-03-27 00:47:12', NULL),
(2, 'Brando Douglas MD', 'napoleon.kemmer@example.com', NULL, 'Consequatur sint architecto natus quisquam tempore consequuntur repellat. Libero consequuntur laudantium eaque autem est repellendus repudiandae. Alias explicabo repellendus sit earum nobis itaque ratione. Quia molestiae non qui omnis est nostrum.', 0, '2025-03-27 00:47:12', '2025-03-27 00:47:12', NULL),
(3, 'Lisandro Bashirian', 'devan.williamson@example.com', NULL, 'Officiis error aut ullam consectetur beatae et. Labore excepturi itaque hic consequatur. Et molestiae voluptatibus iste et. Quia nihil quibusdam et ad sed labore. Assumenda possimus aut accusantium voluptatem ea quisquam et minus. Voluptas omnis explicabo veritatis nulla.', 0, '2025-03-27 00:47:12', '2025-03-27 00:47:12', NULL),
(4, 'Jaquelin Braun', 'robel.keven@example.org', NULL, 'Porro impedit magni consectetur doloribus sed magnam numquam suscipit. Illo saepe nesciunt autem praesentium sunt rem. Reprehenderit provident quam at. Nihil fuga voluptate possimus non aliquid ut cumque.', 0, '2025-03-27 00:47:12', '2025-03-27 00:47:12', NULL),
(6, 'anhntph', 'anhntph51526@gmail.com', '0325687430', 'Chỉnh sửa UI trang chi tiết sản phẩm', 0, '2025-04-07 23:48:51', '2025-04-07 23:48:51', NULL),
(7, 'dungntph', 'dungntph51531@gmail.com', NULL, 'ok', 0, '2025-04-07 23:51:24', '2025-04-07 23:51:24', NULL),
(8, 'Dung', 'dungntph51531@gmail.com', '0383461205', 'Dung ăn cức', 0, '2025-04-07 23:52:03', '2025-04-07 23:54:08', '2025-04-07 23:54:08'),
(9, 'Tạ Văn Định', 'dinhtv7@gmail.com', NULL, 'Vineta Mail', 0, '2025-04-08 00:02:56', '2025-04-08 00:02:56', NULL),
(10, 'Tuấn Anh', 'tanh24.fpt@gmail.com', '1234567890', 'Vineta gửi chăm sóc khách hàng', 0, '2025-04-08 00:03:39', '2025-04-08 00:03:39', NULL),
(11, 'anhntph', 'tanh24.fpt@gmail.com', NULL, 'ok', 0, '2025-04-08 00:05:36', '2025-04-08 00:05:36', NULL),
(12, 'anhntph', 'tanh24.fpt@gmail.com', '0325687430', 'cải thiên ui', 0, '2025-04-08 00:06:45', '2025-04-08 00:06:45', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `name`, `email`, `phone`, `address`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Seth Williamson', 'trisha94@example.net', NULL, NULL, '2025-03-27 00:10:15', '2025-03-27 00:10:15', NULL),
(4, 'Christophe Cole', 'carmelo17@example.net', '+1-678-681-4306', NULL, '2025-03-27 00:10:15', '2025-03-27 00:10:15', NULL),
(5, 'Sigmund Crooks DVM', 'rstrosin@example.org', NULL, '49393 Fisher Extensions Suite 947\nRebeccafurt, OK 57274-1800', '2025-03-27 00:10:15', '2025-03-27 00:10:15', NULL),
(21, 'Tuấn Anh', 'anhntph51526@gmail.com', '0325687430', 'ha noi', '2025-03-27 00:14:05', '2025-03-27 00:22:50', NULL);

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
(10, '2025_03_15_124540_create_posts_table', 1),
(18, '2025_03_15_124520_create_customers_table', 2),
(19, '2025_03_15_124530_create_banners_table', 2),
(20, '2025_03_15_124548_create_contacts_table', 2),
(27, '2025_03_15_124557_create_reviews_table', 3),
(28, '2025_03_15_125703_add_customer_id_to_reviews_table', 3),
(29, '2025_03_15_130127_add_product_id_to_reviews_table', 3),
(30, '2025_03_27_060652_create_posts_table', 3),
(31, '2025_03_27_115152_add_deleted_at_to_products_table', 4),
(32, '2025_03_27_120647_add_deleted_at_to_categories_table', 5),
(33, '2025_03_27_123921_add_deleted_at_to_banners_table', 6),
(34, '2025_03_27_125056_add_deleted_at_to_contacts_table', 7),
(35, '2025_03_27_130008_add_deleted_at_to_posts_table', 8),
(36, '2025_03_27_130935_add_deleted_at_to_reviews_table', 9),
(37, '2025_03_28_105720_add_deleted_at_to_customers_table', 10),
(38, '2025_04_03_121659_add_role_to_users_table', 11);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_reset_tokens`
--

INSERT INTO `password_reset_tokens` (`email`, `token`, `created_at`) VALUES
('tuananh123@gmail.com', '$2y$12$cXGZKOaPyzZoefSFYM3rBusnl8oyJ8NG2gq/SsrFFQHxG/sH1p0rG', '2025-04-03 05:46:44');

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `trang_thai` tinyint(1) NOT NULL DEFAULT '1',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `content`, `author`, `image`, `trang_thai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(2, 'Style thu hút ánh nhìn', 'Tenetur voluptatem adipisci nisi ad eveniet dolor. Ea sit non placeat saepe praesentium quod. Molestiae doloremque tenetur a. Iste velit dolores autem voluptatibus blanditiis odit et vitae.\r\n\r\nQuia architecto dolores ut corporis. Recusandae fugit dolor dignissimos dolorem et. Magni eaque at iusto et eaque et.\r\n\r\nDolore voluptatem quis nesciunt vero non eligendi rerum. Esse vel commodi quidem ipsa reiciendis dolorem. Corporis nesciunt distinctio dolorem corrupti. Qui maxime repudiandae nam sint.', 'Tuấn Anh', 'images/posts/GimZHlmh27NPh9HHoqMZtMAdidCNwngE6ZjG2GBa.jpg', 1, '2025-03-27 00:47:30', '2025-04-05 04:43:50', NULL),
(3, 'Áo cổ trụ', 'Omnis eum qui impedit at nihil nam eos. Excepturi omnis voluptatem maiores voluptas dolor facere. Dolor quibusdam dolores asperiores optio consequatur. Optio eaque odit dolorem ad.\r\n\r\nIn delectus reprehenderit ducimus beatae id. Dolorem quis quis voluptas debitis ipsum nihil. Libero vero ratione hic natus consequatur. Accusamus qui alias similique officiis.\r\n\r\nQuo aliquam ducimus atque ut enim quo fuga. Necessitatibus asperiores eveniet dolorem et quia numquam. Tempore quaerat placeat necessitatibus quae rem blanditiis. Placeat consequatur labore quam quo inventore.', 'Quốc An', 'images/posts/5l4sWnoxfSgdzXeuCJ93syrRYJmEdW00as9e4knd.jpg', 1, '2025-03-27 00:47:30', '2025-04-05 04:45:43', NULL),
(4, 'Gìay Adidas', 'Iure totam aperiam provident recusandae reprehenderit sunt. Incidunt modi quidem dolorem quas corrupti consequatur quo. Occaecati magni cum consectetur vero. Et iure qui officia est.\r\n\r\nAut itaque iure commodi sunt voluptates et quae. Itaque eveniet molestiae deserunt ea dolores nemo. Voluptatibus porro recusandae facilis quia sed sed et totam.\r\n\r\nFacilis quia debitis quis est. Autem qui libero dolore velit corporis suscipit.', 'Sofia Conroy', 'images/posts/KaQer04xwKrLPXXxTd7YSmzw07Tf5DxTl0p7LTWB.jpg', 1, '2025-03-27 00:47:30', '2025-04-05 04:43:21', NULL),
(6, 'Nhà Giả Kimm', 'Nhà giả kim là tiểu thuyết được xuất bản lần đầu ở Brasil năm 1988, và là cuốn sách nổi tiếng nhất của nhà văn Paulo Coelho. Tác phẩm đã được dịch ra 67 ngôn ngữ và bán ra tới 95 triệu bản, trở thành một trong những cuốn sách bán chạy nhất mọi thời đại.', 'Ronaldo', 'images/posts/DBkodeQDIuPKZe44yFmuvLWTfbCDkngaytbzqujb.jpg', 1, '2025-03-27 00:49:02', '2025-04-05 04:44:02', NULL);

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
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `ma_san_pham`, `ten_san_pham`, `category_id`, `hinh_anh`, `gia`, `gia_khuyen_mai`, `so_luong`, `ngay_nhap`, `mo_ta`, `trang_thai`, `created_at`, `updated_at`, `deleted_at`) VALUES
(53, 'SP03', 'Iphone 15', 3, 'images/products/gRn4ITULHLpzQdKvMxQmElxWLOrx9nwECj74A9bi.jpg', '2500000.00', '2000000.00', 15, '2025-03-23', 'okokokoko', 1, '2025-03-27 00:45:28', '2025-04-06 07:42:28', '2025-04-06 07:42:28'),
(54, 'SP04', 'Iphone 15ProMax', 6, 'images/products/nAz8IVtR64Nm0ovXpE0PWpNBcVEdHRlCCV1Uz2k3.jpg', '200000.00', '150000.00', 5, '2025-03-14', 'okoko', 1, '2025-03-27 06:15:06', '2025-03-27 06:15:16', NULL),
(55, 'SP01', 'Linen Blend Pants', 8, 'images/products/O3Y1lbdajgCM1q16mgnIv0bKHTtWe1tXNYjoOvYm.jpg', '2500000.00', '1900000.00', 50, '2025-04-05', NULL, 1, '2025-04-05 01:35:57', '2025-04-05 01:57:38', NULL),
(56, 'SP02', 'Áo thun cổ tròn basic', 8, 'images/products/jvTou8G0xoEErGSqi8oYFKdjeneJvPz7T79o0dxl.jpg', '155000.00', '140000.00', 20, '2025-04-05', NULL, 1, '2025-04-05 01:48:42', '2025-04-05 01:48:42', NULL),
(57, 'SP05', 'Áo thun cờ Việt Nam', 8, 'images/products/zVjFMz7hdHZya2cHSm3MS8MFz4ZwSKNqVqMBxIz0.jpg', '340000.00', '290000.00', 5, '2025-04-05', NULL, 1, '2025-04-05 01:59:45', '2025-04-05 02:00:09', NULL),
(58, 'SP06', 'Váy maxi dài', 9, 'images/products/CLs0SIQY0ZyGPxe7PVZuTliJo4qq3LAxZfQW7VUv.jpg', '450000.00', '400000.00', 20, '2025-04-05', NULL, 1, '2025-04-05 02:09:19', '2025-04-05 02:09:19', NULL),
(59, 'SP07', 'Váy tiểu thư', 9, 'images/products/cuZUp94eHPTlWzu64oTVSXts6zVyciAxGZcasV4D.jpg', '340000.00', '290000.00', 3, '2025-04-05', NULL, 1, '2025-04-05 02:10:29', '2025-04-05 02:11:15', NULL),
(60, 'SP08', 'Áo thun tie-dye', 8, 'images/products/5z4tHUcT1A3uMhJjW7Cc7qzCvjTtVX576RASvitQ.jpg', '120000.00', '90000.00', 9, '2025-04-05', NULL, 1, '2025-04-05 02:10:58', '2025-04-05 02:10:58', NULL),
(61, 'SP09', 'Áo Croptop', 8, 'images/products/irIw2zgo1rlOu4FjT96aMObKdkbO8hTYaIBb5tQd.jpg', '230000.00', '190000.00', 4, '2025-04-05', NULL, 1, '2025-04-05 02:11:56', '2025-04-05 02:11:56', NULL),
(62, 'SP10', 'Bộ đồ cộc Nữ thể thao', 7, 'images/products/4deJUUjY3qddU7uVxF7IIJV5Im7A1rjV1g1U2KAj.jpg', '250000.00', '200000.00', 12, '2025-04-06', 'Hàng đẹp vãi ò', 1, '2025-04-06 07:43:10', '2025-04-06 07:43:10', NULL),
(63, 'SP11', 'Sơ mi công sở', 5, 'images/products/9OY0tvicIGvPPtKc6e7yJlEKzDZSFhxIenSUIfMQ.jpg', '150000.00', '120000.00', 5, '2025-04-06', NULL, 1, '2025-04-06 07:44:07', '2025-04-06 07:44:07', NULL),
(64, 'SP12', 'Sơ mi sọc cộc tay Nữ', 5, 'images/products/N7kyFue6svJkJheBSTt7iojfvAElKtoy8PSMQu2a.jpg', '145000.00', '120000.00', 10, '2025-04-06', NULL, 1, '2025-04-06 07:45:00', '2025-04-06 07:45:00', NULL),
(65, 'SP13', 'Quần ống rộng', 6, 'images/products/jn5SD5nrRyb9dQL5joHbcMIgtCvzkswSZu6R37c5.png', '180000.00', '160000.00', 10, '2025-04-06', NULL, 1, '2025-04-06 07:46:58', '2025-04-06 07:46:58', NULL),
(66, 'SP14', 'Áo T-shirt màu xanh quân đội', 8, 'images/products/6Muw9Zb6T3K7LolabxQoPsa6qIIkw3JlSMcY06XC.jpg', '200000.00', '120000.00', 8, '2025-04-08', 'Sản phẩm rất tốt', 1, '2025-04-07 12:37:22', '2025-04-07 12:37:22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `reviews`
--

CREATE TABLE `reviews` (
  `id` bigint UNSIGNED NOT NULL,
  `customer_id` bigint UNSIGNED NOT NULL,
  `product_id` bigint UNSIGNED NOT NULL,
  `content` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `rating` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `reviews`
--

INSERT INTO `reviews` (`id`, `customer_id`, `product_id`, `content`, `rating`, `created_at`, `updated_at`, `deleted_at`) VALUES
(40, 21, 58, 'Rất hài lòng', 5, '2025-04-05 02:13:49', '2025-04-05 02:13:49', NULL),
(41, 5, 60, 'Sản phẩm ok', 4, '2025-04-05 02:14:05', '2025-04-05 02:14:05', NULL),
(42, 4, 61, 'Đồ xấu vãi lần sau đéo mua nữaa', 1, '2025-04-05 02:14:27', '2025-04-05 02:14:27', NULL),
(43, 21, 56, 'okokok', 5, '2025-04-05 04:27:39', '2025-04-05 04:27:39', NULL);

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
('BqBIo1MN32vdt2712YymOlJ5VJSvEJSIHES0gYJw', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoiRnNXQTdXaVVzN0x0M3BEOGI3SXFCdEdsSTlWZTJ1TmVWcmZSeWRSSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzQ6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jbGllbnRzL2Jsb2ciO31zOjY6Il9mbGFzaCI7YToyOntzOjM6Im9sZCI7YTowOnt9czozOiJuZXciO2E6MDp7fX1zOjM6InVybCI7YToxOntzOjg6ImludGVuZGVkIjtzOjM2OiJodHRwOi8vMTI3LjAuMC4xOjgwMDAvYWRtaW4vcHJvZHVjdHMiO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToxO30=', 1744057356),
('KPbkPAVS2mvSpDhtMymriwZDz0lKOCHGS1XW72RT', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/134.0.0.0 Safari/537.36', 'YTo1OntzOjY6Il90b2tlbiI7czo0MDoieWZybUVvVEpzNlR4VG05WHhIc3VEcTBBVDByN0Q5ekhLVEt5NjRMSCI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9jbGllbnRzL3Nob3AvcHJvZHVjdC82NSI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6MzoidXJsIjthOjE6e3M6ODoiaW50ZW5kZWQiO3M6MzY6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9wcm9kdWN0cyI7fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1744096132);

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
  `role` enum('admin','user') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Tuấn Anh', 'anhntph51526@gmail.com', NULL, '$2y$12$7U8gGJu.oPUbluor.8SgHuAUymJxc90YiLQMQkd5v4mOK83ohaVAO', 'admin', 'nrjNW0lgBit7jwmJbEDh7UDhf0pnX7UM8FWbtswUrDinswUcKCj5AYfc0RPx', '2025-04-01 05:09:09', '2025-04-03 05:14:57'),
(2, 'Grant Fay', 'beer.charles@example.net', '2025-04-01 05:32:26', '$2y$12$YUQ6LgjK6P7eS6WNr0X9COh7nrIRZ3vmptbT9qHYiDiMbKkL7ilZm', 'user', 'OLU96uPsWWNiyKcrfgRZjeSCUqJhektPpVWwmrQoBbh9bhkYZFPXVmR0VmKv', '2025-04-01 05:32:26', '2025-04-01 05:32:26'),
(3, 'Luna Kuhic', 'uoreilly@example.org', '2025-04-01 05:32:26', '$2y$12$YUQ6LgjK6P7eS6WNr0X9COh7nrIRZ3vmptbT9qHYiDiMbKkL7ilZm', 'user', 'GL2LnFpyxKayQBznZPY6fvJ6FNHdPqyQNEoECYlCrero07oB2TotIjQgTfaE', '2025-04-01 05:32:26', '2025-04-01 05:32:26'),
(4, 'Prof. Billy Schumm', 'tania07@example.com', '2025-04-01 05:32:26', '$2y$12$YUQ6LgjK6P7eS6WNr0X9COh7nrIRZ3vmptbT9qHYiDiMbKkL7ilZm', 'user', 'vQRrUt2XZm', '2025-04-01 05:32:26', '2025-04-01 05:32:26'),
(5, 'Ana Howe', 'iboehm@example.net', '2025-04-01 05:32:26', '$2y$12$YUQ6LgjK6P7eS6WNr0X9COh7nrIRZ3vmptbT9qHYiDiMbKkL7ilZm', 'user', 'j5qPjyWbGJ', '2025-04-01 05:32:26', '2025-04-01 05:32:26'),
(6, 'Kade Lang', 'terence47@example.net', '2025-04-01 05:32:26', '$2y$12$YUQ6LgjK6P7eS6WNr0X9COh7nrIRZ3vmptbT9qHYiDiMbKkL7ilZm', 'user', '4cPTwGRPEr', '2025-04-01 05:32:26', '2025-04-01 05:32:26'),
(7, 'Alice Christiansen', 'maximillia44@example.org', '2025-04-01 05:32:26', '$2y$12$YUQ6LgjK6P7eS6WNr0X9COh7nrIRZ3vmptbT9qHYiDiMbKkL7ilZm', 'user', 'lhENckPGUL', '2025-04-01 05:32:26', '2025-04-01 05:32:26'),
(8, 'Letitia Gottlieb', 'zack.carter@example.com', '2025-04-01 05:32:26', '$2y$12$YUQ6LgjK6P7eS6WNr0X9COh7nrIRZ3vmptbT9qHYiDiMbKkL7ilZm', 'user', 'XA1rYPKyAW', '2025-04-01 05:32:26', '2025-04-01 05:32:26'),
(9, 'Isabelle Dach', 'zmacejkovic@example.org', '2025-04-01 05:32:26', '$2y$12$YUQ6LgjK6P7eS6WNr0X9COh7nrIRZ3vmptbT9qHYiDiMbKkL7ilZm', 'user', 'jij4oNvQBh', '2025-04-01 05:32:26', '2025-04-01 05:32:26'),
(10, 'Theresa Cremin', 'bparker@example.org', '2025-04-01 05:32:26', '$2y$12$YUQ6LgjK6P7eS6WNr0X9COh7nrIRZ3vmptbT9qHYiDiMbKkL7ilZm', 'user', 'rxoyyQ98y9', '2025-04-01 05:32:26', '2025-04-01 05:32:26'),
(11, 'Wilhelm Mitchell Sr.', 'gaston.jakubowski@example.com', '2025-04-01 05:32:26', '$2y$12$YUQ6LgjK6P7eS6WNr0X9COh7nrIRZ3vmptbT9qHYiDiMbKkL7ilZm', 'user', 'SOfgKRXynY', '2025-04-01 05:32:26', '2025-04-01 05:32:26'),
(12, 'Hahahaha', 'tuananh@gmail.com', NULL, '$2y$12$W2ow4UdqqedV3A/m/11DMuoXReUMsv7EwIevYkQS.B0ckLfRz7/qu', 'user', NULL, '2025-04-01 05:50:36', '2025-04-01 05:50:36'),
(13, 'Tuấn Anhh', 'anhntph515267@gmail.com', NULL, '$2y$12$tA6pRW6VIYYS3eo.ApvWOuIy9uRqskMwOIs.SWfnB.Or51VtcitSy', 'user', NULL, '2025-04-02 00:41:12', '2025-04-02 00:41:12'),
(14, 'Cao Quốc An', 'ancq51578@gmail.com', NULL, '$2y$12$3qwzf0WybvjPgN01YN8RpOv7CAYVCcnG5uk90f8eWSJwHfDvR/aPG', 'user', NULL, '2025-04-03 05:00:12', '2025-04-03 05:00:12'),
(15, 'Tuấn Anh', 'tuananh123@gmail.com', NULL, '$2y$12$tHxD1jIKjiRJynBgMrzy2eFP3IwV1ZwN3VG5GzahvFDDkqqS09kNW', 'user', NULL, '2025-04-03 05:38:25', '2025-04-03 05:38:25');

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
  ADD PRIMARY KEY (`id`);

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
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

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
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=67;

--
-- AUTO_INCREMENT for table `reviews`
--
ALTER TABLE `reviews`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=44;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

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
