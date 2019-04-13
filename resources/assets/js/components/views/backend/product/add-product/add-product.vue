<template>
    <div class="row" v-if="isLoaded">
        <form v-on:submit.prevent="saveProduct()">
            <div class="col-md-9">
                <input type="text" class="form-control ch-product-title" name="title" value="" placeholder="商品名稱" v-model="productContent.productTitle" required>
                <!-- <div class="form-group">
                    <label for="">{{currentPath}}//product/detail/</label>
                    <input type="text" class="form-control" placeholder="" v-model="productContent.customPath" style="width: fit-content; display:inline-block">
                </div> -->
                <ckeditor
                    class="ch-product-description"
                    :config="ckConfig"
                    v-model="productContent.productDescription">
                </ckeditor>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            商品資訊 - 
                            <select class="form-control product-type-field" v-model="productContent.productType" @change="switchType()">
                                <option value="simple">一般商品</option>
                                <option value="variable">多規格商品</option>
                            </select>
                            <el-dialog title="新增商品規格" :visible.sync="showSwitchTips">
                                <div>建立多規格商品時，將會預先儲存商品。</div>
                                <br>
                                <el-checkbox label="以後不再顯示" name="type" v-model="noShow"></el-checkbox>
                                <div slot="footer" class="dialog-footer">
                                    <el-button type="primary" @click="checkToolTip()">確定</el-button>
                                </div>
                            </el-dialog>
                        </h3>
                    </div>
                    <div class="panel-body">
                        <div class="tabbable ch-tab" id="tabs-865853">
                            <ul class="nav nav-tabs">
                                <li class="active">
                                    <a href="#panel-817886" data-toggle="tab">庫存管理</a>
                                </li>
                                <!-- <li>
                                    <a href="#panel-691273" data-toggle="tab">商品細節</a>
                                </li> -->
                                <li>
                                    <a href="#panel-119853" data-toggle="tab">SEO 設定</a>
                                </li>
                            </ul>
                            <div class="tab-content ch-tab-content">
                                <div class="tab-pane active" id="panel-817886">
                                    <div v-if="productContent.productType == 'variable'">
                                        <el-collapse accordion v-if="productContent.subProduct.length > 0">
                                            <el-collapse-item v-for="(item, index) in productContent.subProduct" :key="index" :title="`${item.subTitle}`" :name="index">
                                                <el-form :model="item" :ref="`subProduct-${item.subProductGuid}`">
                                                    <el-form-item label="規格名稱" :label-width="'120px'">
                                                        <el-input v-model="item.subTitle" autocomplete="on"></el-input>
                                                    </el-form-item>
                                                    <el-form-item label="貨號" :label-width="'120px'">
                                                        <el-input v-model="item.subSerialNumber" autocomplete="off"></el-input>
                                                    </el-form-item>
                                                    <el-form-item label="庫存" :label-width="'120px'">
                                                        <el-input-number v-model="item.subQuantity" :min="0" label="庫存"></el-input-number>
                                                    </el-form-item>
                                                    <el-form-item label="價格" :label-width="'120px'">
                                                        <el-input v-model="item.subPrice" autocomplete="off"></el-input>
                                                    </el-form-item>
                                                    <el-form-item label="促銷價" :label-width="'120px'">
                                                        <el-input v-model="item.subDiscountPrice" autocomplete="off"></el-input>
                                                    </el-form-item>
                                                    <el-form-item label="選擇顏色" :label-width="'120px'">
                                                        <el-input style="display: none" v-model="item.cf_1" autocomplete="off"></el-input>
                                                        <el-color-picker v-model="item.cf_1"></el-color-picker>
                                                    </el-form-item>
                                                    <el-form-item label="子商品圖片" :label-width="'120px'">
                                                        <el-button v-if="!item.subFeatureImage" icon="el-icon-picture-outline" type="primary" plain circle @click="editSubProductImage(item)"></el-button>
                                                        <img v-else :src="item.subFeatureImage" width="50%" @click="editSubProductImage(item)">
                                                        <el-input style="display: none" v-model="item.subFeatureImage" autocomplete="off"></el-input>
                                                    </el-form-item>
                                                    <el-form-item align="right">                                                        
                                                        <el-button type="danger" @click="deleteSubProduct(item.subProductGuid)">刪除</el-button>
                                                        <el-button type="primary" @click="saveSubProduct(`subProduct-${item.subProductGuid}`)">儲存</el-button>
                                                    </el-form-item>
                                                </el-form>
                                                
                                            </el-collapse-item>
                                        </el-collapse>
                                        <el-dialog title="新增商品規格" :visible.sync="subproductFormVisible">
                                            <el-form :model="subProductForm" ref="subProductForm">
                                                <el-form-item label="規格名稱" :label-width="'120px'">
                                                    <el-input v-model="subProductForm.subTitle" autocomplete="on"></el-input>
                                                </el-form-item>
                                                <el-form-item label="貨號" :label-width="'120px'">
                                                    <el-input v-model="subProductForm.subSerialNumber" autocomplete="off"></el-input>
                                                </el-form-item>
                                                <el-form-item label="庫存" :label-width="'120px'">
                                                    <el-input-number v-model="subProductForm.subQuantity" :min="0" label="庫存"></el-input-number>
                                                </el-form-item>
                                                <el-form-item label="價格" :label-width="'120px'">
                                                    <el-input v-model="subProductForm.subPrice" autocomplete="off"></el-input>
                                                </el-form-item>
                                                <el-form-item label="促銷價" :label-width="'120px'">
                                                    <el-input v-model="subProductForm.subDiscountPrice" autocomplete="off"></el-input>
                                                </el-form-item>
                                                <el-form-item label="選擇顏色" :label-width="'120px'">
                                                    <el-input style="display:none" v-model="subProductForm.cf_1" autocomplete="off"></el-input>
                                                    <el-color-picker v-model="subProductForm.cf_1"></el-color-picker>
                                                </el-form-item>
                                                <el-form-item label="子商品圖片" :label-width="'120px'">
                                                    <img v-if="subProductForm.subFeatureImage" :src="subProductForm.subFeatureImage" width="50%" alt="" @click="addSubProductImage()">
                                                    <el-button v-else icon="el-icon-picture-outline" type="primary" plain circle @click="addSubProductImage()"></el-button>
                                                    <el-input style="display: none" v-model="subProductForm.subFeatureImage" autocomplete="off"></el-input>
                                                </el-form-item>
                                            </el-form>
                                            <div slot="footer" class="dialog-footer">
                                                <el-button @click="subproductFormVisible = false">取消</el-button>
                                                <el-button type="primary" @click="addSubProduct()">確定</el-button>
                                            </div>
                                        </el-dialog>
                                        <button class="btn btn-default btn-block" type="submit" @click="isSubmit = false">新增商品規格&nbsp;<i class="el-icon-plus"></i></button>
                                    </div>
                                    <table class="table field-table" v-if="productContent.productType == 'simple'">
                                        <tr>
                                            <td width="130"><label for="serialNumber">貨號</label></td>
                                            <td><input class="form-control" type="text" name="serialNumber" v-model="productContent.serialNumber"></td>
                                        </tr>
                                        <tr>
                                            <td><label for="reserveStatus">庫存管理</label></td>
                                            <td>
                                                <el-switch
                                                    v-model="productContent.reserveStatus"
                                                    active-color="#13ce66"
                                                    inactive-color="#ff4949">
                                                </el-switch>
                                            </td>
                                        </tr>
                                        <tr v-if="productContent.reserveStatus">
                                            <!-- <td><label>庫存狀態</label></td> -->
                                            <!-- <td>
                                                <select class="form-control" v-model="productContent.productStatus">
                                                    <option value="instock">尚有庫存</option>
                                                    <option value="outofstock">缺貨</option>
                                                </select>
                                            </td> -->
                                        </tr>
                                        <tr v-if="productContent.reserveStatus">
                                            <td><label>商品數量</label></td>
                                            <td><input type="number" class="form-control" v-model="productContent.quantity" required></td>
                                        </tr>
                                        <!-- <tr>
                                            <td>
                                                <label for="">貨運溫層</label>
                                            </td>
                                            <td>
                                                <div class="form-group">
                                                    <input type="radio" id="room" name="Temperature" value="room" v-model="productContent.Temperature">
                                                    <label for="room">常溫配送</label>
                                                </div>
                                                <div class="form-group">
                                                    <input type="radio" id="refrigeration" name="Temperature" value="refrigeration" v-model="productContent.Temperature">
                                                    <label for="refrigeration">冷藏配送</label>
                                                </div>
                                            </td>
                                        </tr> -->
                                    </table>
                                </div>
                                <!-- <div class="tab-pane" id="panel-691273">
                                    <table class="table field-table">
                                        <tr>
                                            <td width="130">
                                                <label>重量 (kg)</label>
                                            </td>
                                            <td>
                                                <input class="form-control" type="number" name="" value="">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td width="130">
                                                <label>尺寸 (cm)</label>
                                            </td>
                                            <td>
                                                <input style="float: left; width: 32%" placeholder="長度" class="form-control" type="number" v-model="productContent.productInformation.size.productLength">
                                                <input style="float: left; width: 32%; margin-left: 2%" placeholder="寬度" class="form-control" type="number" v-model="productContent.productInformation.size.productWidth">
                                                <input style="float: left; width: 32%; margin-left: 2%" placeholder="高度" class="form-control" type="number" v-model="productContent.productInformation.size.productHeight">
                                            </td>
                                        </tr>
                                    </table>
                                </div> -->
                                <div class="tab-pane" id="panel-119853">
                                    <table class="table field-table">
                                        <tr>
                                            <td width="130">
                                                <label for="seoTitle">網站標題</label>
                                            </td>
                                            <td>
                                                <input type="text" name="seoTitle" class="form-control" v-model="productContent.seoTitle">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="seoKeyword">關鍵字 (*以 , 分隔)</label>
                                            </td>
                                            <td>
                                                <input type="text" name="seoKeyword" class="form-control" v-model="productContent.seoKeyword">
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label>社群圖片</label>
                                            </td>
                                            <td>
                                                <button class="btn btn-primary" type="button" v-if="(productContent.socialImage === null) || (productContent.socialImage === '')" @click="addSeoImage()">
                                                    <i class="fa fa-plus" aria-hidden="true"></i>
                                                </button>
                                                <div v-else class="ch-social-image">
                                                    <img v-bind:src="productContent.socialImage" width="50%">
                                                    <button type="button" class="btn btn-primary" @click="addSeoImage()"><i class="fa fa-pencil" aria-hidden="true"></i></button>
                                                    <button type="button" class="btn btn-danger" @click="productContent.socialImage = null"><i class="fa fa-times" aria-hidden="true"></i></button>
                                                </div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                                <label for="seoDescription">社群描述</label>
                                            </td>
                                            <td>
                                                <textarea type="text" name="seoDescription" class="form-control" style="resize: vertical;" v-model="productContent.seoDescription"></textarea>
                                            </td>
                                        </tr>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="panel panel-default" v-if="productContent.productCategory == 'R6CsjurBbInEEE2hYnnnCGcYZzW6mtTH1rzDdBZV5V'">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            商品標籤
                        </h3>
                    </div>
                    <div class="panel-body">
                        <table class="table field-table">
                            <tr v-for="(item, index) in Object.keys(tagLabel)" :key="index">
                                <td width="130">
                                    <label :for="`tab-${item}`">{{tagLabel[item]}}</label>
                                </td>
                                <td>
                                    <select class="form-control" :name="`tab-${item}`" :id="`tab-${item}`" v-model="selectedTag[item]" placeholder="choose" required>
                                        <option :value="null">-- 請選擇一項標籤 --</option>
                                        <option :value="tag" v-for="(tag, tagIndex) in tagGroup[item]" :key="tagIndex">{{tag}}</option>
                                    </select>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            商品簡述
                        </h3>
                    </div>
                    <div class="panel-body">
                        <ckeditor
                            class="ch-product-description"
                            :config="ckConfig"
                            v-model="productContent.shortDescription">
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
                        <div class="panel-body">
                            <div class="tabbable" id="tabs-464193">
                                <label for="price">原價 NT$:</label>
                                <input type="number" class="form-control" name="price" v-model="productContent.price" required>
                                <label for="discountedPrice">會員優惠 NT$:</label>
                                <input type="number" class="form-control" name="discountedPrice" v-model="productContent.discountedPrice">
                        
                            </div>
                        </div>
                        <div class="panel-footer">
                            <button v-if="isDirty" type="submit" class="btn btn-primary btn-sm btn-block" @click="isSubmit = true">
                                <span v-if="isEdit">儲存編輯</span>
                                <span v-else>發布商品</span>
                            </button>
                            <button v-else type="button" class="btn btn-primary btn-sm btn-block" name="button" disabled>
                                <span v-if="isEdit">儲存編輯</span>
                                <span v-else>發布商品</span>
                            </button>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                上架狀態
                            </h3>
                        </div>
                        <div class="panel-body">
                            <table width="100%">
                                <tr>
                                    <td><label>發佈狀態</label></td>
                                    <td>
                                        <el-switch
                                            v-model="productContent.isPublish"
                                            active-color="#13ce66"
                                            inactive-color="#ff4949">
                                        </el-switch>
                                        <!-- <toggle-button v-model="productContent.isPublish"/> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="datetime">上架時間</label></td>
                                    <td width="30" align="right">
                                        <i  class="fa fa-times"
                                            aria-hidden="true"
                                            @click="productContent.schedulePost = null"
                                            v-if="productContent.schedulePost != null"></i>
                                    </td>
                                </tr>
                                <tr>
                                    <td colspan="2">
                                        <!-- <dateTimePick /> -->
                                        <el-date-picker
                                            v-model="productContent.schedulePost"
                                            type="datetime"
                                            placeholder="選擇商品上架時間">
                                        </el-date-picker>
                                        <!-- <date-picker
                                            v-model="productContent.schedulePost"
                                            placeholder="選擇商品上架時間"
                                            :config="config">
                                        </date-picker> -->
                                    </td>
                                </tr>
                                <tr>
                                    <td><label for="schedule-down">下架時間</label></td>
                                    <td align="right">
                                        <i  class="fa fa-times"
                                            aria-hidden="true"
                                            @click="productContent.scheduleDelete = null"
                                            v-if="productContent.scheduleDelete != null"></i>
                                    </td>
                                </tr>
                                <td>

                                </td>
                                <tr>
                                    <td colspan="2">
                                        <el-date-picker
                                            v-model="productContent.scheduleDelete"
                                            type="datetime"
                                            placeholder="選擇商品下架時間">
                                        </el-date-picker>
                                        <!-- <date-picker
                                            v-model="productContent.scheduleDelete"
                                            placeholder="選擇商品下架時間"
                                            :config="scheduleDeleteConfig">
                                        </date-picker> -->
                                    </td>
                                </tr>
                            </table>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                類別選擇
                            </h3>
                        </div>
                        <div class="panel-body">
                            <select class="form-control" v-model="productContent.productCategory">
                                <option value="null">--不指定--</option>
                                <option v-for="item in categories" v-bind:key="item.guid" v-bind:value="item.guid">{{item.name}}</option>
                            </select>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                商品圖片
                            </h3>
                        </div>
                        <div class="panel-body">
                            <a v-if="productContent.featureImage === null" @click="selectFeatureImg()">設定商品圖片</a>
                            <div v-else class="">
                                <img id="featurePreview" style="width: 100%" v-bind:src="thumb(productContent.featureImage)" @click="selectFeatureImg()">
                                <p>點選圖片以編輯或更新</p>
                                <a @click="deleteFeatureImg()">刪除商品圖片</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title">
                                商品圖庫
                            </h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div
                                    class="col-md-6 pruduct-image"
                                    v-bind:key="item.guid"
                                    v-for="(item, index) in productContent.album">
                                    <img v-bind:src="thumb(item.imageUrl)" width="100%">
                                    <button class="btn btn-danger remove-pruduct-image" @click="productContent.album.splice(index, 1)">
                                        <i class="fa fa-times" aria-hidden="true"></i>
                                    </button>
                                </div>
                                <div class="col-md-12">
                                    <a @click="addImage()">新增商品圖庫圖片</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </form>
        

    </div>
