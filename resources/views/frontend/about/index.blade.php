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
        .filter-area .filter-filtering .filter-filters .filters-selects .select{

        }
        .filter-area .filter-filtering .filter-filters .filters-selects .check-circle{
            border: solid 1px grey;
            border-radius: 100%;
            width: 12px;
            height: 12px;
            margin-bottom: 0;
            position: relative;
        }
        .filter-area .filter-filtering .filter-filters .filters-selects .check-circle .check-circle-inner{
            border-radius: 100%;
            background-color: grey;
            width: 7px;
            height: 7px;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            opacity: 0;
            transition: 0.3s
        }
        .filter-area .filter-filtering .filter-filters .filters-selects input[type='checkbox'] {
            display: none;
        }
        .filter-area .filter-filtering .filter-filters .filters-selects input[type='checkbox']:checked + .check-circle .check-circle-inner{
            opacity: 1;
        }
        .filter-product{
            
        }
        .filter-product .product-img{

        }
        .filter-product .product-innertext .product-label{

        }
        .filter-product .product-innertext .product-title{
            
        }
        .filter-product .product-innertext .product-style{

        }
        
        .filter-product .product-innertext .product-style .product-model{

        }
        .filter-product .product-innertext .product-style .product-size{

        }
        .filter-product .product-innertext .product-style .product-text{

        }
        .filter-product .product-innertext .product-style .product-price{

        }
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
                            <p>品牌 Brand</p>
                        </div>
                        <hr>
                        <div class="filters-selects">
                            <div class="select selectBrand">
                                <input id="departure" type="checkbox">
                                <label class="check-circle" for="departure"><div class="check-circle-inner"></div></label>
                                <label for="departure">Departure</label>
                            </div>
                            <div class="select selectBrand">
                                <input id="crown" type="checkbox">
                                <label class="check-circle" for="crown"><div class="check-circle-inner"></div></label>
                                <label for="crown">CROWN 皇冠</label>
                            </div>
                            <div class="select selectBrand">
                                <input id="samsonite" type="checkbox">
                                <label class="check-circle" for="samsonite"><div class="check-circle-inner"></div></label>
                                <label for="samsonite">SAMSONITE 新秀麗</label>
                            </div>
                            <div class="select selectBrand">
                                <input id="novita" type="checkbox">
                                <label class="check-circle" for="novita"><div class="check-circle-inner"></div></label>
                                <label for="novita">NOVITA</label>
                            </div>
                            <div class="select selectBrand">
                                <input id="yue" type="checkbox">
                                <label class="check-circle" for="yue"><div class="check-circle-inner"></div></label>
                                <label for="yue">YUE</label>
                            </div>
                            <div class="select selectBrand">
                                <input id="allBrand" type="checkbox">
                                <label class="check-circle" for="allBrand"><div class="check-circle-inner"></div></label>
                                <label for="allBrand">全部品牌</label>
                            </div>
                            <div class="select selectBrand">
                                <input id="oossack" type="checkbox">
                                <label class="check-circle" for="oossack"><div class="check-circle-inner"></div></label>
                                <label for="oossack">OOSSACK</label>
                            </div>
                            <div class="select selectBrand">
                                <input id="ad" type="checkbox">
                                <label class="check-circle" for="ad"><div class="check-circle-inner"></div></label>
                                <label for="ad">AD 亞蘭德倫</label>
                            </div>
                            <div class="select selectBrand">
                                <input id="mom" type="checkbox">
                                <label class="check-circle" for="mom"><div class="check-circle-inner"></div></label>
                                <label for="mom">MOM</label>
                            </div>
                            <div class="select selectBrand">
                                <input id="at" type="checkbox">
                                <label class="check-circle" for="at"><div class="check-circle-inner"></div></label>
                                <label for="at">AT 美國旅行者</label>
                            </div>
                            
                        </div>
                    </div>
                </div>
                <div class="col-md-4">  
                    <div class="filter-filters">
                        <div class="filters-title">
                        <p>尺寸 Size</p>
                        </div>
                        <hr>
                        <div class="filters-selects">
                            <div class="select selectSize">
                                <input id="20" type="checkbox">
                                <label class="check-circle" for="pc"><div class="check-circle-inner"></div></label>
                                <label for="20">20吋以下</label>
                            </div>
                            <div class="select selectSize">
                                <input id="23" type="checkbox">
                                <label class="check-circle" for="pc"><div class="check-circle-inner"></div></label>
                                <label for="23">20 - 23吋</label>
                            </div>    
                            <div class="select selectSize">
                                <input id="25" type="checkbox">
                                <label class="check-circle" for="pc"><div class="check-circle-inner"></div></label>
                                <label for="25">23 - 25吋</label>
                            </div>    
                            <div class="select selectSize">
                                <input id="29" type="checkbox">
                                <label class="check-circle" for="pc"><div class="check-circle-inner"></div></label>
                                <label for="29">27 - 29吋</label>
                            </div>    
                            <div class="select selectSize">
                                <input id="30" type="checkbox">
                                <label class="check-circle" for="pc"><div class="check-circle-inner"></div></label>
                                <label for="30">30吋以上</label>
                            </div>    
                            <div class="select selectSize">
                                <input id="allSize" type="checkbox">
                                <label class="check-circle" for="pc"><div class="check-circle-inner"></div></label>
                                <label for="allSize">全部尺寸</label>
                            </div>    
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="filter-filters">
                        <div class="filters-title">
                            <p>旅程 Trip</p>
                        </div>
                        <hr>
                        <div class="filters-selects">
                            <div class="select selectTrip">
                                <input id="aDay" type="checkbox">   
                                <label class="check-circle" for="aDay"><div class="check-circle-inner"></div></label>
                                <label for="aDay">當日來回</label>
                            </div>
                            <div class="select selectTrip">
                                <input id="aWeek" type="checkbox">
                                <label class="check-circle" for="aWeek"><div class="check-circle-inner"></div></label>
                                <label for="aWeek">3 - 7天</label>
                            </div>
                            <div class="select selectTrip">
                                <input id="twoWeeks" type="checkbox">
                                <label class="check-circle" for="twoWeeks"><div class="check-circle-inner"></div></label>
                                <label for="twoWeeks">7 - 14天</label>
                            </div>
                            <div class="select selectTrip">
                                <input id="long" type="checkbox">
                                <label class="check-circle" for="long"><div class="check-circle-inner"></div></label>
                                <label for="long">Long Stay</label>
                            </div>
                        </div>
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
                        <div class="filters-selects">
                            <div class="select selectPrice">
                                <input id="5000" type="checkbox">
                                <label class="check-circle" for="5000"><div class="check-circle-inner"></div></label>
                                <label for="5000">0 - 5000</label>
                            </div>
                            <div class="select selectPrice">
                                <input id="10000" type="checkbox">
                                <label class="check-circle" for="10000"><div class="check-circle-inner"></div></label>
                                <label for="10000">5000 - 10000</label>
                            </div>
                            <div class="select selectPrice">
                                <input id="15000" type="checkbox">
                                <label class="check-circle" for="15000"><div class="check-circle-inner"></div></label>
                                <label for="15000">10000 - 15000</label>
                            </div>
                            <div class="select selectPrice">
                                <input id="20000" type="checkbox">
                                <label class="check-circle" for="20000"><div class="check-circle-inner"></div></label>
                                <label for="20000">15000 - 20000</label>
                            </div>
                                
                            <div class="select selectPrice">
                                <input id="20000Up" type="checkbox">
                                <label class="check-circle" for="20000Up"><div class="check-circle-inner"></div></label>
                                <label for="20000Up">20000 以上</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="filter-filters">
                        <div class="filters-title">
                            <p>材質 Material</p>
                        </div>
                        <hr>
                        <div class="filters-selects">
                            <div class="select selectMaterial">
                                <input id="aluminum" type="checkbox">
                                <label class="check-circle" for="aluminum"><div class="check-circle-inner"></div></label>
                                <label for="aluminum">鋁框</label>
                            </div>
                            <div class="select selectMaterial">
                                <input id="pc" type="checkbox">
                                <label class="check-circle" for="pc"><div class="check-circle-inner"></div></label>
                                <label for="pc">PC</label>
                            </div>    
                            <div class="select selectMaterial">
                                <input id="abs" type="checkbox">
                                <label class="check-circle" for="abs"><div class="check-circle-inner"></div></label>
                                <label for="abs">ABS</label>
                            </div> 
                            <div class="select selectMaterial">
                                <input id="nylon" type="checkbox">
                                <label class="check-circle" for="nylon"><div class="check-circle-inner"></div></label>
                                <label for="nylon">防水尼龍</label>
                            </div>
                            <div class="select selectMaterial">
                                <input id="pet" type="checkbox">
                                <label class="check-circle" for="pet"><div class="check-circle-inner"></div></label>
                                <label for="pet">PET</label> 
                            </div>
                            <div class="select selectMaterial">
                                <input id="carbon" type="checkbox">
                                <label class="check-circle" for="carbon"><div class="check-circle-inner"></div></label>
                                <label for="carbon">碳纖維</label>
                            </div>
                            <div class="select selectMaterial">
                                <input id="allMaterial" type="checkbox">
                                <label class="check-circle" for="allMaterial"><div class="check-circle-inner"></div></label>
                                <label for="allMaterial">全部材質</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <button>重製選取條件</button>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

            </div>
        </div>
    </div>

    <div class="container-fulid filter-product">
        <div class="row">
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
        </div>
    </div>
@endsection
