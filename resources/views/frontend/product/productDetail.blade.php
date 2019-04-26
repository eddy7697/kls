@extends('main')

@section('custom-meta')
    <meta property="og:url" content="{{(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"}}"></meta>
    <meta property="og:title" content="{{$product->seoTitle}}" />
    <meta property="og:description" content="{{$product->seoDescription}}" />
    <!--分享用圖片在這，一樣有保留-->
    <meta property="og:image" content="https://www.meansgood.com.tw{{$product->featureImage}}"/>
    <meta property="fb:app_id" content="1758202757809745" />
    <!--**************************-->
    <meta property="og:type" content="website" />
@endsection

@section('custom-script')
    <script src="/js/product-methods.js"></script>
    <script type="text/javascript">
        $('.mg-product').css({
            'margin-top': ($('.sub-page-header').height() + 10) + 'px'
        })
        function addSingleProduct(guid) {
            CH.addSingleProductToCart(guid);
            return;
        }

        function checkoutImmediately(guid) {
            CH.checkoutImmediately(guid);
            return;
        }

        $(function() {

            $('.rate-star').barrating({
                theme: 'css-stars',
            });
            $('.rate-star-comment').barrating({
                readonly: true,
                theme: 'css-stars',
            });
            $('.product-img').slick({
                slidesToShow: 1,
                slidesToScroll: 1,
                arrows: false,
                fade: true,
                asNavFor: '.product-thumb'
           });
           $('.product-thumb').slick({
               slidesToShow: 4,
               slidesToScroll: 1,
               asNavFor: '.product-img',
               dots: true,
               // centerMode: true,
               focusOnSelect: true
           });
        });

        function addToCart(guid) {
            var quantity = parseInt($('.product-quantity').val());

            CH.addProductToCart(guid, quantity);
        }
    </script>
@endsection

