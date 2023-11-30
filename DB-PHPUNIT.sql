-- MySQL dump 10.13  Distrib 8.0.19, for Win64 (x86_64)
--
-- Host: localhost    Database: projetphpunit
-- ------------------------------------------------------
-- Server version	11.1.2-MariaDB

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
-- Table structure for table `assocrecingr`
--

CREATE DATABASE IF NOT EXISTS `projetphpunit` DEFAULT CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci;

DROP TABLE IF EXISTS `assocrecingr`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `assocrecingr` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idRecipe` int(11) NOT NULL,
  `idIngredient` int(11) NOT NULL,
  `quantité` varchar(100) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=28 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `assocrecingr`
--

LOCK TABLES `assocrecingr` WRITE;
/*!40000 ALTER TABLE `assocrecingr` DISABLE KEYS */;
INSERT INTO `assocrecingr` VALUES (1,1,1,'Quantité selon besoin'),(2,1,2,'Quantité selon besoin'),(3,1,3,'Quantité selon besoin'),(4,1,10,'Quantité selon besoin'),(5,1,11,'Quantité selon besoin'),(6,1,12,'Quantité selon besoin'),(7,1,13,'Quantité selon besoin'),(8,1,14,'Quantité selon besoin'),(9,1,15,'Quantité selon besoin'),(10,1,16,'Quantité selon besoin'),(11,1,17,'Quantité selon besoin'),(12,2,6,'Quantité selon besoin'),(13,2,7,'Quantité selon besoin'),(14,2,8,'Quantité selon besoin'),(15,2,9,'Quantité selon besoin'),(16,2,16,'Quantité selon besoin'),(17,2,18,'Quantité selon besoin'),(18,2,19,'Quantité selon besoin'),(19,2,20,'Quantité selon besoin'),(20,3,22,'Quantité selon besoin'),(21,3,23,'Quantité selon besoin'),(22,3,24,'Quantité selon besoin'),(23,3,25,'Quantité selon besoin'),(24,3,26,'Quantité selon besoin'),(25,3,27,'Quantité selon besoin'),(26,3,28,'Quantité selon besoin'),(27,3,29,'Quantité selon besoin');
/*!40000 ALTER TABLE `assocrecingr` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `categories`
--

DROP TABLE IF EXISTS `categories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `categories` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Entrée','entree.jpg'),(2,'Plat principal','plat.jpg'),(3,'Dessert','dessert.jpg');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `ingredients`
--

DROP TABLE IF EXISTS `ingredients`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `ingredients` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `price` float NOT NULL,
  `image` varchar(200) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=94 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `ingredients`
--

