@extends('main')

@section('custom-meta')
    {{-- <meta property="og:url" content="{{(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"}}"></meta>
    <meta property="og:title" content="{{$post->seoTitle}}" />
    <meta property="og:description" content="{{$post->seoDescription}}" />
    <!--分享用圖片在這，一樣有保留-->
    <meta property="og:image" content="https://www.meansgood.com.tw{{$post->featureImage}}"/>
    <meta property="fb:app_id" content="1758202757809745" />
    <!--**************************-->
    <meta property="og:type" content="website" /> --}}
@endsection

@section('custom-script')
    <script>
        $('.blog-container').css({
            'margin-top': ($('.sub-page-header').height() + 10) + 'px',
            'margin-bottom': '80px'
        })
        // jQuery('#line-share').on('click', function() {
        //     window.open("http://line.me/R/msg/text/?" + document.title + '%0D%0A' + window.location.href);
        // });

        // jQuery('#facebook-share').on('click', function() {
        //     window.open("https://www.facebook.com/sharer/sharer.php?u=" + window.location.href + '&src=sdkpreparse');
        // });
        // console.log()
    </script>
@endsection

@section('custom-style')
    {{-- <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.10&appId=124798941401730";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script> --}}
    
    {{-- {{$post->featureImage}} --}}
    <style media="screen">
        .blog-featureImage {
            background-image: url('/img/store-984393_1920.jpg');
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
        .blog-content{
            position: relative;
        }
        .blog-content .blog-content-inner img{
            max-width: 100%;
            height: auto !important;
        }
        .blog-content iframe{
            max-width: 100%;
            position: relative !important;
        }
    </style>
@endsection
@section('content')
<div class="container blog-post-container">
    <div class="row">
        <div class="col-md-12 blog-container">
            <div class="blog-post-time">
                <img src="/img/icon/date-01.png" alt="">
                <span>2019/04/07</span>
                {{-- {{$post->created_at}} --}}
            </div>
            
            <div class="blog-post-title">
                <h2>postTitle</h2>
                {{-- {{$post->postTitle}} --}}
                <div class="share">
                    <table style="width: 100%;">
                        <tr>
                            <td>SHARE THIS POST</td>
                            <td style="border-bottom: none;">
                                <img id="facebook-share" class="alignleft" src="/img/icon/fb-post-share-01.png" alt="" width="32px" />
                            </td>
                            <td style="border-bottom: none;">
                                <img id="line-share" class="aligncenter" src="/img/icon/line-post-share-01.png" alt="" width="32px" />
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="blog-featureImage">
                <img src="/img/16x9.png" alt="">
            </div>
            <hr>
            <div class="blog-content row">
                <div class="blog-content-info col-md-5">
                    <div class="authoInfo">
                        <img class="feedback-Icon" src="/img/icon/male.png" alt="">
                        <h3>
                            Author Name
                        </h3>
                    </div>
                </div>
                <div class="blog-content-inner col-md-7">
                    content!!
                    {{-- {!!$post->content!!} --}}
                </div>
            </div>
        </div>
        {{-- <div class="col-md-4 blog-container">
            <div class="center-hr">
                <span>
                    其他文章
                </span>
            </div>
            <ul class="blog-list">
                @foreach (PostView::getNewestPosts() as $key => $value)
                    <li>
                        <a href="/blog/{{$value->guid}}">{{$value->title}}</a>
                    </li>
                @endforeach
            </ul>
        </div> --}}
    </div>
</div>
@endsection