@section('content')
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = 'https://connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.11&appId=124798941401730';
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>

    {{-- <div class="container mg-site-thumbnail">
        <div class="col-md-12">
            <a href="/">首頁</a>
            &nbsp;&nbsp;>&nbsp;&nbsp;
            <a href="/product/all">線上商城</a>
            @if ($product->category)
                &nbsp;&nbsp;>&nbsp;&nbsp;
                <a href="/product/category/{{$product->category}}">{{CategoryView::get($product->category)->categoryTitle}}</a>                
            @else
            @endif
            &nbsp;&nbsp;>&nbsp;&nbsp;{{$product->productTitle}}
        </div>
    </div> --}}

    <div class="container mg-product">
        <div class="row">
            <div class="col-md-12">
                <div class="row">
                    {{--商品圖片輪播--}}
                    <div class="col-md-7 product-gallery">
                        <div class="product-img">
                            <div class="product-item">
                                <img src="{{$product->featureImage}}" alt="">
                            </div>
                            @foreach ($album as $item)
                                <div class="product-item">
                                    <img src="{{$item->imageUrl}}" alt="">
                                </div>
                            @endforeach
                        </div>
                        <div class="row">
                            <div class="col-md-10 col-md-offset-1">
                                <ul class="product-thumb">
                                    <li>
                                        <div class="thumb-item">
                                            <img src="{{$product->featureImage}}" alt="">
                                        </div>
                                        
                                    </li>
                                    @foreach ($album as $item)
                                        <li>
                                            <div class="thumb-item">
                                                <img src="{{$item->imageUrl}}" alt="">
                                            </div>
                                        </li>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                        
                    </div>

                    {{--商品資訊以及功能--}}
                    <div class="col-md-5 product-info">
                        <h3>{{$product->productTitle}}</h3>
                        @unless (count($comentList) == 0)
                            <div class="rate-box">
                                <select class="rate-star-comment">
                                    @for ($i=1; $i <= $score; $i++)
                                        <option value="{{$i}}" {{$i == $score ? 'selected' : ''}}>{{$i}}</option>
                                    @endfor
                                </select>
                            </div>
                            <div class="comment-box">
                                <span>{{count($comentList)}} 則評價</span>
                            </div>
                        @endunless
                        <div class="clear-left"></div>
                        <div class="fb-share-button" data-href="{{(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"}}" data-layout="button_count" data-size="small" data-mobile-iframe="true"><a class="fb-xfbml-parse-ignore" target="_blank" href="https://www.facebook.com/sharer/sharer.php?u={{(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"}};src=sdkpreparse">分享</a></div>
                        <hr>

                        {{--簡短說明--}}
                        <div class="short-description">
                            {!!$product->shortDescription!!}
                        </div>

                        <hr>

                        {{-- 售價 --}}
                        {{-- @if ($product->discountedPrice != null)
                            <s><strong>建議售價：<span style="color: red">{{number_format($product->price)}}元</span></strong></s>
                        @else
                            <strong>建議售價：<span style="color: red">{{number_format($product->price)}}元</span></strong>
                        @endif
                        <br> --}}

                        {{-- 特價 --}}
                        {{-- @if ($product->discountedPrice != null)
                            <strong style="font-size: 20px;">特價：<span style="color: red">{{number_format($product->discountedPrice)}}元</span></strong>
                        @endif --}}


                        {{--選擇數量以及加入購物車--}}
                        <div class="product-function" id="product-methods">
                            <product-methods guid='{{$product->productGuid}}'></product-methods>
                            {{-- <select class="product-quantity" name="quantity">
                                @for ($i=1; $i <= $product->quantity; $i++)
                                    <option value="{{$i}}">{{$i}}</option>
                                @endfor
                            </select>
                            <button class="add-to-cart" onclick="addToCart('{{$product->productGuid}}')">
                                加入購物車
                            </button> --}}
                        </div>
                        
                        <hr>
                        需要協助嗎? <a href="#" data-toggle="modal" data-target="#myModal-01">聯絡我們</a>
                    </div>

                    {{--商品敘述--}}
                    <div class="col-md-12 product-description">
                        <div class="center-hr">
                            <span>
                                商品特色說明
                            </span>
                        </div>
                        <div class="description-detail">
                            {!!$product->productDescription!!}
                        </div>
                    </div>

                    {{-- 評論列表 --}}
                    @if (false)
                    <div class="col-md-12">
                        <hr>
                        <h3>評論列表</h3>
                        <hr>
                        @if (count($comentList) == 0)
                            目前沒有評論唷~趕快來新增一個吧!
                        @else
                            @foreach ($comentList as $item)
                                <table class="product-comment">
                                    <tr>
                                        <td>
                                            <strong><span style="font-size:24px">{{$item->commentFrom}}</span></strong>
                                            &nbsp;&nbsp;
                                            {{ date_format($item->created_at, 'Y-m-d H:i:s')}}
                                        </td>
                                        {{-- <td>{{ date_format($item->created_at, 'Y-m-d H:i:s')}} </td> --}}
                                    </tr>
                                    <tr>
                                        <td colspan="2" style="padding-top: 0; padding-bottom: 9px;">
                                            <select class="rate-star-comment">
                                                @for ($i=1; $i <= $item->rate; $i++)
                                                    <option value="{{$i}}" {{$i == $item->rate ? 'selected' : ''}}>{{$i}}</option>
                                                @endfor
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>{{$item->content}}</td>
                                    </tr>
                                    @unless (Auth::guest())
                                        @if (Auth::user()->role == 'ADMIN')
                                            <tr>
                                                <td>
                                                    <a href="/product/delete/comment/{{$item->guid}}" onclick="return confirm('確認刪除此筆評論?')">刪除</a>
                                                </td>
                                            </tr>
                                        @endif
                                    @endunless
                                </table>
                                <hr style="width: 60%: margin: 0 auto">
                            @endforeach
                        @endif
                    </div>

                    <div class="col-md-12">
                        <hr>
                        <form action="/product/send/comment/{{$guid}}" method="post">
                            {{ csrf_field() }}
                            <h3>發表評論</h3>
                            <hr>
                            <div class="form-group">
                                <label for="comment-name">暱稱</label>
                                @unless (Auth::guest())
                                    <div class="form-control" style="max-width: 150px">
                                        {{Auth::user()->name}}
                                    </div>
                                @endunless
                                <input class="form-control"
                                    style="max-width: 150px; {{ Auth::guest() ? "" : "display: none" }} "
                                    id="comment-name"
                                    name="comment-name"
                                    value="{{ Auth::guest() ? "" : Auth::user()->name }}"
                                    placeholder="請輸入暱稱"
                                    required>

                            </div>
                            <div class="form-group">
                                <label>評分：</label>
                                <select class="rate-star" id="comment-rate" name="comment-rate">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5" selected>5</option>
                                </select>
                            </div>
                            <div class="form-group">
                                <label for="comment-content">請寫下您的評語</label>
                                <textarea class="form-control" id="comment-content" name="comment-content" style="width: 100%; min-height: 150px; resize: vertical" required></textarea>
                            </div>
                            {!! NoCaptcha::renderJs() !!}
                            {!! NoCaptcha::display() !!}
                            @if ($errors->has('g-recaptcha-response'))
                                <span class="help-block">
                                    <strong>登入必須通過驗證</strong>
                                </span>
                            @endif
                            <hr>
                            <button class="btn btn-primary">發表評論</button>
                        </form>

                    </div>
                    @endif
                </div>
            </div>
            {{-- <div class="col-md-3">
                <div class="center-hr">
                    <span>
                        最新商品
                    </span>
                </div>
                <ul class="product-link-list">
                    @foreach ($productList as $item)
                        <li><a href="//product/detail/{{$item->guid}}">{{$item->productTitle}}</a></li>
                    @endforeach
                </ul>
            </div> --}}
        </div>
    </div>

    {{-- 客服資訊 --}}
    <div class="modal fade" id="myModal-01" tabindex="-1" role="dialog" aria-labelledby="myModal-01Label">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-body">
                    <h3 style="text-align:center; margin: 10px;">客服資訊</h3>

                    <hr />
                    <h4>Email查詢</h4>

                    <p>將您的問題以電子郵件寄送至&nbsp;044555@gmail.com，我們將有客服為您解答。</p>
                    <br>
                    <h4>電話查詢</h4>

                    <p>在工作日的9:00-16:30，歡迎撥打03-9590903與我們聯絡查詢。</p>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" data-dismiss="modal">關閉視窗</button>
                </div>
            </div>
        </div>
    </div>

    {{-- 購買工具列 --}}
    <div class="mobile-tool-bar">
        <ul>
            <li>
                <a class="btn btn-primary btn-block" onclick="addSingleProduct('{{$guid}}')"><span class="glyphicon glyphicon-shopping-cart"></span>&nbsp;加入購物車</a>
            </li>
            <li>
                <a class="btn btn-primary btn-block" onclick="checkoutImmediately('{{$guid}}')"><span class="glyphicon glyphicon-gift"></span>&nbsp;立即購買</a>
            </li>
        </ul>
    </div>
@endsection
