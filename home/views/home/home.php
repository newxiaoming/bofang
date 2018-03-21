
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

    <title>广州市美室设计制作有限公司</title>

	<!-- UIkit CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/css/uikit.min.css" />
    
    <!-- UIkit JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/uikit/3.0.0-beta.40/js/uikit-icons.min.js"></script>

    <link rel="stylesheet" href="/assets/css/core.css" />
    <link rel="stylesheet" href="/assets/css/style.css" />
    <script type="text/javascript" src="/assets/js/jquery-3.3.1.min.js"></script>
</head>

<body>

    <!--首页导航-->
    <div class="site-navbar">
        <!--pc导航-->
        <div class="container navber-pc g-xs-hidden">
            <div class="navbar-logo">
			                <img src="upfile/2017/07/20170719141430_436.png" alt="">
				
            </div>
            <ul class="navbar-list">
                <li class="item" data-id="#service">公司简介</li>
                <li class="item" data-id="#word">案例集</li>
                <li class="item" data-id="#contact">联系我们</li>
                <li class="item"><span class="iconfont icon-weixin3"></span></li>
                <li class="item" id="pc-search">
                    <form  target="_blank" name="infosearch" method="post" action="http://hkmax.net/index.php?ac=search&at=list">
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
            <form  class="form" name="infosearch" method="post" action="http://hkmax.net/index.php?ac=search&at=list">
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
                <li>
                    <img src="https://getuikit.com/docs/images/light.jpg" alt="" uk-cover>
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

    <!--首页的文章-->
    <!--文章一-->
    <div class="section" id="section">
        <div class="g-row">
            <div class="g-col-lg-12 box">
                <div class="section-img wow fadeInLeft" style="background-image: url('http://hkmax.net/upfile/2017/07/20170710095206_809.jpg');"></div>
            </div>
            <div class="right">
                <div class="section-desc">
                    <p class="MsoNormal"><span style="font-size: large; color: #333333;"><span style="font-family: 黑体;">以视觉创意为基础，挖掘品牌的文化内涵，为企业构建独一无二的品牌视觉形象。</span></span></p>
                     <p class="">Brand communication</p>
                     <hr >
                    <p class="MsoNormal"><span style="font-family: 黑体; font-size: small; color: #808080;">以多年国际化实战经验，为品牌洞悉市场行业的千变万化，找到自身的核心价值，拉升品牌差异化，使品牌各大系统的发展有了基石所在，构建出自己的一个王国。</span></p>
                    <p class="MsoNormal"><span style="font-family: 黑体; font-size: small; color: #808080;">同时，MAX为品牌在不同阶段的发展进程指明方向、一路护航，前瞻性的商业模式规划，助力品牌在市场各种状态下皆发挥最大优势，创造品牌价值最大化。&nbsp; &nbsp;</span></p>                
                </div>
            </div>
        </div>
<!--         <div class="section-float"><img src="/assets/images/arrow-right.png"></div> -->
    </div>
    <div class="section2">
        <div class="g-row">
            <div class="box">
                <div class="section-img wow fadeInRight" style="background-image: url('http://hkmax.net/upfile/2017/10/20171012142956_754.jpg');"></div>
            </div>
            <div class="left">
                <div class="section-desc">
                    <p><span style="font-size: large; font-family: 黑体; color: #333333;">视觉美学理念和敏锐的市场嗅觉完美结合，创造品牌力，构筑无限商机。</span></p>
                    <p>Design ideas</p>
                    <hr>
                    <p><span style="font-size: small; color: #888888; font-family: 黑体;">富有创意的视觉营销方式，把商业思维与视觉美学相结合，</span><span style="color: #888888; font-family: 黑体; font-size: small;">从VI视觉识别系统及SI终端店铺识别系统，为品牌进行形象系统的全面规划与构建。</span></p>
                    <p><span style="color: #888888; font-family: 黑体; font-size: small;">创造富有视觉吸引力的独特品牌形象，抢占消费者的目光赢取先机。使品牌在同行业竞争中，完美脱颖而出。</span></p>                </div>
