<template>
    <div class="row">
        <div class="col-md-8">
            <el-form :model="ruleForm" :rules="rules" ref="ruleForm" label-width="100px" class="demo-ruleForm">
                <el-form-item label="見證人稱謂" prop="locale">
                    <el-input v-model="ruleForm.locale"></el-input>
                </el-form-item>
                <!-- <el-form-item label="文章日期" prop="customField7">
                    <el-date-picker
                        v-model="ruleForm.customField7"
                        type="date"
                        placeholder="選擇日期">
                    </el-date-picker>
                </el-form-item> -->
                <!-- <el-form-item label="性別" prop="customField6">
                    <el-radio v-model="ruleForm.customField6" label="male" border>
                        男性
                    </el-radio>
                    <el-radio v-model="ruleForm.customField6" label="female" border>
                        女性
                    </el-radio>
                </el-form-item> -->
                <!-- <el-form-item label="年紀" prop="customField2">
                    <el-input v-model="ruleForm.customField2"></el-input>
                </el-form-item> -->
                <!-- <el-form-item label="職稱" prop="customField3">
                    <el-input v-model="ruleForm.customField3"></el-input>
                </el-form-item> -->
                <!-- <el-form-item label="加入年數" prop="customField5">
                    <el-input v-model="ruleForm.customField5"></el-input>
                </el-form-item> -->
                <!-- <el-form-item label="客戶背景" prop="customField1">
                    <el-input type="textarea" v-model="ruleForm.customField1"></el-input>
                </el-form-item> -->
                <!-- <el-form-item label="代表圖片" prop="customField4">
                    <el-button v-if="!ruleForm.customField4" @click="addImage()" circle type="primary" icon="el-icon-plus"></el-button>
                    <img v-else @click="addImage()" :src="ruleForm.customField4" alt="" style="max-width:100%">
                </el-form-item> -->
                <el-form-item label="見證內容" prop="content">
                    <!-- <el-input type="textarea" v-model="ruleForm.content"></el-input> -->
                    <ckeditor
                        class="ch-product-description"
                        :config="ckConfig"
                        v-model="ruleForm.content">
                    </ckeditor>
                </el-form-item>
                <el-form-item label="排序編碼" prop="sortIndex">
                    <el-input type="text" v-model="ruleForm.sortIndex"></el-input>
                </el-form-item>
                <!-- <el-form-item label="顯示於首頁" prop="sortIndex">
                    <el-switch
                        v-model="ruleForm.customField8"
                        active-color="#13ce66"
                        inactive-color="#ff4949"
                        active-value="active"
                        inactive-value="inactive">
                    </el-switch>
                </el-form-item> -->
                <el-form-item>
                    <el-button type="primary" @click="submitForm('ruleForm')">
                        <span v-if="mode == 'edit'">儲存</span>
                        <span v-else>立即建立</span>
                    </el-button>
                    <el-button v-if="mode == 'edit'" type="warning" @click="deleteData(id)">刪除文章</el-button>
                    <el-button @click="goList">回列表</el-button>
                    <el-button @click="resetForm('ruleForm')">重置</el-button>
                </el-form-item>
            </el-form>
        </div>
    </div>
</template>

