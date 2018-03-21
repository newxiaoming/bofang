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

    <link rel="stylesheet" href="http://hkmax.net/templates/specialty/style/core.css" />
    <link rel="stylesheet" href="http://hkmax.net/templates/specialty/style/style.css" />
    <script type="text/javascript" src="http://hkmax.net/templates/specialty/script/jquery.js"></script>
    <script>
          var _hmt = _hmt || [];
          (function() {
          var hm = document.createElement("script");
          hm.src = "https://hm.baidu.com/hm.js?cf680986e5a7a795f1afaf07fc6ebf6d";
          var s = document.getElementsByTagName("script")[0];
          s.parentNode.insertBefore(hm, s);
          })();
     </script>
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
        <div class="site-banner g-xs-hidden g-sm-hidden" style="background-image: url('http://hkmax.net/upfile/2017/11/20171120151937_336.jpg')"></div>
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
        <div class="san-title">
            <span class="num">02</span>
            <span class="name">about</span>
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
                    <p class="MsoNormal"><span style="font-size: large; color: #333333;"><span style="font-family: 黑体;">发掘品牌价值最大化方程式，</span><span style="font-family: 黑体;">从基底注入源动力，构建梦想中的品牌。</span></span></p>
<p class="MsoNormal"><span style="font-family: 黑体; font-size: small; color: #808080;">以多年国际化实战经验，为品牌洞悉市场行业的千变万化，找到自身的核心价值，拉升品牌差异化，使品牌各大系统的发展有了基石所在，构建出自己的一个王国。</span></p>
<p class="MsoNormal"><span style="font-family: 黑体; font-size: small; color: #808080;">同时，MAX为品牌在不同阶段的发展进程指明方向、一路护航，前瞻性的商业模式规划，助力品牌在市场各种状态下皆发挥最大优势，创造品牌价值最大化。&nbsp; &nbsp;</span></p>                </div>
            </div>
        </div>
        <div class="section-float">branding</div>
    </div>
    <div class="section2">
        <div class="g-row">
            <div class="box">
                <div class="section-img wow fadeInRight" style="background-image: url('http://hkmax.net/upfile/2017/10/20171012142956_754.jpg');"></div>
            </div>
            <div class="left">
                <div class="section-desc">
                    <p><span style="font-size: large; font-family: 黑体; color: #333333;">植根于商业思维上的视觉营销，助力品牌抢占市场，无限商机一触即发。</span></p>
<p><span style="font-size: small; color: #888888; font-family: 黑体;">富有创意的视觉营销方式，把商业思维与视觉美学相结合，</span><span style="color: #888888; font-family: 黑体; font-size: small;">从VI视觉识别系统及SI终端店铺识别系统，为品牌进行形象系统的全面规划与构建。</span></p>
<p><span style="color: #888888; font-family: 黑体; font-size: small;">创造富有视觉吸引力的独特品牌形象，抢占消费者的目光赢取先机。使品牌在同行业竞争中，完美脱颖而出。</span></p>                </div>
                <div class="section-float2">design</div>
            </div>
            <div class="section-float3">design</div>
        </div>
    </div>
    <div class="section">
        <div class="g-row">
            <div class="g-col-lg-12 box">
                <div class="section-img wow fadeInLeft" style="background-image: url('http://hkmax.net/upfile/2017/10/20171012143147_513.jpg');"></div>
            </div>
            <div class="right">
                <div class="section-desc">
                    <p><span style="color: #333333; font-family: 黑体; font-size: large; letter-spacing: 0pt; text-indent: 0pt;">多样化活动策划与执行，全面激活品牌影响力。</span></p>
