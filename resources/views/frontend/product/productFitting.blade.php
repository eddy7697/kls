@extends('main')

@section('custom-style')
    <link rel="stylesheet" href="{{ asset('js/plugins/jquery.fancytree/dist/skin-themeroller/ui.fancytree.min.css') }}">

@endsection

@section('custom-script')
    <script src="{{ asset('js/product-filter.js') }}"></script>
    <script type="text/javascript">
        let innerHtml =　`  <div class="product-label"><img src="/img/product-logo.jpg" alt=""></div>
                            <div class="product-title"><p>細鋁框板異型箱 - 銀</p></div>
                            <div class="product-style">
                                <p class="product-model">型號 : <span>HD-515</span></p>
                                <p class="product-size">尺寸 : <span>27 吋</span> 實際大小 : <span>W40xD34xH69</span>容量 : <span>76.6L</span></p>
                            <div class="product-text">
                                <ul>
                                    <li>&nbsp;&nbsp;外殼100%採用德國拜耳(Bayer)PC製成，耐衝擊性佳。</li>
                                    <li>&nbsp;&nbsp;美國海關認證TSA密碼鎖。</li>
                                    <li>&nbsp;&nbsp;360度高彈性PU灌注，寂靜無聲頂級萬向輪組。</li>
                                    <li>&nbsp;&nbsp;輪子採用最大65ｍｍ設計，輪徑更大、抓地力更穩。</li>
                                    <li>&nbsp;&nbsp;三段式符合人體工學的頂級鋁合金滑順拉桿。</li>
                                    <li>&nbsp;&nbsp;提把採用杜邦海翠爾，韌性更好、耐久度更佳。</li>
                                    <li>&nbsp;&nbsp;對開拉鍊箱體、完美內裝。</li>
                                </ul>
                            </div>
                            <p class="product-price">$ 12,000</p>
                        </div>
                        <div class="productHeart"><img src="/img/productHeart.svg" alt=""></div>
                        <button class="buyIt"><img src="/img/cartIconWhite.svg" alt=""><p>加入購物車</p></button>`;
        $('.product-innertext').append(innerHtml);
        $('.collapseBtn').on('click',function(){
            $('.filter-title,.filter').fadeToggle();
            $(this).find('img').toggleClass('closeFilter');
        });
        $('.filter-remakeBtn').on('click',e => {
            for (let index = 0; index < $('.filters-selects').find('input').length; index++) {
                $('.filters-selects').find('input')[index].checked = false;
            };
        });     
        $('.productHeart').on('click',function(){
            $(this).toggleClass('productHeart-active'); 
        });
        $('#readMore-btn').on('click',()=>{
            $('.product-more').fadeIn();
        });
        
        
    </script>
@endsection

@section('content')
    <div id="product-filter">
        <product-filter></product-filter>
    </div>
    
    
@endsection
