<template>
    <section>
        
        <div class="container filter-area">
            <div class="row filter">
                <div class="col-md-12 filter-title">
                <h1>行李箱配件</h1>
                <div class="filter-title-hr"></div>
                <p style="margin-top: 50px;">這裡總有一款屬於你的冒險</p>
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
            <button class="collapseBtn" v-on:click="collapse">
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
