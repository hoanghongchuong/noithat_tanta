-- phpMyAdmin SQL Dump
-- version 4.8.2
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Aug 28, 2018 at 11:10 AM
-- Server version: 10.1.34-MariaDB
-- PHP Version: 7.2.7

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tanta`
--

-- --------------------------------------------------------

--
-- Table structure for table `about`
--

CREATE TABLE `about` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `about`
--

INSERT INTO `about` (`id`, `user_id`, `name`, `alias`, `photo`, `mota`, `link`, `content`, `status`, `title`, `keyword`, `description`, `com`, `created_at`, `updated_at`) VALUES
(1, 8, 'TANNC - Thiết kế nội thất từ trái tim', 'tannc-thiet-ke-noi-that-tu-trai-tim', '1535097781_about1.png', NULL, NULL, '<p><strong>TANNC</strong>&nbsp;l&agrave; thương hiệu thuộc sở hữu của Doanh nghiệp tư nh&acirc;n x&iacute; nghiệp T&ugrave;ng Linh, th&agrave;nh lập từ 07/08/1998. Khởi đầu l&agrave; một xưởng chế biến gỗ tại Số 1 &ndash; 1A, ng&otilde; 199, Trường Chinh, Thanh Xu&acirc;n, H&agrave; Nội, với đội ngũ c&aacute;n bộ nh&acirc;n vi&ecirc;n chỉ vỏn vẹn 20 người, TANNC khi đ&oacute; tập trung v&agrave;o hoạt động mua b&aacute;n, gia c&ocirc;ng đồ gỗ nội thất gia đ&igrave;nh v&agrave; văn ph&ograve;ng.</p>\r\n<p>Với mong muốn đem đến cho kh&aacute;ch h&agrave;ng những sản phẩm tốt nhất, tập thể c&aacute;n bộ nh&acirc;n vi&ecirc;n của gia đ&igrave;nh Ho&agrave;n Mỹ đ&atilde; kh&ocirc;ng ngừng phấn đấu, đưa t&acirc;m huyết của m&igrave;nh v&agrave;o trong từng sản phẩm để khẳng định uy t&iacute;n v&agrave; thương hiệu vững chắc tr&ecirc;n thị trường.</p>', 0, NULL, NULL, NULL, 'gioi-thieu', '2018-08-24 08:03:01', '2018-08-24 01:03:01'),
(2, 8, 'SỨ MỆNH TANNC', 'su-menh-tannc', '1535100831_2.jpg', NULL, NULL, '<p>Ch&uacute;ng t&ocirc;i lu&ocirc;n c&oacute; một mơ ước. Đ&oacute; ch&iacute;nh l&agrave; được đem c&aacute;i đẹp tới mọi ng&ocirc;i nh&agrave; trong th&agrave;nh phố xinh xắn v&agrave; y&ecirc;n b&igrave;nh n&agrave;y, được \"thổi hồn\" v&agrave;o kh&ocirc;ng gian sống của qu&yacute; vị. Bạn h&atilde;y y&ecirc;n t&acirc;m \"x&acirc;y\" TỔ ẤM. C&ograve;n x&acirc;y NH&Agrave; ĐẸP - đ&atilde; c&oacute; ch&uacute;ng t&ocirc;i!</p>', 0, NULL, NULL, NULL, 'su-menh', '2018-08-24 08:53:51', '2018-08-24 01:53:51'),
(3, 8, 'Tầm nhìn chiến lược', 'tam-nhin-chien-luoc', '1535100945_3.jpg', NULL, NULL, '<p>Ch&uacute;ng t&ocirc;i lu&ocirc;n c&oacute; một mơ ước. Đ&oacute; ch&iacute;nh l&agrave; được đem c&aacute;i đẹp tới mọi ng&ocirc;i nh&agrave; trong th&agrave;nh phố xinh xắn v&agrave; y&ecirc;n b&igrave;nh n&agrave;y, được \"thổi hồn\" v&agrave;o kh&ocirc;ng gian sống của qu&yacute; vị. Bạn h&atilde;y y&ecirc;n t&acirc;m \"x&acirc;y\" TỔ ẤM. C&ograve;n x&acirc;y NH&Agrave; ĐẸP - đ&atilde; c&oacute; ch&uacute;ng t&ocirc;i!</p>', 0, NULL, NULL, NULL, 'tam-nhin', '2018-08-24 08:55:45', '2018-08-24 01:55:45');

-- --------------------------------------------------------

--
-- Table structure for table `bank_account`
--

CREATE TABLE `bank_account` (
  `id` int(11) NOT NULL,
  `img` varchar(255) DEFAULT NULL,
  `info` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bank_account`
--

INSERT INTO `bank_account` (`id`, `img`, `info`, `created_at`, `updated_at`) VALUES
(1, '1507946485_logobidv.png', '<p>Số t&agrave;i khoản:&nbsp;001234646870</p>\r\n<p>Chủ t&agrave;i khoản:&nbsp;<span class=\"text-uppercase\">NGUYỄN HẢI YẾN</span></p>\r\n<p>Ng&acirc;n h&agrave;ng:&nbsp;Ng&acirc;n h&agrave;ng TMCP Ngoại thương Việt Nam Chi nh&aacute;nh Đống Đa</p>', '2017-10-14 02:01:25', '2017-10-13 19:01:25'),
(3, '1507946490_logobidv.png', '<p>Số t&agrave;i khoản:&nbsp;001234646870</p>\r\n<p>Chủ t&agrave;i khoản:&nbsp;<span class=\"text-uppercase\">NGUYỄN Ho&agrave;ng&nbsp;Hải</span></p>\r\n<p>Ng&acirc;n h&agrave;ng:&nbsp;Ng&acirc;n h&agrave;ng TMCP Ngoại thương Việt Nam Chi nh&aacute;nh&nbsp;H&agrave; Nội</p>\r\n<p>&nbsp;</p>', '2017-10-14 02:01:30', '2017-10-13 19:01:30');

-- --------------------------------------------------------

--
-- Table structure for table `banner`
--

CREATE TABLE `banner` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) NOT NULL DEFAULT '0',
  `com` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `banner_content`
--

