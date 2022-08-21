-- phpMyAdmin SQL Dump
-- version 5.0.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1:3306
-- Generation Time: Aug 21, 2022 at 06:02 AM
-- Server version: 8.0.21
-- PHP Version: 7.3.21

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `hewar_center`
--

-- --------------------------------------------------------

--
-- Table structure for table `account_types`
--

DROP TABLE IF EXISTS `account_types`;
CREATE TABLE IF NOT EXISTS `account_types` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `account_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `answers`
--

DROP TABLE IF EXISTS `answers`;
CREATE TABLE IF NOT EXISTS `answers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `poll_id` int NOT NULL,
  `option_id` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `arbitrators_researches`
--

DROP TABLE IF EXISTS `arbitrators_researches`;
CREATE TABLE IF NOT EXISTS `arbitrators_researches` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `participant_participation_id` int NOT NULL,
  `subscriber_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `author_or_translators`
--

DROP TABLE IF EXISTS `author_or_translators`;
CREATE TABLE IF NOT EXISTS `author_or_translators` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `author_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `author_translators` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `centers`
--

DROP TABLE IF EXISTS `centers`;
CREATE TABLE IF NOT EXISTS `centers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `center_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `brief_discrption` longtext COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `vision` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `mission` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `objectives` text COLLATE utf8_unicode_ci NOT NULL,
  `center_location` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `instgrame` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int DEFAULT NULL,
  `date_establish` datetime NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `center_sections`
--

DROP TABLE IF EXISTS `center_sections`;
CREATE TABLE IF NOT EXISTS `center_sections` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `section_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `brief_summery` longtext COLLATE utf8_unicode_ci NOT NULL,
  `center_id` int NOT NULL,
  `meaningful_pic` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `characters`
--

DROP TABLE IF EXISTS `characters`;
CREATE TABLE IF NOT EXISTS `characters` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `fullName` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `fax` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `facebook` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `twitter` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `instgrame` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `youtube` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `profile_pic` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `speciality` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `profile` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `personality_type_id` int NOT NULL,
  `country_id` int DEFAULT NULL,
  `center_id` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `countries`
--

DROP TABLE IF EXISTS `countries`;
CREATE TABLE IF NOT EXISTS `countries` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `countryName` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses_diplomas`
--

DROP TABLE IF EXISTS `courses_diplomas`;
CREATE TABLE IF NOT EXISTS `courses_diplomas` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `courseMaterial_id` int NOT NULL,
  `deploma_id` tinyint(1) NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `courses_materials`
--

DROP TABLE IF EXISTS `courses_materials`;
CREATE TABLE IF NOT EXISTS `courses_materials` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_type_id` int NOT NULL,
  `address` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `participant_id` int DEFAULT NULL,
  `img` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `vedio` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `pass_file` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `pdf` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `admission_req` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `course_types`
--

DROP TABLE IF EXISTS `course_types`;
CREATE TABLE IF NOT EXISTS `course_types` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `diplomas`
--

DROP TABLE IF EXISTS `diplomas`;
CREATE TABLE IF NOT EXISTS `diplomas` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `address` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `specialization_id` int NOT NULL,
  `brief_desc` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `admission_requi` varchar(1000) CHARACTER SET utf8 COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `events`
--

DROP TABLE IF EXISTS `events`;
CREATE TABLE IF NOT EXISTS `events` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `date_from` date NOT NULL,
  `date_to` date NOT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `vedio` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `topic` longtext COLLATE utf8_unicode_ci NOT NULL,
  `suggested_title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `pdf` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `section_id` int NOT NULL,
  `specialization_id` int NOT NULL,
  `event_type_id` int NOT NULL,
  `result_and_recom` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `event_statuses_id` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_papers`
--

DROP TABLE IF EXISTS `event_papers`;
CREATE TABLE IF NOT EXISTS `event_papers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `subject` longtext COLLATE utf8_unicode_ci NOT NULL,
  `date` datetime NOT NULL,
  `photo` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `vedio` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `location` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `result_and_recom` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `event_id` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `event_statuses`
--

DROP TABLE IF EXISTS `event_statuses`;
CREATE TABLE IF NOT EXISTS `event_statuses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `eventStatusType` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `failed_jobs`
--

DROP TABLE IF EXISTS `failed_jobs`;
CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `uuid` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `connection` text COLLATE utf8_unicode_ci NOT NULL,
  `queue` text COLLATE utf8_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issue_contents`
--

DROP TABLE IF EXISTS `issue_contents`;
CREATE TABLE IF NOT EXISTS `issue_contents` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `author` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `subject` longtext COLLATE utf8_unicode_ci NOT NULL,
  `issue_id` int NOT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `pfd` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `issue_of_magazines`
--

