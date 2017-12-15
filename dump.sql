-- MySQL dump 10.13  Distrib 5.7.20, for Linux (x86_64)
--
-- Host: localhost    Database: evaluation
-- ------------------------------------------------------
-- Server version	5.7.20-0ubuntu0.16.04.1

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
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `category` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `category_UNIQUE` (`category`)
) ENGINE=InnoDB AUTO_INCREMENT=18 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (3,'Action'),(7,'Adventure'),(1,'Comedy'),(16,'Crime'),(2,'Drama'),(17,'Fantasy'),(4,'Fatastic'),(12,'Historical'),(13,'Horror'),(8,'Judicial'),(6,'Medical'),(9,'Police'),(10,'Politics'),(15,'Romantic'),(5,'Science-fiction'),(14,'Superhero'),(11,'Thriller');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_movie`
--

DROP TABLE IF EXISTS `category_movie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_movie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `movie_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=26 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_movie`
--

LOCK TABLES `category_movie` WRITE;
/*!40000 ALTER TABLE `category_movie` DISABLE KEYS */;
INSERT INTO `category_movie` VALUES (4,2,3),(5,2,4),(6,2,5),(7,2,14),(16,1,3),(17,1,1),(18,5,3),(19,5,14),(20,6,5),(21,7,3),(22,7,5),(23,8,17),(24,9,17),(25,10,17);
/*!40000 ALTER TABLE `category_movie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `category_serie`
--

DROP TABLE IF EXISTS `category_serie`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `category_serie` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `serie_id` int(11) NOT NULL,
  `category_id` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=56 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `category_serie`
--

LOCK TABLES `category_serie` WRITE;
/*!40000 ALTER TABLE `category_serie` DISABLE KEYS */;
INSERT INTO `category_serie` VALUES (14,11,3),(15,11,2),(16,11,14),(17,13,3),(18,13,7),(19,13,2),(20,14,16),(21,14,2),(22,14,11),(23,15,3),(24,15,7),(25,15,1),(26,15,2),(27,16,2),(28,16,13),(29,17,2),(30,18,16),(31,18,4),(32,19,16),(33,19,2),(34,20,2),(35,20,5),(36,20,11),(41,22,2),(42,22,13),(43,23,3),(44,23,2),(45,23,12),(46,21,3),(47,21,2),(48,21,5),(49,21,14),(53,24,7),(54,24,2),(55,24,4);
/*!40000 ALTER TABLE `category_serie` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `movies`
--

DROP TABLE IF EXISTS `movies`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `movies` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `category_id` varchar(45) DEFAULT NULL,
  `release_date` year(4) DEFAULT NULL,
  `state_id` varchar(45) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `movies`
--

LOCK TABLES `movies` WRITE;
/*!40000 ALTER TABLE `movies` DISABLE KEYS */;
INSERT INTO `movies` VALUES (1,'Deadpool',NULL,2016,NULL,20,2),(2,'Justice League',NULL,2017,NULL,10,33),(5,'Suicide Squad',NULL,2016,NULL,10,2),(6,'I Am Legend',NULL,2007,NULL,20,4),(7,'Independence Day',NULL,1996,NULL,17,3),(8,'The Lord of the Rings: The Fellowship of the Ring',NULL,2001,NULL,9,20),(9,'The Lord of the Rings: The Two Towers',NULL,2002,NULL,15,20),(10,'The Lord of the Rings: The Return of the King',NULL,2003,NULL,20,40);
/*!40000 ALTER TABLE `movies` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `series`
--

DROP TABLE IF EXISTS `series`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `series` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(70) NOT NULL,
  `nb_seasons` int(11) DEFAULT NULL,
  `episodes` int(11) DEFAULT NULL,
  `release_date` year(4) DEFAULT NULL,
  `state_id` int(11) DEFAULT NULL,
  `price` int(11) NOT NULL,
  `stock` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`),
  UNIQUE KEY `nom_UNIQUE` (`name`)
) ENGINE=InnoDB AUTO_INCREMENT=25 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `series`
--

LOCK TABLES `series` WRITE;
/*!40000 ALTER TABLE `series` DISABLE KEYS */;
INSERT INTO `series` VALUES (11,'Arrow',6,123,2012,1,50,3),(13,'Banshee',4,40,2016,2,30,4),(14,'Breaking Bad',5,68,2008,2,80,2),(15,'Chuck',5,96,2007,2,40,10),(16,'Fear the Walking Dead',3,69,2015,1,60,9),(17,'Designated Survivor',2,30,2016,1,20,1),(18,'Lucifer',3,41,2016,1,50,4),(19,'Scorpion',4,82,2014,1,27,4),(20,'Stanger Things',2,24,2016,1,85,20),(21,'The Flash',4,78,2014,1,60,3),(22,'The Walking Dead',8,110,2010,1,79,12),(23,'Viking',5,53,2013,1,73,5),(24,'Game of thrones',7,72,2010,1,999,0);
/*!40000 ALTER TABLE `series` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `states`
--

DROP TABLE IF EXISTS `states`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `states` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `state` varchar(45) NOT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `id_UNIQUE` (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `states`
--

LOCK TABLES `states` WRITE;
/*!40000 ALTER TABLE `states` DISABLE KEYS */;
INSERT INTO `states` VALUES (1,'In Production'),(2,'Stopped'),(3,'Soon'),(4,'Last Season');
/*!40000 ALTER TABLE `states` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-12-15 15:26:41
