# Host: localhost  (Version 5.5.5-10.1.30-MariaDB)
# Date: 2018-09-21 01:59:46
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

INSERT INTO `blog` VALUES (1,'Coinslot Relay Setup','Sometimes, users forget to press the insert coin button before they drop coins into the coinslot. This will result in NOT CREDITED logs in your sales inventory. This guide will teach you how to setup a relay to the coinslot.','coinslot.jpg','2018-09-03 13:23:40'),(2,'Extending WiFi Signal Using Tenda N301 Router','Tenda N301 is a low-cost router that you can use as an external access point for your wifi hotspot system.\t','tenda_n301.jpg','2018-09-03 13:23:40');

#
# Structure for table "components"
#

DROP TABLE IF EXISTS `components`;
CREATE TABLE `components` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `description` text,
  `price` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "components"
#

INSERT INTO `components` VALUES (1,'Raspberry Pi','Raspberry Pi is a tiny and affordable computer that you can use to learn programming through fun, practical projects.\n','2,767.00','raspberyPi.jpg'),(2,'Tenda','F3 is specially designed for your smart home networking life .Chip to router what is heart to human.Its superior Advanced Chip ensures stable and fast wireless performance, making it ideal for streaming music, uploading photos, video chatting, HD video streaming and other bandwidth-intensive tasks.\n','976.00','tendaRouter.jpg');

#
# Structure for table "faq"
#

DROP TABLE IF EXISTS `faq`;
CREATE TABLE `faq` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `question` text,
  `answer` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "faq"
#

INSERT INTO `faq` VALUES (1,'Ano ang Piso Wifi Vending Machine \0','This is hotspot wherein ang ISP mo is sinishare mo sa iba.\0'),(2,' Need pa ba namin ng internet? \0',' Yes you can use your own internet or you may apply PLDT SKYBroadband or any internet with unlimted data and no capping (20mbps and up)\0'),(3,'May monthly po bang babayaran? \0','Wala na po. One time fee only sa vendo machine\0'),(4,' Ilan mins ang piso? \0','Pwde mo edit ang minutes na gusto mo sample P1=6min, 5=30mins, P10=50mins');

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
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=latin1;

#
# Data for table "items"
#

INSERT INTO `items` VALUES (1,'Raspberry Pi Foundation','Raspberry Pi','Raspberry Pi is a tiny and affordable computer that you can use to learn programming through fun, practical projects.','2,767.00','raspberyPi.jpg'),(2,'Tenda','F3','F3 is specially designed for your smart home networking life .Chip to router what is heart to human.Its superior Advanced Chip ensures stable and fast wireless performance, making it ideal for streaming music, uploading photos, video chatting, HD video streaming and other bandwidth-intensive tasks.','976.00','tendaRouter.jpg'),(3,'test','test','test','1','1537465641.ico'),(4,'try','try','try','2','1537465652.png');

#
# Structure for table "messages"
#

DROP TABLE IF EXISTS `messages`;
CREATE TABLE `messages` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `shop_add` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `email` varchar(50) DEFAULT NULL,
  `message` text,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

#
# Data for table "messages"
#


#
# Structure for table "resellers"
#

DROP TABLE IF EXISTS `resellers`;
CREATE TABLE `resellers` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(50) DEFAULT NULL,
  `address` varchar(50) DEFAULT NULL,
  `phone` varchar(50) DEFAULT NULL,
  `contact_person` varchar(50) DEFAULT NULL,
  `link` varchar(50) DEFAULT NULL,
  `image` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=latin1;

#
# Data for table "resellers"
#

INSERT INTO `resellers` VALUES (1,'Mtech Piso Computer Services','San Juan, San Sebastian Street Dawis, Bacolod City','09985944429','Sir Jojo Jomon','https://www.facebook.com/mtechpisonetcomputer/','mtech.jpg'),(2,'Altech.com','Fuentebella Taculing, Bacolod City','093972234933','Arvel Ribo','','1537463292.jpg');

#
# Structure for table "users"
#

DROP TABLE IF EXISTS `users`;
CREATE TABLE `users` (
  `Id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(50) DEFAULT NULL,
  `first_name` varchar(50) DEFAULT NULL,
  `last_name` varchar(50) DEFAULT NULL,
  `password` varchar(50) DEFAULT NULL,
  PRIMARY KEY (`Id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

#
# Data for table "users"
#

INSERT INTO `users` VALUES (1,'admin','admin','admin','ProjectUrbanite01');
