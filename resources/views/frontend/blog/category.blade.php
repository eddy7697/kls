@extends('main')

@php
    use Carbon\Carbon;
@endphp

@section('custom-script')
    <script type="text/javascript">
         
    </script>
@endsection

@section('custom-style')
    <style media="screen">
        .sub-page-header .sub-page-header-inner .sub-nav-menu .sub-nav-menu-ul li:nth-child(3) a{
            border-bottom: solid 3px #FBB03B;
        }
    </style>
@endsection

@section('custom-script')
    <script type="text/javascript">
        $("#tree").fancytree({
            icon: false,
            click: function (event, data) {
            },
            activate: function (event, data) {
                console.log(data.node.key)
                window.location.href = '/blog/category/' + data.node.key
            }
        });
    </script>
@endsection

@section('custom-style')
    <style media="screen">
        
    </style>
@endsection

@section('content')
    <section id="subPage-blog">
        <div class="container-fulid information-banner"></div>
        <div class="container blog-filter">
            <div class="row">
                <div class="col-md-12 blog-filter-inner">
                    <a>全部文章</a>
                    <a>職人開箱</a>
                    <a>箱款新知</a>
                    <a>挑箱教學</a>
                </div>
            </div>
        </div>
        <div class="container-fulid blog-post">
            <div class="row blog-post-row">
                @foreach (PostView::all(1) as $item => $value)
                    <div class="col-md-4 blog-post-group vol03">
                        <a href="/blog/{{$value->customPath}}">
                            <div class="blog-post-inner">
                                <div class="blog-post-inner-img" style="background-image: url('{{$value->featureImage}}')"></div>
                                <div class="blog-post-inner-text">
                                    <p>{{$value->created_at->format('Y-M-d')}} | <span class="inner-text">{{$value->categoryTitle}}</span></p>
                                    <p>{{$value->postTitle}}</p>
                                    <p>{{mb_strimwidth(preg_replace('#<[^>]+>#', ' ', $value->content), 0, 100, "...")}}</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
            <div class="row" style="margin: 10px auto 30px auto">
                <div class="col-md-12">
                    {{PostView::all(1)}}
                </div>
            </div>
        </div>
        {{-- <div class="blog-readMore">
            <button id="readMore-btn">查看更多</button>
        </div> --}}
        
    </section>
    
@endsection
