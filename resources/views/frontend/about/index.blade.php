@extends('main')

@section('custom-script')
    <script src="/js/plugins/lightbox2/dist/js/lightbox.min.js" charset="utf-8"></script>
    <script type="text/javascript">
        let innerHtml =　`  <div class="product-label"><img src="" alt=""></div>
                            <div class="product-title"><p>細鋁框板異型箱 - 銀</p></div>
                            <div class="product-style">
                                <p class="product-model">型號 : <span>HD-515</span></p>
                                <p class="product-size">尺寸 : <span>27 吋</span> 實際大小 : <span>W40xD34xH69</span>容量 : <span>76.6L</span></p>
                            <div class="product-text">
                                <ul>
                                    <li>&nbsp;&nbsp;外殼100%採用德國拜耳(Bayer)PC製成，耐衝擊性佳。</li>
                                    <li>&nbsp;&nbsp;美國海關認證TSA密碼鎖。</li>
                                    <li>&nbsp;&nbsp;360度高彈性PU灌注，寂靜無聲頂級萬向輪組。</li>
                                    <li>&nbsp;&nbsp;輪子採用最大65ｍｍ設計，輪徑更大、抓地力更穩。</li>
                                    <li>&nbsp;&nbsp;三段式符合人體工學的頂級鋁合金滑順拉桿。</li>
                                    <li>&nbsp;&nbsp;提把採用杜邦海翠爾，韌性更好、耐久度更佳。</li>
                                    <li>&nbsp;&nbsp;對開拉鍊箱體、完美內裝。</li>
                                </ul>
                            </div>
                            <p class="product-price">
                                $ 12,000
                            </p>
                        </div>
                        <div class="productHeart"><img src="/img/productHeart.svg" alt=""></div>`;
        $('.product-innertext').append(innerHtml);                
    </script>
@endsection

