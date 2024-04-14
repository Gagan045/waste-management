CREATE DATABASE  IF NOT EXISTS `ecovision` /*!40100 DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_0900_ai_ci */ /*!80016 DEFAULT ENCRYPTION='N' */;
USE `ecovision`;
-- MySQL dump 10.13  Distrib 8.0.31, for Win64 (x86_64)
--
-- Host: localhost    Database: ecovision
-- ------------------------------------------------------
-- Server version	8.0.31

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!50503 SET NAMES utf8 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_UNIQUE_CHECKS=@@UNIQUE_CHECKS, UNIQUE_CHECKS=0 */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

--
-- Table structure for table `eme`
--

DROP TABLE IF EXISTS `eme`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `eme` (
  `username` varchar(50) DEFAULT NULL,
  `cont` char(10) DEFAULT NULL,
  `bin_type` varchar(50) DEFAULT NULL,
  `cdate` date DEFAULT NULL,
  `location` varchar(50) DEFAULT NULL,
  `pincode` char(6) DEFAULT NULL,
  `trash_level` varchar(50) DEFAULT NULL,
  `confor` int DEFAULT NULL,
  KEY `username` (`username`),
  CONSTRAINT `eme_ibfk_1` FOREIGN KEY (`username`) REFERENCES `details` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eme`
--

LOCK TABLES `eme` WRITE;
/*!40000 ALTER TABLE `eme` DISABLE KEYS */;
INSERT INTO `eme` VALUES ('ammuakki62@gmail.com','7416363886','individual','2023-08-25','Kramthi nagar,road num;4,plot num:4/4','500079','medium',1),('ammuakki62@gmail.com','7416363886','community','2023-08-26','hyderabad','570009','high',1),('ammuakki62@gmail.com','7842559116','individual','2023-12-02','hyderabad','570009','medium',NULL),('ammuakki62@gmail.com','7842559116','individual','2023-12-02','hyderabad','570009','medium',NULL),('ammuakki62@gmail.com','7842559116','individual','2023-12-02','hyderabad','570009','medium',NULL);
/*!40000 ALTER TABLE `eme` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2024-02-16 23:14:29
