{if(!defined("RUN_MODE"))} {!die()} {/if}
{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'header')}

<link href='/r376.mdemo.yz168.cc/cdn.yz168.cc/PageCss.css' type='text/css' rel='stylesheet'/>
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


<div id='BodyContainer' class='BodyContainer'>
    <div id='BodyZoneContainer' class='BodyZoneContainer ZoneContainer clearfix'>
        <div id='BodyMain1Zone' ismodulecontainer='true'
             class='BodyMain1Zone ModuleContainer BodyMain1Zone clearfix' style='width:100%;'>
<!--            幻灯片 start-->
            <div class="ModuleItem  StaticModule" wo="1912" id="module_9291746">
                <div class="ModuleSlideGiant layout-104 layout-color- module_9291746 clearfix">
                    <!-- 主体 -->
                    <div class='BodyCenter BodyCenter9291746 clearfix'>
                        <div class="slidegiant-container">
                            <div class="swiper-container slideshow-1">
                                <div class="swiper-wrapper">
                                    {foreach($slides as $slide)}
                                    <div class="swiper-slide"><a href="{$slide->link}" target="_blank"><img
                                                    src="{$control->loadModel('file')->printFileURL($slide->image->primary, 'full')}" alt="" title=""
                                                    class="img-responsive"></a></div>
                                    {/foreach}
                                </div>
                                <!-- Add Pagination -->
                                <div class="swiper-pagination"></div>
                                <!-- Add Arrows -->
                                <div class="swiper-slideshow-1-next "></div>
                                <div class="swiper-slideshow-1-prev "></div>
                            </div>
                            <script>
                                //            var swiper = new Swiper('#module_9291746 .swiper-container', {
                                //                pagination: '.swiper-pagination',
                                //                nextButton: '.swiper-slideshow-1-prev ',
                                //                prevButton: '.swiper-slideshow-1-next',
                                //                slidesPerView: 1,
                                //                paginationClickable: true,
                                //                speed:1000,
                                ////                spaceBetween: 10,
                                //                autoplay:3 * 1000
                                //
                                //        });

                                (function () {
                                    function swipertwolayout104(ModuleID) {
                                        $('#module_' + ModuleID + " .slidegiant-container").addClass("fornotie")
                                        var swiper = new Swiper('#module_' + ModuleID + ' .swiper-container', {
                                            pagination: '#module_' + ModuleID + ' .swiper-pagination',
                                            nextButton: '#module_' + ModuleID + ' .swiper-slideshow-1-prev ',
                                            prevButton: '#module_' + ModuleID + ' .swiper-slideshow-1-next',
                                            slidesPerView: 1,
                                            paginationClickable: true,
                                            autoplayDisableOnInteraction: false,
                                            speed: 1 * 1000,
                                            autoplay: 3 * 1000,
                                            loop: true,
                                            loopAdditionalSlides: 2

                                        });

                                    }


                                    $(document).ready(function () {
                                        var DEFAULT_VERSION = 9;
                                        var ua = navigator.userAgent.toLowerCase();
                                        var isIE = ua.indexOf("msie") > -1;
                                        var safariVersion;
                                        if (isIE) {
                                            safariVersion = ua.match(/msie ([\d.]+)/)[1];
                                            var sa = parseInt(safariVersion);
                                            if (safariVersion <= DEFAULT_VERSION) {
                                                //ie9以下，调用swiper2
                                                $("#module_9291746 .slidegiant-container").addClass("forie")
                                                var swiper = new Swiper('#module_9291746 .swiper-container', {

                                                    loop: true,//可选选项，开启循环
                                                    speed: 1 * 1000,
                                                    autoplayDisableOnInteraction: false,
                                                    keyboardControl: true,//键盘滚动
                                                    calculateHeight: true,//自动高度
                                                    pagination: '#module_9291746 .swiper-pagination',
                                                    paginationClickable: true,//点击分页器的指示点时会发生Swiper。
                                                    autoplay: 3 * 1000,//可选选项，自动滑动
//                            onSlideChangeStart: function(){ setHeight() },
//                            onSwiperCreated: function(){ setHeight() }

                                                });

                                                $('#module_9291746 .swiper-slideshow-1-next').on('click', function (e) {
                                                    e.preventDefault()
                                                    swiper.swipePrev()
                                                })
                                                $('#module_9291746 .swiper-slideshow-1-prev').on('click', function (e) {
                                                    e.preventDefault()
                                                    swiper.swipeNext()
                                                })
                                                $(window).resize(function () {
                                                    swiper.reInit();
                                                });
                                                $('#module_9291746 .forie .swiper-container').height($(mySwiper.activeSlide()).find("img").height());

                                            } else {
                                                //ie9以上，调用swiper3
                                                swipertwolayout104('9291746')
                                            }
                                        } else {
                                            //非ie
                                            swipertwolayout104('9291746')
                                        }
                                    });
                                })()
                            </script>
                        </div>
                    </div>
                </div>

            </div>
