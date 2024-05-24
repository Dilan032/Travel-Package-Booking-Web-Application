-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 24, 2024 at 09:12 PM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.2.4

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `travel_agency_db`
--

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) DEFAULT NULL,
  `discription` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `image`, `discription`, `created_at`, `updated_at`) VALUES
(2, 'Temple of the Sacred Tooth Relic', '1716167335.webp', 'The Temple of the Sacred Tooth Relic, located in Kandy, Sri Lanka, is one of the most sacred Buddhist sites in the world. It houses the relic of the tooth of the Buddha, which is said to be enshrined in a golden casket adorned with gemstones. \r\n\r\nThe temple complex is a UNESCO World Heritage Site and is known for its stunning architecture, with intricate carvings and paintings that depict Buddhist folklore and history. \r\n\r\nPilgrims and tourists alike visit the temple to pay their respects to the sacred relic and to experience the rich cultural heritage of Sri Lanka. The temple also plays a significant role in religious ceremonies and festivals, including the grand Esala Perahera, a procession featuring traditional dancers, drummers, and beautifully adorned elephants.', '2024-05-19 19:38:55', '2024-05-19 19:38:56'),
(3, 'Plains National Park', '1716186661.jpeg', '<p>For those seeking a communion with nature, Horton Plains National Park is a canvas waiting to be explored. The highlight, “World’s End,” unveils a sheer cliff that plunges into the abyss, providing a jaw-dropping view of the surrounding landscapes. Venture through mist-laden trails to discover Baker’s Falls, a cascading waterfall surrounded by lush greenery, creating a tranquil haven for nature enthusiasts.</p>', '2024-05-20 01:01:01', '2024-05-21 22:25:54'),
(6, 'Yala National Park – Wildlife Extravaganza:', '1716262164.svg', '<h4>Nature enthusiasts and wildlife lovers find solace in the sprawling landscapes of Yala National Park.&nbsp;</h4><p>Home to a diverse array of wildlife, from majestic elephants to elusive leopards, the park offers a thrilling safari experience. The juxtaposition of vibrant flora against the backdrop of untamed fauna makes Yala a haven for wildlife photography and observation. Nature enthusiasts and wildlife lovers find solace in the sprawling landscapes of Yala National Park. Home to a diverse array of wildlife, from majestic elephants to elusive leopards, the park offers a thrilling safari experience. The juxtaposition of vibrant flora against the backdrop of untamed fauna makes Yala a haven for wildlife photography and observation. &nbsp;</p><p>&nbsp;Nature enthusiasts and wildlife lovers find solace in the sprawling landscapes of Yala National Park. Home to a diverse array of wildlife, from majestic elephants to elusive leopards, the park offers a thrilling safari experience. The juxtaposition of vibrant flora against the backdrop of untamed fauna makes Yala a haven for wildlife photography and observation.</p>', '2024-05-20 11:14:13', '2024-05-21 22:58:20'),
(7, 'The Majestic Lion Rock:', '1716223961.svg', '<p>Nestled in the heart of the island, Sigiriya stands as an iconic testament to ancient Sri Lankan civilization. Crowned as the Eighth Wonder of the World, this colossal rock fortress rises dramatically from the plains, showcasing a harmonious blend of architectural brilliance and natural beauty. As you ascend, be captivated by the intricate frescoes adorning the rock walls and the panoramic views from the summit, offering a glimpse into the regal history of Sri Lanka.</p><p>&nbsp;Plan your visit during sunrise or sunset for an ethereal experience, as the changing hues of the sky cast a magical spell on the surrounding landscapes.</p>', '2024-05-20 11:22:41', '2024-05-22 22:25:29');

-- --------------------------------------------------------

--
-- Table structure for table `bookings`
--

