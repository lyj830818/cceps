<?php
 die();
?>
20180326 10:22:34: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = '100fun'
  SELECT * FROM eps_user WHERE account  = '100fun'
  INSERT INTO eps_log SET `account` = '100fun',`date` = '2018-03-26 10:22:34',`ip` = '111.30.21.47',`location` = '中国 天津 天津 ',`browser` = 'chrome 65',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/65.0.3325.181 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = '100fun',`password` = 'f393c27a0bcc8611158284f1cc1df6c1',`realname` = '100fun',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '2',`ip` = '111.30.21.47',`last` = '2018-03-26 10:22:34',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2018-03-25 23:31:30',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 10',`browser` = 'chrome 65',`lang` = 'zh-cn' WHERE account  = '100fun'
  UPDATE eps_user SET  `browser` = 'chrome 65', `os` = 'Windows 10' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = '100fun' AND  t1.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522030954',`lang` = 'all'

20180326 10:22:34: /admin.php?m=widget&f=printWidget&widget=1
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '1' AND  eps_widget.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `deliveryStatus` = 'confirmed', `last` = '2018-03-26 10:22:34' WHERE deliveryStatus  = 'send' AND  deliveriedDate  <= '2018-03-19 10:22:34' AND  status  != 'finished' AND  eps_order.lang in('zh-cn', 'all') 
  UPDATE eps_order SET  `status` = 'expired', `last` = '2018-03-26 10:22:34' WHERE payStatus  = 'not_paid' AND  status  != 'deleted' AND  status  != 'expired' AND  createdDate  <= '2018-02-24 10:22:34' AND  eps_order.lang in('zh-cn', 'all') 
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT COUNT(*) AS recTotal FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  
  SELECT * FROM eps_order WHERE 1  AND  status  != 'deleted'  AND  eps_order.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM eps_order_product WHERE orderID IN ('2','1') AND  eps_order_product.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522030954',`lang` = 'all'

20180326 10:22:34: /admin.php?m=widget&f=printWidget&widget=2
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '2' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_thread WHERE 1   AND  eps_thread.lang in('zh-cn', 'all')  ORDER BY `id` desc  LIMIT 10 
  SELECT account, realnames, realname FROM eps_user WHERE account IN ('demo','','')
  SELECT account, realname, realnames FROM eps_user ORDER BY `id` asc 

20180326 10:22:34: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 10:22:34: /admin.php?m=widget&f=printWidget&widget=3
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '3' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT account FROM eps_user WHERE admin  != 'no'
  SELECT * FROM eps_message WHERE status  = '0' AND  type IN ('comment','message','reply') AND  account  NOT IN ('100fun','demo')  AND  eps_message.lang in('zh-cn', 'all')  ORDER BY `date` desc  LIMIT 10 
  SELECT id, title FROM eps_article WHERE id IN ('') AND  eps_article.lang in('zh-cn', 'all') 
  SELECT id, name FROM eps_product WHERE id IN ('') AND  eps_product.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_book WHERE id IN ('') AND  eps_book.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 
  SELECT id, `from` FROM eps_message WHERE id IN ('') AND  eps_message.lang in('zh-cn', 'all') 

20180326 10:26:28: /admin.php?m=site&f=setbasic
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'status',`value` = 'normal',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'pauseTip',`value` = '<p>站点维护中……</p>',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'type',`value` = 'portal',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'mobileTemplate',`value` = 'close',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'gzipOutput',`value` = 'close',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'name',`value` = '广州共享充电运营平台',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'copyright',`value` = '2018',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'modules',`value` = 'article,page',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'keywords',`value` = '广州共享充电运营平台',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'indexKeywords',`value` = '广州共享充电运营平台',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'slogan',`value` = '广州共享充电运营平台',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'meta',`value` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'desc',`value` = '站点描述。。。',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'icpSN',`value` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'icpLink',`value` = 'http://www.miitbeian.gov.cn',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'policeSN',`value` = '',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'policeLink',`value` = 'http://www.miitbeian.gov.cn',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522031188',`lang` = 'all'

20180326 10:26:35: /admin.php?m=site&f=setcache
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'cache',`key` = 'type',`value` = 'close',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'cache',`key` = 'cachePage',`value` = 'close',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'cache',`key` = 'expired',`value` = '86400',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522031195',`lang` = 'all'

20180326 10:26:52: /admin.php?m=site&f=sethomemenu
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'menus',`key` = 'home',`value` = 'admin,thread,article,page',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522031212',`lang` = 'all'

20180326 10:26:58: /admin.php?m=site&f=seturltype
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 10:26:58: /admin.php?m=guarder&f=validate&url=&target=modal&account=&type=okFile
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT security FROM eps_user WHERE account  = '100fun' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = '100fun'
  SELECT security FROM eps_user WHERE account  = '100fun' AND  eps_user.lang in('zh-cn', 'all') 

20180326 10:27:18: /admin.php?m=site&f=seturltype
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 10:27:18: /admin.php?m=guarder&f=validate&url=&target=modal&account=&type=okFile
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT security FROM eps_user WHERE account  = '100fun' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = '100fun'
  SELECT security FROM eps_user WHERE account  = '100fun' AND  eps_user.lang in('zh-cn', 'all') 

20180326 10:27:36: /admin.php?m=guarder&f=validate&url=&target=modal&account=&type=okFile
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT security FROM eps_user WHERE account  = '100fun' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = '100fun'

20180326 10:27:37: /admin.php?m=site&f=seturltype
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522031257',`lang` = 'all'

20180326 10:27:37: /admin.php?m=site&f=seturltype
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 10:27:49: /admin.php?m=site&f=seturltype
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522031269',`lang` = 'all'

20180326 10:27:50: /admin.php?m=site&f=seturltype
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 10:33:35: /admin.php?m=ui&f=themestore&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 10:36:47: /admin.php?m=ui&f=themestore&type=free
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 10:36:51: /admin.php?m=ui&f=browsetheme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 10:40:18: /admin.php?m=ui&f=themestore&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 10:46:16: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 10:51:39: /admin.php?m=ui&f=themestore&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 10:58:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 11:04:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 11:10:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 11:16:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 11:22:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 11:28:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 11:34:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 11:40:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 11:46:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 11:52:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 11:58:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 12:04:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 12:10:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 12:16:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 12:22:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 12:28:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 12:34:22: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 12:40:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 12:46:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 12:52:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 12:58:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 13:04:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 13:10:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 13:16:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 13:22:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 13:28:21: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 14:58:58: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = '100fun'
  SELECT * FROM eps_user WHERE account  = '100fun'
  INSERT INTO eps_log SET `account` = '100fun',`date` = '2018-03-26 14:58:58',`ip` = '119.131.222.96',`location` = '中国 广东 广州 ',`browser` = 'chrome 55',`type` = 'adminlogin',`desc` = 'fail',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 6.1) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/55.0.2883.87 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = '100fun',`password` = 'f393c27a0bcc8611158284f1cc1df6c1',`realname` = '100fun',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '2',`ip` = '111.30.21.47',`last` = '2018-03-26 10:22:34',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '1',`referer` = '',`join` = '2018-03-25 23:31:30',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 10',`browser` = 'chrome 65',`lang` = 'zh-cn' WHERE id  = '1'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522047538',`lang` = 'all'

