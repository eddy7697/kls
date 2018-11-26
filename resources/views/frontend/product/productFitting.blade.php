@extends('main')

@section('custom-style')
    <link rel="stylesheet" href="{{ asset('js/plugins/jquery.fancytree/dist/skin-themeroller/ui.fancytree.min.css') }}">

@endsection

@section('custom-script')
    <script src="{{ asset('js/product-filter.js') }}"></script>
    <script type="text/javascript">
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
