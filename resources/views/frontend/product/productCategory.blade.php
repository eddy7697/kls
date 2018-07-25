@extends('main')

@section('custom-script')
    <script type="text/javascript">
        function addSingleProduct(guid) {
            CH.addSingleProductToCart(guid);
            return;
        }
    </script>
@endsection

@section('content')
    <div class="container mg-product list">
        <div class="row product-single-category">
            <div class="col-md-12">
                <div class="center-hr xxl">
                    <span>
                        {{$category->title}}
                    </span>
                </div>
            </div>
            @foreach ($product as $item)
                <div class="col-md-3 product-box">
                    <div class="product-image">
                        <a href="/product-deatil/{{$item->guid}}">
                            <img src="{{$item->featureImage}}" alt="">
                        </a>
                        <div class="add-to-cart">
                            <img class="add-loading" src="/img/icon/loading.svg" width="15" alt="">
                            <a class="add-btn" onclick="addSingleProduct('{{$item->guid}}')"><span>加入購物車</span></a>
                        </div>
                    </div>
                    <div class="product-title">
                        <a href="/product-deatil/{{$item->guid}}">{{$item->title}}</a>
                    </div>
                    <div class="product-price">
                        <span>NT$ {{number_format($item->price)}}</span>
                    </div>
                </div>
            @endforeach
        </div>
        {{$product}}

    </div>
@endsection