20180326 14:58:58: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = '100fun'
  SELECT * FROM eps_user WHERE account  = '100fun'
  INSERT INTO eps_log SET `account` = '100fun',`date` = '2018-03-26 14:58:58',`ip` = '119.131.222.96',`location` = '中国 广东 广州 ',`browser` = 'chrome 55',`type` = 'adminlogin',`desc` = 'fail',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 6.1) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/55.0.2883.87 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = '100fun',`password` = 'f393c27a0bcc8611158284f1cc1df6c1',`realname` = '100fun',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '2',`ip` = '111.30.21.47',`last` = '2018-03-26 10:22:34',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '2',`referer` = '',`join` = '2018-03-25 23:31:30',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 10',`browser` = 'chrome 65',`lang` = 'zh-cn' WHERE id  = '1'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522047538',`lang` = 'all'

20180326 14:59:21: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = '100fun'
  SELECT * FROM eps_user WHERE account  = '100fun'
  INSERT INTO eps_log SET `account` = '100fun',`date` = '2018-03-26 14:59:21',`ip` = '119.131.222.96',`location` = '中国 广东 广州 ',`browser` = 'chrome 55',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 6.1) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/55.0.2883.87 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = '100fun',`password` = 'f393c27a0bcc8611158284f1cc1df6c1',`realname` = '100fun',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '3',`ip` = '119.131.222.96',`last` = '2018-03-26 14:59:21',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2018-03-25 23:31:30',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 10',`browser` = 'chrome 65',`lang` = 'zh-cn' WHERE account  = '100fun'
  UPDATE eps_user SET  `browser` = 'chrome 55', `os` = 'Windows 7' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = '100fun' AND  t1.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522047561',`lang` = 'all'

20180326 14:59:21: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 15:00:40: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 15:00:45: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 15:03:23: /admin.php?m=ui&f=browsetheme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 15:05:20: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = '100fun'
  SELECT * FROM eps_user WHERE account  = '100fun'
  INSERT INTO eps_log SET `account` = '100fun',`date` = '2018-03-26 15:05:20',`ip` = '113.109.58.157',`location` = '中国 广东 广州 ',`browser` = 'chrome 39',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 6.1; WOW64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/39.0.2171.95 Safari\\/537.36 MicroMessenger\\/6.5.2.501 NetType\\/WIFI WindowsWechat QBCore\\/3.43.691.400 QQBrowser\\/9.0.2524.400\"}'
  UPDATE eps_user SET `id` = '1',`account` = '100fun',`password` = 'f393c27a0bcc8611158284f1cc1df6c1',`realname` = '100fun',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '4',`ip` = '113.109.58.157',`last` = '2018-03-26 15:05:20',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2018-03-25 23:31:30',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 7',`browser` = 'chrome 55',`lang` = 'zh-cn' WHERE account  = '100fun'
  UPDATE eps_user SET  `browser` = 'chrome 39', `os` = 'Windows 7' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = '100fun' AND  t1.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522047920',`lang` = 'all'

20180326 15:05:20: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 15:05:45: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 15:08:09: /admin.php?m=block&f=setregion&page=all&region=header
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'all' AND  region  = 'header' AND  object  = '' AND  template  = 'default' AND  plan IN ('all','0') AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 

20180326 15:08:14: /admin.php?m=block&f=setregion&page=all&region=top
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'all' AND  region  = 'top' AND  object  = '' AND  template  = 'default' AND  plan IN ('all','0') AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 

20180326 15:13:38: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 15:19:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 15:25:38: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 15:30:26: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = '100fun'
  SELECT * FROM eps_user WHERE account  = '100fun'
  INSERT INTO eps_log SET `account` = '100fun',`date` = '2018-03-26 15:30:26',`ip` = '111.30.21.47',`location` = '中国 天津 天津 ',`browser` = 'chrome 65',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/65.0.3325.181 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = '100fun',`password` = 'f393c27a0bcc8611158284f1cc1df6c1',`realname` = '100fun',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '5',`ip` = '111.30.21.47',`last` = '2018-03-26 15:30:25',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2018-03-25 23:31:30',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 7',`browser` = 'chrome 39',`lang` = 'zh-cn' WHERE account  = '100fun'
  UPDATE eps_user SET  `browser` = 'chrome 65', `os` = 'Windows 10' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = '100fun' AND  t1.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522049426',`lang` = 'all'

20180326 15:30:26: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 15:31:38: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 15:36:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 15:37:38: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 15:42:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 15:43:38: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 15:48:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 15:50:38: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 15:56:41: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 19:57:05: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = '100fun'
  SELECT * FROM eps_user WHERE account  = '100fun'
  INSERT INTO eps_log SET `account` = '100fun',`date` = '2018-03-26 19:57:05',`ip` = '119.131.222.96',`location` = '中国 广东 广州 ',`browser` = 'chrome 55',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 6.1) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/55.0.2883.87 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = '100fun',`password` = 'f393c27a0bcc8611158284f1cc1df6c1',`realname` = '100fun',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '6',`ip` = '119.131.222.96',`last` = '2018-03-26 19:57:05',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2018-03-25 23:31:30',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 10',`browser` = 'chrome 65',`lang` = 'zh-cn' WHERE account  = '100fun'
  UPDATE eps_user SET  `browser` = 'chrome 55', `os` = 'Windows 7' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = '100fun' AND  t1.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522065425',`lang` = 'all'

20180326 19:57:06: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 20:02:21: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 20:12:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 20:18:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 20:24:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 20:30:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 20:36:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 20:40:25: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 20:46:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 20:52:25: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 20:58:46: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 21:04:46: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 21:10:46: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 21:19:14: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = '100fun'
  SELECT * FROM eps_user WHERE account  = '100fun'
  INSERT INTO eps_log SET `account` = '100fun',`date` = '2018-03-26 21:19:14',`ip` = '119.131.222.96',`location` = '中国 广东 广州 ',`browser` = 'ie 11',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 6.1; Trident\\/7.0; rv:11.0) like Gecko\"}'
  UPDATE eps_user SET `id` = '1',`account` = '100fun',`password` = 'f393c27a0bcc8611158284f1cc1df6c1',`realname` = '100fun',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '7',`ip` = '119.131.222.96',`last` = '2018-03-26 21:19:14',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2018-03-25 23:31:30',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 7',`browser` = 'chrome 55',`lang` = 'zh-cn' WHERE account  = '100fun'
  UPDATE eps_user SET  `browser` = 'ie 11', `os` = 'Windows 7' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = '100fun' AND  t1.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522070354',`lang` = 'all'

