/*
Navicat MySQL Data Transfer

Source Server         : local-mumu
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : shadowsocks2

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-08-06 17:38:10
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ss_order
-- ----------------------------
DROP TABLE IF EXISTS `ss_order`;
CREATE TABLE `ss_order` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `p_id` int(11) DEFAULT NULL,
  `p_number` int(11) DEFAULT NULL,
  `p_price` decimal(10,0) DEFAULT NULL,
  `total` decimal(10,0) DEFAULT NULL,
  `user_id` int(11) DEFAULT NULL,
  `status` int(11) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=74 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ss_order
-- ----------------------------
INSERT INTO `ss_order` VALUES ('73', '半年套餐x3', '半年套餐x3', '2', '3', '55', '165', '12', '0', '2015-08-06 17:20:13');
