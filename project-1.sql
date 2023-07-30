-- phpMyAdmin SQL Dump
-- version 5.2.0
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Generation Time: Jul 29, 2023 at 08:48 PM
-- Server version: 10.4.27-MariaDB
-- PHP Version: 8.0.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `project-1`
--

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
(5, '2014_10_12_000000_create_users_table', 1),
(6, '2014_10_12_100000_create_password_resets_table', 1),
(7, '2019_08_19_000000_create_failed_jobs_table', 1),
(8, '2019_12_14_000001_create_personal_access_tokens_table', 1),
(9, '2023_07_21_190629_create_role', 1),
(10, '2023_07_21_190759_create_page', 1);

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
-- Table structure for table `tbl_menu`
--

CREATE TABLE `tbl_menu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) NOT NULL,
  `link` varchar(200) NOT NULL,
  `route` varchar(255) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp()
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;

--
-- Dumping data for table `tbl_menu`
--

INSERT INTO `tbl_menu` (`id`, `name`, `link`, `route`, `created_at`) VALUES
(1, 'MANAGE USERS', '/admin/user/list', 'info.list', '2023-07-29 18:06:45'),
(2, 'MANAGE ROLES', '/admin/role/list', 'roles.list', '2023-07-29 18:11:37'),
(3, 'MANAGE PAGE', '/admin/page/list', 'page.list', '2023-07-29 18:11:57'),
(4, 'MANAGE MENU', '/admin/menu/list', 'page.menu', '2023-07-29 18:12:13');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_page`
--

