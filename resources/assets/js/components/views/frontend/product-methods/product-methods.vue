<template>
    <div v-if="!isLoaded" class="stage-loading">
        <img src="/img/icon/default-loading.svg" alt="">
    </div>
    <div v-else>
        <div v-if="chossedSub && (productType == 'variable')">
            <strong v-if="choosedSubItem">貨號：{{choosedSubItem.subSerialNumber}}</strong>
            <br v-if="choosedSubItem">
            <strong v-if="choosedSubItem" :class="{ 'del-line': choosedSubItem.subDiscountPrice }">建議售價：<span style="color: red">{{numberFormat(choosedSubItem.subPrice, 0, '.', ',')}}元</span></strong>
            <strong v-if="choosedSubItem && choosedSubItem.subDiscountPrice" style="font-size: 20px;">特價：<span style="color: red">{{numberFormat(choosedSubItem.subDiscountPrice, 0, '.', ',')}}元</span></strong>
        </div>
        <div v-else>
            <strong v-if="serialNumber">貨號：{{serialNumber}}</strong>
            <br v-if="chossedSub">
            <strong v-if="price" :class="{ 'del-line': discountedPrice }">建議售價：<span style="color: red">{{numberFormat(price, 0, '.', ',')}}元</span></strong>
            <strong v-if="discountedPrice && discountedPrice" style="font-size: 20px;">特價：<span style="color: red">{{numberFormat(discountedPrice, 0, '.', ',')}}元</span></strong>
        </div>
        <!-- <br> -->
        <div class="option-group" v-if="productType == 'variable'" >
            <div class="option-item" 
                :class="{active: item.id == chossedSub}"
                v-for="(item, index) in subProducts" 
                :key="index"
                @click="chossedSub = item.id">
                {{item.subTitle}}
            </div>
        </div>

        <el-radio-group 
            v-if="false" 
            @change="selectSub"
            v-model="chossedSub" 
            size="medium">
            <el-radio 
                border 
                v-for="(item, index) in subProducts" :key="index"
                :label="item.id">{{item.subTitle}}</el-radio>
        </el-radio-group>
        <hr v-if="productType == 'variable' && chossedSub">
        <el-input-number 
            v-if="productType == 'simple' && maxQty > 0" 
            v-model="qty" size="small" 
            :min="minQty" :max="maxQty" 
            label="請選擇數量"></el-input-number>
        <strong v-if="productType == 'simple' && maxQty < 1" ><span style="color: red">缺貨中</span></strong>
        <el-input-number 
            v-if="productType == 'variable' && choosedSubItem && parseInt(choosedSubItem.subQuantity) > 0" 
            v-model="subQuantity" 
            size="small" 
            :min="1" :max="parseInt(choosedSubItem.subQuantity)" 
            label="請選擇數量"></el-input-number>
        <strong v-if="productType == 'variable' && choosedSubItem && parseInt(choosedSubItem.subQuantity) < 1" ><span style="color: red">缺貨中</span></strong>
        <button
            v-if="productType == 'variable' && choosedSubItem && parseInt(choosedSubItem.subQuantity) > 0" 
            class="add-to-cart" @click="addToCart()">
            加入購物車
        </button>
        <button v-if="productType == 'simple' && maxQty > 0" 
            class="add-to-cart" @click="addToCart()">
            加入購物車
        </button>
    </div>
</template>

