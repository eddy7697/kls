<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @yield('custom-meta')

    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<meta name="keywords" content="{{SiteMetaView::keyword()}}">--}}
    {{--<meta name="description" content="{{SiteMetaView::description()}}">--}}
    <link rel="alternate" href="https://www.meansgood.com.tw/" hreflang="zh-TW" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    {{--<title>{{ SiteMetaView::title() }}</title>--}}

    {{--<link rel="shortcut icon" href="{{ SiteMetaView::shortcut() }}">--}}

    <!-- Fonts -->
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/js/plugins/AOS/aos.css">
    <link href="https://fonts.googleapis.com/css?family=Nanum+Brush+Script" rel="stylesheet">
    <link rel="stylesheet" href="\js\plugins\swipe\swiper.min.css">
    <!-- Styles -->
    <style>
        .paytest {
            display: block;
            font-size: 50pt;
        }
    </style>

    {{-- Custom stylesheet --}}
    @yield('custom-style')

</head>
<body>
<div class="loading-bar">
    <img src="/img/icon/default-loading.svg">
</div>

@unless (Auth::guest())
    @if (Auth::user()->role == 'ADMIN')
        {{-- <div class="container-fluid admin-bar">
            <div class="row">
                <div class="col-md-12">
                    <a href="/cyberholic-system/admin">後台入口</a>
                </div>
            </div>
        </div> --}}
    @endif
@endunless

