-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Dec 19, 2022 at 09:54 PM
-- Server version: 10.4.24-MariaDB
-- PHP Version: 8.1.6

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `intmark`
--

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `show` smallint(6) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `name`, `image`, `description`, `show`, `created_at`, `updated_at`) VALUES
(2, 'مواقع ويب', 'category5867913731671060170code.svg', 'نقوم بإنشاء مواقع ويب فريدة تعتمد على أحدث التقنيات. يأخذ فريقنا مشاكل عملك في الاعتبار ويقدم حلولاً منهجية ومنطقية ومثبتة', NULL, '2022-12-14 15:57:04', '2022-12-14 21:22:50'),
(3, 'تصميم الواجهات', 'category17726943371671060241ibra.svg', 'أظهر للعالم طريقة إبداعية ومبتكرة نجعل تصميم الواجهة الطريق لتحقيق هدفك وبداية طريقة رائعة في عالم التسويق الرقمي نعطي الأولوية للبساطة والتميز في تصميماتنا', NULL, '2022-12-14 21:24:01', '2022-12-14 21:24:18'),
(4, 'تطوير موبايل', 'category19495728161671060311soot.svg', 'أظهر للعالم طريقة إبداعية ومبتكرة نجعل تصميم الواجهة الطريق لتحقيق هدفك وبداية طريقة رائعة في عالم التسويق الرقمي نعطي الأولوية للبساطة والتميز في تصميماتنا</p>', NULL, '2022-12-14 21:25:11', '2022-12-14 21:25:11'),
(5, 'خدمات', 'category6271781991671060342Group 10.svg', 'أظهر للعالم طريقة إبداعية ومبتكرة نجعل تصميم الواجهة الطريق لتحقيق هدفك وبداية طريقة رائعة في عالم التسويق الرقمي نعطي الأولوية للبساطة والتميز في تصميماتنا</p>', NULL, '2022-12-14 21:25:42', '2022-12-15 10:02:57');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `message` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `read` int(11) NOT NULL DEFAULT 0,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `email`, `name`, `message`, `read`, `created_at`, `updated_at`) VALUES
(5, 'xazekumux@mailinator.com', 'Rafael Murphy', 'Officia hic quibusda', 1, '2022-12-16 11:06:13', '2022-12-16 12:12:41'),
(6, 'xobud@mailinator.com', 'Jillian Watson', 'Possimus molestiae', 1, '2022-12-16 11:09:26', '2022-12-16 11:09:26'),
(7, 'tycoz@mailinator.com', 'Moses Russo', 'Autem excepteur ea s', 1, '2022-12-16 11:15:28', '2022-12-16 11:15:28'),
(9, 'mohamed2562289mbn@gmail.com', 'mohamed', 'lllllllll', 1, '2022-12-16 11:31:12', '2022-12-16 11:31:12'),
(10, 'qaduzynury@mailinator.com', 'Patience Mckee', 'Rerum dignissimos qu', 1, '2022-12-16 12:13:38', '2022-12-16 12:13:54'),
(11, 'mohamed2562289mbn@gmail.com', 'mohamed', 'fmsdlogfpdn elkg reg re rfe gh tfdrtrsh bdfzetsh \nfmsdlogfpdn elkg reg re rfe gh tfdrtrsh bdfzetsh \nfmsdlogfpdn elkg reg re rfe gh tfdrtrsh bdfzetsh \nfmsdlogfpdn elkg reg re rfe gh tfdrtrsh bdfzetsh \nfmsdlogfpdn elkg reg re rfe gh tfdrtrsh bdfzetsh \nfmsdlogfpdn elkg reg re rfe gh tfdrtrsh bdfzetsh fmsdlogfpdn elkg reg re rfe gh tfdrtrsh bdfzetsh', 1, '2022-12-16 14:18:35', '2022-12-16 14:18:42'),
(12, 'negydityd@mailinator.com', 'Xaviera Sargent', 'Quibusdam molestiae', 1, '2022-12-16 16:03:39', '2022-12-16 16:04:00'),
(13, 'vojade@mailinator.com', 'Ariel Palmer', 'Optio reiciendis au', 1, '2022-12-16 16:03:43', '2022-12-16 16:04:00'),
(14, 'hukod@mailinator.com', 'Warren Haney', 'Duis ea esse quas pa', 1, '2022-12-16 16:03:50', '2022-12-16 16:04:00'),
(15, 'dapon@mailinator.com', 'Cora Flores', 'Esse est amet reic', 1, '2022-12-16 17:21:09', '2022-12-16 17:21:19'),
(16, 'pury@mailinator.com', 'Kylie Gay', 'Voluptas ea quo amet', 1, '2022-12-18 02:54:37', '2022-12-19 20:36:55'),
(17, 'pury@mailinator.com', 'Kylie Gay', 'Voluptas ea quo amet', 1, '2022-12-18 02:54:42', '2022-12-19 20:36:55'),
(18, 'pury@mailinator.com', 'Kylie Gay', 'Voluptas ea quo amet', 1, '2022-12-18 02:55:01', '2022-12-19 20:36:55'),
(19, 'pury@mailinator.com', 'Kylie Gay', 'Voluptas ea quo amet', 1, '2022-12-18 02:55:08', '2022-12-19 20:36:55'),
(20, 'wonyj@mailinator.com', 'Carolyn Kline', 'Neque minima non eaq', 1, '2022-12-18 02:55:55', '2022-12-19 20:36:55'),
(21, 'zyzijixajo@mailinator.com', 'Kameko Hayden', 'Voluptatum magna est', 1, '2022-12-18 03:02:09', '2022-12-19 20:36:55'),
(22, 'noqybefyp@mailinator.com', 'Brock Madden', 'Magna voluptate aliq', 1, '2022-12-18 03:03:43', '2022-12-19 20:36:55'),
(23, 'havykim@mailinator.com', 'Kiayada Boyle', 'Voluptate corrupti', 1, '2022-12-18 03:04:22', '2022-12-19 20:36:55'),
(24, 'nasur@mailinator.com', 'Darius Wiley', 'Natus blanditiis con', 1, '2022-12-18 03:05:49', '2022-12-19 20:36:55'),
(25, 'taqotilo@mailinator.com', 'Ayanna Sampson', 'Et debitis harum nis', 1, '2022-12-18 03:08:33', '2022-12-19 20:36:55'),
(26, 'zekihuq@mailinator.com', 'Amanda Hendricks', 'Quis officia nulla p', 1, '2022-12-18 03:09:59', '2022-12-19 20:36:55'),
(27, 'qykelynafi@mailinator.com', 'Belle Olsen', 'Consequatur Et anim', 1, '2022-12-18 03:12:18', '2022-12-19 20:36:55'),
(28, 'qykelynafi@mailinator.com', 'Belle Olsen', 'Consequatur Et anim', 1, '2022-12-18 03:12:44', '2022-12-19 20:36:55'),
(29, 'saburose@mailinator.com', 'Kaden Cote', 'Possimus voluptatem', 1, '2022-12-18 03:13:39', '2022-12-19 20:36:55'),
(30, 'qedahi@mailinator.com', 'Owen Holman', 'Deleniti dolores ut', 1, '2022-12-18 03:14:15', '2022-12-19 20:36:55'),
(31, 'jipyxigi@mailinator.com', 'Jayme House', 'Ut tempora earum molUt tempora earum molUt tempora earum mol', 1, '2022-12-18 03:14:46', '2022-12-19 20:36:55'),
(32, 'buwazu@mailinator.com', 'Sylvester Knowles', 'Dolor officia sed et', 1, '2022-12-18 03:17:21', '2022-12-19 20:36:55'),
(33, 'cezewec@mailinator.com', 'Ethan Richards', 'Facilis blanditiis o', 1, '2022-12-18 03:17:52', '2022-12-19 20:36:55'),
(34, 'juxizof@mailinator.com', 'Boris Phelps', 'Quam quia eu volupta', 1, '2022-12-18 03:19:06', '2022-12-19 20:36:55'),
(35, 'zazejujano@mailinator.com', 'Reece Stone', 'Anim hic esse volupt', 1, '2022-12-18 03:19:49', '2022-12-19 20:36:55'),
(36, 'wemoj@mailinator.com', 'Patrick Madden', 'Non reprehenderit v', 1, '2022-12-18 03:22:30', '2022-12-19 20:36:55'),
(37, 'lonojydux@mailinator.com', 'Zeph Adkins', 'Sed cupiditate quia', 1, '2022-12-18 03:23:19', '2022-12-19 20:36:55'),
(38, 'hasi@mailinator.com', 'Andrew Mcclain', 'Excepteur iure eius', 1, '2022-12-18 03:27:46', '2022-12-19 20:36:55'),
(39, 'ziwus@mailinator.com', 'Joelle Long', 'Suscipit iure beatae', 1, '2022-12-18 03:28:59', '2022-12-19 20:36:55'),
(40, 'lujiqexyn@mailinator.com', 'Bruce Conrad', 'Molestias iusto quae', 1, '2022-12-18 03:29:21', '2022-12-19 20:36:55'),
(41, 'tola@mailinator.com', 'Raja Ward', 'Magna et quidem sint', 1, '2022-12-18 03:30:54', '2022-12-19 20:36:55'),
(42, 'zofyzama@mailinator.com', 'Jolene Gordon', 'Qui quos rerum nihil', 1, '2022-12-18 03:31:40', '2022-12-19 20:36:55'),
(43, 'kosudyhex@mailinator.com', 'Kelsie Gross', 'In itaque neque aspe', 1, '2022-12-18 03:32:33', '2022-12-19 20:36:55'),
(44, 'mohamed2562289mbn@gmail.com', 'mohamed salhi', 'saf./,dsf dsfdsd afdsagv fgt5aredg raeyg reahyae5thjut aeuhyth detauyt rzhdf\nsaf./,dsf dsfdsd afdsagv fgt5aredg raeyg reahyae5thjut aeuhyth detauyt rzhdf\nsaf./,dsf dsfdsd afdsagv fgt5aredg raeyg reahyae5thjut aeuhyth detauyt rzhdf\nsaf./,dsf dsfdsd afdsagv fgt5aredg raeyg reahyae5thjut aeuhyth detauyt rzhdf\nsaf./,dsf dsfdsd afdsagv fgt5aredg raeyg reahyae5thjut aeuhyth detauyt rzhdf\nsaf./,dsf dsfdsd afdsagv fgt5aredg raeyg reahyae5thjut aeuhyth detauyt rzhdf\nsaf./,dsf dsfdsd afdsagv fgt5aredg raeyg reahyae5thjut aeuhyth detauyt rzhdf', 0, '2022-12-19 20:39:05', '2022-12-19 20:39:05'),
(45, 'okl@g', 'hjnm', 'l;k', 0, '2022-12-19 20:39:50', '2022-12-19 20:39:50');