<script>
    var h = require('../../../lib/helper.js', ).default;
    import {
        Dialog,
        InputNumber,
        Radio,
        Message,
        RadioGroup,
    } from 'element-ui';
    import 'element-ui/lib/theme-chalk/index.css';
    import lang from 'element-ui/lib/locale/lang/zh-TW'
    import locale from 'element-ui/lib/locale'

    Vue.use(Dialog);
    Vue.use(InputNumber);
    Vue.use(Radio);
    Vue.use(RadioGroup);
    Vue.use(Message);
    locale.use(lang)

    export default {
        mounted () {
            console.log('Component mounted.')
        },
        props: [
            'guid'
        ],
        data () {
            return {
                isLoaded: false,
                minQty: 1,
                maxQty: 20,
                serialNumber: null,
                price: null,
                discountedPrice: null,
                qty: 1,
                subQuantity: 1,
                productType: 'simple',
                subProducts: [],
                chossedSub: null,
                choosedSubItem: null
            }
        },
        created() {
            this.getProduct()
        },
        watch:{
            choosedSubItem: {
                handler(choosedSubItem, oldVal) {
                    if (choosedSubItem) {
                        if (this.subQuantity > parseInt(this.choosedSubItem.subQuantity)) {
                            this.subQuantity = parseInt(this.choosedSubItem.subQuantity)
                        }
                    }
                    
                }
            },
            chossedSub(val) {
                this.selectSub(val)
            }
        },
        methods: {
            getProduct() {
                let self = this

                axios.get(`/products/get/${this.guid}`)
                    .then(res => {
                        let product = res.data.data

                        self.productType = product.productType

                        if (product.productType == "variable") {
                            self.getSubProducts()
                        } else {
                            self.isLoaded = true
                            self.maxQty = product.quantity
                            self.price = product.price
                            self.discountedPrice = product.discountedPrice
                            self.serialNumber = product.serialNumber
                        }

                    }).catch(err => {

                    })
            },
            getSubProducts() {
                let self = this;
                axios.get(`/products/get/sub/${this.guid}`)
                    .then(res => {
                        self.subProducts = res.data
                        self.isLoaded = true
                    }).catch(err => {
                        self.$message.error('Get Subproduct failed.')
                    })
            },
            addToCart() {
                let self = this;
                axios.post('/checkAuth')
                    .then(res => {          
                        if (res.data.auth) {
                            if (this.productType == 'simple') {
                                this.addSimple()
                            } else {
                                this.addVariable()
                            }
                        } else {
                            alert('請先登入!')
                            window.location.href = '/login'
                        }
                    })
            },
            addSimple() {
                let self = this
                axios.post(`/cart/add/${this.guid}`, {
                    quantity: self.qty
                }).then(res => {
                    console.log(res)
                    self.$message.success('成功加入購物車！');
                    $('.shopping-Cart-Icon').click();
                    deleteFavorite(this.guid);
                    window.updateCount();
                }).catch(err => {
                    self.$message.error('加入購物車失敗...')
                    console.log(err)
                }).then(arg => {
                    window.updateCount()
                })
            },
            addVariable() {
                let self = this
                let choosed = {
                    id: this.choosedSubItem.id,
                    title: this.choosedSubItem.subTitle,
                    subPrice: parseInt(this.choosedSubItem.subPrice),
                    subDiscountPrice: this.choosedSubItem.subDiscountPrice ? parseInt(this.choosedSubItem.subDiscountPrice) : 0,
                    qty: this.subQuantity,
                    subSerialNumber: this.choosedSubItem.subSerialNumber
                }
                axios.post(`/cart/add/sub/${this.guid}`, choosed)
                    .then(res => {
                        self.$message.success('成功加入購物車！');
                        $('.shopping-Cart-Icon').click();
                        deleteFavorite(this.guid);
                        window.updateCount();
                    }).catch(err => {
                        self.$message.error('加入購物車失敗...')
                        console.log(err)
                    }).then(arg => {
                        window.updateCount()
                    })
            },
            selectSub(arg) {
                let self = this
                let choosed = _.find(this.subProducts, elm => {
                    return elm.id == arg
                })

                this.choosedSubItem = choosed
            },
            numberFormat(n, c, d, t) {
                return h.number_format(n, c, d, t)
            }
        }
    }
</script>
<style lang="scss">
    // #1B99AE
    .el-radio__input.is-checked .el-radio__inner {
        border-color: #1B99AE;
        background: #1B99AE;
    }
    .el-radio__input.is-checked+.el-radio__label {
        color: #1B99AE;
    }
    .el-radio.is-bordered.is-checked {
        border-color: #1B99AE;
    }
    .del-line {
        text-decoration: line-through;
    }
    .stage-loading {
        text-align: center;
    }
</style>
