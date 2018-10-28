@extends('main')

@section('custom-script')
    <script src="/js/plugins/lightbox2/dist/js/lightbox.min.js" charset="utf-8"></script>
    <script type="text/javascript">
    </script>
@endsection

@section('custom-style')
    <link rel="stylesheet" href="/js/plugins/lightbox2/dist/css/lightbox.min.css">
    <style media="screen">
        .sub-page-header .sub-page-header-top{
            padding-bottom: 50px;
        }
        .sub-page-header .sub-page-header-inner{
            background-color: #3E3A39;
            display: flex;
            justify-content: space-around;
            align-items: center;
        }
        .sub-page-header .sub-page-header-inner .sub-logo{
            display: flex;
            justify-content: center;
            align-items: flex-end;
            position: relative;
            bottom: 10px;
        }
        .sub-page-header .sub-page-header-inner .sub-logo p{
            color: #fff;
            line-height: 16px;
            font-size: 12px;
            margin-bottom: 10px;
            white-space: nowrap;
        }
        .sub-page-header .sub-page-header-inner .sub-logo img{
            width: 150px;
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
        .sub-page-header .sub-page-header-inner .sub-nav-menu ul .sub-icon img{
            width: 20px;
            cursor: pointer;
        }
        .sub-page-header .sub-page-header-inner .sub-nav-menu ul li a{
            color: #fff;
            font-weight: 700;
            font-size: 18px;
            white-space: nowrap;
            text-decoration: none;
        }   
        .filter-area .filter-title{
            text-align: center;
        }
        .filter-area .filter-title h1{
            font-weight: 700;
            color: black;
        }
        .filter-area .filter-filtering{

        }
        .filter-area .filter-filtering .filter-filters{

        }
        .filter-area .filter-filtering .filter-filters .filters-title{

        }
        .filter-area .filter-filtering .filter-filters .filters-selects{

        }
        .filter-product{
            
        }
        .filter-product .product-img{

        }
        .filter-product .product-innertext .product-label{}
        .filter-product .product-innertext .product-title{}
        .filter-product .product-innertext .product-style{}
        .product-model{}
        .product-size{}
        .product-text{}
        .product-price{}
    </style>
@endsection

@section('content')
    <div class="container-fulid sub-page-header">
        <div class="row sub-page-header-top"></div>
        <div class="row sub-page-header-inner">
            <div class="sub-logo">
                <a href="/">
                    <img src="/img/KLSLogo.svg" alt="">
                </a>
                <p>凱麗斯旅行箱專賣店  <br>KLS Baggage Department Store.</p>
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
                        <a href="{{route('contact')}}">
                            線上拍賣
                        </a>
                    </li>
                    <li class="nav_final">
                        <a href="{{route('contact')}}">
                            聯絡我們
                        </a>
                    </li>
                    <li class="sub-icon">
                        <img src="\img\likeIcon.svg" alt="">
                    </li>
                    <li class="sub-icon">
                        <img src="\img\cartIcon.svg" alt="">
                    </li>
                </ul> 
            </div>
        </div>
    </div> 
 
    <div class="container filter-area">
        <div class="row">
            <div class="col-md-12 filter-title">
               <h1>品牌行李箱</h1>
               <p>這裡總有一款屬於你的冒險</p>
            </div>
        </div>
        <div class="row">
            <div class="col-md-12 filter-filtering">
                <div class="col-md-4">
                    <div class="filter-filters">
                       <div class="filters-title">

                       </div>
                       <div class="filters-selects">

                       </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="filter-filters">
                       <div class="filters-title">

                       </div>
                       <div class="filters-selects">

                       </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="filter-filters">
                       <div class="filters-title">

                       </div>
                       <div class="filters-selects">

                       </div>
                    </div>
                </div>
            </div>
            <div class="col-md-12 filter-filtering">
                <div class="col-md-4">
                    <div class="filter-filters">
                       <div class="filters-title">

                       </div>
                       <div class="filters-selects">

                       </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="filter-filters">
                       <div class="filters-title">

                       </div>
                       <div class="filters-selects">

                       </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="filter-filters">
                       <div class="filters-title">

                       </div>
                       <div class="filters-selects">

                       </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fulid filter-product">
        <div class="row">
            @for ($i = 0; $i < 8; $i++)
                <div class="col-md-6">
                    <div class="product-img">
                        <img src="/img/product01.jpg" alt="">
                    </div>
                    <div class="product-innertext">
                        <div class="product-label">
                            <img src="" alt="">
                        </div>
                        <div class="product-title">
                            <p>細鋁框板異型箱 - 銀</p>
                        </div>
                        <div class="product-style">
                            <p class="product-model">
                                型號 : <span>&nbsp;&nbsp;</span>
                            </p>
                            <p class="product-size">
                                尺寸 : <span>&nbsp;&nbsp;</span> 
                                實際大小 : <span>&nbsp;&nbsp;</span>
                                容量 : <span>&nbsp;&nbsp;</span>
                            </p>
                            <p class="product-text">

                            </p>
                            <p class="product-price">

                            </p>
                        </div>
                    </div>
                </div>
            @endfor
        </div>
    </div>
@endsection
