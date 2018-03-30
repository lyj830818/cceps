{if(!defined("RUN_MODE"))} {!die()} {/if}

{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'header')}

<link href='/r376.mdemo.yz168.cc/cdn.yz168.cc/PageCss-list.css' type='text/css' rel='stylesheet'/>
<!--<link href='/r376.mdemo.yz168.cc/cdn.yz168.cc/PageCss.css' type='text/css' rel='stylesheet'/>-->
<link rel="stylesheet" type="text/css" href="/r376.mdemo.yz168.cc/cdn.yz168.cc/skinp/R376/skinsrc/styles/style.css"/>

<script src="/r376.mdemo.yz168.cc/cdn.yz168.cc/PageJs.js"></script>
<script src="/r376.mdemo.yz168.cc/skinp/modules/ModuleNavGiant/menu.js"></script>
<script src="/r376.mdemo.yz168.cc/skinp/modules/ModuleGridGiant/modulegrid.js"></script>
<script src="/skinp/modules/ModuleGridGiant/modulegrid.js"></script>
<script>
    loadStyleSheet('/r376.mdemo.yz168.cc/share/jquery-ui-css/ui-lightness/jquery-ui-1.10.2.custom.min.css',CanDesign != 'True'); //非编辑模式下延时加载
</script>

<script>
    changeFontSize($('#module_9291524'));
    initModuleNavGiant("9291532", "103");
    initGridGiant("9291414", {isFloat: "0"});
</script>


{$path=array_keys($category->pathNames)}
{!js::set('path', $path)}
{!js::set('categoryID', $category->id)}
{!js::set('pageLayout', $control->block->getLayoutScope('article_browse', $category->id))}
{*$common->printPositionBar($category)*}
{if(isset($articleList))}
  <script>{!echo "place" . md5(time()). "='" . $config->idListPlaceHolder . $articleList . $config->idListPlaceHolder . "';"}</script>
{else}
  <script>{!echo "place" . md5(time()) . "='" . $config->idListPlaceHolder . '' . $config->idListPlaceHolder . "';"}</script>
{/if}


<div id='BodyContainer' class='BodyContainer'>
    <div id='BodyZoneContainer' class='BodyZoneContainer ZoneContainer clearfix'>
        <div id='BodyMain1Zone' ismodulecontainer='true'
             class='BodyMain1Zone ModuleContainer BodyMain1Zone clearfix' style='width:100%;'>

            <div class="ModuleItem  StaticModule " wo="984" id="module_9298870">
                <div class="ModuleGridGiant layout-101 layout-color- module_9298870 clearfix">
                    <!-- 主体 -->
                    <div class='BodyCenter BodyCenter9298870 clearfix'>
                        <div class='ModuleGridContainer  ModuleGridContainer9298870' gridswidthmode='2'>
                            <div class='row ModuleSubContainer'>
                                <div class="gridBgVideo noBgVideo">
                                    <video src="" class="bgVideo" autoplay="autoplay" loop="loop"></video>
                                    <div class="bgVideoMask"></div>
                                </div>
                                <div id='Sub9298870_1'
                                     class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-12 col-md-12 col-lg-12'
                                     positiontype='2' ismodulecontainer='true'>
                                    <!--                                    标题start-->
                                    <div class="ModuleItem  StaticModule " wo="984" id="module_9299061">
                                        <div class="ModuleImageTextGiant layout-101 layout-color- module_9299061 clearfix">
                                            <!-- 主体 -->
                                            <div class='BodyCenter BodyCenter9299061 clearfix'>
                                                <div class="imageTextGiant-Container imageTextContainer clearfix"
                                                     hasresponsive="1" autohide="0" hideheight="150"
                                                     hidewidth="760">
                                                    <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                        <p style="text-align: center; line-height: normal;"><strong><span
                                                                        style="font-size: 26px;">
<!--                                                                    <span style="font-family: 微软雅黑; color: rgb(241, 2, 21);">企业</span>-->
                                                                    <span style="font-family: 微软雅黑;">{$title}</span></span></strong>
                                                        </p>
                                                        <p style="text-align: center; line-height: normal;"><span
                                                                    style="font-family: 微软雅黑; color: rgb(191, 191, 191); font-size: 24px;">—</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <script>
                                                    changeFontSize($('#module_9299061'));
                                                </script>
                                            </div>
                                        </div>

                                    </div>
                                    <!--                                    标题 end-->
                                    <!--                                    列表 start-->
                                    <div class="ModuleItem  " id="module_9299059">
                                        <div class="ModuleNewsListGiant layout-107 layout-color-red module_9299059 clearfix">
                                            <!-- 主体 -->
                                            <div class='BodyCenter BodyCenter9299059 clearfix'>
                                                <div>
                                                    <ul class="news-container clearfix">
                                                        {foreach($articles as $article)}
                                                        {$stick = isset($sticks[$article->id]) ? true : false}
                                                        {$url = inlink('view', "id=$article->id", "category={{$article->category->alias}}&name=$article->alias")}
                                                        <li class="news-item clearfix">
                                                            <a href="{$url}" target='_blank' class="clearfix">
                                                                <div class="news-time ">
                                                                    <time>{!echo substr($article->stickTime,5,5)}</time>
                                                                    <div class="news-icon"><span></span>
                                                                    </div>
                                                                </div>
                                                                <div class="news-con ">
                                                                    <p class="news-title">
                                                                        {$article->title}
                                                                    </p>
                                                                    <p class="news-desc layout-107-news-desc">
                                                                        {$article->summary}                                                                </div>
                                                                <div class="news-img ">
                                                                    <img src="{$control->loadModel('file')->printFileURL($article->image->primary, 'largeURL')}"
                                                                         alt="" title="" class="t-img">
                                                                </div>
                                                            </a>
                                                        </li>
                                                        {/foreach}
                                                    </ul>

                                                </div>
                                                <script type="text/javascript"
                                                        src="/r376.mdemo.yz168.cc/cdn.yz168.cc/scripts/MultiEllipsis.js"></script>
                                                <script>
                                                    $(window).resize(function () {
                                                        window['initFunc9299059'] = function () {
                                                            new MultiEllipsis({
                                                                "targetCls": '.layout-107-news-desc',
                                                                "limitLineNumber": 3,
                                                                "isCharLimit": false
                                                            });
//        if(window.innerWidth <992){
//            new MultiEllipsis({ "targetCls" : '.layout-107-news-desc', "limitLineNumber":3, "isCharLimit": false });
//        }
                                                        };
                                                        window['initFunc9299059']();
                                                    })
                                                </script>
                                                <script type="text/javascript"
                                                        src="/r376.mdemo.yz168.cc/cdn.yz168.cc/scripts/jquery.VMiddleImg.js"></script>
                                                <script type="text/javascript">
                                                    $(".ModuleNewsListGiant.layout-107 .news-img .t-img").VMiddleImg();
                                                </script>
                                            </div>
                                        </div>

                                    </div>
                                    <!--                                    列表 end-->

                                </div>
                                <div class='clearfix visible-lg'></div>
                                <div class='clearfix visible-md'></div>
                                <div class='clearfix visible-sm'></div>
                                <div class='clearfix visible-xs'></div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            addScript('/skinp/modules/ModuleGridGiant/modulegrid.js', function () {
                                initGridGiant("9298870", {isFloat: "0"});
                            });
                        </script>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer')}
