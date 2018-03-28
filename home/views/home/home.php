
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta http-equiv="Content-Language" content="zh-CN">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <!-- 以下meta不需要响应式的删掉 -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta name="wap-font-scale" content="no" />
    <meta name="apple-mobile-web-app-capable" content="yes" />
    <meta name="format-detection" content="telephone=no" />

    <meta name="copyright" content="Copyright 2014-2018 - www.uweb.net.cn">
    <meta name="Author" content="广州网站建设-优网科技 www.uweb.net.cn">
    <meta name="Robots" content="all">
    <meta name="Keywords" content="美室设计,广州市美室设计制作有限公司,广告设计,VI设计,品牌VI设计,店铺设计">
    <meta name="Description" content="广州市美室设计制作有限公司成立于1993年，务求为客户减少制作成本。2005年已通过英国ISO9001-2000管理体系认证，并持有广州展示工程一级资质。一直以来致力于企业提供品牌战略规划，终端品牌形像推广，项目市场推广方案，商业建筑、酒店及品牌终端店铺的室内外设计及装修工程。公司注重“以设计带动经营,经营推动设计”的经营理念，与广州大学艺术设计学院共同创办会展设计研究所，致力于培养优秀的设计专才。">
    <meta name="renderer" content="webkit">

    <title>广州博放广告有限公司</title>

    <!-- UIkit CSS -->
    <link rel="stylesheet" href="/assets/uikit/dist/css/uikit.css" />

    <!-- UIkit JS -->
    <script src="/assets/uikit/dist/js/uikit.min.js"></script>
    <script src="/assets/uikit/dist/js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="/assets/css/core.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <link rel="stylesheet" href="/assets/css/addon.css" />
    <script type="text/javascript" src="/assets/js/jquery-3.3.1.min.js"></script>
</head>

<body>

<!--首页导航-->
<div class="site-navbar">
    <!--pc导航-->
    <div class="container navber-pc g-xs-hidden">
        <div class="navbar-logo">
            <img src="/assets/images/logos.png" alt="">

        </div>
        <ul class="navbar-list">
            <li class="item" data-id="#service">公司简介</li>
            <li class="item" data-id="#word">案例集</li>
            <li class="item" data-id="#contact">联系我们</li>
            <li class="item"><span class="iconfont icon-weixin3"></span></li>
            <li class="item" id="pc-search">
                <form  target="_blank" name="infosearch" method="post" action="">
                    <span class="iconfont icon-sousuo-sousuo"></span>
                    <input type="hidden" name="lng" value="cn">
                    <input type="hidden" name="mid" value="0">
                    <input type="text" name="keyword" class="navbar-search">
                    <span class="iconfont icon-sousuo-sousuo search-icon"></span>
                </form>
            </li>
        </ul>
        <script>
            $(function() {
                $('#pc-search').find('.search-icon').on('click', function() {
                    $(this).parent('form').submit();
                })
            })
        </script>
    </div>
    <!--mo导航-->
    <div class="navbar-mo g-xs-show" id="mo-search">
        <div class="navbar-logo">
            <img src="http://hkmax.net/templates/specialty/images/home-logo.png" alt="">
        </div>
        <div class="right">
            <div class="navbar-icon">
                <span class="iconfont icon-weixin3"></span>
            </div>
            <div class="navbar-icon">
                <span class="iconfont icon-sousuo-sousuo"></span>
            </div>
        </div>
        <form  class="form" name="infosearch" method="post" action="">
            <input type="hidden" name="lng" value="cn">
            <input type="hidden" name="mid" value="0">
            <input type="text" name="keyword" class="navbar-search">
            <span class="iconfont icon-sousuo-sousuo search-icon"></span>
        </form>
    </div>
    <script>
        $(function() {
            $('#mo-search').find('.navbar-icon').eq(1).on('touchstart', function() {
                $('#mo-search').find('.form').slideToggle();
            });
            $('#mo-search').find('.search-icon').on('touchstart', function() {
                $(this).parent('form').submit();
            })
        })
    </script>