<!--            幻灯片 end-->
<!--            幻灯片下方文字 start-->
            <div class="ModuleItem  StaticModule " wo="1912" id="module_9291712">
                <div class="ModuleGridGiant layout-101 layout-color- module_9291712 clearfix">
                    <!-- 主体 -->
                    <div class='BodyCenter BodyCenter9291712 clearfix'>
                        <div class='ModuleGridContainer  ModuleGridContainer9291712' gridswidthmode='2'>
                            <div class='row ModuleSubContainer'>
                                <div class="gridBgVideo noBgVideo">
                                    <video src="" class="bgVideo" autoplay="autoplay" loop="loop"></video>
                                    <div class="bgVideoMask"></div>
                                </div>
                                <div id='Sub9291712_1'
                                     class='ModuleContainer SubContainer ModuleGridItem     col-xs-6 col-sm-3 col-md-3 col-lg-3'
                                     positiontype='2' ismodulecontainer='true'>
                                    <div class="ModuleItem wow bounceIn StaticModule " wo="300" id="module_9291717"
                                         data-wow-duration="2.5s">
                                        <div class="ModuleImageTextGiant layout-101 layout-color- module_9291717 clearfix">
                                            <!-- 主体 -->
                                            <div class='BodyCenter BodyCenter9291717 clearfix'>
                                                <div class="imageTextGiant-Container imageTextContainer clearfix"
                                                     hasresponsive="1" autohide="0" hideheight="150"
                                                     hidewidth="760">
                                                    <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                        <p style="text-align: center;"><span
                                                                    style="color: rgb(255, 255, 255); font-size: 36px;">{$underSlidesText[0]}</span>
                                                        </p>
                                                        <p style="text-align: center;"><span
                                                                    style="color: rgb(255, 255, 255); font-size: 14px;">{$underSlidesText[1]}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <script>
                                                    changeFontSize($('#module_9291717'));
                                                </script>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div id='Sub9291712_2'
                                     class='ModuleContainer SubContainer ModuleGridItem     col-xs-6 col-sm-3 col-md-3 col-lg-3'
                                     positiontype='2' ismodulecontainer='true'>
                                    <div class="ModuleItem wow bounceIn StaticModule " wo="300" id="module_9291724"
                                         data-wow-duration="2.5s">
                                        <div class="ModuleImageTextGiant layout-101 layout-color- module_9291724 clearfix">
                                            <!-- 主体 -->
                                            <div class='BodyCenter BodyCenter9291724 clearfix'>
                                                <div class="imageTextGiant-Container imageTextContainer clearfix"
                                                     hasresponsive="1" autohide="0" hideheight="150"
                                                     hidewidth="760">
                                                    <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                        <p style="text-align: center;"><span
                                                                    style="color: rgb(255, 255, 255); font-size: 36px;">{$underSlidesText[2]}</span>
                                                        </p>
                                                        <p style="text-align: center;"><span
                                                                    style="color: rgb(255, 255, 255); font-size: 14px;">{$underSlidesText[3]}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <script>
                                                    changeFontSize($('#module_9291724'));
                                                </script>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class='clearfix visible-xs'></div>
                                <div id='Sub9291712_3'
                                     class='ModuleContainer SubContainer ModuleGridItem     col-xs-6 col-sm-3 col-md-3 col-lg-3'
                                     positiontype='2' ismodulecontainer='true'>
                                    <div class="ModuleItem wow bounceIn StaticModule " wo="300" id="module_9291725"
                                         data-wow-duration="2.5s">
                                        <div class="ModuleImageTextGiant layout-101 layout-color- module_9291725 clearfix">
                                            <!-- 主体 -->
                                            <div class='BodyCenter BodyCenter9291725 clearfix'>
                                                <div class="imageTextGiant-Container imageTextContainer clearfix"
                                                     hasresponsive="1" autohide="0" hideheight="150"
                                                     hidewidth="760">
                                                    <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                        <p style="text-align: center;"><span
                                                                    style="color: rgb(255, 255, 255); font-size: 36px;">{$underSlidesText[4]}</span>
                                                        </p>
                                                        <p style="text-align: center;"><span
                                                                    style="color: rgb(255, 255, 255); font-size: 14px;">{$underSlidesText[5]}</span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <script>
                                                    changeFontSize($('#module_9291725'));
                                                </script>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div id='Sub9291712_4'
                                     class='ModuleContainer SubContainer ModuleGridItem     col-xs-6 col-sm-3 col-md-3 col-lg-3'
                                     positiontype='2' ismodulecontainer='true'>
                                    <div class="ModuleItem wow bounceIn StaticModule " wo="300" id="module_9291726"
                                         data-wow-duration="2.5s">
                                        <div class="ModuleImageTextGiant layout-101 layout-color- module_9291726 clearfix">
                                            <!-- 主体 -->
                                            <div class='BodyCenter BodyCenter9291726 clearfix'>
                                                <div class="imageTextGiant-Container imageTextContainer clearfix"
                                                     hasresponsive="1" autohide="0" hideheight="150"
                                                     hidewidth="760">
                                                    <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                        <p style="text-align: center;"><span
                                                                    style="color: rgb(255, 255, 255); font-size: 36px;">{$underSlidesText[6]}</span>
                                                        </p>
                                                        <p style="text-align: center;"><font
                                                                    color="#ffffff">{$underSlidesText[7]}</font></p>
                                                    </div>
                                                </div>
                                                <script>
                                                    changeFontSize($('#module_9291726'));
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
                            addScript('/r376.mdemo.yz168.cc/skinp/modules/ModuleGridGiant/modulegrid.js', function () {
                                initGridGiant("9291712", {isFloat: "0"});
                            });
                        </script>
                    </div>
                </div>

            </div>