<script>
    import Ckeditor from 'vue-ckeditor2';
    import ElementUI from 'element-ui';
    import 'element-ui/lib/theme-chalk/index.css';
    import lang from 'element-ui/lib/locale/lang/zh-TW'
    import locale from 'element-ui/lib/locale'    

    Vue.use(ElementUI);
    locale.use(lang)
    
    export default {
        mounted () {
            $('.loading-bar').hide()
            console.log('Component mounted.')
        },
        props: ['mode', 'id'],
        components: {
            Ckeditor,
        },
        data () {
            return {
                ruleForm: {
                    type: 'witness',
                    locale: null,
                    customField1: null,
                    customField2: null,
                    customField3: null,
                    customField4: null,
                    customField5: null,
                    customField6: null,
                    customField7: null,
                    customField8: 'inactive',
                    content: null,
                    sortIndex: null
                },
                rules: {
                    locale: [
                        { required: true, message: '請輸入見證人', trigger: 'blur' }
                    ],
                    content: [
                        { required: true, message: '請填寫見證內容', trigger: 'blur' }
                    ],
                    customField1: [
                        { required: true, message: '請輸入客戶背景', trigger: 'blur' }
                    ],
                    customField2: [
                        { required: true, message: '請填寫年紀', trigger: 'blur' }
                    ],
                    customField3: [
                        { required: true, message: '請輸入職稱', trigger: 'blur' }
                    ],
                    customField4: [
                        { required: true, message: '請設定代表圖片', trigger: 'blur' }
                    ],
                    customField5: [
                        { required: true, message: '請設定加入年分', trigger: 'blur' }
                    ],
                    customField6: [
                        { required: true, message: '請設定性別', trigger: 'blur' }
                    ],
                    customField7: [
                        { required: true, message: '請設定文章日期', trigger: 'blur' }
                    ],
                },
                ckConfig: {
                    height: 300,
                    allowedContent: true,
                    filebrowserImageBrowseUrl: '/laravel-filemanager?type=Images',
                    filebrowserImageUploadUrl: '/laravel-filemanager/upload?type=Images&_token=' + $('meta[name="csrf-token"]').attr('content'),
                    filebrowserBrowseUrl: '/laravel-filemanager?type=Files',
                    filebrowserUploadUrl: '/laravel-filemanager/upload?type=Files&_token=' + $('meta[name="csrf-token"]').attr('content')
                },
            }
        },
        created() {
            if (this.mode == 'edit') {
                this.getData()
            }
        },
        methods: {
            submitForm(formName) {
                this.$refs[formName].validate((valid) => {
                if (valid) {
                    this.saveCustomField()
                } else {
                    console.log('error submit!!');
                    return false;
                }
                });
            },
            saveCustomField() {
                let url = this.mode == 'edit' ? `/admin/custom/update/${this.id}` : '/admin/custom/add'

                axios.post(url, this.ruleForm)
                    .then(res => {
                        this.$message.success('儲存成功')
                        setTimeout(() => {
                            window.location.href = '/cyberholic-system/witness/list'
                        }, 1000);
                    })
            },
            getData() {
                axios.get(`/admin/custom/getByid/${this.id}`)
                    .then(res => {
                        delete res.data.id
                        delete res.data.updated_at
                        delete res.data.created_at

                        this.ruleForm = res.data
                    })
            },
            addImage() {
                let self = this

                window.open('/laravel-filemanager' + '?type=Images', 'FileManager', 'width=900,height=600');
                window.SetUrl = function (url, file_path) {
                    self.ruleForm.customField4 = file_path
                };
            },
            goList() {
                window.location.href = '/cyberholic-system/witness/list'
            },
            deleteData(id) {
                this.$confirm('此操作將永久刪除該筆資料, 是否繼續?', '提示', {
                    confirmButtonText: '確定',
                    cancelButtonText: '取消',
                    type: 'warning'
                }).then(() => {
                    axios.post(`/admin/custom/delete/${id}`)
                        .then(res => {
                            this.$message({
                                type: 'success',
                                message: '刪除成功!'
                            });

                            window.location.href = '/cyberholic-system/witness/list'
                        })
                }).catch(() => {
                    this.$message({
                        type: 'info',
                        message: '已取消刪除'
                    });          
                });
            },
            resetForm(formName) {
                this.$refs[formName].resetFields();
            }
        }
    }
</script>

<style lang="scss">
.el-form-item__error {
    position: relative;
}
.submit-trigger {
    position: absolute;
    right: 21px;
    top: 7px;
}
.el-form-item {
    padding-bottom: 5px;
}
</style>
