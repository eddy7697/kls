@extends('main')

@section('custom-script')
    <script type="text/javascript">
         
    </script>
@endsection

@section('custom-style')
    <style media="screen">
        .mega-menu .contact .mega-menu-list ul li:nth-child(4) a{
            border: solid 1px #B3B3B3 !important;
        }
    </style>
@endsection

@section('content')
    <div class="container mg-site-thumbnail">
        <div class="col-md-12">
            <a href="/">首頁</a>
            &nbsp;&nbsp;>&nbsp;&nbsp;
            安心購物宣言
        </div>
    </div>
    <div class="container" style="margin-bottom: 30px">
        <div class="row">
            <div class="col-md-8 col-md-offset-2 member-auth-form-table">

                {!!SiteMetaView::ecRemind()!!}

            </div>
        </div>
    </div>

@endsection