@section('custom-style')
    <link rel="stylesheet" href="/js/plugins/lightbox2/dist/css/lightbox.min.css">
    <style media="screen">
        
        .sub-page-header .sub-page-header-inner{
            background-color: #3E3A39;
            display: flex;
            justify-content: space-around;
            align-items: center;
            width: 100%;
            margin: 0;
            padding: 15px 0px;
        }
        .sub-page-header .sub-page-header-inner .sub-logo{
            display: flex;
            justify-content: center;
            align-items: flex-end;
            position: relative;
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
        .filter-area{
        }   
        .filter-area .breadCrumbs{
            margin-top: 20px;
        }
        .filter-area .breadCrumbs .breadCrumbs-current{
            color: #FBB03B;
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
        .filter-area .filter-filtering .filter-filters .filters-selects label{
            margin-left: 1px;
            margin-right: 5px;
        }
        
        .filter-product{
            background-color: #E6E6E6;
            color: #E6E6E6;
        }
        .filter-product .filter-product-row{
            margin: 0 20px;
            padding: 50px 0;
        }
        .filter-product .col-md-6{
            padding: 15px;
        }
        .filter-product .col-md-6 .product-inner{
            display: flex;
            justify-content: center;
            align-items: stretch;
            background-color: #fff;
            margin: 20px 30px;
            position: relative;
        }
        .filter-product .product-inner .productHeart{
            position: absolute;
            top: 15px;
            right: 15px;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            background-color: #E6E6E6;
            padding: 4px 7px 7px 7px;
            cursor: pointer;
            transition: 0.3s;
        }
        .filter-product .product-inner .productHeart:hover{
            background-color: #636b6f;
        }
        .filter-product .product-inner .productHeart:active{
            background-color: #E6E6E6;
        }
        .filter-product .product-inner .product-img{
            width: 35%;
            background-size: cover;
            background-position: center;
        }
        .filter-product .product-inner .product-innertext{
            width: 65%;
            margin-left: 20px;
        }
        .filter-product .product-innertext .product-label{

        }
        .filter-product .product-innertext .product-title p{
            font-size: 25px;
            font-weight: 700;
            color: black;
        }
        .filter-product .product-innertext .product-style{
            font-size: 12px;
        }
        
        .filter-product .product-innertext .product-style .product-model{

        }
        .filter-product .product-innertext .product-style .product-size{

        }
        .filter-product .product-innertext .product-style .product-size span{
            margin-right: 20px;
        }
        .filter-product .product-innertext .product-style .product-text{

        }
        .filter-product .product-innertext .product-style .product-price{
            font-size: 20px;
            font-weight: 700;
            color: #636b6f;
        }
        .filter-remakeBtn{
            background-color: #333333;
            border-radius: 8px;
            border: none;
            outline: none;
            color: #fff;
            position: absolute;
            right: 5px;
            bottom: -15px;
            padding: 3px 10px;
        }
        .filter-remakeBtn img{
            width: 25px;
            height: 20px;
        }
        .productCount{
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: solid 1px #eeeeee;
            margin-bottom: 20px;
            
        }
        .productCount .productCount-left{
            display: flex;
            justify-content: center;
            align-items: center;
        }
        .productCount .productCount-icon{
            margin-right: 15px;
        }
        .productCount .productCount-icon img{
            width: 15px;
            height: 15px;
            margin-right: 5px;
        }
        .productCount .productCount-icon img:nth-child(2){
            width: 18px;
            height: 18px;
        }
        .productCount .productCount-sort{

        }
        .productCount .productCount-number span:nth-child(2){

        }
        .collapseBtn{
            color: #fff;
            background-color: #333333;
            border: none;
            outline: none;
            padding: 5px 25px;
            position: absolute;
            bottom: -32px;
            right: 10px;
        }
        .collapseBtn img{
            width: 18px;
            height: 18px;
            margin-left: 5px;
        }
    </style>
@endsection

@section('content')
    <div class="container-fulid sub-page-header">
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
        <div class="col-md-12 breadCrumbs">
            <p><a href="/">首頁 > </a><span class="breadCrumbs-current">&nbsp;&nbsp;品牌行李箱</span></p>
        </div>
        <div class="row filter">
            <div class="col-md-12 filter-title">
               <h1>品牌行李箱</h1>
               <p>這裡總有一款屬於你的冒險</p>
            </div>
        </div>
        <div class="row filter" style="margin-top: 80px;margin-bottom: 80px;">
            <div class="col-md-12 filter-filtering">
                <div class="col-md-4">
                    <div class="filter-filters">
                        <div class="filters-title">
                            <p>品牌 Brand</p>
                        </div>
                        <hr>
                        <form class="filters-selects">
                            <input name="brand" id="departure" type="radio"><label for="departure">Departure</label>
                            <input name="brand" id="crown" type="radio"><label for="crown">CROWN 皇冠</label>
                            <input name="brand" id="samsonite" type="radio"><label for="samsonite">SAMSONITE 新秀麗</label>
                            <input name="brand" id="novita" type="radio"><label for="novita">NOVITA</label>
                            <input name="brand" id="yue" type="radio"><label for="yue">YUE</label>
                            <input name="brand" id="allBrand" type="radio"><label for="allBrand">全部品牌</label>
                            <input name="brand" id="oossack" type="radio"><label for="oossack">OOSSACK</label>
                            <input name="brand" id="ad" type="radio"><label for="ad">AD 亞蘭德倫</label>
                            <input name="brand" id="mom" type="radio"><label for="mom">MOM</label>
                            <input name="brand" id="at" type="radio"><label for="at">AT 美國旅行者</label>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">  
                    <div class="filter-filters">
                        <div class="filters-title">
                        <p>尺寸 Size</p>
                        </div>
                        <hr>
                        <form class="filters-selects">
                            <input name="size" id="20" type="radio"><label for="20">20吋以下</label>
                            <input name="size" id="23" type="radio"><label for="23">20 - 23吋</label>
                            <input name="size" id="25" type="radio"><label for="25">23 - 25吋</label>
                            <input name="size" id="29" type="radio"><label for="29">27 - 29吋</label>
                            <input name="size" id="30" type="radio"><label for="30">30吋以上</label>
                            <input name="size" id="allSize" type="radio"><label for="allSize">全部尺寸</label>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="filter-filters">
                        <div class="filters-title">
                            <p>旅程 Trip</p>
                        </div>
                        <hr>
                        <form class="filters-selects">
                            <input name="trip" id="aDay" type="radio"><label for="aDay">當日來回</label>
                            <input name="trip" id="aWeek" type="radio"><label for="aWeek">3 - 7天</label>
                            <input name="trip" id="twoWeeks" type="radio"><label for="twoWeeks">7 - 14天</label>
                            <input name="trip" id="long" type="radio"><label for="long">Long Stay</label>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-12 filter-filtering">
                <div class="col-md-4">
                    <div class="filter-filters">
                        <div class="filters-title">
                            <p>價格 Price</p>
                        </div>
                        <hr>
                        <form class="filters-selects">
                            <input name="price" id="5000" type="radio"><label for="5000">0 - 5000</label>
                            <input name="price" id="10000" type="radio"><label for="10000">5000 - 10000</label>
                            <input name="price" id="15000" type="radio"><label for="15000">10000 - 15000</label>
                            <input name="price" id="20000" type="radio"><label for="20000">15000 - 20000</label>
                            <input name="price" id="20000Up" type="radio"><label for="20000Up">20000 以上</label>
                        </form>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="filter-filters">
                        <div class="filters-title">
                            <p>材質 Material</p>
                        </div>
                        <hr>
                        <form class="filters-selects">
                            <input name="material" id="aluminum" type="radio"><label for="aluminum">鋁框</label>
                            <input name="material" id="pc" type="radio"><label for="pc">PC</label>
                            <input name="material" id="abs" type="radio"><label for="abs">ABS</label>
                            <input name="material" id="nylon" type="radio"><label for="nylon">防水尼龍</label>
                            <input name="material" id="pet" type="radio"><label for="pet">PET</label> 
                            <input name="material" id="carbon" type="radio"><label for="carbon">碳纖維</label>
                            <input name="material" id="allMaterial" type="radio"><label for="allMaterial">全部材質</label>
                        </form>
                    </div>
                </div>
                <button class="filter-remakeBtn">
                    <img src="/img/remakeIcon.svg" alt="">
                    重製選取條件
                </button>
                <div class="col-md-4"></div>
            </div>
        </div>
    </div>

    <div class="container" style="position: relative;">
        <div class="row">
            <div class="col-md-12 productCount">
                <div class="productCount-left">
                    <div class="productCount-icon">
                        <img class="cube01" src="/img/selectCube-01.svg" alt="">
                        <img class="cube02" src="/img/selectCube-02.svg" alt="">
                    </div>
                    <div class="productCount-sort">
                        <span>價格由高到低排列 ↓</span>
                        <span>價格由低到高排列 ↑</span>
                    </div>
                </div>
                <div class="productCount-number">
                    <span>顯示總數</span>
                    <span>08/</span>
                    <span>127</span>
                </div>
            </div>
        </div>
        <button class="collapseBtn">
            收合
            <img src="/img/collapseIcon.png" alt="">
        </button>
    </div>

    <div class="container-fulid filter-product">
        <div class="row filter-product-row">
            <div class="col-md-6">
                <div class="product-inner">
                    <div class="product-img" style="background-image: url(/img/product01.jpg);"></div>
                    <div class="product-innertext"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-inner">
                    <div class="product-img" style="background-image: url(/img/product_img.jpg);"></div>
                    <div class="product-innertext"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-inner">
                    <div class="product-img" style="background-image: url(/img/newsImage04.jpg);"></div>
                    <div class="product-innertext"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-inner">
                    <div class="product-img" style="background-image: url(/img/newsImage04.jpg);"></div>
                    <div class="product-innertext"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-inner">
                    <div class="product-img" style="background-image: url(/img/product02.jpg);"></div>
                    <div class="product-innertext"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-inner">
                    <div class="product-img" style="background-image: url(/img/newsImage02.jpg);"></div>
                    <div class="product-innertext"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-inner">
                    <div class="product-img" style="background-image: url(/img/choose01.jpg);"></div>
                    <div class="product-innertext"></div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="product-inner">
                    <div class="product-img" style="background-image: url(/img/product03.jpg);"></div>
                    <div class="product-innertext"></div>
                </div>
            </div>
        </div>
    </div>
@endsection
