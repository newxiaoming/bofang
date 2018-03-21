'use strict';

// // JavaScript Document

// //按需写入所需的函数名
// $(function () {
//     // 用于测试
//     let h = 0;

//     checkBrowser();

//     // 阻止默认行为写法，Chrome56以上版本
//     // document.addEventListener('touchmove', func, isPassive() ? {
//     //         capture: false,
//     //         passive: false
//     //     } : false);
// })

// // 以下不用可以删除

// //表单相关
// function forms () {

//     //输入框文字清空还原，控制value
//     // <input type="text" value="请输入关键字" />
//     $(".deaSearch .inp").focus(function () {
//         if ($(this).val() == this.defaultValue) {
//             $(this).val("");
//         }
//     }).blur(function () {
//         if ($(this).val() == '') {
//             $(this).val(this.defaultValue);
//         }
//     });

// }

// //简单标签切换
// function tabs (tit, box) {
//     /*html结构
//      <div class="tabs">

//      <div class="tabhd">
//      <ul>
//      <li class="on">标题一</li>
//      <li>标题二</li>
//      </ul>
//      </div>

//      <div class="tabbd">
//      <div>内容一</div>
//      <div>内容二</div>
//      </div>

//      </div>
//      */
//     var $div_li = $(tit).children();
//     var $box_li = $(box).children();
//     var i;
//     $box_li.hide();
//     $div_li.each(function () {
//         if ($(this).hasClass('on'))
//             i = $(this).index();
//     });
//     $box_li.eq(i).show();
//     $div_li.click(function () {
//         $(this).addClass("on").siblings().removeClass("on");
//         var index = $div_li.index(this);
//         $box_li.eq(index).fadeIn("linear").siblings().hide();
//     });
// }

// 判断浏览器
var checkBrowser = function checkBrowser() {
    var userAgent = navigator.userAgent.toLowerCase();
    var msie9 = /msie 9\.0/i.test(userAgent);
    var msie8 = /msie 8\.0/i.test(userAgent);
    var msie7 = /msie 7\.0/i.test(userAgent);
    var msie6 = /msie 6\.0/i.test(userAgent);
    var checkHtml = '';

    // if (msie9 || msie8 || msie7 || msie6) {
    //     $('body').append(checkHtml);
    // };

    if (msie8) {
        checkHtml = '<div class="checkBrowser"><span>您现在使用的是IE8内核，版本过低！建议您升级到IE9+或者使用极速模式浏览，以体验最佳效果!</span><a title="关闭" onclick="checkBrowser.close();">×</a></div>';
        $('body').append(checkHtml);
    } else if (msie7) {
        checkHtml = '<div class="checkBrowser"><span>您现在使用的是IE7内核，版本过低！建议您升级到IE9+或者使用极速模式浏览，以体验最佳效果!</span><a title="关闭" onclick="checkBrowser.close();">×</a></div>';
        $('body').append(checkHtml);
    } else if (msie6) {
        checkHtml = '<div class="checkBrowser"><span>您现在使用的是IE6内核，版本过低！建议您升级到IE9+或者使用极速模式浏览，以体验最佳效果!</span><a title="关闭" onclick="checkBrowser.close();">×</a></div>';
        $('body').append(checkHtml);
    }

    checkBrowser.close = function () {
        $('.checkBrowser').remove();
    };
};

// // 判断是否移动设备
// var isMobile = function () {
//     var sUserAgent = navigator.userAgent.toLowerCase();
//     var bIsIpad = sUserAgent.match(/ipad/i) == "ipad";
//     var bIsIphoneOs = sUserAgent.match(/iphone os/i) == "iphone os";
//     var bIsMidp = sUserAgent.match(/midp/i) == "midp";
//     var bIsUc7 = sUserAgent.match(/rv:1.2.3.4/i) == "rv:1.2.3.4";
//     var bIsUc = sUserAgent.match(/ucweb/i) == "ucweb";
//     var bIsAndroid = sUserAgent.match(/android/i) == "android";
//     var bIsCE = sUserAgent.match(/windows ce/i) == "windows ce";
//     var bIsWM = sUserAgent.match(/windows mobile/i) == "windows mobile";

//     if (bIsIpad || bIsIphoneOs || bIsMidp || bIsUc7 || bIsUc || bIsAndroid || bIsCE || bIsWM) {
//         return true;
//     } else {
//         return false;
//     }
// }

