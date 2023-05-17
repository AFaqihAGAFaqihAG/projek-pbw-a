-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: May 17, 2023 at 04:08 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.2.0

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cobacobacoba`
--

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
-- Table structure for table `laptop_information`
--

CREATE TABLE `laptop_information` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `brand` varchar(255) NOT NULL,
  `model` varchar(255) NOT NULL,
  `price` int(11) NOT NULL,
  `processor` varchar(255) NOT NULL,
  `ram` varchar(255) NOT NULL,
  `storage` varchar(255) NOT NULL,
  `display_size` varchar(255) NOT NULL,
  `port` varchar(255) NOT NULL,
  `operating_system` varchar(255) NOT NULL,
  `weight` int(11) NOT NULL,
  `description` text DEFAULT NULL,
  `image_path` text DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `laptop_information`
--

INSERT INTO `laptop_information` (`id`, `brand`, `model`, `price`, `processor`, `ram`, `storage`, `display_size`, `port`, `operating_system`, `weight`, `description`, `image_path`, `created_at`, `updated_at`) VALUES
(1, 'ASUS', 'ASUS TUF Gaming F15', 11799000, 'Intel Core i5-10300H Quad Core up to 4.5 GHz (8MB Cache)', '8GB DDR4 SO-DIMM 3200MHz', '512 GB PCIe NVMe M.2 SSD', 'IPS LCD, 15.6 inci Full HD 1920 x 1080 piksel, Refresh Rate 144Hz', 'USB 3.2 Type C, USB 3.2 Type A, HDMI, Audio Jack, RJ45', 'Windows 10 Home', 2300, 'ASUS TUF Gaming F15 merupakan salah satu laptop gaming murah terbaik di tahun 2023. Laptop gaming ini bisa memainkan game dengan handal berkat prosesor Intel Core generasi ke-10 terbaru dan VGA NVIDIA GeForce GTX 16. Anda bisa memainkan game dengan cepat dan lancar. Ditambah lagi, dengan layar IPS Full HD dengan Refresh Rate 144Hz membuat visual lebih mulus.', 'L1.png', '2023-04-12 09:37:37', '2023-04-12 09:37:37'),
(2, 'MSI', 'MSI GF63 Thin 11SC', 11999000, 'Intel Core i7-11800H Octa Core up to 4.6 GHz (24MB Cache)', '8GB DDR4-3200', '512 GB PCIe NVMe SSD', 'IPS-Level, 15.6 inci Full HD 1920 x 1080 piksel, Refresh Rate 144Hz', 'USB 3.2 Type C, USB 3.2 Type A, HDMI, RJ45, Audio Jack', 'Windows 10 Home', 1860, 'MSI GF63 Thin merupakan laptop gaming terbaik karena sudah didukung prosesor Intel Core generasi ke-11. 8 Core CPU miliknya punya performa hingga 40% lebih tinggi dibanding pendahulunya. Grafiknya lancar berkat GeForce GTX 16 terbaru dengan arsitektur NVIDIA Turing. Berdasarkan tes 3DMark Time Spy Benchmark (DX12), kinerja VGA ini 33% lebih tinggi dibanding GTX 10.', 'L2.png', '2023-04-12 09:37:37', '2023-04-12 09:37:37'),
(3, 'Lenovo', 'Lenovo IdeaPad Gaming 3', 12199000, 'AMD Ryzen 5 5600H Hexa Core up to 4.2 GHz (16MB Cache)', '8GB DDR4-3200', 'D512 GB PCIe NVMe M.2 SSD', 'IPS-Level, 15.6 inci Full HD 1920 x 1080 piksel, Refresh Rate 165Hz', 'USB 3.2 Type C, USB 3.2 Type A, HDMI, RJ45, Audio Jack', 'Windows 11 Home', 2250, 'Laptop gaming murah terbaik di tahun 2023 berikutnya adalah Lenovo IdeaPad Gaming 3. Laptop ini punya kinerja yang kompetitif berkat prosesor AMD Ryzen 5 seri 5000, NVIDIA GeForce RTX 30, memori DDR4, dan SSD. Layar Full HD dengan Refresh Rate 165Hz membuat visual grafik tetap jernih dan bebas screen tearing. Laptop ini punya HDMI supaya bisa dihubungkan ke monitor eksternal.', 'L3.png', '2023-04-12 09:37:37', '2023-04-12 09:37:37'),
(4, 'HP', 'HP Pavilion Gaming 15', 12299000, 'AMD Ryzen 5 5600H Hexa Core up to 4.2 GHz (16MB Cache)', '16GB DDR4', '512 GB NVMe SSD', 'IPS-Level, 15.6 inci Full HD 1920 x 1080 piksel, Refresh Rate 144Hz', 'USB 3.2 Type C, USB Type A, HDMI, Audio Jack', 'Windows 10 Home', 1980, 'Laptop HP Pavilion Gaming 15 merupakan laptop gaming murah yang bagus di tahun 2023. Laptop ini ditenagai prosesor AMD Ryzen dan NVIDIA GeForce GTX 16 untuk memenuhi kebutuhan gaming dan multitasking. Anda bisa rasakan pengalaman grafis lebih baik berkat dukungan arsitektur NVIDIA Turing yang bisa memainkan game lebih cepat.', 'L4.png', '2023-04-12 09:37:37', '2023-04-12 09:37:37'),
(5, 'MSI', 'MSI Bravo 15 B5DD', 13999000, 'AMD Ryzen 7 5800H Quad Core up to 4.4 GHz (16MB Cache)', '8GB DDR4', '512 GB SSD', 'IPS-Level, 15.6 inci Full HD 1920 x 1080 piksel, Refresh Rate 144Hz', 'USB 3.2 Type C, USB Type A, HDMI, Audio Jack', 'Windows 11 Home', 2350, 'Laptop MSI Bravo 15 B5DD menggabungkan prosesor AMD Ryzen 7 seri 5000 terbaru dan kartu grafik diskrit AMD Radeon RX 5500M. Laptop gaming murah terbaru 2022 ini memungkinkan Anda main game dan desain grafik lebih lancar. Teknologi Cooler Boost 5 dapat memaksimalkan performa maksimal dari CPU dan VGA sambil jaga kinerjanya tetap stabil.', 'L5.png', '2023-04-12 09:37:37', '2023-04-12 09:37:37'),
(6, 'Dell', 'Dell Gaming G15', 16500000, 'AMD Ryzen 5 5600H Hexa Core up to 4.2 GHz (16MB Cache)', '8GB DDR4', '256 GB NVMe PCIe SSD', 'IPS-Level, 15.6 inci Full HD 1920 x 1080 piksel, Refresh Rate 120Hz', 'USB 3.2 Type C, USB 3.2 Type A, HDMI, Audio Jack', 'Windows 10 Home', 2450, 'Dell Gaming G15 adalah laptop gaming murah dengan performa kuat untuk gaming sambil live streaming. Laptop ini ditenagai prosesor AMD Ryzen 5 seri 5000 dan VGA NVIDIA GeForce RTX 3050 yang mampu menjajal game PC yang berat. Desain termalnya terinspirasi dari produk Alienware yang menggabungkan pasokan udara ganda di atas dan bawah keyboard. Udara panas kemudian dikeluarkan dari ventilasi di samping dan belakang.', 'L6.png', '2023-04-12 09:37:37', '2023-04-12 09:37:37');

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
(2, '2014_10_12_100000_create_password_reset_tokens_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_04_04_143918_create_laptop_information_table', 1);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `token` varchar(64) NOT NULL,
  `abilities` text DEFAULT NULL,
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
  `name` varchar(255) NOT NULL,
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

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Ahmad Faqih Al Ghiffary', 'test@gmail.com', NULL, '$2y$10$yrQ4eD2GtFpoJcavdMrrdeDQFV/aNoPI8gB2JG42hnr.08LHUtNHO', 'jimnGbT1kVIcVkjqAkxkQw17bId3tj7YyWf1poYnYhAAgysMhma4ltlZrDjB', '2023-05-03 01:12:17', '2023-05-03 01:12:17');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `laptop_information`
--
ALTER TABLE `laptop_information`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `laptop_information`
--
ALTER TABLE `laptop_information`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=31;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
