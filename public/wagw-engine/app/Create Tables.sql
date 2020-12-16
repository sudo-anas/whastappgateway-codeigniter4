/*
SQLyog Community v12.5.0 (32 bit)
MySQL - 10.1.32-MariaDB : Database - wagw
*********************************************************************
*/

/*!40101 SET NAMES utf8 */;

/*!40101 SET SQL_MODE=''*/;

/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;
CREATE DATABASE /*!32312 IF NOT EXISTS*/`wagw` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci */;

USE `wagw`;

/*Table structure for table `autorespon` */

DROP TABLE IF EXISTS `autorespon`;

CREATE TABLE `autorespon` (
  `profil` bigint(11) DEFAULT NULL,
  `keyword` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `answer` text COLLATE utf8mb4_unicode_ci,
  `logic` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`keyword`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `grab` */

DROP TABLE IF EXISTS `grab`;

CREATE TABLE `grab` (
  `profil` int(11) DEFAULT NULL,
  `grup` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `contact` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `grab_tmp` */

DROP TABLE IF EXISTS `grab_tmp`;

CREATE TABLE `grab_tmp` (
  `profil` int(11) NOT NULL,
  `contact` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `nama` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `inbox` */

DROP TABLE IF EXISTS `inbox`;

CREATE TABLE `inbox` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wa_no` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_no` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wa_text` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa_time` datetime NOT NULL,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `id` (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `multi` */

DROP TABLE IF EXISTS `multi`;

CREATE TABLE `multi` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `tipe` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `profil` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wa_mode` int(11) DEFAULT NULL,
  `wa_no` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `sub_no` varchar(200) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wa_text` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa_media` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wa_file` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wa_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `id_outbox` bigint(20) DEFAULT NULL,
  `status` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `outbox` */

DROP TABLE IF EXISTS `outbox`;

CREATE TABLE `outbox` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wa_mode` int(11) DEFAULT NULL,
  `wa_no` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa_text` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa_media` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wa_file` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wa_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `sent` */

DROP TABLE IF EXISTS `sent`;

CREATE TABLE `sent` (
  `id` bigint(20) NOT NULL,
  `wa_mode` int(11) DEFAULT NULL,
  `wa_no` varchar(200) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa_text` varchar(2000) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa_media` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wa_file` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `wa_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `status` varchar(5) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`id`,`wa_time`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `tesbot` */

DROP TABLE IF EXISTS `tesbot`;

CREATE TABLE `tesbot` (
  `kode` varchar(10) DEFAULT NULL,
  `nama` varchar(50) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

/*Table structure for table `tmp` */

DROP TABLE IF EXISTS `tmp`;

CREATE TABLE `tmp` (
  `tmp_cd` varchar(50) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tmp_val` varchar(50) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  PRIMARY KEY (`tmp_cd`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

/*Table structure for table `web_user` */

DROP TABLE IF EXISTS `web_user`;

CREATE TABLE `web_user` (
  `id` bigint(20) NOT NULL AUTO_INCREMENT,
  `wa_user` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `wa_no` varchar(30) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(100) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'Y',
  `password` varchar(20) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `create_dt` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `last_login` datetime DEFAULT NULL,
  `qr` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bot_mode` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `bot_url` varchar(500) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `disable_read` varchar(1) COLLATE utf8mb4_unicode_ci DEFAULT 'N',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


ALTER DATABASE wagw CHARACTER SET = utf8mb4 COLLATE = utf8mb4_unicode_ci;
ALTER TABLE outbox CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;
ALTER TABLE multi CONVERT TO CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci;


/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