<!--        幻灯片下方文字 end-->
<!--            高端 网站  start-->
            <div class="ModuleItem  StaticModule " wo="1912" id="module_9291806">
                <div class="ModuleGridGiant layout-101 layout-color- module_9291806 clearfix">
                    <!-- 主体 -->
                    <div class='BodyCenter BodyCenter9291806 clearfix'>
                        <div class='ModuleGridContainer  ModuleGridContainer9291806' gridswidthmode='2'>
                            <div class='row ModuleSubContainer'>
                                <div class="gridBgVideo noBgVideo">
                                    <video src="" class="bgVideo" autoplay="autoplay" loop="loop"></video>
                                    <div class="bgVideoMask"></div>
                                </div>
                                <div id='Sub9291806_1'
                                     class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-6 col-md-6 col-lg-6'
                                     positiontype='2' ismodulecontainer='true'>
                                    <div class="ModuleItem wow fadeInLeft StaticModule " wo="600"
                                         id="module_9291911" data-wow-duration="2.5s">
                                        <div class="ModuleImageTextGiant layout-101 layout-color- module_9291911 clearfix">
                                            <!-- 主体 -->
                                            <div class='BodyCenter BodyCenter9291911 clearfix'>
                                                <div class="imageTextGiant-Container imageTextContainer clearfix"
                                                     hasresponsive="1" autohide="0" hideheight="150"
                                                     hidewidth="760">
                                                    <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                        <p><span style="color:#f10215;"><strong><span
                                                                            style="font-family: 微软雅黑; font-size: 30px;">{!explode(",",$hengping1->summary)[0]}</span></strong></span><strong><span
                                                                        style="font-family: 微软雅黑; font-size: 30px;">{!explode(",",$hengping1->summary)[1]}</span></strong>
                                                        </p>
                                                        <p><span
                                                                    style="font-size: 30px; color: rgb(216, 216, 216);">——</span>
                                                        </p>
                                                        {$hengping1->content}
                                                    </div>
                                                </div>
                                                <script>
                                                    changeFontSize($('#module_9291911'));
                                                </script>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class='clearfix visible-xs'></div>
                                <div id='Sub9291806_2'
                                     class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-6 col-md-6 col-lg-6'
                                     positiontype='2' ismodulecontainer='true'>
                                    <div class="ModuleItem wow fadeInRight StaticModule " wo="600"
                                         id="module_9291902" data-wow-duration="2.5s">
                                        <div class="ModuleImageGiant layout-101 layout-color- module_9291902 clearfix">
                                            <!-- 主体 -->
                                            <div class='BodyCenter BodyCenter9291902 clearfix'><img
                                                        class="image-animation"
                                                        src="{$control->loadModel('file')->printFileURL($hengping1->image->primary, 'full')}" alt="图片展示"/>
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
                            addScript('/r376.mdemo.yz168.cc/skinp/modules/ModuleGridGiant/modulegrid.js', function () {
                                initGridGiant("9291806", {isFloat: "0"});
                            });
                        </script>
                    </div>
                </div>

            </div>
