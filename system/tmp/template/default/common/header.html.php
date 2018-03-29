{if(!defined("RUN_MODE"))} {!die()} {/if}
{if(helper::isAjaxRequest())}
  {if(isset($pageCSS))} {!echo css::internal($pageCSS)} {/if}
  <div class="modal-dialog" style="width:{!echo empty($modalWidth) ? 1000 : $modalWidth}px;">
    <div class="modal-content">
      <div class="modal-header">
        {!html::closeButton()}
        <strong class="modal-title">{if(!empty($title))} {$title} {/if}</strong>
        {if(!empty($subtitle))} <small>{$subtitle}</small> {/if}
      </div>
      <div class="modal-body">
{else}
  {if($extView = $control->getExtViewFile(TPL_ROOT . 'common/header.html.php'))}
    {include $extView}
    {@return helper::cd()}
  {/if}
  {include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'header.lite')}
  
  <div id="pagebody" class="siteStyle pageStyle container-fluid pagebody_nav pagebody_nav_1">
	<div id='freemodulehelper' style='width:1200px;margin:0 auto;height:0px;overflow:hidden;'></div>

			<div id='HeaderContainer' class='HeaderContainer'>
			<div id='HeaderZoneContainer' class='HeaderZoneContainer ZoneContainer'>
				<div id='HeaderZone' ismodulecontainer='true' class='HeaderZone ModuleContainer clearfix'><div class="ModuleItem  StaticModule mhidden-sm mhidden-xs" wo="1910" id="module_9291414"  >
<div class="ModuleGridGiant layout-101 layout-color- module_9291414 clearfix">
        <!-- 主体 -->
    <div class='BodyCenter BodyCenter9291414 clearfix'><div class='ModuleGridContainer  ModuleGridContainer9291414' gridswidthmode='2'><div class='row ModuleSubContainer'><div class="gridBgVideo noBgVideo"><video src="" class="bgVideo" autoplay="autoplay" loop="loop"></video><div class="bgVideoMask"></div> </div><div id='Sub9291414_1' class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-6 col-md-3 col-lg-3' positiontype='2' ismodulecontainer='true'><div class="ModuleItem  StaticModule " wo="300" id="module_9291524"  >
<div class="ModuleImageTextGiant layout-101 layout-color- module_9291524 clearfix">
        <!-- 主体 -->
    <div class='BodyCenter BodyCenter9291524 clearfix'><div class="imageTextGiant-Container imageTextContainer clearfix" hasresponsive="1" autohide="0" hideheight="150" hidewidth="760" >
	<div class="ModuleImageTextGiantContent ModuleImageTextContent">
		<p><strong><span style="font-size: 36px;color:#f10215;">IT</span> <span style="font-size: 36px;">Industry</span></strong></p>
	</div>
</div>
<script>
	changeFontSize($('#module_9291524'));
	</script></div>
</div>

</div>
</div><div class='clearfix visible-xs'></div><div id='Sub9291414_2' class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-6 col-md-9 col-lg-9' positiontype='2' ismodulecontainer='true'><div class="ModuleItem  StaticModule " wo="900" id="module_9291532"  >
<div class="ModuleNavGiant layout-103 layout-color-red module_9291532 clearfix">
        <!-- 主体 -->
    <div class='BodyCenter BodyCenter9291532 clearfix'><div class='main-nav-content pre_nav clearfix' AlwaysShow="0">
 <div class="aroundMune">
      <div class="moveMenuLeft iconfont icon-xiangzuojiantou" ></div>
	  <div class="moveMenuRight iconfont icon-xiangyoujiantou"></div>
 </div>
 {$topNavs = $control->loadModel('nav')->getNavs('desktop_top')}
  {$navCount = count($topNavs)}
  
 <div class="blank-solve">
	    <span class="navBorderTop" id="navBorderTop9291532"></span>
	    {$i =0}
      {foreach($topNavs as $nav1)}
		<div id="Menu_514205_9291532" class="main-nav-item-group" >
		    <a href="{$nav1->url}" target="_self" class="main-nav-item fontm"><span class="OneRow">{$nav1->title}</span></a>
		</div>
		{$i += 1}
      {/foreach}
	
	  </div>		
</div>
<script>
    addScript('/r376.mdemo.yz168.cc/skinp/modules/ModuleNavGiant/menu.js',function(){
        initModuleNavGiant("9291532","103");
    });
</script></div>
</div>

</div>
</div><div class='clearfix visible-lg'></div><div class='clearfix visible-md'></div><div class='clearfix visible-sm'></div><div class='clearfix visible-xs'></div></div></div>
<script type="text/javascript">
    addScript('/r376.mdemo.yz168.cc/skinp/modules/ModuleGridGiant/modulegrid.js',function(){
        initGridGiant("9291414",{isFloat:"0"});
    });
</script>
</div>
</div>

</div>
</div>
			</div>
		</div>

  
{/if}
