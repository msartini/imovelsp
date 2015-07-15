-- MySQL dump 10.13  Distrib 5.6.13, for osx10.7 (x86_64)
--
-- Host: localhost    Database: oeste
-- ------------------------------------------------------
-- Server version	5.6.13

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `categories` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(80) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `post_id` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `comment` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estate_images`
--

DROP TABLE IF EXISTS `estate_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estate_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `estate_id` int(11) DEFAULT NULL,
  `name` varchar(200) COLLATE utf8_unicode_ci DEFAULT NULL,
  `filename` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `file_original_name` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `extension` varchar(4) COLLATE utf8_unicode_ci NOT NULL,
  `fullpath` varchar(250) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=58 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estate_images`
--

LOCK TABLES `estate_images` WRITE;
/*!40000 ALTER TABLE `estate_images` DISABLE KEYS */;
INSERT INTO `estate_images` VALUES (1,NULL,NULL,'almoco-arabe-comerciarios.jpg','almoco-arabe-comerciarios.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-055344.jpg','2015-07-09 20:53:44','2015-07-09 20:53:44'),(2,NULL,NULL,'sesc1.jpg','sesc1.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-055346.jpg','2015-07-09 20:53:46','2015-07-09 20:53:46'),(3,NULL,NULL,'alimentese3.jpeg','alimentese3.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-055346.jpeg','2015-07-09 20:53:46','2015-07-09 20:53:46'),(4,NULL,NULL,'alimentese2.jpeg','alimentese2.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-055347.jpeg','2015-07-09 20:53:47','2015-07-09 20:53:47'),(5,NULL,NULL,'download.jpeg','download.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-055347.jpeg','2015-07-09 20:53:47','2015-07-09 20:53:47'),(6,NULL,NULL,'comedoria-sesc-santana.jpeg','comedoria-sesc-santana.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-055347.jpeg','2015-07-09 20:53:47','2015-07-09 20:53:47'),(7,NULL,NULL,'almoco-arabe-comerciarios.jpg','almoco-arabe-comerciarios.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-055348.jpg','2015-07-09 20:53:48','2015-07-09 20:53:48'),(8,NULL,NULL,'sesc1.jpg','sesc1.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-055350.jpg','2015-07-09 20:53:50','2015-07-09 20:53:50'),(9,NULL,NULL,'alimentese3.jpeg','alimentese3.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-055351.jpeg','2015-07-09 20:53:51','2015-07-09 20:53:51'),(10,NULL,NULL,'alimentese2.jpeg','alimentese2.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-055351.jpeg','2015-07-09 20:53:51','2015-07-09 20:53:51'),(11,NULL,NULL,'download.jpeg','download.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-055351.jpeg','2015-07-09 20:53:51','2015-07-09 20:53:51'),(12,NULL,NULL,'comedoria-sesc-santana.jpeg','comedoria-sesc-santana.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-055351.jpeg','2015-07-09 20:53:51','2015-07-09 20:53:51'),(13,NULL,NULL,'alimentese3.jpeg','alimentese3.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-060233.jpeg','2015-07-09 21:02:33','2015-07-09 21:02:33'),(14,NULL,NULL,'alimentese2.jpeg','alimentese2.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-060233.jpeg','2015-07-09 21:02:33','2015-07-09 21:02:33'),(15,NULL,NULL,'download.jpeg','download.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-060233.jpeg','2015-07-09 21:02:33','2015-07-09 21:02:33'),(16,NULL,NULL,'alimentese3.jpeg','alimentese3.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-060736.jpeg','2015-07-09 21:07:36','2015-07-09 21:07:36'),(17,NULL,NULL,'alimentese2.jpeg','alimentese2.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-060737.jpeg','2015-07-09 21:07:37','2015-07-09 21:07:37'),(18,NULL,NULL,'download.jpeg','download.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-060737.jpeg','2015-07-09 21:07:37','2015-07-09 21:07:37'),(19,NULL,NULL,'places-39d.jpg','places-39d.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-060857.jpg','2015-07-09 21:08:57','2015-07-09 21:08:57'),(20,NULL,NULL,'22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-062107.jpg','2015-07-09 21:21:07','2015-07-09 21:21:07'),(21,NULL,NULL,'22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-062119.jpg','2015-07-09 21:21:19','2015-07-09 21:21:19'),(22,NULL,NULL,'places-40d.jpg','places-40d.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-062133.jpg','2015-07-09 21:21:33','2015-07-09 21:21:33'),(23,NULL,NULL,'places-39d.jpg','places-39d.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-062134.jpg','2015-07-09 21:21:34','2015-07-09 21:21:34'),(24,NULL,NULL,'22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-062135.jpg','2015-07-09 21:21:35','2015-07-09 21:21:35'),(25,NULL,NULL,'sesc-sp.gif','sesc-sp.gif','gif','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-062135.gif','2015-07-09 21:21:35','2015-07-09 21:21:35'),(26,NULL,NULL,'places-40d.jpg','places-40d.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-062415.jpg','2015-07-09 21:24:15','2015-07-09 21:24:15'),(27,NULL,NULL,'places-39d.jpg','places-39d.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-062416.jpg','2015-07-09 21:24:16','2015-07-09 21:24:16'),(28,NULL,NULL,'22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-062416.jpg','2015-07-09 21:24:16','2015-07-09 21:24:16'),(29,NULL,NULL,'22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-062559.jpg','2015-07-09 21:25:59','2015-07-09 21:25:59'),(30,NULL,NULL,'22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-062701.jpg','2015-07-09 21:27:01','2015-07-09 21:27:01'),(31,NULL,NULL,'places-39d.jpg','places-39d.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-063244.jpg','2015-07-09 21:32:44','2015-07-09 21:32:44'),(32,NULL,NULL,'places-39d.jpg','places-39d.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-063249.jpg','2015-07-09 21:32:49','2015-07-09 21:32:49'),(33,NULL,NULL,'places-39d.jpg','places-39d.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-063302.jpg','2015-07-09 21:33:02','2015-07-09 21:33:02'),(34,NULL,NULL,'22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-063322.jpg','2015-07-09 21:33:22','2015-07-09 21:33:22'),(35,NULL,NULL,'22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-063324.jpg','2015-07-09 21:33:24','2015-07-09 21:33:24'),(36,NULL,NULL,'22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-063325.jpg','2015-07-09 21:33:25','2015-07-09 21:33:25'),(37,NULL,NULL,'22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-063326.jpg','2015-07-09 21:33:26','2015-07-09 21:33:26'),(38,NULL,NULL,'places-39d.jpg','places-39d.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-063450.jpg','2015-07-09 21:34:50','2015-07-09 21:34:50'),(39,NULL,NULL,'22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','22453-cupula-estara-aberta-ao-publico-a-partir-desta-tarde-divulgacao.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150709-063533.jpg','2015-07-09 21:35:33','2015-07-09 21:35:33'),(40,NULL,NULL,'sample_iPod.m4v','sample_iPod.m4v','m4v','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150710-120132.m4v','2015-07-10 03:01:32','2015-07-10 03:01:32'),(41,NULL,NULL,'casa2.jpeg','casa2.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150710-120253.jpeg','2015-07-10 03:02:53','2015-07-10 03:02:53'),(42,NULL,NULL,'Photo on 4-18-15 at 19.28.jpg','Photo on 4-18-15 at 19.28.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-123723.jpg','2015-07-12 03:37:23','2015-07-12 03:37:23'),(43,NULL,NULL,'Photo on 4-18-15 at 19.27.jpg','Photo on 4-18-15 at 19.27.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-123724.jpg','2015-07-12 03:37:24','2015-07-12 03:37:24'),(44,NULL,NULL,'Photo on 4-18-15 at 19.27 #2.jpg','Photo on 4-18-15 at 19.27 #2.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-123724.jpg','2015-07-12 03:37:24','2015-07-12 03:37:24'),(45,NULL,NULL,'casa3.jpeg','casa3.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-071357.jpeg','2015-07-12 22:13:57','2015-07-12 22:13:57'),(46,NULL,NULL,'casa3.jpeg','casa3.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-071456.jpeg','2015-07-12 22:14:56','2015-07-12 22:14:56'),(47,NULL,NULL,'sesc_balneario.jpg','sesc_balneario.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-071523.jpg','2015-07-12 22:15:23','2015-07-12 22:15:23'),(48,NULL,NULL,'270300-2.jpg','270300-2.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-071606.jpg','2015-07-12 22:16:06','2015-07-12 22:16:06'),(49,NULL,NULL,'270300-1.jpg','270300-1.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-071606.jpg','2015-07-12 22:16:06','2015-07-12 22:16:06'),(50,NULL,NULL,'270300-13.jpg','270300-13.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-071607.jpg','2015-07-12 22:16:07','2015-07-12 22:16:07'),(51,NULL,NULL,'270300-12.jpg','270300-12.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-071607.jpg','2015-07-12 22:16:07','2015-07-12 22:16:07'),(52,NULL,NULL,'270300-10.jpg','270300-10.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-071607.jpg','2015-07-12 22:16:07','2015-07-12 22:16:07'),(53,NULL,NULL,'1169801005.jpg','1169801005.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-071655.jpg','2015-07-12 22:16:55','2015-07-12 22:16:55'),(54,NULL,NULL,'brasil-politica-psdb-geraldo-alckmin-20120731-004-size-598.jpg','brasil-politica-psdb-geraldo-alckmin-20120731-004-size-598.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-071655.jpg','2015-07-12 22:16:55','2015-07-12 22:16:55'),(55,NULL,NULL,'centro_cultural-1444312.jpg','centro_cultural-1444312.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-071655.jpg','2015-07-12 22:16:55','2015-07-12 22:16:55'),(56,NULL,NULL,'balneario2.jpeg','balneario2.jpeg','jpeg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-071655.jpeg','2015-07-12 22:16:55','2015-07-12 22:16:55'),(57,NULL,NULL,'sesc_balneario.jpg','sesc_balneario.jpg','jpg','/Users/jonyfernandoschulz/workspace/imovelsp/public/images/20150712-071656.jpg','2015-07-12 22:16:56','2015-07-12 22:16:56');
/*!40000 ALTER TABLE `estate_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `estates`
--