20180326 21:19:14: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 21:19:59: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 21:28:42: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 21:34:42: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 21:40:45: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = '100fun'
  SELECT * FROM eps_user WHERE account  = '100fun'
  INSERT INTO eps_log SET `account` = '100fun',`date` = '2018-03-26 21:40:45',`ip` = '119.131.222.96',`location` = '中国 广东 广州 ',`browser` = 'chrome 39',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 6.1; WOW64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/39.0.2171.95 Safari\\/537.36 MicroMessenger\\/6.5.2.501 NetType\\/WIFI WindowsWechat QBCore\\/3.43.691.400 QQBrowser\\/9.0.2524.400\"}'
  UPDATE eps_user SET `id` = '1',`account` = '100fun',`password` = 'f393c27a0bcc8611158284f1cc1df6c1',`realname` = '100fun',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '8',`ip` = '119.131.222.96',`last` = '2018-03-26 21:40:45',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2018-03-25 23:31:30',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 7',`browser` = 'ie 11',`lang` = 'zh-cn' WHERE account  = '100fun'
  UPDATE eps_user SET  `browser` = 'chrome 39', `os` = 'Windows 7' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = '100fun' AND  t1.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522071645',`lang` = 'all'

20180326 21:40:45: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 21:42:02: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = '100fun'
  SELECT * FROM eps_user WHERE account  = '100fun'
  INSERT INTO eps_log SET `account` = '100fun',`date` = '2018-03-26 21:42:02',`ip` = '119.131.222.96',`location` = '中国 广东 广州 ',`browser` = 'chrome 55',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 6.1) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/55.0.2883.87 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = '100fun',`password` = 'f393c27a0bcc8611158284f1cc1df6c1',`realname` = '100fun',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '9',`ip` = '119.131.222.96',`last` = '2018-03-26 21:42:02',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2018-03-25 23:31:30',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 7',`browser` = 'chrome 39',`lang` = 'zh-cn' WHERE account  = '100fun'
  UPDATE eps_user SET  `browser` = 'chrome 55', `os` = 'Windows 7' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = '100fun' AND  t1.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522071722',`lang` = 'all'

20180326 21:42:02: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 21:51:00: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:00:23: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = '100fun'
  SELECT * FROM eps_user WHERE account  = '100fun'
  INSERT INTO eps_log SET `account` = '100fun',`date` = '2018-03-26 22:00:23',`ip` = '221.198.27.133',`location` = '中国 天津 天津 ',`browser` = 'chrome 65',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/65.0.3325.181 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = '100fun',`password` = 'f393c27a0bcc8611158284f1cc1df6c1',`realname` = '100fun',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '10',`ip` = '221.198.27.133',`last` = '2018-03-26 22:00:23',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2018-03-25 23:31:30',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 7',`browser` = 'chrome 55',`lang` = 'zh-cn' WHERE account  = '100fun'
  UPDATE eps_user SET  `browser` = 'chrome 65', `os` = 'Windows 10' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = '100fun' AND  t1.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522072823',`lang` = 'all'

20180326 22:00:23: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 22:02:11: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:09:37: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:11:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:15:38: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:17:26: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:20:22: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 22:22:18: /admin.php?m=ui&f=themestore&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 22:24:03: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 22:24:30: /admin.php?m=block&f=setregion&page=index_index&region=top
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'index_index' AND  region  = 'top' AND  object  = '' AND  template  = 'default' AND  plan IN ('all','0') AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 

20180326 22:24:37: /admin.php?m=block&f=setregion&page=index_index&region=middle
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'index_index' AND  region  = 'middle' AND  object  = '' AND  template  = 'default' AND  plan IN ('all','0') AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 

20180326 22:24:43: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 22:24:57: /admin.php?m=block&f=setregion&page=index_index&region=bottom
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'index_index' AND  region  = 'bottom' AND  object  = '' AND  template  = 'default' AND  plan IN ('all','0') AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 

20180326 22:25:03: /admin.php?m=block&f=setregion&page=all&region=header
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'all' AND  region  = 'header' AND  object  = '' AND  template  = 'default' AND  plan IN ('all','0') AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 

20180326 22:25:11: /admin.php?m=block&f=setregion&page=all&region=top
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'all' AND  region  = 'top' AND  object  = '' AND  template  = 'default' AND  plan IN ('all','0') AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 

20180326 22:25:15: /admin.php?m=block&f=edit&blockID=13&type=header
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE `id` = '13'  AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE `id` = '13'  AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'blog'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT id, title FROM eps_article WHERE type  = 'page' AND  addedDate  <= '2018-03-26 22:25:15' AND  status  = 'normal'  AND  eps_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'blog'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_category WHERE type  = 'product'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT id, title FROM eps_article WHERE type  = 'page' AND  addedDate  <= '2018-03-26 22:25:15' AND  status  = 'normal'  AND  eps_article.lang in('zh-cn', 'all')  ORDER BY `id` desc 

20180326 22:26:12: /admin.php?m=block&f=edit&blockID=13
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE `id` = '13'  AND  eps_block.lang in('zh-cn', 'all') 
  UPDATE eps_block SET `type` = 'header',`title` = '网站头部',`template` = 'default',`content` = '{\"top\":{\"left\":\"\",\"right\":\"\"},\"topLeftContent\":\"\",\"topRightContent\":\"\",\"middle\":{\"left\":\"logo\",\"center\":\"slogan\",\"right\":\"\"},\"bottom\":\"nav\",\"customImage\":null,\"custom\":{\"default\":{\"css\":\"#blockID\\n{\\n  \\/*.panel-heading {}*\\/\\n  \\/*.panel-body    {}*\\/\\n}\",\"js\":\"\"}}}',`lang` = 'zh-cn' WHERE id  = '13' AND  eps_block.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522074372',`lang` = 'all'

20180326 22:26:14: /admin.php?m=block&f=setregion&page=all&region=top
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'all' AND  region  = 'top' AND  object  = '' AND  template  = 'default' AND  plan IN ('all','0') AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 

20180326 22:26:21: /admin.php?m=block&f=setregion&page=all&region=top&object=
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_layout SET `page` = 'all',`region` = 'top',`template` = 'default',`object` = '',`plan` = '0',`blocks` = '[{\"id\":\"13\",\"grid\":\"0\",\"probability\":\"\",\"titleless\":\"\",\"borderless\":\"\",\"isRandom\":\"0\"}]',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522074381',`lang` = 'all'

20180326 22:27:38: /admin.php?m=block&f=setregion&page=all&region=banner
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'all' AND  region  = 'banner' AND  object  = '' AND  template  = 'default' AND  plan IN ('all','0') AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 

