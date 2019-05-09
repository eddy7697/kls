<template>
    <div class="row coupon-add" v-if="isLoaded">
        <form v-on:submit.prevent="saveCoupon">
            <div class="col-md-9">
                <input type="text" class="form-control ch-product-title" name="title" value="" placeholder="優惠券序號" v-model="couponContent.serialNumber" required>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            優惠券資訊
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="tabbable ch-tab" id="tabs-865853">
                            <ul class="nav nav-tabs" v-if="false">
                                <li class="active">
                                    <a href="#panel-119853" data-toggle="tab">一般設定</a>
                                </li>
                                <li>
                                    <a href="#panel-971686" data-toggle="tab">使用限制</a>
                                </li>
                            </ul>
                            <div class="tab-content ch-tab-content">
                                <div class="tab-pane active" id="panel-119853">
                                    <table class="table field-table">
                                        <tr v-if="false">
                                            <td width="130"><label>折扣種類</label></td>
                                            <td>
                                                <select class="form-control" v-model="couponContent.discountType">
                                                    <!-- <option value="percentage">百分比折扣</option>
                                                    <option value="cartDiscount">固定的訂單折扣</option> -->
                                                    <option value="productDiscount">固定的商品折扣</option>
                                                </select>
                                            </td>
                                        </tr>
                                        <tr v-if="couponContent.discountType == 'productDiscount'">
                                            <td>指定折扣商品</td>
                                            <td>
                                                <div class="row" v-if="selectedProductItem.productTitle">
                                                    <div class="col-md-12" style="text-align: center">
                                                        <img style="width: 300px" :src="selectedProductItem.featureImage" alt="">
                                                    </div>
                                                    <div class="col-md-12" style="text-align: center">
                                                        <h3>{{selectedProductItem.productTitle}}</h3>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <a class="btn btn-primary" @click="dialogVisible = true">搜尋商品</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>指定會員</td>
                                            <td>
                                                <div class="row" v-if="selectedUserItem.guid">
                                                    <div class="col-md-12" style="text-align: center">
                                                        <h3>{{selectedUserItem.name}}</h3>
                                                    </div>
                                                    
                                                    
                                                </div>
                                                <a class="btn btn-primary" @click="dialogUserVisible = true">搜尋會員</a>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td><label>優惠券金額</label></td>
                                            <td><input class="form-control" type="number" v-model="couponContent.couponAmount"></td>
                                        </tr>
                                        <!-- <tr>
                                            <td><label>允許免運費</label></td>
                                            <td><input type="checkbox" v-model="couponContent.freeShipping" ></td>
                                        </tr> -->
                                        <tr>
                                            <td><label>每張優惠券的使用上限</label></td>
                                            <td><input placeholder="無使用限制" class="form-control" type="number" min="0" v-model="couponContent.usageLimit"></td>
                                        </tr>
                                        <tr>
                                            <td><label>最低消費</label></td>
                                            <td><input placeholder="無最低消費" class="form-control" type="number" v-model="couponContent.minimumAmount"></td>
                                        </tr>
                                    </table>
                                </div>
                                <div class="tab-pane" id="panel-971686">
                                    <table class="table field-table">
                                        <tr>
                                            <td><label>最低消費</label></td>
                                            <td><input placeholder="無最低消費" class="form-control" type="number" v-model="couponContent.minimumAmount"></td>
                                        </tr>
                                        <tr>
                                            <td><label>最高消費</label></td>
                                            <td><input placeholder="無最高消費" class="form-control" type="number" v-model="couponContent.maximumAmount"></td>
                                        </tr>
                                        <!-- <tr>
                                            <td><label>限單獨使用</label></td>
                                            <td><input type="checkbox" v-model="couponContent.individualUse"></td>
                                        </tr> -->
                                        <!-- <tr>
                                            <td><label>每張優惠券的使用上限</label></td>
                                            <td><input placeholder="無使用限制" class="form-control" type="number" v-model="couponContent.usageLimit"></td>
                                        </tr> -->
                                        <!-- <tr>
                                            <td><label>每一使用者的使用上限</label></td>
                                            <td><input placeholder="無使用限制" class="form-control" type="number" v-model="couponContent.usageLimitPerUser"></td>
                                        </tr> -->
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" v-if="false">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            說明 (可選)
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ckeditor
                            class="ch-product-description"
                            :config="ckConfig"
                            v-model="couponContent.content">
                        </ckeditor>
                    </div>
                </div>
            </div>

            <div class="col-md-3">
                <div class="panel-group" id="panel-77874">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                發表
                            </h3>
                        </div>
                        <div class="panel-body" v-if="false">
                            <div class="tabbable" id="tabs-464193">
                                <ul class="nav nav-tabs ch-tab">
                                    <li class="active">
                                        <a href="#panel-44467" data-toggle="tab">發布排程</a>
                                    </li>
                                </ul>
                                <div class="tab-content ch-tab-content">
                                    <div class="tab-pane active" id="panel-44467">
                                        <table width="100%">
                                            <tr>
                                                <td>
                                                    <label for="isPublish">發佈狀態</label>
                                                </td>
                                                <td align="right">
                                                    <toggle-button v-model="couponContent.isPublish"/>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="datetime">發布時間</label></td>
                                                <td width="30" align="right">
                                                    <i  class="fa fa-times"
                                                        aria-hidden="true"
                                                        @click="couponContent.schedulePost = null"
                                                        v-if="couponContent.schedulePost != null"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <date-picker
                                                        v-model="couponContent.schedulePost"
                                                        placeholder="選擇優惠券啟用時間"
                                                        :config="config">
                                                    </date-picker>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td><label for="schedule-down">下線時間</label></td>
                                                <td align="right">
                                                    <i  class="fa fa-times"
                                                        aria-hidden="true"
                                                        @click="couponContent.scheduleDelete = null"
                                                        v-if="couponContent.scheduleDelete != null"></i>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td colspan="2">
                                                    <date-picker
                                                        v-model="couponContent.scheduleDelete"
                                                        placeholder="選擇優惠券到期時間"
                                                        :config="scheduleDeleteConfig">
                                                    </date-picker>
                                                </td>
                                            </tr>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button v-if="isDirty" type="submit" class="btn btn-primary btn-sm btn-block" name="button">發布優惠券</button>
                            <button v-else type="button" class="btn btn-primary btn-sm btn-block" name="button" disabled>發布優惠券</button>
                        </div>
                    </div>
                </div>

            </div>
        </form>
        
        <el-dialog
            title="選擇商品"
            :visible.sync="dialogVisible"
            width="600px"
            :before-close="handleClose">
            <form v-on:submit.prevent="searchProduct">
                <input class="form-control" v-model="keyword" placeholder="請輸入商品名稱" required/>
                
            </form>
            <div class="selected-product-list">
                <label v-for="(item, index) in productData.data" :key="index">
                    <input type="radio" name="selectedProduct" :value="item.productGuid" v-model="selectedProduct"> {{item.productTitle}}
                </label>
            </div>
            <span v-if="true" slot="footer" class="dialog-footer">
                <el-button @click="dialogVisible = false">關閉視窗</el-button>
                <el-button type="primary" @click="selectPtoduct">選擇商品</el-button>
            </span>
        </el-dialog>
        <el-dialog
            title="選擇會員"
            :visible.sync="dialogUserVisible"
            width="600px"
            :before-close="handleUserClose">
            <form v-on:submit.prevent="searchUser">
                <input class="form-control" v-model="userkeyword" placeholder="請輸入關鍵字(姓名、電子郵件)" required/>
                
            </form>
            <div class="selected-product-list">
                <label v-for="(item, index) in userData.data" :key="index">
                    <input type="radio" name="selectedUser" :value="item.guid" v-model="selectedUser"> {{item.name}} &nbsp;&nbsp;{{item.email}}
                </label>
            </div>
            <span v-if="true" slot="footer" class="dialog-footer">
                <el-button @click="dialogUserVisible = false">關閉視窗</el-button>
                <el-button type="primary" @click="selectUser">選擇會員</el-button>
            </span>
        </el-dialog>

    </div>
