@extends('main')

@section('custom-script')
    <script src="/js/wish-list.js" charset="utf-8"></script>
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
                <h1>願望清單</h1>
            </div>
        </div>
    </div>
    <div class="container mg-business">
        <div class="row">
            <div class="col-md-12" id="wish-list">
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
                    <wish-list></wish-list>
                @else
                    <h3 class="center" style="padding: 250px 0;">購物車裡面沒有商品，趕快去逛逛吧~</h3>
                @endif --}}
            </div>
        </div>

    </div>



@endsection
