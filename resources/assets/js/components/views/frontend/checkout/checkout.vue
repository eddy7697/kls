<template>
    <div class="row">
        <form v-on:submit.prevent="createOrder">
            <div class="cart_info">
                <h3>
                    訂購資訊
                </h3>
                <hr>
                <div class="table_col">
                    <table>
                        <tbody>
                            <tr v-if="useUserInfo">
                                <td class="cart_info_title">
                                    收件人姓名
                                    <strong v-if="!formValidation.ReceiverName" style="color: #600000">&nbsp;&nbsp;此欄位為必填 *</strong>
                                </td>
                                <td>
                                    <input type="text" id="shipping-name" placeholder="" v-model="customerParametor.ReceiverName" required>
                                    <input type="radio" name="sex" v-model="customerParametor.ReceiverGender" id="male" required>
                                    <label for="male">先生</label>
                                    <input type="radio" name="sex" v-model="customerParametor.ReceiverGender" id="female" required>
                                    <label for="female">小姐</label>
                                </td>
                            </tr>
                            <tr v-else>
                                <td class="cart_info_title">
                                    收件人姓名
                                    <strong v-if="!formValidation.ReceiverName" style="color: #600000">&nbsp;&nbsp;此欄位為必填 *</strong>
                                </td>
                                <td>
                                    <input type="text" id="shipping-name" placeholder="" v-model="customerParametorForShipping.ReceiverName" required>
                                    <input type="radio" name="sex" v-model="customerParametorForShipping.ReceiverGender" id="male" value="male" required>
                                    <label for="male">先生</label>
                                    <input type="radio" name="sex" v-model="customerParametorForShipping.ReceiverGender" id="female" value="female" required>
                                    <label for="female">小姐</label>
                                </td>
                            </tr>

                            <tr v-if="useUserInfo">
                                <td class="cart_info_title">
                                    聯絡電話
                                    <strong v-if="!formValidation.ReceiverCellPhone" style="color: #600000">&nbsp;&nbsp;此欄位為必填 *</strong>
                                </td>
                                <td>
                                    <input type="tel" id="shipping-phone" placeholder="" v-model="customerParametor.ReceiverCellPhone" required>
                                    <span>
                                        請依照格式填寫，如 : 06-231766
                                    </span>
                                </td>
                            </tr>
                            <tr v-else>
                                <td class="cart_info_title">
                                    聯絡電話
                                    <strong v-if="!formValidation.ReceiverCellPhone" style="color: #600000">&nbsp;&nbsp;此欄位為必填 *</strong>
                                </td>
                                <td>
                                    <input type="tel" id="shipping-phone" placeholder="" v-model="customerParametorForShipping.ReceiverCellPhone" required>
                                    <span>
                                        請依照格式填寫，如 : 06-231766
                                    </span>
                                </td>
                            </tr>

                            <tr v-if="useUserInfo">
                                <td class="cart_info_title">
                                    電子郵件
                                    <strong v-if="!formValidation.ReceiverEmail" style="color: #600000">&nbsp;&nbsp;此欄位為必填 *</strong>
                                </td>
                                <td>
                                     <input type="email" id="shipping-email" placeholder="" v-model="customerParametor.ReceiverEmail" required>
                                    <span>
                                        請依照格式填寫，如 : a12345@gmail.com
                                    </span>
                                </td>
                            </tr>
                            <tr v-else>
                                <td class="cart_info_title">
                                    電子郵件
                                    <strong v-if="!formValidation.ReceiverEmail" style="color: #600000">&nbsp;&nbsp;此欄位為必填 *</strong>
                                </td>
                                <td>
                                     <input type="email" id="shipping-email" placeholder="" v-model="customerParametorForShipping.ReceiverEmail" required>
                                    <span>
                                        請依照格式填寫，如 : a12345@gmail.com
                                    </span>
                                </td>
                            </tr>

                            <tr v-if="shippingMethod == 'delivery' && useUserInfo">
                                <td class="cart_info_title">
                                    配送地址
                                </td>
                                <td>
                                    <span role="tw-city-selector"></span>
                                    <input class="tw-address" type="text" id="shipping-city" placeholder="" v-model="customerParametor.ReceiverAddress" required>
                                    <strong v-if="!formValidation.ReceiverAddress" style="color: #600000">&nbsp;&nbsp;此欄位為必填 *</strong>
                                </td>
                            </tr>

                            <tr v-if="shippingMethod == 'delivery' && !useUserInfo">
                                <td class="cart_info_title">
                                    配送地址
                                </td>
                                <td>
                                    <span role="tw-city-selector"></span>
                                    <input class="tw-address" type="text" id="shipping-city" placeholder="" v-model="customerParametorForShipping.ReceiverAddress" required>
                                    <strong v-if="!formValidation.ReceiverAddres" style="color: #600000">&nbsp;&nbsp;此欄位為必填 *</strong>
                                </td>
                            </tr>

                            <tr>
                                <td class="cart_info_title">
                                    購物方式
                                </td>
                                <td>
                                    <input type="radio" name="paymentMethod" v-model="paymentMethod" value="Remit" id="remit" required>
                                    <label for="remit">轉帳付款</label>
                                    <input type="radio" name="paymentMethod" v-model="paymentMethod" value="cod" id="cod" required>
                                    <label for="cod">宅配貨到付款</label>
                                </td>
                            </tr>

                            <tr>
                                <td class="cart_info_title">
                                    發票開立方式
                                </td>
                                <td>
                                    <input type="radio" name="invoice" v-model="customerParametorForShipping.receipt" value="donation" id="donation" required>
                                    <label for="donation">捐贈發票</label>
                                    <input type="radio" name="invoice" v-model="customerParametorForShipping.receipt" value="twoWay" id="two-way" required>
                                    <label for="two-way">二聯式電子發票</label>
                                    <input type="radio" name="invoice" v-model="customerParametorForShipping.receipt" value="threeWay" id="three-way" required>
                                    <label for="three-way">三聯式發票</label>
                                </td>
                            </tr>

                            <tr class="invoice-title-td" v-if="customerParametorForShipping.receipt == 'threeWay'">
                                <td class="cart_info_title">
                                    發票抬頭
                                </td>
                                <td>
                                    <input class="invoice-title" type="text" id="invoice-title" placeholder="" v-model="customerParametorForShipping.invoiceTitle" required>
                                </td>
                            </tr>
                            
                            <tr class="GUI-number-td" v-if="customerParametorForShipping.receipt == 'threeWay'">
                                <td class="cart_info_title">
                                    統一編號
                                </td>
                                <td>
                                    <input class="GUI-number" type="text" id="GUI-number" placeholder="" pattern='[0-9]{8}' v-model="customerParametorForShipping.taxId" required>
                                </td>
                            </tr>

                            <tr class="cart_info_text">
                                <td class="cart_info_title">
                                    備註事項
                                </td>
                                <td >
                                    <textarea cols="30" rows="10" v-model="customerParametorForShipping.remarks"></textarea>
                                </td>
                            </tr>
                            <tr class="cart_info_text">
                                <td class="cart_info_title">
                                    優惠券代碼
                                </td>
                                <td >
                                    <input type="text" placeholder="請輸入優惠券代碼"  v-model="coupon">
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="remind">
                <p>
                    我們不會將您輸入的任何個人信息用於回答查詢以外的目的。此外，我們將根據<a target="_blank" href="https://law.moj.gov.tw/LawClass/LawSingle.aspx?pcode=I0050021&flno=6">個人資料保護法第六條</a>，妥善管理您的個人信息，   
                </p>
                <p>
                    您亦可點擊這裡查看更多關於KLS提供的<a target="_blank" href="/about/privacy">隱私權保護政策</a>。 
                </p>
                <p>
                    <a>*</a>請您務必將KLS的電子郵件地址或域名設置為可接收的電子郵件，以免錯過我們的回覆，您亦可直接與我們聯繫 (<a target="_blank" href="/contact">點擊這裡查看聯絡訊息</a>)。
                </p>
            </div>
            <div class="nextBtn">
                <button type="submit" v-if="shippingMethod !== 'cvs'" >
                    提交訂單
                </button>
            </div>
        </form>

    </div>
