@extends('main')

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
                    <button class="filterBtn-active">全部文章</button>
                    <button class="filterBtn-unpacking ">職人開箱</button>
                    <button class="filterBtn-news">箱款新知</button>
                    <button class="filterBtn-teaching">挑箱教學</button>
                </div>
            </div>
        </div>
        <div class="container-fulid blog-post">
            <div class="row blog-post-row">
                @foreach (PostView::all(6) as $item => $value)
                    <div class="col-md-4 blog-post-group vol03">
                        <a href="/blog/{{$value->customPath}}">
                            <div class="blog-post-inner">
                                <div class="blog-post-inner-img" style="background-image: url('/img/blog-img01.jpg')"></div>
                                <div class="blog-post-inner-text">
                                    <p>{{$value->created_at->format('Y-M-d')}} | <span class="inner-text">箱款新知</span></p>
                                    <p>{{$value->postTitle}}</p>
                                    <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                                </div>
                            </div>
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        <div class="blog-readMore">
            <button id="readMore-btn">查看更多</button>
        </div>
        
    </section>
    
@endsection
