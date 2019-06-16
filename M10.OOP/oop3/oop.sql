/*
Navicat MySQL Data Transfer

Source Server         : localhost
Source Server Version : 50505
Source Host           : localhost:3306
Source Database       : oop

Target Server Type    : MYSQL
Target Server Version : 50505
File Encoding         : 65001

Date: 2019-06-16 18:59:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for products
-- ----------------------------
DROP TABLE IF EXISTS `products`;
CREATE TABLE `products` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `product_name` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `product_desc` text COLLATE utf8_unicode_ci,
  `created` datetime DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- ----------------------------
-- Records of products
-- ----------------------------
