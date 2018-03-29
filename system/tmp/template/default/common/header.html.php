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
function initModuleNavGiant(moduleId,layout){
	//去掉有的没的遮罩层
	$('.mask-layermask').remove()
    if(!window.YZ){
		var YZ={menuNavs:function(){}};
	}
	YZ.menuNavs = function(moduleId){
		this.layout = layout;
		this.moduleId = moduleId;
		this.navContentBox=$("#module_"+moduleId+" .main-nav-content");
		this.moveMenuRight=$('#module_'+moduleId+' .main-nav-content .moveMenuRight');
		this.moveMenuLeft=$('#module_'+moduleId+' .main-nav-content .moveMenuLeft');
		this.blankSolve=$('#module_'+moduleId+' .main-nav-content .blank-solve');
		this.aroundMune=$('#module_'+moduleId+' .main-nav-content .aroundMune');
		this.hamburger = $('#module_'+moduleId+' .main-nav-content .openbtnNav');
		this.init();
	}
	YZ.menuNavs.prototype={
		constructor:YZ.menuNavs,
		init:function(){
			if($.inArray(this.layout,['113','115'])>-1){
				if($('#module_'+this.moduleId).data('already')) return false;
				var blankSolve = this.blankSolve.clone(true);
				var hamburger = this.hamburger.clone(true);
				$('#module_'+this.moduleId).addClass('hidden').data('already',true);
				$('body').append(blankSolve).append(hamburger)
				blankSolve.addClass('ModuleNavGiant layout-'+this.layout+' clone').attr('id','clone_module_'+this.moduleId).removeAttr('style');
				hamburger.addClass('ModuleNavGiant layout-'+this.layout+' clone').fadeToggle(500).attr('id','cloneBtn_module_'+this.moduleId);
			}else{
				this.calculateWidth();
			}
		},
		widthAll:0,
		calculateWidth:function(){
			var _this=this;
			 var parentWidth=_this.navContentBox.width();
			 var itemWidth=_this.blankSolve.width();
			 if(parentWidth>itemWidth){
			 	_this.aroundMune.removeClass('active');
			 	return false;
			 };
			_this.aroundMune.addClass('active');
			_this.blankSolve.find('div.main-nav-item-group').each(function(i,v){
			    _this.widthAll += v.offsetWidth;
			});
			_this.widthAll =_this.widthAll+50;

	        var minWidth=parentWidth - _this.widthAll;
			_this.blankSolve.css('width',_this.widthAll+'px');
			_this.widthAll=0;
			 var leftWidthWai =parseFloat(_this.blankSolve.css('left'));
			 if(Math.abs(minWidth)-Math.abs(leftWidthWai) > 0 ){
			 	_this.moveMenuRight.show();
			 }
	        _this.moveMenuRight.off().on('click',function(e){
	        	 e.stopPropagation();
	             e.preventDefault();
	        	   _this.moveMenuLeft.show();
	          	   var leftWidth =parseFloat(_this.blankSolve.css('left'));
	          	   if(minWidth < leftWidth){
	                  if((Math.abs(minWidth)-Math.abs(leftWidth)) <= 300){
	                  	_this.blankSolve.css('left', minWidth+'px');
	                  	_this.moveMenuRight.hide();
	                  	return false;
	                  }
	                  _this.moveMenuRight.show();
	                  _this.blankSolve.css('left', leftWidth-300+'px');
	          	   }
	        });
			_this.moveMenuLeft.off().on('click',function(e){
				 e.stopPropagation();
	             e.preventDefault();
				  _this.moveMenuRight.show();
			       var leftWidth =parseFloat(_this.blankSolve.css('left'));
			      if(leftWidth<0){
			      	if(Math.abs(leftWidth) <=300){
	                  _this.blankSolve.css('left', 0+'px');
	                  _this.moveMenuLeft.hide();
	                  return false;
			      	}
			      	 _this.moveMenuLeft.show();
			        _this.blankSolve.css('left', leftWidth+300+'px');
			      };
	        });
		}
	}
	YZ.menuExample = new YZ.menuNavs(moduleId);
	if($("#module_"+moduleId+" .main-nav-item").length == 0){
		$("#module_"+moduleId+" .BodyCenter").html('<div style="font-size: 16px;line-height: 1;text-align: center;background-color: #fff;color: #000;padding: 7px;">暂无内容，请先添加或选择导航</div>');
	}
	if($.inArray(this.layout,['113','115']) === -1){
		$(window).off('resize.module' + moduleId).on('resize.module' + moduleId, {moduleId: moduleId}, function(evt){
			if(document.body.clientWidth>900){
	            new YZ.menuNavs(evt.data.moduleId);
	            $('#module_' + evt.data.moduleId + ' .main-nav-item.main-nav-item-hover').mouseenter();
			}		
		});
		$("#module_"+moduleId+" .main-nav-item").mouseenter(function(){
			var menu = $(this);
			// 特有样式处理
			if ($.inArray(parseInt(layout), [111, 112]) !== -1) {
				// 当前 nav 最外层容器宽度
				// var navGiantContentWidth = $(this).closest('.main-nav-content').width();
				// 整个屏幕的宽度
				var navGiantContentWidth = $(window).width();
				// 当前第一个二级菜单的高度
				var navSubItemHeight = $(this).next().find('.sub-menu-box>.sub-nav-item').eq(0).height();
				// 用于储存每个二级列表下的三级列表个数
				var threeItem = [];
				// 查找的节点
				var findClass = '.three-nav-item-group>p';
				if (parseInt(layout) === 112) {
					// layout-112 处理
					findClass = '.sub-nav-side'
				}
				// 查找每个二级列表下的三级列表个数
				$(this).next().find('.sub-menu-box').each(function () {
					threeItem.push($(this).find(findClass).length)
				});
				// 判断个数
				if (threeItem.length > 1) {
					// 获取三级列表数组的个数最大值
					var threeItemMAX = Math.max.apply(null, threeItem);
					// 给每个二级添加对应高度
					$("#module_" + moduleId + "  .main-nav-item-group").each(function () {
						var menuBoxHeight = threeItemMAX * 30 + navSubItemHeight + 8
						if (parseInt(layout) === 112) {
							// layout-112 处理
							menuBoxHeight = threeItemMAX * $(this).find('.sub-nav-side-group>li').eq(0).height() + 10;
						}
						$(this).find('.sub-menu-box').css('height', menuBoxHeight)
					})
				} else {
					// 设置圆角
					$(this).next().find('.sub-menu-box').css('border-radius', '0px 0px 16px 16px')
				}
			}
			$("#module_"+moduleId+"_subholder").hide();
			$("#module_"+moduleId+" .main-nav-item").not('[iscurrent=1]').removeClass("main-nav-item-hover");
			var menuWidth = menu.outerWidth();
			if(menu.find('span').length > 0) menuWidth = menu.find('span').outerWidth();
			var css = {"left": $(menu)[0].offsetLeft + "px","width":menuWidth};
			if($(menu).attr('iscurrent') == '1'){
				if($("#navBorderTop"+moduleId).length > 0 && $("#navBorderTop_Clone"+moduleId).length == 0){
					var clone = $("#navBorderTop"+moduleId).clone();
					clone.attr('id',"navBorderTop_Clone"+moduleId);
					clone.css({'display':'block','left':$("#navBorderTop"+moduleId).css('left'),'top':$("#navBorderTop"+moduleId).css('top')});
					clone.prependTo($("#navBorderTop"+moduleId).parent());
					$("#navBorderTop_Clone"+moduleId).css(css);
				}
				$("#navBorderTop_Clone"+moduleId).css(css);
			}
			if(window['menu_leave_' + moduleId]) clearTimeout(window['menu_leave_' + moduleId]);
			$(menu).addClass("main-nav-item-hover");
			$("#navBorderTop"+moduleId).css({"display":"block"});
			$("#navBorderTop"+moduleId).stop().animate(css, 200);
			if(layout == "106"){
				$("#module_"+moduleId+" .main-nav-item").each(function(){
					if($(this).attr('iscurrent') != '1')$(this).find('.l').removeClass('add');
				});
				$(menu).find('.l').addClass('add');
			};
			setTimeout(function(){
				if(layout == "108"){
					  $(".sub-nav-item-group.navLayout108").find('a').width(menu.innerWidth());
				}
				$(".sub-nav-item-group").on("mouseenter",function(){
					if(window['menu_leave_' + moduleId]) clearTimeout(window['menu_leave_' + moduleId]);
					$("#module_"+moduleId+" .main-nav-item").each(function(){
					    if($(this).attr('iscurrent') != '1')$(this).find('.l').removeClass('add');
					});
					$(menu).find('.l').addClass('add');
				}).on("mouseleave",function(){

					if($(menu).attr('iscurrent') == '1') return;
					$(menu).removeClass("main-nav-item-hover");
					// if(layout == "106"){
						$("#module_"+moduleId+" .main-nav-item").each(function(){
					       if($(this).attr('iscurrent') != '1')$(this).find('.l').removeClass('add');;
				        });
				      
					// }
					$("#navBorderTop"+moduleId).css({"display":"none"});
				});
			},50);
		}).mouseleave(function(){
			var menu = $(this);
			if($(menu).attr('iscurrent') == '1') return;
			window['menu_leave_' + moduleId] = setTimeout(function(){
				$(menu).removeClass("main-nav-item-hover");
				$("#navBorderTop"+moduleId).css({"display":"none"});
			},100);
			$("#module_"+moduleId+" .main-nav-item").each(function(){
				if($(this).attr('iscurrent') != '1')$(this).find('.l').removeClass('add');;
			});
		});
	}
	var curmenu = null;
	var re_nav = new RegExp('^.*' + location.host, 'i');
    $('.main-nav-item,.sub-nav-item').each(function () {
    	var menuHref = '';
    	if(/\?.*c=.+/.test($(this).prop('href'))){
    		menuHref = $(this).prop('href');
    	}else{
    		menuHref = $(this).prop('href').replace(/\?.*$/, '').replace(/\/*$/, '')
    	}
        var homeUrl = location.protocol + "//" + location.hostname.replace(/\/*$/, '');
        var homeUrlArr = [];
        homeUrlArr.push(homeUrl);
        homeUrlArr.push(homeUrl + "/index");
        homeUrlArr.push(homeUrl + "/home/index");
        homeUrlArr.push(homeUrl + "/" + getCookie('Lang'));
        homeUrlArr.push(homeUrl + "/index.php");
        homeUrlArr.push(homeUrl + "/home/index.php");
        homeUrlArr.push(homeUrl + "/" + getCookie('Lang') + "/index.php");
        var isMatch = false;
        if ($.inArray(menuHref, homeUrlArr) > -1) {
            if ($.inArray(location.href.replace(/\?.*$/, '').replace(/\/*$/, ''), homeUrlArr) > -1) {
                isMatch = true;
            }
        } else if (location.href.indexOf($(this).prop('href')) > -1 && location.href.replace(/(\?|#).*$/, '') == $(this).prop('href').replace(/(\?|#).*$/, '') && location.pathname.indexOf('-') == $(this).prop('href').replace(re_nav, '').indexOf('-')) {
            isMatch = true;
        }
        if (isMatch) {
            if ($(this).hasClass('main-nav-item')) {
                curmenu = $(this);
            } else if ($(this).hasClass('sub-nav-item')) {
                curmenu = $(this).closest('.main-nav-item-group').find(".main-nav-item");
            }
        }
    });
    if($.inArray(this.layout,['113','115']) === -1){
    	if(curmenu != null){
			curmenu.attr('iscurrent','1');
			curmenu.trigger("mouseenter");
		}
    }
	//如果是113模块
	YZ.hamburgerNav = function(moduleId,layout) {
		this.moduleId = moduleId;
		this.trigger = $("#cloneBtn_module_"+moduleId);
		this.page = $("#clone_module_"+moduleId);
		YZ.menuNavs.call(this,moduleId,layout);
	}
	YZ.hamburgerNav.prototype = {
		constructor:YZ.hamburgerNav,
		init:function(){
			loadStyleSheet('/share/jquery.mCustomScrollbar.css');
			addScript('/share/jquery.mCustomScrollbar.min.js',function(){
				$('.ModuleNavGiant.layout-113 .mCustomScrollbar,.ModuleNavGiant.layout-113.mCustomScrollbar').mCustomScrollbar({
					theme:"minimal-dark",
					contentTouchScroll:true,
					scrollInertia: 200,
					mouseWheel:true,					
					documentTouchScroll:false
				});
			});

			this.trigger.off().on('click',function(){
				var marginTop = (window.innerHeight - $('#clone_module_'+moduleId).find('.mCS_no_scrollbar_y .main-nav-item-group').height())/2 - 80;
				$('#clone_module_'+moduleId).toggleClass('navbar-inverse').find('.mCS_no_scrollbar_y .main-nav-item-group').css('margin',marginTop+'px'+' '+'0');
				if($('.mask-layermask'+moduleId).length<=0){
					var mask = $('<div class="mask-layermask hidden mask-layermask'+moduleId+'" style="height: 100%; width: 100%; position: fixed; top: 0px; left: 0px; z-index:998;background: rgba(0, 0, 0, 0.5);"></div>')
					mask.appendTo('body')
				}
				var speed = 0;
				if($(this).hasClass('is-closed')){
					$('.mask-layermask'+moduleId).removeClass('hidden');
					speed = 400;
				}else {
					$('.mask-layermask'+moduleId).addClass('hidden');
				}
				$(this).stop().delay(speed).queue(function(){
					$(this).toggleClass('is-open').toggleClass('is-closed').dequeue();
				});
				$('body').toggleClass('fixed-top');
			}).on('mouseenter',function(){
				$('.onSelected').removeClass('onSelected');
				$('#module_'+moduleId).addClass('onSelected').trigger('mouseenter','init');
				$('#moduleHelper').find('.ItemAnimate').css('display','none').parent().find('.ItemHidden').css('display','none');
				if($(this).hasClass('fadeInRight') && (parseInt($(this).css('margin-right')) < 60 || parseInt($(this).css('margin-top')) < 36)){
					if(parseInt($(this).css('margin-top')) < 36){
						$('#moduleHelper').show().position({of: $(this), my:'right top',at: 'left top', collision: "none"});
						return;
					}
					$('#moduleHelper').show().position({of: $(this), my:'right top',at: 'left top-36', collision: "none"});
				}else if($(this).hasClass('fadeInLeft') && (parseInt($(this).css('margin-left')) < 60 || parseInt($(this).css('margin-top')) < 36)){
					if(parseInt($(this).css('margin-top')) < 36){
						$('#moduleHelper').show().position({of: $(this), my:'left top',at: 'right top', collision: "none"});
						return;
					}
					$('#moduleHelper').show().position({of: $(this), my:'left top',at: 'left top-36', collision: "none"});
				}else{
					$('#moduleHelper').show().position({of: $(this), my:'center top',at: 'center top-36', collision: "none"});
				}
				
			});
			this.page.find('.first-nav').off().on('mouseenter',function(){
				var marginTop = (window.innerHeight - $(this).find('.mCS_no_scrollbar_y ul').height())/2;
				$(this).find('.mCS_no_scrollbar_y ul').css('margin',(marginTop-30)+'px 0px '+(marginTop+35)+'px 0');
			});
			this.page.find('.main-nav-item').off('touchstart').on('touchstart',function(e) {
				if(!$(e.target).hasClass('arrow')){$(this).next().css('width','0px');}
			});
			this.page.find('.arrow').off('touchstart').on('touchstart',function(e){
				$(this).parent().next().attr('style','overflow: visible;')
			});
			$('#module_'+moduleId).on('remove',{that:this}, function(e){
				e.data.that.page.off().remove();
				e.data.that.trigger.off().remove();
				e.data.that = null;
				$('.ModuleNavGiant.layout-113 .mCustomScrollbar,.ModuleNavGiant.layout-113.mCustomScrollbar').mCustomScrollbar("destroy");
				$('.mask-layermask').remove();
			})
		}
	}
	YZ.fullScreenNav = function(moduleId,layout) {
		this.layout = layout;
		this.moduleId = moduleId;
		this.page = $("#clone_module_"+ this.moduleId);
		this.trigger = $("#cloneBtn_module_"+ this.moduleId);
		YZ.menuNavs.call(this,moduleId,layout);
	}
	YZ.fullScreenNav.prototype = {
		constructor:YZ.fullScreenNav,
		init:function(){
			if(this.layout != 115){
				return YZ.fullScreenNav = null;
			}
			// 补成九宫格
			var length = this.page.find('.main-nav-item-group').length;
			for (var i = 9; i > length; i--) {
				this.page.append('<div class="main-nav-item-group"></div>');
			}
			// 给菜单页面添加移入移出动画效果
			this.page.find('.main-nav-item-group').off().on('mouseenter', enterShow).on('mouseleave', leaveHide);
			this.page.on('touchmove', function(){
				return false;
			})
			this.trigger.on('touchmove', function(){
				return false;
			})

			function enterShow(){
				var sUserAgent = navigator.userAgent.toLowerCase();  
        		var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";//ipad 
				if(bIsIpad){
					return;
				}
				$(this).find('.sub-nav-item-group').clearQueue().css('height','auto');
				var height = $(this).find('.sub-nav-item-group').height();
				$(this).find('.nav-item-center span').css('display', 'none');
				$(this).find('.nav-item-center .sub-nav-item-group a').css('display', 'block');
				var heightAfter = $(this).find('.sub-nav-item-group').height();
				$(this).find('.sub-nav-item-group').css('height',height);
				$(this).find('.sub-nav-item-group').stop().animate({'height':heightAfter+'px'}).queue(function(){
					$(this).css('height','auto').dequeue();
				});
			}
			function leaveHide(){
				var sUserAgent = navigator.userAgent.toLowerCase();
        		var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";//ipad 
				if(bIsIpad){
					return;
				}
				$(this).find('.sub-nav-item-group').clearQueue().css('height','auto');
				var height = $(this).find('.sub-nav-item-group').height();
				$(this).find('.nav-item-center span').css('display', 'block');
				$(this).find('.nav-item-center .sub-nav-item-group a').css('display', 'none');
				var heightAfter = $(this).find('.sub-nav-item-group').height();
				$(this).find('.sub-nav-item-group').css('height',height);
				$(this).find('.sub-nav-item-group').stop().animate({'height':heightAfter+'px'}).queue(function(){
					$(this).css('height','auto').dequeue();
				});
			}

			var that = this;
			// 给菜单按钮添加点击事件
			this.trigger.off().on('click', function(){
				that.page.toggleClass('cur');
				$(this).toggleClass('cur');
			}).on('touchstart',function(){
				that.page.toggleClass('cur');
				$(this).toggleClass('cur');
				return false;
			}).on('mouseenter', function(){
				if(!$('#moduleHelper').length){
					return;
				}
				$('.onSelected').removeClass('onSelected');
				$('#module_'+that.moduleId).addClass('onSelected').trigger('mouseenter','init');
				$('#moduleHelper').find('.ItemAnimate').css('display','none').parent().find('.ItemHidden').css('display','none');
				if($(this).hasClass('autoRight') && (parseInt($(this).css('margin-right')) < 60 || parseInt($(this).css('margin-top')) < 36)){
					if(parseInt($(this).css('margin-top')) < 36){
						$('#moduleHelper').show().position({of: $(this), my:'right top',at: 'right top', collision: "none"});
						return;
					}
					$('#moduleHelper').show().position({of: $(this), my:'right top',at: 'right top-36', collision: "none"});
				}else if($(this).hasClass('autoLeft') && (parseInt($(this).css('margin-left')) < 60 || parseInt($(this).css('margin-top')) < 36)){
					if(parseInt($(this).css('margin-top')) < 36){
						$('#moduleHelper').show().position({of: $(this), my:'left top',at: 'right top', collision: "none"});
						return;
					}
					$('#moduleHelper').show().position({of: $(this), my:'left top',at: 'right top-36', collision: "none"});
				}else{
					$('#moduleHelper').show().position({of: $(this), my:'center top',at: 'center top-36', collision: "none"});
				}      
			});
			$('#module_'+that.moduleId).on('remove', function(){
				that.page.off().remove();
				that.trigger.off().remove();
				that = null;
			})
			preventWheel();
			function preventWheel(){
				//判断浏览器
				var isIE=navigator.userAgent.match(/MSIE (\d)/i);
				isIE=isIE?isIE[1]:undefined;
				var isFF=/FireFox/i.test(navigator.userAgent);
				//获取元素
				var counter=that.page[0];
				//鼠标滚轮事件
				if(isIE<9) //传统浏览器使用MouseWheel事件
				 counter.attachEvent("onmousewheel",function(){
				  //阻止浏览器默认方法
				  return false;
				 });
				else if(!isFF) //除火狐外的现代浏览器也使用MouseWheel事件
				 counter.addEventListener("mousewheel",function(e){
				  //阻止浏览器默认方法
				  e.preventDefault();
				 },false);
				else //奇葩的火狐使用DOMMouseScroll事件
				 counter.addEventListener("DOMMouseScroll",function(e){
				  //阻止浏览器默认方法
				  e.preventDefault();
				 },false);
			}
		}
	}
	if(layout == '113'){
		YZ.NavExample = new YZ.hamburgerNav(moduleId,layout);
	}else if(layout == '115'){
		YZ.NavExample = new YZ.fullScreenNav(moduleId,layout);
	}
}


	initModuleNavGiant("9291532","103");

</script></div>
</div>

</div>
</div><div class='clearfix visible-lg'></div><div class='clearfix visible-md'></div><div class='clearfix visible-sm'></div><div class='clearfix visible-xs'></div></div></div>
<script type="text/javascript">
function initGridGiant(ModuleID,options){
	options = options || {};
	replaceVideo(ModuleID);
	$(document).ready(function() {
		if(options.isFloat == 1){
			ModuleGridFloat(ModuleID);
		}
		//有视频背景的  要根据视频高度设置分栏高度
		window['initFunc'+ModuleID] = function(){
			var bgVideo = $('#module_'+ModuleID+' .gridBgVideo');
			if(!bgVideo.hasClass('noBgVideo')){
				replaceVideo(ModuleID);
				if(bgVideo.find('.bgVideo').length > 0 && bgVideo.find('.bgVideo').attr('src')){
					//resize 的时候 视频已经加载完成了 所以 进不去canplaythrough事件
					var	videoH = bgVideo.height();
					$('#module_'+ModuleID).css({height: videoH});
					//视频加载完成之后再获取高度
					$('#module_'+ModuleID+' .gridBgVideo video.bgVideo').on('canplaythrough',function(){
						var	videoH = bgVideo.height();
						$('#module_'+ModuleID).css({height: videoH});
						$('#module_'+ModuleID).find('.ModuleGridContainer .ModuleContainer.SubContainer').css({height: videoH});
					})
					
				}else{
					$('#module_'+ModuleID).css({height: 'auto'});
				}
				
			}else{
				$('#module_'+ModuleID).css({height: 'auto'});
			}
		}
		$(window).off('resize.grid'+ModuleID).on('resize.grid'+ModuleID,function(){
			window['initFunc'+ModuleID]();
		});
		window['initFunc'+ModuleID]();
		
	});
}

//替换视频链接 
function replaceVideo(ModuleID){
	if(!$('#module_'+ModuleID+' .gridBgVideo').hasClass('noBgVideo')){
		var winWidth = $(window).width(),
			video = $('#module_'+ModuleID+' .gridBgVideo .bgVideo');
		if(winWidth <= 769){
			//手机端 使用图片背景 替换视频
			if(video.length > 0){
				var	videoSrc = video.attr('vsrc'),
					imageSrc = video.attr('imgsrc');
				$('#module_'+ModuleID+' .ModuleSubContainer').css({
					'background-image': 'url("'+imageSrc+'")',
				});
				video.attr('src','');
				$('#module_'+ModuleID+' .gridBgVideo').hide();
			}
		}else{
			if(!video.attr('src')){
				video.attr('src',video.attr('vsrc'));
			}
			$('#module_'+ModuleID+' .ModuleSubContainer').css({
					'background-image': 'none',
				});
			$('#module_'+ModuleID+' .gridBgVideo').show();
			
		}
	}
}
//分栏悬浮的操作
function ModuleGridFloat(ModuleID){
	var grid = $('#module_'+ModuleID);
	if(grid.length > 0){
		var mainOffsetTop = grid.offset().top;
        var mainHeight = grid.height();
        var winHeight = $(window).height();
        //导航的特殊处理
        var navFloat = $('#module_'+ModuleID+'.GridCanFloat .ModuleNavGiant');
        var navid = '';
        if(navFloat.length > 0){
        	navid = navFloat.closest('.ModuleItem');
        	navid = navid.attr('id');
        }
		$(document).on('scroll',function(event) {
			//不在页头 或者不能悬浮时
			if($('#HeaderZone #module_'+ModuleID).length < 1 || $('#module_'+ModuleID+' .GridCanFloat').length < 1) return false;
			//悬浮时 如果滚动页面 并且 二级菜单显示 要强制隐藏二级菜单
			if(navid != '') $('#'+navid+'.moduleNavFloatSubMenu').remove();
			var winScrollTop = $(window).scrollTop();
			if(!grid.hasClass('GridFloat') && (winScrollTop > (mainOffsetTop + mainHeight) || winScrollTop <　(mainOffsetTop - winHeight))){
				grid.addClass('GridFloat');
			}else if(grid.hasClass('GridFloat') && winScrollTop <= mainOffsetTop){
				grid.removeClass('GridFloat');
				if(grid.hasClass('StaticModule')){
					grid.css('position','static');
				}
			}
			
			
		});
	}
}
    
    initGridGiant("9291414",{isFloat:"0"});
</script>
</div>
</div>

</div>
</div>
			</div>
		</div>

  
{/if}
