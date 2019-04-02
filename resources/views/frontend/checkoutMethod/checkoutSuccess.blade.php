@extends('main')

@section('custom-script')
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
                        <img src="/img/buyIcon/buyList-01.png" alt="">
                        購物清單
                    </li>
                    <li style="padding: 20px 50px;">
                        <span class="liinner" style="border-right: solid 2px #636B6F;"></span>
                    </li>
                    <li>
                        <img src="/img/buyIcon/info-01.png" alt="">
                        訂購資訊
                    </li>
                    <li style="padding: 20px 50px;">
                        <span class="liinner" style="border-right: solid 2px #636B6F;"></span>
                    </li>
                    <li class="active" style="color: #8cc63f">
                        <img src="/img/buyIcon/send-01.png" alt="">
                        準備出發
                    </li>
                </ul>
            </div>
            <div class="col-md-12 transferInfo">
                <h3 style="font-weight: 900;">恭喜您完成訂購！請留意以下匯款事項！</h3>
                <hr>
                <p>恭喜您已完成訂購，我們將會在收到您的匯款後一個工作日處理您的訂單，匯款方式請您參照如下 - </p>
                {{-- <div style="text-align: left; width: 30rem; margin: 0 auto;"> --}}
                    <h3>銀行：台北富邦 012（風城分行）</h3>
                    <h3>帳號：6841-6812-6200</h3>
                    <h3 style="margin-bottom: 22px;">戶名：楊月榕</h3>
                {{-- </div> --}}
                <p>請於訂單成立後七日內完成匯款回覆，否則凱麗斯將取消您的訂單。</p>
                <p>如果匯款成功，必須在收到郵件里，點入『<a href="/contact" style="color: #fbb03b;">諮詢專區</a>』中，告訴我們您的匯款帳號後五碼及匯款日期，</p>
                <p>您亦可選擇透過電話 <a style="color: #fbb03b;">03-5638999</a>與我們聯繫</p>
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
