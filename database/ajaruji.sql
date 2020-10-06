-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Oct 06, 2020 at 10:33 AM
-- Server version: 10.4.14-MariaDB
-- PHP Version: 7.4.10

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `ajaruji`
--

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `copyright` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link1_text` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `link2_sublink1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link2_sublink2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `footer`
--

INSERT INTO `footer` (`id`, `copyright`, `link1`, `link2`, `link3`, `link1_text`, `link2_sublink1`, `link2_sublink2`) VALUES
(1, 'Copyright Ajar Uji - All Rights Reserved', 'Address', 'About Us', 'Contact', 'Jl. Warung Buncit Raya No.40D, RT.1/RW.2, Duren Tiga, Kec. Pancoran, Kota Jakarta Selatan, Daerah Khusus Ibukota Jakarta 12760', 'Home', 'Privacy Policy');

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `item_id` int(11) NOT NULL,
  `path` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `screen_size` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `created_at`, `updated_at`, `item_id`, `path`, `screen_size`) VALUES
(1, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 1, 'assets/Logo Ajar Uji white-1.png', 1),
(2, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 1, 'assets/Logo Ajar Uji white-1@2x.png', 2),
(3, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 2, 'assets/Home Illustration.png', 1),
(4, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 2, 'assets/Home Illustration@2x.png', 2),
(5, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 3, 'assets/bank soal.png', 1),
(6, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 3, 'assets/bank soal@2x.png', 2),
(7, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 4, 'assets/Group 5.png', 1),
(8, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 4, 'assets/Group 5@2x.png', 2),
(9, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 5, 'assets/Group 3.png', 1),
(10, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 5, 'assets/Group 3@2x.png', 2),
(11, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 6, 'assets/Group 2.png', 1),
(12, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 6, 'assets/Group 2@2x.png', 2),
(13, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 7, 'assets/book.png', 1),
(14, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 7, 'assets/book@2x.png', 2),
(15, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 8, 'assets/study1.jpg', 1),
(16, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 9, 'assets/study2.jpg', 1),
(17, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 10, 'assets/study3.jpg', 1),
(18, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 11, 'assets/study4.jpg', 1),
(19, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 12, 'assets/study5.jpg', 1),
(20, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 13, 'assets/monthly.png', 1),
(21, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 13, 'assets/monthly@2x.png', 2),
(22, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 14, 'assets/yearly.png', 1),
(23, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 14, 'assets/yearly@2x.png', 2),
(24, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 15, 'assets/group.png', 1),
(25, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 15, 'assets/group@2x.png', 2),
(26, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 16, 'assets/profilepic1.png', 1),
(27, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 17, 'assets/profilepic2.png', 1),
(28, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 18, 'assets/profilepic3.png', 1),
(29, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 19, 'assets/profilepic4.png', 1),
(30, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 20, 'assets/profilepic3.png', 1),
(31, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 21, 'assets/profilepic4.png', 1),
(32, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 22, 'assets/Logo Ajar Uji white-1.png', 1),
(33, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 22, 'assets/Logo Ajar Uji white-1@2x.png', 2),
(34, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 23, 'assets/mail.png', 1),
(35, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 23, 'assets/mail@2x.png', 2),
(36, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 24, 'assets/instagram.png', 1),
(37, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 24, 'assets/instagram@2x.png', 2),
(38, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 25, 'assets/whatsapp.png', 1),
(39, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 25, 'assets/whatsapp-1@2x.png', 2);

-- --------------------------------------------------------

--
-- Table structure for table `items`
--

CREATE TABLE `items` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `section_id` int(11) NOT NULL,
  `item_number` int(11) NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `additional_info` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `items`
--

