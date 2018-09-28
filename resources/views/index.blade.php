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
                prevEl: '.left',
            }
        })
        
        // let product_li_class = $('.porduct_colors li').each(function(){
        //     $(this).attr('class')
        // })
        // console.log(product_li_class)
        // switch(n)
        // {
        // case 1:
        // 执行代码块 1
        // break;
        // case 2:
        // 执行代码块 2
        // break;
        // default:
        // n 与 case 1 和 case 2 不同时执行的代码
        // }
        
    </script>
@endsection


@section('content')

    <!------------------------choose------------------------>

    <section id="choose">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12 choose_title">
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
                <div class="col-md-12 choose_title">
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
                                                <img src="/img/product_img.jpg" alt="">
                                            </div>
                                            <h3>
                                                DEPARTURE/HD-202系列
                                            </h3>
                                            <h3>
                                                22吋登機箱
                                            </h3>
                                            <ul class="porduct_colors">
                                                <li class="grey"></li>
                                                <li class="sky_blue"></li>
                                                <li class="black"></li>
                                                <li class="yellow"></li>
                                                <li class="blue"></li>
                                            </ul>
                                            <h2>
                                                NTD 3,680
                                            </h2>
                                            <button class="buy_click">
                                                點我購買
                                            </button>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="product_img">
                                                <img src="/img/product_img.jpg" alt="">
                                            </div>
                                            <h3>
                                                DEPARTURE/HD-202系列
                                            </h3>
                                            <h3>
                                                22吋登機箱
                                            </h3>
                                            <ul class="porduct_colors">
                                                <li class="green"></li>
                                                <li class="dark_blue"></li>
                                                <li class="white"></li>
                                            </ul>
                                            <h2>
                                                NTD 3,680
                                            </h2>
                                            <button class="buy_click">
                                                點我購買
                                            </button>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="product_img">
                                                <img src="/img/product_img.jpg" alt="">
                                            </div>
                                            <h3>
                                                DEPARTURE/HD-202系列
                                            </h3>
                                            <h3>
                                                22吋登機箱
                                            </h3>
                                            <ul class="porduct_colors">
                                                <li class="pink"></li>
                                                <li class="grey"></li>
                                            </ul>
                                            <h2>
                                                NTD 3,680
                                            </h2>
                                            <button class="buy_click">
                                                點我購買
                                            </button>
                                        </div>
                                    
                                        <div class="col-md-3">
                                            <div class="product_img">
                                                <img src="/img/product_img.jpg" alt="">
                                            </div>
                                            <h3>
                                                DEPARTURE/HD-202系列
                                            </h3>
                                            <h3>
                                                22吋登機箱
                                            </h3>
                                            <ul class="porduct_colors">
                                                <li class="white"></li>
                                                <li class="blue"></li>
                                                <li class="black"></li>
                                                <li class="red"></li>
                                            </ul>
                                            <h2>
                                                NTD 3,680
                                            </h2>
                                            <button class="buy_click">
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
                                Some content in menu 1.
                            </p>
                        </div>
                        <div id="menu2" class="tab-pane fade">
                            <h3>
                                Menu 2
                            </h3>
                            <p>
                                Some content in menu 2.
                            </p>
                        </div>
                        <div id="menu3" class="tab-pane fade">
                            <h3>
                                Menu 3
                            </h3>
                            <p>
                                Some content in menu 3.
                            </p>
                        </div>
                        <div id="menu4" class="tab-pane fade">
                            <h3>
                                Menu 4
                            </h3>
                            <p>
                                Some content in menu 4.
                            </p>
                        </div>
                        <div id="menu5" class="tab-pane fade">
                            <h3>
                                Menu 5
                            </h3>
                            <p>
                                Some content in menu 5.
                            </p>
                        </div>
                        <div id="menu6" class="tab-pane fade">
                            <h3>
                                Menu 6
                            </h3>
                            <p>
                                Some content in menu 6.
                            </p>
                        </div>
                        <div id="menu7" class="tab-pane fade">
                            <h3>
                                Menu 7
                            </h3>
                            <p>
                                Some content in menu 7.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    

    <!------------------------product------------------------>

    
    <!------------------------books------------------------>
    

    <!------------------------instrument------------------------>
    

    <!------------------------safe------------------------>
    
    <!------------------------proxy------------------------>
    
@endsection