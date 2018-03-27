<?php if(!class_exists('raintpl')){exit;}?><?php if(!defined("RUN_MODE")){ ?>

<?php echo die(); ?>

<?php } ?>

<?php if($extView = $control->getExtViewFile(TPL_ROOT . 'common/header.lite.html.php')){ ?>

<?php $tpl = new RainTPL;$tpl->assign($this->var);$tpl->draw($extView);?>

<?php return helper::cd(); ?>

<?php } ?>

<?php $templateName=$this->var['templateName']       = CHANZHI_TEMPLATE;?>

<?php $themeName=$this->var['themeName']          = CHANZHI_THEME;?>

<?php $templateRoot=$this->var['templateRoot']       = TPL_ROOT;?>

<?php $templateThemeRoot=$this->var['templateThemeRoot']  = "{$config->webRoot}theme/mobile/";?>

<?php $templateCommonRoot=$this->var['templateCommonRoot'] = "{$templateThemeRoot}common/";?>

<?php $thisModuleName=$this->var['thisModuleName']     = $app->getModuleName();?>

<?php $thisMethodName=$this->var['thisMethodName']     = $app->getMethodName();?>

<?php $thisModuleName=$this->var['thisModuleName']     = $app->getModuleName();?>

<?php $thisMethodName=$this->var['thisMethodName']     = $app->getMethodName();?>

<!DOCTYPE html>
<html xmlns:wb="http://open.weibo.com/wb" lang='<?php echo $app->getClientLang();?>' class='m-<?php echo $thisModuleName;?> m-<?php echo $thisModuleName;?>-<?php echo $thisMethodName;?>'>
<head profile="http://www.w3.org/2005/10/profile">
  <meta charset="utf-8">
  <meta http-equiv="Cache-Control"  content="no-transform">
  <meta name="Generator" content="<?php echo 'chanzhi' . $control->config->version . ' www.chanzhi.org'; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <?php if(isset($desktopURL)){ ?>

    <link rel="alternate" href="<?php echo $sysURL . $desktopURL; ?>" >
  <?php } ?>

  <?php if(isset($sourceURL)){ ?>

    <link rel="canonical" href="<?php echo $sysURL . $sourceURL; ?>" >
  <?php }elseif(isset($canonicalURL)){ ?>

    <link rel="canonical" href="<?php echo $sysURL . $canonicalURL; ?>" >
  <?php } ?>

  <?php if($thisModuleName == 'user' and $thisMethodName == 'deny'){ ?>

    <meta http-equiv='refresh' content="5;url='<?php echo helper::createLink('index'); ?>'">
  <?php } ?>

  <?php if(!isset($title)){ ?>

<?php $title=$this->var['title']    = '';?>

<?php } ?>

  <?php if(!empty($title)){ ?>

<?php $title=$this->var['title']   .= $lang->minus;?>

<?php } ?>

  <?php if(empty($keywords)){ ?>

<?php $keywords=$this->var['keywords'] = $config->site->keywords;?>

<?php } ?>

  <?php if(empty($desc)){ ?>

<?php $desc=$this->var['desc']     = $config->site->desc;?>

<?php } ?>


  <?php echo html::title($title . $config->site->name); ?>

  <?php echo html::meta('keywords',    strip_tags($keywords)); ?>

  <?php echo html::meta('description', strip_tags($desc)); ?>

  <?php if(isset($control->config->site->meta)){ ?>

<?php echo $control->config->site->meta;?>

<?php } ?>


  <?php echo js::exportConfigVars(); ?>

  <?php echo js::set('lang', $lang->js); ?>

  <?php echo js::set('theme', array('template' => $templateName, 'theme' => $themeName, 'device' => $control->app->clientDevice)); ?>

  <?php if($config->debug){ ?>

    <?php echo js::import($templateCommonRoot . 'js/mzui.all.min.js'); ?>

    <?php echo js::import($templateCommonRoot . 'js/chanzhi.js'); ?>

    <?php echo css::import($templateCommonRoot . 'css/mzui.min.css'); ?>

  <?php }else{ ?>

    <?php echo js::import($templateCommonRoot . 'js/mzui.all.min.js'); ?>

    <?php echo js::import($templateCommonRoot . 'js/chanzhi.js'); ?>

    <?php echo css::import($templateCommonRoot . 'css/mzui.min.css'); ?>

<?php } ?>


  
  <?php $customCssFile=$this->var['customCssFile'] = $control->loadModel('ui')->getCustomCssFile(CHANZHI_TEMPLATE, CHANZHI_THEME);?>

  <?php if(file_exists($customCssFile)){ ?>

<?php echo css::import($control->ui->getThemeCssUrl(CHANZHI_TEMPLATE, CHANZHI_THEME), "id='themeStyle'"); ?>

<?php } ?>


  <?php if(isset($pageCSS)){ ?>

<?php echo css::internal($pageCSS); ?>

<?php } ?>


  <?php if(!isset($control->config->site->favicon) and file_exists($control->app->getWwwRoot() . 'favicon.ico')){ ?>

<?php echo html::icon($webRoot . 'favicon.ico'); ?>

<?php } ?>

  <?php if(isset($control->config->site->favicon)){ ?>

<?php echo html::icon(json_decode($control->config->site->favicon)->webPath); ?>

<?php } ?>

  <?php echo html::rss($control->createLink('rss', 'index', '', '', 'xml'), $config->site->name); ?>

  <?php if(!empty($config->oauth->sina)){ ?>

<?php $sina=$this->var['sina'] = json_decode($config->oauth->sina);?>

<?php } ?>

  <?php if(!empty($config->oauth->qq)){ ?>

<?php $qq=$this->var['qq']   = json_decode($config->oauth->qq);?>

<?php } ?>

  <?php if(!empty($sina->verification)){ ?>

<?php echo $sina->verification;?>

<?php } ?>

  <?php if(!empty($qq->verification)){ ?>

<?php echo $qq->verification;?>

<?php } ?>

  <?php if(!empty($sina->widget)){ ?>

<?php echo js::import('https://tjs.sjs.sinajs.cn/open/api/js/wb.js'); ?>

<?php } ?>


<?php echo $control->block->printRegion($layouts, 'all', 'header');?>

</head>
<?php $top=$this->var['top'] = false;?>

<?php foreach($layouts as $blocks): ?>

  <?php if(isset($blocks['top'])){ ?>

  <?php foreach($blocks['top'] as $block): ?>

    <?php if($block->type == 'header'){ ?>

<?php $top=$this->var['top'] = true;?>

<?php } ?>

  <?php endforeach; ?>

<?php } ?>

<?php endforeach; ?>


<?php if($top){ ?>

  <body class='with-appbar-top with-appbar-bottom with-appnav'>
<?php }else{ ?>

  <body class='with-appbar-bottom'>
<?php } ?>

