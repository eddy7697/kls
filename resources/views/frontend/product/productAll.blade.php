@extends('main')

@section('custom-style')
    <link rel="stylesheet" href="{{ asset('js/plugins/jquery.fancytree/dist/skin-themeroller/ui.fancytree.min.css') }}">
    <style media="screen">
        
    </style>
@endsection

@section('custom-script')
    <script src="{{ asset('js/product-filter.js') }}"></script>
    <script type="text/javascript">
        $('.collapseBtn').on('click',function(){
            $('.filter-title,.filter').fadeToggle();
            $(this).find('img').toggleClass('closeFilter');
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
    <div id="product-filter">
        <product-filter type="{{$type}}"></product-filter>
    </div>
@endsection
