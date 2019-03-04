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
                    <div class="col-md-6">

                    </div>
                    <div class="col-md-6">

                    </div>
                </div>
            </div>
        </div>

        <div class="about-hr-banner">
            
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
