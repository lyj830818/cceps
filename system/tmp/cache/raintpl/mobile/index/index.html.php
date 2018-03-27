<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>


<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('mobile', 'common', 'header'));?>


<div id='focus'>
  <div id='focusTop' class='block-region blocks focus-top' data-region='index_index-top'>
    <?php echo $control->block->printRegion($layouts, 'index_index', 'top', false);?>

  </div>
  <div id='focusMiddle' class='block-region blocks focus-middle' data-region='index_index-middle'>
    <?php echo $control->block->printRegion($layouts, 'index_index', 'middle', false);?>

  </div>
  <div id='focusBottom' class='block-region blocks focus-bottom' data-region='index_index-bottom'>
    <?php echo $control->block->printRegion($layouts, 'index_index', 'bottom', false);?>

  </div>
</div>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($control->loadModel('ui')->getEffectViewFile('mobile', 'common', 'footer'));?>

