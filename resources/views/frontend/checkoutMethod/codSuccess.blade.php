@extends('main')

@section('custom-script')
    <script src="/resources/assets/js/components/lib/helper.js"></script>
    <script>
        var amount = localStorage.cartAmount;
        $('.total_price span').text(amount);
        $('.addr span').text(localStorage.shipping_addr);
    </script>
@endsection

@section('content')
    <div class="container-fulid information-banner" style="min-height: 400px; background-image: url('/img/cart-banner.jpg')">
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
                        <img src="/img/buyIcon/buyList-notyet-01.png" alt="">
                        購物清單
                    </li>
                    <li style="padding: 20px 50px;">
                        <span class="liinner" style="border-right: solid 2px #636B6F;"></span>
                    </li>
                    <li>
                        <img src="/img/buyIcon/info-notyet-01.png" alt="">
                        訂購資訊
                    </li>
                    <li style="padding: 20px 50px;">
                        <span class="liinner" style="border-right: solid 2px #636B6F;"></span>
                    </li>
                    <li class="active">
                        <img src="/img/buyIcon/send-01.png" alt="">
                        準備出發
                    </li>
                </ul>
            </div>
            <div class="col-md-12 transferInfo">
                <h3 style="font-weight: 900;">恭喜您完成訂購！請留意以下事項！</h3>
                <hr>
                <p>恭喜您已完成訂購，您的訂單總金額為 - </p>
                <h3 class="total_price" style="color: #fbb03b; margin-bottom: 22px;">NTD &nbsp;<span>0</span></h3>
                <p>我們將會在收到您的訂單3個工作天後完成出貨，商品寄送地址為： </p>
                <h3 class="addr" style="color: #fbb03b; margin-bottom: 22px;"><span>0</span></h3>
                <p>請您留意保持聯絡電話暢通，貨到後將由物流人員與您聯繫，感謝您</p>
                <p>如有疑問，您可透過『<a href="/contact" style="color: #fbb03b;">諮詢專區</a>』中與我們聯繫，您亦可透過電話 03-563899與我們聯繫。</p>
                <br><br>
                <p style="color: red; font-size: 12px">註：請留意！若您留下的地址不完全或有缺失，我們將致電與您聯繫，若電話或電子郵件均無法與您聯絡，我們將取消該筆訂單。</p>
            </div>
            <div class="nextBtn">
                <a href="/all">
                    <button>
                        查看更多商品
                    </button>
                </a>
            </div>
        </div>
    </div>
@endsection