<p class="p" style="margin: 0pt; text-indent: 0pt; padding: 0pt;"><span style="font-size: small;"><span style="font-family: 黑体; color: #888888; letter-spacing: 0pt;">MAX拥有丰富的活动策划与执行经验，为品牌提供全面覆盖各</span><span style="font-family: 黑体; color: #888888; letter-spacing: 0pt;"><span style="font-family: 黑体;">渠道的定制化活动服务，最大化配合品牌的战略目的。无论是面向消费者还是加盟商，</span>MAX都将助力品牌完成多方的深度接触，实现品牌活动的真正成效。</span></span></p>                </div>
            </div>
        </div>
        <div class="section-float">activity</div>
    </div>

    <!--pc数字-->
    <div class="container num-word g-xs-hidden">
        <div class="g-row">
            <div class="g-col-sm-6 box">
                <span class="num">24+</span>
                <span class="word">years</span>
                <img src="http://hkmax.net/templates/specialty/images/num-img01.png" alt="" class="img01">
                <img src="http://hkmax.net/templates/specialty/images/num-img04.png" alt="" class="img02">
            </div>
            <div class="g-col-sm-6 box">
                <span class="num">1</span>
                <span class="word">team</span>
                <img src="http://hkmax.net/templates/specialty/images/num-img02.png" alt="" class="left">
                <img src="http://hkmax.net/templates/specialty/images/num-img02.png" alt="" class="right">
                <img src="http://hkmax.net/templates/specialty/images/num-img06.png" alt="" class="top">
                <img src="http://hkmax.net/templates/specialty/images/num-img06.png" alt="" class="bottom">
            </div>
            <div class="g-col-sm-6 box">
                <span class="num">500+</span>
                <span class="word">cases</span>
                <img src="http://hkmax.net/templates/specialty/images/num-img02.png" alt="" class="right">
                <img src="http://hkmax.net/templates/specialty/images/num-img06.png" alt="" class="bottom">
            </div>
            <div class="g-col-sm-6 box">
                <span class="num">200+</span>
                <span class="word">employees</span>
                <img src="http://hkmax.net/templates/specialty/images/num-img03.png" alt="" class="img03">
                <img src="http://hkmax.net/templates/specialty/images/num-img05.png" alt="" class="img04">
            </div>
        </div>
    </div>

    <!--移动数字-->
    <div class="container mo-num-word g-xs-show">
        <div class="g-row">
            <div class="g-col-xs-12 box">
                <p class="num">24+</p>
                <p class="word">years</p>
            </div>
            <div class="g-col-xs-12 box">
                <p class="num">1</p>
                <p class="word">team</p>
            </div>
            <div class="g-col-xs-12 box">
                <p class="num">500+</p>
                <p class="word">cases</p>
            </div>
            <div class="g-col-xs-12 box">
                <p class="num">200+</p>
                <p class="word">employees</p>
            </div>
        </div>
        <img src="http://hkmax.net/templates/specialty/images/num-img01.png" alt="" class="img01">
        <img src="http://hkmax.net/templates/specialty/images/num-img02.png" alt="" class="img02">
        <img src="http://hkmax.net/templates/specialty/images/num-img07.png" alt="" class="img03">
        <img src="http://hkmax.net/templates/specialty/images/num-img09.png" alt="" class="img04">
        <img src="http://hkmax.net/templates/specialty/images/num-img03.png" alt="" class="img05">
        <img src="http://hkmax.net/templates/specialty/images/num-img10.png" alt="" class="img06">
        <img src="http://hkmax.net/templates/specialty/images/num-img04.png" alt="" class="img07">
        <img src="http://hkmax.net/templates/specialty/images/num-img06.png" alt="" class="img08">
        <img src="http://hkmax.net/templates/specialty/images/num-img05.png" alt="" class="img09">
    </div>

    <!--word案例轮播-->
    <div class="case-title" id="word">
        <div class="container">
            <span class="num">04</span>
            <span class="word">works</span>
        </div>
    </div>
    <div class="swiper-container word-swiper" id="word-swiper">
        <div class="swiper-wrapper">
                       <div class="swiper-slide" data-id="80">
                <div class="item-img">
                    <img src="http://hkmax.net/upfile/2017/10/20171010115459_257.jpg" alt="">
                    <div class="item-mark-white">
                        <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
                        <p class="mark-desc">客吉莱</p>
                    </div>
                </div>

            </div>
			            <div class="swiper-slide" data-id="79">
                <div class="item-img">
                    <img src="http://hkmax.net/upfile/2017/10/20171010115531_745.jpg" alt="">
                    <div class="item-mark-white">
                        <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
                        <p class="mark-desc">茶阅世界</p>
                    </div>
                </div>

            </div>
			            <div class="swiper-slide" data-id="42">
                <div class="item-img">
                    <img src="http://hkmax.net/upfile/2017/10/20171010115608_963.jpg" alt="">
                    <div class="item-mark-white">
                        <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
                        <p class="mark-desc">忘不了</p>
                    </div>
                </div>

            </div>
			            <div class="swiper-slide" data-id="41">
                <div class="item-img">
                    <img src="http://hkmax.net/upfile/2017/10/20171010115627_274.jpg" alt="">
                    <div class="item-mark-white">
                        <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
                        <p class="mark-desc">Social &amp; Co 华菁酒吧</p>
                    </div>
                </div>

            </div>
			            <div class="swiper-slide" data-id="40">
                <div class="item-img">
                    <img src="http://hkmax.net/upfile/2017/10/20171024175022_575.jpg" alt="">
                    <div class="item-mark-white">
                        <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
                        <p class="mark-desc">宝时捷</p>
                    </div>
                </div>

            </div>
			            <div class="swiper-slide" data-id="39">
                <div class="item-img">
                    <img src="http://hkmax.net/upfile/2017/10/20171024175226_362.png" alt="">
                    <div class="item-mark-white">
                        <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
                        <p class="mark-desc">锺姐</p>
                    </div>
                </div>

            </div>
			            <div class="swiper-slide" data-id="38">
                <div class="item-img">
                    <img src="http://hkmax.net/upfile/2017/10/20171024181646_728.png" alt="">
                    <div class="item-mark-white">
                        <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
                        <p class="mark-desc">7</p>
                    </div>
                </div>

            </div>
			            <div class="swiper-slide" data-id="37">
                <div class="item-img">
                    <img src="http://hkmax.net/upfile/2017/10/20171024181808_908.png" alt="">
                    <div class="item-mark-white">
                        <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
                        <p class="mark-desc">8</p>
                    </div>
                </div>

            </div>
			            <div class="swiper-slide" data-id="36">
                <div class="item-img">
                    <img src="http://hkmax.net/upfile/2017/10/20171027163204_344.jpg" alt="">
                    <div class="item-mark-white">
                        <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
                        <p class="mark-desc">9</p>
                    </div>
                </div>

            </div>
			            <div class="swiper-slide" data-id="35">
                <div class="item-img">
                    <img src="http://hkmax.net/upfile/2017/10/20171027165930_525.jpg" alt="">
                    <div class="item-mark-white">
                        <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
                        <p class="mark-desc">10</p>
                    </div>
                </div>

            </div>
			            <div class="swiper-slide" data-id="34">
                <div class="item-img">
                    <img src="http://hkmax.net/upfile/2017/10/20171027173343_727.jpg" alt="">
                    <div class="item-mark-white">
                        <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
                        <p class="mark-desc">11</p>
                    </div>
                </div>

            </div>
			            <div class="swiper-slide" data-id="33">
                <div class="item-img">
                    <img src="http://hkmax.net/upfile/2017/10/20171027173427_289.jpg" alt="">
                    <div class="item-mark-white">
                        <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
                        <p class="mark-desc">12</p>
                    </div>
                </div>

            </div>
			            <div class="swiper-slide" data-id="32">
                <div class="item-img">
                    <img src="http://hkmax.net/upfile/2017/10/20171027173523_930.jpg" alt="">
                    <div class="item-mark-white">
                        <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
                        <p class="mark-desc">13</p>
                    </div>
                </div>

            </div>
			            <div class="swiper-slide" data-id="31">
                <div class="item-img">
                    <img src="http://hkmax.net/upfile/2017/10/20171027173555_300.png" alt="">
                    <div class="item-mark-white">
                        <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
                        <p class="mark-desc">14</p>
                    </div>
                </div>

            </div>
			            <div class="swiper-slide" data-id="30">
                <div class="item-img">
                    <img src="http://hkmax.net/upfile/2017/10/20171027173722_597.jpg" alt="">
                    <div class="item-mark-white">
                        <img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
                        <p class="mark-desc">15</p>
                    </div>
                </div>

            </div>
			
        </div>
        <div class="swiper-scrollbar"></div>
    </div>

    <script>
        $(function() {
            var wordSwiper = new Swiper('.word-swiper', {
                scrollbar: '.swiper-scrollbar',
                scrollbarDraggable: true,
                spaceBetween: 15,
                slidesPerView: 'auto',
                scrollbarHide: false,
                breakpoints: {
                    600: {
                        slidesPerView: 2,
                        spaceBetween: 10
                    }
                }
            });

        })
    </script>

    <!--case轮播-->
    <div class="container case-con" id="case-swiper">
        <div class="swiper-container case-swiper">
            <div class="swiper-wrapper">
			<div class="swiper-slide">
					<div class="g-row">
																		<div class="item-img item-img01" data-id="78">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030142253_549.jpg')">
								<div class="item-mark">
								<img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
									<p class="mark-desc">泰希姿</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img02" data-id="77">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030142313_975.jpg')">
								<div class="item-mark">
								<img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
									<p class="mark-desc">尚品宅配</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img03" data-id="76">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030142348_341.jpg')">
								<div class="item-mark">
								<img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
									<p class="mark-desc">亨奴</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img04" data-id="75">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030142449_112.jpg')">
								<div class="item-mark">
								<img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
									<p class="mark-desc">星域·芭黎</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img05" data-id="74">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030142604_982.jpg')">
								<div class="item-mark">
								<img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
									<p class="mark-desc">小星辰</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img06" data-id="73">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030142620_690.jpg')">
								<div class="item-mark">
								<img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
									<p class="mark-desc">承兴国际</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img07" data-id="72">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030142723_381.jpg')">
								<div class="item-mark">
								<img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
									<p class="mark-desc">潮飞流</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img08" data-id="71">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030142741_638.jpg')">
								<div class="item-mark">
								<img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
									<p class="mark-desc">勐乐山</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img09" data-id="70">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030142805_988.jpg')">
								<div class="item-mark">
								<img src="http://hkmax.net/templates/specialty/images/bottom.png" alt="" class="mark-img">
									<p class="mark-desc">华香白茶</p>
								</div>
							</div>
						</div>
																																																																																																																																																																																																																																																																																																																																																					</div>
				</div>
								<div class="swiper-slide">
					<div class="g-row">
																																																																																																																														<div class="item-img item-img01" data-id="69">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030173350_612.jpg')">
								<div class="item-mark">
									<p>69</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img02" data-id="68">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030173534_526.jpg')">
								<div class="item-mark">
									<p>68</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img03" data-id="67">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030173550_755.jpg')">
								<div class="item-mark">
									<p>67</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img04" data-id="66">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030173605_640.jpg')">
								<div class="item-mark">
									<p>66</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img05" data-id="65">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030173622_407.jpg')">
								<div class="item-mark">
									<p>65</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img06" data-id="64">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030173634_122.jpg')">
								<div class="item-mark">
									<p>64</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img07" data-id="63">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030173649_123.jpg')">
								<div class="item-mark">
									<p>63</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img08" data-id="62">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030173718_644.jpg')">
								<div class="item-mark">
									<p>62</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img09" data-id="61">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171027153741_265.jpg')">
								<div class="item-mark">
									<p>61</p>
								</div>
							</div>
						</div>
																																																																																																																																																																																																																																									</div>
				</div>
												<div class="swiper-slide">
					<div class="g-row">
																																																																																																																																																																																																																																										<div class="item-img item-img01" data-id="60">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030181019_410.jpg')">
								<div class="item-mark">
									<p>60</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img02" data-id="59">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030181037_480.jpg')">
								<div class="item-mark">
									<p>59</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img03" data-id="58">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030181050_593.jpg')">
								<div class="item-mark">
									<p>58</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img04" data-id="57">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030181106_396.jpg')">
								<div class="item-mark">
									<p>57</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img05" data-id="56">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030181120_496.jpg')">
								<div class="item-mark">
									<p>56</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img06" data-id="55">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030181133_934.jpg')">
								<div class="item-mark">
									<p>55</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img07" data-id="54">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030181151_377.jpg')">
								<div class="item-mark">
									<p>54</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img08" data-id="53">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030181208_536.jpg')">
								<div class="item-mark">
									<p>53</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img09" data-id="52">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030181223_399.jpg')">
								<div class="item-mark">
									<p>52</p>
								</div>
							</div>
						</div>
																																																																																																																													</div>
				</div>
												<div class="swiper-slide">
					<div class="g-row">
																																																																																																																																																																																																																																																																																																																																																						<div class="item-img item-img01" data-id="51">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030171640_778.jpg')">
								<div class="item-mark">
									<p>41</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img02" data-id="50">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030171654_673.jpg')">
								<div class="item-mark">
									<p>42</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img03" data-id="49">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030171709_531.jpg')">
								<div class="item-mark">
									<p>43</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img04" data-id="48">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030171732_827.jpg')">
								<div class="item-mark">
									<p>44</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img05" data-id="47">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030171752_484.jpg')">
								<div class="item-mark">
									<p>45</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img06" data-id="46">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030171809_578.jpg')">
								<div class="item-mark">
									<p>46</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img07" data-id="45">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030171826_867.jpg')">
								<div class="item-mark">
									<p>47</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img08" data-id="44">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030171842_346.jpg')">
								<div class="item-mark">
									<p>48</p>
								</div>
							</div>
						</div>
																								<div class="item-img item-img09" data-id="43">
							<div class="item-bg bg" style="background-image: url('upfile/2017/10/20171030171857_710.jpg')">
								<div class="item-mark">
									<p>49</p>
								</div>
							</div>
						</div>
																	</div>
				</div>
				
            </div>
        </div>
        <div class="case-next g-xs-hidden"></div>
        <div class="case-prev g-xs-hidden"></div>
    </div>

