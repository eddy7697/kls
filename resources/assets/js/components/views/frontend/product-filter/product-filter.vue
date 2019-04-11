<template>
    <section>
        <img style="display: none" src="/img/loading-spinner.svg" alt="">
        <div class="loading-mask" v-if="isLoading">
            <img class="loading-spinner" src="/img/loading-spinner.svg" alt="">
        </div>
        <div class="container filter-area">
            <div class="row filter">
                <div class="col-md-12 filter-title">
                    <h1 id="thisTitle">品牌行李箱</h1>
                    <div class="filter-title-hr"></div>
                    <p class="filter-subTitle" style="margin-top: 50px;">這裡總有一款屬於你的冒險</p>
                    <div class="searchBar">
                        <i class="fa fa-search lg cearch-icon" aria-hidden="true">
                            <input style="padding-left: 10px; border: none; width: 90%;" 
                                   type="text" placeholder="輸入要尋找的商品">
                        </i>
                    </div>
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
            <div class="row filter" style="margin-top: 80px;margin-bottom: 80px;" v-if="type == 'yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd'">
                <div class="col-md-12 blog-filter-inner">
                    <a class="active">全部文章</a>
                    <a href="">束帶</a>
                    <a href="">行李秤</a>  
                    <a href="">收納包</a>  
                    <a href="">行李箱保護套</a>
                    <a href="">護照包</a>
                    <a href="">其他</a>
                </div>
            </div>
            <div class="row filter" style="margin-top: 80px;margin-bottom: 80px;" v-if="type == '3LvgYt8izNACwDfJAOXskAdHLKoRZ0FN0FOEFdctqe'">
                <div class="col-md-12 blog-filter-inner">
                    <a class="active">全部文章</a>
                    <a href="">價格</a>
                    <a href="">品牌</a>  
                    <a href="">類型</a> 
                </div>
            </div>
        </div>

        <div class="container container-productCount" style="position: relative;">
            <div class="row">
                <div class="col-md-12 productCount">
                    <div class="productCount-left">
                        <!-- <div class="productCount-icon">
                            <img class="cube01" src="/img/selectCube-01.svg" alt="">
                            <img class="cube02" src="/img/selectCube-02.svg" alt="">
                        </div> -->
                        <div class="productCount-sort">
                            <span :class="{active: order == 'desc'}" @click="order = 'desc'">價格由高到低排列 ↓</span>
                            <span :class="{active: order == 'asc'}" @click="order = 'asc'">價格由低到高排列 ↑</span>
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
                                    <div class="style-inner" v-html="item.shortDescription">
                                        <!-- 這裡會自動帶入產品說明 -->
                                    </div>
                                    <p class="product-price">$ {{numberFormat(item.price, 0, '.', ',')}}</p>
                                </div>
                                <div class="productHeart" :data-id= item.productGuid @click="addFavorite(item.productGuid)">
                                    <img src="/img/productHeart.svg" alt="">
                                </div>
                                <button class="buyIt" @click="addSigleProduct(item.productGuid)">
                                    <img src="/img/cartIconWhite.svg" alt="">
                                    <p>加入購物車</p>
                                </button>
                            </div>
                        </div>                    
                    </div>
                </div>
                <!-- <div class="col-md-12 filter-product-readMore" @click="learnMoreAction" v-if="pageData.last_page != pageData.current_page">
                    <button id="readMore-btn">
                        <span class="learnmore" :class="{loading: isLoadingLearnMore}">查看更多</span>
                    </button>
                </div> -->
            </div>
        </div>
        
    </section>
</template>

