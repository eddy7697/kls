<template>
    <div class="row" v-if="isLoaded">
        <div class="col-md-9">
            <ckeditor
                class="ch-product-description"
                :config="ckConfig"
                v-model="pageContent.content">
            </ckeditor>
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
                    <button class="btn btn-success" type="button" name="button" @click="saveNotice">儲存頁面</button>
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
                isNoticeExist: false,
                pageContent: {
                    type: 'ECNOTICE',
                    content: null,
                    locale: 'zh-tw'
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
            this.getNotice();
            
            $('.loading-bar').fadeOut('100')
        },
        computed: {
        },
        methods: {
            saveNotice: function () {
                var self = this
                var apiUrl = this.isNoticeExist ? '/admin/notice/update' : '/admin/notice/create'

                $('.loading-bar').fadeIn('100')

                axios.post(apiUrl, this.pageContent)
                    .then(res => {
                        console.log(res)
                        self.getNotice()
                    }).catch(err => {
                        console.log(err)
                    }).then(() => {
                        $('.loading-bar').fadeOut('100')
                    })
            },
            getNotice: function (guid) {
                var self = this;

                axios.get('/admin/notice/get')
                    .then(res => {
                        var result = res.data
                        console.log(res)
                        if (res) {
                            self.isNoticeExist = true
                            self.pageContent.type = result.type
                            self.pageContent.content = result.content
                            self.pageContent.locale = result.locale
                        } else {
                            self.isNoticeExist = false
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
