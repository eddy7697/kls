<template>
    <div class="row" v-if="isCartEmpty && isLoaded">
        <div class="col-md-12">
            <h3 class="center">購物車裡面沒有商品，趕快去逛逛吧~</h3>
        </div>
    </div>
    <div class="row" v-else>
        <div class="col-md-12">
            <div class="cart-list">
                <ul>
                    <li class="cart_list_title">
                        <p>
                            產品名稱
                        </p>
                        <p>
                            尺寸
                        </p>
                        <p>
                            型號
                        </p>
                        <p>
                            數量
                        </p>
                        <p>
                            優惠價
                        </p>
                        <p class="hide"></p>
                    </li>
                    <li v-for="(item, index) in cart" v-bind:key="index">
                        <p>
                            <span>
                                {{index + 1}}
                            </span>
                                <a  data-title="商品" v-bind:href="productLink(item.id.guid)">{{item.id.title}}</a>
                            <br>
                        </p>
                        <p>
                            27吋
                        </p>
                        <p>
                            型號:<span>HD-515</span>
                        </p>
                        <p data-title="數量" class="count">
                            <el-input-number 
                            v-model="item.qty" size="small" 
                            label="請選擇數量"></el-input-number>
                        </p>
                        <p data-title="價格">
                            NT$<span>
                                {{numberFormat(item.price, 0, '.', ',')}}
                            </span> 
                        </p>
                        <p>
                            <a href="#" class="remove" aria-label="移除這項商品" style="text-decoration: none;" @click="deleteProduct(item)">
                                <img src="/img/buyIcon/deleteIcon-01.png" alt="">
                            </a>
                        </p>
                    </li>
                    <li class="cart_list_total">
                        <div class="function_btn">
                            <button v-if="isDirty" class="btn btn-default" name="button" @click="updateCart">更新購物車</button>
                            <button v-else class="btn btn-default" name="button" disabled>更新購物車</button>
                            <button class="btn btn-default" name="button" @click="deleteAll">清空購物車</button>
                        </div>
                        <p data-title="小計">
                            商品小計 : NT$
                            <span>
                                {{amount}}
                            </span>
                        </p>
                        <p data-title="總計">
                            訂單總金額 : NT$
                            <span>
                                {{numberFormat(amountNum, 0, '.', ',')}}
                            </span>
                        </p>
                    </li>
<<<<<<< HEAD
                    <!-- <form class="" action="/checkout/billing" method="post">
                        <li class="cart_list_total">
                            <div class="function_btn">
                                <button v-if="isDirty" class="btn btn-default" name="button" @click="updateCart">更新購物車</button>
                                <button v-else class="btn btn-default" name="button" disabled>更新購物車</button>
                                <button class="btn btn-default" name="button" @click="deleteAll">清空購物車</button>
                            </div>
                            <p data-title="小計">
                                商品小計 : NT$
                                <span>
                                    {{amount}}
                                </span>
                            </p>
                            <p data-title="總計">
                                訂單總金額 : NT$
                                <span>
                                    {{numberFormat(amountNum, 0, '.', ',')}}
                                </span>
                            </p>
                        </li>
                    </form> -->