DROP TABLE IF EXISTS `issue_of_magazines`;
CREATE TABLE IF NOT EXISTS `issue_of_magazines` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `issue_title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `issue_serial_no` int NOT NULL,
  `issue_img` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `issue_date` date NOT NULL,
  `pdf` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `particants` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `edited` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `lectuers`
--

DROP TABLE IF EXISTS `lectuers`;
CREATE TABLE IF NOT EXISTS `lectuers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `participant_id` int DEFAULT NULL,
  `date` date NOT NULL,
  `img` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `vedio` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `pdf` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `txt` text COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `magazines`
--

DROP TABLE IF EXISTS `magazines`;
CREATE TABLE IF NOT EXISTS `magazines` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `magazine_title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `img` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `brief_discption` longtext COLLATE utf8_unicode_ci NOT NULL,
  `standard_id` int NOT NULL,
  `release` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int UNSIGNED NOT NULL AUTO_INCREMENT,
  `migration` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=46 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`id`, `migration`, `batch`) VALUES
(1, '2014_10_12_000000_create_users_table', 1),
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2021_11_18_224906_create_countries_table', 1),
(6, '2021_11_18_224931_create_centers_table', 1),
(7, '2021_11_18_225333_create_characters_table', 1),
(8, '2021_11_18_230252_create_personality_types_table', 1),
(9, '2021_11_18_230638_create_versions_table', 1),
(10, '2021_11_18_231922_create_specialties_table', 1),
(11, '2021_11_18_232303_create_type_of_versions_table', 1),
(12, '2021_11_18_234129_create_studies_table', 1),
(13, '2021_11_18_235214_create_issue_contents_table', 1),
(14, '2021_11_18_235244_create_user_table', 1),
(15, '2021_11_18_235309_create_user_premissions_table', 1),
(16, '2021_11_18_235347_create_issue_of_magazines_table', 1),
(17, '2021_11_19_001552_create_events_table', 1),
(18, '2021_11_19_001621_create_event_papers_table', 1),
(19, '2021_11_19_003100_create_type_activities_table', 1),
(20, '2021_11_19_115533_create_opinion_polls_table', 1),
(21, '2021_11_19_120143_create_answers_table', 1),
(22, '2021_11_19_120328_create_options_table', 1),
(23, '2021_11_19_120841_create_pass_files_table', 1),
(24, '2021_11_19_120916_create_courses_materials_table', 1),
(25, '2021_11_19_120944_create_course_types_table', 1),
(26, '2021_11_19_123010_create_training_certificates_table', 1),
(27, '2021_11_19_123235_create_courses_diplomas_table', 1),
(28, '2021_11_19_123318_create_trainees_subscriptions_table', 1),
(29, '2021_11_19_124220_create_lectuers_table', 1),
(30, '2021_11_19_124639_create_subscribers_table', 1),
(31, '2021_11_19_124707_create_account_types_table', 1),
(32, '2021_11_19_223625_create_traverse_file_statuses_table', 1),
(33, '2021_11_19_224046_create_research_participations_table', 1),
(34, '2021_11_19_224141_create_arbitrators_researches_table', 1),
(35, '2021_11_19_224221_create_participation_cases_table', 1),
(36, '2021_11_19_224302_create_subscribes_posts_table', 1),
(37, '2021_11_19_224350_create_research_participation_stages_table', 1),
(38, '2021_11_23_171044_create_center_sections_table', 1),
(39, '2021_11_23_181709_create_pass_file_cases_table', 1),
(40, '2021_11_23_184145_create_magazines_table', 1),
(41, '2021_11_26_144412_create_type_studies_table', 1),
(42, '2021_11_26_172911_create_author_or_translators_table', 1),
(43, '2021_11_26_184951_create_diplomas_table', 1),
(44, '2021_12_01_085154_create_event_statuses_table', 1),
(45, '2022_06_25_203539_create_sliders_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `opinion_polls`
--

DROP TABLE IF EXISTS `opinion_polls`;
CREATE TABLE IF NOT EXISTS `opinion_polls` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `question` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `start_date` datetime NOT NULL,
  `poll_end_date` datetime NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `options`
--

DROP TABLE IF EXISTS `options`;
CREATE TABLE IF NOT EXISTS `options` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `option_txt` text COLLATE utf8_unicode_ci NOT NULL,
  `poll_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `participation_cases`
--

DROP TABLE IF EXISTS `participation_cases`;
CREATE TABLE IF NOT EXISTS `participation_cases` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `case_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pass_files`
--

DROP TABLE IF EXISTS `pass_files`;
CREATE TABLE IF NOT EXISTS `pass_files` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `course_id` int NOT NULL,
  `date_subscription` datetime NOT NULL,
  `pdf` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `file_status_id` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `pass_file_cases`
--

DROP TABLE IF EXISTS `pass_file_cases`;
CREATE TABLE IF NOT EXISTS `pass_file_cases` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `case_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personality_types`
--

DROP TABLE IF EXISTS `personality_types`;
CREATE TABLE IF NOT EXISTS `personality_types` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `personality_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `personal_access_tokens`
--

DROP TABLE IF EXISTS `personal_access_tokens`;
CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `tokenable_id` bigint UNSIGNED NOT NULL,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_participations`
--