</div>
<!--pc首页banner-->
<div class="uk-position-relative uk-visible-toggle uk-light" uk-slideshow="autoplay: true;ratio: 7:3;animation:scale;autoplay-interval:3000">

    <ul class="uk-slideshow-items">
        <li>
            <img src="https://getuikit.com/docs/images/photo.jpg" alt="" uk-cover>
        </li>
        <li>
            <img src="https://getuikit.com/docs/images/dark.jpg" alt="" uk-cover>
        </li>
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next uk-slideshow-item="next"></a>

</div>
<!--  <div class="site-banner g-xs-hidden g-sm-hidden" style="background-image: url('http://hkmax.net/upfile/2017/11/20171120151937_336.jpg')"></div>-->
<!--mo banner-->
<div class="mo-banner g-xs-show g-sm-show" style="background-image: url('http://hkmax.net/upfile/2017/10/20171025105717_572.jpg')"></div>

<!--二维码-->
<div class="two-pop" id="two-pop">
    <div class="two-pop-con">
        <img src="http://hkmax.net/upfile/2017/10/20171021174247_245.jpg" alt="">
        <div class="pop-close">X</div>
    </div>
</div>
<div class="goto-top g-xs-hidden" id="gotop">
    <div class="top">
        <img src="http://hkmax.net/templates/specialty/images/pop-top.png" alt="">
    </div>
</div>

<!--服务-->
<div class="containers service clearfloat" id="service">
    <div class="service-left">
        <p>博放是一家拥有全球视野的视觉创意机构，将视觉美学理念和敏锐的市场嗅觉完美结合，帮助客户创造品牌力，提升销售力，构建国际化的品牌形象。博放拥有丰富的视觉创意资源，擅长影视广告、专题片制作，拥有专业摄影、灯光、后期制作等高端设备，与各电视台、电台、网络等媒体有紧密合作关系。汇集业内优质资源，为客户提供从前期、中期到后期专业的一站式服务。</p>
    </div>

    <div class="san-con" id="san-con">
        <div class="san-con-in">
            <div class="san-box san-box01 wow rotateIn" style="background-image: url('assets/images/image1_03.png');" data-id="26">
                <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="icon">
            </div>
            <div class="uk-child-width-1-2@s my-topics  my-width uk-text-center clearfloat">
                <i class="ac-icon"></i>
                <div class="my-mudel ac">
                    <h3>advertising</h3>
                    <p>广告片</p>
                </div>
                <div class="my-mudel topic">
                    <h3>topics</h3>
                    <p>专题片</p>
                </div>
            </div>
            <div class="san-box san-box04 wow rotateIn" style="background-image: url('assets/images/image2_06.png');" data-id="29">
                <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="icon">
            </div>
        </div>
        <div class="brand-tips clearfloat">
            <div class="brand-tips-item">
                <div class="brand-tips-item-top">
                    <p>颜色</p>
                    <p>可以有</p>
                    <p>温度</p>
                </div>
                <div class="brand-tips-item-bottom">
                    <p>Color can be</p>
                    <p>warm</p>
                </div>
            </div>
            <div class="brand-tips-item">
                <div class="brand-tips-item-top">
                    <p>声音</p>
                    <p>可以有</p>
                    <p>形象</p>
                </div>
                <div class="brand-tips-item-bottom">
                    <p>Sound can be</p>
                    <p>image</p>
                </div>
            </div>
            <div class="brand-tips-item">
                <div class="brand-tips-item-top">
                    <p>精神</p>
                    <p>可以有</p>
                    <p>锋芒</p>
                </div>
                <div class="brand-tips-item-bottom">
                    <p>Spirit can be</p>
                    <p>radiative</p>
                </div>
            </div>
        </div>
    </div>
</div>

