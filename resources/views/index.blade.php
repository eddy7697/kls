@extends('main')

@section('custom-script')
    <script>
        var swiper = new Swiper ('.product_nav_index .tab-pane',{
            direction : 'horizontal',
            loop      : true,
            speed     : 1000,
            autoplay  : {
                delay: 10000,
                disableOnInteraction: false,
            },
            navigation: {
                nextEl: '.right',
                prevEl: '.left'
            }
        });

        var swiper = new Swiper ('.feedback-Index',{
            direction : 'horizontal',
            loop      : true,
            speed     : 1000,
            navigation: {
                nextEl: '.right',
                prevEl: '.left'
            }
        });

        function color_function(className,color){
            let z = 
                $('.porduct_colors')
                .find(className)
                .css('background-color' , color)
            return z    
        };
        
        let product_li_class = $('.porduct_colors li').each(function(a,b){
            let color_className = b.className
            switch(color_className)
            {
            case 'red': color_function('.red','#C30D23'); break;
            case 'pink': color_function('.pink','#A40B5D'); break;
            case 'grey': color_function('.grey','#838584'); break;
            case 'blue': color_function('.blue','#036EB8'); break;
            case 'black': color_function('.black','#3E3A39'); break;
            case 'white': color_function('.white','#FFFFFF'); break;
            case 'green': color_function('.green','#00A29A'); break;
            case 'yellow': color_function('.yellow','#C9BC9C'); break;
            case 'sky_blue': color_function('.sky_blue','#2EA7E0'); break;
            case 'dark_blue': color_function('.dark_blue','#171C61'); break;
            }
        });

    </script>
@endsection