@if (Route::current()->getName() == 'index')
    <div class="forwardNews">
        <a href="">
            2018/07/19 7月份月度直播拍賣會時間：7/21（六）晚上10:00，想看看闆娘仔細介紹的朋友，請點我參加喔！(Live 點我加入直播)
        </a>
    </div>
    <button class="klsBurger-switch">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="klsBurger-menu">
        <div class="klsBurger-menu-inner">
            <div class="klsBurger-menu-logo">
                <a href="/">
                    <img src="/img/KLSLogoWhite.svg" alt="">
                </a>
            </div>
            <ul>
                <li>
                    <a href="{{route('about')}}">
                        關於凱麗絲
                    </a>
                </li>
                <li>
                    <a href="{{route('productAll')}}">
                        品牌行李箱                   
                    </a>
                </li>
                <li>
                    <a href="{{route('productFitting')}}">
                        行李箱配件
                    </a>
                </li>
                <li>
                    <a href="{{url('/blog')}}">
                        部落格
                    </a>
                </li>
                <li>
                    <a href="{{route('location')}}">
                        店鋪資訊
                    </a>
                </li>
                <li class="nav_final">
                    <a href="{{route('contact')}}">
                        諮詢專區
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!------------------------header------------------------>
    <section id="header">
        <div class="header_top_area">
            <div class="header_left">
                <div class="logo_area">
                    <div class="logo">
                        <a href="/" class="mark">
                            <img src="/img/KLSLogoWhite.svg" alt="">
                            <p class="mark_text mark_middle">
                                凱麗絲旅行箱專賣店
                            </p>
                            <p class="mark_text mark_bottom">
                                KLS Baggage Department Store.
                            </p>
                        </a>
                        <div class="mark_time">
                            <img src="/img/time.svg" alt="">
                        </div>
                    </div>
                </div>
                <div class="header_contact">
                    <div class="header_addr">
                        <div class="shop_list">
                            <div class="shop zhubei">
                                <img src="\img\thumbtack.svg" alt="">
                                <div class="shop_contact">
                                    <p>竹北店 (09:00 - 20:00)<br>03-6565528<br>新竹縣竹北市光明六路15號</p>
                                </div>
                            </div>
                            <div class="shop bigcity">
                                <img src="\img\thumbtack.svg" alt="">
                                <div class="shop_contact">
                                    <p>巨城店 (09:00 - 20:00)<br>03-5326191<br>新竹市民權路173號</p>
                                </div>             
                            </div>
                            <div class="shop guanxin">
                                <img src="\img\thumbtack.svg" alt="">
                                <div class="shop_contact">
                                    <p>關新店 (09:00 - 22:00)<br>03-5638999<br>新竹市關新路201號</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="community">
                        <a target="_blank" href="https://www.facebook.com/baggageworld/" class="facebook">
                            <div class="link">
                                <img src="\img\facebook.svg" alt="">
                                <p>
                                    facebook
                                </p>
                            </div>
                        </a>
                        <a target="_blank" href="https://www.instagram.com/kls520/" class="instagram">
                            <div class="link">
                                <img src="\img\instagram.svg" alt="">
                                <p>
                                    instagram
                                </p>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div class="header_right">

                <div class="sw_mask mask_left"></div>
                <div class="sw_mask mask_right">
                    <img class="banner_arrow top" src="\img\big-arrow-01.svg" alt="">
                    {{-- {{count(SiteMetaView::album())}} --}}
                    <p id="banner_count">0<span id="swipe-index">1</span>/0</p>
                    <img class="banner_arrow bottom" src="\img\big-arrow-01.svg" alt="">
                </div>
                
                <div class="swiper-wrapper">

                    @for ($i = 0; $i < 5; $i++)
                        <div class="swiper-slide banner ban_page1">
                            <div class="banner_word">
                                <h1>
                                    我在LA機場的人來人往...
                                </h1>
                                <p>
                                    #長途旅行專用行李箱
                                </p>
                                <p>
                                    #30吋/29吋熱賣中
                                </p>
                                <p>
                                    #PC硬殼箱
                                </p>
                                <img class="banner_Thumbtack" src="/img/thumbtack-white-01.svg" alt="">
                                <p class="eng">
                                    10285 Post Way,Los Angeles,LAX AirPort,洛杉磯機場
                                </p>
                            </div>
                        </div>
                    @endfor

                </div>
                <div class="swiper-pagination"></div> 
            </div>
        </div>
        
        <div class="navbar" data-hover= "hide">
            <ul>
                <li>
                    <a href="{{route('about')}}">
                        關於凱麗絲
                    </a>
                </li>
                <li>
                    <a href="{{route('productAll')}}">
                        品牌行李箱                   
                    </a>
                </li>
                <li>
                    <a href="{{route('productFitting')}}">
                        行李箱配件
                    </a>
                </li>
                <li>
                    <a href="{{url('/blog')}}">
                        部落格
                    </a>
                </li>
                <li>
                    <a href="{{route('location')}}">
                        店鋪資訊
                    </a>
                </li>
                <li class="nav_final">
                    <a href="{{route('contact')}}">
                        諮詢專區
                        <span class="caret"></span>
                    </a>
                    <ul id="contact-menu">
                        <li>
                            <a href="#">
                                安全購物宣言
                            </a>
                        </li>
                        <li>
                            <a href="https://law.moj.gov.tw/LawClass/LawAll.aspx?PCode=I0050021">
                                隱私權條款
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">
                                聯絡我們
                            </a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}">
                                第四選項
                            </a>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
        
    </section>
@else
    <button class="klsBurger-switch">
        <span></span>
        <span></span>
        <span></span>
        <span></span>
    </button>
    <div class="klsBurger-menu">
        <div class="klsBurger-menu-inner">
            <div class="klsBurger-menu-logo">
                <a href="/">
                    <img src="/img/KLSLogoWhite.svg" alt="">
                </a>
            </div>
            <ul>
                <li>
                    <a href="{{route('about')}}">
                        關於凱麗絲
                    </a>
                </li>
                <li>
                    <a href="{{route('productAll')}}">
                        品牌行李箱                   
                    </a>
                </li>
                <li>
                    <a href="{{route('productFitting')}}">
                        行李箱配件
                    </a>
                </li>
                <li>
                    <a href="{{url('/blog')}}">
                        部落格
                    </a>
                </li>
                <li>
                    <a href="{{route('location')}}">
                        店鋪資訊
                    </a>
                </li>
                <li class="nav_final">
                    <a href="{{route('contact')}}">
                        諮詢專區
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <section>
        <div class="container-fulid sub-page-header">
            <div class="row sub-page-header-inner">
                <div class="sub-logo">
                    <a href="/">
                        <img src="/img/KLSLogoBlack.svg" alt="">
                    </a>
                </div>
                <div class="sub-nav-menu">
                    <ul>
                        <li>
                            <a href="{{route('about')}}">
                                關於凱麗絲
                            </a>
                        </li>
                        <li>
                            <a href="{{route('productAll')}}">
                                品牌行李箱                   
                            </a>
                        </li>
                        <li>
                            <a href="{{route('productFitting')}}">
                                行李箱配件
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/blog')}}">
                                部落格
                            </a>
                        </li>
                        <li>
                            <a href="{{route('location')}}">
                                店鋪資訊
                            </a>
                        </li>
                        <li class="nav_final">
                            <a href="{{route('contact')}}">
                                諮詢專區
                            </a>
                        </li>
                        <li class="sub-icon">
                            <img src="\img\likeIcon.png" alt="">
                        </li>
                        <li class="sub-icon" id="cart-panel">
                            <cart-panel></cart-panel>
                            {{-- <img src="\img\cartIcon.png" alt=""> --}}
                        </li>
                    </ul> 
                </div>
            </div>
        </div> 
    </section>