DROP TABLE IF EXISTS `research_participations`;
CREATE TABLE IF NOT EXISTS `research_participations` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `publication_criteria` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `publication_ethics` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `research_participation_stages`
--

DROP TABLE IF EXISTS `research_participation_stages`;
CREATE TABLE IF NOT EXISTS `research_participation_stages` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `stage_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `sliders`
--

DROP TABLE IF EXISTS `sliders`;
CREATE TABLE IF NOT EXISTS `sliders` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `subtitle` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `image` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `button_text` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `active` tinyint(1) NOT NULL,
  `new_window` tinyint(1) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `sliders`
--

INSERT INTO `sliders` (`id`, `title`, `subtitle`, `image`, `url`, `button_text`, `active`, `new_window`, `created_at`, `updated_at`) VALUES
(1, 'xxxxxx', 'يتم الضغط على زر التفعيل لمرة واحدة عند تفعيل المساقات مع بداية الفصل الدراسي غير ذلك يمكنك الوصول للمساقات بالنزول إلى أسفل الصفحة الحالية', 'miCYniKi4fuSFrFdpuRKQEnmZA03vZApL2CleK3P.jpg', 'https://stackoverflow.com/questions/63882034/target-class-does-not-exist-problem-in-laravel-8', 'اضغط للمزيد', 1, 1, '2022-08-08 09:06:24', '2022-08-08 09:06:24');

-- --------------------------------------------------------

--
-- Table structure for table `specialties`
--

DROP TABLE IF EXISTS `specialties`;
CREATE TABLE IF NOT EXISTS `specialties` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `brief_summery` longtext COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `studies`
--

DROP TABLE IF EXISTS `studies`;
CREATE TABLE IF NOT EXISTS `studies` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `origititle` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `content_brief` longtext COLLATE utf8_unicode_ci NOT NULL,
  `imge` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `publish_house` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `year_publication` int NOT NULL,
  `section_id` int NOT NULL,
  `specialization_id` int NOT NULL,
  `study_type_id` int NOT NULL,
  `pdf` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribers`
--

DROP TABLE IF EXISTS `subscribers`;
CREATE TABLE IF NOT EXISTS `subscribers` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `subscriber_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `country_id` int NOT NULL,
  `speciality` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `phone` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `pass` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `confirm_pass` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `account_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `cv` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `pdf_cv` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `subscribes_posts`
--

DROP TABLE IF EXISTS `subscribes_posts`;
CREATE TABLE IF NOT EXISTS `subscribes_posts` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `subject` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `subscriber_id` int NOT NULL,
  `participation_status_id` int NOT NULL,
  `participation_stage_id` int NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `trainees_subscriptions`
--

DROP TABLE IF EXISTS `trainees_subscriptions`;
CREATE TABLE IF NOT EXISTS `trainees_subscriptions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `subscriber_id` int NOT NULL,
  `subscription_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` int NOT NULL,
  `diploma_id` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `training_certificates`
--

DROP TABLE IF EXISTS `training_certificates`;
CREATE TABLE IF NOT EXISTS `training_certificates` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `subscription_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `course_id` int NOT NULL,
  `diploma_id` int NOT NULL,
  `photo_certificate` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `traverse_file_statuses`
--

DROP TABLE IF EXISTS `traverse_file_statuses`;
CREATE TABLE IF NOT EXISTS `traverse_file_statuses` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `case_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_activities`
--

DROP TABLE IF EXISTS `type_activities`;
CREATE TABLE IF NOT EXISTS `type_activities` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `event_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_of_versions`
--

DROP TABLE IF EXISTS `type_of_versions`;
CREATE TABLE IF NOT EXISTS `type_of_versions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `version_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `type_studies`
--

DROP TABLE IF EXISTS `type_studies`;
CREATE TABLE IF NOT EXISTS `type_studies` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `study_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
CREATE TABLE IF NOT EXISTS `user` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `user_name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `user_validation_id` int NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `name` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=MyISAM AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`, `deleted_at`) VALUES
(1, 'Admin', 'admin@gmail.com', NULL, '$2y$10$QbWigJNqL8FaMSxOqApHL.pETinIAFKtxGHK7b9pdz34cUuV7BIyq', NULL, '2022-08-08 09:03:28', '2022-08-08 09:03:28', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_premissions`
--

DROP TABLE IF EXISTS `user_premissions`;
CREATE TABLE IF NOT EXISTS `user_premissions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `validity_type` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `versions`
--

DROP TABLE IF EXISTS `versions`;
CREATE TABLE IF NOT EXISTS `versions` (
  `id` bigint UNSIGNED NOT NULL AUTO_INCREMENT,
  `title` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `version_type_id` int NOT NULL,
  `subject` longtext COLLATE utf8_unicode_ci NOT NULL,
  `imge` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `character_id` int NOT NULL,
  `date` date NOT NULL,
  `referances` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `section_id` int NOT NULL,
  `specialization_id` int NOT NULL,
  `pdf` varchar(191) COLLATE utf8_unicode_ci NOT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
