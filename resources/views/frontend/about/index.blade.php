@extends('main')

@section('custom-script')
    <script type="text/javascript">
    $(document).ready(function(){
        var $width = $(this).width();
        ( ( $width < 991 ) ? indexSwiper(1) : indexSwiper(3) )
        function indexSwiper(val){
            var feedbackswiper = new Swiper ('.feedback-Index',{
                direction : 'horizontal',
                loop      : true,
                speed     : 1000,
                slidesPerView: val,
                spaceBetween: 30,
                slidesPerGroup: val,
                pagination: {
                    el: '.swiper-pagination',
                },
                navigation: {
                    nextEl: '.feedback-right',
                    prevEl: '.feedback-left'
                }
            });
        };
    });
         
    </script>
@endsection

@section('custom-style')
    <style media="screen">
        .sub-page-header .sub-page-header-inner .sub-nav-menu .sub-nav-menu-ul li:nth-child(1) .sub-nav-menu-ul-a{
            opacity: 1;
        }
    </style>
@endsection

@section('content')
    <section id="about-section">
        <div class="about-header">
            <div class="container-fulid information-banner">
                <div class="information-banner-inner">
                    <div class="information-banner-inner-text">
                        <h1>
                            關於凱麗斯
                        </h1>
                        <h1>
                            About KLS
                        </h1>
                        <p>
                            行李箱首購族最大的困擾大多是什麼行李箱才適合我這趟旅行，PVC、ABS、軟殼箱、鋁框箱到底哪一款適合我？購買第二顆行李箱也常常考慮到CP值、耐用性，如何比前一顆好？職人線上幫你整理懶人包、影音開箱，這裏，總有一款屬於你的冒險。
                        </p>
                    </div>
                    <img src="/img/KLSLogoBlack-01.png" alt="">
                </div>
            </div>
        </div>
        
        <div class="about-into">
            <div class="container">
                <div class="row">
                    <div class="col-md-7 about-into-text">
                        <h1>
                            旅程。從KLS 開始
                        </h1>
                        <p>
                            KLS於1993年成立，至今新竹地區已有三間門市，旗艦店位於新竹市關新路，新莊火車站旁。<br>
                            KLS提供專業服務、品牌眾多、價位等級廣泛，除了箱類以外，也販售多種旅行、商務包款，多樣化產品，給所有旅人們最貼心的建議與選擇，來到KLS給您最不一樣的挑箱體驗。<br>
                            讓旅行箱再也不止是裝滿行李，也是您旅途中裝載回憶的最佳旅伴。<br>
                            跟我們一起眺望世界最美的遺跡，<br>
                            等待不一樣的日出.日落，嚐遍所有的美食。<br>
                            準備好了，就跟隨自己的心。出發吧！<br>
                            As long as we take the first step,<br> 
                            we will be able to live a new life.<br>
                        </p>
                    </div>
                    <div class="col-md-5 about-into-img">

                    </div>
                </div>
            </div>
        </div>

        <div class="about-hr-banner">
            <div class="about-hr-banner-text">
                <h1>
                    我們的客戶
                </h1>
                <p>
                    KLS提供專業的購物分析，協助所有首購族、商務客、旅人們最適合自己的專屬旅行箱。
                </p>
            </div>
        </div>

        <!------------------------feedback------------------------>
        <div class="feedback">
            <div class="sw_mask mask_left">
                <img class="product_arrow feedback-left" src="/img/arrow-left.png" alt="">
            </div>
            <div class="sw_mask mask_right">
                <img class="product_arrow feedback-right" src="/img/arrow-right.png" alt="">
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-md-12 feedback-Index">
                        <div class="swiper-wrapper">
                            @foreach (PostView::witness() as $item)
                            <div class="test" style="display: none;">{{$item}}</div>
                                <div class="swiper-slide">
                                    <div class="feedbackPost">
                                        <div class="feedbackPostInfo">
                                            @if ($item->customField6 == 'male')
                                                <img class="feedback-Icon" src="/img/icon/male.png" alt="">
                                            @else
                                                <img class="feedback-Icon" src="/img/icon/female.png" alt="">
                                            @endif
                                            <div class="feedback-Author">
                                                <h4>
                                                    {{$item->locale}}
                                                </h4>
                                                <p>旅遊地點:日本，購買商品:《異形鋁框箱》行李箱-27吋 霧面黑色，到店時間: 2019/04/14</p>
                                            </div>
                                        </div>
                                        <div class="feedback-img" style="background-image: url('{{$item->customField4}}')">
                                        </div>
                                        <div class="feedback-Inner">{{mb_strimwidth(preg_replace('#<[^>]+>#', ' ', $item->content), 0, 150, "...")}}</div>
                                        <div class="choose_btn">
                                            <a href="/witness">
                                                <button class="goBuy">
                                                    閱讀更多                  
                                                </button>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            @endforeach   
                        </div>
                    </div>
                    <div class="feedback-pagination swiper-pagination"></div>
                </div>
            </div>
        </div>

    </section>
@endsection
