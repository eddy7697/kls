@extends('main')

@section('custom-script')
<script src="/js/checkout.js" charset="utf-8"></script>
@endsection

@section('content')
    <div class="container mg-business">
        <div class="row">
            <div class="col-md-12 checkout-thumbnail">
               <ul>
                    <li>
                        <img src="/img/buyIcon/buyList-01.png" alt="">
                        購物清單
                    </li>
                    <li style="padding: 20px 50px;">
                        <span class="liinner" style="border-right: solid 2px #636B6F;"></span>
                    </li>
                    <li class="active">
                        <img src="/img/buyIcon/info-01.png" alt="">
                        訂購資訊
                    </li>
                    <li style="padding: 20px 50px;">
                        <span class="liinner" style="border-right: solid 2px #636B6F;"></span>
                    </li>
                    <li>
                        <img src="/img/buyIcon/send-notyet-01.png" alt="">
                        準備出發
                    </li>
                </ul>
            </div>
            <div class="col-md-12" id="checkout">
                <input type="hidden" id="shipping_method" value="{{$shippingMethod}}">
                <checkout></checkout>
            </div>
        </div>
    </div>
@endsection