-- --------------------------------------------------------

--
-- Table structure for table `employees`
--

CREATE TABLE `employees` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `addrss` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone` int(11) NOT NULL,
  `action` enum('1','0') COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT '0',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `Specialization` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `employees`
--

INSERT INTO `employees` (`id`, `name`, `email`, `addrss`, `phone`, `action`, `created_at`, `updated_at`, `Specialization`) VALUES
(1, 'Miriam Austin', 'pefyv@mailinator.com', 'Ad est aliquam volup', 324234, '0', '2022-12-15 22:28:27', '2022-12-15 22:59:08', 'laravel');

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
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2022_12_14_145913_create_categories_table', 2),
(6, '2022_12_14_151602_create_rows_table', 2),
(7, '2022_12_14_160847_create_services_table', 2),
(8, '2022_12_14_161223_create_projects_table', 2),
(9, '2022_12_14_222731_add_link_to_projects', 3),
(10, '2022_12_15_234325_create_employees_table', 4),
(11, '2022_12_16_005441_add__specialization_to_employees', 5),
(12, '2022_12_16_120625_create_contact_us_table', 6);

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
-- Table structure for table `personal_access_tokens`
--

CREATE TABLE `personal_access_tokens` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `expires_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `projects`
--

CREATE TABLE `projects` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tag` longtext CHARACTER SET utf8mb4 COLLATE utf8mb4_bin NOT NULL CHECK (json_valid(`tag`)),
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `link` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `projects`
--

INSERT INTO `projects` (`id`, `category_id`, `name`, `image`, `tag`, `created_at`, `updated_at`, `link`) VALUES
(2, 2, 'ddddddddd', 'category261231681671143779image 13.png', '[\"dsa\",\"asdsaf\",\"fsafas\",\"dsa\"]', '2022-12-14 20:53:07', '2022-12-15 20:36:19', 'mohandsa'),
(3, 3, 'dxc', 'category9507764921671143726image 11.png', '[\"gfd\",\"gfd\",\"gfd\"]', '2022-12-15 09:12:22', '2022-12-15 20:35:26', 'http://mohamedsalhi.herokuapp.com/ad'),
(4, 4, 'mohamed', 'category1613962191671143787image 14.png', '[\"\\u0628\\u064a\\u0633\\u0628\\u0631\\u0631\\u064a\\u0628\\u0631\\u0632\",\"\\u0631\\u0633\\u064a\\u0648\\u0628\\u0633\\u064a\\u0628\"]', '2022-12-15 20:29:15', '2022-12-15 20:36:27', 'http://mohammedsarhne.herokuapp.com/sarhne'),
(5, 5, 'Bevis Day', 'Project15471641631671143803image 8.png', '[\"Est velit eveniet i\"]', '2022-12-15 20:36:43', '2022-12-15 20:36:43', 'Ulric Sullivan'),
(6, 2, 'Colt Flynn', 'Project20432058561671143812image 7.png', '[\"Consectetur non off\"]', '2022-12-15 20:36:52', '2022-12-15 20:36:52', 'Veronica Spencer'),
(7, 4, 'Vaughan Cox', 'Project640452521671143820image 8.png', '[\"Voluptate eveniet e\",\"fdsfdsfgdsgtrdyf\",\"dfgfdhdfg\"]', '2022-12-15 20:37:00', '2022-12-16 17:44:28', 'Indira Stewart');

-- --------------------------------------------------------

--
-- Table structure for table `rows`
--

CREATE TABLE `rows` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `image` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `rows`
--

INSERT INTO `rows` (`id`, `image`, `name`, `description`, `created_at`, `updated_at`) VALUES
(1, 'category686241521671038687Snapchat-2147478499.jpg', 'للتسويق الرقمي', 'بصفتنا وكالة انتمارك للتسويق الرقمي يقوم فريقنا بتنمية أعمالك بسـرعة وزيـادة مبيعاتك مـع موظفينا الخبـراء منـذ عـام 2014 ، نحـــن نعمـل بكفــاءة وجــودة عــــالية', '2022-12-14 15:23:37', '2022-12-15 20:18:06'),
(2, NULL, 'عزز عملك مع انتمارك', 'شركة إعلانية إبداعية تنتج محتوى إبداعي ومواقع ويب وتطبيقات الهواتف المحمولة وتصميم الجرافيك ، نحن نؤمن بكفاءتنا في وضع استيراتيجيات لإدارة حسابات التواصل الاجتماعي وإنتاج الحملات الإعلانية وتصميم UX/UI للتطبيقات ومواقع الويب ولوحات التحكم ، بالنسبة لنا ، كل مشروع يمثل مشروعاً ذا مغزى ومغامرة نشاركها مع عملائنا عن طريق تميزنا في الأداء', '2022-12-14 21:38:33', '2022-12-14 21:38:33'),
(3, NULL, 'خبراء في التسويق الرقمي', 'التسويق الرقمي والإعلان على جميع منصات التواصل الاجتماعي ، تصاميم الويب وتطبيقات الهاتف المحمول ، إنتاج الصوت وإنتاج الفيديو  اليوم ، يمكننا أن نقدم لك أدوات خاصة لنضمن لك نجاح مشروعك ! إذا كنت بحاجة إلى مشورة أو استفسارات ، فنحن دائماً في خدمتك .', '2022-12-14 21:44:54', '2022-12-14 21:44:54'),
(4, NULL, 'ماذا قالو عملاؤنا ؟', 'مرحبًا ، هذه الشركة الجميلة التي التقينا بها على الإنترنت لصفحة الويب التي سننشئهـا لشــركتنـا قد ساهمت في ظهـــور وظيفة جيدة من خلال تقديــم أفضل الحلول في أسرع وقت ممكن. نظام العمل والفريق يستحقـــان حقًــا التقدير شركة تهتم برضا العملاء وتعمل بشكل منهجي شكرا لكم مــرة أخرى', '2022-12-14 21:48:51', '2022-12-14 21:48:51'),
(5, NULL, 'بصفتنا وكالة انتمارك', 'فإننا نخدم في مجالات الإعلان ، التسويق الرقمي ، الحملات علـى جميــع منصــات التواصل الاجتمــاعي ، تصميمــات الويـب تطبيقات الهاتف المحمول وإنتاج الفيديو', '2022-12-15 10:04:04', '2022-12-15 10:04:04'),
(6, NULL, 'للتسويق الرقمي', 'نقدم أفضل الخدمــات الدعائية والتســــويقية للمؤسسات والشــــركات والعلامات التجـارية والافراد في الوطن العربي، مـــــن خلال انتاج جميع الوسائل المقروءة، المسموعة والمرئية، من كتابة المحتوي والتصميم الجرافيكي، إنتاج الفيديو، انتاج الصوت والموسيقي بأعلى درجــــة من الدقة والإبداع، وتامين الانتشار الاوسع والاسرع من خلال التسويق الإلكتروني للمواقع والمتاجر وتطبيقات الموبايل ومنصات التواصل الاجتماعي', '2022-12-15 20:18:57', '2022-12-15 20:18:57');

-- --------------------------------------------------------

--
-- Table structure for table `services`
--

CREATE TABLE `services` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `category_id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `services`
--

