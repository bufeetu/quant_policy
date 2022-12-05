
SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET AUTOCOMMIT = 0;
START TRANSACTION;
SET time_zone = "+00:00";


--
-- 表的结构 `__PREFIX__csmip_chartbind`
--
CREATE TABLE IF NOT EXISTS `__PREFIX__csmip_chartbind` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `charttype` varchar(20) DEFAULT NULL COMMENT 'Chart类型',
  `chartkey` varchar(100) DEFAULT NULL COMMENT 'Chart维度值',
  `ip2regionkey` varchar(100) DEFAULT NULL COMMENT '对应Ip2Region库',
  `status` enum('normal','hidden') NOT NULL DEFAULT 'normal' COMMENT '状态',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `b1` varchar(100) DEFAULT NULL COMMENT '备用字段1',
  `b2` varchar(100) DEFAULT NULL COMMENT '备用字段2',
  `b3` varchar(100) DEFAULT NULL COMMENT '备用字段3',
  `b4` varchar(100) DEFAULT NULL COMMENT '备用字段4',
  `b5` varchar(100) DEFAULT NULL COMMENT '备用字段5',
  `b6` varchar(100) DEFAULT NULL COMMENT '备用字段6',
  `b7` varchar(100) DEFAULT NULL COMMENT '备用字段7',
  `b8` varchar(100) DEFAULT NULL COMMENT '备用字段8',
  `b9` varchar(100) DEFAULT NULL COMMENT '备用字段9',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=50 DEFAULT CHARSET=utf8 COMMENT='Chart维度对照表'
;


--
-- 表的结构 `__PREFIX__csmip_data`
--
CREATE TABLE IF NOT EXISTS `__PREFIX__csmip_data` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `name` varchar(200) NOT NULL COMMENT '批次号',
  `needuserlogin` enum('Y','N') DEFAULT 'Y' COMMENT '是否需要用户登录:Y=需要,N=不需要',
  `chartconfig` text COMMENT '图片配置',
  `status` enum('normal','hidden') NOT NULL DEFAULT 'normal' COMMENT '状态',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员',
  `b1` varchar(100) DEFAULT NULL COMMENT '备用字段1',
  `b2` varchar(100) DEFAULT NULL COMMENT '备用字段2',
  `b3` varchar(100) DEFAULT NULL COMMENT '备用字段3',
  `b4` varchar(100) DEFAULT NULL COMMENT '备用字段4',
  `b5` varchar(100) DEFAULT NULL COMMENT '备用字段5',
  `b6` varchar(100) DEFAULT NULL COMMENT '备用字段6',
  `b7` varchar(100) DEFAULT NULL COMMENT '备用字段7',
  `b8` varchar(100) DEFAULT NULL COMMENT '备用字段8',
  `b9` varchar(100) DEFAULT NULL COMMENT '备用字段9',
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=48 DEFAULT CHARSET=utf8  COMMENT='导入IP包'
;
 



--
-- 表的结构 `__PREFIX__csmip_dataline`
--
CREATE TABLE IF NOT EXISTS `__PREFIX__csmip_dataline` (
  `id` int(10) unsigned NOT NULL AUTO_INCREMENT COMMENT 'id',
  `csmip_data_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '导入IP包',
  `ip` varchar(100) NOT NULL COMMENT 'IP地址',
  `country` varchar(100) DEFAULT NULL COMMENT '所属国家',
  `region` varchar(100) DEFAULT NULL COMMENT '区域',
  `province` varchar(100) DEFAULT NULL COMMENT '省份',
  `city` varchar(100) DEFAULT NULL COMMENT '城市',
  `isp` varchar(100) DEFAULT NULL COMMENT 'ISP',
  `ipregcityid` int(10) DEFAULT NULL COMMENT 'IpRegion返回值cityid',
  `ipregregion` varchar(200) DEFAULT NULL COMMENT 'IpRegion返回值',
  `createtime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '创建时间',
  `updatetime` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '更新时间',
  `status` enum('normal','hidden') DEFAULT 'normal' COMMENT '状态',
  `admin_id` int(10) unsigned NOT NULL DEFAULT '0' COMMENT '管理员',
  `b1` varchar(100) DEFAULT NULL COMMENT '对应区域',
  `b2` varchar(100) DEFAULT NULL COMMENT '备用字段2',
  `b3` varchar(100) DEFAULT NULL COMMENT '备用字段3',
  `b4` varchar(100) DEFAULT NULL COMMENT '备用字段4',
  `b5` varchar(100) DEFAULT NULL COMMENT '备用字段5',
  `b6` varchar(100) DEFAULT NULL COMMENT '备用字段6',
  `b7` varchar(100) DEFAULT NULL COMMENT '备用字段7',
  `b8` varchar(100) DEFAULT NULL COMMENT '备用字段8',
  `b9` varchar(100) DEFAULT NULL COMMENT '备用字段9',
  PRIMARY KEY (`id`),
  KEY `IX_CSMIP_DATALLINE1` (`csmip_data_id`),
  KEY `IX_CSMIP_DATALLINE2` (`country`),
  KEY `IX_CSMIP_DATALLINE3` (`province`),
  KEY `IX_CSMIP_DATALLINE4` (`status`)
) ENGINE=InnoDB AUTO_INCREMENT=1 DEFAULT CHARSET=utf8 COMMENT='IP地址'
;
 
