/*
 Navicat Premium Data Transfer

 Source Server         : PROYECTO
 Source Server Type    : MySQL
 Source Server Version : 100424
 Source Host           : localhost:3306
 Source Schema         : adsi_clei

 Target Server Type    : MySQL
 Target Server Version : 100424
 File Encoding         : 65001

 Date: 10/10/2022 18:53:54
*/

SET NAMES utf8mb4;
SET FOREIGN_KEY_CHECKS = 0;

-- ----------------------------
-- Table structure for estudiantes
-- ----------------------------
DROP TABLE IF EXISTS `estudiantes`;
CREATE TABLE `estudiantes`  (
  `id_estudiante` int NOT NULL AUTO_INCREMENT,
  `documento_estudiante` int NOT NULL,
  `nombre_estudiante` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `apellido_estudiante` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `email_estudiante` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `fechadenacimiesto_estudiante` date NULL DEFAULT NULL,
  `numerocontacto_estudiante` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `ciudad_estudiante` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `discapacidad_estudiante` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `curso_estudiante` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `horario_estudiante` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `acudiente__estudiante` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_estudiante`, `documento_estudiante`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of estudiantes
-- ----------------------------
INSERT INTO `estudiantes` VALUES (1, 1005461023, 'PAULA ANDREA', 'OVALLE VALENZUELA', 'ANDREAVALME11@GMAIL.COM', '2002-06-11', '3124215311', 'MEDELLÍN', 'NINGUNA', 'PREICFES', 'MYJ EN LA NOCHE', '3124215000');
INSERT INTO `estudiantes` VALUES (2, 2147483647, 'NICOLAS', 'ARIZA PEÑA', 'NICOARIZA21@GMAIL.COM', '2000-04-20', '3002115412', 'BOGOTÁ', 'NO', 'VALIDACIÓN', 'SABADOS EN LA MAÑANA', '3221458844');
INSERT INTO `estudiantes` VALUES (3, 45872655, 'MARIA CAMILA', 'FAJARDO GÓMEZ', 'VALENFAJARDO@GMIAL.COM', '1995-11-04', '3124501155', 'BOGOTÁ', 'NINGUNA', 'VALIDACIÓN', 'MYJ EN LA NOCHE', '3045468794');
INSERT INTO `estudiantes` VALUES (4, 1007211454, 'SARA SOFIA', 'GUTIERREZ TORRES', 'SOFIARRAS11@GMAIL.COM', '2006-06-22', '3021456445', 'BUCARAMANGA', 'NINGUNA', 'PREICFES', 'SÁBADOS EN LA TARDE', '3012455402');

-- ----------------------------
-- Table structure for financiero
-- ----------------------------
DROP TABLE IF EXISTS `financiero`;
CREATE TABLE `financiero`  (
  `id_financiero` int NOT NULL AUTO_INCREMENT,
  `documentoestudiante_financiero` int NOT NULL,
  `costodelcurso_financiero` int NULL DEFAULT NULL,
  `fechadepago__financiero` date NULL DEFAULT NULL,
  `valorcancelado_financiero` int NULL DEFAULT NULL,
  `metododepago_financiero` varchar(20) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `referenciadepago_financiero` varchar(11) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `empleado_financiero` varchar(50) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_financiero`, `documentoestudiante_financiero`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of financiero
-- ----------------------------
INSERT INTO `financiero` VALUES (1, 1005461023, 450000, '2022-08-03', 50000, 'NEQUI', 'RT5342', 'JULIAN PAÉZ');
INSERT INTO `financiero` VALUES (2, 1007211454, 480000, '2022-05-11', 480000, 'BANCOLOMBIA', 'TREWES', 'LAURA VANEGAS');
INSERT INTO `financiero` VALUES (3, 45872655, 480000, '2018-06-03', 80000, 'NEQUI', 'RTEAS', 'SOFIA TORRES');
INSERT INTO `financiero` VALUES (4, 1405665022, 450000, '2022-07-30', 50000, 'WOMPI', 'RT45162', 'MATEO LÓPEZ');

-- ----------------------------
-- Table structure for login
-- ----------------------------
DROP TABLE IF EXISTS `login`;
CREATE TABLE `login`  (
  `id_login` int NOT NULL AUTO_INCREMENT,
  `usuario_login` int NOT NULL,
  `passport_login` int NULL DEFAULT NULL,
  `nombreempleado_login` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `apellidoempleado_login` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  PRIMARY KEY (`id_login`, `usuario_login`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of login
-- ----------------------------
INSERT INTO `login` VALUES (1, 1014897221, 1014897221, 'LAURA DANIELA', 'VANEGAS TORRES');
INSERT INTO `login` VALUES (2, 35487711, 35487711, 'JULIAN', 'PAÉZ RAMIREZ');
INSERT INTO `login` VALUES (3, 1101514451, 1101514451, 'MATEO', 'HERNANDEZ ARIZA');
INSERT INTO `login` VALUES (4, 0, NULL, 'SARA SOFIA ', 'TORRES LÓPEZ');

-- ----------------------------
-- Table structure for novedades
-- ----------------------------
DROP TABLE IF EXISTS `novedades`;
CREATE TABLE `novedades`  (
  `id_novedades` int NOT NULL AUTO_INCREMENT,
  `documentoestudiante_novedades` int NOT NULL,
  `empleado_novedades` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `anexo_novedades` varchar(255) CHARACTER SET utf8 COLLATE utf8_spanish_ci NULL DEFAULT NULL,
  `fecha_anexo` date NULL DEFAULT NULL,
  PRIMARY KEY (`id_novedades`, `documentoestudiante_novedades`) USING BTREE
) ENGINE = InnoDB AUTO_INCREMENT = 5 CHARACTER SET = utf8 COLLATE = utf8_spanish_ci ROW_FORMAT = DYNAMIC;

-- ----------------------------
-- Records of novedades
-- ----------------------------
INSERT INTO `novedades` VALUES (1, 1405665022, 'JULIAN PAÉZ', 'Al día con los pagos pero no asiste a clases', '2022-08-01');
INSERT INTO `novedades` VALUES (2, 1005461023, 'LAURA VANEGAS', 'Estudiante al día con los pagos', '2022-08-09');
INSERT INTO `novedades` VALUES (3, 45872655, 'MATEO HERNANDEZ', 'Estudiante atrasada con los pagos y asiste a clases', '2022-07-31');
INSERT INTO `novedades` VALUES (4, 1007211454, 'MATEO HERNANDEZ', 'Estudiante a paz y salvo con la institución.', '2022-05-15');

SET FOREIGN_KEY_CHECKS = 1;
