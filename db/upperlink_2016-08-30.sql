# ************************************************************
# Sequel Pro SQL dump
# Version 4541
#
# http://www.sequelpro.com/
# https://github.com/sequelpro/sequelpro
#
# Host: 127.0.0.1 (MySQL 5.7.14)
# Database: upperlink
# Generation Time: 2016-08-30 21:50:39 +0000
# ************************************************************


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;


# Dump of table campaign_contact_groups
# ------------------------------------------------------------

CREATE TABLE `campaign_contact_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `campaign_id` int(11) DEFAULT NULL,
  `group_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `campaign_contact_groups` WRITE;
/*!40000 ALTER TABLE `campaign_contact_groups` DISABLE KEYS */;

INSERT INTO `campaign_contact_groups` (`id`, `campaign_id`, `group_id`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,1,1,'2016-08-30 13:21:46','2016-08-30 13:21:46',NULL),
	(2,1,2,'2016-08-30 13:21:46','2016-08-30 13:21:46',NULL);

/*!40000 ALTER TABLE `campaign_contact_groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table campaigns
# ------------------------------------------------------------

CREATE TABLE `campaigns` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `message` text,
  `scheduled_date` timestamp NULL DEFAULT NULL,
  `type` varchar(255) DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `campaigns` WRITE;
/*!40000 ALTER TABLE `campaigns` DISABLE KEYS */;

INSERT INTO `campaigns` (`id`, `name`, `message`, `scheduled_date`, `type`, `deleted_at`, `updated_at`, `created_at`)
VALUES
	(1,'Christmas','Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod\r\ntempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,\r\nquis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo\r\nconsequat. Duis aute irure dolor in reprehenderit in voluptate velit esse\r\ncillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non\r\nproident, sunt in culpa qui officia deserunt mollit anim id est laborum.','2016-08-25 00:00:00','Email',NULL,'2016-08-30 13:36:02','2016-08-30 13:21:46');

/*!40000 ALTER TABLE `campaigns` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contact_groups
# ------------------------------------------------------------

CREATE TABLE `contact_groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `group_id` int(11) DEFAULT NULL,
  `contact_id` int(11) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `contact_groups` WRITE;
/*!40000 ALTER TABLE `contact_groups` DISABLE KEYS */;

INSERT INTO `contact_groups` (`id`, `group_id`, `contact_id`, `created_at`, `updated_at`, `deleted_at`)
VALUES
	(1,1,1,'2016-08-30 12:23:22','2016-08-30 12:23:22',NULL),
	(2,2,1,'2016-08-30 12:23:22','2016-08-30 12:23:22',NULL),
	(9,3,1,'2016-08-30 12:55:17','2016-08-30 12:55:17',NULL);

/*!40000 ALTER TABLE `contact_groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table contacts
# ------------------------------------------------------------

CREATE TABLE `contacts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `first_name` varchar(255) DEFAULT NULL,
  `last_name` varchar(255) DEFAULT NULL,
  `sex` varchar(20) DEFAULT NULL,
  `age` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `phone` varchar(20) DEFAULT NULL,
  `address` text,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `contacts` WRITE;
/*!40000 ALTER TABLE `contacts` DISABLE KEYS */;

