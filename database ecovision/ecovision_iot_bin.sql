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
-- Table structure for table `iot_bin`
--

DROP TABLE IF EXISTS `iot_bin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `iot_bin` (
  `username` varchar(50) DEFAULT NULL,
  `location` varchar(100) DEFAULT NULL,
  `pincode` varchar(6) DEFAULT NULL,
  `bin_type` varchar(20) DEFAULT NULL,
  `con` varchar(10) DEFAULT NULL,
  `confor` int DEFAULT NULL,
  KEY `username` (`username`),
  CONSTRAINT `iot_bin_ibfk_1` FOREIGN KEY (`username`) REFERENCES `details` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_0900_ai_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `iot_bin`
--

LOCK TABLES `iot_bin` WRITE;
/*!40000 ALTER TABLE `iot_bin` DISABLE KEYS */;
INSERT INTO `iot_bin` VALUES ('ammuakki62@gmail.com','Kramthi nagar,road num;4,plot num:4/4','570009','community','4578965233',1),('konduri.gagan04@gmail.com','hyderabad','521101','individual','7842559116',1),('ammuakki62@gmail.com','hyderabad','570009','individual','7842559116',1),('vamsi2003@gmail.com','hyderabad','570009','individual','4578965233',0);
/*!40000 ALTER TABLE `iot_bin` ENABLE KEYS */;
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
