-- phpMyAdmin SQL Dump
-- version 4.9.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Mar 11, 2020 at 06:27 PM
-- Server version: 10.4.8-MariaDB
-- PHP Version: 7.2.23

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `blog`
--

-- --------------------------------------------------------

--
-- Table structure for table `admins`
--

CREATE TABLE `admins` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admins`
--

INSERT INTO `admins` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', '$2y$10$Y7VJOtB4cloBpLQcfpFDMOjZQq/ileNe17LED5fEIwFRh7aA.RzH.', NULL, '2020-03-01 10:59:02', '2020-03-02 06:08:14'),
(2, 'Atikul Hoque', 'atikulhoque17@gmail.com', '$2y$10$07h3oxg/i6wjPuOjQQpcAe4zbJID8LOUf5eVS4XeF9ErLnGjJNLyC', NULL, '2020-03-01 12:11:58', '2020-03-01 12:11:58'),
(3, 'Emon', 'atikulhoque1717@gmail.com', '$2y$10$JJPTfOKCwUbMNzBlHy3qhuC8zKLdahH4mE6dPEBkx1Yis2hdgIT1O', NULL, '2020-03-09 07:38:19', '2020-03-09 07:38:19');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(11) NOT NULL,
  `categoryName` varchar(50) NOT NULL,
  `shortDescription` varchar(200) NOT NULL,
  `publicationStatus` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp(),
  `updated_at` date NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `categoryName`, `shortDescription`, `publicationStatus`, `created_at`, `updated_at`) VALUES
(1, 'T Shirt', 'This is for T-shirt', 1, '2020-03-09 14:22:00', '2020-03-05'),
(2, 'Three Pice', 'This is for Kids', 1, '2020-03-10 12:01:08', '2020-03-10'),
(3, 'Sharee', 'This is for woman', 1, '2020-03-03 12:26:13', '2020-03-03'),
(5, 'Panjabi', 'This is for Panjabai', 1, '2020-03-04 10:48:28', '2020-03-04'),
(6, 'Wallet', 'This is for wallet', 1, '2020-03-09 08:19:54', '2020-03-09'),
(7, 'Footware', 'This is for footware', 1, '2020-03-09 08:37:31', '2020-03-09'),
(8, 'Watch', 'this is for watch', 1, '2020-03-09 08:42:59', '2020-03-09'),
(9, 'Jewellery', 'This is for jewellery', 1, '2020-03-10 05:34:23', '2020-03-10'),
(10, 'Ladies Bag', 'This is for bag', 1, '2020-03-10 07:00:28', '2020-03-10');

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
(4, '2018_07_28_133433_create_admins_table', 2),
(5, '2014_10_12_000000_create_categories_table', 3),
(6, '2014_10_12_000000_create_categoriess_table', 4),
(7, '2014_10_12_000000_create_products_table', 5);

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `password_resets`
--

INSERT INTO `password_resets` (`email`, `token`, `created_at`) VALUES
('a@gmail.com', '$2y$10$bD7Uel4Hj7UscM1/75.h.umdvqYozBgB59T6IP3GDj6yjo.b3T51a', '2020-03-01 10:28:02'),
('atikulhoque17@gmail.com', '$2y$10$dEp4IyeWfpSOrddlr9s3POyKLbfJREF9LDQQWps42rvxEKhPomiYO', '2020-03-01 12:44:45');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `productName` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `caregoryId` tinyint(4) NOT NULL,
  `price` double(10,2) NOT NULL,
  `qty` int(11) NOT NULL,
  `Description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `pic` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publicationStatus` tinyint(4) NOT NULL,
  `prostatus` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `productName`, `caregoryId`, `price`, `qty`, `Description`, `pic`, `publicationStatus`, `prostatus`, `created_at`, `updated_at`) VALUES
(1, 'T Shirt', 1, 480.00, 20, 'prints. Spread collar and left chest pocket.', 'productImage/1bp-76.jpg', 1, '1', '2020-03-04 03:52:15', '2020-03-04 10:55:08'),
(2, 'Menz Panjabi', 5, 340.00, 50, 'Blue-grey cotton panjabi with embroidery and dual side in-seam pockets. Embroidery work is completed with blue, ivory, grey and black thread. Pair it with waistcoat, pajama and other accessories.', 'productImage/2bp-3.jpg', 1, '1', '2020-03-04 03:53:57', '2020-03-04 10:50:42'),
(3, 'Sharda Sarees Blue', 3, 3400.00, 30, 'Black linen kurta. Features yellow and black weaved attached long coat. Pair it with pant, scarves and other accessories.', 'productImage/3silk-saree-png-.png', 1, '2', '2020-03-04 03:54:17', '2020-03-10 05:25:42'),
(4, 'Menz Tshirt', 1, 500.00, 20, 'The details you provide for a product affect the way the product appears to customers, make it easier for you to organize your products, and help customers find the product.', 'productImage/4bp-75.jpg', 1, '1', '2020-03-04 03:55:43', '2020-03-04 11:14:14'),
(6, 'Ladies Cotton Three Pice', 2, 650.00, 543, 'The salwar kameez, popularly known as the Punjabi suit, is a combination of three pieces-Salwar, Kameez, and Dupatta. It is a traditional attire of women in the Punjab region of northwestern India and eastern Pakistan.', 'productImage/6Simple-Salwar-Suit-for-Womens.jpg', 1, '1', '2020-03-04 04:03:50', '2020-03-10 06:05:01'),
(7, 'Womans Sharee', 3, 20000.00, 5, 'Fuchsia printed cotton saree with applique, embroidery and tassel trimmed aanchal. Comes with matching unstitched blouse piece. Embroidery work is completed with white, green and yellow thread.', 'productImage/7112-1120734_sharda-sarees-blue-and-red-designer-embroidered-saree.png', 1, '2', '2020-03-04 04:04:30', '2020-03-09 09:13:22'),
(8, 'Black Printed Viscose-Cotton Panjabi', 5, 690.00, 10, 'Black viscose-cotton panjabi interlaced with white and black printed patch.', 'productImage/8bp-2.jpg', 1, '1', '2020-03-04 11:01:33', '2020-03-09 09:17:10'),
(10, 'Coffee colour Orginal Leather', 6, 600.00, 20, 'About Men\'s Wallet A wallet is a small, flat case that can be used to carry such personal items as cash, credit cards, and identification documents, photographs, transit pass, gift cards, business cards and other paper or laminated cards. Wallets are generally made of leather or fabrics, and they are usually pocket-sized but not always foldable.', 'productImage/10Rednecks-and-radicals_Wallet_A.png', 1, '3', '2020-03-09 08:24:28', '2020-03-09 08:34:14'),
(11, 'Star Emerald Exports', 7, 3800.00, 30, 'Footwear refers to garments worn on the feet, which originally serves to purpose of protection against adversities of the environment, usually regarding ground textures and temperature.', 'productImage/11guide-how-to-care-for-leather-shoes.jpg', 1, '2', '2020-03-09 08:39:55', '2020-03-10 05:27:01'),
(12, 'MEGIR Men\'s Wrist Watches', 8, 4500.00, 30, 'Shop for men’s watches online from Flipkart from the biggest names in the country including Casio, Fossil, Sonata, Fastrack, Timex, Titan, Citizen, Maxima, Daniel Klein, Ferrari and Provogue among dozens of other names.', 'productImage/12The-Latest-Watches-Gold-Watches-Men-Wrist-Waterproof-Watch.jpg', 1, '3', '2020-03-09 08:45:49', '2020-03-09 08:45:50'),
(13, 'Anirban Sharee Women Cotton', 3, 3800.00, 30, 'Upto 70% Off on bangladeshi saree price in bangladesh 2020 at Daraz bd. Shop online for jorjet, benaroshi, holud, japani silk, half silk saree ..', 'productImage/1381Lwk866NLL._UY606_.jpg', 1, '2', '2020-03-10 04:51:00', '2020-03-10 04:51:00'),
(14, 'Goldplate Necklace Set', 9, 4800.00, 30, 'Today 21K Gold Rate in Bangladesh per Gram in Taka (BDT). The price of 21 karat gold is updated at 03:54:00 am (GMT Time) and according to Dhaka time. 21K is. ... Description of 21 Carat Gold per Gram in Bangladesh.', 'productImage/14161-1611338_22kt-gold-necklace-set-pc-chandra-jewellers-necklace.png', 1, '2', '2020-03-10 05:37:58', '2020-03-10 05:41:45'),
(15, 'Goldplate Churi Set', 9, 2800.00, 20, 'Today 21K Gold Rate in Bangladesh per Gram in Taka (BDT). The price of 21 karat gold is updated at 03:54:00 am (GMT Time) and according to Dhaka time. 21K is. ... Description of 21 Carat Gold per Gram in Bangladesh.', 'productImage/151644625-exclusive-jewellery-gold-bangle-designs-gold-png-672_480_preview.png', 1, '2', '2020-03-10 05:42:19', '2020-03-10 05:42:19'),
(16, 'Goldplate Ear Ring', 9, 2600.00, 30, 'Today 21K Gold Rate in Bangladesh per Gram in Taka (BDT). The price of 21 karat gold is updated at 03:54:00 am (GMT Time) and according to Dhaka time. 21K is. ... Description of 21 Carat Gold per Gram in Bangladesh.', 'productImage/16193-1931464_chungath-jewellery-earrings-collection-hd-png-download.png', 1, '2', '2020-03-10 05:42:59', '2020-03-10 05:42:59'),
(17, 'Ladies Cotton Three Pice', 2, 780.00, 50, 'The salwar kameez, popularly known as the Punjabi suit, is a combination of three pieces-Salwar, Kameez, and Dupatta. It is a traditional attire of women in the Punjab region of northwestern India and eastern Pakistan.', 'productImage/17ladies-kurti-500x500.png', 1, '2', '2020-03-10 06:06:08', '2020-03-10 06:06:08'),
(18, 'Luxury Women Handbag', 10, 1600.00, 50, 'New Arrival Metallic color Ladies large Capacity tote bags.30cm(W) x 25cm(H) x 14cm(thickness)', 'productImage/1881qOAlbBTdL._UL1500_.jpg', 1, '2', '2020-03-10 11:45:32', '2020-03-10 11:45:32'),
(19, 'Luxury Women Handbag', 10, 2600.00, 40, 'New Arrival Metallic color Ladies large Capacity tote bags.High quality of PU as per photo or  other available material.', 'productImage/19rBVaVFycMXSABww2AAB5brzaimw821.jpg', 1, '1', '2020-03-10 11:48:50', '2020-03-10 11:48:50'),
(20, 'Luxury Women Handbag', 10, 1200.00, 40, 'New Arrival Metallic color Ladies large Capacity tote bags.\r\nHigh quality of PU as per photo or  other available material.', 'productImage/20AHKN23-1-HKDASHAN-New-Style-Design-Leather.jpg_350x350.jpg', 1, '3', '2020-03-10 11:52:07', '2020-03-10 11:52:08');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'Atikul Hoque', 'a@gmail.com', NULL, '$2y$10$1baknzxbmW1N7SnbmqTeju/SlWWnt/io4r9HKck6xjbHh9q6F4ouW', NULL, '2020-03-01 10:27:50', '2020-03-01 10:27:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admins`
--
ALTER TABLE `admins`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `admins_email_unique` (`email`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

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
-- AUTO_INCREMENT for table `admins`
--
ALTER TABLE `admins`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
