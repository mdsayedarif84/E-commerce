-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 05, 2021 at 02:51 AM
-- Server version: 10.4.18-MariaDB
-- PHP Version: 8.0.3

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `new_shop`
--

-- --------------------------------------------------------

--
-- Table structure for table `brands`
--

CREATE TABLE `brands` (
  `id` int(10) UNSIGNED NOT NULL,
  `brand_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `brand_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `brands`
--

INSERT INTO `brands` (`id`, `brand_name`, `brand_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(2, 'Symphony', 'Symphony is too good brand', 1, '2018-10-17 00:51:45', '2021-06-21 07:21:00'),
(3, 'Sony Erecso', 'Sony erecson is old brand', 1, '2018-10-17 00:58:22', '2021-06-21 10:46:41'),
(4, 'Hero Honda', 'Hero honda is a fantastic lasting', 1, '2018-10-19 09:04:54', '2018-10-19 22:30:52'),
(6, 'Hockey', 'Nice', 1, '2018-10-21 01:38:29', '2021-06-26 00:30:09'),
(7, 'Pluser', 'Bajaj Pulsar NS160', 1, '2018-10-21 10:40:02', '2021-06-26 09:51:38'),
(8, 'Bubble dress', 'African Print,Bubble Dress,Girls Dress', 1, '2018-10-23 00:45:40', '2021-06-21 10:47:49'),
(9, 'Winter Cotton', '2018 Winter Cotton Flower Baby Dress Clothes 1 year Newborn Girl', 0, '2018-10-23 00:46:55', '2018-11-08 11:32:54'),
(10, 'Speaker & Remote', 'Find out more\r\nThe 7 Best Places to buy Consumer Electronics in Singapore .', 1, '2018-10-23 00:48:48', '2018-11-08 11:56:56'),
(12, 'OTOBI', 'Ashton Sofa | Bob\'s Discount Furniture\r\nBob\'s Discount Furniture', 1, '2018-10-23 00:51:41', '2018-11-08 11:37:31'),
(14, 'Bajaj', 'Bajaj honda is very comportable for me', 1, '2018-10-23 09:34:10', '2021-07-02 23:28:18'),
(17, 'Nokia', 'Nokia is old model', 0, '2018-10-23 10:18:02', '2018-10-27 11:07:13'),
(18, 'Batik Indonesia', 'Image result for girls cloth image\r\n505 × 675Images may be subject to copyright. Find out more\r\nBatik Indonesian Girl\'s Latest Clothes Design\'s Images 2014-15 ...\r\nWorld Latest Fashion Trends', 0, '2018-10-24 10:00:46', '2021-06-26 09:52:01'),
(19, 'Tamim', 'Why couldn\'t Tamim Iqbal fly out to the UAE for the Asia Cup?\r\nBatting with Bimal', 1, '2018-10-24 10:09:09', '2018-10-24 10:09:09'),
(20, 'Bajuka', 'Barcelona star Lionel Messi manages to stay hidden despite his fame\r\nESPN.com', 0, '2018-10-24 10:17:33', '2021-06-26 09:51:51'),
(21, 'Blazer', 'new fashion casual blazer men cotton s', 1, '2018-10-24 10:23:35', '2018-10-24 10:23:35'),
(22, 'Big Brand', 'well', 1, '2018-10-24 10:37:06', '2018-10-24 10:37:06'),
(23, 'pajamas', 'Nice couple wear a pajamas', 0, '2018-10-24 10:46:35', '2021-07-02 23:28:58'),
(24, 'hp', 'A famous brand', 1, '2021-06-27 03:34:37', '2021-06-27 03:34:37'),
(25, 'Dell', 'Dell is brand for famous!', 1, '2021-07-02 23:27:48', '2021-07-02 23:27:48'),
(26, 'Lenovo', 'Lenovo is good brand!', 1, '2021-07-02 23:35:58', '2021-07-02 23:35:58'),
(27, 'Apple', 'Apple Brand is well Known for all world!', 1, '2021-07-02 23:37:07', '2021-07-02 23:37:07');

-- --------------------------------------------------------

--
-- Table structure for table `categories`
--

CREATE TABLE `categories` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `category_description` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `categories`
--

INSERT INTO `categories` (`id`, `category_name`, `category_description`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 'Girls Fashion', 'Now a days girls fashion increase high', 1, '2018-10-14 22:55:00', '2018-10-26 10:21:04'),
(2, 'Ride', 'For entertainment', 1, '2018-10-14 23:25:04', '2018-10-15 13:50:04'),
(7, 'Sports', 'I like play football & cricket', 1, '2018-10-16 13:42:04', '2018-10-24 10:08:22'),
(8, 'Cartooons', 'Cartoon is good entertainment for child', 0, '2018-10-16 13:43:39', '2018-10-23 11:22:25'),
(9, 'Man Fashion', 'well', 1, '2018-10-21 01:31:20', '2018-10-21 01:31:20'),
(10, 'Television', 'Television is a good for entertainment', 0, '2018-10-21 10:45:05', '2018-10-23 11:23:06'),
(11, 'Education', 'Education is backbone for nation', 0, '2018-10-21 10:47:01', '2018-10-23 11:24:55'),
(12, 'Electornics', 'Electronics goods are available in bangladesh', 1, '2018-10-23 00:41:04', '2018-10-23 00:41:04'),
(13, 'Untensils', 'Untensils is very essential for housemaker', 0, '2018-10-23 00:42:26', '2018-10-23 11:25:04'),
(14, 'Furniture', 'Furniture is increase attractive our house inside', 1, '2018-10-23 00:43:44', '2018-10-23 00:43:44'),
(15, 'Computer', 'computer is very useful to us', 1, '2021-06-27 03:34:03', '2021-06-27 03:34:03');

-- --------------------------------------------------------

--
-- Table structure for table `customers`
--

CREATE TABLE `customers` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `first_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `last_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `customers`
--

INSERT INTO `customers` (`id`, `first_name`, `last_name`, `email`, `password`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(35, 'MD', 'fs', 'mdsayedarif84@gmail.com', '$2y$10$Gg5DwXiE2I2jaqvbQ9Sgzex5oTpDktHA1sj5I9zv8rlVaniekmFZC', '01634173029', 'Noakhali,subarnachar', '2021-07-01 19:55:50', '2021-07-01 19:55:50'),
(36, 'MD.', 'Taohid', 'fsmoon84@gmail.com', '$2y$10$UOexnRRTDiz7Auwy7yII7u3drPfRzjgLaDqm9Vl3PXFqpukG1WWWe', '01301438420', 'Noakhali,subarnachar', '2021-07-02 19:59:14', '2021-07-02 19:59:14'),
(37, 'MD', 'Taohid', 'asulymoon84@gmail.com', '$2y$10$z6OQF/h.bmngQsx9YVeplOjwkUVOa2tmcwtD4206vP9EJwf.kyz5.', '01301438420', 'Noakhali,subarnachar', '2021-07-02 19:59:56', '2021-07-02 19:59:56'),
(38, 'Fairya', 'Islam', 'fsjhilmil84@gmail.com', '$2y$10$xoIKU7p4lOii6r7ZUvyULOhbzSn/nYsZ4yLUR2DtmDh41Le8Y0NPS', '01855479190', 'Noakhali,Aju Market', '2021-07-02 23:14:37', '2021-07-02 23:14:37');

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
(3, '2018_10_15_042952_create_categories_table', 2),
(4, '2018_10_17_062452_create_brands_table', 3),
(5, '2018_10_20_165620_create_products_table', 4),
(12, '2014_10_12_000000_create_users_table', 5),
(13, '2014_10_12_100000_create_password_resets_table', 5),
(14, '2018_11_05_154128_create_customers_table', 6),
(15, '2018_11_06_164821_create_shippings_table', 7),
(16, '2018_11_07_074924_create_orders_table', 8),
(17, '2018_11_07_075639_create_payments_table', 8),
(18, '2018_11_07_075908_create_order_details_table', 8),
(19, '2019_08_19_000000_create_failed_jobs_table', 9),
(20, '2021_06_27_150853_create_shoppingcart_table', 10),
(21, '2021_06_29_064537_create_customers_table', 10),
(22, '2021_07_01_064943_create_shippings_table', 11),
(23, '2021_07_01_092226_create_orders_table', 12),
(24, '2021_07_01_092443_create_payments_table', 12),
(25, '2021_07_01_092817_create_order_details_table', 12);

-- --------------------------------------------------------

--
-- Table structure for table `orders`
--

CREATE TABLE `orders` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `customer_id` int(11) NOT NULL,
  `shipping_id` int(11) NOT NULL,
  `order_total` double(10,2) NOT NULL,
  `order_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `orders`
--

INSERT INTO `orders` (`id`, `customer_id`, `shipping_id`, `order_total`, `order_status`, `created_at`, `updated_at`) VALUES
(1, 33, 1, 495000.00, 'Pending', '2021-07-01 05:05:33', '2021-07-01 05:05:33'),
(2, 35, 1, 495000.00, 'Pending', '2021-07-01 05:06:52', '2021-07-01 05:06:52'),
(3, 37, 3, 24000.00, 'Pending', '2021-07-02 20:00:58', '2021-07-02 20:00:58'),
(4, 37, 3, 790000.00, 'Pending', '2021-07-02 23:06:30', '2021-07-02 23:06:30'),
(5, 38, 4, 6500.00, 'Pending', '2021-07-02 23:14:54', '2021-07-02 23:14:54');

-- --------------------------------------------------------

--
-- Table structure for table `order_details`
--

CREATE TABLE `order_details` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `product_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `order_details`
--

INSERT INTO `order_details` (`id`, `order_id`, `product_id`, `product_name`, `product_price`, `product_quantity`, `created_at`, `updated_at`) VALUES
(1, 2, 26, 'ladies', 15000.00, 3, '2021-07-01 05:06:52', '2021-07-01 05:06:52'),
(2, 2, 18, 'Messi', 40000.00, 5, '2021-07-01 05:06:52', '2021-07-01 05:06:52'),
(3, 2, 24, 'laptop', 50000.00, 5, '2021-07-01 05:06:52', '2021-07-01 05:06:52'),
(4, 3, 12, 'sofa', 8000.00, 3, '2021-07-02 20:00:58', '2021-07-02 20:00:58'),
(5, 4, 24, 'laptop', 50000.00, 5, '2021-07-02 23:06:30', '2021-07-02 23:06:30'),
(6, 4, 4, 'Pluser ns160', 180000.00, 3, '2021-07-02 23:06:30', '2021-07-02 23:06:30'),
(7, 5, 9, 'mini-speaker', 1300.00, 5, '2021-07-02 23:14:55', '2021-07-02 23:14:55'),
(8, 6, 28, 'HP Y0N84AA Core i7 7th', 192000.00, 2, '2021-07-03 00:52:30', '2021-07-03 00:52:30');

-- --------------------------------------------------------

--
-- Table structure for table `password_resets`
--

CREATE TABLE `password_resets` (
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `payments`
--

CREATE TABLE `payments` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `order_id` int(11) NOT NULL,
  `payment_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `payment_status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL DEFAULT 'Pending',
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `payments`
--

INSERT INTO `payments` (`id`, `order_id`, `payment_type`, `payment_status`, `created_at`, `updated_at`) VALUES
(1, 1, 'Cash', 'Pending', '2021-07-01 05:05:33', '2021-07-01 05:05:33'),
(2, 2, 'Cash', 'Pending', '2021-07-01 05:06:52', '2021-07-01 05:06:52'),
(3, 3, 'Cash', 'Pending', '2021-07-02 20:00:58', '2021-07-02 20:00:58'),
(4, 4, 'Cash', 'Pending', '2021-07-02 23:06:30', '2021-07-02 23:06:30'),
(5, 5, 'Cash', 'Pending', '2021-07-02 23:14:55', '2021-07-02 23:14:55'),
(6, 6, 'Cash', 'Pending', '2021-07-03 00:52:30', '2021-07-03 00:52:30');

-- --------------------------------------------------------

--
-- Table structure for table `products`
--

CREATE TABLE `products` (
  `id` int(10) UNSIGNED NOT NULL,
  `category_id` int(11) NOT NULL,
  `brand_id` int(11) NOT NULL,
  `product_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_price` double(10,2) NOT NULL,
  `product_quantity` int(11) NOT NULL,
  `short_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `long_description` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `product_image` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `publication_status` tinyint(4) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `products`
--

INSERT INTO `products` (`id`, `category_id`, `brand_id`, `product_name`, `product_price`, `product_quantity`, `short_description`, `long_description`, `product_image`, `publication_status`, `created_at`, `updated_at`) VALUES
(1, 2, 4, 'Hero Bike', 150000.00, 5, 'Sell or buy used bikes?', '<p>&nbsp;</p>\r\n\r\n<p>Bikez.biz has an efficient motorcycle classifieds. Ads are free. Click here to&nbsp;<a href=\"https://www.bikez.biz/ads/index.php?idyear=2010&amp;idbrand=136&amp;idmodel=32027\">sell a used 2010 Hero Honda Karizma</a>&nbsp;or&nbsp;<a href=\"https://www.bikez.biz/ads/index.php\">advertise any other MC for sale</a>. You can list all&nbsp;<a href=\"https://www.bikez.biz/ads/listmodel.php?Year=2010&amp;Brand=Hero+Honda&amp;Model=Karizma&amp;BikeId=32027&amp;BrandId=136\">2010 Hero Honda Karizma available</a>&nbsp;and also sign up for e-mail notification when such bikes are advertised in the future. Bikez has a high number of users looking for used bikes. Before you buy this bike, you should view the list of&nbsp;<a href=\"https://bikez.com/bike/listrelated.php?idbike=32027&amp;idcat=1&amp;yearno=2010&amp;idbrand=136&amp;ccm=223.00&amp;model=Karizma&amp;brand=Hero+Honda\">related motorbikes</a>&nbsp;Compare technical specs. Look at photos. And check out the rating of the bike&#39;s&nbsp;<a href=\"https://bikez.com/rating/hero_honda_karizma_2010.php\">engine performance, repair costs, etc.</a></p>', 'product-image/hero_honda.jpg', 1, '2018-10-21 00:06:06', '2018-10-27 22:23:38'),
(2, 9, 5, 'T-shirt', 5000.00, 500, 'SKIME T-SHIRT', '<p><em>Details</em></p>\r\n\r\n<ul>\r\n	<li>Hand printed in Portland, ME</li>\r\n	<li>Printed using waterbased ink</li>\r\n	<li>Printed on American Apparel</li>\r\n	<li>100% fine jersey cotton</li>\r\n	<li>Peak illustration on left sleeve</li>\r\n	<li>American Apparel tends to run small and shrink some after wash, if in doubt order a size larger</li>\r\n</ul>\r\n\r\n<ul>\r\n</ul>\r\n\r\n<p><em>6 items left</em></p>', 'product-image/images.jpg', 1, '2018-10-21 01:34:39', '2018-10-27 10:28:19'),
(3, 7, 6, 'Girls hockey', 5000.00, 23, 'Field Hockey Announces 2018 Schedule', '<p><strong>June 12, 2018</strong></p>\r\n\r\n<p><img alt=\"\" src=\"data:image/jpeg;base64,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\" /></p>\r\n\r\n<p>UNIVERSITY PARK, Pa. &ndash; The Penn State Nittany Lion field hockey team, under the guidance of head coach Char Morett-Curtiss, will play nine home games in 2018 as the new schedule has been announced. The Nittany Lions open the season in August and look to conclude the campaign in November in the NCAA Championships.</p>', 'product-image/Hockey.jpg', 1, '2018-10-21 01:46:56', '2018-10-21 01:46:56'),
(4, 2, 7, 'Pluser ns160', 180000.00, 251, 'Gorgeous color', '<p>Fashionable Bike</p>', 'product-image/Pluser ns160.jpg', 1, '2018-10-22 00:49:59', '2021-06-26 21:20:46'),
(5, 14, 12, 'Ashton Sofa', 15000.00, 300, 'Roll arms and contrasting welt highlight this comfy sofa', '<p>Get cozy with my Ashton Sofa! In your choice of either light gray or charcoal, stylish accent pillows and plush Bob-O-Pedic Memory Foam Seating, all make this sofa comfy and trendy. Plus, the contrasting welt and roll arm add flair to any transitional space! You can have the look you want at a price you&#39;ll LOVE.</p>', 'product-image/Ashton Sofa.jpg', 1, '2018-10-23 01:32:57', '2018-10-23 01:32:57'),
(6, 12, 10, 'Sony', 1500.00, 200, 'Audio Systems for Home Entertainment', '<p>Home entertainment is possible with impressive sound and streaming experience. Blu-ray offers high density storage with full high definition audio.</p>\r\n\r\n<p>Audio systems include Headphones, MP3 Players, Wireless Speakers, Digital Voice recorders, Soundbars.</p>', 'product-image/Sony.jpg', 1, '2018-10-23 01:36:37', '2018-11-08 11:57:21'),
(7, 1, 8, 'girls cloth', 1000.00, 500, 'MADE TO ORDER - PLEASE USE THE MEASUREMENT GUIDE ATTACHED AS ONE OF THE IMAGES IN THE DRESS PICTURES. MEASURE YOUR CHILD FOR PROPER FITTING.', '<p>Beatrice Bubble Dress<br />\r\n<br />\r\nYour darling little star will absolutely ROCK in this classic dress, perfect for birthdays, weddings or just a garden party on a fun and breezy sunny day. It features a crisscross front bodice and a low back bodice which encloses with a snap fastener and buttons. it has a wide sash tie at the back making it even more elegant.<br />\r\n<br />\r\nThe dress features a bubble hem that gives the skirt extra body and will be a sure favorite for your girl!<br />\r\n<br />\r\nThis dress can also be made in sizes ranging from 12 months to 12 years<br />\r\n&nbsp;</p>', 'product-image/girls cloth.jpg', 1, '2018-10-23 01:42:10', '2018-10-23 01:42:10'),
(8, 1, 8, 'yvones', 1200.00, 100, '2018 Winter Cotton Flower Baby Dress Clothes 1 year Newborn Girl Clothing vestido infantil de bebes', '<p>very fast shipping to NL-12 days. beauty dress, without damage. daughter wear size 86, has 23miesiace. the komentarzami Sugerowalam and wzi&Auml;&Aring;am size 18 msc. is perfect. damage, that is not on the shoulder button for rozpi&Auml;cia, was not by problem head. three layers bottom is a little, besides this layer under dress is short reaches before pup&Auml; but first two are knee. strange. if anyone can sew be we have in family kogos is no problem with wszyciem new long lining.</p>', 'product-image/yvones.jpg', 1, '2018-10-23 01:45:17', '2018-10-23 01:45:17'),
(9, 12, 10, 'mini-speaker', 1300.00, 103, 'G: Mobile Devices, Home Entertainment & Appliances | LG USA\r\nwww.lg.com', '<p><br />\r\nDesigned with you in mind, LG products offer innovative solutions to make life good. With intuitive, responsive controls, sleek, stylish designs, and eco-friendly features, our collection gives you the power to do more at home and on the go. It includes:</p>', 'product-image/mini-speaker.jpg', 1, '2018-10-23 02:41:42', '2018-10-23 02:41:42'),
(10, 12, 3, 'mi 5', 15000.00, 30, 'Mi phone is well', '<p>Mi is very intersting for me</p>', 'product-image/mi 5.jpg', 1, '2018-10-23 02:45:10', '2018-10-23 02:45:10'),
(11, 2, 4, 'fz', 250000.00, 100, 'Yamaha FZ25 launched', '<p>Named as FZ, the motorcycle has distinctive similarities with the motorcycles from the FZ series, but the design is very much inspired by the FZ version 2.0 available in India. There is a huge &ndash; contoured muscular tank with heavy design lines on the side. There are stubby looking fake air scoops on the either side of the tank that add to the looks.</p>', 'product-image/fz.jpg', 1, '2018-10-23 09:41:30', '2018-11-08 11:43:07'),
(12, 14, 12, 'sofa', 8000.00, 250, 'OTOBI – means forest and is a Bengali word chosen by Late Nitun Kundu, one of the most renowned artist and sculptor and also the founder of Otobi Limited.”', '<p>Otobi, the leading furniture manufacturer and retailer in Bangladesh is the most preferred lifestyle solution brand because of its constant innovations, advanced technological expertise, manufacturing capacity in the widest range of furniture categories, largest distribution network and time tested service reputation.</p>', 'product-image/“OTOBI.png', 1, '2018-10-23 09:47:03', '2018-11-08 11:54:56'),
(13, 14, 12, 'Dark', 15000.00, 120, 'There are some of Dark Wood Bedroom Furniture Fresh With Image Of Dark Wood Style New At Design marceladick image collections can provide to you. If you want to save the image, you just need to select the image that you want, and then save it to your device. Many choice of image Dark Wood Bedroom Furniture Fresh With Image Of Dark Wood Style New At Design which you can choose according to your wishes.', '<p>There are some of <strong>Dark Wood Bedroom Furniture Fresh With Image Of Dark Wood Style New At Design </strong> marceladick image collections can provide to you. If you want to save the image, you just need to select the image that you want, and then save it to your device. Many choice of image <em>Dark Wood Bedroom Furniture Fresh With Image Of Dark Wood Style New At Design </em> which you can choose according to your wishes.</p>\r\n\r\n<p><strong>Dark Wood Bedroom Furniture Fresh With Image Of Dark Wood Style New At Design </strong> is just one of the many collections of pictures or photos that are on this website. you will get a lot of information about in here. We not only provide information about only, you will get a lot more references to design your dream home. so keep visiting to <strong> marceladick.com </strong> to get the latest information about home design, kitchen, bedroom, bathroom, living room, and furniture and more.</p>', 'product-image/Dark.jpg', 1, '2018-10-23 10:04:43', '2018-11-08 11:55:14'),
(14, 12, 3, 'Nokia 70', 15000.00, 65, 'Nokia is my favourite phone at one time', '<p>I love nokia phone for long lasting.this phone service is very high.Man use it comportable.For this it take market easily.But at this time many phone company inventent huge category phone</p>', 'product-image/Nokia 70.jpg', 1, '2018-10-23 10:40:35', '2018-11-08 12:00:50'),
(15, 2, 14, 'bajaj', 150000.00, 560, 'Bajaj is good bike at present,', '<p>I am so much bajaj honda for good lasting.i think it is very comfortable to ride any place.for this everyone support this.</p>', 'product-image/bajaj1.jpg', 1, '2018-10-24 09:31:22', '2018-10-27 21:31:34'),
(16, 1, 18, 'Batik', 5000.00, 50, 'World Latest Fashion Trends', '<h2>Batik Indonesian Girl&#39;s Latest Clothes Design&#39;s Images 2014-15</h2>\r\n\r\n<h1><a href=\"http://newworldfashiontrends.blogspot.com/\">World Latest Fashion Trends </a></h1>\r\n\r\n<p>A blog about latest fashion trends in all world and latest models photo and many more world latest fashion news...</p>\r\n\r\n<p>&nbsp;</p>', 'product-image/Batik.jpg', 1, '2018-10-24 10:03:42', '2018-10-24 10:03:42'),
(17, 7, 19, 'Tamim Iqbal', 150000.00, 2400, 'Tamim Iqbal Rubel Hossain cannot travel UAE visa complications Bangladesh Asia Cup cricket', '<p>Image courtesy of: Cricket West Indies</p>\r\n\r\n<p>Bangladesh opener Tamim Iqbal and pace bowler Rubel Hossain were unable to depart for the United Arab Emirates with the rest of their teammates for the Asia Cup due to visa complications.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>However, Tamim and Rubel were not the only members of the squad affected as team&nbsp;manager Khaled Mahmud and chief selector Minhajul Abedin suffered the same problem.</p>\r\n\r\n<p>The quartet are still waiting for their visas to come through, but a Bangladesh Cricket Board (BCB) official is optimistic the visas will be issued in the next day or two.</p>', 'product-image/Tamim.jpg', 1, '2018-10-24 10:12:27', '2018-10-27 12:29:08'),
(18, 7, 20, 'Messi', 40000.00, 456, 'Stay Messi, My Friend', '<p>It is easy to find the most private superstar in the world.</p>\r\n\r\n<p>Seriously, it is. You just put <em>Hogar de Messi</em> -- hogar is Spanish for &quot;home&quot; -- into Google Maps, and up pops an address in Castelldefels, a gorgeous, windswept village carved into a mountain on the outskirts of Barcelona. Occasionally, the listing disappears for a spell (such is the Internet), but it always returns, and there are even &quot;reviews&quot; of Lionel Messi&#39;s place available from other Google users to help prepare you for your visit: One offers a five-star rating and the helpful description <em>Aqui vive Dios</em>. God lives here.</p>', 'product-image/Messi.jpg', 1, '2018-10-24 10:19:26', '2018-10-24 10:19:26'),
(19, 9, 21, 'blazer', 3000.00, 560, 'new fashion casual blazer men cotton slim men\'s cloth tops korea style Casual suit blaser masculino male jacket plus size 6xl', '<p><span dir=\"ltr\">new fashion casual blazer men cotton slim men&#39;s cloth tops korea style Casual suit blaser masculino male jacket plus size 6xl-in Blazers from Men&#39;s Clothing ...</span> <span dir=\"ltr\">new fashion casual blazer men cotton slim men&#39;s cloth tops korea style Casual suit blaser masculino male jacket plus size 6xl-in Blazers from Men&#39;s Clothing ...</span> <span dir=\"ltr\">new fashion casual blazer men cotton slim men&#39;s cloth tops korea style Casual suit blaser masculino male jacket plus size 6xl-in Blazers from Men&#39;s Clothing ...</span></p>', 'product-image/blazer.jpg', 1, '2018-10-24 10:26:36', '2018-10-24 10:26:36'),
(20, 9, 22, 'Big brand', 2000.00, 100, 'Big Brand Name High quality with soft nap man clothing Leisure coat Classic men\'s jacket a', '<p>Welcome our store at first! In China, There is an old saying...The higher the price, the better the quality of the goods!Our store&#39;s each product are ensure quality,and also the good price!&nbsp;</p>\r\n\r\n<p>We cherish every customer and will give you a satisfying answer after you receive our products.We are sincere to cooperate to you and want to build long-term business.I believe you could make positive comment for the goods.All the products have rich stock,plz don&#39;t worry to place any order.</p>', 'product-image/Big brand.jpg', 1, '2018-10-24 10:39:02', '2018-10-24 10:39:02'),
(21, 9, 23, 'pajamas', 1200.00, 560, 'Couple pajamas set winter men womens pajamas nightdresses home cloth plus size cheap dressing gown bath', '<h1>Couple pajamas set winter men womens pajamas nightdresses home cloth plus size cheap dressing gown bath man brand clothing 1552</h1>\r\n\r\n<h1>Couple pajamas set winter men womens pajamas nightdresses home cloth plus size cheap dressing gown bath man brand clothing 1552</h1>\r\n\r\n<h1>Couple pajamas set winter men womens pajamas nightdresses home cloth plus size cheap dressing gown bath man brand clothing 1552</h1>\r\n\r\n<h1>Couple pajamas set winter men womens pajamas nightdresses home cloth plus size cheap dressing gown bath man brand clothing 1552</h1>\r\n\r\n<p>&nbsp;</p>', 'product-image/pajamas.jpg', 1, '2018-10-24 10:50:15', '2018-10-24 10:50:15'),
(22, 12, 2, 'p7', 12000.00, 300, 'Symphony P7 Dual SIM 13MP 8MP 2GB RAM 5.3\" Mobile Price Bangladesh ...\r\nBdstall\r\nSymphony P7 Dual SIM 13MP 8MP 2GB RAM 5.3\" Mobile', '<h2>Description</h2>\r\n\r\n<p>Symphony P7 cell phone has quad core processor, 16GB built-in memory, 13MP back and 8MP front mobile camera, 5.3 inch display, full HD video resolution, android, dual SIM and 2GB RAM.</p>\r\n\r\n<table border=\"0\" cellpadding=\"0\" cellspacing=\"0\" style=\"width:607px\">\r\n	<tbody>\r\n		<tr>\r\n			<td>&nbsp;</td>\r\n			<td>Dual SIM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Display</td>\r\n			<td>5.3&rdquo; HD IPS 2.5D Display</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Built In Memory</td>\r\n			<td>16 GB ROM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>External Memory</td>\r\n			<td>Up to 64 GB</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GPRS/EDGE</td>\r\n			<td>Yes</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Bluetooth</td>\r\n			<td>Yes, V4.0</td>\r\n		</tr>\r\n		<tr>\r\n			<td>USB</td>\r\n			<td>USB 2.0</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Camera</td>\r\n			<td>13MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Front Camera</td>\r\n			<td>8MP</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Video</td>\r\n			<td>1080p</td>\r\n		</tr>\r\n		<tr>\r\n			<td>OS</td>\r\n			<td>Android Marshmallow 6.0</td>\r\n		</tr>\r\n		<tr>\r\n			<td>CPU</td>\r\n			<td>1.3 GHz Quad Core</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GPU</td>\r\n			<td>Mali400 MP2</td>\r\n		</tr>\r\n		<tr>\r\n			<td>RAM</td>\r\n			<td>2 GB RAM</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Sensors</td>\r\n			<td>G-Sensor, Accelerometer, Proximity, Light</td>\r\n		</tr>\r\n		<tr>\r\n			<td>GPS</td>\r\n			<td>Yes</td>\r\n		</tr>\r\n		<tr>\r\n			<td>FM Radio</td>\r\n			<td>Yes</td>\r\n		</tr>\r\n	</tbody>\r\n</table>', 'product-image/p7.jpg', 1, '2018-10-25 09:23:56', '2018-10-25 09:23:56'),
(23, 12, 2, 'Xplorer zv', 12990.00, 2300, 'Symphony Xplorer ZV\r\nSymphony Xplorer ZV is another prime quality device from Symphony mobile with ultra-fast octa core processor, 2 GB RAM, Republic of Mali 450 GPU, thirteen MP primary camera, five in. IPS show etc. As a replacement and innovation feature, it contains a dragontail shut in the show for additional', '<h2>Description</h2>\r\n\r\n<h2>Symphony Xplorer ZV</h2>\r\n\r\n<p>2G&nbsp;&nbsp; &nbsp;GSM 850 / 900 / 1800 / 1900 MHz<br />\r\n3G&nbsp;&nbsp; &nbsp;HSDPA 900 / 2100 MHz<br />\r\n4G&nbsp;&nbsp; &nbsp;Not Supported<br />\r\nSIM&nbsp;&nbsp; &nbsp;Dual SIM (Dual stand-by)<br />\r\nBody Dimension&nbsp;&nbsp; &nbsp;140 x 70 x 7.9 mm<br />\r\nWeight&nbsp;&nbsp; &nbsp;No official data<br />\r\nDisplay Type&nbsp;&nbsp; &nbsp;IPS HD (Dragontrail Glass) capacitive touchscreen, 16M colors<br />\r\nSize&nbsp;&nbsp; &nbsp;1280 x 720 pixels, 5.0 inches (~220 ppi pixel density)<br />\r\nProtection&nbsp;&nbsp; &nbsp;Dragontrail Glass (on front), Corning Gorilla Glass (on back)<br />\r\nMultitouch&nbsp;&nbsp; &nbsp;Yes<br />\r\nPrimary Camera&nbsp;&nbsp; &nbsp;13 MP, 4128 x 3096 pixels, autofocus, Flash light, Up to 4X zoom, Sony sensor<br />\r\nSecondary&nbsp;&nbsp; &nbsp;Yes, 2 MP<br />\r\nVideo&nbsp;&nbsp; &nbsp;Yes, 1080p @ 30fps<br />\r\nCard&nbsp;&nbsp; &nbsp;MicroSD, up to 32 GB<br />\r\nRAM&nbsp;&nbsp; &nbsp;2 GB<br />\r\nROM&nbsp;&nbsp; &nbsp;16 GB<br />\r\nGPRS&nbsp;&nbsp; &nbsp;Yes<br />\r\nEDGE&nbsp;&nbsp; &nbsp;Yes<br />\r\nWLAN&nbsp;&nbsp; &nbsp;Wi-Fi 802.11 b/g/n, hotspot<br />\r\nBluetooth&nbsp;&nbsp; &nbsp;Yes, v4.0<br />\r\nUSB&nbsp;&nbsp; &nbsp;microUSB v2.0<br />\r\nOTG&nbsp;&nbsp; &nbsp;No<br />\r\nNFC&nbsp;&nbsp; &nbsp;No<br />\r\nOS&nbsp;&nbsp; &nbsp;Android OS, v4.4.2 (KitKat)<br />\r\nChipset&nbsp;&nbsp; &nbsp;No official data<br />\r\nCPU&nbsp;&nbsp; &nbsp;1.4 GHz Octa Core Processor<br />\r\nGPU&nbsp;&nbsp; &nbsp;Mali-450 MP4<br />\r\nSensor&nbsp;&nbsp; &nbsp;G-Sensor, Proximity Sensor, Light Sensor, Accelerometer Sensor<br />\r\nRadio&nbsp;&nbsp; &nbsp;FM Radio<br />\r\nGPS&nbsp;&nbsp; &nbsp;Yes, with A-GPS<br />\r\nJava&nbsp;&nbsp; &nbsp;Yes, via Java MIDP emulator<br />\r\nColor&nbsp;&nbsp; &nbsp;Black<br />\r\nBattery&nbsp;&nbsp; &nbsp;Li-ion 2000 mAh battery<br />\r\nStandby&nbsp;&nbsp; &nbsp;Up to 12 days (depend on phone&nbsp; settings , network)<br />\r\nTalktime&nbsp;&nbsp; &nbsp;Up to 7 hours<br />\r\nMusicplay&nbsp;&nbsp; &nbsp;No official data<br />\r\nOthers&nbsp; Feature of&nbsp;Symphony Xplorer ZV&nbsp; &ndash;&nbsp; Adobe Reader<br />\r\n&ndash; Kingsoft office<br />\r\n&ndash; Touchpal Keyboard<br />\r\n&ndash; Moboplayer, Realplayer<br />\r\n&ndash; Office (word,&nbsp; excel , ppt)<br />\r\n&ndash; eBook<br />\r\n&ndash; Supports Skype video call<br />\r\n&ndash; Browser: HTML:5</p>\r\n\r\n<p><a href=\"http://symphony-mobile.com/product.php?type=new&amp;sort_by=product_name%20asc&amp;page=2\" target=\"_blank\">Symphony Xplorer ZV</a> is another prime quality device from Symphony mobile with ultra-fast octa core processor, 2 GB RAM, Republic of Mali 450 GPU, thirteen MP primary camera, five in. IPS show etc. As a replacement and innovation feature, it contains a dragontail shut in the show for additional protection. It additionally has alkali-aluminosilicate flat solid and OGS technology to create the show additional slim and injury resistant. At the rear facet it&rsquo;s Gorilla gorilla Glass three for vogue and protection. it&rsquo;s sensible battery backup, optical device camera with high resolution and a fine quality front camera for selfies and video line etc. it&rsquo;s the simplest phone out there within the starting of 2015 for the worth. extremely counseled for folks with this budget.</p>', 'product-image/Xplorer zv.jpg', 1, '2018-10-25 09:29:25', '2018-10-27 22:24:14'),
(24, 15, 27, 'iPhone-12', 80000.00, 230, 'Meet iPhone 12 — Apple\r\nHello 5G. A14 Bionic, the fastest smartphone chip ever. Night mode on all cameras. Super Retina XDR display. The first camera ever to record in Dolby Vision....', '<p>1:46</p>\r\n\r\n<p><a href=\"https://www.youtube.com/watch?v=65JrtwtTOdc\" target=\"_blank\"><img alt=\"\" src=\"https://encrypted-tbn2.gstatic.com/faviconV2?url=https://youtube.com&amp;client=VFE&amp;size=32&amp;type=FAVICON&amp;fallback_opts=TYPE,SIZE,URL&amp;nfrp=2\" /></a></p>\r\n\r\n<p><a href=\"https://www.youtube.com/watch?v=65JrtwtTOdc\" target=\"_blank\">YouTube</a></p>\r\n\r\n<p><a href=\"https://www.youtube.com/watch?v=65JrtwtTOdc\" target=\"_blank\">Meet iPhone 12 &mdash; Apple</a></p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<p>Uploaded by:&nbsp;Apple,&nbsp;Oct 13, 2020</p>\r\n\r\n<p>29M&nbsp;Views&middot;483K&nbsp;Likes</p>\r\n\r\n<p>Hello 5G. A14 Bionic, the fastest smartphone chip ever. Night mode on all cameras. Super Retina XDR display. The first camera ever to record in Dolby Vision....</p>', 'product-image/iPhone-12.jpg', 1, '2018-10-25 09:33:12', '2021-07-03 00:05:57'),
(25, 7, 19, 'cricket bat', 5000.00, 10230, 'Tamim Iqbal bat is very nice for me.', '<p>I like Tamim Iqbal.He is great player in bangladesh.Bangladesh cricket depends on his good batting. when he fall wicket,then bangladesh face a greate batting problem.I feel heart when he fall injury. I feel happy when he take a half century or century.</p>', 'product-image/cricket bat.jpg', 1, '2018-10-27 21:39:18', '2018-10-31 22:06:38'),
(26, 7, 6, 'ladies', 15000.00, 3, 'Play well', '<p>I don&#39;t like&nbsp; plya to girls hockey. Because it is very overtake playing to islamic role.So i think its&nbsp; avoidable play grils hockey for good islam .</p>', 'product-image/ladies.jpg', 1, '2018-11-05 09:04:10', '2018-11-05 09:06:31'),
(27, 2, 7, 'pulser-150', 150000.00, 25, 'well', '<p>very nice!</p>', 'product-image/pulser-150.jpg', 1, '2021-06-26 21:00:41', '2021-06-27 03:48:04'),
(28, 15, 24, 'HP Y0N84AA Core i7 7th', 192000.00, 6, 'HP Omen Y0N84AA Core i7 7th Gen Gaming Desktop PC', '<p><a href=\"https://www.startech.com.bd/hp-omen-i7-desktop-pc\"><img alt=\"HP Omen Y0N84AA Core i7 7th Gen Gaming Desktop PC\" src=\"https://www.startech.com.bd/image/cache/catalog/desktop-pc/hp-pc/ryzen-pc/omen-1-228x228.jpg\" style=\"height:228px; width:228px\" /></a></p>\r\n\r\n<p><a href=\"https://www.startech.com.bd/hp-omen-i7-desktop-pc\">HP Omen Y0N84AA Core i7 7th Gen Gaming Desktop PC</a></p>\r\n\r\n<ul>\r\n	<li>Intel Core i7-7700K (4.2 GHz up to 4.5 GHz, 8 MB cache)</li>\r\n	<li>16 GB DDR4 (2 x 8 GB) RAM</li>\r\n	<li>1 TB SATA; 128 GB M.2 SSD</li>\r\n	<li>NVIDIA GeForce&reg; GTX 1070 8GB GFX</li>\r\n</ul>', 'product-image/HP Y0N84AA Core i7 7th.jpg', 1, '2021-07-02 23:46:27', '2021-07-02 23:46:27'),
(29, 15, 24, 'HP ProDesk 600 G5 MT', 61000.00, 9, 'HP ProDesk 600 G5 MT Core i7 9th Gen Micro Tower Brand PC', '<p><a href=\"https://www.startech.com.bd/hp-prodesk-600-g5-mt-i7-brand-pc\"><img alt=\"HP ProDesk 600 G5 MT Core i7 9th Gen Micro Tower Brand PC\" src=\"https://www.startech.com.bd/image/cache/catalog/desktop-pc/hp-pc/400-g5/400-g5-500x500-228x228.jpg\" style=\"height:228px; width:228px\" /></a></p>\r\n\r\n<p><a href=\"https://www.startech.com.bd/hp-prodesk-600-g5-mt-i7-brand-pc\">HP ProDesk 600 G5 MT Core i7 9th Gen Micro Tower Brand PC</a></p>\r\n\r\n<ul>\r\n	<li>Intel 9th Gen Core i7 9700 Processor (12MB cache, 3.00GHz up to 4.70GHz)</li>\r\n	<li>8GB DDR4 RAM-2666MHz</li>\r\n	<li>1 TB SATA-7200rpm HDD</li>\r\n</ul>', 'product-image/HP ProDesk 600 G5 MT.jpg', 1, '2021-07-02 23:49:32', '2021-07-02 23:49:32'),
(30, 15, 27, 'I3,i5 Apple IMac Desktop Computer', 150000.00, 10, 'I3,i5 Apple IMac Desktop Computer, Macos, Screen Size: 21.5 inch', '<h1>I3,i5 Apple IMac Desktop Computer, Macos, Screen Size: 21.5 inch</h1>\r\n\r\n<p><img alt=\"I3,i5 Apple IMac Desktop Computer, Macos, Screen Size: 21.5 inch\" src=\"https://5.imimg.com/data5/HT/LA/VC/SELLER-12188422/apple-imac-desktop-computer-500x500.jpg\" /></p>\r\n\r\n<h1>I3,i5 Apple IMac Desktop Computer, Macos, Screen Size: 21.5 inch</h1>\r\n\r\n<p>₹ 69,999&nbsp;Get Latest Price</p>\r\n\r\n<table>\r\n	<tbody>\r\n		<tr>\r\n			<td>Brand</td>\r\n			<td>Apple</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Operating System</td>\r\n			<td>macOS</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Screen Size</td>\r\n			<td>21.5 inch</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Processor Type</td>\r\n			<td>i3,i5</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Display</td>\r\n			<td>Retina 4K display</td>\r\n		</tr>\r\n		<tr>\r\n			<td>Audio</td>\r\n			<td>Stereo speakers, Microphone, 3.5mm headphone jack, Support for Apple iPhone headset with microphone</td>\r\n		</tr>\r\n	</tbody>\r\n</table>\r\n\r\n<p>View Complete Details</p>', 'product-image/I3,i5 Apple IMac Desktop Computer.jpg', 1, '2021-07-02 23:56:09', '2021-07-02 23:56:09'),
(31, 15, 27, 'Apple Macintosh', 175000.00, 12, 'Apple Macintosh\r\nFrom Simple English Wikipedia, the free encyclopedia', '<p><a href=\"https://simple.wikipedia.org/wiki/File:IMac_vector.svg\"><img alt=\"\" src=\"https://upload.wikimedia.org/wikipedia/commons/thumb/e/e6/IMac_vector.svg/220px-IMac_vector.svg.png\" style=\"height:182px; width:220px\" /></a></p>\r\n\r\n<p>An&nbsp;<a href=\"https://simple.wikipedia.org/wiki/IMac\">iMac</a>. Unlike most computers, it has a computer system with the screen inside it.</p>\r\n\r\n<p>The&nbsp;<strong>Apple Macintosh</strong>&nbsp;or just &ldquo;Mac&rdquo; is a line of&nbsp;<a href=\"https://simple.wikipedia.org/wiki/Personal_computer\">personal computers</a>&nbsp;made by the American company&nbsp;<a href=\"https://simple.wikipedia.org/wiki/Apple_Inc.\">Apple Inc</a>. The Macintosh was one of the first computers in which the people could use a mouse for pointing on a screen which had icons. This new way of working with a computer (<a href=\"https://simple.wikipedia.org/wiki/Interface\">interface</a>) was known as&nbsp;<a href=\"https://simple.wikipedia.org/wiki/Graphical_user_interfaces_and_consoles\">graphical user interface</a>. It was this feature of the Macintosh that made it so popular.</p>\r\n\r\n<p>&nbsp;</p>\r\n\r\n<h2>Contents</h2>\r\n\r\n<ul>\r\n	<li><a href=\"https://simple.wikipedia.org/wiki/Apple_Macintosh#History\">1History</a>\r\n\r\n	<ul>\r\n		<li><a href=\"https://simple.wikipedia.org/wiki/Apple_Macintosh#Processor_history\">1.1Processor history</a></li>\r\n	</ul>\r\n	</li>\r\n	<li><a href=\"https://simple.wikipedia.org/wiki/Apple_Macintosh#Macintoshes\">2Macintoshes</a>\r\n	<ul>\r\n		<li><a href=\"https://simple.wikipedia.org/wiki/Apple_Macintosh#Software\">2.1Software</a></li>\r\n	</ul>\r\n	</li>\r\n	<li><a href=\"https://simple.wikipedia.org/wiki/Apple_Macintosh#Related_pages\">3Related pages</a></li>\r\n	<li><a href=\"https://simple.wikipedia.org/wiki/Apple_Macintosh#References\">4References</a></li>\r\n</ul>\r\n\r\n<h2>History</h2>', 'product-image/Apple Macintosh.jpg', 0, '2021-07-02 23:59:50', '2021-07-02 23:59:50');

-- --------------------------------------------------------

--
-- Table structure for table `shippings`
--

CREATE TABLE `shippings` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `full_name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `phone_number` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `address` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `shippings`
--

INSERT INTO `shippings` (`id`, `full_name`, `email`, `phone_number`, `address`, `created_at`, `updated_at`) VALUES
(1, 'MD Ullah', 'asulymoon84@gmail.com', '01301438420', 'Noakhali,subarnachar', '2021-07-01 02:20:29', '2021-07-01 02:20:29'),
(2, 'MD fs', 'mdsayedarif84@gmail.com', '01634173029', 'Noakhali,subarnachar', '2021-07-01 19:57:24', '2021-07-01 19:57:24'),
(3, 'MD Taohid', 'asulymoon84@gmail.com', '01301438420', 'Noakhali,subarnachar', '2021-07-02 20:00:52', '2021-07-02 20:00:52'),
(4, 'Fairya Islam', 'fsjhilmil84@gmail.com', '01855479190', 'Noakhali,Aju Market', '2021-07-02 23:14:49', '2021-07-02 23:14:49'),
(5, 'Kuddus Ali', 'fsjhilmil84@gmail.com', '01855479190', 'Noakhali, Khasher Hat', '2021-07-03 00:52:22', '2021-07-03 00:52:22');

-- --------------------------------------------------------

--
-- Table structure for table `shoppingcart`
--

CREATE TABLE `shoppingcart` (
  `identifier` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `instance` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `content` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(10) UNSIGNED NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(150) COLLATE utf8mb4_unicode_ci NOT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
(2, 'SuperAdmin', 'superadmin84@yahoo.com', '$2y$10$.B1oqTcRptvjqS/nsVDDrOxqDi6xtjX4.mt/7MCpSOHNE3qe4hRaC', NULL, '2021-06-21 07:19:53', '2021-06-21 07:19:53'),
(3, 'Super2', 'super84@yahoo.com', '$2y$10$rVCMTVN9CRYnMj73N3LFX.Ybmm1aSupl2qoRB1K2zbU1qFTZKwJp6', 'xFmDtjxY7R8GnZoYqfKtdZYWuTTvYaqwpS4S65P04jQs1artFGmn0RzAPIna', '2021-06-21 10:35:43', '2021-06-21 10:35:43'),
(4, 'Admin3', 'admin84@blogs.com', '$2y$10$N03yYboPjY8J5mxcwmvSLeMR0yvtai6maC43.UnwWqwMZXcWNwIJm', NULL, '2021-06-21 22:00:50', '2021-06-21 22:00:50');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `brands`
--
ALTER TABLE `brands`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `categories`
--
ALTER TABLE `categories`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `customers`
--
ALTER TABLE `customers`
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
-- Indexes for table `orders`
--
ALTER TABLE `orders`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `order_details`
--
ALTER TABLE `order_details`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `password_resets`
--
ALTER TABLE `password_resets`
  ADD KEY `password_resets_email_index` (`email`);

--
-- Indexes for table `payments`
--
ALTER TABLE `payments`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `products`
--
ALTER TABLE `products`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shippings`
--
ALTER TABLE `shippings`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `shoppingcart`
--
ALTER TABLE `shoppingcart`
  ADD PRIMARY KEY (`identifier`,`instance`);

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
-- AUTO_INCREMENT for table `brands`
--
ALTER TABLE `brands`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=28;

--
-- AUTO_INCREMENT for table `categories`
--
ALTER TABLE `categories`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=16;

--
-- AUTO_INCREMENT for table `customers`
--
ALTER TABLE `customers`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=39;

--
-- AUTO_INCREMENT for table `failed_jobs`
--
ALTER TABLE `failed_jobs`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=26;

--
-- AUTO_INCREMENT for table `orders`
--
ALTER TABLE `orders`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `order_details`
--
ALTER TABLE `order_details`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;

--
-- AUTO_INCREMENT for table `payments`
--
ALTER TABLE `payments`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=7;

--
-- AUTO_INCREMENT for table `products`
--
ALTER TABLE `products`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=32;

--
-- AUTO_INCREMENT for table `shippings`
--
ALTER TABLE `shippings`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