<!--
<div class="container service" id="service">
   <div class="">
       <div class="g-col-md-12">

           <div class="service-title">
               <span class="num">03</span>
               <span class="name">services</span>
           </div>
           <div class="service-icon">
               <div class="icon-box">
                   <i class="icon" style="background-image: url('http://hkmax.net/upfile/2017/07/20170710094806_125.jpg')"></i>
                       <p>branding</p>
               </div>
               <div class="icon-box">
                   <i class="icon" style="background-image: url('upfile/2017/10/20171013152044_102.jpg')"></i>
                   <p>design</p>
               </div>
               <div class="icon-box">
                   <i class="icon" style="background-image: url('upfile/2017/10/20171013152058_858.jpg')"></i>
                   <p>activity</p>
               </div>
           </div>
           <div class="service-desc">
               <p><span style="font-size: small; font-family: 黑体; color: #808080;">广州市美室设计制作有限公司创建于1993年，24年的品牌策划经验，以国际化团队、国际视野、创新理念，完成超过500例以上的成功案例。</span></p>
<p><span style="font-family: 黑体; color: #808080; font-size: small;"><span style="color: #808080; font-family: 黑体;">无论是新品牌的创建，或是现有品牌的升级，MAX均可通过前瞻性的创意，及覆盖各行各业的品牌战略策划经验，</span>提供涵括品牌战略系统、品牌视觉形象系统、品牌营销推广等全方位品牌系统化服务，成就您梦想中的品牌。</span></p>                </div>

       </div>

   </div>
   <div class="san-con " id="san-con">
               <div class="san-box san-box01 wow rotateIn" style="background-image: url('http://hkmax.net/upfile/2017/07/20170703145136_665.png');" data-id="26">
           <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="icon">
       </div>
                   <div class="san-box san-box02 wow rotateIn" style="background-image: url('http://hkmax.net/upfile/2017/07/20170703145157_268.png');" data-id="27">
           <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="icon">
       </div>
                   <div class="san-box san-box03 wow rotateIn" style="background-image: url('http://hkmax.net/upfile/2017/07/20170703145206_351.png');" data-id="28">
           <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="icon">
       </div>
                   <div class="san-box san-box04 wow rotateIn" style="background-image: url('http://hkmax.net/upfile/2017/07/20170703145217_470.png');" data-id="29">
           <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="icon">
       </div>
               </div>

</div>
-->

<!--首页的文章-->
<!--文章一-->
<div class="section" id="section">
    <div class="containers">
        <div class="g-row">
            <div class="box">
                <div class="section-img wow fadeInLeft" style="background-image: url('assets/images/img1.png');"></div>
            </div>
            <div class="right">
                <div class="section-desc">
                    <h3>以视觉创意为基础，挖掘品牌的文化内涵，为企业构建独一无二的品牌视觉形象。</h3>
                    <h4>Brand communication</h4>
                    <p>以多年国际化实战经验，为品牌洞悉市场行业的千变万化，找到自身的核心价值，拉升品牌差异化，使品牌各大系统的发展有了基石所在，构建出自己的一个王国。</p>
                    <p>同时，MAX为品牌在不同阶段的发展进程指明方向、一路护航，前瞻性的商业模式规划，助力品牌在市场各种状态下皆发挥最大优势，创造品牌价值最大化。</p>
                </div>
            </div>
        </div>
    </div>

    <!--         <div class="section-float"><img src="/assets/images/arrow-right.png"></div> -->
</div>
<div class="section2">
    <div class="containers">
        <div class="g-row">
            <div class="box">
                <div class="section-img wow fadeInRight" style="background-image: url('assets/images/img2.png');"></div>
            </div>
            <div class="left">
                <div class="section-desc">
                    <h3>视觉美学理念和敏锐的市场嗅觉完美结合，创造品牌力，构筑无限商机。</h3>
                    <h4>Design ideas</h4>
                    <p>博放创意设计团队由具备多年品牌设计经验、拥有影视广告制作背景以及资深的互联网人士组成，团队拥有敏锐的市场嗅觉，将商业思维与视觉美学完美结合，构建独一无二的品牌影响力。</p>
                    <p>以富有创意的设计力、品牌执行了为客户提供创新的解决方案，创造独特深度的品牌价值，抢占市场，赢取先机，提升品牌销售力。</p>
                </div>
                <!--                 <div class="section-float2">design</div> -->
            </div>
            <!--             <div class="section-float3">design</div> -->
        </div>
    </div>
