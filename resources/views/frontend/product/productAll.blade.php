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
            cursor: pointer;
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
        .filter-product .product-inner .buyIt{
            position: absolute;
            bottom: 15px;
            right: 15px;
            background-color: #3E3A39;
            border: none;
            outline: none;
            color: #fff;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 6px 13px;
            transition: 0.5s;
        }
        .filter-product .product-inner .buyIt:hover{
            opacity: 0.7;
        }
        .filter-product .product-inner .product-innertext .buyIt img{
            width: 15px;
            height: 15px;
        }
        .filter-product .product-inner .buyIt p{
            margin: 0;
            margin-left: 5px;
            font-size: 12px;
        }
        .filter-product .product-inner .product-img{
            width: 35%;
            background-size: cover;
            background-position: center;
            position: relative;
            overflow: hidden;
        }
        .filter-product .product-inner .product-img .product-img-mask{
            position: absolute;
            top: 0;
            right: 0;
            bottom: 0;
            left: 0;
            border: solid 0px rgba(0,0,0,0.4);
            transition: 0.5s;
        }
        .filter-product .product-inner:hover .product-img-mask{
            border: solid 200px rgba(0,0,0,0.4);
        }
        .filter-product .product-inner .product-img p{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
            opacity: 0;
            transition: 0.5s;
        }
        .filter-product .product-inner:hover .product-img p{
            opacity: 1;
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
            bottom: -30px;
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
    <script src="{{ asset('js/product-filter.js') }}"></script>
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
                        <div class="productHeart"><img src="/img/productHeart.svg" alt=""></div>
                        <button class="buyIt"><img src="/img/cartIconWhite.svg" alt=""><p>加入購物車</p></button>`;
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
    <div id="product-filter">
        <product-filter></product-filter>
    </div>
    
    
@endsection
