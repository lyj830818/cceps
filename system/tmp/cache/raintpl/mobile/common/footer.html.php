<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>

<?php if($extView = $control->getExtViewFile(TPL_ROOT . 'common/footer.html.php')){ ?>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($extView);?>

<?php return helper::cd(); ?>

<?php } ?>

<div class='block-region region-all-bottom blocks' data-region='all-bottom'><?php echo $control->loadModel('block')->printRegion($layouts, 'all', 'bottom');?></div>
<div class='appinfo clearfix'>
  <div class='copyright pull-left'>
    <span style='overflow:hidden; max-width: 200px; height: 20px; line-height: 20px; display:inline-block;'>
     <?php $contact=$this->var['contact']   = json_decode($config->company->contact);?>

     <?php $company=$this->var['company']   = (empty($contact->site) or $contact->site == $control->server->http_host) ? $config->company->name : html::a('http://' . $contact->site, $config->company->name, "target='_blank'");?>

     &copy; <?php echo $company;?>

    </span>
    <div class='pull-right'>
    <?php if($control->config->site->execInfo == 'show'){ ?>

<?php echo $control->config->execPlaceholder;?>

<?php } ?>

    </div>
  </div>
  <div class='icpinfo hide'>
    <?php if(!empty($config->site->icpLink) and !empty($config->site->icpSN)){ ?>

<?php echo html::a(strpos($config->site->icpLink, 'http://') !== false ? $config->site->icpLink : 'http://' . $config->site->icpLink, $config->site->icpSN, "target='_blank'"); ?>

<?php } ?>

    <?php if(empty($config->site->icpLink) and !empty($config->site->icpSN)){ ?>

<?php echo $config->site->icpSN;?>

<?php } ?>

  </div>
  <div class='powerby pull-right' id='powerby'>
    <?php $chanzhiVersion=$this->var['chanzhiVersion']                   = $config->version;?>

    <?php $isProVersion=$this->var['isProVersion']                     = strpos($chanzhiVersion, 'pro') !== false;?>

    <?php if($isProVersion){ ?>

<?php $chanzhiVersion=$this->var['chanzhiVersion'] = str_replace('pro', '', $chanzhiVersion);?>

<?php } ?>

    <?php $footerLogo=$this->var['footerLogo'] = "<span class='" . ($isProVersion ? 'icon-chanzhi-pro' : 'icon-chanzhi') . "' style='font-size:12px;'></span>";?>

    <?php printf($lang->poweredBy, $config->version, k(), "$footerLogo <span class='name hide'>" . $lang->chanzhiEPSx . '</span>' . $chanzhiVersion); ?>

  </div>
</div>

<?php if(isset($control->config->site->mobileBottomNav) and ($control->config->site->mobileBottomNav == 'hide')){ ?>

<?php }else{ ?>

  <?php $bottomNavs=$this->var['bottomNavs'] = $control->loadModel('nav')->getNavs('mobile_bottom');?>

  <footer class="appbar fix-bottom" id='footerNav' data-ve='navbar' data-type='mobile_bottom'>
    <ul class="nav">
      <?php foreach($bottomNavs as $nav): ?>

        <?php $icon=$this->var['icon']  = '';?>

        <?php $class=$this->var['class'] = '';?>

        <?php if($nav->system == 'contact'){ ?>

          <?php $icon=$this->var['icon'] = "<i class='icon icon-comments-alt'></i> ";?>

          <?php $class=$this->var['class'] = "class='text-primary'";?>

<?php } ?>

        <?php if($nav->system == 'company'){ ?>

          <?php $icon=$this->var['icon'] = "<i class='icon icon-group'></i> ";?>

          <?php $class=$this->var['class'] = "class='text-important'";?>

<?php } ?>

        <li><?php echo html::a($nav->url, $icon . $nav->title, ($nav->target != 'modal') ? "target='$nav->target' $class" : "data-toggle='modal' $class"); ?></li>
      <?php endforeach; ?>

    </ul>
  </footer>
<?php } ?>

<?php if(isset($pageJS)){ ?>

<?php echo js::execute($pageJS); ?>

<?php } ?>



<?php $extPath=$this->var['extPath']      = dirname(__FILE__) . '/ext/';?>

<?php $extHookRule=$this->var['extHookRule']  = $extPath . 'footer.front.*.hook.php';?>

<?php $extHookFiles=$this->var['extHookFiles'] = glob($extHookRule);?>

<?php if($extHookFiles){ ?>

  <?php foreach($extHookFiles as $extHookFile): ?> 
    <?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($extHookFile);?>

  <?php endforeach; ?>

<?php } ?>


<?php $siteExtPath=$this->var['siteExtPath']  = dirname(__FILE__) . DS . "ext/_{$control->app->siteCode}/";?>

<?php $extHookRule=$this->var['extHookRule']  = $siteExtPath . 'footer.front.*.hook.php';?>

<?php $extHookFiles=$this->var['extHookFiles'] = glob($extHookRule);?>

<?php if($extHookFiles){ ?>

  <?php foreach($extHookFiles as $extHookFile): ?>

    <?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($extHookFile);?>

  <?php endforeach; ?>

<?php } ?>

<div class='block-region region-footer hidden blocks' data-region='all-footer'><?php echo $control->loadModel('block')->printRegion($layouts, 'all', 'footer');?></div>
<?php if(commonModel::isAvailable('shop')){ ?>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw(TPL_ROOT . 'common/cart.html.php');?>

<?php } ?>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw(TPL_ROOT . 'common/log.html.php');?>



<?php $baseCustom=$this->var['baseCustom'] = isset($control->config->template->custom) ? json_decode($control->config->template->custom, true) : array();?>

<?php if(!empty($baseCustom["CHANZHI_TEMPLATE"]["CHANZHI_THEME"]['js'])){ ?>

<?php echo js::execute($baseCustom["$template"]["$theme"]['js']); ?>

<?php } ?>

</body>
</html>
