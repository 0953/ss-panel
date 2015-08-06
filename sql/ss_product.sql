/*
Navicat MySQL Data Transfer

Source Server         : local-mumu
Source Server Version : 50624
Source Host           : localhost:3306
Source Database       : shadowsocks2

Target Server Type    : MYSQL
Target Server Version : 50624
File Encoding         : 65001

Date: 2015-08-06 17:38:20
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for ss_product
-- ----------------------------
DROP TABLE IF EXISTS `ss_product`;
CREATE TABLE `ss_product` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL,
  `description` varchar(255) DEFAULT NULL,
  `class` int(11) DEFAULT NULL,
  `price` decimal(10,0) DEFAULT NULL,
  `create_time` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of ss_product
-- ----------------------------
INSERT INTO `ss_product` VALUES ('1', '包月套餐', '数量表示购买几个月', null, '10', '2015-08-05 11:15:42');
INSERT INTO `ss_product` VALUES ('2', '半年套餐', '数量表示购买几个半年套餐', null, '55', '2015-08-05 14:52:49');
INSERT INTO `ss_product` VALUES ('3', '包年套餐', '数量表示购买多少年', null, '100', '2015-08-05 14:53:09');