@endif



@yield('content')

<!------------------------footer------------------------>
@if (Route::current()->getName() == 'index')
    <section id="footer">
        <div class="footer_logo">
            <div class="logo_area">
                <div class="logo">
                    <a href="/" class="mark">
                        <img src="/img/KLSLogoWhite.svg" alt="">
                        <p class="mark_text mark_middle">
                            凱麗絲旅行箱專賣店
                        </p>
                        <p class="mark_text mark_bottom">
                            KLS Baggage Department Store.
                        </p>
                    </a>
                </div>
                <p class="footerCopyRight">Copyright  ©  2018 凱麗斯旅行箱包 KLS Baggage Department Store. All Rights Reserved.</p>
            </div>
        </div>
        <div class="footer_contact">
            <div class="footer_addr">
                <div class="shop_list">
                    <div class="shop zhubei">
                        <img src="\img\thumbtack.svg" alt="">
                        <div class="shop_contact">
                            <p>竹北店 (09:00 - 20:00)</p>
                            <p>03-6565528</p>
                            <p>新竹縣竹北市光明六路15號</p>
                        </div>
                    </div>
                    <div class="shop bigcity">
                        <img src="\img\thumbtack.svg" alt="">
                        <div class="shop_contact">
                            <p>巨城店 (09:00 - 20:00)</p>
                            <p>03-5326191</p>
                            <p>新竹市民權路173號</p>
                        </div>             
                    </div>
                    <div class="shop guanxin">
                        <img src="\img\thumbtack.svg" alt="">
                        <div class="shop_contact">
                            <p>關新店 (09:00 - 22:00)</p>
                            <p>03-5638999</p>
                            <p>新竹市關新路201號</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="community">
                <a target="_blank" href="https://www.facebook.com/baggageworld/" class="facebook">
                    <div class="link">
                        <img src="\img\facebook.svg" alt="">
                        <p>
                            facebook
                        </p>
                    </div>
                </a>
                <a target="_blank" href="https://www.instagram.com/kls520/" class="instagram">
                    <div class="link">
                        <img src="\img\instagram.svg" alt="">
                        <p>
                            instagram
                        </p>
                    </div>
                </a>
            </div>
        </div>
        <div class="footer_copy">
            <div class="footer_copy_textArea">
                <p>陪伴，你每一場華麗的冒險。</p>
                <p>Every gorgeous adventure, with you.</p>
            </div>
            <p class="footerCopyRight">Copyright  ©  2018 凱麗斯旅行箱包 KLS Baggage Department Store. All Rights Reserved.</p>
        </div>
    </section>
