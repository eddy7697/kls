@extends('main')

@section('custom-script')
    <script src="/js/plugins/lightbox2/dist/js/lightbox.min.js" charset="utf-8"></script>
    <script type="text/javascript">
    </script>
@endsection

@section('custom-style')
    <style media="screen">
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
        }
        @media screen and (max-width: 1200px) {
            .sub-page-footer .sub-page-footer-copyright-inner{
                width: 991px  !important;
            }
            .sub-page-header-inner{
                width: 950px;
                justify-content: center !important;
            }
        }
        @media screen and (max-width: 991px){
            .sub-page-header-inner,.sub-page-footer .sub-page-footer-copyright-inner{
                width: 750px !important;
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
    </style>
@endsection

@section('content')
    <section id="subPage-about">
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

