@extends('main')

@section('custom-script')
    <script type="text/javascript">

    </script>
@endsection

@section('custom-style')
    <style media="screen">
        .filter-area,.container-productCount{
            width: 1200px;
        }
        .filter-product,.sub-page-header-inner{
            width: 1400px;
        }
        .forwardNews{
            display: none;
        }
        .sub-page-header{
            position: fixed;
            top: 0;
            width: 100%;
            z-index: 99999;
            background-color: #fff;
        }
        .sub-page-header .sub-page-header-inner{
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin: 0 auto;
            padding: 15px 0px;
        }
        .sub-page-header .sub-page-header-inner .sub-logo{
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .sub-page-header .sub-page-header-inner .sub-logo img{
            width: 230px;
        }
        .sub-page-header .sub-page-header-inner .sub-nav-menu{
            padding: 15px 0px;
        }
        .sub-page-header .sub-page-header-inner .sub-nav-menu ul{
            display: flex;
            margin-top: auto;
            margin-bottom: auto;
            padding-left: 0;
        }
        .sub-page-header .sub-page-header-inner .sub-nav-menu ul li{
            list-style: none;
            margin: 0 15px;
        }
        .sub-page-header .sub-page-header-inner .sub-nav-menu ul li:hover a{
            border-bottom: solid 1px #FBB03B;
        }
        .sub-page-header .sub-page-header-inner .sub-nav-menu ul .sub-icon img{
            width: 20px;
            cursor: pointer;
        }
        .sub-page-header .sub-page-header-inner .sub-nav-menu ul li a{
            color: #3E3A39;
            font-size: 15px;
            white-space: nowrap;
            text-decoration: none;
            transition: 0.3s;
            padding: 8px 11px;
            border-bottom: solid 1px transparent;
        }
        @media screen and (max-width: 1400px){
            .sub-page-header-inner{
                width: 1170px;
            }
        }
        @media screen and (max-width: 1200px) {
            .sub-page-header-inner{
                width: 950px;
            }
        }
        @media screen and (max-width: 991px){
            .sub-page-header-inner{
                width: 750px;
            }
        }
        @media screen and (max-width: 1024px){
            .sub-page-header{
                display: none;
            }
        }
        .blog-banner{}
        .blog-filter{}
        .blog-filter .blog-filter-inner{}
        .blog-post{}
        .blog-post .blog-post-group{}
        .blog-post .blog-post-group .blog-post-inner{}
        .blog-post .blog-post-group .blog-post-inner .blog-post-inner-img{
            padding-bottom: 50%;
            position: relative;
            overflow: hidden;
        }
        .blog-post .blog-post-group .blog-post-inner .blog-post-inner-img img{
            max-width: 100%;
            max-height: 100%;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }
        .blog-post .blog-post-group .blog-post-inner .blog-post-inner-text{}
    </style>
@endsection

@section('content')
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
                        <a href="{{url('/product-all')}}">
                            品牌行李箱                   
                        </a>
                    </li>
                    <li>
                        <a href="">
                            行李箱配件
                        </a>
                    </li>
                    <li>
                        <a href="{{url('/blog')}}">
                            部落格
                        </a>
                    </li>
                    <li class="nav_final">
                        <a href="{{route('contact')}}">
                            聯絡我們
                        </a>
                    </li>
                    <li class="sub-icon">
                        <img src="\img\likeIcon.png" alt="">
                    </li>
                    <li class="sub-icon">
                        <img src="\img\cartIcon.png" alt="">
                    </li>
                </ul> 
            </div>
        </div>
    </div> 
    <div class="container-fulid blog-banner"></div>
    <div class="container blog-filter">
        <div class="row">
            <div class="col-md-12 blog-filter-inner">
                <button>全部文章</button>
                <button>職人開箱</button>
                <button>挑箱教學</button>
                <button>挑箱教學</button>
            </div>
        </div>
    </div>
    <div class="container-fulid blog-post">
        <div class="row">
            <div class="col-md-4 blog-post-group">
                <div class="blog-post-inner">
                    <div class="blog-post-inner-img">
                        <img src="\img\blog-img01.jpg" alt="">
                    </div>
                    <div class="blog-post-inner-text vol03">
                        <p>2018.Oct.Vol 3 | <span class="inner-text">箱款新知</span></p>
                        <p>庫存補完通知計畫</p>
                        <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 blog-post-group">
                <div class="blog-post-inner">
                    <div class="blog-post-inner-img">
                        <img src="\img\blog-img02.jpg" alt="">
                    </div>
                    <div class="blog-post-inner-text vol02">
                        <p>2018.Oct.Vol 2 | <span class="inner-text">職人開箱</span></p>
                        <p>庫存補完通知計畫</p>
                        <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 blog-post-group">
                <div class="blog-post-inner">
                    <div class="blog-post-inner-img">
                        <img src="\img\blog-img03.jpg" alt="">
                    </div>
                    <div class="blog-post-inner-text vol01">
                        <p>2018.Oct.Vol 1 | <span class="inner-text">挑箱教學</span></p>
                        <p>庫存補完通知計畫</p>
                        <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 blog-post-group">
                <div class="blog-post-inner">
                    <div class="blog-post-inner-img">
                        <img src="\img\blog-img04.jpg" alt="">
                    </div>
                    <div class="blog-post-inner-text vol03">
                        <p>2018.Oct.Vol 3 | <span class="inner-text">箱款新知</span></p>
                        <p>庫存補完通知計畫</p>
                        <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 blog-post-group">
                <div class="blog-post-inner">
                    <div class="blog-post-inner-img">
                        <img src="\img\blog-img05.jpg" alt="">
                    </div>
                    <div class="blog-post-inner-text vol02">
                        <p>2018.Oct.Vol 2 | <span class="inner-text">職人開箱</span></p>
                        <p>庫存補完通知計畫</p>
                        <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 blog-post-group">
                <div class="blog-post-inner">
                    <div class="blog-post-inner-img">
                        <img src="\img\blog-img06.jpg" alt="">
                    </div>
                    <div class="blog-post-inner-text vol01">
                        <p>2018.Oct.Vol 1 | <span class="inner-text">挑箱教學</span></p>
                        <p>庫存補完通知計畫</p>
                        <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-4 blog-post-group">
                <div class="blog-post-inner">
                    <div class="blog-post-inner-img">
                        <img src="\img\blog-img07.jpg" alt="">
                    </div>
                    <div class="blog-post-inner-text vol03">
                        <p>2018.Oct.Vol 3 | <span class="inner-text">箱款新知</span></p>
                        <p>庫存補完通知計畫</p>
                        <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 blog-post-group">
                <div class="blog-post-inner">
                    <div class="blog-post-inner-img">
                        <img src="\img\blog-img08.jpg" alt="">
                    </div>
                    <div class="blog-post-inner-text vol02">
                        <p>2018.Oct.Vol 2 | <span class="inner-text">職人開箱</span></p>
                        <p>庫存補完通知計畫</p>
                        <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                    </div>
                </div>
            </div>
            <div class="col-md-4 blog-post-group">
                <div class="blog-post-inner">
                    <div class="blog-post-inner-img">
                        <img src="\img\blog-img09.jpg" alt="">
                    </div>
                    <div class="blog-post-inner-text vol01">
                        <p>2018.Oct.Vol 1 | <span class="inner-text">挑箱教學</span></p>
                        <p>庫存補完通知計畫</p>
                        <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                    </div>
                </div>
            </div>
        </div>    
    </div>
@endsection
