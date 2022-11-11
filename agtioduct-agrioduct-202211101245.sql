-- MySQL dump 10.13  Distrib 8.0.31, for Linux (x86_64)
--
-- Host: localhost    Database: agrioduct
-- ------------------------------------------------------
-- Server version	8.0.31-0ubuntu0.22.04.1

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `barang`
--

DROP TABLE IF EXISTS `barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `barang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  `qty` int DEFAULT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `created_by` varchar(100) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=62 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` VALUES (34,'lobak',20,'kg','hasil panen hari kamis di lahan bawah','mang daman','2022-11-07 07:59:12'),(35,'pakcoy',40,'kg','panen di lahan bawah dan atas yang menggunakan pupuk kimia ','mang uha','2022-11-07 08:00:26'),(36,'seladah kriting',50,'kg','seladah dari kebun saya dan hasil panen anak pkl kelompok 2','ibu nuri','2022-11-07 08:02:21'),(37,'cukini',29,'kg','','pak ujang','2022-11-07 08:03:36'),(38,'cukini',11,'kg','','aldi','2022-11-07 08:41:03'),(39,'pakcoy',19,'kg','panen kebun','udin','2022-11-07 16:02:54'),(40,'pakcoy',31,'kg','hasil panen','pepen','2022-11-08 19:36:57'),(41,'kacang hijau',60,'kg',NULL,'pak umar','2022-11-10 09:50:00'),(42,'lobak',23,'kg',NULL,'mang icang','2022-11-10 09:50:56'),(43,'kacang hijau',30,'kg',NULL,'icang','2022-11-10 09:59:12'),(44,'kacang hijau',10,'kg',NULL,'ujang sandi','2022-11-10 10:00:17'),(45,'kacang hijau',10,'kg',NULL,'ujang sandi','2022-11-10 10:03:57'),(46,'lobak',23,'kg',NULL,'mang icang','2022-11-10 10:04:40'),(47,'kacang hijau',10,'kg',NULL,'ujang sandi','2022-11-10 10:05:53'),(48,'kacang hijau',10,'kg',NULL,'ujang sandi','2022-11-10 10:09:05'),(49,'kacang hijau',10,'kg',NULL,'ujang sandi','2022-11-10 10:09:35'),(50,'kacang hijau',10,'kg',NULL,'ujang sandi','2022-11-10 10:23:34'),(51,'kacang hijau',10,'kg',NULL,'ujang sandi','2022-11-10 10:27:52'),(52,'kentang',20,'kg',NULL,'pak usman','2022-11-10 10:32:19'),(53,'kacang hijau',10,'kg',NULL,'ujang sandi','2022-11-10 10:32:57'),(54,'cukini',30,'kg',NULL,'pak usman','2022-11-10 11:25:48'),(55,'kacang hijau',10,'kg',NULL,'ujang sandi','2022-11-10 11:27:38'),(56,'cukini',30,'kg',NULL,'pak usman','2022-11-10 11:27:41'),(57,'kacang hijau',10,'kg',NULL,'ujang sandi','2022-11-10 11:40:58'),(58,'seladah kriting',20,'kg',NULL,'pak irwan','2022-11-10 11:41:15'),(59,'kentang',20,'kg',NULL,'pak usman','2022-11-10 11:42:07'),(60,'kentang',20,'kg','Barang dibeli dari pak usman','pak usman','2022-11-10 11:44:14'),(61,'jagung',50,'kg','Barang dari Pak Kamal','Pak Kamal','2022-11-10 11:52:53');
/*!40000 ALTER TABLE `barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `barang_keluar`
--

DROP TABLE IF EXISTS `barang_keluar`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `barang_keluar` (
  `id` int NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) NOT NULL,
  `qty` int DEFAULT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `tujuan` varchar(100) NOT NULL,
  `deskripsi` text,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang_keluar`
--

LOCK TABLES `barang_keluar` WRITE;
/*!40000 ALTER TABLE `barang_keluar` DISABLE KEYS */;
INSERT INTO `barang_keluar` VALUES (1,'Pakcoy',2,'kg','jakarta','dikirim menggunakan truck','2022-11-06 14:07:20'),(2,'cukini',2,'kg','tangerang','','2022-11-07 15:03:29'),(3,'pakcoy',20,'kg','bandung','dikirim oleh mang darman','2022-11-07 16:23:16'),(4,'seladah kriting',12,'kg','tangerang','','2022-11-07 16:35:09'),(5,'seladah kriting',1,'kg','bandung','','2022-11-07 16:36:34'),(6,'pakcoy',30,'kg','bandung','','2022-11-07 20:12:43'),(7,'seladah kriting',1,'kg','jakarta','','2022-11-07 20:19:42'),(8,'seladah kriting',1,'kg','tangerang','asdf','2022-11-07 20:44:15'),(9,'seladah kriting',5,'kg','bandung','pasar bandung','2022-11-08 14:10:58'),(10,'seladah kriting',6,'kg','surabaya','','2022-11-08 18:09:29'),(11,'seladah kriting',20,'kg','tangerang','dikirim menggunakan truk mang mang cakwe','2022-11-08 19:16:31'),(12,'lobak',10,'kg','jakarta','','2022-11-08 19:18:15'),(13,'cukini',1,'kg','tangerang','','2022-11-08 20:26:37'),(14,'seladah kriting',12,'kg','bandung','','2022-11-08 20:40:28'),(15,'pakcoy',40,'kg','bandung','','2022-11-09 09:33:54'),(16,'pakcoy',30,'kg','bandung','','2022-11-09 12:33:47'),(17,'seladah kriting',11,'kg','surabaya','','2022-11-09 12:38:40'),(18,'seladah kriting',1,'kg','jakarta','','2022-11-09 12:40:39'),(19,'lobak',20,'kg','tangerang','','2022-11-09 17:13:55'),(20,'seladah kriting',29,'kg','jakarta','','2022-11-09 17:17:48'),(21,'cukini',22,'kg','tangerang','','2022-11-09 19:50:36'),(22,'pakcoy',2,'kg','tangerang','','2022-11-09 20:09:32'),(23,'cukini',12,'kg','tangerang','','2022-11-09 20:14:03');
/*!40000 ALTER TABLE `barang_keluar` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catatan_laporan`
--

