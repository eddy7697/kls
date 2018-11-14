@extends('main')

@section('custom-style')
    <link rel="stylesheet" href="{{ asset('js/plugins/jquery.fancytree/dist/skin-themeroller/ui.fancytree.min.css') }}">
    <style>
        ul.fancytree-container {
            border: none;
            outline: 0;
        }

        span.fancytree-has-children span.fancytree-title {
            font-size: 120% !important;
            margin-top: -5px;
        }

        ul.ui-fancytree li ul {
            margin-bottom: 10px;
        }
        .ui-fancytree .fancytree-ico-e .fancytree-title{
            cursor: default;
        }
        .ui-fancytree .fancytree-ico-e .fancytree-title:hover{
            opacity: 1 !important;
        }
        .ui-fancytree .fancytree-node .fancytree-title{
            transition: 0.3s;
        }
        .ui-fancytree .fancytree-node .fancytree-title:hover{
            opacity: 0.7;
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
            $("#tree").fancytree({
                icon: false,
                click: function (event, data) {
                },
                activate: function (event, data) {
                    
                    if (data.node.getLevel() < 2) {
                        return
                    }
                    window.location.href = '/product/category/' + data.node.key
                }
            });
        });
    </script>
@endsection

@section('content')
    <div class="container mg-site-thumbnail">
        <div class="col-md-12">
            <a href="/">首頁</a>
            &nbsp;&nbsp;>&nbsp;&nbsp;
            <a href="/product/category">線上商城</a>
            &nbsp;&nbsp;>&nbsp;&nbsp;{{CategoryView::get($guid)->categoryTitle}}
        </div>
    </div>
    <div class="container mg-product list">
        <div class="row">
            <div class="col-md-3" id="tree">   
                <ul id="treeData" style="display: none;">
                    @foreach (CategoryView::productRoot() as $index => $item)
                        <li id="{{$item->categoryGuid}}" class="expanded"><a href="#">{{$item->categoryTitle}}</a>
                            @if (CategoryView::getProductByParent($item->categoryGuid))
                                <ul>
                                    @foreach (CategoryView::getProductByParent($item->categoryGuid) as $key => $value)
                                        <li id="{{$value->categoryGuid}}">
                                            <a href="#">{{$value->categoryTitle}}</a>
                                        </li>
                                    @endforeach                                    
                                </ul>
                            @endif
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col-md-9 product-single-category">  
                @foreach ($product as $item)
                    <div class="col-sm-4 product-box" title="{{$item->productTitle}}">
                        <div class="product-image">
                            <a href="/product/detail/{{$item->customPath}}">
                                <img src="{{Helper::thumb($item->featureImage)}}" alt="">
                            </a>
                            <div class="add-to-cart">
                                <a class="add-btn" onclick="addSingleProduct('{{$item->productGuid}}')"><span>加入購物車</span></a>
                            </div>
                        </div>
                        <div class="product-title">
                            <a href="/product/detail/{{$item->customPath}}" title="{{$item->productTitle}}">{{$item->productTitle}}</a>
                            <span>貨號：{{$item->serialNumber}}</span>
                        </div>
                        <div class="product-price">
                            @if ($item->discountedPrice)
                                <span style="text-decoration:line-through; font-size: 120%">NT$ {{number_format($item->price)}}</span>
                                &nbsp;
                                <span style="color: red; font-size: 120%">NT$ {{number_format($item->discountedPrice)}}</span>
                            @else
                                <span style="font-size: 120%">NT$ {{number_format($item->price)}}</span>
                            @endif
                        </div>
                    </div>
                @endforeach 
                <div class="row">
                    <div class="col-md-12">
                        {{$product}}
                    </div>
                </div>
            </div>
        </div>
        
    </div>
@endsection
