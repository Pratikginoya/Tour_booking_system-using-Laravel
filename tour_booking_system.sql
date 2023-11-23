-- phpMyAdmin SQL Dump
-- version 5.2.1
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Nov 22, 2023 at 10:22 AM
-- Server version: 10.4.28-MariaDB
-- PHP Version: 8.0.28

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `tour_booking_system`
--

-- --------------------------------------------------------

--
-- Table structure for table `admin_login`
--

CREATE TABLE `admin_login` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `admin_login`
--

INSERT INTO `admin_login` (`id`, `name`, `email`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin@gmail.com', 'start@123', '2023-11-12 11:57:17', '2023-11-12 11:58:10');

-- --------------------------------------------------------

--
-- Table structure for table `book_details`
--

CREATE TABLE `book_details` (
  `book_id` int(10) UNSIGNED NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `checkin` varchar(255) NOT NULL,
  `no_of_people` int(11) NOT NULL,
  `from_price` varchar(255) NOT NULL,
  `status` text NOT NULL DEFAULT 'details_pending',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `book_details`
--

INSERT INTO `book_details` (`book_id`, `user_id`, `package_id`, `checkin`, `no_of_people`, `from_price`, `status`, `created_at`, `updated_at`) VALUES
(12, 1, 3, '11/23/2023', 3, 'Ahmedabad,28000', 'booked', '2023-11-21 11:39:36', '2023-11-21 15:20:14'),
(13, 1, 1, '11/21/2023', 4, 'Surat,2123123', 'booked', '2023-11-21 15:19:37', '2023-11-21 15:20:14');

-- --------------------------------------------------------

--
-- Table structure for table `contact_us`
--

CREATE TABLE `contact_us` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `subject` text NOT NULL,
  `message` varchar(1500) NOT NULL,
  `status` int(11) DEFAULT 1,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `contact_us`
--

INSERT INTO `contact_us` (`id`, `name`, `email`, `mobile`, `subject`, `message`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Pratik R G', 'pratikg@g.com', '8798798798', 'asdf', 'asdfasfa', 0, '2023-11-21 13:34:32', '2023-11-21 19:04:42');

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
(2, '2014_10_12_100000_create_password_resets_table', 1),
(3, '2019_08_19_000000_create_failed_jobs_table', 1),
(4, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(5, '2023_11_11_104444_create_admin_login_table', 2),
(6, '2023_11_12_070623_create_slider_table', 3),
(7, '2023_11_12_072417_create_contact_us_table', 4),
(8, '2023_11_12_124338_create_package_table', 5),
(9, '2023_11_13_092116_create_user_register_table', 6),
(10, '2023_11_21_051218_create_book_details_table', 7),
(11, '2023_11_21_065809_create_person_detail_table', 8);

-- --------------------------------------------------------

--
-- Table structure for table `package`
--

CREATE TABLE `package` (
  `package_id` int(10) UNSIGNED NOT NULL,
  `type` varchar(255) NOT NULL,
  `to_place` varchar(255) NOT NULL,
  `from` varchar(5000) NOT NULL,
  `default_price` int(11) NOT NULL,
  `price` varchar(800) NOT NULL,
  `highlight` text NOT NULL,
  `hotel_type` varchar(255) NOT NULL,
  `vehicle` text NOT NULL,
  `food` text NOT NULL,
  `total_days` int(11) NOT NULL,
  `total_nights` int(11) NOT NULL,
  `day` varchar(5000) NOT NULL,
  `includes` varchar(1000) NOT NULL,
  `map_html` varchar(2000) NOT NULL,
  `image1` varchar(255) NOT NULL,
  `image2` varchar(255) NOT NULL,
  `image3` varchar(255) NOT NULL,
  `image4` varchar(255) NOT NULL,
  `image5` varchar(255) NOT NULL,
  `popularity` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `package`
--

INSERT INTO `package` (`package_id`, `type`, `to_place`, `from`, `default_price`, `price`, `highlight`, `hotel_type`, `vehicle`, `food`, `total_days`, `total_nights`, `day`, `includes`, `map_html`, `image1`, `image2`, `image3`, `image4`, `image5`, `popularity`, `status`, `created_at`, `updated_at`) VALUES
(1, 'Domestic', 'Mahabaleshwar', 'New-Delhi | Vadodara | Rajkot | Surat | pune', 5000, '3463 | 63546 | 345235 | 2123123 | 42345', 'Mahabaleshwar is a hill station in India\'s forested Western Ghats range, south of Mumbai. It features several elevated viewing points, such as Arthur’s Seat. West of here is centuries-old Pratapgad Fort, perched atop a mountain spur. East, Lingmala Waterfall tumbles off a sheer cliff. Colorful boats dot Venna Lake, while 5 rivers meet at Panch Ganga Temple to the north.', '3 star', 'By Bus', 'Break-fast | Lunch | Dinner', 3, 4, 'asdfaf asdf | asdfa | asfasf', 'asdfasf', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d238132.67289598443!2d72.65748678122783!3d21.159440562025313!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be04e59411d1563%3A0xfe4558290938b042!2sSurat%2C%20Gujarat!5e0!3m2!1sen!2sin!4v1699792061660!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '12112023_185242_15.jpg', '12112023_185242_17.jpg', '12112023_185242_1.jpg', '12112023_185242_11.jpg', '12112023_185242_12.jpg', 'High', 'Live', '2023-11-12 18:52:42', '2023-11-20 14:13:05'),
(2, 'International', 'Dubai', 'Surat | Ahmedabad | Bengaluru | Mumbai | Hyderabad | Rajkot | Velanja', 25000, '26000 | 28000 | 30000 | 25000 | 26000 | 28000 | 30000', 'Dubai is a city and emirate in the United Arab Emirates known for luxury shopping, ultramodern architecture and a lively nightlife scene. Burj Khalifa, an 830m-tall tower, dominates the skyscraper-filled skyline. At its foot lies Dubai Fountain, with jets and lights choreographed to music. On artificial islands just offshore is Atlantis, The Palm, a resort with water and marine-animal parks', '4 star', 'By Flight', 'Break-fast | Lunch | Dinner', 9, 8, 'Aliquam vitae dolor aliquet feugiat risus cibus convallis sem\r\nMauris facilisis magna purusvel efficiurex convallis sed\r\nSuspendisse congue mimagna cinia lputate erat\r\nQuisque vitae bibendum rosliquam lacus etelit lobortist\r\nVivamus sed ligula leo. Cras cour vitae lore | Aliquam vitae dolor aliquet feugiat risus cibus convallis sem\r\nMauris facilisis magna purusvel efficiurex convallis sed\r\nSuspendisse congue mimagna cinia lputate erat\r\nQuisque vitae bibendum rosliquam lacus etelit lobortist\r\nVivamus sed ligula leo. Cras cour vitae lore | Aliquam vitae dolor aliquet feugiat risus cibus convallis sem\r\nMauris facilisis magna purusvel efficiurex convallis sed\r\nSuspendisse congue mimagna cinia lputate erat\r\nQuisque vitae bibendum rosliquam lacus etelit lobortist\r\nVivamus sed ligula leo. Cras cour vitae lore | Aliquam vitae dolor aliquet feugiat risus cibus convallis sem\r\nMauris facilisis magna purusvel efficiurex convallis sed\r\nSuspendisse congue mimagna cinia lputate erat\r\nQuisque vitae bibendum rosliquam lacus etelit lobortist\r\nVivamus sed ligula leo. Cras cour vitae lore | Aliquam vitae dolor aliquet feugiat risus cibus convallis sem\r\nMauris facilisis magna purusvel efficiurex convallis sed\r\nSuspendisse congue mimagna cinia lputate erat\r\nQuisque vitae bibendum rosliquam lacus etelit lobortist\r\nVivamus sed ligula leo. Cras cour vitae lore', 'usce in mais arcutiam consmassa vulputate\r\nVestibulum.  rutrutiuamus sed felisat leo\r\nEget euismod. ns quamed vitae ipsum augue\r\nDestas turpis consect malesuada\r\nLaciniorci venenatis anteiulisrbi sitame.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462561.6574537445!2d55.22748795!3d25.076022449999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1699876749790!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '13112023_172951_28.jpg', '13112023_172951_25.jpg', '13112023_172951_22.jpg', '13112023_172951_24.jpg', '13112023_172951_29.jpg', 'Very high', 'Live', '2023-11-13 17:29:51', '2023-11-20 14:14:41'),
(3, 'International', 'Dubai', 'Surat | Ahmedabad | Bengaluru | Mumbai | Hyderabad | Rajkot | Velanja', 22000, '21000 | 28000 | 30000 | 25000 | 26000 | 28000 | 30000', 'Dubai is a city and emirate in the United Arab Emirates known for luxury shopping, ultramodern architecture and a lively nightlife scene. Burj Khalifa, an 830m-tall tower, dominates the skyscraper-filled skyline. At its foot lies Dubai Fountain, with jets and lights choreographed to music. On artificial islands just offshore is Atlantis, The Palm, a resort with water and marine-animal parks', '3 star', 'By Flight', 'Break-fast | Lunch | Dinner', 4, 5, 'Aliquam vitae dolor aliquet feugiat risus cibus convallis sem\r\nMauris facilisis magna purusvel efficiurex convallis sed\r\nSuspendisse congue mimagna cinia lputate erat\r\nQuisque vitae bibendum rosliquam lacus etelit lobortist\r\nVivamus sed ligula leo. Cras cour vitae lore | Aliquam vitae dolor aliquet feugiat risus cibus convallis sem\r\nMauris facilisis magna purusvel efficiurex convallis sed\r\nSuspendisse congue mimagna cinia lputate erat\r\nQuisque vitae bibendum rosliquam lacus etelit lobortist\r\nVivamus sed ligula leo. Cras cour vitae lore | Aliquam vitae dolor aliquet feugiat risus cibus convallis sem\r\nMauris facilisis magna purusvel efficiurex convallis sed\r\nSuspendisse congue mimagna cinia lputate erat\r\nQuisque vitae bibendum rosliquam lacus etelit lobortist\r\nVivamus sed ligula leo. Cras cour vitae lore | Aliquam vitae dolor aliquet feugiat risus cibus convallis sem\r\nMauris facilisis magna purusvel efficiurex convallis sed\r\nSuspendisse congue mimagna cinia lputate erat\r\nQuisque vitae bibendum rosliquam lacus etelit lobortist\r\nVivamus sed ligula leo. Cras cour vitae lore | Aliquam vitae dolor aliquet feugiat risus cibus convallis sem\r\nMauris facilisis magna purusvel efficiurex convallis sed\r\nSuspendisse congue mimagna cinia lputate erat\r\nQuisque vitae bibendum rosliquam lacus etelit lobortist\r\nVivamus sed ligula leo. Cras cour vitae lore', 'usce in mais arcutiam consmassa vulputate\r\nVestibulum.  rutrutiuamus sed felisat leo\r\nEget euismod. ns quamed vitae ipsum augue\r\nDestas turpis consect malesuada\r\nLaciniorci venenatis anteiulisrbi sitame.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462561.6574537445!2d55.22748795!3d25.076022449999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1699876749790!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '13112023_172951_28.jpg', '13112023_172951_22.jpg', '13112023_172951_24.jpg', '13112023_172951_24.jpg', '13112023_172951_29.jpg', 'Very high', 'Live', '2023-11-13 17:29:51', '2023-11-20 14:15:02'),
(4, 'International', 'Dubai', 'Ahmedabad | Bengaluru | Mumbai | Hyderabad | Rajkot | Velanja', 22000, '28000 | 30000 | 25000 | 26000 | 28000 | 30000', 'Dubai is a city and emirate in the United Arab Emirates known for luxury shopping, ultramodern architecture and a lively nightlife scene. Burj Khalifa, an 830m-tall tower, dominates the skyscraper-filled skyline. At its foot lies Dubai Fountain, with jets and lights choreographed to music. On artificial islands just offshore is Atlantis, The Palm, a resort with water and marine-animal parks', '5 star', 'By Flight', 'Break-fast | Lunch | Dinner', 5, 6, 'Aliquam vitae dolor aliquet feugiat risus cibus convallis sem\r\nMauris facilisis magna purusvel efficiurex convallis sed\r\nSuspendisse congue mimagna cinia lputate erat\r\nQuisque vitae bibendum rosliquam lacus etelit lobortist\r\nVivamus sed ligula leo. Cras cour vitae lore | Aliquam vitae dolor aliquet feugiat risus cibus convallis sem\r\nMauris facilisis magna purusvel efficiurex convallis sed\r\nSuspendisse congue mimagna cinia lputate erat\r\nQuisque vitae bibendum rosliquam lacus etelit lobortist\r\nVivamus sed ligula leo. Cras cour vitae lore | Aliquam vitae dolor aliquet feugiat risus cibus convallis sem\r\nMauris facilisis magna purusvel efficiurex convallis sed\r\nSuspendisse congue mimagna cinia lputate erat\r\nQuisque vitae bibendum rosliquam lacus etelit lobortist\r\nVivamus sed ligula leo. Cras cour vitae lore | Aliquam vitae dolor aliquet feugiat risus cibus convallis sem\r\nMauris facilisis magna purusvel efficiurex convallis sed\r\nSuspendisse congue mimagna cinia lputate erat\r\nQuisque vitae bibendum rosliquam lacus etelit lobortist\r\nVivamus sed ligula leo. Cras cour vitae lore | Aliquam vitae dolor aliquet feugiat risus cibus convallis sem\r\nMauris facilisis magna purusvel efficiurex convallis sed\r\nSuspendisse congue mimagna cinia lputate erat\r\nQuisque vitae bibendum rosliquam lacus etelit lobortist\r\nVivamus sed ligula leo. Cras cour vitae lore', 'usce in mais arcutiam consmassa vulputate\r\nVestibulum.  rutrutiuamus sed felisat leo\r\nEget euismod. ns quamed vitae ipsum augue\r\nDestas turpis consect malesuada\r\nLaciniorci venenatis anteiulisrbi sitame.', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d462561.6574537445!2d55.22748795!3d25.076022449999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3e5f43496ad9c645%3A0xbde66e5084295162!2sDubai%20-%20United%20Arab%20Emirates!5e0!3m2!1sen!2sin!4v1699876749790!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '13112023_172951_29.jpg', '13112023_172951_25.jpg', '13112023_172951_22.jpg', '13112023_172951_28.jpg', '13112023_172951_29.jpg', 'Very high', 'Live', '2023-11-13 17:29:51', '2023-11-20 14:15:30'),
(5, 'International', 'Switzerland', 'Surat | Bengaluru | Mumbai | Pune | Vadodara', 28000, '31000 | 29000 | 28000 | 26000 | 32000', 'Switzerland is a mountainous Central European country, home to numerous lakes, villages and the high peaks of the Alps. Its cities contain medieval quarters, with landmarks like capital Bern’s Zytglogge clock tower and Lucerne’s wooden chapel bridge. The country is also known for its ski resorts and hiking trails. Banking and finance are key industries, and Swiss watches and chocolate are world renowned.', '4 star', 'By Flight', 'Break-fast | Lunch | Dinner', 7, 8, 'asdfasdfa | asdfasdf | asdfasdfaf | asdfasdfaf', 'asdfasdfasdfasfasdf', 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d1398041.1378619722!2d8.22421005!3d46.8131873!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x478c64ef6f596d61%3A0x5c56b5110fcb7b15!2sSwitzerland!5e0!3m2!1sen!2sin!4v1700468705299!5m2!1sen!2sin\" width=\"600\" height=\"450\" style=\"border:0;\" allowfullscreen=\"\" loading=\"lazy\" referrerpolicy=\"no-referrer-when-downgrade', '20112023_135653_13.jpg', '20112023_135653_5.jpg', '20112023_135653_15.jpg', '20112023_135653_21.jpg', '20112023_135653_20.jpg', 'Very high', 'Live', '2023-11-20 13:56:53', '2023-11-21 09:32:36');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
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
-- Table structure for table `person_detail`
--

CREATE TABLE `person_detail` (
  `person_id` int(10) UNSIGNED NOT NULL,
  `book_id` int(11) NOT NULL,
  `user_id` int(11) NOT NULL,
  `package_id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `age` varchar(255) NOT NULL,
  `status` varchar(255) NOT NULL DEFAULT 'pending_to_pay',
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `person_detail`
--

INSERT INTO `person_detail` (`person_id`, `book_id`, `user_id`, `package_id`, `name`, `email`, `mobile`, `age`, `status`, `created_at`, `updated_at`) VALUES
(7, 12, 1, 3, 'asfas', 'admin@g.com', '8787878787', '45', 'booked', '2023-11-21 11:40:01', '2023-11-21 15:20:14'),
(8, 12, 1, 3, 'asfas', 'admin@g.com', '8787878787', '45', 'booked', '2023-11-21 11:40:01', '2023-11-21 15:20:14'),
(9, 12, 1, 3, 'asfas', 'admin@g.com', '8787878787', '45', 'booked', '2023-11-21 11:40:01', '2023-11-21 15:20:14'),
(10, 13, 1, 1, 'asdfasfd', 'admin@g.com', '8787878787', '213', 'booked', '2023-11-21 15:20:11', '2023-11-21 15:20:14'),
(11, 13, 1, 1, 'asdfasfdasf', 'admin@g.com', '8787878787', '32', 'booked', '2023-11-21 15:20:11', '2023-11-21 15:20:14'),
(12, 13, 1, 1, 'asdfasf', 'admin@g.com', '2322342342342432', '234', 'booked', '2023-11-21 15:20:11', '2023-11-21 15:20:14'),
(13, 13, 1, 1, 'asdfasfdqwerqwr', 'admin@g.com', '8787878787', '234', 'booked', '2023-11-21 15:20:11', '2023-11-21 15:20:14');

-- --------------------------------------------------------

--
-- Table structure for table `slider`
--

CREATE TABLE `slider` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `title` varchar(255) NOT NULL,
  `image` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `slider`
--

INSERT INTO `slider` (`id`, `title`, `image`, `created_at`, `updated_at`) VALUES
(1, 'Hello Hello', '12112023_133006_15.jpg', '2023-11-12 13:28:45', '2023-11-13 08:20:33');

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

-- --------------------------------------------------------

--
-- Table structure for table `user_register`
--

CREATE TABLE `user_register` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `mobile` varchar(255) NOT NULL,
  `created_at` datetime NOT NULL DEFAULT current_timestamp(),
  `updated_at` datetime NOT NULL DEFAULT current_timestamp() ON UPDATE current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `user_register`
--

INSERT INTO `user_register` (`id`, `name`, `email`, `password`, `mobile`, `created_at`, `updated_at`) VALUES
(1, 'Pratik R G', 'pratikginoya194@gmail.com', 'Admin@123', '7878787878', '2023-11-13 09:45:05', '2023-11-13 09:45:05'),
(3, 'Pratik R G', 'pratikginoya1995@gmail.com', 'Admin@123', '7987987987', '2023-11-13 10:09:06', '2023-11-13 10:09:06');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `admin_login`
--
ALTER TABLE `admin_login`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `book_details`
--
ALTER TABLE `book_details`
  ADD PRIMARY KEY (`book_id`);

--
-- Indexes for table `contact_us`
--
ALTER TABLE `contact_us`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `package`
--
ALTER TABLE `package`
  ADD PRIMARY KEY (`package_id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD PRIMARY KEY (`email`);

--
-- Indexes for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  ADD KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`);

--
-- Indexes for table `person_detail`
--
ALTER TABLE `person_detail`
  ADD PRIMARY KEY (`person_id`);

--
-- Indexes for table `slider`
--
ALTER TABLE `slider`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `users_email_unique` (`email`);

--
-- Indexes for table `user_register`
--
ALTER TABLE `user_register`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `admin_login`
--
ALTER TABLE `admin_login`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `book_details`
--
ALTER TABLE `book_details`
  MODIFY `book_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `contact_us`
--
ALTER TABLE `contact_us`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=12;

--
-- AUTO_INCREMENT for table `package`
--
ALTER TABLE `package`
  MODIFY `package_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `person_detail`
--
ALTER TABLE `person_detail`
  MODIFY `person_id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=14;

--
-- AUTO_INCREMENT for table `slider`
--
ALTER TABLE `slider`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `user_register`
--
ALTER TABLE `user_register`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
