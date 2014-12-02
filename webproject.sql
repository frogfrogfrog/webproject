/*
Navicat MySQL Data Transfer

Source Server         : thinkphp
Source Server Version : 50617
Source Host           : localhost:3306
Source Database       : webproject

Target Server Type    : MYSQL
Target Server Version : 50617
File Encoding         : 65001

Date: 2014-12-01 10:07:03
*/

SET FOREIGN_KEY_CHECKS=0;

-- ----------------------------
-- Table structure for comment
-- ----------------------------
DROP TABLE IF EXISTS `comment`;
CREATE TABLE `comment` (
  `cid` int(11) NOT NULL AUTO_INCREMENT,
  `qid` int(11) DEFAULT NULL,
  `uid` varchar(25) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `comment` text,
  `supported` int(11) DEFAULT NULL,
  `opposed` int(11) DEFAULT NULL,
  PRIMARY KEY (`cid`)
) ENGINE=InnoDB AUTO_INCREMENT=8 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of comment
-- ----------------------------
INSERT INTO `comment` VALUES ('1', '1', '007', 'Visual Studio 2013 Community Edition安装中文语言包出错提示已安装该语言', '<p>在光滑的地板上，摩擦。摩擦</p>', '0', null);
INSERT INTO `comment` VALUES ('2', '1', '007', 'Visual Studio 2013 Community Edition安装中文语言包出错提示已安装该语言', '<p>我在看看能不能评论啊</p>', '0', null);
INSERT INTO `comment` VALUES ('3', '1', '007', 'Visual Studio 2013 Community Edition安装中文语言包出错提示已安装该语言', '<p>我在添加条评论看看</p>', '0', null);
INSERT INTO `comment` VALUES ('4', '1', '007', 'Visual Studio 2013 Community Edition安装中文语言包出错提示已安装该语言', '<p>好像成功了耶</p>', '0', null);
INSERT INTO `comment` VALUES ('5', '1', '007', 'Visual Studio 2013 Community Edition安装中文语言包出错提示已安装该语言', '<p><img src=\"/webproject/Uploads/ueditor/image/20141130/547b1a1de5d3a.jpg\" title=\"547b1a1de5d3a.jpg\" alt=\"54a25aee3d6d55fbe5e42b876f224f4a20a4dd22.jpg\"/></p><p>dddd</p>', '0', null);
INSERT INTO `comment` VALUES ('6', '1', '007', 'Visual Studio 2013 Community Edition安装中文语言包出错提示已安装该语言', '<p><img src=\"/webproject/Uploads/ueditor/image/20141130/547b1a307932f.jpg\" title=\"547b1a307932f.jpg\" alt=\"54a25aee3d6d55fbe5e42b876f224f4a20a4dd22.jpg\"/></p><p>好像可以发图片了</p>', '0', null);
INSERT INTO `comment` VALUES ('7', '10', '007', 'DHT11测温代码python运行出错', '<p style=\"box-sizing: border-box; margin-top: 0px; margin-bottom: 18px; color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; white-space: normal; background-color: rgb(255, 255, 255);\">这个问题就变成了怎样把已有的代码，保证缩进正确的导入Raspberry Pi当中。</p><p style=\"box-sizing: border-box; margin-top: 18px; margin-bottom: 18px; color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; white-space: normal; background-color: rgb(255, 255, 255);\">其实最好的办法是台式机上Notepad++编辑好了之后，FileZilla等SFTP工具直接把文件传到树莓派上边去……</p><p style=\"box-sizing: border-box; margin-top: 18px; margin-bottom: 18px; color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; white-space: normal; background-color: rgb(255, 255, 255);\">我提供另外一种文件原样传递的办法吧。</p><p style=\"box-sizing: border-box; margin-top: 18px; margin-bottom: 18px; color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; white-space: normal; background-color: rgb(255, 255, 255);\">稍复杂，但灵活一些，适合没有SFTP或不方便SFTP的时候：</p><ol style=\"box-sizing: border-box; margin-top: 18px; margin-bottom: 18px; padding-left: 30px; color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; white-space: normal; background-color: rgb(255, 255, 255);\" class=\" list-paddingleft-2\"><li><p>点原帖子的SELECT ALL，然后复制代码</p></li><li><p>打开&nbsp;<a rel=\"nofollow\" href=\"http://paste.openstack.org/\" target=\"_blank\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(0, 142, 89); text-decoration: none; outline: 0px; background-position: initial initial; background-repeat: initial initial;\">http://paste.openstack.org/</a>&nbsp;然后粘贴进去，点Paste，把代码张贴到网上</p></li><li><p>你会被跳转到&nbsp;<a rel=\"nofollow\" href=\"http://paste.openstack.org/show/82147/\" target=\"_blank\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(0, 142, 89); text-decoration: none; outline: 0px; background-position: initial initial; background-repeat: initial initial;\">http://paste.openstack.org/show/82147/</a>&nbsp;类似的地址</p></li><li><p>在里边点击raw，跳转到<a rel=\"nofollow\" href=\"http://paste.openstack.org/raw/82147/\" target=\"_blank\" style=\"box-sizing: border-box; background-color: transparent; color: rgb(0, 142, 89); text-decoration: none; outline: 0px; background-position: initial initial; background-repeat: initial initial;\">http://paste.openstack.org/raw/82147/</a></p></li><li><p>这个网址就是纯文本文件的原文下载</p></li><li><p>在树莓派上执行：<code style=\"box-sizing: border-box; font-family: Consolas, Menlo, Monaco, &#39;Courier New&#39;, monospace; font-size: 0.92857em; padding: 2px 4px; color: rgb(199, 37, 78); background-color: rgb(246, 246, 246); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px;\">wget &#39;http://paste.openstack.org/raw/82147/&#39; -O dht11.py</code>下载下来就行了，保证所有缩进的样式传递完全原样。</p></li></ol><hr style=\"box-sizing: content-box; height: 0px; margin: 20px auto; border-width: 2px 0px 0px; border-top-style: dotted; border-top-color: rgb(238, 238, 238); color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; white-space: normal; background-color: rgb(255, 255, 255);\"/><p style=\"box-sizing: border-box; margin-top: 18px; margin-bottom: 18px; color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; white-space: normal; background-color: rgb(255, 255, 255);\">我总觉得程序根本就是完全乱七八糟的……</p><p style=\"box-sizing: border-box; margin-top: 18px; margin-bottom: 18px; color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; white-space: normal; background-color: rgb(255, 255, 255);\">整个程序所有的缩进全部无道理的乱死，完全无法识别你的程序的结构、目的。要知道对于Python来说，程序不整齐就意味着程序功能本身的失败。我没法回答你，我相信别人也没法回答你，因为改这个东西根本无从下手。</p><p style=\"box-sizing: border-box; margin-top: 18px; margin-bottom: 18px; color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; white-space: normal; background-color: rgb(255, 255, 255);\">题主可以简单的说一下你的程序是从哪里获得的，也许能有更好的建议。</p><p><br/></p>', '0', null);

