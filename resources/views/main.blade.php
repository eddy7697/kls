<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    @yield('custom-meta')

    <meta name="viewport" content="width=device-width, initial-scale=1">
    {{--<meta name="keywords" content="{{SiteMetaView::keyword()}}">--}}
    {{--<meta name="description" content="{{SiteMetaView::description()}}">--}}
    <link rel="alternate" href="https://www.meansgood.com.tw/" hreflang="zh-TW" />
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">



    {{-- <title>{{ config('app.name', 'Laravel') }}</title> --}}
    {{--<title>{{ SiteMetaView::title() }}</title>--}}

    {{--<link rel="shortcut icon" href="{{ SiteMetaView::shortcut() }}">--}}

<!-- Fonts -->
    <link href="{{ asset('css/frontend.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="/js/plugins/AOS/aos.css">

    <!-- Styles -->
    <style>
        .paytest {
            display: block;
            font-size: 50pt;
        }
    </style>

    {{-- Custom stylesheet --}}
    @yield('custom-style')

</head>
<body>
<div class="loading-bar">
    <img src="/img/icon/default-loading.svg">
</div>

@unless (Auth::guest())
    @if (Auth::user()->role == 'ADMIN')
        <div class="container-fluid admin-bar">
            <div class="row">
                <div class="col-md-12">
                    <a href="/cyberholic-system/admin">後台入口</a>
                </div>
            </div>
        </div>
    @endif
@endunless

<!------------------------header------------------------>

123


@yield('content')

<!------------------------footer------------------------>



<!-- Scripts -->
<script src="{{ asset('js/frontend.js') }}"></script>

<script src="{{ asset('js/cart-panel.js') }}"></script>

<script src="{{ asset('js/CH-lib.js') }}"></script>

<script src="{{ asset('js/plugins/jquery-ui/jquery-ui.min.js') }}"></script>

<script src="{{ asset('js/plugins/AOS/aos.js') }}" charset="utf-8"></script>

<script type="text/javascript">
    AOS.init();
</script>

{{-- Custom scripts --}}
@yield('custom-script')

@if(config('app.env') == 'local')
    <script src="http://localhost:35729/livereload.js"></script>
@endif

</body>
</html>
