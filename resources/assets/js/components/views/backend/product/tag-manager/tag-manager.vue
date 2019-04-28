<template>
    <div class="row">
        <div class="col-md-12">
            <el-form label-position="top" label-width="80px">
                <el-form-item :label="item.title" v-for="(item, index) in tagGroupKeys" :key="index">
                    <el-input style="display: none" v-model="fakeInput"></el-input>
                    <el-tag
                        :key="tag"
                        v-for="tag in tagGroup[item.key]"
                        closable
                        :disable-transitions="false"
                        @close="handleClose(tagGroup[item.key], tag)">
                        {{tag}}
                    </el-tag>
                    <el-input
                        class="input-new-tag"
                        v-if="inputVisible[item.key]"
                        v-model="inputValue[item.key]"
                        ref="saveTagInput"
                        size="small"
                        @keyup.enter.native="handleInputConfirm(tagGroup[item.key], item.key)"
                        @blur="handleInputConfirm(tagGroup[item.key], item.key)"
                        >
                    </el-input>
                    <el-button v-else class="button-new-tag" size="small" @click="showInput(item.key)">+ 新增標籤</el-button>
                </el-form-item>
                <el-form-item>
                    <el-button type="primary" @click="onSubmit">儲存</el-button>
                    <el-button>取消</el-button>
                </el-form-item>
            </el-form>
        </div>
    </div>
</template>

<script>
    import ElementUI from 'element-ui';
    import 'element-ui/lib/theme-chalk/index.css';
    import lang from 'element-ui/lib/locale/lang/zh-TW'
    import locale from 'element-ui/lib/locale'  

    Vue.use(ElementUI);
    locale.use(lang)

    export default {
        mounted () {
            $('.loading-bar').hide()
        },
        props: ['tagtype'],
        data () {

            switch (this.tagtype) {
                case 'tag':
                    return {
                        tagGroup: {
                            brand: [],
                            size: [],
                            trip: [],
                            price: [],
                            material: []
                        },
                        inputVisible: {
                            brand: false,
                            size: false,
                            trip: false,
                            price: false,
                            material: false
                        },
                        inputValue: {
                            brand: null,
                            size: null,
                            trip: null,
                            price: null,
                            material: null
                        },
                        fakeInput: null
                    }
                    break;
                case 'bag_tag':
                    return {
                        tagGroup: {
                            brand: [],
                            type: [],
                            price: [],
                        },
                        inputVisible: {
                            brand: false,
                            type: false,
                            price: false,
                        },
                        inputValue: {
                            brand: null,
                            type: null,
                            price: null,
                        },
                        fakeInput: null
                    }
                    break;
                case 'fitting_tag':
                    return {
                        tagGroup: {
                            categories: []
                        },
                        inputVisible: {
                            categories: false
                        },
                        inputValue: {
                            categories: null
                        },
                        fakeInput: null
                    }
                    break;
                default:
                    break;
            }
        },
        computed: {
            tagGroupKeys() {
                let keys = Object.keys(this.tagGroup)

                return keys.map(elm => {
                    let label

                    switch (elm) {
                        case 'brand':
                            label = '品牌 Brand'
                            break;
                        case 'size':
                            label = '尺寸 Size'
                            break;
                        case 'trip':
                            label = '旅程 Trip'
                            break;
                        case 'price':
                            label = '價格 Price'
                            break;
                        case 'material':
                            label = '材質 Material'
                            break;
                        case 'type':
                            label = '類型 Types'
                            break;
                        case 'categories': 
                            label = '配件類別 Categories'
                            break;
                        default:
                            break;
                    }

                    return {
                        key: elm,
                        title: label
                    }
                })
            }
        },
        created() {
            this.getTagData()
        },
        methods: {
            handleClose(group, tag) {
                group.splice(group.indexOf(tag), 1);
            },
            showInput(item) {
                this.inputVisible[item] = true;
                this.$nextTick(_ => {
                    console.log(this.$refs)
                    this.$refs.saveTagInput[0].$refs.input.focus();
                });
            },
            handleInputConfirm(group, item) {
                let inputValue = this.inputValue[item];

                if (inputValue) {
                    group.push(inputValue);
                }
                this.inputVisible[item] = false;
                this.inputValue[item] = '';
            },
            getTagData() {
                axios.get(`/admin/tag/get/${this.tagtype}`)
                    .then(res => {
                        this.tagGroup = res.data
                    })
            },
            onSubmit() {
                console.log(JSON.stringify(this.tagGroup))

                axios.post('/admin/tag/create', {
                    type: this.tagtype,
                    data: JSON.stringify(this.tagGroup)
                })
            }
        }
    }
</script>
<style>
    .el-tag + .el-tag {
        margin-left: 10px;
    }
    .button-new-tag {
        margin-left: 10px;
        height: 32px;
        line-height: 30px;
        padding-top: 0;
        padding-bottom: 0;
    }
    .input-new-tag {
        width: 90px;
        margin-left: 10px;
        vertical-align: bottom;
    }
</style>