CREATE TABLE `user` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `name` varchar(255) DEFAULT NULL COMMENT '昵称',
  `real_name` varchar(255) DEFAULT NULL,
  `headimgurl` varchar(255) DEFAULT NULL COMMENT '头像地址',
  `age` int(11) DEFAULT '0' COMMENT '年龄',
  `country` varchar(255) DEFAULT NULL COMMENT '国家',
  `province` varchar(255) DEFAULT NULL COMMENT '省份',
  `city` varchar(255) DEFAULT NULL COMMENT '城市',
  `sex` tinyint(1) DEFAULT '0' COMMENT '性别',
  `openid` varchar(190) DEFAULT NULL,
  `language` varchar(190) DEFAULT NULL,
  `wechat_data` text,
  `created_at` int(11) NOT NULL COMMENT '注册时间',
  `updated_at` int(11) NOT NULL COMMENT '更新时间',
  `email` varchar(190) DEFAULT NULL COMMENT '邮箱, 允许登录',
  `password_hash` varchar(60) NOT NULL COMMENT '密码hash',
  `auth_key` varchar(32) NOT NULL,
  `unconfirmed_email` varchar(190) DEFAULT NULL COMMENT '未确认的邮箱',
  `blocked_at` int(11) DEFAULT NULL COMMENT '被锁定的时间',
  `registration_ip` varchar(45) DEFAULT NULL COMMENT '注册ip',
  `flags` int(11) NOT NULL DEFAULT '0',
  `mobile` varchar(45) DEFAULT NULL COMMENT '手机号码, 允许登录',
  `status` smallint(6) NOT NULL DEFAULT '10' COMMENT '冗余扩展',
  `wechat_id` varchar(45) DEFAULT NULL COMMENT '微信ID, 用于添加好友',
  `last_login_at` int(11) DEFAULT NULL COMMENT '最后一次登录时间',
  `last_active_at` int(11) DEFAULT NULL COMMENT '最后一次活跃时间',
  `email_confirmation_token` varchar(60) DEFAULT NULL COMMENT '确认邮箱token',
  `password_reset_token` varchar(60) DEFAULT NULL COMMENT '重置密码token',
  `is_email_verified` tinyint(3) unsigned NOT NULL DEFAULT '0' COMMENT '邮箱已确认',
  `unionid` varchar(60) DEFAULT NULL COMMENT '现在只考虑微信登录的                   union_id',
  `access_token` varchar(32) DEFAULT NULL COMMENT '用于移动端访问的TOKEN',
  `subscribe` tinyint(1) DEFAULT '0' COMMENT '是否关注服务号 0 未关注 1 已关注',
  `subscribe_time` int(11) DEFAULT '0' COMMENT '关注服务号的时间',
  PRIMARY KEY (`id`),
  UNIQUE KEY `user_unique_email` (`email`),
  UNIQUE KEY `mobile_UNIQUE` (`mobile`),
  UNIQUE KEY `uniq_unionid` (`unionid`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4;

CREATE TABLE `profile` (
  `user_id` int(11) NOT NULL,
  `name` varchar(255) DEFAULT NULL,
  `public_email` varchar(255) DEFAULT NULL,
  `gravatar_email` varchar(255) DEFAULT NULL,
  `gravatar_id` varchar(32) DEFAULT NULL,
  `location` varchar(255) DEFAULT NULL,
  `website` varchar(255) DEFAULT NULL,
  `bio` text COMMENT '自我介绍',
  `country` varchar(255) DEFAULT NULL COMMENT '国家',
  `province` varchar(255) DEFAULT NULL COMMENT '省份',
  `city` varchar(255) DEFAULT NULL COMMENT '城市',
  `headimgurl` varchar(255) DEFAULT NULL COMMENT '头像地址',
  `sex` tinyint(1) DEFAULT '0' COMMENT '性别',
  `birth_year` smallint(6) DEFAULT NULL,
  `birth_month` tinyint(4) DEFAULT NULL,
  `birth_day` tinyint(4) DEFAULT NULL,
  `constellation` varchar(255) DEFAULT NULL COMMENT '星座, 根据生日自动生成',
  `zodiac` varchar(255) DEFAULT NULL,
  `company` varchar(255) DEFAULT NULL COMMENT '公司',
  `education` varchar(255) DEFAULT NULL COMMENT '学历',
  `occupation` varchar(255) DEFAULT NULL COMMENT '职业',
  `position` varchar(255) DEFAULT NULL COMMENT '职位',
  `affective_status` varchar(255) DEFAULT NULL COMMENT '情感状态',
  `lookingfor` varchar(255) DEFAULT NULL COMMENT '交友目的',
  `blood_type` varchar(255) DEFAULT NULL COMMENT '血型',
  `height` varchar(255) DEFAULT NULL COMMENT '身高',
  `weight` varchar(255) DEFAULT NULL COMMENT '体重',
  `interest` varchar(255) DEFAULT NULL COMMENT '兴趣爱好',
  `from` varchar(255) DEFAULT '0' COMMENT '1 朋友圈\n2 朋友推荐\n3 耳闻, 自己找到的',
  `want` varchar(255) DEFAULT '0' COMMENT '1 独特体验拉轰活动\n2 志同道合\n3 生活技能和硬知识\n4 聊天谈理想\n5 融入兴趣圈子',
  `recommand` text COMMENT '推荐一个身边有趣的人',
  PRIMARY KEY (`user_id`),
  CONSTRAINT `fk_user_profile` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

CREATE TABLE `social_account` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) DEFAULT NULL,
  `provider` varchar(190) NOT NULL,
  `client_id` varchar(190) DEFAULT NULL,
  `data` text,
  `code` varchar(32) DEFAULT NULL,
  `created_at` int(11) DEFAULT NULL,
  `email` varchar(255) DEFAULT NULL,
  `username` varchar(255) DEFAULT NULL,
  `unionid` varchar(60) DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `account_unique` (`provider`,`client_id`),
  UNIQUE KEY `account_unique_code` (`code`),
  UNIQUE KEY `union_id_UNIQUE` (`unionid`,`client_id`),
  KEY `fk_user_account` (`user_id`),
  CONSTRAINT `fk_user_account` FOREIGN KEY (`user_id`) REFERENCES `user` (`id`) ON DELETE CASCADE
) ENGINE=InnoDB AUTO_INCREMENT=23 DEFAULT CHARSET=utf8mb4;