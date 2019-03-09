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

    <div class="container mg-business">
        <div class="row">
            <div class="col-md-12 checkout-thumbnail">
                <ul>
                    <li class="active">
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
                    <li>
                        <img src="/img/buyIcon/send-notyet-01.png" alt="">
                        準備出發
                    </li>
                </ul>
            </div>
            <div class="col-md-12" id="cart-page">
                @if (count($cart))
                    <cart-page></cart-page>
                @else
                    <h3 class="center" style="padding: 250px 0;">購物車裡面沒有商品，趕快去逛逛吧~</h3>
                @endif
            </div>
        </div>

    </div>



@endsection
