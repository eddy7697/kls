@extends('main')

@section('custom-style')
    <link rel="stylesheet" href="{{ asset('js/plugins/jquery.fancytree/dist/skin-themeroller/ui.fancytree.min.css') }}">
    <style media="screen">
        .mega-menu .product .mega-menu-list ul li:nth-child(2) a{
            border: solid 1px #B3B3B3 !important;
        }
    </style>
@endsection

@section('custom-script')
    <script src="{{ asset('js/product-fitting.js') }}"></script>
    <script type="text/javascript">
        $('.collapseBtn').on('click',function(){
            $('.filter-title,.filter').fadeToggle();
            $(this).find('img').toggleClass('closeFilter');
        });
        $('.filter-remakeBtn').on('click',function(e) {
            for (let index = 0; index < $('.filters-selects').find('input').length; index++) {
                $('.filters-selects').find('input')[index].checked = false;
            };
        });     
        $('.productHeart').on('click',function(){
            $(this).toggleClass('productHeart-active'); 
        });
        $('#readMore-btn').on('click',function(){
            $('.product-more').fadeIn();
        });
        
        
    </script>
@endsection

@section('content')
    <div id="product-fitting">
        <product-fitting></product-fitting>
    </div>
@endsection
