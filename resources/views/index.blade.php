@extends('main')

@php
use Carbon\Carbon;
@endphp

@section('custom-style')
    <style>
        .choose-content {
            margin-bottom: 22px;
        }
    </style>
@endsection

@section('custom-script')
    <script>
        var $width = $(this).width();
        function quickView(path) {
            window.location.href = '/product-deatil/' + path
        };   
        
        function renderPruductDetail(title, type){
            var jsonContent = JSON.parse($('#json-content').val());
            $('#productDetailModal').modal('show');
            $('.modal-title').text(title);
            $('.modal-img').attr('src',jsonContent[type].featureImage);
            $('.modal-description').html(jsonContent[type].content);
        };
        $(document).ready(function(){
            var $width = $(this).width();
            ( ( $width < 991 ) ? indexSwiper(1) : indexSwiper(4) )
            function indexSwiper(val){
                var feedbackswiper = new Swiper ('.feedback-Index',{
                    direction : 'horizontal',
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
        function lineShare(url, text) {
            var link = "http://line.naver.jp/R/msg/text/?";
            link += encodeURIComponent(text);
            link += "%0D%0A";
            link += encodeURIComponent(url);
            window.open(link);
            return false;
        }
        function facebookShare(url, text) {
            var text;

            text += encodeURIComponent(text);
            text += "%0D%0A";
            text += encodeURIComponent(url);

            window.open("https://www.facebook.com/sharer/sharer.php?u=" + encodeURIComponent(url) + '&src=sdkpreparse');
            return false;
        }
    </script>
    <script>
        var cards = $('.choose-content');
        var finalHeight = 0;
        
        for (let i = 0; i < cards.length; i++) {
            if ($(cards[i]).height() > finalHeight) {
                finalHeight = $(cards[i]).height();
            }
        }
        $('.choose-content').height(finalHeight);
    </script>
@endsection


@section('content')

    <!------------------------choose------------------------>
    <textarea id="json-content" cols="30" rows="10" style="display: none">
            {{SiteMetaView::boxMethods()}}
    </textarea>

    <section id="choose">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 section_title">
                   <p> 
                       挑選適合你的旅行箱
                   </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 co_post">
                    <div class="choose_post">
                        <div class="img_div" style="background-image: url('{{SiteMetaView::noticeService()->featureImage}}')">
                        </div>
                        <div class="post_text">
                            <h3>
                                拉鍊式硬殼箱
                            </h3>
                            <div class="choose-content">
                                <p>{{mb_strimwidth(preg_replace('#<[^>]+>#', ' ', nl2br(SiteMetaView::noticeService()->content)), 0, 195, "...")}}</p>
                            </div>
                            
                            {{-- <p>{!!nl2br(SiteMetaView::noticeService()->content)!!}</p> --}}
                            {{-- {{FeatureView::get('feature_'.($i + 2))->productGuid}} --}}
                            <div class="choose_btn">
                                <button class ="goBuy" onclick="renderPruductDetail('拉鍊式硬殼箱', 'service')">
                                    了解更多                  
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 co_post">
                    <div class="choose_post">
                        <div class="img_div" style="background-image: url('{{SiteMetaView::noticeShipping()->featureImage}}')">
                        </div>
                        <div class="post_text">
                            <h3>
                                鋁框式硬殼箱
                            </h3>
                            <div class="choose-content">
                                <p>{{mb_strimwidth(preg_replace('#<[^>]+>#', ' ', nl2br(SiteMetaView::noticeShipping()->content)), 0, 195, "...")}}</p>
                            </div>
                            
                            {{-- <p>{!!nl2br(SiteMetaView::noticeShipping()->content)!!}</p> --}}
                            {{-- {{FeatureView::get('feature_'.($i + 2))->productGuid}} --}}
                            <div class="choose_btn">
                                <button class ="goBuy" onclick="renderPruductDetail('鋁框式硬殼箱', 'shipping')">
                                    了解更多                  
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 co_post">
                    <div class="choose_post">
                        <div class="img_div" style="background-image: url('{{SiteMetaView::noticeReturn()->featureImage}}')">
                        </div>
                        <div class="post_text">
                            <h3>
                                軟殼布面箱
                            </h3>
                            <div class="choose-content">
                                <p>{{mb_strimwidth(preg_replace('#<[^>]+>#', ' ', nl2br(SiteMetaView::noticeReturn()->content)), 0, 195, "...")}}</p>
                            </div>
                            
                            {{-- <p>{!!nl2br(SiteMetaView::noticeReturn()->content)!!}</p> --}}
                            {{-- {{FeatureView::get('feature_'.($i + 2))->productGuid}} --}}
                            <div class="choose_btn">
                                <button class ="goBuy" onclick="renderPruductDetail('軟殼布面箱', 'return')">
                                    了解更多                  
                                </button>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-3 co_post">
                    <div class="choose_post">
                        <div class="img_div" style="background-image: url('{{SiteMetaView::noticeAntiFraud()->featureImage}}')">
                        </div>
                        <div class="post_text">
                            <h3>
                                品牌特殊箱
                            </h3>
                            <div class="choose-content">
                                <p>{{mb_strimwidth(preg_replace('#<[^>]+>#', ' ', nl2br(SiteMetaView::noticeAntiFraud()->content)), 0, 195, "...")}}</p>
                            </div>
                            
                            {{-- <p>{!!nl2br(SiteMetaView::noticeAntiFraud()->content)!!}</p> --}}
                            {{-- {{FeatureView::get('feature_'.($i + 2))->productGuid}} --}}
                            <div class="choose_btn">
                                <button class ="goBuy" onclick="renderPruductDetail('品牌特殊箱', 'antiFraud')">
                                    了解更多                  
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="modal fade" id="productDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close" style="position: absolute; top: 10px; right: 10px; ">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-4">
                                <img width="100%" class="modal-img" src="" alt="">
                            </div>
                            <div class="col-md-8">
                                <h5 class="modal-title" id="exampleModalLabel" style="font-size: 2.5rem; font-weight: bolder;"></h5>
                                <div class="modal-description" style="font-size: 1.8rem; line-height: 3rem; font-weight: bolder; color: #999; "></div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="/contact">
                            <button class="btn btn-primary" type="button">繼續諮詢</button>
                        </a>
                        <a href="/all">
                            <button class="btn btn-primary" type="button">查看更多箱款</button>
                        </a>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <!------------------------products------------------------>

    @php
        $tags = json_decode(PostView::tags());
    @endphp
    <section id="products">
        <div class="sw_mask mask_left">
            <img class="product_arrow product-left" src="/img/arrow-left.png" alt="">
        </div>
        <div class="sw_mask mask_right">
            <img class="product_arrow product-right" src="/img/arrow-right.png" alt="">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 section_title">
                   <p > 
                       凱麗斯旅行箱
                   </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 product_nav">
                    <nav class="nav navbar-default">
                        <ul id="product_list" class="nav nav-tabs">
                            <li class="active">
                                <a data-toggle="tab" href="#home"> 
                                    全部商品
                                </a>
                            </li>
                            @foreach ($tags->size as $key => $item)
                                <li>
                                    <a data-toggle="tab" href="#menu{{$key}}">
                                        {{$item}}
                                    </a>
                                </li>
                            @endforeach
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 product_nav_index">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">
                            <div class="swiper-wrapper">
                                @foreach (ProductView::all() as $key => $item)
                                    <div class="swiper-slide" title="{{$item->productTitle}}">
                                        <a href="/detail/{{$item->productGuid}}">
                                            <div class="product_img" style="background-image: url('{{$item->featureImage}}')">
                                                {{-- <img class="product_img_inside" src="{{$item->featureImage}}" alt=""> --}}
                                                <div class="product_quick_view">
                                                    <p class="product_quick_text">
                                                        READ MORE    
                                                    </p>
                                                </div>
                                            </div>
                                        </a>

                                        <h3 class="product_series">
                                            {{$item->productTitle}}
                                        </h3>
                                        @php
                                            $command = json_decode($item->command);
                                        @endphp
                                        <h3 class="product_name">
                                            {{$command->brand}}
                                        </h3>
                                        <div class="product_category">
                                            <div class="product_category_detail">
                                                <ul class="porduct_size">
                                                    <li>
                                                        尺寸： {{$command->size}}
                                                    </li>
                                                    <li>
                                                        材質： {{$command->material}}
                                                    </li>
                                                </ul>
                                                <h1 class="product_price">
                                                    @if (strlen($item->discountedPrice) == 0)
                                                        NTD {{number_format($item->price)}}    
                                                    @else
                                                        NTD {{number_format($item->discountedPrice)}}
                                                    @endif
                                                    
                                                </h1>
                                            </div>
                                            <button class="buy_click" onclick="addSigleProduct('{{$item->productGuid}}')">
                                                點我<br>購買
                                            </button>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                            <img class="product_arrow product-lefthome hide" src="/img/arrow-left.png" alt="">
                            <img class="product_arrow product-righthome hide" src="/img/arrow-right.png" alt="">
                        </div>
                        @foreach ($tags->size as $key => $elm)
                            <div id="menu{{$key}}" class="tab-pane fade">
                                <div class="swiper-wrapper">
                                    @foreach (ProductView::takeByTag($elm) as $item)
                                        <div class="swiper-slide">
                                            <div class="product_img" style="background-image: url('{{$item->featureImage}}')">
                                                {{-- <img class="product_img_inside" src="{{$item->featureImage}}" alt=""> --}}
                                                <a class="product_quick_view" href="/detail/{{$item->productGuid}}">
                                                    <p class="product_quick_text">
                                                        READ MORE    
                                                    </p>
                                                </a>
                                            </div>
                                            <h3 class="product_series">
                                                {{$item->productTitle}}
                                            </h3>
                                            @php
                                                $command = json_decode($item->command);
                                            @endphp
                                            <h3 class="product_name">
                                                {{$command->brand}}
                                            </h3>
                                            <div class="product_category">
                                                <div class="product_category_detail">
                                                    <ul class="porduct_size">
                                                        <li>
                                                            尺寸： {{$command->size}}
                                                        </li>
                                                        <li>
                                                            材質： {{$command->material}}
                                                        </li>
                                                    </ul>
                                                    <h1 class="product_price">
                                                        NTD {{number_format($item->price)}}
                                                    </h1>
                                                </div>
                                                <button class="buy_click" onclick="addSigleProduct('{{$item->productGuid}}')">
                                                    點我<br>購買
                                                </button>
                                            </div>
                                        </div>
                                    @endforeach
                                </div>
                                <img class="product_arrow product-leftmenu{{$key}} hide" src="/img/arrow-left.png" alt="">
                                <img class="product_arrow product-rightmenu{{$key}} hide" src="/img/arrow-right.png" alt="">
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-----------------------news------------------------>
    <section id="news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 section_title">
                   <p> 
                       部落格
                   </p>
                </div>
            </div>
            <div class="owl-news jq-owl-news owl-carousel owl-theme">
                @foreach (PostView::all(6) as $item)
                <div class="item clear">
                    <div class="img-container" style="background-image: url('{{$item->featureImage}}');"></div>
                    <div class="info-group">
                        <p class="date">{{Carbon::parse($item->created_at)->format('Y/m/d')}}</p>
                        <p class="title">{{$item->postTitle}}</p>
                        <p class="detail">{{preg_replace('#<[^>]+>#', ' ', $item->content)}}</p>
                        <div class="action-group">
                        <a class="btn-more animate-move" title="了解更多" href="/blog/{{$item->customPath}}">了解更多</a>
                        </div>
                        <div class="share-group">
                        <a class="line" title="Line 分享" onclick="lineShare('{{env('APP_URL')}}/blog/{{$item->customPath}}', '{{$item->postTitle}}')" ></a>
                        <a class="facebook" title="Facebook 分享" onclick="facebookShare('{{env('APP_URL')}}/blog/{{$item->customPath}}', '{{$item->postTitle}}')" ></a>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            {{-- <div class="row newsPostRow">
                @foreach (PostView::all(6) as $key => $value)
                    <div class="col-md-6">
                        <div class="newsPost">
                            <div class="newsPostMask"></div>
                            <a class="newsPost-ReadMore" href="/blog/{{$value->customPath}}">
                                <p>
                                    (Read more...)
                                </p>
                            </a>
                            <div class= "newsImgBox" style="background-image: url('{{$value->featureImage}}');"></div>
                            <div class="newsText">
                                <p class="newsTextTitle">
                                    {{$value->postTitle}}
                                </p>
                                <p>
                                    {{$value->created_at->format('Y-M-d')}}
                                </p>
                                <p class="newPostTextP">{{mb_strimwidth(preg_replace('#<[^>]+>#', ' ', $value->content), 0, 120, "...")}}</p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
        </div>
    </section> 
    
    <!------------------------feedback------------------------>
    <section class="feedback">
        <div class="sw_mask mask_left">
            <img class="product_arrow feedback-left" src="/img/arrow-left.png" alt="">
        </div>
        <div class="sw_mask mask_right">
            <img class="product_arrow feedback-right" src="/img/arrow-right.png" alt="">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 section_title">
                    <p> 
                        使用迴響
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 feedback-Index">
                    <div class="swiper-wrapper">
                        @foreach (PostView::witness() as $item)
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
                                            <p>{{mb_strimwidth(preg_replace('#<[^>]+>#', ' ', $item->customField2), 0, 20, "...")}}</p>
                                        </div>
                                    </div>
                                    <div class="feedback-img" style="background-image: url('{{$item->customField4}}')">
                                    </div>
                                    <div class="feedback-Inner">{{mb_strimwidth(preg_replace('#<[^>]+>#', ' ', $item->content), 0, 150, "...")}}</div>
                                    <div class="choose_btn">
                                        <a href="/witness/{{$item->id}}">
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
    </section>

@endsection