=======
>>>>>>> 9e45f88f253a09ef5ee3eba299de900836d7d4e3
                </ul>
            </div>
            <br>
        </div>
        <div class="col-md-12">
            <div class="cart-sidebar">
                <div class="cart_totals calculated_shipping">

                    <!-- <table cellspacing="0" class="cart-list">
                        <thead>
                            <tr>
                                <th class="product-name" colspan="2" style="border-width:3px;">購物車總計</th>
                            </tr>
                        </thead>
                    </table> -->

                    <form class="" action="/checkout/billing" method="post">
                        <input type="hidden" name="_token" v-bind:value="token">
                        <!-- <table cellspacing="0" class="shop_table shop_table_responsive cart-list">
                            <tbody>
                                <tr class="cart-subtotal">
                                    <th>小計</th>
                                    <td data-title="小計"><span><span>NT$</span> {{amount}}</span>
                                    </td>
                                </tr>
                                <tr class="shipping">
                                    <th>運送方式</th>
                                    <td data-title="運送方式 1">
                                        <ul id="shipping_method">
                                            <li v-for="(item, index) in methodsTranslate" v-bind:key="index">
                                                <input type="radio" name="shipping_method" v-bind:id="item.id" v-bind:value="item.id" class="shipping_method" v-model="choosedShipping" required>
                                                <label
                                                    v-if="item.freeShipping && (amountNum >= item.freeShippingMininum)"
                                                    v-bind:for="item.id">{{item.shippingTitle}}: 滿額免運</label>
                                                <label
                                                    v-else
                                                    v-bind:for="item.id">{{item.shippingTitle}}: <span><span>NT$</span>{{item.shippingPrice}}</span></label>
                                                <div v-if="amount < item.freeShippingMininum && choosedShipping === item.id">
                                                    購物滿 {{item.freeShippingMininum}} 元即可享有免運費的優惠唷！
                                                </div>
                                            </li>
                                        </ul>
                                    </td>
                                </tr>
                                <tr class="order-total">
                                    <th>總計</th>
                                    <td data-title="總計"><strong><span><span>NT$</span> </span></strong> {{totalAmount}}</td>
                                </tr>
                            </tbody>
                        </table> -->
                        <div class="nextBtn">
                            <button type="submit">
                                送出，前往下一步
                            </button>
                        </div>
                        <!-- <div>
                            <button type="submit" class="btn btn-primary btn-block check-btn">前往結帳</button>
                        </div> -->
                    </form>

                </div>
            </div>
        </div>
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
                token: $('meta[name="csrf-token"]').attr('content'),
                cart: [],
                isLoaded: false,
                choosedShipping: null,
                shippingMethods: [],
                amount: null,
                isDirty: false,
                isCartEmpty: true
            }
        },
        watch: {
            cart: {
                handler: function (cart, oldVal) {
                    var self = this;
                    this.isDirty = true;
                },
                deep: true
            },
            choosedShipping: {
                handler: function (choosedShipping, oldVal) {
                    localStorage.setItem('choosedShipping', choosedShipping);
                },
                deep: true
            },
            shippingMethods: {
                handler(shippingMethods, oldVal) {
                    if (shippingMethods.length > 0) {
                        this.choosedShipping = shippingMethods[0].id
                    }
                }
            }
        },
        computed: {
            amountNum: function () {
                if (this.amount == null) {
                    return 0;
                } else {
                    var amount = this.amount.split(',');
                    var amountNum = '';

                    for (var i = 0; i < amount.length; i++) {
                        amountNum = amountNum + amount[i];
                    }

                    return parseInt(amountNum);
                }

            },
            totalAmount: function () {
                if (this.amount) {
                    var self = this;
                    var totalAmount = 0;
                    var amount = this.amount.split(',');
                    var amountNum = '';

                    for (var i = 0; i < amount.length; i++) {
                        amountNum = amountNum + amount[i];
                    }

                    this.shippingMethods.forEach(function (item) {
                        if (item.id == self.choosedShipping) {
                            if ((item.freeShipping == '1') && (amountNum >= parseInt(item.freeShippingMininum))) {
                                totalAmount = parseInt(amountNum);
                            } else {
                                totalAmount = parseInt(amountNum) + parseInt(item.shippingPrice);
                            }

                        }
                    });

                    return totalAmount;
                }

                return this.amount;
            },
            methodsTranslate: function () {
                var shippingMethods = this.shippingMethods;
                var cache = [];

                shippingMethods.forEach(function (item) {
                    cache.push({
                        freeShipping: (item.freeShipping == 1) ? true : false,
                        freeShippingMininum: item.freeShippingMininum,
                        id: item.id,
                        shippingPrice: item.shippingPrice,
                        shippingTemperature: item.shippingTemperature,
                        shippingTitle: item.shippingTitle,
                        shippingType: item.shippingType
                    });
                });
                return cache;
            }
        },
        created: function () {
            var self = this;

            var getShippingMethodPromise = new Promise(function (resolve, reject) {
                $.ajax({
                    url: '/shipping/get',
                    type: 'GET',
                    cache: false,
                    dataType: 'json',
                })
                .done(function(response) {
                    resolve(response.data);
                })
                .fail(function(error) {
                    reject(error);
                });

            });

            var checkCartTempPromise = new Promise(function (resolve, reject) {
                $.ajax({
                    url: '/cart/checkTemp',
                    type: 'GET',
                    cache: false,
                    dataType: 'json'
                })
                .done(function(response) {
                    resolve(response);
                })
                .fail(function(error) {
                    reject(error);
                });

            });

            Promise.all([
                getShippingMethodPromise,
                checkCartTempPromise
            ]).then(function (results) {

                results[0].forEach(function (item) {
                    if (item.shippingTemperature === results[1].Temperature) {
                        self.shippingMethods.push(item);
                    }
                });

            });


            this.getCart();
        },
        methods: {
            updateCart: function () {
                var self = this;

                $('.loading-bar').fadeIn('100');

                $.ajax({
                    url: '/cart/update',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        cart: JSON.stringify(self.cart)
                    },
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }

                })
                .done(function(response) {
                    self.getCart();
                    self.showMessage('success', '更新購物車成功');
                    $('.loading-bar').fadeOut('100');
                    // console.log(response);
                })
                .fail(function() {
                    // console.log("error");
                })
                .always(function() {
                    // console.log("complete");
                });

            },
            getCart: function () {
                var self = this;
                $('.loading-bar').fadeIn('100');

                $.ajax({
                    url: '/cart/get',
                    type: 'GET',
                    dataType: 'json'
                })
                .done(function(response) {
                    self.cart = [];
                    self.cart = response.cart;
                    self.amount = response.amount;
                    localStorage.removeItem('cartAmount');
                    localStorage.cartAmount = response.amount;
                    var amount = localStorage.cartAmount;
                    console.log(amount)
                    setTimeout(function () {
                        self.isDirty = false;
                    }, 100);

                    if (response.cart.length === 0) {
                        $('button.cart').removeClass('full');
                        self.isCartEmpty = true;
                        $('button.cart').find('img').attr('src', '/img/icon/cart-empty.svg');
                    } else {
                        self.isCartEmpty = false;
                        $('button.cart').find('img').attr('src', '/img/icon/cart-full.svg');
                    }

                    self.isLoaded = true
                })
                .fail(function() {
                    // console.log("error");
                })
                .always(function() {
                    $('.loading-bar').fadeOut('100');
                    // console.log("complete");
                });

            },
            deleteProduct: function (item) {
                var check = confirm('確認要刪除此商品?');
                var self = this;

                if (check) {
                    $('.loading-bar').fadeIn('100');
                    $.ajax({
                        url: '/cart/delete/single/' + item.rowId,
                        type: 'POST',
                        dataType: 'json',
                        beforeSend: function(xhr) {
                            xhr.setRequestHeader('X-CSRF-TOKEN', token);
                        }
                    })
                    .done(function(response) {
                        self.getCart();
                    })
                    .fail(function() {
                        // console.log("error");
                    })
                    .always(function() {
                        $('.loading-bar').fadeOut('100');
                        // console.log("complete");
                    });

                } else {
                    return;
                }
            },
            deleteAll: function () {
                var check = confirm('確認要刪除所有商品?');
                var self = this;

                if (check) {
                    $('.loading-bar').fadeIn('100');
                    $.ajax({
                        url: '/cart/delete/all',
                        type: 'GET',
                        dataType: 'json',
                    })
                    .done(function(response) {
                        self.getCart();
                        window.updateCount();
                    })
                    .fail(function() {
                    })
                    .always(function() {
                        $('.loading-bar').fadeOut('100');
                        window.updateCount();
                        self.getCart();
                    });

                } else {
                    return;
                }
            },
            changeQty: function (method, item) {
                if (method == 'up') {
                    item.qty = parseInt(item.qty) + 1;
                } else {
                    if (!(item.qty <= 0)) {
                        item.qty = parseInt(item.qty) - 1;
                    }
                }
            },
            productLink: function (guid) {
                return "/detail/" + guid;
            },
            showMessage: function (type, string) {
                toastr[type](string);
            },
            numberFormat(n, c, d, t) {
                return h.number_format(n, c, d, t)
            },
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
            @include flex-mix(center, center);
            padding: 40px 15px;
            list-style: none;
            border-bottom: solid 1px rgba(0, 0, 0, 0.1);
            p {
                text-align: center;
                margin-bottom: 0;
                font-size: 16px;
                img {
                    max-width: 80px;
                }
                &:nth-child(1) {
                    width: 30%;
                    span {
                        float: left;
                        margin-left: 5px;
                        margin: 10px;
                    }
                }
                &:nth-child(2), &:nth-child(3), &:nth-child(4), &:nth-child(5) {
                    width: 16%;
                    margin-top: 15px;
                }
                &:nth-child(6) {
                    width: 5%;
                    margin-top: 10px;
                    img {
                        width: 70%;
                        height: auto;
                        cursor: pointer;
                        transition: 0.3s;
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
 



@media screen and (max-width: 991px) {
    .cart-list{
        overflow: auto;
        ul {
            min-width: 70rem;
            li {
                p {
                    text-align: center;
                    margin-bottom: 0;
                    font-size: 16px;
                    img {
                        max-width: 80px;
                    }
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

