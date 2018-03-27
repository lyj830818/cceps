<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>

<?php if(helper::isAjaxRequest()){ ?>

  <?php $templateName=$this->var['templateName']       = CHANZHI_TEMPLATE;?>

  <?php $themeName=$this->var['themeName']          = CHANZHI_THEME;?>

  <?php $templateRoot=$this->var['templateRoot']       = TPL_ROOT;?>

  <?php $templateThemeRoot=$this->var['templateThemeRoot']  = "{$templateRoot}theme/";?>

  <?php $templateCommonRoot=$this->var['templateCommonRoot'] = "{$templateThemeRoot}common/";?>

  <?php $thisModuleName=$this->var['thisModuleName']     = $control->app->getModuleName();?>

  <?php $thisMethodName=$this->var['thisMethodName']     = $control->app->getMethodName();?>

  <div class='modal-dialog'>
    <div class='modal-content'>
      <div class='modal-header'>
        <button type='button' class='close' data-dismiss='modal'><span aria-hidden='true'>×</span></button>
        <h5 class='modal-title'><?php echo !empty($title) ? $title : ''; ?></h5>
      </div>
      <div class='modal-body'>
<?php }else{ ?>

  <?php if($extView = $control->getExtViewFile(TPL_ROOT . 'common/header.html.php')){ ?>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($extView);?>

<?php return helper::cd(); ?>

<?php } ?>

  <?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('mobile', 'common', 'header.lite'));?>

  <div class='block-region region-all-top blocks' data-region='all-top'>
    <?php echo $control->block->printRegion($layouts, 'all', 'top');?>

  </div>
  <div class='block-region region-all-banner blocks' data-region='all-banner'>
    <?php echo $control->block->printRegion($layouts, 'all', 'banner');?>

  </div>
<?php } ?>

