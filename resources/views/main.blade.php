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
            <div class="loading-bar-inner">
                <svg id="loading_svg" data-name="loading_svg" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 300 300"><defs><style>.cls-1{font-size:204.59px;fill:#1a1a1a;font-family:BrushScriptMT, Brush Script MT;font-style:italic;}.cls-2{font-family:BrushScriptMT, Brush Script MT;font-style:italic;font-size:117.34px;}.cls-3{font-family:BrushScriptMT, Brush Script MT;font-style:italic;fill:#fbb03b;}</style></defs><title>KLS-loading</title><text class="cls-1" transform="translate(5.4 206.45)">K<tspan class="cls-2" x="134.16" y="0">LS</tspan></text><path class="cls-3" d="M109.27,76.4l-3.59-21.57L118.54,60l7.73-15.59L134,60l12.87-5.19-3.61,21.57a5.25,5.25,0,0,1-5.15,4.41H114.16A5,5,0,0,1,109.27,76.4Z"/><ellipse class="cls-3" cx="126.37" cy="44.45" rx="5.12" ry="5.1"/><ellipse class="cls-3" cx="146.85" cy="54.65" rx="5.12" ry="5.1"/><ellipse class="cls-3" cx="105.88" cy="54.63" rx="5.12" ry="5.1"/></svg>
                <div class="loader">
                    <h1></h1>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
            
        </div>

        <button class="klsBurger-switch">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </button>
        
        <div class="klsBurger-menu">
            <div class="burge-link">
                <a target="_blank" href="https://www.facebook.com/baggageworld/" class="facebook">
                    <div class="link">
                        <img src="\img\fb_white-01.svg" alt="">
                    </div>
                </a>
                <a target="_blank" href="https://www.instagram.com/kls520/" class="instagram">
                    <div class="link">
                        <img src="\img\ig_white-01.svg" alt="">
                    </div>
                </a>
            </div>
            <div class="klsBurger-menu-inner">
                <div class="klsBurger-menu-logo">
                    <a href="/">
                        <img src="/img/KLSLogoWhite.png" alt="">
                    </a>
                </div>
                <ul> 
                    <li>
                        <a href="{{route('about')}}">
                            關於凱麗斯
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

        {{-- <div class="fixed-button-group">
            <a>
                <img style="cursor: pointer" class="pointer scrollToTop" src="/img/icon/backtotop-01.svg" alt="">
            </a>
            <a href="/cart">
                <img style="cursor: pointer; background-color: #F8A94B; border-radius: 50%; padding: 10px;" class="pointer" src="/img/icon/shoppingcar-01.svg" alt="">
            </a>
        </div> --}}

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

        <div class="kls-page">

            <div class="kls_rwd_menu">
                <a href="/">
                    <img src="/img/KLSLogoBlack-01.png" alt="">
                </a>
            </div>

            @if (Route::current()->getName() == 'index')

                {{-- <div class="forwardNews">
                    <a href="">
                        2018/07/19 7月份月度直播拍賣會時間：7/21（六）晚上10:00，想看看闆娘仔細介紹的朋友，請點我參加喔！(Live 點我加入直播)
                    </a>
                </div> --}}
                
                <!------------------------header------------------------>
                <section id="header">
                    <div class="header_top_area">
                        <div class="header_left">
                            <div class="scrollDown">
                                <div class="chevron"></div>
                                <div class="chevron"></div>
                                <div class="chevron"></div>
                                <span class="text">Scroll down</span>
                            </div>
                            <div class="logo_area">
                                <div class="logo">
                                    <a href="/" class="mark">
                                        <img src="/img/KLSLogoWhite.png" alt="">
                                        <p class="mark_text mark_middle">
                                            凱麗斯旅行箱專賣店
                                        </p>
                                        <p class="mark_text mark_bottom">
                                            KLS Baggage Department Store.
                                        </p>
                                    </a>
                                    {{-- <div class="mark_time">
                                        <img src="/img/time.svg" alt="">
                                    </div> --}}
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
                                <p id="banner_count">0<span id="swipe-index">1</span> / <span id="swipe-length">0</span> {{-- {{count(SiteMetaView::album())}} --}}</p>
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
                    
                    <div class="navbar">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12">
                                    <ul class="navbar-ul">
                                        <li class="navbar-ul-li">
                                            <a href="/">
                                                <p>
                                                    首頁
                                                </p>
                                            </a>
                                        </li>
                                        <li class="navbar-ul-li">
                                            <a href="{{route('about')}}">
                                                <p>
                                                    關於凱麗斯
                                                </p>
                                            </a>
                                        </li>
                                        <li class="navbar-ul-li mega-menu dropdown dropdown-large">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <p>
                                                    所有商品
                                                    <span class="caret"></span>
                                                </p>
                                            </a>      
                                            <ul class="mega-menu-product dropdown-menu dropdown-menu-large row">
                                                <li class="col-sm-2 mega-menu-title">
                                                    <h2>所有商品</h2>
                                                    <p>ALL PRODUCT</p>
                                                </li>
                                                <li class="col-sm-3 mega-menu-list">
                                                    <ul>
                                                        <li>
                                                            <a href="{{route('productAll')}}">
                                                                品牌行李箱                   
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('productFitting')}}">
                                                                旅行配件
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('productFittingBag')}}">
                                                                品牌背包
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="col-md-4 mega-menu-img">
                                                    <div class="dropdown-menu-inner-img" style="background-image:url('/img/megaMenuProduct.jpg')"></div>
                                                </li>
                                                <li class="col-md-3 mega-menu-text">
                                                    <div class="dropdown-menu-inner-text">
                                                        <p>凱麗斯嚴選各大品牌行李箱配件，此區包含有行李箱綁帶、行李秤、收納袋與各式旅行配件，讓您更完善您的旅行體驗，當您在完成旅行夥伴選購後，務必前來更完善您的遠征體驗。</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li class="navbar-ul-li">
                                            <a href="{{url('/blog')}}">
                                                <p>
                                                    部落格
                                                </p>
                                            </a>
                                        </li>
                                        {{-- <li class="navbar-ul-li">
                                            <a href="/">
                                                <p>
                                                    最新消息
                                                </p>
                                            </a>
                                        </li> --}}
                                        <li class="navbar-ul-li">
                                            <a href="{{route('location')}}">
                                                <p>
                                                    店鋪資訊
                                                </p>
                                            </a>
                                        </li>
                                        <li class="navbar-ul-li mega-menu dropdown dropdown-large">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                <p  style="border-right: none;">
                                                    諮詢專區
                                                    <span class="caret"></span>
                                                </p>
                                            </a>
                                            <ul class="mega-menu-product dropdown-menu dropdown-menu-large row">
                                                <li class="col-sm-2 mega-menu-title">
                                                    <h2>諮詢專區</h2>
                                                    <p>CONSULTING AREA</p>
                                                </li>
                                                <li class="col-sm-3 mega-menu-list">
                                                    <ul>
                                                        <li>
                                                            <a href="{{url('/about/privacy')}}"> {{--  href="https://law.moj.gov.tw/LawClass/LawAll.aspx?PCode=I0050021" --}}
                                                                隱私權條款
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{url('/about/notice')}}">
                                                                購物需知
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('contact')}}">
                                                                諮詢專區
                                                            </a>
                                                        </li>
                                                        {{-- <li>
                                                            <a href="">
                                                                安心購物宣言
                                                            </a>
                                                        </li> --}}
                                                    </ul>
                                                </li>
                                                <li class="col-md-4 mega-menu-img">
                                                    <div class="dropdown-menu-inner-img" style="background-image:url('/img/megaMenuProduct.jpg')"></div>
                                                </li>
                                                <li class="col-md-3 mega-menu-text">
                                                    <div class="dropdown-menu-inner-text">
                                                        <p>凱麗斯嚴選各大品牌行李箱配件，此區包含有行李箱綁帶、行李秤、收納袋與各式旅行配件，讓您更完善您的旅行體驗，當您在完成旅行夥伴選購後，務必前來更完善您的遠征體驗。</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                    </ul> 
                                </div>
                            </div>
                        </div>
                        <div class="navbar-icon">
                            <a href="/">
                                <img src="/img/navbar-heart-01.png" alt="">
                            </a>
                            <div id="cart-panel">
                                <cart-panel />
                            </div>
                        </div>
                    </div>
                </section>

            @else
                
                <section>
                    <div class="sub-page-header">
                        <div class="container">
                            <div class="row sub-page-header-inner">
                                <div class="sub-logo">
                                    <a href="/">
                                        <img src="/img/KLSLogoBlack-01.png" alt="">
                                    </a>
                                </div>
                                <div class="sub-nav-menu">
                                    <ul class="sub-nav-menu-ul">
                                        <li>
                                            <a class="sub-nav-menu-ul-a" href="{{route('about')}}">
                                                關於凱麗斯
                                            </a>
                                        </li>
                                        <li class="mega-menu dropdown dropdown-large">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                所有商品
                                                <span class="caret"></span>
                                            </a>
                                            <ul class="mega-menu-product dropdown-menu dropdown-menu-large product row">
                                                <li class="col-sm-2 mega-menu-title">
                                                    <h2>所有商品</h2>
                                                    <p>ALL PRODUCT</p>
                                                </li>
                                                <li class="col-sm-3 mega-menu-list">
                                                    <ul>
                                                        <li>
                                                            <a href="{{route('productAll')}}">
                                                                品牌行李箱                   
                                                            </a>
                                                        </li>
                                                        <li>
                                                            <a href="{{route('productFitting')}}">
                                                                旅行配件
                                                            </a>
                                                        </li>
                                                    <li>
                                                        <a href="{{route('productFittingBag')}}">
                                                                品牌背包
                                                            </a>
                                                        </li>
                                                    </ul>
                                                </li>
                                                <li class="col-md-4 mega-menu-img">
                                                    <div class="dropdown-menu-inner-img" style="background-image:url('/img/megaMenuProduct.jpg')"></div>
                                                </li>
                                                <li class="col-md-3 mega-menu-text">
                                                    <div class="dropdown-menu-inner-text">
                                                        <p>凱麗斯嚴選各大品牌行李箱配件，此區包含有行李箱綁帶、行李秤、收納袋與各式旅行配件，讓您更完善您的旅行體驗，當您在完成旅行夥伴選購後，務必前來更完善您的遠征體驗。</p>
                                                    </div>
                                                </li>
                                            </ul>
                                        </li>
                                        <li>
                                            <a class="sub-nav-menu-ul-a" href="{{url('/blog')}}">
                                                部落格
                                            </a>
                                        </li>
                                        <li>
                                            <a class="sub-nav-menu-ul-a" href="{{route('location')}}">
                                                店鋪資訊
                                            </a>
                                        </li>
                                        <li class="mega-menu dropdown dropdown-large">
                                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                                    諮詢專區
                                                    <span class="caret"></span>
                                                </a>
                                                <ul class="mega-menu-product dropdown-menu dropdown-menu-large contact row">
                                                    <li class="col-sm-2 mega-menu-title">
                                                        <h2>諮詢專區</h2>
                                                        <p>CONSULTING AREA</p>
                                                    </li>
                                                    <li class="col-sm-3 mega-menu-list">
                                                        <ul>
                                                            <li>
                                                                <a href="{{url('/about/privacy')}}"> {{--  href="https://law.moj.gov.tw/LawClass/LawAll.aspx?PCode=I0050021" --}}
                                                                    隱私權條款
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{url('/about/notice')}}">
                                                                    購物需知
                                                                </a>
                                                            </li>
                                                            <li>
                                                                <a href="{{route('contact')}}">
                                                                    諮詢專區
                                                                </a>
                                                            </li>
                                                            {{-- <li>
                                                                <a href="">
                                                                    安心購物宣言
                                                                </a>
                                                            </li> --}}
                                                        </ul>
                                                    </li>
                                                    <li class="col-md-4 mega-menu-img">
                                                        <div class="dropdown-menu-inner-img" style="background-image:url('/img/megaMenuProduct.jpg')"></div>
                                                    </li>
                                                    <li class="col-md-3 mega-menu-text">
                                                        <div class="dropdown-menu-inner-text">
                                                            <p>凱麗斯嚴選各大品牌行李箱配件，此區包含有行李箱綁帶、行李秤、收納袋與各式旅行配件，讓您更完善您的旅行體驗，當您在完成旅行夥伴選購後，務必前來更完善您的遠征體驗。</p>
                                                        </div>
                                                    </li>
                                                </ul>
                                            </li>
                                        <li class="sub-icon">
                                            <a href="">
                                                <img style="width: 17px;" src="\img\likeIcon-01.png" alt="">
                                            </a>
                                            <div id="cart-panel">
                                                <cart-panel />
                                            </div>
                                        </li>
                                    </ul> 
                                </div>
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
                                    <img src="/img/KLSLogoWhite.png" alt="">
                                    <p class="mark_text mark_middle">
                                        凱麗斯旅行箱專賣店
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
                                    <img src="/img/KLS_logo_white.png" alt="">
                                </a>
                            </div>
                            <div class="sub-nav-menu">
                                <ul class="sub-nav-menu-ul">
                                    <li>
                                        <a href="{{route('about')}}">
                                            關於凱麗斯
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
                        <div class="sub-page-footer-copyright">
                            <div class="sub-page-footer-copyright-inner">
                                <div class="copyRight">
                                    <p>Copyright © 2018 凱麗斯旅行箱包 KLS Baggage Department Store. All Rights Reserved.</p>
                                </div>
                                <div class="needKnow">
                                    <p><span><a href="{{url('/about/privacy')}}">隱私權條款</a></span> | <span><a href="{{url('/about/notice')}}">購物需知</a></span></p>
                                </div>
                            </div>
                        </div>
                    </div> 
                </section>
            @endif

        </div>

        <!-- Scripts -->
        <script src="{{ asset('js/frontend.js') }}"></script>

        <script src="{{ asset('js/cart-panel.js') }}"></script>

        <script src="{{ asset('js/CH-lib.js') }}"></script>

        <script src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

        <script src="{{ asset('js/plugins/AOS/aos.js') }}" charset="utf-8"></script>

        <script src="\js\plugins\tw-city\tw-city-selector.min.js"></script>

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
            
            $(document).ready(function() {
                var $width = $(this).width();

                get_H();
                scrollMenu();
                ( ( $width < 991 ) ? indexSwiper(1) : indexSwiper(3) )

                $(window).resize(function() {
                    get_H();
                });


                function get_H(){
                    var h      = $(window).height()
                    var logo_h = $('.logo').height()
                    var nav_h  = $('.navbar').height()
                    $('#header').css('height',h)
                };

                $('.klsBurger-switch').on('click',function(){
                    $(this).toggleClass('openNow');
                    $('.klsBurger-menu').toggleClass('openNow-menu');
                    $('.kls-page').toggleClass('openNow-filter');
                });
                
                function megaMenuScroll () {
                    var megaMenu = $('.mega-menu-product');
                    if (document.documentElement.scrollTop < 400){
                        megaMenu.css('top','-310%');
                    } else {
                        megaMenu.css('top','100%');
                    }; 
                };

                function scrollMenu() {
                    try {
                        var fix   = $('.navbar');                      //title
                        var fixTop = fix.offset().top;             //title 與頂部的距離
                        megaMenuScroll ()
                        $(window).scroll(function() {
                            megaMenuScroll ()
                            // 頁面與頂部高度
                            var docTop = Math.max(document.documentElement.scrollTop);  
                            if (fixTop < docTop) {
                                fix.css({
                                    'position': 'fixed',
                                    'top'     : 0,
                                    'width'   : '100%',
                                    'box-shadow': '0px 5px 10px rgba(0,0,0,0.8)'
                                    })
                            } else {
                                fix.css({
                                    "position" : "relative",
                                    'box-shadow': 'none'
                                });
                                }
                            })
                    } catch (error) {
                        console.log(error.message)
                    }
                };

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
                        slideChange(){
                            var bullet = $('.swiper-pagination-bullet');
                            for (var i = 0; i < bullet.length; i++) {
                                if($(bullet[i]).hasClass('swiper-pagination-bullet-active')) {
                                    $('#swipe-index').html(i + 1)
                                }
                            }
                        }
                    }
                });

                var bullet = $('.header_right .swiper-pagination-bullet');
                if( bullet.length < 10 ){
                    $('#swipe-length').text( '0'+ bullet.length );
                } else {
                    $('#swipe-length').text( bullet.length );
                }
                

                var producswiper = new Swiper ('.product_nav_index .tab-pane',{
                    direction : 'horizontal',
                    loop      : true,
                    speed     : 1000,
                    slidesPerView: 3,
                    spaceBetween: 30,
                    slidesPerGroup: 3,
                    navigation: {
                        nextEl: '.product-right',
                        prevEl: '.product-left'
                    }
                });

                function indexSwiper(val){
                    var feedbackswiper = new Swiper ('.feedback-Index',{
                        direction : 'horizontal',
                        loop      : true,
                        speed     : 1000,
                        slidesPerView: val,
                        spaceBetween: 30,
                        slidesPerGroup: val,
                        navigation: {
                            nextEl: '.feedback-right',
                            prevEl: '.feedback-left'
                        }
                    });
                };
                
                function newPostTextRWD (x,y){
                    x.each(function() {
                        var maxwidth = y;
                    if ($(this).text().length > maxwidth) {
                        $(this).text($(this).text().substring(0, maxwidth));
                        $(this).html($(this).html() + '...');
                    }
                 });
                };
                if ($width > 991){
                    newPostTextRWD($('.post_text p'),300);
                    newPostTextRWD($('.feedback-Inner p'),150);
                } else {
                    newPostTextRWD($('.post_text p'),300);
                    newPostTextRWD($('.feedback-Inner p'),100);
                }
                
                


                // fixed-button-group 過banner後再出現

                var banner_height =  100;
                
                $(window).scroll(function(){
                    var docTop = Math.max(document.body.scrollTop, document.documentElement.scrollTop); 

                    if (docTop < banner_height) {
                        $('.fixed-button-group').css({
                            'opacity'    : '0',
                            'transition' : '1s'
                        })
                    }else{
                        $('.fixed-button-group').css({
                            'opacity'    : '1',
                            'transition' : '1s'
                        })
                    }
                });

            }); 
        </script>

    </body>
</html>
