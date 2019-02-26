@extends('main')

@section('custom-script')
    <script type="text/javascript">
        function readMoreLock(){
            $('#readMore-btn').on('click',function() {
                $('.blog-post-open').fadeIn();
            });
            $('.blog-filter-inner button').on('click',function(){
                $('.blog-filter-inner button').removeAttr('class')
                $(this).addClass('filterBtn-active')
            });
        };
        function blogFilterHide(showTarget,hideTarget){
            $(showTarget).fadeIn();
            $(hideTarget).hide();
            $('.blog-post .blog-post-row').removeClass('row').eq(2).addClass('row');
            $('.blog-post-open .blog-post-row').removeClass('row').eq(2).addClass('row');
        };
        function blogFilter(){
            $('.filterBtn-active').on('click',function(){
                $('.vol01,.vol02,.vol03').fadeIn();
                $('.blog-post-row').addClass('row');
            });
            
            $('.filterBtn-unpacking').on('click',function(){
                blogFilterHide('.vol02','.vol01,.vol03');
            });
            
            $('.filterBtn-news').on('click',function(){
                blogFilterHide('.vol03','.vol01,.vol02');
            });
            
            $('.filterBtn-teaching').on('click',function(){
                blogFilterHide('.vol01','.vol02,.vol03');
            });
        };
        readMoreLock();
        blogFilter();
    </script>
@endsection

@section('custom-style')
    <style media="screen">
        
    </style>
@endsection

@section('content')
    <section id="subPage-blog">
        <div class="container-fulid blog-banner"></div>
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
                <div class="col-md-4 blog-post-group vol03">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img01.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 3 | <span class="inner-text">箱款新知</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group vol02">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img02.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 2 | <span class="inner-text">職人開箱</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group vol01">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img03.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 1 | <span class="inner-text">挑箱教學</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row blog-post-row">
                <div class="col-md-4 blog-post-group vol03">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img04.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 3 | <span class="inner-text">箱款新知</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group vol02">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img05.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 2 | <span class="inner-text">職人開箱</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group vol01">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img06.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 1 | <span class="inner-text">挑箱教學</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row blog-post-row">
                <div class="col-md-4 blog-post-group vol03">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img07.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 3 | <span class="inner-text">箱款新知</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group vol02">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img08.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 2 | <span class="inner-text">職人開箱</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group vol01">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img09.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 1 | <span class="inner-text">挑箱教學</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fulid blog-post blog-post-open">
            <div class="row blog-post-row">
                <div class="col-md-4 blog-post-group vol03">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img01.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 3 | <span class="inner-text">箱款新知</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group vol02">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img02.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 2 | <span class="inner-text">職人開箱</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group vol01">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img03.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 1 | <span class="inner-text">挑箱教學</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row blog-post-row">
                <div class="col-md-4 blog-post-group vol03">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img04.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 3 | <span class="inner-text">箱款新知</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group vol02">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img05.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 2 | <span class="inner-text">職人開箱</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group vol01">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img06.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 1 | <span class="inner-text">挑箱教學</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row blog-post-row">
                <div class="col-md-4 blog-post-group vol03">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img07.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 3 | <span class="inner-text">箱款新知</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group vol02">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img08.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 2 | <span class="inner-text">職人開箱</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 blog-post-group vol01">
                    <div class="blog-post-inner">
                        <div class="blog-post-inner-img" style="background-image: url('/img/blog-img09.jpg')"></div>
                        <div class="blog-post-inner-text">
                            <p>2018.Oct.Vol 1 | <span class="inner-text">挑箱教學</span></p>
                            <p>庫存補完通知計畫</p>
                            <p>大貨到拉!倉庫又大爆滿了哈哈!這一次到了2款新款!請期待我們的開箱囉~預購的朋友們會陸續通知喲!</p>
                        </div>
                    </div>
                </div>
            </div>  
        </div>
        <div class="blog-readMore">
            <button id="readMore-btn">查看更多</button>
        </div>
        
    </section>
    
@endsection
