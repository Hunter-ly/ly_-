# Host: localhost  (Version: 5.5.53)
# Date: 2022-12-20 22:32:37
# Generator: MySQL-Front 5.3  (Build 4.234)

/*!40101 SET NAMES utf8 */;

#
# Structure for table "user"
#

DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `user_id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `username` varchar(30) NOT NULL,
  `password` varchar(30) NOT NULL,
  PRIMARY KEY (`user_id`)
) ENGINE=MyISAM AUTO_INCREMENT=30 DEFAULT CHARSET=utf8;

#
# Data for table "user"
#

/*!40000 ALTER TABLE `user` DISABLE KEYS */;
INSERT INTO `user` VALUES (14,'zhangsan','123456'),(15,'lisi','654321'),(16,'wangwu','123456'),(29,'linyi','654321'),(30,'liner','123456');
/*!40000 ALTER TABLE `user` ENABLE KEYS */;
