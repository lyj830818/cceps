<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>


<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('mobile', 'common', 'header'));?>

<div class='block-region region-top no-padding blocks' data-region='company_index-top'><?php echo $control->block->printRegion($layouts, 'company_index', 'top');?></div>
<div class='article-content' id='company'>
  <?php echo $company->content;?>

</div>
<div class='block-region region-bottom no-padding blocks' data-region='company_index-bottom'><?php echo $control->block->printRegion($layouts, 'company_index', 'bottom');?></div>
