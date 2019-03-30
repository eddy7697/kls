@extends('main')

@section('custom-script')
<script src="/js/checkout.js" charset="utf-8"></script>
@endsection

@section('content')
    <div class="container-fulid information-banner" style="background-image: url('/img/black-1072366_1920.jpg')">
        <div class="cart-banner-inner">
            <div class="cart-banner-inner-text">
                <h1>感謝您的購買</h1>
                <p>完成最後的下單準備，準備出發吧!</p>
            </div>
        </div>
    </div>
    <div class="container mg-business">
        <div class="row">
            <div class="col-md-12 checkout-thumbnail">
               <ul>
                    <li>
                        <a href="/cart">
                            <img src="/img/buyIcon/buyList-01.png" alt="">
                            <span class="caret"></span>
                            購物清單
                        </a>
                    </li>
                    <li style="padding: 20px 50px;">
                        <span class="liinner" style="border-right: solid 2px #636B6F;"></span>
                    </li>
                    <li class="active">
                        <img src="/img/buyIcon/info-01.png" alt="">
                        <span class="caret"></span>
                        訂購資訊
                    </li>
                    <li style="padding: 20px 50px;">
                        <span class="liinner" style="border-right: solid 2px #636B6F;"></span>
                    </li>
                    <li>
                        <img src="/img/buyIcon/send-notyet-01.png" alt="">
                        <span class="caret"></span>
                        準備出發
                    </li>
                </ul>
            </div>
            <div class="col-md-12" id="checkout">
                <input type="hidden" id="shipping_method">
                <checkout></checkout>
            </div>
        </div>
    </div>
@endsection