20180326 22:27:53: /admin.php?m=block&f=setregion&page=all&region=bottom
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'all' AND  region  = 'bottom' AND  object  = '' AND  template  = 'default' AND  plan IN ('all','0') AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 

20180326 22:29:19: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:29:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:30:43: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:30:56: /admin.php?m=block&f=setregion&page=index_index&region=middle
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'index_index' AND  region  = 'middle' AND  object  = '' AND  template  = 'default' AND  plan IN ('all','0') AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 

20180326 22:31:10: /admin.php?m=block&f=setregion&page=company_index&region=bottomBanner
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'company_index' AND  region  = 'bottomBanner' AND  object  = '' AND  template  = 'default' AND  plan IN ('all','0') AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 

20180326 22:32:06: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 22:32:31: /admin.php?m=article&f=edit&articleID=11&type=page
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '11' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_category WHERE type  = 'page'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 
  SELECT * FROM eps_article WHERE id  = '11' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  UPDATE eps_article SET `titleColor` = '',`title` = '关于我们',`order` = '11',`link` = '',`alias` = 'about',`keywords` = '',`summary` = '',`content` = '<p>这好的点点滴滴多多多多</p>',`addedDate` = '2014-10-08 14:38:00',`status` = 'normal',`editor` = '100fun',`editedDate` = '2018-03-26 22:32:31',`onlyBody` = '0',`lang` = 'zh-cn' WHERE id  = '11' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '11' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 
  REPLACE eps_search_dict SET `key` = '20851',`value` = '关',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20110',`value` = '于',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '25105',`value` = '我',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '20204',`value` = '们',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '36825',`value` = '这',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22909',`value` = '好',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '30340',`value` = '的',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28857',`value` = '点',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '28404',`value` = '滴',`lang` = 'zh-cn'
  REPLACE eps_search_dict SET `key` = '22810',`value` = '多',`lang` = 'zh-cn'
  REPLACE eps_search_index SET `objectID` = '11',`objectType` = 'page',`title` = ' 20851 20110 25105 20204',`status` = 'normal',`addedDate` = '2014-10-08 14:38:00',`editedDate` = '2018-03-26 22:32:31',`params` = '{\"category\":\"\",\"alias\":\"about\"}',`content` = ' 36825 22909 30340 28857 28857 28404 28404 22810 22810 22810 22810',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522074751',`lang` = 'all'

20180326 22:33:55: /admin.php?m=block&f=setregion&page=page_view&region=topBanner&object=11
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'page_view' AND  region  = 'topBanner' AND  object  = '11' AND  template  = 'default' AND  plan IN ('all','0') AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE page  = 'page_view' AND  region  = 'topBanner' AND  object  = '' AND  template  = 'default' AND  plan IN ('all','0') AND  eps_layout.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT id, title FROM eps_block WHERE template  = 'default' AND  type  != 'region' AND  eps_block.lang in('zh-cn', 'all') 

20180326 22:34:00: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:34:02: /admin.php?m=article&f=setcss&articleID=11
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '11' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 

20180326 22:34:05: /admin.php?m=article&f=setjs&articleID=11
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '11' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'page' AND  t1.id  = '11' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'page' AND  objectID IN ('11') ORDER BY `order`,`editor` desc 

20180326 22:34:32: /admin.php?m=tree&f=children&type=article&root=0&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE parent  = '0' AND  type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `order` 

20180326 22:35:19: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:35:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:36:43: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:36:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:37:01: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 22:37:19: /admin.php?m=tag&f=link&id=2
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_tag WHERE id  = '2' AND  eps_tag.lang in('zh-cn', 'all') 

20180326 22:37:22: /admin.php?m=tag&f=source&tag=%E5%85%8D%E8%B4%B9cms
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE concat(',', keywords, ',')  LIKE '%,免费cms,%'  AND  eps_article.lang in('zh-cn', 'all')  ORDER BY `type`,`id` desc 
  SELECT * FROM eps_product WHERE concat(',', keywords, ',')  LIKE '%,免费cms,%' AND  eps_product.lang in('zh-cn', 'all') 
  SELECT * FROM eps_book WHERE concat(',', keywords, ',')  LIKE '%,免费cms,%' AND  eps_book.lang in('zh-cn', 'all') 
  SELECT * FROM eps_book WHERE  eps_book.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE concat(',', keywords, ',')  LIKE '%,免费cms,%' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_article WHERE id  = '8' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '8' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('8') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_article WHERE id  = '7' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '7' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('7') ORDER BY `order`,`editor` desc 
  SELECT * FROM eps_article WHERE id  = '6' AND  eps_article.lang in('zh-cn', 'all') 
  SELECT *, length(tag) as length FROM eps_tag WHERE link  != ''  AND  eps_tag.lang in('zh-cn', 'all')  ORDER BY `length` desc 
  SELECT t2.name,t2.id,t2.alias,t2.path FROM eps_relation AS t1  LEFT JOIN eps_category AS t2  ON t1.category = t2.id  WHERE t1.type  = 'article' AND  t1.id  = '6' AND  t1.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType  = 'article' AND  objectID IN ('6') ORDER BY `order`,`editor` desc 

20180326 22:37:49: /admin.php?m=ui&f=others
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'article',`section` = '',`key` = 'imagePosition',`value` = 'right',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'article',`section` = '',`key` = 'imageSize',`value` = 'small',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'article',`section` = '',`key` = 'imageWidth',`value` = '100',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'product',`section` = '',`key` = 'namePosition',`value` = 'left',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'file',`key` = 'thumbs',`value` = '{\"s\":{\"width\":\"80\",\"height\":\"80\"},\"m\":{\"width\":\"300\",\"height\":\"300\"},\"l\":{\"width\":\"800\",\"height\":\"600\"}}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'file',`key` = 'watermark',`value` = 'close',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'file',`key` = 'watermarkContent',`value` = '广州共享充电运营平台',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'file',`key` = 'watermarkColor',`value` = '#fff',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'file',`key` = 'watermarkOpacity',`value` = '50',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'file',`key` = 'watermarkSize',`value` = '14',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'file',`key` = 'watermarkPosition',`value` = 'middleMiddle',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'ui',`key` = 'QRCode',`value` = '0',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'execInfo',`value` = 'hide',`lang` = 'all'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'mobileBottomNav',`value` = 'show',`lang` = 'all'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'articleRec',`value` = '5',`lang` = 'all'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522075069',`lang` = 'all'

