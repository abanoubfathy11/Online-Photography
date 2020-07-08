-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Sep 12, 2019 at 01:03 PM
-- Server version: 10.3.16-MariaDB
-- PHP Version: 7.3.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `pic`
--

-- --------------------------------------------------------

--
-- Table structure for table `album`
--

CREATE TABLE `album` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `application`
--

CREATE TABLE `application` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `location` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `application`
--

INSERT INTO `application` (`id`, `location`, `email`, `phone`, `status`, `package_id`, `created_at`, `updated_at`) VALUES
(1, 'fdsf', 'ahmadabdelhafeez1@gmail.com', '01100136811', 'fdf', 1, '2019-09-12 07:49:32', '2019-09-12 07:49:32'),
(2, 'cairo', 'ahmadabdelhafeez1@gmail.com', '01100136811', 'asdfghjkjhgfd', 1, '2019-09-12 07:56:03', '2019-09-12 07:56:03');

-- --------------------------------------------------------

--
-- Table structure for table `contactpage`
--

CREATE TABLE `contactpage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contactpage`
--

INSERT INTO `contactpage` (`id`, `address`, `phone`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Cairo,Egypt', '01100136811', 'Andy.Andy@gmail.com', NULL, NULL);

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
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `content` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `content`, `email`, `created_at`, `updated_at`) VALUES
(1, 'Keep Going Andy :)))))))))', 'ahmadabdelhafeez1@gmail.com', '2019-09-12 06:58:36', '2019-09-12 06:58:36'),
(10, 'عاااااااش يسطااااا', 'ahmadabdelhafeez1@gmail.com', '2019-09-12 07:04:18', '2019-09-12 07:04:18'),
(11, 'ايواااا', 'ahmadabdelhafeez1@gmail.com', '2019-09-12 07:06:50', '2019-09-12 07:06:50'),
(12, 'fhksdjfsdf', 'ahmadabdelhafeez1@gmail.com', '2019-09-12 07:51:04', '2019-09-12 07:51:04');

-- --------------------------------------------------------

--
-- Table structure for table `homepage`
--

CREATE TABLE `homepage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner3` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner4` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner5` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner6` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner7` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `homepage`
--