@else
    <section>
        <div class="container-fulid sub-page-footer">
            <div class="row sub-page-footer-inner">
                <div class="sub-logo">
                    <a href="/">
                        <img src="/img/KLS_logo_white.svg" alt="">
                    </a>
                </div>
                <div class="sub-nav-menu">
                    <ul>
                        <li>
                            <a href="{{route('about')}}">
                                關於凱麗絲
                            </a>
                        </li>
                        <li>
                            <a href="{{route('productAll')}}">
                                品牌行李箱                   
                            </a>
                        </li>
                        <li>
                            <a href="{{route('productFitting')}}">
                                行李箱配件
                            </a>
                        </li>
                        <li>
                            <a href="{{url('/blog')}}">
                                部落格
                            </a>
                        </li>
                        <li>
                            <a href="{{route('location')}}">
                                店鋪資訊
                            </a>
                        </li>
                        <li class="nav_final">
                            <a href="{{route('contact')}}">
                                諮詢專區
                            </a>
                        </li>
                    </ul> 
                </div>
                <div class="sub-contact-icon">
                    <div class="sub-icons">
                        <img src="\img\facebook-white.svg" alt="">
                        <img src="\img\instagram-white.svg" alt="">
                        <img src="\img\line_icon.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="row sub-page-footer-copyright">
                <div class="col-md-12">
                    <div class="sub-page-footer-copyright-inner">
                        <div class="copyRight">
                            <p>Copyright © 2018 凱麗斯旅行箱包 KLS Baggage Department Store. All Rights Reserved.</p>
                        </div>
                        <div class="needKnow">
                            <p><span>隱私權條款</span> | <span>購物須知</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
@endif


<!-- Scripts -->
<script src="{{ asset('js/frontend.js') }}"></script>

<script src="{{ asset('js/cart-panel.js') }}"></script>

<script src="{{ asset('js/CH-lib.js') }}"></script>

<script src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<script src="{{ asset('js/plugins/AOS/aos.js') }}" charset="utf-8"></script>

<script src="\js\plugins\swipe\swiper.min.js"></script>

<script type="text/javascript">
    AOS.init();
</script>

{{-- Custom scripts --}}
@yield('custom-script')

@if(config('app.env') == 'local')
    <script src="http://localhost:35729/livereload.js"></script>
@endif

<script>

    // heights
      
$(document).ready(() => {

    function get_H(){

        let h      = $(window).height()
        let logo_h = $('.logo').height()
        let nav_h  = $('.navbar').height()

        $('#header').css('height',h)
            
    };
    get_H()

    $(window).resize(() => {
        get_H()
    });

    $('.klsBurger-switch').on('click',function(){
        $(this).toggleClass('openNow');
        $('.klsBurger-menu').toggleClass('openNow-menu');
        $('section').toggleClass('openNow-filter');
    });
    

    $(function() {
        try {
            var fix   = $('.navbar');                      //title
            var fixTop= fix.offset().top              //title 與頂部的距離
           
    
            $(window).scroll(() => {
                // 頁面與頂部高度
                var docTop = Math.max(document.body.scrollTop, document.documentElement.scrollTop);  
                if (fixTop < docTop) {
                    fix.css({
                        'position': 'fixed',
                        'top'     : 0,
                        'width'   : '100%',
                        'z-index' : '99999'
                        })
                } else {
                    fix.css("position","relative");
                    }
                })
        } catch (error) {
            console.log(error.message)
        }
        
    });


    var swiper = new Swiper ('.header_right',{
        direction : 'vertical',
        loop      : true,
        speed     : 1000,
        pagination: {
            el: '.swiper-pagination',
            clickable: true
        },
        autoplay  : {
            delay: 10000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: '.top',
            prevEl: '.bottom',
        },
        on:{
            transitionStart: function(){
                $('.banner_word').css({
                    'opacity'   : 0,
                    'transform' : 'translateY(100%) translateX(-20%)',
                    'transition': '0.3s'
                })
            },
            transitionEnd: function(){
                $('.banner_word').css({
                    'opacity'   : 1,
                    'transform' : 'translateY(-60%) translateX(-20%)',
                    'transition': '0.8s'
                })
            },
        }
    });
    //data-hover= "hide"
    $('.navbar').hover(()=>{
        $(this).attr('data-hover','show');
    },()=>{
        $(this).attr('data-hover','hide');
    });
    
    $('li.nav_final').hover(()=>{
        $('#contact-menu').addClass('contact-menu-open');
    },()=>{
        $('#contact-menu').removeClass('contact-menu-open');
    })
});

   

                  
        
</script>

</body>
</html>