20180326 22:38:24: /admin.php?m=nav&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'nav',`key` = 'desktop_top',`value` = '[{\"title\":\"\\u9996\\u9875\",\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/admin.php?m=index&f=index\",\"key\":\"0\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-system-home\",\"children\":[]},{\"title\":\"\\u52a8\\u6001\",\"type\":\"article\",\"article\":\"2\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/index.php?m=article&f=browse&categoryID=2&l=\",\"key\":\"1\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-article-2\",\"children\":[]},{\"title\":\"\\u4ea7\\u54c1\\u5217\\u8868\",\"type\":\"product\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/index.php?m=product&f=index&l=\",\"key\":\"2\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-product-0\",\"children\":[]},{\"title\":\"\\u63a8\\u8350\\u7a7a\\u95f4\",\"type\":\"page\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/index.php?m=page&f=view&pageID=2&l=\",\"key\":\"3\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-page-2\",\"children\":[]},{\"title\":\"\\u8bba\\u575b\",\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/admin.php?m=forum&f=index\",\"key\":\"4\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-system-home\",\"children\":[]},{\"title\":\"\\u624b\\u518c\",\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/admin.php?m=book&f=index\",\"key\":\"5\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-system-home\",\"children\":[]},{\"title\":\"\\u7559\\u8a00\",\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/admin.php?m=message&f=index\",\"key\":\"6\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-system-home\",\"children\":[]},{\"title\":\"\\u5173\\u4e8e\\u6211\\u4eec\",\"type\":\"page\",\"article\":\"0\",\"product\":\"0\",\"page\":\"11\",\"blog\":\"0\",\"system\":\"company\",\"url\":\"\\/admin.php?m=company&f=index\",\"key\":\"7\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-page-11\",\"children\":[]}]',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522075104',`lang` = 'all'

20180326 22:38:35: /admin.php?m=nav&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'nav',`key` = 'desktop_top',`value` = '[{\"title\":\"\\u9996\\u9875\",\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/admin.php?m=index&f=index\",\"key\":\"0\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-system-home\",\"children\":[]},{\"title\":\"\\u52a8\\u6001\",\"type\":\"article\",\"article\":\"2\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/index.php?m=article&f=browse&categoryID=2&l=\",\"key\":\"1\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-article-2\",\"children\":[]},{\"title\":\"\\u4ea7\\u54c1\\u5217\\u8868\",\"type\":\"product\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/index.php?m=product&f=index&l=\",\"key\":\"2\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-product-0\",\"children\":[]},{\"title\":\"\\u63a8\\u8350\\u7a7a\\u95f4\",\"type\":\"page\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/index.php?m=page&f=view&pageID=2&l=\",\"key\":\"3\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-page-2\",\"children\":[]},{\"title\":\"\\u8bba\\u575b\",\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/admin.php?m=forum&f=index\",\"key\":\"4\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-system-home\",\"children\":[]},{\"title\":\"\\u624b\\u518c\",\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/admin.php?m=book&f=index\",\"key\":\"5\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-system-home\",\"children\":[]},{\"title\":\"\\u7559\\u8a00\",\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/admin.php?m=message&f=index\",\"key\":\"6\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-system-home\",\"children\":[]},{\"title\":\"\\u5173\\u4e8e\\u6211\\u4eec\",\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"11\",\"blog\":\"0\",\"system\":\"company\",\"url\":\"\\/admin.php?m=company&f=index\",\"key\":\"7\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-system-company\",\"children\":[]}]',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522075115',`lang` = 'all'

20180326 22:39:01: /admin.php?m=nav&f=admin
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'nav',`key` = 'desktop_top',`value` = '[{\"title\":\"\\u9996\\u9875\",\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/admin.php?m=index&f=index\",\"key\":\"0\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-system-home\",\"children\":[]},{\"title\":\"\\u63a8\\u8350\\u7a7a\\u95f4\",\"type\":\"page\",\"article\":\"0\",\"product\":\"0\",\"page\":\"2\",\"blog\":\"0\",\"system\":\"home\",\"url\":\"\\/index.php?m=page&f=view&pageID=2&l=\",\"key\":\"1\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-page-2\",\"children\":[]},{\"title\":\"\\u5173\\u4e8e\\u6211\\u4eec\",\"type\":\"system\",\"article\":\"0\",\"product\":\"0\",\"page\":\"11\",\"blog\":\"0\",\"system\":\"company\",\"url\":\"\\/admin.php?m=company&f=index\",\"key\":\"2\",\"target\":\"_self\",\"hover\":\"dropdown\",\"class\":\"nav-system-company\",\"children\":[]}]',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522075141',`lang` = 'all'

20180326 22:40:00: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:41:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:41:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:42:43: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:42:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:46:00: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:46:00: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:47:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:47:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:48:43: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:48:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:52:00: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:53:19: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:53:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:54:43: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:54:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:55:01: /admin.php?m=ui&f=edittemplate&module=common&file=header.lite
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:55:30: /admin.php?m=ui&f=edittemplate&module=common&file=header.lite
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:56:46: /admin.php?m=ui&f=editTemplate&moduel=common&file=header.lite
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:58:00: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:58:26: /admin.php?m=ui&f=browsetheme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 22:58:44: /admin.php?m=ui&f=exportTheme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 22:59:12: /admin.php?m=ui&f=exportTheme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:59:19: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 22:59:22: /admin.php?m=ui&f=exportTheme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType IN ('slide','source') AND  eps_file.lang in('zh-cn', 'all') 
  DELETE FROM eps_file WHERE id IN ('') AND  eps_file.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE type  = 'slide' AND  template  = 'default' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE type  = 'slide' AND  template  = 'default' AND  eps_block.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522076362',`lang` = 'all'

20180326 22:59:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:00:43: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:00:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:04:01: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:04:04: /admin.php?m=ui&f=uploadTheme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:04:18: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:04:30: /admin.php?m=ui&f=installtheme&package=001&downLink=&md5=&type=theme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:05:05: /admin.php?m=ui&f=installtheme&package=001&downLink=&md5=&type=theme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_package SET `name` = '1',`code` = '1',`version` = 'unknown',`author` = 'unknown',`desc` = '1',`site` = 'unknown',`license` = 'unknown',`chanzhiCompatible` = '',`type` = 'theme',`depends` = '',`templateCompatible` = '',`status` = 'available',`lang` = 'all'
  DELETE FROM eps_block WHERE lang  = 'lang'
  DELETE FROM eps_layout WHERE lang  = 'lang'
  DELETE FROM eps_file WHERE lang  = 'lang'
  DELETE FROM eps_config WHERE lang  = 'lang'
  SELECT `alias`,id FROM eps_category WHERE type  = 'tmpSlide' AND  eps_category.lang in('zh-cn', 'all') 
  UPDATE eps_slide SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  UPDATE eps_category SET  `type` = 'slide', `lang` = 'zh-cn' WHERE type  = 'tmpSlide' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE originID  > '0' AND  lang  = 'lang'
  SELECT * FROM eps_block WHERE template  = '' AND  eps_block.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522076705',`lang` = 'all'