LOCK TABLES `ingredients` WRITE;
/*!40000 ALTER TABLE `ingredients` DISABLE KEYS */;
INSERT INTO `ingredients` VALUES (1,'Farine',2.5,''),(2,'Oeufs',1.2,''),(3,'Sucre',1,''),(4,'Sel',0.8,NULL),(5,'Poivre',0.5,NULL),(6,'Beurre',2,NULL),(7,'Lait',1.5,NULL),(8,'Levure chimique',0.7,NULL),(9,'Yaourt',1.8,NULL),(10,'Miel',3,NULL),(11,'Vanille',2.2,NULL),(12,'Chocolat noir',3.5,NULL),(13,'Chocolat au lait',3,NULL),(14,'Chocolat blanc',3.2,NULL),(15,'Amandes',4,NULL),(16,'Noisettes',3.8,NULL),(17,'Noix',4.5,NULL),(18,'Pistaches',5,NULL),(19,'Raisins secs',2.3,NULL),(20,'Cannelle',1.2,NULL),(21,'Gingembre',1.5,NULL),(22,'Muscade',1,NULL),(23,'Citron',0.8,NULL),(24,'Orange',1,NULL),(25,'Fraises',2.5,NULL),(26,'Framboises',3,NULL),(27,'Myrtilles',3.2,NULL),(28,'Pommes',2.2,NULL),(29,'Bananes',1.8,NULL),(30,'Ananas',2,NULL),(31,'Pêches',2.3,NULL),(32,'Abricots',2,NULL),(33,'Cerises',3.5,NULL),(34,'Kiwi',1.5,NULL),(35,'Melon',2.8,NULL),(36,'Pastèque',2,NULL),(37,'Courgette',1.2,NULL),(38,'Carottes',1.5,NULL),(39,'Poivrons',1,NULL),(40,'Tomates',0.8,NULL),(41,'Aubergines',1.2,NULL),(42,'Brocolis',1.5,NULL),(43,'Haricots verts',1,NULL),(44,'Champignons',1.8,NULL),(45,'Oignons',1.2,NULL),(46,'Ail',0.7,NULL),(47,'Persil',0.5,NULL),(48,'Basilic',0.8,NULL),(49,'Thym',0.7,NULL),(50,'Romarin',0.6,NULL),(51,'Coriandre',0.7,NULL),(52,'Menthe',0.6,NULL),(53,'Laurier',0.5,NULL),(54,'Curcuma',1.2,NULL),(55,'Cumin',0.8,NULL),(56,'Paprika',0.7,NULL),(57,'Curry',0.6,NULL),(58,'Safran',2,NULL),(59,'Câpres',1.5,NULL),(60,'Olives',1.8,NULL),(61,'Cornichons',1,NULL),(62,'Mayonnaise',2,NULL),(63,'Ketchup',1.5,NULL),(64,'Moutarde',1,NULL),(65,'Sauce soja',2.5,NULL),(66,'Vinaigre balsamique',3,NULL),(67,'Vinaigre de vin',2,NULL),(68,'Huile d olive',4,NULL),(69,'Huile de tournesol',2.5,NULL),(70,'Huile de colza',2.8,NULL),(71,'Huile de noix',3,NULL),(72,'Vin rouge',5,NULL),(73,'Vin blanc',4,NULL),(74,'Bières',2.5,NULL),(75,'Jus d orange',2,NULL),(76,'Jus de pomme',2.2,NULL),(77,'Eau gazeuse',1,NULL),(78,'Coca-Cola',1.5,NULL),(79,'Sprite',1.2,NULL),(80,'Glace vanille',3.5,NULL),(81,'Glace chocolat',3,NULL),(82,'Glace fraise',3.2,NULL),(83,'Fromage cheddar',2.8,NULL),(84,'Fromage mozzarella',2.5,NULL),(85,'Fromage bleu',3,NULL),(86,'Fromage brie',3.2,NULL),(87,'Saumon',6,NULL),(88,'Thon',4,NULL),(89,'Crevettes',5,NULL),(90,'Poulet',4.5,NULL),(91,'Boeuf',5,NULL),(92,'Porc',4,NULL),(93,'Agneau',6,NULL);
/*!40000 ALTER TABLE `ingredients` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `recipes`
--

DROP TABLE IF EXISTS `recipes`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `recipes` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(100) NOT NULL,
  `difficulty` float NOT NULL,
  `description` varchar(1000) DEFAULT NULL,
  `time` time DEFAULT NULL,
  `image` varchar(200) DEFAULT NULL,
  `idCategory` int(11) NOT NULL,
  `date` timestamp NOT NULL DEFAULT current_timestamp(),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=7 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `recipes`
--

LOCK TABLES `recipes` WRITE;
/*!40000 ALTER TABLE `recipes` DISABLE KEYS */;
INSERT INTO `recipes` VALUES (1,'Tarte aux pommes',3.5,'Délicieuse tarte aux pommes faite maison.','02:30:00',NULL,3,'2023-11-30 12:03:24'),(2,'Poulet rôti',4,'Un poulet rôti croustillant et savoureux.','01:45:00',NULL,2,'2023-11-30 12:03:24'),(3,'Salade César',2,'Une salade fraîche et délicieuse avec sa sauce César.','00:30:00',NULL,1,'2023-11-30 12:03:24');
/*!40000 ALTER TABLE `recipes` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `steps`
--

DROP TABLE IF EXISTS `steps`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!50503 SET character_set_client = utf8mb4 */;
CREATE TABLE `steps` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `idRecipe` int(11) NOT NULL,
  `number` int(11) NOT NULL,
  `description` varchar(1000) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=17 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `steps`
--

LOCK TABLES `steps` WRITE;
/*!40000 ALTER TABLE `steps` DISABLE KEYS */;
INSERT INTO `steps` VALUES (1,1,1,'Préparez la pâte et étalez-la dans le moule.'),(2,1,2,'Épluchez et coupez les pommes, puis disposez-les sur la pâte.'),(3,1,3,'Saupoudrez de sucre et faites cuire au four.'),(4,3,1,'Préparez la sauce César et réservez-la.'),(5,3,2,'Coupez les ingrédients de la salade et mélangez-les dans un grand bol.'),(6,2,1,'Préparez le poulet en le nettoyant et en le séchant.'),(7,2,2,'Mélangez le beurre, le lait, la levure chimique et le yaourt pour obtenir une marinade.'),(8,2,3,'Badigeonnez le poulet avec la marinade et assaisonnez avec les noisettes, la cannelle, le gingembre, et la muscade.'),(9,2,4,'Faites rôtir le poulet au four jusqu à ce qu il soit doré et croustillant.');
/*!40000 ALTER TABLE `steps` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Dumping routines for database 'projetphpunit'
--
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-30 14:09:49