// function func (e) {
//     e.preventDefault();
// }
checkBrowser();
$(function () {
    var popSwiper;
    // pc导航
    $('.site-navbar').find('.navbar-list').on('click', '.item', function () {
        var href = this.dataset.id;
        if (!href) {
            return false;
        };
        var pos = $(href).offset().top;
        $("html,body").animate({
            scrollTop: pos
        }, 1000);
    });

    // 二维码
    $('.site-navbar').find('.icon-weixin3').on('click', function () {
        $('#two-pop').show();
    });

    $('#two-pop').find('.pop-close').on('click', function () {
        $('#two-pop').hide();
    });

    // 移动端底部导航
    $('#mo-navbar').find('.box').on('touchstart', function () {
        var href = this.dataset.id;
        if (!href) {
            return false;
        };
        var pos = $(href).offset().top;
        $("html,body").stop(true, true).animate({
            scrollTop: pos
        }, 1000);
    });

    $('#home-pop').find('.pop-mo-top').on('click', function () {
        $(".pop-box").animate({
            scrollTop: 0
        }, 1000);
    });
    // 加载动画
    var wow = new WOW({
        boxClass: 'wow', // default
        animateClass: 'animated', // default
        offset: 0, // default
        mobile: true, // default
        live: true // default
    });
    wow.init();

    // 返回头部
    var winH = $(window).height();
    var timeout = null;
    $(window).on('scroll', function () {
        if (timeout !== null) {
            clearTimeout(timeout);
        }
        timeout = setTimeout(function () {
            var doctop = $(document).scrollTop();
            console.log(123);
            if (doctop > winH) {
                $('#gotop').fadeIn();
            } else {
                $('#gotop').fadeOut();
            }
        }.bind(this), 200);
    });
    $('#gotop').on('click', function () {
        $('html,body').animate({
            'scrollTop': 0
        }, 500);
    });

    // 弹框请求的ajax函数
    function popAjax(has, o) {
        var host = window.location.host;
        var dataId = $(o).attr('data-id');
        if (!dataId) {
            return false;
        }
        var result;
        var content;
        $.ajax({
            url: 'http://' + host + '/index.php?ac=article&at=getList&infoid=' + dataId,
            method: 'GET',
            dataType: 'json',
            success: function success(data) {
                if (data.msg) {
                    result = data.result;
                } else {
                    return false;
                }
                Render(result, has);
            }
        });
        $.ajax({
            url: 'http://' + host + '/index.php?ac=article&at=getcontent&infoid=' + dataId,
            method: 'GET',
            dataType: 'json',
            success: function success(data) {
                if (data.msg) {
                    content = data.result;
                } else {
                    return false;
                }
                Render02(content);
            }
        });
    }

    // 绑定函数
    $('#word-swiper').find('.swiper-slide').on('click', function (e) {
        e.stopPropagation();
        popAjax(false, this);
    });

    $('#case-swiper').find('.item-img').on('click', function (e) {
        e.stopPropagation();
        popAjax(false, this);
    });

    $('#san-con').find('.san-box').on('click', function (e) {
        e.stopPropagation();
        popAjax(true, this);
    });

    // 渲染函数
    function Render(data, has) {
        var html01 = '';
        var html02 = '';
        var html03 = '';
        var read = data.read;
        var photoList = data.photoList;
        html01 = '<div class="pop-title clearfloat">                    <div class="right">                        <img src="' + read.pic + '" alt="">                        <div class="sub-title">' + read.title + '</div>                    </div>                </div>                <div class="pop-about">                    <span class="title">\u6240\u5C5E\u884C\u4E1A\uFF1A</span>                    <span class="name">' + read.industry + '</span>                </div>                <div class="pop-about">                    <span class="title">\u670D\u52A1\u5185\u5BB9\uFF1A</span>                    <span class="name">' + read.service + '</span>                </div>                <div class="pop-desc">                    <p>' + read.summary + '</p>                </div>';
        for (var index = 0; index < photoList.length; index++) {
            var ele = photoList[index];
            html02 += '<div class="swiper-slide"><img src="' + ele.picfile + '" class="item-img"></div>';
            html03 += '<div class="pop-desc"><p>' + ele.filedes + '</p></div>';
        }
        $('#home-pop').find('.pop-first').show();
        $('#home-pop').find('.pop-swiper').show();
        $('#home-pop').find('.pop-tags').show();
        $('#home-pop').find('.pop-first').html(html01);
        $('#home-pop').find('.swiper-wrapper').html(html02);
        $('#home-pop').find('.pop-tags').html(html03);
        $('#home-pop').css({
            visibility: 'visible'
        });
        $('.pop-box').scrollTop(0);
        $('body').addClass('noscroll');
        // 初始化轮播
        popSwiper = new Swiper('.swiper-pop', {
            nextButton: '.pop-right',
            prevButton: '.pop-left',
            initialSlide: 0,
            autoplay: 4000,
            speed: 1000,
            onSlideChangeEnd: function onSlideChangeEnd(swiper) {
                $('#home-pop').find('.pop-tags .pop-desc').eq(swiper.activeIndex).show().siblings().hide();
            }
        });
        if (has) {
            $('#home-pop').find('.pop-first').hide();
            $('#home-pop').find('.pop-swiper').hide();
            $('#home-pop').find('.pop-tags').hide();
        }
    }

    function Render02(data, dom) {
        var html = '';
        html = data.content;
        $('#home-pop').find('.pop-article').html(html);
    }

    // 关闭弹框
    $('#home-pop').find('.pop-close').on('click', function () {
        $('#home-pop').css({
            visibility: 'hidden'
        });
        $('body').removeClass('noscroll');
        if (popSwiper) {
            popSwiper.destroy(true, true);
            popSwiper = null;
        }
    });

    $('#home-pop').find('.pop-mo-close').on('click', function () {
        $('#home-pop').css({
            visibility: 'hidden'
        });
        $('body').removeClass('noscroll');
        if (popSwiper) {
            popSwiper.destroy(true, true);
            popSwiper = null;
        }
    });
});