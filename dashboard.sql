-- phpMyAdmin SQL Dump
-- version 4.4.12
-- http://www.phpmyadmin.net
--
-- Host: localhost
-- Generation Time: Sep 12, 2017 at 09:36 PM
-- Server version: 5.6.25
-- PHP Version: 5.5.26

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Database: `dashboard`
--

-- --------------------------------------------------------

--
-- Table structure for table `amurang`
--

CREATE TABLE IF NOT EXISTS `amurang` (
  `amurang_id` bigint(20) NOT NULL,
  `amurang_unit` int(11) DEFAULT NULL,
  `amurang_mw` varchar(255) DEFAULT NULL,
  `amurang_mvar` varchar(255) DEFAULT NULL,
  `amurang_waktu` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `amurang`
--

INSERT INTO `amurang` (`amurang_id`, `amurang_unit`, `amurang_mw`, `amurang_mvar`, `amurang_waktu`) VALUES
(1, 1, '0', '0', '2014-10-08 13:55:01'),
(2, 1, '0', '0', '2014-10-08 14:01:06');

-- --------------------------------------------------------

--
-- Table structure for table `asahan`
--

CREATE TABLE IF NOT EXISTS `asahan` (
  `asahan_id` bigint(20) NOT NULL,
  `asahan_unit` int(11) DEFAULT NULL,
  `asahan_mw` varchar(255) DEFAULT NULL,
  `asahan_mvar` varchar(255) DEFAULT NULL,
  `asahan_waktu` datetime DEFAULT NULL
) ENGINE=MyISAM DEFAULT CHARSET=latin1;

-- --------------------------------------------------------

--
-- Table structure for table `duri`
--

CREATE TABLE IF NOT EXISTS `duri` (
  `duri_id` bigint(20) NOT NULL,
  `duri_unit` int(11) DEFAULT NULL,
  `duri_mw` varchar(255) DEFAULT NULL,
  `duri_mvar` varchar(255) DEFAULT NULL,
  `duri_waktu` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `duri`
--

INSERT INTO `duri` (`duri_id`, `duri_unit`, `duri_mw`, `duri_mvar`, `duri_waktu`) VALUES
(1, 1, '14.87', '0.94', '2014-10-08 13:58:32'),
(2, 1, '14.87', '0.94', '2014-10-08 14:01:04');

-- --------------------------------------------------------

--
-- Table structure for table `indramayu`
--

CREATE TABLE IF NOT EXISTS `indramayu` (
  `indramayu_id` bigint(20) NOT NULL,
  `indramayu_unit` int(11) DEFAULT NULL,
  `indramayu_mw` varchar(255) DEFAULT NULL,
  `indramayu_mvar` varchar(255) DEFAULT NULL,
  `indramayu_waktu` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=7 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `indramayu`
--

INSERT INTO `indramayu` (`indramayu_id`, `indramayu_unit`, `indramayu_mw`, `indramayu_mvar`, `indramayu_waktu`) VALUES
(1, 1, '0', '0', '2014-10-08 13:54:09'),
(2, 2, '290.71', '133.351', '2014-10-08 13:54:09'),
(3, 3, '281.727', '127.127', '2014-10-08 13:54:09'),
(4, 1, '0', '0', '2014-10-08 14:00:56'),
(5, 2, '285.599', '135.916', '2014-10-08 14:00:56'),
(6, 3, '280.598', '125.622', '2014-10-08 14:00:56');

-- --------------------------------------------------------

--
-- Table structure for table `muara_karang`
--

CREATE TABLE IF NOT EXISTS `muara_karang` (
  `muara_karang_id` bigint(20) NOT NULL,
  `muara_karang_unit` int(11) DEFAULT NULL,
  `muara_karang_mw` varchar(255) DEFAULT NULL,
  `muara_karang_mvar` varchar(255) DEFAULT NULL,
  `muara_karang_waktu` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=6 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `muara_karang`
--

INSERT INTO `muara_karang` (`muara_karang_id`, `muara_karang_unit`, `muara_karang_mw`, `muara_karang_mvar`, `muara_karang_waktu`) VALUES
(1, 1, '0', '0', '2014-10-08 14:00:15'),
(2, 2, '0', '0', '2014-10-08 14:00:15'),
(3, 3, '0', '0', '2014-10-08 14:00:15'),
(4, 4, '0', '0', '2014-10-08 14:00:15'),
(5, 5, '0', '0', '2014-10-08 14:00:15');

-- --------------------------------------------------------

--
-- Table structure for table `muara_tawar`
--

CREATE TABLE IF NOT EXISTS `muara_tawar` (
  `muara_tawar_id` bigint(20) NOT NULL,
  `muara_tawar_unit` int(11) DEFAULT NULL,
  `muara_tawar_mw` varchar(255) DEFAULT NULL,
  `muara_tawar_mvar` varchar(255) DEFAULT NULL,
  `muara_tawar_waktu` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `muara_tawar`
--

INSERT INTO `muara_tawar` (`muara_tawar_id`, `muara_tawar_unit`, `muara_tawar_mw`, `muara_tawar_mvar`, `muara_tawar_waktu`) VALUES
(1, 1, '0', '0', '2014-10-08 13:54:22'),
(2, 2, '0', '0', '2014-10-08 13:54:22'),
(3, 1, '0', '0', '2014-10-08 14:00:26'),
(4, 2, '0', '0', '2014-10-08 14:00:26');

-- --------------------------------------------------------

--
-- Table structure for table `pacitan`
--

CREATE TABLE IF NOT EXISTS `pacitan` (
  `pacitan_id` bigint(20) NOT NULL,
  `pacitan_unit` int(11) DEFAULT NULL,
  `pacitan_mw` varchar(255) DEFAULT NULL,
  `pacitan_mvar` varchar(255) DEFAULT NULL,
  `pacitan_waktu` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pacitan`
--

INSERT INTO `pacitan` (`pacitan_id`, `pacitan_unit`, `pacitan_mw`, `pacitan_mvar`, `pacitan_waktu`) VALUES
(1, 1, '282.427', '70.03', '2014-10-08 13:55:08'),
(2, 2, '0', '0', '2014-10-08 13:55:08'),
(3, 1, '282.714', '69.053', '2014-10-08 14:00:42'),
(4, 2, '0', '0', '2014-10-08 14:00:42');

-- --------------------------------------------------------

--
-- Table structure for table `paiton`
--

CREATE TABLE IF NOT EXISTS `paiton` (
  `paiton_id` bigint(20) NOT NULL,
  `paiton_unit` int(11) DEFAULT NULL,
  `paiton_mw` varchar(255) DEFAULT NULL,
  `paiton_mvar` varchar(255) DEFAULT NULL,
  `paiton_waktu` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `paiton`
--

INSERT INTO `paiton` (`paiton_id`, `paiton_unit`, `paiton_mw`, `paiton_mvar`, `paiton_waktu`) VALUES
(1, 1, '615.313', '42.161', '2014-10-08 13:51:45'),
(2, 1, '610.579', '40.723', '2014-10-08 14:00:39');

-- --------------------------------------------------------

--
-- Table structure for table `pembangkitan`
--

CREATE TABLE IF NOT EXISTS `pembangkitan` (
  `pembangkitan_id` bigint(20) NOT NULL,
  `pembangkitan_name` varchar(255) DEFAULT NULL,
  `pembangkitan_latitude` varchar(255) DEFAULT NULL,
  `pembangkitan_longitude` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=16 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `pembangkitan`
--

INSERT INTO `pembangkitan` (`pembangkitan_id`, `pembangkitan_name`, `pembangkitan_latitude`, `pembangkitan_longitude`) VALUES
(1, 'Paiton', '-7.711259', '113.571161'),
(2, 'Pacitan', '-8.258006', '111.374094'),
(3, 'Tanjung Awar-awar', '-6.810891', '111.996195'),
(4, 'Rembang', '-6.636267', '111.474371'),
(5, 'Indramayu', '-6.275231', '107.970844'),
(6, 'Muara Tawar', '-6.086519', '106.998569'),
(7, 'Muara Karang', '-6.110069', '106.787201'),
(8, 'Duri', '1.073858', '101.281220'),
(9, 'Amurang', '1.182031', '124.480384'),
(10, 'Asahan', '2.512160', '99.262535'),
(11, 'Bangka', '-2.078979', '106.148785'),
(12, 'Kendari', '-3.895211', '122.537416'),
(13, 'Tidore', '0.738078', '127.388972'),
(14, 'Bolok', '-10.239133', '123.490645'),
(15, 'Ropa', '-8.509026', '121.701402');

-- --------------------------------------------------------

--
-- Table structure for table `rembang`
--

CREATE TABLE IF NOT EXISTS `rembang` (
  `rembang_id` bigint(20) NOT NULL,
  `rembang_unit` int(11) DEFAULT NULL,
  `rembang_mw` varchar(255) DEFAULT NULL,
  `rembang_mvar` varchar(255) DEFAULT NULL,
  `rembang_waktu` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `rembang`
--

INSERT INTO `rembang` (`rembang_id`, `rembang_unit`, `rembang_mw`, `rembang_mvar`, `rembang_waktu`) VALUES
(1, 1, '285.501', '80.694', '2014-10-08 13:54:04'),
(2, 2, '282.935', '78.006', '2014-10-08 13:54:04'),
(3, 1, '285.448', '78.855', '2014-10-08 14:00:49'),
(4, 2, '282.998', '76.184', '2014-10-08 14:00:49');

-- --------------------------------------------------------

--
-- Table structure for table `tanjung_awar_awar`
--

CREATE TABLE IF NOT EXISTS `tanjung_awar_awar` (
  `tanjung_awar_awar_id` bigint(20) NOT NULL,
  `tanjung_awar_awar_unit` int(11) DEFAULT NULL,
  `tanjung_awar_awar_mw` varchar(255) DEFAULT NULL,
  `tanjung_awar_awar_mvar` varchar(255) DEFAULT NULL,
  `tanjung_awar_awar_waktu` datetime DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `tanjung_awar_awar`
--

INSERT INTO `tanjung_awar_awar` (`tanjung_awar_awar_id`, `tanjung_awar_awar_unit`, `tanjung_awar_awar_mw`, `tanjung_awar_awar_mvar`, `tanjung_awar_awar_waktu`) VALUES
(1, 1, '294.086', '90.285', '2014-10-08 13:58:50'),
(2, 2, '0', '0', '2014-10-08 13:58:50'),
(3, 1, '295.339', '91.477', '2014-10-08 14:00:20'),
(4, 2, '0', '0', '2014-10-08 14:00:20');

-- --------------------------------------------------------

--
-- Table structure for table `unit`
--

CREATE TABLE IF NOT EXISTS `unit` (
  `unit_id` bigint(20) NOT NULL,
  `pembangkitan_pembangkitan_id` bigint(20) DEFAULT NULL,
  `unit_name` varchar(255) DEFAULT NULL,
  `unit_path` varchar(255) DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=21 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `unit`
--

INSERT INTO `unit` (`unit_id`, `pembangkitan_pembangkitan_id`, `unit_name`, `unit_path`) VALUES
(1, 1, 'GT9', 'http://10.7.40.27/Operation.html'),
(2, 2, 'GT 1', 'http://10.7.32.18/Operation.html'),
(3, 2, 'GT2', 'http://10.7.32.19/Operation.html'),
(4, 3, 'GT1', 'http://10.7.29.60/Operation.html'),
(5, 3, 'GT2', 'http://10.7.29.61/Operation.html'),
(6, 4, 'GT 20', 'http://10.50.45.18/'),
(7, 4, 'GT 10', 'http://10.50.45.19/'),
(8, 5, 'GT 1', 'http://172.17.19.208/Operation.html'),
(9, 5, 'GT 2', 'http://172.17.19.209/Operation.html'),
(10, 5, 'GT 3', 'http://172.17.19.210/Operation.html'),
(11, 6, 'GT 5.1', 'http://10.7.250.142/Operation.html'),
(12, 6, 'ST 58', 'http://10.7.250.143/Operation.html'),
(13, 7, 'GTG#2.1', 'http://10.7.250.172/Operation.html'),
(14, 7, 'GTG 22', 'http://10.7.250.173/Operation.html'),
(15, 7, 'STG 2.01', 'http://10.7.250.177/Operation.html'),
(16, 7, 'STG 2.02', 'http://10.7.250.178/Operation.html'),
(17, 7, 'STG 2.03', 'http://10.7.250.179/Operation.html'),
(18, 8, 'Unit 1', 'http://10.7.39.30/monitoring/s/com.pjb.app.AjaxHandler?method=checkData&unit_id=3'),
(19, 9, 'Unit 1 dan 2', 'http://10.7.48.32/monitoring/s/com.pjb.app.AjaxHandler?method=checkData&unit_id=3/4'),
(20, 10, 'Unit 1 dan 2', 'http://10.7.46.30/monitoring/s/com.pjb.app.AjaxHandler?method=checkData&unit_id=3/4');

-- --------------------------------------------------------

--
-- Table structure for table `uptime`
--

CREATE TABLE IF NOT EXISTS `uptime` (
  `uptime_id` bigint(20) NOT NULL,
  `unit_unit_id` bigint(20) DEFAULT NULL,
  `uptime_waktu` datetime DEFAULT NULL,
  `uptime_kondisi` enum('0','1') DEFAULT NULL
) ENGINE=MyISAM AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;

--
-- Dumping data for table `uptime`
--

INSERT INTO `uptime` (`uptime_id`, `unit_unit_id`, `uptime_waktu`, `uptime_kondisi`) VALUES
(1, 20, '2015-04-16 13:16:25', '1'),
(2, 14, '2015-04-16 13:16:28', '1'),
(3, 18, '2015-04-16 13:16:29', '1'),
(4, 17, '2015-04-16 13:16:30', '1'),
(5, 13, '2015-04-16 13:16:31', '1'),
(6, 15, '2015-04-16 13:16:32', '1'),
(7, 16, '2015-04-16 13:16:33', '1'),
(8, 1, '2015-04-16 13:16:35', '1'),
(9, 4, '2015-04-16 13:16:36', '1'),
(10, 6, '2015-04-16 13:16:38', '1'),
(11, 7, '2015-04-16 13:16:39', '1'),
(12, 8, '2015-04-16 13:16:39', '1'),
(13, 5, '2015-04-16 13:16:41', '0'),
(14, 9, '2015-04-16 13:16:42', '1'),
(15, 10, '2015-04-16 13:16:44', '1'),
(16, 3, '2015-04-16 13:16:45', '1'),
(17, 19, '2015-04-16 13:16:49', '0'),
(18, 11, '2015-04-16 13:16:50', '1'),
(19, 2, '2015-04-16 13:16:50', '1'),
(20, 12, '2015-04-16 13:16:51', '1'),
(21, 5, '2015-04-16 13:16:54', '1');

--
-- Indexes for dumped tables
--

--
-- Indexes for table `amurang`
--
ALTER TABLE `amurang`
  ADD PRIMARY KEY (`amurang_id`);

--
-- Indexes for table `asahan`
--
ALTER TABLE `asahan`
  ADD PRIMARY KEY (`asahan_id`);

--
-- Indexes for table `duri`
--
ALTER TABLE `duri`
  ADD PRIMARY KEY (`duri_id`);

--
-- Indexes for table `indramayu`
--
ALTER TABLE `indramayu`
  ADD PRIMARY KEY (`indramayu_id`);

--
-- Indexes for table `muara_karang`
--
ALTER TABLE `muara_karang`
  ADD PRIMARY KEY (`muara_karang_id`);

--
-- Indexes for table `muara_tawar`
--
ALTER TABLE `muara_tawar`
  ADD PRIMARY KEY (`muara_tawar_id`);

--
-- Indexes for table `pacitan`
--
ALTER TABLE `pacitan`
  ADD PRIMARY KEY (`pacitan_id`);

--
-- Indexes for table `paiton`
--
ALTER TABLE `paiton`
  ADD PRIMARY KEY (`paiton_id`);

--
-- Indexes for table `pembangkitan`
--
ALTER TABLE `pembangkitan`
  ADD PRIMARY KEY (`pembangkitan_id`);

--
-- Indexes for table `rembang`
--
ALTER TABLE `rembang`
  ADD PRIMARY KEY (`rembang_id`);

--
-- Indexes for table `tanjung_awar_awar`
--
ALTER TABLE `tanjung_awar_awar`
  ADD PRIMARY KEY (`tanjung_awar_awar_id`);

--
-- Indexes for table `unit`
--
ALTER TABLE `unit`
  ADD PRIMARY KEY (`unit_id`),
  ADD KEY `fk_unit_pembangkitan1_idx` (`pembangkitan_pembangkitan_id`);

--
-- Indexes for table `uptime`
--
ALTER TABLE `uptime`
  ADD PRIMARY KEY (`uptime_id`),
  ADD KEY `fk_uptime_unit1_idx` (`unit_unit_id`);

--
-- AUTO_INCREMENT for dumped tables
--

--
-- AUTO_INCREMENT for table `amurang`
--
ALTER TABLE `amurang`
  MODIFY `amurang_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `asahan`
--
ALTER TABLE `asahan`
  MODIFY `asahan_id` bigint(20) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT for table `duri`
--
ALTER TABLE `duri`
  MODIFY `duri_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `indramayu`
--
ALTER TABLE `indramayu`
  MODIFY `indramayu_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=7;
--
-- AUTO_INCREMENT for table `muara_karang`
--
ALTER TABLE `muara_karang`
  MODIFY `muara_karang_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=6;
--
-- AUTO_INCREMENT for table `muara_tawar`
--
ALTER TABLE `muara_tawar`
  MODIFY `muara_tawar_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `pacitan`
--
ALTER TABLE `pacitan`
  MODIFY `pacitan_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `paiton`
--
ALTER TABLE `paiton`
  MODIFY `paiton_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT for table `pembangkitan`
--
ALTER TABLE `pembangkitan`
  MODIFY `pembangkitan_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=16;
--
-- AUTO_INCREMENT for table `rembang`
--
ALTER TABLE `rembang`
  MODIFY `rembang_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `tanjung_awar_awar`
--
ALTER TABLE `tanjung_awar_awar`
  MODIFY `tanjung_awar_awar_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT for table `unit`
--
ALTER TABLE `unit`
  MODIFY `unit_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=21;
--
-- AUTO_INCREMENT for table `uptime`
--
ALTER TABLE `uptime`
  MODIFY `uptime_id` bigint(20) NOT NULL AUTO_INCREMENT,AUTO_INCREMENT=22;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
