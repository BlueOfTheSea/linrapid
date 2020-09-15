/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : linrapid

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2020-09-15 18:04:53
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for rapid_menu
-- ----------------------------
DROP TABLE IF EXISTS `rapid_menu`;
CREATE TABLE `rapid_menu` (
  `id` int(11) unsigned NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) DEFAULT '未命名' COMMENT '菜单名称',
  `uid` int(11) DEFAULT '0' COMMENT '一级0',
  `update_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=60 DEFAULT CHARSET=utf8 COMMENT='菜单表';

-- ----------------------------
-- Records of rapid_menu
-- ----------------------------
INSERT INTO `rapid_menu` VALUES ('59', 'aaa@admin/useradmin/indsex', '58', '1600163920');
INSERT INTO `rapid_menu` VALUES ('58', 'aaa', '56', '1600163520');
INSERT INTO `rapid_menu` VALUES ('57', '家狗狗2@admin/useradmin/indexsss', '56', '1600163928');
INSERT INTO `rapid_menu` VALUES ('56', '架构1', '0', '1600163876');
INSERT INTO `rapid_menu` VALUES ('55', '管理员列表@admin/useradmin/index', '53', '1600163401');
INSERT INTO `rapid_menu` VALUES ('54', '菜单管理@admin/Menu/index', '53', '1600162830');
INSERT INTO `rapid_menu` VALUES ('53', '系统设置', '0', '1600163109');

-- ----------------------------
-- Table structure for rapid_powers
-- ----------------------------
DROP TABLE IF EXISTS `rapid_powers`;
CREATE TABLE `rapid_powers` (
  `id` int(11) NOT NULL,
  `powers_name` varchar(255) DEFAULT NULL,
  `menu_id` varchar(255) DEFAULT NULL,
  `update_time` varchar(255) DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM DEFAULT CHARSET=utf8 COMMENT='职权表';

-- ----------------------------
-- Records of rapid_powers
-- ----------------------------

-- ----------------------------
-- Table structure for rapid_user_admin
-- ----------------------------
DROP TABLE IF EXISTS `rapid_user_admin`;
CREATE TABLE `rapid_user_admin` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `phone` varchar(255) DEFAULT NULL COMMENT '账号',
  `password` varchar(255) DEFAULT NULL COMMENT '密码',
  `nickname` varchar(255) DEFAULT NULL COMMENT '名称',
  `ip` varchar(255) DEFAULT NULL COMMENT '登录的IP地址',
  `update_time` varchar(255) DEFAULT NULL COMMENT '修改时间',
  `a` varchar(255) DEFAULT NULL COMMENT '我',
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8 COMMENT='后台用户列表';

-- ----------------------------
-- Records of rapid_user_admin
-- ----------------------------
INSERT INTO `rapid_user_admin` VALUES ('15', 'admin', '123', '2211', '222221', '22111122', '2');
