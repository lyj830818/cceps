<!DOCTYPE html>
<html><!--PHP-->
<head>
	<meta http-equiv="content-type" content="text/html; charset=utf-8"/>
	<meta name='renderer' content='webkit'>
	<meta http-equiv='X-UA-Compatible' content='IE=Edge,chrome=1' >
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1,user-scalable=no"/>		<meta name="format-detection" content="telephone=no"/>	<meta name="keywords" content=""/>
	<meta name="description" content=""/>
    {if(!isset($title))}   {$title    = ''} {/if}
    {if(!empty($title))}   {$title   .= $lang->minus} {/if}
    {if(empty($keywords))} {$keywords = $config->site->keywords} {/if}
    {if(empty($desc))}     {$desc     = $config->site->desc} {/if}

    {!html::title($title . $config->site->name)}
    {!html::meta('keywords', $keywords)}
    {!html::meta('description', $desc)}
    {if(isset($config->site->meta))}{$config->site->meta}{/if}

    {!js::exportConfigVars()}

			<link rel="stylesheet" type="text/css" href="/r376.mdemo.yz168.cc/cdn.yz168.cc/scripts/swiper.animate/animate.min.css">
	<link rel="stylesheet" type="text/css" href="/r376.mdemo.yz168.cc/cdn.yz168.cc/share/bootstrap.min.css"  />
	<link rel="stylesheet" type="text/css" href="/r376.mdemo.yz168.cc/cdn.yz168.cc/share/ModuleStyleMobile.css?v=20171012"/>
		<link rel="stylesheet" type="text/css" href="/r376.mdemo.yz168.cc/cdn.yz168.cc/share/ModuleMobileNavTpl.css" />
	<link rel="stylesheet" type="text/css" href="/r376.mdemo.yz168.cc/cdn.yz168.cc/share/fontawesome/css/font-awesome.min.css" />
	<link rel="stylesheet" type="text/css" href="/r376.mdemo.yz168.cc/cdn.yz168.cc/scripts/iconfont/iconfont.css" />
	<link rel="stylesheet" type="text/css" href="/r376.mdemo.yz168.cc/cdn.yz168.cc/share/datetimepicker/jquery.datetimepicker.css"/>

	<!--[if IE 9]>
	<link rel="stylesheet" href="/r376.mdemo.yz168.cc/cdn.yz168.cc/scripts/swiper2/css/idangerous.swiper.css">
	<script type="text/javascript" src="/r376.mdemo.yz168.cc/cdn.yz168.cc/scripts/swiper2/js/idangerous.swiper.min.js"></script>
	<![endif]-->
	<link rel="stylesheet" type="text/css" href="/r376.mdemo.yz168.cc/cdn.yz168.cc/scripts/Swiper-3.4.0/css/swiper.min.css"/>
	<script type="text/javascript" src="/r376.mdemo.yz168.cc/cdn.yz168.cc/scripts/Swiper-3.4.0/js/swiper.min.js"></script>
	<script type="text/javascript" src="/r376.mdemo.yz168.cc/cdn.yz168.cc/scripts/swiper.animate/swiper.animate1.0.2.min.js"></script>

	<script>
        var SiteType = "1"; var CanDesign = "False"; var CanEditFront = 'False'; var SkinType = "3" || "2";var GridWidth = "1200px";
        var IsWeiXin = navigator.userAgent.toLowerCase().match(/MicroMessenger/i) == 'micromessenger';
	</script>

	</head>
<body id="page_310701" class="module_bg_color">
