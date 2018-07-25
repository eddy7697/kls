@extends('main')

@section('custom-style')
    <link rel="stylesheet" href="{{ asset('js/plugins/jquery.fancytree/dist/skin-xp/ui.fancytree.min.css') }}">
    <style>
        ul.fancytree-container {
            border: none;
            outline: 0;
        }
    </style>
@endsection

@section('custom-script')
    <script src="{{ asset('js/plugins/jquery.fancytree/dist/jquery.fancytree-all.min.js') }}"></script>
    <script type="text/javascript">
        function addSingleProduct(guid) {
            CH.addSingleProductToCart(guid);
            return;
        }

        $(function () {
            @foreach (CategoryView::product() as $item)
                $('#link-{{$item->id}}').on('click', function () {
                    $('html,body').animate({scrollTop:$('#section-{{$item->id}}').offset().top}, 800);
                });
            @endforeach
            $("#tree").fancytree({
                click: function (event, data) {
                },
                activate: function (event, data) {
                    console.log(data)
                }
            });
        });
    </script>
@endsection

@section('content')
    <div class="container mg-product list">
        <div class="row">
            <div class="col-md-3" id="tree">   
                <ul id="treeData" style="display: none;">
                    @foreach (CategoryView::productRoot() as $index => $item)
                        <li id="{{$item->guid}}" class="expanded"><a href="#">{{$item->title}}</a>
                            @if (CategoryView::getProductByParent($item->guid))
                                <ul>
                                    @foreach (CategoryView::getProductByParent($item->guid) as $key => $value)
                                        <li id="{{$value->guid}}">
                                            <a href="#">{{$value->title}}</a>
                                        </li>
                                    @endforeach                                    
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9">   
                @foreach (CategoryView::product() as $item)
                    @if (count(ProductView::getByCategory($item->guid)) !== 0)
                        <div class="row product-single-category" id="section-{{$item->id}}">
                            <div class="col-sm-12">
                                <div class="center-hr xxl">
                                    <span>
                                        {{ $item->title }}
                                    </span>
                                </div>
                            </div>
                            @foreach (ProductView::getByCategory($item->guid) as $item)
                                <div class="col-sm-4 product-box">
                                    <div class="product-image">
                                        <a href="/product-deatil/{{$item->customPath}}">
                                            <img src="{{Helper::thumb($item->featureImage)}}" alt="">
                                        </a>
                                        <div class="add-to-cart">
                                            <a class="add-btn" onclick="addSingleProduct('{{$item->guid}}')"><span>加入購物車</span></a>
                                        </div>
                                    </div>
                                    <div class="product-title">
                                        <a href="/product-deatil/{{$item->customPath}}">{{$item->title}}</a>
                                    </div>
                                    <div class="product-price">
                                        @if ($item->discountedPrice)
                                            <span style="text-decoration:line-through">NT$ {{number_format($item->price)}}</span>
                                            <span style="color: red; font-size: 150%">NT$ {{number_format($item->discountedPrice)}}</span>
                                        @else
                                            <span>NT$ {{number_format($item->price)}}</span>
                                        @endif
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    @endif
                @endforeach
            </div>
        </div>
        
    </div>
@endsection