CREATE TABLE `banner_content` (
  `id` int(11) NOT NULL,
  `image` varchar(255) NOT NULL,
  `link` varchar(255) DEFAULT NULL,
  `position` int(11) DEFAULT NULL,
  `title` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `mota` text CHARACTER SET utf8,
  `updated_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_content`
--

INSERT INTO `banner_content` (`id`, `image`, `link`, `position`, `title`, `mota`, `updated_at`, `created_at`) VALUES
(8, '1535336969_banner.jpg', NULL, 3, NULL, NULL, '2018-08-26 19:29:29', '2018-07-09 01:35:30'),
(9, '1535336926_banner.png', NULL, 10, NULL, NULL, '2018-08-26 19:28:46', '2018-07-11 06:55:58'),
(13, '1535439611_28.jpg', NULL, 1, NULL, NULL, '2018-08-28 00:00:11', '2018-07-09 01:39:20'),
(14, '1535076816_banner.png', NULL, 8, NULL, NULL, '2018-08-23 19:13:36', '2018-07-09 01:56:17'),
(19, '1535011947_banner.png', NULL, 2, NULL, NULL, '2018-08-23 01:12:27', '2018-07-15 20:17:16'),
(20, '1535082913_banner.png', NULL, 9, NULL, NULL, '2018-08-23 20:55:13', '2018-07-30 19:17:36');

-- --------------------------------------------------------

--
-- Table structure for table `banner_position`
--

CREATE TABLE `banner_position` (
  `id` int(11) NOT NULL,
  `name` varchar(255) CHARACTER SET utf8 DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `banner_position`
--

INSERT INTO `banner_position` (`id`, `name`, `created_at`, `updated_at`) VALUES
(1, 'Trang chủ', '2018-08-28 06:58:50', '2018-08-27 23:58:35'),
(2, 'Trang tin tức', '2018-08-23 08:11:33', '2018-08-23 01:11:33'),
(3, 'Trang giới thiệu', '2017-11-08 02:03:36', '2017-11-07 19:03:36'),
(4, 'Trang dự án', '2018-07-09 01:38:06', '2018-07-08 18:38:06'),
(5, 'Trang liên hệ', '2018-07-09 01:38:30', '2018-07-08 18:38:30'),
(8, 'Trang sản phẩm', '2018-08-23 08:11:43', '2018-08-23 01:11:43'),
(9, 'Trang video', '2018-08-24 03:54:45', '2018-08-23 20:54:45'),
(10, 'Trang phong cách thiết kế', '2018-08-26 19:27:03', '2018-08-26 19:27:03');

-- --------------------------------------------------------

--
-- Table structure for table `bills`
--

CREATE TABLE `bills` (
  `id` int(11) NOT NULL,
  `full_name` varchar(250) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `province` varchar(250) DEFAULT NULL,
  `district` varchar(250) DEFAULT NULL,
  `note` text,
  `status` tinyint(2) DEFAULT '0',
  `total` int(11) DEFAULT NULL,
  `detail` text,
  `created_at` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT '0000-00-00 00:00:00',
  `card_code` varchar(250) DEFAULT NULL,
  `payment` int(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `bills`
--

INSERT INTO `bills` (`id`, `full_name`, `email`, `phone`, `address`, `province`, `district`, `note`, `status`, `total`, `detail`, `created_at`, `updated_at`, `card_code`, `payment`) VALUES
(8, 'Hoàng Hồng Chương', 'admin@team.vn', '987654321', 'Hà Nội', NULL, NULL, 'dgdg', 0, 1200000, '[{\"product_name\":\"S\\u1ea3n ph\\u1ea9m 1\",\"product_numb\":1,\"product_price\":500000,\"product_img\":\"1521003014_1.jpg\",\"product_code\":null},{\"product_name\":\"S\\u1ea3n ph\\u1ea9m 2\",\"product_numb\":1,\"product_price\":700000,\"product_img\":\"1521003043_2.jpg\",\"product_code\":null}]', '2018-03-14 18:54:48', '2018-03-14 18:54:48', NULL, 1);

-- --------------------------------------------------------

--
-- Table structure for table `campaigns`
--

CREATE TABLE `campaigns` (
  `id` int(11) NOT NULL,
  `campaign_name` varchar(100) CHARACTER SET utf8 NOT NULL,
  `campaign_type` int(2) DEFAULT NULL,
  `campaign_value` int(10) DEFAULT NULL,
  `campaign_expired` date DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `del_flg` int(1) NOT NULL DEFAULT '0',
  `card_numb` int(10) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaigns`
--

INSERT INTO `campaigns` (`id`, `campaign_name`, `campaign_type`, `campaign_value`, `campaign_expired`, `created_at`, `updated_at`, `del_flg`, `card_numb`) VALUES
(1, 'Chào mừng giáng sinh', 1, 100000, '2017-09-30', '2017-09-21 18:56:44', '2017-09-21 18:56:44', 0, 7),
(2, 'Chào thu', 2, 10, '2017-09-30', '2017-09-22 18:43:02', '2017-09-22 18:43:02', 0, 4);

-- --------------------------------------------------------

--
-- Table structure for table `campaign_cards`
--

CREATE TABLE `campaign_cards` (
  `id` int(10) NOT NULL,
  `campaign_id` int(10) NOT NULL,
  `card_code` varchar(100) NOT NULL,
  `is_active` int(1) NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL,
  `del_flg` int(1) NOT NULL DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `campaign_cards`
--

INSERT INTO `campaign_cards` (`id`, `campaign_id`, `card_code`, `is_active`, `created_at`, `updated_at`, `del_flg`) VALUES
(1, 1, 'hDXoOAI7BpxYJ', 0, '2017-09-21 18:55:29', '2017-09-21 18:55:29', 0),
(2, 1, 'FepHYPARhlTbe', 0, '2017-09-21 18:55:29', '2017-09-21 18:55:29', 0),
(3, 1, 'bpDe0nb31sZiN', 0, '2017-09-21 18:55:29', '2017-09-21 18:55:29', 0),
(4, 1, '0DK0VoB53JeJj', 0, '2017-09-21 18:55:29', '2017-09-21 18:55:29', 0),
(5, 1, 'hF3Ad1g7J411w', 0, '2017-09-21 18:55:29', '2017-09-21 18:55:29', 0),
(6, 1, '8PyZN6OTyAIwZ', 0, '2017-09-21 18:56:44', '2017-09-21 18:56:44', 0),
(7, 1, 'Zqy0atJII1nzS', 0, '2017-09-21 18:56:44', '2017-09-21 18:56:44', 0),
(8, 2, '3Qe06mci6qmMc', 0, '2017-09-22 18:43:02', '2017-09-22 18:43:02', 0),
(9, 2, 'vUrrWre9EN6iR', 0, '2017-09-22 18:43:02', '2017-09-22 18:43:02', 0),
(10, 2, 'IGzmLXBT9pDk5', 0, '2017-09-22 18:43:02', '2017-09-22 18:43:02', 0),
(11, 2, 'OXSiH6ooCzJj7', 0, '2017-09-22 18:43:02', '2017-09-22 18:43:02', 0);

-- --------------------------------------------------------

--
-- Table structure for table `chinhanh`
--

CREATE TABLE `chinhanh` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `website` varchar(250) DEFAULT NULL,
  `phone` varchar(250) DEFAULT NULL,
  `address` varchar(250) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `chinhanh`
--

INSERT INTO `chinhanh` (`id`, `name`, `website`, `phone`, `address`, `created_at`, `updated_at`) VALUES
(1, 'Chi nhánh 1', NULL, NULL, 'Tầng 8, Tòa nhà TOYOTA Thanh Xuân 315 Trường Chinh, Thanh Xuân, Hà Nội', '2018-07-06 06:43:59', '2018-07-05 23:43:59'),
(2, 'Chi nhánh 2', NULL, NULL, 'Lô số MG 202, Khu đô thị Vincom, Phường Điện Biên, Thành phố Thanh Hóa', '2018-07-06 06:44:14', '2018-07-05 23:44:14'),
(3, 'chi nhánh 3', NULL, NULL, 'Địa chỉ:Số 161 Đường Chu Văn An - Phường 26 - Quận Bình Thạnh - TP. Hồ Chí Minh', '2018-07-15 20:14:21', '2018-07-15 20:14:21');

-- --------------------------------------------------------

--
-- Table structure for table `contacts`
--

CREATE TABLE `contacts` (
  `id` int(11) NOT NULL,
  `province_id` int(10) DEFAULT NULL,
  `name` varchar(255) DEFAULT NULL,
  `email` varchar(255) CHARACTER SET latin1 DEFAULT NULL,
  `phone` varchar(11) CHARACTER SET latin1 DEFAULT NULL,
  `address` text,
  `content` text CHARACTER SET latin1,
  `website` varchar(250) DEFAULT NULL,
  `status` tinyint(2) DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `contacts`
--

INSERT INTO `contacts` (`id`, `province_id`, `name`, `email`, `phone`, `address`, `content`, `website`, `status`, `created_at`, `updated_at`) VALUES
(4, NULL, 'llllhjhh', 'admin@team.vn', '0987654321', NULL, NULL, NULL, 1, '2018-08-28 00:23:50', '2018-08-28 00:23:54');

-- --------------------------------------------------------

--
-- Table structure for table `counter`
--

CREATE TABLE `counter` (
  `id` int(10) UNSIGNED NOT NULL,
  `tm` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `district`
--

CREATE TABLE `district` (
  `id` int(11) NOT NULL,
  `district_name` varchar(250) DEFAULT NULL,
  `province_id` int(11) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `district`
--

INSERT INTO `district` (`id`, `district_name`, `province_id`, `created_at`, `updated_at`) VALUES
(1, 'Ba Đình', 4, '2017-09-24 18:03:47', '2017-09-24 18:03:47'),
(2, 'Từ Liêm', 4, '2017-09-24 18:04:29', '2017-09-24 18:04:29'),
(3, 'Hoàn Kiếm', 4, '2017-09-24 18:04:40', '2017-09-24 18:04:40'),
(4, 'Cầu giấy', 4, '2017-09-25 00:14:58', '2017-09-25 00:14:58');

-- --------------------------------------------------------

--
-- Table structure for table `feedback`
--

CREATE TABLE `feedback` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `photo` text,
  `position` varchar(250) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `feedback`
--

INSERT INTO `feedback` (`id`, `name`, `photo`, `position`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Nguyễn thế Kiên', '', '315 trường chinh, thanh xuân, hà nội', '<p style=\"text-align: center;\">\"C&aacute;c bạn l&agrave;m rất tốt, Xin ch&uacute;c mừng c&aacute;c bạn. Nhờ c&oacute; TANNC m&agrave; ch&uacute;ng t&ocirc;i thực sự đ&atilde; được sống trong một kh&ocirc;ng gian ho&agrave;n mỹ đến từng chi tiết. C&aacute;c bạn rất nhiệt t&igrave;nh, s&aacute;ng tạo, tư vấn, đưa ra những &yacute; tưởng rất hay về thiết kế. Một lần nữa cảm ơn c&aacute;c bạn\"</p>', '2018-08-24 00:34:07', '2018-08-24 00:34:07'),
(2, 'Nguyễn Văn A', '', '315 trường chinh, thanh xuân, hà nội', '<p style=\"text-align: center;\">C&aacute;c bạn l&agrave;m rất tốt, Xin ch&uacute;c mừng c&aacute;c bạn. Nhờ c&oacute; TANNC m&agrave; ch&uacute;ng t&ocirc;i thực sự đ&atilde; được sống trong một kh&ocirc;ng gian ho&agrave;n mỹ đến từng chi tiết. C&aacute;c bạn rất nhiệt t&igrave;nh, s&aacute;ng tạo, tư vấn, đưa ra những &yacute; tưởng rất hay về thiết kế. Một lần nữa cảm ơn c&aacute;c bạn</p>', '2018-08-24 00:34:38', '2018-08-24 00:34:38');

-- --------------------------------------------------------

--
-- Table structure for table `footer`
--

CREATE TABLE `footer` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `codemap` longtext COLLATE utf8_unicode_ci,
  `desc` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL,
  `stt` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `gioithieu`
--

CREATE TABLE `gioithieu` (
  `id` int(11) NOT NULL,
  `name` varchar(250) DEFAULT NULL,
  `alias` varchar(250) DEFAULT NULL,
  `image` text,
  `mota` text,
  `content` text,
  `title` varchar(250) DEFAULT NULL,
  `keyword` varchar(250) DEFAULT NULL,
  `description` text,
  `status` int(2) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `images`
--

CREATE TABLE `images` (
  `id` int(10) UNSIGNED NOT NULL,
  `product_id` int(10) UNSIGNED DEFAULT '0',
  `news_id` int(10) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `image_path` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alt` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `stt` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `images`
--

INSERT INTO `images` (`id`, `product_id`, `news_id`, `name`, `alias`, `photo`, `status`, `image_path`, `alt`, `stt`, `created_at`, `updated_at`) VALUES
(8, 0, 43, NULL, NULL, '1532937692_cate4.jpg', 1, NULL, NULL, 0, '2018-07-30 08:01:32', '2018-07-30 08:01:32'),
(7, 0, 43, NULL, NULL, '1532937692_cate3.jpg', 1, NULL, NULL, 0, '2018-07-30 08:01:32', '2018-07-30 08:01:32'),
(6, 0, 43, NULL, NULL, '1532937692_cate2.jpg', 1, NULL, NULL, 0, '2018-07-30 08:01:32', '2018-07-30 08:01:32'),
(5, 0, 43, NULL, NULL, '1532937692_cate1.jpg', 1, NULL, NULL, 0, '2018-07-30 08:01:32', '2018-07-30 08:01:32'),
(15, 0, 38, NULL, NULL, '1534232469_noi-that-dep-can-ho-sunrise.jpg', 1, NULL, NULL, 0, '2018-08-14 07:41:09', '2018-08-14 07:41:09'),
(14, 0, 38, NULL, NULL, '1534232469_noi-that-dep-can-ho-sunrise (1).jpg', 1, NULL, NULL, 0, '2018-08-14 07:41:09', '2018-08-14 07:41:09'),
(12, 0, 38, NULL, NULL, '1534232221_noi-that-dep-can-ho-sunrise (1).jpg', 1, NULL, NULL, 0, '2018-08-14 07:37:01', '2018-08-14 07:37:01'),
(13, 0, 38, NULL, NULL, '1534232221_noi-that-dep-can-ho-sunrise.jpg', 1, NULL, NULL, 0, '2018-08-14 07:37:01', '2018-08-14 07:37:01'),
(16, 0, 39, NULL, NULL, '1534233421_noi-that-dep-can-ho-sunrise.jpg', 1, NULL, NULL, 0, '2018-08-14 07:57:01', '2018-08-14 07:57:01'),
(17, 0, 39, NULL, NULL, '1534233421_noi-that-dep-can-ho-sunrise (1).jpg', 1, NULL, NULL, 0, '2018-08-14 07:57:01', '2018-08-14 07:57:01'),
(18, 0, 39, NULL, NULL, '1534233430_noi-that-dep-can-ho-sunrise (1).jpg', 1, NULL, NULL, 0, '2018-08-14 07:57:10', '2018-08-14 07:57:10'),
(19, 0, 39, NULL, NULL, '1534233430_noi-that-dep-can-ho-sunrise.jpg', 1, NULL, NULL, 0, '2018-08-14 07:57:10', '2018-08-14 07:57:10'),
(20, 2, NULL, NULL, NULL, '1535080521_83.jpg', 1, NULL, NULL, 0, '2018-08-24 03:15:21', '2018-08-24 03:15:21'),
(21, 2, NULL, NULL, NULL, '1535080521_84.jpg', 1, NULL, NULL, 0, '2018-08-24 03:15:21', '2018-08-24 03:15:21'),
(22, 2, NULL, NULL, NULL, '1535080521_85.jpg', 1, NULL, NULL, 0, '2018-08-24 03:15:21', '2018-08-24 03:15:21'),
(23, 2, NULL, NULL, NULL, '1535080553_78.jpg', 1, NULL, NULL, 0, '2018-08-24 03:15:53', '2018-08-24 03:15:53'),
(24, 2, NULL, NULL, NULL, '1535080553_79.jpg', 1, NULL, NULL, 0, '2018-08-24 03:15:53', '2018-08-24 03:15:53'),
(25, 2, NULL, NULL, NULL, '1535080553_81.jpg', 1, NULL, NULL, 0, '2018-08-24 03:15:53', '2018-08-24 03:15:53'),
(26, 0, 14, NULL, NULL, '1535361855_69.jpg', 1, NULL, NULL, 0, '2018-08-27 09:24:15', '2018-08-27 09:24:15'),
(27, 0, 14, NULL, NULL, '1535361868_69.jpg', 1, NULL, NULL, 0, '2018-08-27 09:24:28', '2018-08-27 09:24:28');

-- --------------------------------------------------------

--
-- Table structure for table `lienket`
--

CREATE TABLE `lienket` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `link` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `photo2` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `author` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `noibat` int(11) NOT NULL DEFAULT '0',
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `lienket`
--

INSERT INTO `lienket` (`id`, `user_id`, `name`, `link`, `photo`, `photo2`, `mota`, `content`, `author`, `status`, `noibat`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(1, 8, 'Đội ngũ nhân viên', NULL, '1535095608_icon1.png', '', 'TANNC có một đội ngũ nhân viên giàu kinh nghiệm, nhiệt tình, năng động', NULL, NULL, 1, 0, 'taisao', 1, '2018-08-24 00:26:48', '2018-08-24 00:26:48'),
(2, 8, 'Chất lượng sản phẩm', NULL, '1535095627_icon2.png', '', 'TANNC cung cấp những sản phẩm chất lượng cao nhất và tốt nhất', NULL, NULL, 1, 0, 'taisao', 2, '2018-08-24 00:27:07', '2018-08-24 00:27:07'),
(3, 8, 'Chất lượng dự án tốt', NULL, '1535095655_icon3.png', '', 'TANNC luôn cam kết chất lượng trong mỗi một dự án mà chúng tôi thi công', NULL, NULL, 1, 0, 'taisao', 3, '2018-08-24 00:27:35', '2018-08-24 00:27:35'),
(4, 8, 'Thời gian thi công ít', NULL, '1535095680_icon4.png', '', 'Mỗi dự án chúng tôi đều có thời gian rất ngắn nhưng chất lượng lại rất cao', NULL, NULL, 1, 0, 'taisao', 4, '2018-08-24 00:28:00', '2018-08-24 00:28:00'),
(5, 8, 'bao chi 1', 'sfd s fsf', '1535099454_21.jpg', '', 'Chúng tôi luôn có một mơ ước. Đó chính là được đem cái đẹp tới mọi ngôi nhà trong thành phố xinh xắn và yên bình này, được \"thổi hồn\" vào không gian sống của quý vị. Bạn hãy yên tâm \"xây\" TỔ ẤM. Còn xây NHÀ ĐẸP - đã có chúng tôi!', 'Theo dantri.vn', NULL, 1, 0, 'baochi', 1, '2018-08-24 08:36:55', '2018-08-24 01:36:55'),
(6, 8, 'bao chi 2', NULL, '1535099482_20.jpg', '', 'Chúng tôi luôn có một mơ ước. Đó chính là được đem cái đẹp tới mọi ngôi nhà trong thành phố xinh xắn và yên bình này, được \"thổi hồn\" vào không gian sống của quý vị. Bạn hãy yên tâm \"xây\" TỔ ẤM. Còn xây NHÀ ĐẸP - đã có chúng tôi!', 'Theo dantri.vn', NULL, 1, 0, 'baochi', 2, '2018-08-24 08:37:13', '2018-08-24 01:37:13'),
(7, 8, 'bao chi 3', NULL, '1535099509_21.jpg', '', 'Chúng tôi luôn có một mơ ước. Đó chính là được đem cái đẹp tới mọi ngôi nhà trong thành phố xinh xắn và yên bình này, được \"thổi hồn\" vào không gian sống của quý vị. Bạn hãy yên tâm \"xây\" TỔ ẤM. Còn xây NHÀ ĐẸP - đã có chúng tôi!', NULL, NULL, 1, 0, 'baochi', 3, '2018-08-24 01:31:49', '2018-08-24 01:31:49'),
(8, 8, 'bao chi 4', 'https://dantri.com.vn/', '1535099916_20.jpg', '', 'Chúng tôi luôn có một mơ ước. Đó chính là được đem cái đẹp tới mọi ngôi nhà trong thành phố xinh xắn và yên bình này, được \"thổi hồn\" vào không gian sống của quý vị. Bạn hãy yên tâm \"xây\" TỔ ẤM. Còn xây NHÀ ĐẸP - đã có chúng tôi!', 'Theo dantri.vn', NULL, 1, 0, 'baochi', 4, '2018-08-24 01:38:36', '2018-08-24 01:38:36'),
(9, 8, 'bao chi 5', 'https://dantri.com.vn/', '1535099959_21.jpg', '', 'Chúng tôi luôn có một mơ ước. Đó chính là được đem cái đẹp tới mọi ngôi nhà trong thành phố xinh xắn và yên bình này, được \"thổi hồn\" vào không gian sống của quý vị. Bạn hãy yên tâm \"xây\" TỔ ẤM. Còn xây NHÀ ĐẸP - đã có chúng tôi!', 'Theo dantri.vn', NULL, 1, 0, 'baochi', 5, '2018-08-24 01:39:19', '2018-08-24 01:39:19');

-- --------------------------------------------------------

--
-- Table structure for table `menu`
--

CREATE TABLE `menu` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` text COLLATE utf8_unicode_ci,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '0',
  `lever` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `menu`
--

INSERT INTO `menu` (`id`, `name`, `alias`, `photo`, `status`, `lever`, `parent_id`, `title`, `keyword`, `description`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(3, 'Trang chủ', NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 1, '2017-08-24 04:42:40', '2017-08-23 21:42:40'),
(2, 'Giới thiệu', 'gioi-thieu', NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 2, '2017-09-01 01:33:58', '2017-08-31 18:33:58'),
(12, 'Sản phẩm', 'http://localhost/eu/san-pham', NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 3, '2017-11-08 02:41:38', '2017-11-07 19:41:38'),
(13, 'Tin tức', 'http://localhost/eu/tin-tuc', NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 6, '2017-11-08 03:44:27', '2017-11-07 20:44:27'),
(18, 'Bảng giá', 'http://localhost/eu/bang-gia', NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 4, '2017-11-08 01:54:33', '2017-11-07 18:54:33'),
(19, 'Chứng chỉ kĩ thuật', 'http://localhost/eu/chung-chi-ki-thuat', NULL, 1, 0, 0, NULL, NULL, NULL, 'menu-top', 5, '2017-11-08 01:13:44', '2017-11-07 18:13:44'),
(20, 'Về chi nhánh', 'http://localhost/eu/gioi-thieu/ve-chi-nhanh', NULL, 1, 0, 2, NULL, NULL, NULL, 'menu-top', 7, '2017-11-08 01:37:27', '2017-11-07 18:37:27'),
(21, 'Về nhà xưởng', 'http://localhost/eu/gioi-thieu/ve-nha-xuong', NULL, 1, 0, 2, NULL, NULL, NULL, 'menu-top', 8, '2017-11-07 18:15:34', '2017-11-07 18:15:34'),
(23, 'Hàng vặn ren', 'http://localhost/eu/san-pham/hang-van-ren', NULL, 1, 0, 12, NULL, NULL, NULL, 'menu-top', 9, '2017-11-07 18:43:17', '2017-11-07 18:43:17'),
(24, 'Đai khởi thủy', 'http://localhost/eu/san-pham/dai-khoi-thuy', NULL, 1, 0, 12, NULL, NULL, NULL, 'menu-top', 10, '2017-11-07 18:43:39', '2017-11-07 18:43:39'),
(25, 'Van', 'http://localhost/eu/san-pham/van', NULL, 1, 0, 12, NULL, NULL, NULL, 'menu-top', 11, '2017-11-07 18:43:54', '2017-11-07 18:43:54'),
(26, 'Phụ kiện HDPE hàn đối đầu', 'http://localhost/eu/san-pham/phu-kien-hdpe-han-doi-dau', NULL, 1, 0, 12, NULL, NULL, NULL, 'menu-top', 12, '2017-11-07 18:44:22', '2017-11-07 18:44:22'),
(27, 'Phụ kiện HDPE hàn điện trở', 'https://developer6.gco.vn/euplastic/san-pham/phu-kien-hdpe-han-dien-tro', NULL, 1, 0, 12, NULL, NULL, NULL, 'menu-top', 13, '2017-11-07 18:45:09', '2017-11-07 18:45:09'),
(28, 'Phụ kiện HDPE hàn lồng', 'http://localhost/eu/san-pham/phu-kien-hdpe-han-long', NULL, 1, 0, 12, NULL, NULL, NULL, 'menu-top', 14, '2017-11-07 18:45:43', '2017-11-07 18:45:43'),
(29, 'Bảng giá tại Hà Nội', 'http://localhost/eu/bang-gia/bang-gia-tai-ha-noi.html', NULL, 1, 0, 18, NULL, NULL, NULL, 'menu-top', 15, '2017-11-07 18:46:20', '2017-11-07 18:46:20'),
(30, 'Bảng giá tại TP.Hồ Chí Minh', 'http://localhost/eu/bang-gia/bang-gia-tai-tpho-chi-minh.html', NULL, 1, 0, 18, NULL, NULL, NULL, 'menu-top', 16, '2017-11-07 18:46:40', '2017-11-07 18:46:40'),
(31, 'Về công ty', 'http://localhost/eu/gioi-thieu/ve-cong-ty', NULL, 1, 0, 2, NULL, NULL, NULL, 'menu-top', 17, '2017-11-07 19:09:40', '2017-11-07 19:09:40');

-- --------------------------------------------------------

--
-- Table structure for table `migrations`
--

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `migrations`
--

INSERT INTO `migrations` (`migration`, `batch`) VALUES
('2014_10_12_000000_create_users_table', 1),
('2014_10_12_100000_create_password_resets_table', 1),
('2017_06_05_042524_create_products_table', 1),
('2017_06_05_045215_create_images_table', 1),
('2017_06_07_033057_create_news_categories_table', 1),
('2017_06_07_033135_create_news_table', 1),
('2017_06_07_033425_create_setting_table', 1),
('2017_06_07_033619_create_pages_table', 1),
('2017_06_07_033944_create_contact_table', 1),
('2017_06_07_034012_create_footer_table', 1),
('2017_06_07_034035_create_slider_table', 1),
('2017_06_07_034117_create_useronline_table', 1),
('2017_06_07_034335_create_order_table', 1),
('2017_06_07_034407_create_order_detail_table', 1),
('2017_06_07_034448_create_newsletter_table', 1),
('2017_06_07_034655_create_order_status_table', 1),
('2017_06_07_064339_create_counter_table', 1),
('2017_06_07_070934_create_partner_table', 1);

-- --------------------------------------------------------

--
-- Table structure for table `news`
--

CREATE TABLE `news` (
  `id` int(10) UNSIGNED NOT NULL,
  `cate_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `background` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `code` varchar(250) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL,
  `noibat` int(11) DEFAULT '0',
  `home` int(11) DEFAULT NULL,
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news`
--

INSERT INTO `news` (`id`, `cate_id`, `user_id`, `name`, `alias`, `photo`, `background`, `mota`, `content`, `code`, `status`, `noibat`, `home`, `title`, `keyword`, `description`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(1, 1, 8, 'Tannc - TOP công ty có môi trường làm việc lý tưởng nhất!', 'tannc-top-cong-ty-co-moi-truong-lam-viec-ly-tuong-nhat', '1535012483_18.jpg', '1535014168_232.jpg', 'Nằm trong khuôn khổ thỏa thuận hợp tác với tập đoàn TANNC triển khai chương trình khuyến mãi lớn,...', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, 'tin-tuc', 1, '2018-08-23 08:49:28', '2018-08-23 01:49:28'),
(2, 4, 8, 'Tin tức 2', 'tin-tuc-2', '1535012554_37.jpg', '', 'Nằm trong khuôn khổ thỏa thuận hợp tác với tập đoàn TANNC triển khai chương trình khuyến mãi lớn,...', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, 'tin-tuc', 2, '2018-08-23 08:49:42', '2018-08-23 01:49:42'),
(3, 1, 8, 'Tin tức 3', 'tin-tuc-3', '1535014923_22.jpg', '1535014923_232.jpg', 'Nằm trong khuôn khổ thỏa thuận hợp tác với tập đoàn TANNC triển khai chương trình khuyến mãi lớn,...', NULL, NULL, 1, 1, 0, NULL, NULL, NULL, 'tin-tuc', 3, '2018-08-23 09:02:03', '2018-08-23 02:02:03'),
(4, 3, 8, 'Tin tức 4', 'tin-tuc-4', '1535014242_35.jpg', '232.jpg', NULL, NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'tin-tuc', 4, '2018-08-23 01:50:42', '2018-08-23 01:50:42'),
(5, 5, 8, 'Tannc - TOP công ty có môi trường làm việc lý tưởng nhất!x', 'tannc-top-cong-ty-co-moi-truong-lam-viec-ly-tuong-nhatx', '', '', 'Sang trọng, quý phái và đẳng cấp, tiện nghi là những từ dùng để miêu tả nội thất cao cấp Luxury Penhouse Hải phòng.', '<p>Sang trọng, qu&yacute; ph&aacute;i v&agrave; đẳng cấp, tiện nghi l&agrave; những từ d&ugrave;ng để mi&ecirc;u tả nội thất cao cấp Luxury Penhouse Hải ph&ograve;ng.</p>\r\n<p>Mời c&aacute;c bạn c&ugrave;ng thưởng l&atilde;m vẻ đẹp ki&ecirc;u sa, lộng lẫy của căn hộ n&agrave;y do đội ngũ KTS Nội thất Ho&agrave;n Mỹ x&acirc;y dựng bằng cả t&acirc;m huyết v&agrave; sự s&aacute;ng tạo.</p>\r\n<p class=\"bold\">Nội thất ph&ograve;ng kh&aacute;ch căn hộ si&ecirc;u đẳng cấp.</p>\r\n<p>Nội thất ph&ograve;ng kh&aacute;ch Penhouse thực sự l&agrave;m hoa mắt người nh&igrave;n bởi phong c&aacute;ch sang trọng, đẳng cấp. Bộ sofa trắng tinh kh&ocirc;i, chiếc b&agrave;n tr&agrave; mặt đ&aacute; hiện đại, c&ugrave;ng một số tủ kệ,... tất cả được sắp xếp h&agrave;i h&ograve;a tạo n&ecirc;n vẻ đẹp cho căn ph&ograve;ng.</p>', 'gjyQa8Sl6To', 1, 0, 1, NULL, NULL, NULL, 'video', 1, '2018-08-28 06:47:07', '2018-08-27 23:47:07'),
(6, 5, 8, 'video 2', 'video-2', '', '', 'Sang trọng, quý phái và đẳng cấp, tiện nghi là những từ dùng để miêu tả nội thất cao cấp Luxury Penhouse Hải phòng.', '<p>Sang trọng, qu&yacute; ph&aacute;i v&agrave; đẳng cấp, tiện nghi l&agrave; những từ d&ugrave;ng để mi&ecirc;u tả nội thất cao cấp Luxury Penhouse Hải ph&ograve;ng.</p>\r\n<p>Mời c&aacute;c bạn c&ugrave;ng thưởng l&atilde;m vẻ đẹp ki&ecirc;u sa, lộng lẫy của căn hộ n&agrave;y do đội ngũ KTS Nội thất Ho&agrave;n Mỹ x&acirc;y dựng bằng cả t&acirc;m huyết v&agrave; sự s&aacute;ng tạo.</p>\r\n<p class=\"bold\">Nội thất ph&ograve;ng kh&aacute;ch căn hộ si&ecirc;u đẳng cấp.</p>\r\n<p>Nội thất ph&ograve;ng kh&aacute;ch Penhouse thực sự l&agrave;m hoa mắt người nh&igrave;n bởi phong c&aacute;ch sang trọng, đẳng cấp. Bộ sofa trắng tinh kh&ocirc;i, chiếc b&agrave;n tr&agrave; mặt đ&aacute; hiện đại, c&ugrave;ng một số tủ kệ,... tất cả được sắp xếp h&agrave;i h&ograve;a tạo n&ecirc;n vẻ đẹp cho căn ph&ograve;ng.</p>', 'oWaJSc5nVuU', 1, 0, 0, NULL, NULL, NULL, 'video', 2, '2018-08-28 03:37:02', '2018-08-27 20:37:02'),
(7, 6, 8, 'video 3', 'video-3', '', '', 'Sang trọng, quý phái và đẳng cấp, tiện nghi là những từ dùng để miêu tả nội thất cao cấp Luxury Penhouse Hải phòng.', NULL, 'XpesV-TUcyQ', 1, 0, 0, NULL, NULL, NULL, 'video', 3, '2018-08-28 03:37:28', '2018-08-27 20:37:28'),
(8, 9, 8, 'Phong cách 1', 'phong-cach-1', '1535337764_91.jpg', '1535344061_bread.jpg', 'Tranh treo tường hiện đại không chỉ giúp tô điểm cho ngôi nhà trở nên đẹp và ấn tượng hơn', '<p>Căn hộ cao cấp Park Hill sang trọng hiện đại, được thiết kế theo &ldquo;chủ nghĩa c&ocirc;ng năng&rdquo; kh&ocirc;ng rườm r&agrave; cầu k&igrave; nhưng lại rất tiện &iacute;ch l&agrave; sự lựa chọn của nhiều gia đ&igrave;nh.</p>\r\n<p>Gia đ&igrave;nh anh Hưng nằm trong căn hộ cao cấp Park Hill. Với diện t&iacute;ch 110m2 Anh Hưng chia sẻ &ldquo;Vợ chồng t&ocirc;i c&oacute; 3 con, c&aacute;c ch&aacute;u đều c&ograve;n nhỏ n&ecirc;n rất cần kh&ocirc;ng gian rộng r&atilde;i để chơi đ&ugrave;a. Với diện t&iacute;ch kh&ocirc;ng phải l&agrave; lớn t&ocirc;i muốn Ho&agrave;n Mỹ Decor tư vấn gi&uacute;p t&ocirc;i một kh&ocirc;ng gian sống hiện đại nhưng kh&ocirc;ng rườm r&agrave; m&agrave; chủ yếu tập trung v&agrave;o t&iacute;nh tiện &iacute;ch&rdquo;.</p>\r\n<p>Đ&aacute;p ứng mong muốn của gia đ&igrave;nh, kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch được b&agrave;i tr&iacute; một c&aacute;ch khoa học, thiết kế ph&ograve;ng kh&aacute;ch đơn giản trang nh&atilde; với gam m&agrave;u trắng x&aacute;m hiện đại của nội thất kết hợp c&ugrave;ng s&agrave;n nh&agrave; m&agrave;u gỗ s&aacute;ng tạo sự c&acirc;n bằng về m&agrave;u sắc v&agrave; h&agrave;i h&ograve;a về tổng thể cho to&agrave;n bộ kh&ocirc;ng gian.</p>\r\n<p>Căn hộ cao cấp Park Hill sang trọng hiện đại, được thiết kế theo &ldquo;chủ nghĩa c&ocirc;ng năng&rdquo; kh&ocirc;ng rườm r&agrave; cầu k&igrave; nhưng lại rất tiện &iacute;ch l&agrave; sự lựa chọn của nhiều gia đ&igrave;nh.</p>\r\n<p>Gia đ&igrave;nh anh Hưng nằm trong căn hộ cao cấp Park Hill. Với diện t&iacute;ch 110m2 Anh Hưng chia sẻ &ldquo;Vợ chồng t&ocirc;i c&oacute; 3 con, c&aacute;c ch&aacute;u đều c&ograve;n nhỏ n&ecirc;n rất cần kh&ocirc;ng gian rộng r&atilde;i để chơi đ&ugrave;a. Với diện t&iacute;ch kh&ocirc;ng phải l&agrave; lớn t&ocirc;i muốn Ho&agrave;n Mỹ Decor tư vấn gi&uacute;p t&ocirc;i một kh&ocirc;ng gian sống hiện đại nhưng kh&ocirc;ng rườm r&agrave; m&agrave; chủ yếu tập trung v&agrave;o t&iacute;nh tiện &iacute;ch&rdquo;.</p>\r\n<p>Đ&aacute;p ứng mong muốn của gia đ&igrave;nh, kh&ocirc;ng gian ph&ograve;ng kh&aacute;ch được b&agrave;i tr&iacute; một c&aacute;ch khoa học, thiết kế ph&ograve;ng kh&aacute;ch đơn giản trang nh&atilde; với gam m&agrave;u trắng x&aacute;m hiện đại của nội thất kết hợp c&ugrave;ng s&agrave;n nh&agrave; m&agrave;u gỗ s&aacute;ng tạo sự c&acirc;n bằng về m&agrave;u sắc v&agrave; h&agrave;i h&ograve;a về tổng thể cho to&agrave;n bộ kh&ocirc;ng gian.</p>', NULL, 1, 0, 0, NULL, NULL, NULL, 'phongcach', 1, '2018-08-27 04:34:19', '2018-08-26 21:34:19'),
(9, 9, 8, 'Phong cách 2', 'phong-cach-2', '1535337780_92.jpg', '', 'Tranh treo tường hiện đại không chỉ giúp tô điểm cho ngôi nhà trở nên đẹp và ấn tượng hơn', NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'phongcach', 2, '2018-08-27 02:45:50', '2018-08-26 19:45:50'),
(10, 9, 8, 'Phong cách 3', 'phong-cach-3', '1535337797_94.jpg', '', 'Tranh treo tường hiện đại không chỉ giúp tô điểm cho ngôi nhà trở nên đẹp và ấn tượng hơn', NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'phongcach', 3, '2018-08-27 02:46:04', '2018-08-26 19:46:04'),
(11, 9, 8, 'phong cah thiet ké  z zf', 'phong-cah-thiet-ke-z-zf', '1535342822_96.jpg', '', NULL, NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'phongcach', 4, '2018-08-27 04:51:17', '2018-08-26 21:51:17'),
(12, 16, 8, 'duwj ans 1', 'duwj-ans-1', '1535358023_51.jpg', '', NULL, NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'du-an', 1, '2018-08-27 10:11:54', '2018-08-27 03:11:54'),
(13, 17, 8, 'Dự án 2', 'du-an-2', '1535358117_52.jpg', '', NULL, NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'du-an', 2, '2018-08-27 08:22:06', '2018-08-27 01:22:06'),
(14, 17, 8, 'Dự án 3', 'du-an-3', '1535358146_53.jpg', '', NULL, '<p>Dự &aacute;n thiết kế nội thất căn hộ chung cư Mipec Riverside - Với phong c&aacute;ch thiết kế tối giản nhưng v&ocirc; c&ugrave;ng hiện đại v&agrave; sang trọng, căn hộ của anh Nghị - Mipec Riverside thực sự l&agrave; một kh&ocirc;ng gian sống m&agrave; nhiều người đang mong muốn được sở hữu. Nếu c&ograve;n chưa c&oacute; &yacute; tưởng thiết kế ph&ugrave; hợp th&igrave; đừng ngần ngại li&ecirc;n lạc với ch&uacute;ng t&ocirc;i, TANNC sẽ lu&ocirc;n đồng h&agrave;nh c&ugrave;ng gia đ&igrave;nh bạn để tạo một tổ ấm trọn vẹn v&agrave; ho&agrave;n hảo.</p>\r\n<p>Dự &aacute;n thiết kế nội thất căn hộ chung cư Mipec Riverside - Với phong c&aacute;ch thiết kế tối giản nhưng v&ocirc; c&ugrave;ng hiện đại v&agrave; sang trọng, căn hộ của anh Nghị - Mipec Riverside thực sự l&agrave; một kh&ocirc;ng gian sống m&agrave; nhiều người đang mong muốn được sở hữu. Nếu c&ograve;n chưa c&oacute; &yacute; tưởng thiết kế ph&ugrave; hợp th&igrave; đừng ngần ngại li&ecirc;n lạc với ch&uacute;ng t&ocirc;i, TANNC sẽ lu&ocirc;n đồng h&agrave;nh c&ugrave;ng gia đ&igrave;nh bạn để tạo một tổ ấm trọn vẹn v&agrave; ho&agrave;n hảo.</p>\r\n<h2>Video dự &aacute;n</h2>\r\n<p style=\"text-align: center;\">&nbsp;</p>\r\n<p style=\"text-align: center;\"><iframe src=\"//www.youtube.com/embed/7GxZiGEdK0k\" width=\"100%\" height=\"350\" allowfullscreen=\"allowfullscreen\"></iframe></p>', NULL, 1, 0, 0, NULL, NULL, NULL, 'du-an', 3, '2018-08-27 09:26:44', '2018-08-27 02:26:44'),
(15, 17, 8, 'Dự án 4', 'du-an-4', '1535358304_55.jpg', '', NULL, NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'du-an', 4, '2018-08-28 02:18:34', '2018-08-27 19:18:34'),
(16, 5, 8, 'video 4', 'video-4', '', '', 'Sang trọng, quý phái và đẳng cấp, tiện nghi là những từ dùng để miêu tả nội thất cao cấp Luxury Penhouse Hải phòng.', NULL, 'x9dhWUS_A7I', 1, 0, 0, NULL, NULL, NULL, 'video', 4, '2018-08-28 04:06:46', '2018-08-27 21:06:46'),
(17, 15, 8, 'Thi công ngoại thất 1', 'thi-cong-ngoai-that-1', '1535440364_3.jpg', '', NULL, NULL, NULL, 1, 0, 0, NULL, NULL, NULL, 'du-an', 5, '2018-08-28 00:12:44', '2018-08-28 00:12:44');

-- --------------------------------------------------------

--
-- Table structure for table `newsletter`
--

CREATE TABLE `newsletter` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `name` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `phone` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `noibat` int(11) NOT NULL DEFAULT '0',
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `news_categories`
--

CREATE TABLE `news_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `mota` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '0',
  `lever` int(11) NOT NULL DEFAULT '0',
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL DEFAULT '0',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `background` text COLLATE utf8_unicode_ci,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `news_categories`
--

INSERT INTO `news_categories` (`id`, `name`, `alias`, `photo`, `mota`, `status`, `lever`, `parent_id`, `title`, `keyword`, `description`, `com`, `stt`, `created_at`, `background`, `updated_at`) VALUES
(1, 'Tư vấn thiết kế nội thất', 'tu-van-thiet-ke-noi-that', '', NULL, 1, 0, 0, NULL, NULL, NULL, 'tin-tuc', 1, '2018-08-23 00:41:59', '', '2018-08-23 00:41:59'),
(2, 'Tư vấn thiết kế ngoại thất', 'tu-van-thiet-ke-ngoai-that', '', NULL, 1, 0, 0, NULL, NULL, NULL, 'tin-tuc', 2, '2018-08-23 00:42:12', '', '2018-08-23 00:42:12'),
(3, 'Tin tức chung', 'tin-tuc-chung', '', NULL, 1, 0, 0, NULL, NULL, NULL, 'tin-tuc', 3, '2018-08-23 00:42:29', '', '2018-08-23 00:42:29'),
(4, 'Xu hướng thiết kế', 'xu-huong-thiet-ke', '', NULL, 1, 0, 0, NULL, NULL, NULL, 'tin-tuc', 4, '2018-08-23 00:42:38', '', '2018-08-23 00:42:38'),
(5, 'Thiết kế - thi công nội thất', 'thiet-ke-thi-cong-noi-that', '1535093248_icon6.png', NULL, 1, 0, 0, NULL, NULL, NULL, 'video', 1, '2018-08-24 06:47:28', '', '2018-08-23 23:47:28'),
(6, 'Thiết kế - thi công ngoại thất', 'thiet-ke-thi-cong-ngoai-that', '1535093275_icon7.png', NULL, 1, 0, 0, NULL, NULL, NULL, 'video', 2, '2018-08-24 06:47:55', '', '2018-08-23 23:47:55'),
(7, 'Thiết kế - thi công ngoại thất', 'thiet-ke-thi-cong-ngoai-that', '', NULL, 1, 0, 0, NULL, NULL, NULL, 'phongcach', 1, '2018-08-26 18:50:12', '', '2018-08-26 18:50:12'),
(8, 'Thiết kế - thi công nội thất', 'thiet-ke-thi-cong-noi-that', '', NULL, 1, 0, 0, NULL, NULL, NULL, 'phongcach', 2, '2018-08-26 18:50:30', '', '2018-08-26 18:50:30'),
(9, 'Hiện đại', 'hien-dai', '', NULL, 1, 0, 7, NULL, NULL, NULL, 'phongcach', 3, '2018-08-26 18:50:55', '', '2018-08-26 18:50:55'),
(14, 'Thiết kế thi công nội thất', 'thiet-ke-thi-cong-noi-that', '1535353740_about1.png', NULL, 1, 0, 0, NULL, NULL, NULL, 'du-an', 1, '2018-08-27 00:09:00', '', '2018-08-27 00:09:00'),
(11, 'Cổ điển', 'co-dien', '', NULL, 1, 0, 7, NULL, NULL, NULL, 'phongcach', 4, '2018-08-26 18:53:17', '', '2018-08-26 18:53:17'),
(12, 'Cách tân', 'cach-tan', '', NULL, 1, 0, 8, NULL, NULL, NULL, 'phongcach', 5, '2018-08-26 18:53:34', '', '2018-08-26 18:53:34'),
(13, 'Cổ điển', 'co-dien', '', NULL, 1, 0, 8, NULL, NULL, NULL, 'phongcach', 6, '2018-08-26 18:56:39', '', '2018-08-26 18:56:39'),
(15, 'Thiết kế thi công ngoại thất', 'thiet-ke-thi-cong-ngoai-that', '', NULL, 1, 0, 0, NULL, NULL, NULL, 'du-an', 2, '2018-08-27 00:11:18', '', '2018-08-27 00:11:18'),
(16, 'Căn hộ chung cư', 'can-ho-chung-cu', '', NULL, 1, 0, 14, NULL, NULL, NULL, 'du-an', 3, '2018-08-27 00:11:37', '', '2018-08-27 00:11:37'),
(17, 'Khu nghỉ dưỡng', 'khu-nghi-duong', '1535357556_about1.png', '<section>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<div>\r\n<p>TANNC l&agrave; thương hiệu thuộc sở hữu của Doanh nghiệp tư nh&acirc;n x&iacute; nghiệp T&ugrave;ng Linh, th&agrave;nh lập từ 07/08/1998. Khởi đầu l&agrave; một xưởng chế biến gỗ tại Số 1 &ndash; 1A, ng&otilde; 199, Trường Chinh, Thanh Xu&acirc;n, H&agrave; Nội, với đội ngũ c&aacute;n bộ nh&acirc;n vi&ecirc;n chỉ vỏn vẹn 20 người, TANNC khi đ&oacute; tập trung v&agrave;o hoạt động mua b&aacute;n, gia c&ocirc;ng đồ gỗ nội thất gia đ&igrave;nh v&agrave; văn ph&ograve;ng.</p>\r\n<p>Với mong muốn đem đến cho kh&aacute;ch h&agrave;ng những sản phẩm tốt nhất, tập thể c&aacute;n bộ nh&acirc;n vi&ecirc;n của gia đ&igrave;nh Ho&agrave;n Mỹ đ&atilde; kh&ocirc;ng ngừng phấn đấu, đưa t&acirc;m huyết của m&igrave;nh v&agrave;o trong từng sản phẩm để khẳng định uy t&iacute;n v&agrave; thương hiệu vững chắc tr&ecirc;n thị trường.</p>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</div>\r\n</section>\r\n<section>\r\n<div>&nbsp;</div>\r\n</section>', 1, 0, 14, NULL, NULL, NULL, 'du-an', 4, '2018-08-27 08:14:57', '', '2018-08-27 01:14:57'),
(18, 'Căn hộ cao cấp', 'can-ho-cao-cap', '', NULL, 1, 0, 14, NULL, NULL, NULL, 'du-an', 5, '2018-08-27 00:12:47', '', '2018-08-27 00:12:47');

-- --------------------------------------------------------

--
-- Table structure for table `pages`
--

CREATE TABLE `pages` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `title` text COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `desc` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL,
  `com` text COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `partner`
--

CREATE TABLE `partner` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci NOT NULL,
  `url` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `desc` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `com` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `status` int(11) NOT NULL DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `partner`
--

INSERT INTO `partner` (`id`, `name`, `url`, `photo`, `desc`, `content`, `com`, `status`, `created_at`, `updated_at`) VALUES
(1, '1', NULL, '1535015507_5.png', NULL, NULL, 'doi-tac', 1, '2018-08-23 02:11:47', '2018-08-23 02:11:47'),
(2, '2', NULL, '1535015512_6.png', NULL, NULL, 'doi-tac', 1, '2018-08-23 02:11:52', '2018-08-23 02:11:52'),
(3, '3', NULL, '1535015519_7.png', NULL, NULL, 'doi-tac', 1, '2018-08-23 02:11:59', '2018-08-23 02:11:59'),
(4, '4', NULL, '1535015527_8.png', NULL, NULL, 'doi-tac', 1, '2018-08-23 02:12:07', '2018-08-23 02:12:07'),
(5, '5', NULL, '1535015532_9.png', NULL, NULL, 'doi-tac', 1, '2018-08-23 02:12:12', '2018-08-23 02:12:12'),
(6, '6', NULL, '1535086403_7.png', NULL, NULL, 'doi-tac', 1, '2018-08-23 21:53:23', '2018-08-23 21:53:23');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL DEFAULT '0',
  `cate_id` int(11) UNSIGNED NOT NULL DEFAULT '0',
  `code` text COLLATE utf8_unicode_ci,
  `stt` int(11) DEFAULT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `price` int(11) NOT NULL DEFAULT '0',
  `sale` int(11) DEFAULT '0',
  `price_old` int(11) DEFAULT '0',
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `thuonghieu` text COLLATE utf8_unicode_ci,
  `tinhtrang` int(11) NOT NULL DEFAULT '1',
  `baohanh` text COLLATE utf8_unicode_ci,
  `properties` text CHARACTER SET utf8,
  `model` text COLLATE utf8_unicode_ci,
  `namsanxuat` text COLLATE utf8_unicode_ci,
  `ratepoint` int(2) DEFAULT NULL,
  `quatang` text COLLATE utf8_unicode_ci,
  `huongdan` text COLLATE utf8_unicode_ci,
  `vanchuyen` text COLLATE utf8_unicode_ci,
  `noibat` int(11) NOT NULL DEFAULT '0',
  `spbc` int(11) NOT NULL DEFAULT '0',
  `status` int(11) NOT NULL DEFAULT '1',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `user_id`, `cate_id`, `code`, `stt`, `name`, `alias`, `photo`, `price`, `sale`, `price_old`, `mota`, `content`, `thuonghieu`, `tinhtrang`, `baohanh`, `properties`, `model`, `namsanxuat`, `ratepoint`, `quatang`, `huongdan`, `vanchuyen`, `noibat`, `spbc`, `status`, `title`, `keyword`, `description`, `created_at`, `updated_at`) VALUES
(1, 8, 15, NULL, 1, 'bàn ăn 1', 'ban-an-1', '1535074849_80.jpg', 5000000, 0, 0, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, '2018-08-23 18:40:49', '2018-08-23 18:40:49'),
(2, 8, 5, NULL, 2, 'sofa1', 'sofa1', '1535074874_82.jpg', 15000000, 0, 0, '<ul class=\"list-unstyled pdetail-list\">\r\n<li>Độ d&agrave;y của da từ 1.2 - 1.4mm</li>\r\n<li>B&ecirc;n trong: M&uacute;t đ&agrave;n hồi kết hợp l&ocirc;ng vũ</li>\r\n<li>Ch&acirc;n inox đ&aacute;nh b&oacute;ng</li>\r\n<li>Khung: gỗ đầu đ&atilde; qua xử l&yacute; v&agrave; plywood</li>\r\n<li>Da bảo h&agrave;nh 24 th&aacute;ng, khung bảo h&agrave;nh trọn đời</li>\r\n</ul>', '<p>Dự &aacute;n thiết kế nội thất căn hộ chung cư Mipec Riverside - Với phong c&aacute;ch thiết kế tối giản nhưng v&ocirc; c&ugrave;ng hiện đại v&agrave; sang trọng, căn hộ của anh Nghị - Mipec Riverside thực sự l&agrave; một kh&ocirc;ng gian sống m&agrave; nhiều người đang mong muốn được sở hữu. Nếu c&ograve;n chưa c&oacute; &yacute; tưởng thiết kế ph&ugrave; hợp th&igrave; đừng ngần ngại li&ecirc;n lạc với ch&uacute;ng t&ocirc;i, TANNC sẽ lu&ocirc;n đồng h&agrave;nh c&ugrave;ng gia đ&igrave;nh bạn để tạo một tổ ấm trọn vẹn v&agrave; ho&agrave;n hảo.</p>', NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, '2018-08-24 03:18:13', '2018-08-23 20:18:13'),
(3, 8, 6, NULL, 3, 's sf sf', 's-sf-sf', '1535076394_83.jpg', 400000, 0, 0, NULL, NULL, NULL, 1, NULL, NULL, NULL, NULL, NULL, NULL, NULL, NULL, 0, 0, 1, NULL, NULL, NULL, '2018-08-23 19:06:34', '2018-08-23 19:06:34');

-- --------------------------------------------------------

--
-- Table structure for table `product_categories`
--

CREATE TABLE `product_categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `parent_id` int(11) NOT NULL DEFAULT '0',
  `stt` int(11) DEFAULT '0',
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `alias` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `photo` text COLLATE utf8_unicode_ci,
  `noibat` int(2) DEFAULT '0',
  `status` int(11) NOT NULL,
  `lever` int(11) NOT NULL DEFAULT '0',
  `title` text COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `product_categories`
--

INSERT INTO `product_categories` (`id`, `parent_id`, `stt`, `name`, `alias`, `photo`, `noibat`, `status`, `lever`, `title`, `keyword`, `description`, `created_at`, `updated_at`) VALUES
(1, 0, NULL, 'Nội thất phòng khách', 'noi-that-phong-khach', '1535078103_icon8 (2).png', 0, 1, 0, NULL, NULL, NULL, '2018-08-24 02:35:03', '2018-08-23 19:35:03'),
(2, 0, NULL, 'Nội thất phòng ngủ', 'noi-that-phong-ngu', '1535078121_icon9 (2).png', 0, 1, 0, NULL, NULL, NULL, '2018-08-24 02:35:21', '2018-08-23 19:35:21'),
(3, 0, NULL, 'Nội thất phòng bếp', 'noi-that-phong-bep', '1535078171_icon10 (2).png', 0, 1, 0, NULL, NULL, NULL, '2018-08-24 02:36:11', '2018-08-23 19:36:11'),
(4, 0, NULL, 'Đồ trang trí nội thất', 'do-trang-tri-noi-that', '1535078186_icon11 (2).png', 0, 1, 0, NULL, NULL, NULL, '2018-08-24 02:36:26', '2018-08-23 19:36:26'),
(5, 1, NULL, 'Sofa bộ', 'sofa-bo', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 08:02:34', '2018-08-23 01:02:34'),
(6, 1, NULL, 'Sofa góc', 'sofa-goc', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 08:03:41', '2018-08-23 01:03:41'),
(7, 1, NULL, 'Sofa băng dải', 'sofa-bang-dai', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 01:04:02', '2018-08-23 01:04:02'),
(8, 1, NULL, 'Ghế thư dãn', 'ghe-thu-dan', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 01:04:16', '2018-08-23 01:04:16'),
(9, 1, NULL, 'Armchair', 'armchair', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 01:04:41', '2018-08-23 01:04:41'),
(10, 1, NULL, 'Bàn trà', 'ban-tra', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 01:04:56', '2018-08-23 01:04:56'),
(11, 1, NULL, 'Kệ tivi', 'ke-tivi', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 01:05:04', '2018-08-23 01:05:04'),
(12, 2, NULL, 'Giường ngủ', 'giuong-ngu', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 01:05:27', '2018-08-23 01:05:27'),
(13, 2, NULL, 'Tủ quần áo', 'tu-quan-ao', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 01:05:42', '2018-08-23 01:05:42'),
(14, 2, NULL, 'Bàn trang điểm', 'ban-trang-diem', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 01:06:10', '2018-08-23 01:06:10'),
(15, 3, NULL, 'Bàn ăn', 'ban-an', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 01:06:24', '2018-08-23 01:06:24'),
(16, 3, NULL, 'Ghế ăn', 'ghe-an', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 01:06:35', '2018-08-23 01:06:35'),
(17, 3, NULL, 'Tủ rượu', 'tu-ruou', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 01:06:53', '2018-08-23 01:06:53'),
(18, 4, NULL, 'Thảm trang trí', 'tham-trang-tri', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 01:07:08', '2018-08-23 01:07:08'),
(19, 4, NULL, 'Bình hoa', 'binh-hoa', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 01:07:14', '2018-08-23 01:07:14'),
(20, 4, NULL, 'Đèn trang trí', 'den-trang-tri', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 01:07:31', '2018-08-23 01:07:31'),
(21, 4, NULL, 'Đồ trang trí khác', 'do-trang-tri-khac', '', 0, 1, 0, NULL, NULL, NULL, '2018-08-23 01:07:56', '2018-08-23 01:07:56');

-- --------------------------------------------------------

--
-- Table structure for table `province`
--

CREATE TABLE `province` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `tenkhongdau` varchar(255) DEFAULT NULL,
  `mota_vi` text,
  `mota_en` text,
  `photo` varchar(255) DEFAULT NULL,
  `thumb` varchar(255) DEFAULT NULL,
  `stt` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT '1',
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8;

--
-- Dumping data for table `province`
--

INSERT INTO `province` (`id`, `name`, `tenkhongdau`, `mota_vi`, `mota_en`, `photo`, `thumb`, `stt`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Hồ Chí Minh', '', '', '', '', '', 30, 1, '0000-00-00 00:00:00', '2017-11-23 21:04:04'),
(2, 'Hà Nội', '', '', '', '', '', 24, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(5, 'Hải Phòng', '', '', '', '', '', 28, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(6, 'An Giang', '', '', '', '', '', 1, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(7, 'Bà Rịa Vũng Tàu', '', '', '', '', '', 2, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(8, 'Bạc Liêu', '', '', '', '', '', 3, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(9, 'Bắc Cạn', '', '', '', '', '', 4, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(10, 'Bắc Giang', '', '', '', '', '', 5, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(11, 'Bắc Ninh', '', '', '', '', '', 6, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(12, 'Bến Tre', '', '', '', '', '', 7, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(13, 'Bình Dương', '', '', '', '', '', 8, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(14, 'Bình Định', '', '', '', '', '', 9, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(15, 'Bình Phước', '', '', '', '', '', 10, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(16, 'Bình Thuận', '', '', '', '', '', 11, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(17, 'Cà Mau', '', '', '', '', '', 12, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(18, 'Cao Bằng', '', '', '', '', '', 13, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(19, 'Cần Thơ', '', '', '', '', '', 14, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(20, 'Đà Nẵng', '', '', '', '', '', 15, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(21, 'Đắk Lắc ', '', '', '', '', '', 16, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(22, 'Đắk Nông', '', '', '', '', '', 17, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(23, 'Điện Biện', '', '', '', '', '', 18, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(24, 'Đồng Nai', '', '', '', '', '', 19, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(25, 'Đồng Tháp', '', '', '', '', '', 20, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(26, 'Gia Lai', '', '', '', '', '', 21, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(27, 'Hà Giang', '', '', '', '', '', 22, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(28, 'Hà Nam', '', '', '', '', '', 23, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(29, 'Hà Tây', '', '', '', '', '', 25, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(30, 'Hà Tĩnh', '', '', '', '', '', 26, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(31, 'Hải Dương', '', '', '', '', '', 27, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(32, 'Hòa Bình', '', '', '', '', '', 29, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(33, 'Hậu Giang', '', '', '', '', '', 31, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(34, 'Hưng Yên', '', '', '', '', '', 32, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(35, 'Khánh Hòa', '', '', '', '', '', 33, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(36, 'Kiên Giang', '', '', '', '', '', 34, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(37, 'Kon Tum', '', '', '', '', '', 35, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(38, 'Lai Châu', '', '', '', '', '', 36, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(39, 'Lào Cai', '', '', '', '', '', 37, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(40, 'Lạng Sơn', '', '', '', '', '', 38, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(41, 'Lâm Đồng ', '', '', '', '', '', 39, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(42, 'Long An', '', '', '', '', '', 40, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(43, 'Nam Định', '', '', '', '', '', 41, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(44, 'Nghệ An', '', '', '', '', '', 42, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(45, 'Ninh Bình', '', '', '', '', '', 43, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(46, 'Ninh Thuận', '', '', '', '', '', 44, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(47, 'Phú Thọ', '', '', '', '', '', 45, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(48, 'Phú Yên', '', '', '', '', '', 46, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(49, 'Quảng Bình ', '', '', '', '', '', 47, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(50, 'Quảng Nam', '', '', '', '', '', 48, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(51, 'Quảng Ngãi', '', '', '', '', '', 49, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(52, 'Quảng Ninh', '', '', '', '', '', 50, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(53, 'Quảng Trị', '', '', '', '', '', 51, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(54, 'Sóc Trăng', '', '', '', '', '', 52, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(55, 'Sơn La', '', '', '', '', '', 53, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(56, 'Tây Ninh', '', '', '', '', '', 54, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(57, 'Thái Bình', '', '', '', '', '', 55, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(58, 'Thái Nguyên', '', '', '', '', '', 56, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(59, 'Thanh Hóa', '', '', '', '', '', 57, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(60, 'Thừa Thiên - Huế', '', '', '', '', '', 58, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(61, 'Tiền Giang', '', '', '', '', '', 59, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(62, 'Trà Vinh', '', '', '', '', '', 60, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(63, 'Tuyên Quang', '', '', '', '', '', 61, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(64, 'Vĩnh Long', '', '', '', '', '', 62, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(65, 'Vĩnh Phúc', '', '', '', '', '', 63, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00'),
(66, 'Yên Bái', '', '', '', '', '', 64, 1, '0000-00-00 00:00:00', '0000-00-00 00:00:00');

-- --------------------------------------------------------

--
-- Table structure for table `recruitment`
--

CREATE TABLE `recruitment` (
  `id` int(11) NOT NULL,
  `name` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `address` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `phone` varchar(11) DEFAULT NULL,
  `email` varchar(250) DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00' ON UPDATE CURRENT_TIMESTAMP,
  `status` tinyint(2) DEFAULT '0'
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `setting`
--

CREATE TABLE `setting` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `title` text COLLATE utf8_unicode_ci,
  `company` text COLLATE utf8_unicode_ci,
  `website` text COLLATE utf8_unicode_ci,
  `address` text COLLATE utf8_unicode_ci,
  `phone` text COLLATE utf8_unicode_ci,
  `hotline` text COLLATE utf8_unicode_ci,
  `fax` text COLLATE utf8_unicode_ci,
  `email` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `photo_footer` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `photo_page` varchar(250) CHARACTER SET utf8 DEFAULT NULL,
  `favico` text COLLATE utf8_unicode_ci,
  `title_index` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `facebook` text COLLATE utf8_unicode_ci,
  `twitter` text COLLATE utf8_unicode_ci,
  `skype` text COLLATE utf8_unicode_ci,
  `google` text COLLATE utf8_unicode_ci,
  `youtube` text COLLATE utf8_unicode_ci,
  `status` int(11) DEFAULT '0',
  `toado` text COLLATE utf8_unicode_ci,
  `copyright` text COLLATE utf8_unicode_ci,
  `iframemap` text COLLATE utf8_unicode_ci,
  `codechat` longtext COLLATE utf8_unicode_ci,
  `analytics` longtext COLLATE utf8_unicode_ci,
  `keyword` longtext COLLATE utf8_unicode_ci,
  `description` longtext COLLATE utf8_unicode_ci,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `setting`
--

INSERT INTO `setting` (`id`, `name`, `title`, `company`, `website`, `address`, `phone`, `hotline`, `fax`, `email`, `photo`, `photo_footer`, `photo_page`, `favico`, `title_index`, `mota`, `content`, `facebook`, `twitter`, `skype`, `google`, `youtube`, `status`, `toado`, `copyright`, `iframemap`, `codechat`, `analytics`, `keyword`, `description`, `created_at`, `updated_at`) VALUES
(1, 'Tanta', 'Tanta', 'Công ty cổ phần kiến trúc Thiên Trường', NULL, 'Tầng 8, Tòa nhà TOYOTA Thanh Xuân  315 Trường Chinh, Thanh Xuân, Hà Nội', '0923 455 565', '18001900', 'Chúng tôi vẫn biết rằng, làm việc với một đoạn văn bản dễ đọc và rối nghĩa dễ gây rối trí và cảm trở công việc tập trung vào yếu tố trình bày văn bản.', 'info@gco.vn', '1535008603_logoft.png', '1535007910_logoft.png', '1530871000_logo-page.png', '1535007859_logo.png', 'https://gco.vn/', NULL, NULL, 'https://www.facebook.com/FacebookforDevelopers/', 'https://twitter.com/?lang=vi', NULL, 'https://plus.google.com/?hl=vi', 'https://www.youtube.com/', 1, NULL, '© GCO GROUP 2018. All rights reserved', '<iframe src=\"https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3724.7749747466096!2d105.82069491439643!3d21.00165548601309!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3135ac8429ac32cb%3A0x592668996cef591f!2zMzE1IFRyxrDhu51uZyBDaGluaCwgS2jGsMahbmcgVGjGsOG7o25nLCDEkOG7kW5nIMSQYSwgSMOgIE7hu5lpLCBWaeG7h3QgTmFt!5e0!3m2!1svi!2s!4v1531887013298\" width=\"600\" height=\"450\" frameborder=\"0\" style=\"border:0\" allowfullscreen></iframe>', NULL, NULL, NULL, NULL, '2018-08-24 07:06:48', '2018-08-24 00:06:48');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) DEFAULT NULL,
  `name` text COLLATE utf8_unicode_ci,
  `link` text COLLATE utf8_unicode_ci,
  `photo` text COLLATE utf8_unicode_ci,
  `photo1` text CHARACTER SET utf8,
  `photo2` text CHARACTER SET utf8,
  `icon` text COLLATE utf8_unicode_ci,
  `mota` longtext COLLATE utf8_unicode_ci,
  `content` longtext COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `noibat` int(11) NOT NULL DEFAULT '0',
  `com` text COLLATE utf8_unicode_ci,
  `stt` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `user_id`, `name`, `link`, `photo`, `photo1`, `photo2`, `icon`, `mota`, `content`, `status`, `noibat`, `com`, `stt`, `created_at`, `updated_at`) VALUES
(1, 8, '1', NULL, '1535356700_slider.png', '', '', NULL, NULL, NULL, 1, 0, 'gioi-thieu', 1, '2018-08-27 00:58:20', '2018-08-27 00:58:20'),
(2, 8, '2', NULL, '1535356708_slider2.jpg', '', '', NULL, NULL, NULL, 1, 0, 'gioi-thieu', 2, '2018-08-27 00:58:28', '2018-08-27 00:58:28');

-- --------------------------------------------------------

--
-- Table structure for table `slogan`
--

CREATE TABLE `slogan` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `link` varchar(250) DEFAULT NULL,
  `photo` text,
  `photo2` text,
  `stt` int(11) DEFAULT NULL,
  `content` text,
  `created_at` timestamp NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `slogan`
--

INSERT INTO `slogan` (`id`, `name`, `link`, `photo`, `photo2`, `stt`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Thiết kế thi công nội thất', NULL, '1535439351_icon6.png', '', 1, '<p>C&ocirc;ng ty thiết kế nội thất cao cấp hiện đại, đơn vị uy t&iacute;n chuy&ecirc;n thiết kế nội thất.</p>', '2018-08-28 06:55:51', '2018-08-27 23:55:51'),
(2, 'THIẾT KẾ THI CÔNG NGOẠI THẤT', NULL, '1535439378_icon7.png', '', 2, '<p>C&ocirc;ng ty thiết kế ngoại thất cao cấp hiện đại, đơn vị uy t&iacute;n chuy&ecirc;n thiết kế nội thất.</p>', '2018-08-27 23:56:18', '2018-08-27 23:56:18');

-- --------------------------------------------------------

--
-- Table structure for table `useronline`
--

CREATE TABLE `useronline` (
  `id` int(10) UNSIGNED NOT NULL,
  `session` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `time` int(11) NOT NULL,
  `ip` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `username` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `phone` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `address` text COLLATE utf8_unicode_ci,
  `level` int(11) NOT NULL DEFAULT '2',
  `photo` text COLLATE utf8_unicode_ci,
  `status` int(11) NOT NULL DEFAULT '1',
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00'
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `username`, `password`, `name`, `email`, `phone`, `address`, `level`, `photo`, `status`, `remember_token`, `created_at`, `updated_at`) VALUES
(3, 'tuanduy2012', '$2y$10$DceYJxR4ALmUW.Vt6k9En.1ubJhJGvWX1HISRloBERLNJ8Qq85itO', 'Tuan Duy', 'duydoan.nina@gmail.com', '', '', 1, NULL, 1, 'X37mpbjW1WDCjwH3s4Vq1Jkv3WRNJceXZlbLwHaa', '2017-06-14 23:42:39', '2017-06-14 23:42:39'),
(4, 'evernigh', '$2y$10$pprRO9LhYKADS60bvetRnOYoS3L74giVWf3D/wNZXlDLDRRx0bH6e', 'Duy Đoàn', 'tuanduy_mc2006@yahoo.com', '', '', 0, NULL, 1, '6CirvIekDhWLx3xFrnv7v39bFmalTsH21F4WABTq', '2017-06-16 02:51:34', '2017-06-16 02:51:34'),
(5, 'gco_admin', '$2y$10$IP3633RgCQNAfs6J8cic9.XRNb4v7KxvcI0oF1HpWBQKqPT4v.JYG', 'Admin', 'gco@gmail.com', '0985431797', '315 Trường chinh, Thanh Xuân, Hà Nội', 1, '5.jpg', 1, 'Ljivi1hsYgR59Oy0OVCKjGS9jXPufymhqIPUw5KmqOOltNBeg2cHsAjOZ4Ve', '2018-07-13 09:06:16', '2018-07-13 02:06:16'),
(7, 'hoangchuong', '$2y$10$PnaSJxmZdL0x0wRtj4q0tODPWKtxI85VefEFNZWDQKEH6q8rxjLc6', 'chuong', 'chuonghoanghong@gmail.com', NULL, NULL, 1, NULL, 1, 'DSYV3dr0q7IjUiVKsa4tl4ApOSuDPybd17EupcaO', '2017-11-07 01:31:10', '2017-11-07 01:31:10'),
(8, 'admin', '$2y$10$54bF9zCcwvAY1oDKCLsN3O/sEUOF/a0Q8Zz/UKti5CzFogRactG3O', 'admin', 'admin@gmail.com', NULL, NULL, 1, 'logo-home-2.png', 1, 'mBaTHa9DMxbdT8l2IW7o5lJGKK3tfAHhp05s6YkXlK1vkLlFYbIDo0dgqqyt', '2018-07-31 10:05:50', '2018-07-13 18:38:17');

-- --------------------------------------------------------

--
-- Table structure for table `video`
--

CREATE TABLE `video` (
  `id` int(11) NOT NULL,
  `link` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Indexes for dumped tables
--

--
-- Indexes for table `about`
--
ALTER TABLE `about`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bank_account`
--
ALTER TABLE `bank_account`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner`
--
ALTER TABLE `banner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_content`
--
ALTER TABLE `banner_content`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `banner_position`
--
ALTER TABLE `banner_position`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `bills`
--
ALTER TABLE `bills`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaigns`
--
ALTER TABLE `campaigns`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `campaign_cards`
--
ALTER TABLE `campaign_cards`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `chinhanh`
--
ALTER TABLE `chinhanh`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contacts`
--
ALTER TABLE `contacts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `counter`
--
ALTER TABLE `counter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `district`
--
ALTER TABLE `district`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `feedback`
--
ALTER TABLE `feedback`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `footer`
--
ALTER TABLE `footer`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `gioithieu`
--
ALTER TABLE `gioithieu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `images`
--
ALTER TABLE `images`
  ADD PRIMARY KEY (`id`),
  ADD KEY `images_product_id_foreign` (`product_id`);

--
-- Indexes for table `lienket`
--
ALTER TABLE `lienket`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `menu`
--
ALTER TABLE `menu`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `news_categories_name_unique` (`name`);

--
-- Indexes for table `news`
--
ALTER TABLE `news`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `newsletter`
--
ALTER TABLE `newsletter`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `news_categories`
--
ALTER TABLE `news_categories`
  ADD PRIMARY KEY (`id`);
ALTER TABLE `news_categories` ADD FULLTEXT KEY `name1` (`name`);

--
-- Indexes for table `pages`
--
ALTER TABLE `pages`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `partner`
--
ALTER TABLE `partner`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`),
  ADD KEY `password_resets_token_index` (`token`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `product_categories`
--
ALTER TABLE `product_categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `province`
--
ALTER TABLE `province`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `recruitment`
--
ALTER TABLE `recruitment`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `setting`
--
ALTER TABLE `setting`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `slogan`
--
ALTER TABLE `slogan`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `useronline`
--
ALTER TABLE `useronline`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_username_unique` (`username`);

--
-- Indexes for table `video`
--
ALTER TABLE `video`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `about`
--
ALTER TABLE `about`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `bank_account`
--
ALTER TABLE `bank_account`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `banner`
--
ALTER TABLE `banner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `banner_content`
--
ALTER TABLE `banner_content`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=21;

--
-- AUTO_INCREMENT for table `banner_position`
--
ALTER TABLE `banner_position`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `bills`
--
ALTER TABLE `bills`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `campaigns`
--
ALTER TABLE `campaigns`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `campaign_cards`
--
ALTER TABLE `campaign_cards`
  MODIFY `id` int(10) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `chinhanh`
--
ALTER TABLE `chinhanh`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `contacts`
--
ALTER TABLE `contacts`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `counter`
--
ALTER TABLE `counter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `district`
--
ALTER TABLE `district`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `feedback`
--
ALTER TABLE `feedback`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `footer`
--
ALTER TABLE `footer`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `gioithieu`
--
ALTER TABLE `gioithieu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `images`
--
ALTER TABLE `images`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `lienket`
--
ALTER TABLE `lienket`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;

--
-- AUTO_INCREMENT for table `menu`
--
ALTER TABLE `menu`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `news`
--
ALTER TABLE `news`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=18;

--
-- AUTO_INCREMENT for table `newsletter`
--
ALTER TABLE `newsletter`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `news_categories`
--
ALTER TABLE `news_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=19;

--
-- AUTO_INCREMENT for table `pages`
--
ALTER TABLE `pages`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `partner`
--
ALTER TABLE `partner`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `product_categories`
--
ALTER TABLE `product_categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;

--
-- AUTO_INCREMENT for table `province`
--
ALTER TABLE `province`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=69;

--
-- AUTO_INCREMENT for table `recruitment`
--
ALTER TABLE `recruitment`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `setting`
--
ALTER TABLE `setting`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `slogan`
--
ALTER TABLE `slogan`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `useronline`
--
ALTER TABLE `useronline`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `video`
--
ALTER TABLE `video`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