20180326 23:05:10: /admin.php?m=ui&f=fixTheme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE lang  = 'lang'
  SELECT * FROM eps_block WHERE id IN ('') AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE template  = '' AND  plan  = 'plan'
  UPDATE eps_block SET  `originID` = '0'
  SELECT value FROM eps_config WHERE lang  = 'lang' AND  `key`  = 'custom'
  INSERT INTO eps_category SET `name` = '',`type` = 'layout_',`grade` = '0',`lang` = 'zh-cn'
  UPDATE eps_layout SET  `plan` = '16', `lang` = 'zh-cn' WHERE plan  = 'plan'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'layout',`key` = '_',`value` = '16',`lang` = 'zh-cn'
  DELETE FROM eps_config WHERE `key`  = 'custom' AND  lang  = 'lang'
  SELECT * FROM eps_config WHERE lang  = 'lang'
  DELETE FROM eps_config WHERE lang  = 'lang'
  UPDATE eps_block SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  UPDATE eps_layout SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  UPDATE eps_file SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":null,\"theme\":null}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522076710',`lang` = 'all'

20180326 23:05:19: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:05:22: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 23:05:30: /admin.php?m=ui&f=themestore&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:05:31: /admin.php?m=ui&f=browsetheme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:05:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:06:27: /admin.php?m=ui&f=browsetheme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:06:29: /admin.php?m=ui&f=installtheme&package=001&downLink=&md5=&type=theme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:06:43: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:06:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:08:57: /admin.php?m=ui&f=installtheme&package=001&downLink=&md5=&type=theme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:09:09: /admin.php?m=ui&f=installtheme&package=001&downLink=&md5=&type=theme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:09:09: /admin.php?m=ui&f=installtheme&package=001&downLink=&md5=&type=theme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:09:26: /admin.php?m=ui&f=installtheme&package=001&downLink=&md5=&type=theme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:09:46: /admin.php?m=ui&f=themestore&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:09:48: /admin.php?m=ui&f=themestore&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:09:48: /admin.php?m=ui&f=browsetheme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:10:00: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:10:03: /admin.php?m=ui&f=browsetheme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:10:20: /admin.php?m=ui&f=browsetheme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:10:21: /admin.php?m=ui&f=installtheme&package=001&downLink=&md5=&type=theme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:10:37: /admin.php?m=ui&f=browsetheme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:10:39: /admin.php?m=ui&f=uploadTheme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:10:49: /admin.php?m=ui&f=installtheme&package=001&downLink=&md5=&type=theme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_package SET `name` = '1',`code` = '1',`version` = 'unknown',`author` = 'unknown',`desc` = '1',`site` = 'unknown',`license` = 'unknown',`chanzhiCompatible` = '',`type` = 'theme',`depends` = '',`templateCompatible` = '',`status` = 'available',`lang` = 'all'
  DELETE FROM eps_block WHERE lang  = 'lang'
  DELETE FROM eps_layout WHERE lang  = 'lang'
  DELETE FROM eps_file WHERE lang  = 'lang'
  DELETE FROM eps_config WHERE lang  = 'lang'
  SELECT `alias`,id FROM eps_category WHERE type  = 'tmpSlide' AND  eps_category.lang in('zh-cn', 'all') 
  UPDATE eps_slide SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  UPDATE eps_category SET  `type` = 'slide', `lang` = 'zh-cn' WHERE type  = 'tmpSlide' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE originID  > '0' AND  lang  = 'lang'
  SELECT * FROM eps_block WHERE template  = '' AND  eps_block.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522077049',`lang` = 'all'

20180326 23:10:50: /admin.php?m=ui&f=fixTheme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE lang  = 'lang'
  SELECT * FROM eps_block WHERE id IN ('') AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE template  = '' AND  plan  = 'plan'
  UPDATE eps_block SET  `originID` = '0'
  SELECT value FROM eps_config WHERE lang  = 'lang' AND  `key`  = 'custom'
  INSERT INTO eps_category SET `name` = '',`type` = 'layout_',`grade` = '0',`lang` = 'zh-cn'
  UPDATE eps_layout SET  `plan` = '17', `lang` = 'zh-cn' WHERE plan  = 'plan'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'layout',`key` = '_',`value` = '17',`lang` = 'zh-cn'
  DELETE FROM eps_config WHERE `key`  = 'custom' AND  lang  = 'lang'
  SELECT * FROM eps_config WHERE lang  = 'lang'
  DELETE FROM eps_config WHERE lang  = 'lang'
  UPDATE eps_block SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  UPDATE eps_layout SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  UPDATE eps_file SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":null,\"theme\":null}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522077050',`lang` = 'all'

20180326 23:11:19: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:11:37: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 23:11:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:11:55: /admin.php?m=ui&f=browsetheme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:11:57: /admin.php?m=ui&f=installtheme&package=001&downLink=&md5=&type=theme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_package SET `name` = '1',`code` = '1',`version` = 'unknown',`author` = 'unknown',`desc` = '1',`site` = 'unknown',`license` = 'unknown',`chanzhiCompatible` = '',`type` = 'theme',`depends` = '',`templateCompatible` = '',`status` = 'available',`lang` = 'all'
  DELETE FROM eps_block WHERE lang  = 'lang'
  DELETE FROM eps_layout WHERE lang  = 'lang'
  DELETE FROM eps_file WHERE lang  = 'lang'
  DELETE FROM eps_config WHERE lang  = 'lang'
  SELECT `alias`,id FROM eps_category WHERE type  = 'tmpSlide' AND  eps_category.lang in('zh-cn', 'all') 
  UPDATE eps_slide SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  UPDATE eps_category SET  `type` = 'slide', `lang` = 'zh-cn' WHERE type  = 'tmpSlide' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE originID  > '0' AND  lang  = 'lang'
  SELECT * FROM eps_block WHERE template  = '' AND  eps_block.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522077117',`lang` = 'all'

20180326 23:11:58: /admin.php?m=ui&f=fixTheme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE lang  = 'lang'
  SELECT * FROM eps_block WHERE id IN ('') AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE template  = '' AND  plan  = 'plan'
  UPDATE eps_block SET  `originID` = '0'
  SELECT value FROM eps_config WHERE lang  = 'lang' AND  `key`  = 'custom'
  INSERT INTO eps_category SET `name` = '',`type` = 'layout_',`grade` = '0',`lang` = 'zh-cn'
  UPDATE eps_layout SET  `plan` = '18', `lang` = 'zh-cn' WHERE plan  = 'plan'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'layout',`key` = '_',`value` = '18',`lang` = 'zh-cn'
  DELETE FROM eps_config WHERE `key`  = 'custom' AND  lang  = 'lang'
  SELECT * FROM eps_config WHERE lang  = 'lang'
  DELETE FROM eps_config WHERE lang  = 'lang'
  UPDATE eps_block SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  UPDATE eps_layout SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  UPDATE eps_file SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":null,\"theme\":null}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522077118',`lang` = 'all'