-- ----------------------------
-- Table structure for question
-- ----------------------------
DROP TABLE IF EXISTS `question`;
CREATE TABLE `question` (
  `qid` int(11) unsigned zerofill NOT NULL AUTO_INCREMENT,
  `uid` varchar(25) DEFAULT NULL,
  `title` varchar(255) DEFAULT NULL,
  `content` text,
  `supported` int(11) DEFAULT NULL,
  `opposed` int(11) DEFAULT NULL,
  `time` datetime DEFAULT NULL,
  PRIMARY KEY (`qid`)
) ENGINE=InnoDB AUTO_INCREMENT=11 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of question
-- ----------------------------
INSERT INTO `question` VALUES ('00000000001', '007', 'Visual Studio 2013 Community Edition安装中文语言包出错提示已安装该语言', '安装语言包中途取消过，然后再安装就报错“已安装此语言。若要安装其他语言,请安装包含该语言的语言包”。怎么才能成功安装？也找不到卸载的地方，卸载重装也不行。\r\n\r\n错误日志如下：', '52', '16', '2014-11-13 23:51:09');
INSERT INTO `question` VALUES ('00000000002', '007', 'Linux上vi(vim)编辑器使用教程', 'vi(vim)是上Linux非常常用的编辑器，很多Linux发行版都默认安装了vi(vim)。vi(vim)命令繁多但是如果使用灵活之后将会大大提高效率。vi是“visual interface”的缩写，vim是vi IMproved(增强版的vi)。在一般的系统管理维护中vi就够用，如果想使用代码加亮的话可以使用vim。下面vps侦探整理一下vi的使用教程：包含vi的基本介绍、使用模式、文件的打开关闭保存、插入文本或新建行、移动光标、删除、恢复字符或行、搜索等等，算是一篇比较适合新手学习vi的教程。', '3', '5', '2014-11-29 18:00:03');
INSERT INTO `question` VALUES ('00000000004', '007', 'ddddd', '<p>ddddd</p>', '0', null, '2014-11-30 23:56:44');
INSERT INTO `question` VALUES ('00000000005', '007', 'yii框架两点初级疑惑', '<p><span style=\"color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; background-color: rgb(255, 255, 255);\">1 比如fronted/web/index.php 展现的内容是怎么确定的（index本身不是展现页面的）</span><br style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; background-color: rgb(255, 255, 255);\">2 对于一个app，常用到主页返回，那么gethomeurl在哪里设置的呢？</span></p>', '0', null, '2014-12-01 00:02:01');
INSERT INTO `question` VALUES ('00000000006', '007', '负载均衡集群应该使用什么共享存储呢？', '<p><span style=\"color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; background-color: rgb(255, 255, 255);\">搭了一个很简单的&nbsp;</span><code style=\"box-sizing: border-box; font-family: Consolas, Menlo, Monaco, &#39;Courier New&#39;, monospace; font-size: 0.92857em; padding: 2px 4px; color: rgb(199, 37, 78); background-color: rgb(246, 246, 246); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; white-space: normal;\">nginx</code><span style=\"color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; background-color: rgb(255, 255, 255);\">&nbsp;+ 2台</span><code style=\"box-sizing: border-box; font-family: Consolas, Menlo, Monaco, &#39;Courier New&#39;, monospace; font-size: 0.92857em; padding: 2px 4px; color: rgb(199, 37, 78); background-color: rgb(246, 246, 246); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; white-space: normal;\">tomcat</code><span style=\"color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; background-color: rgb(255, 255, 255);\">&nbsp;的负载均很集群。</span><br style=\"box-sizing: border-box; color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; white-space: normal; background-color: rgb(255, 255, 255);\"/><span style=\"color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; background-color: rgb(255, 255, 255);\">用什么来做共享存储呢？&nbsp;</span><code style=\"box-sizing: border-box; font-family: Consolas, Menlo, Monaco, &#39;Courier New&#39;, monospace; font-size: 0.92857em; padding: 2px 4px; color: rgb(199, 37, 78); background-color: rgb(246, 246, 246); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; white-space: normal;\">NFS</code><span style=\"color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; background-color: rgb(255, 255, 255);\">&nbsp;可行么？如果想使用&nbsp;</span><code style=\"box-sizing: border-box; font-family: Consolas, Menlo, Monaco, &#39;Courier New&#39;, monospace; font-size: 0.92857em; padding: 2px 4px; color: rgb(199, 37, 78); background-color: rgb(246, 246, 246); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; white-space: normal;\">GFS</code><span style=\"color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; background-color: rgb(255, 255, 255);\">&nbsp;集群文件系统的话是不是一定要安装&nbsp;</span><code style=\"box-sizing: border-box; font-family: Consolas, Menlo, Monaco, &#39;Courier New&#39;, monospace; font-size: 0.92857em; padding: 2px 4px; color: rgb(199, 37, 78); background-color: rgb(246, 246, 246); border-top-left-radius: 3px; border-top-right-radius: 3px; border-bottom-right-radius: 3px; border-bottom-left-radius: 3px; white-space: normal;\">RHCS</code><span style=\"color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; background-color: rgb(255, 255, 255);\">&nbsp;?</span></p>', '0', null, '2014-12-01 00:03:41');
INSERT INTO `question` VALUES ('00000000007', '007', 'bootstrap的标签式导航和导航条的区别是什么？', '<p><span style=\"color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; background-color: rgb(255, 255, 255);\">bootstrap的标签式导航和导航条的区别是什么？</span></p>', '0', null, '2014-12-01 00:06:08');
INSERT INTO `question` VALUES ('00000000008', '007', '如何调试c++ 多线程程序？', '<p><span style=\"color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; background-color: rgb(255, 255, 255);\">调试c++多线程程序不知如何入手，请问如何调试多线程程序？</span></p>', '0', null, '2014-12-01 00:09:26');
INSERT INTO `question` VALUES ('00000000009', '007', '我的SVN项目文件比较大，几个G，我想把这些代码全部放到github等代码托管网站，如何做呢？', '<p><span style=\"color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; background-color: rgb(255, 255, 255);\">我的SVN项目文件比较大，几个G，我想把这些代码全部放到github等代码托管网站，如何做呢？</span></p><p><span style=\"color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; background-color: rgb(255, 255, 255);\"><img src=\"/webproject/Uploads/ueditor/image/20141201/547b41db2569c.jpg\" title=\"547b41db2569c.jpg\" alt=\"5d6034a85edf8db1998b02ca0823dd54574e74f2.jpg\"/></span></p>', '0', null, '2014-12-01 00:12:15');
INSERT INTO `question` VALUES ('00000000010', '007', 'DHT11测温代码python运行出错', '<p><span style=\"color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; background-color: rgb(255, 255, 255);\">python运行出错</span></p><pre class=\"brush:python;toolbar:false\">File&nbsp;&quot;./DHT11.py&quot;,&nbsp;line&nbsp;20\r\n&nbsp;&nbsp;&nbsp;&nbsp;for&nbsp;i&nbsp;in&nbsp;range(0,500):\r\n&nbsp;&nbsp;&nbsp;&nbsp;^\r\nIndentationError:&nbsp;unexpected&nbsp;indent</pre><p><span style=\"color: rgb(51, 51, 51); font-family: &#39;Open Sans&#39;, &#39;Helvetica Neue&#39;, Helvetica, Arial, STHeiti, sans-serif; font-size: 14px; line-height: 22.399999618530273px; background-color: rgb(255, 255, 255);\"></span><br/></p>', '0', null, '2014-12-01 00:22:11');

