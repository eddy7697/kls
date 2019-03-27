@extends('main')

@section('custom-script')
    <script type="text/javascript">
         
    </script>
@endsection

@section('custom-style')
    <style media="screen">
        .sub-page-header .sub-page-header-inner .sub-nav-menu .sub-nav-menu-ul li:nth-child(4) a{
            border-bottom: solid 3px #FBB03B;
        }
    </style>
@endsection

@section('content')
<section id="subPage-Information">
    <div class="container-fulid information-banner">
        <div class="information-banner-inner">
            <div class="information-banner-inner-text">
                <h1>店鋪資訊</h1>
            </div>
        </div>
    </div>
    <div class="container-fulid information-inner">

        <div class="row information-inner-into">

            <div class="col-md-6 info-img">
                <div class="information-inner-img" style="background-image: url('/img/clothes-2586201_1920.jpg');"></div>
            </div>

            <div class="col-md-6 information-inner-into-col into-first">
                <div class="information-inner-store">
                    <p class="information-inner-store-name">
                        店舖資訊 <span> Information </span>
                    </p>
                    <p class="information-inner-store-intro">
                        在凱麗斯KLS，您可以依據行程、功能以及您的喜好來挑選行李箱，現場您可以嘗試滑動您喜歡的每一款箱型、同時您也可以實際觸碰箱款的材質，我們每一位門市人員均受過專業的知識訓練，同時也會在每個月定期接受新的箱款資訊與旅遊法令等等，無論您有各種關於旅行上的問題，我們都相當期待為您服務。
                    </p>
                </div>
            </div>

        </div>

        <div class="row information-inner-into into-bottom">

            <div class="col-md-6 information-inner-into-col">
                <div class="information-inner-store">
                    <p class="information-inner-store-name">
                        預約挑箱 <span> Reservation </span>
                    </p>
                    <p class="information-inner-store-intro">
                        若您在本店線上商店查看了我們的產品後，仍想親臨店鋪查看箱款實物，為了避免您白跑一趟，您可先透過以下管道預約挑箱，我們將為您準備好您希望體驗的箱款，並且告知您箱款所在店面，以便您有更好的挑箱體驗，透過網路預訂。
                    </p>
                    <div class="information-inner-store-reservation margin-top-Md information-flex">

                        <div class="information-inner-store-reservation-inner">

                            <p class="information-inner-store-number-title">
                                透過電話預訂
                            </p>
                            <div class="information-inner-store-number">
                                <img src="/img/phoneIcon-01.svg" alt="">
                                <p>
                                    03-5638999
                                </p>
                            </div>
                            <p>
                                ※營業時間為 13:00 - 20:00，每周一公休。
                            </p>
                        </div>

                        <div class="information-inner-store-reservation-inner">
                            <p class="information-inner-store-number-title">
                                透過Web預訂
                            </p>
                            <button class="information-btn online-contact" style="margin-top: 8px; width: 185px;">
                                <i class="fa fa-calendar-o" aria-hidden="true"></i>
                                網路預訂
                            </button>
                        </div>
                        
                    </div>
                </div>
            </div>

            <div class="col-md-6 info-img">
                <div class="information-inner-img" style="background-image: url('/img/clothes-2586201_1920.jpg');"></div>
            </div>

        </div>

        <div class="row">

            <div class="col-md-12 information-inner-navBar">
                <div class="information-inner-navBar-inner">
                    <div class="navBar-title">
                        <p>
                            店鋪資訊 <span> Store Informations </span>
                        </p>
                    </div>
                    <div class="navBar-list">
                        <ul>
                            <li>
                                <a href="#guanxin">
                                    > 新竹關新店
                                </a>
                            </li>
                            <li>
                                <a href="#bigCity">
                                    > 新竹巨城店
                                </a>
                            </li>
                            <li>
                                <a href="#zhubei">
                                    > 新竹竹北店
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

        <div class="row" id="guanxin">
            <div class="col-md-6 info-img">
                <div class="information-inner-img" style="background-image: url('/img/department-store-1270119_1920.jpg');"></div>
            </div>
            <div class="col-md-6">
                <div class="information-inner-store store-info">
                    <p>
                        Store Informations 
                    </p>
                    <p class="information-inner-store-name storeName">
                        新竹關新店 <span> Hsinchu Guanxin </span>
                    </p>
                    <p class="information-inner-store-time time-open">
                        OPEN <span> 13:00 </span>
                    </p>
                    <p class="information-inner-store-time">
                        CLOSE <span> 20:00 </span>
                    </p>
                    <p class="information-inner-store-intro">
                        新竹關新店是KLS目前最佳體驗旗艦店，也是KLS最新箱款展示店，坐落於新莊車站旁，由新竹火車站可直達新莊火車站僅需10分鐘，交通十分便利，而位於住宅重劃區的關新店，以及廣大的人行道，也是您體驗箱款的最佳地點。
                    </p>
                    <p class="information-inner-store-number-title">
                        連絡電話
                    </p>
                    <div class="information-inner-store-number">
                        <img src="/img/phoneIcon-01.svg" alt="">
                        <p>
                            03-5638999
                        </p>
                    </div>
                    <p>
                        ※營業時間為 13:00 - 20:00，每周一公休。
                    </p>
                </div>
            </div>
            <div class="col-md-12 information-link">
                <div class="emailContact">
                    <p>
                        電子郵件聯繫 <span>Email Contact</span>
                    </p>
                    <button class="information-btn online-contact">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        線上聯繫
                    </button>
                    <p>
                        ※點擊前往表單連結進行填寫。
                    </p>
                </div>
                <div class="storeLocation">
                    <p>
                        店鋪位置 <span>Store Location</span>
                    </p>
                    <div class="storeLocation-address">
                        <p>
                            新竹縣新竹市東區關新路201號
                        </p>
                        <a class="information-map-link" href="https://goo.gl/maps/AvLidq4Sea32"  target="_blank">
                            <button class="information-btn google-contact">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                Google Maps
                            </button>
                        </a>
                        
                    </div>
                    <p>
                        ※鄰近台鐵六家線往內灣方向新竹火車站，下車後步行約5分鐘。
                    </p>
                </div>
            </div>
        </div>

        <div class="row" id="bigCity">
            <div class="col-md-6 info-img">
                <div class="information-inner-img" style="background-image: url('/img/store-984393_1920.jpg');"></div>
            </div>
            <div class="col-md-6">
                <div class="information-inner-store store-info">
                    <p>
                        Store Informations 
                    </p>
                    <p class="information-inner-store-name storeName">
                        新竹巨城店 <span> Hsinchu Big City </span>
                    </p>
                    <p class="information-inner-store-time time-open">
                        OPEN <span> 13:00 </span>
                    </p>
                    <p class="information-inner-store-time">
                        CLOSE <span> 20:00 </span>
                    </p>
                    <p class="information-inner-store-intro">
                        新竹巨城店位於人潮眾多的巨城購物中心正對面，坐落於新竹市中心的交通樞紐，巨城店中各式箱款應有盡有，亦是新竹逛街購物必經路線，若您專程前往，相當建議您可以在新竹火車站搭乘接駁車前往巨城購物中心，步行過馬路僅需1分鐘。
                    </p>
                    <p class="information-inner-store-number-title">
                        連絡電話
                    </p>
                    <div class="information-inner-store-number">
                        <img src="/img/phoneIcon-01.svg" alt="">
                        <p>
                            03-5326191
                        </p>
                    </div>
                    <p>
                        ※營業時間為 13:00 - 20:00，每周一公休。
                    </p>
                </div>
            </div>
            <div class="col-md-12 information-link">
                <div class="emailContact">
                    <p>
                        電子郵件聯繫 <span>Email Contact</span>
                    </p>
                    <button class="information-btn online-contact">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        線上聯繫
                    </button>
                    <p>
                        ※點擊前往表單連結進行填寫。
                    </p>
                </div>
                <div class="storeLocation">
                    <p>
                        店鋪位置 <span>Store Location</span>
                    </p>
                    <div class="storeLocation-address">
                        <p>
                            新竹縣新竹市東區民權路173號
                        </p>
                        <a class="information-map-link" href="https://goo.gl/maps/ZsqSNpedyyH2"  target="_blank">
                            <button class="information-btn google-contact">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                Google Maps
                            </button>
                        </a>
                    </div>
                    <p>
                        ※新竹火車站站前可搭乘接駁車前往巨城購物中心，下車後步行約1分鐘 。
                    </p>
                </div>
            </div>
        </div>

        <div class="row" id="zhubei" style="margin-bottom: 0px;">
            <div class="col-md-6 info-img">
                <div class="information-inner-img" style="background-image: url('/img/adidas-458043_1920.jpg');"></div>
            </div>
            <div class="col-md-6">
                <div class="information-inner-store store-info">
                    <p>
                        Store Informations 
                    </p>
                    <p class="information-inner-store-name storeName">
                        新竹竹北店 <span> Hsinchu Zhubei  </span>
                    </p>
                    <p class="information-inner-store-time time-open">
                        OPEN <span> 13:00 </span>
                    </p>
                    <p class="information-inner-store-time">
                        CLOSE <span> 22:00 </span>
                    </p>
                    <p class="information-inner-store-intro">
                        新竹關新店是KLS目前最佳體驗旗艦店，也是KLS最新箱款展示店，坐落於新莊車站旁，由新竹火車站可直達新莊火車站僅需10分鐘，交通十分便利，而位於住宅重劃區的關新店，以及廣大的人行道，也是您體驗箱款的最佳地點。
                    </p>
                    <p class="information-inner-store-number-title">
                        連絡電話
                    </p>
                    <div class="information-inner-store-number">
                        <img src="/img/phoneIcon-01.svg" alt="">
                        <p>
                            03-6565528
                        </p>
                    </div>
                    <p>
                        ※營業時間為 13:00 - 20:00，每周一公休。
                    </p>
                </div>
            </div>
            <div class="col-md-12 information-link">
                <div class="emailContact">
                    <p>
                        電子郵件聯繫 <span>Email Contact</span>
                    </p>
                    <button class="information-btn online-contact">
                        <i class="fa fa-envelope-o" aria-hidden="true"></i>
                        線上聯繫
                    </button>
                    <p>
                        ※點擊前往表單連結進行填寫。
                    </p>
                </div>
                <div class="storeLocation">
                    <p>
                        店鋪位置 <span>Store Location</span>
                    </p>
                    <div class="storeLocation-address">
                        <p>
                            新竹縣竹北市光明六路15號
                        </p>
                        <a class="information-map-link" href="https://goo.gl/maps/s2ycsjN3i412"  target="_blank">
                            <button class="information-btn google-contact">
                                <i class="fa fa-map-marker" aria-hidden="true"></i>
                                Google Maps
                            </button>
                        </a>
                    </div>
                    <p>
                        ※鄰近台鐵六家線往內灣方向新莊火車站，下車後步行約5分鐘。
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
