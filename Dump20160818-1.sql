-- MySQL dump 10.13  Distrib 5.7.12, for Win64 (x86_64)
--
-- Host: localhost    Database: 95lms
-- ------------------------------------------------------
-- Server version	5.7.14-log

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
-- Table structure for table `eventmanagement`
--

DROP TABLE IF EXISTS `eventmanagement`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `eventmanagement` (
  `ideventManagement` int(11) NOT NULL AUTO_INCREMENT,
  `eName` varchar(45) DEFAULT NULL,
  `venue` varchar(100) DEFAULT NULL,
  `speaker1` varchar(45) DEFAULT NULL,
  `speaker2` varchar(45) DEFAULT NULL,
  `speaker3` varchar(45) DEFAULT NULL,
  `sponser1` varchar(45) DEFAULT NULL,
  `sponser2` varchar(45) DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  `imageName` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`ideventManagement`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `eventmanagement`
--

LOCK TABLES `eventmanagement` WRITE;
/*!40000 ALTER TABLE `eventmanagement` DISABLE KEYS */;
INSERT INTO `eventmanagement` VALUES (1,'gdfg','fdgfdgfdg','fdgdfg','fdgdfgfd','gdfgd','fdgdfg','fdgdfgd','dfgdfgf','067899'),(2,'ghgfhgfh','gfhghghgf','hfghgfhfgh','fghgf','fghgf','hfghgfhgfh','ffhfghfhfggf','12.00','IMG_1739.jpg');
/*!40000 ALTER TABLE `eventmanagement` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `lechall`
--

DROP TABLE IF EXISTS `lechall`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `lechall` (
  `idlecHall` int(11) NOT NULL AUTO_INCREMENT,
  `batch` varchar(45) DEFAULT NULL,
  `moduleName` varchar(50) DEFAULT NULL,
  `hallNumber` varchar(45) DEFAULT NULL,
  `time` varchar(30) DEFAULT NULL,
  PRIMARY KEY (`idlecHall`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `lechall`
--

LOCK TABLES `lechall` WRITE;
/*!40000 ALTER TABLE `lechall` DISABLE KEYS */;
INSERT INTO `lechall` VALUES (1,'15.1 Computing','	CS-System Design','Hall 01','9.00am-12.00pm'),(2,'15.1 Computing','	CS-System Design','Hall 03','9.00am-12.00pm'),(3,'15.1 Computing','	CS-System Design','Hall 02','9.00am-12.00pm'),(4,'15.1 Computing','	CS-System Design','Hall 01','9.00am-12.00pm'),(5,'15.1 Computing','	CS-System Design','Hall 01','9.00am-12.00pm');
/*!40000 ALTER TABLE `lechall` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `leclab`
--

DROP TABLE IF EXISTS `leclab`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `leclab` (
  `idleclab` int(11) NOT NULL AUTO_INCREMENT,
  `batch` varchar(45) DEFAULT NULL,
  `groupNumber` varchar(45) DEFAULT NULL,
  `moduleName` varchar(45) DEFAULT NULL,
  `labNumber` varchar(45) DEFAULT NULL,
  `time` varchar(45) DEFAULT NULL,
  PRIMARY KEY (`idleclab`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `leclab`
--

LOCK TABLES `leclab` WRITE;
/*!40000 ALTER TABLE `leclab` DISABLE KEYS */;
INSERT INTO `leclab` VALUES (1,'15.1 Computing','Group 02','CS-System Design','	Lab 02','9.00am - 12.00pm'),(2,'15.1 Computing','Group 02','CS-System Design','	Lab 02','9.00am - 12.00pm');
/*!40000 ALTER TABLE `leclab` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `modules`
--

DROP TABLE IF EXISTS `modules`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `modules` (
  `id` int(6) unsigned NOT NULL AUTO_INCREMENT,
  `moduleCode` varchar(10) NOT NULL,
  `moduleName` varchar(200) NOT NULL,
  `degreeProgramm` varchar(100) DEFAULT NULL,
  `year` varchar(20) DEFAULT NULL,
  `faculty` varchar(45) NOT NULL,
  `fileName` varchar(200) DEFAULT NULL,
  `filePath` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `modules`
--

LOCK TABLES `modules` WRITE;
/*!40000 ALTER TABLE `modules` DISABLE KEYS */;
INSERT INTO `modules` VALUES (1,'BMIS113','System Design Project','Computer Science','Year 0','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(2,'ISAD131','Database Management System II','Computer Science','Year 0','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(3,'BMIS113','System Design Project','Computer Science','Year 1','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(4,'ISAD131','System Design Project','ghfgh','Year 2','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(5,'BMIS113','System Design Project','ghfgh','Year 2','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(6,'BMIS113','System Design Project','fdgfdg','Year 3','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(7,'BMIS113','System Design Project','gfdgf','Year 4','School of Management',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(8,'BMIS113','System Design Project','dfgfdg','PGD','School of Management',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(9,'BMIS113','System Design Project','Computer Science','PGD','School of Management',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(10,'BMIS113','System Design Project','Computer Science','PGD','School of Management',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(11,'ISAD131','System Design Project','fddsf','Year 1','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(12,'BMIS405',' Business Policy and Strategy','','Year 4','School of Management',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(13,'CP002','Academic Writing (AW)','','Year 0','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(14,'BMIS301',' Industrial Training','','Year 3','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(15,'CP001','Fundamentals of Mathematics (Maths)','','Year 0','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(16,'CP003','Introduction to Statistics (Stat)','','Year 0','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(17,'CP004','Introduction to Computer Applications (ICA)','','Year 0','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(18,'BIMS110','System Software','','year 1','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(19,'BMIS201',' Management Practices','','year 2','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(20,'CS204','Mathematics II','','year 2','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(21,'CP006','Application Development with C Language (C Proj)','','Year 0','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(22,'CP005','Communication and Business Skills (CBS)','','Year 0','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(23,'BMIS303',' Databases and information Resource Management','','Year 3','School of Management',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(24,'CS203',' Digital Image Processing','','year 2','School of Computing',NULL,'uploads/Internet_Technology_Assignment_15.1.docx'),(25,'BMIS108',' Programming in Java','','Year 1','School of Computing','filename','uploads/Internet_Technology_Assignment_15.1.docx'),(26,'BMIS203',' Data Structures and Algorithms','','Year 2','School of Computing','Internet_Technology_Assignment_15.1.docx','uploads/Internet_Technology_Assignment_15.1.docx'),(27,'BMIS209',' Object Oriented Programming II','','Year 2','School of Computing','Internet_Technology_Assignment_15.1.docx','uploads/Internet_Technology_Assignment_15.1.docx');
/*!40000 ALTER TABLE `modules` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `userid` int(11) NOT NULL AUTO_INCREMENT,
  `nic` varchar(10) NOT NULL,
  `email` varchar(45) NOT NULL,
  `fName` varchar(45) NOT NULL,
  `lName` varchar(45) NOT NULL,
  `contactNumber` varchar(10) NOT NULL,
  `password` varchar(45) DEFAULT NULL,
  `status` varchar(10) DEFAULT NULL,
  PRIMARY KEY (`userid`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'950409456v','ishan.firebirdz@gmail.com','ishan','darshana','0779093089','12345',NULL),(2,'987567345V','ishan.is.darshana@gmail.com','azkar','Moulana','0779093089','345345',NULL),(3,'','','azkar','','','','bita');
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

-- Dump completed on 2016-08-18 19:19:41
