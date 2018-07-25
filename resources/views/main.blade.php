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
        <div class="container-fluid admin-bar">
            <div class="row">
                <div class="col-md-12">
                    <a href="/cyberholic-system/admin">後台入口</a>
                </div>
            </div>
        </div>
    @endif
@endunless

<!------------------------header------------------------>
<section id="header">
    <div class="container" id="titletop">
        <div class="row">
            <div class="col-md-6" id="logocol6">
                <div id="logo">
                    <img src="/img/logo_grey.png" alt="">
                </div>
            </div>
            <div class="col-md-6" id="list">
                <ul>
                    <li id="cart-panel">
                        <cart-panel></cart-panel>
                    </li>
                    <li>
                        <a href="{{url('/login')}}">
                            <i class="fa fa-users fa-3x" aria-hidden="true"></i>
                            <div class="litext">
                                <p>&nbsp;&nbsp;會員登入 <br>&nbsp;&nbsp;Member Login</p>
                            </div>
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/about/notice')}}">
                            <i class="fa fa-smile-o fa-3x" aria-hidden="true"></i>
                            <div class="litext">
                                <p>&nbsp;&nbsp;安心購物提醒 <br>&nbsp;&nbsp;Safe reminds</p>
                            </div>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <div class="container" id="titlebottom">
        <div class="row">
            <div class="col-md-7">
                <ul>
                    <li>
                        <a href="{{url('/product-all')}}">線上商城</a>
                    </li>
                    <li>
                        <a href="{{url('/blog')}}">最新消息</a>
                    </li>
                    <li>
                        <a href="{{url('/about/notice')}}">購物須知</a>
                    </li>
                    <li>
                        <a href="{{url('/user')}}">會員專區</a>
                    </li>
                    <li>
                        <a href="{{route('contact')}}">聯絡我們</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-5">
                <div class="search">
                    <form class="" action="/search-option" method="post">
                        {{csrf_field()}}
                        <input type="text" name="key-word" placeholder="於此輸入您所需要查詢的商品名稱...">
                        <i class="fa fa-search lg" aria-hidden="true"></i>
                    </form>

                </div>
            </div>
        </div>
    </div>
</section>



@yield('content')

<!------------------------footer------------------------>
<section id="footer">
    <div class="container footerc">
        <div class="row">
            <div class="col-md-6">
                <img src="/img/logo_white.png" alt="">
                <div class="fblink">
                    <a href=""><i class="fa fa-envelope-o fa-2x" aria-hidden="true"></i></a>
                    <a href=""><i class="fa fa-facebook fa-2x" aria-hidden="true"></i></a>
                </div>
                <p>易耕有限公司成立於 2006 年，至今耕耘長達 12 年專營各種文具、樂器、美術樂品、書籍等的線上購物，同時易耕也是 Stockmar、Mercurius、
                    LYRA...各種國際知名品牌的台灣總代理，經由多年以來，易耕了解台灣人文藝術涵養相當豐富，因此將持續用最實惠的價格，提供最專業的用具。</p>
            </div>

            <div class="col-md-6 linkout">
                <div class="col-md-6 link">
                    <ul>
                        <p>品牌故事</p>
                        <li>
                            <a href="{{route('about')}}"> > 關於易耕</a>
                        </li>
                        <li>
                            <a href="{{route('mercurius')}}"> > Mercurius 品牌故事</a>
                        </li>
                        <li>
                            <a href="{{route('stockmar')}}"> > STOCKMAR 品牌故事</a>
                        </li>
                        <li>
                            <a href="{{route('lyra')}}"> > LYRA 品牌故事</a>
                        </li>
                        <li>
                            <a href="{{route('chorol')}}"> > CHOROL 品牌故事</a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 link">
                    <ul>
                        <p>快速連結</p>
                        <li>
                            <a href="{{url('/product-all')}}"> > 線上商城</a>
                        </li>
                        <li>
                            <a href="{{url('/blog')}}"> > 最新消息</a>
                        </li>
                        <li>
                            <a href="{{url('/about/notice')}}"> > 購物須知</a>
                        </li>
                        <li>
                            <a href="{{url('/user')}}"> > 會員專區</a>
                        </li>
                        <li>
                            <a href="{{route('contact')}}"> > 聯絡我們</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <p>Copyright © 2018 易耕事業有限公司(Yi-Geng Business Co.Ltd). All Rights Reserved</p>
            </div>
        </div>
    </div>
</section>


<!-- Scripts -->
<script src="{{ asset('js/frontend.js') }}"></script>

<script src="{{ asset('js/cart-panel.js') }}"></script>

<script src="{{ asset('js/CH-lib.js') }}"></script>

<script src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<script src="{{ asset('js/plugins/AOS/aos.js') }}" charset="utf-8"></script>

<script type="text/javascript">
    AOS.init();
</script>

{{-- Custom scripts --}}
@yield('custom-script')

@if(config('app.env') == 'local')
    <script src="http://localhost:35729/livereload.js"></script>
@endif

</body>
</html>