</div>
<div class="section">
    <div class="containers">
        <div class="g-row">
            <div class="box">
                <div class="section-img wow fadeInLeft" style="background-image: url('assets/images/img1.png');"></div>
            </div>
            <div class="right">
                <div class="section-desc">
                    <h3>高水准的策划活动，高效能的执行方案，全面的激活品牌影响力。</h3>
                    <h4>Effective implementation</h4>
                    <p>博放拥有多年的活动策划与执行经验，为品牌提供覆盖各大渠道的活动服务，高效配合品牌的战略传播，强化用户参与性来引导品牌方向，通过信息节点与社会化媒体的组合，在各媒体渠道扩散品牌影响力，我为品牌建立起极致的口碑传播与快速响应。</p>
                </div>
            </div>
        </div>
    </div>
    <!--         <div class="section-float">activity</div> -->
</div>


<!-- //联系我们  -->


<div class="uk-flex uk-height-medium uk-margin uk-text-center">
    <div class="uk-margin-auto uk-margin-auto-vertical  uk-card uk-card-default">
        <div class="uk-inline">
            <img src="assets/images/map-bg_03s.png" alt="">

            <div class=" uk-position-bottom-left uk-width-1-3@m comany-model">
                <div class="company uk-text-left">
                    <h1 class="uk-article-title">广州博放广告有限公司</h1>

                    <p class="uk-article-meta">Guangzhou Boad Advertising Co., Ltd.</p>

                    <h1 class="uk-article-title subTitle">博放的力量，让世界认识你。</h1>

                    <p class="uk-article-meta">The power of Bo Fang will let the world know you.</p>
                </div>
                <ul class="uk-list uk-text-left uk-text-small clearfloat">
                    <li><span class="icon loaction"></span><span class="address">广州市天河区珠江新城华强路2号富力盈丰大厦A塔 2125室</span></li>
                    <li><span class="icon emails"></span> 邮编: 51000000</li>
                    <li><span class="icon tel"></span> 电话: +13826286487</li>
                    <li><span class="icon email"></span> 邮箱: 342186108@qq.com</li>
                    <li><span class="icon qq"></span> Q Q: 342186108</li>
                </ul>
            </div>
        </div>
    </div>
</div>

<!--  <div class="uk-inline" style="margin: 0 auto"> -->
<!--         <img src="/assets/images/map-bg_03.png" alt=""> -->
<!--         <div class="uk-overlay uk-light uk-position-bottom"> -->
<!--             <p>Default Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p> -->
<!--         </div> -->
<!--     </div> -->

<!--联系我们-->
<!--     <div class="contact" id="contact"> -->
<!--         <div class="g-row"> -->
<!--         <div class="left"> -->

<!--             <div class="contact-icon clearfloat wow fadeInUp"> -->
<!--                 <div class="icon-box"><span class="iconfont icon-dizhi">&nbsp;</span> <strong><span class="desc01">国内：广州市东华西路86号丽华大厦20楼</span></strong></div> -->
<!--                 <div class="icon-box"><span class="iconfont icon-youjian1">&nbsp;</span> <span class="desc">info@hkmax.net</span></div> -->
<!--                 <div class="icon-box"><span class="iconfont icon-shouji">&nbsp;</span> <span class="desc">+8620-83807227</span></div> -->
<!--                 <div class="icon-box"><span class="iconfont icon-erji">&nbsp;</span>&nbsp;<span class="desc">+8620-83806587</span></div> -->
<!--                 <div class="icon-box weixin"><span class="iconfont icon-weixin-copy-copy">&nbsp;</span> <span class="desc">wechat: hkmax1993</span></div>                 -->
<!--              </div> -->
<!--         </div> -->
<!--         <div class="g-col-lg-12 box"> -->
<!--移动标题-->
<!--             <div class="mo-title"> -->
<!--                 <span class="num">05</span> -->
<!--                 <span class="name">contact</span> -->
<!--             </div> -->
<div class="contact-img wow fadeInLeft" style="background-image: url('http://hkmax.net/upfile/2017/10/20171030183012_420.jpg');"></div>
<!--         </div> -->