<!--                 <div class="section-float2">design</div> -->
            </div>
<!--             <div class="section-float3">design</div> -->
        </div>
    </div>
    <div class="section">
        <div class="g-row">
            <div class="g-col-lg-12 box">
                <div class="section-img wow fadeInLeft" style="background-image: url('http://hkmax.net/upfile/2017/10/20171012143147_513.jpg');"></div>
            </div>
            <div class="right">
                <div class="section-desc">
                    <p><span style="color: #333333; font-family: 黑体; font-size: large; letter-spacing: 0pt; text-indent: 0pt;">高水准的策划活动，高效能的执行方案，全面的激活品牌影响力。</span></p>
                    <p>Effective implementation </p>
					<p class="p" style="margin: 0pt; text-indent: 0pt; padding: 0pt;"><span style="font-size: small;"><span style="font-family: 黑体; color: #888888; letter-spacing: 0pt;">MAX拥有丰富的活动策划与执行经验，为品牌提供全面覆盖各</span><span style="font-family: 黑体; color: #888888; letter-spacing: 0pt;"><span style="font-family: 黑体;">渠道的定制化活动服务，最大化配合品牌的战略目的。无论是面向消费者还是加盟商，</span>MAX都将助力品牌完成多方的深度接触，实现品牌活动的真正成效。</span></span></p>                </div>
            </div>
        </div>
<!--         <div class="section-float">activity</div> -->
    </div>

    <!-- 联系我们  -->
    <div class="uk-height-large uk-background-cover uk-overflow-hidden uk-light uk-flex uk-flex-top" style="background-image: url('https://getuikit.com/docs/images/photo.jpg');">
        <div class="uk-width-1-2@m uk-text-center  uk-margin-auto-vertical">
            <article class="uk-article uk-text-left">

                <h1 class="uk-article-title">广州博放广告有限公司</h1>
            
                <p class="uk-article-meta">Guangzhou Bofang Advertising Co., Ltd.</p>
            
            	<h1 class="uk-article-title">博放的力量，让世界认识你。</h1>
            	
            	<p class="uk-article-meta">The power of Bo Fang will let the world know you.</p>
            	
                <p class="uk-text-lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip.</p>
            
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            
                
            
            </article>
        </div>
    </div>

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

    <!--弹框-->
    <div class="home-pop" id="home-pop">
        <div class="pop-con">
            <!--pc关闭-->
            <div class="pop-close g-lg-show"></div>
            <!--移动关闭-->
            <div class="pop-mo-close g-lg-hidden"></div>
            <div class="pop-box">
                <div class="pop-first">
                    <!--<div class="pop-title clearfloat">
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
                </div>-->
                </div>

                <!--弹框轮播-->
                <div class="pop-swiper">
                    <div class="swiper-container swiper-pop">
                        <div class="swiper-wrapper">
                            <!--<div class="swiper-slide">
                            <img src="http://hkmax.net/templates/specialty/images/pop-img01.jpg" alt="" class="item-img">
                        </div>
                        <div class="swiper-slide">
                            <img src="http://hkmax.net/templates/specialty/images/pop-img01.jpg" alt="" class="item-img">

                        </div>-->
                        </div>
                    </div>
                    <div class="pop-left"></div>
                    <div class="pop-right"></div>
                </div>
                <div class="pop-tags">
                    <!--<div class="pop-desc" style="display:block">
                    <p>0</p>
                </div>
                <div class="pop-desc">
                    <p>1</p>
                </div>
                <div class="pop-desc">
                    <p>2</p>
                </div>-->
                </div>
				<div class="pop-article">
				
				</div>

                <a class="pop-mo-top" href="javascript:;"></a>
            </div>
        </div>
    </div>



</body>
<script type="text/javascript" src="/assets/js/core.js"></script>
<script type="text/javascript" src="/assets/js/script.js"></script>

</html>