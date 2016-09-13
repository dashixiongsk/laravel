/*
Navicat MySQL Data Transfer

Source Server         : phpsty
Source Server Version : 50540
Source Host           : localhost:3306
Source Database       : larval

Target Server Type    : MYSQL
Target Server Version : 50540
File Encoding         : 65001

Date: 2016-09-13 17:57:36
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for student
-- ----------------------------
DROP TABLE IF EXISTS `student`;
CREATE TABLE `student` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(20) NOT NULL,
  `age` varchar(10) NOT NULL,
  `create_time` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`)
) ENGINE=MyISAM AUTO_INCREMENT=37 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of student
-- ----------------------------
INSERT INTO `student` VALUES ('1', 'sk', '28', '2016-09-08 16:28:36');
INSERT INTO `student` VALUES ('2', 'sk', '28', '2016-09-08 16:29:35');
INSERT INTO `student` VALUES ('3', 'sanzang', '103', '2016-09-08 16:30:58');
INSERT INTO `student` VALUES ('4', 'dashixiong', '26', '2016-09-08 16:51:34');
INSERT INTO `student` VALUES ('5', 'dashixiong', '23', '2016-09-13 11:16:19');
INSERT INTO `student` VALUES ('6', 'dashixiong', '23', '2016-09-13 11:16:22');
INSERT INTO `student` VALUES ('7', 'dashixiong', '23', '2016-09-13 11:16:26');
INSERT INTO `student` VALUES ('8', 'dashixiong', '23', '2016-09-13 11:16:27');
INSERT INTO `student` VALUES ('9', 'dashixiong', '23', '2016-09-13 11:16:28');
INSERT INTO `student` VALUES ('10', 'dashixiong', '23', '2016-09-13 11:16:30');
INSERT INTO `student` VALUES ('11', 'dashixiong', '23', '2016-09-13 11:16:30');
INSERT INTO `student` VALUES ('12', 'dashixiong', '23', '2016-09-13 11:16:31');
INSERT INTO `student` VALUES ('13', 'dashixiong', '23', '2016-09-13 11:16:31');
INSERT INTO `student` VALUES ('14', 'dashixiong', '23', '2016-09-13 11:16:31');
INSERT INTO `student` VALUES ('15', 'dashixiong', '23', '2016-09-13 11:16:31');
INSERT INTO `student` VALUES ('16', 'dashixiong', '23', '2016-09-13 11:16:31');
INSERT INTO `student` VALUES ('17', 'dashixiong', '23', '2016-09-13 11:16:31');
INSERT INTO `student` VALUES ('18', 'dashixiong', '23', '2016-09-13 11:16:32');
INSERT INTO `student` VALUES ('19', 'dashixiong', '23', '2016-09-13 11:16:32');
INSERT INTO `student` VALUES ('20', 'dashixiong', '23', '2016-09-13 11:16:32');
INSERT INTO `student` VALUES ('21', 'dashixiong', '23', '2016-09-13 11:16:32');
INSERT INTO `student` VALUES ('22', 'dashixiong', '23', '2016-09-13 11:16:32');
INSERT INTO `student` VALUES ('23', 'dashixiong', '23', '2016-09-13 11:16:32');
INSERT INTO `student` VALUES ('24', 'dashixiong', '23', '2016-09-13 11:16:32');
INSERT INTO `student` VALUES ('25', 'dashixiong', '23', '2016-09-13 11:16:32');
INSERT INTO `student` VALUES ('26', 'dashixiong', '23', '2016-09-13 11:16:32');
INSERT INTO `student` VALUES ('27', 'dashixiong', '23', '2016-09-13 11:16:32');
INSERT INTO `student` VALUES ('28', 'dashixiong', '23', '2016-09-13 11:16:32');
INSERT INTO `student` VALUES ('29', 'dashixiong', '23', '2016-09-13 11:16:32');
INSERT INTO `student` VALUES ('30', 'dashixiong', '23', '2016-09-13 11:16:32');
INSERT INTO `student` VALUES ('31', 'dashixiong', '23', '2016-09-13 11:16:33');
INSERT INTO `student` VALUES ('32', 'dashixiong', '23', '2016-09-13 11:16:33');
INSERT INTO `student` VALUES ('33', 'dashixiong', '23', '2016-09-13 11:16:33');
INSERT INTO `student` VALUES ('34', 'dashixiong', '23', '2016-09-13 11:16:33');
INSERT INTO `student` VALUES ('35', 'dashixiong', '23', '2016-09-13 11:16:33');
INSERT INTO `student` VALUES ('36', '撒娇', '21', '2016-09-13 09:21:32');
