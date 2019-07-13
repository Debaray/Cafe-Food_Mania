-- MySQL dump 10.16  Distrib 10.1.21-MariaDB, for Win32 (AMD64)
--
-- Host: localhost    Database: localhost
-- ------------------------------------------------------
-- Server version	10.1.21-MariaDB

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
-- Table structure for table `admin`
--

DROP TABLE IF EXISTS `admin`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `admin` (
  `a_ID` int(11) NOT NULL,
  `username` varchar(50) NOT NULL,
  `password` varchar(50) NOT NULL,
  PRIMARY KEY (`a_ID`,`username`,`password`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `admin`
--

LOCK TABLES `admin` WRITE;
/*!40000 ALTER TABLE `admin` DISABLE KEYS */;
INSERT INTO `admin` VALUES (111,'Deba','1234'),(112,'Neaz','5678');
/*!40000 ALTER TABLE `admin` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `appetizers`
--

DROP TABLE IF EXISTS `appetizers`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `appetizers` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(50) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `appetizers_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `appetizers`
--

LOCK TABLES `appetizers` WRITE;
/*!40000 ALTER TABLE `appetizers` DISABLE KEYS */;
INSERT INTO `appetizers` VALUES (1,'Spring Roll(6pcs)','180/=',1),(2,'Thai Cosmos Wonthon(6pcs)','220/=',1),(3,'Chicken Nuggets(6pcs Nuggets)','190/=',1),(4,'Buffalo Wings(6pcs Crispy)','240/=',1),(5,'French Fries','100/=',1),(6,'Cheese French Fries','150/=',1),(7,'Masala Beef French Fries','200/=',1),(8,'Saulted Mushroom','200/=',1);
/*!40000 ALTER TABLE `appetizers` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `bbq_grilled`
--

DROP TABLE IF EXISTS `bbq_grilled`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `bbq_grilled` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `bbq_grilled_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `bbq_grilled`
--

LOCK TABLES `bbq_grilled` WRITE;
/*!40000 ALTER TABLE `bbq_grilled` DISABLE KEYS */;
INSERT INTO `bbq_grilled` VALUES (65,'Quarter BBQ Chicken','260/=',12),(66,'Half BBQ Chicken','390/=',12),(67,'The Lava Stone Chicken Meal','400/=',12),(68,'Quarter Grilled Chicken','250/=',12),(69,'Half Grilled Chicken','400/=',12);
/*!40000 ALTER TABLE `bbq_grilled` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `beef`
--

DROP TABLE IF EXISTS `beef`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `beef` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `beef_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `beef`
--

LOCK TABLES `beef` WRITE;
/*!40000 ALTER TABLE `beef` DISABLE KEYS */;
INSERT INTO `beef` VALUES (80,'Sizzling Beef','400/=',17),(81,'Beef Chilli Onion','450/=',17),(82,' Beef Green Curry Pest','500/=',17),(83,'Beef Ginger Mushroom','500/=',17);
/*!40000 ALTER TABLE `beef` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `burger`
--

DROP TABLE IF EXISTS `burger`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `burger` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `burger_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `burger`
--

LOCK TABLES `burger` WRITE;
/*!40000 ALTER TABLE `burger` DISABLE KEYS */;
INSERT INTO `burger` VALUES (38,'Classic Beef','220/=',7),(39,'Beef Cheese','220/=',7),(40,'Double Mac Cheese Burger','350/=',7),(41,'Classic Chicken','200/=',7),(42,'Chicken Cheese','230/=',7),(43,'BBQ Chicken Steak Burger ','260/=',7),(44,'Crispy Chicken Cheese Burger','270/=',7);
/*!40000 ALTER TABLE `burger` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `catagories`
--

DROP TABLE IF EXISTS `catagories`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `catagories` (
  `C_id` int(11) NOT NULL,
  `C_name` varchar(255) NOT NULL,
  PRIMARY KEY (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `catagories`
--

LOCK TABLES `catagories` WRITE;
/*!40000 ALTER TABLE `catagories` DISABLE KEYS */;
INSERT INTO `catagories` VALUES (1,'Appetizers'),(2,'Soup'),(3,'Pizza Italian (Thin Crust)'),(4,'Chicago Style Pizza (Deep Dish)'),(5,'Pasta & Spaghetti'),(6,'Chowmein & Coupsuey'),(7,'Burger'),(8,'Sandwich'),(9,'Shawarma (Arabian)'),(10,'Wrap'),(11,' Fried Chicken'),(12,'BBQ & Grilled'),(15,'Rice'),(16,'Chicken'),(17,'Beef'),(18,'Prawn'),(19,'Set Menu');
/*!40000 ALTER TABLE `catagories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chicago_style_pizza`
--

DROP TABLE IF EXISTS `chicago_style_pizza`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chicago_style_pizza` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `chicago_style_pizza_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chicago_style_pizza`
--

LOCK TABLES `chicago_style_pizza` WRITE;
/*!40000 ALTER TABLE `chicago_style_pizza` DISABLE KEYS */;
INSERT INTO `chicago_style_pizza` VALUES (22,'BBQ Deep Dish(Secret Sauce,Mozarella Cheese,Parmesan Cheese,Capsicum,Tomato,Black Olive)','S 400/=     M  750/=    L 950/= ',4),(23,'The Meat Ball(Secret Sauce,Mozarella Cheese,Parmesan Cheese,Beef Sausage, Meat Ball,Red Chili,Tomato)','S 350/=    M  650/=   L  890/=',4),(24,'Chef Signature Deep Dish(Secret Sauce,Mozarella Cheese,Parmesan Cheese,Chicken,Beef Sausage,Capsicum,Black Olive)','S 400/=    M  750/=    L  950/=',4),(25,'Deep In Cheese(Secret Sauce,Mozarella Cheese,Parmesan Cheese,Tomato,Red Chili,Capsicum,Black Olive)','S 350/=    M  650/=    L 900/=',4);
/*!40000 ALTER TABLE `chicago_style_pizza` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chicken`
--

DROP TABLE IF EXISTS `chicken`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chicken` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `chicken_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chicken`
--

LOCK TABLES `chicken` WRITE;
/*!40000 ALTER TABLE `chicken` DISABLE KEYS */;
INSERT INTO `chicken` VALUES (74,'Chicken Sizzling','350/=',16),(75,'Sweet N Sour Chicken','400/=',16),(76,'Thai Fried Chicken (8pcs)','600/=',16),(77,'Chicken Chilli Onion','420/=',16),(78,'Chicken With Garlic Sauce','500/=',16),(79,'Chicken With Green Curry Sauce','500/=',16);
/*!40000 ALTER TABLE `chicken` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `chowmeincoupsuey`
--

DROP TABLE IF EXISTS `chowmeincoupsuey`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `chowmeincoupsuey` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `chowmeincoupsuey_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `chowmeincoupsuey`
--

LOCK TABLES `chowmeincoupsuey` WRITE;
/*!40000 ALTER TABLE `chowmeincoupsuey` DISABLE KEYS */;
INSERT INTO `chowmeincoupsuey` VALUES (32,'Chicken Cheese Chowmein','200/=',6),(33,'Szechuan Chowmein','220/=',6),(34,'Thai Style Chowmein','240/=',6),(35,'Cheif Signature Chowmein','250/=',6),(36,'American Coupsuey','280/=',6),(37,'Chinese Coupsuey','280/=',6);
/*!40000 ALTER TABLE `chowmeincoupsuey` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `event`
--

DROP TABLE IF EXISTS `event`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `event` (
  `E_id` int(11) NOT NULL,
  `E_des` mediumtext NOT NULL,
  PRIMARY KEY (`E_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `event`
--

LOCK TABLES `event` WRITE;
/*!40000 ALTER TABLE `event` DISABLE KEYS */;
INSERT INTO `event` VALUES (1,'Date : 17/08/17 Eating Unlimited 10 different flavours of pizza and Unlimted drinks @BDT 799'),(2,'Date : 19/08/17 Eating Unlimited Burger Offer and  drinks @BDT 599'),(3,'Date : 20/08/17 Eating Unlimited 10 different types of pasta @BDT 999'),(4,'Date : 22/08/17 Eating Unlimited 66 different items and Unlimted drinks @BDT 999');
/*!40000 ALTER TABLE `event` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `friedchicken`
--

DROP TABLE IF EXISTS `friedchicken`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `friedchicken` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `friedchicken_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `friedchicken`
--

LOCK TABLES `friedchicken` WRITE;
/*!40000 ALTER TABLE `friedchicken` DISABLE KEYS */;
INSERT INTO `friedchicken` VALUES (59,'Crispy/Spicy Fried Chicken (1 pcs)','90/=',11),(60,'Crispy/Spicy Fried Chicken (2 pcs)','180/=',11),(61,'Crispy/Spicy Fried Chicken (8 pcs)','690/=',11),(62,'Crispy/Spicy Fried Chicken (12 pcs)','1050/=',11),(63,'Crispy/Spicy Fried Chicken Wings (6 pcs)','300/=',11),(64,'Crispy/Spicy Fried Garlic Chicken With Tomato Sauce (2 pcs)','350/=\r\n',11);
/*!40000 ALTER TABLE `friedchicken` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pastaspaghetti`
--

DROP TABLE IF EXISTS `pastaspaghetti`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pastaspaghetti` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `pastaspaghetti_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pastaspaghetti`
--

LOCK TABLES `pastaspaghetti` WRITE;
/*!40000 ALTER TABLE `pastaspaghetti` DISABLE KEYS */;
INSERT INTO `pastaspaghetti` VALUES (26,'Pasta Basta (Secret Sauce,Chicken,Mushroom,Cheese)','300/=',5),(27,'Pasta Europa (Secret Sauce,Beef Chili,Mushroom,Cheese)','300/=',5),(28,'Pasta Meditarian (Secret Sauce,Chili,Cheese,Capsicum,Tuna Shrimp)','330/=',5),(29,'BBQ Chicken Pasta (BBQ Sauce,BBQ Chicken,Cheese,Mushroom)','295/=',5),(30,'Spaghetti Bolognese','290/=',5),(31,'Cheif Signature Spaghetti With Prawn','330/=',5);
/*!40000 ALTER TABLE `pastaspaghetti` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `pizza_italian`
--

DROP TABLE IF EXISTS `pizza_italian`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `pizza_italian` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `pizza_italian_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `pizza_italian`
--

LOCK TABLES `pizza_italian` WRITE;
/*!40000 ALTER TABLE `pizza_italian` DISABLE KEYS */;
INSERT INTO `pizza_italian` VALUES (16,'Four Seasons(Secret Sause,Cheese,chicken,Mushroom,Capsicum)','S 300/=      M 600/=     L 900/=',3),(17,'BBQ Chicken Pizza ( Secret Sause,BBQ Chicken, Red Chili,Mushroom, Black Olive)','S 350/=    M  700/=     L  1000/=',3),(18,'Mexican Hot (Secret Sauce,Chinese Beef,Green Chili,Tomato)',' S 400/=    M   700/=   L 1000/=',3),(19,'Meat Lovers(Secret Sauce,Cheese,Beef Swagger,Black Olive)','S 400/=    M  650/=   L  950/=',3),(20,'Pizza Vegetarian(Secret Sauce,Cheese,Mushroom,Capsicum,Tomato)','S 300/=     M  600/=   L  900/=',3),(21,'Fishy Pizza(Secret Sauce ,Chese,Tuna Shrimp,Capsicum,Tomato)','S 320/=    M   550/=   L   850/=',3);
/*!40000 ALTER TABLE `pizza_italian` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `prawn`
--

DROP TABLE IF EXISTS `prawn`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `prawn` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `prawn_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `prawn`
--

LOCK TABLES `prawn` WRITE;
/*!40000 ALTER TABLE `prawn` DISABLE KEYS */;
INSERT INTO `prawn` VALUES (84,'Sizzling Prawn','450/=',18),(85,'Prwan Chili Onion','480/=',18),(86,'Prwan Curry With Green Curry Sauce','550/=',18);
/*!40000 ALTER TABLE `prawn` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `rice`
--

DROP TABLE IF EXISTS `rice`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `rice` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `rice_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `rice`
--

LOCK TABLES `rice` WRITE;
/*!40000 ALTER TABLE `rice` DISABLE KEYS */;
INSERT INTO `rice` VALUES (70,'Thai Fried Rice','300/=',15),(71,'BBQ  Fried Rice','350/=',15),(72,'Masala Fried Rice','350/=',15),(73,'Mexican Fried Rice','400/=',15);
/*!40000 ALTER TABLE `rice` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `sandwich`
--

DROP TABLE IF EXISTS `sandwich`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `sandwich` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `sandwich_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `sandwich`
--

LOCK TABLES `sandwich` WRITE;
/*!40000 ALTER TABLE `sandwich` DISABLE KEYS */;
INSERT INTO `sandwich` VALUES (45,'Club Sandwich','200/=',8),(46,'Grilled Beef With Cheese','230/=',8),(47,'Cheese Tab Sandwich','330/=',8),(48,'Chicken Salad Sandwich','280/=',8),(49,'Tuna Shrimp With Parmesan Cheese Special Sandwich','350/=',8);
/*!40000 ALTER TABLE `sandwich` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `setmenu`
--

DROP TABLE IF EXISTS `setmenu`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `setmenu` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(20) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `setmenu_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `setmenu`
--

LOCK TABLES `setmenu` WRITE;
/*!40000 ALTER TABLE `setmenu` DISABLE KEYS */;
INSERT INTO `setmenu` VALUES (87,'Set-A : Fried rice,fried chicken,vegetable','150/=',19),(88,'Set-B : Fried rice,fried chicken(thai 2pcs),vegetable','200/=',19),(89,'Set-C : Fried rice,fried chicken(thai 2pcs),vegetable,Chicken Sizzling','280/=',19),(90,'Set-D : Fried rice,fried chicken(thai 2pcs),vegetable,Chicken Sizzling,Sizzling Beef,Prwan Chili Onion	','450/=',19);
/*!40000 ALTER TABLE `setmenu` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `shawarma`
--

DROP TABLE IF EXISTS `shawarma`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `shawarma` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `shawarma_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `shawarma`
--

LOCK TABLES `shawarma` WRITE;
/*!40000 ALTER TABLE `shawarma` DISABLE KEYS */;
INSERT INTO `shawarma` VALUES (50,'Beef Shawarma','170/=',9),(51,'Chicken Shawarma','150/=',9),(52,'Vegetable Cheesy Shawarma','150/=',9),(53,'Afgani Shawarma','195/=',9),(54,'Special Shawarma with Tuna Shrimp','200/=',9);
/*!40000 ALTER TABLE `shawarma` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `soup`
--

DROP TABLE IF EXISTS `soup`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `soup` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(20) NOT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `soup_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `soup`
--

LOCK TABLES `soup` WRITE;
/*!40000 ALTER TABLE `soup` DISABLE KEYS */;
INSERT INTO `soup` VALUES (9,'Creme Mushroom Soup','300/=',2),(10,'Thai Soup (Thick)','300/=',2),(11,'Special Lemon Thai Grass Soup','400/=',2),(12,'Thai Soup Clear','250/=',2),(13,'Thai Vegetable Soup','300/=',2),(14,'Special Corn Soup','350/=',2),(15,'Cheif Signature Soup','400/=',2);
/*!40000 ALTER TABLE `soup` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `wrap`
--

DROP TABLE IF EXISTS `wrap`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `wrap` (
  `id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `price` varchar(50) DEFAULT NULL,
  `c_id` int(11) DEFAULT NULL,
  PRIMARY KEY (`id`),
  KEY `c_id` (`c_id`),
  CONSTRAINT `wrap_ibfk_1` FOREIGN KEY (`c_id`) REFERENCES `catagories` (`C_id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `wrap`
--

LOCK TABLES `wrap` WRITE;
/*!40000 ALTER TABLE `wrap` DISABLE KEYS */;
INSERT INTO `wrap` VALUES (55,'Beef Wrap','190/=',10),(56,'Chicken Wrap','180/=',10),(57,'Vegetable Wrap','170/=',10),(58,'Chicken Cheese Wrap','250/=',10);
/*!40000 ALTER TABLE `wrap` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2017-08-19 22:21:13
