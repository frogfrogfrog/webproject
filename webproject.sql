/*
Navicat MySQL Data Transfer

Source Server         : thinkphp
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : webproject

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2014-11-02 21:05:54
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
-- Table structure for problem
-- ----------------------------
DROP TABLE IF EXISTS `problem`;
CREATE TABLE `problem` (
  `pid` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `uid` varchar(25) DEFAULT NULL,
  `titile` text,
  `content` text,
  `supported` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`pid`),
  KEY `f1` (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;

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
-- Table structure for user
-- ----------------------------
DROP TABLE IF EXISTS `user`;
CREATE TABLE `user` (
  `uid` varchar(25) NOT NULL,
  `psw` varchar(25) DEFAULT NULL,
  `credit` int(11) DEFAULT NULL,
  PRIMARY KEY (`uid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
