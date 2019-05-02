@extends('main')

@php
use App\CustomField;

    $witness = CustomField::where('id', $id)->first();
@endphp

@section('custom-meta')
    <meta property="og:url" content="{{(isset($_SERVER['HTTPS']) ? "https" : "http") . "://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"}}"></meta>
    <meta property="og:title" content="{{$witness->seoTitle}}" />
    <meta property="og:description" content="{{$witness->seoDescription}}" />
    <!--分享用圖片在這，一樣有保留-->
    <meta property="og:image" content="https://www.meansgood.com.tw{{$witness->featureImage}}"/>
    <meta property="fb:app_id" content="1758202757809745" />
    <!--**************************-->
    <meta property="og:type" content="website" />
@endsection

@section('custom-script')
    <script>
        $('.blog-container').css({
            'margin-top': ($('.sub-page-header').height() + 10) + 'px',
            'margin-bottom': '80px'
        })
        jQuery('.line-share').on('click', function() {
            window.open("http://line.me/R/msg/text/?" + document.title + '%0D%0A' + window.location.href);
        });

        jQuery('.facebook-share').on('click', function() {
            window.open("https://www.facebook.com/sharer/sharer.php?u=" + window.location.href + '&src=sdkpreparse');
        });
        
        var dataTime = $('.dataTime').text();
        var setTime = dataTime.split('T');
        $('.time').text(setTime[0])
    </script>
@endsection

@section('custom-style')
    <div id="fb-root"></div>
    <script>(function(d, s, id) {
      var js, fjs = d.getElementsByTagName(s)[0];
      if (d.getElementById(id)) return;
      js = d.createElement(s); js.id = id;
      js.src = "//connect.facebook.net/zh_TW/sdk.js#xfbml=1&version=v2.10&appId=124798941401730";
      fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));</script>
    
    <style media="screen">
        .blog-featureImage {
            position: relative;
            overflow: hidden;
            padding-bottom: 60%;
        }
        .blog-featureImage img{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translateX(-50%) translateY(-50%);
        }
        .blog-content{
            position: relative;
        }
        .blog-content p{
            font-size: 18px;
        }
        .blog-content .blog-content-inner img{
            max-width: 100%;
            height: auto !important;
        }
        .blog-content iframe{
            max-width: 100%;
            position: relative !important;
        }
        .blog-post-container .row .blog-post-title{
            padding-bottom: .01rem;
            margin-bottom: 5rem;
        }
    </style>
@endsection
@section('content')
<div class="container blog-post-container">
    <div class="row">
        <div class="col-md-12 blog-container">
            
            
            <div class="blog-post-title">
                {{-- <h2>文章標題</h2> --}}
                <div class="blog-post-time" style="float: left; margin-top: 6px;">
                    <img src="/img/icon/date-01.png" alt="">
                    <span class="dataTime" style="display: none">{{$witness->customField7}}</span>
                    <span class="time" ></span>
                </div>
                <div class="share">
                    <table style="width: 100%;">
                        <tr>
                            <td>SHARE THIS POST</td>
                            <td style="border-bottom: none;">
                                <img class="facebook-share alignleft" src="/img/icon/fb-post-share-01.png" alt="" width="32px" />
                            </td>
                            <td style="border-bottom: none;">
                                <img class="line-share aligncenter" src="/img/icon/line-post-share-01.png" alt="" width="32px" />
                            </td>
                        </tr>
                    </table>
                </div>
            </div>
            <div class="blog-content row" style="padding-top: 50px">
                <div class="blog-content-info col-md-4">
                    <div class="authoInfo">
                        @if ($witness->customField6 == "male")
                            <img class="feedback-Icon" src="/img/icon/male.png" alt="">
                        @else
                            <img class="feedback-Icon" src="/img/icon/female.png" alt="">
                        @endif
                        <div class="autho">
                            <h3>
                                {{$witness->locale}}
                                @if ($witness->customField6 == "male")
                                    先生
                                @else
                                    小姐
                                @endif
                                
                            </h3>
                            <p>
                                {{$witness->customField2}}
                            </p>
                        </div>
                        
                    </div>
                </div>
                <div class="blog-content-inner col-md-8">
                        {!!$witness->content!!}
                </div>
            </div>
            <hr>
            <div class="blog-featureImage">
                <img src="{{$witness->customField4}}" alt="">
            </div>
            
        </div>
    </div>
</div>
@endsection
