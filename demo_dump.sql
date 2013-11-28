-- MySQL dump 10.13  Distrib 5.1.69, for redhat-linux-gnu (i386)
--
-- Host: localhost    Database: orf
-- ------------------------------------------------------
-- Server version	5.1.69-log

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
-- Table structure for table `comments`
--

DROP TABLE IF EXISTS `comments`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `comments` (
  `id` int(10) NOT NULL AUTO_INCREMENT,
  `user_id` int(10) DEFAULT NULL,
  `comment` text,
  `timeadded` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  KEY `user_id` (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=158 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `comments`
--

LOCK TABLES `comments` WRITE;
/*!40000 ALTER TABLE `comments` DISABLE KEYS */;
INSERT INTO `comments` VALUES (1,1,'O゛R゛F゛ヤ゛ダ゛ー！！！！！！！！！！！お゛う゛ち゛帰゛る゛ーーーーーーーーーーーーーーーーーーーー！！！！！！！！','2013-11-20 11:48:41'),(2,1,'捕鯨\r\n','2013-11-20 11:40:41'),(3,1,'うっひゃああああああああああああああ','2013-11-20 11:47:54'),(4,1,'(´；ω；｀)','2013-11-20 11:48:06'),(5,1,'\"\'><script>alert(1)</script>','2013-11-20 11:50:43'),(6,1,'あ\r\nあ\r\nあ\r\nあ\r\nあ\r\nああああ\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n\r\n','2013-11-20 11:53:40'),(7,1,'\"\'><script>alert(1)</script>','2013-11-20 11:57:38'),(8,4,'\"\'><script>alert(1)</script>','2013-11-20 12:27:41'),(9,3,'hoge\r\n','2013-11-20 12:31:40'),(10,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-20 14:38:29'),(11,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-20 14:38:40'),(12,5,'a','2013-11-20 15:00:02'),(13,0,'a','2013-11-20 15:45:15'),(14,0,'\"\'><script>alert(1)</script>','2013-11-21 17:53:17'),(15,0,'あああ','2013-11-21 18:06:03'),(16,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 00:55:29'),(17,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 01:25:03'),(18,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 01:40:59'),(19,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 01:45:29'),(20,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 01:52:51'),(21,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 02:10:19'),(22,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 02:15:52'),(23,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 02:16:37'),(24,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 02:33:32'),(25,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 02:39:18'),(26,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 02:55:50'),(27,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 03:17:06'),(28,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 03:29:23'),(29,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 03:34:52'),(30,0,'ORFなう','2013-11-22 03:39:31'),(31,3,'piyopiyo','2013-11-22 03:40:12'),(32,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 03:57:41'),(33,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 04:04:44'),(34,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 04:13:25'),(35,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 04:17:26'),(36,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 04:24:37'),(37,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 04:36:14'),(38,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 05:23:15'),(39,3,'aaa\r\n','2013-11-22 05:34:54'),(40,3,'','2013-11-22 05:34:54'),(41,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 05:35:00'),(42,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 06:00:33'),(43,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 06:01:36'),(44,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 06:09:48'),(45,3,'てすと','2013-11-22 06:20:25'),(46,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 06:22:35'),(47,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 06:30:21'),(48,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 06:35:04'),(49,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 06:35:32'),(50,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 06:44:59'),(51,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 06:59:42'),(52,3,'','2013-11-22 07:03:42'),(53,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 07:03:57'),(54,3,'</textarea><s>comment</s>','2013-11-22 07:04:10'),(55,3,'こんにちは','2013-11-22 07:12:22'),(56,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 07:12:33'),(57,0,'こんにちは','2013-11-22 07:16:50'),(58,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 07:18:39'),(59,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 07:32:44'),(60,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 07:41:39'),(61,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 07:47:23'),(62,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 07:53:18'),(63,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 08:16:30'),(64,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 08:19:32'),(65,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 08:25:07'),(66,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 08:28:59'),(67,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 08:36:12'),(68,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 08:40:49'),(69,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 08:44:22'),(70,0,'\"><script>alert(\"xss\")</script>\r\n','2013-11-22 08:45:14'),(71,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 08:55:58'),(72,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 08:57:45'),(73,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 09:08:48'),(74,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 09:22:24'),(75,0,'\"><script>alert(\"xss\")</script>\r\n','2013-11-22 09:23:17'),(76,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 09:29:33'),(77,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 09:37:14'),(78,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 09:51:30'),(79,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 09:56:18'),(80,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-22 10:08:59'),(81,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 01:01:21'),(82,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 01:18:10'),(83,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 01:29:54'),(84,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 01:32:43'),(85,0,'lll\r\n','2013-11-23 01:35:47'),(86,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 01:36:03'),(87,0,'hello','2013-11-23 01:59:58'),(88,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 02:00:05'),(89,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 02:03:00'),(90,0,'','2013-11-23 02:07:13'),(91,0,'','2013-11-23 02:07:14'),(92,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 02:07:44'),(93,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 02:08:02'),(94,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 02:15:09'),(95,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 02:46:01'),(96,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 02:51:51'),(97,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 03:02:33'),(98,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 03:13:45'),(99,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 03:21:04'),(100,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 03:36:52'),(101,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 03:48:08'),(102,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 03:48:38'),(103,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 03:50:30'),(104,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 03:55:38'),(105,0,'','2013-11-23 04:00:06'),(106,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 04:00:15'),(107,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 04:00:43'),(108,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 04:08:00'),(109,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 04:22:07'),(110,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 04:23:30'),(111,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 04:24:54'),(112,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 04:31:04'),(113,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 04:42:29'),(114,0,'bnvhbfgh\r\n','2013-11-23 04:50:11'),(115,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 04:50:29'),(116,0,'asasa','2013-11-23 04:58:41'),(117,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 04:59:03'),(118,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 05:01:28'),(119,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 05:07:12'),(120,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 05:19:11'),(121,NULL,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 05:20:24'),(122,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 05:26:19'),(123,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 05:46:37'),(124,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 05:50:21'),(125,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 06:00:26'),(126,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 06:01:11'),(127,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 06:03:58'),(128,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 06:19:37'),(129,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 06:22:40'),(130,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 06:23:13'),(131,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 06:26:57'),(132,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 06:34:58'),(133,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 06:35:48'),(134,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 06:39:30'),(135,0,'aaa','2013-11-23 06:50:23'),(136,0,'\"><s>aaaa</s>','2013-11-23 06:50:35'),(137,0,'','2013-11-23 06:50:36'),(138,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 06:56:09'),(139,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 07:09:30'),(140,0,'test','2013-11-23 07:09:33'),(141,0,'</textarea><s>comment</s>','2013-11-23 07:11:18'),(142,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 07:33:38'),(143,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 07:43:55'),(144,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 07:49:44'),(145,0,'\"><s>aaaa</s>','2013-11-23 07:54:21'),(146,0,'うあああああああああああああああああああああああああああ','2013-11-23 08:03:28'),(147,0,'ふにゃああああああああああああああああああああ','2013-11-23 08:03:38'),(148,0,'ほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょほにょ','2013-11-23 08:03:51'),(149,0,'<plaintext>','2013-11-23 08:04:04'),(150,0,'ki','2013-11-23 08:12:24'),(151,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 08:12:39'),(152,0,'kjh\r\n','2013-11-23 08:17:50'),(153,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 08:17:56'),(154,0,'けいじばん\r\n','2013-11-23 08:22:08'),(155,0,'\"><s>aa\r\n','2013-11-23 08:22:15'),(156,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 08:22:27'),(157,0,'</textarea><s>comment</s>m_header_comment\r\nLocation: m_header_comment','2013-11-23 08:27:31');
/*!40000 ALTER TABLE `comments` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `message`
--

DROP TABLE IF EXISTS `message`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `message` (
  `message` text
) ENGINE=MyISAM DEFAULT CHARSET=latin1;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `message`
--

LOCK TABLES `message` WRITE;
/*!40000 ALTER TABLE `message` DISABLE KEYS */;
/*!40000 ALTER TABLE `message` ENABLE KEYS */;
UNLOCK TABLES;

--
-- Table structure for table `users`
--

DROP TABLE IF EXISTS `users`;
/*!40101 SET @saved_cs_client     = @@character_set_client */;
/*!40101 SET character_set_client = utf8 */;
CREATE TABLE `users` (
  `id` bigint(20) unsigned NOT NULL AUTO_INCREMENT,
  `loginid` varchar(20) NOT NULL,
  `password` varchar(256) NOT NULL,
  `name` text NOT NULL,
  `usertype` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`),
  UNIQUE KEY `id` (`id`),
  UNIQUE KEY `loginid` (`loginid`)
) ENGINE=MyISAM AUTO_INCREMENT=9 DEFAULT CHARSET=utf8;
/*!40101 SET character_set_client = @saved_cs_client */;

--
-- Dumping data for table `users`
--

LOCK TABLES `users` WRITE;
/*!40000 ALTER TABLE `users` DISABLE KEYS */;
INSERT INTO `users` VALUES (1,'yagihash','97681d21f931c33370d4b42406c3d8d39e495b953ceaab55f35c218ca9c67e5d','やぎはしゅ',0),(3,'hoge','9b9f7060d3290054631e4f2a081601add7307f3f873e9bca60514fb3bddb566c','piyo',0),(4,'hogetaro','4c716d4cf211c7b7d2f3233c941771ad0507ea5bacf93b492766aa41ae9f720d','hoge taro',0),(5,'fuga','9b9f7060d3290054631e4f2a081601add7307f3f873e9bca60514fb3bddb566c','fuga',0),(6,'masimasi','3493b17ee1e9944c38f5182bf43b2a72f16bdda03fd62bad3b3e2166b96f44b4','masimasi',0),(7,'orf2013','e768eef32a1b9a97ef2229aa9c9322b5e0c13cea8131d99b2e6eadf1af08e026','orf2013',0),(8,'1234','03ac674216f3e15c761ee1a5e255f067953623c8b388b4459e13f978d7c846f4','1234',0);
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

-- Dump completed on 2013-11-28 22:36:42
