{if(!defined("RUN_MODE"))} {!die()} {/if}

{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'header')}

<link href='/r376.mdemo.yz168.cc/cdn.yz168.cc/PageCss-view.css' type='text/css' rel='stylesheet'/>
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
            <div class="ModuleItem  StaticModule " wo="984" id="module_9298688">
                <div class="ModuleImageGiant layout-101 layout-color- module_9298688 clearfix">
                    <!-- 主体 -->
                    <div class='BodyCenter BodyCenter9298688 clearfix'><img class="image-animation"
                                                                            src="/r376.mdemo.yz168.cc/comdata/901/201711/201711102046168c4eb9.jpg"
                                                                            alt="图片展示"/>
                    </div>
                </div>

            </div>

            <div class="ModuleItem  StaticModule " wo="1912" id="module_9309911">
                <div class="ModuleGridGiant layout-101 layout-color- module_9309911 clearfix">
                    <!-- 主体 -->
                    <div class='BodyCenter BodyCenter9309911 clearfix'>
                        <div class='ModuleGridContainer  ModuleGridContainer9309911' gridswidthmode='2'>
                            <div class='row ModuleSubContainer'>
                                <div class="gridBgVideo noBgVideo">
                                    <video src="" class="bgVideo" autoplay="autoplay" loop="loop"></video>
                                    <div class="bgVideoMask"></div>
                                </div>
                                <div id='Sub9309911_1'
                                     class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-12 col-md-12 col-lg-12'
                                     positiontype='2' ismodulecontainer='true'>
                                    <div class="ModuleItem  StaticModule " wo="1200" id="module_9309910">
                                        <div class="ModuleNewsDetailGiant layout-102 layout-color- module_9309910 clearfix">
                                            <!-- 主体 -->
                                            <div class='BodyCenter BodyCenter9309910 clearfix'>
                                                <div class="news-details-item">
                                                    <input type="hidden" class="ArticleID" value="421696"/>
                                                    <div class="news-details-top">
                                                        <p class="centera news-details-title">{$article->title}</p>
                                                        <div class="centera news-details-small">
                                                            <p>
                                                                <span>发表时间：</span>
                                                                <span>{$article->stickTime}</span>
                                                            </p>
                                                            <p>
                                                                <span>关注：</span>
                                                                <span>{$article->views}</span>
                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="news-details-desc">
                                                        {$article->summary}
                                                    </div>


                                                    <section id="readMore">
                                                        <article class="news-details-content">
                                                            {$article->content}
                                                        </article>
                                                    </section>


                                                    <!--标签-->


                                                    <div class="news-details-bottom">
                                                        {@extract($prevAndNext)}
                                                        <ul class='pager pager-justify'>
                                                            {if($prev)}
                                                            <li class='previous' title='{$prev->title}'>{!html::a(inlink('view', "id=$prev->id", "category={{$category->alias}}&name={{$prev->alias}}"), '<i class="icon-arrow-left"></i> <span>上一篇：' . $prev->title . '</span>')}</li>
                                                            {else}
                                                            <li class='preious disabled'><a href='###'><i class='icon-arrow-left'></i> {!print($lang->article->none)}</a></li>
                                                            {/if}
                                                            {if($next)}
                                                            <li class='next' title='{$next->title}'>{!html::a(inlink('view', "id=$next->id", "category={{$category->alias}}&name={{$next->alias}}"), '<span>下一篇：' . $next->title . '</span> <i class="icon-arrow-right"></i>')}</li>
                                                            {else}
                                                            <li class='next disabled'><a href='###'> {!print($lang->article->none)}<i class='icon-arrow-right'></i></a></li>
                                                            {/if}
                                                        </ul>
<!--                                                        <div class="news-details-bottom-title clearfix">-->
<!--                                                            <p class="fr p-2">-->
<!--                                                                    <span><span class="next"><a-->
<!--                                                                                    href="/NewsDetail/421695.html">下一篇&nbsp;:&nbsp;未来企业的生态神经系统</a></span></span>-->
<!--                                                            </p>-->
<!--                                                        </div>-->


                                                    </div>
                                                </div>
                                                <script src="http://cdn.yz168.cc/skinp/common/mobile/js/readmore.js"></script>
                                                <script>
                                                    loadCommentList();

                                                    function loadCommentList() {
                                                        $('.news-comment').load("/index.php?c=front/NewsComment&a=showpc&ArticleID=421696");
                                                        $('.newsmobile-comment').load("/index.php?c=front/NewsComment&a=showmobile&ArticleID=421696&ShowMsgIcon=1");
                                                    }


                                                    $('.news-details-content img:eq(0)').clone().hide().prependTo('body');
                                                    changeFontSize($('#module_9309910'));

                                                    loadStyleSheet('/scripts/wookmark/css/lightgallery.min.css');
                                                    addScript('/scripts/wookmark/lightgallery.min.js', function () {
                                                        addScript('/scripts/wookmark/lg-fullscreen.min.js');
                                                        addScript('/scripts/wookmark/lg-thumbnail.min.js');
                                                        addScript('/scripts/wookmark/lg-zoom.min.js');

                                                        $('.news-details-content img').off('click').on('click', function () {
                                                            var list = [];
                                                            $('.news-details-content img').each(function () {
                                                                var obj = {
                                                                    src: $(this).prop('src'),
                                                                    thumb: $(this).prop('src'),
                                                                    subHtml: $(this).prop('alt')
                                                                };
                                                                list.push(obj);
                                                            });
                                                            $(this).lightGallery({
                                                                index: $(this).index('.news-details-content img'),
                                                                dynamic: true,
                                                                thumbnail: true,
                                                                dynamicEl: list
                                                            });
                                                        });

                                                    });


                                                    //pc的分享
                                                    $('.share-news-pc').find('.shareitem').off('click').on('click', function () {
                                                        var thisshare = $(this).attr('data-cmd');
                                                        $('.bdsharebuttonbox img[data-cmd=' + thisshare + ']').click();
                                                    })
                                                    //移动的分享
                                                    $('.share-news-mobile').click(function () {
                                                        $('.ShareIcon').click();
                                                    })

                                                    //禁止转载功能


                                                    //文章折叠

                                                </script>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class='clearfix visible-lg'></div>
                                <div class='clearfix visible-md'></div>
                                <div class='clearfix visible-sm'></div>
                                <div class='clearfix visible-xs'></div>
                            </div>
                        </div>
                        <script type="text/javascript">
                            addScript('/skinp/modules/ModuleGridGiant/modulegrid.js', function () {
                                initGridGiant("9309911", {isFloat: "0"});
                            });
                        </script>
                    </div>
                </div>

            </div>
        </div>
    </div>
</div>


{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer')}
