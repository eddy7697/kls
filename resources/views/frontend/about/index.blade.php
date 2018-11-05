@extends('main')

@section('custom-script')
    <script src="/js/plugins/lightbox2/dist/js/lightbox.min.js" charset="utf-8"></script>
    <script type="text/javascript">
    </script>
@endsection

@section('custom-style')
    <link rel="stylesheet" href="/js/plugins/lightbox2/dist/css/lightbox.min.css">
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
@endsection