INSERT INTO `contacts` (`id`, `first_name`, `last_name`, `sex`, `age`, `email`, `phone`, `address`, `created_at`, `deleted_at`, `updated_at`)
VALUES
	(1,'usman','irale','',24,'superirale@yahoo.com','+2348169315298','15, Abati George Avenue, Surulere, Lagos','2016-08-01 23:43:45',NULL,'2016-08-30 12:50:52'),
	(28,'Amarachi','',NULL,NULL,NULL,'08138848482',NULL,'2016-08-07 21:10:42',NULL,'2016-08-07 21:10:42'),
	(29,'Mira','Erelu',NULL,NULL,NULL,'080255112627',NULL,'2016-08-07 21:11:08',NULL,'2016-08-07 21:11:08'),
	(36,'Silver','',NULL,NULL,'','07067122300',NULL,'2016-08-07 21:15:22',NULL,'2016-08-07 21:15:22'),
	(38,'Omobola','Oriola',NULL,NULL,'omobolanle_oriola@yahoo.com','08106559375',NULL,'2016-08-07 21:18:03',NULL,'2016-08-07 21:18:03'),
	(45,'Beedazzled','',NULL,NULL,'','08066667696',NULL,'2016-08-07 21:20:58',NULL,'2016-08-07 21:20:58'),
	(46,'Nana Zainab','',NULL,NULL,'','08167450620',NULL,'2016-08-07 21:21:24',NULL,'2016-08-07 21:21:24'),
	(76,'nicole','',NULL,NULL,'nikkylee.24@Gmail.com','',NULL,'2016-08-07 21:33:03',NULL,'2016-08-07 21:33:03'),
	(77,'stephanie','ani',NULL,NULL,'','08028655918',NULL,'2016-08-07 21:35:32',NULL,'2016-08-07 21:35:32'),
	(82,'','',NULL,NULL,'bellabonito1@gmail.com','',NULL,'2016-08-07 21:36:44',NULL,'2016-08-07 21:36:44'),
	(83,'','',NULL,NULL,'Amweebeee@gmail.com','',NULL,'2016-08-07 21:36:54',NULL,'2016-08-07 21:36:54'),
	(90,'Oshewa','',NULL,NULL,'','08066979715',NULL,'2016-08-07 21:37:55',NULL,'2016-08-07 21:37:55'),
	(91,'Harbekeh','Habeeodun',NULL,NULL,'harbekeh@gmail.com','08181995561',NULL,'2016-08-07 21:38:57',NULL,'2016-08-07 21:38:57'),
	(97,'Kikelomo','Adesina',NULL,NULL,'','08077077771',NULL,'2016-08-07 21:40:33',NULL,'2016-08-07 21:40:33'),
	(98,'Kikelomo','Adesina',NULL,NULL,'','08022224472',NULL,'2016-08-07 21:40:42',NULL,'2016-08-07 21:40:42'),
	(116,'usman','irale','Male',26,'superirale@yahoo.com','+2348169315298','15, Abati George Avenue, Surulere, Lagos','2016-08-30 11:33:13',NULL,'2016-08-30 11:50:18'),
	(117,'usman','irale','Female',34,'superirale@yahoo.com','+2348169315298','15, Abati George Avenue, Surulere, Lagos','2016-08-30 12:23:22','2016-08-30 12:23:54','2016-08-30 12:23:54');

/*!40000 ALTER TABLE `contacts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table groups
# ------------------------------------------------------------

CREATE TABLE `groups` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `deleted_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `groups` WRITE;
/*!40000 ALTER TABLE `groups` DISABLE KEYS */;

INSERT INTO `groups` (`id`, `name`, `created_at`, `deleted_at`, `updated_at`)
VALUES
	(1,'social media and Tv','2016-08-30 10:22:40',NULL,'2016-08-30 11:03:46'),
	(2,'Email list','2016-08-30 10:29:49',NULL,'2016-08-30 11:04:11'),
	(3,'Online','2016-08-30 10:31:37',NULL,'2016-08-30 10:31:37');

/*!40000 ALTER TABLE `groups` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table migrations
# ------------------------------------------------------------

CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;

INSERT INTO `migrations` (`migration`, `batch`)
VALUES
	('2014_10_12_000000_create_users_table',1),
	('2014_10_12_100000_create_password_resets_table',1),
	('2016_08_30_194442_create_social_accounts_table',1);

/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table password_resets
# ------------------------------------------------------------

CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;



# Dump of table social_accounts
# ------------------------------------------------------------

CREATE TABLE `social_accounts` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `provider_user_id` varchar(255) NOT NULL,
  `provider` varchar(255) NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

LOCK TABLES `social_accounts` WRITE;
/*!40000 ALTER TABLE `social_accounts` DISABLE KEYS */;

INSERT INTO `social_accounts` (`id`, `user_id`, `provider_user_id`, `provider`, `created_at`, `updated_at`)
VALUES
	(1,1,'10210319438161022','facebook','2016-08-30 20:14:21','2016-08-30 20:14:21'),
	(2,2,'114429332373312139821','facebook','2016-08-30 20:42:51','2016-08-30 20:42:51');

/*!40000 ALTER TABLE `social_accounts` ENABLE KEYS */;
UNLOCK TABLES;


# Dump of table users
# ------------------------------------------------------------

CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `password` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;

INSERT INTO `users` (`id`, `name`, `email`, `password`, `remember_token`, `created_at`, `updated_at`)
VALUES
	(1,'Usman Irale','superirale@yahoo.com',NULL,NULL,'2016-08-30 20:14:21','2016-08-30 20:14:21'),
	(2,'Irale Osman','superirale@gmail.com',NULL,NULL,'2016-08-30 20:42:51','2016-08-30 20:42:51');

/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;



/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;
/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
