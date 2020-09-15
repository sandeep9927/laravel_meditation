-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: localhost
-- Generation Time: Sep 14, 2020 at 04:17 PM
-- Server version: 8.0.21
-- PHP Version: 7.4.9

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `medi`
--

-- --------------------------------------------------------

--
-- Table structure for table `banners`
--

CREATE TABLE `banners` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `banners`
--

INSERT INTO `banners` (`id`, `title`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Meditation', '1599812084_.webp', 'Active', '2020-09-11 02:44:44', '2020-09-11 02:44:44');

-- --------------------------------------------------------

--
-- Table structure for table `blogs`
--

CREATE TABLE `blogs` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `technique_id` bigint UNSIGNED NOT NULL,
  `writer_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `blogs`
--

INSERT INTO `blogs` (`id`, `title`, `type`, `image`, `short_description`, `description`, `status`, `technique_id`, `writer_id`, `created_at`, `updated_at`) VALUES
(9, '1. Mindfulness meditation', '3', '1600077808_.jpeg', 'Mindfulness meditation originates from Buddhist teachings and is the most popular meditation technique in the West.', '<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', system-ui, sans-serif;\">Mindfulness meditation originates from Buddhist teachings and is the most popular meditation technique in the West.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', system-ui, sans-serif;\">In mindfulness meditation, you pay attention to your thoughts as they pass through your mind. You don&rsquo;t judge the thoughts or become involved with them. You simply observe and take note of any patterns. This practice combines concentration with awareness. You may find it helpful to focus on an object or your breath while you observe any bodily sensations, thoughts, or feelings.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', system-ui, sans-serif;\">This type of meditation is good for people who don&rsquo;t have a teacher to guide them, as it can be easily practiced alone.</p>', 'Active', 3, 4, '2020-09-14 04:33:28', '2020-09-14 04:33:28'),
(10, '2. Spiritual meditation', '3', '1600077911_.jpeg', 'Spiritual meditation can be practiced at home or in a place of worship. This practice is beneficial for those who thrive in silence and seek spiritual growth.', '<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', system-ui, sans-serif;\">Focused meditation involves concentration using any of the five senses. For example, you can focus on something internal, like your breath, or you can bring in external influences to help focus your attention. Try counting mala beads, listening to a gong, or staring at a candle flame.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', system-ui, sans-serif;\">This practice may be simple in theory, but it can be difficult for beginners to hold their focus for longer than a few minutes at first. If your mind does wander, it&rsquo;s important to come back to the practice and refocus.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', system-ui, sans-serif;\">As the name suggests, this practice is ideal for anyone who requires additional focus in their life.</p>', 'Active', 4, 4, '2020-09-14 04:35:11', '2020-09-14 04:35:11'),
(11, '3. Focused meditation', '3', '1600077985_.jpeg', 'Focused meditation involves concentration using any of the five senses. For example, you can focus on something internal, like your breath, or you can bring in external influences to help focus your attention. Try counting mala beads, listening to a gong, or staring at a candle flame.', '<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', system-ui, sans-serif;\">Focused meditation involves concentration using any of the five senses. For example, you can focus on something internal, like your breath, or you can bring in external influences to help focus your attention. Try counting mala beads, listening to a gong, or staring at a candle flame.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', system-ui, sans-serif;\">This practice may be simple in theory, but it can be difficult for beginners to hold their focus for longer than a few minutes at first. If your mind does wander, it&rsquo;s important to come back to the practice and refocus.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', system-ui, sans-serif;\">As the name suggests, this practice is ideal for anyone who requires additional focus in their life.</p>', 'Active', 6, 4, '2020-09-14 04:36:25', '2020-09-14 04:36:25'),
(12, '4. Movement meditation', '3', '1600078045_.jpeg', 'Mantra meditation is prominent in many teachings, including Hindu and Buddhist traditions. This type of meditation uses a repetitive sound to clear the mind. It can be a word, phrase, or sound, such as the popular “Om', '<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', system-ui, sans-serif;\">Mantra meditation is prominent in many teachings, including Hindu and Buddhist traditions. This type of meditation uses a repetitive sound to clear the mind. It can be a word, phrase, or sound, such as the popular &ldquo;Om.&rdquo;</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', system-ui, sans-serif;\">It doesn&rsquo;t matter if your mantra is spoken loudly or quietly. After chanting the mantra for some time, you will be more alert and in tune with your environment. This allows you to experience deeper levels of awareness.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', system-ui, sans-serif;\">Some people enjoy mantra meditation because they find it easier to focus on a word than on their breath. This is also a good practice for people who don&rsquo;t like silence and enjoy repetition.</p>', 'Active', 7, 4, '2020-09-14 04:37:25', '2020-09-14 04:37:25');

-- --------------------------------------------------------

--
-- Table structure for table `child_categories`
--

CREATE TABLE `child_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `parent_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `child_categories`
--

INSERT INTO `child_categories` (`id`, `title`, `image`, `status`, `parent_id`, `created_at`, `updated_at`) VALUES
(3, 'i\'m chile man', '', 'active', 1, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `comments`
--

CREATE TABLE `comments` (
  `id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL,
  `post_id` bigint UNSIGNED NOT NULL,
  `comment` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `comments`
--

INSERT INTO `comments` (`id`, `user_id`, `post_id`, `comment`, `created_at`, `updated_at`) VALUES
(26, 4, 3, 'vcxvxcv', '2020-09-14 04:21:03', '2020-09-14 04:21:03');

-- --------------------------------------------------------

--
-- Table structure for table `departments`
--

CREATE TABLE `departments` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `departments`
--

INSERT INTO `departments` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Optio rerum illo consequatur.', 'active', '2020-09-11 02:30:03', '2020-09-11 02:30:03'),
(2, 'Veniam perferendis iste nostrum qui.', 'active', '2020-09-11 02:30:03', '2020-09-11 02:30:03'),
(3, 'Sunt necessitatibus reprehenderit quae corrupti.', 'active', '2020-09-11 02:30:03', '2020-09-11 02:30:03'),
(4, 'Veritatis corrupti natus laborum quas fugiat sunt esse.', 'active', '2020-09-11 02:30:03', '2020-09-11 02:30:03'),
(5, 'Et dolorem et provident consequatur officia optio sequi.', 'active', '2020-09-11 02:30:03', '2020-09-11 02:30:03');

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

CREATE TABLE `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `faq_cat_mgmts`
--

CREATE TABLE `faq_cat_mgmts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_cat_mgmts`
--

INSERT INTO `faq_cat_mgmts` (`id`, `title`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Concentration', 'Active', NULL, NULL),
(2, 'Performance ', 'Active', NULL, NULL),
(3, 'Benefits', 'Active', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `faq_mgmts`
--

CREATE TABLE `faq_mgmts` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `faq_cat_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `faq_mgmts`
--

INSERT INTO `faq_mgmts` (`id`, `title`, `short_description`, `description`, `status`, `faq_cat_id`, `created_at`, `updated_at`) VALUES
(1, 'How to learn new technique', NULL, '<p>if you want to learn new technique please follow the instructions</p>', 'Active', 1, '2020-09-14 04:28:18', '2020-09-14 04:29:25');

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
(1, '2014_10_11_000000_create_roles_table', 1),
(2, '2014_10_12_000000_create_users_table', 1),
(3, '2014_10_12_100000_create_password_resets_table', 1),
(4, '2019_08_19_000000_create_failed_jobs_table', 1),
(5, '2020_09_01_054012_create_departments_table', 1),
(6, '2020_09_01_054423_create_stories_table', 1),
(7, '2020_09_01_054606_create_banners_table', 1),
(8, '2020_09_01_054655_create_parent_categories_table', 1),
(9, '2020_09_01_054656_create_child_categories_table', 1),
(10, '2020_09_01_054658_create_techniques_table', 1),
(11, '2020_09_01_054659_create_blogs_table', 1),
(12, '2020_09_01_061318_create_faq_cat_mgmts_table', 1),
(13, '2020_09_01_061350_create_faq_mgmts_table', 1),
(14, '2020_09_08_060651_create_ratings_table', 1),
(15, '2020_09_11_145733_create_comments_table', 2),
(16, '2020_09_11_164948_create_comments_table', 3),
(17, '2020_09_12_080812_create_comments_table', 4);

-- --------------------------------------------------------

--
-- Table structure for table `parent_categories`
--

CREATE TABLE `parent_categories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `parent_categories`
--

INSERT INTO `parent_categories` (`id`, `title`, `status`, `image`, `created_at`, `updated_at`) VALUES
(1, 'I m parent', 'Active', NULL, NULL, NULL),
(2, 'Dummy', 'Active', NULL, NULL, NULL);

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
-- Table structure for table `ratings`
--

CREATE TABLE `ratings` (
  `id` int UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `rating` int NOT NULL,
  `rateable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `rateable_id` bigint UNSIGNED NOT NULL,
  `user_id` bigint UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `ratings`
--

INSERT INTO `ratings` (`id`, `created_at`, `updated_at`, `rating`, `rateable_type`, `rateable_id`, `user_id`) VALUES
(1, '2020-09-11 09:03:56', '2020-09-11 09:03:56', 5, 'App\\Technique', 3, 6),
(2, '2020-09-14 04:19:52', '2020-09-14 04:19:52', 3, 'App\\Technique', 6, 4);

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` bigint UNSIGNED NOT NULL,
  `role` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `role`, `created_at`, `updated_at`) VALUES
(1, 'SuperAdmin', NULL, NULL),
(2, 'Blogger', NULL, NULL),
(3, 'Writer', NULL, NULL),
(4, 'User', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `stories`
--

CREATE TABLE `stories` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `writer_id` bigint UNSIGNED NOT NULL,
  `dep_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `techniques`
--

CREATE TABLE `techniques` (
  `id` bigint UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `short_description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `faqs` longtext COLLATE utf8mb4_unicode_ci,
  `parent_cat_id` bigint UNSIGNED NOT NULL,
  `child_cat_id` bigint UNSIGNED NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `techniques`
--

INSERT INTO `techniques` (`id`, `title`, `image`, `short_description`, `description`, `faqs`, `parent_cat_id`, `child_cat_id`, `created_at`, `updated_at`) VALUES
(3, '1. Loving-kindness meditation', '1599832109_.jpeg', 'how to check my body fat', '<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">Loving-kindness meditation is also known as&nbsp;<a class=\"content-link css-29oowu\" style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; cursor: pointer; text-decoration-line: none; border-color: currentcolor; color: #05a2d3;\" href=\"https://ggia.berkeley.edu/practice/loving_kindness_meditation#data-tab-why_you_should_try_it\" target=\"_blank\" rel=\"noopener noreferrer\">Metta meditation</a>. Its goal is to cultivate an attitude of love and kindness toward everything, even a person&rsquo;s enemies and sources of&nbsp;<a class=\"content-link css-29oowu keywords\" style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; cursor: pointer; text-decoration-line: none; border-color: currentcolor; color: #05a2d3;\" title=\"Why stress happens and how to manage it\" href=\"https://www.medicalnewstoday.com/articles/145855.php\">stress</a>.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\" data-spx-slot=\"1\">While breathing deeply, practitioners open their minds to receiving loving kindness. They then send messages of loving kindness to the world, to specific people, or to their loved ones.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">In most forms of this meditation, the key is to repeat the message many times, until the practitioner feels an attitude of loving kindness.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">Loving-kindness meditation is designed to promote&nbsp;<a class=\"content-link css-29oowu\" style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; cursor: pointer; text-decoration-line: none; border-color: currentcolor; color: #05a2d3;\" href=\"http://onlinelibrary.wiley.com/doi/10.1002/jts.21832/full\" target=\"_blank\" rel=\"noopener noreferrer\">feelings of compassion and love</a>, both for others and oneself.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">It can help those affected by:</p>\r\n<ul style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif; font-size: 18px;\">\r\n<li style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; line-height: 26px; margin-bottom: 8px;\">anger</li>\r\n<li style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; line-height: 26px; margin-bottom: 8px;\">frustration</li>\r\n<li style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; line-height: 26px; margin-bottom: 8px;\">resentment</li>\r\n<li style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; line-height: 26px; margin-bottom: 8px;\">interpersonal conflict</li>\r\n</ul>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">This type of meditation may increase positive emotions and has been linked to reduced&nbsp;<a class=\"content-link css-29oowu keywords\" style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; cursor: pointer; text-decoration-line: none; border-color: currentcolor; color: #05a2d3;\" title=\"What is depression and what can I do about it?\" href=\"https://www.medicalnewstoday.com/kc/depression-causes-symptoms-treatments-8933\">depression</a>,&nbsp;<a class=\"content-link css-29oowu keywords\" style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; cursor: pointer; text-decoration-line: none; border-color: currentcolor; color: #05a2d3;\" title=\"What is Anxiety?\" href=\"https://www.medicalnewstoday.com/info/anxiety/\">anxiety</a>, and post-traumatic stress or&nbsp;<a class=\"content-link css-29oowu keywords\" style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; cursor: pointer; text-decoration-line: none; border-color: currentcolor; color: #05a2d3;\" title=\"PTSD: What you need to know\" href=\"https://www.medicalnewstoday.com/articles/156285.php\">PTSD</a>.</p>', 'When an elderly psychologist could not afford to pay plumber Griffin Gogol,', 1, 3, '2020-09-11 08:18:29', '2020-09-11 08:18:29'),
(4, '2. Body scan or progressive relaxation', '1599832185_.jpeg', 'Body scan or progressive relaxation', '<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">Progressive relaxation, sometimes called body scan meditation, is meditation that encourages people to scan their bodies for areas of tension. The goal is to notice tension and to allow it to release.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\" data-spx-slot=\"1\">During a progressive relaxation session, practitioners start at one end of their body, usually their feet, and work through the whole.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">Some forms of progressive relaxation require people to tense and then relax muscles. Others encourage a person to visualize a wave, drifting over their body to release tension.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">Progressive relaxation can help to promote generalized feelings of calmness and relaxation. It may&nbsp;<a class=\"content-link css-29oowu\" style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; cursor: pointer; text-decoration-line: none; border-color: currentcolor; color: #05a2d3;\" href=\"https://biblio.ugent.be/publication/7161849\" target=\"_blank\" rel=\"noopener noreferrer\">also help with chronic pain</a>. Because it slowly and steadily relaxes the body, some people use this form of meditation to help them sleep.</p>', 'How to learn this technique', 1, 3, '2020-09-11 08:19:45', '2020-09-11 08:19:45'),
(6, '3. Transcendental Meditation', '1599832470_.jpeg', 'Transcendental Meditation', '<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">Transcendental Meditation is a spiritual form of meditation where practitioners remain seated and breathe slowly. The goal is to transcend or rise above the person&rsquo;s current state of being.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">During a meditation session, practitioners focus on a mantra or a repeated word or series of words. A&nbsp;<a class=\"content-link css-29oowu\" style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; cursor: pointer; text-decoration-line: none; border-color: currentcolor; color: #05a2d3;\" href=\"http://www.chopra.com/articles/5-types-of-meditation-decoded#sm.0005syqxv1brdd4p11k27d0qakfj7\" target=\"_blank\" rel=\"noopener noreferrer\">teacher determines the mantra</a>&nbsp;based on a complex set of factors, sometimes including the year the practitioner was born, and the year the teacher was trained.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">An alternative allows people to choose their mantra. This more contemporary version is not technically Transcendental Meditation, though it may look substantially similar. A practitioner might decide to repeat &ldquo;I am not afraid of public speaking&rdquo; while meditating.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">People who practice Transcendental Meditation report both spiritual experiences and heightened mindfulness.</p>', 'How to learn this technique', 1, 3, '2020-09-11 08:22:15', '2020-09-11 08:24:30'),
(7, '4.How often to meditate', '1599832438_.jpeg', 'How often to meditate', '<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">There is no right answer to this question. One argument is that any meditation is better than no meditation. So, if a person is only able to meditate once a week, this should not be a barrier to trying out the therapy.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\" data-spx-slot=\"1\">A person can consider starting with a few sessions per week, working up to one session per day.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">Meditating around the same time each day can make meditation a habit that is easy to incorporate into daily life.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">If meditation is helpful, it may be beneficial to increase the frequency to twice or more per day or to use it to reduce stress whenever needed.</p>', 'How to learn this technique', 1, 3, '2020-09-11 08:23:58', '2020-09-11 08:23:58'),
(8, '5.Tips for better meditation', '1599832531_.jpeg', 'Tips for better meditation', '<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">Meditation is a process-oriented undertaking that focuses on the moment, not on the results.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\" data-spx-slot=\"1\">So enjoying the moment is key to successful meditation.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">An individual should not judge whether the meditation session is good or bad, right or wrong. Instead, they should simply remain in that moment.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">Meditation is a skill that takes time to master. Some people feel frustrated and even angry when they first attempt to meditate.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">Remaining present in the current moment can be challenging, as can focusing on a single mantra without getting distracted.</p>\r\n<p style=\"-webkit-font-smoothing: antialiased; box-sizing: inherit; margin-bottom: 25px; margin-top: 25px; font-size: 18px; line-height: 26px; color: #231f20; font-family: \'Proxima Nova\', -apple-system, system-ui, system-ui, \'Helvetica Neue\', Helvetica, Roboto, Arial, sans-serif;\">Whatever their immediate reaction, a person should persist with their mediation practice. Key is to accept the thoughts that appear without judgment or anger. Some novices may benefit from enrolling in a class or having the support of a teacher</p>', 'How to learn this technique', 1, 3, '2020-09-11 08:25:31', '2020-09-11 08:25:31');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint UNSIGNED NOT NULL,
  `role_id` bigint UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `date_of_birth` date DEFAULT NULL,
  `image` text COLLATE utf8mb4_unicode_ci,
  `mobile` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `user_status` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `verifyToken` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `status` tinyint(1) NOT NULL DEFAULT '0',
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `provider_id` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `banned_until` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `role_id`, `name`, `date_of_birth`, `image`, `mobile`, `user_status`, `email`, `verifyToken`, `status`, `email_verified_at`, `password`, `provider_id`, `remember_token`, `created_at`, `updated_at`, `banned_until`) VALUES
(2, 1, 'Doyle Padberg', '2020-09-14', '1600056403_.jpeg', NULL, NULL, 'bwehner@example.com', NULL, 1, '2020-09-11 02:31:28', '$2y$10$FJ9IwXt4dT2z4pQCYNjTtemjavjKEzRwOY0bnFjuzz88Pd3eJkIxe', NULL, 'dA6wPrI6LZ8VsT2stKwyFCzSMHp5FKsQYsexr0mBKkC7y0uHjlStcN3ts0q2', '2020-09-11 02:31:28', '2020-09-13 22:36:43', NULL),
(3, 2, 'Gino Beatty III', NULL, NULL, NULL, NULL, 'trantow.arnold@example.com', NULL, 0, '2020-09-11 02:31:28', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'rKBkTWcfhj', '2020-09-11 02:31:28', '2020-09-11 02:31:28', NULL),
(4, 1, 'Miss Amely Dare', '2020-09-14', '1600079820_.jpeg', NULL, NULL, 'harvey.travon@example.com', NULL, 1, '2020-09-11 02:31:28', '$2y$10$gEnKDNptej6mIADvT6XzO.OLALgCstgAxZhPkonhjxtUD/FizOojG', NULL, 'kdKVxibRO7MPq8Ha9Q537m7NOAvWgO4eVXe70eNDSNVpmiW3pQVeMi3zDLxl', '2020-09-11 02:31:28', '2020-09-14 05:07:00', NULL),
(5, 4, 'Destini Barton Sr.', NULL, NULL, NULL, NULL, 'mertie.franecki@example.net', NULL, 0, '2020-09-11 02:31:28', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'L3PoehrknF', '2020-09-11 02:31:28', '2020-09-11 02:31:28', NULL),
(6, 3, 'Elmer Wisoky', NULL, NULL, NULL, NULL, 'alexandrea23@example.com', NULL, 0, '2020-09-11 02:31:28', '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi', NULL, 'IIBEJNqEiE19D7DatkFIA5unyAU4IvNqXEtoqX0RgQQuMUVQW6wkxEw8h72Q', '2020-09-11 02:31:28', '2020-09-11 02:31:28', NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `banners`
--
ALTER TABLE `banners`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `blogs`
--
ALTER TABLE `blogs`
  ADD PRIMARY KEY (`id`),
  ADD KEY `blogs_technique_id_foreign` (`technique_id`),
  ADD KEY `blogs_writer_id_foreign` (`writer_id`);

--
-- Indexes for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD PRIMARY KEY (`id`),
  ADD KEY `child_categories_parent_id_foreign` (`parent_id`);

--
-- Indexes for table `comments`
--
ALTER TABLE `comments`
  ADD PRIMARY KEY (`id`),
  ADD KEY `comments_user_id_foreign` (`user_id`),
  ADD KEY `comments_post_id_foreign` (`post_id`);

--
-- Indexes for table `departments`
--
ALTER TABLE `departments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_cat_mgmts`
--
ALTER TABLE `faq_cat_mgmts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `faq_mgmts`
--
ALTER TABLE `faq_mgmts`
  ADD PRIMARY KEY (`id`),
  ADD KEY `faq_cat_id` (`faq_cat_id`);

--
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `parent_categories`
--
ALTER TABLE `parent_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `ratings`
--
ALTER TABLE `ratings`
  ADD PRIMARY KEY (`id`),
  ADD KEY `ratings_rateable_type_rateable_id_index` (`rateable_type`,`rateable_id`),
  ADD KEY `ratings_rateable_id_index` (`rateable_id`),
  ADD KEY `ratings_rateable_type_index` (`rateable_type`),
  ADD KEY `ratings_user_id_foreign` (`user_id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `stories`
--
ALTER TABLE `stories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `techniques`
--
ALTER TABLE `techniques`
  ADD PRIMARY KEY (`id`),
  ADD KEY `techniques_parent_cat_id_foreign` (`parent_cat_id`),
  ADD KEY `techniques_child_cat_id_foreign` (`child_cat_id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`),
  ADD KEY `users_role_id_foreign` (`role_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `banners`
--
ALTER TABLE `banners`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `blogs`
--
ALTER TABLE `blogs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `child_categories`
--
ALTER TABLE `child_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `comments`
--
ALTER TABLE `comments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=27;

--
-- AUTO_INCREMENT for table `departments`
--
ALTER TABLE `departments`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `faq_cat_mgmts`
--
ALTER TABLE `faq_cat_mgmts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `faq_mgmts`
--
ALTER TABLE `faq_mgmts`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `parent_categories`
--
ALTER TABLE `parent_categories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `ratings`
--
ALTER TABLE `ratings`
  MODIFY `id` int UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `stories`
--
ALTER TABLE `stories`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `techniques`
--
ALTER TABLE `techniques`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `blogs`
--
ALTER TABLE `blogs`
  ADD CONSTRAINT `blogs_technique_id_foreign` FOREIGN KEY (`technique_id`) REFERENCES `techniques` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `blogs_writer_id_foreign` FOREIGN KEY (`writer_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `child_categories`
--
ALTER TABLE `child_categories`
  ADD CONSTRAINT `child_categories_parent_id_foreign` FOREIGN KEY (`parent_id`) REFERENCES `parent_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `comments`
--
ALTER TABLE `comments`
  ADD CONSTRAINT `comments_post_id_foreign` FOREIGN KEY (`post_id`) REFERENCES `techniques` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `comments_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `faq_mgmts`
--
ALTER TABLE `faq_mgmts`
  ADD CONSTRAINT `faq_mgmts_ibfk_1` FOREIGN KEY (`faq_cat_id`) REFERENCES `faq_cat_mgmts` (`id`) ON DELETE RESTRICT ON UPDATE RESTRICT;

--
-- Constraints for table `ratings`
--
ALTER TABLE `ratings`
  ADD CONSTRAINT `ratings_user_id_foreign` FOREIGN KEY (`user_id`) REFERENCES `users` (`id`);

--
-- Constraints for table `techniques`
--
ALTER TABLE `techniques`
  ADD CONSTRAINT `techniques_child_cat_id_foreign` FOREIGN KEY (`child_cat_id`) REFERENCES `child_categories` (`id`) ON DELETE CASCADE,
  ADD CONSTRAINT `techniques_parent_cat_id_foreign` FOREIGN KEY (`parent_cat_id`) REFERENCES `parent_categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `users`
--
ALTER TABLE `users`
  ADD CONSTRAINT `users_role_id_foreign` FOREIGN KEY (`role_id`) REFERENCES `roles` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
