# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-09-16 03:17:45
# Generator: MySQL-Front 5.4  (Build 1.40)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "items"
#

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `item_brand` varchar(100) DEFAULT NULL,
  `item_name` varchar(100) DEFAULT NULL,
  `item_description` text,
  `item_img` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "items"
#

INSERT INTO `items` VALUES (1,'Raspberry Pi Foundation','Raspberry Pi','Raspberry Pi is a tiny and affordable computer that you can use to learn programming through fun, practical projects.','raspberyPi.JPG'),(2,'Tenda','F3','F3 is specially designed for your smart home networking life .Chip to router what is heart to human.Its superior Advanced Chip ensures stable and fast wireless performance, making it ideal for streaming music, uploading photos, video chatting, HD video streaming and other bandwidth-intensive tasks.','tendaRouter.jpg');
