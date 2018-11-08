@extends('main')

@section('custom-script')
    <script type="text/javascript">
    
        $('#readMore-btn').on('click',() => {
            $('.blog-post-open').fadeIn();
        });
        $('.blog-filter-inner button').on('click',function(){
            $('.blog-filter-inner button').removeAttr('class')
            $(this).addClass('filterBtn-active')
        });
    </script>
@endsection

@section('custom-style')
    <style media="screen">
        #header,#footer{
            display: none;
        }
        .blog-post-open{
            display: none;
        }
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
            transition: 0.5s;
            padding: 5px 11px;
            border-bottom: solid 1px transparent;
        }
        @media screen and (max-width: 1400px){
            .sub-page-footer .sub-page-footer-copyright-inner{
                width: 1200px  !important;
            }
            .sub-page-header-inner{
                width: 1170px;
            }
            .blog-post .blog-post-group .blog-post-inner{
                padding: 30px !important;
            }
        }
        @media screen and (max-width: 1200px) {
            .sub-page-footer .sub-page-footer-copyright-inner{
                width: 991px  !important;
            }
            .sub-page-header-inner{
                width: 950px;
                justify-content: center !important;
            }
            .blog-post .blog-post-group .blog-post-inner{
                padding: 15px !important;
            }
        }
        @media screen and (max-width: 991px){
            .sub-page-header-inner,.sub-page-footer .sub-page-footer-copyright-inner{
                width: 750px !important;
            }
            .blog-banner{
                padding-bottom: 50% !important;
            }
        }
        @media screen and (max-width: 1024px){
            .sub-page-header,.sub-nav-menu{
                display: none;
            }
        }
        @media screen and (max-width: 768px){
            .sub-page-footer .sub-page-footer-copyright-inner{
                display: block !important;
                width: 100%  !important;
                text-align: center  !important;
            }
            .sub-page-footer-copyright .sub-page-footer-copyright-inner .needKnow{
                text-align: center !important;
            }
            .blog-filter .blog-filter-inner button{
                margin: 0 10px;
            }
        }
        .sub-page-footer{
            background-color: #3E3A39;
        }
        .sub-page-footer .sub-page-footer-inner{
            display: flex;
            justify-content: space-between;
            align-items: flex-end;
            margin: 0 auto;
            padding: 50px 0px;
        }
        .sub-page-footer .sub-page-footer-inner .sub-logo{
            display: flex;
            justify-content: center;
            align-items: center;
            position: relative;
        }
        .sub-page-footer .sub-page-footer-inner .sub-logo a{
            text-decoration: none;
        }
        .sub-page-footer .sub-page-footer-inner .sub-logo a img{
            width: 230px;
        }
        .sub-page-footer .sub-page-footer-inner .sub-nav-menu{
            padding: 15px 0px;
        }
        .sub-page-footer .sub-page-footer-inner .sub-nav-menu ul{
            display: flex;
            margin-top: auto;
            margin-bottom: auto;
            padding-left: 0;
        }
        .sub-page-footer .sub-page-footer-inner .sub-nav-menu ul li{
            list-style: none;
            margin: 0 15px;
            transition: 0.3s;
        }
        .sub-page-footer .sub-page-footer-inner .sub-nav-menu ul li:hover{
            opacity: 0.7;
        }
        .sub-page-footer .sub-page-footer-inner .sub-nav-menu ul li a{
            color: #fff;
            font-size: 15px;
            white-space: nowrap;
            text-decoration: none;
        }
        .sub-page-footer .sub-page-footer-inner .sub-contact-icon{
            padding: 15px 0px;
        }
        .sub-page-footer .sub-page-footer-inner .sub-contact-icon .sub-icons img{
            width: 30px;
            height: 30px;
            transition: 0.3s;
            margin: 0 10px;
            cursor: pointer;
        }
        .sub-page-footer .sub-page-footer-inner .sub-contact-icon .sub-icons img:hover{
            opacity: 0.5;
        }
        .sub-page-footer-copyright{
            color: rgba(255,255,255,0.5);
            font-size: 12px;
            padding: 10px 0;
            width: 100%;
        }
        .sub-page-footer-copyright .sub-page-footer-copyright-inner{
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin: 0 auto;
            width: 83%;
            padding: 0 20px;
        }
        .sub-page-footer-copyright .sub-page-footer-copyright-inner .needKnow{
            text-align: right;
        }
        .sub-page-footer-copyright .sub-page-footer-copyright-inner .needKnow span{
            cursor: pointer;
            transition: 0.5s;
        }
        .sub-page-footer-copyright .sub-page-footer-copyright-inner .needKnow span:hover{
            color: rgba(255,255,255,1);
        }
        
        .blog-banner{
            background-image: url('/img/bg-blog.jpg');
            background-position: center;
            background-size: cover;
            padding-bottom: 38%;
            margin-top: 100px;
            margin-bottom: 50px;
        }
        .blog-filter{
            margin-bottom: 50px;
        }
        .blog-filter .blog-filter-inner{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-wrap: wrap;
        }
        .blog-filter .blog-filter-inner button{
            border: solid 1px #636b6f;
            border-radius: 12px;
            color: #636b6f;
            background-color: #fff;
            outline: none;
            transition: 0.3s;
            font-size: 16px;
            padding: 5px 35px;
            margin: 5px 20px;
        }
        .blog-filter .blog-filter-inner button:hover{
            color: #fff;
            background-color: #636b6f;
        }
        .blog-filter .blog-filter-inner button:active{
            color: #fff;
            background-color: #3E3A39;
        }
        .filterBtn-active{
            color: #fff !important;
            background-color: #636b6f !important;
        }
        .blog-post{
            margin: 0px 30px;
        }
        .blog-readMore{
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 50px;
        }
        .blog-readMore #readMore-btn{
            border: solid 1px #3E3A39;
            padding: 14px 120px;
            color: #3E3A39;
            font-size: 20px;
            font-weight: 600;
            outline: none;
            background-color: #fff;
            transition: 0.3s;
            border-radius: 8px;
        }
        .blog-readMore #readMore-btn:hover{
            background-color: #3E3A39;
            color: #fff;
        }
        .blog-post .blog-post-group{}
        .blog-post .blog-post-group .blog-post-inner{
            padding: 40px;
        }
        .blog-post .blog-post-group .blog-post-inner .blog-post-inner-img{
            background-position: center;
            background-size: cover;
            padding-bottom: 80%;
        }
        .blog-post .blog-post-group .blog-post-inner .blog-post-inner-text{
            margin-top: 35px;
        }
        .blog-post .blog-post-group .blog-post-inner .blog-post-inner-text p:nth-child(1){
            font-size: 16px;
            font-weight: 100;
        }
        .blog-post .blog-post-group .blog-post-inner .blog-post-inner-text p:nth-child(1) span{

        }
        .blog-post .blog-post-group .blog-post-inner .blog-post-inner-text p:nth-child(2){
            font-size: 24px;
            font-weight: 700;
            color: #3E3A39;
        }
        .blog-post .blog-post-group .blog-post-inner .blog-post-inner-text p:nth-child(3){
            font-size: 16px;
            font-weight: 100;
            line-height: 45px;
        }
    </style>
