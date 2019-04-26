@extends('main')

@section('custom-script')
    <script src="/js/cart-page.js" charset="utf-8"></script>
    <script type="text/javascript">
        function removeSingleProduct(rowid) {
            CH.removeSingleProduct(rowid);
            return;
        }
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
                    <li class="active">
                        <img src="/img/buyIcon/buyList-01.png" alt="">
                        <span class="caret"></span>
                        購物清單
                    </li>
                    <li style="padding: 20px 50px;">
                        <span class="liinner" style="border-right: solid 2px #636B6F;"></span>
                    </li>
                    <li>
                        <img src="/img/buyIcon/info-notyet-01.png" alt="">
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
                <div class="cart_list">
                    <ul>
                        <li class="cart_list_title">
                            <p>
                                產品名稱
                            </p>
                            <p>
                                尺寸
                            </p>
                            <p>
                                型號
                            </p>
                            <p>
                                數量
                            </p>
                            <p>
                                優惠價
                            </p>
                            <p class="hide">
                                u can't see me
                            </p>
                        </li>
                        <li>
                            <p>
                                <span>
                                    01
                                </span>
                                細鋁框異型箱 - 銀 <br>
                                <img src="/img/product-logo.jpg" alt="">
                            </p>
                            <p>
                                27吋
                            </p>
                            <p>
                                型號:<span>HD-515</span>
                            </p>
                            <p>
                                1
                            </p>
                            <p>
                                NT$<span>12,000</span> 
                            </p>
                            <p>
                                <img src="/img/buyIcon/deleteIcon-01.png" alt="">
                            </p>
                        </li>
                        
                        <li class="cart_list_total">
                            <p>
                                商品小計 : NT$
                                <span>
                                    36,000
                                </span>
                            </p>
                            <p>
                                訂單總金額 : NT$
                                <span>
                                    36,000
                                </span>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="nextBtn">
                    <a href="/cart-info">
                        <button>
                            送出，前往下一步
                        </button>
                    </a>
                </div>
                {{-- @if (count($cart))
                    <cart-page></cart-page>
                @else
                    <h3 class="center">購物車裡面沒有商品，趕快去逛逛吧~</h3>
                @endif --}}
            </div>
        </div>

    </div>



@endsection