<!--         </div> -->
<!--     </div> -->


<div class="copyright">
    <p>© 2018 all rights reserved design by bestbofang.com</p>
</div>

<!--移动底部-->
<div class="mo-footer g-xs-show" id="mo-navbar">
    <div class="con">
        <div class="box" data-id=".site-navbar">
            <div class="icon">
                <span class="iconfont icon-shouye"></span>
            </div>
            <div class="title">返回顶部</div>
        </div>
        <div class="box" data-id="#service">
            <div class="icon">
                <span class="iconfont icon-iconfontjianjie"></span>
            </div>
            <div class="title">公司简介</div>
        </div>
        <div class="box" data-id="#word">
            <div class="icon">
                <span class="iconfont icon-1111119"></span>
            </div>
            <div class="title">案例集</div>
        </div>
        <div class="box" data-id="#contact">
            <div class="icon">
                <span class="iconfont icon-dianhua"></span>
            </div>
            <div class="title">联系我们</div>
        </div>
    </div>
</div>

<!--弹框广告片-->
<div class="home-pop home-pop-1">
    <div class="pop-con">
        <!--pc关闭-->
        <div class="pop-close g-lg-show"></div>
        <!--移动关闭-->
        <div class="pop-mo-close g-lg-hidden"></div>
        <div class="pop-box">
            <div class="pop-article">
                <div class="pop-top clearfloat">
                    <div class="pop-article-title">
                        <h3>广告片</h3>
                        <p>advertising</p>
                    </div>
                    <div class="video-tab">
                        <img src="assets/images/videoImg1.jpg" />
                        <p><i class="videoIcon"></i>自动播放</p>
                    </div>
                </div>
                <div class="video-list clearfloat">
                    <div class="video-tab video1">
                        <img src="assets/images/videoImg2.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                    <div class="video-tab video2">
                        <img src="assets/images/videoImg3.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                    <div class="video-tab video3">
                        <img src="assets/images/videoImg4.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                    <div class="video-tab video4">
                        <img src="assets/images/videoImg5.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                    <div class="video-tab video3">
                        <img src="assets/images/videoImg6.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                    <div class="video-tab video1">
                        <img src="assets/images/videoImg7.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                    <div class="video-tab video5">
                        <img src="assets/images/videoImg8.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                </div>
                <div class="declare">
                    <img src="assets/images/logo.png" />
                </div>
            </div>
            <!--<div class="pop-first">
              <div class="pop-title clearfloat">
               <div class="right">
                   <img src="http://hkmax.net/templates/specialty/images/pop-title.jpg" alt="">
                   <div class="sub-title">G2OOO男装品牌</div>
               </div>
           </div>
           <div class="pop-about">
               <span class="title">所属行业：</span>
               <span class="name">男装品牌</span>
           </div>
           <div class="pop-about">
               <span class="title">服务内容：</span>
               <span class="name">店面设计+vi</span>
           </div>
           <div class="pop-desc">
               <p>
                   MAX香港美室机构成立于1993年。22年的零售品牌操作经验，MAX机构以国际化团队、国际视野、创新理念，完成超过300项的成功专案案例，商业空间设计合作客户包括香港海港城、香港时代广场、香港朗豪坊、北京大悦城等，以营造愉快而充满乐趣的购物体验，为商业吸引更多的消费者，推动品牌健康发展。MAX属下机构包括新加坡马克创作顾问、广州市美室设计制作有限公司、广州市美室展览有限公司、广州市优创美时展示制作有限公司，合力为品牌问、广州市美室设计制作有限公司、广州市美室展览有限公司、广州市优创美时展示制作有限公司，合力为品牌
               </p>
           </div>
           </div>-->

            <!--弹框轮播-->
            <!--<div class="pop-swiper">
                <div class="swiper-container swiper-pop">
                    <div class="swiper-wrapper">-->
            <!--<div class="swiper-slide">
            <img src="http://hkmax.net/templates/specialty/images/pop-img01.jpg" alt="" class="item-img">
        </div>
        <div class="swiper-slide">
            <img src="http://hkmax.net/templates/specialty/images/pop-img01.jpg" alt="" class="item-img">

        </div>-->
            <!--</div>
        </div>
        <div class="pop-left"></div>
        <div class="pop-right"></div>
    </div>
    <div class="pop-tags">-->
            <!--<div class="pop-desc" style="display:block">
            <p>0</p>
        </div>
        <div class="pop-desc">
            <p>1</p>
        </div>
        <div class="pop-desc">
            <p>2</p>
        </div>-->
            <!--</div>
            <div class="pop-article">

            </div>-->

            <a class="pop-mo-top" href="javascript:;"></a>
        </div>
        <div class="video-on">
            <p class="goBack"></p>
            <video class="video" id="myvideo" controls="">
                <source src="http://200038162.vod.myqcloud.com/200038162_5ea70ea0a59011e6ac68b513d971774d.f0.mov">
                您的浏览器不支持播放此格式视频。
            </video>
        </div>

    </div>