20180326 23:12:12: /admin.php?m=ui&f=browsetheme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:12:42: /admin.php?m=ui&f=themestore&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:12:43: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:12:47: /admin.php?m=ui&f=installtheme&package=001&downLink=&md5=&type=theme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_package SET `name` = '1',`code` = '1',`version` = 'unknown',`author` = 'unknown',`desc` = '1',`site` = 'unknown',`license` = 'unknown',`chanzhiCompatible` = '',`type` = 'theme',`depends` = '',`templateCompatible` = '',`status` = 'available',`lang` = 'all'
  DELETE FROM eps_block WHERE lang  = 'lang'
  DELETE FROM eps_layout WHERE lang  = 'lang'
  DELETE FROM eps_file WHERE lang  = 'lang'
  DELETE FROM eps_config WHERE lang  = 'lang'
  SELECT `alias`,id FROM eps_category WHERE type  = 'tmpSlide' AND  eps_category.lang in('zh-cn', 'all') 
  UPDATE eps_slide SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  UPDATE eps_category SET  `type` = 'slide', `lang` = 'zh-cn' WHERE type  = 'tmpSlide' AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE originID  > '0' AND  lang  = 'lang'
  SELECT * FROM eps_block WHERE template  = '' AND  eps_block.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522077167',`lang` = 'all'

20180326 23:12:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:12:48: /admin.php?m=ui&f=fixTheme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE lang  = 'lang'
  SELECT * FROM eps_block WHERE id IN ('') AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_layout WHERE template  = '' AND  plan  = 'plan'
  UPDATE eps_block SET  `originID` = '0'
  SELECT value FROM eps_config WHERE lang  = 'lang' AND  `key`  = 'custom'
  INSERT INTO eps_category SET `name` = '',`type` = 'layout_',`grade` = '0',`lang` = 'zh-cn'
  UPDATE eps_layout SET  `plan` = '19', `lang` = 'zh-cn' WHERE plan  = 'plan'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'layout',`key` = '_',`value` = '19',`lang` = 'zh-cn'
  DELETE FROM eps_config WHERE `key`  = 'custom' AND  lang  = 'lang'
  SELECT * FROM eps_config WHERE lang  = 'lang'
  DELETE FROM eps_config WHERE lang  = 'lang'
  UPDATE eps_block SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  UPDATE eps_layout SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  UPDATE eps_file SET  `lang` = 'zh-cn' WHERE lang  = 'lang'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":null,\"theme\":null}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522077168',`lang` = 'all'

20180326 23:16:01: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:17:20: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:17:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:17:41: /admin.php?m=ui&f=browsetheme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:17:52: /admin.php?m=ui&f=setTemplate&template=default&theme=tartan&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"tartan\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'tartan',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522077472',`lang` = 'all'

20180326 23:17:56: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 23:18:01: /admin.php?m=ui&f=setTemplate&template=default&theme=default&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"default\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'default',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522077481',`lang` = 'all'

20180326 23:18:09: /admin.php?m=ui&f=setTemplate&template=default&theme=blank&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"blank\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'blank',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522077489',`lang` = 'all'

20180326 23:18:12: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 23:18:13: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 23:18:15: /admin.php?m=ui&f=setTemplate&template=default&theme=default&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"default\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'default',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522077495',`lang` = 'all'

20180326 23:18:18: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 23:18:23: /admin.php?m=ui&f=setTemplate&template=default&theme=tartan&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"tartan\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'tartan',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522077503',`lang` = 'all'

20180326 23:18:27: /admin.php?m=ui&f=setTemplate&template=default&theme=clean&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"clean\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'clean',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522077507',`lang` = 'all'

20180326 23:18:43: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:18:44: /admin.php?m=ui&f=setTemplate&template=default&theme=wide&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"wide\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'wide',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522077524',`lang` = 'all'

20180326 23:18:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:18:48: /admin.php?m=ui&f=setTemplate&template=default&theme=blank&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"blank\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'blank',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522077528',`lang` = 'all'

20180326 23:18:52: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:19:27: /admin.php?m=ui&f=themestore&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:19:27: /admin.php?m=ui&f=browsetheme&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:22:00: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:22:19: /admin.php?m=ui&f=setTemplate&template=default&theme=default&custom=1
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'desktop',`value` = '{\"name\":\"default\",\"theme\":\"default\"}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'parser',`value` = 'raintpl',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customTheme',`value` = 'default',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522077739',`lang` = 'all'

20180326 23:23:19: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:23:39: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:24:43: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:24:47: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:28:01: /admin.php?m=misc&f=ping&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 

20180326 23:29:04: /admin.php?m=user&f=login&t=html
  SELECT * FROM eps_config WHERE owner IN ('system','guest')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT u.*, o.provider as provider, openID as openID FROM eps_user AS u  LEFT JOIN eps_oauth AS o  ON u.account = o.account  WHERE u.account  = '100fun'
  SELECT * FROM eps_user WHERE account  = '100fun'
  INSERT INTO eps_log SET `account` = '100fun',`date` = '2018-03-26 23:29:04',`ip` = '221.198.27.133',`location` = '中国 天津 天津 ',`browser` = 'chrome 65',`type` = 'adminlogin',`desc` = 'success',`lang` = 'all',`ext` = '{\"userAgent\":\"Mozilla\\/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit\\/537.36 (KHTML, like Gecko) Chrome\\/65.0.3325.181 Safari\\/537.36\"}'
  UPDATE eps_user SET `id` = '1',`account` = '100fun',`password` = 'f393c27a0bcc8611158284f1cc1df6c1',`realname` = '100fun',`realnames` = '',`nickname` = '',`admin` = 'super',`avatar` = '',`birthday` = '0000-00-00',`gender` = 'u',`email` = '',`skype` = '',`qq` = '',`yahoo` = '',`gtalk` = '',`wangwang` = '',`site` = '',`mobile` = '',`phone` = '',`company` = '',`address` = '',`zipcode` = '',`visits` = '11',`ip` = '221.198.27.133',`last` = '2018-03-26 23:29:04',`score` = '0',`rank` = '0',`maxLogin` = '10',`fails` = '0',`referer` = '',`join` = '2018-03-25 23:31:30',`reset` = '',`locked` = '0000-00-00 00:00:00',`public` = '0',`emailCertified` = '0',`security` = '',`notification` = '',`os` = 'Windows 10',`browser` = 'chrome 65',`lang` = 'zh-cn' WHERE account  = '100fun'
  UPDATE eps_user SET  `browser` = 'chrome 65', `os` = 'Windows 10' WHERE id  = '1' AND  eps_user.lang in('zh-cn', 'all') 
  SELECT module, method FROM eps_usergroup AS t1  LEFT JOIN eps_grouppriv AS t2  ON t1.group = t2.group  WHERE t1.account  = '100fun' AND  t1.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522078144',`lang` = 'all'