</template>

<script>
    import Ckeditor from 'vue-ckeditor2';
    import ElementUI from 'element-ui';
    import 'element-ui/lib/theme-chalk/index.css';
    import lang from 'element-ui/lib/locale/lang/zh-TW'
    import locale from 'element-ui/lib/locale'

    var dateTimePick = require('../../../../common/dateTimePick.vue');

    Vue.use(ElementUI);
    locale.use(lang)

    export default {
        components: {
            Ckeditor,
            dateTimePick
        },
        data() {
            return {
                tagGroup: {
                    brand: null,
                    size: null,
                    trip: null,
                    price: null,
                    material: null
                },
                tagLabel: {
                    brand: '品牌 Brand',
                    size: '尺寸 Size',
                    trip: '旅程 Trip',
                    price: '價格 Price',
                    material: '材質 Material'
                },
                selectedTag: {
                    brand: null,
                    size: null,
                    trip: null,
                    price: null,
                    material: null
                },
                isLoaded: false,
                isEdit: false,
                guid: $('#row-guid').val(),
                currentPath: window.location.origin,
                productContent: {
                    Temperature: 'room',
                    productTitle: null,
                    serialNumber: null,
                    productDescription: null,
                    shortDescription: null,
                    price: null,
                    isPublish: true,
                    quantity: null,
                    discountedPrice: null,
                    customPath: 'null',
                    schedulePost: null,
                    scheduleDelete: null,
                    productStatus: 'instock',
                    socialImage: null,
                    seoTitle: null,
                    seoDescription: null,
                    seoKeyword: null,
                    command: '',
                    productInformation: {
                        weight: null,
                        size: {
                            productLength: null,
                            productWidth: null,
                            productHeight: null
                        }
                    },
                    reserveStatus: true,
                    productType: 'simple',
                    featureImage: null,
                    productCategory: 'null',
                    album: [],
                    subProduct: []
                },
                subProductForm: {
                    subTitle: null,
                    subSerialNumber: null,
                    subQuantity: null,
                    subPrice: null,
                    subDiscountPrice: null,
                    subFeatureImage: null,
                    cf_1: null
                },
                isSubmit: false,
                noShow: false,
                showSwitchTips: false,
                subproductFormVisible: false,
                ckConfig: {
                    height: 300,
                    allowedContent: true,
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=' + $('meta[name="csrf-token"]').attr('content'),
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=' + $('meta[name="csrf-token"]').attr('content')
                },
                categories:[],
                config: {
                    minDate: moment()
                },
                isDirty: false,
                token: $('meta[name="csrf-token"]').attr('content'),
            }
        },
        beforeCreate() {

        },
        created() {
            if (this.guid) {
                this.getProduct();
                this.isEdit = true;
            } else {
                this.isLoaded = true;

            }
            this.getCategories()
            this.getTag()

            $('.loading-bar').fadeOut('100');
        },
        watch: {
            productContent: {
                handler(productContent, oldVal) {
                    var self = this;

                    this.isDirty = true;
                },
                deep: true
            },
            selectedTag: {
                handler(val, oldVal) {
                    let selected = {}

                    Object.keys(val).forEach(elm => {
                        if (typeof(val[elm]) == 'string') {
                            selected[elm] = val[elm]                            
                        } else {
                            selected[elm] = null
                        }
                    })

                    this.productContent.command = JSON.stringify(selected)
                },
                deep: true
            }
        },
        computed: {
            schedulePostDate() {
                if (this.productContent.schedulePost) {
                    return moment(this.productContent.schedulePost).format();
                } else {
                    return null;
                }
            },
            scheduleDeleteDate() {
                if (this.productContent.scheduleDelete) {
                    return moment(this.productContent.scheduleDelete).format();
                } else {
                    return null;
                }
            },
            scheduleDeleteConfigfunctionName() {
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
            checkTitle() {
                var checkTitle;

                if (this.productContent.productTitle === null) {
                    this.showMessage('warning', '商品名稱不能為空。');
                    return checkTitle = false;
                } else {
                    return checkTitle = true;
                }
            },
            checkPrice() {
                var checkPrice;

                if (parseInt(this.productContent.discountedPrice) > parseInt(this.productContent.price)) {
                    this.showMessage('warning', '促銷價不能高於實際售價。');
                    return checkPrice = false;
                } else {
                    return checkPrice = true;
                }
            },
            checkTime() {
                if (this.productContent.schedulePost && this.productContent.scheduleDelete) {
                    var schedulePost = this.productContent.schedulePost._d.getTime();
                    var scheduleDelete = this.productContent.scheduleDelete.getTime();

                    if (schedulePost > scheduleDelete) {
                        return false;
                    } else {
                        return true;
                    }
                } else {
                    return true;
                }

            },
            isAllowToSave() {
                return this.checkTitle && this.checkPrice && this.checkTime;
            }
        },
        methods: {
            thumb(url) {
                var urlArray = url.split('/');
                var newUrl = urlArray[0];

                for (var i = 1; i < (urlArray.length - 1); i++) {
                    newUrl = newUrl + '/' + urlArray[i];
                }

                newUrl = newUrl + '/thumbs/' + urlArray[urlArray.length - 1];

                return newUrl;
            },
            selectFeatureImg() {
                var self = this;

                window.open('/laravel-filemanager' + '?type=Images', 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    self.productContent.featureImage = file_path;
                };
            },
            deleteFeatureImg() {
                this.productContent.featureImage = null;
            },
            addImage() {
                var self = this;

                window.open('/laravel-filemanager' + '?type=Images', 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    self.productContent.album.push({
                        imageUrl: file_path
                    });
                };
            },
            addSeoImage() {
                var self = this;

                window.open('/laravel-filemanager' + '?type=Images', 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    self.productContent.socialImage = file_path;
                };
            },
            addSubProductImage() {
                var self = this;

                window.open('/laravel-filemanager' + '?type=Images', 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    self.subProductForm.subFeatureImage = file_path;
                };
            },
            editSubProductImage(item) {
                var self = this;

                window.open('/laravel-filemanager' + '?type=Images', 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    item.subFeatureImage = file_path;
                };
            },
            saveProduct() {
                var self = this;
                var token = this.token;
                var schedulePost;
                var scheduleDelete;

                if (this.isEdit && !this.isSubmit) {
                    self.openSubProductModal()
                    return
                }



                // if (!this.productContent.customPath) {
                //     this.productContent.customPath = this.clearString(this.productContent.productTitle);
                // }

                this.checkPathExist()
                    .then(function (isPath) {
                        console.log(isPath);
                        if (true) {
                            if (self.isAllowToSave) {
                                $.ajax({
                                    url: self.isEdit ? '/admin/product/edit/' + self.guid : '/admin/product/add',
                                    type: 'POST',
                                    cache: false,
                                    dataType: 'json',
                                    data: {
                                        productTitle: self.productContent.productTitle,
                                        productDescription: self.productContent.productDescription,
                                        shortDescription: self.productContent.shortDescription,
                                        serialNumber: self.productContent.serialNumber,
                                        quantity: self.productContent.quantity,
                                        productCategory: self.productContent.productCategory,
                                        price: self.productContent.price,
                                        Temperature: self.productContent.Temperature,
                                        isPublish: self.productContent.isPublish,
                                        customPath: self.productContent.customPath,
                                        reserveStatus: self.productContent.reserveStatus,
                                        productType: self.productContent.productType,
                                        discountedPrice: self.productContent.discountedPrice,
                                        socialImage: self.productContent.socialImage,
                                        seoTitle: self.productContent.seoTitle,
                                        seoDescription: self.productContent.seoDescription,
                                        seoKeyword: self.productContent.seoKeyword,
                                        featureImage: self.productContent.featureImage,
                                        command: self.productContent.command,
                                        productInformation: JSON.stringify(self.productContent.productInformation),
                                        album: JSON.stringify(self.productContent.album),
                                        productStatus: self.productContent.productStatus,
                                        schedulePost: self.schedulePostDate,
                                        scheduleDelete: self.scheduleDeleteDate
                                    },
                                    beforeSend: function(xhr) {
                                        xhr.setRequestHeader('X-CSRF-TOKEN', token);
                                    }
                                })
                                .done(function(result) {
                                    if (self.isSubmit) {
                                        self.showMessage('success', '商品儲存成功')
                                        setTimeout(() => {
                                            window.location.href="/cyberholic-system/product/list";
                                        }, 1500)
                                    } else {
                                        self.isEdit = true
                                        self.guid = result.data.productGuid
                                        self.openSubProductModal()
                                    }
                                    
                                })
                                .fail(function() {
                                    console.log("error");
                                })
                                .always(function() {
                                    console.log("complete");
                                });
                            } else {
                                console.log('not allow');
                            }
                        } else {
                            self.showMessage('warning', '自定義路徑已經存在，請使用其他路徑');
                        }
                    });
            },
            getSubProduct() {
                var self = this;

                axios.get(`/admin/product/sub/get/${this.guid}`)
                    .then(res => {
                        self.productContent.subProduct = res.data.data
                    })
            },
            getTag() {
                axios.get('/admin/tag/get')
                    .then(res => {
                        Object.keys(res.data).forEach(elm => {
                            this.tagGroup[elm] = res.data[elm]
                        })
                    })
            },
            getProduct() {
                var self = this;

                this.getSubProduct()

                $.ajax({
                    url: '/admin/product/get/' + this.guid,
                    type: 'GET',
                    cache: false
                })
                .done(function(result) {
                    self.productContent.productTitle = result.productTitle;
                    self.productContent.serialNumber = result.serialNumber;
                    self.productContent.price = result.price;
                    self.productContent.discountedPrice = result.discountedPrice;
                    self.productContent.productCategory = result.productCategory;
                    self.productContent.featureImage = result.featureImage;
                    self.productContent.album = JSON.parse(result.album);
                    self.productContent.productDescription = result.productDescription;
                    self.productContent.shortDescription = result.shortDescription;
                    self.productContent.customPath = result.customPath;
                    self.productContent.productStatus = result.productStatus;
                    self.productContent.Temperature = result.Temperature;
                    self.productContent.reserveStatus = Boolean(result.reserveStatus);
                    self.productContent.isPublish = Boolean(result.isPublish);
                    self.productContent.productType = result.productType;
                    self.productContent.quantity = result.quantity;
                    self.productContent.seoKeyword = result.seoKeyword;
                    self.productContent.seoTitle = result.seoTitle;
                    self.productContent.productInformation = JSON.parse(result.productInformation);
                    self.productContent.seoDescription = result.seoDescription;
                    self.productContent.socialImage = result.socialImage;
                    self.productContent.schedulePost = (result.schedulePost != null) ? moment(result.schedulePost) : null;
                    self.productContent.scheduleDelete = (result.scheduleDelete != null) ? moment(result.scheduleDelete) : null;
                    self.selectedTag = JSON.parse(result.command)
                    

                    self.config = {
                        minDate: (result.schedulePost != null) ? moment(result.schedulePost) : null
                    }
                    self.isLoaded = true;
                    setTimeout(function () {
                        self.isDirty = false;
                    }, 50);
                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });
            },
            openSubProductModal() {
                this.subproductFormVisible = true

                this.subProductForm = {
                    subTitle: null,
                    subSerialNumber: null,
                    subQuantity: null,
                    subPrice: null,
                    subDiscountPrice: null,
                    subFeatureImage: null,
                    cf_1: null
                }
            },
            saveSubProduct(form) {
                let self = this
                let model = this.$refs[form][0].model

                $('.loading-bar').show()
                axios.post(`/admin/product/sub/update/${model.subProductGuid}`, model)
                    .then(res => {
                        self.$message.success('編輯子商品成功')
                    }).catch(err => {
                        self.$message.error('編輯子商品失敗')
                    }).then(arg => {
                        self.getSubProduct()
                        $('.loading-bar').hide()
                    })
            },
            deleteSubProduct(guid) {
                let self = this

                this.$confirm('此操作將會永久刪除子商品, 是否繼續?', '提示', {
                    confirmButtonText: '確定',
                    cancelButtonText: '取消',
                    type: 'warning',
                    center: true
                }).then(() => {
                    $('.loading-bar').show()
                    axios.post(`/admin/product/sub/delete/${guid}`)
                        .then(res => {
                            self.$message.success('刪除子商品成功')
                        }).catch(err => {
                            self.$message.error('刪除子商品失敗')
                        }).then(arg => {
                            self.getSubProduct()
                            $('.loading-bar').hide()
                        })
                }).catch(() => {
                    console.log(guid)
                });

                
            },
            addSubProduct() {
                let self = this

                this.subProductForm.productParent = this.guid

                axios.post('/admin/product/sub/add', this.subProductForm)
                    .then(res => {
                        self.$message
                        self.$message({
                            message: '建立子商品成功',
                            type: 'success'
                        });
                        self.getSubProduct()
                    }).catch(err => {
                        self.$message.error('建立子商品失敗');
                    }).then(arg => {
                        self.subproductFormVisible = false
                    })
            },
            checkPathExist() {
                var self = this;

                return new Promise(function (resolve, reject) {
                    resolve(true)
                    // $.ajax({
                    //     url: '/admin/product/checkPathExist/' + self.productContent.customPath,
                    //     type: 'GET',
                    //     dataType: 'json'
                    // })
                    // .done(function(response) {
                    //     resolve(true);
                    // })
                    // .fail(function(xhr) {
                    //     console.log(xhr.status);
                    //     if (xhr.status === 431) {
                    //         resolve(false);
                    //     } else {
                    //         reject(xhr);
                    //     }
                    // });
                });

            },
            switchType() {
                if (this.productContent.productType == 'variable') {
                    if (!localStorage.switchProductType) {
                        this.showSwitchTips = true
                    }
                }                
            },
            checkToolTip() {
                if (this.noShow) {
                    localStorage.setItem('switchProductType', 'checked')
                }
                this.showSwitchTips = false
            },
            getCategories() {
                var self = this;
                var token = this.token;

                $.ajax({
                    url: '/admin/category/get',
                    type: 'POST',
                    cache: false,
                    data: {
                        type: 'product'
                    },
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                })
                .done(function(result) {
                    self.categories = [];
                    console.log(result)
                    result.forEach(function(item) {
                        self.categories.push({
                            'name': item.categoryTitle,
                            'guid': item.categoryGuid
                        }); 
                    });

                })
                .fail(function() {
                    console.log("error");
                })
                .always(function() {
                    console.log("complete");
                });

            },
            clearString(s) {
                var pattern = new RegExp("[`~!@#$^&*()=|{}':;',\\[\\].<>/?~！@#￥……&*（）&;|{}【】‘；：”“'。，、？]")
                var rs = "";

                for (var i = 0; i < s.length; i++) {
                    rs = rs+s.substr(i, 1).replace(pattern, '');
                }

                return rs;
            },
            showMessage(type, string) {
                toastr[type](string);
            }
        }
    }
</script>

<style>
.el-date-editor.el-input, .el-date-editor.el-input__inner {
    width: 100%;
    margin-bottom: 5px;
}

.el-date-picker__editor-wrap .el-time-panel {
    left: -20px;
}
</style>
