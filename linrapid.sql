/*
 Navicat MySQL Data Transfer

 Source Server         : 127.0.0.1
 Source Server Type    : MySQL
 Source Server Version : 50726
 Source Host           : localhost:3306
 Source Schema         : linrapid

 Target Server Type    : MySQL
 Target Server Version : 50726
 File Encoding         : 65001

 Date: 16/07/2021 17:17:47
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for rapid_menu
-- ----------------------------
DROP TABLE IF EXISTS `rapid_menu`;
CREATE TABLE `rapid_menu`  (
  `id` int(11) UNSIGNED NOT NULL AUTO_INCREMENT,
  `menu_name` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT '未命名' COMMENT '菜单名称',
  `uid` int(11) NULL DEFAULT 0 COMMENT '一级0',
  `update_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL,
  `sor_t` float(255, 3) NULL DEFAULT NULL COMMENT '排序需要手动在数据库改',
  PRIMARY KEY (`id`) USING BTREE,
  UNIQUE INDEX `菜单名唯一索引`(`menu_name`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 82 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '菜单管理' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rapid_menu
-- ----------------------------
INSERT INTO `rapid_menu` VALUES (63, '未分配菜单', 0, '1600315969', 10000.000);
INSERT INTO `rapid_menu` VALUES (55, '管理员列表@admin/UserAdmin/index', 53, '1600163401', 1.100);
INSERT INTO `rapid_menu` VALUES (54, '菜单管理@admin/Menu/index', 53, '1600162830', 1.200);
INSERT INTO `rapid_menu` VALUES (53, '系统设置', 0, '1600163109', 1.000);

-- ----------------------------
-- Table structure for rapid_user_admin
-- ----------------------------
DROP TABLE IF EXISTS `rapid_user_admin`;
CREATE TABLE `rapid_user_admin`  (
  `id` int(10) UNSIGNED NOT NULL AUTO_INCREMENT COMMENT 'ID',
  `phone` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '账号',
  `password` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '密码',
  `nickname` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '名称',
  `ip` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '登录的IP地址',
  `update_time` varchar(255) CHARACTER SET utf8 COLLATE utf8_general_ci NULL DEFAULT NULL COMMENT '修改时间',
  PRIMARY KEY (`id`) USING BTREE
) ENGINE = MyISAM AUTO_INCREMENT = 59 CHARACTER SET = utf8 COLLATE = utf8_general_ci COMMENT = '管理员列表' ROW_FORMAT = Dynamic;

-- ----------------------------
-- Records of rapid_user_admin
-- ----------------------------
INSERT INTO `rapid_user_admin` VALUES (15, 'admin', '123', '2211', '222221', '22111122');

SET FOREIGN_KEY_CHECKS = 1;
