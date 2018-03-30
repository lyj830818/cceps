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
                                    <div class="swiper-slide"><a href=""><img
                                                    src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/201711/20171112222346379690.jpg " alt="" title=""
                                                    class="img-responsive"></a></div>
                                    <div class="swiper-slide"><a href=""><img
                                                    src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/201711/201711101939252bbbca.jpg " alt="" title=""
                                                    class="img-responsive"></a></div>
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
                                                                    style="color: rgb(255, 255, 255); font-size: 36px;">1000+</span>
                                                        </p>
                                                        <p style="text-align: center;"><span
                                                                    style="color: rgb(255, 255, 255); font-size: 14px;">企业客户之选</span>
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
                                                                    style="color: rgb(255, 255, 255); font-size: 36px;">5年</span>
                                                        </p>
                                                        <p style="text-align: center;"><span
                                                                    style="color: rgb(255, 255, 255); font-size: 14px;">互联网经验</span>
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
                                                                    style="color: rgb(255, 255, 255); font-size: 36px;">100+</span>
                                                        </p>
                                                        <p style="text-align: center;"><span
                                                                    style="color: rgb(255, 255, 255); font-size: 14px;">成功案例</span>
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
                                                                    style="color: rgb(255, 255, 255); font-size: 36px;">95%</span>
                                                        </p>
                                                        <p style="text-align: center;"><font
                                                                    color="#ffffff">客户满意度</font></p>
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
                                                                            style="font-family: 微软雅黑; font-size: 30px;">高端</span></strong></span><strong><span
                                                                        style="font-family: 微软雅黑; font-size: 30px;">网站</span></strong>
                                                        </p>
                                                        <p><span
                                                                    style="font-size: 30px; color: rgb(216, 216, 216);">——</span>
                                                        </p>
                                                        <p>
                                                            随着80后成为社会中竖，网络化营销在未来商业活动中将占据绝对地位，浅显的网络营销营建不会发挥任何网络营销的真正价值。做深，做精，做准，才能鹤立鸡群，才能真正通过网络营销建立与客户之间的信任。因为网站就代表了你的产品和服务，也代表了背后的企业文化和经营理念。<br/>
                                                        </p>
                                                        <p><span
                                                                    style="font-family: 微软雅黑; font-size: 14px;"><br/></span><br/>
                                                        </p>
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
                                                        src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/201711/201711122219408fe8d6.png" alt="图片展示"/>
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
                                                        src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/201711/201711101721158e072e.png" alt="图片展示"/>
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
                                                                            style="font-family: 微软雅黑; font-size: 30px;">H5响应式</span></strong></span><strong><span
                                                                        style="font-family: 微软雅黑; font-size: 30px;">网站</span></strong>
                                                        </p>
                                                        <p><span style="font-family: 微软雅黑; font-size: 30px;"><span
                                                                        style="color: rgb(216, 216, 216); font-size: 30px;">——</span></span>
                                                        </p>
                                                        <p><span style="font-family: 微软雅黑; font-size: 14px;">本公司为您提供全套网站解决方案，为建站提供CDN加速服务让用户获得极速体验；网站上线后，负责为您保障网站安全。让您建站过程、日常运营省心安心。</span>
                                                        </p>
                                                        <p><span
                                                                    style="font-family: 微软雅黑; font-size: 14px;"><br/></span>
                                                        </p>
                                                        <p><span style="font-family: 微软雅黑; font-size: 14px;"></span>
                                                        </p>
                                                        <p><span
                                                                    style="color: rgb(255, 0, 0); font-size: 24px;"><strong>5</strong></span><span
                                                                    style="color: rgb(255, 0, 0); font-size: 18px;"><strong>&nbsp;</strong></span>项国家专利，获得同行业肯定
                                                        </p>
                                                        <p><span
                                                                    style="color: rgb(255, 0, 0); font-size: 24px;"><strong>4</strong></span><span
                                                                    style="color: rgb(255, 0, 0); font-size: 18px;"><strong>&nbsp;</strong></span>大SEO优化系统，锁定搜索引擎让您的网站轻松上百度首页
                                                        </p>
                                                        <p><span
                                                                    style="color: rgb(255, 0, 0); font-size: 24px;"><strong>3</strong></span><span
                                                                    style="color: rgb(255, 0, 0); font-size: 18px;"><strong>&nbsp;</strong></span>支营销团队，为您量身定做高营销力、高转化率的好网站
                                                        </p>
                                                        <p><span
                                                                    style="font-family: 微软雅黑; font-size: 14px;"><br/></span><br/>
                                                        </p>
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
<!--            H5响应式 网站 end-->
<!--            团队 start-->
            <div class="ModuleItem  StaticModule " wo="1912" id="module_9291923">
                <div class="ModuleGridGiant layout-101 layout-color- module_9291923 clearfix">
                    <!-- 主体 -->
                    <div class='BodyCenter BodyCenter9291923 clearfix'>
                        <div class='ModuleGridContainer  ModuleGridContainer9291923' gridswidthmode='2'>
                            <div class='row ModuleSubContainer'>
                                <div class="gridBgVideo noBgVideo">
                                    <video src="" class="bgVideo" autoplay="autoplay" loop="loop"></video>
                                    <div class="bgVideoMask"></div>
                                </div>
                                <div id='Sub9291923_1'
                                     class='ModuleContainer SubContainer ModuleGridItem     col-xs-12 col-sm-12 col-md-12 col-lg-12'
                                     positiontype='2' ismodulecontainer='true'>
                                    <div class="ModuleItem wow fadeIn StaticModule " wo="1200" id="module_9291927"
                                         data-wow-duration="2.5s">
                                        <div class="ModuleImageTextGiant layout-101 layout-color- module_9291927 clearfix">
                                            <!-- 主体 -->
                                            <div class='BodyCenter BodyCenter9291927 clearfix'>
                                                <div class="imageTextGiant-Container imageTextContainer clearfix"
                                                     hasresponsive="1" autohide="0" hideheight="150"
                                                     hidewidth="760">
                                                    <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                        <p style="text-align: center; line-height: 2em;"><span
                                                                    style="font-family:微软雅黑, SimSun"><span
                                                                        style="font-size: 30px;">我们的团队</span></span></p>
                                                        <p style="text-align: center; line-height: 2em;"><span
                                                                    style="font-family:微软雅黑, SimSun"><span
                                                                        style="color: rgb(191, 191, 191);">专业资深的网站团队针对有品牌意识的企业，提辅助企业构建互联网竞争力</span></span>
                                                        </p>
                                                    </div>
                                                </div>
                                                <script>
                                                    changeFontSize($('#module_9291927'));
                                                </script>
                                            </div>
                                        </div>

                                    </div>
                                    <div class="ModuleItem wow fadeIn StaticModule " wo="1200" id="module_9292085"
                                         data-wow-duration="2.5s">
                                        <div class="ModuleImageTextGiant layout-109 layout-color- module_9292085 clearfix">
                                            <!-- 主体 -->
                                            <div class='BodyCenter BodyCenter9292085 clearfix'>
                                                <div class="imageTextGiant-Container imageTextContainer clearfix"
                                                     hasresponsive="1" autohide="0" hideheight="150"
                                                     hidewidth="760">

                                                    <div class="row">
                                                        <div class="col-xs-6 col-md-3 normal_ImgtextBox">
                                                            <div class=" GraphicUpper">
                                                                <a href="javascript:;" style="cursor: default"><img
                                                                            class="TextImage image-animation"
                                                                            src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/201711/20171110181324c13ce6.png"
                                                                            title="" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                                <div style="font-family:微软雅黑;text-align:center">
                                                                    <div style=";"><p
                                                                                style="color:#333;font-size:18px;text-transform: uppercase;line-height: 1.333;">
                                                                            Justin 陈雨</p>
                                                                        <p style="font-size:12px;color:#999;width:100%%;text-align:center;margin-top: 14px;">
                                                                            产品经理</p>
                                                                        <div style="border-bottom:1px solid #999;width:25px;margin:18px auto;"></div>
                                                                    </div>
                                                                    <div style="color:#666;font-size: 12px;line-height: 1.846;;border:0">
                                                                        全程参与各类网站设计与研发，并对网站各类风险进行评估
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 col-md-3 normal_ImgtextBox">
                                                            <div class=" GraphicUpper">
                                                                <a href="javascript:;" style="cursor: default"><img
                                                                            class="TextImage image-animation"
                                                                            src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/201711/20171110181342cd2052.png"
                                                                            title="" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                                <div style="font-family:微软雅黑;text-align:center">
                                                                    <div style=";"><p
                                                                                style="color:#333;font-size:18px;text-transform: uppercase;line-height: 1.333;">
                                                                            Alun 周承风</p>
                                                                        <p style="font-size:12px;color:#999;width:100%;text-align:center;margin-top: 14px;">
                                                                            产品设计师</p>
                                                                        <div style="border-bottom:1px solid #999;width:25px;margin:18px auto;"></div>
                                                                    </div>
                                                                    <div style="color:#666;font-size: 12px;line-height: 1.846;;border:0">
                                                                        热爱网站制作设计，获得产品设计金奖及_参与各类产品设计，获好评
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 col-md-3 normal_ImgtextBox">
                                                            <div class=" GraphicUpper">
                                                                <a href="javascript:;" style="cursor: default"><img
                                                                            class="TextImage image-animation"
                                                                            src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/201711/20171110181342c86ab8.png"
                                                                            title="" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                                <div style="font-family:微软雅黑;text-align:center">
                                                                    <div style=";"><p
                                                                                style="color:#333;font-size:18px;text-transform: uppercase;line-height: 1.333;">
                                                                            Beth 贾科布</p>
                                                                        <p style="font-size:12px;color:#999;width:100%;text-align:center;margin-top: 14px;">
                                                                            产品开发师</p>
                                                                        <div style="border-bottom:1px solid #999;width:25px;margin:18px auto;"></div>
                                                                    </div>
                                                                    <div style="color:#666;font-size: 12px;line-height: 1.846;;border:0">
                                                                        优秀网站开发师，参与多个新产品开发与_产品设计，提高产品实用
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-xs-6 col-md-3 normal_ImgtextBox">
                                                            <div class=" GraphicUpper">
                                                                <a href="javascript:;" style="cursor: default"><img
                                                                            class="TextImage image-animation"
                                                                            src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/201711/201711101813429f99e5.png"
                                                                            title="" alt="">
                                                                </a>
                                                            </div>
                                                            <div class="ModuleImageTextGiantContent ModuleImageTextContent">
                                                                <div style="font-family:微软雅黑;text-align:center">
                                                                    <div style=";"><p
                                                                                style="color:#333;font-size:18px;text-transform: uppercase;line-height: 1.333;">
                                                                            Chrital 吴颖</p>
                                                                        <p style="font-size:12px;color:#999;width:100%;text-align:center;margin-top: 14px;">
                                                                            视觉设计师</p>
                                                                        <div style="border-bottom:1px solid #999;width:25px;margin:18px auto;"></div>
                                                                    </div>
                                                                    <div style="color:#666;font-size: 12px;line-height: 1.846;;border:0">
                                                                        针对市场流行趋势，对美学的把握_针对产品的开发提出建议
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                </div>
                                                <script>
                                                    (function () {
                                                        changeFontSize($('#module_9292085'));
                                                        //获取一组为4个的div最大高度
                                                        var AverageHeight = function () {
                                                            $('#module_9292085 .normal_ImgtextBox').css('height', 'auto');
                                                            if (window.innerWidth < 992) {
                                                                var maxHeights = [],
                                                                    NUM = 2;
                                                                $('#module_9292085 .normal_ImgtextBox').each(function (index) {
                                                                    var height = $(this).height();
                                                                    if (!(index % NUM)) maxHeights.push(-1);
                                                                    maxHeights[maxHeights.length - 1] = Math.max(height, maxHeights[maxHeights.length - 1]);
                                                                }).css("min-height", function (index) {
                                                                    return maxHeights[parseInt(index / NUM)];
                                                                });
                                                            }

                                                        }
                                                        var defereds = [];
                                                        $('#module_9292085 .TextImage').each(function () {
                                                            var dfd = $.Deferred();

                                                            $(this).load(dfd.resolve);
                                                            defereds.push(dfd);
                                                        });
                                                        $.when.apply(null, defereds).done(function () {
                                                            AverageHeight()
                                                        })
                                                        $(window).off('resize.module9292085').on('resize.module9292085', function () {
                                                            AverageHeight()
                                                        })
                                                    })()
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
                                initGridGiant("9291923", {isFloat: "0"});
                            });
                        </script>
                    </div>
                </div>

            </div>
