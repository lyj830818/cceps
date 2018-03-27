SET NAMES utf8;_ZDB_LINE_ENDER_
INSERT  INTO `eps_category`(`id`,`name`,`abbr`,`alias`,`desc`,`keywords`,`parent`,`path`,`grade`,`order`,`type`,`readonly`,`moderators`,`threads`,`posts`,`postedBy`,`postedDate`,`postID`,`replyID`,`link`,`unsaleable`,`discussion`,`lang`) VALUES('1','蝉知下载','','download','','','0',',1,','1','10','article','0','','0','0','','2014-08-25 13:56:40','0','0','','0','0','zh-cn'),('2','蝉知动态','','dynamic','','','0',',2,','1','20','article','0','','0','0','','2014-08-25 13:56:40','0','0','','0','0','zh-cn'),('3','商业支持','','','','','0',',3,','1','30','article','0','','0','0','','2014-08-25 13:56:40','0','0','','0','0','zh-cn'),('4','蝉知','','','','','0',',4,','1','10','forum','0','','0','0','','2014-08-25 14:19:26','0','0','','0','0','zh-cn'),('5','建议反馈','','feedback','有关蝉知企业门户系统的建议和反馈。','蝉知企业门户系统,蝉知企业建站系统,开源cms','4',',4,5,','2','10','forum','0','','1','1','demo','2014-09-02 18:27:35','1','0','','0','0','zh-cn'),('6','技术支持','','support','蝉知企业门户系统技术支持版块。','蝉知企业门户系统,蝉知建站系统,cms,开源cms,免费cms','4',',4,6,','2','20','forum','0','','0','0','','2014-08-25 14:20:01','0','0','','0','0','zh-cn'),('7','蝉知','','','','','0',',7,','1','10','product','0','','0','0','','2014-08-25 14:29:49','0','0','','0','0','zh-cn'),('8','12123','','','','','0',',8,','1','10','wechat_1','0','','0','0','','2014-10-08 17:09:23','0','0','','0','0','zh-cn'),('11','知识改进','','','','','0',',11,','1','40','article','0','','0','0','','2014-10-08 17:42:37','0','0','','0','0','zh-cn'),('10','12312','','','','','0',',10,','1','30','wechat_1','0','','0','0','','2014-10-08 17:09:23','0','0','','0','0','zh-cn'),('12','一二三','','','','','11',',11,12,','2','10','article','0','','0','0','','2014-10-08 17:43:03','0','0','','0','0','zh-cn'),('13','四五六','','','','','11',',11,13,','2','20','article','0','','0','0','','2014-10-08 17:43:03','0','0','','0','0','zh-cn'),('14','七八九','','','','','11',',11,14,','2','30','article','0','','0','0','','2014-10-08 17:43:03','0','0','','0','0','zh-cn'),('15','默认分组','','','','','0',',15,','1','10','slide','0','','0','0','','2015-07-16 15:23:56','0','0','','0','0','zh-cn');_ZDB_LINE_ENDER_
REPLACE INTO `eps_product`(`id`,`name`,`titleColor`,`alias`,`unsaleable`,`mall`,`brand`,`model`,`color`,`origin`,`unit`,`price`,`negotiate`,`promotion`,`amount`,`keywords`,`desc`,`content`,`author`,`editor`,`addedDate`,`editedDate`,`status`,`views`,`sticky`,`order`,`css`,`js`,`lang`) VALUES('1','演示商品二','','chanzhi','0','','蝉知','','','','','8888.00','0','0.02','0','蝉知企业门户系统','蝉知企业门户系统是一款专向企业营销使用的企业门户系统，企业使用蝉知系统可以非常方便地搭建一个专业的企业营销网站，进行宣传，开展业务，服务客户。','<h4>关于蝉知企业门户系统(chanzhiEPS)</h4>
<p>蝉知企业门户系统是由业内资深开发团队开发的一款专向企业营销使用的企业门户系
统，企业使用蝉知系统可以非常方便地搭建一个专业的企业营销网站，进行宣传，开展业务，服务客户。蝉知系统内置了文章、产品、论坛、评论、会员、博客、帮
助等功能，同时还可以和微信进行集成绑定。功能丰富实用，后台操作简洁方便。蝉知系统还内置了搜索引擎优化必备的功能，比如关键词，摘要，站点地图，友好
路径等，使用蝉知系统可以非常方便的搭建对搜索引擎友好的网站。</p>
<p><strong>为什么</strong><strong>叫做</strong><strong>蝉知？</strong><strong><br />
</strong> </p>
<p>蝉是中国传统的吉祥物之一，象征着闻达和财富，非常符合企业作为盈利组织的特点。所以我们为这套系统起名为蝉知，希望通过这款开源免费的系统可以帮助众多的中小企业快速方面的建立自己的企业网站，进行宣传营销。</p>
<p><strong>为什么</strong><strong>来</strong><strong>做</strong><strong>蝉知？</strong> </p>
<p>蝉
知团队还有其他的开源产品，我们在维护自己的产品的时候，也存在这样的需求：我们需要一个网站来对产品进行宣传，能够给用户提供技术支持，方便用户下载等
等。我们也曾经想用市面上的其他cms系统来搭建，但后来发现要做大量的改动定制，还不如自己写一个。所以我们在四年多的时间里面一点点的完善自己的产品
网站。与此同时我们在和客户接触的时候，发现企业的网站大都不敢恭维：技术陈旧、载入速度缓慢、不利于seo、后台晦涩难懂。于是我们就产生了做一个企业
门户系统来解决这个问题的想法，于是就是了蝉知这个产品。</p>
<h4><strong>为什么以开源的方式来发布？</strong> </h4>
<p>蝉知源代码完全开放，不限制商用。我们之所以坚持以开源的方式来发布蝉知系统，是因为我们坚信开放才是正道。只有开放的系统才更具有生命力，用户使用起来才更加放心。</p>
<p><strong>为什么选择蝉知门户系统来搭建企业网站？</strong> </p>
<p>现
在做一个企业营销网站可以有很多选择，比如使用国外开源的wordpress, dupal, jommla等。国内的有dedecms, 
phpcms等cms系统。还有很多在线建站的公司。如果费用充足的话，可以选择建站公司来做（建站公司也是使用上述的这些系统来帮你搭建，比较坑）。那
么蝉知系统和这些系统相比有什么特点呢？<strong><br />
</strong> </p>
<p><strong>1. 首先，我们是专门做企业营销网站。</strong> </p>
<ul><li>现在做网站，都是在cms系统上面改。而蝉知系统是专门面向企业营销网站的，所以功能更具有针对性。我们内置了文章、产品、会员、论坛、评论、帮助、博客等诸多功能，完全可以应对企业营销网站的各种需求。</li>
<li>蝉知系统特别重视搜索引擎优化，内置了关键词管理、摘要、站点地图等功能。同时只要环境支持url重写，就可以生成搜索引擎非常喜欢的路径结构，比如/news/123.html这样的路径。</li>
<li>蝉知系统后续会内置基本的统计数据，哪怕网站只有一个用户访问，也要让您清清楚楚的知道网站有人在访问。这样网站不再是死的的网站。</li>
</ul>
<p><strong>2. 其次，</strong><strong>蝉知</strong><strong>系统</strong><strong>是</strong><strong>真正</strong><strong>的</strong><strong>开源</strong><strong>免费</strong> </p>
<ul><li>蝉知系统是目前唯一开源免费的企业门户系统。</li>
<li>蝉知系统以LGPL协议发布，代码完全开放，是真正的开源。（有很多号称开源的cms系统，其实都是假的。)</li>
<li>蝉知系统不限制商用，也不会为了推我们后续的一些收费功能或者服务故意的在产品中做很多限制。<br />
</li>
</ul>
<p><strong>3. 蝉知系统技术先进，注重用户体验</strong> </p>
<ul><li>蝉知系统使用自主开发的框架搭建，架构更加合理。</li>
<li>内置完善的扩展机制，方便企业后续的二次开发。蝉知系统的首要定位是帮助企业解决营销问题，当营销问题解决之后，企业会考虑在蝉知系统上搭建自己的业务系统，比如报名、订单之类的业务。这时候在蝉知系统基础上进行二次开发是非常容易的事情。</li>
<li>蝉知团队不断的学习业内先进的设计理念，给大家提供简洁方便的产品。</li>
</ul>
<p><strong>4. </strong><strong>使用</strong><strong>支持</strong><strong>有</strong><strong>保障</strong> </p>
<ul><li>别人做开源，也许只是兴趣。而我们做开源，是专职在做，以正规的公司形式来运作。</li>
<li>我们有将近十年的开源软件开发和维护经验，对开源软件的后续开发、支持有丰富的经验。</li>
<li>我们团队和系统足够开放，后续我们会着手打造一个面向企业营销市场的小生态系统，吸引第三方的设计师、网站建设公司参与。</li>
</ul>
<p>so，不要再犹豫，新时代做企业营销，首选蝉知门户系统，靠谱！</p>','admin','demo','2014-08-25 14:31:29','2015-03-03 14:34:24','normal','109','0','1','','','zh-cn'),('2','演示商品一','','','0','','蝉知','','','','','8888.00','0','0.01','0','','<p>蝉知在线(以下简称云蝉知)是由青岛息壤网络信息有限公司（以下简称青岛息壤）提供的在线建站服务。</p>','<p>云蝉知在线(以下简称云蝉知)是由青岛息壤网络信息有限公司(以下简称青岛息壤)提供的在线建站服务。若您申请云蝉知帐户并使用相应服务，您必须先同意此协议：</p>
<h4>一、服务条款的确认和接纳<br />
</h4>
(1) 您必须是能够承担相应法律责任的公司或个人。若您不具备此资格，不能使用云蝉知提供的服务。<br />
<p>(2) 当您使用服务时，您需阅读并且同意<a href=\"http://www.chanzhi.net/book/chanzhieps/58_license.html\">《蝉知企业门户系统授权协议》</a>；</p>
<p><span>(3) 当您使用服务时，您需知晓并且同意此《云蝉知在线使用协议》； </span></p>
(4) 此协议在必要时将进行修改，更新后会以明显的方式通知到用户。 <br />
<p>(5) 若您继续使用系统提供的服务，则表明您接受新的协议。</p>
<h4>二、服务内容<br />
</h4>
<p>(1) 此协议所述服务仅在云蝉知网站内有效。云蝉知网站是指http://www.chanzhi.net及其所属网页；</p>
(2) 云蝉知有权根据实际情况自主调整服务内容。<br />
<h4>三、帐户<br />
</h4>
(1) 使用云蝉知服务之前，您必须在云蝉知网站上面注册一个合法的帐号，并如实填写所有资料。如因资料不全而无法及时通知到您而造成的一切损失，青岛息壤不承担任何责任。<br />
(2) 您应当妥善保管自己的账户和密码，避免丢失，更不能让他人使用。若因此造成损失，青岛息壤不负任何法律责任；<br />
(3) 您在使用云蝉知服务时必须遵守相关法律法规。青岛息壤对帐户使用服务所产生的与其他公司或者个人的纠纷不负法律责任；<br />
(4) 云蝉知网站有权对恶意帐户中止服务，且无需特别通知；<h4>四、费用<br />
</h4>
<p>(1) 在您正式使用云蝉知服务之前，您需要自己申请域名。<br />
(2) 云蝉知现在为大家提供免费服务，免费用户可以创建三个站点。每个站点可使用100M空间(包括附件、图片和数据库），每个月10GB流量。如果超出存储空间或者流量，云蝉知网站有权对该站点的访问进行限制。<br />
(3) 云蝉知后续会提供功能更强的收费版本，收费标准届时会在云蝉知网站公布。云蝉知保留对收费模式和具体金额调整的权利，涉及收费服务，将至提前30天的时间通过电子邮件的形式通知帐户。</p>
<h4>五、服务终止</h4>
<p>有下列情形之一的，云蝉知网站有权随时暂停、终止、取消或拒绝帐户服务。<br />
<br />
(1) 帐户违反了此协议或已在约定范围内的任一条款；<br />
(2) 根据此协议相关说明而终止服务；<br />
(3) 利用云蝉知网站的发布功能滥发重复信息；<br />
(4) 未经请求或授权向云蝉知网站帐户发送大量与业务不相关的信息；<br />
(5) 冒用其他企业的名义发布商业信息，进行商业活动；<br />
(6) 攻击云蝉知网站的数据、网络或服务；</p>
<p>(7) 盗用他人在云蝉知网站上的帐户名和密码。<br />
<br />
以下信息是严格禁止并绝对终止帐户服务，同时不退回购买费用的：<br />
<br />
(1) 有关宗教、种族或性别的贬损言辞；<br />
(2) 骚扰、滥用或威胁其他帐户；<br />
(3) 侵犯任何第三方著作权、专利、商标、商业秘密或其它专有权利、发表权或隐私权的信息；<br />
(4) 其它任何违反互联网相关法律法规的信息。</p>
<h4>六、云蝉知用户的权利和义务</h4>
<p>(1) 云蝉知服务生效后，帐户就可享受相应服务内容；<br />
(2) 云蝉知用户在使用云蝉知网站提供的相应服务时，必须保证遵守当地及中国有关法律法规的规定；<br />
不得利用该网站进行任何非法活动；遵守所有与使用该网站有关的协议、规定、程序和惯例；<br />
(3) 云蝉知用户对输入数据的准确性、可靠性、合法性、适用性等负责；</p>
<h4>七、云蝉知的权利和义务<br />
</h4>
<p>(1) 云蝉知尽最大努力来保证服务的正常访问以及数据的备份。<br />
(2) 云蝉知为收费用户提供相应的咨询、技术支持等服务。</p>
<p>(3)
对于因不可抗力造成的服务中断、链接受阻或其他缺陷(包括但不限于自然灾害、社会事件以及因网站所具有的特殊性质而产生的包括系统崩溃、数据丢失、黑客攻
击、电信部门技术调整导致的影响、政府管制而造成的暂时性关闭在内的任何影响网络正常运营的因素)，云蝉知网站不承担任何责任，但将尽力减少因此而给会员
造成的损失和影响；<br />
(4) 云蝉知网站对用户因使用云蝉知服务而造成的损失不负法律责任。不论什么情况下对用户因使用云蝉知服务而造成的直接、间接、偶尔的、特殊的惩罚性的损害或其他一切损害概不负法律责任；<br />
(5) 如因云蝉知原因，造成服务的不正常中断，青岛息壤不承担任何责任，青岛息壤也不承担由此致使会员蒙受的其它方面的连带损失；</p>
<h4>八、隐私与保密<br />
</h4>
<p>(1) 您注册时所填写的个人信息仅限于青岛息壤与您之间联系使用，青岛息壤不得将其用于商业目的。<br />
(2) 您通过云蝉知产生的任何数据都属于您所有。除非您主动要求我们协助您排查问题，否则青岛息壤的所有员工无权查看、编辑、复制、删除您的任数据。</p>
<h4>九、最终解释权<br />
</h4>
<p>青岛息壤网络信息有限公司对云蝉知保有所有活动、限制等的最终解释权。</p>','admin','demo','2014-08-25 15:06:50','2015-03-03 14:34:06','normal','45','0','2','','','zh-cn');_ZDB_LINE_ENDER_
REPLACE INTO `eps_article`(`id`,`title`,`titleColor`,`alias`,`keywords`,`summary`,`content`,`source`,`copySite`,`copyURL`,`author`,`addedBy`,`editor`,`addedDate`,`editedDate`,`status`,`type`,`submission`,`views`,`sticky`,`stickTime`,`stickBold`,`order`,`link`,`css`,`js`,`onlyBody`,`lang`) VALUES('1','安全升级，蝉知2.5.2发布','','chanzhi2.5.2','安全cms,企业建站系统,企业门户,开源csm','大家好，蝉知2.5.2正式版发布了，这次更新增强了系统安全，改进了部分页面的体验，另外修复了很多之前版本的bug，建议老用户及时下载升级。','<h4>一、修改记录</h4>
<ol><li>新增防xss跨站攻击处理</li>
<li>优化后台区块管理操作体验</li>
<li>修复通过字段可进行sql注入的漏洞</li>
<li>修复产品数据结构bug</li>
<li>修复繁体版安装失败bug</li>
<li>修复论坛帖子隐藏显示bug</li>
</ol><h4>二、下载地址</h4>
源码包： <a href=\"http://dl.xirangit.com/eps/2.5/chanzhiEPS.2.5.2.zip\">http://dl.xirangit.com/eps/2.5/chanzhiEPS.2.5.2.zip</a> <h4>三、安装和升级文档</h4>
安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a><br />
升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a><br /><h4>四、演示</h4>
前台演示：<a href=\"http://demo.chanzhi.org\">http://demo.chanzhi.org</a><br /><p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>','original','','','admin','','admin','2014-08-21 13:55:00','2014-08-25 15:17:30','normal','article','0','29','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('2','推荐空间','','host','蝉知空间','','<p>我们不推荐大家使用iis + php的空间，存在诸多问题。下面列出的空间都是经过我们测试的，可以选购。</p>
<h4>首先推荐：<a href=\"http://www.chanzhi.net\">云蝉知</a></h4>
<p>云蝉知是蝉知团队运营的免费建站服务，不需要备案，不需要维护，简单方便。</p>
<h4>推荐2：<a href=\"http://www.londit.com/aff/d3djY3NzQGdtYWlsLmNvbQ==\">浪点云主机</a>：</h4>
<p>浪点云主机服务器在香港，不需要备案，linux + apache + php环境，经过我们测试可以流畅运行蝉知系统，也支持伪静态。价格也比较实惠。想自己安装，自己维护的朋友可以选择。<a href=\"http://www.londit.com/aff/d3djY3NzQGdtYWlsLmNvbQ==\">点击此链接购买：</a></p>
<p><br /></p>
<p>附：大家有什么推荐的空间也都可以联系我们进行评测。</p>','original','','','','','','2014-08-25 14:17:00','2014-08-25 14:18:11','normal','page','0','136','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('3','ZUI文档更新','','','','','<p>大家好就，在我们团队浩浩同学的努力下，zui文档的整理工作已经初步完成，zui发布以来大家一直都比较关注，很多朋友催我们更新文档，这次终于可以给大家一个比较完善的手册。请大家到<span style=\"line-height:1.428571429;\">zui文档的官方地址：</span><span style=\"line-height:1.428571429;\"><a href=\"http://devel.cnezsoft.com/page/zui.html\">http://devel.cnezsoft.com/page/zui.html</a></span><span style=\"line-height:1.428571429;\">查看。</span></p>
<p><span style=\"line-height:1.428571429;\"><img src=\"http://www.chanzhi.org/data/upload/201406/f_d81b3cd8361b97c639574b9184d2050d.jpg\" alt=\"\" /><br /><br /></span></p>
<p><span style=\"line-height:1.428571429;\"><img src=\"http://www.chanzhi.org/data/upload/201406/f_9b835d5e180020bb9aadffdefddfa4dc.jpg\" alt=\"\" /><br /></span></p>
<p><br /></p>
<p><span style=\"background-color:#FAFAFA;color:#19751A;font-size:18px;font-weight:bold;line-height:1.1;\">PS:ZUI构建于众多优秀的开源项目之上</span></p>
<p><span style=\"background-color:#FAFAFA;color:#19751A;font-size:18px;font-weight:bold;line-height:1.1;\"><br /></span></p>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://necolas.github.io/normalize.css/\" class=\"card\"><strong class=\"card-heading\">normalize</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://jquery.com/\" class=\"card\"><strong class=\"card-heading\">jQuery</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://getbootstrap.com/\" class=\"card\"><strong class=\"card-heading\">Bootstrap</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://kindeditor.net/\" class=\"card\"><strong class=\"card-heading\">kindeditor</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://harvesthq.github.io/chosen/\" class=\"card\"><strong class=\"card-heading\">Chosen</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://www.malot.fr/bootstrap-datetimepicker\" class=\"card\"><strong class=\"card-heading\">Datetime picker</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://lesscss.org/\" class=\"card\"><strong class=\"card-heading\">Less</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"http://fortawesome.github.io/Font-Awesome/\" class=\"card\"><strong class=\"card-heading\">FontAwesome</strong></a></div>
<div class=\"col-md-3 col-sm-4\" style=\"font-size:14px;text-align:center;background-color:#FAFAFA;\"><a href=\"https://code.google.com/p/google-code-prettify/\" class=\"card\"><strong class=\"card-heading\">google code prettify</strong></a></div>
<br /><p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><br /></p>
<p><strong>向他们致谢！</strong></p>','original','','','admin','','admin','2014-06-09 14:30:00','2014-08-25 15:27:00','normal','article','0','7','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('4','多处改进，蝉知2.5.1正式版发布','','chanzhi2.5.1','','大家好蝉知企业门户系统2.5.1正式版发布了，修复了2.5beta的一些bug和漏洞，还有多处使用体验优化。这次升级修复了两个重要的安全漏洞，建议大家及时更新。','<div class=\"text-danger\">本次升级修复了两个安全漏洞，建议大家及时更新。</div>
<h4>一、2.5.1修改记录</h4>
<ol><li>文章详情页面最后编辑放在页尾</li>
<li>调整了后台区块设置颜色的界面</li>
<li>二维码图片设置默认的宽度和高度</li>
<li>处理留言和回复的时候，把留言或者评论的内容显示在回复框里面</li>
<li>修复开放登录的图片地址</li>
<li>手册文章的评论没有显示手册的查看链接</li>
<li>调整php源码区块的样式</li>
<li>zui里面的弹出框里面的\"好的\"改为\"确定\"</li>
<li>布局页面的操作统一改为图标按钮</li>
<li>跳转页面需要加placeholder，提示用户输入链接</li>
<li>关注我们改为区块实现，样式调整</li>
<li>检查ie11下面的兼容性问题</li>
<li>php源码的ok文件提示不要放在文本框架里面</li>
<li>全局样式菜单直接改成全局样式增加代码高亮</li>
<li>如果站点类型是博客的话，把网站首页的链接去掉可以支持小图标</li>
<li>产品的摘要改为简介</li>
<li>类目管理放到类目的最下面</li>
<li>类目维护后面增加x按钮，可以删除</li>
<li>调整论坛帖子转移的逻辑</li>
<li>调整上传模板页面的的样式</li>
<li>源代码区块改为html源代码，设置选项，直接语法高亮</li>
<li>新闻，产品列表的删除放在最后面</li>
<li>把IE6提示代码放到js里加载，同时简化提示内容</li>
<li>修复火狐下面导航错位问题</li>
<li>解决后台文章管理模块，左边栏 类目浏览 如果文章类目过多会被遮盖，且无法向下滚动的问题</li>
</ol>
<h4>二、下载地址</h4>
源码包： <a href=\"http://dl.xirangit.com/eps/2.5/chanzhiEPS.2.5.1.zip\">http://dl.xirangit.com/eps/2.5/chanzhiEPS.2.5.1.zip</a> <h4>三、安装和升级文档</h4>
安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a><br />
升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a><br />
<h4>四、演示</h4>
前台演示：<a href=\"\">http://demo.chanzhi.org</a><br />
<p>后台演示：<a href=\"/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>
<h4>五、新功能截图</h4>
<p><br />
</p>
<p>区块颜色自定义预览</p>
<p><img class=\"card\" src=\"http://www.chanzhi.org/data/upload/201408/f_612657d0b55bc2041168d5dc5e130b7f.jpg\" alt=\"\" /></p>
<p>区块颜色自定义</p>
<p><img class=\"card\" src=\"http://www.chanzhi.org/data/upload/201408/f_cbc7faa692abdbd2ddc70a471603d00d.jpg\" alt=\"\" /></p>
<p>代码高亮</p>
<p><img class=\"card\" src=\"http://www.chanzhi.org/data/upload/201408/f_3df23e03df90e34cc826e2e6ca2ac857.jpg\" alt=\"\" /></p>
<p>关于我们页面区块设置</p>
<p><img class=\"card\" src=\"http://www.chanzhi.org/data/upload/201408/f_7d0a448e87f61db219f7f06372f79683.jpg\" alt=\"\" /></p>
<p><img class=\"card\" src=\"http://www.chanzhi.org/data/upload/201408/f_df8a18eb7d0b23ee46eea14d70d7eff5.jpg\" alt=\"\" /></p>','original','','','admin','','demo','2014-08-19 15:15:00','2014-10-16 14:11:52','normal','article','0','15','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('5','蝉知企业门户2.5beta版本发布','','','蝉知,企业建站','蝉知企业门户2.5beta版正式发布。新增插件管理，优化模板体系、提供模板安装功能，新增文章、类目、主题的跳转功能，新增评论、留言前台回复功能，还有导航拖拽排序、代码编辑器等诸多优化。','<h4>一、2.5修改记录</h4>
<p>1、实现模板和主题风格的概念<br />
2、将前台的模板文件独立出来<br />
3、实现模板的导入功能<br />
4、模板体系可以定义支持的区块和布局列表<br />
5、增加插件管理机制<br />
6、后台布局的区块、导航、手册等列表页面的排序改为拖动排序 <br />
7、增加php源代码区块<br />
8、源代码区块增加代码编辑器<br />
9、区块增加更多颜色的配置<br />
10、自定义区块也支持更多链接<br />
11、公司简介区块还原更多链接<br />
12、留言、评论支持回复功能<br />
13、留言、评论列表显示所有回复<br />
14、发表评论的时候可以选择是否接收邮件通知<br />
15、评论被回复的时候，发送邮件通知评论作者<br />
16、后台留言和评论通过之后也可以删除<br />
17、设置产品的价格货币单位使用符号<br />
18、调整没有任何参数的产品的详情页面<br />
19、产品简介添加编辑器<br />
20、用户可以直接定义一个全局的样式<br />
21、调整手机版本下面幻灯的显示样式<br />
22、登录注册的代码不应当出现在文档开始的地方<br />
23、编辑手册的时候，记住当时点击的锚点<br />
24、将文章详情页面底部的空白标签去掉<br />
25、博客、论坛、手册功能关闭的时候，站点地图不显示这些模块<br />
26、重新调整论坛的主题转移功能<br />
27、类目维护页面增加添加按钮，可以新增一个类目框<br />
28、类目、文章、主题可以是一个链接，当浏览该类目时，跳转到其他的链接地址<br />
29、后台的主题、帖子、留言的删除改用zui里面的对话框<br />
30、修改ie6的检查提示方式<br />
31、二维码只有打开的时候再请求<br />
32、图片浏览只能后台才可以使用，前台不能使用<br />
33、日志文件增加.php扩展名<br />
34、附件目录、system目录每个都创建空白的index.php文件<br />
35、升级的时候去掉ok文件的检查<br />
36、手册文章显示最后更新时间<br />
37、后台的文章、博客、产品列表增加图片链接<br />
38、调整帖子详情附件上传的表单样式<br />
39、调整后台的文章、博客、产品等模块点开的附件上传表单修改样式<br />
40、升级到2.5的时候，将之前的日志文件删除掉<br />
41、备案信息增加链接<br />
42、幻灯的链接应当指定是否是新开窗口<br />
43、调整ie11下载附件的逻辑<br />
44、后台的用户检索可以模糊检索<br />
45、公司联系方式增加公司网址<br />
46、处理QQ登录相关报错</p>
<h4>二、下载地址</h4>
源码包：<a href=\"http://dl.xirangit.com/eps/2.5/chanzhiEPS.2.5.beta.zip\">http://dl.xirangit.com/eps/2.5/chanzhiEPS.2.5.beta.zip</a><br /><h4>三、安装和升级文档</h4>
安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a><br />
升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a><br /><h4>四、演示</h4>
前台演示：<a href=\"http://demo.chanzhi.org\">http://demo.chanzhi.org</a><br /><p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>
<h4>五、功能截图</h4>
<h5>1.评论留言可重复回复</h5>
<p class=\"card\"><img src=\"http://www.chanzhi.org/data/upload/201408/f_968ab3b123324b54b320474c18831d80.png\" alt=\"\" /></p>
<h5>2.可以拖拽排序</h5>
<p class=\"card\"><img src=\"http://www.chanzhi.org/data/upload/201408/f_421c572e99cb6d806874bfce45bd3f8d.png\" alt=\"\" /></p>
<p class=\"card\"><img src=\"http://www.chanzhi.org/data/upload/201408/f_e6ae3162b920498fe9daca5701cc87de.png\" alt=\"\" /></p>
<h5>3.模板设置</h5>
<p class=\"card\"><img src=\"http://www.chanzhi.org/data/upload/201408/f_db80a5a9766e874e41d726174b0df05c.png\" alt=\"\" /></p>
<h5>4.代码编辑器</h5>
<p class=\"card\"><img src=\"http://www.chanzhi.org/data/upload/201408/f_8e536ec6c0c4857b4cef62af88c81cde.png\" alt=\"\" /></p>','original','','','admin','','','2014-08-06 11:10:00','2014-08-25 15:18:38','normal','article','0','17','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('6','蝉知企业门户2.4正式版发布','','','企业建站系统,企业门户,开源CMS,免费cms','大家好，蝉知2.4正式发布了。对大量的交互和样式做了优化，解决了之前版本的一些bug，如微信菜单链接错误等。相比之前版本蝉知2.4更加稳定流畅，欢迎大家下载使用。','<h4>一、2.4修改记录</h4>
<p>后台博客、产品、文章列表增加按照类目浏览功能<br />
解决新版本的火狐二级导航错位问题<br />
优化产品列表和详情页面的样式<br />
论坛版块描述支持html标签显示<br />
修复幻灯片删除第一个链接按钮后无法保存的bug<br />
处理部分面包屑里面的类目地址bug</p>
<p>解决部分图标无法显示bug<br />
调整对话框的默认样式<br />
区块增加更多链接<br />
优化编辑区块操作体验，编辑后停留在编辑页面<br />
调整文章的来源字段类型和显示效果<br /><span>前端</span>优化：代码把ie8相关的js脚本打包成一个ie8.js<br />
前端优化：将treeview.js和treeview.css打包到all.css和all.js中<br />
将前台每个列表页面默认记录数改成从配置项获取<br />
附件列表不再显示编辑器上传的图片<br />
优化评论和留言列表的样式<br />
去掉论坛主题里面p标记的margin<br />
调整蝉知系统默认的字体大小<br />
修改布局的区域名称使之更容易理解<br />
zui里面去掉p标记的margin<br />
减少布局中列与列之间的间距<br />
导航设置默认折叠起来<br />
版块编辑器增加源代码标签<br />
版块的描述字段长度调成text类型。<br />
解决编辑器上传附件使用现有的图片时，缩略图地址错误的bug<br />
调整前台首页友情链接的样式<br />
留言和评论增加需要审核之后才会显示的提示。<br />
幻灯功能优化：<span>优化了后台管理界面</span>，排序不再需要手动点击保存排序按钮，<br />
解决通过之前评论时，留言也会被通过的bug<br />
后台删除主题或者回帖的时候添加确认提示<br />
前台主题的维护选项增加转移功能<br />
增加logo删除功能</p>
<p><span style=\"color:inherit;font-size:14px;font-weight:bold;line-height:1.1;\"><br /></span></p>
<p><span style=\"color:inherit;font-size:14px;font-weight:bold;line-height:1.1;\">二、下载地址</span></p>
源码包：<a href=\"http://dl.xirangit.com/eps/2.4/chanzhiEPS.2.4.zip\">http://dl.xirangit.com/eps/2.4/chanzhiEPS.2.4.zip</a><br /><h4>三、安装和升级文档</h4>
安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a><br />
升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a><br /><h4>四、演示</h4>
前台演示：<a href=\"http://demo.chanzhi.org\">http://demo.chanzhi.org</a><br /><p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>
<h4>五、功能截图</h4>
<p><img src=\"http://www.chanzhi.org/data/upload/201406/f_88e288f0d4db03b1124f0915d1d7f85c.png\" alt=\"\" class=\"card\" /></p>
<p><img src=\"http://www.chanzhi.org/data/upload/201406/f_fbd7d140a337affb0618f17131548a8a.png\" alt=\"\" class=\"card\" /></p>
<p><img src=\"http://www.chanzhi.org/data/upload/201406/f_b36c0d33a50a44804463e5f8cab37182.png\" alt=\"\" class=\"card\" /></p>
<p><img src=\"http://www.chanzhi.org/data/upload/201406/f_27bcc27d111ebb12904cd19ab5e7b206.png\" alt=\"\" class=\"card\" /></p>','original','','','admin','','','2014-06-25 14:10:00','2014-08-25 15:19:43','normal','article','0','12','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('7','蝉知企业门户2.3正式版发布','','chanzhi2.3','企业建站系统,企业门户,开源CMS,免费cms','大家好，蝉知2.3正式版正式发布了。主要改进有：提供iis下面的重写规则、增加产品自定义属性、增强幻灯片功能、增加空间图片调用功能。','<h4>提示：</h4>
<p>1、这次升级我们修改了<span>蝉知系统版权</span>，请大家仔细阅读。</p>
<p>     蝉知系统版权： <a href=\"http://www.chanzhi.org/book/chanzhieps/58_license.html\">http://www.chanzhi.org/book/chanzhieps/58_license.html</a></p>
<p>2、后台站点设置添加了首页关键字，首页标题算法改为首页关键字+站点名称，升级后需要大家根据需要重新设置一下。</p>
<h4>一、2.3修改记录</h4>
<ol><li><span style=\"line-height:1.428571429;\">博客页面应当增加对所有页面区块的支持</span></li>
<li><span style=\"line-height:1.428571429;\">解决文章详情页面微博推广按钮不删除验证代码就不能显示问题</span></li>
<li><span style=\"line-height:1.428571429;\">解决宽屏主题登录注册按钮不显示问题</span></li>
<li><span style=\"line-height:1.428571429;\">解决部署在二级目录时微信的接入地址的bug </span></li>
<li><span style=\"line-height:1.428571429;\">解决后台的用户列表中重复显示的bug </span></li>
<li><span style=\"line-height:1.428571429;\">修复新浪会员链接</span></li>
<li><span style=\"line-height:1.428571429;\">单页可以控制页面的布局</span></li>
<li><span style=\"line-height:1.428571429;\">优化时间显示，去除00:00的显示</span></li>
<li><span style=\"line-height:1.428571429;\">文章的来源增加翻译选项</span></li>
<li><span style=\"line-height:1.428571429;\">二维码的图片缩小了一些</span></li>
<li><span style=\"line-height:1.428571429;\">后台设置开放登录的图标用亮色的</span></li>
<li><span style=\"line-height:1.428571429;\">删除zepto.js文件</span></li>
<li><span style=\"line-height:1.428571429;\">调整蝉知默认的字体的大小</span></li>
<li><span style=\"line-height:1.428571429;\">留言的图标采用亮色的</span></li>
<li><span style=\"line-height:1.428571429;\">增加检查更新的功能</span></li>
<li><span style=\"line-height:1.428571429;\">安装升级界面添加蝉知协议</span></li>
<li>论坛版块和博客类目的别名不能使用数字</li>
<li><span style=\"line-height:1.428571429;\">论坛后台的回帖链接应当新开页面</span></li>
<li><span style=\"line-height:1.428571429;\">个人中心我的主题里面，最新回帖显示真实姓名</span></li>
<li><span style=\"line-height:1.428571429;\">论坛发贴的时候，判断所属版块是否存在且可读</span></li>
<li><span style=\"line-height:1.428571429;\">论坛版块列表页面的版主显示真实姓名</span></li>
<li><span style=\"line-height:1.428571429;\">管理员或者版主身份在前台显示的时候应当给予标识</span></li>
<li><span style=\"line-height:1.428571429;\">论坛增加帖子转移功能</span></li>
<li><span style=\"line-height:1.428571429;\">后台单独增加一个首页关键词的设置</span></li>
<li><span style=\"line-height:1.428571429;\">升级程序需要处理之前的站点描述信息，将html标签去掉</span></li>
<li><span style=\"line-height:1.428571429;\">产品购买链接新窗口打开</span></li>
<li><span style=\"line-height:1.428571429;\">提供了iis下面的重写规则</span></li>
<li><span style=\"line-height:1.428571429;\">头部区域的logo，站点口号，登录注册也用区块显示</span></li>
<li><span style=\"line-height:1.428571429;\">整理英语下面的翻译</span></li>
<li><span style=\"line-height:1.428571429;\">首页布局调整，使之能显示最新产品</span></li>
<li><span style=\"line-height:1.428571429;\">编辑器里面的图片库，文件库可以从我们附件表里面选择</span></li>
<li><span style=\"line-height:1.428571429;\">对于禁用的会员，希望后台可以增加解除禁用功能</span></li>
<li><span style=\"line-height:1.428571429;\">公司简介区块更多链接放在标题右侧</span></li>
<li><span style=\"line-height:1.428571429;\">文章列表显示的条目数可自己设置。</span></li>
<li><span style=\"line-height:1.428571429;\">站点增加类型设置，可以选择企业门户或者个人门户</span></li>
<li><span style=\"line-height:1.428571429;\">幻灯文字和图片给予提示</span></li>
<li><span style=\"line-height:1.428571429;\">幻灯可以有多个按钮</span></li>
<li><span style=\"line-height:1.428571429;\">每一个幻灯都可以指定文字的颜色和背景色</span></li>
<li><span style=\"line-height:1.428571429;\">幻灯可以使用纯色来实现</span></li>
<li><span style=\"line-height:1.428571429;\">实现产品自定义属性功能</span></li>
<li><span style=\"line-height:1.428571429;\">解决一键安装包qq开放登录的问题</span></li>
</ol><h4>二、下载地址</h4>
<p>源码包：<a href=\"http://dl.xirangit.com/eps/2.3/chanzhiEPS.2.3.zip\">http://dl.xirangit.com/eps/2.3/chanzhiEPS.2.3.zip</a></p>
<h4>三、安装和升级文档</h4>
<p>安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a></p>
<p>升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a></p>
<h4>四、演示</h4>
<p>前台演示：<a href=\"http://demo.chanzhi.org/\">http://demo.chanzhi.org</a></p>
<p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>
<h4>五、功能截图</h4>
<p><img src=\"http://www.chanzhi.org/data/upload/201405/f_621601c6a91fdeaf4d0ae19ad6407191.gif\" alt=\"\" /></p>
<p><img src=\"http://www.chanzhi.org/data/upload/201405/f_630c95eeafa23d91cd7cbf61635d263f.gif\" alt=\"\" /></p>','original','','','admin','','','2014-05-16 10:10:00','2014-08-25 15:20:58','normal','article','0','12','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('8','蝉知企业门户2.2.1版本发布','','chanzhieps2.2.1','企业建站系统,企业门户,开源CMS,免费cms','小更新，蝉知2.2.1发布，这次更新主要是解决一些bug，加一些细节调整。','<h4>一、2.2.1修改记录</h4>
<p>  1 调整评论页面的文案。</p>
  2 联系我们页面增加二维码展示。<br />
  3 密码错误触发锁定次数增加到5次，禁用时间缩短到3分钟。<br />
  4 博客列表评论按钮添加链接。 <br />
  5 会员管理页面添加微博和qq会员的显示。<br />
  6 修改在线QQ的连接。<br /><p>  7 把oauth类的get方法去掉file_get_contents方式，只用CURL方式。</p>
<p>  8 解决php magic_quotes_gpc 打开时中文内容存储失败的bug。 </p>
<p><span style=\"color:inherit;font-size:16px;font-weight:bold;line-height:1.1;\"><br /></span></p>
<p><span style=\"color:inherit;font-size:16px;font-weight:bold;line-height:1.1;\">二、下载地址</span></p>
<p><span style=\"font-size:14px;line-height:1.428571429;\">源码包：</span><a href=\"http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.1.zip\">http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.1.zip</a></p>
<p>安装包：<a href=\"http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.1.exe\">http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.1.exe</a></p>
<p><br /></p>
<p><span style=\"color:inherit;font-size:16px;font-weight:bold;line-height:1.1;\">三、安装和升级文档  </span></p>
<p>安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a></p>
<p>升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a></p>
<p><br /></p>
<p>前台演示：<a href=\"http://demo.chanzhi.org/\">http://demo.chanzhi.org</a></p>
<p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>','original','','','admin','','','2014-04-01 10:40:00','2014-08-25 15:22:03','normal','article','0','12','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('9','蝉知企业门户2.2版本发布，全面集成微信！','','chanzhieps2.2','微信营销系统,微网站,企业建站,移动建站','大家好，蝉知企业门户系统2.2正式版正式发布了！这次升级集成了微信公众号的应用，主要功能有：公众号接入、公众号菜单定义、关键字自动回复设置、二维码显示、粉丝消息获取和回复、粉丝管理。另外还添加了新的宽屏主题、重新组成后台反馈相关的功能，使用更加方便。','<p>大家好，蝉知企业门户系统2.2正式版正式发布了！该版本全面集成了微信公众号平台，包括：公众号接入、公众号菜单定义、关键字自动回复设置、二维码显示、粉丝消息获取和回复、粉丝管理。另外还添加了新的宽屏主题、重新组成后台反馈相关的功能，使用更加方便。</p>
<h4>一、修改记录</h4>
<ol><li><span style=\"line-height:1.428571429;\">后台设置logo页面调整</span></li>
<li><span style=\"line-height:1.428571429;\">论坛帖子用户信息调整</span></li>
<li><span style=\"line-height:1.428571429;\">调整反馈，将留言、评论、主题、回帖，将其集中在一起。</span></li>
<li><span style=\"line-height:1.428571429;\">添加微信公众号接入功能</span></li>
<li><span style=\"line-height:1.428571429;\">添加公众号会员查看功能</span></li>
<li><span style=\"line-height:1.428571429;\">添加公众号消息管理功能</span></li>
<li><span style=\"line-height:1.428571429;\">添加公众号菜单、关键字、订阅回复、默认回复的管理功能</span></li>
<li><span style=\"line-height:1.428571429;\">新增宽屏主题</span></li>
<li><span style=\"line-height:1.428571429;\">前台添加微信公众号和手机访问二维码显示</span></li>
<li><span style=\"line-height:1.428571429;\">禁止百度自动转码</span><span style=\"line-height:1.428571429;\">。</span><br /></li>
</ol><h4 style=\"color:#333333;\">二、新特性截图</h4>
<p><br /></p>
<p><strong>2.1 前台显示微信公众号的二维码以及当前网址的二维码。</strong><strong><br /></strong></p>
<p><strong><img src=\"http://www.chanzhi.org/data/upload/201403/f_0f4feaade60a500a295320cf7f57b7b2.jpg\" alt=\"\" /></strong><strong><br /></strong></p>
<p><strong><br /></strong></p>
<p><strong>2.2 后台的微信功能设置</strong><strong><br /></strong></p>
<p><strong><img src=\"http://www.chanzhi.org/data/upload/201403/f_6fd64ba21b03ee7a1b4b2cdb019ef7bd.jpg\" alt=\"\" /><br /></strong></p>
<p><strong><br /></strong></p>
<p><strong>2.3 微信界面截图</strong></p>
<p><strong><img src=\"http://www.chanzhi.org/data/upload/201403/f_e1aa3a6106f7f37395d42e637254091a.jpg\" alt=\"\" /><br /></strong></p>
<h4 style=\"color:#333333;\">三、下载地址</h4>
<p>源码包：<a href=\"http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.zip\">http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.zip</a></p>
<p>安装包：<a href=\"http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.exe\">http://dl.xirangit.com/eps/2.2/chanzhiEPS.2.2.exe</a></p>
<p><br /></p>
<p><span style=\"color:inherit;font-size:16px;font-weight:bold;line-height:1.1;\">四、安装和升级文档  </span></p>
<p>安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a></p>
<p>升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a></p>
<p><br /></p>
<p>前台演示：<a href=\"http://demo.chanzhi.org/\">http://demo.chanzhi.org</a></p>
<p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>
<p><br /></p>
<p><span style=\"color:inherit;font-size:16px;font-weight:bold;line-height:1.1;\">五、蝉知系统微信集成手册</span></p>
<p><span style=\"color:inherit;font-size:16px;font-weight:bold;line-height:1.1;\"><br /></span></p>
<p>蝉知系统微信集成手册：<a href=\"http://www.chanzhi.org/book/weixin.html\">http://www.chanzhi.org/book/weixin.html</a></p>','original','','','admin','','','2014-03-24 16:00:00','2014-08-25 15:24:48','normal','article','0','12','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('10','蝉知企业门户系统2.1正式版发布','','chanzhieps2.1','手机建站系统,企业建站系统,微信网站,免费企业建站','大家好，蝉知企业门户系统2.1正式版今天正式发布了。这次升级主要是手机终端界面的优化和区块功能改进，同时还解决了之前版本产品和博客分页功能等bug。','<h4 style=\"color:#333333;\">一、2.1修改记录</h4>
<ol><li>区块增加图标设置功能</li>
<li>布局设置增加区块宽度设置功能</li>
<li>触屏设备访问时幻灯片增加拖动支持</li>
<li><span style=\"line-height:1.428571429;\">论坛帖子最后编辑者改为真实姓名</span></li>
<li><span style=\"line-height:1.428571429;\">关于我们页面使用区块把联系我们放在右侧</span></li>
<li><span style=\"line-height:1.428571429;\">批量维护手册章节的时候添加发布时间</span></li>
<li><span style=\"line-height:1.428571429;\">编辑手册文章的时候增加发布时间的字段</span></li>
<li><span style=\"line-height:1.428571429;\">重新调整h1-h6标签的字体大小</span></li>
<li><span style=\"line-height:1.428571429;\">解决置顶帖子用户姓名问题</span></li>
<li><span style=\"line-height:1.428571429;\">修改版权提示的格式</span></li>
<li><span style=\"line-height:1.428571429;\">修复分页的bug</span></li>
<li><span style=\"line-height:1.428571429;\">幻灯排序在ie10下面有问题。</span></li>
<li><span style=\"line-height:1.428571429;\">修复ie10下面蓝色风格的问题</span></li>
<li><span style=\"line-height:1.428571429;\">精简文章详情页面的上一篇下一篇的导航文字</span></li>
<li><span style=\"line-height:1.428571429;\">调整留言页面回复内容的缩进和字体大小</span></li>
<li><span style=\"line-height:1.428571429;\">优化移动版本头尾的处理</span></li>
<li><span style=\"line-height:1.428571429;\">管理员身份回帖的时候应当使用全编辑器</span></li>
<li><span style=\"line-height:1.428571429;\">论坛帖子发贴框的宽度调整。把只读放在后面。</span></li>
<li><span style=\"line-height:1.428571429;\">调整论坛列表页面各列的宽度</span></li>
<li><span style=\"line-height:1.428571429;\">以管理员身份发表评论或者留言，默认状态为通过。</span></li>
<li><span style=\"line-height:1.428571429;\">后台管理员回复一篇评论或留言之后，默认将其状态改为通过</span></li>
<li><span style=\"line-height:1.428571429;\">修改邮箱默认配置，将腾讯邮箱默认改为465 </span></li>
<li><span style=\"line-height:1.428571429;\">如果发贴用户已被删除，帖子列表页面的最后回复取用户名</span></li>
<li><span style=\"line-height:1.428571429;\">论坛出现版主的地方也都显示真实姓名</span></li>
<li><span style=\"line-height:1.428571429;\">将user模块的getRealName()方法改为getRealNamePairs()</span></li>
<li><span style=\"line-height:1.428571429;\">调整模拟的alert和confirm框的样式</span></li>
<li><span style=\"line-height:1.428571429;\">论坛帖子列表的时候显示用户的真实姓名</span></li>
<li><span style=\"line-height:1.428571429;\">留言者区分是否是登录用户</span></li>
<li><span style=\"line-height:1.428571429;\">论坛的板块设置提示需要二级板块</span></li>
<li><span style=\"line-height:1.428571429;\">区块首页底部的命名改为中部。</span></li>
<li><span style=\"line-height:1.428571429;\">调整文章，产品无类目时的交互方式</span></li>
<li><span style=\"line-height:1.428571429;\">重置密码功能把resetKey，resetTime合成一个字段</span></li>
<li><span style=\"line-height:1.428571429;\">论坛控制图片大小</span></li>
</ol><h4 style=\"color:#333333;\">二、手机访问截图</h4>
<p><img src=\"http://www.chanzhi.org/data/upload/201403/f_59e4b4d8216516649c97804813b14af2.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\" /><img src=\"http://www.chanzhi.org/data/upload/201403/f_702d92775d4dcdd983e5be1d998d566b.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\" /></p>
<p><img src=\"http://www.chanzhi.org/data/upload/201403/f_4ca0b9700f909cabc75ecc00f60ee7a0.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\" /><img src=\"http://www.chanzhi.org/data/upload/201403/f_0831fb8306a661c9ab6cb1a87d16b5ba.jpg\" alt=\"\" title=\"\" height=\"540\" width=\"304\" /><img src=\"http://www.chanzhi.org/data/upload/201403/f_dfa6504be3a605561262e18d4d5eb63f.png\" alt=\"\" title=\"\" height=\"540\" width=\"304\" /></p>
<h4 style=\"color:#333333;\">三、下载地址</h4>
<p>源码包：<a href=\"http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.zip\">http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.zip</a><br />
安装包：<a href=\"http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.exe\">http://dl.xirangit.com/eps/2.1/chanzhiEPS.2.1.exe</a></p>
<h4 style=\"color:#333333;\">四、安装和升级文档  </h4>
<p>安装文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/5.html\">http://www.chanzhi.org/book/chanzhieps/5.html</a><br />
升级文档：<a href=\"http://www.chanzhi.org/book/chanzhieps/68.html\">http://www.chanzhi.org/book/chanzhieps/68.html</a><br />
前台演示：<a href=\"http://demo.chanzhi.org/\">http://demo.chanzhi.org</a></p>
<p>后台演示：<a href=\"http://demo.chanzhi.org/chanzhiadmin.php\">http://demo.chanzhi.org/chanzhiadmin.php</a></p>','original','','','admin','','','2014-03-03 09:50:00','2014-08-25 15:26:45','normal','article','0','12','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn'),('11','关于我们','','about','','','<p>这好的点点滴滴多多多多</p>','original','','','','','100fun','2014-10-08 14:38:00','2018-03-26 22:32:31','normal','page','0','3','0','0000-00-00 00:00:00','0','11','','','','0','zh-cn'),('12','明天还是明天','','','','','明天还是明天','original','','','demo','','','2014-10-08 17:44:00','2014-10-08 17:44:59','normal','article','0','8','0','0000-00-00 00:00:00','0','0','','','','0','zh-cn');_ZDB_LINE_ENDER_
REPLACE INTO `eps_block`(`id`,`originID`,`effectID`,`template`,`type`,`title`,`content`,`lang`) VALUES('1','0','0','default','latestArticle','最新文章','{\"category\":\"0\",\"limit\":\"7\"}','zh-cn'),('2','0','0','default','hotArticle','热门文章','{\"category\":\"0\",\"limit\":\"7\"}','zh-cn'),('3','0','0','default','latestProduct','最新产品','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','zh-cn'),('4','0','0','default','hotProduct','热门产品','{\"category\":\"0\",\"limit\":\"3\",\"image\":\"show\"}','zh-cn'),('5','0','0','default','slide','幻灯片','{\"group\":\"15\"}','zh-cn'),('6','0','0','default','articleTree','文章分类','{\"showChildren\":\"0\"}','zh-cn'),('7','0','0','default','productTree','产品分类','{\"showChildren\":\"0\"}','zh-cn'),('8','0','0','default','blogTree','博客分类','{\"showChildren\":\"1\"}','zh-cn'),('9','0','0','default','pageList','单页列表','{\"limit\":\"7\"}','zh-cn'),('10','0','0','default','contact','联系我们','','zh-cn'),('11','0','0','default','about','公司简介','','zh-cn'),('12','0','0','default','links','友情链接','','zh-cn'),('13','0','0','default','header','网站头部','{\"top\":{\"left\":\"\",\"right\":\"\"},\"topLeftContent\":\"\",\"topRightContent\":\"\",\"middle\":{\"left\":\"logo\",\"center\":\"slogan\",\"right\":\"\"},\"bottom\":\"nav\",\"customImage\":null,\"custom\":{\"THEME_CODEFIX\":{\"css\":\"#blockID\\n{\\n  \\/*.panel-heading {}*\\/\\n  \\/*.panel-body    {}*\\/\\n}\",\"js\":\"\"}}}','zh-cn'),('14','0','0','default','followUs','关注我们','','zh-cn'),('15','0','0','default','subscribe','订阅博客','','zh-cn');_ZDB_LINE_ENDER_
REPLACE INTO `eps_layout`(`template`,`plan`,`page`,`region`,`object`,`blocks`,`import`,`lang`) VALUES('default','0','all','top','','[{\"id\":\"13\",\"grid\":\"0\",\"probability\":\"\",\"titleless\":\"\",\"borderless\":\"\",\"isRandom\":\"0\"}]','no','zh-cn'),('default','0','article_browse','side','','[{\"id\":\"6\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','article_view','side','','[{\"id\":\"6\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','blog_index','side','','[{\"id\":\"15\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"8\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','blog_view','side','','[{\"id\":\"8\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','company_index','side','','[{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"14\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','index_index','bottom','','[{\"id\":\"12\",\"grid\":12,\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','index_index','middle','','[{\"id\":\"1\",\"grid\":\"4\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"11\",\"grid\":\"4\",\"titleless\":\"0\",\"borderless\":\"0\"},{\"id\":\"10\",\"grid\":\"4\",\"titleless\":\"0\",\"borderless\":\"0\"}]','no','zh-cn'),('default','0','index_index','top','','[{\"id\":\"5\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','message_index','side','','[{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','page_index','side','','[{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"2\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','page_view','side','','[{\"id\":\"9\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"2\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','product_browse','side','','[{\"id\":\"4\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"7\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn'),('default','0','product_view','side','','[{\"id\":\"4\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"7\",\"grid\":\"\",\"titleless\":0,\"borderless\":0},{\"id\":\"10\",\"grid\":\"\",\"titleless\":0,\"borderless\":0}]','no','zh-cn');_ZDB_LINE_ENDER_
REPLACE INTO `eps_config`(`owner`,`module`,`section`,`key`,`value`,`lang`) VALUES('system','common','layout','default_THEME_CODEFIX','0','zh-cn'),('system','common','template','custom','{\"default\":{\"flat\":{\"background-color\":\"transparent\",\"background-image\":\"\",\"background-image-repeat\":\"repeat\",\"background-image-position-x\":\"\",\"background-image-position-y\":\"0\",\"background-image-position\":\" 0\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"link-color\":\"\",\"link-decoration\":\"none\",\"link-visited-color\":\"\",\"link-hover-color\":\"\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\",\"footer-border-style\":\"none\",\"footer-border-color\":\"\",\"footer-backcolor\":\"\"},\"tartan\":{\"background-color\":\"#D0FFFD\",\"background-image\":\"\",\"background-image-repeat\":\"repeat\",\"background-image-position-x\":\"\",\"background-image-position-y\":\"0\",\"background-image-position\":\" 0\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"link-color\":\"\",\"link-decoration\":\"none\",\"link-visited-color\":\"\",\"link-hover-color\":\"\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\",\"footer-border-style\":\"none\",\"footer-border-color\":\"\",\"footer-backcolor\":\"\"},\"THEME_CODEFIX\":{\"background-color\":\"transparent\",\"background-image\":\"none\",\"background-image-repeat\":\"repeat\",\"background-image-position-x\":\"0\",\"background-image-position-y\":\"0\",\"background-image-position\":\"0 0\",\"text-color\":\"#333\",\"font-size\":\"13px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"link-color\":\"#0D3D88\",\"link-decoration\":\"none\",\"link-visited-color\":\"#0D3D88\",\"link-hover-color\":\"#347AEB\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\",\"navbar-table-layout\":\"true\",\"navbar-backcolor\":\"#f1f1f1\",\"navbar-background-image\":\"none\",\"navbar-background-image-repeat\":\"repeat\",\"navbar-background-image-position-x\":\"0\",\"navbar-background-image-position-y\":\"0\",\"navbar-background-image-position\":\"0 0\",\"navbar-border-style\":\"solid\",\"navbar-border-color\":\"#D5D5D5\",\"navbar-border-width\":\"1px\",\"navbar-border-radius\":\"4px\",\"navbar-panel-backcolor\":\"#FFF\",\"navbar-panel-border-style\":\"solid\",\"navbar-panel-border-color\":\"#DDD\",\"navbar-panel-border-width\":\"1px\",\"navbar-paenl-border-radius\":\"3px\",\"navbar-menu-color\":\"#555\",\"navbar-menu-font-size\":\"14px\",\"navbar-menu-font-family\":\"inherit\",\"navbar-menu-font-weight\":\"bold\",\"navbar-menu-color-hover\":\"#000\",\"navbar-menu-backcolor-hover\":\"#FEFEFE\",\"navbar-menu-color-active\":\"#151515\",\"navbar-menu-backcolor-active\":\"#FFF\",\"navbar-submenu-color\":\"#333\",\"navbar-submenu-color-hover\":\"#151515\",\"navbar-submenu-backcolor-hover\":\"#E5E5E5\",\"navbar-submenu-color-active\":\"#151515\",\"navbar-submenu-backcolor-active\":\"#E5E5E5\",\"block-border-style\":\"solid\",\"block-border-color\":\"#DDD\",\"block-border-width\":\"1px\",\"block-border-radius\":\"3px\",\"block-heading-backcolor\":\"#F5F5F5\",\"block-heading-color\":\"#333\",\"block-heading-font-size\":\"inherit\",\"block-heading-font-weight\":\"inherit\",\"block-body-backcolor\":\"transparent\",\"block-body-color\":\"#333\",\"block-body-link-color\":\"#0D3D88\",\"button-color-default\":\"#F2F2F2\",\"button-color-primary\":\"#3280FC\",\"button-color-info\":\"#39B3D7\",\"button-color-success\":\"#229F24\",\"button-color-warning\":\"#E48600\",\"button-color-danger\":\"#D2322D\",\"button-border-style\":\"solid\",\"button-border-width\":\"1px\",\"button-border-radius\":\"3px\",\"button-font-weight\":\"normal\",\"footer-border-style\":\"solid\",\"footer-border-color\":\"#ddd\",\"footer-backcolor\":\"#f7f7f7\"},\"wide\":{\"color-primary\":\"\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"inherit\",\"font-weight\":\"normal\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\"},\"colorful\":{\"color-primary\":\"\",\"border-radius\":\"3\",\"background-color\":\"\",\"background-image\":\"\",\"text-color\":\"\",\"font-size\":\"13px\",\"font-family\":\"\\u5b8b\\u4f53\",\"font-weight\":\"normal\",\"sidebar-pull-left\":\"false\",\"sidebar-width\":\"25%\",\"footer-border-style\":\"solid\",\"footer-border-color\":\"\",\"footer-backcolor\":\"#2286D2\"}}}','zh-cn');_ZDB_LINE_ENDER_
INSERT  INTO `eps_relation`(`type`,`id`,`category`,`lang`) VALUES('article','1','1','zh-cn'),('article','1','2','zh-cn'),('article','3','2','zh-cn'),('article','4','1','zh-cn'),('article','4','2','zh-cn'),('article','5','1','zh-cn'),('article','5','2','zh-cn'),('article','6','1','zh-cn'),('article','6','2','zh-cn'),('article','7','1','zh-cn'),('article','7','2','zh-cn'),('article','8','1','zh-cn'),('article','8','2','zh-cn'),('article','9','1','zh-cn'),('article','9','2','zh-cn'),('article','10','1','zh-cn'),('article','10','2','zh-cn'),('article','12','12','zh-cn'),('product','1','7','zh-cn'),('product','2','7','zh-cn');_ZDB_LINE_ENDER_
INSERT  INTO `eps_slide`(`id`,`group`,`title`,`titleColor`,`mainLink`,`target`,`backgroundType`,`backgroundColor`,`height`,`image`,`label`,`buttonClass`,`buttonUrl`,`buttonTarget`,`summary`,`createdDate`,`order`,`lang`) VALUES('1','15','蝉知，专注企业营销!','#FFF','','0','color','#FF9400','270','','[\"\\u8749\\u77e54.3\\u4e0b\\u8f7d\"]','[\"primary\"]','[\"http:\\/\\/www.chanzhi.org\\/dynamic\\/103_chanzhi4.3.html\"]','[\"\"]','<div><ul><li>功能完备：文章、产品、论坛、手册、留言、评论、博客...</li>
<li>全网营销：一个网站，电脑、手机、微信体验俱佳！</li>
<li>集成微信：内置微信公众平台功能，移动互联，我来做主！</li>
<li>完美SEO：全方位针对搜索引擎优化，轻松斩获最佳排名！</li>
</ul>
</div>','2015-07-16 15:27:24','1','zh-cn'),('2','15','蝉知，定制性最强！','#FFF','','0','color','#2286D2','270','','[\"\\u8749\\u77e54.3\\u4e0b\\u8f7d\"]','[\"primary\"]','[\"http:\\/\\/www.chanzhi.org\\/download\\/103_chanzhi4.3.html\"]','[\"\"]','<div><ul><li>底层框架自主开发，结构先进灵活；</li>
<li>自主开发UI框架，更适合国人习惯；</li>
<li>内置扩展机制，方便企业定制开发；</li>
</ul>
</div>','2015-07-16 15:43:14','2','zh-cn'),('3','15','蝉知，真开源真免费!','#FFF','','0','color','#D92958','270','','[\"\\u8749\\u77e54.3\\u4e0b\\u8f7d\"]','[\"primary\"]','[\"http:\\/\\/www.chanzhi.org\\/download\\/103_chanzhi4.3.html\"]','[\"\"]','<div><ul><li>国内第一款开源企业门户系统;</li>
<li>授权宽松，商业友好，代码开放;</li>
<li>免费下载，免费使用，不限制商用！</li>
</ul>
</div>','2015-07-16 15:45:40','3','zh-cn');_ZDB_LINE_ENDER_
