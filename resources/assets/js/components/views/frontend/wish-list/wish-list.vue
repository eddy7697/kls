<template>
    <!-- <div class="row" v-if="isCartEmpty && isLoaded">
        <div class="col-md-12">
            <h3 class="center" style="padding: 250px 0; text-align: center">願望清單裡面沒有商品，趕快去逛逛吧~</h3>
        </div>
    </div>v-else -->
    <div class="row">
        <div class="col-md-12">
            <div style="text-align: center" v-if="wish.length == 0">
                <h1>你目前沒有加入收藏任何商品到「願望清單」裡面</h1>
            </div>
            <div class="cart-list" v-else>
                <ul>
                    <li class="cart_list_title">
                        <p>
                            <!-- 尺寸 -->
                        </p>
                        <p>
                            產品名稱
                        </p>
                        <p>
                            <!-- 型號 -->
                        </p>
                        <p>
                            優惠價
                        </p>
                        <p class="hide"></p>
                    </li>
                    <li v-for="(item, index) in wish" v-bind:key="index">
                        <a>
                            <img src="/img/buyIcon/deleteIcon-01.png" alt="" @click="deleteWish(item)" style="cursor: pointer">
                        </a>
                        <a class="example-image-link" :href="item.featureImage" data-lightbox="example-set">
                           <img :src="item.featureImage" alt="" style="max-width: 150px; width: 100%;">
                        </a>
                        <p class="hide">
                            <!-- 27吋 -->
                        </p>
                        <p style="width: 32%;">
                            <a data-title="商品" v-bind:href="productLink(item.productGuid)">{{item.productTitle}}</a>
                        </p>
                        <p>
                            <!-- 型號:<span>HD-515</span> -->
                        </p>
                        <p data-title="價格">
                            NT$<span>{{item.price}}</span>
                            <span>
                                <a @click="addSigleProduct(item.productGuid)" style="cursor: pointer">
                                    <img src="/img/buyIcon/wish-list-delIcon.svg" alt="">
                                </a>
                            </span> 
                        </p>
                        <p> 
                            
                        </p>
                    </li>
                </ul>
            </div>
        </div>
        <!-- <div class="col-md-12">
            <div class="cart-sidebar">
                <div class="cart_totals calculated_shipping box-sizing: border-box;}">
                    <a href="/cart">
                        <div class="nextBtn">
                            <button>
                                前往購物車，完成訂購
                            </button>
                        </div>
                    </a>
                </div>
            </div>
        </div> -->
    </div>
</template>

<script>
    $('.loading-bar').fadeOut('100');
    var h = require('../../../lib/helper.js', ).default;
    import {
        Dialog,
        InputNumber,
        Radio,
        RadioGroup,
    } from 'element-ui';
    import 'element-ui/lib/theme-chalk/index.css';
    import lang from 'element-ui/lib/locale/lang/zh-TW'
    import locale from 'element-ui/lib/locale'

    Vue.use(Dialog);
    Vue.use(InputNumber);
    Vue.use(Radio);
    Vue.use(RadioGroup);
    locale.use(lang)

    export default {
        data() {
            return {
                wish: [],
            }
        },
        created: function () {
            this.getList();
            window.getList = this.getList
        },
        methods: {
            productLink: function (guid) {
                return "/detail/" + guid;
            },
            addSigleProduct(guid) {
                addSigleProduct(guid)
            },
            getList: function (){
                axios.get('/favorite/get')
                    .then(res => {
                        this.wish = res.data;
                    })
                this.lightOption();    
            },
            deleteWish: function (item) {
                var check = confirm('確認要刪除此商品?');
                var self = this;

                if (check) {
                    $('.loading-bar').fadeIn('100');
                    deleteFavorite(item.productGuid, () => {
                        getList()
                        self.resetIconSpan()
                        $('.loading-bar').fadeOut('100');
                    })
                } else {
                    return;
                }
            },
            resetIconSpan: function(){
                 axios.get('/favorite/get')
                    .then(function(res){
                        var wishCount = res.data.length;
                        console.log(wishCount)
                        if(wishCount){
                            $('.wish-icon .count').text(wishCount);
                        } else {
                            $('.wish-icon .count').text('');
                        }
                    });
            },
            lightOption: function(){
                lightbox.option({
                    'albumLabel': '第 %1 張圖片，共 %2 張',
                });
            }
        }
    }
</script>

