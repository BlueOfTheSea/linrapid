/*
Navicat MySQL Data Transfer

Source Server         : 127.0.0.1
Source Server Version : 50553
Source Host           : localhost:3306
Source Database       : linrapid

Target Server Type    : MYSQL
Target Server Version : 50553
File Encoding         : 65001

Date: 2020-09-17 13:45:52
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
  `sor_t` float(255,3) DEFAULT NULL COMMENT '排序需要手动在数据库改',
  PRIMARY KEY (`id`),
  UNIQUE KEY `菜单名唯一索引` (`menu_name`)
) ENGINE=MyISAM AUTO_INCREMENT=80 DEFAULT CHARSET=utf8 COMMENT='菜单管理';

-- ----------------------------
-- Records of rapid_menu
-- ----------------------------
INSERT INTO `rapid_menu` VALUES ('63', '未分配菜单', '0', '1600315969', '10000.000');
INSERT INTO `rapid_menu` VALUES ('55', '管理员列表@admin/useradmin/index', '53', '1600163401', '1.100');
INSERT INTO `rapid_menu` VALUES ('54', '菜单管理@admin/menu/index', '53', '1600162830', '1.200');
INSERT INTO `rapid_menu` VALUES ('53', '系统设置', '0', '1600163109', '1.000');

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
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=59 DEFAULT CHARSET=utf8 COMMENT='管理员列表';

-- ----------------------------
-- Records of rapid_user_admin
-- ----------------------------
INSERT INTO `rapid_user_admin` VALUES ('15', 'admin', '123', '2211', '222221', '22111122');