20180326 23:29:05: /admin.php?m=widget&f=printWidget&widget=5
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_widget WHERE id  = '5' AND  eps_widget.lang in('zh-cn', 'all') 
  SELECT * FROM eps_category WHERE type  = 'article'  AND  eps_category.lang in('zh-cn', 'all')  ORDER BY `grade` desc,`order` 

20180326 23:29:32: /admin.php?m=ui&f=customtheme&theme=default&template=default
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'custom',`value` = '{\"default\":{\"flat\":{\"background-color\":\"transparent\",\"background-image\":\"\",\"background-image-repeat\":\"repeat\",\"background-image-position-x\":\"\",\"background-image-position-y\":\"0\",\"background-image-position\":\" 0\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"link-color\":\"\",\"link-decoration\":\"none\",\"link-visited-color\":\"\",\"link-hover-color\":\"\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\",\"footer-border-style\":\"none\",\"footer-border-color\":\"\",\"footer-backcolor\":\"\"},\"tartan\":{\"background-color\":\"#D0FFFD\",\"background-image\":\"\",\"background-image-repeat\":\"repeat\",\"background-image-position-x\":\"\",\"background-image-position-y\":\"0\",\"background-image-position\":\" 0\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"link-color\":\"\",\"link-decoration\":\"none\",\"link-visited-color\":\"\",\"link-hover-color\":\"\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\",\"footer-border-style\":\"none\",\"footer-border-color\":\"\",\"footer-backcolor\":\"\"},\"default\":{\"background-color\":\"transparent\",\"background-image\":\"none\",\"background-image-repeat\":\"repeat\",\"background-image-position-x\":\"0\",\"background-image-position-y\":\"0\",\"background-image-position\":\"0 0\",\"text-color\":\"#333\",\"font-size\":\"14px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"link-color\":\"#0D3D88\",\"link-decoration\":\"none\",\"link-visited-color\":\"#0D3D88\",\"link-hover-color\":\"#347AEB\",\"link-hover-decoration\":\"none\",\"sideFloat\":\"right\",\"sideGrid\":\"3\",\"navbar-table-layout\":\"true\",\"navbar-backcolor\":\"#f1f1f1\",\"navbar-background-image\":\"none\",\"navbar-background-image-repeat\":\"repeat\",\"navbar-background-image-position-x\":\"0\",\"navbar-background-image-position-y\":\"0\",\"navbar-background-image-position\":\"0 0\",\"navbar-border-style\":\"solid\",\"navbar-border-color\":\"#D5D5D5\",\"navbar-border-width\":\"1px\",\"navbar-border-radius\":\"4px\",\"navbar-panel-backcolor\":\"#FFF\",\"navbar-panel-border-style\":\"solid\",\"navbar-panel-border-color\":\"#DDD\",\"navbar-panel-border-width\":\"1px\",\"navbar-paenl-border-radius\":\"3px\",\"navbar-menu-color\":\"#555\",\"navbar-menu-font-size\":\"14px\",\"navbar-menu-font-family\":\"inherit\",\"navbar-menu-font-weight\":\"bold\",\"navbar-menu-color-hover\":\"#000\",\"navbar-menu-backcolor-hover\":\"#FEFEFE\",\"navbar-menu-color-active\":\"#151515\",\"navbar-menu-backcolor-active\":\"#FFF\",\"navbar-submenu-color\":\"#333\",\"navbar-submenu-color-hover\":\"#151515\",\"navbar-submenu-backcolor-hover\":\"#E5E5E5\",\"navbar-submenu-color-active\":\"#151515\",\"navbar-submenu-backcolor-active\":\"#E5E5E5\",\"block-border-style\":\"solid\",\"block-border-color\":\"#DDD\",\"block-border-width\":\"1px\",\"block-border-radius\":\"3px\",\"block-heading-backcolor\":\"#F5F5F5\",\"block-heading-color\":\"#333\",\"block-heading-font-size\":\"inherit\",\"block-heading-font-weight\":\"inherit\",\"block-body-backcolor\":\"transparent\",\"block-body-color\":\"#333\",\"block-body-link-color\":\"#0D3D88\",\"button-color-default\":\"#F2F2F2\",\"button-color-primary\":\"#3280FC\",\"button-color-info\":\"#39B3D7\",\"button-color-success\":\"#229F24\",\"button-color-warning\":\"#E48600\",\"button-color-danger\":\"#D2322D\",\"button-border-style\":\"solid\",\"button-border-width\":\"1px\",\"button-border-radius\":\"3px\",\"button-font-weight\":\"normal\",\"header-backcolor\":\"#FFF\",\"header-height\":\"30px\",\"header-top-padding\":\"0\",\"header-bottom-padding\":\"0\",\"header-left-padding\":\"0\",\"header-right-padding\":\"0\",\"header-border-color\":\"#ddd\",\"header-border-radius\":\"0\",\"header-text-font-size\":\"16px\",\"header-text-color\":\"#333\",\"header-text-link-color\":\"#0D3D88\",\"header-text-link-font-size\":\"13px\",\"footer-border-style\":\"solid\",\"footer-border-color\":\"#ddd\",\"footer-backcolor\":\"#f7f7f7\"},\"wide\":{\"color-primary\":\"\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\"},\"colorful\":{\"color-primary\":\"\",\"border-radius\":\"3\",\"background-color\":\"\",\"background-image\":\"\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"\\u5b8b\\u4f53\",\"font-weight\":\"normal\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\",\"footer-border-style\":\"solid\",\"footer-border-color\":\"\",\"footer-backcolor\":\"#2286D2\"}}}',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'template',`key` = 'customVersion',`value` = '1522078172',`lang` = 'zh-cn'
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522078172',`lang` = 'all'

20180326 23:29:42: /admin.php?m=ui&f=exportTheme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:29:48: /admin.php?m=ui&f=exportTheme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_package WHERE type  = 'theme' AND  eps_package.lang in('zh-cn', 'all') 

20180326 23:30:02: /admin.php?m=ui&f=exportTheme
  SELECT * FROM eps_config WHERE owner IN ('system','100fun')  AND  eps_config.lang in('zh-cn', 'all')  ORDER BY `id` 
  SELECT *, id as category FROM eps_category WHERE type IN ('article','video','product','blog','forum','usercase') AND  eps_category.lang in('zh-cn', 'all') 
  SELECT * FROM eps_file WHERE objectType IN ('slide','source') AND  eps_file.lang in('zh-cn', 'all') 
  DELETE FROM eps_file WHERE id IN ('') AND  eps_file.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE type  = 'slide' AND  template  = 'default' AND  eps_block.lang in('zh-cn', 'all') 
  SELECT * FROM eps_block WHERE type  = 'slide' AND  template  = 'default' AND  eps_block.lang in('zh-cn', 'all') 
  REPLACE eps_config SET `owner` = 'system',`module` = 'common',`section` = 'site',`key` = 'updatedTime',`value` = '1522078202',`lang` = 'all'

