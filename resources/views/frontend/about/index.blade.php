@extends('main')

@section('custom-script')
    <script src="/js/plugins/lightbox2/dist/js/lightbox.min.js" charset="utf-8"></script>
    <script type="text/javascript">
    </script>
@endsection

@section('custom-style')
    <link rel="stylesheet" href="/js/plugins/lightbox2/dist/css/lightbox.min.css">
    <style media="screen">
        
        .breadCrumbs{
            margin: 50px 0;
        }
        .breadCrumbs a{
            text-decoration: none;
            color: #636b6f;
        }
        .breadCrumbs .breadCrumbs-current{
            color: #FBB03B;
        }
    </style>
@endsection

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 breadCrumbs">
            <p><a href="/">首頁 > </a><span class="breadCrumbs-current">&nbsp;&nbsp;關於凱麗絲</span></p>
        </div>
    </div>
</div>
@endsection
