-- phpMyAdmin SQL Dump
-- version 5.1.0
-- https://www.phpmyadmin.net/
--
-- Host: localhost:3306
-- Generation Time: Jul 11, 2021 at 05:13 AM
-- Server version: 5.7.24
-- PHP Version: 7.4.19

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `db_csiproduk`
--

-- --------------------------------------------------------

--
-- Table structure for table `groups`
--

CREATE TABLE `groups` (
  `id` mediumint(8) UNSIGNED NOT NULL,
  `name` varchar(20) NOT NULL,
  `description` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `groups`
--

INSERT INTO `groups` (`id`, `name`, `description`) VALUES
(1, 'admin', 'Administrator'),
(2, 'manajemen', 'Manajemen');

-- --------------------------------------------------------

--
-- Table structure for table `login_attempts`
--

CREATE TABLE `login_attempts` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `login` varchar(100) NOT NULL,
  `time` int(11) UNSIGNED DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_customers`
--

CREATE TABLE `tbl_customers` (
  `customer_id` int(11) NOT NULL,
  `customer_token` varchar(100) NOT NULL,
  `customer_name` varchar(100) NOT NULL,
  `customer_profession` varchar(50) NOT NULL,
  `customer_hp` varchar(15) NOT NULL,
  `customer_gender` enum('L','P') NOT NULL,
  `customer_ip` varchar(15) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_customers`
--

INSERT INTO `tbl_customers` (`customer_id`, `customer_token`, `customer_name`, `customer_profession`, `customer_hp`, `customer_gender`, `customer_ip`, `created_at`) VALUES
(6, '27267228990701570', 'Moh. Yahya', 'Mahasiswa', '089656729026', 'L', '127.0.0.1', '2021-07-02 20:03:54'),
(7, '27267228990701571', 'Yahya', 'Pelajar', '089656729028', 'L', '127.0.0.1', '2021-07-02 20:25:19');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_indikator_penilaian`
--

CREATE TABLE `tbl_indikator_penilaian` (
  `id_indikator` int(11) NOT NULL,
  `indikator_name` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_indikator_penilaian`
--

INSERT INTO `tbl_indikator_penilaian` (`id_indikator`, `indikator_name`) VALUES
(1, 'Apa sajaha'),
(2, 'Biasa Saja');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_indikator_pertanyaan`
--

CREATE TABLE `tbl_indikator_pertanyaan` (
  `id_pertanyaan` int(11) NOT NULL,
  `id_indikator` int(11) NOT NULL,
  `pertanyaan` text NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_indikator_pertanyaan`
--

INSERT INTO `tbl_indikator_pertanyaan` (`id_pertanyaan`, `id_indikator`, `pertanyaan`, `created_at`, `updated_at`) VALUES
(1, 1, 'AAA', '2021-07-02 20:19:54', '2021-07-02 20:19:54'),
(2, 2, 'BBB', '2021-07-02 20:51:07', '2021-07-02 20:51:07');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_perusahaan`
--

CREATE TABLE `tbl_perusahaan` (
  `id_profile_perusahaan` int(11) NOT NULL,
  `nama_perusahaan` varchar(100) NOT NULL,
  `logo` varchar(100) NOT NULL,
  `telp` varchar(15) NOT NULL,
  `fax` varchar(15) NOT NULL,
  `email` varchar(100) NOT NULL,
  `website` varchar(100) NOT NULL,
  `alamat` text NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_perusahaan`
--

INSERT INTO `tbl_perusahaan` (`id_profile_perusahaan`, `nama_perusahaan`, `logo`, `telp`, `fax`, `email`, `website`, `alamat`) VALUES
(1, 'Padi Kapas', '1.jpg', '089656729025', '089657290000', 'inikangyahya@gmail.com', 'csi_produk.com', '<p>Blok Dukuh Krupuk Kenanga, Panyindangan Wetan,</p>\r\n\r\n<p>Kec. Indramayu, Kab. Indramayu,</p>\r\n\r\n<p>Jawa Barat</p>\r\n');

-- --------------------------------------------------------

--
-- Table structure for table `tbl_product`
--

CREATE TABLE `tbl_product` (
  `product_id` int(11) NOT NULL,
  `product_name` varchar(100) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `updated_at` timestamp NOT NULL,
  `product_slug` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_respon`
--

CREATE TABLE `tbl_respon` (
  `respon_id` int(11) NOT NULL,
  `customer_id` int(11) NOT NULL,
  `id_indikator` int(11) NOT NULL,
  `id_pertanyaan` int(11) NOT NULL,
  `respon_perception_answer` int(11) NOT NULL,
  `respon_reality_answer` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `tbl_users`
--

CREATE TABLE `tbl_users` (
  `id_users` int(11) NOT NULL,
  `nickname` varchar(100) NOT NULL,
  `email` varchar(150) NOT NULL,
  `username` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `user_image` varchar(150) NOT NULL DEFAULT 'default.png',
  `user_groups_id` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  `is_deleted` enum('0','1') NOT NULL,
  `last_login` timestamp NOT NULL,
  `login_count` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tbl_users`
--

INSERT INTO `tbl_users` (`id_users`, `nickname`, `email`, `username`, `password`, `user_image`, `user_groups_id`, `created_at`, `is_deleted`, `last_login`, `login_count`) VALUES
(1, 'Kidew', 'kidew@gmail.com', 'kidew', '$2y$10$i2uYWGZNxqRTIgQ4crEBsO.ezqnUmSy7hWXrvLjuogOx3U0kHE/xO', 'default.png', 1, '0000-00-00 00:00:00', '0', '2021-06-16 20:19:23', 36),
(4, 'Kang Yahya', 'inikangyahya@gmail.com', 'kang', '$2y$10$gAopq.GQ7PHFpe04RTcK...6hRo6zIrnui.v0l2L8xXldha0mYs3S', 'default.png', 2, '2021-06-17 03:20:16', '1', '2021-07-03 11:18:13', 4);

-- --------------------------------------------------------

--
-- Table structure for table `users`
--

CREATE TABLE `users` (
  `id` int(11) UNSIGNED NOT NULL,
  `ip_address` varchar(45) NOT NULL,
  `username` varchar(100) DEFAULT NULL,
  `password` varchar(255) NOT NULL,
  `email` varchar(254) NOT NULL,
  `activation_selector` varchar(255) DEFAULT NULL,
  `activation_code` varchar(255) DEFAULT NULL,
  `forgotten_password_selector` varchar(255) DEFAULT NULL,
  `forgotten_password_code` varchar(255) DEFAULT NULL,
  `forgotten_password_time` int(11) UNSIGNED DEFAULT NULL,
  `remember_selector` varchar(255) DEFAULT NULL,
  `remember_code` varchar(255) DEFAULT NULL,
  `created_on` int(11) UNSIGNED NOT NULL,
  `last_login` int(11) UNSIGNED DEFAULT NULL,
  `active` tinyint(1) UNSIGNED DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `company` varchar(100) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users`
--

INSERT INTO `users` (`id`, `ip_address`, `username`, `password`, `email`, `activation_selector`, `activation_code`, `forgotten_password_selector`, `forgotten_password_code`, `forgotten_password_time`, `remember_selector`, `remember_code`, `created_on`, `last_login`, `active`, `first_name`, `last_name`, `company`, `phone`) VALUES
(1, '127.0.0.1', 'administrator', '$2y$08$200Z6ZZbp3RAEXoaWcMA6uJOFicwNZaqk4oDhqTUiFXFe63MG.Daa', 'admin@admin.com', NULL, '', NULL, NULL, NULL, NULL, NULL, 1268889823, 1268889823, 1, 'Admin', 'istrator', 'ADMIN', '0');

-- --------------------------------------------------------

--
-- Table structure for table `users_groups`
--

CREATE TABLE `users_groups` (
  `id` int(11) UNSIGNED NOT NULL,
  `user_id` int(11) UNSIGNED NOT NULL,
  `group_id` mediumint(8) UNSIGNED NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

--
-- Dumping data for table `users_groups`
--

INSERT INTO `users_groups` (`id`, `user_id`, `group_id`) VALUES
(1, 1, 1),
(2, 1, 2);

--
-- Indexes for dumped tables
--

--
-- Indexes for table `groups`
--
ALTER TABLE `groups`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `login_attempts`
--
ALTER TABLE `login_attempts`
  ADD PRIMARY KEY (`id`);

--
-- Indexes for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  ADD PRIMARY KEY (`customer_id`);

--
-- Indexes for table `tbl_indikator_penilaian`
--
ALTER TABLE `tbl_indikator_penilaian`
  ADD PRIMARY KEY (`id_indikator`);

--
-- Indexes for table `tbl_indikator_pertanyaan`
--
ALTER TABLE `tbl_indikator_pertanyaan`
  ADD PRIMARY KEY (`id_pertanyaan`),
  ADD KEY `id_indikator` (`id_indikator`);

--
-- Indexes for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
  ADD PRIMARY KEY (`id_profile_perusahaan`);

--
-- Indexes for table `tbl_product`
--
ALTER TABLE `tbl_product`
  ADD PRIMARY KEY (`product_id`);

--
-- Indexes for table `tbl_respon`
--
ALTER TABLE `tbl_respon`
  ADD PRIMARY KEY (`respon_id`),
  ADD KEY `customer_id` (`customer_id`),
  ADD KEY `tbl_respon_ibfk_2` (`id_indikator`),
  ADD KEY `tbl_respon_ibfk_3` (`id_pertanyaan`);

--
-- Indexes for table `tbl_users`
--
ALTER TABLE `tbl_users`
  ADD PRIMARY KEY (`id_users`);

--
-- Indexes for table `users`
--
ALTER TABLE `users`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_email` (`email`),
  ADD UNIQUE KEY `uc_activation_selector` (`activation_selector`),
  ADD UNIQUE KEY `uc_forgotten_password_selector` (`forgotten_password_selector`),
  ADD UNIQUE KEY `uc_remember_selector` (`remember_selector`);

--
-- Indexes for table `users_groups`
--
ALTER TABLE `users_groups`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `uc_users_groups` (`user_id`,`group_id`),
  ADD KEY `fk_users_groups_users1_idx` (`user_id`),
  ADD KEY `fk_users_groups_groups1_idx` (`group_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `groups`
--
ALTER TABLE `groups`
  MODIFY `id` mediumint(8) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `login_attempts`
--
ALTER TABLE `login_attempts`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_customers`
--
ALTER TABLE `tbl_customers`
  MODIFY `customer_id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;

--
-- AUTO_INCREMENT for table `tbl_indikator_penilaian`
--
ALTER TABLE `tbl_indikator_penilaian`
  MODIFY `id_indikator` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_indikator_pertanyaan`
--
ALTER TABLE `tbl_indikator_pertanyaan`
  MODIFY `id_pertanyaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- AUTO_INCREMENT for table `tbl_perusahaan`
--
ALTER TABLE `tbl_perusahaan`
  MODIFY `id_profile_perusahaan` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `tbl_product`
--
ALTER TABLE `tbl_product`
  MODIFY `product_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_respon`
--
ALTER TABLE `tbl_respon`
  MODIFY `respon_id` int(11) NOT NULL AUTO_INCREMENT;

--
-- AUTO_INCREMENT for table `tbl_users`
--
ALTER TABLE `tbl_users`
  MODIFY `id_users` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;

--
-- AUTO_INCREMENT for table `users`
--
ALTER TABLE `users`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;

--
-- AUTO_INCREMENT for table `users_groups`
--
ALTER TABLE `users_groups`
  MODIFY `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;

--
-- Constraints for dumped tables
--

--
-- Constraints for table `tbl_indikator_pertanyaan`
--
ALTER TABLE `tbl_indikator_pertanyaan`
  ADD CONSTRAINT `tbl_indikator_pertanyaan_ibfk_1` FOREIGN KEY (`id_indikator`) REFERENCES `tbl_indikator_penilaian` (`id_indikator`) ON DELETE CASCADE ON UPDATE CASCADE;

--
-- Constraints for table `tbl_respon`
--
ALTER TABLE `tbl_respon`
  ADD CONSTRAINT `tbl_respon_ibfk_1` FOREIGN KEY (`customer_id`) REFERENCES `tbl_customers` (`customer_id`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_respon_ibfk_2` FOREIGN KEY (`id_indikator`) REFERENCES `tbl_indikator_penilaian` (`id_indikator`) ON DELETE CASCADE ON UPDATE CASCADE,
  ADD CONSTRAINT `tbl_respon_ibfk_3` FOREIGN KEY (`id_pertanyaan`) REFERENCES `tbl_indikator_pertanyaan` (`id_pertanyaan`) ON DELETE CASCADE ON UPDATE CASCADE;
COMMIT;

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