INSERT INTO `items` (`id`, `created_at`, `updated_at`, `section_id`, `item_number`, `title`, `description`, `additional_info`) VALUES
(1, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 1, 1, NULL, NULL, NULL),
(2, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 2, 1, NULL, NULL, NULL),
(3, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 3, 1, '20.000 Lebih Soal Tersedia', 'Ajar uji memiliki bank soal lengkap, dengan 20.000 lebih soal tersedia.', NULL),
(4, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 3, 2, 'Penjelasan yang Menarik', 'Materi disakin dengan cara yang menarik, belajar jadi menyenangkan', NULL),
(5, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 3, 3, 'Rekam Perkembangan', 'Perkembangan nilai dapat dengan mudah dilihat atau dipantau', NULL),
(6, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 3, 4, 'Kemudahan Aset', 'Belajar di manapun dan kapanpun dengan kemudahan akses Ajar uji', NULL),
(7, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 3, 5, 'Mata Pelajaran Lengkap', 'Ajar uji menyediakan mata pelajaran dan kurikulum yang lengkap', NULL),
(8, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 5, 1, NULL, NULL, NULL),
(9, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 5, 2, NULL, NULL, NULL),
(10, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 5, 3, NULL, NULL, NULL),
(11, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 5, 4, NULL, NULL, NULL),
(12, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 5, 5, NULL, NULL, NULL),
(13, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 6, 1, 'Rp39.000/Bulan', 'Akses tak terhingga dengan berlangganan bulanan di Ajar Uji.', 'Bulanan'),
(14, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 6, 2, 'Rp29.000/Bulan', 'Penawaran terbaik dengan berlangganan selama setahun.', 'Tahunan'),
(15, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 6, 3, 'Rp550.000/Bulan', 'Belajar bersama Ajar Uji bersama teman lebih menarik.', 'Grup'),
(16, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 7, 1, 'Ria Kamila', 'Ajaruji mempermudah saya dalammemahami mata pelajaran yang sebelumnya tidak saya mengeri. Kini nilai saya menjadi lebih baik...', 'Siswi SMP Jakarta'),
(17, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 7, 2, 'Samuel', 'Cara penyampaian materi yang menarik, tidak membuat bosan, dan saya sangat senang belajar dengan Ajaruji.', 'Siswa SMP Yogyakarta'),
(18, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 7, 3, 'Ratnasari', 'Tidak keluar keluar uang untuk beli buku les. Semua materi sudah tercantum online, mudahnya belajar di Ajaruji.', 'Siswi SMA Surabaya'),
(19, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 7, 4, 'Antoni', 'Pengajarnya asik dan menyenangkan, belajar di Ajaruji rasanya seperti sedang bermain.', 'Siswa SD Bekasi'),
(20, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 7, 5, 'Syifa', 'Ujian sekolahku sangat terbantu!', 'Siswi SD Magelang'),
(21, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 7, 6, 'Jodhi', 'Murah, menarik, dan bermanfaat.', 'Siswa SMA Tangerang'),
(22, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 8, 1, NULL, NULL, NULL),
(23, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 8, 2, NULL, 'info@ajaruji.com', NULL),
(24, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 8, 3, NULL, 'ajaruji', NULL),
(25, '2020-10-06 01:32:48', '2020-10-06 01:32:48', 8, 4, NULL, '0812-1314-1516', NULL);

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
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2020_10_04_005423_create_sections_table', 1),
(5, '2020_10_04_005813_create_items_table', 1),
(6, '2020_10_04_010156_create_navbar_table', 1),
(7, '2020_10_04_010256_create_footer_table', 1),
(8, '2020_10_04_052907_seed_items_data', 1),
(9, '2020_10_04_053826_create_images_table', 1),
(10, '2020_10_04_054301_seed_images_data', 1);

-- --------------------------------------------------------

--
-- Table structure for table `navbar`
--

CREATE TABLE `navbar` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `link1` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link2` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link3` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link4` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `link5` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `navbar`
--

INSERT INTO `navbar` (`id`, `link1`, `link2`, `link3`, `link4`, `link5`, `button`) VALUES
(1, 'Beranda', 'Uji Coba', 'Fitur', 'Berlangganan', 'Tentang Kami', 'Masuk');

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
-- Table structure for table `sections`
--

CREATE TABLE `sections` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `button` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `sections`
--

INSERT INTO `sections` (`id`, `created_at`, `updated_at`, `title`, `description`, `button`) VALUES
(1, '2020-10-06 01:32:47', '2020-10-06 01:32:47', 'navbar', 'navbar', NULL),
(2, '2020-10-06 01:32:47', '2020-10-06 01:32:47', 'Platform Sekolah Online yang Menyenangkan', 'Belajar lebih mudah, kapanpun, di manapun, mudah dijangkau hingga ke pelosok negeri.', 'Mulai Belajar'),
(3, '2020-10-06 01:32:47', '2020-10-06 01:32:47', 'Manfaat yang Kamu Dapatkan', 'Dapatkan pengalaman belajar terbaik dengan fitur menarik di Ajar Uji', NULL),
(4, '2020-10-06 01:32:47', '2020-10-06 01:32:47', 'Demo Ajar Uji', 'Uji coba kemampuan kamu dalam menjawab soal Try Out di Ajar Uji', 'Mulai Uji Coba'),
(5, '2020-10-06 01:32:47', '2020-10-06 01:32:47', 'Apa itu Ajar Uji?', 'Ajar uji merupakan platform belajar online yang mempermudah siswa, guru, dan sekolah dalam melaksanakan kegiatan belajar dan mengajar. Ajar uji menyediakan kelas online, penjelasan yang disajikan dengan menarik, bank soal, mata pelajaran, dan kurikulum yang lengkap.', NULL),
(6, '2020-10-06 01:32:47', '2020-10-06 01:32:47', 'Penawaran Terbaik', 'Dapatkan penawaran menarik untuk akses tak terhingga belajar dengan Ajar Uji.', NULL),
(7, '2020-10-06 01:32:47', '2020-10-06 01:32:47', 'Mengapa Memilih Ajar Uji?', 'Ajar uji memiliki banyak keunggalan yang menjadi pilihan terbaik. Berikut kata mereka yang telah bergabung dan belajar dengan Ajar Uji:', NULL),
(8, '2020-10-06 01:32:47', '2020-10-06 01:32:47', 'footer', 'footer', NULL);

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
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `items`
--
ALTER TABLE `items`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `navbar`
--
ALTER TABLE `navbar`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `sections`
--
ALTER TABLE `sections`
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
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=40;

--
-- AUTO_INCREMENT for table `items`
--
ALTER TABLE `items`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `navbar`
--
ALTER TABLE `navbar`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `sections`
--
ALTER TABLE `sections`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
