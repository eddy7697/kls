@extends('main')

@section('custom-script')
@endsection

@section('content')
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
                    <li>
                        <img src="/img/buyIcon/info-01.png" alt="">
                        <span class="caret"></span>
                        訂購資訊
                    </li>
                    <li style="padding: 20px 50px;">
                        <span class="liinner" style="border-right: solid 2px #636B6F;"></span>
                    </li>
                    <li class="active">
                        <img src="/img/buyIcon/send-notyet-01.png" alt="">
                        <span class="caret"></span>
                        準備出發
                    </li>
                </ul>
            </div>
            <div class="col-md-12" style="text-align: center">
                <h3 style="font-weight: 900;">恭喜您完成訂購！請留意以下匯款事項！</h3>
                <hr>
                <p>恭喜您已完成訂購，我們將會在收到您的匯款後一個工作日處理您的訂單，匯款方式請您參照如下 - </p>
                <h3>銀行：國泰世華銀行 013（華山分行）</h3>
                <h3>帳號：118-03-500612-6</h3>
                <h3>戶名：我橙股份有限公司</h3>
                <p>請於訂單成立後七日內完成匯款回覆，否則凱麗斯將取消您的訂單。</p>
                <p>如果匯款成功，必須在收到郵件里，點入『<a href="/contact" style="color: #fbb03b;">諮詢專區</a>』中，告訴我們您的匯款帳號後五碼及匯款日期，</p>
                <p>您亦可選擇透過電話 <a style="color: #fbb03b;">03-5638999</a>與我們聯繫</p>
            </div>
            <div class="col-md-12" style="text-align: center">
                <button type="button" class="btn btn-default btn-block btn-lg">
                    <a href="/all">
                        繼續購物
                    </a>
                </button>
            </div>
        </div>
    </div>
@endsection
