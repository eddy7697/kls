<template>
    <div class="row" v-if="isLoaded">
        <div class="col-md-9">

            <ul class="nav nav-tabs">
                <li class="active"><a data-toggle="tab" href="#home">拉鍊式硬殼箱</a></li>
                <li><a data-toggle="tab" href="#menu1">鋁框式硬殼箱</a></li>
                <li><a data-toggle="tab" href="#menu2">軟殼布面箱</a></li>
                <li><a data-toggle="tab" href="#menu3">品牌特殊箱</a></li>
            </ul>

            <div class="tab-content">
                <div id="home" class="tab-pane fade in active">
                    <img style="max-width: 50%; margin: 10px;" :src="otherContent.service.featureImage" alt="">
                    <button style="margin: 10px;" class="btn btn-primary" @click="editImage('service')">編輯圖片</button>
                    <ckeditor
                        class="ch-product-description"
                        :config="ckConfig"
                        v-model="otherContent.service.content">
                    </ckeditor>
                </div>
                <div id="menu1" class="tab-pane fade">
                    <img style="max-width: 50%; margin: 10px;" :src="otherContent.shipping.featureImage" alt="">
                    <button style="margin: 10px;" class="btn btn-primary" @click="editImage('shipping')">編輯圖片</button>
                    <ckeditor
                        class="ch-product-description"
                        :config="ckConfig"
                        v-model="otherContent.shipping.content">
                    </ckeditor>
                </div>
                <div id="menu2" class="tab-pane fade">
                    <img style="max-width: 50%; margin: 10px;" :src="otherContent.return.featureImage" alt="">
                    <button style="margin: 10px;" class="btn btn-primary" @click="editImage('return')">編輯圖片</button>
                    <ckeditor
                        class="ch-product-description"
                        :config="ckConfig"
                        v-model="otherContent.return.content">
                    </ckeditor>
                </div>
                <div id="menu3" class="tab-pane fade">
                    <img style="max-width: 50%; margin: 10px;" :src="otherContent.antiFraud.featureImage" alt="">
                    <button style="margin: 10px;" class="btn btn-primary" @click="editImage('antiFraud')">編輯圖片</button>
                    <ckeditor
                        class="ch-product-description"
                        :config="ckConfig"
                        v-model="otherContent.antiFraud.content">
                    </ckeditor>
                </div>
            </div>
            <!-- <ckeditor
                class="ch-product-description"
                :config="ckConfig"
                v-model="pageContent.content">
            </ckeditor> -->
        </div>

        <div class="col-md-3">
            <div class="panel panel-default">
    			<div class="panel-heading">
    				<h3 class="panel-title">
    					儲存頁面區塊
    				</h3>
    			</div>
    			<!-- <div class="panel-body">
                    <select class="form-control" v-model="pageContent.locale">
                        <option value="en">英文</option>
                        <option value="zh-TW">繁體中文</option>
                    </select>
    			</div> -->
                <div class="panel-footer">
                    <button class="btn btn-success" type="button" name="button" @click="saveOther">儲存頁面</button>
                </div>
    		</div>
        </div>

    </div>
</template>

<script>
    import Ckeditor from 'vue-ckeditor2';

    export default {
        components: {
            Ckeditor
        },
        data() {
            return {
                isLoaded: false,
                isEdit: false,
                guid: $('#row-guid').val(),
                isOtherExist: false,
                pageContent: {
                    type: 'OTHER',
                    content: null,
                    locale: 'zh-tw'
                },
                otherContent: {
                    service: {
                        featureImage: null,
                        content: null
                    },
                    shipping: {
                        featureImage: null,
                        content: null
                    },
                    return: {
                        featureImage: null,
                        content: null
                    },
                    antiFraud: {
                        featureImage: null,
                        content: null
                    }
                },
                ckConfig: {
                    height: 300,
                    allowedContent: true,
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=' + $('meta[name="csrf-token"]').attr('content'),
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=' + $('meta[name="csrf-token"]').attr('content')
                },
                token: $('meta[name="csrf-token"]').attr('content'),
            }
        },
        created: function () {
            this.getOther();
            
            $('.loading-bar').fadeOut('100')
        },
        computed: {
        },
        watch: {
            otherContent: {
                handler(otherContent, oldVal) {
                    this.pageContent.content = JSON.stringify(otherContent)
                },
                deep: true
            }
        },
        methods: {
            saveOther: function () {
                var self = this
                var apiUrl = this.isOtherExist ? '/admin/other/update' : '/admin/other/create'

                $('.loading-bar').fadeIn('100')

                axios.post(apiUrl, this.pageContent)
                    .then(res => {
                        console.log(res)
                        self.getOther()
                        self.showMessage('success', '編輯成功')
                    }).catch(err => {
                        console.log(err)
                    }).then(() => {
                        $('.loading-bar').fadeOut('100')
                    })
            },
            editImage(type) {
                var self = this;

                window.open('/laravel-filemanager' + '?type=Images', 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    self.otherContent[type].featureImage = file_path;
                };
            },
            getOther: function (guid) {
                var self = this;

                axios.get('/admin/other/get')
                    .then(res => {
                        var result = res.data
                        console.log(res)
                        if (result) {
                            self.isOtherExist = true
                            self.pageContent.type = result.type
                            self.otherContent = JSON.parse(result.content)
                            self.pageContent.locale = result.locale
                        } else {
                            self.isOtherExist = false
                        }
                    }).catch(err => {

                    }).then(() => {
                        self.isLoaded = true;
                    })

            },
            showMessage: function (type, string) {
                toastr[type](string);
            }
        }
    }
</script>