<!--            高端 网站  end-->
<!--            H5响应式 网站 start-->
            <div class="ModuleItem  StaticModule" wo="1912" id="module_9291914">
                <div class="ModuleGridGiant layout-101 layout-color- module_9291914 clearfix">
                    <!-- 主体 -->
                    <div class='BodyCenter BodyCenter9291914 clearfix'>
                        <div class='ModuleGridContainer  ModuleGridContainer9291914' gridswidthmode='2'>
                            <div class='row ModuleSubContainer'>
                                <div class="gridBgVideo noBgVideo">
                                    <video src="" class="bgVideo" autoplay="autoplay" loop="loop"></video>
                                    <div class="bgVideoMask"></div>
                                </div>
                                <div id='Sub9291914_1'
                                     class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-6 col-md-6 col-lg-6'
                                     positiontype='2' ismodulecontainer='true'>
                                    <div class="ModuleItem wow fadeInLeft StaticModule " wo="600"
                                         id="module_9291917" data-wow-duration="2.5s">
                                        <div class="ModuleImageGiant layout-101 layout-color- module_9291917 clearfix">
                                            <!-- 主体 -->
                                            <div class='BodyCenter BodyCenter9291917 clearfix'><img
                                                        class="image-animation"
                                                        src="{$control->loadModel('file')->printFileURL($hengping2->image->primary, 'full')}" alt="图片展示"/>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                                <div class='clearfix visible-xs'></div>
                                <div id='Sub9291914_2'
                                     class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-6 col-md-6 col-lg-6'
                                     positiontype='2' ismodulecontainer='true'>
                                    <div class="ModuleItem wow fadeInRight StaticModule " wo="600"
                                         id="module_9291915" data-wow-duration="2.5s">
                                        <div class="ModuleImageTextGiant layout-101 layout-color- module_9291915 clearfix">
                                            <!-- 主体 -->
                                            <div class='BodyCenter BodyCenter9291915 clearfix'>
                                                <div class="imageTextGiant-Container imageTextContainer clearfix"
                                                     hasresponsive="1" autohide="0" hideheight="150"
                                                     hidewidth="760">
                                                    <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                        <p><span style="color: #f10215;"><strong><span
                                                                            style="font-family: 微软雅黑; font-size: 30px;">{!explode(",",$hengping2->summary)[0]}</span></strong></span><strong><span
                                                                        style="font-family: 微软雅黑; font-size: 30px;">{!explode(",",$hengping2->summary)[1]}</span></strong>
                                                        </p>
                                                        <p><span style="font-family: 微软雅黑; font-size: 30px;"><span
                                                                        style="color: rgb(216, 216, 216); font-size: 30px;">——</span></span>
                                                        </p>
                                                        {$hengping2->content}
                                                    </div>
                                                </div>
                                                <script>
                                                    changeFontSize($('#module_9291915'));
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
                            addScript('/r376.mdemo.yz168.cc/skinp/modules/ModuleGridGiant/modulegrid.js', function () {
                                initGridGiant("9291914", {isFloat: "0"});
                            });
                        </script>
                    </div>
                </div>

            </div>

