@extends('main')

@section('custom-style')
    <link rel="stylesheet" href="/css/bootstrap-datetimepicker.min.css">
    <style media="screen">
        .sub-page-header .sub-page-header-inner .sub-nav-menu .sub-nav-menu-ul li:nth-child(5) a{
            opacity: 1;
        }
        .mega-menu .contact .mega-menu-list ul li:nth-child(4) a{
            border: solid 1px #B3B3B3 !important;
        }
    </style>
@endsection

@section('custom-script')
    <script src="/js/plugins/moment/moment.min.js"></script>
    <script src="/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script src="/js/plugins/bootstrap-datetimepicker/bootstrap-datetimepicker.min.js"></script>
    <script>
        $(document).ready(function(){
            var topH = $('.sub-page-header').height(),
            bottomH = $('.sub-page-footer').height(),
            windowH = $(window).height()
            $('.mg-dashboard').css({
                'margin-top': topH + 50,
                'margin-bottom': '50px'
            });
            $('.setHeight').css('min-height', windowH - (bottomH+200));
            $('#birthday').datetimepicker({
                format: 'YYYY/MM/DD'
            });
        });
    </script>
@endsection

@section('content')

    <section class="setHeight">
        <div class="container mg-dashboard ">
            <div class="row">
                <div class="col-md-3">
                    <div class="center-hr">
                        <span>
                            我的帳戶
                        </span>
                    </div>
                    <ul class="dash-sidebar">
                        <li><a href="{{ url('/user') }}">我的訂單</a></li>
                        <li><a href="{{ url('/user/address') }}">聯絡資訊</a></li>
                        <li><a href="{{ url('/user/information') }}">會員資訊</a></li>
                        <li><a onclick="event.preventDefault(); $('.logout-form').submit();" href="#">帳號登出</a></li>
                        <form class="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            {{ csrf_field() }}
                        </form>
                    </ul>
                </div>
                <div class="col-md-9">
                    <div class="row">
                        <div class="col-md-12">
                            <h3 class="pull-left">{{ $title }}</h3>
                            <ul class="dash-methods pull-right">
                                <li><a href="#" data-toggle="modal" data-target="#myModal-01">客服資訊</a></li>
                            </ul>
                        </div>
                    </div>
                    <hr>
    
                    {{-- 客服資訊 --}}
                    <div class="modal fade" id="myModal-01" tabindex="-1" role="dialog" aria-labelledby="myModal-01Label">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                {{-- <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModal-01Label">客服資訊</h4>
                                </div> --}}
                                <div class="modal-body">
                                    <h3 style="text-align:center">客服資訊</h3>
    
                                    <hr />
                                    <h4>Email查詢</h4>
    
                                    <p>將您的問題以電子郵件寄送至&nbsp;alan333335@yahoo.com.tw，我們將有客服為您解答。</p>
                                    <br>
                                    <h4>電話查詢</h4>
    
                                    {{-- <p>在工作日的9:00-16:30，歡迎撥打03-567-9463與我們聯絡查詢。</p> --}}
    
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" data-dismiss="modal">關閉視窗</button>
                                </div>
                            </div>
                        </div>
                    </div>
    
                    @yield('dashboard-content')
                </div>
            </div>
        </div>
    
    </section>
    
@endsection