DROP TABLE IF EXISTS `estates`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `estates` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `category_id` int(11) NOT NULL,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` text COLLATE utf8_unicode_ci NOT NULL,
  `area` decimal(10,2) NOT NULL,
  `bathrooms` int(11) NOT NULL,
  `rooms` int(11) NOT NULL,
  `garages` int(11) NOT NULL,
  `conditional_ar` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `storage` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `gym` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `pool` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `washer` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `fully_furnished` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `heating` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `balcony` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `fireplace` enum('1','0') COLLATE utf8_unicode_ci NOT NULL DEFAULT '0',
  `bedrooms` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `estates`
--

LOCK TABLES `estates` WRITE;
/*!40000 ALTER TABLE `estates` DISABLE KEYS */;
/*!40000 ALTER TABLE `estates` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `imoveis_images`
--

DROP TABLE IF EXISTS `imoveis_images`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `imoveis_images` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filename_target` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `filename_source` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `imoveis_images`
--

LOCK TABLES `imoveis_images` WRITE;
/*!40000 ALTER TABLE `imoveis_images` DISABLE KEYS */;
/*!40000 ALTER TABLE `imoveis_images` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `medias`
--

DROP TABLE IF EXISTS `medias`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `medias` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `arquivo` varchar(200) COLLATE utf8_unicode_ci NOT NULL,
  `extensao` varchar(4) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'pdf',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `medias`
--

LOCK TABLES `medias` WRITE;
/*!40000 ALTER TABLE `medias` DISABLE KEYS */;
INSERT INTO `medias` VALUES (1,'2015-06-06 23:22:41','2015-06-06 23:22:41','documento','pdf'),(2,'2015-06-06 23:22:41','2015-06-06 23:22:41','documento','pdf'),(3,'2015-06-07 00:24:55','2015-06-07 00:24:55','documento','pdf'),(4,'2015-06-13 04:37:22','2015-06-13 04:37:22','documento','pdf'),(5,'2015-06-14 02:34:31','2015-06-14 02:34:31','documento','pdf'),(6,'2015-06-14 23:56:23','2015-06-14 23:56:23','documento','pdf'),(7,'2015-06-15 00:07:29','2015-06-15 00:07:29','documento','pdf'),(8,'2015-06-18 04:40:46','2015-06-18 04:40:46','documento','pdf'),(9,'2015-06-20 19:39:20','2015-06-20 19:39:20','documento','pdf'),(10,'2015-06-20 19:41:18','2015-06-20 19:41:18','documento','pdf'),(11,'2015-06-20 19:42:05','2015-06-20 19:42:05','ue','pdf'),(12,'2015-06-20 20:39:27','2015-06-20 20:39:27','ue    ','pdf'),(13,'2015-06-20 20:39:30','2015-06-20 20:39:30','ue    ','pdf'),(14,'2015-06-20 20:41:25','2015-06-20 20:41:25','ue    ','pdf'),(15,'2015-06-20 20:41:27','2015-06-20 20:41:27','ue    ','pdf'),(16,'2015-06-20 20:45:55','2015-06-20 20:45:55','ue    ','pdf'),(17,'2015-06-20 20:47:56','2015-06-20 20:47:56','ue    ','pdf'),(18,'2015-06-20 23:50:53','2015-06-20 23:50:53','ue','pdf'),(19,'2015-06-21 21:58:44','2015-06-21 21:58:44','ue','pdf'),(20,'2015-06-22 01:13:53','2015-06-22 01:13:53','ue','pdf'),(21,'2015-07-08 23:21:51','2015-07-08 23:21:51','ue','pdf'),(22,'2015-07-09 21:14:17','2015-07-09 21:14:17','ue','pdf'),(23,'2015-07-09 21:15:06','2015-07-09 21:15:06','ue','pdf'),(24,'2015-07-09 21:16:30','2015-07-09 21:16:30','ue','pdf'),(25,'2015-07-09 21:16:53','2015-07-09 21:16:53','ue','pdf'),(26,'2015-07-09 21:17:07','2015-07-09 21:17:07','ue','pdf'),(27,'2015-07-09 21:17:57','2015-07-09 21:17:57','ue','pdf');
/*!40000 ALTER TABLE `medias` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `migrations`
--

DROP TABLE IF EXISTS `migrations`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `migrations` (
  `migration` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `batch` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `migrations`
--

LOCK TABLES `migrations` WRITE;
/*!40000 ALTER TABLE `migrations` DISABLE KEYS */;
INSERT INTO `migrations` VALUES ('2014_10_12_000000_create_users_table',1),('2014_10_12_100000_create_password_resets_table',1),('2015_04_18_001356_create_medias_table',1),('2015_05_16_191603_create_estates_table',1),('2015_05_18_134517_add_fields_to_estates_table',1),('2015_05_22_214605_create_posts_table',1),('2015_05_22_214621_create_comments_table',1),('2015_05_29_221411_create_table_imoveis_upload',1),('2015_06_06_200805_create_table_imoveis_category',1),('2015_06_28_130026_create_table_estate_images',2);
/*!40000 ALTER TABLE `migrations` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `password_resets`
--

DROP TABLE IF EXISTS `password_resets`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `password_resets` (
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  KEY `password_resets_email_index` (`email`),
  KEY `password_resets_token_index` (`token`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `password_resets`
--

LOCK TABLES `password_resets` WRITE;
/*!40000 ALTER TABLE `password_resets` DISABLE KEYS */;
/*!40000 ALTER TABLE `password_resets` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `posts`
--

DROP TABLE IF EXISTS `posts`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `posts` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `title` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `description` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `posts`
--

LOCK TABLES `posts` WRITE;
/*!40000 ALTER TABLE `posts` DISABLE KEYS */;
/*!40000 ALTER TABLE `posts` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(60) COLLATE utf8_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8_unicode_ci DEFAULT NULL,
  `created_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  `updated_at` timestamp NOT NULL DEFAULT '0000-00-00 00:00:00',
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'MARCIO','msartini@gmail.com','$2y$10$nwyvWBFKL/d8iRD.zeikDO1EqS5xNn10YlKTxd/bAK.H4WWQjsSo2','pB728ot1freHm4U0a69p5GHNUMZplgal5rTgMhq77SO9GpQUgBf5fj3zz6tq','2015-06-07 00:27:37','2015-06-07 00:27:44');
/*!40000 ALTER TABLE `users` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2015-07-12 21:29:02