<style lang="scss">

    @mixin flex-mix($align, $justify) {
        display: -webkit-box; 
        display: -moz-box;
        display: -ms-flexbox;
        display: -webkit-flex; 
        display: flex;
        -webkit-box-align: $align;
        -moz-box-align: $align;
        -ms-flex-align: $align;
        -webkit-align-items: $align;
        align-items: $align;
        -webkit-box-pack: $justify;
        -moz-justify-content: $justify;
        -webkit-justify-content: $justify;
        justify-content: $justify;
        flex-wrap: wrap;
    }
    
    .mg-business{
        margin-top: 7rem;
        margin-bottom: 7rem;
    }
    .hide {
        visibility: hidden;
    }
    .cart-list{
        * a {
            text-decoration: none;
        } 
        ul {
            padding: 0;
            li {
                @include flex-mix(center, space-around);
                padding: 40px 15px;
                list-style: none;
                border-bottom: solid 1px rgba(0, 0, 0, 0.1);
            img {
                    max-width: 35px;
                    width: 35px;
                    z-index: 2;
                }
                p {
                    text-align: center;
                    margin-bottom: 0;
                    font-size: 16px;
                   
                    &:nth-child(1) {
                        width: 30%;
                        span {
                            float: left;
                            margin-left: 5px;
                            margin: 10px;
                        }
                    }
                    &:nth-child(2), &:nth-child(3), &:nth-child(4), &:nth-child(5) {
                        width: 15%;
                        margin-top: 15px;
                    }
                    &:nth-child(6) {
                        @include flex-mix(center, flex-start);
                        flex-wrap: nowrap;
                        width: 8%;
                        margin-top: 10px;
                        img {
                            width: 70%;
                            min-width: 3rem;
                            height: auto;
                            cursor: pointer;
                            transition: 0.3s;
                            margin-left: .5rem;
                            &:hover {
                                filter: drop-shadow(1px 1px 1px #333);
                                transform: translateX(-3px) translateY(-3px);
                            }
                            &:active{
                                filter: none;
                                transform: translateX(0) translateY(0);
                            }
                        }
                    }
                }
            }
            .cart_list_title, .cart_list_total {
                background-color: #0f2746;
                color: #fff;
                padding: 10px 15px;
            }
            .cart_list_title p:nth-child(2), 
            .cart_list_total p:nth-child(2), 
            .cart_list_title p:nth-child(3), 
            .cart_list_total p:nth-child(3), 
            .cart_list_title p:nth-child(4), 
            .cart_list_total p:nth-child(4), 
            .cart_list_title p:nth-child(5), 
            .cart_list_total p:nth-child(5), 
            .cart_list_title p:nth-child(6), 
            .cart_list_total p:nth-child(6) {
                margin-top: 0;
            }
            li.cart_list_total {
                display: block;
                position: relative;
                p {
                    width: 100%;
                    text-align: right;
                    &:nth-child(2) {
                        color: #f8b62d;
                        font-size: 24px;
                    }
                }
                span {
                    float: none !important;
                    margin-left: 0 !important;
                    margin-top: 0 !important;
                }
                .function_btn{
                    position: absolute;
                    top: 50%;
                    transform: translateY(-50%);
                    left: 15px;
                }
            }
        }
    }
    .example-image-link{
        position: relative;
        &::after{
            content: '放大檢視';
            @include flex-mix(center, center);
            position: absolute;
            top: 0;
            right: 0;
            left: 0;
            bottom: 0;
            background: rgba(0,0,0,0.7);
            color: #fff;
            opacity: 0;
            font-size: 16px;
            transition: .5s;
        }
        &:hover{
            &::after{
                opacity: 1;
            }
        }
    }
    @media screen and (max-width: 991px) {
        .cart-list{
            overflow: auto;
            ul {
                min-width: 85rem;
                li {
                    p {
                        text-align: center;
                        margin-bottom: 0;
                        font-size: 16px;
                        &:nth-child(1) {
                            width: 30%;
                            span {
                                float: left;
                                margin-left: 5px;
                                margin: 10px;
                            }
                        }
                        &:nth-child(6) {
                            img {
                                min-width: 2.5rem;
                            }
                        }
                    }
                }
                .cart_list_title,.cart_list_total{
                    p:nth-child(2),
                    p:nth-child(3),
                    p:nth-child(4),
                    p:nth-child(5),
                    p:nth-child(6){
                        margin-top: 0;
                    }
                }
            }
        }
    }

</style>
