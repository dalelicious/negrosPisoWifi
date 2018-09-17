# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-09-18 06:04:39
# Generator: MySQL-Front 5.4  (Build 1.40)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "blog"
#

DROP TABLE IF EXISTS `blog`;
CREATE TABLE `blog` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `title` varchar(100) DEFAULT NULL,
  `content` text,
  `image` varchar(255) DEFAULT NULL,
  `createDate` datetime DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "blog"
#

INSERT INTO `blog` VALUES (1,'Coinslot Relay Setup','Sometimes, users forget to press the insert coin button before they drop coins into the coinslot. This will result in NOT CREDITED logs in your sales inventory. This guide will teach you how to setup a relay to the coinslot.','coinslot.jpg','2018-09-03 13:23:40'),(2,'Extending WiFi Signal Using Tenda N301 Router','Tenda N301 is a low-cost router that you can use as an external access point for your wifi hotspot system.\t','tenda_n301.jpg','2018-09-03 13:23:40'),(3,'test','test',NULL,'2018-09-18 06:02:58');

#
# Structure for table "items"
#

DROP TABLE IF EXISTS `items`;
CREATE TABLE `items` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `brand` varchar(100) DEFAULT NULL,
  `name` varchar(100) DEFAULT NULL,
  `description` text,
  `price` varchar(50) DEFAULT NULL,
  `image` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "items"
#

INSERT INTO `items` VALUES (1,'Raspberry Pi Foundation','Raspberry Pi','Raspberry Pi is a tiny and affordable computer that you can use to learn programming through fun, practical projects.','2,767.00','raspberyPi.jpg'),(2,'Tenda','F3','F3 is specially designed for your smart home networking life .Chip to router what is heart to human.Its superior Advanced Chip ensures stable and fast wireless performance, making it ideal for streaming music, uploading photos, video chatting, HD video streaming and other bandwidth-intensive tasks.','976.00','tendaRouter.jpg'),(3,'test','test','test','test',NULL);
