-- phpMyAdmin SQL Dump
-- version 4.9.0.1
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jan 31, 2020 at 11:32 AM
-- Server version: 10.2.27-MariaDB
-- PHP Version: 7.3.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `cambodi6_cfa`
--

-- --------------------------------------------------------

--
-- Table structure for table `ads`
--

CREATE TABLE `ads` (
  `id` int(5) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `text` text DEFAULT NULL,
  `link_fb` text DEFAULT NULL,
  `link_yt` text DEFAULT NULL,
  `layout` varchar(250) DEFAULT NULL,
  `style` int(10) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `user_id` int(5) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `ads_images`
--

CREATE TABLE `ads_images` (
  `id` int(5) NOT NULL,
  `image` varchar(300) DEFAULT NULL,
  `link` varchar(300) DEFAULT NULL,
  `ads_id` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `category`
--

CREATE TABLE `category` (
  `id` int(5) NOT NULL,
  `parent_id` int(11) DEFAULT NULL,
  `name` varchar(250) NOT NULL,
  `language` varchar(220) DEFAULT NULL,
  `phone` varchar(60) DEFAULT NULL,
  `email` varchar(60) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `img` varchar(255) DEFAULT NULL,
  `category_type` varchar(255) DEFAULT NULL,
  `user_id` int(5) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `num_of_staff` varchar(60) DEFAULT NULL,
  `block` varchar(60) DEFAULT NULL,
  `google_embed` text DEFAULT NULL,
  `deleted` int(10) DEFAULT NULL,
  `publish_date` date DEFAULT NULL,
  `unpublish_date` date DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `category`
--

INSERT INTO `category` (`id`, `parent_id`, `name`, `language`, `phone`, `email`, `address`, `img`, `category_type`, `user_id`, `description`, `status`, `num_of_staff`, `block`, `google_embed`, `deleted`, `publish_date`, `unpublish_date`, `created_at`, `updated_at`) VALUES
(2, NULL, 'phnom penh', NULL, '089 797 879', 'admincfa@gmail.com', '', '', 'branch', 6, '', 1, NULL, 'branch', '', NULL, '1970-01-01', '1970-01-01', '2019-02-07', NULL),
(3, 0, 'Our Partners', '1', NULL, NULL, NULL, NULL, 'category', 12, '', 1, NULL, 'product_list', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-11', '2019-08-15'),
(4, NULL, 'News And Events', '1', NULL, NULL, NULL, NULL, 'cat_news_event', 12, '', 1, NULL, 'post_list', NULL, NULL, '1970-01-01', '1970-01-01', '2019-02-11', '2019-08-15'),
(6, 0, 'Activities', '1', NULL, NULL, NULL, NULL, 'category', 12, '', 1, NULL, '3blog_home', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-13', '2019-08-15'),
(7, 0, 'ដៃគូរសហការ', '2', NULL, NULL, NULL, NULL, 'category', 11, 'ភាគច្រើនបានរងការផ្លាស់ប្តូរក្នុងសំណុំបែបបទមួយចំនួនដោយការលេងសើចចាក់ឬចៃដន្យ។ ដោយការលេងសើចចាក់ឬចៃដន្យ។', 1, NULL, 'product_list', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-13', NULL),
(8, 0, 'សកម្មភាព', '2', NULL, NULL, NULL, NULL, 'category', 11, 'ភាគច្រើនបានរងការផ្លាស់ប្តូរក្នុងសំណុំបែបបទមួយចំនួនដោយការលេងសើចចាក់ឬចៃដន្យ។ ដោយការលេងសើចចាក់ឬចៃដន្យ។', 1, NULL, '3blog_home', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-13', NULL),
(9, NULL, 'ព័ត៌មាននិងព្រឹត្តិការណ៍', '2', NULL, NULL, NULL, NULL, 'cat_news_event', 12, '', 1, NULL, 'post_list', NULL, NULL, '1970-01-01', '1970-01-01', '2019-02-13', '2019-06-10'),
(10, 0, 'About Us', '1', NULL, NULL, NULL, NULL, 'category', 11, '', 1, NULL, 'about_us', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', NULL),
(11, 0, 'Executive Committee', '1', NULL, NULL, NULL, NULL, 'category', 11, '', 1, NULL, 'team', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', NULL),
(12, 0, 'Member', '1', NULL, NULL, NULL, NULL, 'category', 11, '', 1, NULL, 'member', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', NULL),
(13, 0, 'Gallery', '1', NULL, NULL, NULL, NULL, 'category', 11, '', 1, NULL, 'gallery', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', NULL),
(14, 0, 'Contact Us', '1', NULL, NULL, NULL, NULL, 'category', 11, '', 1, NULL, 'contact_us', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', NULL),
(15, 0, 'អំពីយើង', '2', NULL, NULL, NULL, NULL, 'category', 11, '', 1, NULL, 'about_us', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', NULL),
(16, 0, 'គណៈកម្មាធិការប្រតិបត្តិ', '2', NULL, NULL, NULL, NULL, 'category', 11, '', 1, NULL, 'team', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', NULL),
(17, 0, 'សមាជិក', '2', NULL, NULL, NULL, NULL, 'category', 11, '', 1, NULL, 'member', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', NULL),
(18, 0, 'រូបភាព', '2', NULL, NULL, NULL, NULL, 'category', 11, '', 1, NULL, 'gallery', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', NULL),
(19, 0, 'ទំនាក់ទំនង', '2', NULL, NULL, NULL, NULL, 'category', 11, '', 1, NULL, 'contact_us', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', '2019-02-15'),
(20, 0, 'Contact cn', '3', NULL, NULL, NULL, NULL, 'category', 11, '', 1, NULL, 'contact_us', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', NULL),
(21, 0, '我们的伙伴', '3', NULL, NULL, NULL, NULL, 'category', 11, '大多数人以某种形式，通过注入幽默或随机的方式进行改变。 通过注入幽默，或随机化。', 1, NULL, 'product_list', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', '2019-02-15'),
(22, NULL, '新闻和活动', '3', NULL, NULL, NULL, NULL, 'cat_news_event', 11, '大多数人以某种形式，通过注入幽默或随机的方式进行改变。 通过注入幽默，或随机化。', 1, NULL, 'post_list', NULL, NULL, '1970-01-01', '1970-01-01', '2019-02-15', '2019-02-15'),
(23, 0, '活动', '3', NULL, NULL, NULL, NULL, 'category', 11, '大多数人以某种形式，通过注入幽默或随机的方式进行改变。 通过注入幽默，或随机化。', 1, NULL, '3blog_home', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', NULL),
(24, 0, 'About Us cn', '3', NULL, NULL, NULL, NULL, 'category', 11, '', 1, NULL, 'about_us', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', NULL),
(25, 0, 'Member cn', '3', NULL, NULL, NULL, NULL, 'category', 11, '', 1, NULL, 'member', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', NULL),
(26, 0, 'Gallery cn', '3', NULL, NULL, NULL, NULL, 'category', 11, '', 1, NULL, 'gallery', NULL, NULL, '0000-00-00', '0000-00-00', '2019-02-15', '2019-02-15'),
(27, 0, 'Executive Committee cn', '3', NULL, NULL, NULL, NULL, 'category', 6, '', 1, NULL, 'team', NULL, NULL, '0000-00-00', '0000-00-00', '2019-03-06', NULL),
(28, 0, 'Test', '1', NULL, NULL, NULL, NULL, 'category', 11, 'cambodias', 1, NULL, 'about_us', NULL, NULL, '0000-00-00', '0000-00-00', '2019-03-29', NULL),
(29, 0, 'Test2', '1', NULL, NULL, NULL, NULL, 'category', 11, 'Chinese', 1, NULL, 'gallery', NULL, NULL, '0000-00-00', '0000-00-00', '2019-03-29', '2019-03-29'),
(30, 0, 'Testtttt', '1', NULL, NULL, NULL, NULL, 'category', 11, 'test', 1, NULL, 'gallery', NULL, NULL, '0000-00-00', '0000-00-00', '2019-03-29', '2019-03-29'),
(31, 0, 'Part 1', '1', NULL, NULL, NULL, NULL, 'category', 11, 'He is in processing in advancing, So exciting and important', 1, NULL, 'gallery', NULL, NULL, '0000-00-00', '0000-00-00', '2019-04-05', NULL),
(35, 0, 'Other Events for the year of 2019', '1', NULL, NULL, NULL, NULL, 'category', 13, 'International Labour Day ', 1, NULL, 'non', NULL, NULL, '0000-00-00', '0000-00-00', '2019-04-25', NULL),
(34, 0, 'Mommy', '1', NULL, NULL, NULL, NULL, 'category', 11, '', 1, NULL, 'team', NULL, NULL, '0000-00-00', '0000-00-00', '2019-04-05', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `cat_galleries`
--

CREATE TABLE `cat_galleries` (
  `id` int(5) NOT NULL,
  `name` varchar(250) NOT NULL,
  `description` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `cat_galleries`
--

INSERT INTO `cat_galleries` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Meeting', '', '2019-02-15', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `footers`
--

CREATE TABLE `footers` (
  `id` int(5) NOT NULL,
  `title` varchar(250) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `status` int(5) DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `unpublish_date` datetime DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `footer_pages`
--

CREATE TABLE `footer_pages` (
  `id` int(5) NOT NULL,
  `page_id` int(5) DEFAULT NULL,
  `footer_id` int(5) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `galleries_image`
--

CREATE TABLE `galleries_image` (
  `id` int(5) NOT NULL,
  `image` varchar(250) NOT NULL,
  `link` varchar(200) DEFAULT NULL,
  `gallerie_id` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `galleries_image`
--

INSERT INTO `galleries_image` (`id`, `image`, `link`, `gallerie_id`) VALUES
(47, '13.jpg', NULL, 3),
(46, '12.jpg', NULL, 3),
(95, '12.jpg', NULL, 1),
(94, '11.jpg', NULL, 1),
(56, '4.jpg', NULL, 4),
(55, '3.jpg', NULL, 4),
(54, '2.jpg', NULL, 4),
(53, '1.jpg', NULL, 4),
(44, '6.jpg', NULL, 3),
(45, '11.jpg', NULL, 3),
(93, '6.jpg', NULL, 1),
(91, '4.jpg', NULL, 1),
(92, '5.jpg', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `gallery`
--

CREATE TABLE `gallery` (
  `id` int(5) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `language` int(11) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `category_galleries_id` int(10) DEFAULT NULL,
  `user_id` int(5) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `gallery`
--

INSERT INTO `gallery` (`id`, `name`, `language`, `status`, `category_galleries_id`, `user_id`, `created_at`, `updated_at`) VALUES
(1, 'Meeting', 1, 1, 1, 11, '2019-04-06', '2019-04-06'),
(3, 'ការប្រជុំ', 2, 1, 1, 11, '2019-04-04', '2019-04-04'),
(4, 'Meeting cn', 3, 1, 1, 11, '2019-04-04', '2019-04-04');

-- --------------------------------------------------------

--
-- Table structure for table `languages`
--

CREATE TABLE `languages` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `zipcode` varchar(255) NOT NULL,
  `code` varchar(255) NOT NULL,
  `image` text DEFAULT NULL,
  `status` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `languages`
--

INSERT INTO `languages` (`id`, `name`, `zipcode`, `code`, `image`, `status`, `created_at`, `updated_at`) VALUES
(1, 'English', '', 'en', 'en.png', 1, NULL, '2019-02-10 21:55:31'),
(2, 'Khmer', '', 'kh', 'kh.png', 1, NULL, '2019-02-10 21:55:38'),
(3, 'Chinese', '', 'cn', 'cn.png', 1, NULL, '2019-02-10 21:54:24');

-- --------------------------------------------------------

--
-- Table structure for table `menus`
--

CREATE TABLE `menus` (
  `id` int(5) NOT NULL,
  `name` varchar(250) NOT NULL,
  `parent_id` int(10) DEFAULT 0,
  `link` varchar(250) DEFAULT NULL,
  `language` varchar(220) DEFAULT NULL,
  `menu_type_id` int(11) DEFAULT NULL,
  `ordering` float(10,2) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `user_id` int(5) DEFAULT NULL,
  `modul_class` varchar(255) DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `unpublish_date` datetime DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `deleted` int(11) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menus`
--

INSERT INTO `menus` (`id`, `name`, `parent_id`, `link`, `language`, `menu_type_id`, `ordering`, `image`, `status`, `user_id`, `modul_class`, `publish_date`, `unpublish_date`, `created_at`, `updated_at`, `deleted`) VALUES
(1, 'Home', 0, 'home', '1', 2, 1.00, NULL, 1, 12, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-11', 1),
(2, 'About Us', 0, 'about-us', '1', 3, 2.00, 'EXCO-meeting-1.jpg', 1, 13, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-12', 1),
(3, 'Executive Committee', 0, 'executive-committee', '1', 2, 3.00, 'CFA-Exco-meeting-1.jpg', 1, 12, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-11', 1),
(4, 'members', 0, 'members', '1', 2, 4.00, 'surety-bonds.jpg', 1, 12, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-11', 1),
(5, 'gallery', 0, 'gallerys', '1', 2, 5.01, 'CFA-Exco-meeting.jpg', 1, 12, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-11', 1),
(6, 'Contact', 0, 'contact', '1', 2, 4.01, 'slide-cfa.jpg', 1, 12, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-11', 1),
(7, 'ទំព័រដើម', 0, 'home', '2', 2, 6.01, NULL, 1, 12, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-11', 1),
(8, 'អំពីយើង', 0, 'about-us', '2', 2, 7.01, 'CFA-Exco-meeting.jpg', 1, 12, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-11', 1),
(9, 'គណៈកម្មាធិការប្រតិបត្តិ', 0, 'executive-committee', '2', 2, 8.01, 'CFA-Exco-meeting.jpg', 1, 12, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-11', 1),
(10, 'សមាជិក', 0, 'members', '2', 2, 9.01, 'surety-bonds.jpg', 1, 12, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-11', 1),
(11, 'រូបភាព', 0, 'gallerys', '2', 2, 11.01, 'CFA-Exco-meeting.jpg', 1, 12, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-11', 1),
(12, 'ទំនាក់ទំនង', 0, 'contact', '2', 2, 10.01, 'slide-cfa.jpg', 1, 12, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-11', 1),
(13, '首页', 0, 'home', '3', 2, 12.00, '', 1, 6, '', '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', NULL, 1),
(14, '关于我们', 0, 'about-us', '3', 2, 13.00, 'CFA-Exco-meeting.jpg', 1, 11, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-08', 1),
(15, '执行委员会', 0, 'executive-committee', '3', 2, 14.00, '', 1, 6, '', '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', NULL, 1),
(16, '会员', 0, 'members', '3', 2, 15.00, 'surety-bonds.jpg', 1, 12, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-08', 1),
(17, '画廊', 0, 'gallerys', '3', 2, 17.01, 'CFA-Exco-meeting.jpg', 1, 12, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-08', 1),
(18, '联系我们', 0, 'contact', '3', 2, 17.00, 'slide-cfa.jpg', 1, 12, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-07', '2019-04-08', 1);

-- --------------------------------------------------------

--
-- Table structure for table `menu_posts`
--

CREATE TABLE `menu_posts` (
  `id` int(5) NOT NULL,
  `menu_id` int(5) NOT NULL,
  `post_id` int(5) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_posts`
--

INSERT INTO `menu_posts` (`id`, `menu_id`, `post_id`, `created_at`, `updated_at`) VALUES
(88, 1, 1, NULL, NULL),
(27, 2, 2, NULL, NULL),
(28, 3, 3, NULL, NULL),
(29, 4, 4, NULL, NULL),
(86, 5, 5, NULL, NULL),
(31, 6, 6, NULL, NULL),
(26, 7, 7, NULL, NULL),
(32, 8, 8, NULL, NULL),
(33, 9, 9, NULL, NULL),
(47, 10, 10, NULL, NULL),
(36, 11, 11, NULL, NULL),
(38, 12, 12, NULL, NULL),
(42, 13, 13, NULL, NULL),
(43, 14, 14, NULL, NULL),
(48, 15, 15, NULL, NULL),
(44, 16, 16, NULL, NULL),
(59, 17, 18, NULL, NULL),
(39, 18, 19, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `menu_types`
--

CREATE TABLE `menu_types` (
  `id` int(5) NOT NULL,
  `name` varchar(250) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `menu_types`
--

INSERT INTO `menu_types` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Top Menu', '2019-02-07', NULL),
(2, 'Main Menu', '2019-02-07', NULL),
(3, 'Footer Menu', '2019-02-07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `page_categories`
--

CREATE TABLE `page_categories` (
  `id` int(11) NOT NULL,
  `page_id` int(11) DEFAULT NULL,
  `categorie_id` int(11) DEFAULT NULL,
  `company_id` int(11) DEFAULT NULL,
  `brand_id` int(11) DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `page_categories`
--

INSERT INTO `page_categories` (`id`, `page_id`, `categorie_id`, `company_id`, `brand_id`, `created_at`, `updated_at`) VALUES
(58, 51, 12, NULL, NULL, NULL, NULL),
(59, 52, 12, NULL, NULL, NULL, NULL),
(60, 53, 12, NULL, NULL, NULL, NULL),
(61, 54, 12, NULL, NULL, NULL, NULL),
(71, 62, 16, NULL, NULL, NULL, NULL),
(72, 63, 16, NULL, NULL, NULL, NULL),
(73, 64, 16, NULL, NULL, NULL, NULL),
(74, 65, 16, NULL, NULL, NULL, NULL),
(75, 66, 16, NULL, NULL, NULL, NULL),
(76, 67, 16, NULL, NULL, NULL, NULL),
(77, 68, 16, NULL, NULL, NULL, NULL),
(78, 69, 16, NULL, NULL, NULL, NULL),
(79, 70, 16, NULL, NULL, NULL, NULL),
(80, 71, 16, NULL, NULL, NULL, NULL),
(81, 72, 16, NULL, NULL, NULL, NULL),
(82, 73, 16, NULL, NULL, NULL, NULL),
(83, 74, 16, NULL, NULL, NULL, NULL),
(84, 75, 16, NULL, NULL, NULL, NULL),
(85, 76, 16, NULL, NULL, NULL, NULL),
(86, 77, 17, NULL, NULL, NULL, NULL),
(87, 78, 17, NULL, NULL, NULL, NULL),
(88, 79, 17, NULL, NULL, NULL, NULL),
(89, 80, 17, NULL, NULL, NULL, NULL),
(107, 83, 22, NULL, NULL, NULL, NULL),
(108, 82, 22, NULL, NULL, NULL, NULL),
(109, 84, 22, NULL, NULL, NULL, NULL),
(111, 85, 23, NULL, NULL, NULL, NULL),
(113, 86, 23, NULL, NULL, NULL, NULL),
(115, 87, 23, NULL, NULL, NULL, NULL),
(123, 89, 25, NULL, NULL, NULL, NULL),
(124, 90, 25, NULL, NULL, NULL, NULL),
(125, 91, 25, NULL, NULL, NULL, NULL),
(126, 92, 25, NULL, NULL, NULL, NULL),
(127, 95, 25, NULL, NULL, NULL, NULL),
(128, 96, 12, NULL, NULL, NULL, NULL),
(129, 97, 17, NULL, NULL, NULL, NULL),
(130, 98, 25, NULL, NULL, NULL, NULL),
(132, 100, 17, NULL, NULL, NULL, NULL),
(133, 101, 25, NULL, NULL, NULL, NULL),
(134, 99, 12, NULL, NULL, NULL, NULL),
(135, 102, 25, NULL, NULL, NULL, NULL),
(136, 103, 12, NULL, NULL, NULL, NULL),
(137, 104, 17, NULL, NULL, NULL, NULL),
(138, 105, 25, NULL, NULL, NULL, NULL),
(139, 106, 12, NULL, NULL, NULL, NULL),
(140, 107, 17, NULL, NULL, NULL, NULL),
(141, 108, 25, NULL, NULL, NULL, NULL),
(142, 109, 12, NULL, NULL, NULL, NULL),
(143, 110, 17, NULL, NULL, NULL, NULL),
(144, 111, 25, NULL, NULL, NULL, NULL),
(145, 112, 12, NULL, NULL, NULL, NULL),
(146, 113, 17, NULL, NULL, NULL, NULL),
(147, 114, 25, NULL, NULL, NULL, NULL),
(148, 115, 12, NULL, NULL, NULL, NULL),
(149, 116, 17, NULL, NULL, NULL, NULL),
(150, 117, 25, NULL, NULL, NULL, NULL),
(151, 118, 12, NULL, NULL, NULL, NULL),
(152, 119, 17, NULL, NULL, NULL, NULL),
(153, 120, 25, NULL, NULL, NULL, NULL),
(154, 121, 12, NULL, NULL, NULL, NULL),
(155, 122, 17, NULL, NULL, NULL, NULL),
(156, 123, 25, NULL, NULL, NULL, NULL),
(157, 124, 12, NULL, NULL, NULL, NULL),
(158, 125, 17, NULL, NULL, NULL, NULL),
(159, 126, 12, NULL, NULL, NULL, NULL),
(160, 127, 17, NULL, NULL, NULL, NULL),
(161, 128, 25, NULL, NULL, NULL, NULL),
(162, 129, 12, NULL, NULL, NULL, NULL),
(163, 130, 25, NULL, NULL, NULL, NULL),
(164, 131, 12, NULL, NULL, NULL, NULL),
(165, 132, 25, NULL, NULL, NULL, NULL),
(166, 133, 17, NULL, NULL, NULL, NULL),
(167, 134, 12, NULL, NULL, NULL, NULL),
(168, 135, 17, NULL, NULL, NULL, NULL),
(169, 136, 25, NULL, NULL, NULL, NULL),
(170, 137, 12, NULL, NULL, NULL, NULL),
(171, 138, 17, NULL, NULL, NULL, NULL),
(172, 139, 25, NULL, NULL, NULL, NULL),
(173, 140, 12, NULL, NULL, NULL, NULL),
(174, 141, 17, NULL, NULL, NULL, NULL),
(177, 142, 3, NULL, NULL, NULL, NULL),
(178, 143, 3, NULL, NULL, NULL, NULL),
(179, 144, 3, NULL, NULL, NULL, NULL),
(180, 145, 7, NULL, NULL, NULL, NULL),
(181, 146, 7, NULL, NULL, NULL, NULL),
(182, 147, 7, NULL, NULL, NULL, NULL),
(184, 148, 21, NULL, NULL, NULL, NULL),
(186, 150, 21, NULL, NULL, NULL, NULL),
(187, 149, 21, NULL, NULL, NULL, NULL),
(188, 33, 10, NULL, NULL, NULL, NULL),
(189, 88, 24, NULL, NULL, NULL, NULL),
(190, 60, 15, NULL, NULL, NULL, NULL),
(198, 156, 27, NULL, NULL, NULL, NULL),
(199, 153, 27, NULL, NULL, NULL, NULL),
(200, 152, 27, NULL, NULL, NULL, NULL),
(201, 154, 27, NULL, NULL, NULL, NULL),
(202, 151, 27, NULL, NULL, NULL, NULL),
(203, 155, 27, NULL, NULL, NULL, NULL),
(204, 61, 16, NULL, NULL, NULL, NULL),
(210, 158, 27, NULL, NULL, NULL, NULL),
(211, 157, 27, NULL, NULL, NULL, NULL),
(212, 159, 27, NULL, NULL, NULL, NULL),
(213, 160, 27, NULL, NULL, NULL, NULL),
(214, 161, 27, NULL, NULL, NULL, NULL),
(215, 162, 27, NULL, NULL, NULL, NULL),
(227, 35, 11, NULL, NULL, NULL, NULL),
(228, 36, 11, NULL, NULL, NULL, NULL),
(229, 37, 11, NULL, NULL, NULL, NULL),
(230, 38, 11, NULL, NULL, NULL, NULL),
(232, 40, 11, NULL, NULL, NULL, NULL),
(233, 41, 11, NULL, NULL, NULL, NULL),
(234, 42, 11, NULL, NULL, NULL, NULL),
(235, 43, 11, NULL, NULL, NULL, NULL),
(236, 50, 11, NULL, NULL, NULL, NULL),
(237, 45, 11, NULL, NULL, NULL, NULL),
(239, 47, 11, NULL, NULL, NULL, NULL),
(240, 48, 11, NULL, NULL, NULL, NULL),
(241, 49, 11, NULL, NULL, NULL, NULL),
(242, 34, 11, NULL, NULL, NULL, NULL),
(243, 46, 11, NULL, NULL, NULL, NULL),
(244, 163, 0, NULL, NULL, NULL, NULL),
(251, 166, 29, NULL, NULL, NULL, NULL),
(252, 167, 29, NULL, NULL, NULL, NULL),
(253, 168, 30, NULL, NULL, NULL, NULL),
(255, 165, 28, NULL, NULL, NULL, NULL),
(271, 39, 11, NULL, NULL, NULL, NULL),
(278, 173, 33, NULL, NULL, NULL, NULL),
(281, 175, 34, NULL, NULL, NULL, NULL),
(282, 27, 6, NULL, NULL, NULL, NULL),
(285, 176, 0, NULL, NULL, NULL, NULL),
(286, 174, 0, NULL, NULL, NULL, NULL),
(287, 172, 0, NULL, NULL, NULL, NULL),
(292, 179, 6, NULL, NULL, NULL, NULL),
(300, 25, 4, NULL, NULL, NULL, NULL),
(301, 26, 4, NULL, NULL, NULL, NULL),
(302, 24, 4, NULL, NULL, NULL, NULL),
(303, 23, 4, NULL, NULL, NULL, NULL),
(313, 59, 9, NULL, NULL, NULL, NULL),
(314, 58, 9, NULL, NULL, NULL, NULL),
(315, 30, 9, NULL, NULL, NULL, NULL),
(316, 183, 9, NULL, NULL, NULL, NULL),
(322, 180, 4, NULL, NULL, NULL, NULL),
(328, 182, 4, NULL, NULL, NULL, NULL),
(330, 185, 9, NULL, NULL, NULL, NULL),
(333, 181, 4, NULL, NULL, NULL, NULL),
(334, 184, 9, NULL, NULL, NULL, NULL),
(337, 187, 9, NULL, NULL, NULL, NULL),
(340, 190, 9, NULL, NULL, NULL, NULL),
(341, 188, 4, NULL, NULL, NULL, NULL),
(342, 189, 9, NULL, NULL, NULL, NULL),
(343, 191, 4, NULL, NULL, NULL, NULL),
(344, 192, 9, NULL, NULL, NULL, NULL),
(345, 193, 6, NULL, NULL, NULL, NULL),
(346, 194, 8, NULL, NULL, NULL, NULL),
(348, 196, 8, NULL, NULL, NULL, NULL),
(350, 197, 6, NULL, NULL, NULL, NULL),
(351, 198, 4, NULL, NULL, NULL, NULL),
(352, 199, 9, NULL, NULL, NULL, NULL),
(357, 200, 9, NULL, NULL, NULL, NULL),
(358, 201, 9, NULL, NULL, NULL, NULL),
(360, 202, 4, NULL, NULL, NULL, NULL),
(362, 203, 4, NULL, NULL, NULL, NULL),
(364, 204, 4, NULL, NULL, NULL, NULL),
(365, 205, 4, NULL, NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `posts`
--

CREATE TABLE `posts` (
  `id` int(5) NOT NULL,
  `title` varchar(250) NOT NULL,
  `link` varchar(250) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `template` varchar(200) DEFAULT NULL,
  `count` int(5) DEFAULT NULL,
  `language` varchar(220) DEFAULT NULL,
  `link_download` varchar(400) DEFAULT NULL,
  `post_type` varchar(200) DEFAULT NULL,
  `user_id` int(5) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `is_againt` int(11) DEFAULT NULL,
  `deleted` int(10) DEFAULT NULL,
  `event_start_date` datetime DEFAULT NULL,
  `event_end_date` datetime DEFAULT NULL,
  `s_from_rang` float DEFAULT NULL,
  `s_to_rang` float DEFAULT NULL,
  `location_job` varchar(60) DEFAULT NULL,
  `job_type` varchar(60) DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `unpublish_date` datetime DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `posts`
--

INSERT INTO `posts` (`id`, `title`, `link`, `image`, `description`, `template`, `count`, `language`, `link_download`, `post_type`, `user_id`, `status`, `is_againt`, `deleted`, `event_start_date`, `event_end_date`, `s_from_rang`, `s_to_rang`, `location_job`, `job_type`, `publish_date`, `unpublish_date`, `created_at`, `updated_at`) VALUES
(1, 'Home', 'home', NULL, '', '', NULL, '1', NULL, 'page', 13, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-04-25', '2019-04-25'),
(2, 'About Us', 'about-us', NULL, '', '', NULL, '1', NULL, 'page', 13, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-15', '2019-04-12'),
(3, 'Executive Committee', 'executive-committee', NULL, '', '', NULL, '1', NULL, 'page', 12, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-15', '2019-04-11'),
(4, 'members', 'members', NULL, '', '', NULL, '1', NULL, 'page', 12, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-15', '2019-04-11'),
(5, 'gallery', 'gallerys', NULL, '', '', NULL, '1', NULL, 'page', 12, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-04-09', '2019-04-11'),
(6, 'Contact', 'contact', NULL, '', '', NULL, '1', NULL, 'page', 12, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-15', '2019-04-11'),
(7, 'ទំព័រដើម', 'home', NULL, '', '', NULL, '2', NULL, 'page', 12, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-13', '2019-04-11'),
(8, 'អំពីយើង', 'about-us', NULL, '', '', NULL, '2', NULL, 'page', 12, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-15', '2019-04-11'),
(9, 'គណៈកម្មាធិការប្រតិបត្តិ', 'executive-committee', NULL, '', '', NULL, '2', NULL, 'page', 12, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-15', '2019-04-11'),
(10, 'សមាជិក', 'members', NULL, '', '', NULL, '2', NULL, 'page', 12, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-22', '2019-04-11'),
(11, 'រូបភាព', 'gallerys', NULL, '', '', NULL, '2', NULL, 'page', 12, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-15', '2019-04-11'),
(12, 'ទំនាក់ទំនង', 'contact', NULL, '', '', NULL, '2', NULL, 'page', 12, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-15', '2019-04-11'),
(13, '首页', '', NULL, '', '', NULL, '3', NULL, 'page', 11, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', '2019-02-15'),
(14, '关于我们', 'about-us', NULL, '', '', NULL, '3', NULL, 'page', 11, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-15', '2019-04-08'),
(15, '执行委员会', '', NULL, '', '', NULL, '3', NULL, 'page', 6, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-06', '2019-03-06'),
(16, '会员', 'members', NULL, '', '', NULL, '3', NULL, 'page', 12, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-15', '2019-04-08'),
(93, '画廊', 'gallerys', NULL, NULL, NULL, NULL, '3', NULL, NULL, 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', NULL, '2019-02-15'),
(18, '画廊', 'gallerys', NULL, '', '', NULL, '3', NULL, 'page', 12, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-04-02', '2019-04-08'),
(19, '联系我们', 'contact', NULL, '', '', NULL, '3', NULL, 'page', 12, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-15', '2019-04-08'),
(151, 'WANG MEI HUI', 'wang-mei-hui', 'img-cms.jpg', '<p>Advisor</p>\r\n', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-06', '2019-03-06'),
(95, '邦德鞋業有限公司', '', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-21', NULL),
(96, 'Pontus Footwear Ltd. ', 'pontus-footwear-ltd', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-21', NULL),
(23, 'Web Development', 'web-development', '1.jpg', '<p>majority have suffered alteration in some form, by injected humour, or randomised. by injected humour, or randomised.</p>\r\n', NULL, NULL, '1', '', 'news_event', 12, 0, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-06-10', '2019-06-10'),
(24, 'Performance', 'performance', '2.jpg', '<p>majority have suffered alteration in some form, by injected humour, or randomised. by injected humour, or randomised.</p>\r\n', NULL, NULL, '1', '', 'news_event', 12, 0, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-06-10', '2019-06-10'),
(25, 'Creative Arts', 'creative-arts', '6.jpg', '<p>majority have suffered alteration in some form, by injected humour, or randomised. by injected humour, or randomised.</p>\r\n', NULL, NULL, '1', '', 'news_event', 12, 0, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-06-10', '2019-06-10'),
(26, 'New Brand Shoes', 'new-shoes', '5.jpg', '<p>majority have suffered alteration in some form, by injected humour, or randomised. by injected humour, or randomised.</p>\r\n', NULL, NULL, '1', '', 'news_event', 12, 0, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-06-10', '2019-06-10'),
(27, 'January 30, 2019 CFA Exco-meeting', 'majority-have-suffered', 'meeting.jpg', '<p>January 30, 2019 CFA Exco-meeting</p>\r\n', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-04-05', '2019-04-05'),
(193, 'On 13 August 2019, The Charity Activity ', 'on-13-august-2019-the-charity-activity', 'photo_2019-08-15_17-44-31.jpg', '<p>On 13 August 2019, The Chairman of Cambodia Footwear Association (CFA) led his members doing charity activity by donating 1794 pairs of shoes to Pour un Sourire d&#39;Enfant (PSE) organization.</p>\r\n', NULL, NULL, '1', '', 'post', 12, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-08-15', '2019-08-15'),
(30, 'សិល្បៈច្នៃប្រឌិត', 'creative-arts', '6.jpg', '<p>ភាគច្រើនទទួលរងការឈឺចាប់តាមទម្រង់ខ្លះដោយការសើចចំអកឬការចៃដន្យ។ ដោយការលេងសើចចាក់ឬចៃដន្យ។</p>\r\n', NULL, NULL, '2', '', 'news_event', 12, 0, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-06-10', '2019-06-10'),
(33, 'Variations Of Passages Available', 'variations-of-passages-available', '2019-03-06_105942.png', '<p>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don&#39;t look even slightly believable.randomised words which don&#39;t look even slightly believable.</p>\r\n', NULL, NULL, '1', 'The Majority Have Suffered Alteration', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-06', '2019-03-06'),
(34, 'OKNHA LY KUNTHAI', 'oknha-ly-kunthai', 'president.png', '<p>President</p>\r\n', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(35, 'PAUL ZHENG', 'paul-zheng', 'img-cms.jpg', '<p>Vice Chairman</p>\r\n', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(36, 'JOYCE LIU', 'joyce-liu', 'img-cms.jpg', '<p>Vice Chairman</p>\r\n', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(37, 'YANG CHIA-HAO', 'yang-chia-hao', 'img-cms.jpg', '<p>Vice Chairman</p>\r\n', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(38, 'TONY TUNG', 'tony-tung', 'img-cms.jpg', '<p>Vice Chairman</p>\r\n', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(39, 'ALI CHIU', 'ali-chiu', 'img-cms.jpg', '<p>Vice Chairman</p>\r\n', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-29', '2019-03-29'),
(40, 'RAY PAI', 'ray-pai', 'img-cms.jpg', '<p>Secretary Director</p>\r\n', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(41, 'WESTON LEE', 'weston-lee', 'img-cms.jpg', '<p>Director</p>\r\n', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(42, 'SIMON CHEN', 'simon-chen', 'img-cms.jpg', '<p>Director</p>\r\n', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(43, 'JACK LIN', 'jack-lin', 'img-cms.jpg', '<p>Director</p>\r\n', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(45, 'WU TSUNG JUNG', 'wu-tsung-jung', 'img-cms.jpg', '<p>Director</p>\r\n', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(46, 'SIMON TU', 'simon-tu', 'img-cms.jpg', '<p>Director</p>\r\n', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(47, 'ROBERT WU', 'robert-wu', 'img-cms.jpg', '<p>Advisor</p>\r\n', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(48, 'SEN YO', 'sen-yo', 'img-cms.jpg', '<p>Advisor</p>\r\n', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(49, 'WANG MEI HUI', 'wang-mei-hui', 'img-cms.jpg', '<p>Advisor</p>\r\n', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(50, 'GARY CAI', 'gary-cai', 'img-cms.jpg', '<p>Director</p>\r\n', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(51, 'Hwa Long (Cambodia) Footwear Industry Co.,Ltd', 'hwa-long-cambodia-footwear-industry-coltd', '', '', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(52, 'Shoe Premier II (Cambodia) Co., Ltd', 'shoe-premier-ii-cambodia-co-ltd', '', '', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(53, 'Strong Health International Ltd (Cambodia)', 'strong-health-international-ltd-cambodia', '', '', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(54, 'Ho Hsin Tai Limited', 'ho-hsin-tai-limited', '', '', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(145, 'ក្រសួងពាណិជ្ជកម្ម', '', '25395767_1756495734363297_3222713629664938183_n.jpg', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(58, 'ប្រសិទ្ធភាពការងារ', 'performance', '3.jpg', '<p>ភាគច្រើនទទួលរងការឈឺចាប់តាមទម្រង់ខ្លះដោយការសើចចំអកឬការចៃដន្យ។ ដោយការលេងសើចចាក់ឬចៃដន្យ។</p>\r\n', NULL, NULL, '2', '', 'news_event', 12, 0, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-06-10', '2019-06-10'),
(59, 'ចុះសម្រុងជាមួយគ្នា', 'web-development', '6.jpg', '<p>ភាគច្រើនទទួលរងការឈឺចាប់តាមទម្រង់ខ្លះដោយការសើចចំអកឬការចៃដន្យ។ ដោយការលេងសើចចាក់ឬចៃដន្យ។</p>\r\n', NULL, NULL, '2', '', 'news_event', 12, 0, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-06-10', '2019-06-10'),
(60, 'បំរែបំរួលនៃការអនុម័តដែលអាចប្រើបាន', '', '2019-03-06_105942.png', '<p>មានការប្រែប្រួលជាច្រើនដែលអាចប្រើបានប៉ុន្តែភាគច្រើនបានទទួលរងការប្រែប្រួលនៅក្នុងសំណុំបែបបទមួយចំនួនដោយការកំប្លុកកំប្លែងឬពាក្យចៃដន្យដែលមិនមើលទៅសូម្បីតែអាចជឿបានតិចតួច។ ពាក្យដែលមិនគួរឱ្យជឿដែលមិនមើលទៅដូចជាជឿតិចតួច។</p>\r\n', NULL, NULL, '2', 'ភាគច្រើនបានរងការប្រែប្រួល', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-06', '2019-03-06'),
(61, 'OKNHA LY KUNTHAI', 'oknha-ly-kunthai', 'president.png', '<p>ប្រធានសមាគមន៍</p>\r\n', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(62, 'PAUL ZHENG', 'paul-zheng', 'img-cms.jpg', 'អនុប្រធាន', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(63, 'JOYCE LIU', 'joyce-liu', 'img-cms.jpg', 'អនុប្រធាន', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(64, 'YANG CHIA-HAO', 'yang-chia-hao', 'img-cms.jpg', 'អនុប្រធាន', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(65, 'TONY TUNG', 'tony-tung', 'img-cms.jpg', 'អនុប្រធាន', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(66, 'ALI CHIU', 'ali-chiu', 'img-cms.jpg', 'អនុប្រធាន', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(67, 'RAY PAI', 'ray-pai', 'img-cms.jpg', 'អគ្គលេខាធិការ', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(68, 'WESTON LEE', 'weston-lee', 'img-cms.jpg', 'នាយក', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(69, 'SIMON CHEN', 'simon-chen', 'img-cms.jpg', 'នាយក', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(70, 'JACK LIN', 'jack-lin', 'img-cms.jpg', 'នាយក', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(71, 'GARY CAI', 'gary-cai', 'img-cms.jpg', 'នាយក', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(72, 'WU TSUNG JUNG', 'wu-tsung-jung', 'img-cms.jpg', 'នាយក', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(73, 'SIMON TU', 'simon-tu', 'img-cms.jpg', 'នាយក', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(74, 'ROBERT WU', 'robert-wu', 'img-cms.jpg', 'ទីប្រឹក្សា', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(75, 'SEN YO', 'sen-yo', 'img-cms.jpg', 'ទីប្រឹក្សា', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(76, 'WANG MEI HUI', 'wang-mei-hui', 'img-cms.jpg', 'ទីប្រឹក្សា', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(77, 'Hwa Long (Cambodia) Footwear Industry Co.,Ltd', 'hwa-long-cambodia-footwear-industry-coltd', '', '', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(78, 'Shoe Premier II (Cambodia) Co., Ltd', 'shoe-premier-ii-cambodia-co-ltd', '', '', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(79, 'Strong Health International Ltd (Cambodia)', 'strong-health-international-ltd-cambodia', '', '', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(80, 'Ho Hsin Tai Limited', 'ho-hsin-tai-limited', '', '', NULL, NULL, '2', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-15', NULL),
(149, 'Ministry of Labor and Vocational Training', 'ministry-of-labor-and-vocational-training', '18951149_788331268008366_7762947587882380279_n.jpg', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', '2019-02-22'),
(82, '性能', 'performance', '5.jpg', '<p>大多数人以某种形式，通过注入幽默或随机的方式进行改变。 通过注入幽默，或随机化。</p>\r\n', NULL, NULL, '3', '', 'news_event', 11, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-21', '2019-02-21'),
(83, '创意艺术', 'web-development', '6.jpg', '<p>大多数人以某种形式，通过注入幽默或随机的方式进行改变。 通过注入幽默，或随机化。</p>\r\n', NULL, NULL, '3', '', 'news_event', 11, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-21', '2019-02-21'),
(84, '网站开发服务', 'creative-arts', '1.jpg', '<p>大多数人以某种形式，通过注入幽默或随机的方式进行改变。 通过注入幽默，或随机化。</p>\r\n', NULL, NULL, '3', '', 'news_event', 11, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-02-21', '2019-02-21'),
(85, '多数人受到了影响', 'majority-have-suffered', '11.jpg', '<p>美妙的宁静占据了我的整个灵就像我喜欢的春天的甜蜜早晨</p>\r\n', NULL, NULL, '3', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-21', '2019-02-21'),
(86, '相处的不错', 'get-on-well', '12.jpg', '<p>美妙的宁静占据了我的整个灵就像我喜欢的春天的甜蜜早晨</p>\r\n', NULL, NULL, '3', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-21', '2019-02-21'),
(87, '一起工作', 'work-together', '14.jpg', '<p>美妙的宁静占据了我的整个灵就像我喜欢的春天的甜蜜早晨</p>\r\n', NULL, NULL, '3', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-21', '2019-02-21'),
(88, '可用段落的变化', '', '2019-03-06_105942.png', '<p>的段落有许多变化但是大部分都有某种形式的改变，通过注入幽默，或者看起来甚至不太可信的随机单词随机化的单词看起来甚至不太可信</p>\r\n', NULL, NULL, '3', '多数人遭遇改变', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-06', '2019-03-06'),
(89, '華龍(柬埔寨)鞋業有限公司', 'hwa-long-cambodia-footwear-industry-coltd', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-21', '2019-02-21'),
(90, '特尊鞋業有限公司', 'shoe-premier-ii-cambodia-co-ltd', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-21', '2019-02-21'),
(91, '昌健鞋廠', 'strong-health-international-ltd-cambodia', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-21', '2019-02-21'),
(92, '和信泰有限公司', 'ho-hsin-tai-limited', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-21', '2019-02-21'),
(142, 'Ministry of Commerce', 'ministry-of-commerce', '25395767_1756495734363297_3222713629664938183_n.jpg', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(97, 'Pontus Footwear Ltd. ', 'pontus-footwear-ltd', '', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-21', NULL),
(98, '華龍(柬埔寨)鞋業有限公司', '', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-21', NULL),
(99, 'C.C.F Shoes Manufactory Co., Ltd', 'ccf-shoes-manufactory-co-ltd', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', '2019-02-22'),
(100, 'C.C.F Shoes Manufactory Co., Ltd', 'ccf-shoes-manufactory-co-ltd', '', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-21', NULL),
(101, '金進豐鞋業有限公司', '', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-21', NULL),
(102, '金進豐鞋業有限公司', '', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(103, 'Juhui Footwear Co., Ltd', 'juhui-footwear-co-ltd', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(104, 'Juhui Footwear Co., Ltd', 'juhui-footwear-co-ltd', '', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(105, '鉅輝鞋業', '', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(106, 'I-Cheng (Cambodia) Corporation', 'i-cheng-cambodia-corporation', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(107, 'I-Cheng (Cambodia) Corporation', 'i-cheng-cambodia-corporation', '', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(108, '怡成(柬埔寨)公司', '', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(109, 'Tripos International (Cambodia) Co., Ltd', 'tripos-international-cambodia-co-ltd', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(110, 'Tripos International (Cambodia) Co., Ltd', 'tripos-international-cambodia-co-ltd', '', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(111, '威信柬埔寨廠', '', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(112, 'Kaoway Sports Ltd. ', 'kaoway-sports-ltd', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(113, 'Kaoway Sports Ltd. ', 'kaoway-sports-ltd', '', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(114, '高威運動用品有限公司', '', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(115, 'Lin Wen Chih Sunbow Enterprises Co.,Ltd', 'lin-wen-chih-sunbow-enterprises-coltd', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(116, 'Lin Wen Chih Sunbow Enterprises Co.,Ltd', 'lin-wen-chih-sunbow-enterprises-coltd', '', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(117, '齊鼎股份有限公司', '', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(118, 'Tanaway Leather Goods Manufacturer Co., Ltd. ', 'tanaway-leather-goods-manufacturer-co-ltd', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(119, 'Tanaway Leather Goods Manufacturer Co., Ltd. ', 'tanaway-leather-goods-manufacturer-co-ltd', '', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(120, '達昌皮革製品有限公司', '', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(121, 'Wing Star Shoes (Cambodia)Co., Ltd. ', 'wing-star-shoes-cambodiaco-ltd', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(122, 'Wing Star Shoes (Cambodia)Co., Ltd. ', 'wing-star-shoes-cambodiaco-ltd', '', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(123, '穎強鞋業柬埔寨有限公司', '', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(124, 'Beautiful Spring Footwear Co., Ltd. ', 'beautiful-spring-footwear-co-ltd', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(125, 'Beautiful Spring Footwear Co., Ltd. ', 'beautiful-spring-footwear-co-ltd', '', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(126, 'ASF Sporting Goods Co., Ltd', 'asf-sporting-goods-co-ltd', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(127, 'ASF Sporting Goods Co., Ltd', 'asf-sporting-goods-co-ltd', '', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(128, '理捷企業有限公司', '', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(129, 'New Star Shoes Co., Ltd. ', 'new-star-shoes-co-ltd', '', '<p>Hello</p>\r\n', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(130, ' 穎昌鞋業有限公司', '', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(131, 'Riyingshoes Factory (Cambodia) Co., Ltd. ', 'riyingshoes-factory-cambodia-co-ltd', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(132, '日英鞋業(柬埔寨)有限公司', '', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(133, 'Riyingshoes Factory (Cambodia) Co., Ltd. ', 'riyingshoes-factory-cambodia-co-ltd', '', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(134, 'Grand Oriental Footwear International Co., Ltd. ', 'grand-oriental-footwear-international-co-ltd', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(135, 'Grand Oriental Footwear International Co., Ltd. ', 'grand-oriental-footwear-international-co-ltd', '', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(136, '大東方鞋業有限公司', '', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(137, 'Golden Prosper Footwear Co., Ltd. ', 'golden-prosper-footwear-co-ltd', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(138, 'Golden Prosper Footwear Co., Ltd. ', 'golden-prosper-footwear-co-ltd', '', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(139, ' 金豐鞋業有限公司', '', '', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(140, 'Sky Nice International Co., Ltd. ', 'sky-nice-international-co-ltd', '', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(141, 'Sky Nice International Co., Ltd. ', 'sky-nice-international-co-ltd', '', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(143, 'Ministry of Labor and Vocational Training', 'ministry-of-labor-and-vocational-training', '18951149_788331268008366_7762947587882380279_n.jpg', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(144, 'General Department of Customs and Excise of Cambodia', 'general-department-of-customs-and-excise-of-cambodia', '10405378_866510003402401_1655190502722897011_n.jpg', '', NULL, NULL, '1', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(146, 'Ministry of Labor and Vocational Training', 'ministry-of-labor-and-vocational-training', '18951149_788331268008366_7762947587882380279_n.jpg', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(147, 'General Department of Customs and Excise of Cambodia', 'general-department-of-customs-and-excise-of-cambodia', '10405378_866510003402401_1655190502722897011_n.jpg', '', NULL, NULL, '2', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(148, 'Ministry of Commerce', 'ministry-of-commerce', '25395767_1756495734363297_3222713629664938183_n.jpg', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', '2019-02-22'),
(150, 'General Department of Customs and Excise of Cambodia', 'general-department-of-customs-and-excise-of-cambodia', '10405378_866510003402401_1655190502722897011_n.jpg', '', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(152, 'Sen Yo', 'sen-yo', 'img-cms.jpg', '<p>Advisor</p>\r\n', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-06', '2019-03-06'),
(153, 'Robert Wu ', 'robert-wu', 'img-cms.jpg', '<p>Advisor</p>\r\n', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-06', '2019-03-06'),
(154, 'Simon Tu', 'simon-tu', 'img-cms.jpg', '<p>Director</p>\r\n', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-06', '2019-03-06'),
(155, 'WU TSUNG JUNG ', 'wu-tsung-jung', 'img-cms.jpg', '<p>Director</p>\r\n', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-06', '2019-03-06'),
(156, 'Gary Cai', 'gary-cai', 'img-cms.jpg', '<p>Director</p>\r\n', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-06', '2019-03-06'),
(157, 'Jack Lin', 'jack-lin', 'img-cms.jpg', '<p>Director</p>\r\n', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(158, 'Simon Chen ', 'simon-chen', 'img-cms.jpg', '<p>Director</p>\r\n', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(159, 'Weston Lee ', 'weston-lee', 'img-cms.jpg', '<p>Director</p>\r\n', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(160, 'Ray Pai', 'ray-pai', 'img-cms.jpg', '<p>Secretary Director</p>\r\n', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', '2019-03-07'),
(161, 'Ali Chiu ', 'ali-chiu', 'img-cms.jpg', '<p>Vice Chairman</p>\r\n', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', NULL),
(162, 'Tony Tung', 'tony-tung', 'img-cms.jpg', '<p>Vice Chairman</p>\r\n', NULL, NULL, '3', '', 'post', 6, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-07', NULL),
(163, 'Partners', 'partners', '', '', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-28', '2019-03-28'),
(165, 'Cambodias', 'test', '5.jpg', 'dsdsf\r\n<ul>\r\n<li>link_download</li>\r\n</ul>', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-29', '2019-03-29'),
(167, 'test3', 'test3', '', '', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-29', '2019-03-29'),
(166, 'Chou hour', 'chou-hour', 'photo_2019-02-21_16-09-53 - Copy (2).jpg', '', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-29', '2019-03-29'),
(168, 'ccna', 'ccna', '', '', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-03-29', '2019-03-29'),
(176, 'test', 'test', 'photo-2019-test.jpg', '', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-04-06', '2019-04-06'),
(178, 'admin', 'admin', NULL, NULL, NULL, NULL, '1', NULL, 'page', 11, 1, NULL, 0, NULL, NULL, NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-04-08', NULL),
(172, 'Book', 'book', '295564_378133625630733_433414627_n.jpg', '<p>Can help us all over the world</p>\r\n', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-04-08', '2019-04-08'),
(173, 'Position of CFA', 'position-of-cfa', 'DSC_0013.jpg', '<p>At Phnom Penh Hotel</p>\r\n', NULL, NULL, '1', '', 'news_event', 11, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-04-05', '2019-04-05'),
(174, 'Retails', 'retails', 'photo-2019-test.jpg', '<p>Font Image of Footwear Association</p>\r\n', NULL, NULL, '1', '', 'news_event', 11, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-04-06', '2019-04-06'),
(175, 'Photo and position', 'photo-and-position', '1185891_468536933242678_648590740_n.jpg', '<p>Accountant</p>\r\n', NULL, NULL, '1', '', 'post', 11, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-04-05', '2019-04-05'),
(179, 'International Labour Day 2019', 'international-labour-day-2019', '1-May-2019-.jpg', '<p>Cambodia Footwear Association (CFA) participated in The 133th Anniversary of Internation Labour Day at Ministry of Labour and Vocational Training</p>\r\n', NULL, NULL, '1', '', 'post', 13, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-04-25', '2019-04-25'),
(180, 'Attended the 38th International Footwear Association', 'attended-the-38th-international-footwear-association', 'photo_2019-06-05_10-56-24.jpg', '<p>The Cambodia Footwear Association attended the 38th International Footwear Association organized by Confederation of International Footwear Association, CIFA in Guangzhou from 26-31 May 2019.</p>\r\n', NULL, NULL, '1', '', 'news_event', 12, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-06-10', '2019-06-10'),
(181, 'CFA members at the Gateway, Phnom Penh', 'cfa-members-at-the-gateway-phnom-penh', 'photo_2019-07-01_10-10-28.jpg', '<p>On 14 June 2019, the Cambodia Footwear Association cooperates with Fii &amp; Associates organizing the VAT Refund Mechanism to CFA members at the Gateway, Phnom Penh.</p>\r\n', NULL, NULL, '1', '', 'news_event', 12, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-07-01', '2019-07-01'),
(182, 'Attended the 38th International Footwear Association', 'attended-the-38th-international', 'photo_2019-06-05_10-55-41.jpg', '<p>The Cambodia Footwear Association attended the 38th International Footwear Association organized by Confederation of International Footwear Association, CIFA in Guangzhou from 26-31 May 2019.</p>\r\n', NULL, NULL, '1', '', 'news_event', 12, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-06-10', '2019-06-10'),
(183, 'ការចូលរួមសន្និសីទស្បែកជើងអន្តជាតិលើកទី៣៨', 'attended-the-38th-international-footwear-association', 'photo_2019-06-05_10-56-24.jpg', '<p>សមាគមស្បែកជើងកម្ពុជា បានចូលរួមសន្និសីទស្បែកជើងអន្តជាតិលើកទី៣៨ នាថ្ងៃទី២៦ ដល់ថ្ងៃទី៣១ ខែឧសភា ឆ្នាំ២០១៩ ដែលរៀបចំឡើងដោយសហព័ន្ធសមាគមស្បែកជើងអន្តរជាតិ នៅទីក្រុងក្វាងចូវ ប្រទេសចិន។</p>\r\n', NULL, NULL, '2', '', 'news_event', 12, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-06-10', '2019-06-10'),
(184, 'សមាជិកសមាគមស្បែកជើង នៅ ឌឺហ្គែតវ៉េ', 'cfa-members-at-the-gateway-phnom-penh', 'photo_2019-07-01_10-10-28.jpg', '<p>សមាគមស្បែកជើងកម្ពុជា បានចូលរួមសន្និសីទស្បែកជើងអន្តជាតិលើកទី៣៨ នាថ្ងៃទី២៦ ដល់ថ្ងៃទី៣១ ខែឧសភា ឆ្នាំ២០១៩ ដែលរៀបចំឡើងដោយសហព័ន្ធសមាគមស្បែកជើងអន្តរជាតិ នៅទីក្រុងក្វាងចូវ ប្រទេសចិន។</p>\r\n', NULL, NULL, '2', '', 'news_event', 12, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-07-01', '2019-07-01'),
(185, 'ការចូលរួមសន្និសីទស្បែកជើងអន្តជាតិលើកទី៣៨', 'attended-the-38th-international', 'photo_2019-06-05_10-55-41.jpg', '<p>សមាគមស្បែកជើងកម្ពុជា បានចូលរួមសន្និសីទស្បែកជើងអន្តជាតិលើកទី៣៨ នាថ្ងៃទី២៦ ដល់ថ្ងៃទី៣១ ខែឧសភា ឆ្នាំ២០១៩ ដែលរៀបចំឡើងដោយសហព័ន្ធសមាគមស្បែកជើងអន្តរជាតិ នៅទីក្រុងក្វាងចូវ ប្រទេសចិន។</p>\r\n', NULL, NULL, '2', '', 'news_event', 12, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-06-10', '2019-06-10'),
(192, 'នៅថ្ងៃទី១៣ ខែសីហា ឆ្នាំ២០១៩ ', 'on-13-august-2019', 'photo_2019-08-15_17-24-15.jpg', '<p>សមាគមស្បែកជើងកម្ពុជា និងធនាគារឯកទេសវីង(ខេមបូឌា)&nbsp; លីមីតធីត បានចុះហត្ថលេខាលើអនុស្សរណៈយោគយល់គ្នា ដើម្បីផ្តល់សេវាបើកប្រាក់ ងាយស្រួល រហ័ស និងសុវត្ថិភាព ជូនដល់បងប្អូនកម្មករដែលបម្រើការងារក្នុងរោងចក្រស្បែកជើងដែលជាសមាជិករបស់សមាគម។</p>\r\n', NULL, NULL, '2', '', 'news_event', 12, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-08-15', '2019-08-15'),
(191, 'On 13 August 2019,', 'on-13-august-2019', 'photo_2019-08-15_17-24-15.jpg', '<p>The Cambodia Footwear Association and Wing (Cambodia) Limited Specialized Bank signed MOU on payroll service in order to provide our shoes factory workers with fast, secured and convenient payment.</p>\r\n', NULL, NULL, '1', '', 'news_event', 12, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-08-15', '2019-08-15'),
(187, 'បទបង្ហាញណែនាំអំពីការចុះឈ្មោះក្នុងប្រព័ន្ធចុះបញ្ជីអ្នកនាំចេញ', 'training-session-on-registered-exporter-rex-to-all-members-of-cfa', 'photo_2019-08-02_09-04-26.jpg', '<p>នៅថ្ងៃទី២៦ ខែកក្កដា ឆ្នាំ២០១៩ សមាគមស្បែកជើងកម្ពុជា និងក្រសួងពាណិជ្ជកម្ម បានសហការរៀបចំបទបង្ហាញ និងការពន្យល់ណែនាំអំពីការចុះឈ្មោះក្នុងប្រព័ន្ធចុះបញ្ជីអ្នកនាំចេញ និងបានធ្វើការក្រើនរំលឹកដល់សមាជិករបស់ខ្លួនដែលមិនទាន់បានចុះបញ្ជី អោយរួសរាន់ទៅធ្វើការចុះបញ្ជីអោយបានទាន់ពេលវេលា តាមសេចក្តីជូនដំណឹងរបស់ក្រសួងពាណិជ្ជកម្ម។</p>\r\n', NULL, NULL, '2', '', 'news_event', 12, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-08-02', '2019-08-02'),
(188, 'Supporting Statement of Cambodia Footwear Association on Sub-Decree No.112', 'supporting-statement-of-cambodia-footwear-association-on-sub-decree-no112', 'សេចក្តីថ្លែងការសមាគមស្បែកជើង.png', '<p>Supporting Statement of Cambodia Footwear Association on Sub-Decree No.112 issued on 2 August 2019 on Holiday Calendar for Civil Servants, Workers/Employees for the year 2020 by the Royal Government of Cambodia.</p>\r\n\r\n<p>&nbsp;</p>\r\n', NULL, NULL, '1', '', 'news_event', 12, 0, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '2019-08-15 00:00:00', '2020-08-30 00:00:00', '2019-08-15', '2019-08-15'),
(189, 'សេចក្តីថ្លែងការណ៏របស់សមាគមស្បែកជើងកម្ពុជា គាំទ្រចំពោះអនុក្រឹត្យលេខ១១២', 'supporting-statement-of-cambodia-footwear-association-on-sub-decree-no112', NULL, '<p>សេចក្តីថ្លែងការណ៏របស់សមាគមស្បែកជើងកម្ពុជា គាំទ្រចំពោះអនុក្រឹត្យលេខ១១២ អនក្រ.បក ចុះថ្ងៃទី០២ ខែសីហា ឆ្នាំ២០១៩ ស្តីពីប្រតិទិនឈប់សម្រាកការងាររបស់មន្រ្តីរាជការ និយោជិត កម្មករ ប្រចាំឆ្នាំ២០២០។</p>\r\n', NULL, NULL, '2', '', 'news_event', 12, 0, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-08-15', '2019-08-15'),
(190, 'សេចក្តីថ្លែងការណ៏របស់សមាគមស្បែកជើងកម្ពុជា គាំទ្រចំពោះអនុក្រឹត្យលេខ១១២', 'supporting-statement-of-cambodia-footwear-association-on-sub-decree-no112', 'សេចក្តីថ្លែងការសមាគមស្បែកជើង.png', '<p>សេចក្តីថ្លែងការណ៏របស់សមាគមស្បែកជើងកម្ពុជា គាំទ្រចំពោះអនុក្រឹត្យលេខ១១២ អនក្រ.បក ចុះថ្ងៃទី០២ ខែសីហា ឆ្នាំ២០១៩ ស្តីពីប្រតិទិនឈប់សម្រាកការងាររបស់មន្រ្តីរាជការ និយោជិត កម្មករ ប្រចាំឆ្នាំ២០២០។</p>\r\n', NULL, NULL, '2', '', 'news_event', 12, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-08-15', '2019-08-15'),
(194, 'សកម្មភាពមនុស្សធម៌ ដោយបានបរិច្ចាគស្បែកជើង,នៅថ្ងៃទី១៣ ខែសីហា ឆ្នាំ២០១៩', 'on-13-august-2019-the-charity-activity', 'photo_2019-08-15_17-44-31.jpg', '<p>នៅថ្ងៃទី១៣ ខែសីហា ឆ្នាំ២០១៩ លោកឧកញ៉ា ប្រធានសមាគមស្បែកជើងកម្ពុជា បានដឹកនាំសមាជិកដែលជារោងចក្រផលិតស្បែកជើង ធ្វើសកម្មភាពមនុស្សធម៌ ដោយបានបរិច្ចាគស្បែកជើងចំនួន១៧៩៤&nbsp; ដល់អង្គការភាពញញឹមនៃកុមារ (PSE)។</p>\r\n', NULL, NULL, '1', '', 'post', 12, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-08-15', '2019-08-15'),
(196, 'សកម្មភាពបរិច្ចាគស្បែកជើងដល់សាលាបច្ចេកទេសដុនបូស្កូ', 'on-13-august-2019-to-don-bosco-technical-school', 'photo_2019-08-15_17-58-38.jpg', '<p>នៅថ្ងៃទី១៣ ខែសីហា ឆ្នាំ២០១៩ លោកឧកញ៉ាប្រធានសមាគមស្បែកជើងកម្ពុជា បានដឹកនាំសមាជិកចូលរួមសកម្មភាពសង្គម ដោយបានបរិច្ចាគស្បែកជើងចំនួន១៤៧៩គូរ ដល់សាលាបច្ចេកទេសដុនបូស្កូ។</p>\r\n', NULL, NULL, '2', '', 'post', 12, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-08-15', '2019-08-15'),
(197, 'A Charity Activity To Don Bosco Technical School', 'on-13-august-2019-to-don-bosco-technical-school', 'photo_2019-08-15_17-58-38.jpg', '<p>On 13 August 2019, The Chairman of Cambodia Footwear Association and members has done a charity activity by donating 1479 pairs of shoes to Don Bosco Technical School.</p>\r\n', NULL, NULL, '1', '', 'post', 12, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-08-15', '2019-08-15'),
(198, 'The Official Grand Opening of Cambodia Footwear Association', 'the-official-grand-opening-of-cambodia-footwear-association', 'DSC_0238.JPG', '<p>The Official Grand Opening of Cambodia Footwear Association on 14 September 2019 at Diamond Island Center.</p>\r\n', NULL, NULL, '1', '', 'news_event', 12, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-09-19', '2019-09-19'),
(199, 'ពិធីបើកសម្ពោធជាផ្លូវការនៃសមាគមស្បែកជើងកម្ពុជា', 'the-official-grand-opening-of-cambodia-footwear-association', 'DSC_0238.JPG', '<p>ពិធីបើកសម្ពោធជាផ្លូវការនៃសមាគមស្បែកជើងកម្ពុជា ដែលប្រព្រឹត្តទៅនាថ្ងៃទី១៤ ខែកញ្ញា ឆ្នាំ២០១៩ នៅមជ្ឈមណ្ឌលពិព័រណ៍កោះពេជ្រ។</p>\r\n', NULL, NULL, '2', '', 'news_event', 12, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-09-19', '2019-09-19'),
(200, 'សូមថ្លែងអំណរសាទរ', '', 'photo6244532877157050541.jpg', '<p>ឧកញ៉ា លី ឃុនថៃ ប្រធានសមាគមស្បែកជើងកម្ពុជា​សូមគោរពអបអរសាទរ សម្តេចតេជោ ហ៊ុន សែន ដែលទទួលបានពានរង្វាន់ ភាពជាអ្នកដឹកនាំ និងអភិបាលកិច្ចល្អ</p>\r\n', NULL, NULL, '2', '', 'news_event', 11, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-11-29', '2019-11-29'),
(201, 'សូមថ្លែងអំណរសាទរ', '', 'photo6271756484413073701.jpg', '<p>ឧកញ៉ា លី ឃុនថៃ ប្រធានសមាគមស្បែកជើងកម្ពុជា​សូមគោរពអបអរសាទរ សម្តេចតេជោ ហ៊ុន សែន ដែលទទួលបានពានរង្វាន់ ភាពជាអ្នកដឹកនាំ និងអភិបាលកិច្ចល្អ</p>\r\n', NULL, NULL, '2', '', 'news_event', 11, 1, NULL, NULL, '1970-01-01 12:01:00', '1970-01-01 12:01:00', NULL, NULL, NULL, NULL, '1970-01-01 00:00:00', '1970-01-01 00:00:00', '2019-11-29', '2019-11-29'),
(202, ' The Forum on Rules and Procedure for Income Tax and Other Taxes Relating to \"Cut Make and Trim (CMT)\" of Qualified Investment Project ', 'cambodia-footwearorgcom', 'IMG_0707.JPG', '<p><span style=\"font-family:trebuchet ms,helvetica,sans-serif\"><span style=\"font-size:14px\">On 27 December 2019, the Cambodia Footwear Association (CFA) and The General Department of Taxation has Conducted The Forum on Rules and Procedure for Income Tax and Other Taxes Relating to &quot;Cut Make and Trim (CMT)&quot; of Qualified Investment Project, at The Gateway Phnom Penh.&nbsp;</span></span></p>\r\n', NULL, NULL, '1', 'cambodia-footwear.org.com ', 'news_event', 11, 1, NULL, NULL, '2019-12-28 11:12:00', '2019-12-28 11:12:00', NULL, NULL, NULL, NULL, '2019-12-28 00:00:00', '2019-12-28 00:00:00', '2019-12-28', '2019-12-28'),
(203, 'អបអរសាទរ ខួបលើកទី៤១ នៃទិវាជ័យជម្នះ ៧មករា ', 'cambodia-footwearorgcom', '2020-01-08-10.48.24.jpg', '<p><span style=\"font-family:lucida sans unicode,lucida grande,sans-serif\"><span style=\"font-size:12px\">អបអរសាទរ ខួបលើកទី៤១ នៃទិវាជ័យជម្នះ ៧មករា ១៩៧៩-២០២០</span></span></p>\r\n\r\n<p><span style=\"font-family:lucida sans unicode,lucida grande,sans-serif\"><span style=\"font-size:12px\">​ខ្ញុំស្រឡាញ់សន្តិភាព អគុណសន្តិភាព!&nbsp;</span></span></p>\r\n', NULL, NULL, '2', '', 'news_event', 11, 1, NULL, NULL, '2020-01-08 10:01:00', '2020-01-31 10:01:00', NULL, NULL, NULL, NULL, '2020-01-08 00:00:00', '1970-01-01 00:00:00', '2020-01-08', '2020-01-08');
INSERT INTO `posts` (`id`, `title`, `link`, `image`, `description`, `template`, `count`, `language`, `link_download`, `post_type`, `user_id`, `status`, `is_againt`, `deleted`, `event_start_date`, `event_end_date`, `s_from_rang`, `s_to_rang`, `location_job`, `job_type`, `publish_date`, `unpublish_date`, `created_at`, `updated_at`) VALUES
(204, 'The Conducting Seminar on  Procedure of Demolition of Remaining goods and the Preparation of Administrative Letters', 'cambodia-footwearorgcom', 'IMG_1222.JPG', '<p style=\"text-align:justify\">On 17th January 2020, The Cambodia Footwear Association (CFA) cooperates with the General Department of Customs and Excise conducting a seminar on &ldquo;the procedure of demolition of remaining goods and the preparation of administrative letters. At the Gateway (Russian Boulevard, 110, Khan Tuol Kok).&nbsp;</p>\r\n', NULL, NULL, '1', 'cambodia//cgf-footwear/.org.com ', 'news_event', 11, 1, NULL, NULL, '2020-01-20 09:01:00', '2020-03-07 09:03:00', NULL, NULL, NULL, NULL, '2020-01-20 00:00:00', '2020-01-20 00:00:00', '2020-01-20', '2020-01-20'),
(205, 'Happy Chinese New Year!', 'cambodia-footwearorgcom', 'Happy-New-Year-Photo.jpeg', '<p style=\"text-align: center;\">Happy Chinese New Year 2020!&nbsp;</p>\r\n\r\n<p style=\"text-align: center;\">May the Year of the Rat bring you good Luck &amp; Prosperity,&nbsp;</p>\r\n\r\n<h1 style=\"text-align: center;\">&nbsp;</h1>\r\n', NULL, NULL, '3', 'cambodia//cgf-footwear/.org.com ', 'news_event', 11, 1, NULL, NULL, '2020-01-23 03:01:00', '2020-01-23 03:01:00', NULL, NULL, NULL, NULL, '2020-01-23 00:00:00', '1970-01-01 00:00:00', '2020-01-23', '2020-01-23');

-- --------------------------------------------------------

--
-- Table structure for table `post_categories`
--

CREATE TABLE `post_categories` (
  `id` int(5) NOT NULL,
  `post_id` int(5) NOT NULL,
  `position` varchar(60) DEFAULT NULL,
  `categorie_id` int(5) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_categories`
--

INSERT INTO `post_categories` (`id`, `post_id`, `position`, `categorie_id`, `created_at`, `updated_at`) VALUES
(87, 1, 'position_4', 35, NULL, NULL),
(86, 1, 'position_2', 4, NULL, NULL),
(85, 1, 'position_1', 3, NULL, NULL),
(11, 7, 'position_1', 7, NULL, NULL),
(12, 7, 'position_2', 9, NULL, NULL),
(13, 7, 'position_3', 8, NULL, NULL),
(14, 2, 'position_1', 10, NULL, NULL),
(15, 3, 'position_1', 11, NULL, NULL),
(16, 4, 'position_1', 12, NULL, NULL),
(84, 1, 'position_3', 6, NULL, NULL),
(18, 6, 'position_1', 14, NULL, NULL),
(19, 8, 'position_1', 15, NULL, NULL),
(20, 9, 'position_1', 16, NULL, NULL),
(23, 11, 'position_1', 18, NULL, NULL),
(25, 12, 'position_1', 19, NULL, NULL),
(26, 19, 'position_1', 20, NULL, NULL),
(31, 13, 'position_2', 22, NULL, NULL),
(30, 13, 'position_1', 21, NULL, NULL),
(32, 13, 'position_3', 23, NULL, NULL),
(33, 14, 'position_1', 24, NULL, NULL),
(34, 16, 'position_1', 25, NULL, NULL),
(52, 18, 'position_1', 26, NULL, NULL),
(37, 10, 'position_1', 17, NULL, NULL),
(38, 15, 'position_1', 27, NULL, NULL),
(51, 164, 'position_2', 29, NULL, NULL),
(50, 164, 'position_1', 28, NULL, NULL),
(64, 169, 'position_1', 34, NULL, NULL),
(63, 169, 'position_2', 32, NULL, NULL),
(62, 169, 'position_3', 33, NULL, NULL),
(79, 5, 'position_1', 13, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `post_galleries`
--

CREATE TABLE `post_galleries` (
  `id` int(5) NOT NULL,
  `post_id` int(5) DEFAULT NULL,
  `gallerie_id` int(5) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `post_galleries`
--

INSERT INTO `post_galleries` (`id`, `post_id`, `gallerie_id`) VALUES
(1, 5, 1),
(3, 11, 3),
(6, 18, 4),
(11, 164, 1);

-- --------------------------------------------------------

--
-- Table structure for table `post_image`
--

CREATE TABLE `post_image` (
  `id` int(11) NOT NULL,
  `post_id` int(11) DEFAULT NULL,
  `image` varchar(250) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `post_image`
--

INSERT INTO `post_image` (`id`, `post_id`, `image`) VALUES
(34, 27, 'photo_2019-02-14_10-43-45.jpg'),
(35, 165, '12.jpg'),
(36, 165, '13.jpg'),
(37, 165, '14.jpg'),
(47, 166, 'photo_2019-02-21_16-09-53 - Copy (3).jpg'),
(48, 166, 'photo_2019-02-21_16-09-53 - Copy (4).jpg'),
(49, 166, 'photo_2019-02-21_16-09-53 - Copy.jpg'),
(50, 167, 'photo_2019-02-21_16-09-53 - Copy.jpg'),
(51, 167, 'photo_2019-02-21_16-09-53.jpg'),
(52, 167, 'photo_2019-02-21_16-09-56.jpg'),
(53, 168, 'photo_2019-02-21_16-09-53 - Copy.jpg'),
(54, 168, 'photo_2019-02-21_16-09-56.jpg'),
(74, 172, '4.jpg'),
(75, 172, '5.jpg'),
(76, 172, '6.jpg'),
(77, 172, '11.jpg'),
(79, 179, '1 May 2019=.jpg'),
(83, 180, 'photo_2019-06-05_10-54-07.jpg'),
(84, 180, 'photo_2019-06-05_10-54-17.jpg'),
(85, 180, 'photo_2019-06-05_10-54-24.jpg'),
(86, 180, 'photo_2019-06-05_10-54-29.jpg'),
(89, 182, 'photo_2019-06-05_10-54-39.jpg'),
(90, 182, 'photo_2019-06-05_10-54-58.jpg'),
(91, 182, 'photo_2019-06-05_10-55-12.jpg'),
(92, 182, 'photo_2019-06-05_10-55-49.jpg'),
(93, 182, 'photo_2019-06-05_10-55-54.jpg'),
(94, 182, 'photo_2019-06-05_10-55-59.jpg'),
(95, 182, 'photo_2019-06-05_10-56-36.jpg'),
(96, 182, 'photo_2019-06-05_10-56-40.jpg'),
(97, 182, 'photo_2019-06-05_10-56-46.jpg'),
(98, 182, 'photo_2019-06-05_10-56-52.jpg'),
(99, 183, 'photo_2019-06-05_10-54-07.jpg'),
(100, 183, 'photo_2019-06-05_10-54-17.jpg'),
(101, 183, 'photo_2019-06-05_10-54-24.jpg'),
(102, 183, 'photo_2019-06-05_10-54-29.jpg'),
(105, 185, 'photo_2019-06-05_10-54-39.jpg'),
(106, 185, 'photo_2019-06-05_10-54-58.jpg'),
(107, 185, 'photo_2019-06-05_10-55-12.jpg'),
(108, 185, 'photo_2019-06-05_10-55-49.jpg'),
(109, 185, 'photo_2019-06-05_10-55-54.jpg'),
(110, 185, 'photo_2019-06-05_10-55-59.jpg'),
(111, 185, 'photo_2019-06-05_10-56-24.jpg'),
(112, 185, 'photo_2019-06-05_10-56-30.jpg'),
(113, 185, 'photo_2019-06-05_10-56-36.jpg'),
(114, 185, 'photo_2019-06-05_10-56-40.jpg'),
(115, 185, 'photo_2019-06-05_10-56-46.jpg'),
(116, 185, 'photo_2019-06-05_10-56-52.jpg'),
(117, 181, 'photo_2019-07-01_09-56-50.jpg'),
(118, 181, 'photo_2019-07-01_09-57-20.jpg'),
(119, 181, 'photo_2019-07-01_09-57-30.jpg'),
(120, 181, 'photo_2019-07-01_09-57-35.jpg'),
(121, 181, 'photo_2019-07-01_09-57-48.jpg'),
(122, 181, 'photo_2019-07-01_09-57-53.jpg'),
(123, 181, 'photo_2019-07-01_09-57-57.jpg'),
(124, 181, 'photo_2019-07-01_09-58-01.jpg'),
(125, 181, 'photo_2019-07-01_09-58-05.jpg'),
(126, 181, 'photo_2019-07-01_09-58-09.jpg'),
(127, 181, 'photo_2019-07-01_09-58-14.jpg'),
(128, 181, 'photo_2019-07-01_09-58-17.jpg'),
(129, 181, 'photo_2019-07-01_09-58-21.jpg'),
(130, 181, 'photo_2019-07-01_09-58-25.jpg'),
(131, 181, 'photo_2019-07-01_09-58-28.jpg'),
(132, 181, 'photo_2019-07-01_09-58-32.jpg'),
(133, 184, 'photo_2019-07-01_09-56-50.jpg'),
(134, 184, 'photo_2019-07-01_09-57-20.jpg'),
(135, 184, 'photo_2019-07-01_09-57-30.jpg'),
(136, 184, 'photo_2019-07-01_09-57-35.jpg'),
(137, 184, 'photo_2019-07-01_09-57-48.jpg'),
(138, 184, 'photo_2019-07-01_09-57-53.jpg'),
(139, 184, 'photo_2019-07-01_09-57-57.jpg'),
(140, 184, 'photo_2019-07-01_09-58-01.jpg'),
(141, 184, 'photo_2019-07-01_09-58-05.jpg'),
(142, 184, 'photo_2019-07-01_09-58-09.jpg'),
(143, 184, 'photo_2019-07-01_09-58-14.jpg'),
(144, 184, 'photo_2019-07-01_09-58-17.jpg'),
(145, 184, 'photo_2019-07-01_09-58-21.jpg'),
(146, 184, 'photo_2019-07-01_09-58-25.jpg'),
(147, 184, 'photo_2019-07-01_09-58-28.jpg'),
(148, 184, 'photo_2019-07-01_09-58-32.jpg'),
(159, 187, 'photo_2019-08-02_09-04-26.jpg'),
(160, 187, 'photo_2019-08-02_09-05-41.jpg'),
(161, 187, 'photo_2019-08-02_09-05-45.jpg'),
(162, 187, 'photo_2019-08-02_09-05-49.jpg'),
(163, 187, 'photo_2019-08-02_09-05-53.jpg'),
(164, 187, 'photo_2019-08-02_09-05-57.jpg'),
(165, 187, 'photo_2019-08-02_09-06-03.jpg'),
(166, 187, 'photo_2019-08-02_09-06-10.jpg'),
(167, 187, 'photo_2019-08-02_09-06-15.jpg'),
(168, 187, 'photo_2019-08-02_09-06-20.jpg'),
(169, 191, 'photo_2019-08-15_17-22-37.jpg'),
(170, 191, 'photo_2019-08-15_17-24-03.jpg'),
(171, 191, 'photo_2019-08-15_17-24-09.jpg'),
(172, 191, 'photo_2019-08-15_17-24-15.jpg'),
(173, 192, 'photo_2019-08-15_17-22-37.jpg'),
(174, 192, 'photo_2019-08-15_17-24-03.jpg'),
(175, 192, 'photo_2019-08-15_17-24-09.jpg'),
(176, 192, 'photo_2019-08-15_17-24-15.jpg'),
(177, 193, 'photo_2019-08-15_17-45-01.jpg'),
(178, 193, 'photo_2019-08-15_17-45-06.jpg'),
(179, 193, 'photo_2019-08-15_17-45-10.jpg'),
(180, 193, 'photo_2019-08-15_17-45-13.jpg'),
(181, 193, 'photo_2019-08-15_17-45-16.jpg'),
(182, 193, 'photo_2019-08-15_17-45-19.jpg'),
(183, 193, 'photo_2019-08-15_17-45-22.jpg'),
(184, 193, 'photo_2019-08-15_17-45-25.jpg'),
(185, 193, 'photo_2019-08-15_17-45-29.jpg'),
(186, 194, 'photo_2019-08-15_17-45-01.jpg'),
(187, 194, 'photo_2019-08-15_17-45-06.jpg'),
(188, 194, 'photo_2019-08-15_17-45-10.jpg'),
(189, 194, 'photo_2019-08-15_17-45-13.jpg'),
(190, 194, 'photo_2019-08-15_17-45-16.jpg'),
(191, 194, 'photo_2019-08-15_17-45-19.jpg'),
(192, 194, 'photo_2019-08-15_17-45-22.jpg'),
(193, 194, 'photo_2019-08-15_17-45-25.jpg'),
(194, 194, 'photo_2019-08-15_17-45-29.jpg'),
(197, 196, 'photo_2019-08-15_17-58-10.jpg'),
(198, 196, 'photo_2019-08-15_17-58-42.jpg'),
(199, 197, 'photo_2019-08-15_17-58-10.jpg'),
(200, 197, 'photo_2019-08-15_17-58-42.jpg'),
(201, 198, 'download.jpg'),
(202, 198, 'DSC_0238.JPG'),
(203, 198, 'DSC_0252.JPG'),
(204, 198, 'DSC_0306 - Copy.JPG'),
(205, 198, 'DSC_0310.JPG'),
(206, 198, 'DSC_0325.JPG'),
(207, 198, 'DSC_0450.JPG'),
(208, 198, 'DSC_0452.JPG'),
(209, 198, 'DSC_0475.JPG'),
(210, 198, 'DSC_0504.JPG'),
(211, 198, 'DSC_0714.JPG'),
(212, 198, 'DSC_0742.JPG'),
(213, 198, 'DSC_0744.JPG'),
(214, 198, 'DSC_0998.JPG'),
(215, 198, 'DSC_1357.JPG'),
(216, 198, 'M4R_3750.jpg'),
(217, 199, 'download.jpg'),
(218, 199, 'DSC_0238.JPG'),
(219, 199, 'DSC_0252.JPG'),
(220, 199, 'DSC_0306 - Copy.JPG'),
(221, 199, 'DSC_0310.JPG'),
(222, 199, 'DSC_0325.JPG'),
(223, 199, 'DSC_0450.JPG'),
(224, 199, 'DSC_0452.JPG'),
(225, 199, 'DSC_0475.JPG'),
(226, 199, 'DSC_0504.JPG'),
(227, 199, 'DSC_0714.JPG'),
(228, 199, 'DSC_0742.JPG'),
(229, 199, 'DSC_0744.JPG'),
(230, 199, 'DSC_0998.JPG'),
(231, 199, 'DSC_1357.JPG'),
(232, 199, 'M4R_3750.jpg'),
(234, 202, 'IMG_0650.JPG'),
(235, 204, 'IMG_1098.JPG'),
(236, 204, 'IMG_1170.JPG'),
(237, 204, 'IMG_1182.JPG');

-- --------------------------------------------------------

--
-- Table structure for table `post_slides`
--

CREATE TABLE `post_slides` (
  `id` int(5) NOT NULL,
  `slide_id` int(5) DEFAULT NULL,
  `post_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `roles`
--

CREATE TABLE `roles` (
  `id` int(5) NOT NULL,
  `name` varchar(200) NOT NULL,
  `display_name` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `roles`
--

INSERT INTO `roles` (`id`, `name`, `display_name`, `description`, `status`, `created_at`, `updated_at`) VALUES
(1, 'administrator', 'Administrator', NULL, 1, NULL, NULL),
(2, 'user', 'User', 'user', NULL, '2017-05-19', '2017-05-19'),
(3, 'admin', 'Admin', 'admin', NULL, '2017-05-19', '2017-05-19');

-- --------------------------------------------------------

--
-- Table structure for table `settings`
--

CREATE TABLE `settings` (
  `id` int(5) NOT NULL,
  `website_name` varchar(250) NOT NULL,
  `website_url` varchar(250) DEFAULT NULL,
  `language` varchar(220) DEFAULT NULL,
  `address` text DEFAULT NULL,
  `phone` text DEFAULT NULL,
  `email` text DEFAULT NULL,
  `work_time` text DEFAULT NULL,
  `logo_image` varchar(250) DEFAULT NULL,
  `logo_text` varchar(250) DEFAULT NULL,
  `favicon_image` varchar(250) DEFAULT NULL,
  `copyright` varchar(200) DEFAULT NULL,
  `address_site` text DEFAULT NULL,
  `is_slide_only_page` int(11) DEFAULT NULL,
  `link_fb` text DEFAULT NULL,
  `user_id` int(5) DEFAULT NULL,
  `google_map` text DEFAULT NULL,
  `facebooklink` text DEFAULT NULL,
  `visitor_counter` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `settings`
--

INSERT INTO `settings` (`id`, `website_name`, `website_url`, `language`, `address`, `phone`, `email`, `work_time`, `logo_image`, `logo_text`, `favicon_image`, `copyright`, `address_site`, `is_slide_only_page`, `link_fb`, `user_id`, `google_map`, `facebooklink`, `visitor_counter`, `created_at`, `updated_at`) VALUES
(3, 'CFA', 'http://www.cambodia-footwear.org', '1', '<p>#37-5, Street 282, Sangkat Beoung Kengkang1, Khan Chamkarmorn, Phnom Penh</p>\r\n', '(+855) 89 797 879', 'ngounchanara@yahoo.com', '<p>MON - FRI (8AM - 5PM)</p>\r\n\r\n<p>SATURDAY (8AM - 12AM)</p>\r\n', 'cfa.png', '', 'logo_cfa_fQ5_icon.ico', '<p>All rights reserved</p>\r\n', '<p><iframe frameborder=\"0\" height=\"500\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d251.4692883371509!2d104.92163573500858!3d11.5542119464536!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDMzJzE1LjMiTiAxMDTCsDU1JzE3LjgiRQ!5e0!3m2!1sen!2skh!4v1548210122032\" style=\"border:0\" width=\"100%\"></iframe></p>\r\n', NULL, NULL, 13, NULL, NULL, NULL, '2019-04-12', '2019-04-12'),
(4, 'CFA', 'http://www.cambodia-footwear.org', '2', '<p>#៣៧-៥, ផ្លូវ ២៨២, សង្កាត់​ បឹងកេងកង១, ខណ័្ឌចំការមន, រាជធានីភ្នំពេញ</p>\r\n', '089 797 879', 'ngounchanara@yahoo.com', '<p>ចន្ទ័ - សុក្រ(៨ព្រឹក - ៥ល្ងាច)</p>\r\n\r\n<p>សៅរ៍&nbsp;(៨ព្រឹក - ១២ថ្ងៃត្រង់)</p>\r\n', 'cfa.png', '', 'logo_cfa_fQ5_icon.ico', '<p>All rights reserved</p>\r\n', '<p><iframe frameborder=\"0\" height=\"500\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d251.4692883371509!2d104.92163573500858!3d11.5542119464536!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDMzJzE1LjMiTiAxMDTCsDU1JzE3LjgiRQ!5e0!3m2!1sen!2skh!4v1548210122032\" style=\"border:0\" width=\"100%\"></iframe></p>\r\n', NULL, NULL, 6, NULL, NULL, NULL, '2019-03-28', '2019-03-28'),
(5, 'CFA', 'www.cambodia-footwear.org', '3', '<p>#37-5, Street 282, Sangkat Beoung Kengkang1,\\n Khan Chamkarmorn, Phnom Penh</p>\r\n', '(+855) 89 797 879', 'ngounchanara@yahoo.com', '<p><strong><span style=\"font-size:14px\"><span style=\"color:#FFFFFF\"><span style=\"font-family:arial,sans-serif\">周一至周五（上午8点至下午5点）</span></span></span></strong></p>\r\n\r\n<p><strong><span style=\"font-size:14px\"><span style=\"color:#FFFFFF\"><span style=\"font-family:arial,sans-serif\">星期六（上午8点到12点）</span></span></span></strong></p>\r\n', 'cfa.png', '', 'logo_cfa_fQ5_icon.ico', '<p>All rights reserved</p>\r\n', '<p><iframe frameborder=\"0\" height=\"500\" src=\"https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d251.4692883371509!2d104.92163573500858!3d11.5542119464536!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0x0!2zMTHCsDMzJzE1LjMiTiAxMDTCsDU1JzE3LjgiRQ!5e0!3m2!1sen!2skh!4v1548210122032\" style=\"border:0\" width=\"100%\"></iframe></p>\r\n', NULL, NULL, 12, NULL, NULL, NULL, '2019-03-28', '2019-03-28');

-- --------------------------------------------------------

--
-- Table structure for table `slides`
--

CREATE TABLE `slides` (
  `id` int(5) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `language` int(220) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `slide_type_id` int(5) DEFAULT NULL,
  `user_id` int(5) DEFAULT NULL,
  `deleted` int(10) DEFAULT NULL,
  `publish_date` datetime DEFAULT NULL,
  `unpublish_date` datetime DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slides`
--

INSERT INTO `slides` (`id`, `name`, `language`, `description`, `status`, `slide_type_id`, `user_id`, `deleted`, `publish_date`, `unpublish_date`, `created_at`, `updated_at`) VALUES
(5, ' The Chairman and members of Cambodia Footwear Association (CFA) attends the Grand Opening of Newa Insurance (Cambodia) Plc on December 2, 2018. ', 1, '', 1, 1, 6, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(13, 'ប្រធានសមាគមស្បែកកម្ពុជា និងសមាជិកសមាគម បានចូលរួមពិធីសម្ពោធបើកជាផ្លូវការក្រុមហ៊ុនធានារ៉ាប់រងនីវ៉ា អ៊ិនសួរេន (ខេមបូឌា)ម.ក នាថ្ងៃទី២ ខែធ្នូ ឆ្នាំ២០១៨។', 2, '', 1, 1, 6, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(9, '柬埔寨鞋類協會 (cfa) 主席和會員出席了2018年12月2日的新華保險 (柬埔寨) 有限公司盛大開幕儀式。', 3, '', 1, 1, 6, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(6, 'Oknha Ly Kunthai, Chairman of CFA welcomes Chinese Dongguan Footwear Association on December 4, 2018.', 1, '', 1, 1, 6, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(7, ' The Cambodia Footwear Association (CFA) welcomes Confederation of International Footwear Association (CIFA) visiting Cambodia on January 7, 2019. ', 1, '', 1, 1, 6, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(8, 'Oknha Ly Kunthai, Chairman of CFA represents the President of Cambodia Chamber of Commerce welcomes Mr.Peter Wong and his delegates from Hong Kong Trade Development Council (HKTDC) on Hong Kong Business Mission to Cambodia on November 11, 2018. ', 1, '', 1, 1, 6, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(10, '年初社主席奧克納·李坤泰勋爵于2018年12月4日歡迎中國東莞鞋業協會。', 3, '', 1, 1, 6, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(11, '柬埔寨鞋類協會 (CFA) 歡迎國際鞋類協會聯合會 (CIFA) 于2019年1月7日訪問柬埔寨。', 3, '', 1, 1, 6, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(12, '終審法院主席奧克那·李坤泰勋爵代表柬埔寨商會會長, 歡迎黃志光先生及其香港貿易發展局 (貿發局) 的代表于二零零一年十一月十一日對柬埔寨進行香港商業訪問。', 3, '', 1, 1, 6, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(14, 'ឩកញ៉ា លី ឃុនថៃ ប្រធានសមាគមស្បែកជើងកម្ពុជា បានទទួលស្វាគមន៍ប្រតិភូនៃសមាគមស្បែកជើងចិនតុងគាន់ នាថ្ងៃទី៤ ខែធ្នូ ឆ្នាំ២០១៨។ ', 2, '', 1, 1, 6, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(15, 'សមាគមស្បែកជើងកម្ពុជា(ស.ស.ក)ទទួលស្វាគមន៍សហព័ន្ធនៃសមាគមស្បែកជើងអន្តរជាតិ(CIFA) នាថ្ងៃទី៧ ខែមករា ឆ្នាំ២០១៩។', 2, '', 1, 1, 6, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL),
(16, 'ឩកញ៉ា លី ឃុនថៃ ប្រធានសមាគមស្បែកជើងកម្ពុជា ធ្វើជាតំណាងដ៏ខ្ពង់ខ្ពស់របស់ប្រធានសភាពាណិជ្ជកម្មកម្ពុជា ទទួលស្វាគមន៍ លោក ពីទ័រវុង និងប្រតិភូ នៃក្រុមប្រឹក្សាអភិវឌ្ឍពាណិជ្ជកម្មហុងកុង ក្នុងបេសកកម្មពាណិជ្ជកម្មក្នុងប្រទេសកម្ពុជា នាថ្ងៃទី១១ ខែវិច្ឆិកា ឆ្នាំ២០១៨។ ', 2, '', 1, 1, 6, NULL, '0000-00-00 00:00:00', '0000-00-00 00:00:00', '2019-02-22', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `slide_image`
--

CREATE TABLE `slide_image` (
  `id` int(5) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `link` varchar(200) DEFAULT NULL,
  `slide_id` int(5) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide_image`
--

INSERT INTO `slide_image` (`id`, `image`, `link`, `slide_id`) VALUES
(10, 'slide-3.jpg', NULL, 5),
(11, 'slide-2.jpg', NULL, 6),
(12, 'slide-4.jpg', NULL, 7),
(13, 'cfa-slide1.jpg', NULL, 8),
(14, 'slide-3.jpg', NULL, 9),
(15, 'slide-2.jpg', NULL, 10),
(16, 'slide-4.jpg', NULL, 11),
(17, 'cfa-slide1.jpg', NULL, 12),
(18, 'slide-3.jpg', NULL, 13),
(19, 'slide-2.jpg', NULL, 14),
(20, 'slide-4.jpg', NULL, 15),
(21, 'cfa-slide1.jpg', NULL, 16);

-- --------------------------------------------------------

--
-- Table structure for table `slide_type`
--

CREATE TABLE `slide_type` (
  `id` int(5) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `description` text DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slide_type`
--

INSERT INTO `slide_type` (`id`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Homepage', '                ', '2019-02-07', NULL);

-- --------------------------------------------------------

--
-- Table structure for table `socials`
--

CREATE TABLE `socials` (
  `id` int(5) NOT NULL,
  `name` varchar(250) NOT NULL,
  `class` varchar(200) DEFAULT NULL,
  `image_icon` varchar(250) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `user_id` int(5) DEFAULT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(5) NOT NULL,
  `name` varchar(200) DEFAULT NULL,
  `username` varchar(200) NOT NULL,
  `email` varchar(250) NOT NULL,
  `phone` varchar(50) NOT NULL,
  `image` varchar(250) DEFAULT NULL,
  `branch_id` int(11) NOT NULL,
  `address` text DEFAULT NULL,
  `status` int(10) DEFAULT NULL,
  `password` varchar(200) NOT NULL,
  `created_at` date DEFAULT NULL,
  `updated_at` date DEFAULT NULL,
  `remember_token` varchar(200) DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `phone`, `image`, `branch_id`, `address`, `status`, `password`, `created_at`, `updated_at`, `remember_token`) VALUES
(11, 'cfa', 'admincfa', 'admincfa@gmail.com', '089 797 879', '14.jpg', 2, NULL, 1, '$2y$10$cHtTbmLV2xRINZH4kREUmewjUaXs4aKV8iWzqvIverwWJ71.V62WS', NULL, '2019-12-05', 'OVscTert764w6sCI71jzhqCiBPe8xGUeXebopSONpcHaHzkJur0mkbhWAvW2'),
(14, 'CFA', 'havchantha.79@gmail.com ', 'havchantha.79@gmail.com ', '015 56 45 79 ', '', 2, NULL, 1, '$2y$10$ws7Tm5gltbmj9V76SdP5Lu.GX8wNF0QOrsGGmoDYG39AE7oFnKuOm', NULL, NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `user_roles`
--

CREATE TABLE `user_roles` (
  `id` int(5) NOT NULL,
  `role_id` int(5) NOT NULL,
  `user_id` int(5) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `user_roles`
--

INSERT INTO `user_roles` (`id`, `role_id`, `user_id`) VALUES
(41, 3, 11),
(40, 2, 11),
(39, 1, 11),
(45, 1, 14),
(46, 2, 14),
(47, 3, 14);

-- --------------------------------------------------------

--
-- Table structure for table `widget`
--

CREATE TABLE `widget` (
  `id` int(11) NOT NULL,
  `category_id` int(11) DEFAULT NULL,
  `post_id` int(11) DEFAULT NULL,
  `language` int(11) DEFAULT NULL,
  `limit_show` int(11) DEFAULT NULL,
  `position` varchar(60) DEFAULT NULL,
  `page_side` varchar(60) DEFAULT NULL,
  `title` varchar(60) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` datetime DEFAULT NULL,
  `updated_at` datetime DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `widget`
--

INSERT INTO `widget` (`id`, `category_id`, `post_id`, `language`, `limit_show`, `position`, `page_side`, `title`, `created_at`, `updated_at`) VALUES
(1, NULL, NULL, 1, NULL, 'footer_1', 'contact', 'CAMBODIA FOOTWEAR ASSOCIATION', NULL, NULL),
(2, NULL, NULL, 1, NULL, 'footer_2', 'recent_post', 'GALLERY', NULL, NULL),
(3, NULL, NULL, 2, NULL, 'footer_1', 'contact', 'សមាគមស្បែកជើងកម្ពុជា', NULL, NULL),
(4, NULL, NULL, 2, NULL, 'footer_2', 'recent_post', 'រូបភាព', NULL, NULL),
(5, NULL, NULL, 3, NULL, 'footer_1', 'contact', '柬埔寨鞋业协会', NULL, NULL),
(6, NULL, NULL, 3, NULL, 'footer_2', 'recent_post', '画廊', NULL, NULL);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `ads`
--
ALTER TABLE `ads`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `ads_images`
--
ALTER TABLE `ads_images`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `category`
--
ALTER TABLE `category`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `cat_galleries`
--
ALTER TABLE `cat_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footers`
--
ALTER TABLE `footers`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer_pages`
--
ALTER TABLE `footer_pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `galleries_image`
--
ALTER TABLE `galleries_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gallery`
--
ALTER TABLE `gallery`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `languages`
--
ALTER TABLE `languages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menus`
--
ALTER TABLE `menus`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_posts`
--
ALTER TABLE `menu_posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu_types`
--
ALTER TABLE `menu_types`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `page_categories`
--
ALTER TABLE `page_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `posts`
--
ALTER TABLE `posts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_categories`
--
ALTER TABLE `post_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_galleries`
--
ALTER TABLE `post_galleries`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_image`
--
ALTER TABLE `post_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `post_slides`
--
ALTER TABLE `post_slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `roles`
--
ALTER TABLE `roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `settings`
--
ALTER TABLE `settings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slides`
--
ALTER TABLE `slides`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_image`
--
ALTER TABLE `slide_image`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slide_type`
--
ALTER TABLE `slide_type`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `socials`
--
ALTER TABLE `socials`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `user_roles`
--
ALTER TABLE `user_roles`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `widget`
--
ALTER TABLE `widget`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `ads`
--
ALTER TABLE `ads`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `ads_images`
--
ALTER TABLE `ads_images`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `category`
--
ALTER TABLE `category`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=36;

--
-- AUTO_INCREMENT for table `cat_galleries`
--
ALTER TABLE `cat_galleries`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footers`
--
ALTER TABLE `footers`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `footer_pages`
--
ALTER TABLE `footer_pages`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `galleries_image`
--
ALTER TABLE `galleries_image`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=96;

--
-- AUTO_INCREMENT for table `gallery`
--
ALTER TABLE `gallery`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `languages`
--
ALTER TABLE `languages`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `menus`
--
ALTER TABLE `menus`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `menu_posts`
--
ALTER TABLE `menu_posts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=89;

--
-- AUTO_INCREMENT for table `menu_types`
--
ALTER TABLE `menu_types`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `page_categories`
--
ALTER TABLE `page_categories`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=366;

--
-- AUTO_INCREMENT for table `posts`
--
ALTER TABLE `posts`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=206;

--
-- AUTO_INCREMENT for table `post_categories`
--
ALTER TABLE `post_categories`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=88;

--
-- AUTO_INCREMENT for table `post_galleries`
--
ALTER TABLE `post_galleries`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=25;

--
-- AUTO_INCREMENT for table `post_image`
--
ALTER TABLE `post_image`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=238;

--
-- AUTO_INCREMENT for table `post_slides`
--
ALTER TABLE `post_slides`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `roles`
--
ALTER TABLE `roles`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `settings`
--
ALTER TABLE `settings`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `slides`
--
ALTER TABLE `slides`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `slide_image`
--
ALTER TABLE `slide_image`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `slide_type`
--
ALTER TABLE `slide_type`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `socials`
--
ALTER TABLE `socials`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=15;

--
-- AUTO_INCREMENT for table `user_roles`
--
ALTER TABLE `user_roles`
  MODIFY `id` int(5) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=48;

--
-- AUTO_INCREMENT for table `widget`
--
ALTER TABLE `widget`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