CREATE TABLE `tbl_page` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `banner_image` varchar(255) NOT NULL,
  `banner_title` varchar(255) NOT NULL,
  `content` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_page`
--

INSERT INTO `tbl_page` (`id`, `name`, `banner_image`, `banner_title`, `content`, `created_at`, `updated_at`) VALUES
(1, 'Home', '2023-07-21-21-33-26-1689975206213.jpg', 'Home', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque. Quaerat provident commodi consectetur veniam similique ad earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam quasi aliquam eligendi, placeat qui corporis!</p>', NULL, '2023-07-28 01:52:41'),
(2, 'About', '2023-07-22-19-51-02-1690055462198.jpg', 'About us', '<h1>Lorem Ipsum</h1>\r\n\r\n<h4>&quot;Neque porro quisquam est qui dolorem ipsum quia dolor sit amet, consectetur, adipisci velit...&quot;</h4>\r\n\r\n<h5>&quot;There is no one who loves pain itself, who seeks after it and wants to have it, simply because it is pain...&quot;</h5>\r\n\r\n<hr />\r\n<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fusce orci elit, dapibus eu lacus ac, venenatis sagittis massa. Vestibulum malesuada elementum velit, id varius risus porttitor id. Pellentesque sagittis turpis id blandit dignissim. Fusce ut ipsum sed nisi dapibus dapibus. Quisque interdum justo vitae orci venenatis, porta luctus risus egestas. Vestibulum semper lacus sit amet mauris laoreet mollis. Nunc egestas eu diam eget bibendum. Aliquam bibendum leo vitae condimentum bibendum. Praesent interdum magna risus, ut ultrices massa iaculis fringilla. Donec vitae ex augue. Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed eget eros tellus.</p>\r\n\r\n<p>Vestibulum vulputate mauris eu ligula mollis ullamcorper. Nullam euismod venenatis nibh nec congue. Nulla eu sapien sit amet elit blandit condimentum quis ac arcu. Morbi felis orci, imperdiet et purus sed, molestie consectetur tortor. Nullam accumsan mauris ut dignissim vestibulum. Proin semper lectus vel imperdiet iaculis. Suspendisse quis varius urna. Suspendisse convallis libero felis, quis scelerisque magna posuere id. Integer justo neque, auctor vitae leo feugiat, finibus dapibus ex. Nullam sed urna at ante ullamcorper suscipit. Nam ultrices dignissim justo, id vehicula eros condimentum sit amet.</p>\r\n\r\n<p>Interdum et malesuada fames ac ante ipsum primis in faucibus. Nam vitae aliquam ipsum. Aenean sed laoreet turpis. Sed ac lectus consequat, rutrum tellus laoreet, hendrerit tortor. Sed condimentum sit amet leo a malesuada. Nullam lacinia vestibulum ipsum, et dapibus urna rutrum ac. Maecenas ut congue tellus, non interdum massa. Cras pretium felis libero, vitae varius dui efficitur quis. Nullam facilisis ex nec lorem porta, in tincidunt arcu malesuada. Vestibulum ut sapien fermentum, gravida leo vitae, rhoncus ex. Duis aliquet metus at faucibus dignissim. In volutpat, felis ut dignissim imperdiet, orci velit viverra felis, sed dignissim leo nisl pharetra neque. Nulla condimentum maximus laoreet. Ut at volutpat justo. Vivamus magna tortor, iaculis id erat id, feugiat pulvinar quam. Proin sit amet neque eget libero malesuada sollicitudin.</p>\r\n\r\n<p>Curabitur ullamcorper ex vel enim sollicitudin sagittis. Sed lacinia id nisi vel varius. Aliquam erat volutpat. Integer placerat condimentum arcu in porttitor. Praesent eget nibh in purus egestas pulvinar et vel diam. Vivamus ullamcorper arcu et molestie consectetur. Quisque maximus libero sodales, euismod felis id, dictum libero. Cras tempus nunc mauris, in scelerisque massa tristique ac. Sed felis purus, tempus at consectetur eu, interdum eget eros. Fusce iaculis sollicitudin sollicitudin. Nullam egestas sagittis nisi non consectetur. Vivamus viverra augue sed libero condimentum blandit convallis a mi. Mauris urna mauris, facilisis id risus lacinia, mattis condimentum sem. Aliquam in urna sed velit pretium cursus.</p>\r\n\r\n<p>Ut eu justo sed elit placerat malesuada sit amet in quam. Nulla in mollis lectus. Vivamus imperdiet auctor sagittis. Phasellus cursus mi nibh, sit amet dignissim ex mattis viverra. Phasellus interdum neque at elit pharetra fermentum. Nam scelerisque quis mi sagittis egestas. Suspendisse euismod nisi nisl, nec sollicitudin massa ullamcorper vitae. Morbi tristique a lectus vel maximus. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.</p>\r\n\r\n<p>Generated 5 paragraphs, 479 words, 3315 bytes of&nbsp;<a href=\"https://www.lipsum.com/\" title=\"Lorem Ipsum\">Lorem Ipsum</a></p>\r\n\r\n<hr />\r\n<p><a href=\"mailto:help@lipsum.com\">help@lipsum.com</a><br />\r\n<a href=\"https://www.lipsum.com/privacy\" rel=\"nofollow\">Privacy Policy</a>&nbsp;&middot;&nbsp;Do Not Sell My Personal Information&nbsp;&middot;&nbsp;Change Consent</p>', NULL, NULL),
(3, 'Contact', '2023-07-28-07-53-56-1690530836225.png', 'GET IN TOUCH WITH US', '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Maxime mollitia, molestiae quas vel sint commodi repudiandae consequuntur voluptatum laborum numquam blanditiis harum quisquam eius sed odit fugiat iusto fuga praesentium optio, eaque rerum! Provident similique accusantium nemo autem. Veritatis obcaecati tenetur iure eius earum ut molestias architecto voluptate aliquam nihil, eveniet aliquid culpa officia aut! Impedit sit sunt quaerat, odit, tenetur error, harum nesciunt ipsum debitis quas aliquid. Reprehenderit, quia. Quo neque error repudiandae fuga? Ipsa laudantium molestias eos sapiente officiis modi at sunt excepturi expedita sint? Sed quibusdam recusandae alias error harum maxime adipisci amet laborum. Perspiciatis minima nesciunt dolorem! Officiis iure rerum voluptates a cumque velit quibusdam sed amet tempora. Sit laborum ab, eius fugit doloribus tenetur fugiat, temporibus enim commodi iusto libero magni deleniti quod quam consequuntur! Commodi minima excepturi repudiandae velit hic maxime doloremque. Quaerat provident commodi consectetur veniam similique ad earum omnis ipsum saepe, voluptas, hic voluptates pariatur est explicabo fugiat, dolorum eligendi quam cupiditate excepturi mollitia maiores labore suscipit quas? Nulla, placeat. Voluptatem quaerat non architecto ab laudantium modi minima sunt esse temporibus sint culpa, recusandae aliquam numquam totam ratione voluptas quod exercitationem fuga. Possimus quis earum veniam quasi aliquam eligendi, placeat qui corporis!</p>', NULL, NULL);

-- --------------------------------------------------------

--
-- Table structure for table `tbl_role`
--

CREATE TABLE `tbl_role` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `access` text NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `tbl_role`
--

INSERT INTO `tbl_role` (`id`, `name`, `access`, `created_at`, `updated_at`) VALUES
(1, 'Admin', 'user.create, user.list, user.edit, user.delete, role.create, role.list, role.edit, role.delete, page.create, page.list, page.edit, page.delete, menu.create, menu.list, menu.edit, menu.delete, info.list', NULL, '2023-07-29 12:45:18');

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` bigint(20) UNSIGNED NOT NULL,
  `name` varchar(255) NOT NULL,
  `username` varchar(255) NOT NULL,
  `email` varchar(255) NOT NULL,
  `role_id` int(11) NOT NULL,
  `last_login` timestamp NULL DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `name`, `username`, `email`, `role_id`, `last_login`, `password`, `created_at`, `updated_at`) VALUES
(1, 'admin', 'admin', 'admin@gmail.com', 1, '2023-07-29 12:00:27', '$2y$10$DFuvIAm7xiy/2GDx7dgrLONg8IzV/yzdzHm7s5F.GtWIaaOCZ44yS', NULL, '2023-07-29 12:00:27');

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
-- Indexes for table `migrations`
--
ALTER TABLE `migrations`
  ADD PRIMARY KEY (`id`);

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
-- Indexes for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_page`
--
ALTER TABLE `tbl_page`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_role`
--
ALTER TABLE `tbl_role`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `tbl_role_name_unique` (`name`);

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
-- AUTO_INCREMENT for table `migrations`
--
ALTER TABLE `migrations`
  MODIFY `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;

--
-- AUTO_INCREMENT for table `personal_access_tokens`
--
ALTER TABLE `personal_access_tokens`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_menu`
--
ALTER TABLE `tbl_menu`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_page`
--
ALTER TABLE `tbl_page`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;

--
-- AUTO_INCREMENT for table `tbl_role`
--
ALTER TABLE `tbl_role`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=6;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` bigint(20) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;