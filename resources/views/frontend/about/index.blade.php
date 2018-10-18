@extends('main')

@section('custom-script')
    <script src="/js/plugins/lightbox2/dist/js/lightbox.min.js" charset="utf-8"></script>
    <script type="text/javascript">
    </script>
@endsection

@section('custom-style')
    <link rel="stylesheet" href="/js/plugins/lightbox2/dist/css/lightbox.min.css">
    <style media="screen">
    </style>
@endsection

@section('content')
    <div class="container mg-site-thumbnail">
        <div class="col-md-12">
            <a href="/">首頁</a>
            &nbsp;&nbsp;>&nbsp;&nbsp;
            關於凱麗絲
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 about-content">
                {{-- {!!PageView::show(1)!!} --}}
            </div>
        </div>
    </div>
@endsection
