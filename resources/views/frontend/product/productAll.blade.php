@extends('main')

@section('custom-style')
    <link rel="stylesheet" href="{{ asset('js/plugins/jquery.fancytree/dist/skin-themeroller/ui.fancytree.min.css') }}">
    <style>
        .forwardNews{
            display: none;
        }
        #header,#footer{
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
            border-bottom: solid 1px transparent;
        }
        .filter-area,.container-productCount{
            width: 1200px;
        }
        .filter-product,.sub-page-header-inner{
            width: 1400px;
        }
        
        @media screen and (max-width: 1400px){
            .sub-page-footer .sub-page-footer-copyright-inner{
                width: 1200px  !important;
            }
            .sub-page-header-inner{
                width: 1170px;
            }
            .filter-area,.container-productCount{
                width: 1020px;
            }
            .filter-product,.sub-page-header-inner{
                width: 1170px;
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
            
            .filter-area,.container-productCount{
                width: 800px;
            }
            .filter-product,.sub-page-header-inner{
                width: 950px;
            }
            .filter-product .col-md-6 .product-inner{
                display: block !important;
            }
            .filter-product .product-inner .product-img {
                width: 100% !important;
                padding-bottom: 90%;
            }
            .filter-product .product-inner .product-innertext{
                width: 100% !important;
                margin-left: 0 !important;
            }
        }
        @media screen and (max-width: 991px){
            .sub-page-header-inner,.sub-page-footer .sub-page-footer-copyright-inner{
                width: 750px !important;
            }
            .filter-area,.container-productCount{
                width: 600px;
            }
            .filter-product{
                width: 100%;
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
            .productCount{
                display: block;
                text-align: center;
            }
            .filter-area,.container-productCount{
                width: 100%;
            }
            .productCount{
                display: block !important;
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
        .filter-area{
            margin-top: 180px;
        }   
        .filter-area .filter-title{
            text-align: center;
            position: relative;
        }
        .filter-area .filter-title h1{
            font-weight: 700;
            color: black;
            margin-bottom: 20px;
        }
        .filter-area .filter-title .filter-title-hr{
            width: 6em;
            height: 3px;
            background-color: #FBB03B;
            position: absolute;
            left: 50%;
            transform: translateX(-50%);
        }
        .filter-area .filter-filtering{
            margin-bottom: 50px;
            padding: 0;
        }
        .filter-area .filter-filtering .filter-filters .filters-selects .filters-selects-div{
            display: inline-block;
        }
        .filter-area .filter-filtering .filter-filters .filters-selects label{
            margin-left: 5px;
            margin-right: 16px;
        }
        .filter-product-out{
            background-color: #E6E6E6;
            display: flex;
            justify-content: center;
        }
        .filter-product{
            color: #E6E6E6;
        }
        .filter-product .filter-product-readMore{
            display: flex;
            justify-content: center;
            align-items: center;
            padding-bottom: 50px;
        }
        .filter-product .filter-product-readMore #readMore-btn{
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
        .filter-product .filter-product-readMore #readMore-btn:hover{
            background-color: #3E3A39;
            color: #fff;
        }
        .filter-product .filter-product-row{
            padding: 50px 0;
        }
        .filter-product .filter-product-row.product-more{
            padding-top: 0;
            display: none;
        }
        .filter-product .col-md-6{
            padding: 15px;
        }
        .filter-product .col-md-6 .product-inner{
            display: flex;
            justify-content: center;
            align-items: stretch;
            background-color: #fff;
            margin: 20px 0;
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
        .productHeart-active{
            background-color: #636b6f !important;
        }
        .filter-product .product-inner .product-img{
            width: 35%;
            background-size: cover;
            background-position: center;
        }
        .filter-product .product-inner .product-innertext{
            width: 65%;
            margin-left: 20px;
            padding: 15px 5px;
        }
        .filter-product .product-inner .product-innertext .product-title p{
            font-size: 25px;
            font-weight: 700;
            color: black;
        }
        .filter-product .product-inner .product-innertext .product-style{
            font-size: 12px;
            line-height: 15px;
        }
        
        .filter-product .product-inner .product-innertext .product-style .product-model{
            color: #b3b3b3;
        }
        .filter-product .product-inner .product-innertext .product-style .product-size{
            color: #b3b3b3;
        }
        .filter-product .product-inner .product-innertext .product-style .product-size span{
            margin-right: 20px;
        }
        .filter-product .product-inner .product-innertext .product-style .product-text{
            color: #b3b3b3;
        }
        .filter-product .product-inner .product-innertext .product-style .product-price{
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
            transition: 0.3s;
        }
        .filter-remakeBtn:hover{
            background-color: #636b6f;
        }
        .filter-remakeBtn:hover .filter-remakeBtnImg{
            transform: rotate(180deg);
        }   
        .filter-remakeBtn:active{
            background-color: #333333;
        }
        .filter-remakeBtn .filter-remakeBtnImg{
            width: 25px;
            height: 20px;
            transition: 0.5s;
        }
        .productCount{
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: solid 1px #eeeeee;
            margin-bottom: 20px;
            font-weight: 100;
        }
        .productCount .product-left .productCount-sort span{
            background-color: grey;
            color: #fff;
            padding: 1px 10px;
            border-radius: 8spx;
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
            cursor: pointer;
        }
        .productCount .productCount-icon img:nth-child(2){
            width: 18px;
            height: 18px;
        }
        .productCount .productCount-sort{
            cursor: pointer;
        }
        .productCount .productCount-number{
            font-size: 18px;
        }
        .productCount .productCount-number span:nth-child(3){
            font-size: 25px;
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
            transition: 0.3s;
        }
        .collapseBtn:hover{
            background-color: #636b6f;
        }
        .collapseBtn:active{
            background-color: #333333;
        }
        .collapseBtn img{
            width: 18px;
            height: 18px;
            margin-left: 5px;
            transition: 0.3s;
        }
        .product-label img{
            width: 55px;
        }
     
        
    </style>
@endsection

@section('custom-script')
    <script src="{{ asset('js/plugins/jquery.fancytree/dist/jquery.fancytree-all.min.js') }}"></script>
    <script type="text/javascript">
        let innerHtml =　`  <div class="product-label"><img src="/img/product-logo.jpg" alt=""></div>
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
                            <p class="product-price">$ 12,000</p>
                        </div>
                        <div class="productHeart"><img src="/img/productHeart.svg" alt=""></div>`;
        $('.product-innertext').append(innerHtml);
        $('.collapseBtn').on('click',function(){
            $('.filter-title,.filter').fadeToggle();
            $(this).find('img').toggleClass('closeFilter');
        });
        $('.filter-remakeBtn').on('click',e => {
            for (let index = 0; index < $('.filters-selects').find('input').length; index++) {
                $('.filters-selects').find('input')[index].checked = false;
            };
        });     
        $('.productHeart').on('click',function(){
            $(this).toggleClass('productHeart-active'); 
        });
        $('#readMore-btn').on('click',()=>{
            $('.product-more').fadeIn();
        });
        
        
    </script>
@endsection

@section('content')
    <section id="subPage-productAll">
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
        <div class="container filter-area">
            <div class="row filter">
                <div class="col-md-12 filter-title">
                <h1>品牌行李箱</h1>
                <div class="filter-title-hr"></div>
                <p style="margin-top: 50px;">這裡總有一款屬於你的冒險</p>
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
                                <div class="filters-selects-div">
                                    <input name="brand" id="departure" type="radio"><label for="departure">Departure</label>
                                    <input name="brand" id="crown" type="radio"><label for="crown">CROWN 皇冠</label>
                                    <input name="brand" id="novita" type="radio"><label for="novita">NOVITA</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="brand" id="yue" type="radio"><label for="yue">YUE</label>
                                    <input name="brand" id="allBrand" type="radio"><label for="allBrand">全部品牌</label>
                                    <input name="brand" id="oossack" type="radio"><label for="oossack">OOSSACK</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="brand" id="ad" type="radio"><label for="ad">AD 亞蘭德倫</label>
                                    <input name="brand" id="mom" type="radio"><label for="mom">MOM</label>
                                    <input name="brand" id="at" type="radio"><label for="at">AT 美國旅行者</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="brand" id="samsonite" type="radio"><label for="samsonite">SAMSONITE 新秀麗</label>
                                </div>
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
                                <div class="filters-selects-div">
                                    <input name="size" id="20" type="radio"><label for="20">20吋以下</label>
                                    <input name="size" id="23" type="radio"><label for="23">20 - 23吋</label>
                                    <input name="size" id="25" type="radio"><label for="25">23 - 25吋</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="size" id="29" type="radio"><label for="29">27 - 29吋</label>
                                    <input name="size" id="30" type="radio"><label for="30">30吋以上</label>
                                    <input name="size" id="allSize" type="radio"><label for="allSize">全部尺寸</label>
                                </div>
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
                                <div class="filters-selects-div">
                                    <input name="trip" id="aDay" type="radio"><label for="aDay">當日來回</label>
                                    <input name="trip" id="aWeek" type="radio"><label for="aWeek">3 - 7天</label>
                                    <input name="trip" id="twoWeeks" type="radio"><label for="twoWeeks">7 - 14天</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="trip" id="long" type="radio"><label for="long">Long Stay</label>
                                </div>
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
                                <div class="filters-selects-div">
                                    <input name="price" id="5000" type="radio"><label for="5000">0 - 5000</label>
                                    <input name="price" id="10000" type="radio"><label for="10000">5000 - 10000</label>
                                    <input name="price" id="15000" type="radio"><label for="15000">10000 - 15000</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="price" id="20000" type="radio"><label for="20000">15000 - 20000</label>
                                    <input name="price" id="20000Up" type="radio"><label for="20000Up">20000 以上</label>
                                </div>                        
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
                                <div class="filters-selects-div">
                                    <input name="material" id="aluminum" type="radio"><label for="aluminum">鋁框</label>
                                    <input name="material" id="pc" type="radio"><label for="pc">PC</label>
                                    <input name="material" id="abs" type="radio"><label for="abs">ABS</label>
                                    <input name="material" id="nylon" type="radio"><label for="nylon">防水尼龍</label>
                                    <input name="material" id="pet" type="radio"><label for="pet">PET</label> 
                                </div>
                                <div class="filters-selects-div">
                                    <input name="material" id="carbon" type="radio"><label for="carbon">碳纖維</label>
                                    <input name="material" id="allMaterial" type="radio"><label for="allMaterial">全部材質</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <button class="filter-remakeBtn">
                        <img class="filter-remakeBtnImg" src="/img/remakeIcon.svg" alt="">
                        重製選取條件
                    </button>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>

        <div class="container container-productCount" style="position: relative;">
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

        <div class="container-fulid filter-product-out">
            <div class="row filter-product">
                <div class="filter-product-row">
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
                <div class="row filter-product-row product-more">
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
                <div class="col-md-12 filter-product-readMore">
                    <button id="readMore-btn">查看更多</button>
                </div>
            </div>
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
