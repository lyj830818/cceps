<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>


<?php $moduleName=$this->var['moduleName'] = isset($lang->$module->common)  ? $lang->$module->common  : $module;?>

<?php $methodName=$this->var['methodName'] = isset($lang->$module->$method) ? $lang->$module->$method : $method;?>

<?php $methodName=$this->var['methodName'] = is_object($methodName) ? $methodName->common : $methodName;?>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw(TPL_ROOT . 'common/header.lite.html.php');?>

<script>
$(function()
{
    var $icon = $('.alert-deny > .icon');
    $('.alert-deny').on('mouseenter', '.actions .btn', function()
    {
        $icon.removeClass('icon-frown').addClass('icon-smile');
    }).on('mouseleave', '.actions .btn', function()
    {
       $icon.removeClass('icon-smile').addClass('icon-frown');
    });
});
</script>
<style>
.alert.with-icon > .icon, .alert.with-icon > .icon + .content {padding: 10px 20px 20px;}
.alert.with-icon > .icon {padding-left: 35px;}
.alert-deny {max-width: 500px; margin: 8% auto; padding: 0; background-color: #FFF; border: 1px solid #DDD; box-shadow: 0px 2px 20px rgba(0, 0, 0, 0.2); border-radius: 6px;}
.btn-link {border-color: none!important}
</style>
<div class='container w-200px'>
  <div class='alert with-icon alert-deny'>
    <i class='icon-frown icon'></i>
    <div class='content'>
      <?php if(commonModel::isAvailable($module)){ ?>

      <p><?php printf($lang->user->errorDeny, $moduleName, $methodName); ?></p>
      <?php }else{ ?>

      <p><?php printf($lang->user->noModuleDeny, $moduleName); ?></p>
      <?php } ?>

      <div class='actions'>
      <?php if($refererBeforeDeny){ ?>

<?php echo html::a(helper::safe64Decode($refererBeforeDeny), $lang->user->goback, "class='btn btn-primary'"); ?>

<?php } ?>

      <?php echo html::a($control->createLink($config->default->module), $lang->index->common, "class='btn'"); ?>

      <?php if(commonModel::isAvailable($module) and $control->app->user->account == 'guest'){ ?>

<?php echo html::a($control->createLink('user', 'register'), $lang->user->register->common, "class='btn btn-link'"); ?>

<?php } ?>

      <?php if(commonModel::isAvailable($module)){ ?>

<?php echo html::a($control->createLink('user', 'logout', "referer=" . helper::safe64Encode($denyPage)), $lang->user->relogin, "class='btn btn-link'"); ?>

<?php } ?>

      </div>
    </div>
  </div>
</div>
</body>
</html>
