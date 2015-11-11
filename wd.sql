/*
 Navicat Premium Data Transfer

 Source Server         : mysql
 Source Server Type    : MySQL
 Source Server Version : 50626
 Source Host           : localhost
 Source Database       : wd

 Target Server Type    : MySQL
 Target Server Version : 50626
 File Encoding         : utf-8

 Date: 11/05/2015 11:02:08 AM
*/

SET NAMES utf8;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
--  Table structure for `c_admin`
-- ----------------------------
DROP TABLE IF EXISTS `c_admin`;
CREATE TABLE `c_admin` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `username` varchar(255) NOT NULL,
  `password` varchar(255) NOT NULL,
  `reg_time` timestamp(6) NOT NULL DEFAULT CURRENT_TIMESTAMP(6) ON UPDATE CURRENT_TIMESTAMP(6),
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=latin1;

-- ----------------------------
--  Records of `c_admin`
-- ----------------------------
BEGIN;
INSERT INTO `c_admin` VALUES ('1', 'admin', '21232f297a57a5a743894a0e4a801fc3', '2015-10-08 11:41:19.000000');
COMMIT;

-- ----------------------------
--  Table structure for `c_good`
-- ----------------------------
DROP TABLE IF EXISTS `c_good`;
CREATE TABLE `c_good` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `menu_id` int(11) NOT NULL,
  `sort` int(11) NOT NULL,
  `name` text NOT NULL,
  `price` text NOT NULL,
  `old_price` text NOT NULL,
  `image` text NOT NULL,
  `detail` text NOT NULL,
  `status` int(11) NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `is_top` int(11) NOT NULL DEFAULT '0',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=5 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `c_good`
-- ----------------------------
BEGIN;
INSERT INTO `c_good` VALUES ('1', '1', '0', '红烧谢J8', '0.5', '0.1', '56151c51870ce.png', '', '1', '2015-10-12 20:37:51', '1'), ('2', '1', '0', 'test', '123', '111', '561604905b490.png', '<p>asdasd</p>', '1', '2015-10-12 20:58:57', '1'), ('3', '1', '0', '好喝的牛奶', '36', '48', '561bb9f8b1a24.jpg', '<p>好喝无比的牛奶，比市面的卖的便宜，而且更加好喝！</p>', '1', '2015-10-12 21:47:36', '0'), ('4', '1', '0', '新鲜的牛肉', '34', '40', '561bba6068c58.jpg', '<p>新鲜好吃的牛肉，新鲜到货，先到先得！</p>', '1', '2015-10-12 21:49:20', '0');
COMMIT;

-- ----------------------------
--  Table structure for `c_info`
-- ----------------------------
DROP TABLE IF EXISTS `c_info`;
CREATE TABLE `c_info` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `notification` text NOT NULL,
  `theme` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `c_info`
-- ----------------------------
BEGIN;
INSERT INTO `c_info` VALUES ('1', '微信商城', 'HelloWorld', 'default');
COMMIT;

-- ----------------------------
--  Table structure for `c_menu`
-- ----------------------------
DROP TABLE IF EXISTS `c_menu`;
CREATE TABLE `c_menu` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` text NOT NULL,
  `pid` int(11) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8;

-- ----------------------------
--  Records of `c_menu`
-- ----------------------------
BEGIN;
INSERT INTO `c_menu` VALUES ('1', '商品', '0'), ('2', '服务', '0');
COMMIT;

-- ----------------------------
--  Table structure for `c_order`
-- ----------------------------
DROP TABLE IF EXISTS `c_order`;
CREATE TABLE `c_order` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `orderid` text NOT NULL,
  `totalprice` text NOT NULL,
  `pay_style` text NOT NULL,
  `pay_status` text NOT NULL,
  `note` text NOT NULL,
  `order_status` text NOT NULL,
  `time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP ON UPDATE CURRENT_TIMESTAMP,
  `cartdata` text NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

SET FOREIGN_KEY_CHECKS = 1;
