/*
 Navicat Premium Data Transfer

 Source Server         : local
 Source Server Type    : MySQL
 Source Server Version : 100121
 Source Host           : localhost:3306
 Source Schema         : pkl

 Target Server Type    : MySQL
 Target Server Version : 100121
 File Encoding         : 65001

 Date: 08/06/2021 13:29:50
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for kategori_surat
-- ----------------------------
DROP TABLE IF EXISTS `kategori_surat`;
CREATE TABLE `kategori_surat`  (
  `id_kategori_surat` int(11) NOT NULL AUTO_INCREMENT,
  `Kategori` varchar(255) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_kategori_surat`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 3 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of kategori_surat
-- ----------------------------
INSERT INTO `kategori_surat` VALUES (1, 'surat undangan');
INSERT INTO `kategori_surat` VALUES (2, 'surat edaran');

-- ----------------------------
-- Table structure for surat_out
-- ----------------------------
DROP TABLE IF EXISTS `surat_out`;
CREATE TABLE `surat_out`  (
  `id_surat_keluar` int(11) NOT NULL AUTO_INCREMENT,
  `Nama_Surat` varchar(100) CHARACTER SET latin1 COLLATE latin1_swedish_ci NULL DEFAULT NULL,
  `jenis_surat` int(11) NULL DEFAULT NULL,
  `Tanggal keluar` timestamp(0) NULL DEFAULT NULL,
  PRIMARY KEY (`id_surat_keluar`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 2 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of surat_out
-- ----------------------------
INSERT INTO `surat_out` VALUES (1, 'surat direktur', 1, NULL);

-- ----------------------------
-- Table structure for users
-- ----------------------------
DROP TABLE IF EXISTS `users`;
CREATE TABLE `users`  (
  `id_user` int(11) NOT NULL AUTO_INCREMENT,
  `fullname` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `username` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  `password` varchar(60) CHARACTER SET latin1 COLLATE latin1_swedish_ci NOT NULL,
  PRIMARY KEY (`id_user`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 14 CHARACTER SET = latin1 COLLATE = latin1_swedish_ci ROW_FORMAT = Compact;

-- ----------------------------
-- Records of users
-- ----------------------------
INSERT INTO `users` VALUES (13, 'ada', 'ada', '8c8d357b5e872bbacd45197626bd5759');

SET FOREIGN_KEY_CHECKS = 1;