</template>

<script>
    $('.loading-bar').fadeOut('500');
    export default {
        data() {
            return {
                token: $('meta[name="csrf-token"]').attr('content'),
                // shippingMethod: $('#shipping_method').val(),
                // shippingCosts: 60,
                amount: null,
                // amountString: null,
                // shippingTag: $('#shipping_method').val(),
                paymentMethod: 'Remit',
                point: null,
                useUserInfo: true,
                dontUseUserInfo: false,
                percentage: 0,
                pointUsage: 0,
                owner: null,
                isCouponFieldShow: false,
                isCouponUse: false,
                discountType: '',
                couponAmount: null,
                Temperature: null,
                coupon: null,
                cart: [],
                couponNumber: '',
                shippingMethods: [],
                customerParametor: {
                    ReceiverName: '',
                    ReceiverGender: null,
                    ReceiverCellPhone: '',
                    ReceiverEmail: '',
                    ReceiverCity: '',
                    ReceiverPort: '',
                    ReceiverAddress: '',
                    remarks: '',
                    newMemberPassword: '',
                    receipt: '',
                    taxId: ''
                },
                customerParametorForShipping: {
                    ReceiverName: '',
                    ReceiverCellPhone: '',
                    ReceiverGender: null,
                    ReceiverEmail: '',
                    ReceiverCity: '',
                    ReceiverPort: '',
                    ReceiverAddress: '',
                    remarks: '',
                    newMemberPassword: '',
                    receipt: '',
                    taxId: '',
                    invoiceTitle: '',
                },
                formValidation: {
                    ReceiverName: true,
                    ReceiverCellPhone: true,
                    ReceiverEmail: true,
                    ReceiverPort: true,
                    ReceiverCity: true,
                    ReceiverAddress: true
                },
                cvsParametor: {
                    MerchantTradeNo: null,
                    LogisticsSubType: '',
                    CVSStoreID: '',
                    CVSStoreName: null,
                    CVSAddress: null,
                    CVSTelephone: null
                },
                usedCouponContent: {
					discountType: 'NONE',
					couponAmount: 0
				},
                isAuth: false,
                isAllow: false,
                addNewMember: false
            }
        },
        created: function () {
            var self = this;
            var token = this.token;
            var checkAuthPromise = new Promise(function (resolve, reject) {
                $.ajax({
                    url: '/checkAuth',
                    type: 'POST',
                    cache: false,
                    beforeSend: function(xhr) {
                        xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                })
                .done(function(response) {
                    resolve(response);
                })
                .fail(function(error) {
                    reject(error);
                });
            });

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

            var getCartContentPromise = new Promise(function (resolve, reject) {
                $.ajax({
                    url: '/cart/get',
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
                checkAuthPromise,
                getShippingMethodPromise,
                getCartContentPromise,
                checkCartTempPromise
            ]).then(function (results) {
                var authStatus = results[0];
                var shippingMethods = results[1];
                var cartContent = results[2];
                var cartTemp = results[3];
                // 確認登入狀態
                self.isAuth = authStatus.auth;

                if (authStatus.auth) {
                    self.getPoint();
                } else {
                    self.point = 0;
                    self.owner = 'guest';
                }

                // 區分訂單溫層
                self.Temperature = cartTemp.Temperature;

                shippingMethods.forEach(function (item) {
                    if (item.shippingTemperature === cartTemp.Temperature) {
                        self.shippingMethods.push(item);
                    }
                });

                self.amount = parseInt(cartContent.amount.replace(/,/g, ''));
                // self.amountString = cartContent.amount;

                if (cartContent.cart.length === 0) {
                    window.location.href = '/';
                }

                cartContent.cart.forEach(function (item) {
                    self.cart.push({
                        id: item.id,
                        Name: item.id.title,
                        price: item.price,
                        qty: item.qty,
                        rowId: item.rowId,
                        total: item.total
                    });
                });

                if (typeof(localStorage.logistic_cache) === 'undefined') {
                    console.log('no set');
                } else {
                    // 寫入暫存的超商資訊，帶訂單送出後，移除暫存
                    var cvs = JSON.parse(localStorage.logistic_cache);
                    var shop;

                    switch (cvs.LogisticsSubType) {
                        case 'FAMIC2C':
                            shop = '全家店到店 - ';
                            break;
                        case 'UNIMARTC2C':
                            shop = '7-11 店到店 - ';
                            break;
                        case 'HILIFEC2C':
                            shop = '萊爾富店到店 - ';
                            break;
                        default:

                    }
                    self.cvsParametor.MerchantTradeNo = cvs.MerchantTradeNo;
                    self.cvsParametor.LogisticsSubType = cvs.LogisticsSubType;
                    self.cvsParametor.CVSStoreID = cvs.CVSStoreID;
                    self.cvsParametor.CVSStoreName = shop + cvs.CVSStoreName;
                    self.cvsParametor.CVSAddress = cvs.CVSAddress;
                    self.cvsParametor.CVSTelephone = cvs.CVSTelephone;
                }

            });
        },
        watch: {
            dontUseUserInfo: {
                handler(dontUseUserInfo, oldVal) {
                    this.useUserInfo = !dontUseUserInfo
                }
            },
            useUserInfo: {
                handler(useUserInfo, oldVal) {
                    this.dontUseUserInfo = !useUserInfo
                }
            }
        },
        computed: {
            shippingCosts: function () {
                var self = this;

                var shippingPrice = 0;

                this.methodsTranslate.forEach(function (item) {
                    if (self.shippingTag == item.id) {
                        if (item.freeShipping && (self.amount >= item.freeShippingMininum)) {
                            // console.log(item);
                            shippingPrice = 0;
                        } else {
                            shippingPrice = item.shippingPrice;
                        }
                    }
                });

                return shippingPrice;
            },
            shippingMethod: function () {
                var self = this;

                var shippingMethod = 'delivery';

                this.shippingMethods.forEach(function (item) {
                    if (self.shippingTag == item.id) {
                        shippingMethod = item.shippingType;
                    }
                });

                return shippingMethod;
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
            },
            finalAmount: function () {
                var isCouponUse = this.isCouponUse;
                var discountType = this.discountType;
                var couponAmount = this.couponAmount;
                var amount;

                if (isCouponUse) {
                    switch (discountType) {
                        case 'percentage':
                            amount = this.amount - (this.amount / couponAmount);
                            localStorage.removeItem('cartAmount');
                            localStorage.cartAmount = amount;
                            break;
                        case 'cartDiscount':
                            amount = this.amount - couponAmount;
                            localStorage.removeItem('cartAmount');
                            localStorage.cartAmount = amount;
                            break;
                        case 'productDiscount':
                            amount = this.amount - couponAmount;    
                            localStorage.removeItem('cartAmount');
                            localStorage.cartAmount = amount;                        
                            break;
                        default:

                        
                    }
                    // amount = this.amount;
                } else {
                    amount = this.amount;
                }

                return Math.ceil(amount);
            },
            amountString: function () {
                var finalAmount = parseInt(this.finalAmount);

                return finalAmount.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
            }
        },
        methods: {
            getAddress: function () {
                var self = this;

                $.ajax({
                    url: '/getAddress/' + self.owner,
                    type: 'GET',
                    dataType: 'json'
                })
                .done(function(response) {
                    // console.log(response);
                    // customerParametor: {
                    //     ReceiverName: '',
                    //     ReceiverCellPhone: '',
                    //     ReceiverEmail: '',
                    //     ReceiverCity: '',
                    //     ReceiverPort: '',
                    //     ReceiverAddress: '',
                    //     remarks: '',
                    //     newMemberPassword: ''
                    // },
                    let shippingAddr = localStorage.getItem('shipping_address')

                    self.customerParametor.ReceiverName = response.fullName;
                    self.customerParametor.ReceiverCellPhone = response.cellPhone;
                    // self.customerParametor.ReceiverEmail = response.email;
                    self.customerParametor.ReceiverCity = response.city;
                    self.customerParametor.ReceiverPort = response.postcode;
                    self.customerParametor.ReceiverAddress = response.address;

                    // console.log(JSON.parse(shippingAddr))

                    if (shippingAddr) {
                        let shippingAddress = JSON.parse(shippingAddr)
                        self.customerParametorForShipping.ReceiverName = shippingAddress.ReceiverName;
                        self.customerParametorForShipping.ReceiverCellPhone = shippingAddress.ReceiverCellPhone;
                        self.customerParametorForShipping.ReceiverEmail = shippingAddress.ReceiverEmail;
                        self.customerParametorForShipping.ReceiverCity = shippingAddress.ReceiverCity;
                        self.customerParametorForShipping.ReceiverPort = shippingAddress.ReceiverPort;
                        self.customerParametorForShipping.ReceiverAddress = shippingAddress.ReceiverAddress;
                    }
                })
                .fail(function() {
                })
                .always(function() {
                });

            },
            getPoint: function () {
                var self = this;

                $.ajax({
                    url: '/checkout/getPoint',
                    type: 'GET',
                    dataType: 'json'
                })
                .done(function(response) {
                    self.point = response.data.point;
                    self.percentage = response.data.percentage;
                    self.owner = response.data.guid;
                    self.customerParametor.ReceiverEmail = response.data.email;

                    // console.log(response);
                    self.getAddress();
                    $('#point-input').attr('max', response.data.point);
                })
                .fail(function(error) {
                    var status = error.status;

                    if (status === 401) {
                        self.point = 0;
                        self.percentage = 0;
                        self.owner = 'guest';
                    }
                })
                .always(function() {
                });
            },
            createOrder: function () {
                var self = this;
                var emailRule = /^\w+((-\w+)|(\.\w+))*\@[A-Za-z0-9]+((\.|-)[A-Za-z0-9]+)*\.[A-Za-z]+$/;
                var method;
                // return console.log(this.usedCouponContent);

                if ((this.paymentMethod == 'cod') && (this.shippingMethod == 'cvs')) {
                    method = 'cvsCod';
                } else if ((this.shippingMethod == 'cvs') && (this.paymentMethod !== 'cod')) {
                    method = 'cvs';
                } else if (this.shippingMethod !== 'cvs') {
                    method = 'aoi';
                } else if (this.paymentMethod == 'cod') {
                    method = 'aoi';
                }


                if (this.customerParametor.taxId.length > 0) {
                    if (this.customerParametor.taxId.length !== 8) {
                        return this.showMessage('warning', '統一編號錯誤');
                    }
                }

                this.validateForm();

                // return

                // if (!Number.isInteger(parseInt(this.customerParametor.ReceiverCellPhone)) ||
                //     (this.customerParametor.ReceiverCellPhone.length < 10) ||
                //     (this.customerParametor.ReceiverCellPhone.length > 10)) {
                //     this.showMessage('warning', '請確認行動電話格式正確。');
                //     return;
                // }

                // return console.log(emailRule.test(this.customerParametor.ReceiverEmail));
                if (!emailRule.test(this.customerParametor.ReceiverEmail)) {
                    this.showMessage('warning', '請確認電子郵件格式正確。');
                    return;
                }

                // if (!this.isAllow) {
                //     this.showMessage('warning', '請確認運送資訊填寫是否完整。');
                //     return;
                // }

                if (this.coupon) {
                    axios.get(`/validate/coupon/${this.coupon}`)
                        .then(res => {
                            console.log(res)
                            this.useCoupon()
                        }).catch(err => {
                            let result = err.response

                            switch (result.status) {
                                case 454:
                                    alert('無效的優惠券代碼')
                                    break;
                                case 455:
                                    alert('非指定會員')
                                    break;
                                case 456:
                                    alert('優惠商品不在訂單內，優惠無法使用')
                                    break;
                                default:
                                    break;
                            }
                        })
                } else {
                    switch (method) {
                        case 'cvsCod':      // 超商取貨付款
                            this.cvsCod();
                            break;
                        case 'cvs':         // 超商純取貨
                            this.aoiMethod();
                            break;
                        case 'aoi':         //All in one
                            this.aoiMethod();
                            break;
                        default:

                    }
                }

                
            },
            aoiMethod: function () {
                // if ((this.paymentMethod === 'cod') || (this.paymentMethod === null)) {
                //     alert('請選擇付款方式');
                //     return;
                // }
                
                var self = this;
                var form = document.createElement("form");
                var _token = document.createElement("input");
                var ChoosePayment = document.createElement("input");
                var TotalAmount = document.createElement("input");
                var cartInfo = document.createElement("textArea");
                var pointUsage = document.createElement("input");
                var owner = document.createElement("input");
                var shippingMethod = document.createElement("input");
                var shippingCosts = document.createElement("input");
                var shippingTarget = document.createElement("textArea");
                var addNewMember = document.createElement("input");
                var password = document.createElement("input");
                var Temperature = document.createElement("input");
                var taxId = document.createElement("input");
                var receipt = document.createElement("input");
                var pointCount = document.createElement("input");
                var useUserInfo = document.createElement("input");
                var Remark = document.createElement("textArea");
                var usedCoupon = document.createElement("textArea");
                // ReceiverGender

                // 目前累計點數的倍率
                var pointMag = parseInt(this.percentage) / 100;
                var amountLessPoint = parseInt(this.amount) - parseInt(this.pointUsage);

                localStorage.setItem('shipping_addr', this.customerParametor.ReceiverAddress)

                form.id = "checkout-form";

                _token.setAttribute("type", "hidden");

                form.method = "POST";
                form.action = "/order-payment";

                _token.value = this.token;
                _token.name = "_token";
                form.appendChild(_token);

                pointCount.value = Math.ceil(pointMag * amountLessPoint);
                pointCount.name = "pointCount";
                form.appendChild(pointCount);

                taxId.value = this.customerParametor.taxId;
                taxId.name = "taxId";
                form.appendChild(taxId);

                receipt.value = this.customerParametor.receipt;
                receipt.name = "receipt";
                form.appendChild(receipt);

                useUserInfo.value = this.useUserInfo ? 'true' : 'false';
                useUserInfo.name = "useUserInfo";
                form.appendChild(useUserInfo);

                ChoosePayment.value = this.paymentMethod;
                ChoosePayment.name = "ChoosePayment";
                form.appendChild(ChoosePayment);

                Temperature.value = this.Temperature;
                Temperature.name = "Temperature";
                form.appendChild(Temperature);

                pointUsage.value = this.pointUsage;
                pointUsage.name = "pointUsage";
                form.appendChild(pointUsage);

                owner.value = this.owner;
                owner.name = "owner";
                form.appendChild(owner);

                // TotalAmount.value = (this.amount - this.pointUsage) + this.shippingCosts;
                TotalAmount.value = this.finalAmount;
                TotalAmount.name = "TotalAmount";
                form.appendChild(TotalAmount);

                cartInfo.value = JSON.stringify(this.cart);
                cartInfo.name = "cartInfo";
                form.appendChild(cartInfo);

                shippingMethod.value = this.shippingMethod;
                shippingMethod.name = "shippingMethod";
                form.appendChild(shippingMethod);

                shippingCosts.value = this.shippingCosts;
                shippingCosts.name = "shippingCosts";
                form.appendChild(shippingCosts);

                Remark.value = this.customerParametor.remarks;
                Remark.name = "Remark";
                form.appendChild(Remark);

                if (this.usedCouponContent) {
                    usedCoupon.value = JSON.stringify(this.usedCouponContent);
                    usedCoupon.name = "usedCoupon";
                    form.appendChild(usedCoupon);
                }

                if (this.shippingMethod === 'cvs') {
                    if (this.cvsParametor.MerchantTradeNo === null) {
                        alert('請先選擇取貨超商。');
                        return;
                    }

                    if (this.useUserInfo) {
                        shippingTarget.value = JSON.stringify({
                            MerchantTradeNo: this.cvsParametor.MerchantTradeNo,
                            LogisticsSubType: this.cvsParametor.LogisticsSubType,
                            CVSStoreID: this.cvsParametor.CVSStoreID,
                            CVSStoreName: this.cvsParametor.CVSStoreName,
                            CVSAddress: this.cvsParametor.CVSAddress,
                            CVSTelephone: this.cvsParametor.CVSTelephone,
                            ReceiverName: this.customerParametor.ReceiverName,
                            ReceiverCellPhone: this.customerParametor.ReceiverCellPhone,
                            ReceiverEmail: this.customerParametor.ReceiverEmail
                        });

                        console.log(1)
                    } else {
                        shippingTarget.value = JSON.stringify({
                            MerchantTradeNo: this.cvsParametor.MerchantTradeNo,
                            LogisticsSubType: this.cvsParametor.LogisticsSubType,
                            CVSStoreID: this.cvsParametor.CVSStoreID,
                            CVSStoreName: this.cvsParametor.CVSStoreName,
                            CVSAddress: this.cvsParametor.CVSAddress,
                            CVSTelephone: this.cvsParametor.CVSTelephone,
                            ReceiverName: this.customerParametorForShipping.ReceiverName,
                            ReceiverCellPhone: this.customerParametorForShipping.ReceiverCellPhone,
                            ReceiverEmail: this.customerParametorForShipping.ReceiverEmail
                        });
                        console.log(2)
                    }

                    
                    shippingTarget.name = "shippingTarget";
                    form.appendChild(shippingTarget);
                } else {

                    if (this.useUserInfo) {
                        shippingTarget.value = JSON.stringify({
                            ReceiverName: this.customerParametor.ReceiverName,
                            ReceiverCellPhone: this.customerParametor.ReceiverCellPhone,
                            ReceiverEmail: this.customerParametor.ReceiverEmail,
                            ReceiverCity: this.customerParametor.ReceiverCity,
                            ReceiverPort: this.customerParametor.ReceiverPort,
                            ReceiverAddress: this.customerParametor.ReceiverAddress,
                            ReceiverGender: this.customerParametorForShipping.ReceiverGender,
                            remarks: this.customerParametorForShipping.remarks,
                            receipt: this.customerParametorForShipping.receipt,
                        });
                        console.log(3)
                    } else {
                        shippingTarget.value = JSON.stringify({
                            ReceiverName: this.customerParametorForShipping.ReceiverName,
                            ReceiverCellPhone: this.customerParametorForShipping.ReceiverCellPhone,
                            ReceiverEmail: this.customerParametorForShipping.ReceiverEmail,
                            ReceiverCity: this.customerParametorForShipping.ReceiverCity,
                            ReceiverPort: this.customerParametorForShipping.ReceiverPort,
                            ReceiverAddress: this.customerParametorForShipping.ReceiverAddress,
                            ReceiverGender: this.customerParametorForShipping.ReceiverGender,
                            remarks: this.customerParametorForShipping.remarks,
                            receipt: this.customerParametorForShipping.receipt,
                        });
                        console.log(4)
                    }
                    
                    shippingTarget.name = "shippingTarget";
                    form.appendChild(shippingTarget);
                }

                addNewMember.value = this.addNewMember;
                addNewMember.name = "addNewMember";
                form.appendChild(addNewMember);

                password.value = this.customerParametor.newMemberPassword;
                password.name = "password";
                form.appendChild(password);

                document.body.appendChild(form);

                // 移除暫存的超商資訊
                localStorage.removeItem('logistic_cache');
                localStorage.setItem('shipping_address', JSON.stringify(this.customerParametorForShipping))
                // console.log(form)
                // console.log(shippingTarget.value)
                // return;
                

                form.submit();
                $('.loading-bar').fadeIn('100');
            },
            cvsCod: function () {
                var self = this;
                var form = document.createElement("form");
                var LogisticsSubType = document.createElement("input");
                var ReceiverName = document.createElement("input");
                var ReceiverCellPhone = document.createElement("input");
                var ReceiverEmail = document.createElement("input");
                var ChoosePayment = document.createElement("input");
                var CVSStoreID = document.createElement("input");
                var TotalAmount = document.createElement("input");
                var IsCollection = document.createElement("input");
                var cartInfo = document.createElement("textArea");
                var pointUsage = document.createElement("input");
                var shippingMethod = document.createElement("input");
                var shippingTarget = document.createElement("textArea");
                var owner = document.createElement("input");
                var shippingCosts = document.createElement("input");
                var _token = document.createElement("input");
                var addNewMember = document.createElement("input");
                var password = document.createElement("input");
                var Temperature = document.createElement("input");
                var taxId = document.createElement("input");
                var receipt = document.createElement("input");
                var pointCount = document.createElement("input");
                var Remark = document.createElement("textArea");
                var usedCoupon = document.createElement("textArea");

                // 目前累計點數的倍率
                var pointMag = parseInt(this.percentage) / 100;
                var amountLessPoint = parseInt(this.amount) - parseInt(this.pointUsage);

                if (this.amount > 4000) {
                    this.showMessage('warning', '超商取貨付款最高代收金額為4000元，請更新您的訂單。');
                    return;
                }

                form.id = "checkout-form";

                _token.setAttribute("type", "hidden");

                form.method = "POST";
                form.action = "/shop_option_reply";

                _token.value = this.token;
                _token.name = "_token";
                form.appendChild(_token);

                pointCount.value = Math.ceil(pointMag * amountLessPoint);
                pointCount.name = "pointCount";
                form.appendChild(pointCount);

                taxId.value = this.customerParametor.taxId;
                taxId.name = "taxId";
                form.appendChild(taxId);

                receipt.value = this.customerParametor.receipt;
                receipt.name = "receipt";
                form.appendChild(receipt);

                LogisticsSubType.value = this.cvsParametor.LogisticsSubType;
                LogisticsSubType.name = "LogisticsSubType";
                form.appendChild(LogisticsSubType);

                Temperature.value = this.Temperature;
                Temperature.name = "Temperature";
                form.appendChild(Temperature);

                IsCollection.value = 'Y';
                IsCollection.name = "IsCollection";
                form.appendChild(IsCollection);

                CVSStoreID.value = this.cvsParametor.CVSStoreID;
                CVSStoreID.name = "CVSStoreID";
                form.appendChild(CVSStoreID);

                ReceiverName.value = this.useUserInfo ? this.customerParametor.ReceiverName : this.customerParametorForShipping.ReceiverName;
                ReceiverName.name = "ReceiverName";
                form.appendChild(ReceiverName);

                ReceiverCellPhone.value = this.useUserInfo ? this.customerParametor.ReceiverCellPhone : this.customerParametorForShipping.ReceiverCellPhone;
                ReceiverCellPhone.name = "ReceiverCellPhone";
                form.appendChild(ReceiverCellPhone);

                ChoosePayment.value = this.paymentMethod;
                ChoosePayment.name = "ChoosePayment";
                form.appendChild(ChoosePayment);

                pointUsage.value = this.pointUsage;
                pointUsage.name = "pointUsage";
                form.appendChild(pointUsage);

                ReceiverEmail.value = this.useUserInfo ? this.customerParametor.ReceiverEmail : this.customerParametorForShipping.ReceiverEmail;
                ReceiverEmail.name = "ReceiverEmail";
                form.appendChild(ReceiverEmail);

                owner.value = this.owner;
                owner.name = "owner";
                form.appendChild(owner);

                TotalAmount.value = this.finalAmount;
                TotalAmount.name = "TotalAmount";
                form.appendChild(TotalAmount);

                shippingMethod.value = this.shippingMethod;
                shippingMethod.name = "shippingMethod";
                form.appendChild(shippingMethod);

                shippingCosts.value = this.shippingCosts;
                shippingCosts.name = "shippingCosts";
                form.appendChild(shippingCosts);

                cartInfo.value = JSON.stringify(this.cart);
                cartInfo.name = "cartInfo";
                form.appendChild(cartInfo);

                Remark.value = this.customerParametor.remarks;
                Remark.name = "Remark";
                form.appendChild(Remark);

                if (this.usedCouponContent) {
                    usedCoupon.value = JSON.stringify(this.usedCouponContent);
                    usedCoupon.name = "usedCoupon";
                    form.appendChild(usedCoupon);
                }

                if (this.cvsParametor.MerchantTradeNo === null) {
                    alert('請先選擇取貨超商。');
                    return;
                }

                shippingTarget.value = JSON.stringify({
                    MerchantTradeNo: this.cvsParametor.MerchantTradeNo,
                    LogisticsSubType: this.cvsParametor.LogisticsSubType,
                    CVSStoreID: this.cvsParametor.CVSStoreID,
                    CVSStoreName: this.cvsParametor.CVSStoreName,
                    CVSAddress: this.cvsParametor.CVSAddress,
                    CVSTelephone: this.cvsParametor.CVSTelephone,
                    ReceiverName: this.customerParametor.ReceiverName,
                    ReceiverCellPhone: this.customerParametor.ReceiverCellPhone,
                    ReceiverEmail: this.customerParametor.ReceiverEmail
                });
                shippingTarget.name = "shippingTarget";
                form.appendChild(shippingTarget);

                addNewMember.value = this.addNewMember;
                addNewMember.name = "addNewMember";
                form.appendChild(addNewMember);

                password.value = this.customerParametor.newMemberPassword;
                password.name = "password";
                form.appendChild(password);

                document.body.appendChild(form);
                // 移除暫存的超商資訊
                localStorage.removeItem('logistic_cache');
                // 訂單送出
                form.submit();
                $('.loading-bar').fadeIn('100');
            },
            changePointUse: function (action) {
                switch (action) {
                    case 'up':
                        if (this.pointUsage >= this.point) {
                            this.pointUsage = this.point;
                            return;
                        } else if (this.pointUsage < 0) {
                            this.pointUsage = 0;
                            return;
                        } else {
                            this.pointUsage = parseInt(this.pointUsage) + 1;
                        }

                        break;
                    case 'down':
                        if (this.pointUsage <= 0) {
                            this.pointUsage = 0;
                            return;
                        } else if (this.pointUsage > this.point) {
                            this.pointUsage = this.point;
                        } else {
                            this.pointUsage = parseInt(this.pointUsage) - 1;
                        }

                        break;
                    default:

                }
            },
            pointInputValid: function () {
                if (this.pointUsage > this.point) {
                    this.pointUsage = this.point;
                } else if(this.pointUsage < 0) {
                    this.pointUsage = 0;
                } else if (this.pointUsage == "") {
                    this.pointUsage = 0;
                }
            },
            validateForm: function () {
                var self = this;

                if (this.shippingMethod === 'cvs') {
                    if (this.formValidation.ReceiverName &&
                        this.formValidation.ReceiverCellPhone &&
                        this.customerParametor.ReceiverEmail ) {
                        this.isAllow = true;
                    } else {
                        this.isAllow = false;
                    }
                } else {
                    if (this.formValidation.ReceiverName &&
                        this.formValidation.ReceiverCellPhone &&
                        this.customerParametor.ReceiverEmail &&
                        this.customerParametor.ReceiverPort &&
                        this.customerParametor.ReceiverCity &&
                        this.customerParametor.ReceiverAddress ) {
                        this.isAllow = true;
                    } else {
                        this.isAllow = false;
                    }
                }
            },
            chooseCvs: function (shop) {
                var self = this;

                window.location.href = '/getCvsTarget?shop=' + shop;

                return;

                window.open('/getCvsTarget?shop=' + shop, 'cvsmap', 'width=1002,height=589');
                window.GetCvs = function (cvs) {
                    var shop;

                    switch (cvs.LogisticsSubType) {
                        case 'FAMIC2C':
                            shop = '全家店到店 - ';
                            break;
                        case 'UNIMARTC2C':
                            shop = '7-11 店到店 - ';
                            break;
                        case 'HILIFEC2C':
                            shop = '萊爾富店到店 - ';
                            break;
                        default:

                    }
                    self.cvsParametor.MerchantTradeNo = cvs.MerchantTradeNo;
                    self.cvsParametor.LogisticsSubType = cvs.LogisticsSubType;
                    self.cvsParametor.CVSStoreID = cvs.CVSStoreID;
                    self.cvsParametor.CVSStoreName = shop + cvs.CVSStoreName;
                    self.cvsParametor.CVSAddress = cvs.CVSAddress;
                    self.cvsParametor.CVSTelephone = cvs.CVSTelephone;
                }
            },
            typeCoupon: function () {
                this.isCouponFieldShow = !this.isCouponFieldShow;
            },
            useCoupon: function () {
                var self = this;
                var token = this.token;


                $.ajax({
                    url: '/coupon/get/' + this.coupon,
                    type: 'POST',
                    dataType: 'json',
                    beforeSend: function (xhr) {
                        xhr.setRequestHeader('X-CSRF-TOKEN', token);
                    }
                })
                .done(function(result) {
                    var isPublish = result.data.isPublish === 1 ? true : false;
                    var maximumAmount = result.data.maximumAmount;
                    var minimumAmount = result.data.minimumAmount;
                    var discountType = result.data.discountType;
                    var couponAmount = result.data.couponAmount;


                    if (!isPublish) {
                        self.showMessage('warning', '此優惠券尚未發佈。');
                        return;
                    }

                    self.usedCouponContent = {
                        discountType: self.isCouponUse,
                        couponAmount: couponAmount
                    }

                    if (maximumAmount || maximumAmount === "") {
                        if (self.amount > maximumAmount) {
                            self.showMessage('warning', '訂單金額已超出優惠券的限制金額。');
                            return;
                        }
                    }

                    if (minimumAmount || minimumAmount === "") {
                        if (self.amount < minimumAmount) {
                            self.showMessage('warning', '訂單金額小於優惠券的最低使用金額。');
                            return;
                        }
                    }

                    self.isCouponUse = true;
                    self.discountType = discountType;
                    self.couponAmount = couponAmount;

                    self.showMessage('success', '優惠券使用成功');

                    self.$nextTick(() => {
                        self.aoiMethod()
                    })
                })
                .fail(function(xhr) {
                    console.log(xhr.status);
                    if (xhr.status === 404) {
                        self.showMessage('error', '此優惠券無效。');
                    }
                    // console.log("error");
                })
                .always(function() {
                    // console.log("complete");
                });

            },
            showMessage: function (type, string) {
                toastr[type](string);
            }
        }
    }
</script>