</template>

<script>
    import Ckeditor from 'vue-ckeditor2';
    import datePicker from 'vue-bootstrap-datetimepicker';
    import ToggleButton from 'vue-js-toggle-button';
    import ElementUI from 'element-ui';
    import 'element-ui/lib/theme-chalk/index.css';
    import lang from 'element-ui/lib/locale/lang/zh-TW'
    import locale from 'element-ui/lib/locale'

    Vue.use(ElementUI);
    locale.use(lang)

    Vue.use(ToggleButton);

    export default {
        components: {
            Ckeditor,
            datePicker
        },
        data() {
            return {
                dialogVisible: false,
                dialogUserVisible: false,
                isLoaded: true,
                isDirty: false,
                keyword: null,
                userkeyword: null,
                urlPath: '',
                isEdit: $('.mode').val() === 'edit' ? true : false,
                guid: $('.guid').val(),
                selectedProduct: null,
                selectedProductItem: {},
                selectedUser: null,
                selectedUserItem: {},
                productData: {},
                userData: {},
                couponContent: {
                    serialNumber: null,
                    content: null,
                    isPublish: true,
                    schedulePost: null,
                    scheduleDelete: null,
                    discountType: 'productDiscount',
                    couponAmount: 0,
                    freeShipping: false,
                    minimumAmount: null,
                    maximumAmount: null,
                    individualUse: false,
                    selectedProduct: null,
                    selectedUser: null,
                    usageLimit: null,
                    usageLimitPerUser: null
                },
                ckConfig: {
                    height: 200,
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=',
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token='
                },
                config: {
                    minDate: moment()
                },
                token: $('meta[name="csrf-token"]').attr('content'),
            }
        },
        watch: {
            couponContent: {
                handler: function (couponContent, oldVal) {
                    var self = this;

                    this.isDirty = true;
                },
                deep: true
            },
            selectedProductItem(val) {
                if (val.productGuid) {
                    this.couponContent.selectedProduct = val.productGuid
                } else {
                    this.couponContent.selectedProduct = null
                }
            },
            selectedUserItem(val) {
                if (val.guid) {
                    this.couponContent.selectedUser = val.guid
                } else {
                    this.couponContent.selectedUser = null
                }
            }
        },
        created: function () {
            $('.loading-bar').fadeOut('100');

            if (this.isEdit) {
                this.getCoupon();
            }
        },
        computed: {
            schedulePostDate: function () {
                if (this.couponContent.schedulePost) {
                    return moment(this.couponContent.schedulePost).format();
                } else {
                    return null;
                }
            },
            scheduleDeleteDate: function () {
                if (this.couponContent.scheduleDelete) {
                    return moment(this.couponContent.scheduleDelete).format();
                } else {
                    return null;
                }
            },
            scheduleDeleteConfig: function functionName() {
                if (this.schedulePostDate) {
                    return {
                        minDate: moment(this.schedulePostDate)
                    }
                } else {
                    return {
                        minDate: moment()
                    }
                }
            },
        },
        methods: {
            checkExist: function () {
                var self = this;
                var token = this.token;

                return new Promise(function (resolve, reject) {
                    $.ajax({
                        url: '/admin/business/coupon/exist/' + self.couponContent.serialNumber,
                        type: 'GET',
                        dataType: 'json'
                    })
                    .done(function(result) {
                        resolve(result.data);
                    })
                    .fail(function(xhr) {
                        reject(xhr);
                    })
                    .always(function() {
                    });
                });

            },
            saveCoupon: function () {
                var self = this;
                var token = this.token;
                var check = false;

                this.checkExist().then(function (value) {
                    console.log(value);
                })

                $.ajax({
                    url: self.isEdit ? '/admin/business/coupon/update/' + self.guid : '/admin/business/coupon/add',
                    type: 'POST',
                    dataType: 'json',
                    data: {
                        serialNumber: self.couponContent.serialNumber,
                        content: self.couponContent.content,
                        isPublish: self.couponContent.isPublish ? 1 : 0,
                        schedulePost: self.schedulePostDate,
                        scheduleDelete: self.scheduleDeleteDate,
                        discountType: self.couponContent.discountType,
                        couponAmount: self.couponContent.couponAmount,
                        freeShipping: self.couponContent.freeShipping ? 1 : 0,
                        minimumAmount: self.couponContent.minimumAmount,
                        maximumAmount: self.couponContent.maximumAmount,
                        individualUse: self.couponContent.individualUse ? 1 : 0,
                        selectedProduct: self.couponContent.selectedProduct,
                        selectedUser: self.couponContent.selectedUser,
                        usageLimit: self.couponContent.usageLimit,
                        usageLimitPerUser: self.couponContent.usageLimitPerUser
                    },
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                })
                .done(function(result) {
                    self.showMessage('success', '儲存成功')
                    setTimeout(() => {
                        window.location.href="/cyberholic-system/business/coupon";
                    }, 500);
                    // window.location.href="/cyberholic-system/business/coupon";
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
            },
            getCoupon: function () {
                var self = this;

                $.ajax({
                    url: '/admin/business/coupon/get/' + this.guid,
                    type: 'GET',
                    dataType: 'json'
                })
                .done(function(result) {

                    self.couponContent.serialNumber = result.serialNumber;
                    self.couponContent.content = result.content;
                    self.couponContent.isPublish = result.isPublish === 1 ? true : false;
                    self.couponContent.schedulePost = result.schedulePost;
                    self.couponContent.scheduleDelete = result.scheduleDelete;
                    self.couponContent.discountType = result.discountType;
                    self.couponContent.couponAmount = result.couponAmount;
                    self.couponContent.freeShipping = result.freeShipping === 1 ? true : false;
                    self.couponContent.minimumAmount = result.minimumAmount;
                    self.couponContent.maximumAmount = result.maximumAmount;
                    self.couponContent.individualUse = result.individualUse === 1 ? true : false;
                    self.couponContent.usageLimit = result.usageLimit;
                    self.couponContent.usageLimitPerUser = result.usageLimitPerUser;

                    this.isDirty = false;

                    axios.get(`/admin/product/get/${result.selectedProduct}`)
                        .then(res => {
                            // console.log(res)
                            
                            self.selectedProductItem = res.data
                        })

                    axios.get(`/admin/normal/get/${result.selectedUser}`)
                        .then(res => {
                            // console.log(res)
                            
                            self.selectedUserItem = res.data
                        })
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });

            },
            searchProduct(e) {
                console.log(e)

                this.urlPath = `/admin/product/search/${this.keyword}`

                axios.get(this.urlPath, {
                    params: {
                        flag: 'id',
                        order: 'desc'
                    }
                }).then(result => {
                    var productData = result.data;

                    this.productData = productData
                    $('.loading-bar').fadeOut('100');
                }).catch(err => {
                    console.log(err)
                }).then(arg => {
                    self.listLoading = false
                })
            },
            selectPtoduct() {
                this.selectedProductItem = _.find(this.productData.data, ['productGuid', this.selectedProduct])

                this.handleClose()
            },
            searchUser(e) {
                console.log(e)


                axios.post(`/admin/normal/search/${this.userkeyword}`, {
                    flag: 'id',
                    order: 'desc'
                }).then(result => {
                    var userData = result.data;

                    this.userData = userData
                    $('.loading-bar').fadeOut('100');
                }).catch(err => {
                    console.log(err)
                }).then(arg => {
                    self.listLoading = false
                })
            },
            selectUser() {
                this.selectedUserItem = _.find(this.userData.data, ['guid', this.selectedUser])

                this.handleUserClose()
            },
            handleClose() {
                this.dialogVisible = false
            },
            handleUserClose() {
                this.dialogUserVisible = false
            },
            showMessage: function (type, string) {
                toastr[type](string);
            }
        }
    }
</script>

<style lang="scss">
.selected-product-list {
    label {
        width: 100%;
        margin: 8px 0;
        padding: 10px;
        border: #eee solid thin;
    }
}
</style>