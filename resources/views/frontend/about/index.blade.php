@extends('main')

@section('custom-style')

@endsection

@section('custom-script')
    <script>
        
    </script>
@endsection

@section('content')
    <section id="about-section">
        <div class="about-header">
            <div class="container-fulid information-banner">
                <div class="information-banner-inner">
                    <div class="information-banner-inner-text">
                        <h1>
                            關於凱莉絲
                        </h1>
                        <h1>
                            About KLS
                        </h1>
                        <p>
                            行李箱首購族最大的困擾大多是什麼行李箱才適合我這趟旅行，PVC、ABS、軟殼箱、鋁框箱到底哪一款適合我？購買第二顆行李箱也常常考慮到CP值、耐用性，如何比前一顆好？職人線上幫你整理懶人包、影音開箱，這裏，總有一款屬於你的冒險。
                        </p>
                    </div>
                    <img src="/img/KLSLogoBlack-01.svg" alt="">
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

        <div class="feedback">
            <div class="sw_mask mask_left">
                <img class="product_arrow left" src="/img/arrow-left.png" alt="">
            </div>
            <div class="sw_mask mask_right">
                <img class="product_arrow right" src="/img/arrow-right.png" alt="">
            </div>
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12 feedback-Index">
                        <div class="swiper-wrapper">
                            @for ($i = 0; $i < 3; $i++)
                                <div class="swiper-slide">
                                    @for ($i = 0; $i < 3; $i++)   
                                    <div class="col-md-4">
                                        <div class="feedbackPost">
                                            <img class="feedback-Icon" src="/img/feedbackIcon.svg" alt="">
                                            <div class="feedback-Inner">
                                                <p>
                                                    異形箱真的誇張的好裝、好拖、好美(*^^*)真的不要再猶豫了！男友的2萬的s牌都不想用了，一直和我搶著拖異形箱(o^^o)超滑的，裝20幾公斤，輪子還是好滑好滑，也沒有任何路面感到困難！買了不會後悔的！謝謝闆娘的耐心回答任何問題及推薦，謝謝闆闆願意順路幫我送到家，讓我緊急帶出國！這次是買27吋的異形箱！d牌的形李箱讓我離不開這品牌了！
                                                </p>
                                            </div>
                                            <div class="feedback-Author">
                                                <p>
                                                    卜一一
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    @endfor
                                </div>
                            @endfor    
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
