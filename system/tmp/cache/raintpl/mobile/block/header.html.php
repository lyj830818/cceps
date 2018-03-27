<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>

<?php $templateName=$this->var['templateName'] = CHANZHI_TEMPLATE;?>

<?php $themeName=$this->var['themeName']    = CHANZHI_THEME;?>

<?php $topNavs=$this->var['topNavs'] = $model->loadModel('nav')->getNavs('mobile_top');?>

<header class='appbar fix-top' id='appbar'>
  <div class='appbar-title'>
    <a href='<?php echo $model->config->webRoot;?>' id='logo'>
      <?php $logoSetting=$this->var['logoSetting'] = isset($model->config->site->logo) ? json_decode($model->config->site->logo) : new stdclass();?>

      <?php $logo=$this->var['logo'] = false;?>

      <?php if(isset($logoSetting->$templateName->themes->all)){ ?>

<?php $logo=$this->var['logo'] = $logoSetting->$templateName->themes->all;?>

<?php } ?>

      <?php if(isset($logoSetting->$templateName->themes->$themeName)){ ?>

<?php $logo=$this->var['logo'] = $logoSetting->$templateName->themes->$themeName;?>

<?php } ?>

      <?php if($logo){ ?>

        <?php $logo->extension = $model->loadModel('file')->getExtension($logo->pathname);$this->var['logo'] = $logo;?>

        <?php echo html::image($model->loadModel('file')->printFileURL($logo), "class='logo' alt='{$model->config->company->name}' title='{$model->config->company->name}'"); ?>

      <?php }else{ ?>

       <h4><?php echo $model->config->site->name;?></h4>
      <?php } ?>

    </a>
  </div>
  <div class='appbar-actions'>
    <?php if(commonModel::isAvailable('search')){ ?>

      <div class='dropdown'>
        <button type='button' class='btn' data-toggle='dropdown' id='searchToggle'><i class='icon-search'></i></button>
        <div class='dropdown-menu fade search-bar' id='searchbar'>
          <form action='<?php echo helper::createLink('search'); ?>' method='get' role='search'>
            <div class='input-group'>
              <?php $keywords=$this->var['keywords'] = ($model->app->getModuleName() == 'search') ? $model->session->serachIngWord : '';?>

              <?php echo html::input('words', $keywords, "class='form-model' placeholder=''"); ?>

              <?php if($model->config->requestType == 'GET'){ ?>

<?php echo html::hidden($model->config->moduleVar, 'search') . html::hidden($model->config->methodVar, 'index'); ?>

<?php } ?>

                <div class='input-group-btn'>
                  <button class='btn default' type='submit'><i class='icon icon-search'></i></button>
                </div>
            </div>
          </form>
        </div>
      </div>
    <?php } ?>

    <?php if(commonModel::isAvailable('shop')){ ?>

      <a class='btn with-badge' href='<?php echo helper::createLink('cart', 'browse'); ?>'><i class='icon icon-shopping-cart'></i><strong class='cart-count badge small text-danger circle hide'>12</strong></a>
    <?php } ?>

    <?php $isMultiLangAvailable=$this->var['isMultiLangAvailable'] = count(explode(',', $model->config->enabledLangs)) > 1;?>

    <?php $isUserAvailable=$this->var['isUserAvailable'] = commonModel::isAvailable('user');?>

    <?php if($isUserAvailable || $isMultiLangAvailable){ ?>

      <div class='dropdown'>
        <button type='button' class='btn' data-toggle='dropdown'><i class='icon-bars circle'></i></button>
        <ul class='dropdown-menu dropdown-menu-right' id='topbarBox'><?php echo $model->config->siteNavHolder;?></ul>
      </div>
    <?php } ?>

  </div>
</header>

<nav class='appnav fix-top appnav-auto' id='appnav' data-ve='navbar' data-type='mobile_top'>
  <div class='mainnav'>
    <ul class='nav'>
    <?php $subnavs=$this->var['subnavs'] = '';?>

    <?php $navID=$this->var['navID']   = 0;?>

    <?php foreach($topNavs as $nav1): ?>

      <?php $navID++; ?>

      <li class='<?php echo $nav1->class;?>'>
      <?php if(empty($nav1->children)){ ?>

        <?php echo html::a($nav1->url, $nav1->title, ($nav1->target != 'modal') ? "target='$nav1->target'" : "data-toggle='modal'"); ?>

      <?php }else{ ?>

        <?php echo html::a("#sub-{$navID}", $nav1->title . " <i class='icon-caret-down'></i>", ($nav1->target != 'modal') ? "target='$nav1->target'" : "data-toggle='modal'"); ?>

        <?php $subnavs=$this->var['subnavs'] .= "<ul class='nav' id='sub-{$navID}'>\n";?>

        <?php foreach($nav1->children as $nav2): ?>

          <?php $subnavs=$this->var['subnavs'] .= "<li class='{$nav2->class}'>";?>

          <?php if(empty($nav2->children)){ ?>

            <?php $subnavs=$this->var['subnavs'] .= html::a($nav2->url, $nav2->title, ($nav2->target != 'modal') ? "target='$nav2->target'" : "data-toggle='modal' class='text-important'");?>

          <?php }else{ ?>

            <?php $subnavs=$this->var['subnavs'] .= html::a("javascript:;", $nav2->title . " <i class='icon-caret-down'></i>", "data-toggle='dropdown' class='text-important'");?>

            <?php $subnavs=$this->var['subnavs'] .= "<ul class='dropdown-menu'>";?>

            <?php foreach($nav2->children as $nav3): ?>

              <?php $subnavs=$this->var['subnavs'] .= "<li>" . html::a($nav3->url, $nav3->title, ($nav3->target != 'modal') ? "target='$nav3->target'" : "data-toggle='modal' class='text-important'") . '</li>'; ;?>

            <?php endforeach; ?>

            <?php $subnavs=$this->var['subnavs'] .= "</ul>\n";?>

<?php } ?>

          <?php $subnavs=$this->var['subnavs'] .= "</li>\n";?>

        <?php endforeach; ?>

        <?php $subnavs=$this->var['subnavs'] .= "</ul>\n";?>

<?php } ?>

      </li>
    <?php endforeach; ?><!-- end nav1 -->
    </ul>
  </div>
  <div class='subnavs fade'>
    <?php echo $subnavs;?>

  </div>
</nav>