@section('content')

    <!------------------------choose------------------------>

    <section id="choose">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 section_title">
                   <p> 
                       挑選適合你的旅行箱
                   </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3 co_post">
                    <div class="choose_post">
                        <div class="img_div">
                            <img src="/img/choose01.jpg" alt="">
                        </div>
                        <div class="post_text">
                            <h3>
                                拉鍊式硬殼箱
                            </h3>
                            <p>
                                鋁合金特性是耐用、耐磨、耐衝擊、箱
                                殼本身的使用年限大多可以保持在五年
                                或十年以上，有分一體成型，如ZERO，
                                或組合成型、如RIMOWA。但周邊的配
                                件損壞還是可以維修的，如果你要求外
                                觀漂亮完整，大概不可能，除非，是您
                                想換個新的行李箱，要不然，要使用到
                                不堪使用的情況，應該是很少發生的、
                                但前提是、必須在正確使用行李箱的方
                                法之下、才能發揮它的特性、他跟一般
                                行李箱的比較來說，重量重一點價格比
                                一般的還要貴很多。
                            </p>
                            <div class="choose_btn">
                                <button class ="goBuy">
                                    <a href="">
                                        點我選購去
                                    </a>                    
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 co_post">
                    <div class="choose_post">
                        <div class="img_div">
                            <img src="/img/choose02.jpg" alt="">
                        </div>
                        <div class="post_text">
                            <h3>
                                鋁框式硬殼箱
                            </h3>
                            <p>
                                鋁合金特性是耐用、耐磨、耐衝擊、箱
                                殼本身的使用年限大多可以保持在五年
                                或十年以上，有分一體成型，如ZERO，
                                或組合成型、如RIMOWA。但周邊的配
                                件損壞還是可以維修的，如果你要求外
                                觀漂亮完整，大概不可能，除非，是您
                                想換個新的行李箱，要不然，要使用到
                                不堪使用的情況，應該是很少發生的、
                                但前提是、必須在正確使用行李箱的方
                                法之下、才能發揮它的特性、他跟一般
                                行李箱的比較來說，重量重一點價格比
                                一般的還要貴很多。
                            </p>
                            <div class="choose_btn">
                                <button class ="goBuy">
                                    <a href="">
                                        點我選購去
                                    </a>                    
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 co_post">
                    <div class="choose_post">
                        <div class="img_div">
                            <img src="/img/choose03.jpg" alt="">
                        </div>
                        <div class="post_text">
                            <h3>
                                軟殼布面箱
                            </h3>
                            <p>
                                鋁合金特性是耐用、耐磨、耐衝擊、箱
                                殼本身的使用年限大多可以保持在五年
                                或十年以上，有分一體成型，如ZERO，
                                或組合成型、如RIMOWA。但周邊的配
                                件損壞還是可以維修的，如果你要求外
                                觀漂亮完整，大概不可能，除非，是您
                                想換個新的行李箱，要不然，要使用到
                                不堪使用的情況，應該是很少發生的、
                                但前提是、必須在正確使用行李箱的方
                                法之下、才能發揮它的特性、他跟一般
                                行李箱的比較來說，重量重一點價格比
                                一般的還要貴很多。
                            </p>
                            <div class="choose_btn">
                                <button class ="goBuy">
                                    <a href="">
                                        點我選購去
                                    </a>                    
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 co_post">
                    <div class="choose_post">
                        <div class="img_div">
                            <img src="/img/choose04.jpg" alt="">
                        </div>
                        <div class="post_text">
                            <h3>
                                品牌特殊箱
                            </h3>
                            <p>
                                鋁合金特性是耐用、耐磨、耐衝擊、箱
                                殼本身的使用年限大多可以保持在五年
                                或十年以上，有分一體成型，如ZERO，
                                或組合成型、如RIMOWA。但周邊的配
                                件損壞還是可以維修的，如果你要求外
                                觀漂亮完整，大概不可能，除非，是您
                                想換個新的行李箱，要不然，要使用到
                                不堪使用的情況，應該是很少發生的、
                                但前提是、必須在正確使用行李箱的方
                                法之下、才能發揮它的特性、他跟一般
                                行李箱的比較來說，重量重一點價格比
                                一般的還要貴很多。
                            </p>
                            <div class="choose_btn">
                                <button class ="goBuy">
                                    <a href="">
                                        點我選購去
                                    </a>                    
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <!------------------------products------------------------>

    <section id="products">
        <div class="sw_mask mask_left">
            <img class="product_arrow left" src="/img/arrow-left.png" alt="">
        </div>
        <div class="sw_mask mask_right">
            <img class="product_arrow right" src="/img/arrow-right.png" alt="">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 section_title">
                   <p> 
                       凱麗斯旅行箱
                   </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 product_nav">
                    <nav class="nav navbar-default">
                        <ul class="nav nav-tabs">
                            <li>
                                <a data-toggle="tab" href="#home"> 
                                    全部商品
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#menu1">
                                    20吋登機箱
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#menu2">
                                    23吋商務旅行
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#menu3">
                                    25吋輕旅行
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#menu4">
                                    27吋重裝上陣
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#menu5">
                                    30吋逃離專用
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#menu6">
                                    特殊規格旅行箱
                                </a>
                            </li>
                            <li>
                                <a data-toggle="tab" href="#menu7">
                                    旅行箱配件
                                </a>
                            </li>
                        </ul>
                    </nav>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 product_nav_index">
                    <div class="tab-content">
                        <div id="home" class="tab-pane fade in active">

                            <div class="swiper-wrapper">
                                @for ($i = 0; $i < 2; $i++)
                                    <div class="swiper-slide">    
                                        <div class="col-md-3">
                                            <div class="product_img">
                                                <img class="product_img_inside" src="/img/product_img.jpg" alt="">
                                                <div class="product_quick_view">
                                                    <p class="product_quick_text">
                                                        快速檢視    
                                                    </p>
                                                    <img class="product_quick_icon" src="/img/quick-view.png" alt="">
                                                </div>
                                            </div>
                                            <h3 class="product_series">
                                                DEPARTURE/HD-202系列
                                            </h3>
                                            <h3 class="product_name">
                                                22吋登機箱
                                            </h3>
                                            <ul class="porduct_colors">
                                                <li class="grey"></li>
                                                <li class="sky_blue"></li>
                                                <li class="black"></li>
                                                <li class="yellow"></li>
                                                <li class="blue"></li>
                                            </ul>
                                            <h2 class="product_price">
                                                NTD 3,680
                                            </h2>
                                            <button class="buy_click">
                                                點我購買
                                            </button>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="product_img">
                                                <img class="product_img_inside" src="/img/product_img.jpg" alt="">
                                                <div class="product_quick_view">
                                                    <p class="product_quick_text">
                                                        快速檢視    
                                                    </p>
                                                    <img class="product_quick_icon" src="/img/quick-view.png" alt="">
                                                </div>
                                            </div>
                                            <h3 class="product_series">
                                                DEPARTURE/HD-202系列
                                            </h3>
                                            <h3 class="product_name">
                                                22吋登機箱
                                            </h3>
                                            <ul class="porduct_colors">
                                                <li class="green"></li>
                                                <li class="dark_blue"></li>
                                                <li class="white"></li>
                                            </ul>
                                            <h2 class="product_price">
                                                NTD 3,680
                                            </h2>
                                            <button class="buy_click" class="buy_click">
                                                點我購買
                                            </button>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="product_img">
                                                <img class="product_img_inside" src="/img/product_img.jpg" alt="">
                                                <div class="product_quick_view">
                                                    <p class="product_quick_text">
                                                        快速檢視    
                                                    </p>
                                                    <img class="product_quick_icon" src="/img/quick-view.png" alt="">
                                                </div>
                                            </div>
                                            <h3 class="product_series">
                                                DEPARTURE/HD-202系列
                                            </h3>
                                            <h3 class="product_name">
                                                22吋登機箱
                                            </h3>
                                            <ul class="porduct_colors">
                                                <li class="pink"></li>
                                                <li class="grey"></li>
                                            </ul>
                                            <h2 class="product_price">
                                                NTD 3,680
                                            </h2>
                                            <button class="buy_click" class="buy_click">
                                                點我購買
                                            </button>
                                        </div>
                                    
                                        <div class="col-md-3">
                                            <div class="product_img">
                                                <img class="product_img_inside" src="/img/product_img.jpg" alt="">
                                                <div class="product_quick_view">
                                                    <p class="product_quick_text">
                                                        快速檢視    
                                                    </p>
                                                    <img class="product_quick_icon" src="/img/quick-view.png" alt="">
                                                </div>
                                            </div>
                                            <h3 class="product_series">
                                                DEPARTURE/HD-202系列
                                            </h3>
                                            <h3 class="product_name">
                                                22吋登機箱
                                            </h3>
                                            <ul class="porduct_colors">
                                                <li class="white"></li>
                                                <li class="blue"></li>
                                                <li class="black"></li>
                                                <li class=""></li>
                                            </ul>
                                            <h2 class="product_price">
                                                NTD 3,680
                                            </h2>
                                            <button class="buy_click" class="buy_click">
                                                點我購買
                                            </button>
                                        </div>
                                    </div>
                                @endfor    
                            </div>

                        </div>
                        <div id="menu1" class="tab-pane fade">
                            <h3>
                                Menu 1
                            </h3>
                            <p>
                                Waittong for Data...
                            </p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>
                                Menu 2
                            </h3>
                            <p>
                                Waittong for Data...
                            </p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <h3>
                                Menu 3
                            </h3>
                            <p>
                                Waittong for Data...
                            </p>
                        </div>
                        <div id="menu4" class="tab-pane fade">
                            <h3>
                                Menu 4
                            </h3>
                            <p>
                                Waittong for Data...
                            </p>
                        </div>
                        <div id="menu5" class="tab-pane fade">
                            <h3>
                                Menu 5
                            </h3>
                            <p>
                                Waittong for Data...
                            </p>
                        </div>
                        <div id="menu6" class="tab-pane fade">
                            <h3>
                                Menu 6
                            </h3>
                            <p>
                                Waittong for Data...
                            </p>
                        </div>
                        <div id="menu7" class="tab-pane fade">
                            <h3>
                                Menu 7
                            </h3>
                            <p>
                                Waittong for Data...
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!-----------------------news------------------------>
    <section id="news">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 section_title">
                   <p> 
                       最新消息
                   </p>
                </div>
            </div>
            <div class="row newsPostRow">
                <div class="col-md-6">
                    <div class="newsPost">
                        <div class="newsPostMask">
                            <div class="maskLine lineLeft"></div>
                            <div class="maskLine lineRight"></div>
                            <a href="">
                                <p>
                                    (Read more...)
                                </p>
                            </a>
                        </div>
                        <div class= "newsImgBox">
                            <img class="newImg" src="/img/newsImage01.jpg" alt="">
                        </div>
                        <div class="newsText">
                            <p class="newsTextTitle">硬殼旅行箱材質到底該怎麼分呢?</p>
                            <p>2018/07/14</p>
                            <p class="newPostTextP">大多人會以為有軟殼與硬殼的差異，<br>其實這一點是有一些誤解的！ <br>挑行李箱跟挑水果不一樣啦！ <br>快來聽聽月月怎麼說吧！<br></p>
                            <a href="">#趕快分享給親朋好友</a>
                            <br>
                            <a href="">#凱麗斯KLS旅行箱包專賣店</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newsPost">
                        <div class="newsPostMask">
                            <div class="maskLine lineLeft"></div>
                            <div class="maskLine lineRight"></div>
                            <a href="">
                                <p>
                                    (Read more...)
                                </p>
                            </a>
                        </div>
                        <div class= "newsImgBox">
                            <img class="newImg" src="/img/newsImage02.jpg" alt="">
                        </div>
                        <div class="newsText">
                            <p class="newsTextTitle">一月一度的直播拍賣會來嚕</p>
                            <p>2018/07/14</p>
                            <p class="newPostTextP">一樣有超便宜的箱子給大家競標撿便宜<br>另外這次還會介紹這個月剛到的新款！！ <br>就是［DEPARTURE］的煞車箱HD-502S與 細鋁框異形箱HD-515，很多朋友們都在期待<br>想看看闆娘仔細介紹的朋友<br>一定要記得鎖定觀看唷！！！</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row newsPostRow">
                <div class="col-md-6">
                    <div class="newsPost">
                        <div class="newsPostMask">
                            <div class="maskLine lineLeft"></div>
                            <div class="maskLine lineRight"></div>
                            <a href="">
                                <p>
                                    (Read more...)
                                </p>
                            </a>
                        </div>
                        <div class= "newsImgBox">
                            <img class="newImg" src="/img/newsImage03.jpg" alt="">
                        </div>
                        <div class="newsText">
                            <p class="newsTextTitle">請大家注意冒用凱麗斯貼文的詐騙</p>
                            <p>2018/07/14</p>
                            <p class="newPostTextP">請大家注意「非我們官方粉絲團的帳號貼文都不是凱麗斯喔」今天有人冒用我們的名義在公開社團貼文宣稱抽獎活動不是真的喔！！！可能是要騙取個資，請大家要小心喲！</p>
                            <a href="">#謝謝熱心提醒我們的朋友們</a>
                            <br>
                            <a href="">#真是什麼奇怪的壞人都有</a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="newsPost">
                        <div class="newsPostMask">
                            <div class="maskLine lineLeft"></div>
                            <div class="maskLine lineRight"></div>
                            <a href="">
                                <p>
                                    (Read more...)
                                </p>
                            </a>
                        </div>
                        <div class= "newsImgBox">
                            <img class="newImg" src="/img/newsImage04.jpg" alt="">
                        </div>
                        <div class="newsText">
                            <p class="newsTextTitle">端午連結營業時間公告</p>
                            <p>2018/07/14</p>
                            <p class="newPostTextP">大多人會以為有軟殼與硬殼的差異，<br>其實這一點是有一些誤解的！ <br>挑行李箱跟挑水果不一樣啦！ <br>快來聽聽月月怎麼說吧！<br></p>
                            <a href="">#趕快分享給親朋好友</a>
                            <br>
                            <a href="">#凱麗斯KLS旅行箱包專賣店</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> 
    
    <!------------------------books------------------------>
    <section id="feedback">
        <div class="sw_mask mask_left">
            <img class="product_arrow left" src="/img/arrow-left.png" alt="">
        </div>
        <div class="sw_mask mask_right">
            <img class="product_arrow right" src="/img/arrow-right.png" alt="">
        </div>
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 section_title">
                    <p> 
                        使用迴響
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12 feedback-Index">
                    <div class="swiper-wrapper">
                        @for ($i = 0; $i < 3; $i++)
                            <div class="swiper-slide">
                                @for ($i = 0; $i < 3; $i++)   
                                <div class="col-md-4">
                                    <div class="feedbackPost">
                                        <img class="feedback-Icon" src="/img/feedbackIcon.svg" alt="">
                                        <div class="feedback-Inner">
                                            <p>
                                                異形箱真的誇張的好裝、好拖、好美(*^^*)真的不要再猶豫了！男友的2萬的s牌都不想用了，一直和我搶著拖異形箱(o^^o)超滑的，裝20幾公斤，輪子還是好滑好滑，也沒有任何路面感到困難！買了不會後悔的！謝謝闆娘的耐心回答任何問題及推薦，謝謝闆闆願意順路幫我送到家，讓我緊急帶出國！這次是買27吋的異形箱！d牌的形李箱讓我離不開這品牌了！
                                            </p>
                                        </div>
                                        <div class="feedback-Author">
                                            <p>
                                                卜一一
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                @endfor
                            </div>
                        @endfor    
                    </div>
                </div>
            </div>
        </div>
    </section>
        
   
    <!------------------------instrument------------------------>
    

    <!------------------------safe------------------------>
    
    <!------------------------proxy------------------------>
    
@endsection