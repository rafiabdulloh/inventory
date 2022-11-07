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
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang`
--

LOCK TABLES `barang` WRITE;
/*!40000 ALTER TABLE `barang` DISABLE KEYS */;
INSERT INTO `barang` VALUES (1,'Pakcoy',20,'kg','hasil panen dari kebun','Pak Dadang','2022-11-06 07:17:43'),(2,'Lobak',23,'kg','hasil panen dari kebun juga','Pak Dadang','2022-11-06 07:18:57'),(3,'Cukini',33,'kg','hasil panen dari anak pkl kelompok 3','kurniawan','2022-11-06 07:21:35'),(10,'',1221,'kg','asdfsdaf','asfd','2022-11-06 14:23:59'),(11,'',12,'kg','asdf','asdf','2022-11-06 14:25:35'),(12,'',44,'kg','sadf','sdaf','2022-11-06 14:27:03'),(13,'',12,NULL,'asdf','asdf','2022-11-06 14:27:51');
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
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `barang_keluar`
--

LOCK TABLES `barang_keluar` WRITE;
/*!40000 ALTER TABLE `barang_keluar` DISABLE KEYS */;
INSERT INTO `barang_keluar` VALUES (1,'Pakcoy',2,'kg','jakarta','dikirim menggunakan truck','2022-11-06 14:07:20');
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catatan_laporan`
--

LOCK TABLES `catatan_laporan` WRITE;
/*!40000 ALTER TABLE `catatan_laporan` DISABLE KEYS */;
INSERT INTO `catatan_laporan` VALUES (1,'Pakcoy',2,'jakarta','kg','dikirim menggunakan truck','2022-11-06 14:07:20');
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
  `harga` int DEFAULT NULL,
  `date_created` datetime DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `penerimaan`
--

LOCK TABLES `penerimaan` WRITE;
/*!40000 ALTER TABLE `penerimaan` DISABLE KEYS */;
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
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pengiriman`
--

LOCK TABLES `pengiriman` WRITE;
/*!40000 ALTER TABLE `pengiriman` DISABLE KEYS */;
/*!40000 ALTER TABLE `pengiriman` ENABLE KEYS */;
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
) ENGINE=InnoDB AUTO_INCREMENT=10 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `stok_barang`
--

LOCK TABLES `stok_barang` WRITE;
/*!40000 ALTER TABLE `stok_barang` DISABLE KEYS */;
INSERT INTO `stok_barang` VALUES (1,'Pakcoy',1295,'2022-11-06 07:17:43'),(2,'lobak',35,'2022-11-06 07:18:57'),(3,'cukini',33,'2022-11-06 07:21:35'),(4,'seladah',40,'2022-11-06 14:09:49');
/*!40000 ALTER TABLE `stok_barang` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `user` (
  `id` int NOT NULL AUTO_INCREMENT,
  `alias` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
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

-- Dump completed on 2022-11-06 19:26:57