<script>
    var h = require('../../../lib/helper.js', ).default;
    export default {
        mounted () {
            console.log('Component mounted.')
        },
        props: ['type'],
        data () {
            return {
                isLoading: false,
                isLoadingLearnMore: false,
                order: 'desc',
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
            },
            order(val) {
                this.getData()
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
                    category: this.type,
                    order: this.order
                }

                this.isLoading = true
                axios.post('/products/tag', vo)
                    .then(res => {
                        this.pageData = res.data
                        this.isLoaded = true
                        this.getTitle()
                        this.scrollMore()
                        this.getFavorite()
                    }).catch(err => {

                    }).then(() => {
                        this.isLoading = false
                    })
            },
            addSigleProduct(guid) {
                addSigleProduct(guid)
            },
            learnMoreAction() {
                let vo = {
                    tag: this.filterGroup,
                    category: this.type
                }

                this.isLoading = true
                this.isLoadingLearnMore = true
                
                axios.post(this.pageData.next_page_url, vo)
                    .then(res => {
                        this.pageData.next_page_url = res.data.next_page_url
                        this.pageData.current_page = res.data.current_page
                        this.pageData.data = _.concat(this.pageData.data, res.data.data)
                    }).catch(err => {

                    }).then(() => {
                        this.isLoading = false
                        this.isLoadingLearnMore = false
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
            },
            addFavorite(guid){
                let target = event.target
                let tagName = target.tagName
                this.getFavorite(tagName,target)
                addFavorite(guid)
            },
            getFavorite(tagName,target){
                let self = this;
                axios.get('/favorite/get')
                    .then(function(res){
                        var wishCount = res.data.length
                        self.isFavorited(res.data)
                        if(wishCount){
                            $('.wish-icon .count').text(wishCount)
                        }
                        if(tagName == 'IMG'){
                            $(target).parent('.productHeart').addClass('productHeart-active')
                        } else {
                            $(target).addClass('productHeart-active')
                        } 
                    })
            },
            getTitle() {
                let title = $('#thisTitle')
                let vo = {
                    category: this.type
                }
                let fiterType = {
                    all : 'R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V',
                    other : 'yndH8656FRoJ6K0eNv3KBrDjodALbAHT1FDIGwrknd',
                    bag : '3LvgYt8izNACwDfJAOXskAdHLKoRZ0FN0FOEFdctqe'
                }
                
                switch(vo.category)
                {
                case fiterType.all:
                    title.text('品牌旅行箱')
                    this.menuStyle(1)
                break;
                case fiterType.other:
                    title.text('旅行配件')
                    $('.filter-subTitle').hide()
                    $('.searchBar').css('margin-top','50px');
                    this.menuStyle(2)
                break;
                case fiterType.bag:
                    title.text('品牌背包')
                    $('.filter-subTitle').hide()
                    $('.searchBar').css('margin-top','50px');
                    this.menuStyle(3)
                break;
                }
            },
            menuStyle(val) {
                $(`.mega-menu .product .mega-menu-list ul li:nth-child(${val}) a`).css('border','solid 1px #B3B3B3')
            },
            scrollMore(){
                let timer;
                $(document).scroll(() => {
                    window.clearTimeout(timer);

                    timer = window.setTimeout(()=> {
                        let docH = $(document).height();
                        let scrollH = $(document).scrollTop() + ($('.sub-page-footer').height()/2) + window.innerHeight;
                        if (scrollH > docH) {
                            this.learnMoreAction();
                        }
                    }, 100);
                   
                });
            },
            numberFormat(n, c, d, t) {
                return h.number_format(n, c, d, t)
            },
            isFavorited(data){
                data.forEach((item,index) => {
                    $('.productHeart[data-id="'+ item.productGuid +'"]').addClass('productHeart-active')
                })
            },
        }
    }
    
</script>

<style lang="scss">
.loading-mask {
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    background: rgba($color: #fff, $alpha: 0.3);
    z-index: 100;

    .loading-spinner {
        position: absolute;
        top: 50%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 50px;
    }
}

// <img class="loading-spinner" src="/img/loading-spinner.svg" alt="">
.learnmore {
    position: relative;

    &.loading {
        &::before {
            position: absolute;
            width: 20px;
            height: 20px;
            left: -25px;
            top: 50%;
            transform: translateY(-50%);
            background-image: url('/img/loading-spinner.svg');
            background-size: cover;
            content: '',
        }
    }
}

.searchBar{
    padding: 5px 10px;
    width: 175px;
    margin: 0 auto;
    border: solid 1px #bdbdbd;
    color: #bdbdbd;
    border-radius: 12px;
    .cearch-icon{
        input{
            outline: none;
        }
    }
}

</style>
