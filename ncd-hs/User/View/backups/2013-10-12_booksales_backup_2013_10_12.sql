-- MySQL dump 10.13  Distrib 5.5.27, for Win32 (x86)
--
-- Host: localhost    Database: ncd-hs
-- ------------------------------------------------------
-- Server version	5.5.27

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
-- Table structure for table `tbl_role`
--

DROP TABLE IF EXISTS `tbl_role`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_role` (
  `role_id` int(11) NOT NULL,
  `role_type` varchar(100) NOT NULL,
  `remarks` varchar(100) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_role`
--

LOCK TABLES `tbl_role` WRITE;
/*!40000 ALTER TABLE `tbl_role` DISABLE KEYS */;
INSERT INTO `tbl_role` VALUES (1,'admin','all access'),(2,'staff','viewing access');
/*!40000 ALTER TABLE `tbl_role` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `tbl_user`
--

DROP TABLE IF EXISTS `tbl_user`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `tbl_user` (
  `user_id` int(11) NOT NULL AUTO_INCREMENT,
  `user_name` varchar(100) NOT NULL,
  `password` varchar(100) NOT NULL,
  `role_id` int(11) NOT NULL,
  `fname` varchar(100) NOT NULL,
  `lname` varchar(100) NOT NULL,
  `dob` date NOT NULL,
  `nic` varchar(100) NOT NULL,
  `email` varchar(100) NOT NULL,
  `phone` varchar(100) NOT NULL,
  `pic` varchar(100) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=InnoDB AUTO_INCREMENT=22 DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `tbl_user`
--

LOCK TABLES `tbl_user` WRITE;
/*!40000 ALTER TABLE `tbl_user` DISABLE KEYS */;
INSERT INTO `tbl_user` VALUES (9,'sss','bbb',1,'sfds','dsfdsf','2013-09-18','sdfkljskjf','asdfsd@aasdfweewww','dfsfsd','1376842459_Rabbit.gif'),(10,'harsha','vvv',2,'gdfg','sdfsdf','2013-08-15','aaadsf','admin@booksales.com','ddeeff','1380297245_Rabbit.gif'),(12,'sssss','ddd',2,'dgfdfg','sdfsdf','2013-08-15','sdfs','gfdfg@klsdjajm','sdfsdfsfsdf','1376970538_mukki.gif'),(13,'harsha','sss',2,'sdfasdf','sdfasdf','2013-08-07','none','sfs#$#@fdsf','none','1376970558_loading.gif'),(14,'ggggg','ggg',1,'lskdfjkl','dskjflksj','2013-07-10','sdfkljskjf','sdkfj@sdklf','2342','1378529688_Rabbit.gif'),(15,'asdfasf','ddd',2,'sdfsdlsdfds','sdfasdf','2013-08-07','sdfkljskjf','sdkfj@sdklf','dddddddddd','1376971246_Rabbit.gif'),(16,'dsfsdjflk','hhh',2,'aa','sdfasdf','2013-08-06','sdfs','sfs#$#@fdsf','4444444444','1376971273_mickey-mouse-10.jpg'),(17,'sdfsdf','sdfd',2,'gsdfsd','sdf','2013-08-06','sdfsd','sfds','s','1376971405_mickey-mouse.png'),(18,'harsha','aaa',2,'sfsdfsfsdfsddsffdsffssdf','dfasfas','2013-09-04','sdfkljskjf','admin@booksales.com','0715318621','1378539816_mickey-mouse-10.jpg'),(19,'lll','lll',1,'lll','lll','2013-09-02','lll','lll','llllllllll','1379557846_Rabbit.gif'),(20,'','',0,'','','0000-00-00','','','',''),(21,'harsha','a d',1,'Harsha','sjfsdljl','2013-09-04','861353516V','harshasbd@gmail.com','0715318621','1380297392_mukki.gif');
/*!40000 ALTER TABLE `tbl_user` ENABLE KEYS */;
UNLOCK TABLES;
/*!40103 SET TIME_ZONE=@OLD_TIME_ZONE */;

/*!40101 SET SQL_MODE=@OLD_SQL_MODE */;
/*!40014 SET FOREIGN_KEY_CHECKS=@OLD_FOREIGN_KEY_CHECKS */;
/*!40014 SET UNIQUE_CHECKS=@OLD_UNIQUE_CHECKS */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
/*!40111 SET SQL_NOTES=@OLD_SQL_NOTES */;

-- Dump completed on 2013-10-12 13:08:20