CREATE TABLE `bookings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_id` bigint(20) UNSIGNED NOT NULL,
  `date` date NOT NULL,
  `number_of_adult` int(11) NOT NULL,
  `number_of_child` int(11) NOT NULL,
  `aditional_requarement` text DEFAULT NULL,
  `total_fee` decimal(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `cache`
--

CREATE TABLE `cache` (
  `key` varchar(255) NOT NULL,
  `value` mediumtext NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `cache`
--

INSERT INTO `cache` (`key`, `value`, `expiration`) VALUES
('amai@gmail.com|127.0.0.1', 'i:1;', 1716326238),
('amai@gmail.com|127.0.0.1:timer', 'i:1716326238;', 1716326238),
('amal@gmail.com|127.0.0.1', 'i:1;', 1716326249),
('amal@gmail.com|127.0.0.1:timer', 'i:1716326249;', 1716326249);

-- --------------------------------------------------------

--
-- Table structure for table `cache_locks`
--

CREATE TABLE `cache_locks` (
  `key` varchar(255) NOT NULL,
  `owner` varchar(255) NOT NULL,
  `expiration` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) NOT NULL,
  `connection` text NOT NULL,
  `queue` text NOT NULL,
  `payload` longtext NOT NULL,
  `exception` longtext NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `jobs`
--

CREATE TABLE `jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `queue` varchar(255) NOT NULL,
  `payload` longtext NOT NULL,
  `attempts` tinyint(3) UNSIGNED NOT NULL,
  `reserved_at` int(10) UNSIGNED DEFAULT NULL,
  `available_at` int(10) UNSIGNED NOT NULL,
  `created_at` int(10) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `job_batches`
--

CREATE TABLE `job_batches` (
  `id` varchar(255) NOT NULL,
  `name` varchar(255) NOT NULL,
  `total_jobs` int(11) NOT NULL,
  `pending_jobs` int(11) NOT NULL,
  `failed_jobs` int(11) NOT NULL,
  `failed_job_ids` longtext NOT NULL,
  `options` mediumtext DEFAULT NULL,
  `cancelled_at` int(11) DEFAULT NULL,
  `created_at` int(11) NOT NULL,
  `finished_at` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

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
(7, '0001_01_01_000000_create_users_table', 1),
(8, '0001_01_01_000001_create_cache_table', 1),
(9, '0001_01_01_000002_create_jobs_table', 1),
(10, '2024_05_12_233738_create_blogs_table', 2),
(11, '2024_05_19_050444_create_travel_packages_table', 2),
(13, '2024_05_21_224023_create_user_reviews_table', 4),
(14, '2024_05_21_224447_create_user_massages_table', 4),
(15, '2024_05_21_034429_create_bookings_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_reset_tokens`
--

CREATE TABLE `password_reset_tokens` (
  `email` varchar(255) NOT NULL,
  `token` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sessions`
--

CREATE TABLE `sessions` (
  `id` varchar(255) NOT NULL,
  `user_id` bigint(20) UNSIGNED DEFAULT NULL,
  `ip_address` varchar(45) DEFAULT NULL,
  `user_agent` text DEFAULT NULL,
  `payload` longtext NOT NULL,
  `last_activity` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sessions`
--

INSERT INTO `sessions` (`id`, `user_id`, `ip_address`, `user_agent`, `payload`, `last_activity`) VALUES
('iRHYBMfACwhYybsU29QPeSvXPA55PXfFqT06fM7K', 20, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/123.0.0.0 Safari/537.36 OPR/109.0.0.0', 'YTo0OntzOjY6Il90b2tlbiI7czo0MDoiUms0dU1TN0RrbDQ1c01oS21CTTdjTjY3ZGVjbW8xZFRtTHhmM2M2SyI7czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6Mzc6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9wcm9maWxlL0Jvb2tpbmciO31zOjUwOiJsb2dpbl93ZWJfNTliYTM2YWRkYzJiMmY5NDAxNTgwZjAxNGM3ZjU4ZWE0ZTMwOTg5ZCI7aToyMDt9', 1716521029),
('wZs9ueDWJYxgOdmJcItWwdpOxy7xugczhlOUIWFU', NULL, '127.0.0.1', 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/125.0.0.0 Safari/537.36 Edg/125.0.0.0', 'YTozOntzOjY6Il90b2tlbiI7czo0MDoiVXpsMVM5Zm9oWDF2ZTF3VXhmZnk4THExZ0dqUWZjRmJ6SU0zb2dDMiI7czo5OiJfcHJldmlvdXMiO2E6MTp7czozOiJ1cmwiO3M6MzU6Imh0dHA6Ly8xMjcuMC4wLjE6ODAwMC9hZG1pbi9tYXNzYWdlIjt9czo2OiJfZmxhc2giO2E6Mjp7czozOiJvbGQiO2E6MDp7fXM6MzoibmV3IjthOjA6e319fQ==', 1716517073);

-- --------------------------------------------------------

--
-- Table structure for table `travel_packages`
--

CREATE TABLE `travel_packages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `package_name` varchar(255) NOT NULL,
  `image_1` varchar(255) DEFAULT NULL,
  `image_2` varchar(255) DEFAULT NULL,
  `image_3` varchar(255) DEFAULT NULL,
  `duration` varchar(255) NOT NULL,
  `duration_type` varchar(255) NOT NULL,
  `tour_type` varchar(255) NOT NULL,
  `price_start_from` decimal(10,2) NOT NULL,
  `overview` longtext NOT NULL,
  `included_things` longtext NOT NULL,
  `tour_plane_description` longtext NOT NULL,
  `per_adult_fee` decimal(10,2) NOT NULL DEFAULT 200.00,
  `per_child_fee` decimal(10,2) NOT NULL DEFAULT 100.00,
  `service_fee` decimal(10,2) NOT NULL DEFAULT 100.00,
  `booking_fee` decimal(10,2) NOT NULL DEFAULT 50.00,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `travel_packages`
--

INSERT INTO `travel_packages` (`id`, `package_name`, `image_1`, `image_2`, `image_3`, `duration`, `duration_type`, `tour_type`, `price_start_from`, `overview`, `included_things`, `tour_plane_description`, `per_adult_fee`, `per_child_fee`, `service_fee`, `booking_fee`, `created_at`, `updated_at`) VALUES
(21, 'Embark on an unforgettable journey new one', '1716452870_img1_664efe0684a332.34609233.webp', '1716452870_img2_664efe0686a325.94570603.webp', '1716452870_img3_664efe06882e60.98573914.webp', '5', 'Days', 'Day Tour', 10.00, 'aa', '<p>a</p>', '<p>q</p>', 500.00, 5.00, 5.00, 2.00, '2024-05-22 22:58:33', '2024-05-23 02:57:50'),
(25, 'Embark on an unforgettable journey new second', '1716452851_img1_664efdf3ab0e55.25036009.webp', NULL, NULL, '5', 'Days', 'Day Tour', 10.00, 'aa', '<p>a</p>', '<p>q</p>', 500.00, 5.00, 5.00, 2.00, '2024-05-22 23:26:58', '2024-05-23 02:57:31'),
(26, 'Day Tour to Sigiriya dilan', '1716452839_img1_664efde77b1f70.22458463.webp', '1716452839_img2_664efde77dcef4.84988496.webp', NULL, '2', 'Days', 'Day Tour', 800.00, 'lkjhgf', '<p>uytrs</p>', '<p>hg</p>', 500.00, 1200.00, 500.00, 50.00, '2024-05-23 01:56:11', '2024-05-23 02:57:19'),
(27, 'Day Tour ok bosa', '1716452732_img1_664efd7c879d55.51744053.webp', '1716452732_img2_664efd7c961660.09070201.webp', '1716452732_img3_664efd7c9af156.77765846.webp', '2', 'Days', 'Day Tour', 800.00, 'lkjhgf', '<p>uytrs</p>', '<p>hg</p>', 500.00, 1200.00, 500.00, 50.00, '2024-05-23 01:56:54', '2024-05-23 02:55:32');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `phone_number` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `user_country` varchar(255) NOT NULL,
  `role` enum('admin','user') NOT NULL DEFAULT 'user',
  `remember_token` varchar(100) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `phone_number`, `password`, `user_country`, `role`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'dilankanishka032@gmail.com', NULL, '', '$2y$12$vTjqexr.C3S3hZalCtZMCepJrMMPjDZvO81DlKvXX5FAlAV212X0q', 'sri lanka', 'admin', NULL, NULL, NULL),
(2, 'nisha santha', 'dilankanishka2104@gmail.com', NULL, '0778865442', '$2y$12$goDn30aI3Ye2AM8wjRpPGedIRaooGyW9baa/WBmwaOwuP6Z.OakE.', 'japan', 'user', NULL, NULL, '2024-05-05 20:38:47'),
(3, 'Stephen Watsica', 'alexane50@example.com', '2024-04-18 05:16:19', '', '$2y$12$cRv6UT9FhMLQX8b9YAgftOU9qO0hAOx.WvEPdO0StGBvzKbTi5p7.', 'Lithuania', 'user', 'LGP6I5EMYL', '2024-04-18 05:16:19', '2024-04-18 05:16:19'),
(4, 'Joesph ', 'christop60@example.net', '2024-04-18 05:16:19', '', '$2y$12$cRv6UT9FhMLQX8b9YAgftOU9qO0hAOx.WvEPdO0StGBvzKbTi5p7.', 'Thailand', 'user', 'OLgLYlAkWK', '2024-04-18 05:16:19', '2024-04-18 05:16:19'),
(5, 'Allan Luettgen', 'ethan.little@example.org', '2024-04-18 05:16:19', '', '$2y$12$cRv6UT9FhMLQX8b9YAgftOU9qO0hAOx.WvEPdO0StGBvzKbTi5p7.', 'Namibia', 'user', 'T1IYKR3eob', '2024-04-18 05:16:19', '2024-04-18 05:16:19'),
(6, 'Mozell Mohr', 'sigrid50@example.com', '2024-04-18 05:16:19', '', '$2y$12$cRv6UT9FhMLQX8b9YAgftOU9qO0hAOx.WvEPdO0StGBvzKbTi5p7.', 'Sudan', 'user', '8Ef93Wwg6J', '2024-04-18 05:16:19', '2024-04-18 05:16:19'),
(7, 'Bernard Crooks', 'lisa.gleichner@example.org', '2024-04-18 05:16:19', '', '$2y$12$cRv6UT9FhMLQX8b9YAgftOU9qO0hAOx.WvEPdO0StGBvzKbTi5p7.', 'Paraguay', 'user', '55We6ErNSc', '2024-04-18 05:16:19', '2024-04-18 05:16:19'),
(8, 'Test User', 'test@example.com', '2024-04-18 05:16:19', '', '$2y$12$cRv6UT9FhMLQX8b9YAgftOU9qO0hAOx.WvEPdO0StGBvzKbTi5p7.', 'British Virgin Islands', 'user', '7IF1J2FFIV', '2024-04-18 05:16:19', '2024-04-18 05:16:19'),
(9, 'sirimal', 'sirimal@gmail.com', NULL, '', '$2y$12$7J4ZNlkmbmvqmaMoLSa7POyzlukNmNZUb5FvspZGgXzn8DgFQ3wc.', 'japan', 'user', NULL, '2024-04-19 14:16:50', '2024-04-19 14:16:50'),
(10, 'kanishka', 'kanishka@gmail.com', NULL, '0779966434', '$2y$12$GqEJKxL1Dd6iB49TvdrLRea2C7/G7iKRzwntfByw4XCicZ3VVlkbq', 'America', 'user', NULL, '2024-05-06 00:17:20', '2024-05-06 20:43:20'),
(11, 'sivanthi', 'sivanthi@gmail.com', NULL, '0725489631', '$2y$12$tY.CuYT5W7KgrhJIKEVONOAWxoXABzmoOVjg3bxE6EHSuwT3sXpDK', 'sri lanka', 'user', NULL, '2024-05-06 00:32:30', '2024-05-06 00:32:30'),
(12, 'vishwa', 'vishwa@gmail.com', NULL, '0789631578', '$2y$12$AZdRgqv1T5osIJf3/vSvHOr3pypaSTgMexixOF3e..h0SIlihDFMi', 'china', 'user', NULL, '2024-05-06 00:33:31', '2024-05-06 00:33:31'),
(13, 'sirinimala', 'sirinimala@gmail.com', NULL, '0786541239', '$2y$12$d99estYlkDu.wX79Yo/kEemeWxBpMHLot5XvOfY3i9NA4ncubIY.q', 'japan', 'user', NULL, '2024-05-06 00:39:21', '2024-05-06 08:39:35'),
(14, 'amali', 'amali@gmail.com', NULL, '0778523647', '$2y$12$BrxaDQqkzfalH32OURdrAuixOEE4UyCYYsplf96zKzTv9zUwLKZZS', 'japan', 'user', NULL, '2024-05-06 20:59:33', '2024-05-06 20:59:33'),
(15, 'surith', 'surith@gmail.com', NULL, '0786452897', '$2y$12$KoeYQE0LRvu8cHQGk0WKFOLg8LHKZSTLp8a5n/ogLt6lyw.JFzLZi', 'london', 'user', NULL, '2024-05-07 10:00:45', '2024-05-07 10:00:45'),
(16, 'avantha', 'avantha@gmail.com', NULL, '0798546322', '$2y$12$wAJqcl/xNxo4hoNOb41AIu9.xUG/xODXqT2ipZuKSM72XTFonS4R6', 'sri lanka', 'user', NULL, '2024-05-07 18:48:26', '2024-05-07 18:49:25'),
(17, 'supun', 'supun@gmail.com', NULL, '0784569874', '$2y$12$Pdku0H.Sz9QWHRNKY/KoP.LgtNbAulvvmRVoRHliiekX7Z5FTJApK', 'japan', 'user', NULL, '2024-05-07 22:26:47', '2024-05-07 22:26:47'),
(18, 'pasindu', 'pasindu@gmail.com', NULL, '0789462145', '$2y$12$PUMBEYdN0RqIIKAuqJI6ROiRQlQ3MmPOhUVFr5Y2kNbO1eagAVJci', 'sri lanka', 'user', NULL, '2024-05-07 22:52:23', '2024-05-07 22:53:17'),
(19, 'nimal', 'nimal@gmail.com', NULL, '0789854786', '$2y$12$ww0HCgbS5uDbUyz6yy6qZul4CxSt6HAiv29bxj50Df0N9S79yKh7m', 'japan', 'user', NULL, '2024-05-21 12:28:46', '2024-05-21 12:28:46'),
(20, 'Dilan', 'dilan@gmail.com', NULL, '0776644853', '$2y$12$foefw/Ae4vAgf83VgwwkAuw/i9cd2HQx66vgTaOr0Wgr65yT7yug2', 'Sri lanka', 'user', NULL, '2024-05-23 21:53:39', '2024-05-23 21:53:39');

-- --------------------------------------------------------

--
-- Table structure for table `user_massages`
--

CREATE TABLE `user_massages` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `subject` varchar(255) NOT NULL,
  `discription` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_massages`
--

INSERT INTO `user_massages` (`id`, `user_name`, `email`, `subject`, `discription`, `created_at`, `updated_at`) VALUES
(19, 'Nimal Shantha', 'nimalshantha67@gmail.com', 'Inquiry about Family Package', 'Hi, I would like to know more about the family package for this summer. Can you provide details on the pricing and itinerary?', '2024-05-23 17:19:40', '2024-05-23 17:19:40'),
(20, 'Amarasinhge athapaththu', 'amarasinhge99@gmail.com', 'Payment Issue', 'I encountered an issue while trying to make a payment for the Thailand Adventure package. Please assist.', '2024-05-23 17:27:21', '2024-05-23 17:27:21');

-- --------------------------------------------------------

--
-- Table structure for table `user_reviews`
--

CREATE TABLE `user_reviews` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `user_name` varchar(255) DEFAULT NULL,
  `user_counrty` varchar(255) DEFAULT NULL,
  `user_discription` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bookings`
--
ALTER TABLE `bookings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `bookings_user_id_foreign` (`user_id`);

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
-- Indexes for table `sessions`
--
ALTER TABLE `sessions`
  ADD PRIMARY KEY (`id`),
  ADD KEY `sessions_user_id_index` (`user_id`),
  ADD KEY `sessions_last_activity_index` (`last_activity`);

--
-- Indexes for table `travel_packages`
--
ALTER TABLE `travel_packages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_massages`
--
ALTER TABLE `user_massages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_reviews`
--
ALTER TABLE `user_reviews`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `bookings`
--
ALTER TABLE `bookings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `jobs`
--
ALTER TABLE `jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `travel_packages`
--
ALTER TABLE `travel_packages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_massages`
--
ALTER TABLE `user_massages`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `user_reviews`
--
ALTER TABLE `user_reviews`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `bookings`
--
ALTER TABLE `bookings`
  ADD CONSTRAINT `bookings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