@endsection

@section('content')
    <section id="subPage-blog">
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
                        <li>
                            <a href="">
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
                    <button class="filterBtn-active">全部文章</button>
                    <button>職人開箱</button>
                    <button>箱款新知</button>
                    <button>挑箱教學</button>
                </div>
            </div>
        </div>
        <div class="container-fulid blog-post">
            <div class="row">
                <div class="col-md-4 blog-post-group">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img01.jpg')"></div>
                        <div class="blog-post-inner-text vol03">
                            <p>2018.Oct.Vol 3 | <span class="inner-text">箱款新知</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img02.jpg')"></div>
                        <div class="blog-post-inner-text vol02">
                            <p>2018.Oct.Vol 2 | <span class="inner-text">職人開箱</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img03.jpg')"></div>
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
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img04.jpg')"></div>
                        <div class="blog-post-inner-text vol03">
                            <p>2018.Oct.Vol 3 | <span class="inner-text">箱款新知</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img05.jpg')"></div>
                        <div class="blog-post-inner-text vol02">
                            <p>2018.Oct.Vol 2 | <span class="inner-text">職人開箱</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img06.jpg')"></div>
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
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img07.jpg')"></div>
                        <div class="blog-post-inner-text vol03">
                            <p>2018.Oct.Vol 3 | <span class="inner-text">箱款新知</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img08.jpg')"></div>
                        <div class="blog-post-inner-text vol02">
                            <p>2018.Oct.Vol 2 | <span class="inner-text">職人開箱</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img09.jpg')"></div>
                        <div class="blog-post-inner-text vol01">
                            <p>2018.Oct.Vol 1 | <span class="inner-text">挑箱教學</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fulid blog-post blog-post-open">
            <div class="row">
                <div class="col-md-4 blog-post-group">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img01.jpg')"></div>
                        <div class="blog-post-inner-text vol03">
                            <p>2018.Oct.Vol 3 | <span class="inner-text">箱款新知</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img02.jpg')"></div>
                        <div class="blog-post-inner-text vol02">
                            <p>2018.Oct.Vol 2 | <span class="inner-text">職人開箱</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img03.jpg')"></div>
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
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img04.jpg')"></div>
                        <div class="blog-post-inner-text vol03">
                            <p>2018.Oct.Vol 3 | <span class="inner-text">箱款新知</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img05.jpg')"></div>
                        <div class="blog-post-inner-text vol02">
                            <p>2018.Oct.Vol 2 | <span class="inner-text">職人開箱</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img06.jpg')"></div>
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
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img07.jpg')"></div>
                        <div class="blog-post-inner-text vol03">
                            <p>2018.Oct.Vol 3 | <span class="inner-text">箱款新知</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img08.jpg')"></div>
                        <div class="blog-post-inner-text vol02">
                            <p>2018.Oct.Vol 2 | <span class="inner-text">職人開箱</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img09.jpg')"></div>
                        <div class="blog-post-inner-text vol01">
                            <p>2018.Oct.Vol 1 | <span class="inner-text">挑箱教學</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="blog-readMore">
            <button id="readMore-btn">查看更多</button>
        </div>
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
                        <li>
                            <a href="">
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
    
@endsection