INSERT INTO `services` (`id`, `category_id`, `title`, `created_at`, `updated_at`) VALUES
(1, 2, 'deasd', '2022-12-14 16:04:55', '2022-12-14 16:04:55'),
(2, 2, 'efds', '2022-12-14 16:13:32', '2022-12-14 16:13:32'),
(3, 2, 'مواقع ويب', '2022-12-14 16:14:43', '2022-12-14 16:14:43'),
(4, 2, 'js,dr', '2022-12-14 21:08:34', '2022-12-14 21:08:34'),
(5, 5, 'fesd', '2022-12-15 09:09:47', '2022-12-15 09:09:47'),
(6, 3, 'cx cxxdz', '2022-12-15 20:38:52', '2022-12-15 20:38:52');

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
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(1, 'mohamed', 'mohamed2562289mbn@gmail.com', NULL, '$2y$10$3Qus/jd.favQtoEUCnRg1eJ2cvnj2KtaCSHLen8rwXkMiDcD/PA3C', NULL, '2022-12-14 12:54:10', '2022-12-14 12:54:10');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `employees`
--
ALTER TABLE `employees`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `employees_email_unique` (`email`),
  ADD UNIQUE KEY `employees_phone_unique` (`phone`);

--
-- Indexes for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`);

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
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `projects`
--
ALTER TABLE `projects`
  ADD PRIMARY KEY (`id`),
  ADD KEY `projects_category_id_foreign` (`category_id`);

--
-- Indexes for table `rows`
--
ALTER TABLE `rows`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `services`
--
ALTER TABLE `services`
  ADD PRIMARY KEY (`id`),
  ADD KEY `services_category_id_foreign` (`category_id`);

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
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=46;

--
-- AUTO_INCREMENT for table `employees`
--
ALTER TABLE `employees`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=13;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `projects`
--
ALTER TABLE `projects`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `rows`
--
ALTER TABLE `rows`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `services`
--
ALTER TABLE `services`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `projects`
--
ALTER TABLE `projects`
  ADD CONSTRAINT `projects_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;

--
-- Constraints for table `services`
--
ALTER TABLE `services`
  ADD CONSTRAINT `services_category_id_foreign` FOREIGN KEY (`category_id`) REFERENCES `categories` (`id`) ON DELETE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