DROP TABLE IF EXISTS `catatan_laporan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `catatan_laporan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) NOT NULL,
  `qty` int DEFAULT NULL,
  `tujuan` varchar(100) NOT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` int NOT NULL DEFAULT '0' COMMENT '(0, pending), (1, dikirim), (2, dibatalkan)',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=33 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catatan_laporan`
--

LOCK TABLES `catatan_laporan` WRITE;
/*!40000 ALTER TABLE `catatan_laporan` DISABLE KEYS */;
INSERT INTO `catatan_laporan` VALUES (1,'Pakcoy',2,'jakarta','kg','dikirim menggunakan truck','2022-11-06 14:07:20',2),(2,'cukini',2,'tangerang','kg','','2022-11-07 15:03:29',2),(5,'seladah kriting',1,'jakarta','kg','','2022-11-07 20:19:43',2),(6,'seladah kriting',1,'jakarta','kg','','2022-11-07 20:19:43',2),(7,'seladah kriting',1,'jakarta','kg','','2022-11-07 20:19:43',2),(8,'seladah kriting',1,'jakarta','kg','','2022-11-07 20:19:43',2),(9,'seladah kriting',1,'jakarta','kg','','2022-11-07 20:19:43',2),(10,'seladah kriting',1,'jakarta','kg','','2022-11-07 20:19:43',2),(11,'seladah kriting',1,'jakarta','kg','','2022-11-07 20:19:43',2),(12,'Pakcoy',3,'jakarta','kg','jne','2022-11-08 11:53:15',0),(13,'seladah kriting',5,'bandung','kg','pasar bandung','2022-11-08 14:10:58',1),(14,'seladah kriting',5,'bandung','kg','pasar bandung','2022-11-08 14:10:58',1),(15,'seladah kriting',5,'bandung','kg','pasar bandung','2022-11-08 14:10:58',2),(16,'seladah kriting',5,'bandung','kg','pasar bandung','2022-11-08 17:39:53',1),(17,'seladah kriting',6,'surabaya','kg','','2022-11-08 18:12:54',2),(18,'seladah kriting',6,'surabaya','kg','','2022-11-08 18:53:40',1),(19,'seladah kriting',6,'surabaya','kg','','2022-11-08 19:05:36',1),(20,'seladah kriting',6,'surabaya','kg','','2022-11-08 19:13:30',2),(21,'seladah kriting',20,'tangerang','kg','dikirim menggunakan truk mang mang cakwe','2022-11-08 19:17:17',1),(22,'lobak',10,'jakarta','kg','','2022-11-08 19:18:41',2),(23,'cukini',1,'tangerang','kg','','2022-11-08 20:31:01',2),(24,'seladah kriting',12,'bandung','kg','','2022-11-08 20:40:35',1),(25,'pakcoy',30,'bandung','kg','','2022-11-09 12:35:11',2),(26,'seladah kriting',11,'surabaya','kg','','2022-11-09 12:38:58',2),(27,'seladah kriting',1,'jakarta','kg','','2022-11-09 12:41:10',1),(28,'pakcoy',40,'bandung','kg','','2022-11-09 16:36:40',1),(29,'lobak',20,'tangerang','kg','','2022-11-09 17:14:10',2),(30,'seladah kriting',29,'jakarta','kg','','2022-11-09 17:17:57',2),(31,'cukini',22,'tangerang','kg','','2022-11-09 20:08:57',1),(32,'cukini',12,'tangerang','kg','','2022-11-09 20:14:03',1);
/*!40000 ALTER TABLE `catatan_laporan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `penerimaan`
--

DROP TABLE IF EXISTS `penerimaan`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `penerimaan` (
  `id` int NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) NOT NULL,
  `qty` int DEFAULT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `from` varchar(100) DEFAULT NULL,
  `harga` varchar(10) DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penerimaan`
--

LOCK TABLES `penerimaan` WRITE;
/*!40000 ALTER TABLE `penerimaan` DISABLE KEYS */;
INSERT INTO `penerimaan` VALUES (3,'pakcoy',12,'kg','mang ucang','50000','2022-11-09 11:22:21',1),(4,'cukini',30,'kg','pak usman','60000','2022-11-09 12:11:15',1),(5,'seladah kriting',50,'kg','dede mang kiki','70000','2022-11-09 12:34:32',2),(6,'lobak',20,'kg','pak agus','90000','2022-11-09 12:53:05',1),(8,'seladah kriting',20,'kg','pak irwan','50000','2022-11-09 15:23:02',1),(9,'lobak',20,'kg','ujang','100000','2022-11-09 15:59:16',1),(10,'lobak',22,'kg','oman','120000','2022-11-09 16:28:28',1),(11,'kacang hijau',60,'kg','pak umar','300000','2022-11-09 20:44:21',1),(12,'lobak',23,'kg','mang icang','40000','2022-11-10 09:44:16',1),(13,'kacang hijau',30,'kg','icang','50000','2022-11-10 09:54:33',1),(14,'kacang hijau',10,'kg','ujang sandi','10000','2022-11-10 10:00:12',1),(15,'kentang',20,'kg','pak usman','30000','2022-11-10 10:24:24',1),(16,'jagung',50,'kg','Pak Kamal','300000','2022-11-10 11:50:43',1);
/*!40000 ALTER TABLE `penerimaan` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pengiriman`
--

DROP TABLE IF EXISTS `pengiriman`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `pengiriman` (
  `id` int NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `satuan` varchar(100) DEFAULT NULL,
  `tujuan` varchar(100) DEFAULT NULL,
  `deskripsi` text,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  `status` int NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengiriman`
--

LOCK TABLES `pengiriman` WRITE;
/*!40000 ALTER TABLE `pengiriman` DISABLE KEYS */;
INSERT INTO `pengiriman` VALUES (9,'seladah kriting',5,'kg','bandung','pasar bandung','2022-11-08 14:10:58',1),(10,'seladah kriting',6,'kg','surabaya','','2022-11-08 18:09:29',2),(11,'seladah kriting',20,'kg','tangerang','dikirim menggunakan truk mang mang cakwe','2022-11-08 19:16:31',1),(12,'lobak',10,'kg','jakarta','','2022-11-08 19:18:15',2),(13,'cukini',1,'kg','tangerang','','2022-11-08 20:26:37',2),(14,'seladah kriting',12,'kg','bandung','','2022-11-08 20:40:28',1),(15,'pakcoy',40,'kg','bandung','','2022-11-09 09:33:54',1),(16,'pakcoy',30,'kg','bandung','','2022-11-09 12:33:47',2),(17,'seladah kriting',11,'kg','surabaya','','2022-11-09 12:38:40',2),(18,'seladah kriting',1,'kg','jakarta','','2022-11-09 12:40:39',1),(19,'lobak',20,'kg','tangerang','','2022-11-09 17:13:55',2),(20,'seladah kriting',29,'kg','jakarta','','2022-11-09 17:17:48',2),(21,'cukini',22,'kg','tangerang','','2022-11-09 19:50:36',1),(22,'pakcoy',2,'kg','tangerang','','2022-11-09 20:09:32',0),(23,'cukini',12,'kg','tangerang','','2022-11-09 20:11:16',1);
/*!40000 ALTER TABLE `pengiriman` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `status` (
  `id` int NOT NULL AUTO_INCREMENT,
  `status` varchar(100) CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `status_UN` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (3,'canceled'),(2,'pendding'),(1,'success');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `stok_barang`
--

DROP TABLE IF EXISTS `stok_barang`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `stok_barang` (
  `id` int NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) DEFAULT NULL,
  `qty` int DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=42 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stok_barang`
--

LOCK TABLES `stok_barang` WRITE;
/*!40000 ALTER TABLE `stok_barang` DISABLE KEYS */;
INSERT INTO `stok_barang` VALUES (28,'lobak',82,'2022-11-07 07:59:12'),(29,'pakcoy',34,'2022-11-07 08:00:26'),(30,'seladah kriting',49,'2022-11-07 08:02:21'),(31,'cukini',36,'2022-11-07 08:03:36'),(32,'kacang hijau',130,'2022-11-10 09:59:12'),(40,'kentang',40,'2022-11-10 11:42:07'),(41,'jagung',50,'2022-11-10 11:52:53');
/*!40000 ALTER TABLE `stok_barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `warehouse`
--

DROP TABLE IF EXISTS `warehouse`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `warehouse` (
  `id` int NOT NULL AUTO_INCREMENT,
  `alamat` text,
  `nama` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `warehouse`
--

LOCK TABLES `warehouse` WRITE;
/*!40000 ALTER TABLE `warehouse` DISABLE KEYS */;
/*!40000 ALTER TABLE `warehouse` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'agrioduct'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2022-11-10 12:45:33
