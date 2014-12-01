/*
Navicat MySQL Data Transfer

Source Server         : thinkphp
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : webproject

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2014-11-29 15:49:27
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `rid` int(11) NOT NULL,
  `pid` int(11) DEFAULT NULL,
  `uid` varchar(25) DEFAULT NULL,
  `comment` text,
  `supported` int(11) DEFAULT NULL,
  `opposed` int(11) DEFAULT NULL,
  PRIMARY KEY (`rid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------

-- ----------------------------
-- Table structure for question
-- ----------------------------
DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `pid` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `uid` varchar(25) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `supported` int(11) DEFAULT NULL,
  `opposed` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of question
-- ----------------------------
INSERT INTO `question` VALUES ('00000000001', '007', 'Visual Studio 2013 Community Edition安装中文语言包出错提示已安装该语言', '安装语言包中途取消过，然后再安装就报错“已安装此语言。若要安装其他语言,请安装包含该语言的语言包”。怎么才能成功安装？也找不到卸载的地方，卸载重装也不行。\r\n\r\n错误日志如下：', '16', '8', '2014-11-13 23:51:09');

-- ----------------------------
-- Table structure for tag
-- ----------------------------
DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `pid` int(11) NOT NULL,
  `tagname` char(25) DEFAULT NULL,
  PRIMARY KEY (`pid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tag
-- ----------------------------

-- ----------------------------
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` varchar(25) NOT NULL,
  `nickname` varchar(25) NOT NULL,
  `psw` varchar(25) NOT NULL,
  `credit` int(11) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of user
-- ----------------------------
INSERT INTO `user` VALUES ('007', '111', '111', null);
INSERT INTO `user` VALUES ('111', '111', '111', null);
INSERT INTO `user` VALUES ('111111111111', '111', '111', null);
INSERT INTO `user` VALUES ('121', '111', '111', null);
INSERT INTO `user` VALUES ('123', '1111', '1111', null);
INSERT INTO `user` VALUES ('12344', '111', '111', null);
INSERT INTO `user` VALUES ('12345', '111', '111', null);
INSERT INTO `user` VALUES ('123456', '111', '111', null);
INSERT INTO `user` VALUES ('134', '青蛙', '111', null);
INSERT INTO `user` VALUES ('aaa', '111', '111', null);
INSERT INTO `user` VALUES ('aaa1', '111', '111', null);
INSERT INTO `user` VALUES ('fefe', '1111', '111', null);
