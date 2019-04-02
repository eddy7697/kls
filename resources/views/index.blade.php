@extends('main')

@section('custom-script')
    <script>
        function renderPruductDetail(guid){
            let getDetailApi = "/products/get/" + guid ;
            
            axios.get(getDetailApi)
                .then(res => {
                    console.log(res.data.data)
                    $('#productDetailModal').modal('show');
                    $('.modal-title').text(res.data.data.productTitle);
                    $('.modal-img').attr('src',res.data.data.featureImage);
                    $('.modal-description').html(res.data.data.productDescription);
                    $('.modal-shortDescription').html(res.data.data.shortDescription)
                    $('.modal-price span').text(res.data.data.price);
                    ((res.data.data.discountedPrice === null)?
                        $('.modal-discountedPrice').css('display','none'):
                        $('.modal-discountedPrice').css('display','block')
                            .find('span')
                                .text(res.data.data.discountedPrice)
                            .end()
                    );
                    $('#modal-QuickView').attr({
                        'onclick': 'quickView("' + res.data.data.customPath + '")'
                    });
                    $('#modal-AddProduct').attr({
                        'onclick': 'addSingleProduct("' + res.data.data.productGuid + '")'
                    });
                })
                .catch(err => {
                    console.log(err);
                });
        };
        
    </script>
@endsection


@section('content')

    <!------------------------choose------------------------>

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
                @for ($i = 0; $i < 4; $i++)
                    <div class="col-md-3 co_post">
                        <div class="choose_post">
                            <div class="img_div" style="background-image: url(/img/choose02.jpg)">
                            </div>
                            <div class="post_text">
                                <h3>
                                    鋁框式硬殼箱
                                </h3>
                                <p>
                                    鋁合金特性是耐用、耐磨、耐衝擊、箱
                                    殼本身的使用年限大多可以保持在五年
                                    或十年以上，有分一體成型，如ZERO，
                                    或組合成型、如RIMOWA。但周邊的配
                                    件損壞還是可以維修的，如果你要求外
                                    觀漂亮完整，大概不可能，除非，是您
                                    想換個新的行李箱，要不然，要使用到
                                    不堪使用的情況，應該是很少發生的、
                                    但前提是、必須在正確使用行李箱的方
                                    法之下、才能發揮它的特性、他跟一般
                                    行李箱的比較來說，重量重一點價格比
                                    一般的還要貴很多。
                                </p>
                                {{-- {{FeatureView::get('feature_'.($i + 2))->productGuid}} --}}
                                <div class="choose_btn">
                                    <button class ="goBuy" onclick="renderPruductDetail(123)">
                                        了解更多                  
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>

        <div class="modal fade" id="productDetailModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel"></h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="modal-img-container">
                            <img class="modal-img" src="" alt="">
                        </div>
                        <div class="modal-text-container">
                            <div class="modal-description"></div>
                            <hr>
                            <div class="modal-shortDescription"></div>
                            <hr>
                            <div class="modal-quantity"></div>
                            <div class="modal-price">
                                會員優惠 :
                                <span></span>
                                元
                            </div>
                            <hr>
                            <div class="modal-discountedPrice">
                                限時價格 :
                                <span></span>
                                元
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button id="modal-QuickView" class="btn btn-primary">查看商品詳情</button>
                        <button type="button" id="modal-AddProduct" class="btn btn-primary">加入購物車</button>
                    </div>
                </div>
            </div>
        </div>

    </section>
    
    <!------------------------products------------------------>

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
                   <p> 
                       凱麗斯旅行箱
                   </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 product_nav">
                    <nav class="nav navbar-default">
                        <ul id="product_list" class="nav nav-tabs">
                            <li>
                                <a data-toggle="tab" href="#home"> 
                                    全部商品
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#menu1">
                                    20吋登機箱
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#menu2">
                                    23吋商務旅行
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#menu3">
                                    25吋輕旅行
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#menu4">
                                    27吋重裝上陣
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#menu5">
                                    30吋長途旅行
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#menu6">
                                    特殊規格旅行箱
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#menu7">
                                    旅行箱配件
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 product_nav_index">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">

                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 3; $i++)
                                    <div class="swiper-slide">
                                        <div class="product_img">
                                            <img class="product_img_inside" src="/img/product_img.jpg" alt="">
                                            <div class="product_quick_view">
                                                <p class="product_quick_text">
                                                    READ MORE    
                                                </p>
                                            </div>
                                        </div>
                                        <h3 class="product_series">
                                            DEPARTURE/HD-202系列
                                        </h3>
                                        <h3 class="product_name">
                                            22吋登機箱
                                        </h3>
                                        <div class="product_category">
                                            <div class="product_category_detail">
                                                <ul class="porduct_size">
                                                    <li>
                                                        尺寸: <span>22</span> 吋
                                                    </li>
                                                    <li>
                                                        容量: <span>76.6</span> L
                                                    </li>
                                                </ul>
                                                <h1 class="product_price">
                                                    NTD 3,680
                                                </h1>
                                            </div>
                                            <button class="buy_click">
                                                點我<br>購買
                                            </button>
                                        </div>
                                    </div>
                                @endfor    
                            </div>
                            
                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <h3>
                                Menu 1
                            </h3>
                            <p>
                                Waittong for Data...
                            </p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>
                                Menu 2
                            </h3>
                            <p>
                                Waittong for Data...
                            </p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <h3>
                                Menu 3
                            </h3>
                            <p>
                                Waittong for Data...
                            </p>
                        </div>
                        <div id="menu4" class="tab-pane fade">
                            <h3>
                                Menu 4
                            </h3>
                            <p>
                                Waittong for Data...
                            </p>
                        </div>
                        <div id="menu5" class="tab-pane fade">
                            <h3>
                                Menu 5
                            </h3>
                            <p>
                                Waittong for Data...
                            </p>
                        </div>
                        <div id="menu6" class="tab-pane fade">
                            <h3>
                                Menu 6
                            </h3>
                            <p>
                                Waittong for Data...
                            </p>
                        </div>
                        <div id="menu7" class="tab-pane fade">
                            <h3>
                                Menu 7
                            </h3>
                            <p>
                                Waittong for Data...
                            </p>
                        </div>
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
            <div class="row newsPostRow">
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
                                <p class="newPostTextP">
                                    {{mb_strimwidth(preg_replace('#<[^>]+>#', ' ', $value->content), 0, 120, "...")}}
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
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
                        @for ($i = 0; $i < 3; $i++)
                            <div class="swiper-slide">
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
                </div>
            </div>
        </div>
    </section>

@endsection