<!--            合作伙伴 start-->
            <div class="ModuleItem  StaticModule " wo="1912" id="module_9292478">
                <div class="ModuleGridGiant layout-101 layout-color- module_9292478 clearfix">
                    <!-- 主体 -->
                    <div class='BodyCenter BodyCenter9292478 clearfix'>
                        <div class='ModuleGridContainer  ModuleGridContainer9292478' gridswidthmode='2'>
                            <div class='row ModuleSubContainer'>
                                <div class="gridBgVideo noBgVideo">
                                    <video src="" class="bgVideo" autoplay="autoplay" loop="loop"></video>
                                    <div class="bgVideoMask"></div>
                                </div>
                                <div id='Sub9292478_1'
                                     class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-12 col-md-12 col-lg-12'
                                     positiontype='2' ismodulecontainer='true'>
                                    <div class="ModuleItem wow fadeIn StaticModule " wo="1200" id="module_9292479"
                                         data-wow-duration="2.5s">
                                        <div class="ModuleImageTextGiant layout-101 layout-color- module_9292479 clearfix">
                                            <!-- 主体 -->
                                            <div class='BodyCenter BodyCenter9292479 clearfix'>
                                                <div class="imageTextGiant-Container imageTextContainer clearfix"
                                                     hasresponsive="1" autohide="0" hideheight="150"
                                                     hidewidth="760">
                                                    <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                        <p style="text-align: center; line-height: 2em;"><span
                                                                    style="font-family:微软雅黑, SimSun"><span
                                                                        style="font-size: 30px;"><span
                                                                            style="font-family: 微软雅黑, SimSun; font-size: 30px; text-align: center;">合作伙伴</span></span></span>
                                                        </p>
<!--                                                        <p style="text-align: center; line-height: 2em;"><span-->
<!--                                                                    style="font-family:微软雅黑, SimSun"><span-->
<!--                                                                        style="color: rgb(191, 191, 191);"></span></span>-->
<!--                                                        </p>-->
                                                    </div>
                                                </div>
                                                <script>
                                                    changeFontSize($('#module_9292479'));
                                                </script>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="ModuleItem wow fadeIn StaticModule " wo="1200" id="module_9293268"
                                         data-wow-duration="2.5s">
                                        <div class="ModuleSiteGalleryGiant layout-104 layout-color- module_9293268 clearfix">

                                            <div class='BodyCenter BodyCenter9293268 clearfix'>
                                                <div class="gallery-list gallery-container clearfix" layout="104"
                                                     data-expandir="1">
                                                    {foreach($partners as $partner)}
                                                    <div class="grid-item col-xs-2 col-sm-4 col-md-4 col-lg-4">
                                                        <a class="grid-cont" href="{$partner->link}" target="_blank" >
                                                            <div style="position: relative;" class="ImgCenterbox2">
                                                                <img src="{$control->loadModel('file')->printFileURL($partner->image->primary, 'full')}"
                                                                     alt="" title="" style="width: 100%" imgtitle=""
                                                                     alt="" redirecturl="" class="ImgCenter">
                                                                <div class="demo-gallery-poster">
                                                                    <img src="/r376.mdemo.yz168.cc/skinp/modules/ModuleSiteGalleryGiant/zoom.png"
                                                                         alt="" title="" style="max-width: 100%;">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    {/foreach}

                                                </div>


                                                <script>

                                                    // addScript('/r376.mdemo.yz168.cc/skinp/modules/ModuleSiteGalleryGiant/commonSiteGallery.js', function () {
                                                    //     var option = {};
                                                    //     option.IsExpandDir = "1"
                                                    //     initCommonSiteGalleryGiant("9293268", "104", option, 0);
                                                    // });

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
                            addScript('/r376.mdemo.yz168.cc/skinp/modules/ModuleGridGiant/modulegrid.js', function () {
                                initGridGiant("9292478", {isFloat: "0"});
                            });
                        </script>
                    </div>
                </div>

            </div>
=<!--            合作伙伴 end-->
        </div>
    </div>
</div>

<script src="/r376.mdemo.yz168.cc/cdn.yz168.cc/share/wow.min.js"></script>
<script>
    new WOW().init();
</script>

{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer')}