</div>
<!--弹框专题片-->
<div class="home-pop home-pop-2">
    <div class="pop-con">
        <!--pc关闭-->
        <div class="pop-close g-lg-show"></div>
        <!--移动关闭-->
        <div class="pop-mo-close g-lg-hidden"></div>
        <div class="pop-box">
            <div class="pop-article">
                <div class="pop-top clearfloat">
                    <div class="pop-article-title">
                        <h3>专题片</h3>
                        <p>topics</p>
                    </div>
                    <div class="video-tab">
                        <img src="assets/images/videoImg1.jpg" />
                        <p><i class="videoIcon"></i>自动播放</p>
                    </div>
                </div>
                <div class="video-list clearfloat">
                    <div class="video-tab">
                        <img src="assets/images/videoImg9.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                    <div class="video-tab">
                        <img src="assets/images/videoImg9.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                    <div class="video-tab">
                        <img src="assets/images/videoImg9.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                    <div class="video-tab">
                        <img src="assets/images/videoImg9.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                    <div class="video-tab">
                        <img src="assets/images/videoImg9.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                    <div class="video-tab">
                        <img src="assets/images/videoImg9.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                    <div class="video-tab">
                        <img src="assets/images/videoImg9.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                    <div class="video-tab">
                        <img src="assets/images/videoImg9.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                    <div class="video-tab">
                        <img src="assets/images/videoImg9.jpg" />
                        <i class="videoIcon"></i>
                    </div>
                </div>
                <div class="declare">
                    <img src="assets/images/logo.png" />
                </div>
            </div>
            <a class="pop-mo-top" href="javascript:;"></a>
        </div>
        <div class="video-on">
            <p class="goBack"></p>
            <video class="video" id="myvideo1" controls="">
                <source src="http://200038162.vod.myqcloud.com/200038162_5ea70ea0a59011e6ac68b513d971774d.f0.mov">
                您的浏览器不支持播放此格式视频。
            </video>
        </div>

    </div>
</div>


</body>
<script type="text/javascript" src="assets/js/core.js"></script>
<script type="text/javascript" src="assets/js/script.js"></script>
<script type="text/javascript">
    var video=document.getElementById("myvideo");
    var video1=document.getElementById("myvideo1");
    $(".ac").on("click",function(){
        $(".home-pop-1").css("visibility","visible");
    });
    $(".home-pop-1 .video-tab").on("click",function(){
        var src=$(this).find("img").attr("title");
        $("#myvideo").attr("src",src);
        video.play();
        $(".home-pop-1 .pop-box").hide();
        $(".home-pop-1 .video-on").show();
    });
    $(".goBack").on("click",function(){
        $(".pop-box").show();
        $(".video-on").hide();
        video.pause();
        video1.pause();
    });
    $(".topic").on("click",function(){
        $(".home-pop-2").css("visibility","visible");
    });
    $(".home-pop-2 .video-tab").on("click",function(){
        var src=$(this).find("img").attr("title");
        $("#myvideo1").attr("src",src);
        video.play();
        $(".home-pop-2 .pop-box").hide();
        $(".home-pop-2 .video-on").show();
    });
</script>
</html>