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
        </div>

        <div class="container-fulid filter-product-out">
            <div class="row filter-product">
                <div class="filter-product-row">
                    <div class="col-md-6" v-for="(item, index) in pageData.data" :key="index">
                        <div class="product-inner">
                            <div class="product-img" :style="`background-image: url('${item.featureImage}');`">
                                <a :href="`/detail/${item.productGuid}`">
                                    <div class="product-img-mask"></div>
                                    <p>查看商品</p>
                                </a>
                                
                            </div>
                            
                            <div class="product-innertext">
                                <!-- <div class="product-label"><img src="/img/product-logo.jpg" alt=""></div> -->
                                <div class="product-title">
                                    <p>{{item.productTitle}}</p>
                                </div>
                                <div class="product-style">
                                    <div v-html="item.shortDescription">
                                        <!-- 這裡會自動帶入產品說明 -->
                                    </div>
                                    <p class="product-price">$ {{item.price}}</p>
                                </div>
                                <div class="productHeart"><img src="/img/productHeart.svg" alt=""></div>
                                <button class="buyIt" @click="addSigleProduct(item.productGuid)">
                                    <img src="/img/cartIconWhite.svg" alt="">
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
                tagGroup: {
                    brand: null,
                    size: null,
                    trip: null,
                    price: null,
                    material: null
                },
                filterGroup: {
                    brand: null,
                    size: null,
                    trip: null,
                    price: null,
                    material: null
                },
                pageData: {}
            }
        },
        watch: {
            filterGroup: {
                handler(filterGroup, oldVal) {
                    this.getData()
                },
                deep: true
            }
        },
        created() {
            this.getTag()
        },
        methods: {
            getTag() {
                axios.get('/admin/tag/get')
                    .then(res => {
                        Object.keys(res.data).forEach(elm => {
                            this.tagGroup[elm] = res.data[elm]
                        })

                        this.$nextTick(() => {
                            this.getData()
                        })
                    })
            },
            getData() {
                let vo = {
                    tag: this.filterGroup,
                    category: 'yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd'
                }

                axios.post('/products/tag', vo)
                    .then(res => {
                        this.pageData = res.data
                    })
            },
            addSigleProduct(guid) {
                addSigleProduct(guid)
            },
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
