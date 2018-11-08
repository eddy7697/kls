@extends('main')

@section('custom-script')
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
        .contact-banner{
            background-image: url('/img/contact-banner.jpg');
            background-position: center;
            background-size: cover;
            padding-bottom: 60%;
        }
        .contact-banner .contact-banner-inner-text{
            position: absolute;
            top: 50%;
            right: 10%;
            transform: translateX(10%) translateY(-50%);
            width: 350px;
        }
        .contact-banner .contact-banner-inner-text h1{
            font-weight: 700;
            color: #666666;
        }
        .contact-banner .contact-banner-inner-text p{
            color: #666666;
            opacity: 0.5;
        }
        .information-content{
            margin: 100px 0;
            padding: 15px 10px;
            display: flex;
            justify-content: center;
            align-items: center;
            color: #666666;
        }
        .center-content{
            border: solid 1px #636b6f;
            border-radius: 5px;
        }
        .contact-table{
            margin: 25px;
        }
        .contact-table h1{
            font-weight: 700;
        }
        .contact-table tr{
            display: flex;
            justify-content: flex-start;
            align-items: stretch;
            margin: 20px 0;
        }
        .form-group{
            margin: 0 20px;
        }
        .contact-table .form-group-text-must p{
            border: solid 1px #ED1C24;
            color: #ED1C24;
            border-radius: 5px;
            text-align: center;
            font-size: 16px;
        }
        .contact-table .form-group-text-input .form-group-input {
            
        }
        
        .privacyText a{
            color: #FBB03B;
            text-decoration: none;
            border-bottom: solid 1px #FBB03B;
            transition: 0.3s;
        }
        .privacyText a:hover{
            opacity: 0.7;
        }
        #search{
            width: 100%;
        }
        #submitBtn{
            color: #fff; 
            background-color: #636b6f;
            padding: 15px 80px; 
            transition:0.3s; 
            border-radius: 5px;
            transition: 0.5s;
        }
        #submitBtn:hover{
            color: #636b6f; 
            border: solid 1px #636b6f;
            background-color: #fff;
        }
        .contact-table .form-group-text-td{
            width: 20%;
        }
        .contact-table .form-group-text-td p{
            font-size: 18px;
        }
        .contact-table .form-group-text-must{
            width: 6%;
        }
        .contact-table .form-group-text-input{
            width: 70%;
        }
        .form-control{
            height: 30px;
            border-radius: 8px;
            outline: none;
        }
        .form-remind{
            color: #B3B3B3;
            font-size: 16px;
        }
    </style>
@endsection

@section('content')
    <section id="subPage-contact">
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
        
        <div class="container-fulid contact-banner">
            <div class="contact-banner-inner">
                <div class="contact-banner-inner-text">
                    <h1>諮詢專區</h1>
                    <p>感謝您蒞臨凱麗斯旅行箱專賣店，我們十分期待能隨時為您服務，歡迎您在這裡留下您的疑問，我們將在收到您的訊息後以最快的速度回覆給您，也請您隨時留意您登記的電子郵件信箱，再次誠摯的感謝您的蒞臨，也希望您能在這邊找到一款屬於您的冒險。</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row information-content">
                <div class="col-md-10 center-content col-tel">
                    <form action="" method="post">
                        <table class="contact-table">
                            <tbody>
                               <tr>
                                    <td style="width: 100%;">
                                        <h1>聯絡表單</h1>
                                        <hr>
                                        <p>請詳細填寫您的資訊及疑問，以便我們精準為您回覆，非常感謝您。</p>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group form-group-text-td">
                                        <div>
                                            <p>姓名</p>
                                        </div>
                                    </td>
                                    <td class="form-group form-group-text-must">
                                        <div>
                                            <p>必填</p>
                                        </div>    
                                    </td>
                                    <td class="form-group form-group-text-input">
                                        <div class="form-group-input">
                                            <input class="form-control" placeholder="" id="name-input" name="name" type="text" required="" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group form-group-text-td">
                                        <div>
                                            <p>性別</p>
                                        </div>
                                    </td>
                                    <td class="form-group form-group-text-must">
                                        <div>
                                            <p>必填</p>
                                        </div>    
                                    </td>
                                    <td class="form-group form-group-text-input">
                                        <div class="form-group-input">
                                            <input name="sex" id="mr" type="radio"><label for="mr">先生</label>
                                            <input name="sex" id="miss" type="radio"><label for="miss">小姐</label>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group form-group-text-td">
                                        <div>
                                            <p>電子郵件</p>
                                        </div>
                                    </td>
                                    <td class="form-group form-group-text-must">
                                        <div>
                                            <p>必填</p>
                                        </div>    
                                    </td>
                                    <td class="form-group form-group-text-input">
                                        <div class="form-group-input">
                                            <input class="form-control" placeholder="" id="name-input" name="email" type="text" required="" />
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group form-group-text-td">
                                        <div>
                                            <p>聯絡電話</p>
                                        </div>
                                    </td>
                                    <td class="form-group form-group-text-must">
                                        <div>
                                            <p>必填</p>
                                        </div>    
                                    </td>
                                    <td class="form-group form-group-text-input">
                                        <div class="form-group-input">
                                            <input class="form-control" placeholder="" id="phone-input" name="phone" type="text" required="" pattern="^[0-9/-]*$" title="僅允許數字"/>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="form-group form-group-text-td">
                                        <div>
                                            <p>查詢類型</p>
                                        </div>
                                    </td>
                                    <td class="form-group form-group-text-must"></td>
                                    <td class="form-group form-group-text-input">
                                        <div class="form-group-input">
                                            <select class="form-control" name="search" id="search"></select>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="content-input-tr">
                                    <td class="form-group form-group-text-td">
                                        <div>
                                            <p>詢問內容</p>
                                            <p class="form-remind">提醒您，若您填寫得越精準，越有利我們及時回覆給您資訊。</p> 
                                        </div>
                                    </td>
                                    <td class="form-group form-group-text-must">
                                        <div>
                                            <p>必填</p>
                                        </div>    
                                    </td>
                                    <td class="form-group form-group-text-input">
                                        <div class="form-group-input">
                                            <textarea class="form-control" placeholder="" id="content-input" name="content" style="resize: vertical; min-height: 150px;" required></textarea>
                                        </div>
                                    </td>
                                </tr>
                                <tr class="privacyText">
                                    <td>
                                        <p class="form-remind">
                                            我們不會將您輸入的任何個人信息用於回答查詢以外的目的，此外，我們將根據
                                            <a href="https://law.moj.gov.tw/LawClass/LawAll.aspx?PCode=I0050021">個人資料保護法</a>
                                            第六條，妥善管理您的個人信息。您亦可<a href="">點擊這裡</a>查看更多關於KLS提供的隱私權保護政策。
                                            請您務必將KLS的電子郵件地址或域名設置為可接收的電子郵件，以免錯過我們的回覆，您亦可直接我們聯繫<a href="">(點擊這裡查看聯絡訊息)</a>
                                        </p>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        {!! NoCaptcha::renderJs() !!}
                                        {!! NoCaptcha::display() !!}
                                        @if ($errors->has('g-recaptcha-response'))
                                            <span class="help-block">
                                                <strong>我不是機器人</strong>
                                            </span>
                                        @endif
                                    </td>
                                </tr>
                                <tr>
                                    <td style="width:100%; text-align: center;">
                                        <button id="submitBtn" class="btn btn-lg btn-secondary" type="submit">送出訊息</button>
                                    </td>
                                </tr>
                            </tbody>
                            
                        </table>
                    </form>
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