<!--            团队 end-->

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
                                                        <p style="text-align: center; line-height: 2em;"><span
                                                                    style="font-family:微软雅黑, SimSun"><span
                                                                        style="color: rgb(191, 191, 191);">策划与设计，让品质从网站开始被认同</span></span>
                                                        </p>
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
                                            <!-- 主体 -->
                                            <div class='BodyCenter BodyCenter9293268 clearfix'>
                                                <div class="gallery-list gallery-container clearfix" layout="104"
                                                     data-expandir="1">
                                                    <div class="grid-item col-xs-2 col-sm-4 col-md-4 col-lg-4"
                                                         data-src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/d61292fe8f9a52d250944de881205257.jpg"
                                                         data-sub-html="<h4 class='SiteGalleryGiantTitle104'></h4><p style='color:#FFF;'></p><p class='wh'></p>">
                                                        <a class="grid-cont"
                                                           href="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/d61292fe8f9a52d250944de881205257.jpg">
                                                            <div style="position: relative;" class="ImgCenterbox2">
                                                                <img src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/d61292fe8f9a52d250944de881205257.jpg"
                                                                     alt="" title="" style="width: 100%" imgtitle=""
                                                                     alt="" redirecturl="" class="ImgCenter">
                                                                <div class="demo-gallery-poster">
                                                                    <img src="/r376.mdemo.yz168.cc/skinp/modules/ModuleSiteGalleryGiant/zoom.png"
                                                                         alt="" title="" style="max-width: 100%;">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="grid-item col-xs-2 col-sm-4 col-md-4 col-lg-4"
                                                         data-src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/9a756d6ab3b27bd5cfcedfaad2afe3a0.jpg"
                                                         data-sub-html="<h4 class='SiteGalleryGiantTitle104'></h4><p style='color:#FFF;'></p><p class='wh'></p>">
                                                        <a class="grid-cont"
                                                           href="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/9a756d6ab3b27bd5cfcedfaad2afe3a0.jpg">
                                                            <div style="position: relative;" class="ImgCenterbox2">
                                                                <img src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/9a756d6ab3b27bd5cfcedfaad2afe3a0.jpg"
                                                                     alt="" title="" style="width: 100%" imgtitle=""
                                                                     alt="" redirecturl="" class="ImgCenter">
                                                                <div class="demo-gallery-poster">
                                                                    <img src="/r376.mdemo.yz168.cc/skinp/modules/ModuleSiteGalleryGiant/zoom.png"
                                                                         alt="" title="" style="max-width: 100%;">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="grid-item col-xs-2 col-sm-4 col-md-4 col-lg-4"
                                                         data-src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/26af1f33687cd8db8deac6856d0579df.jpg"
                                                         data-sub-html="<h4 class='SiteGalleryGiantTitle104'></h4><p style='color:#FFF;'></p><p class='wh'></p>">
                                                        <a class="grid-cont"
                                                           href="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/26af1f33687cd8db8deac6856d0579df.jpg">
                                                            <div style="position: relative;" class="ImgCenterbox2">
                                                                <img src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/26af1f33687cd8db8deac6856d0579df.jpg"
                                                                     alt="" title="" style="width: 100%" imgtitle=""
                                                                     alt="" redirecturl="" class="ImgCenter">
                                                                <div class="demo-gallery-poster">
                                                                    <img src="/r376.mdemo.yz168.cc/skinp/modules/ModuleSiteGalleryGiant/zoom.png"
                                                                         alt="" title="" style="max-width: 100%;">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="grid-item col-xs-2 col-sm-4 col-md-4 col-lg-4"
                                                         data-src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/e2f043e315268a0c14eac7030cfc8684.jpg"
                                                         data-sub-html="<h4 class='SiteGalleryGiantTitle104'></h4><p style='color:#FFF;'></p><p class='wh'></p>">
                                                        <a class="grid-cont"
                                                           href="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/e2f043e315268a0c14eac7030cfc8684.jpg">
                                                            <div style="position: relative;" class="ImgCenterbox2">
                                                                <img src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/e2f043e315268a0c14eac7030cfc8684.jpg"
                                                                     alt="" title="" style="width: 100%" imgtitle=""
                                                                     alt="" redirecturl="" class="ImgCenter">
                                                                <div class="demo-gallery-poster">
                                                                    <img src="/r376.mdemo.yz168.cc/skinp/modules/ModuleSiteGalleryGiant/zoom.png"
                                                                         alt="" title="" style="max-width: 100%;">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="grid-item col-xs-2 col-sm-4 col-md-4 col-lg-4"
                                                         data-src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/cce8825c285a220eb746f3e967cf829d.jpg"
                                                         data-sub-html="<h4 class='SiteGalleryGiantTitle104'></h4><p style='color:#FFF;'></p><p class='wh'></p>">
                                                        <a class="grid-cont"
                                                           href="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/cce8825c285a220eb746f3e967cf829d.jpg">
                                                            <div style="position: relative;" class="ImgCenterbox2">
                                                                <img src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/cce8825c285a220eb746f3e967cf829d.jpg"
                                                                     alt="" title="" style="width: 100%" imgtitle=""
                                                                     alt="" redirecturl="" class="ImgCenter">
                                                                <div class="demo-gallery-poster">
                                                                    <img src="/r376.mdemo.yz168.cc/skinp/modules/ModuleSiteGalleryGiant/zoom.png"
                                                                         alt="" title="" style="max-width: 100%;">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="grid-item col-xs-2 col-sm-4 col-md-4 col-lg-4"
                                                         data-src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/26fdcf882e61cb8767c902250d9e9dff.jpg"
                                                         data-sub-html="<h4 class='SiteGalleryGiantTitle104'></h4><p style='color:#FFF;'></p><p class='wh'></p>">
                                                        <a class="grid-cont"
                                                           href="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/26fdcf882e61cb8767c902250d9e9dff.jpg">
                                                            <div style="position: relative;" class="ImgCenterbox2">
                                                                <img src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/26fdcf882e61cb8767c902250d9e9dff.jpg"
                                                                     alt="" title="" style="width: 100%" imgtitle=""
                                                                     alt="" redirecturl="" class="ImgCenter">
                                                                <div class="demo-gallery-poster">
                                                                    <img src="/r376.mdemo.yz168.cc/skinp/modules/ModuleSiteGalleryGiant/zoom.png"
                                                                         alt="" title="" style="max-width: 100%;">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="grid-item col-xs-2 col-sm-4 col-md-4 col-lg-4"
                                                         data-src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/0a3dffed0dba44ea282d39b0ad338f90.jpg"
                                                         data-sub-html="<h4 class='SiteGalleryGiantTitle104'></h4><p style='color:#FFF;'></p><p class='wh'></p>">
                                                        <a class="grid-cont"
                                                           href="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/0a3dffed0dba44ea282d39b0ad338f90.jpg">
                                                            <div style="position: relative;" class="ImgCenterbox2">
                                                                <img src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/0a3dffed0dba44ea282d39b0ad338f90.jpg"
                                                                     alt="" title="" style="width: 100%" imgtitle=""
                                                                     alt="" redirecturl="" class="ImgCenter">
                                                                <div class="demo-gallery-poster">
                                                                    <img src="/r376.mdemo.yz168.cc/skinp/modules/ModuleSiteGalleryGiant/zoom.png"
                                                                         alt="" title="" style="max-width: 100%;">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="grid-item col-xs-2 col-sm-4 col-md-4 col-lg-4"
                                                         data-src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/5e03988c841c263237d626648796adf9.jpg"
                                                         data-sub-html="<h4 class='SiteGalleryGiantTitle104'></h4><p style='color:#FFF;'></p><p class='wh'></p>">
                                                        <a class="grid-cont"
                                                           href="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/5e03988c841c263237d626648796adf9.jpg">
                                                            <div style="position: relative;" class="ImgCenterbox2">
                                                                <img src="/r376.mdemo.yz168.cc/cdn.yz168.cc/comdata/901/gallery/5e03988c841c263237d626648796adf9.jpg"
                                                                     alt="" title="" style="width: 100%" imgtitle=""
                                                                     alt="" redirecturl="" class="ImgCenter">
                                                                <div class="demo-gallery-poster">
                                                                    <img src="/r376.mdemo.yz168.cc/skinp/modules/ModuleSiteGalleryGiant/zoom.png"
                                                                         alt="" title="" style="max-width: 100%;">
                                                                </div>
                                                            </div>
                                                        </a>
                                                    </div>


                                                </div>


                                                <script>

                                                    addScript('/r376.mdemo.yz168.cc/skinp/modules/ModuleSiteGalleryGiant/commonSiteGallery.js', function () {
                                                        var option = {};
                                                        option.IsExpandDir = "1"
                                                        initCommonSiteGalleryGiant("9293268", "104", option, 0);
                                                    });

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

            </div

        </div>
    </div>
</div>

<script src="/r376.mdemo.yz168.cc/cdn.yz168.cc/share/wow.min.js"></script>
<script>
    new WOW().init();
</script>

{include $control->loadModel('ui')->getEffectViewFile('default', 'common', 'footer')}
