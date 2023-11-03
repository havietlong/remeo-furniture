-- MariaDB dump 10.19  Distrib 10.4.28-MariaDB, for Win64 (AMD64)
--
-- Host: 127.0.0.1    Database: remeo_furniture
-- ------------------------------------------------------
-- Server version	10.4.28-MariaDB

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
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=6 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `categories`
--

LOCK TABLES `categories` WRITE;
/*!40000 ALTER TABLE `categories` DISABLE KEYS */;
INSERT INTO `categories` VALUES (1,'Table'),(2,'Chair'),(3,'Light'),(4,'Sofa');
/*!40000 ALTER TABLE `categories` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders`
--

DROP TABLE IF EXISTS `orders`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `price` int(11) NOT NULL,
  `id_status` int(11) NOT NULL,
  `id_user` int(11) NOT NULL,
  `created_at` timestamp NOT NULL DEFAULT current_timestamp(),
  `receiver` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `phone_number` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk.orders_user_idx` (`id_user`),
  KEY `fk.orders_status_idx` (`id_status`),
  CONSTRAINT `fk.orders_status` FOREIGN KEY (`id_status`) REFERENCES `status` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk.orders_user` FOREIGN KEY (`id_user`) REFERENCES `user` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=24 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders`
--

LOCK TABLES `orders` WRITE;
/*!40000 ALTER TABLE `orders` DISABLE KEYS */;
INSERT INTO `orders` VALUES (15,3750,1,1,'2023-11-02 02:08:02','HALONG','133 Xuan Thuy, Cau Giay, DIch Vong Hau',585738273),(16,3420,2,1,'2023-11-02 02:08:02','HALONG','133 Xuan Thuy, Cau Giay, DIch Vong Hau',585738273),(17,5487,2,1,'2023-11-02 02:08:02','HALONG','133 Xuan Thuy, Cau Giay, DIch Vong Hau',585738273),(18,5487,2,1,'2023-11-03 02:08:02','HALONG','133 Xuan Thuy, Cau Giay, DIch Vong Hau',585738273),(19,5487,2,1,'2023-11-04 02:08:02','HALONG','133 Xuan Thuy, Cau Giay, DIch Vong Hau',585738273),(20,5487,2,1,'2023-11-04 02:08:02','HALONG','133 Xuan Thuy, Cau Giay, DIch Vong Hau',585738273),(21,5487,2,1,'2023-12-04 02:08:02','HALONG','133 Xuan Thuy, Cau Giay, DIch Vong Hau',585738273),(22,5487,2,1,'2023-10-04 02:08:02','HALONG','133 Xuan Thuy, Cau Giay, DIch Vong Hau',585738273),(23,1500,1,1,'2023-11-02 23:50:27','HA VIETLONG','133 Xuan Thuy, Cau Giay, DIch Vong Hau',585738273);
/*!40000 ALTER TABLE `orders` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `orders_detail`
--

DROP TABLE IF EXISTS `orders_detail`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `orders_detail` (
  `id_order` int(11) NOT NULL,
  `id_product` int(11) NOT NULL,
  `quantity` int(11) NOT NULL,
  KEY `fk.ordersD_orders_idx` (`id_order`),
  KEY `fk.ordersD_products_idx` (`id_product`),
  CONSTRAINT `fk.ordersD_orders` FOREIGN KEY (`id_order`) REFERENCES `orders` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION,
  CONSTRAINT `fk.ordersD_products` FOREIGN KEY (`id_product`) REFERENCES `products` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `orders_detail`
--

LOCK TABLES `orders_detail` WRITE;
/*!40000 ALTER TABLE `orders_detail` DISABLE KEYS */;
INSERT INTO `orders_detail` VALUES (15,4,7),(15,1,5),(21,5,3);
/*!40000 ALTER TABLE `orders_detail` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `products`
--

DROP TABLE IF EXISTS `products`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `products` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `price` int(255) NOT NULL,
  `description` varchar(45) NOT NULL,
  `picture` varchar(300) NOT NULL,
  `id_category` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk.products_category_idx` (`id_category`),
  CONSTRAINT `fk.products_category` FOREIGN KEY (`id_category`) REFERENCES `categories` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `products`
--

LOCK TABLES `products` WRITE;
/*!40000 ALTER TABLE `products` DISABLE KEYS */;
INSERT INTO `products` VALUES (1,'Table',300,'nice table','https://bizweb.dktcdn.net/thumb/large/100/361/830/products/ban-tra-chesnut6-1680843003200-3d72f46e-a402-4e06-93d4-7c17edebce09.jpg?v=1689040110127',1),(4,'Table 2',400,'nice table 2','https://bizweb.dktcdn.net/thumb/large/100/361/830/products/ban-kasper-33.jpg?v=1684116688200',1),(5,'Table 3',500,'nice table 3','https://bizweb.dktcdn.net/thumb/large/100/361/830/products/ban-tra-franci-29.jpg?v=1683259873980',1),(6,'Light',50,'nice light','https://bizweb.dktcdn.net/thumb/large/100/361/830/products/den-ban-lucifer-11.jpg?v=1698659582497',3),(7,'Light 2',100,'nice light 2','https://bizweb.dktcdn.net/thumb/large/100/361/830/products/den-ban-kocka-9.jpg?v=1698659890917',3),(8,'Light 3',150,'nice light 3','https://bizweb.dktcdn.net/thumb/large/100/361/830/products/den-ban-canyon-5.jpg?v=1698659199677',3),(9,'Sofa ',1000,'nice sofa','https://bizweb.dktcdn.net/thumb/large/100/361/830/products/sofa-blogger-4.jpg?v=1696047607597',4),(10,'Sofa 2',1500,'nice sofa 2','https://bizweb.dktcdn.net/thumb/large/100/361/830/products/sofa-pozzallo-1.jpg?v=1696046826020',4),(11,'Sofa 3',2000,'nice sofa 3','https://bizweb.dktcdn.net/thumb/large/100/361/830/products/ghe-sofa-castlery-5-1.jpg?v=1692674175073',4),(12,'Chair',100,'nice chair','https://bizweb.dktcdn.net/thumb/large/100/361/830/products/ghe-go-giraf-25.jpg?v=1692674434143',2),(14,'Chair 2',150,'nice chair 2','https://bizweb.dktcdn.net/thumb/large/100/361/830/products/fa8f688d-0645-4b8b-88d1-c464dbbd93ac.jpg?v=1688366402590',2),(15,'Chair 3',200,'nice chair 3','https://bizweb.dktcdn.net/thumb/large/100/361/830/products/don-kino-12.jpg?v=1689591961247',2);
/*!40000 ALTER TABLE `products` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `role`
--

DROP TABLE IF EXISTS `role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `role` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `role`
--

LOCK TABLES `role` WRITE;
/*!40000 ALTER TABLE `role` DISABLE KEYS */;
INSERT INTO `role` VALUES (1,'admin'),(2,'customer');
/*!40000 ALTER TABLE `role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `status`
--

DROP TABLE IF EXISTS `status`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `status` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `status`
--

LOCK TABLES `status` WRITE;
/*!40000 ALTER TABLE `status` DISABLE KEYS */;
INSERT INTO `status` VALUES (1,'pending'),(2,'approved'),(3,'cancelled');
/*!40000 ALTER TABLE `status` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `user`
--

DROP TABLE IF EXISTS `user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(45) NOT NULL,
  `email` varchar(45) NOT NULL,
  `password` varchar(45) NOT NULL,
  `address` varchar(45) NOT NULL,
  `id_role` int(11) NOT NULL,
  PRIMARY KEY (`id`),
  KEY `fk.user_role_idx` (`id_role`),
  CONSTRAINT `fk.user_role` FOREIGN KEY (`id_role`) REFERENCES `role` (`id`) ON DELETE NO ACTION ON UPDATE NO ACTION
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_general_ci;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `user`
--

LOCK TABLES `user` WRITE;
/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (1,'Thanh Dong','Dong@customer.com','a','Ha Noi',2),(2,'Thanh Dong','Dong@admin.com','b','Ha Noi ',1);
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2023-11-03  7:08:19
