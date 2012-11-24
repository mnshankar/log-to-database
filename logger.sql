/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50524
Source Host           : localhost:3306
Source Database       : logger

Target Server Type    : MYSQL
Target Server Version : 50524
File Encoding         : 65001

Date: 2012-11-23 19:43:52
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for `log_table`
-- ----------------------------
DROP TABLE IF EXISTS `log_table`;
CREATE TABLE `log_table` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `message` mediumtext,
  `priority` tinyint(4) DEFAULT NULL,
  `priorityName` varchar(45) DEFAULT NULL,
  `url` varchar(200) DEFAULT NULL,
  `ipaddress` varchar(150) DEFAULT NULL,
  `timestamp` timestamp NULL DEFAULT NULL ON UPDATE CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=latin1;

-- ----------------------------
-- Records of log_table
-- ----------------------------
