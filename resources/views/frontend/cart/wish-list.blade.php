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
    <div class="container-fulid information-banner" style="min-height: 400px; background-image: url('/img/wish-list-banner.jpg')">
        <div class="cart-banner-inner">
            <div class="cart-banner-inner-text" style="text-align: center;">
                <h1>願望清單</h1>
                <p>還在猶豫嗎 ? 只剩3個步驟，下定決心出發冒險吧 !</p>
            </div>
        </div>
    </div>
    <div class="container mg-business">
        <div class="row">
            <div class="col-md-12" id="wish-list">
                <wish-list></wish-list>
                {{-- @if (count($cart))
                    <wish-list></wish-list>
                @else
                    <h3 class="center" style="padding: 250px 0;">購物車裡面沒有商品，趕快去逛逛吧~</h3>
                @endif --}}
            </div>
        </div>
    </div>
@endsection
