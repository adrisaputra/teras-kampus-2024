-- --------------------------------------------------------
-- Host:                         127.0.0.1
-- Versi server:                 8.0.30 - MySQL Community Server - GPL
-- OS Server:                    Win64
-- HeidiSQL Versi:               12.1.0.6537
-- --------------------------------------------------------

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

-- membuang struktur untuk table db_teras_kampus.activity_log
CREATE TABLE IF NOT EXISTS `activity_log` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `log_name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `subject_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `event` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `subject_id` bigint unsigned DEFAULT NULL,
  `causer_type` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `causer_id` bigint unsigned DEFAULT NULL,
  `properties` json DEFAULT NULL,
  `batch_uuid` char(36) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `subject` (`subject_type`,`subject_id`),
  KEY `causer` (`causer_type`,`causer_id`),
  KEY `activity_log_log_name_index` (`log_name`)
) ENGINE=InnoDB AUTO_INCREMENT=47 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.activity_log: ~25 rows (lebih kurang)
INSERT INTO `activity_log` (`id`, `log_name`, `description`, `subject_type`, `event`, `subject_id`, `causer_type`, `causer_id`, `properties`, `batch_uuid`, `created_at`, `updated_at`) VALUES
	(1, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-17 17:24:45', '2024-10-17 17:24:45'),
	(2, 'default', 'Edit Data Setting With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-17 17:46:19', '2024-10-17 17:46:19'),
	(3, 'default', 'Ubah Data Profil dengan ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-17 17:53:22', '2024-10-17 17:53:22'),
	(4, 'default', 'Ubah Data Profil dengan ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-17 17:55:05', '2024-10-17 17:55:05'),
	(5, 'default', 'Tambah Data User', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-17 18:01:09', '2024-10-17 18:01:09'),
	(6, 'default', 'Hapus Data User dengan ID = 2', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-17 18:01:26', '2024-10-17 18:01:26'),
	(7, 'default', 'Create Data Slider', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-17 18:11:52', '2024-10-17 18:11:52'),
	(8, 'default', 'Edit Data Slider With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-17 18:13:37', '2024-10-17 18:13:37'),
	(9, 'default', 'Delete Data Slider With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-17 18:13:48', '2024-10-17 18:13:48'),
	(10, 'default', 'Create Data Slider', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-17 18:13:59', '2024-10-17 18:13:59'),
	(11, 'default', 'Create Data News', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-17 19:07:04', '2024-10-17 19:07:04'),
	(12, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 14:38:47', '2024-10-18 14:38:47'),
	(13, 'default', 'Ubah Data User dengan ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 14:39:08', '2024-10-18 14:39:08'),
	(14, 'default', 'Create Data Journal', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 15:32:37', '2024-10-18 15:32:37'),
	(15, 'default', 'Edit Data Journal With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 15:40:30', '2024-10-18 15:40:30'),
	(16, 'default', 'Edit Data Journal With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 15:41:16', '2024-10-18 15:41:16'),
	(17, 'default', 'Edit Data Journal With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 15:42:33', '2024-10-18 15:42:33'),
	(18, 'default', 'Edit Data Journal With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 15:42:58', '2024-10-18 15:42:58'),
	(19, 'default', 'Edit Data Journal With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 15:43:58', '2024-10-18 15:43:58'),
	(20, 'default', 'Edit Data Journal With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 15:45:32', '2024-10-18 15:45:32'),
	(21, 'default', 'Edit Data Journal With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 15:46:07', '2024-10-18 15:46:07'),
	(22, 'default', 'Create Data Proceeding', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 15:50:35', '2024-10-18 15:50:35'),
	(23, 'default', 'Create Data Proceeding', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 15:53:33', '2024-10-18 15:53:33'),
	(24, 'default', 'Edit Data Proceeding With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 15:53:57', '2024-10-18 15:53:57'),
	(25, 'default', 'Delete Data Proceeding With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 15:54:05', '2024-10-18 15:54:05'),
	(26, 'default', 'Delete Data Proceeding With ID = 2', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 15:54:43', '2024-10-18 15:54:43'),
	(27, 'default', 'Create Data Textbook', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 18:00:21', '2024-10-18 18:00:21'),
	(28, 'default', 'Edit Data Textbook With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-18 18:00:42', '2024-10-18 18:00:42'),
	(29, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 05:34:33', '2024-10-19 05:34:33'),
	(30, 'default', 'Create Data Monograph', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 05:48:43', '2024-10-19 05:48:43'),
	(31, 'default', 'Delete Data Monograph With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 05:48:47', '2024-10-19 05:48:47'),
	(32, 'default', 'Create Data Reference', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 05:57:11', '2024-10-19 05:57:11'),
	(33, 'default', 'Edit Data Reference With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 05:57:18', '2024-10-19 05:57:18'),
	(34, 'default', 'Delete Data Reference With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 05:57:22', '2024-10-19 05:57:22'),
	(35, 'default', 'Create Data Novel', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 06:22:04', '2024-10-19 06:22:04'),
	(36, 'default', 'Edit Data Novel With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 06:22:11', '2024-10-19 06:22:11'),
	(37, 'default', 'Edit Data Novel With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 06:22:27', '2024-10-19 06:22:27'),
	(38, 'default', 'Delete Data Novel With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 06:22:43', '2024-10-19 06:22:43'),
	(39, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 14:52:52', '2024-10-19 14:52:52'),
	(40, 'default', 'Ubah Data Profil dengan ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 14:53:14', '2024-10-19 14:53:14'),
	(41, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 14:53:21', '2024-10-19 14:53:21'),
	(42, 'default', 'Create Data Conference', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 15:27:59', '2024-10-19 15:27:59'),
	(43, 'default', 'Edit Data Conference With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 15:29:44', '2024-10-19 15:29:44'),
	(44, 'default', 'Edit Data Setting With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-19 15:37:07', '2024-10-19 15:37:07'),
	(45, 'default', 'Login', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-20 00:24:28', '2024-10-20 00:24:28'),
	(46, 'default', 'Edit Data News With ID = 1', NULL, NULL, NULL, 'App\\Models\\User', 1, '[]', NULL, '2024-10-20 00:58:07', '2024-10-20 00:58:07');

-- membuang struktur untuk table db_teras_kampus.cache
CREATE TABLE IF NOT EXISTS `cache` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `value` mediumtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.cache: ~0 rows (lebih kurang)

-- membuang struktur untuk table db_teras_kampus.cache_locks
CREATE TABLE IF NOT EXISTS `cache_locks` (
  `key` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `owner` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `expiration` int NOT NULL,
  PRIMARY KEY (`key`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.cache_locks: ~0 rows (lebih kurang)

-- membuang struktur untuk table db_teras_kampus.conferences
CREATE TABLE IF NOT EXISTS `conferences` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `conference_user_id_foreign` (`user_id`),
  CONSTRAINT `conference_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.conferences: ~0 rows (lebih kurang)
INSERT INTO `conferences` (`id`, `title`, `location`, `start_date`, `end_date`, `desc`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'xxx', 'aaa', '2024-10-09', '2024-10-11', '<p>ererer</p>', 1, '2024-10-19 15:27:58', '2024-10-19 15:27:58');

-- membuang struktur untuk table db_teras_kampus.failed_jobs
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.failed_jobs: ~0 rows (lebih kurang)

-- membuang struktur untuk table db_teras_kampus.jobs
CREATE TABLE IF NOT EXISTS `jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `queue` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `attempts` tinyint unsigned NOT NULL,
  `reserved_at` int unsigned DEFAULT NULL,
  `available_at` int unsigned NOT NULL,
  `created_at` int unsigned NOT NULL,
  PRIMARY KEY (`id`),
  KEY `jobs_queue_index` (`queue`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.jobs: ~0 rows (lebih kurang)

-- membuang struktur untuk table db_teras_kampus.job_batches
CREATE TABLE IF NOT EXISTS `job_batches` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `total_jobs` int NOT NULL,
  `pending_jobs` int NOT NULL,
  `failed_jobs` int NOT NULL,
  `failed_job_ids` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `options` mediumtext COLLATE utf8mb4_unicode_ci,
  `cancelled_at` int DEFAULT NULL,
  `created_at` int NOT NULL,
  `finished_at` int DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.job_batches: ~0 rows (lebih kurang)

-- membuang struktur untuk table db_teras_kampus.journals
CREATE TABLE IF NOT EXISTS `journals` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `volume` int DEFAULT NULL,
  `issue` int DEFAULT NULL,
  `page_range` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_view` int DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `journals_user_id_foreign` (`user_id`),
  CONSTRAINT `journals_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.journals: ~0 rows (lebih kurang)
INSERT INTO `journals` (`id`, `title`, `author`, `publication_date`, `volume`, `issue`, `page_range`, `doi`, `issn`, `desc`, `cover`, `file`, `count_view`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'Majalah Pengabdian Indonesia', 'Teras Kampus', '2024-07-31', NULL, NULL, NULL, 'https://doi.org/10.69616/maindo.v1i2', '3047-5252', '<p>xxxxx</p>', '11729294357.png', '21729295167.pdf', NULL, 1, '2024-10-18 15:32:37', '2024-10-18 15:46:07');

-- membuang struktur untuk table db_teras_kampus.migrations
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=15 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.migrations: ~12 rows (lebih kurang)
INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(1, '0001_01_01_000000_create_users_table', 1),
	(2, '0001_01_01_000001_create_cache_table', 1),
	(3, '0001_01_01_000002_create_jobs_table', 1),
	(4, '2024_10_18_012322_create_activity_log_table', 2),
	(5, '2024_10_18_012323_add_event_column_to_activity_log_table', 2),
	(6, '2024_10_18_012324_add_batch_uuid_column_to_activity_log_table', 2),
	(7, '2024_10_18_032226_create_journals', 3),
	(8, '2024_10_18_224619_create_proceedings', 3),
	(9, '2024_10_18_235938_create_textbooks', 4),
	(10, '2024_10_19_000003_create_monographs', 4),
	(11, '2024_10_19_000028_create_references', 4),
	(12, '2024_10_19_000043_create_novels', 4),
	(13, '2024_10_19_231423_create_conference', 5),
	(14, '2024_10_19_233119_create_workshops', 6);

-- membuang struktur untuk table db_teras_kampus.monographs
CREATE TABLE IF NOT EXISTS `monographs` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_view` int DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `monographs_user_id_foreign` (`user_id`),
  CONSTRAINT `monographs_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.monographs: ~0 rows (lebih kurang)

-- membuang struktur untuk table db_teras_kampus.news
CREATE TABLE IF NOT EXISTS `news` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cover` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slug` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `file` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_view` int DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `news_user_id_foreign` (`user_id`),
  CONSTRAINT `news_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.news: ~0 rows (lebih kurang)
INSERT INTO `news` (`id`, `title`, `cover`, `slug`, `text`, `file`, `count_view`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'xxxx', '1729220823.jpg', 'aaa', '<p>ssssss</p>', NULL, NULL, 1, '2024-10-17 19:07:04', '2024-10-20 00:58:07');

-- membuang struktur untuk table db_teras_kampus.novels
CREATE TABLE IF NOT EXISTS `novels` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_view` int DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `novels_user_id_foreign` (`user_id`),
  CONSTRAINT `novels_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.novels: ~0 rows (lebih kurang)

-- membuang struktur untuk table db_teras_kampus.pages
CREATE TABLE IF NOT EXISTS `pages` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `text` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.pages: ~4 rows (lebih kurang)
INSERT INTO `pages` (`id`, `title`, `text`, `image`, `menu`, `created_at`, `updated_at`) VALUES
	(1, NULL, NULL, NULL, 'about_us', '2024-10-19 22:57:34', '2024-10-19 22:57:37'),
	(2, NULL, NULL, NULL, 'publishing_process', '2024-10-19 22:57:35', '2024-10-19 22:57:37'),
	(3, NULL, NULL, NULL, 'term_and_condition', '2024-10-19 22:57:36', '2024-10-19 22:57:38');

-- membuang struktur untuk table db_teras_kampus.password_reset_tokens
CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.password_reset_tokens: ~0 rows (lebih kurang)

-- membuang struktur untuk table db_teras_kampus.proceedings
CREATE TABLE IF NOT EXISTS `proceedings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `volume` int DEFAULT NULL,
  `issue` int DEFAULT NULL,
  `page_range` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `doi` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `issn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_view` int DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `proceedings_user_id_foreign` (`user_id`),
  CONSTRAINT `proceedings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.proceedings: ~1 rows (lebih kurang)

-- membuang struktur untuk table db_teras_kampus.references
CREATE TABLE IF NOT EXISTS `references` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_view` int DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `references_user_id_foreign` (`user_id`),
  CONSTRAINT `references_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.references: ~0 rows (lebih kurang)

-- membuang struktur untuk table db_teras_kampus.sessions
CREATE TABLE IF NOT EXISTS `sessions` (
  `id` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `user_id` bigint unsigned DEFAULT NULL,
  `ip_address` varchar(45) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_agent` text COLLATE utf8mb4_unicode_ci,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_activity` int NOT NULL,
  PRIMARY KEY (`id`),
  KEY `sessions_user_id_index` (`user_id`),
  KEY `sessions_last_activity_index` (`last_activity`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.sessions: ~2 rows (lebih kurang)
INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
	('TRLdfAHeqeu16815VbSCivrm8sEzbusS9riy9Yh5', 1, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/129.0.0.0 Safari/537.36', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUUN1UVZ0eDBkQ0E4RDZQaWdOZ0ZOeFRBc2R3NXRJcDBuNU9sdlFOYyI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6NDg6Imh0dHA6Ly90ZXJhcy1rYW1wdXMtMjAyNC50ZXN0L3Rlcm1fYW5kX2NvbmRpdGlvbiI7fXM6NjoiX2ZsYXNoIjthOjI6e3M6Mzoib2xkIjthOjA6e31zOjM6Im5ldyI7YTowOnt9fXM6NTA6ImxvZ2luX3dlYl81OWJhMzZhZGRjMmIyZjk0MDE1ODBmMDE0YzdmNThlYTRlMzA5ODlkIjtpOjE7fQ==', 1729415533);

-- membuang struktur untuk table db_teras_kampus.settings
CREATE TABLE IF NOT EXISTS `settings` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `application_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `short_application_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `small_icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `large_icon` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_login` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `background_sidebar` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `gmaps_key` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `running_text` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `office_name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `phone` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `address` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.settings: ~0 rows (lebih kurang)
INSERT INTO `settings` (`id`, `application_name`, `short_application_name`, `small_icon`, `large_icon`, `background_login`, `background_sidebar`, `gmaps_key`, `running_text`, `office_name`, `email`, `phone`, `address`, `created_at`, `updated_at`) VALUES
	(1, 'Teras Kampus', 'Teras Kampus', '11729215979.png', '21729215979.png', '31729215979.jpg', NULL, NULL, NULL, NULL, NULL, NULL, 'Antero Hamra Komp Street. River View Shophouse Block A Number 3. Bende Village. Kadia District. Kendari City. Southeast Sulawesi Province. Indonesia', NULL, '2024-10-19 15:37:07');

-- membuang struktur untuk table db_teras_kampus.sliders
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `image` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.sliders: ~0 rows (lebih kurang)
INSERT INTO `sliders` (`id`, `image`, `created_at`, `updated_at`) VALUES
	(2, '1729217639.jpg', '2024-10-17 18:13:59', '2024-10-17 18:13:59');

-- membuang struktur untuk table db_teras_kampus.textbooks
CREATE TABLE IF NOT EXISTS `textbooks` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `category` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `author` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `publication_date` date DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `cover` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `file` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `count_view` int DEFAULT NULL,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `textbooks_user_id_foreign` (`user_id`),
  CONSTRAINT `textbooks_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.textbooks: ~0 rows (lebih kurang)
INSERT INTO `textbooks` (`id`, `category`, `title`, `author`, `publication_date`, `desc`, `cover`, `file`, `count_view`, `user_id`, `created_at`, `updated_at`) VALUES
	(1, 'Ilmu Pendidikan', 'uuuuuu', 'uuuu', '2024-10-16', '<p>ttttt</p>', '11729303220.png', '21729303220.pdf', NULL, 1, '2024-10-18 18:00:20', '2024-10-18 18:00:42');

-- membuang struktur untuk table db_teras_kampus.users
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `group_id` int DEFAULT NULL,
  `photo` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` enum('Active','Non Active') CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.users: ~1 rows (lebih kurang)
INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `group_id`, `photo`, `status`, `created_at`, `updated_at`) VALUES
	(1, 'administrator', 'administrator@gmail.com', NULL, '$2y$12$64UzfFoVmJw6jnJvszH60e5HhJ.oASsqkfTWNBdxUrV4tQC/O/zl6', NULL, 1, '1729216505.png', 'Active', '2024-10-06 19:14:16', '2024-10-19 14:53:14');

-- membuang struktur untuk table db_teras_kampus.workshops
CREATE TABLE IF NOT EXISTS `workshops` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `start_date` date DEFAULT NULL,
  `end_date` date DEFAULT NULL,
  `desc` text COLLATE utf8mb4_unicode_ci,
  `user_id` bigint unsigned NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `workshops_user_id_foreign` (`user_id`),
  CONSTRAINT `workshops_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- Membuang data untuk tabel db_teras_kampus.workshops: ~0 rows (lebih kurang)

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