<script>
    $(function() {
        $('.case-con').find('.item-img').addClass('wow zoomIn');
        $('#case-swiper').find('.swiper-slide').each(function(index, ele) {
            var item = $(this).find('.item-img');
            console.log(item);
            item.slice(0, 5).wrapAll("<div class='g-col-sm-10 g-col-xs-24'></div>");
            item.slice(5, 7).wrapAll("<div class='g-col-sm-8 g-col-xs-14'></div>");
            item.slice(7, 9).wrapAll("<div class='g-col-sm-6 g-col-xs-10'></div>");
        })
        var caseSwiper = new Swiper('.case-swiper', {
            nextButton: '.case-next',
            prevButton: '.case-prev',
            loop: true,
        });
    })
</script>

    <!--联系我们-->
    <div class="contact" id="contact">
        <div class="g-row">
            <div class="g-col-lg-12 box">
                <!--移动标题-->
                <div class="mo-title">
                    <span class="num">05</span>
                    <span class="name">contact</span>
                </div>
                <div class="contact-img wow fadeInLeft" style="background-image: url('http://hkmax.net/upfile/2017/10/20171030183012_420.jpg');"></div>
            </div>
            <div class="right">
                <div class="contact-title">
                    <span class="num">05</span>
                    <span class="name">contact</span>
                </div>
                <div class="contact-icon clearfloat wow fadeInUp">
                    <div class="icon-box"><span class="iconfont icon-dizhi">&nbsp;</span> <strong><span class="desc01">国内：广州市东华西路86号丽华大厦20楼</span></strong></div>
<div class="icon-box"><span class="iconfont icon-youjian1">&nbsp;</span> <span class="desc">info@hkmax.net</span></div>
<div class="icon-box"><span class="iconfont icon-shouji">&nbsp;</span> <span class="desc">+8620-83807227</span></div>
<div class="icon-box"><span class="iconfont icon-erji">&nbsp;</span>&nbsp;<span class="desc">+8620-83806587</span></div>
<div class="icon-box weixin"><span class="iconfont icon-weixin-copy-copy">&nbsp;</span> <span class="desc">wechat: hkmax1993</span></div>                </div>
            </div>
        </div>
    </div>


    <div class="copyright">
        <p>© 1996－2017 MAX Made & Design Co. Ltd., all rights reserved design by uweb</p>
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
<script type="text/javascript" src="http://hkmax.net/templates/specialty/script/core.js"></script>
<script type="text/javascript" src="http://hkmax.net/templates/specialty/script/script.js"></script>

</html>