SET NAMES utf8;_ZDB_LINE_ENDER_
REPLACE INTO `eps_block`(`originID`,`template`,`type`,`title`,`content`,`lang`) VALUES('1','default','latestArticle','最新文章','{\"category\":\"0\",\"limit\":\"7\"}','lang'),('2','default','hotArticle','热门文章','{\"category\":\"0\",\"limit\":\"7\"}','lang'),('3','default','latestProduct','最新产品','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','lang'),('4','default','hotProduct','热门产品','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','lang'),('5','default','slide','幻灯片','{\"group\":\"15\"}','lang'),('6','default','articleTree','文章分类','{\"showChildren\":\"0\"}','lang'),('7','default','productTree','产品分类','{\"showChildren\":\"0\"}','lang'),('8','default','blogTree','博客分类','{\"showChildren\":\"1\"}','lang'),('9','default','pageList','单页列表','{\"limit\":\"7\"}','lang'),('10','default','contact','联系我们','','lang'),('11','default','about','公司简介','','lang'),('12','default','links','友情链接','','lang'),('13','default','header','网站头部','{\"top\":{\"left\":\"\",\"right\":\"\"},\"topLeftContent\":\"\",\"topRightContent\":\"\",\"middle\":{\"left\":\"logo\",\"center\":\"slogan\",\"right\":\"\"},\"bottom\":\"nav\",\"customImage\":null,\"custom\":{\"1\":{\"css\":\"#blockID\\n{\\n  \\/*.panel-heading {}*\\/\\n  \\/*.panel-body    {}*\\/\\n}\",\"js\":\"\"}}}','lang'),('14','default','followUs','关注我们','','lang'),('15','default','subscribe','订阅博客','','lang');_ZDB_LINE_ENDER_
REPLACE INTO `eps_layout`(`template`,`plan`,`page`,`region`,`object`,`blocks`,`import`,`lang`) VALUES('default','plan','all','top','','[{\"id\":\"13\",\"grid\":\"0\",\"probability\":\"\",\"titleless\":\"\",\"borderless\":\"\",\"isRandom\":\"0\"}]','no','lang'),('default','plan','article_browse','side','','[{\"id\":\"6\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','lang'),('default','plan','article_view','side','','[{\"id\":\"6\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','lang'),('default','plan','blog_index','side','','[{\"id\":\"15\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"8\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','lang'),('default','plan','blog_view','side','','[{\"id\":\"8\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','lang'),('default','plan','company_index','side','','[{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"14\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','lang'),('default','plan','index_index','bottom','','[{\"id\":\"12\",\"grid\":12,\"titleless\":0,\"borderless\":0}]','no','lang'),('default','plan','index_index','middle','','[{\"id\":\"1\",\"grid\":\"4\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"11\",\"grid\":\"4\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"10\",\"grid\":\"4\",\"titleless\":\"0\",\"borderless\":\"0\"}]','no','lang'),('default','plan','index_index','top','','[{\"id\":\"5\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','lang'),('default','plan','message_index','side','','[{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','lang'),('default','plan','page_index','side','','[{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"2\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','lang'),('default','plan','page_view','side','','[{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"2\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','lang'),('default','plan','product_browse','side','','[{\"id\":\"4\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"7\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','lang'),('default','plan','product_view','side','','[{\"id\":\"4\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"7\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','lang');_ZDB_LINE_ENDER_
REPLACE INTO `eps_config`(`owner`,`module`,`section`,`key`,`value`,`lang`) VALUES('system','common','template','custom','{\"default\":{\"flat\":{\"background-color\":\"transparent\",\"background-image\":\"\",\"background-image-repeat\":\"repeat\",\"background-image-position-x\":\"\",\"background-image-position-y\":\"0\",\"background-image-position\":\" 0\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"link-color\":\"\",\"link-decoration\":\"none\",\"link-visited-color\":\"\",\"link-hover-color\":\"\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\",\"footer-border-style\":\"none\",\"footer-border-color\":\"\",\"footer-backcolor\":\"\"},\"tartan\":{\"background-color\":\"#D0FFFD\",\"background-image\":\"\",\"background-image-repeat\":\"repeat\",\"background-image-position-x\":\"\",\"background-image-position-y\":\"0\",\"background-image-position\":\" 0\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"link-color\":\"\",\"link-decoration\":\"none\",\"link-visited-color\":\"\",\"link-hover-color\":\"\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\",\"footer-border-style\":\"none\",\"footer-border-color\":\"\",\"footer-backcolor\":\"\"},\"1\":{\"background-color\":\"transparent\",\"background-image\":\"none\",\"background-image-repeat\":\"repeat\",\"background-image-position-x\":\"0\",\"background-image-position-y\":\"0\",\"background-image-position\":\"0 0\",\"text-color\":\"#333\",\"font-size\":\"13px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"link-color\":\"#0D3D88\",\"link-decoration\":\"none\",\"link-visited-color\":\"#0D3D88\",\"link-hover-color\":\"#347AEB\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\",\"navbar-table-layout\":\"true\",\"navbar-backcolor\":\"#f1f1f1\",\"navbar-background-image\":\"none\",\"navbar-background-image-repeat\":\"repeat\",\"navbar-background-image-position-x\":\"0\",\"navbar-background-image-position-y\":\"0\",\"navbar-background-image-position\":\"0 0\",\"navbar-border-style\":\"solid\",\"navbar-border-color\":\"#D5D5D5\",\"navbar-border-width\":\"1px\",\"navbar-border-radius\":\"4px\",\"navbar-panel-backcolor\":\"#FFF\",\"navbar-panel-border-style\":\"solid\",\"navbar-panel-border-color\":\"#DDD\",\"navbar-panel-border-width\":\"1px\",\"navbar-paenl-border-radius\":\"3px\",\"navbar-menu-color\":\"#555\",\"navbar-menu-font-size\":\"14px\",\"navbar-menu-font-family\":\"inherit\",\"navbar-menu-font-weight\":\"bold\",\"navbar-menu-color-hover\":\"#000\",\"navbar-menu-backcolor-hover\":\"#FEFEFE\",\"navbar-menu-color-active\":\"#151515\",\"navbar-menu-backcolor-active\":\"#FFF\",\"navbar-submenu-color\":\"#333\",\"navbar-submenu-color-hover\":\"#151515\",\"navbar-submenu-backcolor-hover\":\"#E5E5E5\",\"navbar-submenu-color-active\":\"#151515\",\"navbar-submenu-backcolor-active\":\"#E5E5E5\",\"block-border-style\":\"solid\",\"block-border-color\":\"#DDD\",\"block-border-width\":\"1px\",\"block-border-radius\":\"3px\",\"block-heading-backcolor\":\"#F5F5F5\",\"block-heading-color\":\"#333\",\"block-heading-font-size\":\"inherit\",\"block-heading-font-weight\":\"inherit\",\"block-body-backcolor\":\"transparent\",\"block-body-color\":\"#333\",\"block-body-link-color\":\"#0D3D88\",\"button-color-default\":\"#F2F2F2\",\"button-color-primary\":\"#3280FC\",\"button-color-info\":\"#39B3D7\",\"button-color-success\":\"#229F24\",\"button-color-warning\":\"#E48600\",\"button-color-danger\":\"#D2322D\",\"button-border-style\":\"solid\",\"button-border-width\":\"1px\",\"button-border-radius\":\"3px\",\"button-font-weight\":\"normal\",\"footer-border-style\":\"solid\",\"footer-border-color\":\"#ddd\",\"footer-backcolor\":\"#f7f7f7\"},\"wide\":{\"color-primary\":\"\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\"},\"colorful\":{\"color-primary\":\"\",\"border-radius\":\"3\",\"background-color\":\"\",\"background-image\":\"\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"\\u5b8b\\u4f53\",\"font-weight\":\"normal\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\",\"footer-border-style\":\"solid\",\"footer-border-color\":\"\",\"footer-backcolor\":\"#2286D2\"}}}','lang');_ZDB_LINE_ENDER_
INSERT  INTO `eps_slide`(`title`,`group`,`titleColor`,`mainLink`,`backgroundType`,`backgroundColor`,`height`,`image`,`label`,`buttonClass`,`buttonUrl`,`buttonTarget`,`summary`,`lang`,`order`) VALUES('蝉知，专注企业营销!','15','#FFF','','color','#FF9400','270','','[\"\\u8749\\u77e54.3\\u4e0b\\u8f7d\"]','[\"primary\"]','[\"http:\\/\\/www.chanzhi.org\\/dynamic\\/103_chanzhi4.3.html\"]','[\"\"]','<div><ul><li>功能完备：文章、产品、论坛、手册、留言、评论、博客...</li>
<li>全网营销：一个网站，电脑、手机、微信体验俱佳！</li>
<li>集成微信：内置微信公众平台功能，移动互联，我来做主！</li>
<li>完美SEO：全方位针对搜索引擎优化，轻松斩获最佳排名！</li>
</ul>
</div>','lang','1'),('蝉知，定制性最强！','15','#FFF','','color','#2286D2','270','','[\"\\u8749\\u77e54.3\\u4e0b\\u8f7d\"]','[\"primary\"]','[\"http:\\/\\/www.chanzhi.org\\/download\\/103_chanzhi4.3.html\"]','[\"\"]','<div><ul><li>底层框架自主开发，结构先进灵活；</li>
<li>自主开发UI框架，更适合国人习惯；</li>
<li>内置扩展机制，方便企业定制开发；</li>
</ul>
</div>','lang','2'),('蝉知，真开源真免费!','15','#FFF','','color','#D92958','270','','[\"\\u8749\\u77e54.3\\u4e0b\\u8f7d\"]','[\"primary\"]','[\"http:\\/\\/www.chanzhi.org\\/download\\/103_chanzhi4.3.html\"]','[\"\"]','<div><ul><li>国内第一款开源企业门户系统;</li>
<li>授权宽松，商业友好，代码开放;</li>
<li>免费下载，免费使用，不限制商用！</li>
</ul>
</div>','lang','3');_ZDB_LINE_ENDER_
INSERT  INTO `eps_category`(`alias`,`name`,`lang`,`type`) VALUES('15','默认分组','lang','tmpSlide');_ZDB_LINE_ENDER_
INSERT INTO `eps_config` (owner,module,section,`key`,value,lang) select owner,module,section,`key`,value, 'zh-cn' as lang from `eps_config` where section in ('css', 'js') and lang = 'lang';
INSERT INTO `eps_config` (owner,module,section,`key`,value,lang) select owner,module,section,`key`,value, 'zh-tw' as lang from `eps_config` where section in ('css', 'js') and lang = 'lang';
INSERT INTO `eps_config` (owner,module,section,`key`,value,lang) select owner,module,section,`key`,value, 'en' as lang from `eps_config` where section in ('css', 'js') and lang = 'lang';