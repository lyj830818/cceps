<?php if(!defined("RUN_MODE")) die();?>
<?php
/**
 * The control file of index module of chanzhiEPS.
 *
 * @copyright   Copyright 2009-2015 青岛易软天创网络科技有限公司(QingDao Nature Easy Soft Network Technology Co,LTD, www.cnezsoft.com)
 * @license     ZPLV1.2 (http://zpl.pub/page/zplv12.html)
 * @author      Chunsheng Wang <chunsheng@cnezsoft.com>
 * @package     index
 * @version     $Id$
 * @link        http://www.chanzhi.org
 */
class index extends control
{
    /**
     * Construct, must create this contruct function since there's index() also
     *
     * @access public
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * The index page of whole site.
     * 
     * @access public
     * @return void
     */
    public function index($categoryID = 0, $pageID = 1)
    {
        if(isset($this->config->site->type) and $this->config->site->type == 'blog')
        {
            $param = ($categoryID == 0 and $pageID == 1) ? '' : "categoryID={$categoryID}&pageID={$pageID}";
            $this->locate($this->createLink('blog', 'index', $param));
        }

        $this->view->title = $this->config->site->indexKeywords;
        $this->view->mobileURL  = helper::createLink('index', 'index', '', '', 'mhtml');
        $this->view->desktopURL = helper::createLink('index', 'index', '', '', 'html');

        //首页幻灯片数据
        $articleModel = $this->loadModel("article");
        $slides = $articleModel->getList('article', [24], "addedDate_asc");
        $this->view->slides = $slides;

        //首页幻灯片下方4列文字
        $underSlidesText = $articleModel->getList('article', [25], "addedDate_asc");
        $this->view->underSlidesText = explode(',', reset($underSlidesText)->summary);

        //首页幻灯片下方横屏一
        $hengping1 = $articleModel->getList('article', [26], "addedDate_asc");
        $this->view->hengping1 = reset($hengping1);

        //首页幻灯片下方横屏二
        $hengping2 = $articleModel->getList('article', [27], "addedDate_asc");
        $this->view->hengping2 = reset($hengping2);

        //合作伙伴
        $partners = $articleModel->getList('article', [28], "addedDate_asc");
        $this->view->partners = $partners;

        $this->display();
    }
}
