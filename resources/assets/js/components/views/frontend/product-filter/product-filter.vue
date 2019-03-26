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
            <div class="row filter" style="margin-top: 80px;margin-bottom: 80px;" v-if="type == 'R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V'">
                <div class="col-md-12 filter-filtering">
                    <div class="col-md-4">
                        <div class="filter-filters">
                            <div class="filters-title">
                                <p>品牌 Brand</p>
                            </div>
                            <hr>
                            <form class="filters-selects">
                                <div class="filters-selects-div">
                                    <label :for="item" v-for="(item, index) in tagGroup.brand" :key="index">
                                        <input name="brand" v-model="filterGroup.brand" :value="item" :id="item" type="radio">{{item}}
                                    </label>
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
                                    <label :for="item" v-for="(item, index) in tagGroup.size" :key="index">
                                        <input name="size" v-model="filterGroup.size" :value="item" :id="item" type="radio">{{item}}
                                    </label>
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
                                    <label :for="item" v-for="(item, index) in tagGroup.trip" :key="index">
                                        <input name="trip" v-model="filterGroup.trip" :value="item" :id="item" type="radio">{{item}}
                                    </label>
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
                                    <label :for="item" v-for="(item, index) in tagGroup.price" :key="index">
                                        <input name="price" v-model="filterGroup.price" :value="item" :id="item" type="radio">{{item}}
                                    </label>
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
                                    <label :for="item" v-for="(item, index) in tagGroup.material" :key="index">
                                        <input name="material" v-model="filterGroup.material" :value="item" :id="item" type="radio">{{item}}
                                    </label>
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
                    <div class="productCount-number" v-if="isLoaded">
                        <span>顯示總數</span>
                        <span>{{pageData.data.length}}/</span>
                        <span>{{pageData.total}}</span>
                    </div>
                </div>
            </div>
            <button class="collapseBtn" v-if="type == 'R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V'">
                收合
                <img src="/img/collapseIcon.png" alt="">
            </button>
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
                <div class="col-md-12 filter-product-readMore" @click="learnMoreAction" v-if="pageData.last_page != pageData.current_page">
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
        props: ['type'],
        data () {
            return {
                isLoaded: false,
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
                    category: 'R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V'
                }

                axios.post('/products/tag', vo)
                    .then(res => {
                        this.pageData = res.data
                        this.isLoaded = true
                    })
            },
            addSigleProduct(guid) {
                addSigleProduct(guid)
            },
            learnMoreAction() {
                let vo = {
                    tag: this.filterGroup,
                    category: 'R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V'
                }

                axios.post(this.pageData.next_page_url, vo)
                    .then(res => {
                        this.pageData.next_page_url = res.data.next_page_url
                        this.pageData.current_page = res.data.current_page
                        this.pageData.data = _.concat(this.pageData.data, res.data.data)
                    })
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