insert  into `__PREFIX__csmip_chartbind`(`id`,`charttype`,`chartkey`,`ip2regionkey`,`status`,`createtime`,`updatetime`,`b1`,`b2`,`b3`,`b4`,`b5`,`b6`,`b7`,`b8`,`b9`) values (15,'echartchina','南海诸岛','南海诸岛','normal',0,1610897160,'华南','','','','','','','',''),(16,'echartchina','北京','北京市','normal',0,1610896936,'华北','','','','','','','',''),(17,'echartchina','上海','上海市','normal',0,1610896863,'华东','','','','','','','',''),(18,'echartchina','重庆','重庆市','normal',0,1610897085,'西南','','','','','','','',''),(19,'echartchina','河北','河北省','normal',0,1610896977,'华北','','','','','','','',''),(20,'echartchina','河南','河南省','normal',0,1610896996,'华中','','','','','','','',''),(21,'echartchina','云南','云南省','normal',0,1610897076,'西南','','','','','','','',''),(22,'echartchina','辽宁','辽宁省','normal',0,1610896854,'东北','','','','','','','',''),(23,'echartchina','黑龙江','黑龙江省','normal',0,1610896836,'东北','','','','','','','',''),(24,'echartchina','湖南','湖南省','normal',0,1610897010,'华中','','','','','','','',''),(25,'echartchina','安徽','安徽省','normal',0,1610896884,'华东','','','','','','','',''),(26,'echartchina','山东','山东省','normal',0,1610896906,'华东','','','','','','','',''),(27,'echartchina','江苏','江苏省','normal',0,1610896876,'华东','','','','','','','',''),(28,'echartchina','浙江','浙江省','normal',0,1610896871,'华东','','','','','','','',''),(29,'echartchina','江西','江西省','normal',0,1610896900,'华东','','','','','','','',''),(30,'echartchina','湖北','湖北省','normal',0,1610897001,'华中','','','','','','','',''),(31,'echartchina','广西','广西壮族自治区','normal',0,1610897029,'华南','','','','','','','',''),(32,'echartchina','甘肃','甘肃省','normal',0,1610897117,'西北','','','','','','','',''),(33,'echartchina','山西','山西省','normal',0,1610896952,'华北','','','','','','','',''),(34,'echartchina','内蒙古','内蒙古自治区','normal',0,1610896985,'华北','','','','','','','',''),(35,'echartchina','陕西','陕西省','normal',0,1610897110,'西北','','','','','','','',''),(36,'echartchina','吉林','吉林省','normal',0,1610896849,'东北','','','','','','','',''),(37,'echartchina','福建','福建省','normal',0,1610896891,'华东','','','','','','','',''),(38,'echartchina','贵州','贵州省','normal',0,1610897070,'西南','','','','','','','',''),(39,'echartchina','广东','广东省','normal',0,1610897020,'华南','','','','','','','',''),(40,'echartchina','青海','青海省','normal',0,1610897122,'西北','','','','','','','',''),(41,'echartchina','西藏','西藏自治区','normal',0,1610897091,'西南','','','','','','','',''),(42,'echartchina','四川','四川省','normal',0,1610897063,'西南','','','','','','','',''),(43,'echartchina','宁夏','宁夏回族自治区','normal',0,1610897125,'西北','','','','','','','',''),(44,'echartchina','海南','海南省','normal',0,1610897036,'华南','','','','','','','',''),(45,'echartchina','台湾','台湾省','normal',0,1610896922,'华东','','','','','','','',''),(46,'echartchina','香港','香港特别行政区','normal',0,1610897047,'华南','','','','','','','',''),(47,'echartchina','澳门','澳门特别行政区','normal',0,1610897055,'华南','','','','','','','',''),(48,'echartchina','天津','天津市','normal',0,1610896943,'华北','','','','','','','',''),(49,'echartchina','新疆','新疆维吾尔自治区','normal',0,1610897132,'西北','','','','','','','','');

 
COMMIT;