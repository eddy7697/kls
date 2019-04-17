@extends('main')

@section('custom-script')
    <script src="/js/cart-page.js" charset="utf-8"></script>
    <script type="text/javascript">
       
        new TwCitySelector();
        
    </script>
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
                        <img src="/img/buyIcon/buyList-notyet-01.png" alt="">
                        <span class="caret"></span>
                        購物清單
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
            <div class="col-md-12" id="cart-page">
                <div class="cart_info">
                    <h3>
                        訂購資訊
                    </h3>
                    <hr>
                    <form action="">
                        <table>
                            <tbody>
                                <tr>
                                    <td class="cart_info_title">
                                        收件人姓名
                                    </td>
                                    <td>
                                        <input type="text">
                                        <input type="radio" name="sex" id="male">
                                        <label for="male">先生</label>
                                        <input type="radio" name="sex" id="female">
                                        <label for="female">小姐</label>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart_info_title">
                                        聯絡電話
                                    </td>
                                    <td>
                                        <input type="tel">
                                        <span>
                                            請依照格式填寫，如 : 06-231766
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart_info_title">
                                        電子郵件
                                    </td>
                                    <td>
                                        <input type="email">
                                        <span>
                                            請依照格式填寫，如 : a12345@gmail.com
                                        </span>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart_info_title">
                                        配送地址
                                    </td>
                                    <td>
                                        <span role="tw-city-selector"></span>
                                        <input type="text" class="tw-address">
                                    </td>
                                </tr>
                                <tr>
                                    <td class="cart_info_title">
                                        發票開立方式
                                    </td>
                                    <td>
                                        <input type="radio" name="invoice" id="donation">
                                        <label for="donation">捐贈發票</label>
                                        <input type="radio" name="invoice" id="two-way">
                                        <label for="two-way">二聯式電子發票</label>
                                        <input type="radio" name="invoice" id="three-way">
                                        <label for="three-way">三聯式發票</label>
                                    </td>
                                </tr>
                                <tr class="cart_info_text">
                                    <td class="cart_info_title">
                                        備註事項
                                    </td>
                                    <td >
                                        <textarea cols="30" rows="10"></textarea>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </form>
                </div>
                <div class="remind">
                    <p>
                        我們不會將您輸入的任何個人信息用於回答查詢以外的目的。此外，我們將根據<a target="_blank" href="https://law.moj.gov.tw/LawClass/LawSingle.aspx?pcode=I0050021&flno=6">個人資料保護法第六條</a>，妥善管理您的個人信息，   
                    </p>
                    <p>
                        您亦可點擊這裡查看更多關於KLS提供的<a target="_blank" href="/about/privacy">隱私權保護政策</a>。 
                    </p>
                    <p>
                        <a>*</a>請您務必將KLS的電子郵件地址或域名設置為可接收的電子郵件，以免錯過我們的回覆，您亦可直接與我們聯繫 (<a target="_blank" href="/contact">點擊這裡查看聯絡訊息</a>)。
                    </p>
                </div>
                <div class="nextBtn">
                    <a href="/cart-end">
                        <button>
                            提交訂單
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
    
@endsection
