<template>
    <section>
        
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
                                    <input name="brand" v-model="filterGroup.brand" value="departure" id="departure" type="radio"><label for="departure">Departure</label>
                                    <input name="brand" v-model="filterGroup.brand" value="crown" id="crown" type="radio"><label for="crown">CROWN 皇冠</label>
                                    <input name="brand" v-model="filterGroup.brand" value="novita" id="novita" type="radio"><label for="novita">NOVITA</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="brand" v-model="filterGroup.brand" value="yue" id="yue" type="radio"><label for="yue">YUE</label>
                                    <input name="brand" v-model="filterGroup.brand" value="allBrand" id="allBrand" type="radio"><label for="allBrand">全部品牌</label>
                                    <input name="brand" v-model="filterGroup.brand" value="oossack" id="oossack" type="radio"><label for="oossack">OOSSACK</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="brand" v-model="filterGroup.brand" value="ad" id="ad" type="radio"><label for="ad">AD 亞蘭德倫</label>
                                    <input name="brand" v-model="filterGroup.brand" value="mom" id="mom" type="radio"><label for="mom">MOM</label>
                                    <input name="brand" v-model="filterGroup.brand" value="at" id="at" type="radio"><label for="at">AT 美國旅行者</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="brand" v-model="filterGroup.brand" value="samsonite" id="samsonite" type="radio"><label for="samsonite">SAMSONITE 新秀麗</label>
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
                                    <input name="size" v-model="filterGroup.size" value="20" id="20" type="radio"><label for="20">20吋以下</label>
                                    <input name="size" v-model="filterGroup.size" value="23" id="23" type="radio"><label for="23">20 - 23吋</label>
                                    <input name="size" v-model="filterGroup.size" value="25" id="25" type="radio"><label for="25">23 - 25吋</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="size" v-model="filterGroup.size" value="29" id="29" type="radio"><label for="29">27 - 29吋</label>
                                    <input name="size" v-model="filterGroup.size" value="30" id="30" type="radio"><label for="30">30吋以上</label>
                                    <input name="size" v-model="filterGroup.size" value="allSize" id="allSize" type="radio"><label for="allSize">全部尺寸</label>
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
                                    <input name="trip" v-model="filterGroup.trip" value="aDay" id="aDay" type="radio"><label for="aDay">當日來回</label>
                                    <input name="trip" v-model="filterGroup.trip" value="aWeek" id="aWeek" type="radio"><label for="aWeek">3 - 7天</label>
                                    <input name="trip" v-model="filterGroup.trip" value="twoWeeks" id="twoWeeks" type="radio"><label for="twoWeeks">7 - 14天</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="trip" v-model="filterGroup.trip" value="long" id="long" type="radio"><label for="long">Long Stay</label>
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
                                    <input name="price" v-model="filterGroup.price" value="5000" id="5000" type="radio"><label for="5000">0 - 5000</label>
                                    <input name="price" v-model="filterGroup.price" value="10000" id="10000" type="radio"><label for="10000">5000 - 10000</label>
                                    <input name="price" v-model="filterGroup.price" value="15000" id="15000" type="radio"><label for="15000">10000 - 15000</label>
                                </div>
                                <div class="filters-selects-div">
                                    <input name="price" v-model="filterGroup.price" value="20000" id="20000" type="radio"><label for="20000">15000 - 20000</label>
                                    <input name="price" v-model="filterGroup.price" value="20000Up" id="20000Up" type="radio"><label for="20000Up">20000 以上</label>
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
                                    <input name="material" v-model="filterGroup.material" value="aluminum" id="aluminum" type="radio"><label for="aluminum">鋁框</label>
                                    <input name="material" v-model="filterGroup.material" value="pc" id="pc" type="radio"><label for="pc">PC</label>
                                    <input name="material" v-model="filterGroup.material" value="abs" id="abs" type="radio"><label for="abs">ABS</label>
                                    <input name="material" v-model="filterGroup.material" value="nylon" id="nylon" type="radio"><label for="nylon">防水尼龍</label>
                                    <input name="material" v-model="filterGroup.material" value="pet" id="pet" type="radio"><label for="pet">PET</label> 
                                </div>
                                <div class="filters-selects-div">
                                    <input name="material" v-model="filterGroup.material" value="carbon" id="carbon" type="radio"><label for="carbon">碳纖維</label>
                                    <input name="material" v-model="filterGroup.material" value="allMaterial" id="allMaterial" type="radio"><label for="allMaterial">全部材質</label>
                                </div>
                            </form>
                        </div>
                    </div>
                    <button class="filter-remakeBtn" @click="clearFilter()">
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
                            <div class="product-innertext">
                                <div class="product-label"><img src="/img/product-logo.jpg" alt=""></div>
                                <div class="product-title">
                                    <p>細鋁框板異型箱 - 銀</p>
                                </div>
                                <div class="product-style">
                                    <p class="product-model">型號 : <span>HD-515</span></p>
                                    <p class="product-size">尺寸 : <span>27 吋</span> 實際大小 : <span>W40xD34xH69</span>容量 : <span>76.6L</span></p>
                                    <div class="product-text">
                                        <ul>
                                            <li>&nbsp;&nbsp;外殼100%採用德國拜耳(Bayer)PC製成，耐衝擊性佳。</li>
                                            <li>&nbsp;&nbsp;美國海關認證TSA密碼鎖。</li>
                                            <li>&nbsp;&nbsp;360度高彈性PU灌注，寂靜無聲頂級萬向輪組。</li>
                                            <li>&nbsp;&nbsp;輪子採用最大65ｍｍ設計，輪徑更大、抓地力更穩。</li>
                                            <li>&nbsp;&nbsp;三段式符合人體工學的頂級鋁合金滑順拉桿。</li>
                                            <li>&nbsp;&nbsp;提把採用杜邦海翠爾，韌性更好、耐久度更佳。</li>
                                            <li>&nbsp;&nbsp;對開拉鍊箱體、完美內裝。</li>
                                        </ul>
                                    </div>
                                    <p class="product-price">$ 12,000</p>
                                </div>
                                <div class="productHeart"><img src="/img/productHeart.svg" alt=""></div>
                                <button class="buyIt"><img src="/img/cartIconWhite.svg" alt="">
                                    <p>加入購物車</p>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 filter-product-readMore">
                    <button id="readMore-btn">查看更多</button>
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
                filterGroup: {
                    brand: null,
                    size: null,
                    trip: null,
                    price: null,
                    material: null
                }                
            }
        },
        watch: {
            filterGroup: {
                handler(filterGroup, oldVal) {
                    console.log(filterGroup)
                },
                deep: true
            }
        },
        methods: {
            clearFilter() {
                this.filterGroup = {
                    brand: null,
                    size: null,
                    trip: null,
                    price: null,
                    material: null
                }
            }
        }
    }
</script>