INSERT INTO `homepage` (`id`, `banner1`, `banner2`, `banner3`, `banner4`, `banner5`, `banner6`, `banner7`, `created_at`, `updated_at`) VALUES
(1, 'Hello, I’m Gemma and I am a Wedding and Family Photographer. I specialise in natural, beautiful story telling ~ I love to capture events as they happen, creatively and artistically documenting real memories whilst staying as invisible as possible. You’ll find no cheese or gimmicks here, no awkward poses or hours of stuffy formals; but simply heartfelt, organic, authentic Wedding and Family Photography, full of light, love, laughter and happiness. ', '“A photographer with heart, and with a natural talent for creating honest, love-filled imagery.”', 'null', 'null', '“Endlessly enthusiastic, Gemma has a real passion for her work which shines through in spades, not only in the quality of the end product, but in every aspect of working with her. She has exceeded all our expectations. First class photographer, can’t praise her highly enough!”', '“The service we received from Gemma was fantastic from start to finish. She thinks of every little detail and makes you feel completely at ease, just like having an amazing friend guiding you through everything. The photos are stunning ~ natural, creative and beautifully lit ~ and we hardly even noticed she was there. We recommend her to everyone!”', 'null', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `infopage`
--

CREATE TABLE `infopage` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `banner1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price1` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `price2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `banner2` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `infopage`
--

INSERT INTO `infopage` (`id`, `banner1`, `price1`, `price2`, `banner2`, `created_at`, `updated_at`) VALUES
(1, '“Thank you again so much for bringing your enormous talent, your calming presence and your sharp eye for a laughing crowd or a sweet tender moment to our wedding! We are beyond delighted with all of our photos! They are more beautiful than we dreamed! You’re amazing Andy!”', 'Prices from 350LE - 950LE ', 'Prices from 250E\r\n\r\n', '“Oh my goodness!! Thank you so so much for our beautiful photographs of our wedding! Words can’t describe how perfectly you captured our day, they are wonderfully composed and pure happiness just jumps out of the photos! We love them so much!\r\nYou were a complete professional and extremely discrete and honestly we have the best wedding photos we could have wished for. They are full of life and tell our story perfectly! Thank you so so much again! We can’t stop looking at them now :)”\r\n', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `location`
--

CREATE TABLE `location` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `shortname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `photo_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `member`
--

CREATE TABLE `member` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `member`
--

INSERT INTO `member` (`id`, `name`, `phone`, `email`, `password`, `address`, `created_at`, `updated_at`) VALUES
(1, 'ahmad', '01100136811', 'ahmadabdelhafeez1@gmail.com', 'ahmad', 'cairo', '2019-09-12 06:58:20', '2019-09-12 06:58:20');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `id` int(10) UNSIGNED NOT NULL,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2019_09_12_081941_create_users_table', 1),
(2, '2019_09_12_082106_create_password_resets_table', 1),
(3, '2019_09_12_082123_create_photo_table', 1),
(4, '2019_09_12_082135_create_album_table', 1),
(5, '2019_09_12_082148_create_package_table', 1),
(6, '2019_09_12_082201_create_location_table', 1),
(7, '2019_09_12_082217_create_application_table', 1),
(8, '2019_09_12_082230_create_member_table', 1),
(9, '2019_09_12_082246_create_feedback_table', 1),
(10, '2019_09_12_082354_create_home_page_table', 1),
(11, '2019_09_12_082405_create_info_page_table', 1),
(12, '2019_09_12_082424_create_contact_page_table', 1),
(13, '2019_09_12_082612_create_failed_jobs_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `price` double(8,2) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `photo`
--

CREATE TABLE `photo` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `path` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `package_id` int(11) NOT NULL,
  `member_id` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `photo`
--

INSERT INTO `photo` (`id`, `title`, `description`, `path`, `package_id`, `member_id`, `created_at`, `updated_at`) VALUES
(1, 'Pride', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/1640804216.jpg', 1, 0, '2019-09-12 07:13:17', '2019-09-12 07:13:17'),
(2, 'Pride', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/753106441.jpg', 1, 0, '2019-09-12 07:13:46', '2019-09-12 07:13:46'),
(3, 'Pride', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/835380518.jpg', 1, 0, '2019-09-12 07:14:02', '2019-09-12 07:14:02'),
(4, 'Pride and husband', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/128114810.jpeg', 1, 0, '2019-09-12 07:14:56', '2019-09-12 07:14:56'),
(5, 'street', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/1917449150.jpg', 3, 0, '2019-09-12 07:15:22', '2019-09-12 07:15:22'),
(6, 'stanly bridage', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/705668037.jpg', 3, 0, '2019-09-12 07:15:46', '2019-09-12 07:15:46'),
(7, 'train station', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/944992507.jpg', 3, 0, '2019-09-12 07:16:05', '2019-09-12 07:16:05'),
(8, 'Alex', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/2015748314.jpg', 3, 0, '2019-09-12 07:16:28', '2019-09-12 07:16:28'),
(9, 'River Nile', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/165738668.jpg', 3, 0, '2019-09-12 07:16:48', '2019-09-12 07:16:48'),
(10, 'Zamalek', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/1739793865.jpg', 3, 0, '2019-09-12 07:17:05', '2019-09-12 07:17:05'),
(11, 'Sisters', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/1914822308.jpg', 2, 0, '2019-09-12 07:17:19', '2019-09-12 07:17:19'),
(12, 'Queen', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/1238517652.jpg', 2, 0, '2019-09-12 07:17:32', '2019-09-12 07:17:32'),
(13, 'Death Place', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/1965040018.jpg', 2, 0, '2019-09-12 07:18:01', '2019-09-12 07:18:01'),
(14, 'Beauty Girl', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/1048267732.jpg', 2, 0, '2019-09-12 07:18:31', '2019-09-12 07:18:31'),
(15, 'Child', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/1823173339.jpg', 2, 0, '2019-09-12 07:18:50', '2019-09-12 07:18:50'),
(16, 'El flaah', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/1961701954.jpg', 3, 0, '2019-09-12 07:19:27', '2019-09-12 07:19:27'),
(17, 'Qasr el nile bridage', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/268719974.jpg', 3, 0, '2019-09-12 07:20:04', '2019-09-12 07:20:04'),
(18, 'Death Place', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/259926225.jpg', 2, 0, '2019-09-12 07:20:29', '2019-09-12 07:20:29'),
(19, 'Sisters', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/1036194876.jpeg', 2, 0, '2019-09-12 07:20:54', '2019-09-12 07:20:54'),
(20, 'Pride', 'I’m a natural documentary photographer, so on the day I will photograph your wedding in my artistic style whilst remaining as invisible as possible. I will give you a timeless collection of beautiful, natural, creative documentary photographs, full of love and laughter, capturing the atmosphere, the details, the people and the memories, and faithfully telling the story of your wedding day.', 'images/115267705.jpg', 3, 0, '2019-09-12 08:00:03', '2019-09-12 08:00:03');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
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
-- Indexes for table `album`
--
ALTER TABLE `album`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `application`
--
ALTER TABLE `application`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contactpage`
--
ALTER TABLE `contactpage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `homepage`
--
ALTER TABLE `homepage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `infopage`
--
ALTER TABLE `infopage`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `location`
--
ALTER TABLE `location`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `member`
--
ALTER TABLE `member`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `photo`
--
ALTER TABLE `photo`
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
-- AUTO_INCREMENT for table `album`
--
ALTER TABLE `album`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `application`
--
ALTER TABLE `application`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `contactpage`
--
ALTER TABLE `contactpage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `homepage`
--
ALTER TABLE `homepage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `infopage`
--
ALTER TABLE `infopage`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `location`
--
ALTER TABLE `location`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `member`
--
ALTER TABLE `member`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `photo`
--
ALTER TABLE `photo`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