-- ----------------------------
-- Table structure for tag
-- ----------------------------
DROP TABLE IF EXISTS `tag`;
CREATE TABLE `tag` (
  `qid` int(11) NOT NULL,
  `tagname` char(25) NOT NULL,
  `tid` int(11) NOT NULL AUTO_INCREMENT,
  PRIMARY KEY (`tid`)
) ENGINE=InnoDB AUTO_INCREMENT=14 DEFAULT CHARSET=utf8;

-- ----------------------------
-- Records of tag
-- ----------------------------
INSERT INTO `tag` VALUES ('4', 'ddd', '2');
INSERT INTO `tag` VALUES ('4', 'ddd', '3');
INSERT INTO `tag` VALUES ('5', 'php', '4');
INSERT INTO `tag` VALUES ('5', 'yii', '5');
INSERT INTO `tag` VALUES ('6', 'linux', '6');
INSERT INTO `tag` VALUES ('6', 'tomcat', '7');
INSERT INTO `tag` VALUES ('7', 'bootstrap', '8');
INSERT INTO `tag` VALUES ('8', 'c++', '9');
INSERT INTO `tag` VALUES ('9', 'svn', '10');
INSERT INTO `tag` VALUES ('9', 'git', '11');
INSERT INTO `tag` VALUES ('10', 'python', '12');
INSERT INTO `tag` VALUES ('10', '开源硬件', '13');

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
INSERT INTO `user` VALUES ('007', '那是青蛙啊', '111', '0');
INSERT INTO `user` VALUES ('111', '111', '111', '0');
INSERT INTO `user` VALUES ('111111111111', '111', '111', '0');
INSERT INTO `user` VALUES ('121', '111', '111', '0');
INSERT INTO `user` VALUES ('123', '1111', '1111', '0');
INSERT INTO `user` VALUES ('12344', '111', '111', '0');
INSERT INTO `user` VALUES ('12345', '111', '111', '0');
INSERT INTO `user` VALUES ('123456', '111', '111', '0');
INSERT INTO `user` VALUES ('134', '青蛙', '111', '0');
INSERT INTO `user` VALUES ('aaa', '111', '111', '0');
INSERT INTO `user` VALUES ('aaa1', '111', '111', '0');
INSERT INTO `user` VALUES ('fefe', '1111', '111', '0');
