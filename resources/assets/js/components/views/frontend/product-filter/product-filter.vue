<template>
    <section>
        <div class="container-fulid sub-page-header">
            <div class="row sub-page-header-inner">
                <div class="sub-logo">
                    <a href="/">
                        <img src="/img/KLSLogoBlack.svg" alt="">
                    </a>
                </div>
                <div class="sub-nav-menu">
                    <ul>
                        <li>
                            <a href="#">
                                關於凱麗絲
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                品牌行李箱                   
                            </a>
                        </li>
                        <li>
                            <a href="">
                                行李箱配件
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                部落格
                            </a>
                        </li>
                        <li>
                            <a href="">
                                店鋪資訊
                            </a>
                        </li>
                        <li class="nav_final">
                            <a href="#">
                                諮詢專區
                            </a>
                        </li>
                        <li class="sub-icon">
                            <img src="\img\likeIcon.png" alt="">
                        </li>
                        <li class="sub-icon">
                            <img src="\img\cartIcon.png" alt="">
                        </li>
                    </ul> 
                </div>
            </div>
        </div> 
        <div class="container filter-area">
            <div class="row filter">
                <div class="col-md-12 filter-title">
                <h1>品牌行李箱</h1>
                <div class="filter-title-hr"></div>
                <p style="margin-top: 50px;">這裡總有一款屬於你的冒險</p>
                </div>
            </div>
            <div class="row filter" style="margin-top: 80px;margin-bottom: 80px;">
                <div class="col-md-12 filter-filtering">
                    <div class="col-md-4">
                        <div class="filter-filters">
                            <div class="filters-title">
                                <p>品牌 Brand</p>
                            </div>
                            <hr>
                            <form class="filters-selects">
                                <div class="filters-selects-div">
                                    <input name="brand" id="departure" type="radio"><label for="departure">Departure</label>
                                    <input name="brand" id="crown" type="radio"><label for="crown">CROWN 皇冠</label>
                                    <input name="brand" id="novita" type="radio"><label for="novita">NOVITA</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="brand" id="yue" type="radio"><label for="yue">YUE</label>
                                    <input name="brand" id="allBrand" type="radio"><label for="allBrand">全部品牌</label>
                                    <input name="brand" id="oossack" type="radio"><label for="oossack">OOSSACK</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="brand" id="ad" type="radio"><label for="ad">AD 亞蘭德倫</label>
                                    <input name="brand" id="mom" type="radio"><label for="mom">MOM</label>
                                    <input name="brand" id="at" type="radio"><label for="at">AT 美國旅行者</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="brand" id="samsonite" type="radio"><label for="samsonite">SAMSONITE 新秀麗</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">  
                        <div class="filter-filters">
                            <div class="filters-title">
                            <p>尺寸 Size</p>
                            </div>
                            <hr>
                            <form class="filters-selects">
                                <div class="filters-selects-div">
                                    <input name="size" id="20" type="radio"><label for="20">20吋以下</label>
                                    <input name="size" id="23" type="radio"><label for="23">20 - 23吋</label>
                                    <input name="size" id="25" type="radio"><label for="25">23 - 25吋</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="size" id="29" type="radio"><label for="29">27 - 29吋</label>
                                    <input name="size" id="30" type="radio"><label for="30">30吋以上</label>
                                    <input name="size" id="allSize" type="radio"><label for="allSize">全部尺寸</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="filter-filters">
                            <div class="filters-title">
                                <p>旅程 Trip</p>
                            </div>
                            <hr>
                            <form class="filters-selects">
                                <div class="filters-selects-div">
                                    <input name="trip" id="aDay" type="radio"><label for="aDay">當日來回</label>
                                    <input name="trip" id="aWeek" type="radio"><label for="aWeek">3 - 7天</label>
                                    <input name="trip" id="twoWeeks" type="radio"><label for="twoWeeks">7 - 14天</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="trip" id="long" type="radio"><label for="long">Long Stay</label>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 filter-filtering">
                    <div class="col-md-4">
                        <div class="filter-filters">
                            <div class="filters-title">
                                <p>價格 Price</p>
                            </div>
                            <hr>
                            <form class="filters-selects">
                                <div class="filters-selects-div">
                                    <input name="price" id="5000" type="radio"><label for="5000">0 - 5000</label>
                                    <input name="price" id="10000" type="radio"><label for="10000">5000 - 10000</label>
                                    <input name="price" id="15000" type="radio"><label for="15000">10000 - 15000</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="price" id="20000" type="radio"><label for="20000">15000 - 20000</label>
                                    <input name="price" id="20000Up" type="radio"><label for="20000Up">20000 以上</label>
                                </div>                        
                            </form>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="filter-filters">
                            <div class="filters-title">
                                <p>材質 Material</p>
                            </div>
                            <hr>
                            <form class="filters-selects">
                                <div class="filters-selects-div">
                                    <input name="material" id="aluminum" type="radio"><label for="aluminum">鋁框</label>
                                    <input name="material" id="pc" type="radio"><label for="pc">PC</label>
                                    <input name="material" id="abs" type="radio"><label for="abs">ABS</label>
                                    <input name="material" id="nylon" type="radio"><label for="nylon">防水尼龍</label>
                                    <input name="material" id="pet" type="radio"><label for="pet">PET</label> 
                                </div>
                                <div class="filters-selects-div">
                                    <input name="material" id="carbon" type="radio"><label for="carbon">碳纖維</label>
                                    <input name="material" id="allMaterial" type="radio"><label for="allMaterial">全部材質</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <button class="filter-remakeBtn">
                        <img class="filter-remakeBtnImg" src="/img/remakeIcon.svg" alt="">
                        重製選取條件
                    </button>
                    <div class="col-md-4"></div>
                </div>
            </div>
        </div>

        <div class="container container-productCount" style="position: relative;">
            <div class="row">
                <div class="col-md-12 productCount">
                    <div class="productCount-left">
                        <div class="productCount-icon">
                            <img class="cube01" src="/img/selectCube-01.svg" alt="">
                            <img class="cube02" src="/img/selectCube-02.svg" alt="">
                        </div>
                        <div class="productCount-sort">
                            <span>價格由高到低排列 ↓</span>
                            <span>價格由低到高排列 ↑</span>
                        </div>
                    </div>
                    <div class="productCount-number">
                        <span>顯示總數</span>
                        <span>08/</span>
                        <span>127</span>
                    </div>
                </div>
            </div>
            <button class="collapseBtn">
                收合
                <img src="/img/collapseIcon.png" alt="">
            </button>
        </div>

        <div class="container-fulid filter-product-out">
            <div class="row filter-product">
                <div class="filter-product-row">
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/product01.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/product_img.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/newsImage04.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/newsImage04.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/product02.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/newsImage02.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/choose01.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/product03.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                </div>
                <div class="row filter-product-row product-more">
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/product01.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/product_img.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/newsImage04.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/newsImage04.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/product02.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/newsImage02.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/choose01.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="product-inner">
                            <div class="product-img" style="background-image: url(/img/product03.jpg);">
                                <div class="product-img-mask"></div>
                                <p>查看商品</p>
                            </div>
                            <div class="product-innertext"></div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 filter-product-readMore">
                    <button id="readMore-btn">查看更多</button>
                </div>
            </div>
        </div>

        <div class="container-fulid sub-page-footer">
            <div class="row sub-page-footer-inner">
                <div class="sub-logo">
                    <a href="/">
                        <img src="/img/KLS_logo_white.svg" alt="">
                    </a>
                </div>
                <div class="sub-nav-menu">
                    <ul>
                        <li>
                            <a href="#">
                                關於凱麗絲
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                品牌行李箱                   
                            </a>
                        </li>
                        <li>
                            <a href="">
                                行李箱配件
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                部落格
                            </a>
                        </li>
                        <li>
                            <a href="">
                                店鋪資訊
                            </a>
                        </li>
                        <li class="nav_final">
                            <a href="#">
                                諮詢專區
                            </a>
                        </li>
                    </ul> 
                </div>
                <div class="sub-contact-icon">
                    <div class="sub-icons">
                        <img src="\img\facebook-white.svg" alt="">
                        <img src="\img\instagram-white.svg" alt="">
                        <img src="\img\line_icon.svg" alt="">
                    </div>
                </div>
            </div>
            <div class="row sub-page-footer-copyright">
                <div class="col-md-12">
                    <div class="sub-page-footer-copyright-inner">
                        <div class="copyRight">
                            <p>Copyright © 2018 凱麗斯旅行箱包 KLS Baggage Department Store. All Rights Reserved.</p>
                        </div>
                        <div class="needKnow">
                            <p><span>隱私權條款</span> | <span>購物須知</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div> 
    </section>
</template>

<script>
    export default {
        mounted () {
            console.log('Component mounted.')
        },
        data () {
            return {
            }
        },
        methods: {
        }
    }
</script>
